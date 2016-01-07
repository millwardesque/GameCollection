@extends('layouts.master')

@section('content')

{!! Form::model($company, array('route' => array('company.update', $company->id), 'method' => 'put', 'class' => 'form-horizontal')) !!}
  <div class="form-group">
    {!! Form::label('name', 'Company Name'); !!}
    {!! Form::text('name', $company->name, array('class' => 'form-control')) !!}
  </div>

  <div class="form-group">
    {!! Form::label('description', 'Company Description'); !!}
    {!! Form::textarea('description', $company->description, array('class' => 'form-control')) !!}
  </div>

  {!! Form::submit('Update', array('class' => 'btn btn-default')); !!}
{!! Form::close() !!}

{!! Form::model($company, array('route' => array('company.destroy', $company->id), 'method' => 'delete')) !!}
  {!! Form::submit('Delete', array('class' => 'btn btn-default')); !!}
{!! Form::close() !!}

@stop