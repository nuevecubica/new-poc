<?php
$pagename = "Google Charts";
include_once('../../../poc_header.php');
?>
<div class="app-holder">
    <article>
        <h2>Google Charts</h2>
        <button class="btn  btn-warning"><a href="/pocs/js/charts">back</a></button>
        <button class="btn  btn-primary"><a href="#">more</a></button>
        <div class="spacer"></div>
        <p>https://developers.google.com/chart/interactive/docs/drawing_charts</p>
        <div id="vis_div" style="width: 100%; height: 400px;"></div>
    </article>
</div>
<?php include_once('../../../poc_footer.php'); ?>

<!--Load the AJAX API-->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current');   // Don't need to specify chart libraries!
    google.charts.setOnLoadCallback(drawVisualization);

    function drawVisualization() {
        var wrapper = new google.visualization.ChartWrapper({
            chartType: 'ColumnChart',
            dataTable: [['', 'Germany', 'USA', 'Brazil', 'Canada', 'France', 'RU'],
                ['', 700, 300, 400, 500, 600, 800]],
            options: {'title': 'Countries'},
            containerId: 'vis_div'
        });
        wrapper.draw();
    }
</script>