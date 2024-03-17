@extends('backend.layouts.base')
@section('title', 'All Blogs')
@section('body')
    <div class="container">
        <h1>All Blogs</h1>
        <table class="table table-bordered">
            <tr>
            <td>Sl no.</td>
            <td>Title</td>
            <td>Body</td>
            <td>Author Name</td>
            <td>Thumbnail</td>
            <td>Actions</td>
            </tr>
            @foreach ($blogs as $key => $blog)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $blog->Title }}</td>
                    @php
                        $body = Illuminate\Support\Str::of($blog->Body)->words(30);
                    @endphp
                    <td style="width: 470px;">{!! $body !!}</td>
                    <td>{{ $blog->Author }}</td>
                    <td style="width: 15%;"><img class="w-100" src="{{asset($blog->Thumbnail)}}" alt=""></td>
                    <td>
                        <a class="btn btn-secondary" href="{{route('blog.edit',$blog->id)}}" class="btn btn-gray">Edit</a>
                        <form action="{{route('blog.destroy',$blog->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

