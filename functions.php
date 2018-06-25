<?php 

  require_once 'connect/connect.php';

  if(isset($_POST['functiontocall']) && !empty($_POST['functiontocall'])) {
    call_user_func($_POST['functiontocall'], ['dbname'=>$dbname, 'tb_questions'=>$tb_questions, 'connection'=>$connection]);
  }

  function getQuestionFromDb($param){
    $sql = 'select * from `'.$param['dbname'].'`.'.$param['tb_questions'].' order by rand() limit 1;';
    $result = mysqli_query($param['connection'], $sql);
    while ($row = mysqli_fetch_array($result)){
      if(isset($row)){
        echo '{"question_text":"'.$row['question_text'].'","answer_a":"'.$row['answer_a'].'","answer_b":"'.$row['answer_b'].'","answer_c":"'.$row['answer_c'].'","answer_d":"'.$row['answer_d'].'","answer_e":"'.$row['answer_e'].'","correct_answer":"'.$row['correct_answer'].'"}';
        // $question_text = $row['question_text'];
        // $answer_a = $row['answer_a'];
        // $answer_b = $row['answer_b'];
        // $answer_c = $row['answer_c'];
        // $answer_d = $row['answer_d'];
        // $answer_e = $row['answer_e'];
        // $correct_answer = $row['correct_answer'];
      }
    }
  }