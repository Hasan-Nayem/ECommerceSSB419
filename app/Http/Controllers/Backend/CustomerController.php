<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Division;
use App\Models\District;
use File;
use Image;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $customers = User::get()->where('role',3);
        return view('backend.pages.customer.manage', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $divisions = Division::orderBy('priority_no', 'asc')->get();
        $districts = District::orderBy('name', 'asc')->get();
        return view('backend.pages.customer.create',compact('divisions', 'districts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|max:32|min:8',
            'phone' => 'required',
        ];
        $custom_messages = [
            'password.min' => 'For Security Reason, your password cant be less than 8 Carrecters',
            'password.max' => 'Your password cant be more than 32 Carrecters',
        ];
        $this -> validate($request,$validation,$custom_messages);
        $Customer = new User();
        if($request->password == $request->password_confirmation){
            $Customer -> name = $request->name;
            $Customer -> email = $request->email;
            $Customer -> phone = $request->phone;
            $Customer -> address = $request->address;
            $Customer -> division = $request->division;
            $Customer -> district = $request->district;
            $Customer -> zipcode = $request->zcode;

            $hashedpass = Hash::make($request->password);
            $Customer -> password = $hashedpass;
            if(!is_null($request->image)){
                $file = $request->file('image');
                $img_name = time() . '.' .$file->getClientOriginalExtension();
                $location = public_path('backend/assets/images/users/' . $img_name);
                Image::make($file)->resize(300,300,function($constraint){
                    $constraint -> aspectRatio();
                })-> save($location);
                $Customer->image = $img_name;
            }
        }
       
        $Customer->save();

        $notification = array(
            'alert-type'    => 'success',
            'message'       => 'Customer Info Added Successfully'
        );

        return redirect()->route('customer.manage')->with($notification);
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = User::find($id);
        $divisions = Division::orderBy('priority_no', 'asc')->get();
        $districts = District::orderBy('name', 'asc')->get();
        return view('backend.pages.customer.edit',compact('customer','divisions','districts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = [
            'name' => 'required',
            'email' => 'required',
            // 'password' => 'required|max:32|min:8',
            'phone' => 'required',
        ];
        $custom_messages = [
            // 'password.min' => 'For Security Reason, your password cant be less than 8 Carrecters',
            // 'password.max' => 'Your password cant be more than 32 Carrecters',
        ];
        $this -> validate($request,$validation,$custom_messages);
        $Customer = User::find($id);
        if($request->password == $request->password_confirmation){
            $Customer -> name = $request->name;
            $Customer -> email = $request->email;
            $Customer -> phone = $request->phone;
            $Customer -> address = $request->address;
            $Customer -> division = $request->division;
            $Customer -> district = $request->district;
            $Customer -> zipcode = $request->zcode;

            $hashedpass = Hash::make($request->password);
            $Customer -> password = $hashedpass;
            if(!is_null($request->image)){
                //Delete Existing File
                if ( File::exists('backend/assets/images/brands/' . $Customer->image ) ){
                    File::delete('backend/assets/images/brands/' . $Customer->image);
                }
                //Save New Image
                $file = $request->file('image');
                $img_name = time() . '.' .$file->getClientOriginalExtension();
                $location = public_path('backend/assets/images/users/' . $img_name);

                //Resize Image 
                // Image::make($file)->resize(300,300,function($constraint){
                //     $constraint -> aspectRatio();
                // })-> save($location);

                Image::make($file)->save($location);
                $Customer->image = $img_name;
            }
        }
       
        $Customer->save();

        $notification = array(
            'alert-type'    => 'info',
            'message'       => 'Customer Info Updated Successfully'
        );

        return redirect()->route('customer.manage')->with($notification);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Customer = User::find($id);
        //Delete Existing File
        if ( File::exists('backend/assets/images/brands/' . $Customer->image ) ){
            File::delete('backend/assets/images/brands/' . $Customer->image);
        }
        $Customer->delete();
        $notification = array(
            'alert-type'    => 'warning',
            'message'       => 'Customer Deleted Successfully'
        );

        return redirect()->route('customer.manage')->with($notification);
    }
}
