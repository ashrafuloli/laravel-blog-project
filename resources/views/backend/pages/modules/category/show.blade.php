@extends('backend.layout.master')

@section('page-title','Category Details')

@section('content')
    <div class="row ">
        <div class="col-md-6">
            <div class="card border-dark">
                <div class="card-header text-bg-dark">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="m-0">Category Details</h4>
                        <a href="{{route('category.index')}}" class="btn btn-sm btn-info">
                            <i class="fa-solid fa-hand-point-left"></i> Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover align-middle">
                        <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <td>{{$category->id}}</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>Category Name</th>
                            <td>{{$category->name}}</td>
                        </tr>
                        <tr>
                            <th>Slug</th>
                            <td>{{$category->slug}}</td>
                        </tr>
                        <tr>
                            <th>Slug ID</th>
                            <td>{{$category->slug_id}}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>{{$category->status == 1 ? 'Published' : 'Unublished'}}</td>
                        </tr>
                        <tr>
                            <th>Order By</th>
                            <td>{{$category->order_by}}</td>
                        </tr>
                        <tr>
                            <th>Created At</th>
                            <td>
                                <p class="text-success">{{$category->created_at->toDayDateTimeString()}}</p>
                            </td>
                        </tr>
                        <tr>
                            <th>Updated At</th>
                            <td>
                                <p class="text-info">{{$category->updated_at == $category->created_at ? 'Not updated' : $category->updated_at->toDayDateTimeString()}}</p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
