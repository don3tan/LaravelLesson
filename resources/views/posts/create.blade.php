@extends('layouts.app')

@section('content')
    <br>
    <div class='container'>
        <div class='jumbotron'>

            {!!Form::open(['action' => 'PostController@store', 'method' => 'POST'])!!}
                <div class='form-group'>
                    {{Form::label('title','Title')}}
                    {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
                </div>
                
                <div class='form-group'>
                    {{Form::label('body','Body')}}
                    {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'Body'])}}
                </div>

                <div class='form-group'>
                    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                </div>

            {!!Form::close()!!}

            {{-- {!!Form::open(['action'=>['PostController@destroy',$post->id], 'method'=>'POST','class'=>'pull-right'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class'=> 'btn btn-danger'])}}

            {!!Form::close()!!} --}}

        </div>  
    </div>
@endsection