<div class="mb-3">
    {!! Form::label('name', 'Category Name', ['class'=>'form-label']) !!}
    {!! Form::text('name', null, ['id'=>'name','class'=>'form-control','placeholder'=>'Enter Category Name']) !!}
</div>

@error('name')
<p class="text-danger"><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</p>
@enderror

<div class="mb-3">
    {!! Form::label('slug', 'Category Slug', ['class'=>'form-label']) !!}
    {!! Form::text('slug', null, ['id'=>'slug','class'=>'form-control','placeholder'=>'Enter Category Slug']) !!}
</div>

@error('slug')
<p class="text-danger"><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</p>
@enderror

<div class="mb-3">
    {!! Form::label('status', 'Category Status', ['class'=>'form-label']) !!}
    {!! Form::select('status', [1=>'Publish', 0=>'Unpublished'], null, ['class'=>'form-control','placeholder'=>'Select Category Status']) !!}
</div>

@error('status')
<p class="text-danger"><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</p>
@enderror

<div class="mb-3">
    {!! Form::label('order_by', 'Category Serial', ['class'=>'form-label']) !!}
    {!! Form::number('order_by', null, ['class'=>'form-control','placeholder'=>'Select Category Serial']) !!}
</div>

@error('order_by')
<p class="text-danger"><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</p>
@enderror

@push('script')
    <script>
        $("#name").on('input', function () {
            let value = $(this).val();
            // value = value.replaceAll(' ', '-').toLocaleLowerCase();
            value = value.replaceAll(/[^a-zA-Z0-9 -]/g, '').replaceAll(/\s+/g, '-').replaceAll(/-+/g, '-').toLocaleLowerCase();
            $('#slug').val(value);
        })
    </script>
@endpush

