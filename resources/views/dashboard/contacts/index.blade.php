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
        <h1>تواصل معنا </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية</a></li>
              <li class="breadcrumb-item active">تواصل معنا </li>
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
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">الإسم</th>
                        <th class="text-center">البريد الإلكتروني</th>
                        <th class="text-center">الهاتف</th>
                        <th class="text-center">الرسالة</th>
                        <th class="text-center">التحكم</th>
                      </tr>
                  </thead>
                    <tbody>
                        @if($contacts->count() > 0)
                            @foreach ($contacts as $key => $contact)
                                <tr>
                                    <td>{{$key +1 }}</td>
                                    <td class="text-center">{{$contact->name}}</td>
                                    <td class="text-center">{{$contact->email}}</td>
                                    <td class="text-center">{{$contact->phone}}</td>
                                    <td class="text-center">
                                        {!! \Illuminate\Support\Str::limit($contact->msg, 20, '') !!}
                                    </td>
                                    <td class="text-center">

                                        {{--  <a href="{{route('contacts.show' ,$contact->id )}}">
                                            <button type="button" class="btn btn-primary" aria-expanded="false">عرض</button>
                                        </a>  --}}


                                        <button class="btn btn-danger modal_btn" alt="default" data-toggle="modal" data-target="#delete-modal{{$key}}"
                                        data-id="{{$contact->id}}"> حذف </button>

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
                                                <form action="{{route('contacts.destroy' ,$contact->id )}}" method="POST" enctype="multipart/form-data" id="userForm">
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


@endsection

@section('js')
@include('dashboard.includes.datatable_js')
@endsection
