@extends('layouts.main')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Experience</h1>
    </div>

    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            {{ __('Edit experience') }}
                            <a href="{{ route('experience.index') }}" class="float-right btn">Back</a>
                        </div>
        
                        <div class="card-body">
                            <form method="POST" action="{{ route('experience.update', $experience->id) }}" novalidate>
                                @csrf
                                @method('PUT')
                               
                                <div class="form-group row">
                                    <label for="experience_title" class="col-md-4 col-form-label text-md-right">{{ __('Experience title') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="experience_title" type="text" class="form-control" value="{{ $experience->experience_title }}" name="experience_title"  required autocomplete="experience_title" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="experience_date" class="col-md-4 col-form-label text-md-right">{{ __('Experience date') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="experience_date" type="text" class="form-control" value="{{ $experience->experience_date }}" name="experience_date" required autocomplete="experience_date" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="experience_location" class="col-md-4 col-form-label text-md-right">{{ __('Experience location') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="experience_location" type="text" class="form-control" value="{{ $experience->experience_location }}" name="experience_location" required autocomplete="experience_location" autofocus>
                                    </div>
                                </div>     

                                <div class="form-group row">
                                    <label for="experience_description" class="col-md-4 col-form-label text-md-right">{{ __('Experience description') }}</label>
        
                                    <div class="col-md-6">

                                        @for ($i = 0; $i < count($experience->descriptions) - 1; $i++)
                                        <div>
                                            <textarea class="form-control elBox" name="experience_description[]" required autocomplete="experience_description" autofocus>{{ $experience->descriptions[$i]->experience_description_text }}</textarea>
                                            <span class="closeBtn" style="color:red;position: absolute;left:0;cursor: pointer;">X</span>
                                        </div>
                                         @endfor

                                        <div id="targetEl">
                                            <textarea class="form-control" name="experience_description[]" required autocomplete="experience_description" autofocus>{{ $experience->descriptions[count($experience->descriptions) -1 ]->experience_description_text }}</textarea>
                                        </div>
           
                                    </div>

                                    <button id="btn-add" class="btn btn-info mx-auto d-block mt-3">Add more description</button>
                                </div>                             

                                <script>
                                    const btn = document.getElementById('btn-add')
                                    btn.addEventListener('click', (e) => {
                                        e.preventDefault();
                                        const divEl = document.createElement('div');
                                        const targetEl = document.getElementById('targetEl');
                                        const el = document.createElement('textarea');
                                        const close = document.createElement('span');

                                        close.innerHTML = 'X'
                                        close.style.color = 'red'
                                        close.style.position = 'absolute';
                                        close .style.left = '0px'
                                        close.style.cursor = 'pointer'

                                        el.className = 'form-control';
                                        el.name = 'experience_description[]';
                                        el.autofocus = true;

                                        divEl.appendChild(close)
                                        divEl.appendChild(el);
                                        targetEl.appendChild(divEl)
                                        
                                        close.addEventListener('click', (e) => {  
                                            el.value = null;  
                                            e.target.parentNode.style.display = 'none';
                                        })
                                    })

                                    const closeBtn = document.getElementsByClassName('closeBtn');
                                    const elBox = document.getElementsByClassName('elBox');

                                    for(let i = 0; i < closeBtn.length; i++) {
                                       closeBtn[i].addEventListener('click', (e) => {
                                        elBox[i].value = null;
                                        e.target.parentNode.style.display = 'none';
                                       }) 
                                    }
                                </script>

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
                    <form class="m-2 p-2" action="{{ route('experience.destroy', $experience->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div> 
@endsection