<?php

namespace App\Http\Controllers;
use App\Models\Password;

class PasswordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function generate()
    {
        $password = new Password();
        $password->save();

        return response()->json($password, 200);
    }


    public function showAll()
    {
        $passwords = Password::all();
        return response()->json($passwords, 200);
    }

    public function show($id) {
        $password = Password::find($id);
        return response()->json($password, 200);
    }

    public function delete($id) {
        $password = Password::find($id);
        $password->delete();
        return response()->json(['message' => 'Запись успешно удалена.'], 200);
    }
}

    
