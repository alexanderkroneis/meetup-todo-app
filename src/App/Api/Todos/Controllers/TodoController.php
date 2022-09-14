<?php

namespace App\Api\Todos\Controllers;

use App\Api\Todos\Queries\TodoIndexQuery;
use App\Api\Todos\Queries\TodoShowQuery;
use App\Api\Todos\Requests\StoreTodoRequest;
use Domain\Todos\Actions\CreateTodoAction;
use Domain\Todos\DataTransferObjects\TodoData;
use Domain\Todos\Models\Todo;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;

class TodoController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(TodoIndexQuery $query)
    {
        return response()->json($query->get());
    }

    public function show(TodoShowQuery $query)
    {
        return response()->json($query->first());
    }

    public function store(StoreTodoRequest $request, CreateTodoAction $createTodoAction)
    {
        $data = TodoData::fromRequest($request);
        $todo = $createTodoAction->execute($data);

        return response()->json($todo, 201);
    }

    public function update()
    {
        //
    }

    public function destroy()
    {
        //
    }
}
