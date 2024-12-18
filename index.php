<h1>File index.php</h1>
<?php
$myvar = "Salsabeela";
$myvar = 1;
echo "<h1>" .$myvar."</h1>";
echo "<br>";
$x = 1;
function x(){
    global $x; //เรียกใช้ค่า x ข้างใน
    $x = 2;

}
echo $x;
echo "<br>";
x();
echo $x; //ค่า x ไม่เปลี่ยน

echo "1" + "1";//แปลง String เป็นตัวเลข 


/** FILE index.php */
# comment
//comment
echo "<br>";
//arry
$my_arry = array(1, array(2), 3, 4, 5, "myindex" => (3+3), "myindex" => 7);
print_r($my_arry);
echo "<br>";
$my_arry[] = 2;
$my_arry[] = 1;
$my_arry[] = 3;
print_r($my_arry);

//if-else
if(TRUE){
    echo "if true";
}else if(FALSE){
    echo "else if false";
}else{
    echo "else";
}
echo "<br>";

//loop
$my_arry = array(1, 2, 3, 4, 5);
for($i; $i < sizeof($my_arry); $i++){
    echo $my_arry[$i];
    echo "<br>";
}


?>
<h1><?php echo $myvar; ?></h1>