// Get context with jQuery - using jQuery's .get() method.
var ctx = document.getElementById("myChart").getContext("2d");
// This will get the first returned node in the jQuery collection.
$.getJSON( "https://nbp-backend.mybluemix.net/api/revenues/getTotalLastWeekRevenue?cp_admin=berkah123", function( json ) {
  console.log(json.result);
  var data = {
    labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
    datasets: [
    {
        label: "My First dataset",
        fillColor: "rgba(220,220,220,0.2)",
        strokeColor: "rgba(220,220,220,1)",
        pointColor: "rgba(220,220,220,1)",
        pointStrokeColor: "#000",
        pointHighlightFill: "#000",
        pointHighlightStroke: "rgba(220,220,220,1)",
        data: json.result
    }
    ]
};
var myLineChart = new Chart(ctx).Line(data);
});

// myLineChart.defaults.global.responsive = true;