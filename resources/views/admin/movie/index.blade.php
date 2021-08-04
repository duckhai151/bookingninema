@extends('admin.admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Danh sách phim</h1>
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
                                        <th>Phim</th>
                                        <th>Thời lượng (phút)</th>
                                        <th>Ngày chiếu</th>
                                        <th>Ngày kết thúc</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($movies as $movie)
                                        @action('my.hook', $movie)
                                        <tr>
                                            <td>{{ $movie->id }}</td>
                                            <td>{{ $movie->name }}</td>
                                            <td>{{ $movie->running_time }}</td>
                                            <td>{{ $movie->start_date }}</td>
                                            <td>{{ $movie->end_date }}</td>
                                            <td>
                                                <a href="{{ route(ADMIN_MOVIE_EDIT, $movie->id) }}" style="color: white;" type="submit" class="btn btn-primary">Sửa</a>
                                                <a href="{{ route(ADMIN_MOVIE_DELETE) }}" style="color: white;" type="submit" class="btn btn-danger">Xóa</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Phim</th>
                                        <th>Thời lượng (phút)</th>
                                        <th>Ngày chiếu</th>
                                        <th>Ngày kết thúc</th>
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
