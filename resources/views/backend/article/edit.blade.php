@extends('backend.layouts.parent')

@section('title','Edit Data')

@section('main','Update Data')

@section('content')
  <div class="container-fluid">
    <form action="{{route('article.update',$article->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
      @method('PUT')
      <div class="row">
        <div class="col-6">
          <div class="form-group mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" id="image" class="form-control">
          </div>
          <div class="form-group mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{$article->title}}">
          </div>
          <div class="form-group mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" name="price" id="price" class="form-control" value="{{$article->price}}">
          </div>
          <div class="form-group mb-3">
            <label for="brand" class="form-label">Brand</label>
            <select name="brand" id="brand">
              @foreach ($varian as $index)
                <option {{ old('varian_id', $article->varian_id) == $index->id ? 'selected' : ''}} value="{{ $index->id }}">
                  {{ $index->brand }}
                </option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <button class="btn btn-primary" type="submit">Submit</button>
          </div>
        </div>
      </div>
    </form>
  </div>
@endsection