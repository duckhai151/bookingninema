@extends('admin.admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper mt-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Thêm mới</h3>
                            </div>
                            <form action="{{ route(ADMIN_SHOWTIME_STORE) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="exampleInputEmail1">Phòng</label>
                                            <select name="room_id" class="form-control">
                                                @foreach($rooms as $key => $type)
                                                    <option value="{{ $key }}">{{ $type }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="exampleInputEmail1">Tên phim</label>
                                            <select name="movie_id" class="form-control">
                                                @foreach($movies as $key => $type)
                                                    <option value="{{ $key }}">{{ $type }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="exampleInputPassword1">Ngày giờ chiếu</label>
                                            <input type="datetime-local" name="time" class="form-control" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
