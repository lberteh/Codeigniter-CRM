<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
    </title>
  </head>
  <body>

    <div class="container">

    	<h3 class="center-align">User Registration</h3>

    	<form method="post" action="" class="form-horizontal"> <?php // http://localhost/index.php/dash1/Register/to_register ?>

        <div class="form-group">
    			<label for="first_name">First Name</label>
    			<input class="form-control" name="first_name" required/>
    		</div>
        <div class="form-group">
    			<label for="last_name">Last Name</label>
    			<input class="form-control" name="last_name" required/>
    		</div>
    		<div class="form-group">
    			<label for="email">Email</label>
    			<input type="email" class="form-control" name="email" required/>
    		</div>
        <div class="form-group">
    			<label for="admin">Admin</label>
          <input type="hidden" name="admin" value="0" />
    			<input type="checkbox" class="form-control" id="admin" name="admin" value="1"/>
    		</div>
    		<div class="form-group">
    			<label for="password">Password</label>
    			<input type="password" name="password" required/>
    		</div>
    		<div class="form-group">
    			<label for="confirm">Confirm Password</label>
    			<input type="password" name="confirm" required/>
    		</div>
    		<div class="form-group">
    			<input type="submit" value="Register" class="btn btn-primary"/>
    		</div>

    	</form>
  	</div>
<?php var_dump($_POST);  ?>


  </body>
</html>
