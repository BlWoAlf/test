<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    @livewireStyles
</head>
@php

$labels = ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange', 'aaa'];
$datasets = [
    ['label' => 'oabao', 'data' => [12, 19, 13, 15, 12, 13], 'backgroundColor' => 'red', 'borderColor' => 'red'],
    ['label' => 'aboba', 'data' => [15, 24, 21, 10, 10, 16, 14], 'backgroundColor' => 'blue', 'borderColor' => 'blue']
];
$megadata = [
    [
        ['label' => 'oabao', 'data' => [12, 19, 13, 15, 12, 13], 'backgroundColor' => 'red', 'borderColor' => 'red'],
        ['label' => 'aboba', 'data' => [15, 21, 10, 10, 16, 14], 'backgroundColor' => 'blue', 'borderColor' => 'blue']
    ],
    [
        ['label' => 'oaaa', 'data' => [5, 19, 13, 15, 12, 13], 'backgroundColor' => 'black', 'borderColor' => 'black'],
        ['label' => 'abobfffa', 'data' => [3, 21, 10, 10, 16, 14], 'backgroundColor' => 'yellow', 'borderColor' => 'yellow']
]];
@endphp
<body>
    @for ($j = 0; $j < 9; $j++)
        @php
            $labels = [];
            $values = [];
            for($i = 0; $i < 8640; $i++){
                $labels[] = $i;
                $values[] = rand(1,100);
            }
            $red = rand(1,999);
            $green = rand(1,999);
            $blue = rand(1,999);
            $datasets = [['label' => 'oabao', 'data' => $values, 'borderColor' => "rgb($red, $green, $blue)"]];
        @endphp
        <x-graph :labels="$labels" :datasets=$datasets/>
    @endfor
    @php
    // $labels = ['1', 'Blue', '5', 'Green', 'eeeeeee', 'Orange'];
    // $datasets = [
    //     ['label' => 'oabao', 'data' => [12, 19, 13, 15, 12, 13], 'backgroundColor' => 'black', 'borderColor' => 'black'],
    //     ['label' => 'aboba', 'data' => [15, 21, 10, 10, 16, 14], 'backgroundColor' => 'yellow', 'borderColor' => 'yellow']
    // ];
    @endphp

    {{-- @foreach ($megadata as $datasets)
        <x-graph :labels="$labels" :datasets=$datasets/>
    @endforeach --}}
    
    @php
    $labels = ['тут', 'другие', 'заголовки'];
    $datasets = [
        ['label' => 'oaaaasf', 'data' => [12, 19, 13, 15, 12, 13], 'backgroundColor' => 'green', 'borderColor' => 'green'],
    ];

    // $text = 'АБОБУС!'

    session(['items' => [
        ['name' => 'aboba', 'cost' => 1001],
        ['name' => 'abobus', 'cost' => 9999],
        ['name' => 'dababy', 'cost' => 'lessssgooo'],
    ]]);

    $tovs = [
        ['name' => 'aaaa', 'cost' => 1898],
        ['name' => 'kakaka', 'cost' => 423412],
        ['name' => 'shrek', 'cost' => 'swamp'],
        ['name' => 'kavo', 'cost' => '777'],
        ['name' => 'ded', 'cost' => '0'],
    ]
    
    @endphp

    {{-- @foreach ($tovs as $item)
        <livewire:tov :data="$item">
        <br>
    @endforeach --}}

    {{-- <x-graph :labels="$labels" :datasets=$datasets/> --}}

    {{-- <livewire:text-content /> --}}
    {{-- <livewire:basket /> --}}

    {{-- <br>
    <div class="suda"></div> --}}
    
    {{-- <div class="text-content"></div>
    <textarea class="text-input"></textarea>
    <br>
    <button>kavo</button> --}}

    <input class="new_data" type="text">
    <button name="kr">krasny</button>
    <button name="sn">siniy</button>

    @livewireScripts
    <script src="{{asset('js/app.js?v=4')}}"></script>
    <script>
        // $('button').click(function(){
        //     axios({
        //         method: 'post',
        //         url: '/message',
        //         data: {
        //             message: $('.text-input').val(),
        //         },
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        //         },
        //     });
        // });

        // Echo.channel('chat')
        // .listen('MessageSent', (e) => {
        //     $('.text-content').append('<div>'+e.message+'</div>');
        // });

        // $('button').click(function(){
        //     var color = '';
        //     if($(this).attr('name') == 'kr'){
        //         color == 'red';
        //     }
        //     else if($(this).attr('name') == 'sn'){
        //         color == 'blue';
        //     }
        //     var value = 0;
        //     axios({
        //         method: 'post',
        //         url: 'graph',
        //         data: {
        //             data: myChart.data.datasets,
        //             graph: color,
        //             value: value,
        //         },
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        //         },
        //     });
        // });
    </script>
</body>
</html>