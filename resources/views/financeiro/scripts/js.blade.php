<script type="text/javascript">
    /* globals Chart:false, feather:false */

    (function () {
        'use strict'

        feather.replace()
       
        var arrayValues = [       15339,
                            21345,
                            18483,
                            24003,
                            23489,
                            24092,
                            12034
                        ]
        // Graphs
        var ctx = document.getElementById('myChart')
        // eslint-disable-next-line no-unused-vars
        var myChart = new Chart(ctx, {
            type: 'horizontalBar',
            data: {
                labels: [
                    'Sunday',
                    'Monday',
                    'Tuesday',
                    'Wednesday',
                    'Thursday',
                    'Friday',
                    'Saturday'
                ],
                datasets: [{
                        data: arrayValues,
                        lineTension: 0,
                        backgroundColor: 'transparent',
                        borderColor: '#007bff',
                        borderWidth: 4,
                        pointBackgroundColor: '#007bff'
                    }]
            },
            options: {
                scales: {
                    yAxes: [{
                            ticks: {
                                beginAtZero: false
                            }
                        }]
                },
                legend: {
                    display: false
                }
            }
        })
    }())




</script>