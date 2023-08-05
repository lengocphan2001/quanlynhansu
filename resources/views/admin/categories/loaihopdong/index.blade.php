@extends('admin.index')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Loại hợp đồng</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Tổ chức</a></li>
                        <li class="breadcrumb-item"><a href="#">Danh mục</a></li>
                        <li class="breadcrumb-item active">Loại hợp đồng</li>
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
                                        class="fa fa-plus mr-1"></i> Thêm mới </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <table id="myTable" class="stripe cell-border hover">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Mã loại hợp đồng</th>
                                                <th>Tên loại hợp đồng</th>
                                                <th>Tên TA</th>
                                                <th>Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>VT1</td>
                                                <td>Director cum Head of Back Office</td>
                                                <td>Head of department</td>

                                                <td>
                                                    <a href="" class="btn btn-primary mr-3"
                                                        style="margin-right: 10px;"><i class="bx bx-pencil"></i></a>
                                                    <a href="javascript:void(0)" class="btn btn-danger delete">
                                                        <i class="bx bx-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>VT1</td>
                                                <td>Director cum Head of Back Office</td>
                                                <td>Head of department</td>
                                                <td>
                                                    <a href="" class="btn btn-primary mr-3"
                                                        style="margin-right: 10px;"><i class="bx bx-pencil"></i></a>
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
                            <h4>Thông tin chung</h4>
                            <div class="form-group">
                                <label for="email1">Tên loại hợp đồng</label>
                                <input type="email" class="form-control" id="email1" aria-describedby="emailHelp"
                                    placeholder="Tên loại hợp đồng">
                            </div>
                            <div class="form-group">
                                <label for="email1">Mã loại hợp đồng</label>
                                <input type="email" class="form-control" id="email1" aria-describedby="emailHelp"
                                    placeholder="Mã loại hợp đồng">
                            </div>
                            <div class="form-group">
                                <label for="email1">Tên TA</label>
                                <input type="email" class="form-control" id="email1" aria-describedby="emailHelp"
                                    placeholder="Tên TA">
                            </div>
                        </div>
                        <div class="modal-footer border-top-0 d-flex bg-light justify-content-end">
                            <div>
                                <button class="btn btn-danger"><i class="fa fa-close mr-1"></i> Đóng </button>
                                <button class="btn btn-success"><i class="fa fa-check mr-1"></i> Lưu thông tin </button>
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
