<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreAdminRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    public function store(StoreAdminRequest $request)
    {
        if (Gate::allows('admin')) {
            $ad = true;
            User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'admin' => $ad,
                'telefone' => $request['telefone'],
                'cpf' => $request['cpf'],
                'endereco' => $request['endereco'],
            ]);
            Session::flash('message', "Administrador cadastrado com sucesso!");
            return redirect()->route('home');
        } else {
            return redirect()->route('home');
        }
    }
    public function register()
    {
        if (Gate::allows('admin')) {
            return view('admin.criarAdmin');
        } else {
            return redirect()->route('home');
        }
    }
}
