@extends('navbar')
@section('content')
<div class="mx-auto" style="width: 80%;margin-top: 120px;height:80vh;overflow-y:scroll">
        <h1>Requests I sent</h1>
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
              <tr>
                <th>Repairman</th>
                <th>Title</th>
                <th>Status</th>
                <th>Position</th>
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
                  <span class="badge badge-warning rounded-pill d-inline">{{$hire->user_client->hire_status}}</span>
                </td>
               
                <td>
                  <button
                          type="button"
                          class="btn btn-link btn-rounded btn-sm fw-bold"
                          data-mdb-ripple-color="dark"
                          >
                    Edit
                  </button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          </div>
@endsection