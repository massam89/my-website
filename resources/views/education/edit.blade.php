@extends('layouts.main')

@section('content')

@if ($lang == 'en')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Education</h1>
</div>

<div class="row">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Edit education') }}
                        <a href="{{ route('education.index', $lang) }}" class="float-right btn">Back</a>
                    </div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('education.update', [$lang, $education->id] ) }}">
                            @csrf
                            @method('PUT')
    
                            <div class="form-group row">
                                <label for="education_title" class="col-md-4 col-form-label text-md-right">{{ __('Education title') }}</label>
    
                                <div class="col-md-6">
                                    <input id="education_title" type="text" class="form-control" name="education_title" value="{{ $education->education_title }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="education_date" class="col-md-4 col-form-label text-md-right">{{ __('Education date') }}</label>
    
                                <div class="col-md-6">
                                    <input id="education_date" type="text" class="form-control" name="education_date" value="{{ $education->education_date }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="education_location" class="col-md-4 col-form-label text-md-right">{{ __('Education location') }}</label>
    
                                <div class="col-md-6">
                                    <input id="education_location" type="text" class="form-control" name="education_location" value="{{ $education->education_location }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="education_description" class="col-md-4 col-form-label text-md-right">{{ __('Education description') }}</label>
    
                                <div class="col-md-6">
                                    <textarea id="education_description" class="form-control" name="education_description" required>{{ $education->education_description }}</textarea>
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
                <form class="m-2 p-2" action="{{ route('education.destroy', [$lang, $education->id]) }}" method="POST">
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
    <h1 class="h3 mb-0 text-gray-800">تحصیلات</h1>
</div>

<div class="row">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('ویرایش تحصیلات') }}
                        <a href="{{ route('education.index', $lang) }}" class="float-left btn">صفحه قبل</a>
                    </div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('education.update', [$lang, $education->id] ) }}">
                            @csrf
                            @method('PUT')
    
                            <div class="form-group row">
                                <label for="education_title" class="col-md-4 col-form-label text-md-right">{{ __('عنوان تحصیلات') }}</label>
    
                                <div class="col-md-6">
                                    <input id="education_title" type="text" class="form-control" name="education_title" value="{{ $education->education_title }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="education_date" class="col-md-4 col-form-label text-md-right">{{ __('تاریخ تحصیلات') }}</label>
    
                                <div class="col-md-6">
                                    <input id="education_date" type="text" class="form-control" name="education_date" value="{{ $education->education_date }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="education_location" class="col-md-4 col-form-label text-md-right">{{ __('مکان تحصیلات') }}</label>
    
                                <div class="col-md-6">
                                    <input id="education_location" type="text" class="form-control" name="education_location" value="{{ $education->education_location }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="education_description" class="col-md-4 col-form-label text-md-right">{{ __('توضیحات') }}</label>
    
                                <div class="col-md-6">
                                    <textarea id="education_description" class="form-control" name="education_description" required>{{ $education->education_description }}</textarea>
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
                <form class="m-2 p-2" action="{{ route('education.destroy', [$lang, $education->id]) }}" method="POST">
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