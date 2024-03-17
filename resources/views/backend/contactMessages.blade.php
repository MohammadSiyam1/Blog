@extends('backend.layouts.base')
@section('title', 'About Us')
@section('body')
    <div class="container">
        <h1>Messages</h1>
        @if (session()->has('message'))
            <div class="alert alert-danger">{{ session()->get('message') }}</div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>SL no.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
            @foreach ($msgs as $key => $msg)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $msg->name }}</td>
                    <td>{{ $msg->email }}</td>
                    <td>{{ $msg->message }}</td>
                    <td><a href="{{ route('deletemessages', $msg->id) }}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
