@extends('layouts.template')
@section('header_title')
    Membres de l'Eglise
@endsection
@section('content')
    <div class="container card mt-2 p-1">
        <h3 class="text text-primary">Listes des Membres</h3>
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
                <a href="{{ route('teams.create') }}" class="mt-1 form-control btn btn-sm btn-primary">Add&nbsp;<i
                        class="ri-add-circle-line"></i></a>
            </div>
            <div class="col-1"></div>
        </form>
    </div>
    <div class="card mt-2">
        <table class="table table-striped text-center">
            <thead>
                <tr class="fw-bold h5">
                    <th>Picture</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Post Occupe</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
                @foreach ($teams as $item)
                    <tr>
                        <td><img width="50px" height="50px" src="storage/uploads/{{ $item->picture_path }}"
                                alt="image Profile {{ $item->name }}" class="rounded-circle" loading="lazy"></td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->prenom }}</td>
                        <td>{{ $item->current_post }}</td>
                        <td>{{ $item->eamil_adress }}</td>
                        <td>{{ $item->phone_number }}</td>
                        <td>
                            <a href="{{ route('teams.edit', $item) }}" class="btn btn-warning btn-sm text-light"><i
                                    class="ri-pencil-fill"></i></a>
                            <a data-href="{{ route('teams.destroy', $item) }}" class="btn btn-danger btn-sm text-light"
                                onclick="deleteTeamMember('{{ $item->id }}',this)"><i class="ri-close-fill"></i></a>
                        </td>
                    </tr>
                    <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <h3 class="text-center text-danger" id="deleteModalLabel">Supprimer le Membre</h3>
                                </div>
                                <div class="modal-body text-center">
                                    <div class="card">
                                        <p class=" h2"><i class="ri-error-warning-line text-warning"></i></p>
                                        <h4 class="p-2 text">Voulez-vous vraiment Continuer? Cette Action est Irreversible
                                        </h4>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                    <button type="button" class="btn btn-danger"
                                        id="continueDelete{{ $item->id }}">Oui,Continuer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </thead>
        </table>
    </div>

    <!-- Modal -->
@endsection
@section('js_content')
    <script>
        const deleteTeamMember = (id, th) => {
            $(`#deleteModal${id}`).modal("show", true);
            let link = $(th).data("href");
            $(`#continueDelete${id}`).on("click", () => {
                $.ajax({
                    url: link,
                    type: 'DELETE',
                    data: {
                        "_token": "{{ csrf_token() }}",
                    },
                    success: {

                    }
                })
            })
        }
    </script>
@endsection
