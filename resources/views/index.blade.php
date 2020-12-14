@extends('layout/main')

@section('title', 'Blog')


@section('container')
<div class="container">
    <div class="row">
        <div class="col-10 mt-3">

            @foreach($blogs as $blog)
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-6">
                    <img src="{{Storage::url($blog->img)}}" class="rounded float-left" style="height:250px; width:350px;">
                    </div>
                    <div class="col-md-5">
                        <div class="card-body">
                            <a class="card-text" href="/blogs/{{$blog->id}}" style="font-size:20px; color:black;">{{$blog->title}}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection