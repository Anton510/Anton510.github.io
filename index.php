<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script type="text/javascript" src="assets/templates/site_tpl/js/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Проект</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="form-mask/jquery.maskedinput.min.js"></script>
</head>

<body>



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <!-- форма -->
                <div class="card-body">
                    <?php echo $_SESSION['push'];

                    unset($_SESSION['push']);
                    ?>
                    <form action="story.php" method="post">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Имя</label>
                            <input name="name" class="form-control" id="exampleFormControlTextarea1" />
                        </div>
                        <?php
                        echo $_SESSION['name'];
                        unset($_SESSION['name']);
                        ?>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Телефон</label>
                            <input name="mobil" type="phone" class="mask-phone form-control" />
                        </div>
                        <?php
                        echo  $_SESSION['mobil'];
                        unset($_SESSION['mobil']);
                        ?>


                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Должность</label>
                            <input name="work" class="form-control" id="exampleFormControlTextarea1" />
                        </div>
                        <?php
                        echo $_SESSION['work'];
                        unset($_SESSION['work']);
                        ?>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input name="email" type="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>
                        <?php
                        echo  $_SESSION['email'];
                        unset($_SESSION['email']);
                        ?>
                        <?php
                        echo  $_SESSION['email_a'];
                        unset($_SESSION['email_a']);
                        ?>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Выберите товар</label>
                            <select class="form-control" name="product" id="exampleFormControlSelect1">
                                <option>банан</option>
                                <option>арбуз</option>
                                <option>мандарин</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function($) {
            $("input[type='phone']").mask("+7(999) 999-9999");
        });
    </script>

</body>

</html>