@extends('doctor.layouts.main')
@section('content')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование расписания</h1>
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
                        <form action="{{ route('doctor.schedule.update', $schedule->id) }}" method="POST" class="w-25">
                            @csrf
                            @method('PATCH')

                             <div class="form-group w-50">
                                <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
                            </div>

                            <div class="form-group">
                                <input type="date" class="form-control" name="schedule_date" placeholder="Дата" value="{{ $schedule->schedule_date }}">
                                @error('title')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="time" class="form-control" name="schedule_start" placeholder="Начало рабочего дня" value="{{ $schedule->schedule_start }}">
                                @error('title')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="time" class="form-control" name="schedule_end" placeholder="Конец рабочего дня" value="{{ $schedule->schedule_end }}">
                                @error('title')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                                @enderror
                            </div>
                             <input type="submit" class="btn btn-primary" value="Обновить">
                        </form>


                    </div>
                </div> <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section><!-- /.content -->





    </div>
@endsection
