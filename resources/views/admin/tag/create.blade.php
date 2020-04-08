@extends('layouts.app')

@section('content')
          <a href="{{ route('tag.index') }}" class="btn btn-sm btn-warning mb-3">Back</a>
          <form action="{{ route('tag.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                              <label for="">Enter Tag Name</label>
                              <input type="text" name="name" class="form-control" required>
                    </div>
                    <input type="submit" value="Add" class="btn btn-sm btn-primary">
          </form>
        
@endsection