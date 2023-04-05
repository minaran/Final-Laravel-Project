@extends('layouts.blog')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col-8">
                    <h1 class="display-one">Naš Blog!</h1>
                    <p>Uživaj čitajući naše postove. Klikni na naziv posta da pročitaš više!</p>
                    </div>
                    <div class="col-4">
                    <p>Kreiraj novi Post</p>
                    <a href="/blog/create/task" class="btn btn-primary btn-sm">Dodaj Post</a>
                    </div>
                </div>
            @forelse($tasks as $task)
                <ul>
                    <li><a href="./blog/{{ $task->id }}">{{ ucfirst($task->title) }}</a></li>
                </ul>
            @empty
                <p class="text-warning">Nema dostupnih postova</p>
            @endforelse
            </div>
        </div>
    </div>
@endsection