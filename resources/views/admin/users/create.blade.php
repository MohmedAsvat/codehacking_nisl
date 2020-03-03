@extends('layouts.admin') @section('pagename') Create User @endsection @section('content')
<h3>Create User</h3>
@include('includes.form_error') {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true]) !!}
{{csrf_field()}}
<div class="form-group">
    {!!Form::label('name','Name')!!}
    <div class="input-group">
        <span class="input-group-addon">@</span>
        {!!Form::text('name',null,['class'=>'form-control'])!!}
    </div>
</div>

<div class="form-group">
    {!!Form::label('email','Email')!!} {!!Form::email('email',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!!Form::label('role_id','Role')!!} {!!Form::select('role_id',[''=>'Chosse Options'] + $roles ,null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!!Form::label('is_active','Status')!!} {!!Form::select('is_active',array(1=>'Active',0=>'Not Active'),0,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!!Form::label('photo_id','Select Photo')!!}{!!Form::file('photo_id',['class'=>'form-control'])!!}
</div>


<div class="form-group">
    {!!Form::label('password','Password')!!} {!!Form::password('password',['class'=>'form-control','autocomplete'=>'false'])!!}
</div>

<div class="class form-group">
    {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
</div>
{!! Form::close() !!} @endsection 

@section('scripts')

<!-- upload file script -->
<script href="{{asset('js/fileinput.min.js')}}" type="text/javacript"></script>
<script href="{{asset('js/uploader_bootstrap.js')}}" type="text/javacript"></script>

<!-- switch file script -->
<script href="{{asset('js/switch/uniform.min.js')}}" type="text/javacript"></script>
<script href="{{asset('js/switch/switchery.min.js')}}" type="text/javacript"></script>
<script href="{{asset('js/switch/switch.min.js')}}" type="text/javacript"></script>
<script href="{{asset('js/switch/form_checkboxes_radios.js')}}" type="text/javacript"></script>

@endsection