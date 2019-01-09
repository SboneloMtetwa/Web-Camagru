<?php
  session_start();
  if ($_SESSION[Username] && !empty($_SESSION[Username])) {
      include_once 'header.php';
  } else {
    header('Location: index.php?err=You must login to access this page.');
  }
?>
<script src="script/webcam.js" charset="utf-8"></script>
<title>Camagru - Montage</title>
  <article class="main">
    <div class="videobox">
      <h3>Online Rolling</h3>
        <video id="video"></video>
        <img id="image" height="640px" width="480px" style="display: none;"/>
        <div id="canvasvideo"></div>
      <form id="img_filter">
      <label for="download">
        </label>
        <label for="pic10">
          <input type="radio" name="img_filter" value="images/filters/menglasses.png" id="menglasses" onchange="show_img('menglasses')">
          <img class="img" src="images/filters/menglasses.png" height="120" width="120">
        </label>
        <label for="pink glasses">
          <input type="radio" name="img_filter" value="images/filters/pinkglasses.png" id="pic11" onchange="show_img('pic11')">
          <img class="img" src="images/filters/pinkglasses.png" height="120" width="120">
        </label>
        <label for="beard">
          <input type="radio" name="img_filter" value="images/filters/beard.png" id="pic12" onchange="show_img('pic12')">
          <img class="img" src="images/filters/beard.png" height="120" width="120">
        </label>
        <label for ="blank">
          <input type="radio" name="img_filter" value="" id="pic9" onchange="show_img('')">
          <img class="img" src="images/filters/wave.j" height="120" width="120">
        </label>
      </form>
      <br/>
      <button class="button" id="snap" onclick="javascript:takeSnap()">TAKE</button>
      <br/>
    <label>UPLOAD IMAGE</label><input type='file' accept="image/*" onchange="readURL(this);" />
    <br/>
    <img id="image" height="640px" width="480px" style="display: none;"/>
  </div>
  </article>

  <aside class="aside2">
    <div class="videobox">
    <h3>Pictures</h3>
    <div id="canvas"></div>
    <form method='post' accept-charset='utf-8' name='form'>
      <input name='img' id='img' type='hidden'/>
      <input name='user' id='user' type='hidden' value='<?=$_SESSION[Username];?>'/>
    </form>
  </div>
  </aside>
  <footer class="footer" value = smtetwa 2018©️>
  </footer>
</div>
