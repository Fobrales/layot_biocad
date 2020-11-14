<html>
<head>
    <link rel="stylesheet" href="layout.css">
</head>
<body>
<form method="get">
    <span class="text1">Enter inventory number, guid or bims id</span><br>
    <input type="text" value="A-001234" class="textsearch"><input type="submit" value="Search" name="search" class="buttonsearch">
</form>
<img class="icon" src="scale.png">
<div class="title">
    <span class="namedevice">Аналитические весы OHAUS Adventurer АХ324 (B715976163)</span>
</div>
<div class="data"><span class="datatext"><span class="property">Тип оборудования:</span> Весы<br>
        <span class="property">Статус:</span> Готов к работе<br>
        <span class="property">Изготовитель:</span> Ohaus<br>
        <span class="property">Модель:</span> AX-123<br>
        <span class="property">Ответственное подразделение (ремонт):</span> Группа обслуживания лабораторного оборудования<br>
        <span class="property">Эксплуатирующее подразделение:</span> Химико-аналитическая лаборатория 2.0<br>
        <span class="property">МОЛ:</span> Иванов Иван Иванович<br>
        <span class="property">Территория:</span> г. Санкт-Петербург (Нойдорф)<br>
        <span class="property">Серийный номер:</span> B715976163<br>
        <span class="property">GUID:</span> <span style="color: #4A90E2">508b2a71-662e-4983-ae0c-3cb0c1cd21c5</span><br>
        <span class="property">Bims ID:</span> <span style="color: #4A90E2">49db8db1-585f-4b9e-bbf0-8a59698edc8b</span><br>
            <span class="property">Tam:</span> <span style="color: #4A90E2">А-001234</span><br>
        </span>
</div>
<div>
    <div class="time">
        <select>
            <option value="1 month">1 month</option>
            <option value="1 month">3 month</option>
            <option value="1 month">6 month</option>
        </select>
    </div>
    <div class="filter">
        <input name="mode" class="rad" id="rd1" type="radio" value="cal" checked><label for="rd1">Calibration</label>
        <p><input name="mode" class="rad" id="rd2" type="radio" value="meas"><label for="rd2">Measuring</label></p>
        <p><input name="mode" class="rad" id="rd3" type="radio" value="use"><label for="rd3">Using</label></p>
    </div>
    <form method="post">
        <input type="submit" value="Generate report" name="search" class="buttonreport">
    </form>
</div>
<div class="reportform">
    <span class="text2">Calibration report</span>
    <div class="report">
            <table>
                <tr class="headtable"><td class="reportdata"><span class="tbheadtext">Data</span></td><td class="sol"><span class="tbheadtext">Used buffer solutions</span></td><td class="slope"><span class="tbheadtext">Slope, %<br>Norm 95-105</span></td><td class = "offset"><span class="tbheadtext">Offset, mV<br>Norm ±(0-20)</span></td><td class="user"><span class="tbheadtext">User</span></td></tr>
                <tr class="reportstring"><td class="reportdata">04.10.19<br>10:23</td><td class="sol">В1: № 2000460789536: pH 1.09<br>
                        В2: № 2000460789536: pH 2.00<br>
                        В3: № 2000460789536: pH 4.01<br>
                        В4: № 2000460789536: pH 7.00<br>
                        В5: № 2000460789536: pH 9.21<br></td><td class="slope">98.7<label><img src="good.png"></label></td><td class = "offset">-0.3<label><img src="good.png"></label></td><td class="user">Иванов Генадий Петрович</td></tr>
                <tr class="reportstring"><td class="reportdata">04.10.19<br>10:23</td><td class="sol">В1: № 2000460789536: pH 1.09<br>
                        В2: № 2000460789536: pH 2.00<br>
                        В3: № 2000460789536: pH 4.01<br>
                        В4: № 2000460789536: pH 7.00<br>
                        В5: № 2000460789536: pH 9.21</td><td class="slope">98.7<label><img src="good.png"></label></td><td class = "offset">-0.3<label><img src="good.png"></label></td><td class="user">Петров Иван Генадьевич</td></tr>
                <tr class="reportstring"><td class="reportdata">04.10.19<br>10:23</td><td class="sol">В1: № 2000460789536: pH 1.09<br>
                        В2: № 2000460789536: pH 2.00<br>
                        В3: № 2000460789536: pH 4.01<br>
                        В4: № 2000460789536: pH 7.00<br>
                        В5: № 2000460789536: pH 9.21</td><td class="slope">98.7<label><img src="good.png"></label></td><td class = "offset">-0.3<label><img src="good.png"></label></td><td class="user">Петров Генадий Иванович</td></tr>
                <tr><td class="reportdata">04.10.19<br>10:23</td><td class="sol">В1: № 2000460789536: pH 1.09<br>
                        В2: № 2000460789536: pH 2.00<br>
                        В3: № 2000460789536: pH 4.01<br>
                        В4: № 2000460789536: pH 7.00<br>
                        В5: № 2000460789536: pH 9.21</td><td class="slope">90.1<label><img src="bad.png"></label></td><td class = "offset">-0.5<label><img src="good.png"></label></td><td class="user">Генадьев Иван Петрович</td></tr>
            </table>
    </div>
</div>
</body>
</html>