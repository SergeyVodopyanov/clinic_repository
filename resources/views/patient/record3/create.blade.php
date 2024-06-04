@extends('patient.layouts.main')
@section('content')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление записи на приём</h1>
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
                        <form action="{{ route('patient.record3.store') }}" method="POST" class="w-25">
                            @csrf



                            <div class="form-group w-50">
                                <label>{{ $record->patient->patient_surname . " " . $record->patient->patient_name . " " . $record->patient->patient_middlename}}</label>
                                <input type="hidden" class="form-control" name="patient_id" value="{{ $record->patient->id }}">
                                <span>{{ $record->patient->patient_surname . " " . $record->patient->patient_name . " " . $record->patient->patient_middlename }}</span>
                            </div>


                            <div class="form-group w-50">
                                <label>{{ $record->speciality->speciality_title }}</label>
                                <input type="hidden" class="form-control" name="speciality_id" value="{{ $record->speciality->id }}">
                                <span>{{ $record->speciality->speciality_title }}</span>
                            </div>


                            <div class="form-group w-50">
                                <label>{{ $record->doctor->doctor_surname . " " . $record->doctor->doctor_name . " " . $record->doctor->doctor_middlename}}</label>
                                <input type="hidden" class="form-control" name="doctor_id" value="{{ $record->doctor->id }}">
                                <span>{{ $record->doctor->doctor_surname . " " . $record->doctor->doctor_name . " " . $record->doctor->doctor_middlename }}</span>
                            </div>


                            <div class="form-group w-50">
                                <label>{{ $record->service->service_title }}</label>
                                <input type="hidden" class="form-control" name="service_id" value="{{ $record->service->id }}">
                                <span>{{ $record->service->service_title }}</span>
                            </div>


                            <div class="form-group w-50">
                                <label>Выберите дату</label>
                                <select name="record_date" class="form-control">
                                    @foreach($schedules as $schedule)
                                        <option value="{{ $schedule->schedule_date }}"
                                            {{ $schedule->schedule_date == old('record_date') ? ' selected' : '' }}
                                        >{{ $schedule->schedule_date }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('schedule_id')
                                <div class="text-danger">{{ $message }}</div>
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
