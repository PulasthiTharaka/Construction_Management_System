(function () {
  var ctx = document.getElementById("line-chart").getContext('2d')
  var chart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020],
      datasets: [{
        data: [100, 80, 120, 90, 160, 100, 58, 55, 40, 60, 140],
        label: "PROJECTS",
        borderColor: "black",
        fill: false
      }, {
        data: [88, 30, 100, 50, 150, 70, 50, 40, 35, 50, 80],
        label: "SALES",
        borderColor: "orange",
        fill: false
      }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Company Prefomce'
      }
    }
  });

})();