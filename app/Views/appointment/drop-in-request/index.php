<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
  <div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

      <!-- start page title -->
      <div class="row">
        <div class="col-12">
          <div class="page-title-box">
            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">ISDQI</a></li>

                <li class="breadcrumb-item active">Drop-In Center</li>
              </ol>
            </div>
            <h4 class="page-title">Drop-In Center </h4>
          </div>
        </div>
      </div>
      <!-- end page title -->

      <?php if ($navigators->code === 200 && count($navigators->submit_sample_navigator_list) > 0) : ?>
        <div class="row">

          <div class="col-md-12">
            <div class="card-box">
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a href="#request-ass" data-toggle="tab" aria-expanded="true" class="nav-link active">
                    <span class="d-inline-block d-sm-none"></span>
                    <span class="d-none d-sm-inline-block">Request Assisstance</span>
                  </a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane fade show active" id="request-assistance">
                  <div class="row">
                    <div class="form-group col-md-4">
                      <label for="">Search Navigator </label>
                      <input type="text" class="form-control" name="" id="" value="" autocomplete="off">
                    </div>
                  </div>

                  <div class="row">
                    <?php foreach ($navigators->submit_sample_navigator_list as $navigator) : ?>
                      <div class="col-md-10">

                        <div class="widget-rounded-circle card-box">

                          <div class="row align-items-center">
                            <div class="col-auto">
                              <div class="avatar-lg">
                                <img src="/assets/images/users/avatar-1.jpg" class="img-fluid rounded-circle" alt="Profile Image">
                              </div>
                            </div>

                            <div class="col-md-6">
                              <h5 class="mt-0"><?= $navigator->navigator_name ?></h5>
                              <p class="text-muted mb-1 font-13"><?= $navigator->navigator_location[0] ?></p>

                            </div>
                            <div class="col-md-4 text-right">
                              <button class="btn btn-primary btn-sm book_app" id="btn-appointment">Book Appointment</button>
                            </div>
                          </div>

                          <div class="mt-3" id="select_dr" style="display:none">
                            <div class="form-group col-md-8">
                              <label for="">Select Address</label>
                              <select class="form-control chosen-select-deselect" name="address_id" id="address_id">
                                <option value=""></option>
                                <?php for ($i = 0; $i < count($navigator->location_id); $i++) : ?>
                                  <option value="<?= $navigator->location_id[$i] ?>"><?= $navigator->navigator_location[$i] ?></option>
                                <?php endfor; ?>
                              </select>
                            </div>
                            <script>
                              var scrollEnabled = true;
                            </script>


                            <div id="example_3" class="p-3 b1 slots" style="display:none">
                              <ul role="tablist">
                                <li role="tab"><a href="#tabs-1" class="text-center" role="presentation">Mon
                                    1 jan
                                    <br>
                                    <small class="fdc">13 slot available</small></a>
                                </li>
                                <li role="tab"><a href="#tabs-2" class="text-center" role="presentation">Tue
                                    2 jan
                                    <br>
                                    <small class="fdc">13 slot available</small>
                                  </a></li>
                                <li role="tab"><a href="#tabs-3" class="text-center" role="presentation">Wed
                                    3 jan
                                    <br>
                                    <small class="fdc">13 slot available</small>
                                  </a></li>
                                <li role="tab"><a href="#tabs-4" class="text-center" role="presentation">Thu
                                    4 jan
                                    <br>
                                    <small class="fdc">13 slot available</small>
                                  </a></li>
                                <li role="tab"><a href="#tabs-5" class="text-center" role="presentation">Fri
                                    5 jan
                                    <br>
                                    <small class="fdc">13 slot available</small>
                                  </a></li>
                                <li role="tab"><a href="#tabs-6" class="text-center" role="presentation">Sat
                                    6 jan
                                    <br>
                                    <small class="fdc">13 slot available</small></a>
                                </li>
                                <li role="tab"><a href="#tabs-7" class="text-center" role="presentation">Sun
                                    7 jan
                                    <br>
                                    <small class="fdc">13 slot available</small></a>
                                </li>
                                <li role="tab">

                                  <a href="#tabs-8" role="presentation">Mon
                                    8 jan
                                    <br>
                                    <small class="fdc">13 slot available</small>
                                  </a>
                                </li>
                                <li role="tab"><a href="#tabs-9" class="text-center" role="presentation">Tue
                                    9 jan
                                    <br>
                                    <small class="fdc">13 slot available</small>
                                  </a></li>
                              </ul>
                              <div>
                                <div id="tabs-1" role="tabpanel">
                                  <div class="col-md-12 text-center mb-4"><b>Today,
                                      Mon 1
                                      Jan</b></div>
                                  <div class="col-md-12 mb-2"><b>Morning:</b> <small>5 slots
                                      available</small></div>
                                  <div class="col-md-12 mb-3">
                                    <a href="javascript:void(0);"> <button class="btn btn-sm btn-outline-primary mr-2 slots-d-booked">Booked</button></a>
                                    <a href="appointment-details.html"> <button class="btn btn-sm btn-outline-primary mr-2">09:00
                                        am</button></a>
                                    <a href="appointment-details.html"> <button class="btn btn-sm btn-outline-primary mr-2">10:00
                                        am</button></a>
                                    <a href="appointment-details.html"><button class="btn btn-sm btn-outline-primary mr-2">11:00
                                        am</button></a>
                                    <a href="appointment-details.html"> <button class="btn btn-sm btn-outline-primary mr-2">12:00
                                        am</button></a>


                                  </div>
                                  <div class="col-md-12 mb-2"><b>Afternoon:</b><small> 3 slots
                                      available</small></div>
                                  <div class="col-md-12 mb-3">
                                    <button class="btn btn-sm btn-outline-primary mr-2">01:00
                                      pm</button>
                                    <button class="btn btn-sm btn-outline-primary mr-2">02:00
                                      pm</button>
                                    <button class="btn btn-sm btn-outline-primary mr-2">03:00
                                      pm</button>


                                  </div>
                                  <div class="col-md-12 mb-2"><b>Evening:</b><small> 3 slots
                                      available</small></div>
                                  <div class="col-md-12 mb-3">
                                    <button class="btn btn-sm btn-outline-primary mr-2">06:00
                                      pm</button>
                                    <button class="btn btn-sm btn-outline-primary mr-2">06:30
                                      pm</button>
                                    <button class="btn btn-sm btn-outline-primary mr-2">07:00
                                      pm</button>

                                  </div>
                                  <div class="col-md-12 mb-2"><b>Night:</b><small> 2 slots
                                      available</small></div>
                                  <div class="col-md-12 mb-3">
                                    <button class="btn btn-sm btn-outline-primary mr-2">09:00
                                      pm</button>
                                    <button class="btn btn-sm btn-outline-primary mr-2">10:00
                                      pm</button>


                                  </div>



                                </div>
                                <div id="tabs-2" role="tabpanel">
                                  <div class="col-md-12 text-center mb-4"><b>Tue 2
                                      Jan</b></div>
                                  <div class="col-md-12 mb-2"><b>Morning:</b> <small>2 slots
                                      available</small></div>
                                  <div class="col-md-12 mb-3">
                                    <button class="btn btn-sm btn-outline-primary mr-2">08:00
                                      am</button>
                                    <button class="btn btn-sm btn-outline-primary mr-2">09:00
                                      am</button>



                                  </div>
                                  <div class="col-md-12 mb-2"><b>Afternoon:</b><small> 5 slots
                                      available</small></div>
                                  <div class="col-md-12 mb-3">
                                    <button class="btn btn-sm btn-outline-primary mr-2">01:00
                                      pm</button>
                                    <button class="btn btn-sm btn-outline-primary mr-2">02:00
                                      pm</button>
                                    <button class="btn btn-sm btn-outline-primary mr-2">03:00
                                      pm</button>
                                    <button class="btn btn-sm btn-outline-primary mr-2">04:00
                                      pm</button>
                                    <button class="btn btn-sm btn-outline-primary mr-2">04:30
                                      pm</button>


                                  </div>
                                  <div class="col-md-12 mb-2"><b>Evening:</b> <small>3 slots
                                      available</small></div>
                                  <div class="col-md-12 mb-3">
                                    <button class="btn btn-sm btn-outline-primary mr-2">06:00
                                      pm</button>
                                    <button class="btn btn-sm btn-outline-primary mr-2">06:30
                                      pm</button>
                                    <button class="btn btn-sm btn-outline-primary mr-2">07:00
                                      pm</button>

                                  </div>
                                  <div class="col-md-12 mb-2"><b>Night:</b> <small>2 slots
                                      available</small></div>
                                  <div class="col-md-12 mb-3">
                                    <button class="btn btn-sm btn-outline-primary mr-2">09:00
                                      pm</button>
                                    <button class="btn btn-sm btn-outline-primary mr-2">10:00
                                      pm</button>


                                  </div>
                                </div>
                                <div id="tabs-3" role="tabpanel">
                                  <div class="col-md-12 text-center mb-4"><b>Wed 3
                                      Jan</b></div>

                                  <div class="col-md-12 mb-3">
                                    <span>No slots Available</span>



                                  </div>
                                  <div class="col-md-12 mb-2"><b>Afternoon:</b> <small>5 slots
                                      available</small></div>
                                  <div class="col-md-12 mb-3">
                                    <button class="btn btn-sm btn-outline-primary mr-2">01:00
                                      pm</button>
                                    <button class="btn btn-sm btn-outline-primary mr-2">02:00
                                      pm</button>
                                    <button class="btn btn-sm btn-outline-primary mr-2">03:00
                                      pm</button>
                                    <button class="btn btn-sm btn-outline-primary mr-2">04:00
                                      pm</button>
                                    <button class="btn btn-sm btn-outline-primary mr-2">04:30
                                      pm</button>


                                  </div>
                                  <div class="col-md-12 mb-2"><b>Evening:</b> <small>3 slots
                                      available</small></div>
                                  <div class="col-md-12 mb-3">
                                    <button class="btn btn-sm btn-outline-primary mr-2">06:00
                                      pm</button>
                                    <button class="btn btn-sm btn-outline-primary mr-2">06:30
                                      pm</button>
                                    <button class="btn btn-sm btn-outline-primary mr-2">07:00
                                      pm</button>

                                  </div>
                                  <div class="col-md-12 mb-2"><b>Night:</b> <small>2 slots
                                      available</small></div>
                                  <div class="col-md-12 mb-3">
                                    <button class="btn btn-sm btn-outline-primary mr-2">09:00
                                      pm</button>
                                    <button class="btn btn-sm btn-outline-primary mr-2">10:00
                                      pm</button>
                                  </div>

                                </div>
                              </div>

                            </div>
                          </div>

                        </div>


                      </div>
                    <?php endforeach; ?>
                  </div>

                </div>

                <!-- </div> -->

              </div>
            </div> <!-- end col -->

          </div>

        </div>
      <?php endif; ?>

    </div> <!-- container -->

  </div> <!-- content -->

  <?= $this->include('layouts/footer') ?>

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->