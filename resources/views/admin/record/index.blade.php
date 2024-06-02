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
                                        <th>Дата</th>
                                        <th>Время</th>
                                        <th>Пациент</th>
                                        <th>Специальность</th>
                                        <th>Врач</th>
                                        <th>Услуга</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($records as $record)
                                    <tr>
                                        <td>{{ $record->record_date }}</td>
                                        <td>{{ $record->record_time }}</td>
                                        <td>{{ $record->record_middlename }}</td>
                                        <td>{{ $record->record_gender }}</td>
                                        <td>{{ $record->record_dateofbirth }}</td>
                                        <td>{{ $record->record_medcardnumber }}</td>
                                        <td>{{ $record->record_phonenumber }}</td>
                                        <td>{{ $record->record_email }}</td>
                                        <td>
                                            <a href="{{ route('admin.record.show', $record->id) }}">
                                                <i class="nav-icon far fa-solid fa-eye"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.record.edit', $record->id) }}">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.record.delete', $record->id) }}" method="POST">
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
