<?php
echo"hello world";
echo"</br>";
$name='siva';
$sname='pp';
echo $name,$sname;
echo"</br>";
$x='siva';
$$x=7;
echo $x;
echo"</br>";
echo $$x;
echo"</br>";
$a=10;
if($a=10)
{
    echo"true";
}else{
    echo"false";
}
echo"</br>";
for($n=1;$n<=10;$n++)
{
    echo"$n <br/>";
}
echo"</br>";
$n=1;
while($n<10){
    echo $n;
    if($n==4){
    break;
    }
    $n++;
}
echo"</br>";
/*$n=1;
while($n<10){
    if($n==4){
        $n++;
    continue;
    }
    echo $n;
}
echo"</br>";
do{
    $n++;
    echo $n;
}while($n<10)*/
echo"</br>";
function siva(){
    echo "hi mapla";
}
siva();
echo"</br>";
$letters=array("s","i","v","a");
echo count($letters);
echo"</br>";
echo sort($letters);
echo"</br>";

foreach($letters as $s){
    echo "$s";
}
echo"</br>";
$rev=array_reverse($letters);
echo $rev;
echo"</br>";
//string
$str="i am siva";
echo $str;
//class,inheritance
class sakthi{
    function msg(){
        echo "padi da mapla";
    }
    function ex(){
        echo "thungu da mapla";
    }
}
class pongal extends sakthi{
function kindu(){
    echo "rs10";
}
}
$obj=new pongal();
echo"</br>";
$obj->msg();
echo"</br>";
$obj->ex();
echo"</br>";
$obj->kindu();
echo"</br>";
//interface
interface father{
    public function add();
}
interface mother{
    public function sub();
}
class child implements father,mother{
    public function add(){
        echo "addition...";
    }
    public function sub(){
        echo "substration...";
    }
}
$obj=new child();
$obj->add();
echo"</br>";
$obj->sub();
//abstraction
abstract class sakthivel{
    abstract public function addition();
    abstract public function subtraction();
    abstract public function divition();
}
class pongals extends sakthi{
    public function addition(){
        echo "addition...";
    }
    public function subtraction(){
        echo "substration...";
    }
    public function divition(){
        echo "div";
    }
}
$obj=new pongals();
echo"</br>";
$obj->addition();
echo"</br>";
$obj->subtraction();
echo"</br>";
$obj->divition();
//trait(similar to interface)
trait msg1{
    public function msgs1(){
        echo "padi da mapla";
    }
}
trait msg2{
    public function msgs2(){
        echo "full ah padikkalatium ethaachi opethula";
    }
}
class welcome1{
    use msg1;
}
class welcome2{
    use msg1,msg2;
}
$obj=new welcome1();
echo"</br>";
$obj->msgs1();
echo"</br>";
$obj=new welcome2();
$obj->msgs1();
echo"</br>";
$obj->msgs2();
//access specifier
class mapla{
    var $a=10;
    var $b=20;
}
//which obj in class
$obj=new mapla();
echo"</br>";
echo get_class($obj);
//which var in class
//print_r(get_class_methods(class_name),var("mapla"))
//forms
//file handling
$file=fopen('../hello.txt','w');
fwrite($file,'poda manda');
fwrite($file,'kasayam');
fclose($file);
echo "file written successfully";
//unlink('../hello.txt');
//echo "file deleted successfully"
//read
$filename="../hello.txt";
$fp=fopen($filename,"r");
$contents=fread($fp,filesize($filename));
echo "<h1>$contents</h1>";
fclose($fp);
?>