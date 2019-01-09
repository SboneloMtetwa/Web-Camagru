<?php
  if ($_GET[err]){echo "<script>alert(\"".htmlentities($_GET[err])."\");window.location.href = \"index.php\";</script>";}
  include_once "header.php";
?>
<title>camagru - Index</title>
  <article class="main">
    <p><a> <img src="https://i0.wp.com/allbursaries.co.za/wp-content/uploads/2017/11/WeThinkCode-South-Africa.gif?resize=200%2C125" alt="No Image" width='700' height='400'> </p>
  </article>
  <aside class="aside">
    <?php
    session_start();
    if ($_SESSION[Username] && !empty($_SESSION[Username])):
    ?>
      <form class='login' action='user/ft_disconnect.php' method='post'>
        <h3><h1> Welcome </h1><?=$_SESSION[Username];?> Feel free to share, like or comment</h3><br/>
      </form>
    <?php else: ?>
      <form class="login" action="user/ft_login.php" method="post">
        <label><b>Username</b></label>
        <input class="form" type="text" placeholder="Enter Username" name="login" required autofocus="autofocus" tabindex="1">

        <label><b>Password</b></label>
        <input class="form" type="password" placeholder="Enter Password" name="passwd" required tabindex="2">

        <button type="submit" class="button" tabindex="4">Sign in</button>
        <a href="forgot_u.php" id="mdp_forgot">Forgot password?</a>
        <br/>
        <br/>
        <br/>
        <button class="button" id="button_new" onclick="location.href = 'create.php'" tabindex="5">Create your account</button>
      </form>
    <?php endif; ?>
  </aside>
</div>
<hr/>
<p><i>copyright smtetwa®️ 2018</i></p>
