@extends('layouts.admin_layout')
@section('content')


                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">List of about</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">List of about</li>
                        </ol>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Sub title</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($abouts)>0)
                                @foreach($abouts as $about)
                                <tr>
                                    
                                    <td scope="row">{{$about->id}}</td>
                                    <td scope="row">{{$about->title}}</td>
                                    <td scope="row">{{$about->sub_title}}</td>
                                    <td scope="row">
                                        <img style="height: 10vh" src="{{url($about->image)}}">
                                    </td>
                                    <td scope="row">{{Str:: limit(strip_tags($about->description),40)}}</td>
                                    <td scope="row">
                                        <div class="row">
                                            <div class="m-2">
                                                <a href="{{route('abouts.edit', $about->id)}}" class="btn btn-primary">Edit</a>
                                                
                                                
                                            </div>
                                             <div class="m-2">
                                                <form method="post" action="{{route('abouts.destroy',$about->id)}}">
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

