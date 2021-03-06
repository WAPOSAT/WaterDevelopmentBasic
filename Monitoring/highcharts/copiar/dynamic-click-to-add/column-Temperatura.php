
		<script type="text/javascript">
$(function () {
        $('#column-Temperatura').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Media de Temperatura Mensual'
            },
            /*subtitle: {
                text: 'Source: WorldClimate.com'
            },*/
            xAxis: {
                categories: [
                    'Ene',
                    'Feb',
                    'Mar',
                    'Abr',
                    'May',
                    'Jun',
                    'Jul',
                    'Ago'
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Media de Temperatura'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Temperatura',
                data: [25.3, 25.5, 25.9, 25.9, 25.5, 24.6, 24.1, 24.3]
    
            }]
        });
    });
    

		</script>
<div id="column-Temperatura" style="width: 500px; height: 300px; margin: 0 0"></div>
