<!Doctype html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/skeleton.css">
  <link rel="stylesheet" href="./css/normalize.css">
  <title>The Devloper Panel</title>
  <style>
    body{
      margin-top:50px;
      padding: 0;
    }
    .columns{
      width:80%;
    }
  </style>
</head>
<body>
  <form action="http://myutubeddr.000webhostapp.com/Midnight_Horror_Station/index.php" method="post">
    <div class="row">
      <div class="five columns"style="margin-left:10%;">
        <label for="exampleEmailInput">Name</label>
        <input class="u-full-width" name="title" type="text" placeholder="Story Name" id="exampleEmailInput">
      </div><br>
      <div class="five columns"style="margin-left:10%; margin-right:10%;">
        <label for="exampleEmailInput">ID</label>
        <input class="u-full-width" type="text" name="id" placeholder="Video Id" id="exampleEmailInput">
      </div><br>
      <div class="five columns"style="margin-left:10%; margin-right:10%;">
        <label for="exampleEmailInput">Description</label>
        <input class="u-full-width" type="text" name="desc" placeholder="Description Of The Video " id="exampleEmailInput">
      </div><br>
      <div class="five columns"style="margin-left:10%; margin-right:10%;">
        <label for="exampleRecipientInput">Channel</label>
        <select name="channel" class="u-full-width" id="exampleRecipientInput">
          <option value="mhstation">Midnight Horror Station</option>
          <option value="sunday_suspense">Sunday Suspense</option>
          <option value="thrillerland">ThrillerLand</option>
        </select>
      </div><br>
    </div>
    <input style="margin-left:10%;margin-top:5%;" class="button-primary"style="margin-left:30%;" type="submit" value="Submit">
  </form>
  <?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $id = $_POST['id'];
  $description = $_POST['desc'];
  $title = $_POST['title'];
  $channel = $_POST['channel'];
  $jsonfile = $channel.'.json';
  $json = file_get_contents($jsonfile);

  $decoded_json = json_decode($json, true);
  $decoded_json[] = ["id" => $id, "title" => $title, "description" => $description];
  $newJson = json_encode($decoded_json);
  file_put_contents($jsonfile, $newJson);
}
?>

</body>
