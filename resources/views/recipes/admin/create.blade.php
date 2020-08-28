@extends('themes.admin.template-parts.reusable-ui.form')
@section('page_title')
New Recipe
@endsection

@section('class')
 col-md-6
@endsection

@section('cardheader')
   Add Recipe
@endsection

@section('form')
    {{ Form::open(array('url' => 'create/recipe')) }}
        <div class="form-group">
            <div class="input-group">
                <input type="text" id="name" name="name" placeholder="Recipe Name" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <textarea name="description" id="description" rows="9" class="form-control" placeholder="Recipe Steps"></textarea>
            </div>
        </div>


        <div class="form-actions form-group">
            {{ Form::submit('Add', array('class' => 'btn btn-success btn-sm')) }}
        </div>
    {{ Form::close() }}
@endsection