@extends('user.index')

@section('content')
    <div class="row mb-4">
        <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-12 col-12 d-flex justify-content-between">
                            <h2 class="text-primary">Theo dõi nghỉ</h2>
                        </div>
                        <div>

                        </div>
                    </div>
                    <div class="row">
                        <hr class="bg-primary">
                    </div>
                    <div class="row">
                        <h4>Thông tin phép</h4>
                        <div class="row">
                            <div class="col-lg-2">
                                <p>Phép năm</p>
                                <p>Đã sử dụng</p>
                            </div>
                            <div class="col-lg-2">
                                <p>Phép năm</p>
                                <p>Đã sử dụng</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1">
                            <button class="btn btn-success" style="text-transform: none">Đăng ký nghỉ</button>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>Mã nhân viên</p>
                            <p>Họ và tên</p>
                            <p>Ngày sinh</p>
                            <p>CCCD</p>
                        </div>
                        <div class="col-lg-6">
                            <p>{{ $employee->identity ?? 'Chưa có' }}</p>
                            <p>{{ $employee->fullname ?? 'Chưa có' }}</p>
                            <p>{{ $employee->date_of_birth ?? 'Chưa có' }}</p>
                            <p>{{ $employee->identity_card ?? 'Chưa có' }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-primary">Thông tin liên lạc</h5>
                            <hr>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-6">
                            <p>Điện thoại</p>
                            <p>Email</p>
                            <p>Địa chỉ</p>
                            <p>Nơi sinh</p>
                        </div>
                        <div class="col-lg-6">
                            <p>{{ $employee->phone ?? 'Chưa có' }}</p>
                            <p>{{ $employee->email ?? 'Chưa có' }}</p>
                            <p>{{ $employee->current_address ?? 'Chưa có' }}</p>
                            <p>{{ $employee->place_of_birth ?? 'Chưa có' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
