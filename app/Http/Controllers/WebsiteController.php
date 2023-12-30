<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Webdata; 



class WebsiteController extends Controller
{
    



    public function form(Request $request)
    {
        
        if ($request->hasFile('image')) {
            $dat1a = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('logoimages'), $dat1a );
           
            if ($request->hasFile('slide')) {
                $dat2a = time() . '.' . $request->file('slide')->getClientOriginalExtension();
                $request->file('slide')->move(public_path('logoslide'), $dat2a);

        $data = new Webdata;
        $data->header = $request->header;
        $data->image = $dat1a;
        $data->slide = $dat2a;
        $data->save();
        return redirect('admin/formview');
            }
    }else{
        return redirect()->back();

    }
    }

    public function edit($id)
    {        
        $editweb = Webdata::find($id);
        return view('admin/formedit',compact('editweb'));
    } 
   

    public function update(Request $request)
    {        
        $data = Webdata::find($request->id);
        $data->header = $request->header;
      
        if ($request->hasFile('image')) {
            $dat1a = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('logoimages'), $dat1a);
            $data->image = $dat1a;

            if ($request->hasFile('slide')) {
                $dat2a = time() . '.' . $request->slide->getClientOriginalExtension();
                $request->slide->move(public_path('logoslide'), $dat2a);
                $data->slide = $dat2a;
        }
            
        }
        $data->save();
        return redirect('admin/formview');

    
    }
}