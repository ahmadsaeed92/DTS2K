<?php ?>
<div class="container-fluid inner">
    <div class="panel panel-default" style="margin-bottom: 0">
        <div class="panelhead"></div>
        <div class="panel-heading"><?php echo $title; ?></div>
        <div class="panel-body">
            <div class="report-filter">
                <form method="post" action="<?php echo base_url() . "index.php/" . $this->uri->segment(1, 0) . "/generate_report/" ?>">
                    <div class="start-time">
                        <label>Pick Hour:</label>
                        <input  type="text" required <?php echo (isset($start_date) ? 'value = "' . $start_date . '"' : ''); ?> id="hour_pickup" name="start_date" class="datepicker">
                    </div>
                    <!--        <div class="end-time">
                                <label>End Time:</label>
                                <input  type="text" required <?php echo (isset($end_date) ? 'value = "' . $end_date . '"' : ''); ?> id="end_date_cars_details" name="end_date" class="datepicker">
                            </div>-->
                    <button type="submit" class="btn btn-default pull-right">Generate Report </button>
                </form>
            </div>