@extends('themes.admin.template-parts.reusable-ui.table')

@section('page_title')
Recipes
@endsection

@section('class')
 col-md-12
@endsection

@section('cardheader')
    Recipes
@endsection

@section('headers')
 <th scope="col">#</th>
 <th scope="col">Recipe Name</th>
@endsection
@section('rows')
    @forEach($recipes as $recipe)
        <tr>
            <th scope="row">#</th>
            <td>{{$recipe->name}}</td>
        </tr>
    @endforeach
@endsection