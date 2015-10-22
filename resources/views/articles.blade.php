@extends('templates.master')

@section('content')
    <div>This is articles list</div>
    <table border="1" >
        <thead>
            <tr>
                <td>ID</td>
                <td>Title</td>
                <td>Content</td>
                <td>Author</td>
                <td>Category</td>
                <td>Created Date</td>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $art)
                <tr>
                    <td>{{$art->id}}</td>
                    <td>{{$art->title}}</td>
                    <td>{{$art->content}}</td>
                    <td>{{$art->author}}</td>
                    <td>{{$art->category_id}}</td>
                    <td>{{$art->created_at}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop