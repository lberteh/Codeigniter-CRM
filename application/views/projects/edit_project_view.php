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

      <div class="col-xs-4">
        <h1>Edit Project</h1>

        <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/Projects/edit/<?php echo $project_data->project_id ?>" method="post">
          <div class="form-group">
            <label for="project_name">Project Name:</label>
            <input class="form-control" name="project_name" value="<?php echo $project_data->project_name; ?>" required/>
          </div>
          <div class="form-group">
            <label for="project_body">Project Description:</label>
            <textarea class="form-control"  name="project_body" required><?php echo $project_data->project_body ?></textarea>
          </div>
          <div class="form-group">
      			<input type="submit" value="Update" class="btn btn-primary"/>
      		</div>

        </form>
      </div>


    </div>



  </body>
</html>
