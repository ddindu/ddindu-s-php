<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
</html>
<?php
    $a=2;$b=6;$c=9;
    echo "입력된 세 정수 : $a,$b,$c<br>";
    if($a>$b&&$b>$c)
        echo "입력된 세 정수를 큰 순서대로 정렬 : $a,$b,$c";
    else if($a>$c&&$c>$b)
        echo "입력된 세 정수를 큰 순서대로 정렬 : $a,$c,$b";
    else if($b>$a&&$a>$c)
        echo "입력된 세 정수를 큰 순서대로 정렬 : $b,$a,$c";
    else if($b>$c&&$c>$a)
        echo "입력된 세 정수를 큰 순서대로 정렬 : $b,$c,$a";
    else if($c>$a&&$a>$b)
        echo "입력된 세 정수를 큰 순서대로 정렬 : $c,$a,$b";
    else if($c>$b&&$b>$a)
        echo "입력된 세 정수를 큰 순서대로 정렬 : $c,$b,$a";
?>
<?php
    echo "<br>";
    $type = "form";
    switch($type){
        case "form" :
            print "등록 폼입니다";break;
        case "confirm":
            print "확인 화면입니다.";break;
        case "exec" :
            print "등록 처리를 실행 중"; break;
        default:
            print "화면이 없습니다";
    }
?>
<?php
    $a=2;
    echo("<html>
        <head> <meta charset='uft-8'></head>
        <body>
        <h3> 2단 구구단 표 만들기 </h3>
        <table border='1' width = '100'>");
        $b=1;
        while($b<=9)
        {
            $c=$a*$b;
            echo "<tr><td align='center'>$a*$b=$c</td></tr>";
            $b++;
        }
        echo("</table>
            </body>
            </html>");
?>
<html>
    <head> <meta charset="utf-8"/> </head>
    <body>
        <h3>▶게시판 목록 보기</h3>
        <table border='1' width='600'>
            <tr bgcolor = '##cccc' align='center'>
                <th>번호</th><th>제목</th><th>글쓴이</th><th>날짜</th></tr>
                <?php
                    $num = 1;
                    $name = array('김경빈','김다훈','김민정','김상철','김형균','노수현');
                    $date='2019/3/29';
                    for($i=0;$i<=5;$i++){
                        $title="게시판제목".$num;
                        echo ("<tr><td width='50' align='center'>$num</td><td>$title</td>
                        <td width='50'>$name[$i]</td><td width='80'>$date</td></tr>");
                        $num++;
                    }
                ?>
        </table>
    </body>
</html>
<?php
    for($a=1;$a<=10;$a++){
        for($b=1;$b<=$a;$b++){
            echo"*";
           
        } echo "<br>";
    }
?>
<?php
    for($a=1;$a<5;$a++)
    {
        for($b=1;$b<5-$a;$b++) echo "　";
        for($c=1;$c<$a*2;$c++) echo "♥";
        echo "<br>";
    }
?>
<?php
    $name=array('경빈','다훈','민정','상철','형균','수현');
    for($i=0;$i<=5;$i++){
        echo ("$name[$i] <br>");
    }
?>
<?php
    $name=array('경빈','다훈','민정','상철','형균','수현');
    foreach($name as $key){
        echo("$key <br>");
    }
?>
<?php
    $name=array('경빈','다훈','민정','상철','형균','수현');
    foreach($name as $key => $value){
        echo("$key : $value <br>");
    }
?>
<?php
    for ($i=0;$i<=10;$i++)
    {
        if($i==6)break;
        echo $i."<br>";
    }
    echo "종료";
?>
<?php
    echo "<br>";
    for ($i=0;$i<=10;$i++)
    {
        if($i%2==0)continue;
        echo $i."<br>";
    }
    echo "종료";
?>
<?php
    echo "<br>";
    $school = array("통신과","3학년","1,2반");
    echo 'I love'.$school[0]."&nbsp".$school[1]."&nbsp".$school[2];
?>
<?php
    echo "<br>";
    $school[0] = "통신과";
    $school[1] = "3학년";
    $school[2] = "1,2반";
    echo 'I love'. $school[0]."&nbsp".$school[1]."&nbsp".$school[2];
?>
<?php
    echo "<br>";
    $a = array();
    $b = array();
    $c = array();
    for($i=0;$i<10;$i++)
        $a[$i]=$i+1;
    for($i=9;$i>=0;$i--)
        $b[9-$i]=$i+1;
    for($i=0;$i<10;$i++){
        echo ($a[$i]."X".$b[$i]."=".$a[$i]*$b[$i]."<br>");
    }
?>
<?php
    echo "<br>";
    $cars = array (
        array("volvo",10,300),
        array("BMW",11,250),
        array("saab",12,350),
        array("kia",13,200),
    );
    for($row=0;$row<4;$row++){
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for($col=0;$col<3;$col++){
            echo "<li>".$cars[$row][$col]."<li>";
        }
        echo "</ul>";
    }
?>

<?php
$score=array(
    array(88,98,96,77,63),
    array(86,77,66,86,93),
    array(74,83,95,86,97));
$student_num = array(1,2,3);
$num = array();
$avg = array();

    for($i=0;$i<3;$i++){
        for($j=0;$j<5;$j++){
            echo ($score.'['.$i.']['.$j.']'.' = '.$score[$i][$j]."<br>");    
            $num[$i] += $score[$i][$j];
        }   
        $avg[$i] = $num[$i]/5;
        echo '<br>';
    } 
    for($k=0;$k<3;$k++){
    echo ($student_num[$k]. "번째 학생의 점수 => 합계:".$num[$k].",평균".$avg[$k]."<br>");
}
?>

<?php
    echo "<br>";
    function plus($a,$b){
        $c = $a + $b;
        echo $c;
    }
    plus(15,25);
    echo "<br>";
    plus (1500,3500);
?>
<?php
    echo "<br>";
    function plus_1($a,$b){
        $c = $a + $b;
        return $c; 
    }
    $r = plus_1(15,25);
    echo $r."<br>";
    $r=plus_1(3500,1500);
    echo $r."<br>";
    global $num;
    $num = 15;
?>

<?php
    echo __File__."<br>".$num."<br>";
    function hap($a,$b){
        $sum = 0 ;
        while ($a<=$b){
            $sum = $sum+$a;
            $a++;
        }return $sum;
    } $total = hap($from=1,$to=100);
    echo "$from 에서 $to 까지의 합 : $total";
?>