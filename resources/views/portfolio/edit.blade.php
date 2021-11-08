@extends('layouts.main')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Portfolio</h1>
    </div>

    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            {{ __('Edit portfolio') }}
                            <a href="{{ route('portfolio.index') }}" class="float-right btn">Back</a>
                        </div>
        
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data" action="{{ route('portfolio.update', $portfolio->id) }}">
                                @csrf
                               
                                <div class="form-group row">
                                    <label for="portfolio_title" class="col-md-4 col-form-label text-md-right">{{ __('Portfolio title') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="portfolio_title" type="text" class="form-control" name="portfolio_title" value="{{ $portfolio->portfolio_title }}" required autocomplete="portfolio_title" autofocus>
                                    </div>
                                </div>    

                                <div class="form-group row">
                                    <label for="portfolio_category" class="col-md-4 col-form-label text-md-right">{{ __('Portfolio category') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="portfolio_category" type="text" class="form-control" name="portfolio_category" value="{{ $portfolio->portfolio_category }}" required autocomplete="portfolio_category" autofocus>
                                    </div>
                                </div>  

                                <div class="form-group row">
                                    <label for="portfolio_link" class="col-md-4 col-form-label text-md-right">{{ __('Portfolio link') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="portfolio_link" type="url" class="form-control" name="portfolio_link" value="{{ $portfolio->portfolio_link }}" required autocomplete="portfolio_link" autofocus>
                                    </div>
                                </div>  
                                
                                <div class="form-group row">
                                    <label for="portfolio_description" class="col-md-4 col-form-label text-md-right">{{ __('Portfolio description') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="portfolio_description" type="text" class="form-control" name="portfolio_description" value="{{ $portfolio->portfolio_description }}" required autocomplete="portfolio_description" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="portfolio_image_link" class="col-md-4 col-form-label text-md-right">{{ __('Portfolio image') }}</label>
        
                                    <div class="col-md-6 d-flex">
                                        <input id="portfolio_image_link" type="file" class="form-control" name="portfolio_image_link" >
                                        @isset($portfolio, $portfolio->portfolio_image_link)
                                          <img class="ml-2" width= "35" height="35" src="/{{ $portfolio->portfolio_image_link }}" alt="portfolio image"> 
                                        @endisset
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
                    <form class="m-2 p-2" action="{{ route('portfolio.destroy', $portfolio->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div> 
@endsection