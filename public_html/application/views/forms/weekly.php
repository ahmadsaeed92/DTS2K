<?php ?>
<div class="container-fluid inner">
    <div class="panel panel-default" style="margin-bottom: 0">
        <div class="panelhead"></div>
        <div class="panel-heading"><?php echo $title; ?></div>
        <div class="panel-body">
            <div class="report-filter">
                <form method="post" action="<?php echo base_url() . "index.php/" . $this->uri->segment(1, 0) . "/generate_report/" ?>">
                    <div class="start-time">
                        <label>Start:</label>
                        <input  type="text" required <?php echo (isset($start_date) ? 'value = "' . $start_date . '"' : ''); ?> id="week_start_date_picker" name="start_date" class="datepicker">
                    </div>
<!--                    <div class="end-time">
                        <label>End:</label>
                        <input  type="text" required <?php echo (isset($end_date) ? 'value = "' . $end_date . '"' : ''); ?> id="week_end_date_picker" name="end_date" class="datepicker">
                    </div>-->
                    <button type="submit" class="btn btn-default pull-right">Generate Report </button>
                </form>
            </div>