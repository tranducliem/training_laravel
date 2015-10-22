@extends('templates.master')

@section('content')
    <h1>Add a New Task</h1>
    <p class="lead">Add to your task list below.</p>
    <hr>
    {!! Form::open(['route' => 'tasks.store', 'class' => 'form-upload', 'files' => true]) !!}
        <div class="form-group">
            {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('image', 'Image:') !!}
            {{--{!! Form::text('image',null,['class'=>'form-control']) !!}--}}
            {!! Form::file('image', null) !!}
        </div>
        {!! Form::submit('Create New Task', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@stop