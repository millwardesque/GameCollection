@extends('layouts.master')

@section('content')

{!! Form::model($company, array('route' => array('company.update', $company->id), 'method' => 'put')) !!}
  {!! Form::label('name', 'Company Name'); !!}
  {!! Form::text('name') !!}

  {!! Form::label('description', 'Company Description'); !!}
  {!! Form::textarea('description') !!}

  {!! Form::submit('Update'); !!}
{!! Form::close() !!}

{!! Form::model($company, array('route' => array('company.destroy', $company->id), 'method' => 'delete')) !!}
  {!! Form::submit('Delete'); !!}
{!! Form::close() !!}

@stop