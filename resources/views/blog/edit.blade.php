@extends('layouts.blog')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/blog" class="btn btn-outline-primary btn-sm">Nazad</a>
                <div class=" mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Ažuriraj Task</h1>
                    <p>možeš da popunš formu i klikni da ažuriraš task</p>

                    <hr>

                    <form action="" method="POST"> 
                        @csrf
                        @method('PUT')
                    
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="title">Task Title</label>
                                <input type="text" id="title" class="form-control" name="title"
                                value="{{ $task->title }}" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="excerpt">Task Excerpt</label>
                                <textarea id="excerpt" class="form-control" name="excerpt" 
                                          rows="" required>{{ $task->excerpt }}</textarea>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="body">Task Body</label>
                                <textarea id="body" class="form-control" name="body"
                                          rows="" required>{{ $task->body }}</textarea>
                            </div>

                            <div class="control-group col-12">
                                <label for="category">Task Category</label>
                                <br>
                                <i>Odaberi {{$task->category->name}} ako ne želiš da menjaš </i>
                                <select name="category" class="form-select">
                                @foreach ($categories as $cat)
                                    <option value="{{ $cat->id }}" >
                                        {{ $cat->name }}
                                    </option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Ažuriraj Task
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection