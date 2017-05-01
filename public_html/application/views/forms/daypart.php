<?php ?>
<div class="container-fluid inner">
    <div class="panel panel-default" style="margin-bottom: 0">
        <div class="panelhead"></div>
        <div class="panel-heading"><?php echo $title; ?></div>
        <div class="panel-body">
            <div class="report-filter">
                <form method="post" action="<?php echo base_url() . "index.php/" . $this->uri->segment(1, 0) . "/generate_report/" ?>">
                    <div class="start-time">
                        <label>Pick Date:</label>
                        <input  type="text" required <?php echo (isset($start_date) ? 'value = "' . $start_date . '"' : ''); ?> id="daypart_date_picker" name="start_date" class="datepicker">
                    </div>
                    <div class="end-time">
                        <label>Select Daypart:</label>
                        <select style="display: inline; width: 40%; height: 37px"  type="text" required <?php echo (isset($end_date) ? 'value = "' . $end_date . '"' : ''); ?> id="daypart_select" name="end_date" class="form-control">
                            <option value="DP1">DP1 – 4:00am</option>
                            <option value="DP2">DP2 – 10:30am</option>
                            <option value="DP3">DP3 – 2:00pm</option>
                            <option value="DP4">DP4 – 5:00pm</option>
                            <option value="DP5">DP5 – 8:00pm</option>
                            <option value="DP6">DP6 – 10:00pm</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-default pull-right">Generate Report </button>
                </form>
            </div>