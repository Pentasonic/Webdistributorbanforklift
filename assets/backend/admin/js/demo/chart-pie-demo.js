// Set new default font family and font color to mimic Bootstrap's default styling
(Chart.defaults.global.defaultFontFamily = "Nunito"),
	'-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#858796";

// alert(Date('Mon'));
var dataKu_produkPie = [];
var dataKu_valuePie = [];
$.ajax({
	url: window.location + "/getChartMinat",
	method: "get",
	dataType: "JSON",
	success: function (res) {
		console.log(res);
		for (var i = 0; i < res.produk.length; i++) {
			dataKu_produkPie.push(res.produk[i]);
			dataKu_valuePie.push(res.value[i]);
		}
console.log(JSON.parse(coloring));
		// Pie Chart Example
		var ctx = document.getElementById("myPieChart");
		var myPieChart = new Chart(ctx, {
			type: "doughnut",
			data: {
				labels: dataKu_produkPie,
				datasets: [
					{
						data: dataKu_valuePie,
						backgroundColor: JSON.parse(coloring),
						hoverBackgroundColor: JSON.parse(coloring),
						hoverBorderColor: "rgba(234, 236, 244, 1)",
					},
				],
			},
			options: {
				maintainAspectRatio: false,
				tooltips: {
					backgroundColor: "rgb(255,255,255)",
					bodyFontColor: "#858796",
					borderColor: "#dddfeb",
					borderWidth: 1,
					xPadding: 15,
					yPadding: 15,
					displayColors: false,
					caretPadding: 10,
				},
				legend: {
					display: false,
				},
				cutoutPercentage: 80,
			},
		});
	},
});
