<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreUpdateUserFormRequest;

class UserController extends Controller

{   
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    //index User
    public function index(){
        return view('user.index');
    }

    public function store(StoreUpdateUserFormRequest $request)
    {
        $data = $request->all();
        $data['password']= bcrypt($rquest->password);
        $this->model->create($data);

        return redirect()->route('user.index');
    }
}
