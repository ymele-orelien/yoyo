document.addEventListener("DOMContentLoaded", () => {
    new ApexCharts(document.querySelector("#reportsChart"), {
       series: [{
          name: 'Partenaires',
          data: [54, 40, 28, 51, 42, 82, 56],
       }, {
          name: 'Utilisateurs',
          data: [25, 32, 45, 32, 34, 52, 41]
       }, {
          name: 'Dons',
          data: [0, 11, 32, 18, 9, 24, 11]
       }],
       chart: {
          height: 350,
          type: 'area',
          toolbar: {
             show: false<script src="../assets/js/graph.js">
                                      
             </script>
          },
       },
       markers: {
          size: 4
       },
       colors: ['#4154f1', '#2eca6a', '#ff771d'],
       fill: {
          type: "gradient",
          gradient: {
             shadeIntensity: 1,
             opacityFrom: 0.3,
             opacityTo: 0.4,
             stops: [0, 90, 100]
          }
       },
       dataLabels: {
          enabled: false
       },
       stroke: {
          curve: 'smooth',
          width: 3
       },
       xaxis: {
          type: 'datetime',
          categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T03:59:59.000Z", "2018-09-19T07:59:59.000Z", "2018-09-19T11:59:59.000Z", "2018-09-19T14:59:59.000Z", "2018-09-19T19:30:00.000Z", "2018-09-19T22:59:59.000Z",]
       },
       tooltip: {
          x: {
             format: 'dd/MM/yy HH:mm'
          },
       }
    }).render();
 });