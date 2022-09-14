<?php

namespace Domain\Todos\Actions;

use Domain\Todos\DataTransferObjects\TodoData;
use Domain\Todos\Models\Todo;

class CreateTodoAction
{
    public function execute(TodoData $data)
    {
        return Todo::create($data->toArray());
    }
}
