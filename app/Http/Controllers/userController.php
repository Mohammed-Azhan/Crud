<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function Create(Request $req)
    {
        $success = $req->validate([
            'first_name' => 'required|max:40',
            'last_name' => 'required|max:30',
            'company' => 'required|max:255',
            'phone' => 'required|max:10|min:10',
            'url' => 'required|max:255',
            'email' => 'required|email|max:100'
        ]);

        $create = new User;
        $create->uuid = Str::uuid();
        $create->first_name = $req->first_name;
        $create->last_name = $req->last_name;
        $create->company = $req->company;
        $create->phone = $req->phone;
        $create->url = $req->url;
        $create->email = $req->email;
        $create->save();

        if ($create) {
            return back()->with('success', 'User Created');
        } else {
            return back()->with('failure', 'Please try again later');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

     public function Display()
    {
        $getData = User::all();
        return view('Users', compact('getData'));
    }

    public function Edit(string $uuid)
    {
        $getData = User::where('uuid', $uuid)->first();
        return view('Update', compact('getData'));
    }

    /**
     * Show the form for editing the specified resource.
     */
 
    /**
     * Update the specified resource in storage.
     */
    public function Update(Request $request, $id)
    {
        $success = $request->validate([
            'first_name' => 'required|max:40',
            'last_name' => 'required|max:30',
            'company' => 'required|max:255',
            'phone' => 'required|max:10|min:10',
            'url' => 'required|max:255',
            'email' => 'required|email|max:100'
        ]);

        $updateUser = User::find($id);
        $updatedUser = $updateUser->update($success);  //returns bool value
        return redirect(route('Users'))->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function Destroy(string $uuid)
    {
        $deleteUser = User::where('uuid', $uuid);
        $deletedUser = $deleteUser->delete();
        if($deletedUser){
            return back()->with('success', 'User deleted successfully');
        }
        else{
            return back()->with('failure', 'Please try again');
        }
    }
}
