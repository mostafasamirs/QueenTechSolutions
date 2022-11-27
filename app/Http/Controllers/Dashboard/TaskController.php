<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Task;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Tasks\TasksRequest;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *TasksRequest
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tasks = Task::where(function ($q) use ($request) {
            return $q->when($request->search, function ($query)  use ($request) {
                return $query->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('description', 'like', '%'  . $request->search . '%');
            });
        })->whereNotNull('id')->Paginate(10);
        $settings = Setting::first();
        return view('dashboard.tasks.index', compact('tasks', 'settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $settings = Setting::first();
        return view('dashboard.tasks.create', compact('settings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TasksRequest $request)
    {
        $tasks = Task::create($request->validated());
        //upload hasFile file
        if ($request->hasFile('file')) {
            $fileExt            = $request->file->getClientOriginalExtension();
            $fileNameNew        = uniqid() . time() . '.' . $fileExt;
            $request->file->storeAs('public/tasks_file/', $fileNameNew);
            $fileNew        = 'storage/tasks_file/' . $fileNameNew;
            $tasks->file = $fileNew;
            $tasks->save();
        }
        //upload hasFile file
        return redirect()->route('tasks.index')->with('toast_success', __('Created Successfully.'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $settings = Setting::first();
        $task = Task::findOrFail($id);
        return view('dashboard.tasks.show', compact('task', 'settings'));
    }

   /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::findOrFail($id);
        $settings = Setting::first();
        return view('dashboard.tasks.edit', compact('task', 'settings'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(TasksRequest $request, Task $task)
    {
        $task->update($request->safe()->except(['file']));


        //update hasFile image
        if ($request->hasFile('file')) {
            if (Storage::disk('public')->exists('tasks_file' . '/' . $task->file)) {
                Storage::disk('public')->delete('tasks_file' . '/' . $task->file); //public_file the path disks file system
            } else {
                Storage::delete('tasks_file' . $task->file);
            }
            $fileExt            = $request->file->getClientOriginalExtension();
            $fileNameNew        = uniqid() . time() . '.' . $fileExt;
            $request->file->storeAs('public/tasks_file/', $fileNameNew);
            $fileNew        = 'storage/tasks_file/' . $fileNameNew;
            $task->file = $fileNew;
            $task->update();
        } else {
            $fileNew =   $task->file;
        }

        //update hasFile file


        return redirect()->route('tasks.index')->with('toast_success', __('Updated Successfully.'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Task::findOrFail($id)->delete();
        return redirect()->route('tasks.index')->with('toast_success', __('Deleted Successfully.'));
    }    // profileuser

}
