<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
  <script>

  document.addEventListener('DOMContentLoaded', function() {
    // var ctx = document.getElementById('myChart').getContext('2d');

    // Fetch the data from the server using AJAX or from a variable
    var ctx = document.getElementById('myChart').getContext('2d');
    var data = <?php echo json_encode($data, 15, 512) ?>;
    console.log(data);
    var etat_true = [];
    var etat_false = [];
    var labels = [];
    // var data = {
    //     labels: [],
    //     etat_true: [],
    //     etat_false: []
    // };
    data.forEach(item => {
        if (item.etat === true) {
          etat_true.push(item.etat);
          etat_false.push(null);
        } else {
          etat_true.push(null);
            etat_false.push(item.etat);
        }
        labels.push(item.created_at);
    });

    // Add your AJAX call or assign the data from a variable

    // Create the chart
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: data.labels,
            datasets: [
                {
                    label: 'Etat True',
                    data: data.etat_true,
                    backgroundColor: 'rgba(75, 192, 192, 0.5)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Etat False',
                    data: data.etat_false,
                    backgroundColor: 'rgba(255, 99, 132, 0.5)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                x: {
                    type: 'time',
                    time: {
                        unit: 'day',
                        displayFormats: {
                            day: 'MMM D'
                        }
                    }
                },
                y: {
                    beginAtZero: true,
                    stepSize: 1
                }
            }
        }
    });


    // var ctx = document.getElementById('myChart').getContext('2d');
    // var data = <?php echo json_encode($data, 15, 512) ?>;
    // console.log(data);
    // var trueCount = [];
    // var falseCount = [];
    // var labels = [];
    // console.log(trueCount);
    // console.log(falseCount);
    // console.log(labels);
    // data.forEach(item => {
    //     if (item.etat === true) {
    //         trueCount.push(item.etat);
    //         falseCount.push(null);
    //     } else {
    //         trueCount.push(null);
    //         falseCount.push(item.etat);
    //     }
    //     labels.push(item.created_at);
    // });

    // var chart = new Chart(ctx, {
    //     type: 'line',
    //     data: {
    //         labels: labels,
    //         datasets: [{
    //             label: 'True',
    //             data: trueCount,
    //             fill: false,
    //             borderColor: 'rgba(75, 192, 192, 1)',
    //             borderWidth: 1
    //         }, {
    //             label: 'False',
    //             data: falseCount,
    //             fill: false,
    //             borderColor: 'rgba(255, 99, 132, 1)',
    //             borderWidth: 1
    //         }]
    //     },
    //     options: {
    //         responsive: true,
    //         scales: {
    //             x: {
    //                 type: 'time',
    //                 time: {
    //                     unit: 'day',
    //                     displayFormats: {
    //                         day: 'MMM D'
    //                     }
    //                 }
    //             }
    //         }
    //     }
    // });
  });
</script>

</head>
<body>
    <canvas id="myChart"></canvas>

</body>




</html><?php /**PATH C:\Users\azer\Desktop\laravel\formation_continue\resources\views/page/chart/index.blade.php ENDPATH**/ ?>