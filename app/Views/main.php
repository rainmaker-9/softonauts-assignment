<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
  <!-- Character Set -->
  <meta charset="UTF-8">
  <!-- Page Title -->
  <title><?= $pageTitle ?> | SIPL</title>
  <!-- Internet Explorer version chooser -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Mobile Responsive -->
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <!-- Favicon -->
  <link rel="shortcut icon" href="/assets/images/favicon.ico" type="image/x-icon">
  <!-- Status Color for Mobile Browsers -->
  <meta name="apple-mobile-web-app-status-bar" content="#252362" />
  <meta name="theme-color" content="#252362" />
  <!-- App css -->
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" />
  <!-- Custom CSS for Site -->
  <!-- <link rel="stylesheet" href="/assets/css/styles.css"> -->
  <!-- Custom CSS for Page -->
  <?= @$renderStyles ?>
</head>

<body class="h-100 d-flex flex-column bg-body-tertiary">
  <?= $this->include('layouts/header') ?>
  <?= $this->renderSection('page-content') ?>
  <?= $this->include('layouts/wrapper-end') ?>
  <!-- Vendor js -->
  <script src="/assets/js/vendor.min.js"></script>
  <!-- Custom JS for Page -->
  <?= @$renderScripts ?>
  <!-- App js -->
  <script src="assets/js/app.min.js"></script>
</body>

</html>