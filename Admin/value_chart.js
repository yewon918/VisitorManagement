$(document).ready(function () {
    $.ajax({
        url: "http://ferrydraw.dothome.co.kr/data.php",
        type: "GET",
        success: function (data) {
            console.log(data);
            var Place = [];
            var Visitor = [];
            for (var i in data) {
                Place.push("Place" + data[i].Place);
                Visitor.push(data[i].Visitor);
            }
            var chartdata = {
                labels: Place,
                datasets: [
                    {
                        label: "Visitor",
                        fill: false,
                        lineTension: 0.3,
                        backgroundColor: chartColors.green,
                        borderColor: chartColors.green,
                        pointHoverBackgroundColor: chartColors.green,
                        pointHoverBorderColor: chartColors.green,
                        hoverBackgroundColor: chartColors.gold,
                        data: Visitor
                    }
                ]
            };
            var ctx = $("#mycanvas");

            var barGraph = new Chart(ctx, {
              type: 'bar',
              data: chartdata
            });
          },
          error: function(data) {
            console.log(data);
          }
        });
      });
window.chartColors = {
    red: 'rgb(255, 99, 132)',
    orange: 'rgb(255, 159, 64)',
    yellow: 'rgb(255, 205, 86)',
    green: 'rgb(75, 192, 192)',
    blue: 'rgb(54, 162, 235)',
    purple: 'rgb(153, 102, 255)',
    gold: 'rgb(248,193,28)',
    grey: 'rgb(201, 203, 207)'
};