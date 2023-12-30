<?php

namespace App\Http\Controllers;
use App\Models\slider; 
use App\Models\logo; 
use App\Models\Service; 
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function logo(Request $request)
    {
        
        if ($request->hasFile('images')) {
            $dat1a = time() . '.' . $request->images->getClientOriginalExtension();
            $request->images->move(public_path('logoimages'), $dat1a );
           
         

        $data = new logo;
    
        $data->images = $dat1a;
    
        $data->save();
        return redirect('admin/logoview');
            
    }else{
        return redirect()->back();

    }
    }

    public function logoedit($id)
    {        
        $editweb = logo::find($id);
        return view('admin/logoedit',compact('editweb'));
    } 


    public function logoupdate(Request $request)
    {        
        $data = logo::find($request->id);
    
      
        if ($request->hasFile('images')) {
            $dat1a = time() . '.' . $request->images->getClientOriginalExtension();
            $request->images->move(public_path('logoimages'), $dat1a);
            $data->images = $dat1a;

         
        }
        $data->save();
        return redirect('admin/logoview');

    
    }





    public function slider(Request $request)
    {
        
        if ($request->hasFile('images')) {
            $dat2a = time() . '.' . $request->images->getClientOriginalExtension();
            $request->images->move(public_path('sliderimages'), $dat2a );
         
        $data = new slider;
        $data->Contant = $request->Contant;
        $data->images = $dat2a;
    
        $data->save();
        return redirect('admin/sliderview');
            
     }else{
        return redirect()->back();

     }
    }

    public function slideredit($id)
    {        
        $editweb = slider::find($id);
        return view('admin/slideredit',compact('editweb'));
    } 


    public function sliderupdate(Request $request)
    {        
        $data = slider::find($request->id);
        $data->Contant = $request->Contant;
      
        if ($request->hasFile('images')) {
            $dat2a = time() . '.' . $request->images->getClientOriginalExtension();
            $request->images->move(public_path('sliderimages'), $dat2a);
            $data->images = $dat2a;

         
        }
        $data->save();
        return redirect('admin/sliderview');

    
    }


// service part Start

public function service(Request $request){
    $data = new Service;
    $data->Icon = $request->Icon;
    $data->heading = $request->heading;
    $data->Subheading = $request->Subheading;
    $data->save();
    return redirect('admin/Servicesview');
}




public function servicesedit($id)
{        
    $editser = Service::find($id);
    return view('admin.servicesedit', compact('editser'));
}


public function Serviceupdate(Request $request)
    {        
        $data = service::find($request->id);
        $data->Icon = $request->Icon;
        $data->heading = $request->heading;
        $data->Subheading = $request->Subheading;
        $data->save();
        return redirect('admin/Servicesview');
    }



    
    public function deleteService($id)
    {
        $deleteService = service::find($id)->delete();
        return redirect()->back();
    }
// service part End

  
  



   






    


     
   



}
