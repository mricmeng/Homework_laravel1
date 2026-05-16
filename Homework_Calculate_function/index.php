<?php
// ១. បង្កើត Function សម្រាប់គណនា
function calculate($num1, $num2, $operator)
{
  switch ($operator) {
    case '+':
      return $num1 + $num2;
    case '-':
      return $num1 - $num2;
    case '*':
      return $num1 * $num2;
    case '/':
      if ($num2 == 0) {
        return "មិនអាចចែកនឹងសូន្យបានទេ";
      }
      return $num1 / $num2;
    case '%':
      if ($num2 == 0) {
        return "មិនអាចចែករកសំណល់នឹងសូន្យបានទេ";
      }
      return $num1 % $num2;
    default:
      return "ប្រមាណវិធីមិនត្រឹមត្រូវ";
  }
}

// ២. ចាប់យកទិន្នន័យនៅពេលអ្នកប្រើប្រាស់ចុច Button
$result = "????";
if (isset($_POST['calc'])) {
  $first_number = floatval($_POST['first_number']);
  $ending_number = floatval($_POST['ending_number']);
  $operator = $_POST['calc'];

  // ហៅ Function មកប្រើ
  $result = calculate($first_number, $ending_number, $operator);
}
?>

<!DOCTYPE html>
<html lang="km">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>លំហាត់អនុវត្តន៍ - Bootstrap 5</title>
  <!-- ភ្ជាប់ទៅកាន់ Bootstrap 5 CSS តាមរយៈ CDN -->
  <link href="https://jsdelivr.net" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <style>
    /* រក្សាពណ៌ផ្ទៃខាងក្រោយតាមទម្រង់ដើមរបស់អ្នក */
    .custom-calc-box {
      background-color: #00c2cb !important;
      border: 2px solid #000000;
      max-width: 500px;
    }
  </style>
</head>

<body class="bg-light p-4">

  <div class="container " style="width:960px;">
    <h3 class="fw-bold text-dark">លំហាត់អនុវត្តន៍</h3>
    <p class="text-muted">ប្រើប្រាស់នូវ function ដើម្បីដោះស្រាយបញ្ហាជាមួយ Bootstrap 5។</p>
    <p class="text-secondary small">ឧទាហរណ៍ទី ១</p>

    <!-- បង្កើតប្រអប់ម៉ាស៊ីនគិតលេខដោយប្រើ Bootstrap Card -->
    <form method="post" action="">
      <div class="card custom-calc-box text-white p-4 shadow">

        <!-- ជួរទី ១: First Number -->
        <div class="row align-items-center mb-3">
          <label class="col-sm-4 col-form-label fw-bold fs-5">First Number</label>
          <div class="col-sm-8">
            <input type="number" name="first_number" step="any" class="form-control border-0 rounded-0 fs-5" required
              value="<?php echo isset($_POST['first_number']) ? htmlspecialchars($_POST['first_number']) : ''; ?>">
          </div>
        </div>

        <!-- ជួរទី ២: Ending Number -->
        <div class="row align-items-center mb-3">
          <label class="col-sm-4 col-form-label fw-bold fs-5">Ending Number</label>
          <div class="col-sm-8">
            <input type="number" name="ending_number" step="any" class="form-control border-0 rounded-0 fs-5" required
              value="<?php echo isset($_POST['ending_number']) ? htmlspecialchars($_POST['ending_number']) : ''; ?>">
          </div>
        </div>

        <!-- ជួរទី ៣: ប៊ូតុងសញ្ញាប្រមាណវិធី -->
        <div class="d-flex justify-content-end gap-2 mb-3">
          <button type="submit" name="calc" value="+" class="btn btn-light border fw-bold px-3 fs-5">+</button>
          <button type="submit" name="calc" value="-" class="btn btn-light border fw-bold px-3 fs-5">-</button>
          <button type="submit" name="calc" value="*" class="btn btn-light border fw-bold px-3 fs-5">*</button>
          <button type="submit" name="calc" value="/" class="btn btn-light border fw-bold px-3 fs-5">/</button>
          <button type="submit" name="calc" value="%" class="btn btn-light border fw-bold px-3 fs-5">%</button>
        </div>

        <!-- ជួរទី ៤: បង្ហាញលទ្ធផល -->
        <div class="fw-bold fs-5 pt-2 border-top border-white border-opacity-25">
          Your Result: &nbsp;&nbsp;&nbsp;&nbsp; <span><?php echo $result; ?></span>
        </div>

      </div>
    </form>
  </div>
  <!-- Generate by Ai -->
  <!-- ភ្ជាប់ទៅកាន់ Bootstrap 5 JavaScript -->
  <script src="https://jsdelivr.net"></script>
</body>

</html>