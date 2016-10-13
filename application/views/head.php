<!DOCTYPE html>
<html>
  <head>

    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.css"  media="screen,projection"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <style media="screen">

        body {
          background-color: #fafafa;
        }

        html {
          font-size: 14px;
        }

        li a {
          text-decoration: none;
        }

        li a:hover {
          text-decoration: none;
          color: white;

        }

        .side-nav a:hover {
          background-color: #01579b;
        }

        .btn-danger {
          background-color: #0277bd;
          border-color: #0277bd;
        }

        .btn-primary {
          background-color: #01579b;
          border-color: #01579b;
        }

    </style>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Muv-u Sales Team</title>
  </head>
  <body>

    <nav class="light-blue darken-4">
      <div class="nav-wrapper container">
        <a href="#!" class="brand-logo"><img id"logo_img" class="responsive-img" src="<?php echo base_url(); ?>assets/images/logo.png" alt="Muv-u logo" /></a>
        <?php if($this->session->userdata('logged_in')): ?>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <?php endif; ?>
        <ul class="right hide-on-med-and-down">
          <li><a href="#">Açucar</a></li>
          <li><a href="#">Tempero</a></li>
          <li><a href="#">Tudo Que</a></li>
          <li><a href="#">Há de Bom</a></li>
        </ul>

        <ul class="side-nav" id="mobile-demo">
          <li class="center" style="background-color:#01579b;"><img style="height:40px;" id"logo_img" class="responsive-img" src="<?php echo base_url(); ?>assets/images/logo.png" alt="Muv-u logo" /></li>
          <li><a href="http://localhost/muv-u/index.php/main"><strong>New Record</strong></a></li>
          <li><a href="http://localhost/muv-u/index.php/records"><strong>My Records</strong></a></li>
          <li><a href="http://localhost/muv-u/index.php/Login/to_logout"><strong>Logout</strong></a></li>
        </ul>
      </div>
    </nav>

    <!-- If user is logged in, display the message bellow. -->
    <?php if($this->session->userdata('first_name')): ?>

      <div class="container right-align" style="margin-top:10px;">
        <p>Welcome, <strong><?php echo $this->session->userdata('first_name'); ?><strong></p>
      </div>

    <?php endif; ?>
