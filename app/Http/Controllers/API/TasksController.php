<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\TaskCollection;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        // 1. nacin za kreiranje kolekcije resursa
        // return TaskResource::collection($tasks);

        // 2. nacin - preko kolekcija 
        // jer su resursi u jednini, pa moze ovako da se napravi kolekcija od pojedinacnih
        return new TaskCollection($tasks);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'body' => 'required|string|max:100',
            'slug' => 'required|string',
            'excerpt' => 'required',
            'category_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $task = Task::create([
            'title' => $request->title,
            'body' => $request->body,
            'slug' => $request->slug,
            'excerpt' => $request->excerpt,
            'category_id' => $request->category_id,
            'user_id' => Auth::user()->id
        ]);

        return response()->json([
            'Task je uspesno sacuvan',
            new TaskResource($task)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        // $task = Task::find($taskid);
        return new TaskResource($task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }
/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {

        // return response()->json($request->all());

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:100',
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => 'required'
        ]);

        if ($validator->fails())
            return response()->json($validator->errors());

        $task->title = $request->title;
        $task->slug = $request->slug;
        $task->excerpt = $request->excerpt;
        $task->body = $request->body;
        $task->category_id = $request->category_id;
        
        $task->save();

        return response()->json(['Post is updated successfully.', new TaskResource($task)]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)  // stavljeno je u Api rutama u middleware sa koriscenjem tokena da samo logovani korisnik moze da obrise
    {
        
        $task->delete();
        return response()->json('Task je uspesno obrisan.');
    }
}