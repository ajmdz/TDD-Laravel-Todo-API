<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;
use App\Models\TodoList;

Route::apiResource('todo-list', TodoListController::class);
