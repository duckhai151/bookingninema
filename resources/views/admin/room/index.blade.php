@extends('admin.admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Danh sách phòng</h1>
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
                                            <th>Tên phòng</th>
                                            <th>Số lượng ghế</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>1</th>
                                            <th>Phòng 1</th>
                                            <th>70</th>
                                            <td>
                                                <a  style="color: white;" type="submit" class="btn btn-primary">Sửa</a>
                                                <a  style="color: white;" type="submit" class="btn btn-danger">Xóa</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>2</th>
                                            <th>Phòng 2</th>
                                            <th>65</th>
                                            <td>
                                                <a  style="color: white;" type="submit" class="btn btn-primary">Sửa</a>
                                                <a  style="color: white;" type="submit" class="btn btn-danger">Xóa</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>3</th>
                                            <th>Phòng 3</th>
                                            <th>75</th>
                                            <td>
                                                <a  style="color: white;" type="submit" class="btn btn-primary">Sửa</a>
                                                <a  style="color: white;" type="submit" class="btn btn-danger">Xóa</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>4</th>
                                            <th>Phòng 4</th>
                                            <th>65</th>
                                            <td>
                                                <a  style="color: white;" type="submit" class="btn btn-primary">Sửa</a>
                                                <a  style="color: white;" type="submit" class="btn btn-danger">Xóa</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>5</th>
                                            <th>Phòng 5</th>
                                            <th>70</th>
                                            <td>
                                                <a  style="color: white;" type="submit" class="btn btn-primary">Sửa</a>
                                                <a  style="color: white;" type="submit" class="btn btn-danger">Xóa</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Tên phòng</th>
                                            <th>Số lượng ghế</th>
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
