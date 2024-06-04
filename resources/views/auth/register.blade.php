@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Регистрация') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="patient_surname" class="col-md-4 col-form-label text-md-end">{{ __('Фамилия') }}</label>

                            <div class="col-md-6">
                                <input id="patient_surname" type="text" class="form-control @error('patient_surname') is-invalid @enderror" name="patient_surname" value="{{ old('patient_surname') }}" required autocomplete="patient_surname" autofocus>

                                @error('patient_surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="patient_name" class="col-md-4 col-form-label text-md-end">{{ __('Имя') }}</label>

                            <div class="col-md-6">
                                <input id="patient_name" type="text" class="form-control @error('patient_name') is-invalid @enderror" name="patient_name" value="{{ old('patient_name') }}" required autocomplete="patient_name" autofocus>

                                @error('patient_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="patient_middlename" class="col-md-4 col-form-label text-md-end">{{ __('Отчество') }}</label>

                            <div class="col-md-6">
                                <input id="patient_middlename" type="text" class="form-control @error('patient_middlename') is-invalid @enderror" name="patient_middlename" value="{{ old('patient_middlename') }}" required autocomplete="patient_middlename" autofocus>

                                @error('patient_middlename')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="patient_gender" class="col-md-4 col-form-label text-md-end"></label>

                            <div class="col-md-6">
                                <label for="patient_gender">Пол:</label>
                                <select name="patient_gender" id="patient_gender">
                                    <option value="Мужчина">Мужчина</option>
                                    <option value="Женщина">Женщина</option>
                                </select>
                                @error('patient_gender')
                                <div class="text-danger">Это поле необходимо для заполнения</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="patient_dateofbirth" class="col-md-4 col-form-label text-md-end">{{ __('Дата рождения') }}</label>

                            <div class="col-md-6">
                                <input id="patient_dateofbirth" type="date" class="form-control @error('patient_dateofbirth') is-invalid @enderror" name="patient_dateofbirth" value="{{ old('patient_dateofbirth') }}" required autocomplete="patient_dateofbirth" autofocus>

                                @error('patient_dateofbirth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="patient_medcardnumber" class="col-md-4 col-form-label text-md-end">{{ __('Номер медицинской карты') }}</label>

                            <div class="col-md-6">
                                <input id="patient_medcardnumber" type="text" class="form-control @error('patient_medcardnumber') is-invalid @enderror" name="patient_medcardnumber" value="{{ old('patient_medcardnumber') }}" required autocomplete="patient_medcardnumber" autofocus>

                                @error('patient_medcardnumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="patient_phonenumber" class="col-md-4 col-form-label text-md-end">{{ __('Номер телефона') }}</label>

                            <div class="col-md-6">
                                <input id="patient_phonenumber" type="text" class="form-control @error('patient_phonenumber') is-invalid @enderror" name="patient_phonenumber" value="{{ old('patient_phonenumber') }}" required autocomplete="patient_phonenumber" autofocus>

                                @error('patient_phonenumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>





                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Электронная почта') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Пароль') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Повторите пароль') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Зарегестрироваться') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
