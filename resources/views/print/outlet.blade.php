<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME', 'F&G') }} </title>
</head>
<body>
<style>
    .t_table {
        width: 100%;
        position: relative;
        border-collapse: collapse;
    }

    .t_table th {
        border: 1px solid black;
        text-align: left;
        padding: 10px 15px;
    }

    .t_table td {
        border: 1px solid black;
        text-align: left;
        padding: 10px 15px;
    }

    .main {
        width: 100%;
        padding: 20px;
        box-sizing: border-box;
    }

    .logoDiv {
        width: 100%;
        text-align: center;
        padding: 20px;
        box-sizing: border-box;
    }
    .txt1{
        width: 100%;
        text-align: right;
        font-size: 18px;
    }



</style>
<div class="main">
    <div class="logoDiv">
        <img alt="Logo" src="{{public_path('dashboard_assets/images/F&G.png')}}"/>
        <span><img src="{{public_path('dashboard_assets/images/F&G Text.png')}}" alt=""></span>
    </div>
    <h1 class="txt1">{{$schedulesLcationOne->hotellocation->location_name }} - {{\Carbon\Carbon::parse($schedulesLcationOne->date)->format('d F Y')}}</h1>
    <table
        class="table  text-center table-bordered t_table">
        <thead>
        <tr>
            <th>Outlet Name</th>
            <th>Possible Points</th>
            <th>This Visit</th>
            <th>%</th>
            <th>Prev.Visit</th>
            <th>%</th>
            <th>Difference</th>
        </tr>
        </thead>
        <tbody>
        @foreach($outletsAll as $oultet)
            <tr>
                <th scope="row">{{isset($oultet->name)?$oultet->name:'No'}}</th>

                <td>{{$total_possible[$oultet->id]}}</td>
                <td>{{$marksSum[$oultet->id]}}</td>
                <td>
                    {{number_format(($marksSum[$oultet->id]/$total_possible[$oultet->id])*100,2)}}
                    %
                </td>
                <td>
                    {{$marksPreviousSum[$oultet->id]}}
                </td>

                <td>
                    {{number_format(($marksPreviousSum[$oultet->id]/$total_possible[$oultet->id])*100,2)}}
                    %
                </td>
                <td>
                    {{number_format((($marksSum[$oultet->id]/$total_possible[$oultet->id])*100)- (($marksPreviousSum[$oultet->id]/$total_possible[$oultet->id])*100),2)}}
                    %
                </td>
            </tr>
        @endforeach
        <tr>
            <th>Total :</th>

            <th>{{$total_possible_all}}</th>
            <th>{{$marksSumAll}}</th>
            <th>
                @if($total_possible_all != 0)
                    {{number_format(($marksSumAll/$total_possible_all)*100,2)}}%
                @else
                    0%
                @endif
            </th>
            <th>
                {{$marksPreviousSumALl}}
            </th>
            <th>
                @if($total_possible_all != 0)
                    {{isset($marksPreviousSumALl,$total_possible_all)?number_format(($marksPreviousSumALl/$total_possible_all)*100,2):0}}
                    %
                @else
                    0%
                @endif
            </th>
            <th>
                @if($total_possible_all != 0)
                    {{isset($marksSumAll,$total_possible_all,$marksPreviousSumALl)?number_format((($marksSumAll/$total_possible_all)*100)-(($marksPreviousSumALl/$total_possible_all)*100),2):0}}
                    %
                @else
                    0%
                @endif
            </th>
        </tr>

        </tbody>
    </table>

</div>
</body>
</html>
