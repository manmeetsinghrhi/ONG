<!DOCTYPE html>
<html lang="en">
<head>
<meta  charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<title></title>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700" rel="stylesheet">
<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' rel='stylesheet' type='text/css'>

<link href="css/code.css" rel="stylesheet" type="text/css" />
<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
<script>
$(document).ready(function(){
    $(".privacy").click(function(){
        $(".privacy_hover").slideToggle();
    });
    $(".privacy_hover span").click(function(){
        $(".privacy_hover").hide("fast");
    });
	
	 $(".winner-button").click(function(){
        $(".winner_lists").slideToggle();
    });
    $(".winner_lists span").click(function(){
        $(".winner_lists").hide("fast");
    });
});
</script>
</head>