@extends('admin.layout.admin')
@section('admin-content')
    <div class="row mt-3">
        <div class="col-md-6 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>{{ isset($e_category)?'Edit category' : 'Add category'}}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- regular_form($input_name, $label_name, $type, $placeholder = null) --}}
                        {!! Main::admin_form('category_name', 'Category Name', 'text', '') !!}

                        <div class="mb-3">
                            <label for="" class="form-label">Parent Category</label>
                            <select name="parent_category"
                                class="form-select @error('parent_category') is-invalid @enderror">
                                <option></option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('parent_category')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        {{-- id,value,name --}}
                        <div class="mb-3">
                            {!! Main::ShowUploadImageHtml('inputid', '', 'img_path') !!}
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Add Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
