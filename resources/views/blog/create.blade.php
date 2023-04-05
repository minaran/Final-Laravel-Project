@extends('layouts.blog')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/blog" class="btn btn-outline-primary btn-sm">Nazad</a>
                <div class=" mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Kreiraj novi Post</h1>
                    <p>Popuni ovu formu da kreiras novi post</p>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="title">Post Title</label>
                                <input type="text" id="title" class="form-control" name="title"
                                       placeholder="Enter Post Title" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="excerpt">Post Excerpt</label>
                                <textarea id="excerpt" class="form-control" name="excerpt" placeholder="Enter Post Excerpt"
                                          rows="" required></textarea>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="body">Post Body</label>
                                <textarea id="body" class="form-control" name="body" placeholder="Enter Post Body"
                                          rows="" required></textarea>
                            </div>
                            <div class="control-group col-12">
                                <label for="slug">Post Slug</label>
                                <input type="text" id="slug" class="form-control" name="slug"
                                       placeholder="Enter-Post-Slug" required>
                            </div>

                            <div class="control-group col-12">
                                <label for="category">Post Category</label>
                                <select name="category" class="form-select">
                                @foreach ($categories as $cat)
                                    <option value="{{ $cat->id }}">
                                        {{ $cat->name }}
                                    </option>
                                @endforeach
                                </select>
                            </div>
                            <div class="control-group col-12">
                                <label for="user">Post User</label>
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
                                    Create Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection