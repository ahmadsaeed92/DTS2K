<?php
?>
<div class="main-nav toggler">
    <div class="navtop">
        <a class="close-menu"  href="#"><img src="<?php echo asset_url() . "images/bars.png"?>" width="25" height="21"></a>
    </div>
    <ul class="my-nav">
        <li class="main-link">REPORTS</li>
        <li <?php echo ($this->uri->segment(1,0) == "cars_details") ? "active" : "" ;?> ><a  class="link-car" href="<?php echo base_url(). "index.php/cars_details/"; ?>">Cars Details</a></li>
        <li <?php echo ($this->uri->segment(1,0) == "cars_details") ? "active" : "" ;?> ><a  class="link-hour" href="#">Hour</a></li>
        <li <?php echo ($this->uri->segment(1,0) == "cars_details") ? "active" : "" ;?> ><a  class="link-day" href="#">Day</a></li>
        <li <?php echo ($this->uri->segment(1,0) == "cars_details") ? "active" : "" ;?> ><a  class="link-daypart" href="#">Day Part</a></li>
        <li <?php echo ($this->uri->segment(1,0) == "cars_details") ? "active" : "" ;?> ><a  class="link-month" href="#">Month</a></li>
        <li <?php echo ($this->uri->segment(1,0) == "cars_details") ? "active" : "" ;?> ><a  class="link-week" href="#">Week</a></li>
        <li <?php echo ($this->uri->segment(1,0) == "cars_details") ? "active" : "" ;?> ><a  class="link-year" href="#">Year</a></li>
        <li class="main-link"> COMPARISON</li>
        <li <?php echo ($this->uri->segment(1,0) == "cars_details") ? "active" : "" ;?> ><a  class="link-day" href="#">Day</a></li>
        <li <?php echo ($this->uri->segment(1,0) == "cars_details") ? "active" : "" ;?> ><a  class="link-daypart" href="#">Day Part</a></li>
        <li <?php echo ($this->uri->segment(1,0) == "cars_details") ? "active" : "" ;?> ><a  class="link-hour" href="#">Hour</a></li>
        <li class="main-link">SETTINGS</li>
    </ul>
</div>