
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
                                    <h5>Home Page Information</h5>
                                </div>
                                <div class="card-body">
                                    <form action="/indexform/update" method="post" class="theme-form mega-form" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="header1" class="col-md-2 col-form-label text-md-right">{{ __('Header 1') }}</label>


                                            <div class="col-md-8">
                                                <input id="header1" type="text" class="form-control @error('header1') is-invalid @enderror" name="header1" value="{{ old('header1') ?? $user->index->header1 }}" required autocomplete="header1" autofocus>

                                                @error('header1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="intro" class="col-md-2 col-form-label text-md-right">{{ __('Intro') }}</label>

                                            <div class="col-md-8">
                                                <textarea id="intro" type="text" class="form-control @error('intro') is-invalid @enderror" name="intro" value="{{ old('intro') ?? $user->index->intro}}" required autocomplete="intro" autofocus> {{$user->index->intro ?? ''}}</textarea>

                                                @error('intro')
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
                                            <button onclick="return confirm('are you sure you want to Submit ?')" class="btn btn-primary btn-pill">Submit</button>
                                            <button href="#" class="btn btn-secondary btn-pill">Cancel</button>
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

