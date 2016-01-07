@extends('layouts.master')

@section('content')

<p>Welcome to the site!</p>
<p>Check out all of the <a href="{{ URL::route('company.index') }}">companies</a> we already have!</p>

@stop