@extends('layouts.admin_layout')
@section('content')


                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">List of portfolio</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">List of portfolio</li>
                        </ol>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Sub title</th>
                                    <th scope="col">Big Image</th>
                                    <th scope="col">Small Image</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Client</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($portfolios)>0)
                                @foreach($portfolios as $portfolio)
                                <tr>
                                    
                                    <td scope="row">{{$portfolio->id}}</td>
                                    <td scope="row">{{$portfolio->title}}</td>
                                    <td scope="row">{{$portfolio->sub_title}}</td>
                                    <td scope="row">
                                        <img style="height: 10vh" src="{{url($portfolio->big_image)}}">
                                    </td>
                                    <td scope="row">
                                        <img style="height: 10vh" src="{{url($portfolio->small_image)}}">
                                    </td>
                                    <td scope="row">{{Str:: limit(strip_tags($portfolio->description),40)}}</td>
                                    <td scope="row">{{$portfolio->client}}</td>
                                    <td scope="row">{{$portfolio->category}}</td>
                                    <td scope="row">
                                        <div class="row">
                                            <div class="m-2">
                                                <a href="{{route('admin.portfolios.edit', $portfolio->id)}}" class="btn btn-primary">Edit</a>
                                                
                                                
                                            </div>
                                             <div class="m-2">
                                                <form method="post" action="{{route('admin.portfolios.destroy',$portfolio->id)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" name="submit" class="btn btn-danger" value="delete">
                                                </form>
                                                
                                            </div>
                                        </div>
                                </td>
                                </tr>
                                @endforeach
                                @endif
                                
                            </tbody>
                        </table>
                        
                        
                    </div>
                </main>

@endsection

