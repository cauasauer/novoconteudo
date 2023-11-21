<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Calculator</title>
</head>
<body>
<STYle>
    body {
  font-family: sans-serif;
}

.container {
  width: 500px;
  margin: 0 auto;
}

h1 {
  text-align: center;
}

form {
  width: 100%;
}

input {
  width: 100%;
  padding: 10px;
  border: 1px solid black;
}

.resultado {
  margin-top: 20px;
}

p {
  text-align: center;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

li {
  margin-bottom: 10px;
}
</STYle>
<h2>Fibonacci Calculator</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Enter the nth value of the Fibonacci sequence: <input type="number" name="num" min="1" value="<?php echo $num; ?>">
    <input type="submit" name="submit" value="Submit">
</form>

<?php
function fibonacci($n) {
    $fib = array(0, 1);
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i-1] + $fib[$i-2];
    }
    return $fib[$n-1];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["num"])) {
        echo "<p class='error'>Number is required.</p>";
    } else {
        $num = intval($_POST["num"]);
        if ($num <= 0) {
            echo "<p class='error'>Number must be positive.</p>";
        } else {
            $result = fibonacci($num);
            echo "<p>The $num-th value of the Fibonacci sequence is: $result</p>";
        }
    }
}
?>

</body>
</html>