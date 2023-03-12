$(document).ready(function() {
    var chartOptions = {
        type: "bar",
        data: {
            labels: [],
            datasets: [
                {
                    label: "Numar de voturi",
                    data: [],
                    backgroundColor: '#7054f1',
                }
            ],

        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom',
                },
                title: {
                    display: true,
                    text: 'Diagrama repartitiei voturilor per produs'
                }
            }
        },
    };

    var ctx = document.getElementById("chart").getContext("2d");
    var chart = new Chart(ctx, chartOptions);

    function updateChart(data) {
        var labels = [];
        var values = [];
        $.each(data, function(index, row) {
            labels.push(row.cakeName);
            values.push(row.numberOfVotes);
        });
        chart.data.labels = labels;
        chart.data.datasets[0].data = values;
        chart.update();
    }

    $("#vote-form").submit(function(event) {
        event.preventDefault();
        var selectedCake = $('input[name=cake]:checked', '#vote-form').val();
        console.log(selectedCake);
        $.ajax({
            type: "POST",
            url: "vote.php",
            data: {
                cakeId: selectedCake
            },
            success: function() {
                $.ajax({
                    url: "get_cake_votes.php",
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        updateChart(data);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                });
            }
        });
    });
    $.ajax({
        url: "get_cake_votes.php",
        type: "GET",
        dataType: "json",
        success: function(data) {
            updateChart(data);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });
});