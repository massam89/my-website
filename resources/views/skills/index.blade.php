@extends('layouts.main')

@section('content')
  @if ($lang == 'en')
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Skills</h1>
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

            <form method="GET" action="{{ route('skills.index', $lang) }}" class="mx-auto mt-3 row gy-2 gx-3 align-items-center">
              <div class="col-auto">
                <input type="search" name="search" class="form-control" id="autoSizingInput" placeholder="Search for something...">
              </div>
          
              <div class="col-auto">
                <button type="submit" class="btn btn-primary">Search</button>
              </div>
              <a href="{{ route('skills.create', $lang) }}" class="btn bg-info text-white">Create</a>
            </form>

            <div class="card-body">
                <table class="table table-responsive text-center">
                    <thead>
                      <tr>
                        <th scope="col">#Id</th>
                        <th scope="col">Skill name</th>
                        <th scope="col">Skill percentage</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($skills as $skill)
                        <tr>
                            <th scope="row">{{ $skill->id }}</th>
                            <td>{{ $skill->skill_name }}</td>
                            <td>{{ $skill->skill_percentage }}</td>
                            <td>
                              <a href="{{ route('skills.edit', ['skill' => $skill->id, 'lang' => $lang]) }}" class="btn btn-success btn-sm">Edit</a>
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
    <h1 class="h3 mb-0 text-gray-800">مهارت ها</h1>
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

        <form method="GET" action="{{ route('skills.index', $lang) }}" class="mx-auto mt-3 row gy-2 gx-3 align-items-center">
          <div class="col-auto">
            <input type="search" name="search" class="form-control" id="autoSizingInput" placeholder="جستجو ...">
          </div>
      
          <div class="col-auto">
            <button type="submit" class="btn btn-primary">جستجو</button>
          </div>
          <a href="{{ route('skills.create', $lang) }}" class="btn bg-info text-white">جدید</a>
        </form>

        <div class="card-body">
            <table class="table table-responsive text-center">
                <thead>
                  <tr>
                    <th scope="col">#شماره</th>
                    <th scope="col">نام مهارت</th>
                    <th scope="col">درصد مهارت</th>
                    <th scope="col">عملیات</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($skills as $skill)
                    <tr>
                        <th scope="row">{{ $skill->id }}</th>
                        <td>{{ $skill->skill_name }}</td>
                        <td>{{ $skill->skill_percentage }}</td>
                        <td>
                          <a href="{{ route('skills.edit', ['skill' => $skill->id, 'lang' => $lang]) }}" class="btn btn-success btn-sm">ویرایش</a>
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