@extends('layouts.master')

@section('content')

@if ($company->description)
  <p>{{ $company->description }}</p>
@endif

<div>
  <a class="btn btn-default" href="{{ URL::route('company.edit', $company->id) }}">Edit</a>
  <a class="btn btn-default" href="{{ URL::route('company.index') }}">List all companies</a>
</div>
@stop