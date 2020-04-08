@extends('layouts.app')

@section('content')
          <a href="" class="btn btn-sm btn-warning mb-3">Back</a>
          <form action="{{ route('category.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                              <label for="">Enter Category Name</label>
                              <input type="text" name="category" class="form-control" required>
                    </div>
                    <input type="submit" value="Add" class="btn btn-sm btn-primary">
          </form>
        
@endsection