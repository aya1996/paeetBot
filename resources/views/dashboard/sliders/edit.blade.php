@extends('dashboard.includes.master')
@section('content')

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>السلايدر</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية</a></li>
              <li class="breadcrumb-item active">السلايدر</li>
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
                <form action="{{route('sliders.update',$slider->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>العنوان</label>
                                        <input type="text" name="title" class="form-control" placeholder="العنوان" value="{{$slider->title}}" required></input>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>الوصف</label>
                                        <textarea  rows="4" name="description" class="form-control" placeholder="الوصف" required>{{$slider->description}}</textarea>
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
                                        <img src="{{asset($slider->image)}}" class="img-fluid mb-2" alt="black sample" style="height: 200px"/>
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
