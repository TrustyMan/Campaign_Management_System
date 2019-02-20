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

<form class="myForm" method="post" enctype="application/x-www-form-urlencoded" action="<?php echo base_url();?>edit/saveCampaign/<?php echo $campaign[0]->id;?>" target="_self">
<h1>Edit Campaign</h1><br/>

<p>
<label>Campaign Name
<input type="text" pattern="^[A-Za-z0-9 _]*[A-Za-z0-9][A-Za-z0-9 _-`~^|:/<.{>}]*$" name="c_name" value="<?php echo $campaign[0]->c_name?>" required>
</label> 
</p><br/>

<p>
<label>Keywords to use for Search
<input type="text" name="keywords" value="<?php echo $campaign[0]->keywords?>" required>
</label> 
</p><br/>

<p>
<label>Site Url
<input type="url" name="site_url" value="<?php echo $campaign[0]->site_url?>" required>
</label>
</p><br/>

<p>
<label>Page Title to search for in Results
<input type="text" name="page_title" value="<?php echo $campaign[0]->page_title?>" required>
</label> 
</p><br/>

<p>
<label>URL of Verification Site
<input type="url" name="v_url" value="<?php echo $campaign[0]->v_url?>" required>
</label> 
</p><br/>

<p>
<label>Name of Verification Page
<input type="text" name="v_page_name" value="<?php echo $campaign[0]->v_page_name?>" required>
</label> 
</p><br/>

<p>
<label style="float: left; margin-left:11em" class="radio-inline">Select Search Engine
	<?php
		echo "<input style='width:3em; float:initial;' type='radio' name='search_engine' value='google' ";
		if($campaign[0]->search_engine == 'google') echo "checked";
		echo ">Google"; 
	?>
</label> 
<label style="float: left" class="radio-inline">
	<?php
		echo "<input style='width:3em; float:initial;' type='radio' name='search_engine' value='yahoo' ";
		if($campaign[0]->search_engine == 'yahoo') echo "checked";
		echo ">Yahoo"; 
	?>
<!-- <input style="width:3em; float:initial;" type="radio" name="search_engine" value="yahoo">Yahoo -->
</label> 
<label style="float: left" class="radio-inline">
	<?php
		echo "<input style='width:3em; float:initial;' type='radio' name='search_engine' value='bing' ";
		if($campaign[0]->search_engine == 'bing') echo "checked";
		echo ">Bing"; 
	?>
<!-- <input style="width:3em; float:initial;" type="radio" name="search_engine" value="bing">Bing -->
</label>
</p><br/><br>



<p style="display: none">
<label>client name
<input type="text" name="client" value="<?php echo $campaign[0]->client;?>" required>
</label> 
</p>

<p><a href="/view_campaign"><button style="float: right">Submit</button></a></p>

</form>

</body>
</html>