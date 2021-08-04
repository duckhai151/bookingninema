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
                                <a style="color: white;" href="{{ route(ADMIN_SHOWTIME_CREATE) }}" class="btn btn-primary">Thêm mới</a>
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
                                        @foreach($showtimes as $showtime)
                                            <tr>
                                                <th>{{ $showtime->id }}</th>
                                                <th>{{ $showtime->dateTimeShowtinme }}</th>
                                                <th>{{ $showtime->movie->name }}</th>
                                                <th>{{ $showtime->room->name }}</th>
                                                <th>{{ $showtime->room->total_seat }}</th>
                                                <th>
                                                    <a  style="color: white;" type="submit" class="btn btn-primary">Sửa</a>
                                                    <a  style="color: white;" type="submit" class="btn btn-danger">Xóa</a>
                                                </th>
                                            </tr>
                                        @endforeach
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
