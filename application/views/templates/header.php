<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css" > 
    <!-- font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/font_awesome/css/all.css">
    <!-- My Style -->
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">  -->
    <title><?= $judul?></title>
  </head>
  <body>
    <div class="container mt-4">
      <a class="btn btn-primary" href=" <?= base_url(); ?> ">Home <span class="sr-only">(current)</span></a>
      <a class="btn btn-warning" href=" <?= base_url(); ?>members ">Members</a>
      <a class="btn btn-success" href=" <?= base_url(); ?>city ">City</a>
      <a class="btn btn-danger" href=" <?= base_url(); ?>company ">Company</a>
    </div>