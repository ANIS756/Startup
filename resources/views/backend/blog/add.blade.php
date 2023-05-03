@extends('backend.master')

@section('title','Add Blog')

@section('body')
    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Blog Form</h4>
                    <hr>
                    <div class="text-center">
                        <h5 class="text-success">
                            {{Session::get('success')}}
                        </h5>
                    </div>
                    <form class="form-horizontal p-t-20" action="{{route('blog.create')}}" method="post" enctype="multipart/form-data">

                        @csrf
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">BLog Title <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="exampleInputuname3" placeholder="Blog Title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInpututype3" class="col-sm-3 control-label">BLog Category <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" name="category" class="form-control" id="exampleInpututype3" placeholder="BLog Category">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Blog Description <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea type="text" name="description" class="form-control" id="exampleInputEmail3" placeholder="Blog Description "></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">Blog Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" id="input-file-now" class="dropify" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword4" class="col-sm-3 control-label">Publication Status</label>
                            <div class="col-sm-9">
                                <label class="me-3"> <input type="radio" name="status" value="1" checked> Published</label>
                                <label > <input type="radio" name="status" value="2"> Published</label>
                            </div>
                        </div>

                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Create New Category</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

