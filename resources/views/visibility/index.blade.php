@extends('layouts.main')

@section('content')
    @if ($lang == 'en')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Visibilities</h1>
    </div>

    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                             <span>{{ __('Update Visibilities') }}</span>                                  
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('visibility.update', $lang) }}">
                                @csrf

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="selectall">
                                    <label class="form-check-label" for="selectall">
                                      Select/deselect All
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input name="about" class="form-check-input" type="checkbox" id="flexCheckChecked1" {{ ($visibilities->about) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexCheckChecked1">
                                      About Section
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input name="fact" class="form-check-input" type="checkbox"  id="flexCheckChecked2" {{ ($visibilities->fact) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexCheckChecked2">
                                      Fact Section
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input name="skill" class="form-check-input" type="checkbox"  id="flexCheckChecked3" {{ ($visibilities->skill) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexCheckChecked3">
                                      Skill Section
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="resume" class="form-check-input" type="checkbox"  id="flexCheckChecked4" {{ ($visibilities->resume) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexCheckChecked4">
                                      Resume Section
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="education" class="form-check-input" type="checkbox"  id="flexCheckChecked5" {{ ($visibilities->education) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexCheckChecked5">
                                      Education Section
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="experience" class="form-check-input" type="checkbox"  id="flexCheckChecked6" {{ ($visibilities->experience) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexCheckChecked6">
                                      Experience Section
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="portfolio" class="form-check-input" type="checkbox"  id="flexCheckChecked7" {{ ($visibilities->portfolio) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexCheckChecked7">
                                      Portfolio Section
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="service" class="form-check-input" type="checkbox"  id="flexCheckChecked8" {{ ($visibilities->service) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexCheckChecked8">
                                      Service Section
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="testimonial" class="form-check-input" type="checkbox"  id="flexCheckChecked9" {{ ($visibilities->testimonial) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexCheckChecked9">
                                      Testimonial Section
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="contact" class="form-check-input" type="checkbox"  id="flexCheckChecked10" {{ ($visibilities->contact) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexCheckChecked10">
                                      Contact Section
                                    </label>
                                </div>
                                  
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Update visibilities') }}
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

    <script>
        const selectall = document.getElementById('selectall');
        const inputs = document.getElementsByClassName('form-check-input');   

        selectall.addEventListener('click', () => {
            if(selectall.checked) {
                
                for(let i = 1 ; i < inputs.length ; i++) {
                    inputs[i].checked = true;
                }
            } else {
                for(let i = 1 ; i < inputs.length ; i++) {
                    inputs[i].checked = false
                }
            }      
        }) 

        for(let i = 1 ; i < inputs.length ; i++) {
            inputs[i].addEventListener('click', () => {
                selectall.checked = false
            })
        }
    </script>
    @endif


    @if ($lang == 'fa')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">تنظیمات نمایش</h1>
    </div>

    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                             <span>{{ __('بروزرسانی تنظیمات نمایش') }}</span>                                  
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('visibility.update', $lang) }}">
                                @csrf

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="selectall">
                                    <label class="form-check-label mx-3" for="selectall">
                                      انتخاب/عدم انتخاب همه
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input name="about" class="form-check-input" type="checkbox" id="flexCheckChecked1" {{ ($visibilities->about) ? 'checked' : '' }}>
                                    <label class="form-check-label mx-3" for="flexCheckChecked1">
                                      بخش دریاره من
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input name="fact" class="form-check-input" type="checkbox"  id="flexCheckChecked2" {{ ($visibilities->fact) ? 'checked' : '' }}>
                                    <label class="form-check-label mx-3" for="flexCheckChecked2">
                                      بخش حقایق
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input name="skill" class="form-check-input" type="checkbox"  id="flexCheckChecked3" {{ ($visibilities->skill) ? 'checked' : '' }}>
                                    <label class="form-check-label mx-3" for="flexCheckChecked3">
                                      بخش مهارت ها
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="resume" class="form-check-input" type="checkbox"  id="flexCheckChecked4" {{ ($visibilities->resume) ? 'checked' : '' }}>
                                    <label class="form-check-label mx-3" for="flexCheckChecked4">
                                      بخش رزومه
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="education" class="form-check-input" type="checkbox"  id="flexCheckChecked5" {{ ($visibilities->education) ? 'checked' : '' }}>
                                    <label class="form-check-label mx-3" for="flexCheckChecked5">
                                      بخش تحصیلات
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="experience" class="form-check-input" type="checkbox"  id="flexCheckChecked6" {{ ($visibilities->experience) ? 'checked' : '' }}>
                                    <label class="form-check-label mx-3" for="flexCheckChecked6">
                                      بخش تجربیات
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="portfolio" class="form-check-input" type="checkbox"  id="flexCheckChecked7" {{ ($visibilities->portfolio) ? 'checked' : '' }}>
                                    <label class="form-check-label mx-3" for="flexCheckChecked7">
                                      بخش نمونه کار
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="service" class="form-check-input" type="checkbox"  id="flexCheckChecked8" {{ ($visibilities->service) ? 'checked' : '' }}>
                                    <label class="form-check-label mx-3" for="flexCheckChecked8">
                                      بخش خدمات
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="testimonial" class="form-check-input" type="checkbox"  id="flexCheckChecked9" {{ ($visibilities->testimonial) ? 'checked' : '' }}>
                                    <label class="form-check-label mx-3" for="flexCheckChecked9">
                                      بخش نظرات دیگران
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="contact" class="form-check-input" type="checkbox"  id="flexCheckChecked10" {{ ($visibilities->contact) ? 'checked' : '' }}>
                                    <label class="form-check-label mx-3" for="flexCheckChecked10">
                                      بخش ارتباط با من
                                    </label>
                                </div>
                                  
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('بروز رسانی تنظیمات نمایش') }}
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

    <script>
        const selectall = document.getElementById('selectall');
        const inputs = document.getElementsByClassName('form-check-input');   

        selectall.addEventListener('click', () => {
            if(selectall.checked) {
                
                for(let i = 1 ; i < inputs.length ; i++) {
                    inputs[i].checked = true;
                }
            } else {
                for(let i = 1 ; i < inputs.length ; i++) {
                    inputs[i].checked = false
                }
            }      
        }) 

        for(let i = 1 ; i < inputs.length ; i++) {
            inputs[i].addEventListener('click', () => {
                selectall.checked = false
            })
        }
    </script>
    @endif
@endsection