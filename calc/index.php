<!doctype html>
<html lang="en">

<head>
  <title>Ecommerce</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center text-primary mt-5">
        <h4>
          calc-php!
        </h4>
      </div>
      <div class="col-4 offset-4  mt-5">
        <form action="index.php" method="POST">
          <div class="form-group">
            <label for="Name">number1</label>
            <input type="text" name="number1" id="number1" class="form-control" placeholder="" aria-describedby="helpId">
          </div>
          <div class="form-group">
                        <label for="Name">opertiation</label><br>
                        <input type="radio" name="sub" value="+">
                        <label for="html">( + )</label><br>
                        <input type="radio" name="sub" value="-">
                        <label for="css">( - )</label><br>
                        <input type="radio" name="sub" value="*">
                        <label for="javascript">( * )</label><br>
                        <input type="radio" name="sub" value="/">
                        <label for="javascript">( / )</label>
                    </div>

          <div class="form-group">
            <label for="Name">number2</label>
            <input type="text" name="number2" id="number2" class="form-control" placeholder="" aria-describedby="helpId">
          </div>
          <button class=" btn btn-outline-primary form-control"> Result </button>
        </form>  
        <?php

                if ($_POST) {

                    $name1 = $_POST['number1'];
                    $name2 = $_POST['number2'];

                    $oper = $_POST['sub'];

                    if ($oper == '+') {
                        echo "The Result = " . $name1 + $name2;
                    } elseif ($oper == '-') {
                        echo "The Result = " . $name1 - $name2;
                    } elseif ($oper == '*') {
                        echo "The Result = " . $name1 * $name2;
                    } elseif ($oper == '/') {
                        echo "The Result = " . $name1 / $name2;
                    }
                }
                ?>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

<!--     <div class="container">
        <div class="row">
            <div class="col-12 text-center text-primary mt-5">
                <h4>
                    Buy Now!
                </h4>
            </div>
            <div class="col-4 offset-4  mt-5">

                <?php

                if ($_POST) {

                    $num1 = $_POST['number1'];
                    $num2 = $_POST['number2'];

                    $oper = $_POST['sub'];

                    if ($oper == '+') {
                        echo "The Result = " . $num1 + $num2;
                    } elseif ($oper == '-') {
                        echo "The Result = " . $num1 - $num2;
                    } elseif ($oper == '*') {
                        echo "The Result = " . $num1 * $num2;
                    } elseif ($oper == '/') {
                        echo "The Result = " . $num1 / $num2;
                    }
                }
                ?>
                <form action="index5.php" method="POST">
                    <div class="form-group">
                        <label for="Name">number1</label>
                        <input type="text" name="number1" class="form-control" >
                    </div>


                    <div class="form-group">
                        <label for="Name">number2</label>
                        <input type="text" name="number2" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="Name">opertiation</label><br>
                        <input type="radio" name="sub" value="+">
                        <label for="html">( + )</label><br>
                        <input type="radio" name="sub" value="-">
                        <label for="css">( - )</label><br>
                        <input type="radio" name="sub" value="*">
                        <label for="javascript">( * )</label><br>
                        <input type="radio" name="sub" value="/">
                        <label for="javascript">( / )</label>
                    </div>




                    <button class=" btn btn-outline-primary form-control"> Result </button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html> --> 