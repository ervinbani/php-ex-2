<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="todo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title></title>
  </head>
  <body>
    <?php
      $todo = [
       [
          'testo' => 'Es corso',
          'fatto' => true
        ],
        [
          'testo' => 'Andare al cinema',
          'fatto' => false
        ],
        [
          'testo' => 'Andare al lav',
          'fatto' => true
        ],
        [
          'testo' => 'Pulire la casa',
          'fatto' => false
        ],
        [
          'testo' => 'comprare il giornale',
          'fatto' => true
        ],
        [
          'testo' => 'Pranzare',
          'fatto' => true
        ],
      ];
      foreach ($todo as $task) {
        if ($task['fatto'] === true) {
            // var_dump($todo['message']); die(); ?>
             <ul>
               <li class= "item completed"><span class="del">X</span><?php echo $task['testo']; ?></li>
             </ul>
      <?php
        }
        else {
      ?>
            <ul>
              <li class = "item not-completed"><span class="del">X</span><?php echo $task['testo'];?>
                <small class= "greentext" style="color:black">Clicca se hai completatto!</small>

              </li>

            </ul>
    <?php
        }
      }
    ?>
  <script src="todo.js" charset="utf-8"></script>
  </body>
</html>
