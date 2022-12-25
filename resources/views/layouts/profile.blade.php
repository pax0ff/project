@extends('layouts.app')
@section('content')
    {{__('Welcome')}}, {{Auth::user()->name}}

@endsection
