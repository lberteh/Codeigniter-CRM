
                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Form Stuff</span>
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
                    <h3 class="page-title"> Form Layouts
                        <small>form layouts</small>
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
                                        <span class="caption-subject bold uppercase"><?php echo $business->b_name ?></span>
                                    </div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_2">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th class="all">Name</th>
                                                <th class="min-phone-l">Action</th>
                                                <th class="min-tablet">Outcome</th>
                                                <th class="all">Date</th>
                                                <th class="desktop">Notes</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php foreach ($records as $record): ?>
                                            <tr>
                                              <td></td>
                                              <td><?php echo $record->name ?></td>
                                              <td><?php echo $record->entry_type ?></td>
                                              <td><?php echo $record->outcome ?></td>
                                              <td><?php echo $record->entry_date ?></td>
                                              <td><?php echo $record->notes ?></td>
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
                        <div class="col-md-12">

                                        <div class="portlet box green">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-gift"></i>Form Actions On Bottom </div>
                                                <div class="tools">
                                                    <a href="javascript:;" class="collapse"> </a>
                                                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                    <a href="javascript:;" class="reload"> </a>
                                                    <a href="javascript:;" class="remove"> </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                <form action="<?php echo base_url();?>index.php/Prospects/add_new_record" method="post" class="form-horizontal">
                                                    <div class="form-body">

                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Business</label>
                                                            <div class="col-md-4">
																															<div class="input-icon">
																																	<i class="fa fa-cart-plus"></i>
																																	<input type="text" class="form-control" value="<?php echo $business->b_name ?>" name="b_name" readonly>
																															</div>

                                                            </div>
                                                        </div>

																												<div class="form-group">
						                                                <label class="col-md-3 control-label">Action</label>
						                                                <div class="col-md-4">
						                                                    <select class="form-control" id="parent_selection" name="type_id" required>
                                                                  <option value="" selected disabled hidden style='display: none'>Please select an option...</option>
                                                                  <?php foreach($actions as $action): ?>
                                                                    <option value="<?php  echo $action->type_id; ?>"><?php echo $action->entry_type; ?></option>
                                                                  <?php endforeach; ?>
						                                                    </select>
						                                                </div>
						                                            </div>

																												<div class="form-group">
						                                                <label class="col-md-3 control-label">Outcome</label>
						                                                <div class="col-md-4">
						                                                    <select class="form-control" id="child_selection" name="out_id" required>
                                                                  <option value="" selected disabled hidden style='display: none'>Please select an Action...</option>
						                                                    </select>
						                                                </div>
						                                            </div>

																												<div class="form-group">
						                                                <label class="control-label col-md-3">Date</label>
						                                                <div class="col-md-3">
						                                                    <div id="datepicker" class="date-picker" data-date="now()"  data-date-format="yyyy-mm-dd"> </div>
                                                                <input type="hidden" id="my_hidden_input" name="entry_date" value="">
						                                                </div>
						                                            </div>



																												<div class="form-group">
						                                                <label class="col-md-3 control-label">Textarea</label>
						                                                <div class="col-md-4">
						                                                    <textarea class="form-control" name="notes" rows="4"></textarea>
						                                                </div>
						                                            </div>


                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-offset-3 col-md-9">
                                                                <button type="submit" class="btn green">Submit</button>
                                                                <button type="button" class="btn grey-salsa btn-outline">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- END FORM-->
                                            </div>
                                        </div>


                                                <!-- END FORM-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->

  
