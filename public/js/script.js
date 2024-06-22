var table = $('#clientsTable').DataTable({
	lengthChange: false,
	searching: false,
});
document.addEventListener('DOMContentLoaded', function() {
    var options= {
        series: JSON.parse(document.getElementById('clientsPointsData').textContent),
        chart: {
            width: 550,
            type: 'pie',
			background: 'transparent', // Set chart background to transparent
            
        },
        labels: JSON.parse(document.getElementById('clientsNamesData').textContent),
		theme: {
            mode: 'dark', // Dark theme
        },
        responsive: [{
            breakpoint: 250,
            options: {
                chart: {
                    width: 200,
                },
                legend: {
                    position: 'bottom',
                }
            }
        }],
        
    };
    var commandesByRole = new ApexCharts(document.querySelector("#pieChart"), options);
    commandesByRole.render();
});
