@extends('layouts.main')

@section('content')
    @if ($lang == 'en')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Skills</h1>
    </div>

    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            {{ __('Edit skill') }}
                            <a href="{{ route('skills.index', $lang) }}" class="float-right btn">Back</a>
                        </div>
        
                        <div class="card-body">
                            <form method="POST" action="{{ route('skills.update', ['lang' => $lang, 'skill' => $skill->id]) }}">
                                @csrf
                                @method('PUT')
        
                                <div class="form-group row">
                                    <label for="skill_name" class="col-md-4 col-form-label text-md-right">{{ __('Skill Name') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="skill_name" type="text" class="form-control" name="skill_name" value="{{ $skill->skill_name }}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="skill_percentage" class="col-md-4 col-form-label text-md-right">{{ __('Skill percentage') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="skill_percentage" type="number" min="1" max="100" class="form-control" name="skill_percentage" value="{{ $skill->skill_percentage }}" required>
                                    </div>
                                </div>
    
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Update') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <form class="m-2 p-2" action="{{ route('skills.destroy', ['lang' => $lang, 'skill' => $skill->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>  
    @endif

    @if ($lang == 'fa')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">مهارت ها</h1>
    </div>

    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            {{ __('ویرابش مهارت') }}
                            <a href="{{ route('skills.index', $lang) }}" class="float-left btn">صفحه قبل</a>
                        </div>
        
                        <div class="card-body">
                            <form method="POST" action="{{ route('skills.update', ['lang' => $lang, 'skill' => $skill->id]) }}">
                                @csrf
                                @method('PUT')
        
                                <div class="form-group row">
                                    <label for="skill_name" class="col-md-4 col-form-label text-md-right">{{ __('نام مهارت') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="skill_name" type="text" class="form-control" name="skill_name" value="{{ $skill->skill_name }}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="skill_percentage" class="col-md-4 col-form-label text-md-right">{{ __('درصد مهارت') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="skill_percentage" type="number" min="1" max="100" class="form-control" name="skill_percentage" value="{{ $skill->skill_percentage }}" required>
                                    </div>
                                </div>
    
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('بروزرسانی') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <form class="m-2 p-2" action="{{ route('skills.destroy', ['lang' => $lang, 'skill' => $skill->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">حذف</button>
                    </form>
                </div>
            </div>
        </div>
    </div> 
    @endif
@endsection