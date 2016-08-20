<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <?php echo $this->Html->css('AdminLTE.bootstrap/bootstrap.min'); ?>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"> <!-- FIXME tentar colocar local?-->
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"><!-- FIXME tentar colocar local?-->
    <!-- Theme style -->
    <?php echo $this->Html->css('AdminLTE.AdminLTE.min'); ?>
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <?php echo $this->Html->css('AdminLTE.skins/_all-skins.min'); ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <!--    HEADER -->
    <?php echo $this->Element('header'); ?>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<?php echo $this->Html->script('AdminLTE.jQuery/jquery-2.2.3.min');?>
<!-- Bootstrap 3.3.6 -->
<?php echo $this->Html->script('AdminLTE.bootstrap/bootstrap.min');?>
<!-- FastClick -->
<?php echo $this->Html->script('AdminLTE.fastclick/fastclick.min');?>
<!-- AdminLTE App -->
<?php echo $this->Html->script('app.min');?>
<!-- SlimScroll 1.3.0 -->
<?php echo $this->Html->script('AdminLTE.slimScroll/jquery.slimscroll.min');?>
</body>
</html>
