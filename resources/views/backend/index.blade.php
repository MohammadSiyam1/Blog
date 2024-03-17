@extends('backend.layouts.base')
@section('title','Dashboard')
@push('css')
    <style>
        h1{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
        }
    </style>
@endpush
@section('body')
    <h1>Welcome to the dashboard</h1>
@endsection
