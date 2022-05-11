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
          grade-php!
        </h4>
      </div>
      <div class="col-4 offset-4  mt-5">
        <form action="index.php" method="POST">
          <div class="form-group">
            <div class="form-group">
            <!-- <label for="Name">number</label> -->
            <input type="text" name="number1" id="number" class="form-control" placeholder="Arabic" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <!-- <label for="Name">number</label> -->
            <input type="text" name="number2" id="number" class="form-control" placeholder="Maths" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <!-- <label for="Name">number</label> -->
            <input type="text" name="number3" id="number" class="form-control" placeholder="Einglish" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <!-- <label for="Name">number</label> -->
            <input type="text" name="number4" id="number" class="form-control" placeholder="Sciences" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <!-- <label for="Name">number</label> -->
            <input type="text" name="number5" id="number" class="form-control" placeholder="computer" aria-describedby="helpId">
          </div>

          <button class=" btn btn-outline-primary form-control"> Buy </button>
          <?php

                if ($_POST) {

                    $number1 = $_POST['number1'];
                    $number2 = $_POST['number2'];
                    $number3 = $_POST['number3'];
                    $number4 = $_POST['number4'];
                    $number5 = $_POST['number5'];
                    $name =  $number1 + $number2 + $number3 + $number4 + $number5;

                    $name = ($name / 500) * 100;

                    if ($name <= 100) {
                        if ($name >= 90) {
                            echo "Grade A";
                        } elseif ($name >= 80 && $name < 90) {
                            echo "Grade B";
                        } elseif ($name >= 70 && $name < 80) {
                            echo "Grade C";
                        } elseif ($name >= 60 && $name < 70) {
                            echo "Grade D";
                        } elseif ($name >= 40 && $name < 60) {
                            echo "Grade E";
                        } elseif ($name < 40) {
                            echo "Grade F";
                        }
                    } else {
                        echo "The Number Is Big";
                    }
                }

                ?>
        </form>
      </div>
    </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<!-- <!doctype html>
<html lang="en">

<head>
    <title>Ecommerce</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-primary mt-5">
                <h4>
                    Buy Now!
                </h4>
            </div>
            <div class="col-4 offset-4  mt-5">

                <?php

                if ($_POST) {

                    $number = $_POST['number'];
                    $number2 = $_POST['number2'];
                    $number3 = $_POST['number3'];
                    $number4 = $_POST['number4'];
                    $number5 = $_POST['number5'];
                    $mun1 =  $number + $number2 + $number3 + $number4 + $number5;

                    $num = ($mun1 / 500) * 100;

                    if ($num <= 100) {
                        if ($num >= 90) {
                            echo "Grade A";
                        } elseif ($num >= 80 && $num < 90) {
                            echo "Grade B";
                        } elseif ($num >= 70 && $num < 80) {
                            echo "Grade C";
                        } elseif ($num >= 60 && $num < 70) {
                            echo "Grade D";
                        } elseif ($num >= 40 && $num < 60) {
                            echo "Grade E";
                        } elseif ($num < 40) {
                            echo "Grade F";
                        }
                    } else {
                        echo "The Number Is Big";
                    }
                }

                ?>
                <form action="index4.php" method="POST">
                    <div class="form-group">
                        <label for="Name">number</label>
                        <input type="text" name="number" id="number" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="Name">number2</label>
                        <input type="text" name="number2" id="number2" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="Name">number3</label>
                        <input type="text" name="number3" id="number3" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="form-group">
                        <label for="Name">number4</label>
                        <input type="text" name="number4" id="number4" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="form-group">
                        <label for="Name">number5</label>
                        <input type="text" name="number5" id="number5" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>



                    <button class=" btn btn-outline-primary form-control"> Buy </button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

       -->