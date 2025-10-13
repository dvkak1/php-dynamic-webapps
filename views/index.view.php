<!--- 

  Before this used to have a lot of require lines of code, there used to be an ungodly
  amount of HTML code. This is where the principle of PHP partials come in. Partials
  are segments of code that are stored in a separate file and dynamically included in 
  one or more larger PHP pages. 

  PHP's include and require lines function to insert contents of a partial file into 
  another PHP file. 

  --->

<?php require('partials/head.php');?>
  <?php require('partials/nav.php');?>
  <?php require('partials/banner.php');?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
       <p>Welcome to your home page</p>
       <script src="https://cdn.tailwindcss.com"></script>
    </div>
  </main>

<?php require('partials/footer.php'); ?>