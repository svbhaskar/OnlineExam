<?php 
        $showAlert = false;
         $showError = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'components/db_conn.php';
        $quesno = $_POST["quesno"];
        $ques = $_POST["ques"];
        $c1 = $_POST["c1"];
        $c2 = $_POST["c2"];
        $c3 = $_POST["c3"];
        $c4 = $_POST["c4"];
        $duration = $_POST["duration"];
        $corrans = $_POST["corrans"];
        $quesmarks = $_POST["quesmarks"];
        $sql = "INSERT INTO `questiondb` (`question_id`, `question`, `choice1`,`choice2`,`choice3`,`choice4`,`exam_duration`,`correct_answer`,`question_marks`) VALUES ('$$quesno', '$ques','$c1','$c2','$c3','$c4','$duration','$corrans','$quesmarks')";
        $result = mysqli_query($conn, $sql);
        $showAlert = true;
    }




?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>QuestionForm</title>
  </head>
  <body>
  <?php
  if($showAlert){      
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Question has been added.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    ';
        }    
        ?>  
    <h2 style="text-align:centre">Question Form</h2>
    <form action="/OnlineExamPortal/input.php" method="post">
  </div>
  <div class="form-group row">
    <label for="quesno" class="col-sm-2 col-form-label">Question Number:</label>
    <div class="col-md-6">
      <input type="number" class="form-control" id="quesno" name="quesno">
    </div>
  </div>
  <label for="question" class="col-sm-2 col-form-label">Question:</label>
    <div class="col-md-6">
      <input type="text" class="form-control" id="ques" name="ques">
    </div>
  </div>
  <label for="choice" class="col-sm-2 col-form-label">Choice 1:</label>
    <div class="col-md-6">
      <input type="text" class="form-control" id="c1" name="c1">
    </div>
  </div>
  <label for="choice" class="col-sm-2 col-form-label">Choice 2:</label>
    <div class="col-md-6">
      <input type="text" class="form-control" id="c2" name="c2">
    </div>
  </div>
  <label for="choice" class="col-sm-2 col-form-label">Choice 3:</label>
    <div class="col-md-6">
      <input type="text" class="form-control" id="c3" name="c3">
    </div>
  </div>
  <label for="choice" class="col-sm-2 col-form-label">Choice 4:</label>
    <div class="col-md-6">
      <input type="text" class="form-control" id="c3" name="c4">
    </div>
  </div>
  <label for="time" class="col-sm-2 col-form-label">Exam Duration</label>
    <div class="col-md-6">
      <input type="number" class="form-control" id="duration" name="duration">
    </div>
  </div>
  <label for="correctans" class="col-sm-2 col-form-label">Correct Answer</label>
    <div class="col-md-6">
      <input type="text" class="form-control" id="corrans" name="corrans">
    </div>
  </div>
  <label for="marks" class="col-sm-2 col-form-label">Question Marks</label>
    <div class="col-md-6">
      <input type="number" class="form-control" id="quesmarks" name="quesmarks">
    </div>
    <button type="submit" class="btn btn-primary mb-2">Add Question</button>
  </div>
</form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>