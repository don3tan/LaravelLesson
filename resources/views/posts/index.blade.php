@extends('layouts.app')

@section('content')
    <br>
    <div class='container'>
            @if(count($posts) > 0)
                @foreach($posts as $post)
                    <div class='jumbotron'>
                        <h2>{{$post->title}}</h2>
                        <p>{{$post->body}}</p>
                        <small>Created on {{$post->created_at}}, by {{$post->user->name}}</small>
                        @if(!Auth::guest())
                            @if(Auth::user()->id == $post->user_id)
                                <hr class="my-4">
                                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

                                {!!Form::open(['action'=>['PostController@destroy',$post->id], 'method'=>'POST','class'=>'float-xl-right'])!!}
                                    {{Form::hidden('_method','DELETE')}}
                                {{Form::submit('Delete',['class'=> 'btn btn-danger'])}}
                
                                {!!Form::close()!!}
                            @endif
                        @endif
                    </div>
                @endforeach
            @else
                <h2>There is no post yet.</h2>
            @endif
    </div>
@endsection