@foreach($tasks as $item)
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
@endforeach