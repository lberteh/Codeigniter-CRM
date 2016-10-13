
    <!-- BEGIN PAGE BAR -->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="#">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>Register User</span>
            </li>
        </ul>
        <div class="page-toolbar">
            <div class="btn-group pull-right">
                <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <a href="#">
                            <i class="icon-bell"></i> Action</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-shield"></i> Another action</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-user"></i> Something else here</a>
                    </li>
                    <li class="divider"> </li>
                    <li>
                        <a href="#">
                            <i class="icon-bag"></i> Separated link</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h3 class="page-title"> Users
        <small>Register User</small>
    </h3>

    <div class="row">
        <div class="col-md-12">

                        <div class="portlet box green">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-user"></i>Register New User</div>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse"> </a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                    <a href="javascript:;" class="reload"> </a>
                                    <a href="javascript:;" class="remove"> </a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="<?php echo base_url();?>index.php/Register/to_register" method="post" class="form-horizontal">
                                    <div class="form-body">

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">First Name</label>
                                            <div class="col-md-4">
                                              <div class="input-icon">
                                                    <i class="fa fa-user"></i>
                                                  <input type="text" class="form-control" name="first_name" placeholder="Enter user first name" required>
                                              </div>

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Last Name</label>
                                            <div class="col-md-4">
                                              <div class="input-icon">
                                                    <i class="fa fa-user"></i>
                                                  <input type="text" class="form-control" name="last_name" placeholder="Enter user last name" required>
                                              </div>

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Email</label>
                                            <div class="col-md-4">
                                              <div class="input-icon">
                                                    <i class="fa fa-envelope"></i>
                                                  <input type="email" class="form-control" name="email" placeholder="Enter user email" required>
                                              </div>

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Password</label>
                                            <div class="col-md-4">
                                              <div class="input-icon">
                                                    <i class="fa fa-lock"></i>
                                                  <input type="password" class="form-control" name="password" placeholder="Enter password" required>
                                              </div>

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Confirm Password</label>
                                            <div class="col-md-4">
                                              <div class="input-icon">
                                                  <i class="fa fa-lock"></i>
                                                  <input type="password" class="form-control" name="confirm" placeholder="Retype password for verification" required>
                                              </div>

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Permissions</label>
                                            <div class="col-md-4">
                                                <select class="form-control" name="admin" required>
                                                  <option value="" selected disabled hidden style='display: none'>Please select an option...</option>
                                                  <option value="1">Admin</option>
                                                  <option value="2">User</option>
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
                                        </div>
                                    </form>
                                    <!-- END FORM-->
  </div>
                            </div>


                                <!-- END FORM-->
                            </div>
                        </div>
                    </div>

<!-- END CONTENT BODY -->

<!-- END CONTENT -->
