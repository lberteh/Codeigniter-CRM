
    <!-- BEGIN PAGE BAR -->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="index.html">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="#">Tables</a>
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
    <h3 class="page-title"> Responsive Extension
        <small>responsive extension demos</small>
    </h3>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->


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
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_2">
                        <thead>
                            <tr>
																<th>
																</th>
                                <th class="all"></th>
                                <th class="min-phone-l">Calls</th>
                                <th class="min-phone-1">Walk Ins</th>
                                <th class="desktop">Total Prospects</th>
                                <th class="desktop">Appointmets Booked</th>
                                <th class="min-tablet">Completed Presentations</th>
																<th class="all">CLOSED SALES</th>
                                <th class="all">Closed Sales RATIO</th>
                            </tr>
                        </thead>
                        <tbody>
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
                              <td><?php echo $record->sales ?></td>
                              <td>
                                <?php if ($record->presentations != 0) {
                                  echo ($record->sales / $record->presentations)*100 . " %";
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
