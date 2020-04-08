@extends('layout')

@section('content')
<div class="row">

                    <!--Grid column-->
                    <div class="col-md-8 mb-4">

                        <!--Featured Image-->
                        <div class="card mb-4 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">

                            <img src="{{ asset('images/'.$post->featured) }}" class="img-fluid" alt="">

                        </div>
                        <!--/.Featured Image-->

                        <!--Card-->
                        <div class="card mb-4 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">

                            <!--Card content-->
                            <div class="card-body text-center">

                                <p class="h5 my-4">{{ $post->title }}</p>
                                <div class="row">
                                          <div class="col-md-3"><small>Category: <a class="badge badge-primary">{{ $post->category->name }}</a></small></div>

                                          <div class="col-md-3"><small>Tag: 
                                        @foreach($post->tags as $t) 
                                        <a class="badge badge-primary">{{ $t->name }}</a>
                                        @endforeach
                                                                            </small></div>

                                          <div class="col-md-3"><small>Author: <a class="badge badge-primary">Admin</a></small></div>

                                          <div class="col-md-3"><small>Date: <a class="badge badge-primary">{{ $post->created_at->diffForHumans() }}</a></small></div>
                                        </div>

                                <p>{{ $post->content }}</p>
                            </div>

                        </div>
                        <!--/.Card-->


          
                        <!--Comments-->
                        <div class="card card-comments mb-3 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                           @include('comment');
                        </div>
                        <!--/.Comments-->

                

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-4">

                        <!--Card: Jumbotron-->
                        <div class="card blue-gradient mb-4 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">

                            <!-- Content -->
                            <div class="card-body text-white text-center">

                                <h4 class="mb-4">
                                    <strong>Learn Bootstrap 4 with MDB</strong>
                                </h4>
                                <p>
                                    <strong>Best &amp; free guide of responsive web design</strong>
                                </p>
                                <p class="mb-4">
                                    <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video
                                        and written versions available. Create your own, stunning website.</strong>
                                </p>
                                <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-md waves-effect waves-light">Start free tutorial
                                    <i class="fas fa-graduation-cap ml-2"></i>
                                </a>

                            </div>
                            <!-- Content -->
                        </div>
                        <!--Card: Jumbotron-->

                        <!--Card : Dynamic content wrapper-->
                        <div class="card mb-4 text-center wow fadeIn" style="visibility: visible; animation-name: fadeIn;">

                            <div class="card-header">All Tag Lists</div>

                            <!--Card content-->
                            <div class="card-body">
                                @foreach($tags as $t)
                                <a href="{{ route('post.tag',$t->slug) }}" class="badge badge-success m-1">#{{ $t->name }}</a>
                                @endforeach
                            </div>

                        </div>
                        <!--/.Card : Dynamic content wrapper-->

                        <!--Card-->
                        <div class="card mb-4 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">

                            <div class="card-header">Related articles</div>

                            <!--Card content-->
                            <div class="card-body">

                                <ul class="list-unstyled">
                                    @foreach($relatedPosts as $r)
                                    <li class="media">
                                        <img class="d-flex mr-3" src="{{ asset('images/'.$r->featured) }}" width="30" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <a href="">
                                                <h5 class="mt-0 mb-1 font-weight-bold">{{ $r->title }}</h5>
                                            </a>
                                            {{ substr($r->content,0,60) }} (...)
                                        </div>
                                    </li>
                                        @endforeach
                                </ul>

                            </div>

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                </div>
@endsection