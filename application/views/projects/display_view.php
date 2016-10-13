<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  </head>
  <body>

    <div class="container">

        <div class="col-xs-9">

          <h1>Project Name: <?php echo $project_data->project_name; ?></h1><br>

          <p>Date Created: <?php echo $project_data->date_created; ?> </p>

          <h3>Description:</h3>

          <p> <?php echo $project_data->project_body; ?> </p>



        </div>


        <div class="col-xs-3 pull-right">

          <ul class="list-group">

            <h3 class="text-center">Project Actions</h3>

            <li class="list-group-item"><a href="#">Create Task</a></li>
            <li class="list-group-item"><a href="<?php echo base_url(); ?>index.php/Projects/edit/<?php echo $project_data->project_id; ?>">Edit Project</a></li>
            <li class="list-group-item"><a href="#">Delete Project</a></li>


          </ul>


        </div>


    </div>



  </body>
</html>
