@extends('admin.layouts.main')
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
                        <form action="{{ route('admin.record2.store') }}" method="POST" class="w-25">
                            @csrf



                            <div class="form-group w-50">
                                <label>{{ $record->patient->patient_surname . " " . $record->patient->patient_name . " " . $record->patient->patient_middlename}}</label>
                                <input type="hidden" class="form-control" name="patient_id" value="{{ $record->patient->id }}">
                               <!-- <span>{{ $record->patient->patient_surname . " " . $record->patient->patient_name . " " . $record->patient->patient_middlename }}</span> -->
                            </div>



                            <div class="form-group w-50">
                                <label>{{ $record->speciality->speciality_title }}</label>
                                <input type="hidden" class="form-control" name="speciality_id" value="{{ $record->speciality->id }}">
                               <!--  <span>{{ $record->speciality->speciality_title }}</span> -->
                            </div>


                            <div class="form-group w-50">
                                <label>Выберите врача</label>
                                <select name="doctor_id" class="form-control">
                                    @foreach($doctors as $doctor)
                                        <option value="{{ $doctor->id }}"
                                            {{ $doctor->id == old('doctor_id') ? ' selected' : '' }}
                                        >{{ $doctor->doctor_surname . " " . $doctor->doctor_name . " " . $doctor->doctor_middlename}}
                                        </option>
                                    @endforeach
                                </select>
                                @error('speciality_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group w-50">
                                <label>Выберите услугу</label>
                                <select name="service_id" class="form-control">
                                    @foreach($services as $service)
                                        <option value="{{ $service->id }}"
                                            {{ $service->id == old('service_id') ? ' selected' : '' }}
                                        >{{ $service->service_title }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('service_id')
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
