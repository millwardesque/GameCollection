@extends('layouts.master')

@section('content')

@if ($companies->count())
  <ul>
  @foreach ($companies as $company)
    <li><a href="{{ URL::route('company.show', $company->id) }}">{{ $company->name }} - {{ $company->description }}</a></li>
  @endforeach
  </ul>
@else
  <p>There aren't any companies defined! Yell at Chris!</p>
@endif

<a href="{{ URL::route('company.create') }}">Create a company</a>
@stop