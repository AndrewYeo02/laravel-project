<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    use HasFactory;
    protected $fillable =[
        'first_name',
        'last_name',
        'email',
        'date_of_birth',
    ];
    
    public function logbooks(){
        return $this->hasMany(Logbooks::class);
    }
   
}
