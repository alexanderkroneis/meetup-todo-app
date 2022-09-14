<?php

namespace App\Api\Todos\Queries;

use Domain\Todos\Models\Todo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class TodoShowQuery extends QueryBuilder
{
    public function __construct(Request $request)
    {
        $subject = Todo::query();

        parent::__construct($subject, $request);
    }
}
