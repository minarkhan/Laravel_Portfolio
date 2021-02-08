@extends('layouts.admin_layout')
@section('content')


                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Edit Service</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit Service</li>
                        </ol>
                        <form action="{{route('admin.services.update', $service->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="row">
                           
                            <div class="form-group col-md-4 mt-3">
                                <div class="mb-3">
                                    <label for="icon">Font Awesome Icon</label>
                                    <input type="text" name="icon" id="icon" class="form-control" value="{{$service->icon}}">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" class="form-control"  value="{{$service->title}}">
                                    
                                </div>
                                <div class="mb-5">
                                        <label for="title">Description</label>
                                        <textarea type="text" name="description" id="description"  class="form-control">{{$service->description}}</textarea>
                                        
                                </div>
                               
                            </div>   
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary mt-5">
                        </form>
                        <!-- <div class="card mb-4">
                            <div class="card-body">
                                <p class="mb-0">
                                    This page is an example of using Dashboard. By removing the
                                    <code>.sb-nav-fixed</code>
                                    class from the
                                    <code>body</code>
                                    , the top navigation and side navigation will become static on scroll. Scroll down this page to see an example.
                                </p>
                            </div>
                        </div> -->
                        <div style="height: 100vh"></div>
                        <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the Dashboard demo.</div></div>
                    </div>
                </main>

@endsection

