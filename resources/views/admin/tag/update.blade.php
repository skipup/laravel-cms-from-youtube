@extends('layouts.app')

@section('content')
          <a href="{{ route('tag.index') }}" class="btn btn-sm btn-warning mb-3">Back</a>
          <form action="{{ route('tag.update',$tag->id) }}" method="post">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="form-group">
                              <label for="">Enter Tag Name</label>
                              <input type="text" name="name" class="form-control" value="{{ $tag->name }}" required>
                    </div>
                    <input type="submit" value="Update" class="btn btn-sm btn-primary">
          </form>
        
@endsection