@extends('layout/main')

@section('title', 'Author Page')


@section('container')
<div class="container">
    <div class="row">
        <div class="col-10 mt-3">
            <h1 class="mt-3">Blog</h1>

            <a href="/blogs/create" class="btn btn-secondary my-3">Add New Blog</a>
            @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif

            <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($blogs as $blog)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$blog->title}}</td>
                            <td>
                            <a href="/blogs/{{$blog->id}}" class="badge badge-info">View</a>
                            <a href="/blogs/{{$blog->id}}/edit" class="badge badge-warning">Edit</a>
                            
                            <form action="/blogs/{{$blog->id}}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                    <button type="submit" class="badge badge-danger">Delete</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
    </div>
</div>
@endsection