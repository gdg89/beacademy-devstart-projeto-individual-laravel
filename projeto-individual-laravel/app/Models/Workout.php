<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{   
    protected $table ='workout';
    use HasFactory;
    protected $fillable = [
        'exercise',
        'sets',
        'reps',
        'weight',
        'rest',
        'obs',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
