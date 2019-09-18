@extends('admin.layout.layout')

@section('content')
<section id="main-content">
    <section class="wrapper">
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Editar Usuario: {{ $user->name }}</h4>
              <form class="form-horizontal style-form" method="post" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
                @csrf
                <input name="_method" type="hidden" value="PUT">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" placeholder="nombre">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" value="{{ old('email', $user->email) }}" placeholder="gil@yourdomain.com">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Current Password</label>
                  <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" placeholder="Mayor a 8 caracteres">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">New Password</label>
                  <div class="col-sm-10">
                    <input type="password" name="newPassword" class="form-control" placeholder="Mayor a 8 caracteres">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-md-2 control-label">Status</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="status">
                      <option value="active">Activo</option>
                      <option value="inactive">No activo</option>
                      <option value="suspend">Suspendido</option>
                    </select>
                  </div>
                </div>
                <div class="form-group last">
                  <label class="control-label col-md-3">Image Upload</label>
                  <div class="col-md-9">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="{{ old('avatar', $user->avatar) }}" alt="" width="200px" height="150px" />
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                      <div>
                        <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                        <input type="file" class="default" name="avatar" />
                        </span>
                        <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                      </div>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
              </form>
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
    </section>
</section>
@stop