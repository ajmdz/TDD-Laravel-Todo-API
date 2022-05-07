<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodoListTest extends TestCase
{
    public function test_store_todo_list()
    {
        //prepare

        //perform
        $response = $this->getJson(route('todo-list.store'));

        //predict
        $this->assertEquals(1, count($response->json()));
    }
}
