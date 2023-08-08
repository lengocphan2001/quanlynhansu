@extends('user.index')

@section('content')
    <div class="row mb-4">
        <div class="col-lg-7 col-md-6 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-12 col-12 d-flex justify-content-between">
                            <h3>Thông tin cá nhân</h3>
                            <button class="btn btn-primary" style="text-transform: none"><i class="fa fa-edit me-2"></i>Chỉnh sửa thông tin cá nhân</button>
                        </div>
                        <div>
                            
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
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <h3>Thông tin công việc / hợp đồng</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>Trạng thái</p>
                            <p>Công ty</p>
                            <p>Phòng ban</p>
                            <p>Vị trí công việc</p>
                            <p>Chức danh</p>
                            <p>Thời gian giữ vị trí công việc</p>
                        </div>
                        <div class="col-lg-6">
                            <p>Trạng thái</p>
                            <p>Công ty</p>
                            <p>Phòng ban</p>
                            <p>Vị trí công việc</p>
                            <p>Chức danh</p>
                            <p>Thời gian giữ vị trí công việc</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-primary">Thông tin hợp đồng</h5>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <p>Ngày ký hợp đồng</p>
                            <p>Loại hợp đồng</p>
                            <p>Ngày vào làm</p>
                        </div>
                        <div class="col-lg-6">
                            <p>Trạng thái</p>
                            <p>Công ty</p>
                            <p>Phòng ban</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
