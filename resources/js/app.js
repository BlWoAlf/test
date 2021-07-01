require('./bootstrap');

$(function(){
    // $('.graph-view').each(function(index, elem){
    //     var myChart = new Chart(elem, {
    //         type: 'line',
    //         data: {
    //             labels: $('.graph:eq('+index+')').data('labels'),
    //             datasets: $('.graph:eq('+index+')').data('datasets'),
    //         },
    //         options: {
    //             scales: {
    //                 yAxes: [{
    //                     ticks: {
    //                         // beginAtZero: true,
    //                     }
    //                 }]
    //             },
    //             elements: {
    //                 line: {
    //                     tension: 0,
    //                     fill: false
    //                 }
    //             }
    //         }
    //     });
    // });

    function makeColumns(data){
        var colCount = [];
        data.forEach(function(item, i, arr) {
            if(item['data'].length >= colCount.length){
               colCount = Object.keys(item['data']);
            }
        });
        return colCount;
    }

    $('.graph-view').each(function(index, elem){
        var myChart = new Chart(elem, {
            type: 'line',
            data: {
                labels: $('.graph:eq('+index+')').data('labels'),
                datasets: $('.graph:eq('+index+')').data('datasets'),
            },
            options: {
                scales: {
                    y:{
                        // max: 99999999999999,
                        // suggestedMax: 999999999999,
                        // suggestedMin: 99999999999,
                        min: 99999999,
                    },
                    yAxes: [{
                        scales: {
                            // suggestedMax: 999999999999,
                            // max: 99999999999999,
                            // suggestedMin: 99999999999,
                            min: 99999999,
                        },
                        // max: 99999999999999,
                        min: 99999999,
                        // suggestedMin: 99999999999,
                        ticks: {
                            // beginAtZero: true,
                            count: 9999999999999,
                        },                        
                    }],
                },
                elements: {
                    line: {
                        tension: 0,
                        fill: false
                    }
                },
                tooltips: {
                    enabled: false
                }
            }
        });

        // $('button').click(function(){
        //     var data = [];
        //     myChart.data.datasets.forEach(function(item, i, arr) {
        //         data[i] = {label: item.label, data: item.data, backgroundColor: item.backgroundColor, borderColor: item.borderColor};
        //     });

        //     var color = '';
        //     if($(this).attr('name') == 'kr'){
        //         color = 'red';
        //     }
        //     else if($(this).attr('name') == 'sn'){
        //         color = 'blue';
        //     }
        //     var value = $('.new_data').val();
        //     $.ajax({
        //         method: 'post',
        //         url: 'graph',
        //         data: {
        //             data: data,
        //             graph: color,
        //             value: value,
        //         },
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        //         },
        //     });
        // });

        // Echo.channel('aboba')
        // .listen('GraphUpdated', (e) => {
        //     myChart.data.datasets.forEach(function(item, i, arr) {
        //         myChart.data.datasets[i].data = e.data[i].data;
        //     });
        //     myChart.data.labels = makeColumns(myChart.data.datasets);
        //     myChart.update();
        // });
    });

    // Echo.channel('aboba')
    // .listen('BasketСhanged', (e) => {
    //     $('.suda').html('');
    //     $.each(e.basket, function(index, value){
    //         $('.suda').append('<div>'+value['name']+': '+value['cost']+' денег </div>');
    //     });
    // });
});
