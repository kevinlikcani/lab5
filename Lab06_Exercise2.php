<!DOCTYPE html>
<html> 
    <head> 
        <title>Answers</title>
    </head>
	<body>
<p>
<?php 
$answerCounter = 0;
echo "What is the Capital of Kansas?  ";
echo "You answered: " . $_POST["question1"];
echo ".  Correct answer: Topeka";
if($_POST["question1"] == "Topeka")
{
    $answerCounter++;
}
?>
</p>

<p>
<?php 
echo "What Color is an Orange?  "; 
echo "You answered: " . $_POST["question2"];
echo ".  Correct answer: Orange";
if($_POST["question2"] == "Orange")
{
    $answerCounter++;
}
?>
</p>

<p>
<?php 
echo "What is the KU Mascot?  ";
echo "You answered: " . $_POST["question3"];
echo ".  Correct answer: Jayhawk";
if($_POST["question3"] == "Jayhawk")
{
    $answerCounter++;
}
?>
</p>

<p>
<?php 
echo "How Many States are in the US?  ";
echo "You answered: " . $_POST["question4"];
echo ".  Correct answer: 50";
if($_POST["question4"] == "50")
{
    $answerCounter++;
}
?>
</p>
<p>
<?php 
echo "What is 2 + 2?  ";
echo "You answered: " . $_POST["question5"];
echo ".  Correct answer: 4";
if($_POST["question5"] == "4")
{
    $answerCounter++;
}
?>
</p>

<?php 
echo "You answered " . $answerCounter . " questions correctly. ";
echo "Your Percentage Score is: " . $answerCounter/5*100 . "%";
?>
</body>

</html>