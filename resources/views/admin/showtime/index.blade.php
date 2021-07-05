@extends('admin.admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Danh sách lịch chiếu</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <a style="color: white;" href="{{ route(ADMIN_MOVIE_CREATE) }}" class="btn btn-primary">Thêm mới</a>
                                <hr>
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Ngày chiếu</th>
                                        <th>Phim</th>
                                        <th>Phòng</th>
                                        <th>Số ghế còn lại</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>1</th>
                                        <th>14:00 - 19/5</th>
                                        <th>Ròm</th>
                                        <th>Phòng 1</th>
                                        <th>50</th>
                                        <th>
                                            <a  style="color: white;" type="submit" class="btn btn-primary">Sửa</a>
                                            <a  style="color: white;" type="submit" class="btn btn-danger">Xóa</a>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>1</th>
                                        <th>16:00 - 20/5</th>
                                        <th>Avenger</th>
                                        <th>Phòng 2</th>
                                        <th>45</th>
                                        <th>
                                            <a  style="color: white;" type="submit" class="btn btn-primary">Sửa</a>
                                            <a  style="color: white;" type="submit" class="btn btn-danger">Xóa</a>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>1</th>
                                        <th>20:30 - 25/5</th>
                                        <th>Mắt biếc</th>
                                        <th>Phòng 5</th>
                                        <th>4</th>
                                        <th>
                                            <a  style="color: white;" type="submit" class="btn btn-primary">Sửa</a>
                                            <a  style="color: white;" type="submit" class="btn btn-danger">Xóa</a>
                                        </th>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Ngày chiếu</th>
                                        <th>Phim</th>
                                        <th>Phòng</th>
                                        <th>Số ghế còn lại</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
