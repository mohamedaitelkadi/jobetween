@extends('admin_navbar')
@section('content')
<section style="background-color: #f8f9fa;">
            <div class="row">
                <!-- side bar  -->
                <div class="col-lg-3 mx-3 mt-5">
                    <div class="card mb-4 bg-light">
                        <div class="card-body text-start">
                            <p class="h3 text-dark mb-2">Dashboard</p>
                            <hr class="text-dark mb-3">
                            <p class="opt text-dark"><i class="bi bi-grid"></i> Overview </p>
                            <p class="opt text-dark"><i class="bi bi-grid"></i> Clients</p>
                            <p class="opt text-dark"><i class="bi bi-grid"></i> Repairmen </p>
                            <p class="opt text-dark"><i class="bi bi-grid"></i> Specialities </p>
                            <hr class="text-dark mb-3">
                            <a href="{{ url('signout') }}" class="btn text-dark bg-light">Logout  <i class="bi bi-box-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="overview col-lg-8">
                <!-- Overview part -->
                    <div class="content">
                        <h1 class="">Overview</h1>
                        <div class="card mb-4 align-items-center">
                            <div class="col-md-10 mt-4">
                                <div class="row ">
                                    <!-- clients count  -->
                                    <div class="col-xl-3 col-lg-6">
                                        <div class="card text-light bg-light">
                                            <div class="card-statistic-3 p-4">
                                                <div class="mb-4">
                                                    <h5 class="card-title text-dark mb-0">Clients</h5>
                                                </div>
                                                <div class="row align-items-center mb-2 d-flex">
                                                    <div class="col-8">
                                                        <h2 class="d-flex text-dark align-items-center mb-0">{{$clients->count()}}</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Repairmen count  -->
                                    <div class="col-xl-3 col-lg-6">
                                        <div class="card text-light bg-light">
                                            <div class="card-statistic-3 p-4">
                                                <div class="mb-4">
                                                    <h5 class="card-title text-dark mb-0">Repairmen</h5>
                                                </div>
                                                <div class="row align-items-center mb-2 d-flex">
                                                    <div class="col-8">
                                                        <h2 class="d-flex text-dark align-items-center mb-0">{{$repairmen->count()}}</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- hires count  -->
                                    <div class="col-xl-3 col-lg-6">
                                        <div class="card text-light">
                                            <div class="card-statistic-3 p-4">
                                                <div class="mb-4">
                                                    <h5 class="card-title text-dark mb-0">Hires</h5>
                                                </div>
                                                <div class="row align-items-center mb-2 d-flex">
                                                    <div class="col-8">
                                                        <h2 class="d-flex text-dark align-items-center mb-0">{{$hires->count()}}</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- specialities count  -->
                                    <div class="col-xl-3 col-lg-6">
                                        <div class="card text-light">
                                            <div class="card-statistic-3 p-4">
                                                <div class="mb-4">
                                                    <h5 class="card-title text-dark mb-0">Specialities</h5>
                                                </div>
                                                <div class="row align-items-center mb-2 d-flex">
                                                    <div class="col-8">
                                                        <h2 class="d-flex text-dark align-items-center mb-0">{{$specialities->count()}}</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hires table  -->
                        <div class="card mb-4">
                            <h2 class="m-3">Hires</h2>
                            <div class="card-body">
                                <div class="row">
                                    <table class="table align-middle mb-0 bg-white">
                                        <thead class="bg-light">
                                        <tr>
                                            <th>Repairman Name</th>
                                            <th>Client Name</th>
                                            <th>Status</th>
                                            <th>Day</th>
                                            <th>Time</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($hires as $hire)
                                        <tr>
                                            <td>
                                            <div class="d-flex align-items-center">
                                                <p class="fw-bold mb-1">{{$hire->user_repairman->fullname}}</p>
                                            </div>
                                            </td>
                                            <td>
                                            <p class="fw-bold mb-1">{{$hire->user_client->fullname}}</p>
                                            </td>
                                            <td>
                                            <span class="badge badge-success rounded-pill d-inline">{{$hire->hire_status}}</span>
                                            </td>
                                            <td>{{$hire->hire_day}}</td>
                                            <td>
                                            {{$hire->hire_time}}
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- Clients part -->
                    <div class="content d-none">
                    <div class="card mb-4" style="overflow-x:scroll">
                        <h2 class="m-3">Clients</h2>
                        <div class="card-body">
                            <div class="row">
                                <table class="table align-middle mb-0 bg-white">
                                    <thead class="bg-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>City</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($clients as $client)
                                    <tr>
                                        <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" style="width: 45px; height: 45px" class="rounded-circle"/>
                                            <div class="ms-3">
                                            <p class="fw-bold mb-1">{{$client->fullname}}</p>
                                            </div>
                                        </div>
                                        </td>
                                        <td>
                                        <p class="text-muted mb-0">{{$client->email}}</p>
                                            
                                        </td>
                                        <td>
                                            <p class="text-muted mb-0">{{$client->city}}</p>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-link btn-sm btn-rounded text-danger">Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>

                <!-- repairmen part -->
                    <div class="content d-none">
                    <div class="card mb-4" style="overflow-x:scroll">
                        <h2 class="m-3">Repairmen</h2>
                        <div class="card-body">
                            <div class="row">
                                <table class="table align-middle mb-0 bg-white">
                                    <thead class="bg-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone number</th>
                                        <th>City</th>
                                        <th>Speciality</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($repairmen as $repairman)
                                    <tr>
                                        <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" style="width: 45px; height: 45px" class="rounded-circle"/>
                                            <div class="ms-3">
                                            <p class="fw-bold mb-1">{{$repairman->fullname}}</p>
                                            <p class="text-muted mb-0">{{$repairman->email}}</p>
                                            </div>
                                        </div>
                                        </td>
                                        <td>
                                            <p class="text-muted mb-0">{{$repairman->phone_number}}</p>
                                        </td>
                                        <td>
                                            <p class="text-muted mb-0">{{$repairman->city}}</p>
                                        </td>
                                        <td>
                                            <p class="text-muted mb-0">{{$repairman->speciality}}</p>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-link btn-sm btn-rounded text-danger">Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>

                <!-- specialities part -->
                    <div class="content d-none">
                    <div class="card mb-4">
                        <div>
                            <h2 class="m-3">Specialities</h2>
                            <p class="mx-3 fw-bold mb-1">Add new speciality</p>
                            <form class="d-flex" action="{{ url('addSpeciality')}}" method="post">
                                @csrf
                                <input class="form-control w-75 mx-3" name="speciality" type="text">
                                <button type="submit" class="btn btn-outline-success"><i class="bi bi-plus-lg"></i></button>
                            </form>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <table class="table align-middle mb-0 bg-white">
                                    <thead class="bg-light">
                                    <tr>
                                        <th>Speciality Name</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($specialities as $speciality)
                                    <tr>
                                        <td>
                                        <div class="d-flex align-items-center">
                                            <div class="ms-3">
                                            <p class="fw-bold mb-1">{{$speciality->name_speciality}}</p>
                                            </div>
                                        </div>
                                        </td>
                                        <td>
                                            <a href="{{ url('deletes/'.$speciality->id)}}" class="btn btn-link btn-sm btn-rounded text-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                
            </div>
        </div>
        </section>

@endsection