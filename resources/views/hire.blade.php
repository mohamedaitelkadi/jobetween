@extends('navbar')
@section('content')
<div class="row justify-content-center w-100" style="padding-top:90px;height:100vh">
              <div  class="row gy-2 gx-3 align-items-center justify-content-evenly" style="width:70%">
                  <div class="col">
                    <select  class="city form-select">
                      <option value="">Select a city</option>
                      <option value="rabat">rabat</option>
                      <option value="fes">fes</option>
                      <option value="agadir">agadir</option>
                      <option value="laayoune">laayoune</option>
                      <option value="marrakesh">marrakesh</option>
                      <option value="casablanca">casablanca</option>
                      <option value="tanger">tanger</option>
                      <option value="safi">safi</option>
                    </select>
                  </div>
                <div class="col">
                  <select  class="speciality form-select">
                    <option value="" selected>Select a speciality</option>
                    @foreach($specialities as $speciality)
                    <option value="{{$speciality->name_speciality}}">{{$speciality->name_speciality}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-auto">
                  <button class="search btn btn-primary">search</button>
                  <button class="clear btn btn-primary">clear</button>
                </div>
              </div>
        
        <div class="container" style="padding-top:100px;">
            <div class="row">
                @foreach($repairmen as $repairman)
                <div class="col-lg-4 mb-3">
                  <div class="card m-b-30">
                      <div class="card-body">
                          <div class="media">
                              <a href="{{url('repairmanprofile/'.$repairman->id)}}"><img class="d-flex mr-3 rounded-circle img-thumbnail thumb-lg" src="https://plumberoftucson.com/wp-content/uploads/2017/03/Image-of-Don-Profile.png"/></a>
                              <div class="media-body">
                                  <h5 class="mt-0 font-18 mb-1">{{$repairman->fullname}}</h5>
                                  <p class="user_speciality text-muted mb-0 font-14">{{$repairman->speciality}}</p>
                                  <p class="user_city text-muted mb-0 font-14">{{$repairman->city}}</p>
                                  <p class="text-muted font-14">{{$repairman->price}} Dh/h</p>
                                  <?php $flag = false; ?>
                                  @foreach($hires as $hire)
                                    @if($hire->id_repairman == $repairman->id)
                                      <button class="hire_btn btn btn-link text-success disabled"><i class="bi bi-check-lg"></i> hired</button>
                                      <?php $flag = true; ?>
                                      @break
                                    @endif
                                  @endforeach
                                  @if(!$flag)
                                    <button id="{{$repairman->id}}" class="hire_btn btn btn-link" data-bs-toggle="modal" data-bs-target="#hiringModal">hire now</button>
                                  @endif
                                  <a href="{{url('repairmanprofile/'.$repairman->id)}}" class="btn btn-primary">profile</a>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
              <!-- end col -->
              @endforeach
          </div>
          <!-- end row -->
        </div>
          <!-- hiring  Modal-->
        <div class="modal fade" id="hiringModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-primary-to-secondary p-4">
                        <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Hiring</h5>
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body border-0 p-4">
                       
                        <form method="post" action="{{url('/store')}}">
                            @csrf
                            <input type="hidden" class="hire_id" name="id_repairman" readonly>
                                <div class="col-auto mb-4">
                                  <div class="form-outline">
                                    <input name="day" type="date" class="datepicker form-control" />
                                    <label class="form-label" >select a day </label>
                                  </div>
                                </div>
                                <div class="col-auto mb-4">
                                  <div >
                                      <select class="py-2 w-100" name="time" id="">
                                          <option value="09:00">09:00</option>
                                          <option value="11:00">11:00</option>
                                          <option value="13:00">13:00</option>
                                          <option value="15:00">15:00</option>
                                          <option value="17:00">17:00</option>
                                      </select>
                                  </div>
                                </div>
                              <div class="d-grid">
                                <button class="btn btn-primary rounded-pill btn-lg" type="submit">Hire</button>
                              </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection