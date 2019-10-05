<?php

namespace App\Http\Controllers;

use App\Todo;

use DB;

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

    public function edit($todoId){

      return view('todos.edit')->with('todo',Todo::find($todoId));;

    }

    public function store(){

      $this->validate(request(), [

        'name'=>'required',
        'description'=>'required',
        'priority'=>'required'
      ]);

      $data = request()->all();

      $todo = new Todo();

      $todo->name = $data['name'];
      $todo->description = $data['description'];
      $todo->priority = $data['priority'];
      $todo->completed = false;

      $todo->save();

      return redirect('/todos');

    }

    public function store_edit($todoId){

      $this->validate(request(), [

        'name'=>'required',
        'description'=>'required',
        'priority'=>'required'
      ]);

      $data = request()->all();

      DB::table('todos')
            ->where('id', $todoId)
            ->update(['name' => $data['name']]);

      DB::table('todos')
            ->where('id', $todoId)
            ->update(['description' => $data['description']]);

      DB::table('todos')
            ->where('id', $todoId)
            ->update(['priority' => $data['priority']]);

      DB::table('todos')
            ->where('id', $todoId)
            ->update(['completed' => false]);

      return redirect('/todos');

    }

    public function delete($todoId){

      Todo::where('id', $todoId)->delete();

      return redirect('/todos');

    }

}
