<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index() {
        $users = User::paginate(10);
        
        return view('pages.admin.users.index', compact('users'));
    }


    public function store(Request $request) {
        try{
            $this->validate($request, [
                'name'  => 'required|min:2|max:50',
                'email' => 'required|email|unique:users',
            ]);

            User::create([
                'name'      => $request->name,
                'email'     => $request->email,
                'password'  => Hash::make('password'),
            ]);

            Alert::success('Success', 'User added successfully');
        }catch(Exception $err) {
            Alert::error('Failed', $err->getMessage());
        }finally {
            return back();
        }
    }
}
