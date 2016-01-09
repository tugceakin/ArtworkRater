<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: tugceakin
 * Date: 5/6/15
 * Time: 3:12 PM
 */
?><!DOCTYPE html>

<body>

<div class="container" id="exhibition_container">
<div class="exh-table" data-example-id="hoverable-table">
    <table class="table table-hover table-striped">
      <thead>
        <tr>
          <th>Name</th>
          <th>City</th>
          <th>Start Date</th>
          <th>Ending Date</th>
        </tr>
      </thead>
      <tbody>

      <?php if($exhibitions != null):?>

      <?php
      foreach($exhibitions as $exh):?>
          <tr>
              <td><a href="<?php echo site_url('exhibition_artwork_list') ?>/<?php echo $exh->exhb_id;?>"><?php echo $exh->exh_name; ?></a></td>
              <td><?php echo $exh->city;?></td>
              <td><?php echo $exh->start_date;?></td>
              <td><?php echo $exh->end_date;?></td>
          </tr>
      <?php endforeach;?>
      <?php endif;?>


      </tbody>
    </table>

</div>
</div>