@extends('layouts.template')
@section('header_title')
    Listes des Articles
@endsection
@section('content')
    <div class="container card mt-2 p-1">
        <h3 class="text text-primary">Listes des Posts</h3>
        <form action="" method="post" class="d-flex mb-2">
            <div class="form-group col-1">
                <label for=""></label>
                <p class="h5 mb-2 mt-1">Rechercher:</p>
            </div>
            <div class="form-group col-3">
                <label for=""></label>
                <input type="text" name="search" id="" class="mt-1 form-control border border-secondary"
                    placeholder="Votre Recherche Icii...">
            </div>
            <div class="col-1"></div>
            <div class="form-group col-3">
                <label for=""></label>
                <select name="categorie" id="" class="border border-secondary form-control">
                    <option value="" selected>Choisissez Categorie</option>
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-1"></div>
            <div class="form-group col-1">
                <label for=""></label>
                <button type="submit" class="mt-1 form-control btn btn-sm btn-info"><i
                        class="ri-search-line"></i>&nbsp;Search</button>
            </div>
            <div class="col-1"></div>
            <div class="col-1">
                <label for=""></label>
                <a href="{{ route('posts.create') }}" class="mt-1 form-control btn btn-sm btn-primary">Add&nbsp;<i
                        class="ri-add-circle-line"></i></a>
            </div>
        </form>
    </div>
    <div class="card mt-2">
        <table class="table table-striped">
            <thead>
                <tr class="fw-bold h5">
                    <th class="text-center">Id</th>
                    <th class="text-center">Title</th>
                    <th class="text-center">Author</th>
                    <th>Categorie</th>
                    <th class="text-center">Cree le</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody class=" text-center">
                @foreach ($posts as $i => $item)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->user->name }}</td>
                        <td>
                            <div class="d-flex">

                                <span class="p-1"
                                    style="background-color:{{ $item->categories->color_categorie }}"></span>&nbsp;&nbsp;{{ $item->categories->name }}
                            </div>
                        </td>
                        <td>{{ date('d-m-Y', strtotime($item->created_at)) }}</td>
                        <td>
                            <a href="{{ route('posts.edit', $item) }}" class="btn btn-warning btn-sm text-light"><i
                                    class="ri-pencil-fill"></i></a>
                            <a data-href="{{ route('posts.destroy', $item) }}" class="btn btn-danger btn-sm text-light"><i
                                    class="ri-close-fill"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal -->
@endsection
@section('js_content')
@endsection
