
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
                                    <h5>Teachers Page Information</h5>
                                </div>
                                <div class="card-body">
                                    <form action="/teachersform/update" method="post" class="theme-form mega-form" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="classesheader1" class="col-md-2 col-form-label text-md-right">{{ __('Header 1') }}</label>


                                            <div class="col-md-8">
                                                <input id="classesheader1" type="text" class="form-control @error('classesheader1') is-invalid @enderror" name="classesheader1" value="{{ old('classesheader1') ?? $user->classes->classesheader1 }}" required autocomplete="header1" autofocus>

                                                @error('classesheader1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="classesintro1" class="col-md-2 col-form-label text-md-right">{{ __('Intro 1') }}</label>

                                            <div class="col-md-8">
                                                <textarea id="classesintro1" type="text" class="form-control @error('classesintro1') is-invalid @enderror" name="classesintro1" value="{{ old('classesintro1') ?? $user->classes->classesintro1}}" required autocomplete="classesintro1" autofocus> {{$user->classes->classesintro1 ?? ''}}</textarea>

                                                @error('classesintro1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="classesheader2" class="col-md-2 col-form-label text-md-right">{{ __('Header 2') }}</label>


                                            <div class="col-md-8">
                                                <input id="classesheader2" type="text" class="form-control @error('classesheader2') is-invalid @enderror" name="classesheader2" value="{{ old('classesheader2') ?? $user->classes->classesheader2 }}" required autocomplete="classesheader2" autofocus>

                                                @error('classesheader2')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="classesintro2" class="col-md-2 col-form-label text-md-right">{{ __('Intro 2') }}</label>

                                            <div class="col-md-8">
                                                <textarea id="classesintro2" type="text" class="form-control @error('classesintro2') is-invalid @enderror" name="classesintro2" value="{{ old('classesintro2') ?? $user->classes->classesintro2}}" required autocomplete="classesintro2" autofocus> {{$user->classes->classesintro2 ?? ''}}</textarea>

                                                @error('classesintro2')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="classesmainimage" class="col-md-2 col-form-label text-md-right">{{ __('Main Image') }}</label>

                                            <div class="col-md-8 d-flex">

                                                <img class="w-25" src="storage/{{ $user->classes->classesmainimage}} " alt="Main Image"/>
                                                <input id="classesmainimage" type="file" class="form-control-file @error('classesmainimage') is-invalid @enderror" name="classesmainimage" value="{{ old('classesmainimage') }}"  autocomplete="classesmainimage" autofocus>

                                                @error('classesmainimage')
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

