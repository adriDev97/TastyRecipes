@extends('layouts.app')
@section('content')
    <div class="container margin">
        <div class="card mb-3 border-0">
            <div class="row">
                @if ($recipe->image)
                    <div class="col-md-4">
                        <img src="{{ asset('images/recipes/' . $recipe->image) }}" class="img-fluid rounded h-100 w-100"
                            alt="...">
                    </div>                    
                @endif

                <div class="col-md-8">
                    <div class="card-body">
                        <h1 class="card-title satisfy-font">{{ $recipe->name }}</h1>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 my-2">
                                <p class="card-text"><i class="fa-solid fa-kitchen-set"></i> Difficulty: <span
                                        class="text-muted">{{ $recipe->difficulty->difficulty }}</span></p>
                                <p class="card-text"><i class="fa-solid fa-utensils"></i> Category: <span
                                        class="text-muted">{{ $recipe->category->name }}</span></p>
                                <p class="card-text"><i class="fa-solid fa-clock"></i> Prep Time: <span
                                        class="text-muted">{{ $recipe->prep_time }} min </span></p>
                                <p class="card-text"><i class="fa-solid fa-clock"></i> Cook Time: <span
                                        class="text-muted">{{ $recipe->cook_time }} min </span></p>
                                <p class="card-text"><i class="fa-solid fa-users-line"></i> Serving: <span
                                        class="text-muted">{{ $recipe->serving }} </span></p>
                            </div>
                            <div class="col-lg-6 col-md-6 my-2">
                                <p class="card-text"><i class="fa-solid fa-user"></i> Author: <span
                                        class="text-muted">{{ $recipe->user->name }} </span></p>
                                <p class="card-text"><i class="fa-solid fa-user"></i> Posted: <span
                                        class="text-muted">{{ $recipe->created_at->diffForHumans() }} </span></p>
                                @if ($like)
                                    <like-component user={{ Auth::user()->id }} recipe={{ $recipe->id }} like={{ $like->id }}></like-component> 
                                @else
                                    <like-component user={{ Auth::user()->id }} recipe={{ $recipe->id }} like={{ $like }}></like-component>
                                @endif
                            </div>
                            <div class="d-flex justify-content-end align-items-end">
                                @if ($recipe->user_id == Auth::user()->id || Auth::user()->roles[0]->role == 'Admin' && $recipe->user->roles[0]->role == 'Admin')
                                    <a class="btn btn-outline-warning me-2"
                                        href="{{ route('recipes.edit', $recipe->id) }}">edit</a>
                                @endif
                                {{-- DELETE BUTTON------}}
                                @if ($recipe->user_id == Auth::user()->id || count(Auth::user()->roles) && Auth::user()->roles[0]->role == 'Admin')
                                    <form action="{{ route('recipes.destroy', $recipe) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-warning">delete</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h2 class="text-center py-5 satisfy-font text-decoration-underline">Ingredients</h2>
                <p class="card-text"><i class="fa-solid fa-caret-right"></i> {{ $recipe->ingredient1 }}</p>
                <p class="card-text"><i class="fa-solid fa-caret-right"></i> {{ $recipe->ingredient2 }}</p>
                <p class="card-text"><i class="fa-solid fa-caret-right"></i> {{ $recipe->ingredient3 }}</p>
                <p class="card-text"><i class="fa-solid fa-caret-right"></i> {{ $recipe->ingredient4 }}</p>
                @if ($recipe->ingredient5)
                    <p class="card-text"><i class="fa-solid fa-caret-right"></i> {{ $recipe->ingredient5 }}</p>
                @endif
                @if ($recipe->ingredient6)
                    <p class="card-text"><i class="fa-solid fa-caret-right"></i> {{ $recipe->ingredient6 }}</p>
                @endif
                @if ($recipe->ingredient7)
                    <p class="card-text"><i class="fa-solid fa-caret-right"></i> {{ $recipe->ingredient7 }}</p>
                @endif
                @if ($recipe->ingredient8)
                    <p class="card-text"><i class="fa-solid fa-caret-right"></i> {{ $recipe->ingredient8 }}</p>
                @endif
                @if ($recipe->ingredient9)
                    <p class="card-text"><i class="fa-solid fa-caret-right"></i> {{ $recipe->ingredient9 }}</p>
                @endif
                @if ($recipe->ingredient10)
                    <p class="card-text"><i class="fa-solid fa-caret-right"></i> {{ $recipe->ingredient10 }}</p>
                @endif
                @if ($recipe->ingredient11)
                    <p class="card-text"><i class="fa-solid fa-caret-right"></i> {{ $recipe->ingredient11 }}</p>
                @endif
                @if ($recipe->ingredient12)
                    <p class="card-text"><i class="fa-solid fa-caret-right"></i> {{ $recipe->ingredient12 }}</p>
                @endif
                @if ($recipe->ingredient13)
                    <p class="card-text"><i class="fa-solid fa-caret-right"></i> {{ $recipe->ingredient13 }}</p>
                @endif
                @if ($recipe->ingredient14)
                    <p class="card-text"><i class="fa-solid fa-caret-right"></i> {{ $recipe->ingredient14 }}</p>
                @endif
                @if ($recipe->ingredient15)
                    <p class="card-text"><i class="fa-solid fa-caret-right"></i> {{ $recipe->ingredient15 }}</p>
                @endif
                @if ($recipe->ingredient16)
                    <p class="card-text"><i class="fa-solid fa-caret-right"></i> {{ $recipe->ingredient16 }}</p>
                @endif
                @if ($recipe->ingredient17)
                    <p class="card-text"><i class="fa-solid fa-caret-right"></i> {{ $recipe->ingredient17 }}</p>
                @endif
                @if ($recipe->ingredient18)
                    <p class="card-text"><i class="fa-solid fa-caret-right"></i> {{ $recipe->ingredient18 }}</p>
                @endif
                @if ($recipe->ingredient19)
                    <p class="card-text"><i class="fa-solid fa-caret-right"></i> {{ $recipe->ingredient19 }}</p>
                @endif
                @if ($recipe->ingredient20)
                    <p class="card-text"><i class="fa-solid fa-caret-right"></i> {{ $recipe->ingredient20 }}</p>
                @endif
            </div>
            <div class="col-md-8 preparation">
                <h2 class="text-center py-5 satisfy-font text-decoration-underline">Preparation</h2>
                <p>{{ $recipe->preparation }}</p>
                <div class="row">
                    <div class="col-md-6">
                        @if ($recipe->tip)
                            <h3 class="satisfy-font text-decoration-underline">Tips</h3>
                            <p class="">{{ $recipe->tip }}</p>
                        @endif
                    </div>
                    <div class="col-md-6">
                        @if ($recipe->note)
                            <h3 class="satisfy-font text-decoration-underline">Note</h3>
                            <p class="">{{ $recipe->note }}</p>
                        @endif
                    </div>
                </div>
                {{-- comment --}}
                {{-- @php
                    
                    foreach ($users as $user)
                        $user->roles;
                @endphp --}}
                <comment-component roles={{ Auth::user()->roles[0]->role }} user={{ Auth::user()->id }} recipe={{ $recipe->id }}></comment-component>
                {{-- <form action="{{ route('comments.store') }}" method="POST">
                    <div class="d-flex justify-content-end align-items-end">
                        @csrf
                        <input type="hidden" value="{{ $recipe->id }}" name="recipe_id">
                        <textarea name="comment" cols="20" rows="1" class="form-control me-1" placeholder="Write a comment"></textarea>
                        <input type="submit" class="btn btn-outline-warning" value="post">
                    </div>
                </form>
                <div class="overflow">
                    @foreach ($recipe->comments as $comment)
                        <div class="d-flex mb-3">
                            @if ($comment->user_id == $user)
                                <form action="{{ route('comments.destroy', $comment) }}" class="" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="border-0 bg-transparent"><i
                                            class="fa-solid fa-trash-can"></i></button>
                                </form>
                            @endif --}}
                            {{-- @php
                                $likeComment = null;
                                foreach ($comment_users as $like_comment) {
                                    // user uguale a user_id della tabella comment_user e il comment id e usuale alla comment_id nella tabella comment_user
                                    if ($user == $like_comment->user_id && $comment->id == $like_comment->comment_id) {
                                        $likeComment = $like_comment;
                                        break;
                                    }
                                }
                            @endphp --}}
                            {{-- @if ($likeComment)
                                <form action="{{ route('likeComments.destroy', $likeComment) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="border-0 bg-transparent text-danger"><i
                                            class="fa-solid fa-heart color-red"></i></button>
                                            {{-- {{ count($comment->likeComments) }} --}}
                                {{-- </form>
                            @else
                                <form method="POST" action="{{ route('likeComments.store') }}">
                                    @csrf
                                    <input type="hidden" value="{{ $comment->id }}" name="comment_id">
                                    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                                    <button type="submit" class="border-0 bg-transparent"><i
                                            class="fa-regular fa-heart"></i></button>
                                    {{-- {{ count($comment->likeComments) }} --}}
                                {{-- </form>
                            @endif
                            <li class="mx-3" style="list-style-type: none">
                                <div class="container">
                                    <small><b>{{ $comment->user->name }}</b></small>
                                    <p>{{ $comment->comment }}</p>
                                    <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                                </div>
                            </li>
                        </div>
                    @endforeach
                </div>   --}}
            </div>
        </div>
    </div>
@endsection
