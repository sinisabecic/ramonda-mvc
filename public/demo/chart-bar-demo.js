// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily =
  '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#292b2c";

//! Primitivan nacin
// Bar Chart variables of html elements which are stated in footer.php
var sess1 = $("#sessionsCount1").text().trim();
var sess2 = $("#sessionsCount2").text().trim();
var sess3 = $("#sessionsCount3").text().trim();
var sess4 = $("#sessionsCount4").text().trim();
var sess5 = $("#sessionsCount5").text().trim();
var sess6 = $("#sessionsCount6").text().trim();
var sess7 = $("#sessionsCount7").text().trim();
var sess8 = $("#sessionsCount8").text().trim();
var sess9 = $("#sessionsCount9").text().trim();
var sess10 = $("#sessionsCount10").text().trim();
var sess11 = $("#sessionsCount11").text().trim();
var sess12 = $("#sessionsCount12").text().trim();

var ctx = document.getElementById("myBarChart");

var myLineChart = new Chart(ctx, {
  type: "bar",
  data: {
    labels: [
      "January",
      "February",
      "March",
      "April",
      "May",
      "June",
      "July",
      "August",
      "September",
      "October",
      "November",
      "December",
    ],
    datasets: [
      {
        label: "Revenue",
        backgroundColor: "rgba(2,117,216,1)",
        borderColor: "rgba(2,117,216,1)",
        data: [
          sess1,
          sess2,
          sess3,
          sess4,
          sess5,
          sess6,
          sess7,
          sess8,
          sess9,
          sess10,
          sess11,
          sess12,
        ],
      },
    ],
  },
  options: {
    scales: {
      xAxes: [
        {
          time: {
            unit: "month",
          },
          gridLines: {
            display: false,
          },
          ticks: {
            maxTicksLimit: 12,
          },
        },
      ],
      yAxes: [
        {
          ticks: {
            min: 0,
            max: 100,
            maxTicksLimit: 10,
          },
          gridLines: {
            display: true,
          },
        },
      ],
    },
    legend: {
      display: false,
    },
  },
});
