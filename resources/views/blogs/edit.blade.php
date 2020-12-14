@extends('layout/main')

@section('title', 'Edit')


@section('container')
<div class="container">
    <div class="row">
        <div class="col-10 mt-3">
            <form method="post" action="/blogs/{{$blog->id}}" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" 
                name="title" placeholder="Insert title.." value="{{$blog->title}}">
                
                @error('title')<div class="invalid-feedback">
                    {{$message}}
                </div>@enderror
            </div>

            <div class="form-group">
                <label for="img">Image</label>
                <input type="file" class="form-control-file @error('img') is-invalid @enderror" id="img" name="img" >

                @error('img')<div class="invalid-feedback">
                    {{$message}}
                </div>@enderror
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="3" placeholder="Insert content..">{{$blog->content}}</textarea>
                                
                @error('content')<div class="invalid-feedback">
                    {{$message}}
                </div>@enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
        </div>
    </div>
</div>

            <script>
            tinymce.init({
                selector: 'textarea',
            });
            </script>
@endsection