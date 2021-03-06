<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style_change_defaults.css">
<style type="text/css">
	[data-tip] {
	position:relative;
	/*padding-left: 700px;*/

}
[data-tip]:before {
	content:'';
	/* hides the tooltip when not hovered */
	display:none;
	content:'';
	border-left: 5px solid transparent;
	border-right: 5px solid transparent;
	border-bottom: 5px solid #1a1a1a;	
	position:absolute;
	top:30px;
	left:35px;
	z-index:8;
	font-size:0;
	line-height:0;
	width:0;
	height:0;
}
[data-tip]:after {
	display:none;
	content:attr(data-tip);
	position:absolute;
	top:35px;
	left:0px;
	padding:5px 8px;
	background:#1a1a1a;
	color:#fff;
	z-index:9;
	font-size: 0.9em;
	height:18px;
	line-height:18px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	white-space:nowrap;
	word-wrap:normal;
}
[data-tip]:hover:before,
[data-tip]:hover:after {
	display:block;
}
</style>

</head>
<body>

<form class="myForm" method="post" enctype="application/x-www-form-urlencoded" action="<?php echo base_url();?>add_campaign/addCampaign" target="_self">
<h1>Add Campaign</h1><br/>

<p>
<label>Name of Campaign<q style="width:30em" data-tip="Only $-_.+!*'()[]& are allowed">
<input type="text" name="c_name" pattern="^[A-Za-z0-9 _$-_.+!*()]*[A-Za-z0-9][A-Za-z0-9 _$-_.+!*()]*$" required>
</label></q>
</p><br/>

<p>
<label>Keywords to use for Search
<input type="text" name="keywords" required>
</label> 
</p><br/>

<p>
<label>Site Url
<input type="url" name="site_url" required>
</label>
</p><br/>

<p>
<label>Page Title to search for in Results
<input type="text" name="page_title" required>
</label> 
</p><br/>

<p>
<label>URL of Verification Site
<input type="url" name="v_url" required>
</label> 
</p><br/>

<p>
<label>Name of Verification Page
<input type="text" name="v_page_name" required>
</label> 
</p><br/>

<p>
<label>Target Location
<select id="select_location" name="target_location">
	<?php
		$location = ["US", "UK", "NZ", "JP", "CN"];
		foreach ($location as $key => $value) {
		 	echo "<option>".$value."</option>";
		 }

	?>
</select>
</label> 
</p><br/>

<p>
<label>Bid
<input type="number" name="bid" value="" required>
</label> 
</p><br/>

<p>
<label>Speed
<input type="number" name="speed" value="" required>
</label> 
</p><br/>

<p>
<label>Positions
<input type="number" name="positions" value="" required>
</label> 
</p><br/>

<p>
<label>Target per day
<input type="number" name="target_per_day" value="" required>
</label> 
</p><br/>

<p>
<label style="float: left; margin-left:11em" class="radio-inline">Select Search Engine
<input style="width:3em; float:initial;" type="radio" name="search_engine" value="google" checked>Google
</label> 
<label style="float: left" class="radio-inline">
<input style="width:3em; float:initial;" type="radio" name="search_engine" value="yahoo">Yahoo
</label> 
<label style="float: left" class="radio-inline">
<input style="width:3em; float:initial;" type="radio" name="search_engine" value="bing">Bing
</label>
</p><br/><br>



<p style="display: none">
<label>client name
<input type="text" name="client" value="<?php echo $client;?>" required>
</label> 
</p>

<p><button style="float: right; margin-left: 10px">Submit</button></p>

</form>

</body>
</html>