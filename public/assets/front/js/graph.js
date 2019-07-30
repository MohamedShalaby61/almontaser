window.onload = function () {
	
window.chartColors = {
red: 'rgb(255, 99, 132)',
orange: 'rgb(255, 159, 64)',
yellow: 'rgb(255, 205, 86)',
green: 'rgb(75, 192, 192)',
blue: 'rgb(54, 162, 235)',
purple: 'rgb(153, 102, 255)',
grey: 'rgb(201, 203, 207)'
};

window.randomScalingFactor = function() {
return (Math.random() > 0.5 ? 1.0 : -1.0) * Math.round(Math.random() * 100);
};

if($('#strategy-graph').length){
	
	var Years = ["2010", "2011", "2012", "2013", "2014", "2015", "2016"];
        var color = Chart.helpers.color;
        var barChartData = {
            labels: ["2010", "2011", "2012", "2013", "2014", "2015", "2016"],
            datasets: [{
                label: 'Years',
                backgroundColor: color(window.chartColors.red).alpha(1).rgbString(),
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: [
                    randomScalingFactor(),
                   	randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                   	randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            }, {
                label: 'Progress',
                backgroundColor: color(window.chartColors.blue).alpha(1).rgbString(),
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: [
                    randomScalingFactor(),
					randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            }]

        };

 		var ctx = document.getElementById("strategy-graph").getContext("2d");
            window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    responsive: true,
                    legend: {
                        position: 'top',
						display: false
                    },
                    title: {
                        display: false,
                        text: 'Strategy Development'
                    }
                }
            });
			
			var colorNames = Object.keys(window.chartColors);

}

if($('#proj-analysis-graph').length){
	
	var data = {
    labels: ["2006", "2007", "2008", "2009","2010", "2011", "2012", "2013", "2014", "2015", "2016"],
    datasets: [{
        backgroundColor: "rgba(37,126,190,0.5)",
        borderColor: "rgba(37,126,196,1)",
		borderWidth: 1,
        data: [0, 20, 50, 32, 20, 40, 50, 20,100, 80, 130],
    }]
};

var ctx = document.getElementById("proj-analysis-graph");
Chart.defaults.global.legend.display = false;
var myChart = new Chart(ctx, {
    type: 'line',
    data: data,
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }],
            xAxes: [{
                // Change here
            	barPercentage: 1
            }]
        },
		legend: {
		  position: 'right'
		}
    }
});

}

if($('#profit-improvement-graph').length){
	
	var ctx = document.getElementById("profit-improvement-graph").getContext('2d');
	var myChart = new Chart(ctx, {
	  type: 'doughnut',
	  data: {
		labels: ["Gas - 35%", "Petrol - 25%", "Power - 20%", "Agriculture - 15%", "Manufactures - 5%"],
		datasets: [{
		  backgroundColor: [
			"#36a2eb",
			"#ff3d67",
			"#ff9f40",
			"#ffcd56",
			"#4bc0c0"
		  ],
		  data: [35, 25, 20, 15, 5]
		}]
	  },
	   options: {
		legend: {
		  position: 'bottom',
		  display:false
		}
	  }
	});

}

if($('#proj-result-graph').length){

var lineChartData = {
        labels: ["2010", "2011", "2012", "2013","2014", "2015","206"],
        datasets: [{
            label: "Financial Growth",
            borderColor: window.chartColors.red,
            backgroundColor: window.chartColors.red,
            fill: false,
            data: [
                0,
                25,
                45,
                25,
				62,
				67,
				75
            ],
            yAxisID: "y-axis-1",
        }, {
            label: "Economy Growth",
            borderColor: window.chartColors.blue,
            backgroundColor: window.chartColors.blue,
            fill: false,
            data: [
                0,
                40,
                21,
                55,
				22,
                40,
				45
            ],
            yAxisID: "y-axis-2"
        }]
    };

        var ctx = document.getElementById("proj-result-graph").getContext("2d");
        window.myLine = Chart.Line(ctx, {
            data: lineChartData,
            options: {
                responsive: true,
                hoverMode: 'index',
                stacked: false,
                title:{
                    display: true,
                    text:'January 2017 - May 2017'
                },
                scales: {
                    yAxes: [{
                        type: "linear", // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
                        display: true,
                        position: "left",
                        id: "y-axis-1",
                    }, {
                        type: "linear", // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
                        display: true,
                        position: "right",
                        id: "y-axis-2",

                        // grid line settings
                        gridLines: {
                            drawOnChartArea: false, // only want the grid lines for one axis to show up
                        },
                    }],
                },
				legend: {
				  position: 'bottom'
				}
            }
        });

}


};