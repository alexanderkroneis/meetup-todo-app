<?php

namespace Tests\Feature;

use Domain\Todos\Models\Todo;

it('factory creates todo', function () {
    $count = Todo::query()->count();

    Todo::factory()->create();

    expect(Todo::query()->count())->toBe($count + 1);
});

it('creates a todo', function () {
    $todo = Todo::factory()->make();

    $this->postJson('/api/todos', $todo->toArray())
        ->assertStatus(201)
        ->assertJson($todo->toArray());
});
