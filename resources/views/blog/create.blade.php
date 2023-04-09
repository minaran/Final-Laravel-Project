@extends('layouts.blog')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/blog" class="btn btn-outline-primary btn-sm">Nazad</a>
                <div class=" mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Kreiraj novi Task</h1>
                    <p>Popuni ovu formu da kreiras novi task</p>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="title">Task Naslov</label>
                                <input type="text" id="title" class="form-control" name="title"
                                       placeholder="Enter Task Title" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="excerpt">Task Excerpt</label>
                                <textarea id="excerpt" class="form-control" name="excerpt" placeholder="Enter Task Excerpt"
                                          rows="" required></textarea>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="body">Task Body</label>
                                <textarea id="body" class="form-control" name="body" placeholder="Enter Task Body"
                                          rows="" required></textarea>
                            </div>
                            <div class="control-group col-12">
                                <label for="slug">Task Slug</label>
                                <input type="text" id="slug" class="form-control" name="slug"
                                       placeholder="enter-task-slug" required>
                            </div>

                            <div class="control-group col-12">
                                <label for="category">Task Category</label>
                                <select name="category" class="form-select">
                                @foreach ($categories as $cat)
                                    <option value="{{ $cat->id }}">
                                        {{ $cat->name }}
                                    </option>
                                @endforeach
                                </select>
                            </div>
                            <div class="control-group col-12">
                                <label for="user">Task User</label>
                                <select name="user" class="form-select">
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">
                                        {{ $user->name }}
                                    </option>
                                @endforeach
                                </select>
                            </div>

                            
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Create Task
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection