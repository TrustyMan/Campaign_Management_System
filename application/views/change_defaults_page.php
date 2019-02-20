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

<form class="myForm" method="post" enctype="application/x-www-form-urlencoded" action="change_defaults/saveDefaults/<?php echo $defaults[0]->id;?>" target="_self">
<h1>Change Defaults</h1><br>

<p>
<label>Default Text1
<textarea name="default_text1" maxlength="500">
<?php echo $defaults[0]->default_text1;?>
</textarea>
</label>
</p><br><br><br><br><br>

<p>
<label>Default Text2
<textarea name="default_text2" maxlength="500">
<?php echo $defaults[0]->default_text2;?>
</textarea>
</label>
</p><br><br><br><br>

<p>
<label>Default Employee Password
<input type="text" name="default_employee_password" value="<?php echo $defaults[0]->default_employee_password;?>" required>
</label> 
</p>
<p><button style="float:right">Submit</button></p>

</form>

</body>
</html>