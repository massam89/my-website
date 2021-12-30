@extends('layouts.main')

@section('content')
@if ($lang == 'en')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Testimonial</h1>
</div>

<div class="row">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Edit testimonial') }}
                        <a href="{{ route('testimonial.index', $lang) }}" class="float-right btn">Back</a>
                    </div>
    
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="{{ route('testimonial.update', [$lang, $testimonial->id]) }}">
                            @csrf
                            @method('PUT')
                           
                            <div class="form-group row">
                                <label for="testimonial_name" class="col-md-4 col-form-label text-md-right">{{ __('Testimonial name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="testimonial_name" type="text" class="form-control" name="testimonial_name" value="{{ $testimonial->testimonial_name }}" required autocomplete="testimonial_name" autofocus>
                                </div>
                            </div>    

                            <div class="form-group row">
                                <label for="testimonial_job" class="col-md-4 col-form-label text-md-right">{{ __('Testimonial job') }}</label>
    
                                <div class="col-md-6">
                                    <input id="testimonial_job" type="text" class="form-control" name="testimonial_job" value="{{ $testimonial->testimonial_job }}" required autocomplete="testimonial_job" autofocus>
                                </div>
                            </div>   

                            <div class="form-group row">
                                <label for="testimonial_text" class="col-md-4 col-form-label text-md-right">{{ __('Testimonial text') }}</label>
    
                                <div class="col-md-6">
                                    <input id="testimonial_text" type="text" class="form-control" name="testimonial_text" value="{{ $testimonial->testimonial_text }}" required autocomplete="testimonial_text" autofocus>
                                </div>
                            </div>    

                            <div class="form-group row">
                                <label for="testimonial_image_url" class="col-md-4 col-form-label text-md-right">{{ __('Testimonial image') }}</label>
    
                                <div class="col-md-6 d-flex">
                                    <input id="testimonial_image_url" type="file" class="form-control" name="testimonial_image_url" >
                                    @isset($testimonial, $testimonial->testimonial_image_url)
                                      <img class="ml-2" width= "35" height="35" src="{{ $testimonial->testimonial_image_url }}" alt="testimonial image"> 
                                    @endisset
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
                    <form class="m-2 p-2" action="{{ route('testimonial.destroy', [$lang, $testimonial->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
  
@endif

@if ($lang == 'fa')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">نظرات دیگران</h1>
</div>

<div class="row">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('ویرایش نظر') }}
                        <a href="{{ route('testimonial.index', $lang) }}" class="float-left btn">صفحه قبل</a>
                    </div>
    
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="{{ route('testimonial.update', [$lang, $testimonial->id]) }}">
                            @csrf
                            @method('PUT')
                           
                            <div class="form-group row">
                                <label for="testimonial_name" class="col-md-4 col-form-label text-md-right">{{ __('نام') }}</label>
    
                                <div class="col-md-6">
                                    <input id="testimonial_name" type="text" class="form-control" name="testimonial_name" value="{{ $testimonial->testimonial_name }}" required autocomplete="testimonial_name" autofocus>
                                </div>
                            </div>    

                            <div class="form-group row">
                                <label for="testimonial_job" class="col-md-4 col-form-label text-md-right">{{ __('شغل') }}</label>
    
                                <div class="col-md-6">
                                    <input id="testimonial_job" type="text" class="form-control" name="testimonial_job" value="{{ $testimonial->testimonial_job }}" required autocomplete="testimonial_job" autofocus>
                                </div>
                            </div>   

                            <div class="form-group row">
                                <label for="testimonial_text" class="col-md-4 col-form-label text-md-right">{{ __('متن') }}</label>
    
                                <div class="col-md-6">
                                    <input id="testimonial_text" type="text" class="form-control" name="testimonial_text" value="{{ $testimonial->testimonial_text }}" required autocomplete="testimonial_text" autofocus>
                                </div>
                            </div>    

                            <div class="form-group row">
                                <label for="testimonial_image_url" class="col-md-4 col-form-label text-md-right">{{ __('عکس') }}</label>
    
                                <div class="col-md-6 d-flex">
                                    <input id="testimonial_image_url" type="file" class="form-control" name="testimonial_image_url" >
                                    @isset($testimonial, $testimonial->testimonial_image_url)
                                      <img class="ml-2" width= "35" height="35" src="{{ $testimonial->testimonial_image_url }}" alt="testimonial image"> 
                                    @endisset
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
                    <form class="m-2 p-2" action="{{ route('testimonial.destroy', [$lang, $testimonial->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">حذف</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
@endif
@endsection