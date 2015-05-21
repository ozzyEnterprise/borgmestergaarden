<!DOCTYPE html>
<html>
  <head>
  <meta name="author" content="Peter Pedersen">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Velkommen til Borgmestergaardens Admin side</title>

  </head>
  <body>
  <?php
       print "<center><h1>Login:</h1>".
             "<form action='overview.php' method='post'><table><tr>" .
             "<input type='hidden' name='user' value='" . $user ."'>" .
             "<td class='title'> USER: </td>" .
             "<td><input type='text' name='user' /></td>" .
             "</tr><tr>" .
             "<td class='title'> PASSWORD:</td>" .
             "<td><input type='password' name='password' /></td>".
             "</tr><tr>" .
             "<th colspan=2><input type='submit' value='login' /></th>" .
             "</table>" .
             "</form></center>";
  ?>
  </body>
</html>