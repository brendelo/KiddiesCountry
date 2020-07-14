
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
                                    <h5>Create Courses</h5>
                                </div>
                                <div class="card-body">
                                    <form action="/courseform/create" method="post" class="theme-form mega-form" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="coursename" class="col-md-2 col-form-label text-md-right">{{ __('Name') }}</label>


                                            <div class="col-md-8">
                                                <input id="coursename" type="text" class="form-control @error('coursename') is-invalid @enderror" name="coursename" value="{{ old('coursename') }}" required autocomplete="coursename" autofocus>

                                                @error('coursename')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>





                                        <div class="form-group row">
                                            <label for="coursedescription" class="col-md-2 col-form-label text-md-right">{{ __('Description') }}</label>

                                            <div class="col-md-8">
                                                <textarea id="coursedescription" type="text" class="form-control @error('coursedescription') is-invalid @enderror" name="coursedescription" value="{{ old('coursedescription') }}" required autocomplete="teachersummary" autofocus> </textarea>

                                                @error('coursedescription')
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

