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

                <li class="breadcrumb-item active">Appointment Details</li>
              </ol>
            </div>
            <h4 class="page-title">Appointment Details</h4>

          </div>
        </div>
      </div>
      <!-- end page title -->

      <div class="row">
        <div class="col-md-12">
          <div class="card-box">
            <form action="/book-appointment-slot" method="post">
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="">Navigator Details</label><br>
                  <span class="font-14 tt-c color-primary"><?= $navigator->navigator_name ?></span><br>
                  <span><?= $location ?></span>
                </div>
                <div class="form-group col-md-4">
                  <label for="appointment_type">Select Appointment Type</label>
                  <select class="form-control chosen-select-deselect" name="appointment_type" id="appointment_type">
                    <option value="" selected disabled>Select Appointment Type</option>
                    <?php foreach ($navigator->appointment_type as $apt_type) : ?>
                      <option value="<?= $apt_type->id ?>"><?= $apt_type->appointment_type ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="">Appointment Date and Time </label><br>
                  <span class="color-primary"><?= $date->format("d-M-Y h:i A") ?></span><br>

                </div>
                <div class="form-group col-md-4">
                  <button type="submit" class="btn btn-primary btn-sm mb-2">Confirm Apointment</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>


    </div>



  </div> <!-- container -->

</div> <!-- content -->

<?= $this->include('layouts/footer') ?>

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->