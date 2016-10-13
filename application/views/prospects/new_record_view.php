<!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->

	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->

	<!-- start: CSS -->
  <link id="bootstrap-style" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->


	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->

	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->

	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->




</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><span>Metro</span></a>

				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white warning-sign"></i>
							</a>
							<ul class="dropdown-menu notifications">
								<li class="dropdown-menu-title">
 									<span>You have 11 notifications</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>
                            	<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">1 min</span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">7 min</span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">8 min</span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">16 min</span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">36 min</span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon yellow"><i class="icon-shopping-cart"></i></span>
										<span class="message">2 items sold</span>
										<span class="time">1 hour</span>
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-user"></i></span>
										<span class="message">User deleted account</span>
										<span class="time">2 hour</span>
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-shopping-cart"></i></span>
										<span class="message">New comment</span>
										<span class="time">6 hour</span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">yesterday</span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">yesterday</span>
                                    </a>
                                </li>
                                <li class="dropdown-menu-sub-footer">
                            		<a>View all notifications</a>
								</li>
							</ul>
						</li>
						<!-- start: Notifications Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white tasks"></i>
							</a>
							<ul class="dropdown-menu tasks">
								<li class="dropdown-menu-title">
 									<span>You have 17 tasks in progress</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">iOS Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim red">80</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">Android Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim green">47</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim yellow">32</div>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim greenLight">63</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim orange">80</div>
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all tasks</a>
								</li>
							</ul>
						</li>
						<!-- end: Notifications Dropdown -->
						<!-- start: Message Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white envelope"></i>
							</a>
							<ul class="dropdown-menu messages">
								<li class="dropdown-menu-title">
 									<span>You have 9 messages</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>
                            	<li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	6 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	56 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	3 hours
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	yesterday
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	Jul 25, 2012
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all messages</a>
								</li>
							</ul>
						</li>
						<!-- end: Message Dropdown -->
						<li>
							<a class="btn" href="#">
								<i class="halflings-icon white wrench"></i>
							</a>
						</li>
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> Dennis Ji
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="login.html"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->

			</div>
		</div>
	</div>
	<!-- start: Header -->

		<div class="container-fluid-full">
		<div class="row-fluid">

			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="index.html"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>
						<li><a href="messages.html"><i class="icon-envelope"></i><span class="hidden-tablet"> Messages</span></a></li>
						<li><a href="tasks.html"><i class="icon-tasks"></i><span class="hidden-tablet"> Tasks</span></a></li>

						<li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->

			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>

			<!-- start: Content -->
			<div id="content" class="span10">

  			<ul class="breadcrumb">
  				<li>
  					<i class="icon-home"></i>
  					<a href="index.html">Home</a>
  					<i class="icon-angle-right"></i>
  				</li>
  				<li><a href="#">Dashboard</a></li>
  			</ul>


        <div class="row-fluid"></div>

      	<div class="span12"></div>


        <div class="row-fluid sortable">
				<div class="box span12" style="border-color: #2d89f0">
					<div class="box-header blue" data-original-title>

						<h2><i class="halflings-icon star white"></i><span class="break"></span><?php echo $business->b_name ?></h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up white"></i></a>
						</div>
					</div>
					<div class="box-content ">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
									<th>Name</th>
								  <th>Action</th>
								  <th>Outcome</th>
								  <th>Record Date</th>
									<th>Notes</th>
							  </tr>
						  </thead>
						  <tbody>
							  <?php foreach ($records as $record): ?>
									<tr>
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
				</div><!--/span-->

			</div><!--/row-->

      <div class="row-fluid">
        <div class="span12"></div>
      </div>

      <div class="row-fluid sortable">
      <div class="box span12">
        <div class="box-header" data-original-title>
          <h2><i class="halflings-icon edit"></i><span class="break"></span>whatever</h2>
          <div class="box-icon">
            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
          </div>
        </div>
        <div class="box-content">

          <form class="form-horizontal" action="<?php echo base_url();?>index.php/Prospects/add_new_record" method="post">
            <fieldset>
              <div class="control-group">
                <label class="control-label" for="business">Business</label>
                <div class="controls">
                  <input style="display:none" class="input-xlarge focused" type="text" id="b_name" name="b_name" value="<?php echo $business->b_name ?>" pattern=".{2,}" required>
									<span class="input-xlarge uneditable-input"><?php echo $business->b_name ?></span>
                </div>
              </div>

							<input style="display:none" type="text" id="dStart" name="dStart" value="" />

              <div class="control-group">
                <label class="control-label" for="type_id">Action</label>
                <div class="controls">
                  <select id="parent_selection" name="type_id" >
										<option value="">Select Action</option>
										<?php foreach($actions as $action): ?>
											<option value="<?php  echo $action->type_id; ?>"><?php echo $action->entry_type; ?></option>
										<?php endforeach; ?>
                  </select>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label" for="out_id">Outcome</label>
                <div class="controls">
                  <select id="child_selection" name="out_id" required></select>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label" >Date </label>
                <div class="controls">
                  <input type="date" class="input-xlarge" name="entry_date" id="entry_date" required>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label" for="notes">Notes</label>
                <div class="controls">
                  <textarea class="input-xlarge" id="notes" name="notes"></textarea>
                </div>
              </div>

              <div class="form-actions">
              <button type="submit" class="btn btn-primary">Save changes</button>
              <button class="btn">Cancel</button>
              </div>
            </fieldset>
            </form>

        </div>
      </div><!--/span-->

     </div><!--/row-->


     </div> <!--/.fluid-container-->

		<!-- end: Content -->
		</div> <!--/#content.span10-->

	</div> <!--/fluid-row-->

	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>

	<div class="clearfix"></div>



	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>

		</p>

	</footer>

	<!-- start: JavaScript-->

	<script type="text/javascript">
		Date.prototype.toDateInputValue = (function() {
				var local = new Date(this);
				local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
				return local.toJSON().slice(0,10);
		});
		document.getElementById('entry_date').value = new Date().toDateInputValue();
	</script>

  	<script src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.min.js"></script>

		<script language="javascript" type="text/javascript">
		$(document).ready(function(){

		//let's create arrays
		var one = [
		    {display: "No Interest", value: "1" }, {display: "Needs Follow Up", value: "2" }, {display: "Appointment Booked", value: "3" }];

		var two = [
		    {display: "No Deal", value: "4" }, {display: "Needs Follow Up", value: "5" },
		    {display: "New Appointment Booked", value: "6" }, {display: "CLOSED SALE", value: "7" }];

		var three = [
		    {display: "No Interest", value: "1" }, {display: "Needs Follow Up", value: "8" }, {display: "Appointment Booked", value: "3" }];

		var four = [
		    {display: "N/A", value: "11" }];


		//If parent option is changed
		$("#parent_selection").change(function() {
		        var parent = $(this).val(); //get option value from parent

		        switch(parent){ //using switch compare selected option and populate child
		              case '1':
		                list(one);
		                break;
		              case '2':
		                list(one);
		                break;
		              case '3':
		                list(two);
		                break;
		              case '4':
		                list(three);
		                break;
		              case '5':
		                list(two);
		                break;
		              case '6':
		                list(two);
		                break;
		              case '7':
		                list(two);
		                break;
		              case '8':
		                list(two);
		                break;
		              case '9':
		                list(one);
		                break;
									case '13':
		                list(three);
		                break;
		            default: //default child option is blank
		                $("#child_selection").html('');
		                break;
		           }
		});

		//function to populate child select box
		function list(array_list)
		{
		    $("#child_selection").html(""); //reset child options
		    $(array_list).each(function (i) { //populate child options
		        $("#child_selection").append("<option value=\""+array_list[i].value+"\">"+array_list[i].display+"</option>");
		    });
		}

		});
		</script>

    <script src="<?php echo base_url(); ?>assets/js/jquery-migrate-1.0.0.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.0.custom.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/jquery.ui.touch-punch.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/modernizr.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/jquery.cookie.js"></script>

    <script src='<?php echo base_url(); ?>assets/js/fullcalendar.min.js'></script>

    <script src='<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js'></script>

    <script src="<?php echo base_url(); ?>assets/js/excanvas.js"></script>
  	<script src="<?php echo base_url(); ?>assets/js/jquery.flot.js"></script>
  	<script src="<?php echo base_url(); ?>assets/js/jquery.flot.pie.js"></script>
  	<script src="<?php echo base_url(); ?>assets/js/jquery.flot.stack.js"></script>
  	<script src="<?php echo base_url(); ?>assets/js/jquery.flot.resize.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/jquery.chosen.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/jquery.uniform.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/jquery.cleditor.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/jquery.noty.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/jquery.elfinder.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/jquery.raty.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/jquery.iphone.toggle.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/jquery.uploadify-3.1.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/jquery.gritter.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/jquery.imagesloaded.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/jquery.masonry.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/jquery.knob.modified.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/jquery.sparkline.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/counter.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/retina.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
  <!-- end: JavaScript-->




</body>
</html>
