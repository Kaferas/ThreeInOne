@extends('layouts.template')
@section('header_title')
    Modifier Membres
@endsection
@section('content')
    <div class="container card mt-3 p-2">
        <h4>Modifier Membre</h4>
    </div>
    <div class="card">
        <form action="{{ route('teams.update', $team) }}" method="POST" class="p-1" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row p-2">
                <div class="form-group col-6">
                    <label for="" class="text text-primary">Nom <sup
                            class='text text-danger fw-bold '>*</sup>:</label>
                    <input type="text" name="name" id="" class="form-control"
                        value="{{ empty($team->name) ? old('name') : $team->name }}">
                    @if ($errors->has('name'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">{{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-6">
                    <label for="" class="text text-primary">Prenom<sup
                            class='text text-danger fw-bold '>*</sup>:</label>
                    <input type="text" name="prenom" id="" class="form-control"
                        value="{{ empty($team->prenom) ? old('prenom') : $team->prenom }}">
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
                        value="{{ empty($team->current_post) ? old('current_post') : $team->current_post }}">
                    @if ($errors->has('current_post'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">
                            {{ $errors->first('current_post') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-6">
                    <label for="" class="text text-primary">Email:</label>
                    <input type="email" name="eamil_adress" id="" class="form-control"
                        value="{{ empty($team->eamil_adress) ? old('eamil_adress') : $team->eamil_adress }}">
                </div>
            </div>
            <div class="row p-2">
                <div class="form-group col-6">
                    <label for="" class="text text-primary">Telephone<sup
                            class='text text-danger fw-bold '>*</sup>:</label>
                    <input type="number" name="phone_number" id="" class="form-control"
                        value="{{ empty($team->phone_number) ? old('phone_number') : $team->phone_number }}">
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
                    <button type="submit" class="btn btn-xs col-12 btn-warning">Modifier</button>
                </div>
            </div>
        </form>
    </div>
@endsection
