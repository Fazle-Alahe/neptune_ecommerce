@extends('admin.layout.admin')
@section('admin-content')
    <div class="container my-3">
        <form action="{{ route('user.select.destroy') }}" method="post">
            @csrf
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Category List</h3>
                    <div class="quick-access">
                        <a href="{{ route('add.category') }}" class="btn btn-success">Add Category</a>
                        <a href="{{ route('category.list') }}" class="btn btn-info">Category List</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <tr>
                            {{-- <th style="width: 7%;">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkmeout">
                                    <label class="form-check-label" for="checkmeout"></label>
                                </div>
                            </th> --}}
                            <th style="width: 7%;">SL</th>
                            <th>Category Name</th>
                            <th>Parent Category</th>
                            <th style="width: 12%;">Image</th>
                            <th style="width: 12%;">Status</th>
                            <th>Action</th>
                        </tr>

                        @forelse ($categories as $sl=>$category)
                            <tr>
                                {{-- <td>
                                    <div class="form-check">
                                        <input class="form-check-input chkDel" name="category_id[]" type="checkbox"
                                            value="{{ $category->id }}" id="invalidCheck">
                                        <label class="form-check-label" for="invalidCheck"></label>
                                    </div>
                                </td> --}}
                                <td>{{ $sl + 1 }}</td>
                                <td>{{ $category->category_name }}</td>
                                <td>
                                    @if ($category->parentCategory)
                                        {{ $category->parentCategory->category_name }}
                                    @endif
                                </td>

                                <td>
                                    @if ($category->img_path == '')
                                        <img width="50" class="rounded" src="{{ asset('uploads/user-default.jpg') }}"
                                            alt="">
                                    @else
                                        <img width="50" class="rounded" src="{{ asset($category->img_path) }}"
                                            alt="">
                                    @endif
                                </td>
                                <td>
                                    <a href="#"class="btn btn-soft-{{ $category->status == 0 ? 'success' : 'secondary' }}">
                                        {{ $category->status == 0 ? 'Active' : 'Dective' }}
                                    </a>
                                </td>
                                <td>
                                    <a title="restore" href="{{ route('category.restore', $category->id) }}"
                                        class="btn btn-success"><i class="bx bx-refresh"></i></a>
                                    <a title="permanent-delete" href="{{ route('category.delete', $category->id) }}"
                                        class="btn btn-danger"><i class="bx bx-trash"></i></a>
                                </td>
                            </tr>
                        @empty
                            {{-- <h4 class="text-center">No user found</h4> --}}
                        @endforelse
                    </table>
                </div>
                {{-- <div class="mb-2">
                    <button title="soft-delete" type="submit" class="btn btn-warning">Delete Users</button>
                </div> --}}
                {{ $categories->links() }}
            </div>
        </form>
    </div>
@endsection
