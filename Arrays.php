<?php
/*
   Create a Variable Have a Single Value
   we a bit limited with this however
   For Example Let's say you want to display a list of
   articles you have several articles to display
   in several variables

    $article1 = "First Post" ;
    $article2 = "another Post";
    $article3 = "Read This ! ";

if you don't know how many articles you going to have
you don't know how individual variables you need

the Solution is To use An array
array is simply a list of values

-- Two Ways To Create Arrays In Php
   1- Square Brackets []
   2- array() --> Constructor Way


----------------------------------------------

When we created Array The Indexes automatically
set By PHP

To Specify the element Index Write the index
followed by = sign and greater than sign > like this =>
then the value of the element

as we said you can Specify the index By numbers like this
$articles = [1 => "First Post" , 2=>"Second Post" , "read This"]
if you don't Specify the last element it will set auto
to 3

- you can also use a string as an Index arrays with String
  Index Called Associative Arrays

$articles  = [ "first" => "First Post",
               "second" => "Second Post",
               "third"  => "Third Post"];

------------------------------------------------------------

MultiDimensional Arrays !

So Far We Created Arrays Have a String Values "first post"
array can contain element of any type

$values = [
 "message" => "Hello World",
 "count"   => 150,
 "pi"      => 3.14,
 "status"  => false,
  "result" => null
];

if you can put elements of any type into in  array then why not
another array You can do Exactly that this is called
Multidimensional Arrays are useful for representing table of
Data for example let's say we have data of 3 people
the name , email and height

$youssef = [
   "name" => "Youssef",
   "email" => "y@gmail.com"
   "height" => 1.72
];

$omar = [
   "name" => "Omar",
   "email" => "O@gmail.com"
   "height" => 1.70
];

$samir = [
   "name" => "Samir",
   "email" => "S@gmail.com"
   "height" => 1.79
];

Represent the complete table by putting each of these
individual array into in another array
$people = [$youssef , $omar , $samir ];


Or YOu can Make Tabular Data

$people = [
   [
     "name" => "Youssef",
     "email" => "y@gmail.com"
     "height" => 1.72
  ],
  [
     "name" => "Samir",
     "email" => "S@gmail.com"
     "height" => 1.79
  ],
  [
     "name" => "Omar",
     "email" => "O@gmail.com"
     "height" => 1.70
  ]
];

How To Access Elements of a Multodomensional Array

$youssef_email = $people[0]['email'];

----------------------------------------------------
How To Print out the Element withour knowing in advance
how many element have got !!

the Solution is to use a Loop
allow us to run a code on each element of an array
regardless of how many element its has

There Are Different Type of loops in php
for Arrays The Simplest ONe is Foreach Loop

foreach(PassTheNameOfArray as $theVariable){}

foreach(                   as $value)
foreach(                   as $key=> $value)


 */

$articles = ["First post", "Another post", "Read This!"];
$articles_2 = [1 => "first Post ", 2 => "Another Post", "read This !"];
$articles_3 = [
    "first" => "First Post",
    "second" => "Second Post",
    "third" => "Third Post!"
];

$first_element = $articles[0];
$second_element = $articles[1];
$third_element = $articles[2];


$count = 3;
$price = 9.99;

$values = [
    "message" => "Hello World",
    "count" => 150,
    "pi" => 3.14,
    "status" => false,
    "result" => null
];
$values_2 = [$count, $price];
//Dumb these values out
var_dump($values);


$articles_multi = [
    ['title' => 'firstPost', 'content' => 'This is First Post'],
    ['title' => 'secondPost', 'content' => 'This is second Post'],
    ['title' => 'ThirdPost', 'content' => 'This is third Post'],
];

$first_article_title = $articles_multi[0]['title'];
var_dump($first_article_title);

foreach ($articles as $article) {
    //This is Code Block
    echo $article . " , ";
}

foreach ($articles_3 as $key => $value) {
    echo $key . ' - ' . $value . " , ";
}
