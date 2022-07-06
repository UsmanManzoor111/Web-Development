<?PHP
function factorial($x){
	$fact=1;
	for($i=1;$i<=$x;$i++){
		$fact*=$i;
	}
	return $fact;
}
define('name','Zeshan');
define('id',12345);

class Student{
	public $name;
	public $rollno;
	public $adyear;
	function __construct($name="", $rollno="", $adyear=2022){
		$this->name = $name;
		$this->rollno = $rollno;
		$this->adyear = $adyear;
	}
	function set_name($name){
		$this->name = $name;
	}
	function get_name(){
		return $this->name;
	}
	function display(){
		echo 'Name ',$this->name,"<br/>";
		echo 'Roll No ',$this->rollno,"<br/>";
		echo 'Admission Year ',$this->adyear,"<br/>";
	}
}
class CsStd extends Student{
}
$student1=new Student("Abc Student","P19-0001",2019);
$student1->display();
$student2=new Student("Student2","P19-0002",2019);
$students=array($student1,$student2);
echo "<pre>";
//print_r($students);
echo "</pre>";

$studentss[]=new stdClass;
$x=1;
if($x===1){
	$studentss[0]=new Student();
	$studentss[0]->name="Std0";
	$studentss[0]->rollno="P20-0000";
	$studentss[0]->adyear=2020;
	$studentss[1]=new Student();
	$studentss[1]->name="Std1";
	$studentss[1]->rollno="P20-0001";
	$studentss[1]->adyear=2020;
	$studentss[2]=new Student();
	$studentss[2]->name="Std2";
	$studentss[2]->rollno="P20-0002";
	$studentss[2]->adyear=2020;
}
else {
	$studentss[0]=new Class2();
}
echo "<pre>";
print_r($studentss);
echo "</pre>";

?>
<html>
	<head>
		<script>
		window.onload = (event) => {
			var einput = document.getElementsByTagName("input")[0];
			var ep = document.getElementsByTagName("p")[0];
			einput.onchange = function(event) {
				if(einput.value%2==0){
					ep.innerHTML="Even Value";
				}
				else {
					ep.innerHTML="Odd Value";
				}
			}
		};
		</script>
	</head>
	<body>
		<input type="text"/>
		<?php
		$x=150;
		echo factorial($x);
		//$y="Zeshan";
		//echo $x;
		if($x>10){
			echo '<h1>If true</h1>';
		}
		else{
			echo '<h1>Else</h1>';
		}
		for($i=0;$i<10;$i++){
			echo $i;
		}
		if(isset($y)){
			?>
			<div><h2>Welcome Mr. <?=$y?></h2></div>
			<?PHP
		}
		else{
			?>
			<div><h2>Please Login</h2></div>
			<?PHP
		}
		?>
		<p></p>
	</body>
</html>