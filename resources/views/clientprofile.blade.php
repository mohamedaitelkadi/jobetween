@extends('navbar')
@section('content')
<div class="mx-auto" style="width: 80%;margin-top: 120px;height:80vh;overflow-y:scroll">
        <h1>Requests I sent</h1>
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
              <tr>
                <th>Repairman</th>
                <th>Hire date</th>
                <th>Service</th>
                <th>City</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($hires as $hire)
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img
                        src="https://mdbootstrap.com/img/new/avatars/7.jpg"
                        class="rounded-circle" style="width: 45px; height: 45px"/>
                    <div class="ms-3">
                      <p class="fw-bold mb-1">{{$hire->user_repairman->fullname}}</p>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="fw-normal mb-1">{{$hire->hire_day}}</p>
                  <p class="fw-normal mb-1">{{$hire->hire_time}}</p>
                </td>
                <td>
                  <p class="fw-normal mb-1">{{$hire->user_repairman->speciality}}</p>
                </td>
                 <td>{{$hire->user_repairman->city}}</td>
                <td>
                  <span class="badge @if($hire->hire_status == 'accepted') badge-success @elseif($hire->hire_status == 'rejected') badge-danger @else badge-warning @endif rounded-pill d-inline">{{$hire->hire_status}}</span>
                </td>
               
                <td>
                  <a href="{{url('cancel/'.$hire->id)}}" class="btn btn-link text-danger btn-rounded btn-sm fw-bold">Cancel</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          </div>
@endsection