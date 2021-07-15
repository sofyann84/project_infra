<!DOCTYPE html>
<html style="height: 100%">

<head>
    <title>Project Infra</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@5/dist/echarts.min.js"></script>
</head>

<body style="height: 100%; margin: 0">

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Project Infra</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item{{ str_contains(request()->route()->getActionName(), 'Summary') ? ' active' : ''}}">
                        <a class="nav-link" href="/">Summary{!! str_contains(request()->route()->getActionName(), 'Summary') ? htmlspecialchars_decode(' <span class="sr-only">(current)</span>') : ''!!}</a>
                    </li>
                    <li class="nav-item{{ str_contains(request()->route()->getActionName(), 'Site') ? ' active' : ''}}">
                        <a class="nav-link" href="/sites">Site{!! str_contains(request()->route()->getActionName(), 'Summary') ? htmlspecialchars_decode(' <span class="sr-only">(current)</span>') : ''!!}</a>
                    </li>
                    <li class="nav-item{{ str_contains(request()->route()->getActionName(), 'Task') ? ' active' : ''}}">
                        <a class="nav-link" href="/tasks">Task{!! str_contains(request()->route()->getActionName(), 'Summary') ? htmlspecialchars_decode(' <span class="sr-only">(current)</span>') : ''!!}</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

<div class="container">
    <h1>Soal 1</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Area</th>
                <th>Vendor</th>
                <th>Jumlah Task</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($summary1 as $item)
            <tr>
                <td>{{ $item->area }}</td>
                <td>{{ $item->vendor }}</td>
                <td>{{ $item->jumlah_task }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div id="summary1" style="height: 100%"></div>

<div class="container">
    <hr />
    <h1>Soal 2</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                @foreach ($topheader as $item)
                <th>{{ $item->vendor }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($sideheader as $j => $area)
            <tr>
                <td>{{ $area->area }}</td>
                @foreach ($topheader as $i => $vendor)
                <td>{{$summary2[$j][$i]}}</td>
                @endforeach
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@foreach ($sideheader as $j => $area)
<center><h2>{{$area->area}}</h2></center>
<div id="summary2-{{$j}}" style="height: 100%"></div>
@endforeach

<div class="container">
    <hr />
    <h1>Soal 3</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Area</th>
                <th>All Task</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($summary3 as $item)
            <tr>
                <td>{{ $item->area }}</td>
                <td>{{ $item->all_task }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div id="summary3" style="height: 100%"></div>

<script type="text/javascript">
    //summary 1
    var dom1 = document.getElementById("summary1");
    var myChart1 = echarts.init(dom1);

    var option1 = {
        xAxis: {
            type: 'category',
            data: [
                @foreach ($summary1 as $item)
                '{{ $item->area }}-{{ $item->vendor }}',
                @endforeach
            ]
        },
        yAxis: {
            type: 'value'
        },
        series: [{
            data: [
                @foreach ($summary1 as $item)
                {{ $item->jumlah_task }},
                @endforeach
            ],
            type: 'bar'
        }]
    };

    if (option1 && typeof option1 === 'object') {
        myChart1.setOption(option1);
    }

    //summary 2
    @foreach ($sideheader as $j => $area)
    var chartDom{{$j}} = document.getElementById('summary2-{{$j}}');
    var myChart{{$j}} = echarts.init(chartDom{{$j}});
    var option{{$j}} = {
        tooltip: {
            trigger: 'item'
        },
        legend: {
            top: '5%',
            left: 'center'
        },
        series: [
            {
                name: 'Area 1',
                type: 'pie',
                radius: ['40%', '70%'],
                avoidLabelOverlap: false,
                label: {
                    show: false,
                    position: 'center'
                },
                emphasis: {
                    label: {
                        show: true,
                        fontSize: '40',
                        fontWeight: 'bold'
                    }
                },
                labelLine: {
                    show: false
                },
                data: [
                    @foreach ($topheader as $i => $vendor)
                    {value: {{$summary2[$j][$i]}}, name: '{{ $vendor->vendor }}'},
                    @endforeach
                ]
            }
        ]
    };

    option{{$j}} && myChart{{$j}}.setOption(option{{$j}});
    @endforeach

    //summary 3
    var dom3 = document.getElementById("summary3");
    var myChart3 = echarts.init(dom3);

    var option3 = {
        xAxis: {
            type: 'category',
            data: [
                @foreach ($summary3 as $item)
                '{{ $item->area }}',
                @endforeach
            ]
        },
        yAxis: {
            type: 'value'
        },
        series: [{
            data: [
                @foreach ($summary3 as $item)
                {
                value: {{ $item->all_task }},
                itemStyle: {color: 'green'}
                },
                @endforeach
            ],
            type: 'bar'
        }]
    };

    if (option3 && typeof option3 === 'object') {
        myChart3.setOption(option3);
    }
</script>

</body>

</html>