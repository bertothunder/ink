<?php include 'includes/_header.php' ?>
<section role="main">
<?php include 'includes/_top-bar.php' ?>

<section class="top-area">
  <div class="row">
    <div class="large-12 columns">
      <a class='sidebar-button show-for-small' id="sidebarButton" href="#sidebar" ><img alt="Menu-wht" src="images/offcanvas/menu-wht.png" /><h4>Ink</h4></a>
      <h2 class="hide-for-small">Inliner</h2>
    </div>
  </div>
</section>

<div class="row top-headlines">
  <div class="large-12 columns">
    <h1 class="light text-center">Bring your email styles inline</h1>
    <p class="lead text-center">Use Inky's Inliner to do it in one fell swoop.</p>
  </div>
</div>

<div class="row">
  <div class="large-7 columns">
    <form class="inky-inliner">
      <h4 class="normal">Email content &amp; options</h4>
      
      <div class="inliner-form">      
        <label>Paste your email content here. Styles should be included. Links should be full URLs.</label>
        <textarea placeholder="Paste your HTML here"></textarea>
      </div>
      
      
      <div class="inliner-form options">   
        <label for="appendQuery">
          <input type="checkbox" id="appendQuery"> Append query string to links
        </label>
        <input type="text" placeholder="Enter the URL where your email lives" class="inactive">
        <label for="removeComments">
          <input type="checkbox" id="removeComments"> Remove Comments
        </label>
      </div>
      
      <br>
      
      <div class="inliner-form">      
        <label>Enter your email and we'll send you a note once we add new features to Ink!</label>
        <input type="email" placeholder="e.g. you@yourdomain.com">
      </div>
      
      <br>
      
      <button type="submit" class="button">Convert Email</button>
    </form>
  </div>
  <div class="large-4 columns">
    <img src="images/inky-computer.svg"/>
    <h4 class="normal">Why inline styles?</h4>
    <ul class="inline-advantages">
      <li>
        <div class="gmail">
          <p>Popular email clients like Gmail strip out CSS in the <code>&lt;style&gt;</code> tag.</p>
        </div>
      </li>
      <li>
        <div class="gmail">
          <p>This is the best way to guarantee your email works properly on the compatible clients listed in the docs.</p>
        </div>
      </li>
    </ul>
  </div>
</div>

<?php include 'includes/_subscribe.php' ?>	
<div class="show-for-small">
  <ul class="mobile-nav">
    <li><a href="index.php">Home</a></li>
    <li><a href="process.php">Process</a></li>
    <li><a href="docs.php">Docs</a></li>
    <li><a class="current" href="templates.php">Email Templates</a></li>
  </ul>
</div>
<?php include 'includes/_footer.php' ?>