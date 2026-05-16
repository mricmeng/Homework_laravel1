<!DOCTYPE html>
<html lang="km">

<head>
  <meta charset="UTF-8">
  <title>Score Calculate</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</head>

<body>

  <?php
  // ប្រកាសអថេរដំបូង
  $score1 = $score2 = $score3 = $score4 = $score5 = "";
  $total = $average = $grade = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ទទួលទិន្នន័យពី Form
    $score1 = (float)$_POST['score1'];
    $score2 = (float)$_POST['score2'];
    $score3 = (float)$_POST['score3'];
    $score4 = (float)$_POST['score4'];
    $score5 = (float)$_POST['score5'];

    // គណនាសរុប និងមធ្យមភាគ
    $total = $score1 + $score2 + $score3 + $score4 + $score5;
    $average = $total / 5;

    // លក្ខខណ្ឌកំណត់និទ្ទេស (Grade)
    if ($average >= 90 && $average <= 100) {
      $grade = "A";
    } elseif ($average >= 80 && $average < 90) {
      $grade = "B";
    } elseif ($average >= 70 && $average < 80) {
      $grade = "C";
    } elseif ($average >= 60 && $average < 70) {
      $grade = "D";
    } elseif ($average >= 50 && $average < 60) {
      $grade = "E";
    } else {
      $grade = "F";
    }
  }
  ?>
  <div class="container bg-success-subtle rounded-1 shadow my-5 p-5" style=' width: 960px;'>
    <h2>Score Calculate</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <div class="row align-items-center mb-3">
        <div class="col-sm-3">
          <label>Input Score គណិតវិទ្យា:</label>
        </div>
        <div class="col-sm-7">
          <input type="number" step="0.01" class="form-control" name="score1" value="<?php echo $score1; ?>" required>
        </div>
      </div>
      <div class="row align-items-center mb-3">
        <div class="col-sm-3">
          <label>Input Score​ ភាសាខ្មែរ:</label>
        </div>
        <div class="col-sm-7">
          <input type="number" step="0.01" class="form-control" name="score2" value="<?php echo $score2; ?>" required>
        </div>
      </div>
      <div class="row align-items-center mb-3">
        <div class="col-sm-3">
          <label>Input Score​ ភាសាអង់គ្លេស:</label>
        </div>
        <div class="col-sm-7">
          <input type="number" step="0.01" class="form-control" name="score3" value="<?php echo $score3; ?>" required>
        </div>
      </div>
      <div class="row align-items-center mb-3">
        <div class="col-sm-3">
          <label>Input Score គីមីវិទ្យា:</label>
        </div>
        <div class="col-sm-7">
          <input type="number" step="0.01" class="form-control" name="score4" value="<?php echo $score4; ?>" required>
        </div>
      </div>
      <div class="row align-items-center mb-3">
        <div class="col-sm-3">
          <label>Input Score រូបវិទ្យា:</label>
        </div>
        <div class="col-sm-7">
          <input type="number" step="0.01" class="form-control" name="score5" value="<?php echo $score5; ?>" required>
        </div>
      </div>
      <input type="submit" class="btn btn-primary" name="submit" value="Submit">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
      <br>
      <p">Your Total Score:
        <strong>
          <font color=red><?php echo $total; ?></font>
        </strong></p>
        <p>Your Average:
          <strong>
            <font color=red>
              <?php echo $average; ?>
            </font>
          </strong>
        </p>

        <p>Your Grade:
          <strong>
            <font color=red>
              <?php echo $grade; ?>
            </font>
          </strong>
        </p>
      <?php endif; ?>
  </div>
  <!-- Answere for Ai thanks-->

</body>

</html>