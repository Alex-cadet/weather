<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background:#0000ff" >
    <div class="main">
        <a href="/">На главную</a>
    </div>
    <H1 style="color:black;text-align:center">Выборка данных</H1>
    <div class="tabs">
    <input type="radio" name="inset" value="" id="tab_1" checked>
    <label for="tab_1">Таблицы</label>
    <input type="radio" name="inset" value="" id="tab_2">
    <label for="tab_2">Вкладка №2</label>

    <input type="radio" name="inset" value="" id="tab_3">
    <label for="tab_3">Вкладка №3</label>

    <input type="radio" name="inset" value="" id="tab_4">
    <label for="tab_4">Запросы</label>
                                    {{-- Таблицы  --}}


                                    {{--1 Возрастной состав региона --}}
    <div class="txt_1" id="t1">
        <h4 style="color:black;text-align:left; ">1</h3>
        <h3 style="color:black;text-align:center; background-color: cadetblue; width:250px">Возрастной состав региона</h3>
        <button class="open"  onclick="(document.getElementById('tab1').style.display='block')">Открыть</button>
        <button class="close" onclick="(document.getElementById('tab1').style.display='none')">Закрыть</button>
        <div id="tab1">
            <table border="2" align="center" style="background-color: cadetblue">
                <tr bgcolor=yellow><td> id </td>
                <td>Дети</td>
                <td>Взрослые</td>
                <td>Пенсионеры</td></tr>
                    <?php
                    use Illuminate\Support\Facades\DB;
                    $users = DB::table('composition_of_population')
                                ->get();
                                foreach ($users as $user) 
                                {
                                    echo "<tr><td>". $user->ID."</td>";
                                    echo "<td align='center'>". $user->child."</td>";
                                    echo "<td align='center'>". $user->adults."</td>";
                                    echo "<td align='center'>". $user->pensioners."</td></tr>";
                                }
                    ?>
            </table>
        </div>
    </div>

                                                {{--2 Население --}}

    <div class="txt_1" id="t2">
        <h4 style="color:black;text-align:left">2</h3>
        <h3 style="color:black;text-align:center; background-color: cadetblue; width:150px">Население</h3>
        <button class="open"  onclick="(document.getElementById('tab2').style.display='block')">Открыть</button>
        <button class="close" onclick="(document.getElementById('tab2').style.display='none')">Закрыть</button>
        <div id="tab2" id="tab2">
            <table border="2" align="center" style="background-color: cadetblue">
                <tr bgcolor=yellow><td>id</td>
                <td>Число жителей</td>
                <td>Возрастной состав (код)</td>
                <td>Доля городскоого населения</td></tr>
                    <?php
                    $peoples = DB::table('population')
                                ->get();
                                foreach ($peoples as $people) 
                                {
                                    echo "<tr><td>".$people->id."</td>";
                                    echo "<td align='left'>".$people->count_people."000"." чел."."</td>";
                                    echo "<td align='left'>".$people->composition_of_population."</td>";
                                    echo "<td align='left'>".$people->citizen_count."%"."</td></tr>";
                                }
                    ?>
            </table>
        </div>
    </div>


                                                {{--3 Регион --}}

<div class="txt_1" id="t3">
        <h4 style="color:black;text-align:left">3</h3>
        <h3 style="color:black;text-align:center; background-color: cadetblue; width:150px">Регион</h3>
        <button class="open"  onclick="(document.getElementById('tab3').style.display='block')">Открыть</button>
        <button class="close" onclick="(document.getElementById('tab3').style.display='none')">Закрыть</button>
        <div id="tab3">
            <table border="2" align="center" style="background-color: cadetblue">
                <tr bgcolor=yellow>
                <td>id</td>
                <td>Название</td>
                <td>Площадь</td>
                <td>Авиасообщение</td>
                <td>Тип региона</td>
                <td>Экологический статус (код)</td>
                <td>Население (код)</td></tr>
                    <?php
                    $regs = DB::table('region')
                                ->get();
                                foreach ($regs as $reg) 
                                {
                                    echo "<tr><td>".$reg->id."</td>";
                                    echo "<td align='left'>".$reg->name."</td>";
                                    echo "<td align='left'>".$reg->square." км"."&sup2"."</td>";
                                    echo "<td align='left'>".$reg->avia_connection."</td>";
                                    echo "<td align='left'>".$reg->type_of_region ."</td>";
                                    echo "<td align='left'>".$reg->ecology_state_id ."</td>";
                                    echo "<td align='left'>".$reg->population_id ."</td></tr>";
                                }
                    ?>
            </table>
        </div>
    </div>


                                                    {{--4 Эклолгический статус --}}
    <div class="txt_1" id="t4">
        <h4 style="color:black;text-align:left">4</h3>
        <h3 style="color:black;text-align:center; background-color: cadetblue; width:200px">Эклолгический статус</h3>
        <button class="open"  onclick="(document.getElementById('tab4').style.display='block')">Открыть</button>
        <button class="close" onclick="(document.getElementById('tab4').style.display='none')">Закрыть</button>
        <div id="tab4">
            <table border="2" align="center">
                <tr bgcolor=yellow>
                <td>id</td>
                <td>Количество ТС</td>
                <td>Число заводов</td>
                <td>Класс загрязнения воздуха</td>
                <td>Показатель загрязнения почвы</td></tr>
                    <?php
                    $ecos = DB::table('ecology_state')
                                ->get();
                                foreach ($ecos as $eco) 
                                {
                                    echo "<tr><td>".$eco->id."</td>";
                                    echo "<td align='left'>".$eco->count_vehicles." 000"."</td>";
                                    echo "<td align='left'>".$eco->count_plants."</td>";
                                    echo "<td align='left'>".$eco->air_pollution_class."</td>";
                                    echo "<td align='left'>".$eco->soil_erosion_indicator."</td></tr>";
                                }
                    ?>
            </table>
        </div>
    </div>



                                                {{--5 Погода --}}
    <div class="txt_1" id="t5">
        <h4 style="color:black;text-align:left">5</h3>
        <h3 style="color:black;text-align:center; background-color: cadetblue; width:150px">Погода</h3>
        <button class="open"  onclick="(document.getElementById('tab5').style.display='block')">Открыть</button>
        <button class="close" onclick="(document.getElementById('tab5').style.display='none')">Закрыть</button>
        <div id="tab5">
            <table border="2" align="center">
                <tr bgcolor=yellow>
                <td>id</td>
                <td>Температура</td>
                <td>Осадки</td>
                <td>Ветер</td>
                <td>Атмосферное давление</td>
                <td>Дата</td>
                <td>Код региона</td>
                <td>Облачность</td></tr>
                    <?php
                    $weas = DB::table('weather')
                                ->get();
                                foreach ($weas as $wea) 
                                {
                                    echo "<tr><td>".$wea->PK."</td>";
                                    echo "<td align='center'>".$wea->temperature."&#176"."C"."</td>";
                                    echo "<td align='left'>".$wea->precipitation ."</td>";
                                    echo "<td align='left'>".$wea->wind."</td>";
                                    echo "<td align='left'>".$wea->atmospheric_pressure ."</td>";
                                    echo "<td align='left'>".$wea->date."</td>";
                                    echo "<td align='center'>".$wea->region_id ."</td>";
                                    echo "<td align='left'>".$wea->cloudiness."&#9748"."</td></tr>";
                                }
                    ?>
            </table>
        </div>
    </div>

    
                                            {{-- Запросы --}}

    <div id="txt_4">
        
        <div class="query">
        <label for="">Вывести регионы, где температура ниже нуля</label>
        <button class="open"  onclick="(document.getElementById('reg').style.display='block')">Открыть</button>
        <button class="close" onclick="(document.getElementById('reg').style.display='none')">Закрыть</button>
        <div></div>
        <div id="reg">
            <table border=1>
                <tr><td style="background-color: #0e41f1; font-size: 24px;">Регион</td>
                    <td style="background-color: #0e41f1; font-size: 24px;">Температура</td>
                @foreach ($minus as $min)
                <tr><td>{{ $min->name}}</td><td>{{$min->temperature}}</tr>        
                @endforeach   
            </table>
        </div>     
        </div>
        <div class="query">
            <label for="">Открыть по датам и возможности вылета промышленные регионы, в которых
                процент взрослого населения больше 30%</label>
            <button class="open" onclick="(document.getElementById('reg1').style.display='block')">Открыть</button>
            <button class="close" onclick="(document.getElementById('reg1').style.display='none')">Закрыть</button>
            <div></div>
            <div id="reg1">
                <table border=1>
                    <tr><td style="background-color: #86e20c; font-size: 24px;">Дата</td>
                        <td style="background-color: #86e20c; font-size: 24px;">Регион</td>
                        <td style="background-color: #86e20c; font-size: 24px;">Доля взрослых</td>
                        <td style="background-color: #86e20c; font-size: 24px;">Полёты</td>
                        <td style="background-color: #86e20c; font-size: 24px;">Авиасообщение</td>
                        <td style="background-color: #86e20c; font-size: 24px;">Ветер</td><tr>
                    @foreach ($adReg as $ad)
                    <tr><td>{{$ad->date}}</td><td>{{ $ad->name}}</td><td>{{$ad->adults}}%
                        <td>{{$flySt->flyWeather($ad->avia_connection,$ad->wind)}}</td>
                        <td>{{$ad->avia_connection}}</td>
                        <td>{{$ad->wind}}</td></tr>        
                    @endforeach   
                </table>
            </div>     
            </div>           
    </div>   
</div>
<style>
    .tabs { width: 100%; padding: 0px; margin: 0 auto; text-align: center}
    .tabs>input { display: none; }
    .tabs>input:checked + label {
    color: #000000;
    border: 1px solid #C0C0C0;
    border-bottom: 1px solid #FFFFFF;
    background: #06a893;
    }
    .tabs>label {
    display: inline-block;
    padding: 7px;
    margin: 0 -5px -1px 0;
    text-align: center;
    color: hsl(0, 75%, 36%);
    border: 1px solid #C0C0C0;
    background: rgb(128, 118, 216);
    cursor: pointer;}
    .tabs>div {
    display: none;
    padding: 12px;
    border: 1px solid hsl(30, 85%, 5%);
    background: #086ab9;}    
    .query{
        margin-top: 5px;
        border: 2px solid rgb(63, 8, 8);}
    .open{background-color:#4aec4a}
    .close{background-color:#f76d5b}
#tab_1:checked ~ .txt_1,
#tab_2:checked ~ #txt_2,
#tab_3:checked ~ #txt_3,
#tab_4:checked ~ #txt_4 { display: block; }
#reg{
    display: none;
    margin-top: 20px;}
#reg1{
    display: none;
    margin-top: 20px;}
#tab1,#tab2,#tab3,#tab4,#tab5{
    background-color: rgb(14, 196, 241);
    display: none;
    margin-top: 5px;
    border: 2px solid rgb(63, 8, 8);
    }
.txt_1{
    display: inline-flexbox;
    margin:0 auto;
    text-align: center;
    align-self: center;
    width: 700px;
    background-color: #086ab9;
    margin-top: 10px;
    border: 2px solid rgb(63, 8, 8);
    float:center;
    /* height: 120px; */
}
#t1{
    background-image: url("/images/1.png");
}
#t2{background-image:url("/images/население.png"); }
#t3{background-image:url("/images/регион.jpg"); }
#t4{background-image:url("/images/экология.png"); }
#t5{background-image:url("/images/погода.jpg"); }
</style>
</body>
</html>
