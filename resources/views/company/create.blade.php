@extends('layouts.master')

@section('content')

{!! Form::open(array('route' => 'company.store')) !!}
  <div class="form-group">
    {!! Form::label('name', 'Company Name'); !!}
    {!! Form::text('name', '', array('class' => 'form-control')) !!}
  </div>

  <div class="form-group">
    {!! Form::label('description', 'Company Description'); !!}
    {!! Form::textarea('description', '', array('class' => 'form-control')) !!}
  </div>

  {!! Form::submit('Create', array('class' => 'btn btn-default')); !!}
{!! Form::close() !!}

@stop