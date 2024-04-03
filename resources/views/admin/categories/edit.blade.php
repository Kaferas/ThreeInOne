@extends('layouts.template')
@section('header_title')
    Modifier Categories
@endsection
@section('content')
    <div class="container card mt-3 p-2">
        <h4>Modifier Categories</h4>
    </div>
    <div class="card">
        <form action="{{ route('categories.update', ['category' => $category]) }}" method="post" class="p-1">
            @csrf
            @method('PUT')
            <div class="row p-2">
                <div class="form-group col-12 p-2">
                    <label for="" class="text text-primary">Nom Categorie: <sup
                            class='text text-danger fw-bold '>*</sup>:</label>
                    <input type="text" name="name" id="" class="form-control"
                        value="{{ empty($category->name) ? old('name') : $category->name }}">
                    @if ($errors->has('name'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">{{ $errors->first('name') }}
                        </p>
                    @endif
                </div>

                <div class="form-group col-12 p-2">
                    <label for="" class="text text-primary">Couleur<sup
                            class='text text-danger fw-bold '>*</sup>:</label>
                    <input type="color" name="color_categorie" id="" class="form-control"
                        value="{{ empty($category->name) ? old('color_categorie') : $category->color_categorie }}">
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
                    <button type="submit" class="btn btn-xs col-12 btn-warning">Modifier Categorie</button>
                </div>
            </div>
        </form>
    </div>
@endsection
