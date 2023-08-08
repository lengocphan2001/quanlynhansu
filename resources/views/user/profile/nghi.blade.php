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
                        <div class="col-lg-3">
                            <button class="btn btn-success" style="text-transform: none" type="button" data-toggle="modal"
                                data-target="#form">Đăng ký
                                nghỉ</button>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <table id="myTable" class="stripe cell-border hover">
                                <thead>
                                    <tr>
                                        <th>Ngày / Lý do</th>
                                        <th>Ngày bắt đầu nghỉ</th>
                                        <th>Ngày kết thúc</th>
                                        <th>Số ngày nghỉ</th>
                                        <th>Người duyệt</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($departments as $item) --}}
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            
                                            <td></td>
                                            <td>
                                                {{-- @if ($item->status == 0)
                                                    <span class="badge badge-pill badge-danger">Đã xóa/giải
                                                        thể</span>
                                                @else
                                                    <span class="badge badge-pill badge-success">Hoạt động</span>
                                                @endif --}}
                                            </td>
                                            <td>
                                                {{-- <a href="{{ route('organization.departments.edit', ['department' => $item]) }}"
                                                    class="btn btn-primary mr-3" style="margin-right: 10px;"><i
                                                        class="bx bx-pencil"></i></a>
                                                <button class="btn btn-danger deleteConfirm"
                                                    value="{{ $item->id }}" type="button">
                                                    <i class="bx bx-trash"></i>
                                                </button> --}}
                                            </td>
                                        </tr>
                                    {{-- @endforeach --}}

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm phép nghỉ</h5>
                    <button type="button" class="btn-close text-lg py-3 opacity-10" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true" class="text-secondary"><i class="fa fa-close"></i></span>
                        </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-warning alert-dismissible text-white" role="alert">
                        <span class="text-sm">A simple danger alert with</span>
                        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                            aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form role="form" method="POST">
                        <label for="email" class="font-weight-bold">Ngày bắt đầu</label>
                        <div class="input-group input-group-outline my-1">
                            <input type="date" class="form-control" id="email">
                        </div>
                        <label for="email" class="font-weight-bold">Ngày kết thúc</label>
                        <div class="input-group input-group-outline my-1">
                            <input type="date" class="form-control" id="email">
                        </div>

                        <label for="email" class="font-weight-bold">Tổng ngày nghỉ</label>
                        <div class="input-group input-group-outline my-1">
                            <input type="number" class="form-control" id="email">
                        </div>

                        <div class="modal-footer mt-3">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="text-transform: none">Đóng</button>
                            <button type="button" class="btn btn-primary" style="text-transform: none">Tạo mới</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            jQuery.noConflict();
            $('#myTable').DataTable({
                "language": {
                    "lengthMenu": "Hiện _MENU_ bản ghi trên trang",
                    "zeroRecords": "Không có bản ghi nào",
                    "info": "Hiện trang _PAGE_ trong tổng số _PAGES_ trang",
                    "infoEmpty": "Không có bản ghi nào",
                    "infoFiltered": "(lọc từ _MAX_ bản ghi)"
                }
            });
            $(document).ready(function() {
                $('#form').modal({
                    'show': {{ count($errors) > 0 ? 'true' : 'false' }}
                });
            });

            // $('.deleteConfirm').click(function(e) {
            //     e.preventDefault();
            //     var id = $(this).val();
            //     $('#id').val(id);
            //     $('#deleteDepartment').modal('show');
            // });
        });
    </script>
@endsection
