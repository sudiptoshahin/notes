<?php

namespace App\Utilities\Filters\V1;

use App\Utilities\ApiFilter;

class NoteFilter extends ApiFilter {

    protected $safeParams = [
        'title' => ['eq'],
        'userId' => ['eq'],
        'createdAt' => ['eq', 'gt', 'lt', 'gte', 'lte']
    ];

    protected $columnMap = [
        'userId' => 'user_id',
        'createdAt' => 'created_at'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'gt' => '>',
        'gte' => '>=',
        'lt' => '<',
        'lte' => '<='
    ];
}