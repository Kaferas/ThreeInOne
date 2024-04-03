@extends('layouts.template')
@section('header_title')
    Listes des Evenements
@endsection
@section('content')
    <div class="container card mt-2 p-2">
        <h3 class="text text-primary">Listes des Evenements</h3>
        <form action="" method="post" class="d-flex mb-2">
            <div class="col-1"></div>
            <div class="form-group col-2">
                <label for=""></label>
                <p class="h4 mb-2 mt-1">Rechercher:</p>
            </div>
            <div class="form-group col-4">
                <label for=""></label>
                <input type="text" name="search" id="" class="mt-1 form-control border border-secondary"
                    placeholder="Votre Recherche Icii...">
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
                <a href="{{ route('events.create') }}" class="mt-1 form-control btn btn-sm btn-primary">Add&nbsp;<i
                        class="ri-add-circle-line"></i></a>
            </div>
            <div class="col-1"></div>
        </form>
    </div>
    <div class="card mt-2">
        <table class="table table-striped text-center">
            <thead>
                <tr class="fw-bold h5">
                    <th>Title</th>
                    <th>Location</th>
                    <th>Date Evenement</th>
                    <th>Creer Par</th>
                    <th>Heure Du-Heure Fin</th>
                    <th>Action</th>
                </tr>
                @foreach ($events as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->location_event }}</td>
                        <td>{{ date('d-m-Y', strtotime($item->date_event)) }}</td>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ $item->from_hour . '-' . $item->to_hour }}</td>
                        <td>
                            <a href="{{ route('events.edit', $item->id) }}" class="btn btn-warning btn-sm text-light"><i
                                    class="ri-pencil-fill"></i></a>
                            <form class="d-inline-block" action="{{ route('events.destroy', $item) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button onclick="confirm('Voulez-vous confirmer l\'action')"
                                    class="btn btn-danger btn-sm text-light"><i class="ri-close-fill"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </thead>
        </table>
    </div>

    <!-- Modal -->
@endsection
