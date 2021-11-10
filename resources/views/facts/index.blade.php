@extends('layouts.main')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Facts</h1>
    </div>

    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                             <span>{{ __('Update Facts') }}</span>                                  
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('facts.update') }}">
                                @csrf
                                <div class="form-group row mb-4">            
                                    <label for="clients_title" class="col-md-4 col-form-label text-md-right">{{ __('Clients title') }}</label>
                                    <div class="col-md-6">
                                        <input id="clients_title" type="text" class="form-control" name="clients_title" value="{{  $facts->clients_title }}" required autocomplete="clients_number" autofocus>
                                    </div>

                                    <label for="clients_number" class="col-md-4 col-form-label text-md-right">{{ __('Clients Number') }}</label>
                                    <div class="col-md-6">
                                        <input id="clients_number" type="number" class="form-control" name="clients_number" value="{{  $facts->clients_number }}" required autocomplete="clients_number" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="projects_title" class="col-md-4 col-form-label text-md-right">{{ __('Projects title') }}</label>
                                    <div class="col-md-6">
                                        <input id="projects_title" type="text" class="form-control" name="projects_title" value="{{  $facts->projects_title }}" required autocomplete="clients_number" autofocus>
                                    </div>

                                    <label for="projects_number" class="col-md-4 col-form-label text-md-right">{{ __('Projects Number') }}</label>
                                    <div class="col-md-6">
                                        <input id="projects_number" type="number" class="form-control" name="projects_number" value="{{  $facts->projects_number }}" required autocomplete="clients_number" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="hours_title" class="col-md-4 col-form-label text-md-right">{{ __('Hours title') }}</label>
                                    <div class="col-md-6">
                                        <input id="hours_title" type="text" class="form-control" name="hours_title" value="{{  $facts->hours_title }}" required autocomplete="hours_title" autofocus>
                                    </div>

                                    <label for="hours_number" class="col-md-4 col-form-label text-md-right">{{ __('Projects Number') }}</label>
                                    <div class="col-md-6">
                                        <input id="hours_number" type="number" class="form-control" name="hours_number" value="{{  $facts->hours_number }}" required autocomplete="hours_number" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="workers_title" class="col-md-4 col-form-label text-md-right">{{ __('Worker title') }}</label>
                                    <div class="col-md-6">
                                        <input id="workers_title" type="text" class="form-control" name="workers_title" value="{{  $facts->workers_title }}" required autocomplete="workers_title" autofocus>
                                    </div>

                                    <label for="workers_number" class="col-md-4 col-form-label text-md-right">{{ __('Workers Number') }}</label>
                                    <div class="col-md-6">
                                        <input id="workers_number" type="number" class="form-control" name="workers_number" value="{{  $facts->hours_number }}" required autocomplete="workers_number" autofocus>
                                    </div>
                                </div>
        
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Update Facts') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>     
                </div>
            </div>
        </div>
    </div> 
@endsection