@extends('backend.master')

@section('title','Manage Blog')

@section('body')
    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Table</h4>
                    <h6 class="card-subtitle">Data table example</h6>
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-striped border">
                            <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Category Name</th>
                                <th>Category Description</th>
                                <th>Category Image</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($blogs as $blog)

                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$blog->name}}</td>
                                    <td>{{$blog->description}}</td>
                                    <td>
                                        <img src="{{asset($blog->image)}}" style="height: 80px" alt="">
                                    </td>
                                    <td>{{$blog->status==1 ? 'Published' :'Unpublished'}}</td>
                                    <td>
                                        <a href="{{route('blog.edit',['id'=>$blog->id])}}" class="btn btn-success btn-sm">
                                            <i class="ti-agenda"></i>
                                        </a>
                                        <a href="{{route('blog.delete',['id'=>$blog->id])}}" onclick="return confirm('Are You Sure')" class="btn btn-danger btn-sm">
                                            <i class="ti-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>



                </div>
            </div>
        </div>
    </div>
@endsection

