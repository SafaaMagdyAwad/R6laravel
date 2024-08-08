@extends('layout.app')

@section('content')
@include('includes.header')
@include('includes.team')
@include('includes.testimonials')
@endsection 

@section('modal')
    @include('includes.modals')
@endsection