<?php ?>
<div class="container-fluid inner">
    <div class="panel panel-default">
        <div class="panelhead"></div>
        <div class="panel-heading">Help</div>
        <div class="panel-body" >
            <div class="" >
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                    <div class="panel panel-success help">
                        <!--                        <div class="panel-heading help-title">
                                                    <h4 class="panel-title">Overview<a data-toggle="collapse" data-parent="#accordion" class="arrow-down" href="#overview">a</a></h4>
                                                </div>-->
                        <div class="panel-heading help-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#overview"> <h4 class="panel-title">Overview  <span class="arrow-down"></span></h4></a>
                        </div>
                        <div id="overview" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo nl2br($this->config->item('overview', 'help_texts')); ?>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-success help">
                        <!--                        <div class="panel-heading help-title">
                                                    <h4 class="panel-title">General<a data-toggle="collapse" class="arrow-down" data-parent="#accordion" href="#general">b</a></h4>
                                                </div>-->
                        <div class="panel-heading help-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#general"> <h4 class="panel-title">General  <span class="arrow-down"></span></h4></a>
                        </div>
                        <div id="general" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo nl2br($this->config->item('general', 'help_texts')); ?>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-success help">
                        <div class="panel-heading help-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#cars_details"> <h4 class="panel-title">Cars Details<span class="arrow-down"></span></h4></a>
                        </div>
                        <div id="cars_details" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo nl2br($this->config->item('cars_details', 'help_texts')); ?>
                            </div>
                        </div>
                    </div>


                    <div class="panel panel-success help">
                        <div class="panel-heading help-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#hourly_report"> <h4 class="panel-title">Hourly Report<span class="arrow-down"></span></h4></a>
                        </div>
                        <div id="hourly_report" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo nl2br($this->config->item('hourly_report', 'help_texts')); ?>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-success help">
                        <div class="panel-heading help-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#daypart_report"> <h4 class="panel-title">Daypart Report<span class="arrow-down"></span></h4></a>
                        </div>
                        <div id="daypart_report" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo nl2br($this->config->item('daypart_report', 'help_texts')); ?>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-success help">
                        <div class="panel-heading help-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#daily_report"> <h4 class="panel-title">Daily Report<span class="arrow-down"></span></h4></a>
                        </div>
                        <div id="daily_report" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo nl2br($this->config->item('daily_report', 'help_texts')); ?>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-success help">
                        <div class="panel-heading help-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#weekly_report"> <h4 class="panel-title">Weekly Report<span class="arrow-down"></span></h4></a>
                        </div>
                        <div id="weekly_report" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo nl2br($this->config->item('weekly_report', 'help_texts')); ?>
                            </div>
                        </div>
                    </div>


                    <div class="panel panel-success help">
                        <div class="panel-heading help-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#monthly_report"> <h4 class="panel-title">Monthly Report<span class="arrow-down"></span></h4></a>
                        </div>
                        <div id="monthly_report" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo nl2br($this->config->item('monthly_report', 'help_texts')); ?>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-success help">
                        <div class="panel-heading help-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#yearly_report"> <h4 class="panel-title">Yearly Report<span class="arrow-down"></span></h4></a>
                        </div>
                        <div id="yearly_report" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo nl2br($this->config->item('yearly_report', 'help_texts')); ?>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-success help">
                        <div class="panel-heading help-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#custom_report"> <h4 class="panel-title">Custom Report<span class="arrow-down"></span></h4></a>
                        </div>
                        <div id="custom_report" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo nl2br($this->config->item('custom_report', 'help_texts')); ?>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-success help">
                        <div class="panel-heading help-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#daywise_comparison_report"> <h4 class="panel-title">Daywise Comparison Report<span class="arrow-down"></span></h4></a>
                        </div>
                        <div id="daywise_comparison_report" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo nl2br($this->config->item('daywise_comparison_report', 'help_texts')); ?>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-success help">
                        <div class="panel-heading help-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#hourly_comparison_report"> <h4 class="panel-title">Hourly Comparison Report<span class="arrow-down"></span></h4></a>
                        </div>
                        <div id="hourly_comparison_report" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo nl2br($this->config->item('hourly_comparison_report', 'help_texts')); ?>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-success help">
                        <div class="panel-heading help-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#daypart_comparison_report"> <h4 class="panel-title">Daypart Comparison Report<span class="arrow-down"></span></h4></a>
                        </div>
                        <div id="daypart_comparison_report" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo nl2br($this->config->item('daypart_comparison_report', 'help_texts')); ?>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-success help">
                        <div class="panel-heading help-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#settings"> <h4 class="panel-title">Settings<span class="arrow-down"></span></h4></a>
                        </div>
                        <div id="settings" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo nl2br($this->config->item('settings', 'help_texts')); ?>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>
</div>