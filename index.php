<?php 

//  
//  In order to check your PHP doc in cmd format, type php -h 

//  To run a development server, type in php -S localhost:8888
//     

//THIS SECTION HERE COVERS YOUR FIRST PHP TAG AND HELLO WORLD PLUS VARIABLE DECLARATION 

// You can use print but do not forget that's a matter of preference. Otherwise, use echo

// echo "Hello " . " " . " World" . "<br>";  

// //To concatenate, the syntax goes like "First syllable or word " . " " . " another word" 

// echo "This is " . " my " . " first concatenation" . "<br>";

// //You can do concatenation like this by declaring a variable. Welcome to variable declaration! 

// $var = " World!";

// echo "Hello " . " " . $var . "<br>";

// $var = "Hello ";

// echo $var . " " . " World!" . "<br>";

// //You can also approach variable declaration like this
// $var = "Hello "; 

// echo "$var everybody";

   
    //This section involves an impromptu section on CSS design
    //The topic of focus however here is about conditions and booleans
    //  $name = "Fear and Loathing in Las Vegas";
    //  $read = true;

    //  if ($read) {
    //   $message = "You have read $name";
    //  } else {
    //   $message = "Please read $name";
    //  }
     
  
    // echo $message; 
   
    // $message;
  
      //This section of the sandbox shows an example of an Array
    //Below is an example of a basic array
    //Arrays are zero based, the indexes are determined from 0.
    //[0] <- This is an example of a first index.
    //In this case, Do Androids Dream of Electric Sheep? is the first index.
    //  $books = [
    //     "Do Androids Dream of Electric Sheep?", 
    //     "1984", 
    //     "Brave New World"
    //  ];
    //Here's an example of another form of array called Associative Arrays which
    //utilizes the key, value pair syntax.
    //
    //Data will be fetched differently this time for the case of echoing data in
    //Associative Arrays
    $books = [
        [
          'name' => 'Do Androids Dream of Electric Sheep?',
          'author' =>  'Phillip K. Dick',
          'purchaseUrl' =>  'https://example.com',
          'releaseYear' => '1968'
        ],
        [
          'name' =>  'Project Hail Mary',
          'author' => 'Phillip K Dick',
          'purchaseUrl' =>  'http://example.com',
          'releaseYear' => '2021'
        ],
        [
          'name' =>  'Fear and Loathing in Las Vegas',
          'author' => 'Hunter S. Thompson',
          'purchaseUrl' =>  'http://example.com',
          'releaseYear' => '2021'
        ],
    ];


      //This next section covers functions and filters 

    //A function is a self-contained block of code designed for performing a 
    //specific task. They are fundamental to organize and reuse code promoting.
    //efficiency and readability in your programs.
    //
    //Newer developers actually make the mistake of copy-pasting the same function
    //then modify it to function it differently. There is a better way, however.
    //
    //Welcome to Lambda Functions (RESEARCH ON THIS)

    function filter ($items, $fn) 
    {
         $filteredItems = []; 

         foreach ($items AS $item) {
          if ($fn($item)) {
               $filteredItems[] = $item;
          }
         }

         return $filteredItems;
    };
    
    //Try to play around with the arguments to see how the code works
    $filteredBooks = array_filter(array: $books , callback: function($book){
       return $book['releaseYear'] >= 1950 && $book['releaseYear'] <=  2020; 
    });
  
  require "index.view.php";

  //This file is created to seperate the PHP logic from the index.php which renders the logic
  //from the HTML file  
?>


