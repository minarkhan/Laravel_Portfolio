@extends('layouts.admin_layout')
@section('content')


                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Edit portfolio</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit portfolio</li>
                        </ol>
                        <form action="{{route('admin.portfolios.update',$portfolio->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="row">
                           
                            <div class="form-group col-md-6 mt-3">
                                <div class="mb-3">
                                    <label for="title">Title</label>
                                    <input type="text" value="{{$portfolio->title}}" name="title" id="title" class="form-control" >
                                    
                                </div>
                                <div class="mb-5">
                                        <label for="title">Sub-title</label>
                                        <input type="text" name="sub_title" id="sub_title" value="{{$portfolio->sub_title}}" class="form-control">
                                        
                                </div>
                                <div class="mb-5">
                                        <label for="title">Client</label>
                                        <input type="text" name="client" id="client" value="{{$portfolio->client}}" class="form-control">
                                        
                                </div>
                                <div class="mb-5">
                                        <label for="title">Category</label>
                                        <input type="text" name="category" id="category" value="{{$portfolio->category}}" class="form-control">
                                        
                                </div>
                                <div class ="form-group  mt-3">
                                    <label>Description</label>
                                    <textarea name="description" class="col-lg" rows="5">{{$portfolio->description}} </textarea>
                                </div>
                            </div>
                            <div class="form-group col-md-6 mt-3">
                                 <div class ="form-group mt-3">
                                    <h3>Big Image</h3>
                                    <img style="height: 15vh" src="{{url($portfolio->big_image)}}"><br>
                                    <input type="file" name="big_image" value="{{$portfolio->big_image}}"  id="img_upload" class="mt-2">
                                </div>
                                <div class ="form-group mt-3">
                                    <h3>Small Image</h3>
                                    <img style="height: 15vh" src="{{url($portfolio->small_image)}}"><br>
                                    <input type="file" name="small_image" value=""  id="img_upload" class="mt-2">
                                </div>  
                            </div>
                        </div>
                        <input type="submit" name="submit" value="Upadate" class="btn btn-primary mt-5">
                        </form>
                    </div>
                </main>

@endsection

