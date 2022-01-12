@extends('layouts.main')

@section('content')

@if ($lang == 'en')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Experiences</h1>
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

      <form method="GET" action="{{ route('experience.index', $lang) }}" class="mx-auto mt-3 row gy-2 gx-3 align-items-center">
        <div class="col-auto">
          <input type="search" name="search" class="form-control" id="autoSizingInput" placeholder="Search for something...">
        </div>
    
        <div class="col-auto">
          <button type="submit" class="btn btn-primary">Search</button>
        </div>
        <a href="{{ route('experience.create', $lang) }}" class="btn bg-info text-white">Create</a>
      </form>

      <div class="card-body">
          <table class="table table-responsive text-center">
              <thead>
                <tr>
                  <th scope="col">#Id</th>
                  <th scope="col">Experience title</th>
                  <th scope="col">Experience date</th>
                  <th scope="col">Experience location</th>
                  <th scope="col">Experience description</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($experiences as $experience)
                  <tr>
                      <th scope="row">{{ $experience->id }}</th>
                      <td>{{ $experience->experience_title }}</td>
                      <td>{{ $experience->experience_date }}</td>
                      <td>{{ $experience->experience_location }}</td>
                      
                      <td>
                          <ol>
                               @foreach ($experience->descriptions as $description)
                                  <li>"{{ $description->experience_description_text }}"</li> 
                               @endforeach
                          </ol>
                          
                      </td>

                      <td>
                        <a href="{{ route('experience.edit', [$lang,$experience->id]) }}" class="btn btn-success btn-sm">Edit</a>
                      </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
      </div>
  </div> 
</div>
@endif


@if ($lang == 'fa')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">تجربیات</h1>
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

      <form method="GET" action="{{ route('experience.index', $lang) }}" class="mx-auto mt-3 row gy-2 gx-3 align-items-center">
        <div class="col-auto">
          <input type="search" name="search" class="form-control" id="autoSizingInput" placeholder="جستجو ...">
        </div>
    
        <div class="col-auto">
          <button type="submit" class="btn btn-primary">جستجو</button>
        </div>
        <a href="{{ route('experience.create', $lang) }}" class="btn bg-info text-white">جدید</a>
      </form>

      <div class="card-body">
          <table class="table table-responsive text-center">
              <thead>
                <tr>
                  <th scope="col">#شماره</th>
                  <th scope="col">عنوان تجربه</th>
                  <th scope="col">تاریخ تجربه</th>
                  <th scope="col">مکان تجربه</th>
                  <th scope="col">توضیحات</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($experiences as $experience)
                  <tr>
                      <th scope="row">{{ $experience->id }}</th>
                      <td>{{ $experience->experience_title }}</td>
                      <td>{{ $experience->experience_date }}</td>
                      <td>{{ $experience->experience_location }}</td>
                      
                      <td>
                          <ol>
                               @foreach ($experience->descriptions as $description)
                                  <li>"{{ $description->experience_description_text }}"</li> 
                               @endforeach
                          </ol>
                          
                      </td>

                      <td>
                        <a href="{{ route('experience.edit', [$lang,$experience->id]) }}" class="btn btn-success btn-sm">ویرایش</a>
                      </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
      </div>
  </div> 
</div>
@endif
    


@endsection