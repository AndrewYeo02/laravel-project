<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class TraineeFilter extends ApiFilter{
    protected $safeParms = [
        
        'first_name'=>['eq'],
        'last_name' => ['eq'],
        'email' => ['eq'],
        'date_of_birth'=> ['eq']
    ];

    protected $operatorMap = [
        'eq' => '=',
    ];

    protected $columnMap =[
        'DOB' => 'date_of_birth'
    ];
   
    
}