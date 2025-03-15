@extends('admin.layout.admin')
@section('admin-content')
<div class="container mt-3">
    <div class="row px-2">
        <div class="col-lg-6">
            <h3>Trash Users</h3>
        </div>
        <div class="col-lg-6 text-end">
            <a href="{{ route('user.list') }}" class="btn btn-primary">User List</a>
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
    <form action="{{ route('user.select.delete') }}" method="post">
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

                @forelse ($trash_user as $sl=>$user)
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
                            <button
                                class="btn btn-soft-{{ $user->is_active == 0 ? 'secondary' : 'success' }}">{{ $user->is_active == 0 ? 'Deactive' : 'Active' }}</button>
                        </td>
                        <td>
                            
                            <a title="restore" href="{{ route('user.restore', $user->id) }}"
                                class="btn btn-success"><i class="bx bx-refresh"></i></a>
                            <a title="permanent-delete" href="{{ route('user.delete', $user->id) }}"
                                class="btn btn-danger"><i class="bx bx-trash"></i></a>
                        </td>
                    </tr>
                @empty
                    {{-- <h4 class="text-center">No user found</h4> --}}
                @endforelse
            </table>
            <div class="mb-2">
                <button title="permanent-delete" type="submit" class="btn btn-danger">Delete catagories</button>
            </div>
            {{-- {{ $users->links() }} --}}
        </div>
    </form>
</div>
@endsection