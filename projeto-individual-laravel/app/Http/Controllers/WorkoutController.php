<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Workout;
use App\Http\Requests\StoreUpdateWorkoutFormRequest;

class WorkoutController extends Controller
{       
    protected $user;
    protected $workout;

    public function __construct(User $user, Workout $workout)
    {
        
        $this->model=$workout;
        $this->user=$user;
    }
    public function create()
    {
        return view('workout.create');
    }
    
    public function add(Request $request)
    {   
        $exercise = $request->all();
        
        $workout = [
            'exercise'=> $exercise['exercise'],
            'sets'=> $exercise['sets'],
            'reps'=> $exercise['reps'],
            'weight'=> $exercise['weight'],
            'rest'=> $exercise['rest'],
            'obs'=> $exercise['obs'],
        ];

        session()->push('workout',$workout);
        $workout = session()->get('workout');
        
        return redirect()->back();

    }
    
    public function store(StoreUpdateWorkoutFormRequest $request)
    {   
        
        $data=$request->session()->get('workout');

        
        foreach($data as $key=>$workout)
        { 
            foreach($workout as $exercise)
            {
                $newUserWorkout=[
                    'exercise'=> $workout['exercise'],
                    'sets'=> $workout['sets'],
                    'reps'=> $workout['reps'],
                    'weight'=> $workout['weight'],
                    'rest'=> $workout['rest'],
                    'obs'=> $workout['obs'],
                ];
                
            }
           
            $this->model->create($newUserWorkout);
        }; 
        
        $workouts= Workout::all();
    
        return view ('user.index', compact('workouts'));
    }
    
    
}
