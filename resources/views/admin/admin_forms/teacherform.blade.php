
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
                                    <form action="/teachersform/create" method="post" class="theme-form mega-form" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="teachername" class="col-md-2 col-form-label text-md-right">{{ __('Name') }}</label>


                                            <div class="col-md-8">
                                                <input id="teachername" type="text" class="form-control @error('teachername') is-invalid @enderror" name="teachername" value="{{ old('teachername') }}" required autocomplete="teachername" autofocus>

                                                @error('teachername')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="teachercourse" class="col-md-2 col-form-label text-md-right">{{ __('Course') }}</label>


                                            <div class="col-md-8">
                                                <input id="teachercourse" type="text" class="form-control @error('teachercourse') is-invalid @enderror" name="teachercourse" value="{{ old('teachercourse') }}" autocomplete="teachercourse" autofocus>

                                                @error('teachercourse')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="teacherclass" class="col-md-2 col-form-label text-md-right">{{ __('Class') }}</label>


                                            <div class="col-md-8">
                                                <input id="teacherclass" type="text" class="form-control @error('teacherclass') is-invalid @enderror" name="teacherclass" value="{{ old('teacherclass') }}" autocomplete="teacherclass" autofocus>

                                                @error('teacherclass')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="teachersummary" class="col-md-2 col-form-label text-md-right">{{ __('Summary') }}</label>

                                            <div class="col-md-8">
                                                <textarea id="teachersummary" type="text" class="form-control @error('teachersummary') is-invalid @enderror" name="teachersummary" value="{{ old('teachersummary') }}" required autocomplete="teachersummary" autofocus> </textarea>

                                                @error('teachersummary')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="teacherimage" class="col-md-2 col-form-label text-md-right">{{ __('Image') }}</label>

                                            <div class="col-md-8 d-flex">

{{--                                                <img class="w-25" src="storage/{{ $user->classes->classesmainimage}} " alt="Main Image"/>--}}
                                                <input id="teacherimage" type="file" class="form-control-file @error('teacherimage') is-invalid @enderror" name="teacherimage" value="{{ old('teacherimage') }}"  autocomplete="teacherimage" autofocus>

                                                @error('teacherimage')
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

