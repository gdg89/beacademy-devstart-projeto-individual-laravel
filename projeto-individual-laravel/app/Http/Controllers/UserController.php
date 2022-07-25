<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Workout;
use App\Http\Requests\StoreUpdateUserFormRequest;

class UserController extends Controller

{   
    protected $user;
    protected $workout;

    public function __construct(User $user, Workout $workout)
    {
        $this->model=$workout;
        $this->model = $user;
    }

    //index User
    public function index()
    {
        $workouts=Workout::all();
        return view('user.index', compact('workouts'));
    }

    public function store(StoreUpdateUserFormRequest $request)
    {
        $data = $request->all();
        $data['password']= bcrypt($rquest->password);
        $this->model->create($data);

        return redirect()->route('user.index');
    }
}
