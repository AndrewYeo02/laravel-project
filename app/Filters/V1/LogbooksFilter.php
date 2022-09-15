<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class LogbooksFilter extends ApiFilter{
    protected $safeParms = [
        
        'trainee_id'=>['eq'],
        'name' => ['eq'],
    ];

    protected $operatorMap = [
        'eq' => '=',
    ];

    protected $columnMap =[
        
    ];
   
    
}