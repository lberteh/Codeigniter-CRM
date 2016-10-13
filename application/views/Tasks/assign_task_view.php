<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->


                <!-- BEGIN PAGE CONTENT BODY -->

                    <div class="container">

                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                          <div class="row ">
                              <div class="col-md-12">
                                <?php if(isset($flash)) {
                                  echo $flash;
                                }?>
                                <?php echo validation_errors(); ?>
                                  <!-- BEGIN SAMPLE FORM PORTLET-->
                                  <div class="portlet light ">
                                      <div class="portlet-title">
                                          <div class="caption">
                                              <i class="icon-tag font-dark"></i>
                                              <span class="caption-subject font-dark bold uppercase">Assign to task</span>
                                          </div>

                                      </div>


                                      <div class="portlet-body">

                                        <?php $form_location = base_url()."Tasks/assign_task/".$task_id; ?>
                                        <form action="<?php echo $form_location ?>" method="post" class="form-horizontal">



                                          <div class="form-body" >




                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Assign to:</label>
                                                <div class="col-md-4">
                                                    <select class="form-control" name="user_id" >
                                                      <option value="" selected disabled hidden style='display: none'>Please select an option...</option>
                                                      <?php foreach ($users as $user): ?>
                                                        <option value="<?php echo $user->user_id ?>"><?php echo $user->first_name . ' ' . $user->last_name ?></option>
                                                      <?php endforeach; ?>

                                                    </select>
                                                </div>
                                            </div>


                                              <div class="form-actions">
                                                  <div class="row">
                                                      <div class="col-md-offset-3 col-md-9">
                                                          <button type="submit" name="submit" value="assign" class="btn green">Assign</button>
                                                          <button type="submit" name="submit" value="back" class="btn btn-default">Back</button>
                                                      </div>
                                                  </div>
                                              </div>
                                          </form>


                                      </div>

                                  </div>
                                </div>
                                  <hr>
                                  <div class="row">

                                    <div class="portlet box blue">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-tag"></i>Currently Assigned Users:</div>
                                        <div class="tools">
                                            <a href="javascript:;" class="collapse"> </a>
                                            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                            <a href="javascript:;" class="reload"> </a>
                                            <a href="javascript:;" class="remove"> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th> # </th>
                                                        <th> Name </th>
                                                        <th> Remove </th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                      <?php $count = 0; ?>
                                                      <?php foreach ($assigned->result() as $row): ?>
                                                      <?php $count++ ?>
                                                        <tr>
                                                          <td><?php echo $count ?> </td>
                                                          <td><?php echo $row->first_name . ' ' . $row->last_name ?></td>
                                                          <td> <a href="<?php echo base_url(); ?>Tasks/unassign/<?php echo $row->id ?>/<?php echo $row->task_id ?>" class="btn btn-icon-only red">
                                                              <i class="fa fa-trash"></i>
                                                          </a> </td>
                                                        </tr>
                                                      <?php endforeach; ?>



                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                              </div>
                        </div>
                        <!-- END PAGE CONTENT INNER -->
                    </div>
                </div>
                <!-- END PAGE CONTENT BODY -->
                <!-- END CONTENT BODY -->
    </div>
            <!-- END CONTENT -->


        <!-- END CONTAINER -->


</div> </div> </div>
