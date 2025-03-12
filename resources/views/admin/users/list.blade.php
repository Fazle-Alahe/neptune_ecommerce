@extends('admin.layout.admin')
@section('admin-content')
    <div class="container mt-3">
        <div class="row px-2">
            <div class="col-lg-6">
                <h3>Users</h3>
            </div>
            <div class="col-lg-6 text-end">
                <a href="{{ route('trash.user') }}" class="btn btn-danger">Trash User</a>
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
        @if (session('warning'))
            <div class="alert alert-warning alert-dismissible mt-2" role="alert">
                {{ session('warning') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

    <div class="container my-3">
        <form action="{{ route('user.select.destroy') }}" method="post">
            @csrf
            <div class="card">
                <table class="table table-bordered text-center">
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
                            <td>{{ $sl + 1 }}</td>
                            <td>{{ $user->first_name . ' ' . $user->last_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if ($user->img_path == '')
                                    <img width="50" class="rounded" src="{{ asset('uploads/user-default.jpg') }}"
                                        alt="">
                                @else
                                    <img width="50" class="rounded" src="{{ asset($user->img_path) }}" alt="">
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('user.active', $user->id) }}"
                                    class="btn btn-soft-{{ $user->is_active == 0 ? 'secondary' : 'success' }}">
                                    {{ $user->is_active == 0 ? 'Deactive' : 'Active' }}
                                </a>
                            </td>
                            <td>
                                <button onclick="editUser({{ $user }})"
                                    class="btn btn-primary waves-effect waves-light"><i class="bx bx-edit"></i></button>
                                <a title="soft-delete" href="{{ route('user.destroy', $user->id) }}"
                                    class="btn btn-warning"><i class="bx bx-trash"></i></a>
                            </td>
                        </tr>
                    @empty
                        {{-- <h4 class="text-center">No user found</h4> --}}
                    @endforelse
                </table>
                <div class="mb-2">
                    <button title="soft-delete" type="submit" class="btn btn-warning">Delete Users</button>
                </div>
                {{ $users->links() }}
            </div>
        </form>
    </div>

    @include('admin.modals.user')

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
