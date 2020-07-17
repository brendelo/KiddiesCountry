
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
                                    <h5>Contact-Us Page Information</h5>
                                </div>
                                <div class="card-body">
                                    <form action="/contactform/update" method="post" class="theme-form mega-form" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="contactheader" class="col-md-2 col-form-label text-md-right">{{ __('Header') }}</label>


                                            <div class="col-md-8">
                                                <input id="contactheader" type="text" class="form-control @error('contactheader') is-invalid @enderror" name="contactheader" value="{{ old('contactheader') ?? $user->contact->contactheader }}" required autocomplete="contactheader" autofocus>

                                                @error('contactheader')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="contactaddress" class="col-md-2 col-form-label text-md-right">{{ __('Address') }}</label>

                                            <div class="col-md-8">
                                                <textarea id="contactaddress" type="text" class="form-control @error('contactaddress') is-invalid @enderror" name="contactaddress" value="{{ old('contactaddress') ?? $user->contact->contactaddress}}" required autocomplete="contactaddress" autofocus> {{$user->contact->contactaddress ?? ''}}</textarea>

                                                @error('contactaddress')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="phonenumber" class="col-md-2 col-form-label text-md-right">{{ __('Phone Number') }}</label>


                                            <div class="col-md-8">
                                                <input id="phonenumber" type="tel" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" value="{{ old('phonenumber') ?? $user->contact->phonenumber }}" required autocomplete="phonenumber" autofocus>

                                                @error('phonenumber')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>




                                        <div class="form-group row">
                                            <label for="contactimage" class="col-md-2 col-form-label text-md-right">{{ __('Main Image') }}</label>

                                            <div class="col-md-8 d-flex">

                                                <img class="w-25" src="storage/{{ $user->contact->contactimage}} " alt="Main Image"/>
                                                <input id="contactimage" type="file" class="form-control-file @error('contactimage') is-invalid @enderror" name="contactimage" value="{{ old('contactimage') }}"  autocomplete="contactimage" autofocus>

                                                @error('contactimage')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="image" class="col-md-2 col-form-label text-md-right">{{ __('2nd Image') }}</label>

                                            <div class="col-md-8 d-flex">

                                                <img class="w-25" src="storage/{{ $user->contact->image}} " alt="Main Image"/>
                                                <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}"  autocomplete="image" autofocus>

                                                @error('image')
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

