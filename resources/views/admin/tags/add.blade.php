@extends('layouts.template')
@section('header_title')
    Ajouter Tag
@endsection
@section('content')
    <div class="container card mt-3 p-2">
        <h4>Ajouter Nouveau Tag</h4>
    </div>
    <div class="card">
        <form action="{{ route('tags.store') }}" method="post" class="p-1">
            @csrf
            <div class="row p-2">
                <div class="form-group col-12 p-2">
                    <label for="" class="text text-primary">Nom Tag: <sup
                            class='text text-danger fw-bold '>*</sup>:</label>
                    <input type="text" name="name" id="" class="form-control" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">{{ $errors->first('name') }}
                        </p>
                    @endif
                </div>

                <div class="form-group col-12 p-2">
                    <label for="" class="text text-primary">Couleur<sup
                            class='text text-danger fw-bold '>*</sup>:</label>
                    <input type="color" name="color_categorie" id="" class="form-control"
                        value="{{ old('color_categorie') }}">
                    @if ($errors->has('color_categorie'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">
                            {{ $errors->first('color_categorie') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row p-2">
                <div class="col-8"></div>
                <div class="col-4">
                    <button type="submit" class="btn btn-xs col-12 btn-info">Enregistrer Tag</button>
                </div>
            </div>
        </form>
    </div>
@endsection
