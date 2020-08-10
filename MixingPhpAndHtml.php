<?php
$name = "Youssef";
$hour = 12;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mixing</title>
    <meta charset="utf-8">
</head>
<body>
<h1>Mixing PHP & HTML</h1>
<p>Hello , <?php echo $name; ?> </p>

<?php if ($hour < 12) : ?>
    <p>Good Morning</p>
<?php elseif ($hour < 18) : ?>
    <p>Good AfterNoon</p>
<?php elseif ($hour < 22) : ?>
    <p>Good Evening</p>
<?php else: ?>
    <p>Good Night</p>
<?php endif; ?>

</body>
</html>
<?php
/*
  how to use php and html together to create
  Dynamic Content

  html tell a browser how to display a document
  html send from the server in interpreted from
  the browser which sometimes refer to as a client

  php is a programming and can be use to create
  manipulate and output data php code runs on the
  web server and the results running php script
  are send to the browser the browser doesn't know
  that is php code
  it just receives whatever text php has outputted
  this text can contain html

  but its important to know no php code goes to
  the browser , html fine if all you have some
  static content that you want to display on
  web browser , if you want dynamic website
  for example blog for new and updated articles
  or an ecommerce site , that has content that changed
  automatically


  we use closing tag ?> when we mixing html and php
  together

  there is PHP Short Open Tag
  <?= $name ?> echo the name Variable
--------------------------------------------------
if you want to use Control Structure like if,for and so on
when mixing php and html then there is alternative
syntax you need to use
change the opening brace { to a column
then replacing the closing brace to endif;
or endfor and so on ...,

HTML : <h1>Heading</h1>
PHP  : <?php if (condition){
             echo "<p>..</p>";
         }?>
HTML : <p>More HTML </p>
|
|
|
HTML :   <h1>Heading</h1>
PHP  :   <?php if (condition):?>
HTML :   <p>..</p>
PHP  :   <?endif;?>
HTML :   <p>More HTML </p>

this way you can have Html code inside php
Control Structure
------------------------------------------------
we have two ways to insert comments in php
1- #
2 - /*
PSR-1 : Basic Coding Standard
PSR-2 : Coding style Guide

online php coding standards fixer
OR PHP Coding Standards Fixer Program.
 */
?>



