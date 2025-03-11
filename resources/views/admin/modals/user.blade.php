<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
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
</div>