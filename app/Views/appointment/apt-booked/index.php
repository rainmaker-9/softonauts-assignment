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
            <h4 class="text-<?= $status ? "success" : "danger" ?>">
              <?= $message ?>
            </h4>
            <a href="/drop-in" class="btn btn-primary">Return to Drop-in Center</a>
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