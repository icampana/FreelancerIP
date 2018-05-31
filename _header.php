<?php echo ipDoctypeDeclaration(); ?>
<html<?php echo ipHtmlAttributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php

    // Bootstrap Core CSS
    ipAddCss('vendor/bootstrap/css/bootstrap.min.css');

    // Theme CSS
    ipAddCss('css/freelancer.min.css');

    // Custom Fonts
    ipAddCss('vendor/font-awesome/css/font-awesome.min.css');

    // Add Management CSS
    if (ipIsManagementState ( )) { echo ipAddCss('css/admin.css'); }
    ?>
    <?php echo ipHead(); ?>
    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-freelancer-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <?php echo ipSlot('text', array('class' => 'navbar-brand', 'default' => 'Freelancer', 'id' => 'brandName')); ?>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-freelancer-navbar-collapse">
                <a href="#page-top"></a>
                <?php
                    $menuOption = array(
                        'items' => 'menu1',
                        'attributes' => array('class' => 'nav navbar-nav navbar-right')
                    );
                    echo ipSlot('menu', $menuOption);
                 ?>
            </div>
            <div class="languages pull-right">
                <?php echo ipSlot('languages'); ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
