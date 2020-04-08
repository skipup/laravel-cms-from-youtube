@extends('layouts.app')

@section('content')
          <a href="{{ route('post.create') }}" class="btn btn-sm btn-success mb-3">Add New Post</a>
          
          <table class="table table-striped">
                    <tr>
                              <td>No</td>
                              <td>Name</td>
                              <td>Action</td>
                    </tr>
                    @php $i=1; @endphp
                    @foreach($posts as $c)
                    <tr>
                              <td>@php echo $i;$i++; @endphp</td>
                              <td>{{ $c->title }}</td>
                              <td>
                                        <a href="{{ route('post.edit',$c->id) }}" class="badge badge-warning">Update</a>
                                        <a href="{{ route('post.show',$c->id) }}" class="badge badge-success">View</a>
                                        <form action="{{ route('post.destroy',$c->id) }}" method="post">
                                                  @csrf
                                                  {{ method_field('DELETE') }}
                                                  <input type="submit" value="Delete" class="badgee badge-danger">
                                        </form>
                              </td>
                    </tr>
                    @endforeach
          </table>
@endsection