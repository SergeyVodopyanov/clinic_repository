@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Записи на приём </h1>
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
                        <a href="{{ route('admin.record.create') }}" class="btn btn-block btn-primary">
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
                                        <th>Пациент</th>
                                        <!-- <th>Дата</th> -->
                                        <th>Специальность врача</th>
                                        <th>Врач</th>
                                        <th>Услуга</th>
                                        <th>Дата</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($records as $record)
                                    <tr>
                                        <td>{{ $record->patient->patient_surname . " " .  $record->patient->patient_name . " " . $record->patient->patient_middlename }}</td>
                                        <td>{{ $record->speciality->speciality_title }}</td>
                                        <td>{{ $record->doctor->doctor_surname . " " .  $record->doctor->doctor_name . " " . $record->doctor->doctor_middlename }}</td>
                                        <td>{{ $record->service->service_title }}</td>
                                        <td>{{ $record->record_date }}</td>

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
