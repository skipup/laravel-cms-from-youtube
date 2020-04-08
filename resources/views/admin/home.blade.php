@extends('layouts.app')

@section('content')
<div class="wrapper" id="page-wrapper">

                <div class="container" id="content" tabindex="-1">
        
                        <div class="row">
                                <div class="metr">                          
                                    <a style="cursor: pointer" class="metrostyle eenmetro bg-warning rounded" href="../Admin/Sample_List.aspx">
                                        <span class="fa fa-tag" style="font-size:2em;color:white;padding-left:0.3em;margin-top:3px ;float:left"></span>
                                        <span style="color:white;font-size: 1.1em;float:right;margin-top:5px;padding-right:0.2em">{{ $tagCount }}</span>   
                                        <span style="color:white;float:left;margin-top:35px;margin-left:10px;margin-right:180px">Tags</span>
                                    </a>
                                     <a class="metrostyle yoometro bg-info rounded" style="cursor: pointer" href="../UserGUI/Users_List.aspx">
                                        <span class="fa fa fa-bars" style="font-size: 2em; color: white; padding-left: 0.3em; margin-top: 3px ;float:left"></span>
                                        <span style="color: white; font-size:  1.1em; float: right; margin-top: 5px; padding-right: 0.2em">{{ $categoryCount }}</span>
                                        <span style="color: white; float: left; margin-top: 35px; margin-left: 10px;margin-right:80px">Category </span>
                                    </a>
                                    <a class="metrostyle eenmetro bg-dark rounded" style="cursor: pointer" href="">        
                                        <span class="fa fa-newspaper-o" style="font-size: 2em; color: white; padding-left: 0.3em; margin-top: 3px ;float:left"></span>
                                        <span style="color: white; font-size:  1.1em; float: right; margin-top: 5px; padding-right: 0.2em">{{ $postCount }}</span>
                                        <span style="color: white; float: left; margin-top: 35px; margin-left: 10px;margin-right:80px">Posts</span>
                                    </a>
                                    <a class="metrostyle metrostylelarge reemetro rounded bg-success" style="cursor: pointer" href="../Admin/Diseases.aspx">
                                        <span class="fa fa-user" style="font-size: 2em; color: white; padding-left: 0.3em; margin-top: 3px ;float:left"></span>
                                        <span style="color: white; font-size:  1.1em; float: right; margin-top: 5px; padding-right: 0.2em">{{ $userCount }}</span>
                                        <span style="color: white; float: left; margin-top: 35px; margin-left: 10px;margin-right:180px">Users </span>
                                    </a>
                               
                                </div>
                               
                                </div>                
                        </div>
                        <br>
                        <div class="row">
                                <div class="col-md-12">
                                        <table class="table table-striped">
                                                <tr>
                                                        <td>No</td>
                                                        <td>Title</td>
                                                        <td>Image</td>
                                                </tr>
                                                @php $i=1; @endphp
                                                @foreach($posts as $p)
                                                <tr>
                                                        <td>@php echo $i;$i++; @endphp</td>
                                                        <td>{{ $p->title }}</td>
                                                        <td>
                                                                <img src="{{ asset('images/'.$p->featured) }}" style="width:30px;border-radius:50%;" alt="">
                                                        </td>
                                                </tr>   
                                                @endforeach                                            
                                        </table>
                                </div>
                                <div class="col-md-4">
                                        <ul class="list-group">
                                                <li class="list-group-item bg-info text-white">Caetgory Lists</li>
                                                @php $i=1; @endphp
                                                @foreach($category as $c)
                                                <li class="list-group-item">
                                                        <span class="float-left"><?php echo $i;$i++; ?></span>
                                                        <span class="badge gadge-success float-right text-warning">{{ $c->name }}</span>
                                                </li>
                                                @endforeach
                                        </ul>
                                </div>

                                <div class="col-md-4">
                                                <ul class="list-group">
                                                        <li class="list-group-item bg-warning text-white">Tag Lists</li>
                                                        @php $i=1; @endphp
                                                        @foreach($tags as $c)
                                                        <li class="list-group-item">
                                                                <span class="float-left"><?php echo $i;$i++; ?></span>
                                                                <span class="badge gadge-success float-right text-warning">{{ $c->name }}</span>
                                                        </li>
                                                        @endforeach
                                                </ul>
                                        </div>
                                        <div class="col-md-4">
                                                        <ul class="list-group">
                                                                <li class="list-group-item bg-danger text-white">Caetgory Lists</li>
                                                                @php $i=1; @endphp
                                                                @foreach($users as $c)
                                                                <li class="list-group-item">
                                                                        <span class="float-left"><?php echo $i;$i++; ?></span>
                                                                        <span class="badge gadge-success float-right text-warning">{{ $c->name }}</span>
                                                                </li>
                                                                @endforeach
                                                        </ul>
                                                </div>
                        </div>
        </div>
@endsection
