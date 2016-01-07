@extends('layouts.master')

@section('content')

{!! Form::open(array('route' => 'company.store')) !!}
  {!! Form::label('name', 'Company Name'); !!}
  {!! Form::text('name') !!}

  {!! Form::label('description', 'Company Description'); !!}
  {!! Form::textarea('description') !!}

  {!! Form::submit('Create'); !!}
{!! Form::close() !!}

@stop