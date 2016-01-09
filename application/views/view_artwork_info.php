<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<body>

<div class="container">
    <div class="artwork-table" data-example-id="hoverable-table">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>Title</th>
                <th>Style</th>
                <th>Date</th>
            </tr>
            </thead>
            <tbody>

            <?php
            foreach($artworks as $aw):?>
                <tr>
                    <td><?php echo $aw->title; ?></td>
                    <td><?php echo $exh->style;?></td>
                    <td><?php echo $exh->date;?></td>

                </tr>
            <?php endforeach;?>


            </tbody>
        </table>
    </div>
</div>

<!--<script src="/application/libraries/jquery/dist/jquery.min.js")"></script>-->
<!--<script src="/application/libraries/bootstrap/dist/js/bootstrap.min.js"></script>-->
<!--</body>-->
<!--</html>-->