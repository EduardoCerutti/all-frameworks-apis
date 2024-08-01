<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

class UsersFilter extends ApiFilter
{
    protected $allowedParams = [
        'name' => ['eq'],
        'type' => ['eq'],
        'email' => ['eq']
    ];

    protected $operatorMap = [
        'eq' => '=',
    ];
}
