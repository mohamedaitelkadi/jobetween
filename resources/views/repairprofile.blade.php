@extends('navbar')
@section('content')
<section class="pb-5" style="background-color: #f8f9fa;padding-top:100px;">
        <div class="row">
            <div class="col-lg-3">
                <div class="card mb-4">
                    <div class="card-body text-center" style="height:47vh">
                        <img src="https://plumberoftucson.com/wp-content/uploads/2017/03/Image-of-Don-Profile.png" alt="avatar"
                        class="rounded-circle img-fluid" style="width: 81px;">
                        <h5 class="my-3">{{$repairman->fullname}}</h5>
                        <p class="text-muted mb-0">{{$repairman->speciality}}</p>
                        <p class="text-muted mb-0">{{$repairman->city}}</p>
                        <p class="text-muted mb-1">{{$repairman->price}} Dh/h</p>
                        @if($hires->count() > 0)
                            <button type="button" class="btn btn-link text-success"><i class="bi bi-check-lg"></i> Already hired</button>
                        @endif
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
                                <p class="mb-0">{{$repairman->fullname}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                                @if($hires->count() > 0)
                                    @foreach($hires as $hire)
                                        @if($hire->hire_status == "accepted")
                                            <p class="mb-0 text-success"><i class="bi bi-check-lg"></i>  {{$repairman->email}}</p>
                                        @elseif($hire->hire_status == "waiting")
                                            <p class="text-muted mb-0"><i class="bi bi-clock"></i> pending...</p>
                                        @else
                                            <p class="text-danger mb-0"><i class="bi bi-x-lg"></i>  You cant access to this infos</p>
                                        @endif
                                    @endforeach
                                @else
                                    <p class="text-muted mb-0"><i class="bi bi-lock-fill"></i> private infos</p>
                                @endif
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Phone</p>
                            </div>
                            <div class="col-sm-9">
                                @if($hires->count() > 0)
                                    @foreach($hires as $hire)
                                        @if($hire->hire_status == "accepted")
                                            <p class="mb-0 text-success"><i class="bi bi-check-lg"></i>  {{$repairman->phone_number}}</p>
                                        @elseif($hire->hire_status == "waiting")
                                            <p class="text-muted mb-0"><i class="bi bi-clock"></i> pending...</p>
                                        @else
                                            <p class="text-danger mb-0"><i class="bi bi-x-lg"></i>  You cant access to this infos</p>
                                        @endif
                                    @endforeach
                                @else
                                    <p class="text-muted mb-0"><i class="bi bi-lock-fill"></i> private infos</p>
                                @endif
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Speciality</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="mb-0">{{$repairman->speciality}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">City</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="mb-0">{{$repairman->city}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection