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

      <h3><a href="<?php echo base_url(); ?>index.php/Admin">back to home</a></h3>

        <h1 class="text-center">Projects</h1><br>

        <table class="table table-hover">

          <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/Projects/create">Create Project</a><br>

          <thead><br>
            <tr>
              <th>Project Name</th>
              <th>Project Body</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($projects as $project): ?>
              <tr>
                <td> <a href="<?php echo base_url(); ?>index.php/Projects/display/<?php echo $project->project_id; ?>"><?php echo $project->project_name; ?></a> </td>
                <td> <?php echo $project->project_body; ?> </td>
                <td> <a href="<?php echo base_url(); ?>index.php/Projects/edit/<?php echo $project->project_id; ?>">Edit</a> </td>
              </tr>


            <?php endforeach; ?>
          </tbody>
        </table>


    </div>



  </body>
</html>
