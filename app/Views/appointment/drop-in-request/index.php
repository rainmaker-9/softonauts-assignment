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

      <?php if (!empty($navigators) && count($navigators) > 0) : ?>
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
                    <?php foreach ($navigators as $navigator) : ?>
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
                            <form id="frm-location-select">
                              <div class="form-group col-md-8">
                                <label for="">Select Address</label>
                                <select class="form-control chosen-select-deselect address_id" id="address_id">
                                  <option value="" selected disabled>Select Address</option>
                                  <?php for ($i = 0; $i < count($navigator->location_id); $i++) : ?>
                                    <option data-target="location-<?= $navigator->location_id[$i] ?>" value="<?= $navigator->location_id[$i] ?>">
                                      <?= $navigator->navigator_location[$i] ?>
                                    </option>
                                  <?php endfor; ?>
                                </select>
                              </div>
                            </form>
                            <?php
                            foreach ($navigator->time_slots as $loc) :
                            ?>
                              <div id="location-<?= $loc->location ?>" class="p-3 b1 slots" style="display:none">
                                <ul role="tablist">
                                  <?php foreach ($loc->slots as $key => $slot) : ?>
                                    <li role="tab">
                                      <a href="#tabs-<?= $key ?>" class="text-center" role="presentation">
                                        <?php
                                        if ($key === 0 || $key === 1) {
                                          echo trim(substr($slot->show_date, strpos($slot->show_date, ",") + 1));
                                        } else {
                                          echo $slot->show_date;
                                        }
                                        ?>
                                        <br>
                                        <small class="fdc"><?= $slot->count ?> slot available</small>
                                      </a>
                                    </li>
                                  <?php endforeach; ?>
                                </ul>
                                <div>
                                  <?php foreach ($loc->slots as $key => $slot) : ?>
                                    <div id="tabs-<?= $key ?>" role="tabpanel">
                                      <div class="col-md-12 text-center font-weight-bold mb-4"><?= $slot->show_date ?></div>
                                      <?php
                                      if (!empty($slot->slotes)) :
                                        foreach ($slot->slotes as $key => $value) :
                                      ?>
                                          <div class="col-md-12 mb-2">
                                            <b><?= ucfirst($key) ?>:</b>
                                            <?php
                                            if (!empty($slot->slotes->$key)) :
                                            ?>
                                              <small><?= count($value) ?> slots available</small>
                                            <?php else : ?>
                                              <small>No slots available.</small>
                                            <?php endif; ?>
                                          </div>
                                          <div class="col-md-12 mb-3">
                                            <div class="d-flex align-items-center flex-wrap" style="gap: .5em">
                                              <?php if (!empty($slot->slotes->$key) && count($slot->slotes->$key) > 0) : ?>
                                                <?php foreach ($value as $s) :
                                                  $data = [
                                                    'location' => $loc->location,
                                                    'date' => $slot->current_date,
                                                    'time' => $s
                                                  ];
                                                  $query = http_build_query($data);
                                                ?>
                                                  <a href="/book-appointment?<?= $query ?>">
                                                    <button class="btn btn-sm btn-outline-primary"><?= $s ?></button>
                                                  </a>
                                              <?php
                                                endforeach;
                                              endif; ?>
                                            </div>
                                          </div>
                                      <?php
                                        endforeach;
                                      endif;
                                      ?>
                                    </div>
                                  <?php endforeach; ?>
                                </div>
                              </div>
                            <?php endforeach; ?>
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