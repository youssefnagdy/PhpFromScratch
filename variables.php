<?php

/*
http://localhost/PhpFromScratch/

what did we just  Do ?
we added a variable to store information
for the program to use think of variable simply as
container that hold some information once you create
variable in your code we can use the data contained in that
var throw out the rest of your program

vars : also allow us to label Data with a descriptive name
so our code is easier to understand

To Create A variable in php $ + TheNameOfTheVariable + = HereTheValue
+ ; to end the instruction


PHP Variables :
are Presented by $(Dollar Sign) followed by the name of the
variable you can use mixin of upperCase LowerCase Letters
numbers and underScore for the name
$message / $myName / $message23 / $Full_Name

$my-variable ---> Wrong it's contains a hyphen

* PHP Variables are Case Sensitive
  so this Var --> $message = "Hello";
  is a Different Variable from This Var --> $Message


*Naming Recommendation
  - Start With LowerCase
  - Separated with UnderScore

  Like These
  - $message / $count  / $error_message / $first_name
-----------------------------------------
What You Can Store In Variables ?
PHP is Loosely type Language
we don't Declaring Variables To be a Specific Type

In Php You Can Store Data In Different Types :-
1- String --> Sequence of Characters Between Quotes
              You Can use Single Or Double Quotes
              there is Slightly different

2- Numbers :
       - Integers --> Whole Numbers don't have a Decimal Part
                      can Be Positive or Negative Numbers
       - float --> numbers can also have a Decimal part
                   called Float and ofCourse can be
                   Negative Or Positive

3 - Booleans Values : True Or False
   useful to controlling program flow Or what a Program
   Should Do Next .
 To Sign a Boolean Value use the word true or word false
 $logged_in = true;
 $is_admin  = false;


4- Null --> represent a variable that have no Value
 a Variable is Null when is no value assign to it Yet !
 OR
 $user_id = null;


-------------------------------------------------

depending on the type of value in the variable
we can apply versus different operators to them

*For Example if the value is Number
we Can use Arithmetic Operators
To Add,Subtract,divide,Multiply and so on ...


$count = 10;
$size = 2;

// With Float Values
$price = 2.98;
$quantity = 4;

in some language Multiply Flaot and integer
giving an error but php Forgiven
var_dump($price + $quantity);

var_dumb($count + 5);
var_dumb($count * $size );


* There are Operators can use on strings Values
 if we have two Strings like this
 $message = "Hello";
 $name    = "Youusef";
we can Concatenate them Together using Dots Operator .

we can use more than one Dot in a Single instruction
---------------------------------------------------------
Okay ! What Happen if YOu Make a Mathematical operation
with string and Number

$price = "150";
$quantity = 3;


$price = $price * $quantity

when we Run This last line we get an integer Result
php change the type of $price Variable From a String
To an Integer
This Is Name as Type Convert Or Type Juggling //
This also known as Casting
///////////////////////////////////

For Boolean Values we have Logical Operators
we can use these to change the value of a boolean value
or combine Booleans Variables Together

ex:-
$its_editor = true;
$its_admin  = false;

var_dump($its_editor);

we can negate this Boolean Value using Not Operator
like This var_dump( ! $its_editor);
this mean true convert to false and false become true

- We Can also Combine using or and Xor

ex :-
$its_editor = true;
$its_admin  = false;
var_dump($its_editor and $is_admin); // True ?
because true or false is True
True And False Is False



---------------------------------------------------------

When We Create a String Variable We Can use Single Or Double
Quotes

$message = "Hello";
$name    = 'Youssef';

//Escaping
$start = '3 O\'Clock';

$days = "Monday\nTuesday\nWednesday";
New Line Line after Each Day;

we Can Concate Literal String and a Variable
---- echo "Hello" . $name ;

we Can also insert the Variable Directly into the String
if We Using Double Quotes
Like This ---> echo "Hello $name"; this is Called Variable interpolation















 */

$message = "Hello again ";
$count = 3;
$price  = 1.99;

/*
  instead of using echo to print these
  let's use var_dump function
  this is useful for seeing what value a variable Contains
 */

var_dump($message);
var_dump($count);
var_dump($price);


$its_admin = true;
$data = null;

// You can Pass Two Parameter or Two Variables
var_damp($its_admin , $data);