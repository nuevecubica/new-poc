<?php
$pagename = "Charts JS";
include_once('../../../poc_header.php');
?>
<div class="app-holder">
    <article>
        <h2>Charts JS</h2>
        <button class="btn  btn-warning"><a href="/pocs/js/charts">back</a></button>
        <button class="btn  btn-primary"><a href="#">more</a></button>
        <div class="spacer"></div>
        <p>http://www.chartjs.org/</p>
        <canvas id="myChart"></canvas>
        <canvas id="oilChart"></canvas>

    </article>
</div>
<?php include_once('../../../poc_footer.php'); ?>

<script src="Chart.js"></script>
<script src="Chart.PieceLabel.js"></script>
<script>

    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });

    var oilCanvas = document.getElementById("oilChart");

    Chart.defaults.global.defaultFontFamily = "Open Sans";
    Chart.defaults.global.defaultFontSize = 12;
    Chart.defaults.global.defaultFontColor = 'white';

    var oilData = {
        labels: [
            "Joyeria",
            "Medallas y Monedas",
            "Electrónica",
            "Industrial",
            "Dental"
        ],
        datasets: [
            {
                data: [77.6, 9.4, 9.1, 2.7, 1.2],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                ],
                borderWidth: 2
            }]
    };

    var chartOptions = {
        //rotation: -Math.PI,
        cutoutPercentage: 50,
       // circumference: Math.PI,
        legend: {
            position: 'bottom',
            align:'left'
        },
        pieceLabel: {
            //render: 'percentage',
            fontColor: ['white', 'white', 'white','white','white'],
            precision: 2,
            position: 'outside'
        },
        animation: {
            animateRotate: true,
            animateScale: true
        }
    };
    var pieChart = new Chart(oilCanvas, {
        type: 'doughnut',
        data: oilData,
        options: chartOptions
    });
</script>