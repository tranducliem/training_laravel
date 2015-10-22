@extends('templates.master')

@section('content')
    <div>This is task list</div>
    <div><a href="{{ route('tasks.create') }}">Create new task</a></div>
    <table border="1" >
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
        <tbody>
            @foreach($tasks as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->description }}</td>
                    <td><img src="{{ asset('img/'.$item->image.'.jpg' )}}" height="35" width="30"></td>
                    <td>{{ $item->created_at }}</td>
                    <td><a href="{{ route('tasks.show', $item->id) }}">View</a></td>
                    <td><a href="{{ route('tasks.edit', $item->id) }}">Edit</a></td>
                    <td>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['tasks.destroy', $item->id]]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-confirm-delete']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop