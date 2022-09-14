<?php

namespace App\Api\Todos\Queries;

use Domain\Todos\Models\Todo;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class TodoIndexQuery extends QueryBuilder
{
    public function __construct(Request $request)
    {
        $subject = Todo::query();

        parent::__construct($subject, $request);

        $this->allowedFilters([
            'title',
            'completed'
        ]);

        $this->defaultSort('-created_at');
    }
}
