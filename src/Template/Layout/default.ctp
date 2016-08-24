<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $this->fetch('title') ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>

    <!-- css -->
    <?= $this->Html->css('AdminLTE.bootstrap/bootstrap.min'); ?>
    <?= $this->Html->css('AdminLTE.font-awesome/font-awesome.min'); ?>
    <!-- Theme style -->
    <?= $this->Html->css('AdminLTE.AdminLTE'); ?>
    <?= $this->Html->css('AdminLTE.skins/skin-blue.min'); ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <?= $this->Html->script('AdminLTE.html5shiv.min'); ?>
    <?= $this->Html->script('AdminLTE.respond.min'); ?>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


    <!--    HEADER -->
    <?php echo $this->Element('header'); ?>
    <!--    BOX SIDEBAR_LEFT -->
    <?php echo $this->Element('sidebar_left'); ?>
    <!--    BOX SIDEBAR_RIGHT -->
    <?php echo $this->Element('sidebar_right'); ?>
    <!--    BOX LEFT -->
    <!--    --><?php //echo $this->Element('box_left'); ?>
    <?php echo $this->fetch('content'); ?>
    <!--    BOX RIGHT -->
    <!--    --><?php //echo $this->Element('box_right'); ?>
</div>
<!-- ./wrapper -->

<?= $this->Html->script('AdminLTE.jQuery/jquery-2.2.3.min'); ?>
<?= $this->Html->script('AdminLTE.bootstrap/bootstrap.min'); ?>
<!-- AdminLTE App -->
<?= $this->Html->script('app.min'); ?>
</body>
</html>
