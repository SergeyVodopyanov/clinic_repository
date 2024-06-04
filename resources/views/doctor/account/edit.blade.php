@extends('doctor.layouts.main')
@section('content')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование учётной записи</h1>
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
                        <form action="{{ route('doctor.account.update', $doctor->id) }}" method="POST" class="w-25">
                            @csrf
                            @method('PATCH')


                            <div class="form-group">
                                <input type="text" class="form-control" name="doctor_surname" placeholder="Фамилия" value="{{ $doctor->doctor_surname }}">
                                @error('doctor_surname')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="doctor_name" placeholder="Имя" value="{{ $doctor->doctor_name }}">
                                @error('doctor_name')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="doctor_middlename" placeholder="Отчество" value="{{ $doctor->doctor_middlename }}">
                            </div>

                            <div class="form-group w-50">
                                <label>Выберите специальность</label>
                                <select name="speciality_id" class="form-control">
                                    @foreach($specialities as $speciality)
                                        <option value="{{ $speciality->id }}"
                                            {{ $speciality->id == $doctor->speciality_id ? ' selected' : '' }}
                                        >{{ $speciality->speciality_title }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('speciality_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Электронная почта" value="{{ $doctor->user->email }}">
                                @error('email')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                                @enderror
                            </div>




                            <div class="form-group w-50">
                                <input type="hidden" name="user_id" value="{{ $doctor->user_id }}">
                            </div>



                             <input type="submit" class="btn btn-primary" value="Обновить">
                        </form>


                    </div>
                </div> <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section><!-- /.content -->





    </div>
@endsection
