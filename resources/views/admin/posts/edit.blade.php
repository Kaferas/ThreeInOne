@extends('layouts.template')
@section('header_title')
    Modifier Post
@endsection
@section('content')
    <div class="container card mt-3 p-2">
        <h4> Editer Post </h4>
    </div>
    <div class="card">
        <form action="{{ route('posts.update', $post) }}" method="post" class="p-1" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row p-2">
                <div class="form-group col-6 p-2">
                    <label for="" class="text text-primary">Nom Post: <sup
                            class='text text-danger fw-bold '>*</sup>:</label>
                    <input type="text" name="title" id="" class="border border-secondary form-control"
                        value="{{ empty($post->title) ? old('title') : $post->title }}">
                    @if ($errors->has('title'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">{{ $errors->first('title') }}
                        </p>
                    @endif
                </div>

                <div class="form-group col-6 p-2">
                    <label for="" class="text text-primary">Categorie:<sup
                            class='text text-danger fw-bold '>*</sup>:</label>
                    <select name="categorie_id" id="" class="border border-secondary form-control">
                        <option value="" selected>Choisissez Categorie</option>
                        @foreach ($categories as $item)
                            <option {{ $post->categorie_id == $item->id ? 'selected' : '' }} value="{{ $item->id }}">
                                {{ $item->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('categorie_id'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">
                            {{ $errors->first('categorie_id') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-5 p-2">
                    <label for="" class="text text-primary">Poster:<sup
                            class='text text-danger fw-bold '>*</sup>:</label>
                    <input type="file" name="pictures_path" id="" class="form-control border border-secondary">
                    @if ($errors->has('pictures_path'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">
                            {{ $errors->first('pictures_path') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-5">
                    <label for="" class="text text-primary">Tags:<sup
                            class='text text-danger fw-bold '>*</sup>:</label>
                    <select name="tags_id[]" id="tags_id" class="h-25 select2 select2-multiple" data-toggle="select2"
                        multiple>
                        @foreach ($tags as $item)
                            <option {{ in_array($item->id, $tags_id) ? 'selected' : '' }} value="{{ $item->id }}">
                                {{ $item->name }}<span class="p-2" width="50px" height="50px"></span></option>
                        @endforeach
                    </select>
                    {{-- @if ($errors->has('color_categorie'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">
                            {{ $errors->first('color_categorie') }}
                        </p>
                    @endif --}}
                </div>
                <div class="form-group col-2 p-2">
                    <div class="form-check mt-3">
                        &nbsp;
                        <label for="" class="text text-primary">Publier:<sup
                                class='text text-danger fw-bold '>*</sup></label>
                        <input name="is_published" {{ $post->is_published == 'on' ? 'checked' : '' }}
                            class="form-check-input p-2 border border-secondary" type="checkbox" id="flexCheckChecked">
                    </div>
                    @if ($errors->has('is_published'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">
                            {{ $errors->first('is_published') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-12 p-2">
                    <div class="form-check mt-3">
                        &nbsp;
                        <label for="" class="text text-primary">Photo Post:<sup
                                class='text text-danger fw-bold '>*</sup>:</label>
                        <input type="file" name="pictures[]" id="" class="form-control border border-secondary"
                            multiple="multiple">
                    </div>
                    @if ($errors->has('pictures'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">
                            {{ $errors->first('pictures') }}
                        </p>
                    @endif
                </div>
                <div class="col-12">
                    <label for="">Description</label>
                    <textarea name="description" id="" class="border border-secondary form-control" cols="30" rows="6">
                        {{ $post->description }}
                    </textarea>
                    @if ($errors->has('description'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">
                            {{ $errors->first('description') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row p-2">
                <div class="col-8"></div>
                <div class="col-4">
                    <button type="submit" class="btn btn-xs col-12 btn-info">Enregistrer Categorie</button>
                </div>
            </div>
        </form>
    </div>
@endsection
