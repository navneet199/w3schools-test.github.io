<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("input").select(function(){
    $("input").after(" Text marked!");
  });

function run(){
	alert('helo');
}

  $("button").click(function(){
    $("input").trigger("select");
  });
});
</script>
</head>
<body>
<form id= "upload_file_form" enctype="multipart/form-data">
<input type="file" value="Hello World" name="file1" id="file1"><br><br>
<input type="text" value="5" id="new2" name="new2">
<button type="submit">Trigger the select event for the input field</button>
</form>
</body>
</html>
<script>
$("#file1").on('change', function(e){ 
  e.preventDefault();

  var form_data = new FormData($('#upload_file_form')[0]);
  $.ajax({
      type:'POST',
      url:'test.php',
      processData: false,
      contentType: false,
      async: false,
      cache: false,
      data : form_data,
      success: function(response){

      }
  });
});
</script>