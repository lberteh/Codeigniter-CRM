

$(document).ready(function() {
    var max_fields      = 100; //maximum input boxes allowed
    var wrapper         = $("#add_prog_wrapper"); //Fields wrapper
    var add_button      = $("#add_prog"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
          //  $(wrapper).append(); //add input box
            $( "#first_input" ).after('  <div class="form-group" id="test"><label class="col-md-3 control-label"></label><div class="col-md-4"><div class="input-group"><input type="text" class="form-control" name="program[]" placeholder="Enter program name" required><span class="input-group-btn remove_field" style="padding-left: 10px;"><button class="btn red" type="button">X</button></span></div></div></div>');
        }
    });

    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        //e.preventDefault(); $(this).parent('div').remove(); x--;
        e.preventDefault(); $('#test').remove(); x--;
    })
});

$( document ).ready(function() {
  $('#my_hidden_input').val(
      $('#datepicker').datepicker('getFormattedDate')
  );
});


  $('#datepicker').datepicker();
  $('#datepicker').on("changeDate", function() {
    $('#my_hidden_input').val(
        $('#datepicker').datepicker('getFormattedDate')
    );
  });
