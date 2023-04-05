<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource. 
     * 
     * @return \Illuminate\Http\Response
     * 
     *///prihvatamo podatke iz baze bice get ruta
    public function index()            
    {
        //vratice nam sve taskove iz baze
        $tasks = Task::all();
        // return response()->json($tasks);
        return view('blog.index', [
            'tasks' => $tasks
        ]);
    // $user = Auth::user();
        // $user_posts = $user->posts;
        // return view('blog.index', [
        //     'posts' => $user_posts
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     * 
     * 
     *///get ruta hocu da prikazem create form view
     public function create()
    {
        $categories = Category::all();
        $users = User::all();

        return view('blog.create', [
            'categories' => $categories,
            'users' => $users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * 
     *///post ruta jer saljemo post zahtev i create u bazu
    public function store(Request $request)
    {
        $noviTask = Task::create([
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
            'slug' => $request->slug,
            // 'user_id' => $request->user,
            'user_id' => Auth::id(),
            'category_id' => $request->category
        ]);

        return redirect('blog/' . $noviTask->id);
    }

    /**
     * Display the specified resource.
     * 
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     * 
     *///get ruta jer prihvatamo podatke iz baze
    public function show(Task $taskid)
    {
        if ($taskid == "my") {
            $user = Auth::user();
            $user_tasks = $user->tasks;
            return view('blog.index', [
                'tasks' => $user_tasks
            ]);
        } else {
            $task = Task::find($taskid);

            return view('blog.show', [
                'task' => $task,
                'user_login' => Auth::id()
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     * 
     *///get ruta - jer zelimo da prikazemo edit form view
    public function edit(Task $taskid)
    {
        $task = Task::find($taskid);

        if ($task->user->id == Auth::id()) {
            $categories = Category::all();
            return view('blog.edit', [
                'task' => $task,
                'categories' => $categories
            ]);
        } else {
            return redirect('/blog');
        }
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     *///put ruta - jer saljemo put zahtev i update u bazu
    public function update(Request $request, Task $taskid)
    {
        $task = Task::find($taskid);
        $task->update([
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
            'category_id' => $request->category
        ]);

        return redirect('blog/' . $task->id);
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     * 
     *///delete ruta - jer zelimo da obrisemo iz baze jedan red
    public function destroy(Task $taskid)
    {
        $task = Task::find($taskid);
        if ($task->user->id == Auth::id()) {
            $task->delete();
        }

        return redirect('/blog');
    }
    }

