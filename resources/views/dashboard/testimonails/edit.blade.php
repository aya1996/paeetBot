@extends('dashboard.includes.master')
@section('content')

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>آراء العملاء</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية</a></li>
              <li class="breadcrumb-item active">آراء العملاء</li>
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
                <form action="{{route('testimonails.update',$testimonail->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>الإسم</label>
                                        <input type="text" name="name" class="form-control" placeholder="الإسم" value="{{$testimonail->name}}" required></input>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>المسمي الوظيفي</label>
                                        <input type="text" name="job_title" class="form-control" placeholder="المسمي الوظيفي" value="{{$testimonail->job_title}}" required></input>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>الوصف</label>
                                        <textarea  rows="4" name="description" class="form-control" placeholder="الوصف" required>{{$testimonail->description}}</textarea>
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
                                        <img src="{{asset($testimonail->image)}}" class="img-fluid mb-2" alt="black sample" style="height: 200px"/>
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
