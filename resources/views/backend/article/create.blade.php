@extends('backend.layouts.parent')

@section('title','Create Data')

@section('main','Create Data')

@section('content')
  <div class="container-fluid">
    <form action="{{route('article.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('POST')
      <div class="row">
        <div class="col-6">
          <div class="form-group mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" id="image" class="form-control">
          </div>
          <div class="form-group mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control">
          </div>
          <div class="form-group mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" id="price" class="form-control">
          </div>
          <div class="form-group mb-3">
            <label for="brand" class="form-label">Brand</label>
            <select name="brand" id="brand">
                @foreach ($varian as $item => $index)
                  <option value="{{ $index->id }}">
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