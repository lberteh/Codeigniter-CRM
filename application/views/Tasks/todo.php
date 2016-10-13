
                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <a href="#">Todo</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Tasks</span>
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
                    <h3 class="page-title"><strong>Tasks</strong>

                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
        <div class="todo-container">
            <div class="row">
                <div class="col-md-5">
                    <ul class="todo-projects-container">
                        <li class="todo-padding-b-0">
                            <div class="todo-head">
                                <button class="btn btn-square btn-sm green todo-bold">Add Project</button>
                                <h3>Projects</h3>
                                <p>4 Waiting Attention</p>
                            </div>
                        </li>
                        <?php foreach ($projects as $project): ?>
                          <li class="todo-projects-item" data-projectid="<?php echo $project->project_id ?>">
                              <h3 class="p_name" data-proname="<?php echo $project->project_name ?>"><?php echo $project->project_name ?></h3>
                              <p><?php echo $project->project_body ?></p>
                              <div class="todo-project-item-foot">
                                  <p class="todo-red todo-inline">Project #<?php echo $project->project_id ?></p>
                                  <p class="todo-inline todo-float-r">32 Members
                                      <a class="todo-add-button" href="<?php echo base_url(); ?>Tasks/new_task/<?php echo $project->project_id ?>" data-toggle="modal">+</a> 
                                  </p>
                              </div>
                          </li>
                          <div class="todo-projects-divider"></div>
                        <?php endforeach; ?>

                    </ul>
                </div>
                <div class="col-md-7">
                    <div class="todo-tasks-container">
                        <div class="todo-head">
                            <button class="btn btn-square btn-sm red todo-bold" data-toggle="modal" href="#todo-task-modal">New Task</button>
                            <h3 id="tasks_for">
                                <span class="todo-grey">Tasks for:</span> </h3>
                            <p class="todo-inline">22 Members
                                <a class="todo-add-button" href="#todo-members-modal" data-toggle="modal">+</a>
                            </p>
                        </div>

                        <div class="portlet-title tabbable-line">

                            <ul class="nav nav-tabs">
                                <li>
                                    <a href="#portlet_tab1" data-toggle="tab"> Active </a>
                                </li>
                                <li>
                                    <a href="#portlet_tab2" data-toggle="tab"> Completed </a>
                                </li>
                                <li class="active">
                                    <a href="#portlet_tab3" data-toggle="tab"> All Tasks </a>
                                </li>
                            </ul>
                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <div class="tab-pane" id="portlet_tab1">
                                    <ul class="todo-tasks-content">
                                      <table>
                                        <tbody>
                                          <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                <input type="checkbox" class="checkboxes" value="1" />
                                                                <span></span>
                                                            </label>
                                          </td>
                                          <td>
                                            <li class="todo-tasks-item">
                                                <h4 class="todo-inline">
                                                    <a data-toggle="modal" href="#todo-task-modal">Design for full featured ToDo Page with something</a>
                                                </h4>

                                                <p class="todo-inline todo-float-r">Bob,
                                                    <span class="todo-red">TODAY</span>
                                                </p>
                                                <p style="padding-top:5px;">
                                                  asdiuahduiasd esfsfsd asdiuahduiasd esfsfsd asdiuahduiasd esfsfsd asdiuahduiasd esfsfsd
                                                </p>
                                            </li>
                                          </td>
                                        </tbody>
                                      </table>

                                        <li class="todo-tasks-item">
                                            <h4 class="todo-inline">
                                                <a data-toggle="modal" href="#todo-task-modal">Owl carousel pagination animation issue(clients logo, testimonials)</a>
                                            </h4>
                                            <p class="todo-inline todo-float-r">Shane,
                                                <span class="todo-red">TODAY</span>
                                            </p>
                                        </li>
                                        <li class="todo-tasks-item">
                                            <h4 class="todo-inline">
                                                <a data-toggle="modal" href="#todo-task-modal">Non fixed Home 2 header layout</a>
                                            </h4>
                                            <p class="todo-inline todo-float-r">Sean,
                                                <span class="todo-green">01 OCT</span>
                                            </p>
                                        </li>
                                        <li class="todo-tasks-item">
                                            <h4 class="todo-inline">
                                                <a data-toggle="modal" href="#todo-task-modal">Sample Images for Mega Menu Components Category</a>
                                            </h4>
                                            <p class="todo-inline todo-float-r">Shane,
                                                <span class="todo-green">03 OCT</span>
                                            </p>
                                        </li>
                                        <li class="todo-tasks-item">
                                            <h4 class="todo-inline">
                                                <a data-toggle="modal" href="#todo-task-modal">Browser & Device Compatibility</a>
                                            </h4>
                                            <p class="todo-inline todo-float-r">Bob,
                                                <span class="todo-green">07 OCT</span>
                                            </p>
                                        </li>

                                    </ul>
                                </div>



                                <div class="tab-pane" id="portlet_tab2">

                                  <ul class="todo-tasks-content">

                                      <li class="todo-tasks-item">
                                          <h4 class="todo-inline">
                                              <a data-toggle="modal" href="#todo-task-modal">Welcome to the hotel California</a>
                                          </h4>
                                          <p class="todo-inline todo-float-r">Bob,
                                              <span class="todo-red">TODAY</span>
                                          </p>
                                      </li>
                                      <li class="todo-tasks-item">
                                          <h4 class="todo-inline">
                                              <a data-toggle="modal" href="#todo-task-modal">Talking 'bout my generation</a>
                                          </h4>
                                          <p class="todo-inline todo-float-r">Shane,
                                              <span class="todo-red">TODAY</span>
                                          </p>
                                      </li>

                                  </ul>
                                </div>


                                <div class="tab-pane active" id="portlet_tab3">
                                  <ul class="todo-tasks-content" id="all_tasks">
                                    <li class="todo-tasks-item">
                                        <h4 class="todo-inline">
                                          Please, select a project to see the tasks.
                                        </h4>
                                    </li>
                                  </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div id="todo-task-modal" class="modal fade" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content scroller" style="height: 80x'%;" data-always-visible="1" data-rail-visible="0">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <button class="btn btn-square btn-sm green todo-bold todo-inline">Complete Task</button>
                        <p class="todo-task-modal-title todo-inline">Due:
                            <input class="form-control input-inline input-medium date-picker todo-task-due todo-inline" size="16" type="text" value="10/01/2015" />
                        </p>
                        <p class="todo-task-modal-title todo-inline">Assign:
                            <a class="todo-inline todo-task-assign" href="#todo-members-modal" data-toggle="modal">Luke</a>
                        </p>
                    </div>
                    <div class="modal-body todo-task-modal-body">
                        <h3 class="todo-task-modal-bg">Sample Images for Mega Menu Components Category</h3>
                        <p class="todo-task-modal-bg"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                            lobortis nisl ut aliquip ex ea commodo consequat.
                            <br>
                            <br> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                            suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                            <br>
                            <br> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                            suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                        <h4>Attach File
                            <a class="todo-add-button" href="javascrip:;">+</a>
                        </h4>
                        <p class="todo-task-file">
                            <i class="fa fa-file-o todo-grey"></i> menu_screen.jpg
                            <i class="fa fa-times todo-remove-file"></i>
                        </p>
                        <p class="todo-task-file">
                            <i class="fa fa-file-o todo-grey"></i> comments.jpg
                            <i class="fa fa-times todo-remove-file"></i>
                        </p>
                    </div>

                    <div class="modal-footer">
                        <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                        <button class="btn green" data-dismiss="modal">Submit</button>
                    </div>
                </div>
            </div>
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
<script src="http://localhost/metro/assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="http://localhost/metro/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="http://localhost/metro/assets/apps/scripts/todo.min.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="http://localhost/metro/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="http://localhost/metro/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->


<script type="text/javascript">
  // sets the first project as active
  $( document ).ready(function() {
  //  $( ".todo-projects-container li:nth-child(2)" ).addClass( "todo-active" );
  });

</script>

<script type="text/javascript">

    // sets the clicked project to be active
    $('.todo-projects-container > li').click(function() {
        $('li').removeClass('todo-active');
        $(this).addClass('todo-active');

        projectId = $(this).data('projectid');

      //  alert(projectId);

        //run your ajax
        $.post('<?php echo base_url('index.php/Tasks/test') ?>', {projectId:projectId}, function(r){
            //your phpfile.php should echo a json of the tasks
            //see example below
            $('#all_tasks').html(r.html);
        }, 'JSON');

      //  pName = $('.p_name').data('proname');
        pName = $(this).find('.p_name').data('proname');
        $('#tasks_for').html('<span class="todo-grey">Tasks for:  </span>' + pName);

    });

</script>

</body>

</html>
