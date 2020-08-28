@extends('themes.admin.template-parts.reusable-ui.form')
@section('page_title')
New Brand
@endsection

@section('class')
 col-md-6
@endsection

@section('cardheader')
   Add Brand
@endsection

@section('form')
    {{ Form::open(array('url' => 'create/brand', 'files' => true)) }}
        <div class="form-group">
            <div class="input-group">
                <input type="text" id="name" name="name" placeholder="Brand Name" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <textarea name="description" id="description" rows="9" class="form-control" placeholder="Brand Info"></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <input type="file" id="image" name="image" class="form-control-file">
            </div>
        </div>

        <div class="form-actions form-group">
            {{ Form::submit('Add', array('class' => 'btn btn-success btn-sm')) }}
        </div>
    {{ Form::close() }}
@endsection