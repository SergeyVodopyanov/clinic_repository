@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Личный кабинет </h1>
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
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                 <table class="table table-hover text-nowrap">
                                <tbody>
                                        <tr>
                                            <td>Фамилия</td>
                                            <td>{{ $admin->admin_surname }}</td>
                                        </tr>
                                        <tr>
                                            <td>Имя</td>
                                            <td>{{ $admin->admin_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Отчество</td>
                                            <td>{{ $admin->admin_middlename }}</td>
                                        </tr>
                                        <tr>
                                            <td>Электронная почта</td>
                                            <td>{{ $user->email }}</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div><!-- /.container-fluid -->
                    </div>
                </div>
             <div class="row">
                    <div class="col-3 mb-3">
                        <a href="{{ route('admin.account.edit', $admin->id) }}" class="btn btn-block btn-primary">
                            Редактировать учётную запись
                        </a>
                    </div>
                </div>

        </section><!-- /.content -->

    </div>
@endsection
