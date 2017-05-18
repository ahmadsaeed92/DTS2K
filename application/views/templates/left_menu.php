<?php ?>
<?php
//$uri_segment = $this->uri->segment(1, 0);
//$enabled_uri_segment = array('hourly','daypart','daily','weekly','monthly','yearly','custom');
//if (in_array($uri_segment, $enabled_uri_segment)):
//    
?>
<!--<div class="main-container">-->
<?php //endif;  ?>
<div class="main-nav toggler mCustomScrollbar">
    <div class="navtop">
        <a class="close-menu" title="<?php echo $this->config->item( 'left_menu_toggle','tooltip_texts'); ?>" href="#"><img src="<?php echo asset_url() . "images/bars.png" ?>" width="25" height="21"></a>
    </div>
    <ul class="my-nav">
        <li class="main-link">REPORTS</li>
        <li class="<?php echo ($this->uri->segment(1, 0) == "cars_details") ? "active" : ""; ?>" ><a  class="link-car" href="<?php echo base_url() . "index.php/cars_details/"; ?>">Cars Details</a></li>
        <li class="<?php echo ($this->uri->segment(1, 0) == "hourly") ? "active" : ""; ?>" ><a  class="link-hour" href="<?php echo base_url() . "index.php/hourly/" ?>">Hourly</a></li>
        <li class="<?php echo ($this->uri->segment(1, 0) == "daypart") ? "active" : ""; ?>" ><a  class="link-daypart" href="<?php echo base_url() . "index.php/daypart/" ?>">Daypart</a></li>
        <li class="<?php echo ($this->uri->segment(1, 0) == "daily") ? "active" : ""; ?>" ><a  class="link-day" href="<?php echo base_url() . "index.php/daily/" ?>">Daily</a></li>
        <li class="<?php echo ($this->uri->segment(1, 0) == "weekly") ? "active" : ""; ?>" ><a  class="link-week" href="<?php echo base_url() . "index.php/weekly/" ?>">Week</a></li>
        <li class="<?php echo ($this->uri->segment(1, 0) == "monthly") ? "active" : ""; ?>" ><a  class="link-month" href="<?php echo base_url() . "index.php/monthly/" ?>">Month</a></li>
        <li class="<?php echo ($this->uri->segment(1, 0) == "yearly") ? "active" : ""; ?>" ><a  class="link-year" href="<?php echo base_url() . "index.php/yearly/" ?>">Year</a></li>
        <li class="<?php echo ($this->uri->segment(1, 0) == "custom") ? "active" : ""; ?>" ><a  class="link-custom_dates" href="<?php echo base_url() . "index.php/custom/" ?>">Custom Dates</a></li>
        <li class="main-link"> COMPARISON</li>
        <li class="<?php echo ($this->uri->segment(1, 0) == "daywise_comparison") ? "active" : ""; ?>" ><a  class="link-day" href="<?php echo base_url() . "index.php/daywise_comparison/"; ?>">Day</a></li>
        <li class="<?php echo ($this->uri->segment(1, 0) == "daypart_comparison") ? "active" : ""; ?>" ><a  class="link-daypart" href="<?php echo base_url() . "index.php/daypart_comparison/"; ?>">Day Part</a></li>
        <li class="<?php echo ($this->uri->segment(1, 0) == "hourly_comparison") ? "active" : ""; ?>" ><a  class="link-hour" href="<?php echo base_url() . "index.php/hourly_comparison/"; ?>">Hour</a></li>
        <li class="main-link">SETTINGS</li>
        <li class="<?php echo ($this->uri->segment(1, 0) == "settings") ? "active" : ""; ?>" ><a  class="link-settings" href="<?php echo base_url() . "index.php/settings/"; ?>">View Settings</a></li>
        <li class="<?php echo ($this->uri->segment(1, 0) == "settings") ? "active" : ""; ?>" ><a  class="link-help" href="<?php echo base_url() . "index.php/help/"; ?>">Help</a></li>
    </ul>
</div>