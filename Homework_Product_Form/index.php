<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</head>

<body class="bg-dark-subtle">
    <?php
    // ចាប់ដំណើរការទិន្នន័យពេលsubmit
    $code = $name = $qty = $price = $total = $payment = "?";

    if (isset($_POST['submit'])) {
        $code = (int)$_POST['code'];
        $name = (string)$_POST['name'];
        $qty = (int)$_POST['qty'];
        $price = (float)$_POST['price'];
        // គណនា​តម្លៃ សរុប (Total)
        $total = $qty * $price;

        // កំណត់ភាគរយបញ្ចុះតម្លៃតាមលក្ខខណ្ឌ
        if ($total >= 1 && $total < 10) {
            $discount = 0.10;
        } elseif ($total >= 10 && $total < 20) {
            $discount = 0.20;
        } elseif ($total >= 20 && $total < 30) {
            $discount = 0.30;
        } elseif ($total >= 30 && $total < 40) {
            $discount = 0.40;
        } elseif ($total >= 40 && $total < 50) {
            $discount = 0.50;
        } elseif ($total >= 50 && $total < 60) {
            $discount = 0.60;
        } elseif ($total >= 60) {
            $discount = 0.70;
        } else {
            $discount = 0.00;
        }

        //​គណនាប្រាក់ ទូទាត់​ (Paymeng)
        $payment = $total - ($total * $discount);

        // កំណត់ទម្រង់បង្ហាញលេខ​ទសភាគ
        $price = number_format($price, 2) . "$";
        $total = number_format($total, 2) . "$";
        $payment = number_format($payment, 2) . "$";
    }
    ?>
    <div class="container bg-body-secondary rounded-1 shadow my-5 p-5" style=' width: 720px;'>
        <form method="POST" action="">
            <h1>Product Form</h1>
            <div class="row align-items-center mb-3">
                <div class="col-sm-3">
                    <label for="code" class="col-form-label">Input Code:</label>
                </div>
                <div class="col-sm-7">
                    <input type="number" name="code" class="form-control" required>
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <div class="col-sm-3">
                    <label for="name" class="col-form-label">Input Name:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" name="name" class="form-control" required>
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <div class="col-sm-3">
                    <label for="qty" class="col-form-label">Input Qty:</label>
                </div>
                <div class="col-sm-7">
                    <input type="number" name="qty" class="form-control" required>
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <div class="col-sm-3">
                    <label for="price" class="col-form-label">Input Price:</label>
                </div>
                <div class="col-sm-7">
                    <input type="number" step="0.01" name="price" class="form-control" required>
                </div>
            </div>
            <div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <!-- តារាងបង្ហាញលទ្ធផលតាមបែបBootstrap -->
        <div class="table-responsive mt-4">
            <table class="table table-bordered text-center align-middle m-0 ">
                <thead class="table-dark">
                    <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th>Pay</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $code; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $qty; ?></td>
                        <td><?php echo $price; ?></td>
                        <td><?php echo $total; ?></td>
                        <td class="fw-bold text-primary"><?php echo $payment; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Answere from Ai thank you  -->
</body>

</html>