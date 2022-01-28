<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class RegisterController extends Controller
{
    public function register()
    {
        $register = new Registration();
        $url = url('/register');
        $title = "Customer Registration";
        $btn_title = "Register";
        $data = compact('register', 'url', 'title', 'btn_title');
        return view('register')->with($data);
    }
    //insert data in db
    public function insert(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all);

        $register = new Registration;
        $register->name = $request['name'];
        $register->email = $request['email'];
        $register->contact = $request['contact'];
        $register->address = $request['address'];
        $register->qualification = $request['qualification'];
        $register->dob = $request['dob'];
        $register->gender = $request['gender'];
        //$register->password = md5($request['password']);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required',
            'address' => 'required',
            'qualification' => 'required',
            'dob' => 'required',
        ]);
        $register->save();
        return redirect('view');
    }
    //select data from db
    public function view()
    {
        $register = Registration::all(); //getting all data
        // echo "<pre>";
        // print_r($register);
        $data = compact('register'); //making an array
        return view('view')->with($data);
    }
    //delete data from db
    public function delete($id)
    {
        // echo $id;
        Registration::find($id)->delete();
        return redirect()->back();
    }
    //edit data
    public function edit($id)
    {
        $register = Registration::find($id);
        if (is_null($register)) {
            return redirect('view');
        } else {
            $url = url('/view/update') . "/" . $id;
            $title = "Update Customer";
            $btn_title = "Update";
            $data = compact('register', 'url', 'title', 'btn_title');
            return view('register')->with($data);
        }
    }

    //update data
    public function update($id, Request $request)
    {
        $register = Registration::find($id);
        $register->name = $request['name'];
        $register->email = $request['email'];
        $register->contact = $request['contact'];
        $register->address = $request['address'];
        $register->qualification = $request['qualification'];
        $register->dob = $request['dob'];
        $register->gender = $request['gender'];
        $register->save();
        return redirect('view');
    }
}
