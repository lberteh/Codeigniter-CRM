
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
                            <div class="btn-group pull-right">
                                <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Insert Date Range Picker here
                                    <i class="fa fa-angle-down"></i>
                                </button>

                            </div>
                        </div>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Prospects
                        <small>Hello</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->

                    <!-- BEGIN MAIN CONTENT-->

                    <!-- NEW PROSPECT BUTTON-->
                    <div class="row">
                      <div class="col-md-12" style="margin-bottom: 20px">
                        <a href="<?php echo base_url(); ?>index.php/Prospects/new_prospect"><button class="btn green" type="button" name="button">New Prospect</button></a>
                      </div>
                    </div>

                    <!-- END OF NEW PROSPECT BUTTON-->

                    <div class="row">

                        <div class="col-md-12">
                            <!-- BEGIN PROSPECTS TABLE-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-green">
                                        <i class="fa fa-bullseye font-green"></i>
                                        <span class="caption-subject bold uppercase">PROSPECTS</span>
                                    </div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_2">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th class="all">Business</th>
                                                <th class="desktop">Last Action</th>
                                                <th class="desktop">Last Outcome</th>
                                                <th class="desktop">Date</th>
                                                <th class="desktop">Notes</th>
                                                <th class="all">Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php foreach ($records as $record): ?>
                                            <tr>
                                              <td></td>
                                              <td><?php echo $record->b_name ?></td>
                                              <td><?php echo $record->entry_type ?></td>
                                              <td><?php echo $record->outcome ?></td>
                                              <td><?php echo $record->entry_date ?></td>
                                              <td><?php echo $record->notes ?></td>
                                              <td class="center">
                                                <a href="<?php echo base_url(); ?>index.php/Prospects/new_record/<?php echo $record->b_id ?>" class="btn btn-icon-only green">
                                                    <i class="fa fa-edit"></i>
                                                </a>
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

                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
