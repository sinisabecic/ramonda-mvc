// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily =
  '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#292b2c";

// Pie Chart Example
var ctx = $("#myPieChart");
var myPieChart = new Chart(ctx, {
  type: "pie",
  data: {
    labels: [
      "Jan",
      "Feb",
      "Mar",
      "Apr",
      "May",
      "Jun",
      "Jul",
      "Aug",
      "Sep",
      "Oct",
      "Nov",
      "Dec",
    ],
    datasets: [
      {
        data: [jan, feb, mar, apr, may, jun, jul, aug, sep, oct, nov, dec],
        backgroundColor: [
          "#007bff",
          "#dc3545",
          "#FFAFAF",
          "#00A19D",
          "#66806A",
          "#F6D167",
          "#781D42",
          "#FF5403",
          "#28a745",
          "#DE09CC",
          "#28a745",
          "#9D5C0D",
        ],
      },
    ],
  },
});
