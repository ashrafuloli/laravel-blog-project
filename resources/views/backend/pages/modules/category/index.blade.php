@extends('backend.layout.master')

@section('page-title','Category List')

@section('content')
    <div class="row ">
        <div class="col-md-12">
            <div class="card border-dark">
                <div class="card-header text-bg-dark">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="m-0">Category List</h4>
                        <a href="{{route('category.create')}}" class="btn btn-sm btn-success">
                            Add New <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-bordered table-striped table-hover align-middle">
                        <thead class="table-dark">
                        <tr>
                            <th>SL</th>
                            <th>Category Name</th>
                            <th>Slug</th>
                            <th>Slug ID</th>
                            <th>Status</th>
                            <th>Order By</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $sl = 1 @endphp
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$sl++}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->slug}}</td>
                                <td>{{$category->slug_id}}</td>
                                <td>{{$category->status == 1 ? 'Published' : 'Unublished'}}</td>
                                <td>{{$category->order_by}}</td>
                                <td>
                                    <p class="text-success">{{$category->created_at->toDayDateTimeString()}}</p>
                                    <p class="text-info">{{$category->updated_at == $category->created_at ? 'Not updated' : $category->updated_at->toDayDateTimeString()}}</p>
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('category.show', $category->id) }}"
                                           class="btn btn-sm btn-info text-white">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="{{ route('category.edit', $category->id) }}"
                                           class="btn btn-sm btn-warning text-white">
                                            <i class="fa-solid fa-edit"></i>
                                        </a>
                                        {!! Form::open(['route'=>['category.destroy', $category->id], 'method'=>'delete', 'id'=>'category_delete_form_'.$category->id]) !!}
                                        {!! Form::button('<i class="fa-solid fa-trash"></i>', ['class'=>'btn btn-sm btn-danger category-delete-button', 'type'=>'button', 'data-id'=>$category->id, 'id'=>'category_delete_button_'.$category->id]) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@if(Session::has('msg'))
    @push('script')
        <script>
            Swal.fire({
                position: "top-end",
                icon: "<?php echo session('cls'); ?>",
                toast: true,
                title: "<?php echo session('msg'); ?>",
                showConfirmButton: false,
                timer: 5000
            });
        </script>
    @endpush
@endif


@push('script')
    <script>
        $('.category-delete-button').on('click', function () {
            let id = $(this).attr('data-id');
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#category_delete_form_' + id).submit();
                }
            });
        });
    </script>
@endpush
