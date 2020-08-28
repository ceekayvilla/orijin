@extends('themes.admin.template-parts.reusable-ui.table')

@section('page_title')
Permissions
@endsection

@section('class')
 col-md-12
@endsection

@section('cardheader')
    Permissions
@endsection

@section('headers')
 <th scope="col">#</th>
 <th scope="col">Permissions</th>
 <th scope="col">Operations</th>
@endsection
@section('rows')
     @foreach ($permissions as $permission)
         <tr>
            <th scope="row"></th>
            <td>{{ $permission->name }}</td>
            <td>
                    <a href="{{ URL::to('permissions/'.$permission->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                    {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

            </td>
         </tr>
     @endforeach
     <a href="{{ URL::to('permissions/create') }}" class="btn btn-success">Add Permission</a>
@endsection