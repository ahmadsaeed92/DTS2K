<?php ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php echo $title; ?></title>
        <!-- Bootstrap core CSS -->
        <link href=<?php echo asset_url() . "css/bootstrap.min.css"; ?> rel="stylesheet">
        <!-- Font-Awesome CSS -->
        <link href=<?php echo asset_url() . "css/font-awesome.min.css"; ?> rel="stylesheet">
        <!-- Style CSS -->
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href=<?php echo asset_url() . "css/jquery-ui.css"; ?>>
        <link rel="stylesheet" type="text/css" href=<?php echo asset_url() . "css/jquery-ui-timepicker-addon.css"; ?>>
        <link href=<?php echo asset_url() ."css/style.css"?> rel="stylesheet">
        <?php
        if(strpos($this->uri->segment(1,0), "comparison") !== FALSE): ?>
            <link href=<?php echo asset_url() ."css/defaultTheme.css"?> rel="stylesheet">
            <link href=<?php echo asset_url() ."css/myTheme.css"?> rel="stylesheet">
        <?php endif;
        ?>
    </head>