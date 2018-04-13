<?
echo '<b align="center">Your BMI result:</b><br/><br/>';
$fname = $_POST['fname'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$bmi1 = $weight * 703;
$bmi2 = $height * $height;
$bmi = $bmi1/$bmi2;
//echo 'Hi '.$fname.'. Your BMI is '.$bmi.'<br/>';
if($bmi < 18.5){
	echo ''.$fname.' your BMI is '.$bmi.' and you are considered as underweight.<br/>';
}
else if($bmi >= 18.5 && $bmi <= 24.9){
	echo ''.$fname.' your BMI is '.$bmi.' and you are considered healthy.<br/>';
}
else if($bmi >= 25 && $bmi<= 29.9){
	echo ''.$fname.' your BMI is '.$bmi.' and you are considered overweight! Watch your diet!!<br/>';
}
else if($bmi >= 30){
	echo ''.$fname.' your BMI is '.$bmi.' and you are considered obese.<br/>';
}
?>