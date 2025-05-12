<?php
$link = mysqli_connect("localhost", 'root', '','ticket');
$_GET['order'] = isset($order) ? $_GET['order'] : null;
mysqli_set_charset($link, "utf8");      //
?>
<html>
    <head>
        <meta charset="utf-8">
        <style>
            div {
                background-color:white;
                float: left;
            }
            .Name{
                width: 85%;
            }
            .Button{
                width: 5%;
                text-align: right;
            }

            table, th, td {
                text-align: center;
                border: 1px solid black;
                border-collapse: collapse;
            }

            td {
                height:10px;
            }
        </style>
    </head>
<body>
<form action="ticket.php" method="POST">
<div class="Name">
    <tr>
        고객성명 <input type="text" name="name">
    </tr>
</div>
<div class="Button">
    <tr>
        <td>
            <input type="submit" name="submit" value="합계">
        </td>
    </tr>
</div>

<br><br>

<table style="width:100%">
    <thead>
        <tr>
            <th style="width:5%">No</th>
            <th >구분</th> 
            <th colspan="2">어린이</th>
            <th colspan="2">어른</th>
            <th>비교</th>
        </tr>
    </thead>
    <thead>
        <tr>
            <?php
            $sql = "SELECT * FROM information";
            $result = mysqli_query($link, $sql);
            while($row = mysqli_fetch_array($result)) {
            ?>
                <td><?=$row['No']?></td>
            <td><?=$row['sortation']?></td>
            <td><?=number_format($row['children'])?></td>
            <td>
                <select name="children<?=$row['No']?>">    <!-- $row['No']는 숫자 부여 -->
                    <option value="0" selected>0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
            </td>
            <td><?=number_format($row['adult'])?></td>
            <td>
                <select name="adult<?=$row['No']?>">    <!-- $row['No']는 숫자 부여 -->
                    <option value="0" selected>0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
            </td>
            <td><?=$row['comparison']?></td>
        </tr>
        <?php
        }
        ?>
    </form>    
    </thead>
</table>

<?php
if (isset($_POST['name']) && strlen($_POST['name']) > 0) {
    if (isset($_POST['submit']) && $_POST['submit'] == "합계" ) {
        echo "<br>";
        date_default_timezone_set('Asia/Seoul');
        $ampm = date('A') === 'AM' ? '오전' : '오후';   //am & pm을 오전 & 오후로 변환
        echo date("Y년 n월 j일") . " " . $ampm . " " . date("h:i") . "분<br>";
        echo $_POST['name'] . " 고객님 감사합니다.<br>";
        
        $sum = 0;
        $sql = "SELECT * FROM information";
        $result = mysqli_query($link, $sql);
        while($row = mysqli_fetch_array($result)) {
            if ( $_POST['children' . $row['No']] > 0 ) {
                echo "어린이" . " " . $row['sortation'] . " " . $_POST['children' . $row['No']] . "매<br>";
                $sum = $sum + ( $row['children'] * $_POST['children' . $row['No']] );
            }
            if ( $_POST['adult' . $row['No']] > 0 ) {
                echo "어른" . " " . $row['sortation'] . " " . $_POST['adult' . $row['No']] . "매<br>";
                $sum = $sum + ( $row['adult'] * $_POST['adult' . $row['No']] );
            }
        }
        echo "합계 " . number_format($sum) . "입니다.";

        $sql=" INSERT INTO  `scores` ".     // scores table에 저장
        "(`name` , `basics1` , `basics2` , `big1` , `big2` , `freedom1` , `freedom2` , `annual1`, `annual2` )".
        "VALUES ('$_POST[name]',  '$_POST[children1]',  '$_POST[adult1]',  '$_POST[children2]',  '$_POST[adult2]',  '$_POST[children3]',  '$_POST[adult3]',  '$_POST[children4]',  '$_POST[adult4]')";
    }
}

/* POST 값 확인 코드
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    print_r($_POST);
}  */

mysqli_query($link,$sql);
?>

</body>
</html>
