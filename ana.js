$(document).ready(function(){
	$.ajax({
		url: location.protocol + '//' + location.host +	"/analysis1.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var type = [];
			var price = [];

			for(var i in data) {
				type.push(data[i].type);
				price.push(data[i].price);
			}

			var chartdata = {
				labels: shift,
				datasets : [
					{
						label: 'Service',
						backgroundColor: 'rgba(30, 149, 119,0.3)',
						borderColor: 'rgba(255,205,0, 1)',
						hoverBackgroundColor: 'rgba(255,205,0, 1)',
						hoverBorderColor: 'rgba(195,132, 221, 1)',
						data: Service
					}
				]
			};

			var ctx = $("#mycanvas6");
		},
		error: function(data) {
			console.log(data);
		}
	});
});