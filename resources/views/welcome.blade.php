<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/css/selectize.css" integrity="sha512-85w5tjZHguXpvARsBrIg9NWdNy5UBK16rAL8VWgnWXK2vMtcRKCBsHWSUbmMu0qHfXW2FVUDiWr6crA+IFdd1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/js/selectize.min.js" integrity="sha512-JiDSvppkBtWM1f9nPRajthdgTCZV3wtyngKUqVHlAs0d5q72n5zpM3QMOLmuNws2vkYmmLn4r1KfnPzgC/73Mw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/js/standalone/selectize.min.js" integrity="sha512-pF+DNRwavWMukUv/LyzDyDMn8U2uvqYQdJN0Zvilr6DDo/56xPDZdDoyPDYZRSL4aOKO/FGKXTpzDyQJ8je8Qw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
    <div class="container">
        <div class="row">
            @for ($j = 0; $j < 1; $j++)
            @php
                $labels = [];
                $values = [];
                for($i = 0; $i < 8640; $i++){
                    $labels[] = $i;
                    $values[] = rand(9,101);
                }
                $red = rand(1,999);
                $green = rand(1,999);
                $blue = rand(1,999);
                $datasets = [['label' => 'oabao', 'data' => $values, 'borderColor' => "rgb($red, $green, $blue)"]];
            @endphp
            <div class="col-4 col-lg-6">
                <x-graph :labels="$labels" :datasets=$datasets/>
            </div>
            <div class="col-4 col-lg-4">
                <div style="min-height: 300px; background: green;"></div>
            </div>
            <div class="col-2">
                <div style="min-height: 300px; background: rgb(85, 168, 247);"></div>
            </div>
            <div class="col-4">
                <div style="min-height: 300px; background: red;"></div>
            </div>
            <div class="col-8">
                <table class="table">
                    <tr>
                        <th>Город доставки</th>
                        <th>Оплата за доставку</th>
                        <th>Минимальная сумма заказа</th>
                    </tr>
                    <tr>
                        <td>Абакан</td>
                        <td>100 рублей</td>
                        <td>0 рублей</td>
                    </tr>
                    <tr>
                        <td>Черногорск</td>
                        <td>150 рублей</td>
                        <td>350 рублей</td>
                    </tr>
                    <tr>
                        <td>Усть-Абакан</td>
                        <td>150 рублей</td>
                        <td>350 рублей</td>
                    </tr>
                    <tr>
                        <td>Минусинск</td>
                        <td>250 рублей</td>
                        <td>500 рублей</td>
                    </tr>
                    <tr>
                        <td>Саяногорск</td>
                        <td>350 рублей</td>
                        <td>850 рублей</td>
                    </tr>
                </table>
            </div>
            <div class="col-4">
                <h1>Заголовок 1 Заголовок1<a href="afds">Заголовок 1</a></h1>
                <h2>Заголовок 2</h2>
                <h3>Заголовок 3</h3>
                <h4>Заголовок 4</h4>
                <h5>Заголовок 5</h5>
                <h6>Заголовок 6</h6>
                <p>Тектс тексттекст 54353455 текст текст те текст тексттексттекст текс ст кст тексттекст текст <a href="">ссылка</a> текст текст текст: текст тексттексттексттекст текст тек текст</p>
                <p>fsadfas ntct text txt text txtext tx text txtext txtext txtext tx text tx</p>
                <a href="asdfsa">ссылка</a>
            </div>
            <div class="col-2">
                <div style="min-height: 300px; background: rgb(209, 56, 10);"></div>
            </div>
            <div class="col-2">
                <div style="min-height: 300px; background: rgb(30, 4, 102);"></div>
            </div>
            <div class="col-4">
                <form class="form">
                    <div class="field"><label>текст<input type="text"></label></div>
                    <div class="field"><label><input type="checkbox"><span>aboba</span></label></div>
                    <div class="field"><label><input type="file"></div></label>
                    <div class="field"><label>много текста<textarea></textarea></label></div>
                    <div class="field">
                        <label> выбрать </label>
                        <select multiple>
                            <option>Пункт 1</option>
                            <option>Пункт 2</option>
                        </select>
                    </div>
                    <div class="field"><button class="button">asf</button><input class="button" type="button" value="f"></div>
                    <div class="field"><input class="button" type="submit"></div>
                </form>
            </div>
            <div class="col-1">
                <div style="min-height: 300px; background: rgb(5, 207, 221);"></div>
            </div>
            <div class="col-2">
                <div style="min-height: 300px; background: rgb(202, 14, 177);"></div>
            </div>
            <div class="col-3">
                <div style="min-height: 300px; background: rgb(35, 56, 27);"></div>
            </div>
            <div class="col-4">
                <div style="min-height: 300px; background: rgb(144, 196, 3);"></div>
            </div>
            <div class="col-1">
                <div style="min-height: 300px; background: rgb(196, 145, 3);"></div>
            </div>
            <div class="col-1">
                <div style="min-height: 300px; background: rgb(196, 3, 3);"></div>
            </div>
            <div class="col-12">
                <div style="min-height: 300px; background: rgb(196, 3, 3);"></div>
            </div>
            @endfor
        </div>
    </div>
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
    {{-- <script src="{{asset('js/app.js?v=5')}}"></script> --}}
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

        $(function () {
            $("select").selectize({
                create: true,
            });
        });
    </script>
</body>
</html>