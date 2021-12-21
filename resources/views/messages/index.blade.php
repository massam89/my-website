@extends('layouts.main')

@section('content')
    @if ($lang == 'fa')
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">پیام ها</h1>
    </div>
    <div class="row">
        <div class="card mx-auto">

            <div class="card-body">
                <table class="table table-responsive text-center">
                    <thead>
                      <tr>
                        <th scope="col">#شماره</th>
                        <th scope="col">نام</th>
                        <th scope="col">ایمیل</th>
                        <th scope="col">متن پیام</th>
                        <th scope="col">ارسال شده در</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($messages as $message)
                        <tr>
                            <th scope="row">{!! engNumToPerNum(strval($message->id)) !!}</th>
                            <th scope="row">{{ $message->name }}</th>
                            <th scope="row">
                                <a title="{{ $message->email }}" href="mailto:{{ $message->email }}"><i class="fas fa-envelope"></i></a>
                            </th>
                            <th scope="row">{{ $message->text }}</th>
                            <th scope="row">{!! engNumToPerNum(gregorian_to_jalali(date('Y', strtotime($message->created_at)), date('m', strtotime($message->created_at)), date('d', strtotime($message->created_at)), '/')) !!}</th>
                        </tr>
                      @endforeach                      
                    </tbody>
                  </table>
                  
                  <span class="text-center">{{ $messages->links() }} </span>    
            </div>        
        </div>    
    </div>
    @endif

 @if ($lang == 'en')
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Messages</h1>
</div>
<div class="row">
  <div class="card mx-auto">

      <div class="card-body">
          <table class="table table-responsive text-center">
              <thead>
                <tr>
                  <th scope="col">#Id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Message</th>
                  <th scope="col">Sent at</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($messages as $message)
                  <tr>
                      <th scope="row">{{ $message->id }}</th>
                      <th scope="row">{{ $message->name }}</th>
                      <th scope="row">
                          <a title="{{ $message->email }}" href="mailto:{{ $message->email }}"><i class="fas fa-envelope"></i></a>
                      </th>
                      <th scope="row">{{ $message->text }}</th>
                      <th scope="row">{{ $message->created_at }}</th>
                  </tr>
                @endforeach                      
              </tbody>
            </table>
            
            <span class="text-center">{{ $messages->links() }} </span>    
      </div>        
  </div>    
</div>
 @endif
@endsection

<style>
    .w-5 {
        display: none
    }
</style>