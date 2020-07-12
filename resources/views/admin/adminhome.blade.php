
@extends('admin.adminpartials.template')


@section('popup')
    <div class="welcome-popup modal fade" id="loadModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <div class="modal-body">
                    <div class="modal-header"></div>
                    <div class="contain p-30">
                        <div class="text-center">
                            <h3>Welcome to Kiddies Country Admin</h3>
                            <p>Givng you total control over everything people see on your school website </p>
                            <button class="btn btn-primary btn-lg txt-white" type="button" data-dismiss="modal" aria-label="Close">Get Started</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
