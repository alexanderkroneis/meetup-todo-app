<?php

namespace Domain\Todos\DataTransferObjects;

use App\Api\Todos\Requests\StoreTodoRequest;
use Spatie\DataTransferObject\DataTransferObject;

class TodoData extends DataTransferObject
{

    public string $title;

    public ?string $description;

    public bool $completed;

    public static function fromRequest(StoreTodoRequest $request): self
    {
        return new self($request->validated());
    }
}
