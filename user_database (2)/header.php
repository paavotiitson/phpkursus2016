<?php  

  session_start();

?>

<a href=insert.php>Sisestamine</a> |
<a href=change.php>Muutmine</a>(ei t��ta) |
<a href=show.php>Vaatamine</a> |
<a href=search.php>Otsing</a> |
<a href=login.php>Sisse logimine</a> |
<a href=logout.php>V�lja logimine</a> |

<?php  

  $today = date("H:i:s d.m.Y");
  
  if (isset($_SESSION['login_user']['id_users']))
  {
    echo "<br>S�steemis: " . $_SESSION['login_user']['name'] . " 
    (" . $_SESSION['login_user']['username'] . ", kasutaja ID: 
    " . $_SESSION['login_user']['id_users'] . ", level: 
    " . $_SESSION['login_user']['level'] . "). Kuup�ev: $today";
  }
  else
  {
    echo "<br>S�steemi pole keegi sisse loginud. 
    <a href=login.php>Logi sisse</a>.";
  }

?>

<hr height=1 noshade>