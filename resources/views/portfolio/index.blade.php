@extends('layouts.main')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Portfolio</h1>
    </div>
    <div class="row">
        <div class="card mx-auto">
            @if (session()->has('message'))
                <div class="alert alert-success">
                  {{ session('message') }}
                </div>
            @endif

            @if (session()->has('errmessage'))
                <div class="alert alert-danger">
                  {{ session('errmessage') }}
                </div>
            @endif

            <form method="GET" action="{{ route('portfolio.index') }}" class="mx-auto mt-3 row gy-2 gx-3 align-items-center">
              <div class="col-auto">
                <input type="search" name="search" class="form-control" id="autoSizingInput" placeholder="Search for something...">
              </div>
          
              <div class="col-auto">
                <button type="submit" class="btn btn-primary">Search</button>
              </div>
              <a href="{{ route('portfolio.create') }}" class="btn bg-info text-white">Create</a>
            </form>

            <div class="card-body">
                <table class="table table-responsive text-center">
                    <thead>
                      <tr>
                        <th scope="col">#Id</th>
                        <th scope="col">Portfolio title</th>
                        <th scope="col">Portfolio category</th>
                        <th scope="col">Portfolio link</th>
                        <th scope="col">Portfolio description</th>
                        <th scope="col">Portfolio image</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($portfolios as $portfolio)
                        <tr>
                            <th scope="row">{{ $portfolio->id }}</th>
                            <td>{{ $portfolio->portfolio_title }}</td>
                            <td>{{ $portfolio->portfolio_category }}</td>
                            <td><a target="_blank" href="{{ $portfolio->portfolio_link }}"><i class="fas fa-link"></i></a></td>
                            <td>{{ $portfolio->portfolio_description }}</i></td>
                            <td>
                              <img style="display:block;margin:auto;width:50px;height:50px" src="{{ $portfolio->portfolio_image_link }}" alt="portfolio image">
                            </td>
                            <td>
                              <a href="{{ route('portfolio.edit', $portfolio->id) }}" class="btn btn-success btn-sm">Edit</a>
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div> 
    </div>

@endsection