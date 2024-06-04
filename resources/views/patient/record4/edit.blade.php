@extends('patient.layouts.main')
@section('content')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование записи на приём</h1>
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
                        <form action="{{ route('admin.record.update', $record->id) }}" method="POST" class="w-25">
                            @csrf
                            @method('PATCH')





                            <div class="form-group">
                                <input type="text" class="form-control" name="record_surname" placeholder="Фамилия" value="{{ $record->record_surname }}">
                                @error('record_surname')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="record_name" placeholder="Имя" value="{{ $record->record_name }}">
                                @error('record_name')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="record_middlename" placeholder="Отчество" value="{{ $record->record_middlename }}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="record_gender" placeholder="Пол" value="{{ $record->record_gender }}">
                                @error('record_gender')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control" name="record_dateofbirth" placeholder="Дата рождения" value="{{ $record->record_dateofbirth }}">
                                @error('record_dateofbirth')
                                <div class="text-danger">Это поле необходимо для заполнения </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="record_medcardnumber" placeholder="Номер медицинской карты" value="{{ $record->record_medcardnumber }}">
                                @error('record_medcardnumber')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="record_phonenumber" placeholder="Номер телефона" value="{{ $record->record_phonenumber }}">
                                @error('record_phonenumber')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="record_email" placeholder="Почта" value="{{ $record->record_email }}">
                                @error('record_email')
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
