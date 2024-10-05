<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();

        return view('tasks.index')->with('tasks', $tasks);
    }

    public function create(){
        return view('tasks.create');
    }

    public function store(Request $request){
        Task::create($request->only(['name', 'description']));

        return to_route("tasks.index");
    }

    /**
     * Вертає заповнену форму з даними таски ($id) для редагування
     */
    public function edit($id)
    {
        $task = Task::find($id);

        return view('tasks.edit')->with('task', $task);
    }

    /**
     * Приходять дані з форми для таски (id)
     * оновлюємо таску данними з $request->only(['name', 'description'])
     * і повертаємося на індекс таск сторінку
     */
    public function update(Request $request, $id){
        // розкомічуємо і дивимся який обєкт приходить
        // нам цікавить request => parameters
        // dd($request);
        $task = Task::find($id);
        $task->update($request->only(['name', 'description']));

        return to_route("tasks.index");
    }

    public function destroy($id){
        $task = Task::find($id);
        $task->delete();

        return to_route("tasks.index");
    }
}
