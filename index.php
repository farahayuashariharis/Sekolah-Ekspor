<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
        <form action="function.php" method="post">
            <p class="ms-5 mt-5">Nilai 1 : 
                <input type="text" name="nilai1">
            </p>
            <p class="ms-5 mt-5">Nilai 2 : 
                <input type="text" name="nilai2">
            </p>
            <p class="ms-5 mt-5">Nilai 3 : 
                <input type="text" name="nilai3">
            </p>
            <input type="submit" class="btn btn-primary rounded-pill mt-3 ms-5" value="Hitung Nilai">
        </form>

        <form action="function.php" method="post">
            <select value="Keadaan Mesin" class="ms-5 mt-5">
                <option name="mesin_bagus">Bagus</option>
                <option name="mesin_jelek">Jelek</option>
            </select>
            <br>
            <select value="Keadaan Body" class="ms-5 mt-3">
                <option name="body_bagus">Bagus</option>
                <option name="body_jelek">Jelek</option>
            </select>
            <br>
            <input type="submit" class="btn btn-primary rounded-pill mt-3 ms-5" value="Check Kondisi">
        </form>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html> 