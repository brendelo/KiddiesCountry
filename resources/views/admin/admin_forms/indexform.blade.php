
@extends('admin.adminpartials.template')


@section('content')
    <div class="content">



        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-xl-6">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Mega form</h5>
                                </div>
                                <div class="card-body">
                                    <form class="theme-form mega-form">
                                        <h6>Account Information</h6>
                                        <div class="form-group">
                                            <label class="col-form-label">Your Name</label>
                                            <input class="form-control" type="text" placeholder="your Name">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Email Address</label>
                                            <input class="form-control" type="email" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Contact Number</label>
                                            <input class="form-control" type="Number" placeholder="Enter contact number">
                                        </div>
                                        <hr class="mt-4 mb-4">
                                        <h6>Company Information</h6>
                                        <div class="form-group">
                                            <label class="col-form-label">Company Name</label>
                                            <input class="form-control" type="text" placeholder="Company Name">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Website</label>
                                            <input class="form-control" type="text" placeholder="Website">
                                        </div>
                                    </form>
                                    <hr class="mt-4 mb-4">
                                    <h6 class="pb-4">Billing Information</h6>
                                    <form class="form-inline theme-form">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Name On Card">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="inputPassword" placeholder="Card Number">
                                        </div>
                                        <div class="form-group mb-0">
                                            <input class="form-control" type="text" name="inputPassword" placeholder="Zip Code">
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary btn-pill">Submit</button>
                                    <button class="btn btn-secondary btn-pill">Cancel</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Inline Form</h5><span>Use<code>.form-inline</code>class in the form to style with inline fields.</span>
                                </div>
                                <div class="card-body">
                                    <h6>Inline Form with Label</h6>
                                    <form class="form-inline theme-form mt-3">
                                        <div class="form-group">
                                            <label class="col-form-label" for="inputInlineUsername">Username</label>
                                            <input class="form-control" id="inputInlineUsername" type="text" name="inputUsername" placeholder="Username" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label" for="inputInlinePassword">Password</label>
                                            <input class="form-control" id="inputInlinePassword" type="password" name="inputPassword" placeholder="Password" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-pill">Login</button>
                                        </div>
                                    </form>
                                    <h6>Inline Form without Label</h6>
                                    <form class="form-inline theme-form mt-3">
                                        <div class="form-group mb-0">
                                            <input class="form-control" type="text" name="inputUnlabelUsername" placeholder="Username" autocomplete="off">
                                        </div>
                                        <div class="form-group mb-0">
                                            <input class="form-control" id="inputUnlabelPassword" type="password" name="inputPassword" placeholder="Password" autocomplete="off">
                                        </div>
                                        <div class="form-group mb-0">
                                            <button class="btn btn-primary btn-pill">Login</button>
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

