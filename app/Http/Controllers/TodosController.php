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

    public function index_incomplete(){

      return view('todos.index')->with('todos', Todo::all()->where('completed','0'));

    }

    public function index_complete(){

      return view('todos.index')->with('todos', Todo::all()->where('completed','1'));

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
            ->update(['name' => $data['name'],
                      'description' => $data['description'],
                      'priority' => $data['priority'],
                      'completed' => $data['completed'],
                      'updated_at' => date('Y-m-d H:i:s')
                    ]);

      return redirect('/todos');

    }

    public function delete($todoId){

      Todo::where('id', $todoId)->delete();

      return redirect('/todos');

    }

}
