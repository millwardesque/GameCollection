@extends('layouts.master')

@section('content')

@if ($company->description)
  <p>{{ $company->description }}</p>
@endif

<div>
  <a href="{{ URL::route('company.edit', $company->id) }}">Edit</a>
</div>

<div>
  <a href="{{ URL::route('company.index') }}">List all companies</a>
</div>
@stop