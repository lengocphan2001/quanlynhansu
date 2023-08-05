@extends('admin.index')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Phòng ban</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Tổ chức</a></li>
                        <li class="breadcrumb-item active">Phòng ban</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-success" data-toggle="modal" data-target="#form" type="button"><i
                                        class="fa fa-plus mr-1"></i> Thêm mới phòng ban </button>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="defaultInline1">
                                    <label class="custom-control-label" for="defaultInline1">Hiển thị danh sách phòng ban đã
                                        xóa/giải thể</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <table id="myTable" class="stripe cell-border hover">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Mã phòng ban</th>
                                                <th>Tên phòng ban</th>
                                                <th>Cấp phòng ban</th>
                                                <th>Quản lý</th>
                                                <th>Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>PB1</td>
                                                <td>Phòng ban 1</td>
                                                <td>Bộ phạn</td>
                                                <td>Lê Ngọc Phan</td>
                                                <td>
                                                    <a href=""
                                                        class="btn btn-primary mr-3" style="margin-right: 10px;"><i
                                                            class="bx bx-pencil"></i></a>
                                                    <a href="javascript:void(0)" class="btn btn-danger delete">
                                                        <i class="bx bx-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>PB2</td>
                                                <td>Phòng ban 2</td>
                                                <td>Bộ phạn</td>
                                                <td>Lê Ngọc Phan</td>
                                                <td>
                                                    <a href=""
                                                        class="btn btn-primary mr-3" style="margin-right: 10px;"><i
                                                            class="bx bx-pencil"></i></a>
                                                    <a href="javascript:void(0)" class="btn btn-danger delete">
                                                        
                                                        <i class="bx bx-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0 bg-light">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm mới phòng ban</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="email1">Phòng ban cha</label>
                                <input type="email" class="form-control" id="email1" aria-describedby="emailHelp"
                                    placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="password1">Tên phòng ban</label>
                                <input type="password" class="form-control" id="password1" placeholder="Tên phòng ban">
                            </div>
                            <div class="form-group">
                                <label for="password1">Cấp phòng ban</label>
                                <input type="password" class="form-control" id="password2" placeholder="Cấp phòng ban">
                            </div>
                            <div class="form-group">
                                <label for="password1">Quản lý</label>
                                <input type="password" class="form-control" id="password2" placeholder="Cấp phòng ban">
                            </div>
                        </div>
                        <div class="modal-footer border-top-0 d-flex bg-light justify-content-between">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline1">
                                <label class="custom-control-label" for="defaultInline1">Đã
                                    xóa/giải thể</label>
                            </div>
                            <div>
                                <button class="btn btn-danger"><i
                                    class="fa fa-close mr-1"></i> Đóng </button>
                                    <button class="btn btn-success"><i
                                        class="fa fa-check mr-1"></i> Lưu thông tin </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endsection
