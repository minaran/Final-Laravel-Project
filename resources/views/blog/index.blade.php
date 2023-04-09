@extends('layouts.blog')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col-8">
                    <h1 class="display-one">Naš Blog!</h1>
                    <p>Upoznajte se sa novostima, modni trendovi se menjaju, kako na polju modne industrije, preko šminke, do frizura. Klikni na naziv taska da pročitaš više!</p>
                    </div>
                    <div class="col-4">
                    <p>Kreiraj novi Task, samo jednim klikom:</p>
                    <a href="/blog/create/task" class="btn btn-primary btn-sm">Dodaj Task</a>
                    </div>
                </div>
            @forelse($tasks as $task)
                <ul>
                    <li><a href="./blog/{{ $task->id }}">{{ ucfirst($task->title) }}</a></li>
                </ul>
            @empty
                <p class="text-warning">Nema dostupnih taskova</p>
            @endforelse
            </div>
        </div>
    </div>
@endsection