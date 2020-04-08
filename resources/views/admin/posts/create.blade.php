@extends('layouts.app')

@section('content')
          <a href="" class="btn btn-sm btn-warning mb-3">Back</a>
          <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                              <label for="">Choose Category</label>
                              <select class="form-control" name="category_id">
                                        @foreach($categories as $c)
                                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                                        @endforeach
                              </select>
                    </div>

                    <div class="form-group">
                              <label for="">Choose Tag</label>
                              <div class="checkbox">
                                        @foreach($tags as $t)
                                        <label for=""> {{ $t->name }}
                                                  <input type="checkbox" name="tags[]" value="{{ $t->id }}">
                                        </label><br>
                                        @endforeach
                              </div>
                    </div>

                    <div class="form-group">
                              <label for="">Enter  Post Title</label>
                              <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                              <label for="">Enter Description</label>
                              <textarea name="description" id="" cols="30" rows="4" required class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                              <label for="">Choose Featured Image</label>
                              <input type="file" name="image">
                    </div>
                    <input type="submit" value="Add" class="btn btn-sm btn-primary">
          </form>
        
@endsection