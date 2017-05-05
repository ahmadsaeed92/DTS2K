<?php ?>
<!--<div class="main-container">
     HEADER SECTION 
    <header class="header container-fluid">
        <div class="col-md-4 col-sm-4 col-xs-12 pr">
            <a class="nav-btn" style="display:none!important;" href="#"><img src="<?php echo asset_url() . "images/bars.png" ?>" width="25" height="21" alt=""></a>
            <a href="#" class="logo"><img src="<?php echo asset_url() . "images/techknow.png" ?>" class="img-responsive" alt="" ></a>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 text-center">
            <a href="#"><img src="<?php echo asset_url() . "images/dts.png" ?>" class="img-responsive logo2" ></a>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 ">
            <a href="<?php echo base_url() . "index.php/logout/" ?>" class="logout"><img src="<?php echo asset_url() . "images/icon-logout.png" ?>" width="19" height="18" alt="" ></a>
            <a href="#" class="pull-right logo3"><img src="<?php echo asset_url() . "images/client_logo.png" ?>" class="img-responsive" alt="" ></a>
        </div>
    </header>-->
<!-- CONTENT SECTION -->
<div class="container-fluid inner">
    <div class="panel panel-default">
        <div class="panelhead"></div>
        <div class="panel-heading">Cars Details</div>
        <div class="panel-body">
            <div class="report-filter">
                <form method="post" class="start_end_form" action="<?php echo base_url() . "index.php/cars_details/generate_report/" ?>">
                    <div class="start-time">
                        <label>Start Time:</label>
                        <input  type="text"  <?php echo (isset($start_date) ? 'value = "' . $start_date . '"' : ''); ?> id="start_date_cars_details" name="start_date" class="datepicker datepicker_start">
                        <?php if (($this->session->flashdata('message'))) { ?>
                            <!--style="background-color: transparent; border-color: transparent"-->
                            <div class="alert alert-danger" style="margin-top: 15px;">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                <strong>Error!</strong> <?php echo $this->session->flashdata('message'); ?>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="end-time">
                        <label>End Time:</label>
                        <input  type="text"  <?php echo (isset($end_date) ? 'value = "' . $end_date . '"' : ''); ?> id="end_date_cars_details" name="end_date" class="datepicker datepicker_end">
                    </div>
                    <button type="button" class="btn btn-default pull-right submit_button">Generate Report </button>
                </form>
            </div>
            <!--<div id="infoMessage"><?php echo $this->session->flashdata('message'); ?></div>-->

            <?php if (!empty($descriptor)) { ?>
                <div class="report-generated clearfix">
                    <?php echo $descriptor; ?>   
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Car/Visit ID</th>
                                <th>Departure Time</th>
                                <th>Car Lane</th>
                                <th>Greet</th>
                                <th>Menu</th>
                                <th>Queue 1</th>
                                <th>Cashier</th>
                                <th>Queue 2</th>
                                <th>Pickup Window</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (count($data) == 0) {
                                echo '<tr><td colspan="10">No Records Found</td></tr>';
                            } else {
                                foreach ($data as $row):
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo user_date($row['begin_time']); ?></td>
                                        <td><?php echo $row['laneStamp']; ?></td>
                                        <td><?php echo secs2minsecs((int) $row['greet_time']); ?></td>
                                        <td><?php echo secs2minsecs((int) $row['menu_time']); ?></td>
                                        <td><?php echo secs2minsecs((int) $row['queue1']); ?></td>
                                        <td><?php echo secs2minsecs((int) $row['cashier_time']); ?></td>
                                        <td><?php echo secs2minsecs((int) $row['queue2']); ?></td>
                                        <td><?php echo secs2minsecs((int) $row['pick_up']); ?></td>
                                        <td><?php echo secs2minsecs((int) $row['total_time']); ?></td>
                                    </tr>
                                    <?php
                                endforeach;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <?php echo $links; ?>
                <!--<div class="pagination">
                    <a href="#"><i class="fa fa-angle-double-left"></i></a>
                    <a href="#"><i class="fa fa-angle-left"></i></a>
                    <a href="#">1</a>
                    <a class="active" href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                    <a href="#"><i class="fa fa-angle-double-right"></i></a>
                </div>-->
            <?php } ?>
        </div>
    </div>
</div>
</div>