@extends('layouts.app')

@section('content')
    <br>
    <div class='container'>
        <div class='jumbotron'>

            {!!Form::open(['action' => ['PostController@update',$post->id], 'method' => 'POST'])!!}
                <div class='form-group'>
                    {{Form::label('title','Title')}}
                    {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}
                </div>
                
                <div class='form-group'>
                    {{Form::label('body','Body')}}
                    {{Form::textarea('body',$post->body,['class'=>'form-control','placeholder'=>'Body'])}}
                </div>

                {{Form::hidden('_method','PUT')}}

                <div class='form-group'>
                    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                </div>

            {!!Form::close()!!}

        </div>  
    </div>
@endsection