@extends('dashboard.includes.master')
@section('content')

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>@lang('lang.edit_admin')</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">@lang('lang.home')</a></li>
              <li class="breadcrumb-item active">@lang('lang.edit_admin')</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{route('admins.update',$admin)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>@lang('lang.name')</label>
                                        <input type="text" name="name" class="form-control" placeholder="@lang('lang.name')" value="{{$admin->name}}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>@lang('lang.email')</label>
                                        <input type="email" name="email" class="form-control" placeholder="@lang('lang.email')" value="{{$admin->email}}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>@lang('lang.password') (<span style="color: red">@lang('lang.optional')</span>)</label>
                                        <input type="password" name="password" class="form-control" placeholder="@lang('lang.password')" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="lang" value="{{app()->getLocale()}}">
                        <div class="modal-footer text-right">
                            <button type="submit" class="btn btn-success">@lang('lang.update')</button>
                        </div>
                    </div>
                    <input type="hidden" name="admin" value="{{$admin->id}}">
                </form>
            </div>
        </div>
    </div>
        </div>
    </div>
</section>
</div>
@endsection

