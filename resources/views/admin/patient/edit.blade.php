@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование специальности</h1>
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
                        <form action="{{ route('admin.patient.update', $patient->id) }}" method="POST" class="w-25">
                            @csrf
                            @method('PATCH')





                            <div class="form-group">
                                <input type="text" class="form-control" name="patient_surname" placeholder="Фамилия" value="{{ $patient->patient_surname }}">
                                @error('patient_surname')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="patient_name" placeholder="Имя" value="{{ $patient->patient_name }}">
                                @error('patient_name')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="patient_middlename" placeholder="Отчество" value="{{ $patient->patient_middlename }}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="patient_gender" placeholder="Пол" value="{{ $patient->patient_gender }}">
                                @error('patient_gender')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control" name="patient_dateofbirth" placeholder="Дата рождения" value="{{ $patient->patient_dateofbirth }}">
                                @error('patient_dateofbirth')
                                <div class="text-danger">Это поле необходимо для заполнения </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="patient_medcardnumber" placeholder="Номер медицинской карты" value="{{ $patient->patient_medcardnumber }}">
                                @error('patient_medcardnumber')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="patient_phonenumber" placeholder="Номер телефона" value="{{ $patient->patient_phonenumber }}">
                                @error('patient_phonenumber')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="patient_email" placeholder="Почта" value="{{ $patient->patient_email }}">
                                @error('patient_email')
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
