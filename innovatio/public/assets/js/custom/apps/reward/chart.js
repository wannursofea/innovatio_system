// script.js

fetch('fetch_data.php')
    .then(response => response.json())
    .then(data => {
        createLineChart(data);
    })
    .catch(error => console.error('Error fetching data:', error));

function createLineChart(data) {
        // Convert data to the format Chart.js expects
        var chartData = {
            labels: data.map(entry => entry.event_id),
            datasets: [
                {
                    label: 'Gold Badge',
                    backgroundColor: 'rgba(255, 215, 0, 0.4)',
                    borderColor: 'rgba(255, 215, 0, 1)',
                    data: data.map(entry => entry.goldBadge),
                },
                {
                    label: 'Silver Badge',
                    backgroundColor: 'rgba(192, 192, 192, 0.4)',
                    borderColor: 'rgba(192, 192, 192, 1)',
                    data: data.map(entry => entry.silverBadge),
                },
                {
                    label: 'Bronze Badge',
                    backgroundColor: 'rgba(205, 127, 50, 0.4)',
                    borderColor: 'rgba(205, 127, 50, 1)',
                    data: data.map(entry => entry.bronzeBadge),
                },
            ],
        };

        // Get the context of the canvas element
        var ctx = document.getElementById('kt_project_overview_graph').getContext('2d');

        // Create the line chart
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: chartData,
            options: {
                scales: {
                    x: {
                        type: 'category',
                        labels: chartData.labels,
                    },
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
}
