@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Set main data') }}</div>
                <div class="card-body">
                    <h5 class="m-2">Personal details</h5>
                    <form method="POST" action="{{ route('owner') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="@if(isset($owner)){{ $owner->name }}@endif" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="expertises" class="col-md-4 col-form-label text-md-right">{{ __('Expertises') }}</label>

                            <div class="col-md-6">
                                <input id="expertises" type="text" class="form-control" name="expertises" value="@if(isset($owner)){{ $owner->expertises }}@endif" required autocomplete="expertises" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthdate" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="birthdate" type="date" class="form-control" name="birthdate" value="@if(isset($owner)){{ $owner->birthdate }}@endif" required autocomplete="birthdate" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="website" class="col-md-4 col-form-label text-md-right">{{ __('Website') }}</label>

                            <div class="col-md-6">
                                <input id="website" type="url" class="form-control" name="website" value="@if(isset($owner)){{ $owner->website }}@endif" required autocomplete="website" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control" name="phone" value="@if(isset($owner)){{ $owner->phone }}@endif" required autocomplete="phone" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" value="@if(isset($owner)){{ $owner->city }}@endif" required autocomplete="city" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="degree" class="col-md-4 col-form-label text-md-right">{{ __('Degree') }}</label>

                            <div class="col-md-6">
                                <input id="degree" type="text" class="form-control" name="degree" value="@if(isset($owner)){{ $owner->degree }}@endif" required autocomplete="degree" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="@if(isset($owner)){{ $owner->email }}@endif" required autocomplete="email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="@if(isset($owner)){{ $owner->address }}@endif" required autocomplete="address" autofocus>                       
                            </div>
                        </div>

                        <h5 class="m-2">Website's text</h5>

                        <div class="form-group row">
                            <label for="about_text1" class="col-md-4 col-form-label text-md-right">{{ __('About section - first text') }}</label>

                            <div class="col-md-6">
                                <textarea id="about_text1" class="form-control" name="about_text1" autocomplete="about_text1" autofocus>@if(isset($owner)){{ $owner->about_text1 }}@endif</textarea>                       
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="about_header" class="col-md-4 col-form-label text-md-right">{{ __('About section - header') }}</label>

                            <div class="col-md-6">
                                <textarea id="about_header" class="form-control" name="about_header" autocomplete="about_header" autofocus>@if(isset($owner)){{ $owner->about_header }}@endif</textarea>                       
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="about_text2" class="col-md-4 col-form-label text-md-right">{{ __('About section - second text') }}</label>

                            <div class="col-md-6">
                                <textarea id="about_text2" class="form-control" name="about_text2" autocomplete="about_text2" autofocus>@if(isset($owner)){{ $owner->about_text2 }}@endif</textarea>                       
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="about_text3" class="col-md-4 col-form-label text-md-right">{{ __('About section - third text') }}</label>

                            <div class="col-md-6">
                                <textarea id="about_text3" class="form-control" name="about_text3" autocomplete="about_text3" autofocus>@if(isset($owner)){{ $owner->about_text3 }}@endif</textarea>                       
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="facts_text" class="col-md-4 col-form-label text-md-right">{{ __('Facts section - text') }}</label>

                            <div class="col-md-6">
                                <textarea id="facts_text" class="form-control" name="facts_text" autocomplete="facts_text" autofocus>@if(isset($owner)){{ $owner->facts_text }}@endif</textarea>                       
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="skills_text" class="col-md-4 col-form-label text-md-right">{{ __('Skills section - text') }}</label>

                            <div class="col-md-6">
                                <textarea id="skills_text" class="form-control" name="skills_text" autocomplete="skills_text" autofocus>@if(isset($owner)){{ $owner->skills_text }}@endif</textarea>                       
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="resume_text" class="col-md-4 col-form-label text-md-right">{{ __('Resume section - text') }}</label>

                            <div class="col-md-6">
                                <textarea id="resume_text" class="form-control" name="resume_text" autocomplete="resume_text" autofocus>@if(isset($owner)){{ $owner->resume_text }}@endif</textarea>                       
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="portfolio_text" class="col-md-4 col-form-label text-md-right">{{ __('Portfolio section - text') }}</label>

                            <div class="col-md-6">
                                <textarea id="portfolio_text" class="form-control" name="portfolio_text" autocomplete="portfolio_text" autofocus>@if(isset($owner)){{ $owner->portfolio_text }}@endif</textarea>                       
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="services_text" class="col-md-4 col-form-label text-md-right">{{ __('Service section - text') }}</label>

                            <div class="col-md-6">
                                <textarea id="services_text" class="form-control" name="services_text" autocomplete="services_text" autofocus>@if(isset($owner)){{ $owner->services_text }}@endif</textarea>                       
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="testimonials_text" class="col-md-4 col-form-label text-md-right">{{ __('Testimonials section - text') }}</label>

                            <div class="col-md-6">
                                <textarea id="testimonials_text" class="form-control" name="testimonials_text" autocomplete="testimonials_text" autofocus>@if(isset($owner)){{ $owner->testimonials_text }}@endif</textarea>                       
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact_text" class="col-md-4 col-form-label text-md-right">{{ __('Contact section - text') }}</label>

                            <div class="col-md-6">
                                <textarea id="contact_text" class="form-control" name="contact_text" autocomplete="contact_text" autofocus>@if(isset($owner)){{ $owner->contact_text }}@endif</textarea>                       
                            </div>
                        </div>

                        <h5 class="m-2">Social medias</h5>

                        <div class="form-group row">
                            <label for="twitter" class="col-md-4 col-form-label text-md-right">{{ __('twitter') }}</label>

                            <div class="col-md-6">
                                <input id="twitter" type="url" class="form-control" name="twitter" value="@if(isset($owner)){{ $owner->twitter }}@endif" autocomplete="twitter" autofocus>                       
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="facebook" class="col-md-4 col-form-label text-md-right">{{ __('facebook') }}</label>

                            <div class="col-md-6">
                                <input id="facebook" type="url" class="form-control" name="facebook" value="@if(isset($owner)){{ $owner->facebook }}@endif"  autocomplete="facebook" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="instagram" class="col-md-4 col-form-label text-md-right">{{ __('instagram') }}</label>

                            <div class="col-md-6">
                                <input id="instagram" type="url" class="form-control" name="instagram" value="@if(isset($owner)){{ $owner->instagram }}@endif" autocomplete="instagram" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="linkedin" class="col-md-4 col-form-label text-md-right">{{ __('linkedin') }}</label>

                            <div class="col-md-6">
                                <input id="linkedin" type="url" class="form-control" name="linkedin" value="@if(isset($owner)){{ $owner->linkedin }}@endif" autocomplete="linkedin" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="github" class="col-md-4 col-form-label text-md-right">{{ __('github') }}</label>

                            <div class="col-md-6">
                                <input id="github" type="url" class="form-control" name="github" value="@if(isset($owner)){{ $owner->github }}@endif" autocomplete="github" autofocus>
                            </div>
                        </div>

                        <h5 class="m-2">Upload files</h5>

                        <div class="form-group row">
                            <label for="avatar_url" class="col-md-4 col-form-label text-md-right">{{ __('Avater') }}</label>

                            <div class="col-md-6 d-flex">
                                <input id="avatar_url" type="file" class="form-control" name="avatar_url" >
                                @isset($owner, $owner->avatar_url)
                                    <img class="ml-2" width= "35" height="35" src="{{ $owner->avatar_url }}" alt="avatar image">  
                                @endisset
                                  
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bg_url" class="col-md-4 col-form-label text-md-right">{{ __('Background') }}</label>

                            <div class="col-md-6 d-flex">
                                <input id="bg_url" type="file" class="form-control" name="bg_url" >
                                @isset($owner, $owner->bg_url)
                                    <img class="ml-2" width= "35" height="35" src="{{ $owner->bg_url }}" alt="background image"> 
                                @endisset
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="favicon_url" class="col-md-4 col-form-label text-md-right">{{ __('Favicon') }}</label>

                            <div class="col-md-6 d-flex">
                                <input id="favicon_url" type="file" class="form-control" name="favicon_url" >
                                @isset($owner, $owner->favicon_url)
                                  <img class="ml-2" width= "35" height="35" src="{{ $owner->favicon_url }}" alt="favicon image"> 
                                @endisset
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection