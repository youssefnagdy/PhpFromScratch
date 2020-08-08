<?php

/*
 * loops are control Structure
 * Condition is Control Structure tool
 *
   A php Script is made up of series of instructiuons
   or Statements and an instructions can be
   assigning  a value to a variable
   a function call or a loop
   instruction usually ends with ; simiColon
   we also can group statements
   with a block {} like we did with foreach loop

   if -->  different actions based on different Conditions


   1- The If Construct
    if (Condition){
    Code to Run if Condtion is true
   }
   The Condition is a boolean value true or false
   if it true the code inside the block will be executed
   if it false it isn't


   + empty() --> return a boolean in value depending on
     whether the value is empty or not

  else {
   code to run if condition is false }
------------------------------------------------
2- Comparison Operators
Comparing one Value to another
in php we have several operators
we use these to compare the values
Equal , NotEqual , if one is bigger than the other
the result always boolean value of true Or False

== Equal
!= notEual
< less than
> greater than
<= less than or equal to
>= greater than or equal to

---------------------------------------------------

3- While
We already saw how foreach loop can be used
to loop around an array running the same code Multiple
time for each element of array


a while loop can be use for any code not just for loop on
an array

while(condition) {
 code to run while Condition is true
}

-------------------------------------------------
4- for Loop
execute code for a specific number of times
when you know in advance how many time u want
code to run

for loop is based on a counter the counter
is a variable that controls how many times
the code inside the loop is executed
when we create a for loop first we initialize the counter
then we specify a test for it
if this test result is true then the code inside the
block is executed if it false then the loop end
finally we add a statement that will changes the counter
value after each time the code block is executed


for(init ; test

----------------------------------------------------

5 elseif
add more conditions by use elseif
this is a combination of else and if
and allow us to extend an if statement to include all
the conditions if the first condition is false


------------------------------------------------------

6- Switch Statement compare variable or value  to many
different values and execute code based on that Comparison

switch(Variable)
{
 case ValueOfTheVariable :
 echo "SomeThing";
 break;

default:
This is Equivalent to else
}
 */






//
//if(true)
//{
// echo "The Condition is True";
//}
//// if change the condition to false
//if(false)
//{
// echo "The Condition is True";
//}
//
//$articles = [];
//var_dump(empty($articles));
//
//if(empty($articles))
//{
// echo  "the Array is Empty";
//}else{
// echo "the Array Is not Empty";
//}


// comparison
var_dump(3 == '3');
var_dump(4 !== "4");


// While Loop
$month = 1;
while ($month <= 12)
{
 echo $month . " , " ;
 $month ++;
}

//for loop
for($i = 1 ; $i<=10 ; $i++)
{
 echo $i . " , ";
}

//elseif

$hour = 14;
if($hour < 12)
{
 echo "Good Morning";
}elseif ($hour < 18)
{
 echo "Good Afternoon";
}elseif ($hour < 22)
{
 echo "Good Evening";
}else{
 echo "Good Night";
}

//Switch
$day = 'Tue';
switch ($day)
{
 case 'Mon':
  echo'Monday';
  break;

  case 'Sun':
  echo "Sunday";
  break;

  case "Tue":
  echo "Tuesday";
  break;

 default:
  echo "No Information available";
  break;
}
