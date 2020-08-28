@extends('themes.admin.template-parts.reusable-ui.form')
@section('page_title')
New USer
@endsection

@section('class')
 col-md-6
@endsection

@section('cardheader')
   Add User
@endsection

@section('form')
    {{ Form::open(array('url' => 'users')) }}
        <div class="form-group">
            <div class="input-group">
                <input type="text" id="first_name" name="first_name" placeholder="First name" class="form-control">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <input type="text" id="last_name" name="last_name" placeholder="Last name" class="form-control">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <input type="email" id="email" name="email" placeholder="Email Address" class="form-control">
                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
            </div>
        </div>

        <div class="form-actions form-group">
            {{ Form::submit('Add', array('class' => 'btn btn-success btn-sm')) }}
        </div>
    {{ Form::close() }}
@endsection