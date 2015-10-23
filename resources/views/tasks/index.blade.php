@extends('templates.master')

@section('content')
    <div>This is task list</div>
    <div><a href="{{ route('tasks.create') }}">Create new task</a></div>
    <div>
        {!! Form::open(array('url'=>'tasks/search','method'=>'POST', 'id' => 'search_form')) !!}
            {!! Form::label('search', 'Search:', ['class' => 'control-label']) !!}
            {!! Form::text('keyword', null,['class' => 'form-control search-field', 'data-url' => URL('tasks/search'), 'data-fill' => 'data_fill']) !!}
            {!! Form::button('Search', ['class' => 'btn btn-danger', 'id' => 'btnSearch']) !!}
        {!! Form::close() !!}
    </div>
    <table border="1" class="data-view" >
        <thead>
            <tr>
                <td>ID</td>
                <td>Title</td>
                <td>Description</td>
                <td>Image</td>
                <td>Created Date</td>
                <td colspan="3" >Action</td>
            </tr>
        </thead>
        <tbody class="data-view">
            {{--@foreach($tasks as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->description }}</td>
                    <td><img src="{{ asset('img/'.$item->image )}}" height="65" width="50"></td>
                    <td>{{ $item->created_at }}</td>
                    <td><a href="{{ route('tasks.show', $item->id) }}">View</a></td>
                    <td><a href="{{ route('tasks.edit', $item->id) }}">Edit</a></td>
                    <td>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['tasks.destroy', $item->id]]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-confirm-delete']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach--}}
            @include('tasks.ajax')
        </tbody>
    </table>
@stop