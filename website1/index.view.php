<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    header{
      background-color: #e3e3e3;
      padding: 2em;
      text-align: center;
    }
  </style>
</head>
<body>
  <header>
    <ul>
      
      <?php foreach ($names as $name) : ?>
        <li>
          <strong>User's Name: </strong>
          <?= $name; ?>
        </li>
      <?php endforeach; ?>
    </ul>

    <ul>
      <?php foreach ($animals as $animal) :?>
        <li>
          <?= $animal; ?>
        </li>
      <?php endforeach; ?>
    </ul>

  </header>
</body>
</html>