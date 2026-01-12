<?php

class Calculator {
  public static function calculate($num1, $operator, $num2) {
    switch ($operator) {
      case '+': return $num1 + $num2;
      case '-': return $num1 - $num2;
      case '*': return $num1 * $num2;
    }
  }
}

$result = Calculator::calculate(5, '+', 3);
echo "Result: $result";

?>