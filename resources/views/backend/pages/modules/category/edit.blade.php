@extends('backend.layout.master')

@section('page-title','Edit Category')

@section('content')
    <div class="row ">
        <div class="col-md-6">
            <div class="card border-dark">
                <div class="card-header text-bg-dark">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="m-0">Edit category</h4>
                        <a href="{{route('category.index')}}" class="btn btn-sm btn-info">
                            <i class="fa-solid fa-hand-point-left"></i> Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    {!! Form::model($category, ['route'=>['category.update', $category->id],'method'=>'put']) !!}

                    @include('backend.pages.modules.category.form')

                    {!! Form::button('<i class="fa-solid fa-pen-to-square"></i> Update', ['class'=>'btn btn-warning px-4','type'=>'submit']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

