<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{

   



    public function user(Request $request)
    {

        $dat1a = time() . '.' . $request->images->getClientOriginalExtension();
        $request->images->move(public_path('cardimages'), $dat1a);
        


        // Your code to store a new customer based on the submitted form data
        $data = new Product;
        $data->name = $request->name;
        $data->price = $request->price;
        $data->Quality = $request->Quality;
        $data->images = $dat1a;

        
        $data->save();
      
        return redirect('admin/productview');

      
      }




    public function deleteproduct($id)
    {
        $delete = Product::find($id)->delete();
     
    
        return redirect()->back();
    }






    public function Productupdateq($id)
    {
        $editweb = Product::find($id);
        return view('admin/Productedit',compact('editweb'));
    }






    public function Productupdate(Request $request)
    {        
        $data = Product::find($request->id);
        $data->name = $request->name;
        $data->price = $request->price;
        $data->Quality = $request->Quality;
      
        if ($request->hasFile('images')) {
            $dat1a = time() . '.' . $request->images->getClientOriginalExtension();
            $request->images->move(public_path('cardimages'), $dat1a);
            $data->images = $dat1a;

         
        }
        $data->save();
        return redirect('admin/productview');

    
    }

}
