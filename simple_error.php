<?php
  function my_error_handler($error_no, $error_msg) {
    echo "<br><br>Opps, Something went wrong:<br>";
    echo "Error number: [$error_no]<br>";
    echo "Error Description: [$error_msg]<br>";
  }

  try {
    $var_msg = "This is an exception example";
    throw new Exception($var_msg);
  } catch(Exception $e) {
    echo "MEssage: " . $e->getMessage();
    echo "<br><br>getCode(); " . $e->getCode();
    echo "<br><br>__toString(): " . $e->__toString();
  }

  class DivideByZeroException extends Exception {};
  class DivideByNegativeException extends Exception {};

  function process($denominator) {
    try {
      if($denominator == 0) {
        throw new DivideByZeroException();
      } else if($denominator < 0) {
        throw new DivideByNegativeException();
      } else {
        echo 2 / $denominator;
      }
    } catch(DivideByZeroException $e) {
      echo "<br>Divide by zero exception";
    } catch(DivideByNegativeException $e) {
      echo "<br>Divide by negative number exception";
    } catch(Exception $e) {
      echo "Unknown Exception";
    }
  }

  process(0);
  process(-2);

  set_error_handler("my_error_handler");
  echo 2 / 0;
?>