@extends('layouts.template')
@section('header_title')
    Creer Adresse
@endsection
@section('content')
    <div class="container card mt-3 p-2">
        <h4> Nouveau Adresse</h4>
    </div>
    <div class="card">
        <form action="{{ route('adress_location.store') }}" method="post" class="p-1" enctype="multipart/form-data">
            @csrf
            <div class="row p-2">
                <div class="form-group col-12 p-2">
                    <label for="" class="text text-primary"><i
                            class="ri ri-phone-line p-2 text-info h4"></i>&nbsp;Numero
                        Telephone:
                        <sup class='text text-danger fw-bold '>*</sup>:</label>
                    <input type="number" name="phone_number" id="" class="form-control border border-secondary"
                        value="{{ old('phone_number') }}">
                    @if ($errors->has('phone_number'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">
                            {{ $errors->first('phone_number') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-12 p-2">
                    <label for="" class="text text-primary"><i
                            class="ri ri-mail-line p-2 text-secondary h4"></i>&nbsp;Adresse Email:
                        :</label>
                    <input type="email" name="email_adress" id="" class="form-control border border-secondary"
                        value="{{ old('email_adress') }}">
                    @if ($errors->has('email_adress'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">
                            {{ $errors->first('email_adress') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-12 p-2">
                    <label for="" class="text text-primary"><i
                            class="p-2 ri ri-map-line text-warning h4"></i>&nbsp;Adresse-Rue-Avenue-Quartier: <sup
                            class='text text-danger fw-bold '>*</sup>:</label>
                    <input type="text" name="adress_location" id="" class="form-control border border-secondary"
                        value="{{ old('adress_location') }}">
                    @if ($errors->has('adress_location'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">
                            {{ $errors->first('adress_location') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-12 p-2">
                    <label for="" class="text text-primary"><i
                            class="p-2 ri ri-facebook-line text-primary h4"></i>Facebook
                        Link:</label>
                    <input type="text" name="facebook_link" id="" class="form-control border border-secondary"
                        value="{{ old('facebook_link') }}">
                    @if ($errors->has('facebook_link'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">
                            {{ $errors->first('facebook_link') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-12 p-2">
                    <label for="" class="text text-primary"><i
                            class="p-2 ri ri-twitter-line text text-info h4"></i>&nbsp;Twitter Link: </label>
                    <input type="text" name="twitter_link" id="" class="form-control border border-secondary"
                        value="{{ old('twitter_link') }}">
                    @if ($errors->has('twitter_link'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">
                            {{ $errors->first('twitter_link') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-12 p-2">
                    <label for="" class="text text-primary"><i
                            class="p-2 ri ri-youtube-line text-danger h4"></i>&nbsp;Youtube
                        Link: </label>
                    <input type="text" name="youtube_link" id="" class="form-control border border-secondary"
                        value="{{ old('youtube_link') }}">
                    @if ($errors->has('youtube_link'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">
                            {{ $errors->first('youtube_link') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row p-2">
                <div class="col-8"></div>
                <div class="col-4">
                    <button type="submit" class="btn btn-xs col-12 btn-info">Enregistrer Adress</button>
                </div>
            </div>
        </form>
    </div>
@endsection
