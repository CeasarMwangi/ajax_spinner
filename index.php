<?php
/**
 * Created by PhpStorm.
 * User: MwangiKanja
 * Date: 9/2/2016
 * Time: 11:48 AM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>

</head>
<body>
<div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>

<button>Get External Content</button>
<h1>hello by kanja</h1>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="src/loadingoverlay.min.js"></script>
<script>
/*
Display a LoadingOverlay during each Ajax request
*/



$(document).ajaxStart(function(){
    $.LoadingOverlay("show");
});
$(document).ajaxStop(function(){
    $.LoadingOverlay("hide");
});

$("button").click(function(){
    $.ajax({url: "sleep.php", success: function(result){
        $("#div1").html(result);
    }});
});

</script>
</body>
</html>
<?php



?>
