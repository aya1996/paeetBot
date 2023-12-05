@extends('dashboard.includes.master')
@section('css')
@include('dashboard.includes.datatable_css')
@endsection

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
                <div class="card-header" style="margin-bottom: 15px;">
                    <h3 class="card-title" style="float: right;">
                        <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#modal-lg">إضافة جديد</button>
                    </h3>
                  </div>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">العنوان</th>
                    <th class="text-center">الوصف</th>
                    <th class="text-center">الصورة</th>
                    <th class="text-center">التحكم</th>
                  </tr>
                  </thead>
                  <tbody>
                    @if($sliders->count() > 0)
                        @foreach ($sliders as $key => $slider)
                            <tr>
                                <td>{{$key +1 }}</td>
                                <td class="text-center">
                                    {!! \Illuminate\Support\Str::limit($slider->title, 20, '') !!}
                                </td>
                                <td class="text-center">
                                    {!! \Illuminate\Support\Str::limit($slider->description, 20, '') !!}
                                </td>
                                <td class="text-center">
                                    <img src="{{asset($slider->image)}}" style="width: 80px; height: 80px">
                                </td>
                                <td class="text-center">
                                    <a href="{{route('sliders.edit' ,$slider->id )}}">
                                        <button type="button" class="btn btn-secondary" aria-expanded="false">تعديل</button>
                                    </a>


                                    <button class="btn btn-danger modal_btn" alt="default" data-toggle="modal" data-target="#delete-modal{{$key}}"
                                    data-id="{{$slider->id}}"> حذف </button>

                                    {{--  delete modal  --}}
                                    <div class="modal fade" id="delete-modal{{$key}}">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h4 class="modal-title">تأكيد حذف العنصر !!</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <form action="{{route('sliders.destroy' ,$slider->id )}}" method="POST" enctype="multipart/form-data" id="userForm">
                                                @csrf
                                                @method('DELETE')
                                                    <div class="modal-body alert alert-danger">
                                                        <h3>تأكيد حذف العنصر !!</h3>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">إغلاق</button>
                                                        <button type="submit" class="btn btn-danger">حذف</button>
                                                    </div>
                                            </form>
                                        </div>
                                        <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    {{--  delete modal  --}}
                                </td>
                            </tr>
                        @endforeach
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  {{--  modal add   --}}
  <div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">إضافة جديد</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('sliders.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>العنوان</label>
                                    <input type="text"  name="title" class="form-control" placeholder="العنوان" value="{{old('title')}}" required></input>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>الوصف</label>
                                    <textarea  rows="4" name="description" class="form-control" placeholder="الوصف" required>{{old('description')}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>الصورة</label>
                                    <input type="file" class="form-control" name="image" accept="image/*" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">إغلاق</button>
                    <button type="submit" class="btn btn-primary">إرسال</button>
                </div>
            </div>
        </form>
    </div>
  </div>
  {{--  modal add   --}}


@endsection

@section('js')
@include('dashboard.includes.datatable_js')
@endsection
