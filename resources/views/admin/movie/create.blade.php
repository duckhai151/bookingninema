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
                            <form action="{{ route(ADMIN_MOVIE_STORE) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-4">
                                            <label for="exampleInputEmail1">Tên</label>
                                            <input type="text" name="name" class="form-control" id="exampleInputEmail1">
                                        </div>
                                        <div class="form-group col-4 ">
                                            <label for="exampleInputEmail1">Dạng phim</label>
                                            <select name="movie_type_id" class="form-control">
                                                @foreach(TYPE_MOVIE as $key => $type)
                                                    <option value="{{ $key }}">{{ $type }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="exampleInputEmail1">Ngôn ngữ</label>
                                            <input type="text" name="language" class="form-control" id="exampleInputEmail1">
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="exampleInputEmail1">Mô tả</label>
                                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="exampleInputPassword1">Ngày bắt đầu</label>
                                            <input type="date" name="start_date" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="exampleInputPassword1">Ngày kết thúc</label>
                                            <input type="date" name="end_date" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="exampleInputEmail1">Thời lượng</label>
                                            <input type="number" name="running_time" class="form-control" id="exampleInputEmail1" >
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="exampleInputEmail1">Đạo diễn</label>
                                            <input type="text" name="director" class="form-control" id="exampleInputEmail1" >
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="exampleInputPassword1">Diễn viên</label>
                                            <input type="text" name="cast" class="form-control" id="exampleInputPassword1" >
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="exampleFormControlFile1">Ảnh</label>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
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
