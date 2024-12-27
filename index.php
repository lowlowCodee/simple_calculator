<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-3">
        <h1 class="fw-bolder text-center p-2 bg-secondary rounded"><?php include 'echo.php'?></h1>
        <form action="process.php" method="post">
            <div class="mb-3">
                <label for="number1" class="form-label">Number 1</label>
                <input type="number" class="form-control" id="number1" name="number1" step="any"  required>
            </div>
            <div class="mb-3">
                <label for="number2" class="form-label">Number 2</label>
                <input type="number" class="form-control" id="number2" name="number2" step="any" required>
            </div>
            <div class="mb-3">
                <label for="operation" class="form-label">Operation</label>
                <select class="form-select" id="operation" name="operation" required>
                    <option value="add">Add</option>
                    <option value="subtract">Subtract</option>
                    <option value="multiply">Multiply</option>
                    <option value="divide">Divide</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>

        <div class="result">
            <?php
             echo "<h2 class='mt-4'>Calculation Result:</h2>";
               if (isset($_SESSION['result'])) {
                echo "<div>";
                echo "<h3 class='text-success '>Result: " . htmlspecialchars($_SESSION['result']) . "</h3>";
                echo "</div>";
               
                unset($_SESSION['result']);
            }
            ?>
        </div>
        
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>