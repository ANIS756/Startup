@extends('backend.master')

@section('title','Edit Blog')

@section('body')
    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Blog Form</h4>
                    <hr>
                    <div class="text-center">
                        <h5 class="text-success">
                            {{Session::get('success')}}
                        </h5>
                    </div>
                    <form class="form-horizontal p-t-20" action="{{route('blog.update',['id'=>$blog->id])}}" method="post" enctype="multipart/form-data">

                        @csrf
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Blog Title <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" name="name" value="{{$blog->name}}" class="form-control" id="exampleInputuname3" placeholder="Blog Title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInpututype3" class="col-sm-3 control-label">BLog Category <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" name="category" value="{{$blog->category}}" class="form-control" id="exampleInpututype3" placeholder="BLog Category">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">BLog Description <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea type="text" name="description"  class="form-control" id="exampleInputEmail3" placeholder="Category Description ">{{$blog->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">Blog Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image"  id="input-file-now" class="dropify" />
                                <img src="{{asset($blog->image)}}" style="height: 80px" alt="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword4" class="col-sm-3 control-label">Publication Status</label>
                            <div class="col-sm-9">
                                <label class="me-3">
                                    <input type="radio" name="status"  {{$blog->status == 1 ? 'checked' : ''  }} value="1"> Published</label>
                                <label >
                                    <input type="radio" name="status"  {{$blog->status == 2 ? 'checked' : ''  }}value="2"> UnPublished</label>
                            </div>
                        </div>

                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Update Blog</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


