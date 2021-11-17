<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Goodcard - track your collection of Pokémon cards</title>
    <style>
      body {text-align: center;}
      body {background-color:pink;}
    </style>
</head>
<body>
  
  <h1>Hidden Fates - master set ( no Shiny Vault ) </h1>

  <form method="POST" action="">
    
    <div class="text-center" name="text-center">
      <?php foreach ($cards as $card) : ?>
          <li><a href="#"> <?= implode(",", $card) ?> </a></li>
          <a href="index.php?pokemon=<?= $card['id'] ?>">Edit</a>
        <?php endforeach; ?>
    </div>

    <select name="pokemon">
      <?php foreach ($cards as $card) : ?> 
          <option><li><a href="#"> <?= implode(",", $card) ?> </a></li>
          </option><?php endforeach; ?>
      <option>jeanpierreke</option>
      <option>lowieke</option>
    </select>
    <div class="form-group"> OR </br></label>
      <input type="text" name="name" class="form-control" placeholder="Enter Pikeman name here" >
    </div>

    <div class="form-group">
      <label for="rarity">Rarity</label>
      <input type="text" name="rarity" class="form-control"  placeholder="Common/ Uncommon / Rare  ?" >
    </div>
    <div class="form-check">
      <input type="checkbox" name="owned" value="1" class="form-check-input" id="checkbox">
      <label class="form-check-label" for="checkbox">I own this Pikeman !</label>
    </div>

    <button type="submit" name="submit" value="submit" class="btn btn-primary">Add Pikeman to database</button>
  </form>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
