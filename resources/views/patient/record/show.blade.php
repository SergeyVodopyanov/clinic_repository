@extends('patient.layouts.main')
@section('content')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-2"> Приём {{ $record->record_surname . " " . substr($record->record_name, 0, 1) . "." . substr($record->record_middlename, 0, 1) . "."}} </h1>
                        <a href="{{ route('patient.record.edit', $record->id) }}">
                            <i class="nav-icon fa-solid fa-pen"></i>
                        </a>
                        <form action="{{ route('patient.record.delete', $record->id) }}" method="POST">
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
                                            <td>{{ $record->record_surname }}</td>
                                        </tr>
                                        <tr>
                                            <td>Имя</td>
                                            <td>{{ $record->record_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Отчество</td>
                                            <td>{{ $record->record_middlename }}</td>
                                        </tr>
                                         <tr>
                                            <<td>Пол</td>
                                             <td>{{ $record->record_gender }}</td>
                                        </tr>
                                         <tr>
                                             <td>Дата рождения</td>
                                           <td>{{ $record->record_dateofbirth }}</td>
                                         </tr>
                                     <tr>
                                       <td>Медкарта</td>
                                        <td>{{ $record->record_medcardnumber }}</td>
                                    </tr>
                                     <tr>
                                        <td>Телефон</td>
                                       <td>{{ $record->record_phonenumber }}</td>
                                    </tr>
                                     <tr>
                                       <td>Почта</td>
                                       <td>{{ $record->record_email }}</td>
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
