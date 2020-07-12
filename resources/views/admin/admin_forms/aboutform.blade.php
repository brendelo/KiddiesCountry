
@extends('admin.adminpartials.template')


@section('content')
    <div class="content">



        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-8">
                    <div class="row justify-content-center">
                        <div class="col-sm-10 col-8">
                            <div class="card">
                                <div class="card-header">
                                    <h5>About Page Information</h5>
                                </div>
                                <div class="card-body">
                                    <form action="/aboutform/update" method="post" class="theme-form mega-form" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="aboutheader1" class="col-md-2 col-form-label text-md-right">{{ __('About Header') }}</label>


                                            <div class="col-md-8">
                                                <input id="aboutheader1" type="text" class="form-control @error('aboutheader1') is-invalid @enderror" name="aboutheader1" value="{{ old('aboutheader1') ?? $user->about->aboutheader1 }}" autocomplete="aboutheader1" autofocus>

                                                @error('aboutheader1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="aboutintro1" class="col-md-2 col-form-label text-md-right">{{ __('About Intro') }}</label>

                                            <div class="col-md-8">
                                                <textarea id="aboutintro1" type="text" class="form-control @error('aboutintro1') is-invalid @enderror" name="aboutintro1" value="" required autocomplete="aboutintro1" autofocus> {{ old('aboutintro1') ?? $user->about->aboutintro1 ?? ''}}</textarea>

                                                @error('aboutintro1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="aboutheader2" class="col-md-2 col-form-label text-md-right">{{ __('About Header 2') }}</label>


                                            <div class="col-md-8">
                                                <input id="aboutheader2" type="text" class="form-control @error('aboutheader2') is-invalid @enderror" name="aboutheader2" value="{{ old('aboutheader2') ?? $user->about->aboutheader2 }}" autocomplete="aboutheader2" autofocus>

                                                @error('aboutheader2')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="aboutintro2" class="col-md-2 col-form-label text-md-right">{{ __('About Intro 2') }}</label>

                                            <div class="col-md-8">
                                                <textarea id="aboutintro2" type="text" class="form-control @error('aboutintro2') is-invalid @enderror" name="aboutintro2" value="" required autocomplete="aboutintro1" autofocus> {{old('aboutintro2') ?? $user->about->aboutintro1 ?? ''}}</textarea>

                                                @error('aboutintro2')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <label for="mainimage" class="col-md-2 col-form-label text-md-right">{{ __('Main Image') }}</label>

                                            <div class="col-md-8 d-flex">

                                                <img class="w-25" src="storage/{{ $user->index->mainimage}} " alt="Main Image"/>
                                                <input id="mainimage" type="file" class="form-control-file @error('mainimage') is-invalid @enderror" name="mainimage" value="{{ old('mainimage') }}"  autocomplete="mainimage" autofocus>

                                                @error('mainimage')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>









                                        <div class="form-group row">
                                            <label for="lessonheader" class="col-md-2 col-form-label text-md-right">{{ __('Lesson Header') }}</label>

                                            <div class="col-md-8">
                                                <input id="lessonheader" type="text" class="form-control @error('lessonheader') is-invalid @enderror" name="lessonheader" value="{{ old('lessonheader') ?? $user->index->lessonheader}}" required autocomplete="lessonheader" autofocus>

                                                @error('lessonheader')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="lessontext" class="col-md-2 col-form-label text-md-right">{{ __('Lesson Text') }}</label>

                                            <div class="col-md-8">
                                                <textarea id="lessontext" type="text" class="form-control @error('lessontext') is-invalid @enderror" name="lessontext" value="{{ old('lessontext') ?? $user->index->lessontext}}" required autocomplete="lessontext" autofocus> {{$user->index->lessontext ?? ''}}</textarea>

                                                @error('lessontext')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="lessonsummary" class="col-md-2 col-form-label text-md-right">{{ __('Lesson Summary') }}</label>

                                            <div class="col-md-8">
                                                <textarea id="lessonsummary" type="text" class="form-control @error('lessonsummary') is-invalid @enderror" name="lessonsummary" value="{{ old('lessonsummary') }}" required autocomplete="lessonsummary" autofocus> {{$user->index->lessonsummary ?? ''}}  </textarea>

                                                @error('lessonsummary')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="lessonimage" class="col-md-2 col-form-label text-md-right">{{ __('Lesson Image') }}</label>

                                            <div class="col-md-8 d-flex">
                                                <img class="w-25" src="storage/{{ $user->index->lessonimage}}" alt="Lesson Image">
                                                <input id="lessonimage" type="file" class="form-control-file @error('lessonimage') is-invalid @enderror" name="lessonimage" value="{{ old('lessonimage') }}"  autocomplete="lessonimage" autofocus>

                                                @error('lessonimage')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>














                                        {{--                                        <hr class="mt-4 mb-4">--}}



                                        <div class="card-footer">
                                            <button class="btn btn-primary btn-pill">Submit</button>
                                            <button class="btn btn-secondary btn-pill">Cancel</button>
                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->






    </div>
@endsection

