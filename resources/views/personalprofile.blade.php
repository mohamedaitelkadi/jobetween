@extends('navbar')
@section('content')
<section style="background-color: #f8f9fa;">
              <div class="row">
                <div class="col-lg-4">
                  <div class="card mb-4">
                  <div class="card-body" >
                      <form action="{{ url('editprofile') }}" method="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <input class="form-control" name="fullname" type="text" value="{{$user->fullname}}"/>
                            <label>Full name</label>
                        </div>
                        <div class="form-floating mb-3">
                              <input class="form-control" name="email" type="text" value="{{$user->email}}"/>
                              <label>Email</label>
                        </div>
                        <div class="form-floating mb-3">
                              <input class="form-control" name="phone_number" type="text" value="{{$user->phone_number}}"/>
                              <label>Phone number</label>
                        </div>
                        <div class="form-floating mb-3">
                              <input class="form-control" name="speciality" type="text" value="{{$user->speciality}}"/>
                              <label>Speciality</label>
                        </div>
                        <div class="form-floating mb-3">
                              <input class="form-control" name="city" type="text" value="{{$user->city}}"/>
                              <label>City</label>
                        </div>
                        <p class="text-danger mb-0">*enter your password to update profile</p>
                        <div class="form-floating mb-3">
                              <input class="form-control" name="password" type="password" value="" required/>
                              <label>Password</label>
                        </div>
                        @if (session('success'))
                          <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if (session('failure'))
                          <div class="alert alert-danger">{{ session('failure') }}</div>
                        @endif
                        <button type="submit" class="btn text-light" style="background-color: #3533CD">Update</button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8">
                <div class="card ">
                      <div class="card-body" style="overflow-y: scroll; height:85vh">
                        <div class="row">
                          <div class="col-md-12 mx-auto">
                            <table class="table align-middle mb-0 bg-white">
                              <thead class="bg-light">
                                <tr>
                                  <th>Name</th>
                                  <th>City</th>
                                  <th>Hire day</th>
                                  <th>Hire time</th>
                                  <th class="text-center">Actions</th>
                                </tr>
                              </thead>
                              <tbody>
                                <h3>Requests</h3>
                                @foreach($hires as $hire)
                                <tr>
                                  <td>
                                    <div class="d-flex align-items-center">
                                      <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" style="width: 45px; height: 45px" class="rounded-circle"/>
                                      <div class="ms-3">
                                        <p class="fw-bold mb-1">{{$hire->user_client->fullname}}</p>
                                        <!-- <p class=" mb-1">{{$hire->created_at->diffforhumans()}}</p> -->
                                      </div>
                                    </div>
                                  </td>
                                  <td>{{$hire->user_client->city}}</td>
                                  <td>
                                    <p class="fw-normal mb-1">{{$hire->hire_day}}</p>
                                  </td>
                                  <td>
                                    <p class="fw-normal mb-1">{{$hire->hire_time}}</p>
                                  </td>
                                  
                                  <td class="text-center">
                                    @if($hire->hire_status == "rejected")
                                      <span class="badge badge-danger rounded-pill d-inline">Refused</span>
                                    @elseif($hire->hire_status == "accepted")
                                      <span class="badge badge-success rounded-pill d-inline">accepted</span>
                                    @else
                                    <a href="{{ url('accept/'.$hire->id) }}" class="btn btn-link btn-sm btn-rounded text-success">
                                      <i class="bi bi-check-lg"></i>Accept
                                    </a>
                                    <a href="{{ url('reject/'.$hire->id) }}" class="btn btn-link btn-sm btn-rounded text-danger">
                                      <i class="bi bi-x-lg"></i>Reject
                                    </a>
                                    @endif
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
            </section>
@endsection