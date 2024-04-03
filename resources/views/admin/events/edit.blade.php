@extends('layouts.template')
@section('header_title')
    Modifier Evenement
@endsection
@section('content')
    <div class="container card mt-3 p-2">
        <h4>Modifier Evenement</h4>
    </div>
    <div class="card">
        <form action="{{ route('events.update', $event) }}" method="post" class="p-1" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row p-2">
                <div class="form-group col-6 p-2">
                    <label for="" class="text text-primary">Title: <sup
                            class='text text-danger fw-bold '>*</sup>:</label>
                    <input type="text" name="title" id="" class="form-control"
                        value="{{ empty($event->title) ? old('title') : $event->title }}">
                    @if ($errors->has('title'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">{{ $errors->first('title') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-6 p-2">
                    <label for="" class="text text-primary">Poster: <sup
                            class='text text-danger fw-bold '>*</sup>:</label>
                    <input type="file" name="poster_url" value="" id="" class="form-control"
                        value="{{ old('poster_url') }}">
                    {{-- <input type="file" name="poster_url"
                        value="{{ URL::asset("/storage/uploads/poster/$event->poster_url") }}" id=""
                        class="form-control" value="{{ old('poster_url') }}"> --}}
                    @if ($errors->has('poster_url'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">{{ $errors->first('poster_url') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-3 p-2">
                    <label for="" class="text text-primary">Date Evenements: <sup
                            class='text text-danger fw-bold '>*</sup>:</label>
                    <input type="date" name="date_event" id="" class="form-control"
                        value="{{ empty($event->date_event) ? old('date_event') : $event->date_event }}">
                    @if ($errors->has('date_event'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">{{ $errors->first('date_event') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-3 p-2">
                    <label for="" class="text text-primary">Location: <sup
                            class='text text-danger fw-bold '>*</sup>:</label>
                    <input type="text" name="location_event" id="" class="form-control"
                        value="{{ empty($event->location_event) ? old('location_event') : $event->location_event }}">
                    @if ($errors->has('location_event'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">
                            {{ $errors->first('location_event') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-3 p-2">
                    <label for="" class="text text-primary">Du: <sup
                            class='text text-danger fw-bold '>*</sup>:</label>
                    <input type="time" name="from_hour" id="" class="datetime form-control"
                        value="{{ empty($event->from_hour) ? old('from_hour') : $event->from_hour }}">
                    @if ($errors->has('from_hour'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">{{ $errors->first('from_hour') }}
                        </p>
                    @endif
                </div>
                <div class="form-group col-3 p-2">
                    <label for="" class="text text-primary">Au: <sup
                            class='text text-danger fw-bold '>*</sup>:</label>
                    <input type="time" name="to_hour" id="" class="datetime form-control"
                        value="{{ empty($event->to_hour) ? old('to_hour') : $event->to_hour }}">
                    @if ($errors->has('to_hour'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">{{ $errors->first('to_hour') }}
                        </p>
                    @endif
                </div>

                <div class="form-group col-12 p-2">
                    <label for="" class="text text-primary">Description<sup
                            class='text text-danger fw-bold '>*</sup>:</label>
                    <textarea name="description_event" id="" cols="30" rows="10" class="form-control">{{ empty($event->description_event) ? old('description_event') : $event->description_event }}
                    </textarea>
                    @if ($errors->has('description_event'))
                        <p class="mt-1 p-1 col-12 text text-light text-center bg-danger">
                            {{ $errors->first('description_event') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row p-2">
                <div class="col-8"></div>
                <div class="col-4">
                    <button type="submit" class="btn btn-xs col-12 btn-warning">Modifier Evenements</button>
                </div>
            </div>
        </form>
    </div>
@endsection
