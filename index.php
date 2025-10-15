<?php 

require 'functions.php';
// require 'router.php';

//This line of code is for Database connection 

//Named as thisClass for the purpose of describing a class and for demo only.

// This is important because it does not just show how a class is defined but think
// this as an appetizer for OOP - Object Oriented Programming in PHP in the Laracasts 
// path.

// class thisClass 
// {
//   public $name;
//   public $age; 
  
//   // Play around with this constructor method but main idea is that there are three types: 
//   // -- public 
//   // -- protected
//   // -- private 
//   // For more advanced study of OOP, you can check out the tutorial on Laracasts's path or 
//   // visit this link: https://www.w3schools.com/php/php_oop_what_is.asp
//   //
//   // However, these are just two in many resources. 
//   //
//   public function breathe(){
//      echo "Breathing";
//   }
// }

// $person = new thisClass();

// $person->name = "John Doe";
// $person->age = 25;

//Remember, always use dd() to check if anything works from variables to functions to classes.
// dd($person->breathe());

//For now, this is basically a 2 minute crash course on OOP.


// So, above is what we call a PDO instance. However, to understand what a PDO is. 
// You have to go back to what are the other ways to echo data from a database. 
// Most common way is what we call MySQLi - MySQL Improved but in codespeak. 
// There are other ways such as stored procedures and prepared statements.
//
// Let's try to explain this, concisely yet informatively.

// Stored procedures are a sequence of SQL statements stored in a database which let you
// encapsulate sequences of queries applied to your model. 
//
// In codespeak, this is an example of a stored procedure: 
//
// CREATE PROCEDURE selectAllUsers();
// BEGIN 
// SELECT* FROM users; 
// END; 
//
// CALL selectAllUsers();
//
// Prepared statements are a feature used to execute the same (or similar) SQL statements. 
// This is a lot more secure because it prevents SQL injection attacks (more on that on the 
// Laracasts lesson on SQL Injections Vulnerabilites explained section). 
//
// Once again, an example of a prepared statement in codespeak: 
//
// $stmt = $var->prepare("SELECT * FROM users WHERE email = ?");
// $stmt->bind_param("s", $email);
// $stmt->execute();
//
// This is an example of a prepared statement using MySQLi. 
//
// However, this is where PDO comes in. 
//
// PDO or PHP Data objects is a database access later providing a uniform method of access
// to multiple databases. 
// 
// Main benefit of PDOs is that you use the same functions to issue SQL commands and 
// fetch data regardless of which database you are using. 
//
// This also supports prepared statements and is basically a more secure version of using
// prepared statements using MySQLi. 
//
// Now here below is a PDO instance. 


//For the $dsn, be mindful of your credentials. 
$dsn = "mysql:host=127.0.0.1;port=3306;dbname=myapp;charset=utf8mb4";
$pdo = new PDO($dsn, 'root');
$statement = $pdo->prepare("SELECT * from posts");
$statement->execute();
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts AS $post) {
    echo "<li>". $post['title'] . "</li>";
}
?>