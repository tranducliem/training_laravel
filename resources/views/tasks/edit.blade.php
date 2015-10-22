@extends('templates.master')

@section('content')
    <h1>Edit Task: {{ $task->title }}</h1>
    <p class="lead">Add to your task list below.</p>
    <hr>
    {!! Form::model($task, ['method' => 'PATCH', 'route' => ['tasks.update', $task->id]]) !!}
        <div class="form-group">
            {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Image', 'Image:') !!}
            {!! Form::text('image',null,['class'=>'form-control']) !!}
        </div>
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
    <h3>Delete</h3>
    {{ Form::open(['method' => 'DELETE', 'route' => ['tasks.destroy', $task->id]]) }}
        {{ Form::submit('Delete', ['class' => 'btn btn_confirm_delete']) }}
    {{ Form::close() }}

@stop