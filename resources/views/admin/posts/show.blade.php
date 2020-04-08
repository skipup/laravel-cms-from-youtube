@extends('layouts.app')

@section('content')
          <a href="{{ route('post.create') }}" class="btn btn-sm btn-success mb-3">Add New Post</a>
          <a href="{{ route('post.index') }}" class="btn btn-sm btn-primary mb-3">View All Posts</a>
          
          <p>Title    :  {{ $post->title }}</p>
          <p>Category    :  {{ $post->category->name }}</p>
          <p>Description : {{ $post->description }}</p>
          <p>Image  <img src="{{ asset('images/'.$post->featured) }}" style="width:300;"></p>

@endsection