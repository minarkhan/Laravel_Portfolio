@extends('layouts.admin_layout')
@section('content')

@include('alert.messages')


                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Create</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>

                        <form action="{{route('abouts.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{method_field('POST')}}
                        <div class="row">
                           
                            <div class="form-group col-md-6 mt-3">
                                <div class="mb-3">
                                    <label for="title">Title</label>
                                    <input type="text" value="" name="title" id="title" class="form-control" >
                                    
                                </div>
                                <div class="mb-5">
                                        <label for="title">Sub-title</label>
                                        <input type="text" name="sub_title" id="sub_title" value="" class="form-control">
                                        
                                </div>
                                <div class ="form-group  mt-3">
                                    <label>Description</label>
                                    <textarea name="description" class="col-lg" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group col-md-6 mt-3">
                                 <div class ="form-group mt-3">
                                    <h3>Image</h3>
                                    <img style="height: 30vh" src="{{asset('assets/img/image.jpg')}}">
                                    <input type="file" name="image" id="img_upload" class="mt-2">
                                </div>
                            </div>
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary mt-5">
                        </form>


                    </div>
                </main>

@endsection

