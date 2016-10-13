
                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Tasks</span>
                            </li>
                        </ul>

                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Tasks
                        <small>New Task</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">

                                        <div class="portlet box green">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-gift"></i>Create New Task for Project: <?php echo $project->project_name ?></div>
                                                <div class="tools">
                                                    <a href="javascript:;" class="collapse"> </a>
                                                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                    <a href="javascript:;" class="reload"> </a>
                                                    <a href="javascript:;" class="remove"> </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                <form action="<?php echo base_url();?>index.php/Prospects/add_new_prospect" method="post" class="form-horizontal">
                                                    <div class="form-body">

                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Task Title</label>
                                                            <div class="col-md-4">
																															<div class="input-icon">
																																	<i class="fa fa-cart-plus"></i>
																																	<input type="text" class="form-control" name="b_name" placeholder="Enter Task Title" required>
																															</div>

                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Task Details</label>
                                                            <div class="col-md-4">
                                                                <textarea class="form-control" name="notes" rows="5" placeholder="Enter Task Details"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
						                                                <label class="control-label col-md-3">Due Date</label>
						                                                <div class="col-md-3">
						                                                    <div id="datepicker" class="date-picker" data-date-format="yyyy-mm-dd"> </div>
                                                                <input type="hidden" id="my_hidden_input" name="entry_date">
						                                                </div>
						                                            </div>



																												<div class="form-group">
						                                                <label class="col-md-3 control-label">Assign to</label>
						                                                <div class="col-md-4">
						                                                    <select class="form-control" name="type_id" required>
																																	<option value="" selected disabled hidden style='display: none'>Please select an option...</option>
                                                                  <?php foreach ($users as $user): ?>
                                                                    <option value="<?php echo $user->user_id ?>"><?php echo $user->first_name ?> <?php echo $user->last_name ?></option>
                                                                  <?php endforeach; ?>

						                                                    </select>
						                                                </div>
						                                            </div>

																												<div class="form-group">
						                                                <label class="col-md-3 control-label">Tag as</label>
						                                                <div class="col-md-4">
						                                                    <select class="form-control" name="out_id">
																																	<option value="" selected disabled hidden style='display: none'>Please select an option...</option>
																																	<option value="1">No Interest</option>
																																	<option value="2">Follow Up</option>
																																	<option value="3">Appointment Booked</option>
						                                                    </select>
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
