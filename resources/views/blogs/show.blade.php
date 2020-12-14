@extends('layout/main')

@section('title', 'Blog')


@section('container')
<div class="container">
    <div class="row">
        <div class="col-10 mt-3">
        <h1 class="h5 my-4">{{$blog->title}}</h1>
            <!--Featured Image-->
            <div class="card mb-4 wow fadeIn">
                <img src="{{ Storage::url($blog->img) }}" style="width:100%; height:400px;">
            </div>

                <!--Card content-->
                <div class="card-body">
                    <blockquote class="blockquote">
                        <p class="mb-0">{!! $blog->content !!}</p>
                    </blockquote>
                </div>
        </div>
    </div>
</div>
@endsection

