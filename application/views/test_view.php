<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <h1 style="color:red">this is a test</h1>

  </body>
</html>



<div class="form-group"><label class="col-md-12">Assign to:   (Leave blank to assign to yourself)</label><div class="col-md-12"><select class="form-control todo-taskbody-tags" id="task_user_id">';

foreach ($users as $user):

$tasks_html .=	'<option value="'. $user->user_id . '">' . $user->first_name . ' ' . $user->last_name . '</option>';

endforeach;

$tasks_html .= '</select></div></div>
