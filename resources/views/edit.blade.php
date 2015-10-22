@extends('templates.master')

@section('content')
    <div>Edit post: {!! $article->id !!} - {!! $article->title !!}</div>
    <div>
        {{--{!! Form::open(['url' => 'articles']) !!}--}}
        {!! Form::model($article,['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
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
        <p>
            {!! Form::label('created_at', 'Created Date:') !!}
            {!! Form::input('date', 'created_at', date('Y-m-d')) !!}
        </p>
        <p>{!! Form::submit('Update') !!}</p>
        {!! Form::close() !!}
    </div>
@stop