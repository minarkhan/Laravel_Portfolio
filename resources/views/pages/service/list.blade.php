@extends('layouts.admin_layout')
@section('content')


                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">List of Services</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">List of Services</li>
                        </ol>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Icon</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($services)>0)
                                @foreach($services as $service)
                                <tr>
                                    <td scope="row">{{$service->id}}</td>
                                    <td scope="row">{{$service->icon}}</td>
                                    <td scope="row">{{$service->title}}</td>
                                    <td scope="row">{{Str:: limit(strip_tags($service->description),40)}}</td>
                                    <td scope="row">
                                        <div class="row">
                                            <div class="m-2">
                                                <a href="{{route('admin.services.edit', $service->id)}}" class="btn btn-primary">Edit</a>
                                                
                                                
                                            </div>
                                             <div class="m-2">
                                                <form method="post" action="{{route('admin.services.destroy',$service->id)}}">
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

