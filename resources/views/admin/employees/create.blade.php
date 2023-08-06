@extends('admin.index')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="danhmuc-body nhansuThemMoi-body">
                        <div class="app nhansuThemMoi-app">
                            <div class="nhansu nhansuThemMoi">
                                <div class="nhansuThemMoi-header">
                                    <form action="" class="nhansuThemMoi-form">
                                        <div class="nhansuThemMoi-form-title">
                                            <p class="nhansuThemMoi-form-title-text"><i class="fa-solid fa-user-plus"></i>
                                                Thêm nhân
                                                sự mới
                                            </p>
                                            <div class="nhansuThemMoi-form-title-right">
                                                <button class="nhansuThemMoi-form-title-btn">Lưu thông tin</button>
                                                <button class="nhansuThemMoi-form-title-btn">Lưu & thêm mới</button>
                                            </div>
                                        </div>
                                        <div class="nhansuMoi-khoi">
                                            <div class="nhansuThemMoi-form-left">
                                                <p class="nhansuThemMoi-form-text">Thông tin chung</p>
                                                <p class="nhansuThemMoi-form-left-text">Thông tin cá nhân</p>
                                                <div class="nhansuThemMoi-form-left-box">
                                                    <div class="nhansuThemMoi-form-left-group">
                                                        <label for="">Mã nhân viên: <span>*</span></label>
                                                        <input type="text">
                                                    </div>
                                                    <div class="nhansuThemMoi-form-left-group">
                                                        <label for="">Họ và tên: <span>*</span></label>
                                                        <input type="text">
                                                    </div>
                                                </div>
                                                <div class="nhansuThemMoi-form-left-box">
                                                    <div class="nhansuThemMoi-form-left-group">
                                                        <label for="">Tên thường gọi:</label>
                                                        <input type="text">
                                                    </div>
                                                    <div class="nhansuThemMoi-form-left-group">
                                                        <label for="">Ngày sinh: <span>*</span></label>
                                                        <input type="date">
                                                    </div>
                                                </div>
                                                <div class="nhansuThemMoi-form-left-box">
                                                    <div class="nhansuThemMoi-form-left-group">
                                                        <label for="">Giới tính:</label>
                                                        <select name="" id="">
                                                            <option value="" selected></option>
                                                            <option value="">Nam</option>
                                                            <option value="">Nữ</option>
                                                        </select>
                                                    </div>
                                                    <div class="nhansuThemMoi-form-left-group">
                                                        <label for="">Tình trạng hôn nhân:</label>
                                                        <select name="" id="">
                                                            <option value="" selected></option>
                                                            <option value="">Đã kết hôn</option>
                                                            <option value="">Độc thân</option>
                                                            <option value="">Đã ly hôn</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nhansuThemMoi-form-right">
                                                <p class="nhansuThemMoi-form-right-img">
                                                    <img src="../asset/images/user.png" alt="">
                                                </p>
                                                <input type="file">
                                            </div>
                                        </div>
                                        <div class="nhansuThemMoi-form-box">
                                            <div class="nhansuThemMoi-form-box-group">
                                                <label for="">CMTND: <span>*</span></label>
                                                <input type="text">
                                            </div>
                                            <div class="nhansuThemMoi-form-box-group">
                                                <label for="">Nơi cấp:</label>
                                                <select name="" id="">
                                                    <option value="" selected></option>
                                                    <option value="">Đã kết hôn</option>
                                                    <option value="">Độc thân</option>
                                                    <option value="">Đã ly hôn</option>
                                                </select>
                                            </div>
                                            <div class="nhansuThemMoi-form-box-group">
                                                <label for="">Ngày cấp:</label>
                                                <input type="date">
                                            </div>
                                        </div>
                                        <div class="nhansuThemMoi-form-box">
                                            <div class="nhansuThemMoi-form-box-group">
                                                <label for="">CCCD: <span>*</span></label>
                                                <input type="text">
                                            </div>
                                            <div class="nhansuThemMoi-form-box-group">
                                                <label for="">Nơi cấp CCCD:</label>
                                                <select name="" id="">
                                                    <option value="" selected></option>
                                                    <option value="">Đã kết hôn</option>
                                                    <option value="">Độc thân</option>
                                                    <option value="">Đã ly hôn</option>
                                                </select>
                                            </div>
                                            <div class="nhansuThemMoi-form-box-group">
                                                <label for="">Ngày cấp CCCD:</label>
                                                <input type="date">
                                            </div>
                                        </div>
                                        <div class="nhansuThemMoi-form-box">
                                            <div class="nhansuThemMoi-form-box-group">
                                                <label for="">Ngày bắt đầu làm: <span>*</span></label>
                                                <input type="date">
                                            </div>
                                            <div class="nhansuThemMoi-form-box-group">
                                                <label for="">Ngày chính thức:</label>
                                                <input type="date">
                                            </div>
                                            <div class="nhansuThemMoi-form-box-group">
                                                <label for="">Trạng thái làm việc:</label>
                                                <select name="" id="">
                                                    <option value="" selected></option>
                                                    <option value="">Đã kết hôn</option>
                                                    <option value="">Độc thân</option>
                                                    <option value="">Đã ly hôn</option>
                                                </select>
                                            </div>
                                        </div>
                                        <p class="nhansuThemMoi-form-left-text">Thông tin liên lạc - Nguyên quán - Nơi sinh
                                        </p>
                                        <div class="nhansuThemMoi-form-left-box" style="align-items: flex-end">
                                            <div class="nhansuThemMoi-form-left-group" style="max-width: 30%">
                                                <label for="">Địa chỉ hiện tại:</label>
                                                <input type="text" placeholder="Số nhà/Thôn xóm">
                                            </div>
                                            <div class="nhansuThemMoi-form-left-group" style="max-width: 70%">
                                                <select name="" id="">
                                                    <option value="" selected></option>
                                                    <option value="">Đã kết hôn</option>
                                                    <option value="">Độc thân</option>
                                                    <option value="">Đã ly hôn</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="nhansuThemMoi-form-left-box" style="align-items: flex-end">
                                            <div class="nhansuThemMoi-form-left-group" style="max-width: calc(100% / 4)">
                                                <label for="">Địa chỉ thường trú:</label>
                                                <input type="text" placeholder="Số nhà/Thôn xóm">
                                            </div>
                                            <div class="nhansuThemMoi-form-left-group" style="max-width: calc(100% / 4)">
                                                <select name="" id="">
                                                    <option value="" selected></option>
                                                    <option value="">Đã kết hôn</option>
                                                    <option value="">Độc thân</option>
                                                    <option value="">Đã ly hôn</option>
                                                </select>
                                            </div>
                                            <div class="nhansuThemMoi-form-left-group" style="max-width: calc(100% / 4)">
                                                <label for="">Nguyên quán:</label>
                                                <select name="" id="">
                                                    <option value="" selected></option>
                                                    <option value="">Đã kết hôn</option>
                                                    <option value="">Độc thân</option>
                                                    <option value="">Đã ly hôn</option>
                                                </select>
                                            </div>
                                            <div class="nhansuThemMoi-form-left-group" style="max-width: calc(100% / 4)">
                                                <label for="">Nơi sinh:</label>
                                                <select name="" id="">
                                                    <option value="" selected></option>
                                                    <option value="">Đã kết hôn</option>
                                                    <option value="">Độc thân</option>
                                                    <option value="">Đã ly hôn</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="nhansuThemMoi-form-left-box" style="align-items: flex-end">
                                            <div class="nhansuThemMoi-form-left-group" style="max-width: calc(100% / 4)">
                                                <label for="">Số điện thoại:</label>
                                                <input type="text">
                                            </div>
                                            <div class="nhansuThemMoi-form-left-group" style="max-width: calc(100% / 4)">
                                                <label for="">Số điện thoại nhà:</label>
                                                <input type="text">
                                            </div>
                                            <div class="nhansuThemMoi-form-left-group" style="max-width: calc(100% / 4)">
                                                <label for="">Email:</label>
                                                <input type="text">
                                            </div>
                                            <div class="nhansuThemMoi-form-left-group" style="max-width: calc(100% / 4)">
                                                <label for="">Email cá nhân:</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <p class="nhansuThemMoi-form-left-text">Thông tin tiếp nhận nhân sự</p>
                                        <div class="nhansuThemMoi-form-box">
                                            <div class="nhansuThemMoi-form-box-group">
                                                <label for="">Số quyết định: </label>
                                                <input type="text">
                                            </div>
                                            <div class="nhansuThemMoi-form-box-group">
                                                <label for="">Ngày quyết định:</label>
                                                <input type="date">
                                            </div>
                                            <div class="nhansuThemMoi-form-box-group">
                                                <label for="">Phòng ban: <span>*</span></label>
                                                <select name="" id="">
                                                    <option value="" selected></option>
                                                    <option value="">Đã kết hôn</option>
                                                    <option value="">Độc thân</option>
                                                    <option value="">Đã ly hôn</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="nhansuThemMoi-form-box">
                                            <div class="nhansuThemMoi-form-box-group">
                                                <label for="">Vị trí công việc: <span>*</span></label>
                                                <select name="" id="">
                                                    <option value="" selected></option>
                                                    <option value="">Đã kết hôn</option>
                                                    <option value="">Độc thân</option>
                                                    <option value="">Đã ly hôn</option>
                                                </select>
                                            </div>
                                            <div class="nhansuThemMoi-form-box-group">
                                                <label for="">Chức danh:</label>
                                                <select name="" id="">
                                                    <option value="" selected></option>
                                                    <option value="">Đã kết hôn</option>
                                                    <option value="">Độc thân</option>
                                                    <option value="">Đã ly hôn</option>
                                                </select>
                                            </div>
                                            <div class="nhansuThemMoi-form-box-group">
                                            </div>
                                        </div>
                                        <p class="nhansuThemMoi-form-left-text">Thông tin hợp đồng</p>
                                        <div class="nhansuThemMoi-form-box">
                                            <div class="nhansuThemMoi-form-box-group">
                                                <label for="">Số hợp đồng: <span>*</span></label>
                                                <input type="text">
                                            </div>
                                            <div class="nhansuThemMoi-form-box-group">
                                                <label for="">Loại hợp đồng:</label>
                                                <select name="" id="">
                                                    <option value="" selected></option>
                                                    <option value="">Đã kết hôn</option>
                                                    <option value="">Độc thân</option>
                                                    <option value="">Đã ly hôn</option>
                                                </select>
                                            </div>
                                            <div class="nhansuThemMoi-form-box-group">
                                            </div>
                                        </div>
                                        <div class="nhansuThemMoi-form-box">
                                            <div class="nhansuThemMoi-form-box-group">
                                                <label for="">Số hợp đồng: <span>*</span></label>
                                                <input type="date">
                                            </div>
                                            <div class="nhansuThemMoi-form-box-group">
                                                <label for="">Loại hợp đồng:</label>
                                                <input type="date">
                                            </div>
                                            <div class="nhansuThemMoi-form-box-group">
                                            </div>
                                        </div>
                                        <div class="nhansuThemMoi-form-title-right form-themnhansu-btn">
                                            <button class="nhansuThemMoi-form-title-btn">Lưu thông tin</button>
                                            <button class="nhansuThemMoi-form-title-btn">Lưu & thêm mới</button>
                                            <button
                                                class="nhansuThemMoi-form-title-btn nhansuThemMoi-form-title-btn__chuyen">Thêm
                                                mới <i class="fa-solid fa-arrow-right"></i> Chuyển hợp đồng</button>
                                        </div>
                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
