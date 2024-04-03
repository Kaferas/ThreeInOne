@extends('layouts.template')
@section('header_title')
    Listes des utilisateurs
@endsection
@section('content')
    <div class="container card mt-2 p-1">
        <h3 class="text text-primary">Listes des Utilisateurs</h3>
        <form action="" method="post" class="d-flex mb-2">
            <div class="form-group col-1">
                <label for=""></label>
                <p class="h5 mb-2 mt-1">Rechercher:</p>
            </div>
            <div class="form-group col-5">
                <label for=""></label>
                <input type="text" name="search" id="" class="mt-1 form-control border border-secondary"
                    placeholder="Votre Recherche Icii...">
            </div>
            <div class="col-1"></div>

            <div class="col-1"></div>
            <div class="form-group col-1">
                <label for=""></label>
                <button type="submit" class="mt-1 form-control btn btn-sm btn-info"><i
                        class="ri-search-line"></i>&nbsp;Search</button>
            </div>
            <div class="col-1"></div>
            <div class="col-1">
                <label for=""></label>
                <a href="{{ route('users_.create') }}" class="mt-1 form-control btn btn-sm btn-primary">Add&nbsp;<i
                        class="ri-add-circle-line"></i></a>
            </div>
        </form>
    </div>
    <div class="card mt-2">
        <table class="table table-striped">
            <thead>
                <tr class="fw-bold h5">
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th>Role</th>
                    <th class="text-center">Cree le</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody class=" text-center">
                @foreach ($users as $i => $item)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td class="{{ $item->roles->first()->name == 'ADMIN' ? 'text text-success' : 'text text-danger' }}">
                            {{ $item->roles->first()->name }}</td>
                        <td>{{ date('d-m-Y', strtotime($item->created_at)) }}</td>
                        <td>
                            <a href="" class="btn btn-warning btn-sm text-light"><i class="ri-pencil-fill"></i></a>
                            <a data-href="" class="btn btn-danger btn-sm text-light"><i class="ri-close-fill"></i></a>
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
