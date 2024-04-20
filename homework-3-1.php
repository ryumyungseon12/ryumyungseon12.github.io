<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>1부터 N까지의 합과 곱</title>
</head>
<body>
    <h2>1부터 N까지의 합과 곱을 구합니다.</h2>
    <form method="post">
        N의 값을 입력하세요: <input type="number" name="n" required>
        <input type="submit" value="계산하기">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $n = $_POST['n'];

        $sum = 0;
        $product = 1;

        echo "<h3>결과:</h3>";
        echo "1부터 $n 까지의 숫자: ";
        
        for ($i = 1; $i <= $n; $i++) {
            echo $i . " ";
            $sum += $i;
            $product *= $i;
        }
        echo "<br>전체 합: " . $sum;
        echo "<br>전체 곱: " . $product;
    }
?>
</body>
</html>

<!DOCTYPE html>
<html>
<body>
    <title>결과와 올림차순의 소팅한 결과</title>
    <h2> 생성된 결과와 올림차순</h2>
    <form method="post">
        10이상 100이하의 정수 N의 값을 입력하세요: <input type="number" name="n" required>
        <input type="submit" value="계산하기">
    </form>
    <?php
    $n = 30;
    $data = array();
    for($i = 0; $i < $n; $i++) {
        $data[$i] = rand(1, 100);
    }
    echo "생성된 결과: ";
    foreach($data as $value) {
        echo $value . " ";
    }
    echo "\n";
    sort($data);
    echo "오름차순으로 정렬된 결과: ";
    foreach($data as $value) {
        echo $value . " ";
    }
    echo "\n";
    ?>
</body>
</html>


<!DOCTYPE html>
<html>
<body>
    <title>Fibonacci</title>
    <h2> 100 이하의 정수 숫자 N을 입력받아 N개의 피보나치 수열과 앞과 뒤항의 비례</h2>
    <form method="post">
        100이하의 정수 N의 값을 입력하세요: <input type="number" name="n" required>
        <input type="submit" value="계산하기">
    </form>


<!DOCTYPE html>
<html>
<head>
    <title>도형 면적과 체적 계산기</title>
</head>
<body>
    <h1>도형 면적과 체적 계산기</h1>
    <h2>삼각형 면적</h2>
    <form method="post" action="">
        <label for="tri-base">밑변:</label>
        <input type="number" name="tri-base" id="tri-base" required>
        <br>
        <label for="tri-height">높이:</label>
        <input type="number" name="tri-height" id="tri-height" required>
        <br>
        <input type="submit" value="계산">
    </form>
    <?php
        if(isset($_POST['tri-base']) && isset($_POST['tri-height'])) {
            $base = $_POST['tri-base'];
            $height = $_POST['tri-height'];
            $area = $base * $height / 2;
            echo "<p>삼각형의 면적은 $area 입니다.</p>";
        }
    ?>


    <h2>직사각형 면적</h2>
    <form method="post" action="">
        <label for="rect-width">가로:</label>
        <input type="number" name="rect-width" id="rect-width" required>
        <br>
        <label for="rect-height">세로:</label>
        <input type="number" name="rect-height" id="rect-height" required>
        <br>
        <input type="submit" value="계산">
    </form>
    <?php
        if(isset($_POST['rect-width']) && isset($_POST['rect-height'])) {
            $width = $_POST['rect-width'];
            $height = $_POST['rect-height'];
            $area = $width * $height;
            echo "<p>직사각형의 면적은 $area 입니다.</p>";
        }
    ?>


    <h2>원 면적</h2>
    <form method="post" action="">
        <label for="cir-radius">반지름:</label>
        <input type="number" name="cir-radius" id="cir-radius" required>
        <br>
        <input type="submit" value="계산">
    </form>
    <?php
        if(isset($_POST['cir-radius'])) {
            $radius = $_POST['cir-radius'];
            $area = pi() * pow($radius, 2);
            echo "<p>원의 면적은 $area 입니다.</p>";
        }
    ?>


    <h2>직육면체 체적</h2>
    <form method="post" action="">
        <label for="rectp-width">가로:</label>
        <input type="number" name="rectp-width" id="rectp-width" required>
        <br>
        <label for="rectp-length">세로:</label>
        <input type="number" name="rectp-length" id="rectp-length" required>
        <br>
        <label for="rectp-height">높이:</label>
        <input type="number" name="rectp-height" id="rectp-height" required>
        <br>
        <input type="submit" value="계산">
    </form>
    <?php
    if(isset($_POST['rectp-width']) && isset($_POST['rectp-length']) && isset($_POST['rectp-height'])) {
        $width = $_POST['rectp-width'];
        $length = $_POST['rectp-length'];
        $height = $_POST['rectp-height'];
        $volume = $width * $length * $height;
        echo "<p>직육면체의 체적은 $volume 입니다.</p>";
    }
?>


<h2>원통 체적</h2>
<form method="post" action="">
    <label for="cyl-radius">반지름:</label>
    <input type="number" name="cyl-radius" id="cyl-radius" required>
    <br>
    <label for="cyl-height">높이:</label>
    <input type="number" name="cyl-height" id="cyl-height" required>
    <br>
    <input type="submit" value="계산">
</form>
<?php
    if(isset($_POST['cyl-radius']) && isset($_POST['cyl-height'])) {
        $radius = $_POST['cyl-radius'];
        $height = $_POST['cyl-height'];
        $volume = pi() * pow($radius, 2) * $height;
        echo "<p>원통의 체적은 $volume 입니다.</p>";
    }
?>


<h2>구 체적</h2>
<form method="post" action="">
    <label for="sph-radius">반지름:</label>
    <input type="number" name="sph-radius" id="sph-radius" required>
    <br>
    <input type="submit" value="계산">
</form>
<?php
    if(isset($_POST['sph-radius'])) {
        $radius = $_POST['sph-radius'];
        $volume = 4/3 * pi() * pow($radius, 3);
        echo "<p>구의 체적은 $volume 입니다.</p>";
    }
?>
</body>
</html>
<html>
<head>
    <title>달력</title>
</head>
<body>
년(年)을 입력하세요 : <input type="number" name="y" /><br />
월(月)을 입력하세요 : <input type="number" name="m" /><br />
<input type="submit" value="확인" />
</form>
<?PHP
if(isset($_POST['y']) && strlen($_POST['y']) > 0 && isset($_POST['m']) && strlen($_POST['m']) > 0) {
    $m = $_POST["m"];
    $y = $_POST["y"];
    if(checkdate($m,1,$y)) {
        $firstweekday = getDate(mktime(0,0,0,$m,1,$y)); 
        $firstweekday = $firstweekday['wday'];
        $lastday = date("t", mktime(0,0,0,$m,1,$y)); 
        $fc = ceil(($firstweekday+$lastday)/7); 
        $count = $fc*7; 
        $j=1;
        echo "<table border='3' width=\"700\" bordercolor=\"#DC143C\">";
        echo "<tr bgcolor=\"#AFEEEE\" align=\"center\"><td colspan=\"7\">". $y."년 ".$m."월 달력</td></tr>";
        echo "<tr align=\"right\" bgcolor=\"#8A2BE2\"><td>일</td><td>월</td><td>화</td><td>수</td><td>목</td><td>금</td><td>토</td></tr>";
        for($i=1; $i<=$count; $i++){
            if($i%7==1){
                echo "<tr>";
            }
            echo "<td>";
            if($i>$firstweekday && $j<=$lastday){
                echo $j;
                $j++;
            }
            else {
                echo "&nbsp;";
            }
            echo "</td>";
            if($i%7==0){
                echo "</tr>";
            }
        }
        echo "</table>";
        echo "<br/>";        
    }
}

?>
</body>
</html>