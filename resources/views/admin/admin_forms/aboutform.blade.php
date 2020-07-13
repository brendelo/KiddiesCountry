
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
                                                <textarea id="aboutintro2" type="text" class="form-control @error('aboutintro2') is-invalid @enderror" name="aboutintro2" value="" required autocomplete="aboutintro2" autofocus> {{old('aboutintro2') ?? $user->about->aboutintro2 ?? ''}}</textarea>

                                                @error('aboutintro2')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <label for="aboutmainimage" class="col-md-2 col-form-label text-md-right">{{ __('Main Image') }}</label>

                                            <div class="col-md-8 d-flex">

                                                <img class="w-25" src="storage/{{ $user->about->aboutmainimage}} " alt="Main Image"/>
                                                <input id="aboutmainimage" type="file" class="form-control-file @error('aboutmainimage') is-invalid @enderror" name="aboutmainimage" value="{{ old('aboutmainimage') }}"  autocomplete="aboutmainimage" autofocus>

                                                @error('aboutmainimage')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="aboutsideimage" class="col-md-2 col-form-label text-md-right">{{ __('Side Image') }}</label>

                                            <div class="col-md-8 d-flex">

                                                <img class="w-25" src="storage/{{ $user->about->aboutsideimage}} " alt="Main Image"/>
                                                <input id="aboutsideimage" type="file" class="form-control-file @error('aboutsideimage') is-invalid @enderror" name="aboutsideimage" value="{{ old('aboutsideimage') }}"  autocomplete="aboutsideimage" autofocus>

                                                @error('aboutsideimage')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="aboutheader3" class="col-md-2 col-form-label text-md-right">{{ __('About Header 3') }}</label>


                                            <div class="col-md-8">
                                                <input id="aboutheader3" type="text" class="form-control @error('aboutheader3') is-invalid @enderror" name="aboutheader3" value="{{ old('aboutheader3') ?? $user->about->aboutheader3 }}" autocomplete="aboutheader3" autofocus>

                                                @error('aboutheader3')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="aboutintro3" class="col-md-2 col-form-label text-md-right">{{ __('About Intro 3') }}</label>

                                            <div class="col-md-8">
                                                <textarea id="aboutintro3" type="text" class="form-control @error('aboutintro3') is-invalid @enderror" name="aboutintro3" value="" required autocomplete="aboutintro3" autofocus> {{old('aboutintro3') ?? $user->about->aboutintro3 ?? ''}}</textarea>

                                                @error('aboutintro3')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="aboutheader4" class="col-md-2 col-form-label text-md-right">{{ __('About Header 4') }}</label>


                                            <div class="col-md-8">
                                                <input id="aboutheader4" type="text" class="form-control @error('aboutheader4') is-invalid @enderror" name="aboutheader4" value="{{ old('aboutheader4') ?? $user->about->aboutheader4 }}" autocomplete="aboutheader4" autofocus>

                                                @error('aboutheader4')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="aboutintro4" class="col-md-2 col-form-label text-md-right">{{ __('About Intro 4') }}</label>

                                            <div class="col-md-8">
                                                <textarea id="aboutintro4" type="text" class="form-control @error('aboutintro4') is-invalid @enderror" name="aboutintro4" value="" required autocomplete="aboutintro4" autofocus> {{old('aboutintro4') ?? $user->about->aboutintro4 ?? ''}}</textarea>

                                                @error('aboutintro4')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="aboutheader5" class="col-md-2 col-form-label text-md-right">{{ __('About Header 5') }}</label>


                                            <div class="col-md-8">
                                                <input id="aboutheader5" type="text" class="form-control @error('aboutheader5') is-invalid @enderror" name="aboutheader5" value="{{ old('aboutheader5') ?? $user->about->aboutheader5 }}" autocomplete="aboutheader5" autofocus>

                                                @error('aboutheader5')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="aboutintro5" class="col-md-2 col-form-label text-md-right">{{ __('About Intro 5') }}</label>

                                            <div class="col-md-8">
                                                <textarea id="aboutintro5" type="text" class="form-control @error('aboutintro5') is-invalid @enderror" name="aboutintro5" value="" required autocomplete="aboutintro5" autofocus> {{old('aboutintro5') ?? $user->about->aboutintro5 ?? ''}}</textarea>

                                                @error('aboutintro5')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="aboutsideimage2" class="col-md-2 col-form-label text-md-right">{{ __('Side Image 2') }}</label>

                                            <div class="col-md-8 d-flex">

                                                <img class="w-25" src="storage/{{ $user->about->aboutsideimage2}} " alt="Main Image"/>
                                                <input id="aboutsideimage2" type="file" class="form-control-file @error('aboutsideimage2') is-invalid @enderror" name="aboutsideimage2" value="{{ old('aboutsideimage2') }}"  autocomplete="aboutsideimage2" autofocus>

                                                @error('aboutsideimage2')
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

