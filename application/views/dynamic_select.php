<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8' />
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script language="javascript" type="text/javascript">
$(document).ready(function(){

//let's create arrays
var one = [
    {display: "No Interest", value: "1" }, {display: "Needs Follow Up", value: "2" }, {display: "Appointment Booked", value: "3" }];

var two = [
    {display: "No Deal", value: "4" }, {display: "Needs Follow Up", value: "5" },
    {display: "New Appointment Booked", value: "6" }, {display: "CLOSED SALE", value: "7" }];

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
              case '10':
                list(one);
                break;
              case '3':
                list(two);
                break;
              case '4':
                list(two);
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
                list(two);
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

</head>
<body>
<div class="wrapper">
Category : <select name="parent_selection" id="parent_selection">
    <option value="">-- Please Select --</option>
    <option value="1">Call</option>
    <option value="2">Walk In</option>
    <option value="3">Presentation</option>
</select>
<select name="child_selection" id="child_selection">
</select>
</div>
</body>
</html>
