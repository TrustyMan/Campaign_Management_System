<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="referrer" content="no-referrer" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style_employee_login.css">
<title></title>

</head>
<body>

<form class="myForm" method="post" enctype="application/x-www-form-urlencoded" action="../login/process/<?php echo $employee_url;?>" target="_self">
<h2>Enter your Task's Password as specified by the task:</h2><br>

<p>
<label>Password
<input type="password" name="password" value="" required>
</label>
</p>
<p><button style="float: right">Submit</button></p>

</form>

</body>
</html>