@extends('frontend.layouts.base')
@section('title', 'Home')
@section('body')
    <div class="container my-5">
        <div class="heading">
            <h1>Contact With Us</h1>
        </div>
        @if (session()->has('message'))
            <div class="alert alert-success">{{ session()->get('message') }}</div>
        @endif
        <form action="{{ route('frontend.storeContactDetails') }}" method="post">
            @csrf
            <div class="form-input">
                <input type="text" name="name" class="form form-control" placeholder="Enter your Name">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div><br>

            <div class="form-input">
                <input type="text" name="email" class="form form-control" placeholder="Enter your email">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div><br>

            <div class="form-input">
                <textarea name="message" name="name" class="form form-control" placeholder="Enter the message....." cols="30"
                    rows="10"></textarea>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div><br>

            <div class="d-grid">
                <input type="submit" class="btn btn-secondary" value="Send">
            </div>
        </form>
    </div>
@endsection
