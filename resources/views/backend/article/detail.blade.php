@extends('backend.layouts.parent')

@section('title', 'Detail Data')

@section('main', 'Detail')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <img src="{{ asset('storage/' . $article->image) }}" class="img-fluid mb-4" alt="Article Image" style="max-width: 100%; max-height: 400px;">
    </div>
    <div class="col-md-6">
      <h2>{{ $article->title }}</h2>
      <p class="text-muted">Brand: {{ $article->getBrand->brand }}</p>
      <p class="lead">Rp. {{ number_format($article->price, 0, ',', '.') }}</p>
      <p>{{ $article->description }}</p>
      <a href="{{ route('article.index') }}" class="btn btn-warning">Back</a>
    </div>
  </div>
</div>
@endsection