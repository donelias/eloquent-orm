<?php

namespace EloquentORM\Http\Controllers;

use Illuminate\Http\Request;
use EloquentORM\User;

class QueryController extends Controller
{
   public function eloquentAll(){

       $users = User::all();
       $title = 'Todos los Usuarios (All)';

       return view('query.methods', compact('title', 'users'));
   }

    public function eloquentGet($gender){

        $users = User::where('gender', $gender)->get();
        $title = 'Todos los Usuarios (GET)';

        return view('query.methods', compact('title', 'users'));
    }


    public function eloquentGetCustom(){

        $users = User::where('gender', 'f')
            ->get(['id', 'name', 'biography']);
        $title = 'Todos los Usuarios (GET Custom - con array)';

        return view('query.methods', compact('title', 'users'));
    }
}
