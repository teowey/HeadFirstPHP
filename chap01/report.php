<html>
  <head>
      <title>Aliens Abducted Me - Report an Abduction</title>
  </head>
  <body>
      <?php
        $when_it_happened + $_POST['whenithappened'];
        $how_long = $_POST['howlong'];
        $alien_description = $_POST['description'];
        $fang_spotted = $_POST['fangspotted'];
        $email = $_POST['email'];

        echo 'Thanks for submitting the form.<br />';
        echo 'You were abducted ' . $when_it_happened;
        echo ' and were gone for ' . $how_long . '<br />';
        echo 'Describe them: ' . $alien_description . '<br />';
        echo 'Was Fang there? ' . $fang_spotted . '<br />';
        echo 'Your email address is ' .$email;
       ?>
  </body>
</html>
