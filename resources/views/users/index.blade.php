@extends('themes.admin.template-parts.reusable-ui.table')

@section('page_title')
Users
@endsection

@section('class')
 col-md-12
@endsection

@section('cardheader')
    Users
@endsection

@section('headers')
 <th scope="col">#</th>
 <th scope="col">First Name</th>
 <th scope="col">Last Name</th>
 <th scope="col">Birthday</th>
 <th scope="col">Role</th>
@endsection
@section('rows')
    <tr>
        <th scope="row">1</th>
        <td>User</td>
        <td>One</td>
        <td>1, Jan, 1990</td>
        <td>Super Admin</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>John</td>
        <td>Doe</td>
        <td>2, Mar, 1985</td>
        <td>Moderator</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Jane</td>
        <td>Doe</td>
        <td>4, Dec, 1970</td>
        <td>Authenticated User</td>
    </tr>
@endsection