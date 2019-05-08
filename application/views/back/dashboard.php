<?php
/**
 * Created by PhpStorm.
 * User: Ranto_hr
 * Date: 4/29/2019
 * Time: 1:58 PM
 */
?>
<!-- Stylesheet -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.css">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Work',     11],
            ['Eat',      2],
            ['Commute',  2],
            ['Watch TV', 2],
            ['Sleep',    7]
        ]);

        var options = {
            title: 'My Daily Activities',
            is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
    }
</script>
<script type="text/javascript">
    google.charts.load('current', {packages:["orgchart"]});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Name');
        data.addColumn('string', 'Manager');
        data.addColumn('string', 'ToolTip');

        // For each orgchart box, provide the name, manager, and tooltip to show.
        data.addRows([
            [{v:'Mike', f:'Mike<div style="color:red; font-style:italic">President</div>'},
                '', 'The President'],
            [{v:'Jim', f:'Jim<div style="color:red; font-style:italic">Vice President</div>'},
                'Mike', 'VP'],
            ['Alice', 'Mike', ''],
            ['Bob', 'Jim', 'Bob Sponge'],
            ['Carol', 'Bob', '']
        ]);

        // Create the chart.
        var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
        // Draw the chart, setting the allowHtml option to true for the tooltips.
        chart.draw(data, {allowHtml:true});
    }
</script>
<section class="contact--us-area section-padding-100-0" style="margin-bottom: 100px; padding-top: 150px; background-color: #e5e5e5;">
    <div class="container">
        <div style="float: right; width: 200px; height: 600px;">
            <div class="panel panel-primary dash-panel">
                <div class="panel-heading">Panel entête</div>
                <div class="panel-body">panel-primary</div>
            </div>
            <div class="panel panel-primary dash-panel">
                <div class="panel-heading">Panel entête</div>
                <div class="panel-body">panel-primary</div>
            </div>
            <div class="panel panel-primary dash-panel">
                <div class="panel-heading">Panel entête</div>
                <div class="panel-body">panel-primary</div>
            </div>
            <div class="panel panel-primary dash-panel">
                <div class="panel-heading">Panel entête</div>
                <div class="panel-body">panel-primary</div>
            </div>
        </div>
        <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
        <div id="chart_div" style="display: grid;"></div>
    </div>
</section>
<script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>