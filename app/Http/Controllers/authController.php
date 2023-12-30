<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\Customer;
use Hash; 
use Auth; 


class authController extends Controller
{
  


    public function singup(Request $request)
    {    
        $data=new user();

        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
       
        $data->save();

        return redirect('admin/login');
    }

    public function user(Request $request)
    {
        $dat1a = time() . '.' . $request->img->getClientOriginalExtension();
        $request->img->move(public_path('uploads'), $dat1a);

        // Your code to store a new customer based on the submitted form data
        $data = new Customer;
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->Username = $request->Username;
        $data->email = $request->email;
        $data->password =$request->Password;
        $data->Confirm_Password= $request->Confirm_Password;
        $data->Country = $request->country;
        $data->img = $dat1a;
        $data->Update = 'Update';
        $data->delete = 'delete';
    

      
         
         
        
        $data->save();
      
        return redirect('admin/userview');



    
    }
    public function delete($id)
    {
        $delete = Customer::find($id)->delete();
     
    
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        DB::table('Customer')->where('id',$id)->update([
             'id' =>$request->id,
            'name' => $request->name,
            'phone' => $request->phone,
            'Username' =>$request->Username,
            'email' =>$request->email,
            'Password' =>$request->Password,
            'Confirm_Password' =>$request->Confirm_Password,
            'country' =>$request->country,
            'img' =>$request->img,
        ]);
        return redirect(route('index'))->with('status','student update !!');
    }


    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('admin/home');
        }

        return redirect()->back()->withErrors(['login_error' => 'Invalid credentials']);
    }


   
  
}
