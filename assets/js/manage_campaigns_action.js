$(document).ready(function(){
	$('.view_report').click(function(){
		// console.log($(this).data("name"));
		var campaignName = $(this).data("name");
		var clientName = $(this).data("value");
		var c_id = $(this).data('id');
		// window.location.href = ""+campaignName+"/report";
		$.ajax({
		  type: 'post',
		  url: "../manage_campaigns/setC_id",
		  data: {
		    c_id: c_id
		  },
		  success: function(result){
		    console.log(result);
		    // location.reload();
		    window.location.href = ""+campaignName+"/report";
		  }
		});

	});
	$('.view_campaign').click(function(){
		var campaignName = $(this).data("name");
		// window.location.href = ""+campaignName+"/view_campaign";
		var c_id = $(this).data('id');
		$.ajax({
		  type: 'post',
		  url: "../manage_campaigns/setC_id",
		  data: {
		    c_id: c_id
		  },
		  success: function(result){
		    console.log(result);
		    // location.reload();
		    window.location.href = ""+campaignName+"/view_campaign";
		  }
		});
	});
	$('.edit_campaign').click(function(){
		var campaignName = $(this).data("name");
		// window.location.href = ""+campaignName+"/edit";
		var c_id = $(this).data('id');
		$.ajax({
		  type: 'post',
		  url: "../manage_campaigns/setC_id",
		  data: {
		    c_id: c_id
		  },
		  success: function(result){
		    console.log(result);
		    // location.reload();
		    window.location.href = ""+campaignName+"/edit";
		  }
		});
	});
	$('.delete_campaign').click(function(){
		var campaignName = $(this).data("name");
		var c_id = $(this).data('id');
		$.ajax({
		  type: 'post',
		  url: '../manage_campaigns/deleteCampaign/',
		  data: {
		    c_id: c_id
		  },
		  success: function(result){
		    console.log(result);
		    location.reload();
		  }
		});
	});
});