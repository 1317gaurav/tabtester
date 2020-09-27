<?php

$url = 'data.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$gratitudes = json_decode($data); // decode the JSON feed
$to = $_POST['search'];
$msg1 = $_POST['textdata'];
 $message = '
 <div style="width:500px; height:250px; padding:20px;padding-bottom: 0px; text-align:center; border: 4px solid #91979a; background-color:#de5233;overflow-y:auto;">
       <span style="font-size:35px; font-weight:600; color:#4e4646; font-style:italic;font-family: fangsong;">A brick of gratitude</span>
      
       <br><br>
       <span style="font-size:18px;color:#f5f5f5;font-family: cursive;"><b>'.$msg1.'</b></span><br/><br/>
</i></span> <br/><br/>
       <span style="font-size:18px; color:#4e4646"><i>&nbsp;'.date("d/m/y").'</i></span><br>

</div>
    
 
 ';
// echo $name1;
// echo $name2;
$subject = "A Wall of Gratitude ";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From: 'The Great Wall Of Gratitude'\r\n"; 
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .="X-Mailer: smail-PHP ".phpversion()."";
    if(empty($msg1)){
}else{
mail($to,$subject,$message,$headers);
}


?>

<!DOCTYPE html>
<html>
<head>
  	<title>The Great Wall Of Gratitude 1.0.1</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
			<link rel="stylesheet" href="main.css" />
		<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />
  <style>
  #result {
   position: absolute;
   width: 100%;
   max-width: 870px;
   cursor: pointer;
   overflow-y: auto;
   max-height: 400px;
   box-sizing: border-box;
   z-index: 1001;
  }
  .link-class:hover{
   background-color:#f1f1f1;
  }
  </style>
</head>

    	<body style="background-image: url(bg-01.jpg);">

	
		
						
					
    
    
    
<!-- Add styling to the table -->
<?php


$rowDataArray = [];
$currentRowCount = 0;
$currentGratitudeCount = 0;
$row = '';
$brickColor = '#de5233';
foreach ($gratitudes as $gratitudeData) {
	if (($currentGratitudeCount%8) == 0) {
		array_push($rowDataArray, $row);
		// $rowDataArray[$currentRowCount] = $row;
		$row = '';
		// $currentRowCount++;
	}
	$row = $row . "<td style='background: ". $brickColor ."; height:107px; padding:15px; overflow:auto'>" . wordwrap($gratitudeData->gratitude,20,"<br>\n") . "</td>";

	$currentGratitudeCount++;
}
array_push($rowDataArray, $row);
$totalRows = count($rowDataArray);
?>

<div class="main-container animate__animated animate__fadeInUp animate__delay-3s" style="height:100%; margin-top:50px;">
<center><h1 style="font-size: 4em;
    font-family: 'Pattaya', sans-serif;
    margin: 0 0 .25em 0;
    margin-top:60px;
    
    color: #fff;" class="animate__animated animate__backInDown">The Great Wall Of Gratitude</h1>1.0.1</center>
<div style="overflow-y: scroll; height:600px;">
<?php
for ($totalRows = count($rowDataArray); $totalRows > 0; $totalRows--)
{
	echo "<div class='wall' style='max-width: 1300px; margin:-25px;
'>";
	if ($totalRows%2 == 0) {
		echo "</table>";
		echo "<table style='padding-left: 50px;table-layout: auto;
  width: 100%; '>";
		echo "<tr class='wall animate__animated animate__fadeInUp'>";
		echo $rowDataArray[$totalRows];

		echo "</tr>";
		echo "</table>";
	} else {
		echo "</table>";
		echo "<table style='padding-right: 50px;table-layout: auto;
  width: 100%; '>";
		echo "<tr class='wall animate__animated animate__fadeInUp animate__delay-3s'>";
		echo $rowDataArray[$totalRows];

		echo "</tr>";
		echo "</table>";
	}
	echo "</div>";
}

?>
  
</div>
</div>
			<footer id="footer" >
				<a href="#" class="info" style="border-radius: 113% 113% 0 0;
    background: #004c79;
    height: 6em;
    width: 5em;
    margin-bottom: -1.75em;"><img class='wall animate__animated animate__zoomIn animate__delay-2s' src="a.gif" height="80px;"></a>
				<div class="inner" style="background-color: #004c79">
					<div class="content">
						<h3 style="font-family: 'Pattaya', sans-serif;">The Great Wall Of Gratitude</h3>
						<p>“A unique aspect of The Great Wall of Gratitude is that it allows you to see what other people are grateful for as well as share your own “good things”. Sometimes it’s hard to remember all that we can be grateful for, and reading about what others are grateful for can be a good reminder of the positive things in life that we can be thankful for as well.”</p>
					</div>
					
					
						
                        <form method="post" style="margin: -64px 0 2em 0;">
  	<br>
  	<br>
  	<br>
                            <h3 style="color: #fff;font-family: 'Pattaya', sans-serif;">Want to add your gratitude to the wall?</h3>
                            <div class="form-group">
				    <input type="text" name="search" id="search1" placeholder="Tag here..."  class="form-control" style="background-color:#df5332;color: #fefa21;border-radius:0px; border:1px solid white" />  
                              <datalist id='datalist'></datalist>
                              <ul class="list-group" id="result"></ul>
    <textarea class="form-control" id="grat" name="textdata" style="background-color:#df5332;color: #fefa21;" border: tomato;
    border-radius: 0px;"  rows="3" placeholder="Share your gratitude here...." required></textarea><br>
  </div>
  <!--<button type="submit" class="btn btn-primary">Submit</button>-->
   <input type="submit"  name="submit" value="Add"  style="width: 125px;
width: 125px;
    padding-left: 41px;
    background-color: #e05432;
    color: #ffffff;
    font-family: 'Pattaya', sans-serif;
    font-size: 24px;
    margin-top: -87px;
    height: 59px;">
  </form>

					</div>
			
			</footer>
			<style>
			    .ui-helper-hidden-accessible{
			        display:none;
			    }
			    #result ul {
    color: white;
    list-style: none;
    z-index: 99999;
    text-align: left;
    background: #004c79;
    border: 1px solid white;
    font-weight:bold;
    max-width: 372px;
    padding:5px;
}
#result ul li:hover{
    background: black;
}
			</style>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
						 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>


<script type="text/javascript">
$(document).ready(function(){
     console.log('test');
  $.ajax({
    url:'https://gaia.taboolasyndication.com/v1/users?active_status=true',
    type:"get",
    dataType: 'json',
    async: true,
    cache: true,
    success: function(data){
       // console.log(data.map(e => e.email));
        $( "#search1" ).autocomplete({
        source: data.map(e => e.email),
        appendTo: "#result"
        });
    },
});
});
</script>
<!--Start of Tawk.to Script-->

<script>
$(document).ready(function(){
 $.ajaxSetup({ cache: false });
 $('#search').keyup(function(){
  $('#result').html('');
  $('#state').val('');
  var searchField = $('#search').val();
  var expression = new RegExp(searchField, "i");
  $.getJSON('data.json', function(data) {
   $.each(data, function(key, value){
    if (value.name.search(expression) != -1 || value.location.search(expression) != -1)
    {
     $('#result').append('<li class="list-group-item link-class"><img src="'+value.image+'" height="40" width="40" class="img-thumbnail" /> '+value.name+' | <span class="text-muted">'+value.location+'</span></li>');
    }
   });   
  });
 });
 
 $('#result').on('click', 'li', function() {
  var click_text = $(this).text().split('|');
  $('#search').val($.trim(click_text[0]));
  $("#result").html('');
 });
});
</script>
<!--End of Tawk.to Script-->
</body>


<?php
	if(isset($_POST['textdata'])) {
	    
	    $to = $_POST['search'];
	    $newGratitude = $_POST['textdata'];
	    
	    $toUser = strstr($to, '.', true);
        $toUserName=ucfirst($toUser);  
        
        $gratitude = $toUserName.','.$newGratitude;
	
		$gratitude = array(
			"user" => "default", 
			"gratitude" => $gratitude
		);

		// Adding new gratitude to existing list
		array_push($gratitudes, $gratitude);

		// Encoding JSON
		$jsonData = json_encode($gratitudes);

		$fp = fopen('data.json', 'wa+');
		fwrite($fp, $jsonData);
		fclose($fp);
		echo("<meta http-equiv='refresh' content='1'>");
	}
?>
