@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Пациенты </h1>
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
                        <a href="{{ route('admin.patient.create') }}" class="btn btn-block btn-primary">
                            Добавить
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>Фамилия</th>
                                        <th>Имя</th>
                                        <th>Отчество</th>
                                        <th>Пол</th>
                                        <th>Дата рождения</th>
                                        <th>Медкарта</th>
                                        <th>Телефон</th>
                                        <th>Почта</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($patients as $patient)
                                    <tr>
                                        <td>{{ $patient->patient_surname }}</td>
                                        <td>{{ $patient->patient_name }}</td>
                                        <td>{{ $patient->patient_middlename }}</td>
                                        <td>{{ $patient->patient_gender }}</td>
                                        <td>{{ $patient->patient_dateofbirth }}</td>
                                        <td>{{ $patient->patient_medcardnumber }}</td>
                                        <td>{{ $patient->patient_phonenumber }}</td>
                                        <td>{{ $patient->patient_email }}</td>
                                        <td>
                                            <a href="{{ route('admin.patient.show', $patient->id) }}">
                                                <i class="nav-icon far fa-solid fa-eye"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.patient.edit', $patient->id) }}">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.patient.delete', $patient->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0 bg-transparent">
                                                    <i class="fa-solid fas fa-trash text-danger" role="button"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
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
