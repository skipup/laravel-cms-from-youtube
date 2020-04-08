@extends('layouts.app')

@section('content')
          <a href="" class="btn btn-sm btn-warning mb-3">Back</a>
          <form action="{{ route('category.update',$category->id) }}" method="post">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="form-group">
                              <label for="">Enter Category Name</label>
                              <input type="text" name="category" class="form-control" value="{{ $category->name }}" required>
                    </div>
                    <input type="submit" value="Update" class="btn btn-sm btn-primary">
          </form>
        
@endsection