@extends('layouts.template')
@section('header_title')
    Ajouter Utilisateurs
@endsection
@section('content')
    <div class="container card mt-3 p-2">
        <h4>Nouveau Utilisateur</h4>
    </div>
    <div class="card">
        <form action="{{ route('users_.store') }}" method="post" class="p-1" enctype="multipart/form-data">
            @csrf
            <div class="row p-2">
                <div class="form-group col-12 p-2">
                    <label for="" class="text text-primary">Nom Utilisateur: <sup
                            class='text text-danger fw-bold '>*</sup>:</label>
                    <input type="text" name="name" id="" class="form-control border border-secondary"
                        value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">{{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-6 p-2">
                    <label for="" class="text text-primary">Phone Number: <sup
                            class='text text-danger fw-bold '>*</sup>:</label>
                    <input type="text" name="phone_number" id="" class="border border-secondary form-control"
                        value="{{ old('phone_number') }}">
                    @if ($errors->has('phone_number'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">
                            {{ $errors->first('phone_number') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-6 p-2">
                    <label for="" class="text text-primary">Adresse: <sup
                            class='text text-danger fw-bold '>*</sup>:</label>
                    <input type="text" name="adresse" id="" class="form-control border border-secondary"
                        value="{{ old('adresse') }}">
                    @if ($errors->has('adresse'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">{{ $errors->first('adresse') }}
                        </p>
                    @endif
                </div>

                <div class="form-group col-6 p-2">
                    <label for="" class="text text-primary">Adresse Mail: <sup
                            class='text text-danger fw-bold '>*</sup>:</label>
                    <input type="email" name="email" class="form-control border border-secondary"
                        value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">{{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-6 p-2">
                    <label for="" class="text text-primary">Role Utilisateur: <sup
                            class='text text-danger fw-bold '>*</sup>:</label>
                    <select name="role_user" id="" class="form-control border border-secondary">
                        <option value="">Choisissez le Role: </option>
                        @foreach ($roles as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('email'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">{{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-6 p-2">
                    <label for="" class="text text-primary">Password: <sup
                            class='text text-danger fw-bold '>*</sup>:</label>
                    <input type="password" name="password" id="" class="form-control border border-secondary"
                        value="">
                    @if ($errors->has('password'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">{{ $errors->first('password') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-6 p-2">
                    <label for="" class="text text-primary">Retype Password: <sup
                            class='text text-danger fw-bold '>*</sup>:</label>
                    <input type="password" name="password_confirmation" id=""
                        class="form-control border border-secondary" value="{{ old('password_confirmation') }}">
                </div>
            </div>
            <div class="row p-2">
                <div class="col-8"></div>
                <div class="col-4">
                    <button type="submit" class="btn btn-xs col-12 btn-info">Enregistrer Utilisateur</button>
                </div>
            </div>
        </form>
    </div>
@endsection
