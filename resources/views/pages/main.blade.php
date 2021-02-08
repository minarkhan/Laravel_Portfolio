@extends('layouts.admin_layout')
@section('content')


                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Main</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Main</li>
                        </ol>
                        <form action="{{route('admin.main.update')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{method_field('PUT')}}
                        <div class="row">
                            <div class ="form-group col-md-3 mt-3">
                                <h3>Backgroud Image</h3>
                                <img style="height: 30vh" src="{{url($main->bc_img)}}">
                                <input type="file" name="bc_img" id="img_upload" class="mt-2">
                            </div>
                            <div class="form-group col-md-4 mt-3">
                                <div class="mb-3">
                                    <label for="title">Title</label>
                                    <input type="text" value="{{$main->title}}" name="title" id="title" class="form-control" >
                                    
                                </div>
                                <div class="mb-5">
                                        <label for="title">Sub-title</label>
                                        <input type="text" name="sub_title" id="sub_title" value="{{$main->sub_title}}" class="form-control">
                                        
                                </div>
                                <div class="mb-5">
                                    <h4>Upload Resume</h4>
                                       
                                        <input type="file" name="resume" id="rusume" class="mt-2">
                                        
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

