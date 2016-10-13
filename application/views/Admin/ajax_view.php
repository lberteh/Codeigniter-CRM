
    <!-- BEGIN PAGE BAR -->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="">Home</a>
                <i class="fa fa-circle"></i>
            </li>

            <li>
                <span>Datatables</span>
            </li>
        </ul>
        <div class="page-toolbar">
            <div id="reportrange" class="pull-right tooltips btn btn-sm" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                <i class="icon-calendar"></i>&nbsp;
                <span class="thin uppercase hidden-xs"></span>&nbsp;
                <i class="fa fa-angle-down"></i>
            </div>
        </div>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h3 class="page-title"> Dashboard
        <small>reports</small>
    </h3>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->

    <!-- BEGIN ROW -->
    <div class="row">
        <div class="col-md-6">
            <!-- BEGIN CHART PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-green">
                        <i class="icon-bar-chart font-green"></i>
                        <span class="caption-subject bold uppercase">Sales Team Activities</span>
                        <span class="caption-helper">general overview</span>
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                        <a href="javascript:;" class="fullscreen"> </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="chartdiv" class="chart" style="height: 400px;"> </div>
                </div>
            </div>
            <!-- END CHART PORTLET-->
        </div>

        <div class="col-md-6">
            <!-- BEGIN CHART PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-green">
                        <i class="icon-bar-chart font-green"></i>
                        <span class="caption-subject bold uppercase">Closed Sales Ratio (%)</span>
                        <span class="caption-helper">general overview</span>
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                        <a href="javascript:;" class="fullscreen"> </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="chart_7" class="chart" style="height: 400px;"> </div>
                </div>
            </div>
            <!-- END CHART PORTLET-->
        </div>

    </div>
    <!-- END ROW -->


    <div class="row">

        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-green">
                        <i class="icon-settings font-green"></i>
                        <span class="caption-subject bold uppercase">Sales Team Activities</span>
                    </div>
                    <div class="tools"> </div>
                </div>
                <div id="tabsl">
                  <div class="portlet-body" >
                      <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_2">
                          <thead>
                              <tr>
                                  <th>
                                  </th>
                                  <th class="all">Name</th>
                                  <th class="min-phone-l">Calls</th>
                                  <th class="min-phone-1">Walk Ins</th>
                                  <th class="desktop">Total Prospects</th>
                                  <th class="desktop">Appointmets Booked</th>
                                  <th class="min-tablet">Completed Presentations</th>
                                  <th class="desktop">Folow Up Presentations</th>
                                  <th class="all">CLOSED SALES</th>
                                  <th class="all">Closed Sales RATIO</th>
                              </tr>
                          </thead>
                          <tbody >
                            <?php foreach ($columns as $record): ?>
                              <tr>
                                <td>

                                </td>
                                <td><?php echo $record->name ?></td>
                                <td><?php echo $record->calls ?></td>
                                <td><?php echo $record->walkins ?></td>
                                <td><?php echo $record->tprospects ?></td>
                                <td><?php echo $record->appointments ?></td>
                                <td><?php echo $record->presentations ?></td>
                                <td><?php echo $record->followUpPres ?></td>
                                <td><?php echo $record->sales ?></td>
                                <td>
                                  <?php if ($record->presentations != 0) {
                                    echo round(($record->sales / $record->presentations)*100, 2) . " %";
                                  } else {
                                    echo "0 %";
                                  } ?>

                                </td>
                              </tr>
                            <?php endforeach; ?>
                          </tbody>
                      </table>
                  </div>
                </div>

            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>



    <div class="row">
      <form id="subdaterange" action="<?php echo base_url(); ?>index.php/Admin" method="post">

            <input style="display: none" type="text" id="dStart" name="dStart" value="" />
            <input style="display: none"  type="text" id="dEnd" name="dEnd" value="" />


        </form>
    </div>

            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
</div>
<!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
