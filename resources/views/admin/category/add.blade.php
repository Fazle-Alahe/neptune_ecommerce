@extends('admin.layout.admin')
@section('admin-content')
    <div class="row mt-3">
        <div class="col-md-6 m-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>{{ isset($e_category) ? 'Edit category' : 'Add category' }}</h3>
                    <a href="{{ route('category.list') }}" class="btn btn-info">Category List</a>
                </div>
                <div class="backToList">
                    
                </div>
                <div class="card-body">
                    <form
                        action="{{ isset($e_category) ? route('category.update', $e_category->id) : route('category.store') }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        <x-form-input name="category_name" label="Category Name" type="text" :value="$e_category->category_name ?? ''" />

                        <x-form-select name="parent_category" label="Parent Category" :options="$categories->pluck('category_name', 'id')" :selected="old('parent_category', $e_category->parent_category ?? null)"
                            />


                        {{-- id,value,name --}}
                        <div class="mb-3">
                            {!! Main::ShowUploadImageHtml('inputid', $e_category->img_path ?? null, 'img_path') !!}
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
