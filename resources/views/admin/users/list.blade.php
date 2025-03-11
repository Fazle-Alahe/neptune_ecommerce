@extends('admin.layout.admin')
@section('admin-content')
    <div class="container mt-3">
        <div class="row px-2">
            <div class="col-lg-6">
                <h3>Users</h3>
            </div>
            <div class="col-lg-6 text-end">
                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal"
                    data-bs-target="#con-close-modal">Add New User</button>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible mt-2">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session('wrong'))
            <div class="alert alert-danger alert-dismissible mt-2" role="alert">
                {{ session('wrong') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

    <div class="container my-3">
        <div class="card">
            <table class="table table-bordered">
                <tr>
                    <th style="width: 7%;">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkmeout">
                            <label class="form-check-label" for="checkmeout"></label>
                        </div>
                    </th>
                    <th style="width: 7%;">SL</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th style="width: 12%;">Image</th>
                    <th style="width: 12%;">Status</th>
                    <th>Action</th>
                </tr>

                @forelse ($users as $sl=>$user)
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input chkDel" name="user_id[]" type="checkbox"
                                    value="{{ $user->id }}" id="invalidCheck">
                                <label class="form-check-label" for="invalidCheck"></label>
                            </div>
                        </td>
                        <td>{{ $sl+1 }}</td>
                        <td>{{ $user->first_name .' '. $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <img width="50" class="rounded" src="{{ asset($user->img_path) }}" alt="">
                        </td>
                        <td>
                            <button class="btn btn-soft-{{ $user->is_active == 0 ? 'secondary' : 'success' }}">{{ $user->is_active == 0 ? 'Deactive' : 'Active' }}</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal"
                            data-bs-target="#con-close-modal"><i class="bx bx-edit"></i></button>
                            <a title="soft-delete" href="{{ route('user.destroy', $user->id) }}" class="btn btn-warning"><i class="bx bx-trash"></i></a>
                        </td>
                    </tr>
                @empty
                    {{-- <h4 class="text-center">No user found</h4> --}}
                @endforelse
            </table>
            {{ $users->links() }}
        </div>
    </div>

@include('admin.modals.user')
    {{-- <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New User</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="row gx-3">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="field-1" class="form-label">First Name</label>
                                        <input type="text" class="form-control" name="first_name" id="field-1"
                                            placeholder="John" value="{{ old('first_name') }}" required>
                                        @error('first_name')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="field-2" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" name="last_name" id="field-2"
                                            placeholder="Doe" value="{{ old('last_name') }}">
                                        @error('last_name')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row gx-3">
                                <div class="col-md-12">
                                    <div class="mb-3 no-margin">
                                        <label for="field-7" class="form-label">Email</label>
                                        <input type="text" name="email" class="form-control"
                                            placeholder="demo@gmail.com" value="{{ old('email') }}" required>
                                        @error('email')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row gx-3">
                                <div class="col-md-6">
                                    {!! Main::password_field('Password', 'password1', 'password') !!}
                                    @error('password')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    {!! Main::password_field('Confirm Password', 'password2', 'confirm_password') !!}
                                </div>
                            </div>
                            <div class="row mb-3">
                                {!! Main::ShowUploadImageHtml('inputid', '', 'img_path') !!}
                                @error('img_path')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect"
                                data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-info waves-effect waves-light">Add User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.modal -->
    </div> --}}

    @push('admin_css')
        <style>
            .eye_parent {
                position: relative;
            }

            .eye {
                cursor: pointer;
                position: absolute;
                top: 40px;
                right: 8px;
                width: 16px;
            }
        </style>
    @endpush
@endsection
