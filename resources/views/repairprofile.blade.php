@extends('navbar')
@section('content')
<section class="pb-5" style="background-color: #f8f9fa;padding-top:100px;">
        <div class="row">
            <div class="col-lg-3">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="https://plumberoftucson.com/wp-content/uploads/2017/03/Image-of-Don-Profile.png" alt="avatar"
                        class="rounded-circle img-fluid" style="width: 81px;">
                        <h5 class="my-3">{{$repairman->fullname}}</h5>
                        <p class="text-muted mb-1">{{$repairman->speciality}}</p>
                        <p class="text-muted mb-4">{{$repairman->city}}</p>
                        <button type="button" class="btn btn-primary">Hire Now</button>
                    </div>
                </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body" >
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">Johnatan Smith</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">example@example.com</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">(097) 234-5678</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Speciality</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">Plumber</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">City</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">Safi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection