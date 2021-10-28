@extends('layouts.main')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Skills</h1>
    </div>

    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            {{ __('Create skill') }}
                            <a href="{{ route('skills.index') }}" class="float-right btn">Back</a>
                        </div>
        
                        <div class="card-body">
                            <form method="POST" action="{{ route('skills.store') }}">
                                @csrf
                               
                                <div class="form-group row">
                                    <label for="skill_name" class="col-md-4 col-form-label text-md-right">{{ __('Skill Name') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="skill_name" type="text" class="form-control" name="skill_name" required autocomplete="skill_name" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="skill_percentage" class="col-md-4 col-form-label text-md-right">{{ __('Skill Percentage') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="skill_percentage" type="number" min="1" max="100" class="form-control" name="skill_percentage" required autocomplete="skill_percentage" autofocus>
                                    </div>
                                </div>
    
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Store') }}
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