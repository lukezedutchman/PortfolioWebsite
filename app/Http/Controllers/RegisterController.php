<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    protected function create(array $data)    {
        dd($data);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'DepartmentID' => $data['DepartmentID'],
            'type' => User::DEFAULT_TYPE,
        ]);
    }
}
