<?php
/**
 * Created by PhpStorm.
 * User: tugceakin
 * Date: 5/2/15
 * Time: 11:20 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

<nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url('site') ?>">ArtworkRater</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo site_url('site') ?>">Artworks</a></li>
            <li><a href="<?php echo site_url('exhibition') ?>">Exhibitions</a></li>
<!--            <li class="dropdown">-->
<!--              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>-->
<!--              <ul class="dropdown-menu" role="menu">-->
<!--                <li><a href="#">Action</a></li>-->
<!--                <li><a href="#">Another action</a></li>-->
<!--                <li><a href="#">Something else here</a></li>-->
<!--                <li class="divider"></li>-->
<!--                <li class="dropdown-header">Nav header</li>-->
<!--                <li><a href="#">Separated link</a></li>-->
<!--                <li><a href="#">One more separated link</a></li>-->
<!--              </ul>-->
<!--            </li>-->
              <li><a href="<?php echo site_url('artist') ?>">Artists</a></li>
              <li><a href="<?php echo site_url('about') ?>">About</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">


              <?php if($this->session->userdata('logged_in') == 1):?>
                <li><a href="<?php echo site_url('logout') ?>">Logout</a></li>
              <?php else:?>
                <li><a href="<?php echo site_url('register') ?>">Register</a></li>
                <li><a href="<?php echo site_url('login') ?>">Login</a></li>
              <?php endif;?>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <link rel="stylesheet" href="<?php echo base_url(); ?>lib/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>lib/jquery.dataTables.min.css" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>lib/main.css" />


</head>
