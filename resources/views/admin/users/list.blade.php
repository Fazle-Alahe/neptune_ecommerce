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
    </div>

    <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New User</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form action="" method="" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="field-1" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="field-1" placeholder="John">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="field-2" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="field-2" placeholder="Doe">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    {!! Main::password_field("Password", "password1", "password",) !!}
                                </div>
                                <div class="col-md-6">
                                    {!! Main::password_field("Confirm Password", "password2", "confirm_password",) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3 no-margin">
                                        <label for="field-7" class="form-label">Personal Info</label>
                                        <textarea class="form-control" id="field-7" placeholder="Write something about yourself"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                {!! Main::ShowUploadImageHtml('inputid', '', 'image') !!}
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-info waves-effect waves-light">Add User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.modal -->
    </div>

    @push('admin_css')
    <style>
        .eye_parent{
            position: relative;
        }
        .eye{
            cursor: pointer;
            position: absolute;
            top: 40px;
            right: 8px;
            width: 16px;
        }
    </style>
    @endpush
    @endsection
