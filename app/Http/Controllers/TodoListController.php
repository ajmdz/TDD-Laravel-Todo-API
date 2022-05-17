<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\TodoList;

class TodoListController extends Controller
{
    public function index()
    {
        $lists = TodoList::all();
        return response($lists);
    }

    public function show(TodoList $list)
    {
        return response($list);
    }

    public function store(Request $request)
    {
        $request->validate(['name' => ['required']]);
        $list = TodoList::create($request->all());
        return $list; // automatically returns 201 status
    }

    public function destroy(TodoList $list)
    {
        $list->delete();
        return response('', Response::HTTP_NO_CONTENT);
    }

    public function update(Request $request, TodoList $list)
    {
        $request->validate(['name' => ['required']]);
        $list->update($request->all());
        return response($list);
    }
}
