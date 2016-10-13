<!DOCTYPE html>


<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Metronic | Todo 2</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="http://localhost/metro/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/metro/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/metro/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/metro/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="http://localhost/metro/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/metro/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/metro/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="http://localhost/metro/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="http://localhost/metro/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="http://localhost/metro/assets/apps/css/todo-2.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="http://localhost/metro/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/metro/assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="http://localhost/metro/assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-content-white">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="<?php echo base_url(); ?>Admin">
                        <img src="http://localhost/metro/assets/layouts/layout/img/muv-u.png" alt="logo" class="logo-default" /> </a>
                    <div class="menu-toggler sidebar-toggler">
                        <span></span>
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">

                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle" src="http://localhost/metro/assets/pages/media/users/<?php echo $this->session->userdata('avatar'); ?>" />
                                <span class="username username-hide-on-mobile">
                                  <?php if($this->session->userdata('first_name')): ?>

                                      <?php echo $this->session->userdata('first_name'); ?>

                                  <?php endif; ?> </span>

                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="page_user_profile_1.html">
                                        <i class="icon-user"></i> My Profile </a>
                                </li>
                                <li>
                                    <a href="app_calendar.html">
                                        <i class="icon-calendar"></i> My Calendar </a>
                                </li>

                                <li>
                                    <a href="app_todo.html">
                                        <i class="icon-rocket"></i> My Tasks

                                    </a>
                                </li>
                                <li class="divider"> </li>

                                <li>
                                    <a href="http://localhost/metro/index.php/Login/to_logout">
                                        <i class="icon-key"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-quick-sidebar-toggler">
                            <a href="javascript:;" class="dropdown-toggle">
                                <i class="icon-logout"></i>
                            </a>
                        </li>
                        <!-- END QUICK SIDEBAR TOGGLER -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                        <li class="sidebar-toggler-wrapper hide">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class="sidebar-toggler">
                                <span></span>
                            </div>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>
                        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->

                        <?php if ($this->session->userdata('admin', '1')): ?>

                          <li class="nav-item start ">
                              <a href="<?php echo base_url(); ?>Admin" class="nav-link ">
                                  <i class="icon-home"></i>
                                  <span class="title">Dashboard</span>
                              </a>
                          </li>

                          <li class="nav-item start ">
                              <a href="javascript:;" class="nav-link nav-toggle">
                                  <i class="icon-users"></i>
                                  <span class="title">Users</span>
                                  <span class="arrow"></span>
                              </a>
                              <ul class="sub-menu">
                                  <li class="nav-item start ">
                                      <a href="<?php echo base_url(); ?>Register" class="nav-link ">
                                          <i class="icon-user-follow"></i>
                                          <span class="title">Register User</span>
                                      </a>
                                  </li>

                              </ul>
                          </li>

                        <?php endif; ?>


                        <li class="heading">
                            <h3 class="uppercase">Pages</h3>
                        </li>
                        <li class="nav-item start ">
                            <a href="<?php echo base_url(); ?>Prospects" class="nav-link ">
                                <i class="icon-bar-chart"></i>
                                <span class="title">Prospects</span>
                            </a>
                        </li>
                        <li class="nav-item start ">
                            <a href="<?php echo base_url(); ?>Projects" class="nav-link ">
                                <i class="icon-bar-chart"></i>
                                <span class="title">Projects</span>
                            </a>
                        </li>
                        <li class="nav-item start ">
                            <a href="<?php echo base_url(); ?>Tasks" class="nav-link ">
                                <i class="icon-bar-chart"></i>
                                <span class="title">Tasks</span>
                            </a>
                        </li>

                    </ul>
                    <!-- END SIDEBAR MENU -->
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->

                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN TODO SIDEBAR -->
                            <div class="todo-ui">
                                <div class="todo-sidebar">
                                    <div class="portlet light ">
                                        <div class="portlet-title">
                                            <div class="caption" data-toggle="collapse" data-target=".todo-project-list-content">
                                                <span class="caption-subject font-green-sharp bold uppercase">PROJECTS </span>
                                                <span class="caption-helper visible-sm-inline-block visible-xs-inline-block">click to view project list</span>
                                            </div>
                                            <div class="actions">
                                                <div class="btn-group">
                                                    <a class="btn green btn-circle btn-outline btn-sm todo-projects-config" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                        <i class="icon-settings"></i> &nbsp;
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="javascript:;"> New Project </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Pending
                                                                <span class="badge badge-danger"> 4 </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Completed
                                                                <span class="badge badge-success"> 12 </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Overdue
                                                                <span class="badge badge-warning"> 9 </span>
                                                            </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Archived Projects </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="portlet-body todo-project-list-content">
                                            <div class="todo-project-list" id="project_list">
                                                <ul class="nav nav-stacked">

                                                  <li class="active" data-projectid="no_id">
                                                      <a href="javascript:;" class="p_name" data-proname="All Projects" > All Projects </a>
                                                    <p hidden="">
                                                      <a href="javascript:;" class="p_body" data-probody="See the tasks for all projects"> See the tasks for all projects </a>
                                                    </p>
                                                  </li>

                                                    <?php foreach ($projects as $project): ?>
                                                      <li data-projectid="<?php echo $project->project_id ?>">
                                                          <a href="javascript:;" class="p_name" data-proname="<?php echo $project->project_name ?>">  <?php echo $project->project_name; ?> </a>
                                                        <p hidden="">
                                                          <a href="javascript:;" class="p_body" data-probody="<?php echo $project->project_body ?>">  <?php echo $project->project_body; ?> </a>
                                                        </p>
                                                      </li>
                                                    <?php endforeach; ?>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet light ">
                                        <div class="portlet-title">
                                            <div class="caption" data-toggle="collapse" data-target=".todo-project-list-content-tags">
                                                <span class="caption-subject font-red bold uppercase">OPTIONS </span>
                                                <span class="caption-helper visible-sm-inline-block visible-xs-inline-block">click to view</span>
                                            </div>
                                            <div class="actions">
                                                <div class="actions">
                                                    <a class="btn btn-circle grey-salsa btn-outline btn-sm" href="javascript:;" id="tes">
                                                        <i class="fa fa-plus"></i> Add </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portlet-body todo-project-list-content todo-project-list-content-tags" id="options">
                                            <div class="todo-project-list">
                                                <ul class="nav nav-pills nav-stacked">
                                                    <li>
                                                        <a href="javascript:;" class="filter_pending">
                                                            <span class="badge badge-warning">

                                                              <?php $num = "0"; ?>
                                                              <?php foreach($count->result() as $c): ?>
                                                                <?php if($c->status === 'yellow') {
                                                                  $num = $c->count;
                                                                 } ?>
                                                              <?php endforeach; ?>
                                                              <?php echo $num; ?>

                                                            </span>Hide Pending </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" class="filter_completed2">
                                                            <span class="badge badge-success">

                                                              <?php $num = "0"; ?>
                                                              <?php foreach($count->result() as $c): ?>
                                                                <?php if($c->status === 'green') {
                                                                  $num = $c->count;
                                                                 } ?>
                                                              <?php endforeach; ?>
                                                              <?php echo $num; ?>

                                                            </span>Show Completed </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" class="filter_overdue">
                                                            <span class="badge badge-danger">

                                                              <?php $num = "0"; ?>
                                                              <?php foreach($count->result() as $c): ?>
                                                                <?php if($c->status === 'red') {
                                                                  $num = $c->count;
                                                                 } ?>
                                                              <?php endforeach; ?>
                                                              <?php echo $num; ?>
                                                            </span>Hide Overdue </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END TODO SIDEBAR -->
                                <!-- BEGIN TODO CONTENT -->
                                <div class="todo-content">
                                    <div class="portlet light ">
                                        <!-- PROJECT HEAD -->
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-bar-chart font-green-sharp hide"></i>
                                                <span class="caption-helper" id="rio">All Projects tasks:</span> &nbsp;
                                                <span class="caption-subject font-green-sharp bold uppercase" id="selected_task">No task selected</span>
                                            </div>
                                            <div class="actions">
                                                <div class="btn-group">
                                                    <a class="btn green btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> MANAGE
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="javascript:;"> New Task </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Pending
                                                                <span class="badge badge-danger"> 4 </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Completed
                                                                <span class="badge badge-success"> 12 </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Overdue
                                                                <span class="badge badge-warning"> 9 </span>
                                                            </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Delete Project </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <p id="pro_body">
                                          See the tasks for all projects
                                        </p>
                                        <hr>
                                        <!-- end PROJECT HEAD -->
                                        <div class="portlet-body">
                                            <div class="row">
                                                <div class="col-md-7 col-sm-4">
                                                    <div class="todo-tasklist" id="all_tasks">
                                                        <?php foreach ($tasks as $task): ?>

                                                            <div class="todo-tasklist-item todo-tasklist-item-border-<?php echo $task->status ?> testclass" id="task_click" data-tstatus="<?php echo $task->status ?>" data-tname="<?php echo $task->task_name?>" data-projectid="<?php echo $task->project_id?>" data-taskid="<?php echo $task->task_id?>">
                                                              <?php foreach ($assigned_users as $user): ?>
                                                                <?php if($task->task_id == $user->task_id): ?>
                                                    						      <img class="todo-userpic pull-left" src="http://localhost/metro/assets/pages/media/users/<?php echo $user->avatar ?>" width="27px" height="27px">
                                                                <?php endif; ?>
                                                              <?php endforeach; ?>
                                                    						<div class="todo-tasklist-item-title"><?php echo $task->task_name ?></div>
                                                    						<div class="todo-tasklist-item-text"><?php echo $task->task_body?></div>
                                                    						<div class="todo-tasklist-controls pull-left">
                                                    								<span class="todo-tasklist-date">
                                                    										<i class="fa fa-calendar"></i><?php echo $task->date_due?></span>
                                                    						</div>
                                                    				</div>
                                                        <?php endforeach; ?>

                                                    </div>
                                                </div>
                                                <div class="todo-tasklist-devider"> </div>
                                                <div class="col-md-5 col-sm-8">
                                                    <form method="post" action="#" class="form-horizontal" id="task_form">
                                                      <div class="form">
                                            							<div class="form-group">
                                                              <div class="col-md-12 col-sm-12">

                                                                      <button type="button" id="mark_complete" class="todo-username-btn btn btn-circle btn-default btn-sm" data-taskid="">&nbsp; Complete &nbsp;</button>
                                                                      <a href="tasks/assign_task/' . $task_id . '"><button type="button" class="todo-username-btn btn btn-circle btn-default btn-sm">&nbsp;Edit Users&nbsp;</button></a>

                                                              </div>
                                                              <div class="col-md-12 col-sm-12">
                                                                  <div style=" clear:both">
                                                                    <hr>
                                                                  </div>
                                                              </div>
                                                              <div class="col-md-12 col-sm-12">
                                                                  <div style=" clear:both">
                                                                    <h4>Assigned to:</h4><p>
                                                                      I. Jones, B. Bobbins, J. Jackins, I. Jones, B. Bobbins, J. Jackins, I. Jones, B. Bobbins, J. Jackins, I. Jones, B. Bobbins, J. Jackins, I. Jones, B. Bobbins, J. Jackins,
                                                                    </p>
                                                                  </div>
                                                              </div>

                                            									<div class="col-md-12 col-sm-12" style="clear:both;">
                                            											<div class="todo-taskbody-user">
                                            													<img class="todo-userpic pull-left" src="http://localhost/metro/assets/pages/media/users/Indiana_Jones.jpg" width="50px" height="50px">
                                                                      <img class="todo-userpic pull-left" src="http://localhost/metro/assets/pages/media/users/Indiana_Jones.jpg" width="50px" height="50px">
                                                                      <img class="todo-userpic pull-left" src="http://localhost/metro/assets/pages/media/users/Indiana_Jones.jpg" width="50px" height="50px">
                                                                      <img class="todo-userpic pull-left" src="http://localhost/metro/assets/pages/media/users/Indiana_Jones.jpg" width="50px" height="50px">
                                                                      <img class="todo-userpic pull-left" src="http://localhost/metro/assets/pages/media/users/Indiana_Jones.jpg" width="50px" height="50px">
                                                                      <img class="todo-userpic pull-left" src="http://localhost/metro/assets/pages/media/users/Indiana_Jones.jpg" width="50px" height="50px">
                                                                      <img class="todo-userpic pull-left" src="http://localhost/metro/assets/pages/media/users/Indiana_Jones.jpg" width="50px" height="50px">
                                                                      <img class="todo-userpic pull-left" src="http://localhost/metro/assets/pages/media/users/Indiana_Jones.jpg" width="50px" height="50px">
                                            													<span class="todo-username pull-left" id="assigned_to"></span>

                                            											</div>
                                            									</div>

                                            							</div>
                                                          <hr>
                                            							<!-- END TASK HEAD -->
                                            							<!-- TASK TITLE -->
                                            							<div class="form-group">
                                            									<div class="col-md-12">
                                            											<input type="text" class="form-control todo-taskbody-tasktitle" placeholder="Task Title..." id="task_name" value=""> </div>
                                            							</div>
                                            							<!-- TASK DESC -->
                                            							<div class="form-group">
                                            									<div class="col-md-12">
                                            											<textarea class="form-control todo-taskbody-taskdesc" rows="8" placeholder="Task Description..." id="task_body"></textarea>
                                            									</div>
                                            							</div>

                                            							<!-- END TASK DESC -->
                                            							<!-- TASK DUE DATE -->
                                            							<div class="form-group" >
                                            									<label class="col-md-12">Due Date</label><br>
                                            									<div class="col-md-5">
                                            											<div id="datepicker" class="date-picker" data-date="' . $task->due_date . '" data-date-format="yyyy-mm-dd"> </div>
                                            											<input type="hidden" id="my_hidden_input" name="due_date">
                                            									</div>
                                            							</div>


                                            							<div class="form-actions todo-form-actions">
                                            									<button class="btn btn-circle btn-sm green" id="update_task">Save Changes</button>
                                            									<button class="btn btn-circle btn-sm btn-default">Cancel</button>
                                            							</div>
                                            					</div>'
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END TODO CONTENT -->
                            </div>
                        </div>
                        <!-- END PAGE CONTENT-->
                    </div>
                    <div id="todo-members-modal" class="modal fade" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                        <h4 class="modal-title">Select a Member</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="#" class="form-horizontal" role="form">
                                            <div class="form-group">
                                                <label class="control-label col-md-4">Selected Members</label>
                                                <div class="col-md-8">
                                                    <select id="select2_sample2" class="form-control select2 select-height" multiple>
                                                        <optgroup label="Senior Developers">
                                                            <option>Rudy</option>
                                                            <option>Shane</option>
                                                            <option>Sean</option>
                                                        </optgroup>
                                                        <optgroup label="Technical Team">
                                                            <option>Kathy</option>
                                                            <option>Luke</option>
                                                            <option>John</option>
                                                            <option>Darren</option>
                                                        </optgroup>
                                                        <optgroup label="Design Team">
                                                            <option>Bob</option>
                                                            <option>Carolina</option>
                                                            <option>Randy</option>
                                                            <option>Michael</option>
                                                        </optgroup>
                                                        <optgroup label="Testers">
                                                            <option>Chris</option>
                                                            <option>Louis</option>
                                                            <option>Greg</option>
                                                            <option>Ashe</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                        <button class="btn green" data-dismiss="modal">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->

        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2014 &copy; Metronic by keenthemes.
                <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->
        <!--[if lt IE 9]>
<script src="http://localhost/metro/assets/global/plugins/respond.min.js"></script>
<script src="http://localhost/metro/assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="http://localhost/metro/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="http://localhost/metro/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="http://localhost/metro/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="http://localhost/metro/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="http://localhost/metro/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="http://localhost/metro/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="http://localhost/metro/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="http://localhost/metro/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="http://localhost/metro/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="http://localhost/metro/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="http://localhost/metro/assets/apps/scripts/todo-2.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="http://localhost/metro/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="http://localhost/metro/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="http://localhost/metro/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->

        <script src="http://localhost/metro/assets/custom/custom.js" type="text/javascript"></script>


        <script type="text/javascript">
          $( document ).ready(function() {
            $('#my_hidden_input').val(
                $('#datepicker').datepicker('getFormattedDate')
            );



            $('#all_tasks').children('div').each(function () {

                status = $(this).data('tstatus');

                if(status === 'green') {

                  if(!$(this).hide()){
                      $(this).hide();
                  }

                }

            });


          });
        </script>

        <script type="text/javascript">
          $('#datepicker').datepicker();
          $('#datepicker').on("changeDate", function() {
            $('#my_hidden_input').val(
                $('#datepicker').datepicker('getFormattedDate')
            );
          });
        </script>

        <script type="text/javascript">

        $('#project_list > ul > li').click(function() {
            $('li').removeClass('active');
            $(this).addClass('active');

            projectId = $(this).data('projectid');

          //  alert(projectId);

            //run ajax
            $.post('<?php echo base_url('index.php/Tasks/ajax_tasks') ?>', {projectId:projectId}, function(r){

                $('#all_tasks').html(r.html);

                $('#all_tasks').children('div').each(function () {

                    status = $(this).data('tstatus');

                    if(status === 'green') {

                      if(!$(this).hide()){
                          $(this).hide();
                      }

                    }

                });


                $('#task_form').html(r.form);

                // initialize datepicker again
                $('#datepicker').datepicker();
                $('#my_hidden_input').val(
                    $('#datepicker').datepicker('getFormattedDate')
                );

                $('#datepicker').on("changeDate", function() {
                  $('#my_hidden_input').val(
                      $('#datepicker').datepicker('getFormattedDate')
                  );
                });

            }, 'JSON');

          //  pName = $('.p_name').data('proname');
            pName = $(this).find('.p_name').data('proname');
            $('#rio').html(pName + ' tasks:');

            pBody = $(this).find('.p_body').data('probody');
            $('#pro_body').html(pBody + '<span id="p_id" data-projectid="'+projectId+'"></span>');

            $.post('<?php echo base_url('index.php/Tasks/ajax_count') ?>', {projectId:projectId}, function(r){

              $('#options').html(r.html);



            }, 'JSON');




        });

        </script>

        <script type="text/javascript">

        $(document).on("click", "#task_click",function() { // using "on" cause with the regular way it won't target elements created after the DOM

            taskId = $(this).data('taskid');

            tName = $(this).data('tname');
            $('#selected_task').html(tName);
            //alert(tName);

            $.post('<?php echo base_url('index.php/Tasks/ajax_task_form') ?>', {taskId:taskId}, function(r){


              $('#task_form').html(r.html);

              // initialize datepicker again
              $('#datepicker').datepicker();
              $('#my_hidden_input').val(
                  $('#datepicker').datepicker('getFormattedDate')
              );

              $('#datepicker').on("changeDate", function() {
                $('#my_hidden_input').val(
                    $('#datepicker').datepicker('getFormattedDate')
                );
              });

            }, 'JSON');


        });

        </script>

        <script type="text/javascript">

          $(document).on("click", "#new_task_submit",function() { // using "on" cause with the regular way it won't target elements created after the DOM

              var tName     =  $('#task_name').val();
              var tBody     =  $('#task_body').val();
              var dDate     =  $('#my_hidden_input').val();
              var projectId =  $('#p_id').data('projectid');
              var userId    =  $('#task_user_id').val();



              $.post('<?php echo base_url('index.php/Tasks/ajax_new_task') ?>', {tName:tName, tBody:tBody, dDate:dDate, projectId:projectId, userId:userId}, function(r){
window.location.href = 'http://localhost/metro/index.php/Tasks';


              }, 'JSON');

          });

        </script>

        <script type="text/javascript">

          $(document).on("click", "#update_task",function() { // using "on" cause with the regular way it won't target elements created after the DOM

              var tName     =  $('#task_name').val();
              var tBody     =  $('#task_body').val();
              var dDate     =  $('#my_hidden_input').val();
              var projectId =  $('#task_click').data('projectid');
              var taskId    =  $('#mark_complete').data('taskid');
              var userId    =  $('#task_user_id').val();

              //alert(tName + tBody + dDate + projectId + taskId);

              $.post('<?php echo base_url('index.php/Tasks/ajax_update_task') ?>', {tName:tName, tBody:tBody, dDate:dDate, projectId:projectId, taskId:taskId, userId:userId}, function(r){
window.location.href = 'http://localhost/metro/index.php/Tasks';
              }, 'JSON');

          });

        </script>

        <script type="text/javascript">

          $(document).on("click", "#mark_complete",function() { // using "on" cause with the regular way it won't target elements created after the DOM

              taskId = $(this).data('taskid');
              //alert(taskId);

              $.post('<?php echo base_url('index.php/Tasks/ajax_mark_complete') ?>', {taskId:taskId}, function(r){

                window.location.href = 'http://localhost/metro/index.php/Tasks';

              }, 'JSON');


          });

        </script>

        <script type="text/javascript">

            $(document).on("click", ".filter_pending",function() { // using "on" cause with the regular way it won't target elements created after the DOM


              var show = $(this).html().replace("Hide","Show");
              $(this).html(show);

              $(this).addClass('filter_pending2').removeClass('filter_pending');

              $('#all_tasks').children('div').each(function () {

                  status = $(this).data('tstatus');

                  if(status === 'yellow') {
                    $(this).hide();
                  }

              });


            });

            $(document).on("click", ".filter_pending2",function() { // using "on" cause with the regular way it won't target elements created after the DOM


              var hide = $(this).html().replace("Show","Hide");
              $(this).html(hide);

              $(this).addClass('filter_pending').removeClass('filter_pending2');

              $('#all_tasks').children('div').each(function () {

                  status = $(this).data('tstatus');

                  if(status === 'yellow') {
                    $(this).show();
                  }

              });

            });

            $(document).on("click", ".filter_completed",function() { // using "on" cause with the regular way it won't target elements created after the DOM


              var show = $(this).html().replace("Hide","Show");
              $(this).html(show);

              $(this).addClass('filter_completed2').removeClass('filter_completed');

              $('#all_tasks').children('div').each(function () {

                  status = $(this).data('tstatus');

                  if(status === 'green') {
                    $(this).hide();
                  }

              });

            });

            $(document).on("click", ".filter_completed2",function() { // using "on" cause with the regular way it won't target elements created after the DOM


              var hide = $(this).html().replace("Show","Hide");
              $(this).html(hide);

              $(this).addClass('filter_completed').removeClass('filter_completed2');

              $('#all_tasks').children('div').each(function () {

                  status = $(this).data('tstatus');

                  if(status === 'green') {
                    $(this).show();
                  }

              });

            });

            $(document).on("click", ".filter_overdue",function() { // using "on" cause with the regular way it won't target elements created after the DOM


              var show = $(this).html().replace("Hide","Show");
              $(this).html(show);

              $(this).addClass('filter_overdue2').removeClass('filter_overdue');

              $('#all_tasks').children('div').each(function () {

                  status = $(this).data('tstatus');

                  if(status === 'red') {
                    $(this).hide();
                  }

              });


            });

            $(document).on("click", ".filter_overdue2",function() { // using "on" cause with the regular way it won't target elements created after the DOM


              var hide = $(this).html().replace("Show","Hide");
              $(this).html(hide);

              $(this).addClass('filter_overdue').removeClass('filter_overdue2');

              $('#all_tasks').children('div').each(function () {

                  status = $(this).data('tstatus');

                  if(status === 'red') {
                    $(this).show();
                  }

              });


            });

        </script>

    </body>

</html>
