@extends('layouts.app')

@section('content')
          <a href="" class="btn btn-sm btn-warning mb-3">Back</a>
          <form action="{{ route('post.update',$post->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="form-group">
                              <label for="">Choose Category</label>
                              <select class="form-control" name="category_id">
                                        @foreach($categories as $c)
                                        <option value="{{ $c->id }}" @if($c->id == $post->category_id)    selected            @endif>{{ $c->name }}</option>
                                        @endforeach
                              </select>
                    </div>
                    <div class="form-group">
                              <label for="">Choose Tag</label>
                              <div class="checkbox">
                                                  @foreach($tags as $t)
                                                  <label for="">
                                                            {{ $t->name }}
                                                            <input type="checkbox" value="{{ $t->id }}" name="tags[]" 
                                                            @foreach($post->tags as $tag)
                                                                      @if($tag->id == $t->id)
                                                                                checked
                                                                      @endif
                                                            @endforeach
                                                            >
                                                  </label>
                                                  @endforeach
                              </div>
                              
                    </div>
                    <div class="form-group">
                              <label for="">Enter  Post Title</label>
                              <input type="text" name="title" class="form-control" value="{{ $post->title }}" required>
                    </div>
                    <div class="form-group">
                              <label for="">Enter Description</label>
                              <textarea name="description" id="" cols="30" rows="4" required class="form-control">{{ $post->content }}</textarea>
                    </div>
                    <div class="form-group">
                              <label for="">Choose Featured Image</label>
                              <input type="file" name="image">
                              <img src="{{ asset('images/'.$post->featured) }}" style="width:100px;border-radius:5px;" alt="">
                    </div>
                    <input type="submit" value="Update" class="btn btn-sm btn-primary">
          </form>
        
@endsection