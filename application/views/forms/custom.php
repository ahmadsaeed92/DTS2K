<?php ?>
<div class="container-fluid inner">
    <div class="panel panel-default" style="margin-bottom: 0">
        <div class="panelhead"></div>
        <div class="panel-heading"><?php echo $title; ?></div>
        <div class="panel-body">
            <div class="report-filter">
                <form method="post" action="<?php echo base_url() . "index.php/" . $this->uri->segment(1, 0) . "/generate_report/" ?>">
                    <div class="start-time">
                        <label>Start Time:</label>
                        <input  type="text" required <?php echo (isset($start_date) ? 'value = "' . $start_date . '"' : ''); ?> id="custom_start_dt" name="start_date" class="datepicker">
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
                        <input  type="text" required <?php echo (isset($end_date) ? 'value = "' . $end_date . '"' : ''); ?> id="custom_end_dt" name="end_date" class="datepicker">
                    </div>
                    <button type="submit" class="btn btn-default pull-right">Generate Report </button>
                </form>
            </div>