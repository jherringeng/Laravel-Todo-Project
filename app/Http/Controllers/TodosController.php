<?php

namespace App\Http\Controllers;

use App\Todo;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){

      // $todos = Todo::all();

      // return view('todos.index')->with('todos', $todos);

      return view('todos.index')->with('todos', Todo::all());

    }

    public function show($todoId){

      // $todo = Todo::find($todoId);

      // return view('todos.show')->with('todo',$todo);

      return view('todos.show')->with('todo',Todo::find($todoId));

    }

    public function create(){

      return view('todos.new');

    }

}
