<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style_manage_campaigns.css"/>
	<script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/js/manage_campaigns_action.js"></script>
</head>
<body>
	<div class="container">
		<h2>Listed below are your campaigns</h2>
		<a href="add_campaign"><button id="addnew" class="" style="float: right; color: black">Add New</button></a>
		<a href="../client_management"><button id="addnew" class="" style="float: right; color: black">Back</button></a>
		<table style="margin-top: 70px" class="table table-bordered">
			<thead>
				<tr>
					<th>Number</th>
					<th>Campaign Name</th>
					<th>View</th>
					<th>Actions</th>
					<th>Report</th>
				</tr>
			</thead>
			<tbody>
				<?php
					for($i=0;$i<sizeof($campaigns); $i++){
						$row = $campaigns[$i];
						// print_r($row);
						echo "<tr>";
						echo "<td>".($i+1)."</td>";
						echo "<td>".$row->c_name."</td>";
						echo "<td><button class='view_campaign' data-name='".$row->c_name."' data-id='".$row->id."'>View Campaign</button></td>";
						echo "<td><button class='edit_campaign' data-name='".$row->c_name."' data-id='".$row->id."'>Edit</button><button class='delete_campaign' data-name='".$row->c_name."' data-id='".$row->id."'>Delete</button></td>";
						echo "<td><button class='view_report' data-name = '".$row->c_name."' data-value = '".$row->client."' data-id='".$row->id."'>View Report</button></td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
	</div>

</body>
</html>