@extends('themes.admin.template-parts.reusable-ui.form')
@section('page_title')
New Vendor
@endsection

@section('class')
 col-md-6
@endsection

@section('cardheader')
   Add Vendor
@endsection

@section('form')
    {{ Form::open(array('url' => 'create/vendor', 'files' => true)) }}
        <div class="form-group">
            <div class="input-group">
                <input type="text" id="name" name="name" placeholder="Vendor Name" class="form-control">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <input type="text" id="website" name="website" placeholder="Website URL" class="form-control">
                <div class="input-group-addon"><i class="fa fa-link"></i></div>
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <input type="file" id="logo" name="logo" class="form-control-file">
            </div>
        </div>

        <div class="form-actions form-group">
            {{ Form::submit('Add', array('class' => 'btn btn-success btn-sm')) }}
        </div>
    {{ Form::close() }}
@endsection