@extends('layouts.template')
@section('header_title')
    Ajouter Membres
@endsection
@section('content')
    <div class="container card mt-3 p-2">
        <h4>Ajouter Nouveau Membre</h4>
    </div>
    <div class="card">
        <form action="{{ route('teams.store') }}" method="post" class="p-1" enctype="multipart/form-data">
            @csrf
            <div class="row p-2">
                <div class="form-group col-6">
                    <label for="" class="text text-primary">Nom <sup
                            class='text text-danger fw-bold '>*</sup>:</label>
                    <input type="text" name="name" id="" class="form-control" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">{{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-6">
                    <label for="" class="text text-primary">Prenom<sup
                            class='text text-danger fw-bold '>*</sup>:</label>
                    <input type="text" name="prenom" id="" class="form-control" value="{{ old('prenom') }}">
                    @if ($errors->has('prenom'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">{{ $errors->first('prenom') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row p-2">
                <div class="form-group col-6">
                    <label for="" class="text text-primary">Poste<sup
                            class='text text-danger fw-bold '>*</sup>:</label>
                    <input type="text" name="current_post" id="" class="form-control"
                        value="{{ old('current_post') }}">
                    @if ($errors->has('current_post'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">
                            {{ $errors->first('current_post') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-6">
                    <label for="" class="text text-primary">Email:</label>
                    <input type="email" name="eamil_adress" id="" class="form-control"
                        value="{{ old('eamil_adress') }}">
                </div>
            </div>
            <div class="row p-2">
                <div class="form-group col-6">
                    <label for="" class="text text-primary">Telephone<sup
                            class='text text-danger fw-bold '>*</sup>:</label>
                    <input type="number" name="phone_number" id="" class="form-control"
                        value="{{ old('phone_number') }}">
                    @if ($errors->has('phone_number'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">
                            {{ $errors->first('phone_number') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-6">
                    <label for="" class="text text-primary">Photo<sup
                            class='text text-danger fw-bold '>*</sup>:</label>
                    <input type="file" name="picture_path" id="" class="form-control">
                    @if ($errors->has('picture_path'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">
                            {{ $errors->first('picture_path') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row p-2">
                <div class="col-6"></div>
                <div class="col-6">
                    <button type="submit" class="btn btn-xs col-12 btn-info">Enregistrer</button>
                </div>
            </div>
        </form>
    </div>
@endsection
