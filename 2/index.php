<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HdQuiz</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>

<body>
    <style>
        body{
            font-family: 'Kanit', sans-serif;
        }

      .container{
          width: 50vw;
      }
    </style>
     <?php $url = "https://dd-wtlab2020.netlify.app/pre-final/ezquiz.json";
    $response = file_get_contents($url);
    $result = json_decode($response);
    $items = $result->tracks->items;
    ?>
    <form action="" method="POST">
        <div class="container mt-5">
            <h1 style="text-align: center;">ระบุคำค้นหา</h1>
            <div class="row mt-3">
                <div class="col-10">
                    <input type="text" size="85" name="name" id="name">
                </div>
                <div class="col-2">
                    <button class="btn btn-info" type="submit" name="submit">ค้นหา</button>
                </div>
            </div>
            <div class="card mt-5">
                  <?php
                if (isset($_POST['submit'])) {
                    $url = "https://dd-wtlab2020.netlify.app/pre-final/ezquiz.json";
                    $response = file_get_contents($url);
                    $result = json_decode($response);
                    $name = $_POST['name'];
                }
                ?>  
            </div>
                 

    <div class="container mt-5">
        <div class="row">
                    <?php
                    foreach ($items as $key) {
                        echo  '<div class="col-md-4 mt-5">';
                        echo '<div class="card">';
                        echo '<img class="card-img" src="'.$key->album->images[0]->url.'"heigh="'.$key->album->images[0]->height.'" width="'.$key->album->images[0]->width.'.">';
                        echo '<p class="mt-5"><b>'.$key->name.'</b></p>';
                        echo '<p>Artis: '.$key->album->artists[0]->name.'</p>';
                        echo '<p>Release_date: '.$key->album->release_date.'</p>';
                        echo '<p class="card-text">Avaliable : '. sizeof($items[0]->available_markets).' countries </p>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
        </div>
    </div>
                    
            
                
    </form>
    </div>
    











    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>