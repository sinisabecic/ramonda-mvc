// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily =
  '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#292b2c";

//! Primitivan nacin
// Bar Chart variables of html elements which are stated in footer.php
var jan = $("#sessionsCount1").text().trim();
var feb = $("#sessionsCount2").text().trim();
var mar = $("#sessionsCount3").text().trim();
var apr = $("#sessionsCount4").text().trim();
var may = $("#sessionsCount5").text().trim();
var jun = $("#sessionsCount6").text().trim();
var jul = $("#sessionsCount7").text().trim();
var aug = $("#sessionsCount8").text().trim();
var sep = $("#sessionsCount9").text().trim();
var oct = $("#sessionsCount10").text().trim();
var nov = $("#sessionsCount11").text().trim();
var dec = $("#sessionsCount12").text().trim();

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
        data: [jan, feb, mar, apr, may, jun, jul, aug, sep, oct, nov, dec],
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
