<?php
  include __DIR__ . "/book.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Books</title>
</head>

<body>
  <h1>My Books</h1>

  <div class="container">

    <div class="card_container">
      <div class="card">
        <h2><?php echo $lordOfRings1->title ?></h2>
        <div class="img_container">
          <img src="<?php echo $lordOfRings1->cover ?>" alt="cover">
        </div>
        <h3><?php echo $lordOfRings1->author ?></h3>
        <p><?php echo $lordOfRings1->date ?></p>
      </div>
    </div>

    <div class="card_container">
      <div class="card">
        <h2><?php echo $lordOfRings2->title ?></h2>
        <div class="img_container">
          <img src="<?php echo $lordOfRings2->cover ?>" alt="cover">
        </div>
        <h3><?php echo $lordOfRings2->author ?></h3>
        <p><?php echo $lordOfRings2->date ?></p>
      </div>
    </div>

    <div class="card_container">
      <div class="card">
        <h2><?php echo $lordOfRings3->title ?></h2>
        <div class="img_container">
          <img src="<?php echo $lordOfRings3->cover ?>" alt="cover">
        </div>
        <h3><?php echo $lordOfRings3->author ?></h3>
        <p><?php echo $lordOfRings3->date ?></p>
      </div>
    </div>

    <div class="card_container">
      <div class="card">
        <h2><?php echo $harryPotter1->title ?></h2>
        <div class="img_container">
          <img src="<?php echo $harryPotter1->cover ?>" alt="cover">
        </div>
        <h3><?php echo $harryPotter1->author ?></h3>
        <p><?php echo $harryPotter1->date ?></p>
      </div>
    </div>

    <div class="card_container">
      <div class="card">
        <h2><?php echo $harryPotter2->title ?></h2>
        <div class="img_container">
          <img src="<?php echo $harryPotter2->cover ?>" alt="cover">
        </div>
        <h3><?php echo $harryPotter2->author ?></h3>
        <p><?php echo $harryPotter2->date ?></p>
      </div>
    </div>

    <div class="card_container">
      <div class="card">
        <h2><?php echo $harryPotter3->title ?></h2>
        <div class="img_container">
          <img src="<?php echo $harryPotter3->cover ?>" alt="cover">
        </div>
        <h3><?php echo $harryPotter3->author ?></h3>
        <p><?php echo $harryPotter3->date ?></p>
      </div>
    </div>

    <div class="card_container">
      <div class="card">
        <h2><?php echo $harryPotter4->title ?></h2>
        <div class="img_container">
          <img src="<?php echo $harryPotter4->cover ?>" alt="cover">
        </div>
        <h3><?php echo $harryPotter4->author ?></h3>
        <p><?php echo $harryPotter4->date ?></p>
      </div>
    </div>

    <div class="card_container">
      <div class="card">
        <h2><?php echo $harryPotter5->title ?></h2>
        <div class="img_container">
          <img src="<?php echo $harryPotter5->cover ?>" alt="cover">
        </div>
        <h3><?php echo $harryPotter5->author ?></h3>
        <p><?php echo $harryPotter5->date ?></p>
      </div>
    </div>

    <div class="card_container">
      <div class="card">
        <h2><?php echo $harryPotter6->title ?></h2>
        <div class="img_container">
          <img src="<?php echo $harryPotter6->cover ?>" alt="cover">
        </div>
        <h3><?php echo $harryPotter6->author ?></h3>
        <p><?php echo $harryPotter6->date ?></p>
      </div>
    </div>

    <div class="card_container">
      <div class="card">
        <h2><?php echo $harryPotter7->title ?></h2>
        <div class="img_container">
          <img src="<?php echo $harryPotter7->cover ?>" alt="cover">
        </div>
        <h3><?php echo $harryPotter7->author ?></h3>
        <p><?php echo $harryPotter7->date ?></p>
      </div>
    </div>

  </div>
</body>

</html>