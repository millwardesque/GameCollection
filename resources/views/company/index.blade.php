@extends('layouts.master')

@section('content')

@if ($companies->count())
  <ul class="list-group">
  @foreach ($companies as $company)
    <li class="list-group-item">
      <strong><a href="{{ URL::route('company.show', $company->id) }}">{{ $company->name }}</a></strong>
      @if ($company->description)<p>{{ $company->description }}</p>@endif
    </li>
  @endforeach
  </ul>
@else
  <p>There aren't any companies defined! Yell at Chris!</p>
@endif

<a href="{{ URL::route('company.create') }}">Create a company</a>
@stop