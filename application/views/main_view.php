<?php if($this->session->flashdata('errors')): ?>
  <div class="center-align">
    <p style="color: blue"><?php echo $this->session->flashdata('errors'); ?></p>
  </div>
<?php endif; ?>

<h4 style="text-align: center; margin-top: 25px;">Add New Record</h4>
  <div style="margin-top: 25px;" class="container">
    <form method="post" action="main/add_record" class="form-horizontal" onsubmit="return confirm('Are you sure you want to submit?');">
        <fieldset>
          <div class="form-group">
            <label class="col-md-4 control-label" for="business">Lead</label>
            <div class="col-md-5">
              <input class="form-control" type="text" id="b_name" name="b_name" placeholder="Enter lead name" pattern=".{2,}" required />
            </div>
          </div>
        </fieldset>
        <fieldset>
          <div class="form-group">
            <label class="col-md-4 control-label" for="type_id">Select Option</label>
            <div class="col-md-5">
              <select name="type_id" class="form-control">
                <option value="1">Call</option>
                <option value="2">Walk In</option>
                <option value="3">Appointment</option>
                <option value="4">Follow Up Appointment</option>
                <option value="5">New Presentation</option>
                <option value="6">No Show / Cancellation</option>
                <option value="7">CLOSED SALE</option>
              </select>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <div class="form-group">
            <label class="col-md-4 control-label" for="entry_date">Date</label><br>
            <div class="col-md-5">
              <input class="form-control" name="entry_date" type="date" id="entry_date">
            </div>
          </div>
        </fieldset>
        <fieldset>
          <div class="form-group">
            <label class="col-md-4 control-label" for="notes">Notes</label>
            <div class="col-md-4">
              <textarea class="form-control" id="notes" name="notes"></textarea>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-8">
              <input type="submit" value="Submit" class="btn btn-primary"/>
              <button id="cancel" name="cancel" class="btn btn-danger">Cancel</button>
            </div>
          </div>
        </fieldset>
    </form>
  </div>

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript">
  $(function(){
    $("#b_name").autocomplete({
      minLength: 2,
      source: "http://localhost/muv-u/index.php/main/get_businesses" // "http://localhost/muv-u/index.php/main/get_businesses" http://gc200322197.computerstudi.es/
    });
  });
</script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

<script type="text/javascript">
  Date.prototype.toDateInputValue = (function() {
      var local = new Date(this);
      local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
      return local.toJSON().slice(0,10);
  });
  document.getElementById('entry_date').value = new Date().toDateInputValue();
</script>
