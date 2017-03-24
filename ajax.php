<?php
error_reporting(0);
include 'config.php';
date_default_timezone_set('Asia/Calcutta');

$datetime = date("Y-m-d H:i:s");
$ques = $_POST["ques"];

if(strpos($_POST['ques'], '||ANS||') !== false) {
    $response['question_have_ans'] = "answer available in string";
    $answer_mode = "YES";
    $_POST['ques'] = str_replace("||ANS||", "", $_POST['ques']);
}
else 
	$answer_mode = "NO";


if($answer_mode=='YES') {
	$question = $_POST['oldQues'];
	$answer = $_POST['ques'];
	$date = date("Y-m-d H:i:s");
	mysql_query("INSERT INTO `bot`(`QusID`, `Question`, `Answer`, `CreatedDateTime`, `UpdatedDateTime`) VALUES ('','$question','$answer','$date','$date')");
	
	$response['status'] = true;
	$response['message'] = "Answer added successfully";
	$response['notification'] = 1;
}
else {
	$question_split = $_POST['ques'];
	$question_split = explode(" ", $question_split);
	$query_str = '';
	foreach ($question_split as $key => $value) {
		if($query_str == '') {
			$query_str = "Question like '%$value%'";
		}
		else {
			$query_str = $query_str. " or Question like '%$value%'";
		}
	}
	$sql = "select * from bot where ".$query_str;
	$res = mysql_query($sql);
	$high = 0;
	$num = mysql_num_rows($res);
	if($num==0)
	{
		$response['status'] = false;
		$response['message'] = "Im not sure I understand.";
		$response['ques'] = $_POST['ques'];
		$response['notification'] = 0;
		if($ques!='')
		mysql_query("INSERT INTO `questionsasked`(`QusAskID`, `Question`, `CreatedDateTime`, `UpdatedDateTime`) VALUES('','$ques','$datetime','$datetime')");
	}
	else {
		while($row = mysql_fetch_array($res)) {
			similar_text($_POST['ques'], $row['Question'], $percent);
			// echo $percent;
			if($high<$percent) {
				$high = $percent;
				$answer = $row['Answer'];
			}	
		}
		if($high<50) {
			if($ques!='')
			mysql_query("INSERT INTO `questionsasked`(`QusAskID`, `Question`, `CreatedDateTime`, `UpdatedDateTime`) VALUES('','$ques','$datetime','$datetime')");
			$response['High'] = $high;
			$response['status'] = false;
			$response['message'] = $answer = "Im not sure I understand.";
			$response['ques'] = str_replace("??", "?", $_POST['ques']);
			$response['notification'] = 0;
		}
		else {
			$response['High'] = $high;
			$response['status'] = true;
			$response['message'] = "Details found";
			$response['answer'] = $answer;
			$response['notification'] = 0;
			$response['ques'] = $_POST['ques'];	
		}	
		mysql_query("INSERT INTO `botanswers`(`BotAnsID`, `UserQuestion`, `BotAnswer`, `CreatedDateTime`, `UpdatedDateTime`) VALUES ('','$ques','$answer','$datetime','$datetime')");
	}	
	$response['sql'] = $sql;
}

echo json_encode($response);

?>