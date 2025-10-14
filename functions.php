<?php 

function dd($value) {
     echo "<pre>";
     var_dump($value);
     echo "</pre>";

     die();
}



//What in the world is that line of code above? 

//The reason why this is a thing is because we are looking at dump and die. 
//
//Dd(), stylized as dd(), is a debugging technique used to print out content of a 
//variable and then halts the execution of the program. 
//
// The dump() function displays the variable but still allows the script to continue 
// running. The die part of dump and die ensures all subsequent code is ignored.
//
//

//You can use conditionals and booleans in two syntaxes, actually 

//You can use conditionals and booleans in two syntaxes, actually 
// if ($_SERVER['REQUEST_URI'] === '/') {
//     echo 'bg-gray-900 text-white';
// } else {
//     echo 'text-gray-300';
// }

//OR 

// echo $_SERVER['REQUEST_URI'] === '/' ? 'bg-gray-900 text-white' : 'text-gray-300';

// echo $_SERVER['REQUEST_URI'];


// The line of code above is an example of a usage of a superglobal. 
//
// A superglobal is a variable that is always accessible, regardless of scope - and you can
// access them from any function, class or any file without having to do anything special.

function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}



?>