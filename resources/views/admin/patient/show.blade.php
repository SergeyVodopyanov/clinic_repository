@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-2"> Пациент {{ $patient->patient_surname . " " . substr($patient->patient_name, 0, 1) . "." . substr($patient->patient_middlename, 0, 1) . "."}} </h1>
                        <a href="{{ route('admin.patient.edit', $patient->id) }}">
                            <i class="nav-icon fa-solid fa-pen"></i>
                        </a>
                        <form action="{{ route('admin.patient.delete', $patient->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="border-0 bg-transparent">
                                <i class="fa-solid fas fa-trash text-danger" role="button"></i>
                            </button>
                        </form>

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
                    <div class="col-1 mb-3">

                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                        <tr>
                                            <td>Фамилия</td>
                                            <td>{{ $patient->patient_surname }}</td>
                                        </tr>
                                        <tr>
                                            <td>Имя</td>
                                            <td>{{ $patient->patient_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Отчество</td>
                                            <td>{{ $patient->patient_middlename }}</td>
                                        </tr>
                                         <tr>
                                            <<td>Пол</td>
                                             <td>{{ $patient->patient_gender }}</td>
                                        </tr>
                                         <tr>
                                             <td>Дата рождения</td>
                                           <td>{{ $patient->patient_dateofbirth }}</td>
                                         </tr>
                                     <tr>
                                       <td>Медкарта</td>
                                        <td>{{ $patient->patient_medcardnumber }}</td>
                                    </tr>
                                     <tr>
                                        <td>Телефон</td>
                                       <td>{{ $patient->patient_phonenumber }}</td>
                                    </tr>
                                     <tr>
                                       <td>Почта</td>
                                       <td>{{ $patient->patient_email }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div><!-- /.container-fluid -->
                    </div>
                </div>
        </section><!-- /.content -->

    </div>
@endsection