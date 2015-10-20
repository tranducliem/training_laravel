@extends('templates.master')

@section('content')
    <div>Create new an article</div>
    <div>
        {!! Form::open(['url' => 'articles']) !!}
        <p>
            {!! Form::label('category_id', 'Category:') !!}
            {!! Form::text('category_id') !!}
        </p>
        <p>
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title') !!}
        </p>
        <p>
            {!! Form::label('content', 'Content:') !!}
            {!! Form::text('content') !!}
        </p>
        <p>
            {!! Form::label('author', 'Author:') !!}
            {!! Form::text('author') !!}
        </p>
        <p>{!! Form::submit('Save') !!}</p>
        {!! Form::close() !!}
    </div>
@stop