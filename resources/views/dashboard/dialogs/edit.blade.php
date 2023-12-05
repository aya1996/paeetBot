@extends('dashboard.includes.master')
@section('content')

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>  المحادثات </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية</a></li>
              <li class="breadcrumb-item active">  المحادثات </li>
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
                <form action="{{route('dialogs.update',$dialog->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>السؤال</label>
                                            <input type="text" name="question" value="{{$dialog->question}}" class="form-control" placeholder="السؤال" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>الجواب</label>
                                            <input type="text" name="answer" value="{{$dialog->question}}" class="form-control" placeholder="الجواب" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>الفيديو (<span style="color: red">اختياري ... </span>)</label>
                                            <input type="url" name="video" value="{{$dialog->video}}" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>الصورة (<span style="color: red">اختياري ... </span>)</label>
                                            <input type="file" class="form-control" name="image" accept="image/*" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <img src="{{asset($dialog->image)}}" class="img-fluid mb-2" alt="img" style="height: 200px"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer text-right">
                            <button type="submit" class="btn btn-success">تعديل</button>
                        </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
