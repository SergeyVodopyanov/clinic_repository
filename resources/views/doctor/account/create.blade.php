@extends('doctor.layouts.main')
@section('content')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление администратора</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->



        <!-- Main content -->
        <section class="content">
            <div class="container-fluid"> <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.admin.store') }}" method="POST" class="w-25">
                            @csrf


                            <!-- <input type="hidden" name="user_type" value="admin"> -->


                            <div class="form-group">
                                <input type="text" class="form-control" name="admin_surname" placeholder="Фамилия">
                                @error('admin_surname')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="admin_name" placeholder="Имя">
                                @error('admin_name')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="admin_middlename" placeholder="Отчество">
                            </div>


                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Электронная почта">
                                @error('email')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="password" placeholder="Пароль">
                                @error('password')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                                @enderror
                            </div>

                            <input type="submit" class="btn btn-primary" value="Добавить">
                        </form>
                    </div>
                </div> <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section><!-- /.content -->





    </div>
@endsection
