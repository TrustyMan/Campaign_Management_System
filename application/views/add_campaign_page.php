<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style_change_defaults.css">
<title></title>

</head>
<body>

<form class="myForm" method="post" enctype="application/x-www-form-urlencoded" action="<?php echo base_url();?>add_campaign/addCampaign" target="_self">
<h1>Add Campaign</h1><br/>
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
<label>Name of Campaign
<input type="text" name="c_name" pattern="^[A-Za-z0-9 _]*[A-Za-z0-9][A-Za-z0-9 _-`~^|:<.{>}]*$" required>
</label> 
</p><br/>

<p>
<label>Name of Verification Page
<input type="text" name="v_page_name" required>
</label> 
</p><br/>

<p>
<label>Keywords to use for Search
<input type="text" name="keywords" required>
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

<p>
<label>Site Url
<input type="url" name="site_url" required>
</label>
</p><br/>

<p style="display: none">
<label>client name
<input type="text" name="client" value="<?php echo $client;?>" required>
</label> 
</p>

<p><button style="float: right; margin-left: 10px">Submit</button></p>

</form>

</body>
</html>