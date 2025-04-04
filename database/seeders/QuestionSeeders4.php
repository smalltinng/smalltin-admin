<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class QuestionSeeders4 extends Seeder
{
    /**
     * Run the database seeds.
     */
 static public function run(): void
    {
        $questions =     [
            [
                'field_id' => 4,
                
                'question' => 'What is the primary function of a compiler in programming?',
                'a' => 'To interpret code line by line',
                'b' => 'To compile code into executable files',
                'c' => 'To debug code during runtime',
                'd' => 'To optimize code for performance',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 4,
                
                'question' => 'Which programming language is known for its use in web development?',
                'a' => 'Python',
                'b' => 'C++',
                'c' => 'JavaScript',
                'd' => 'Java',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 4,
                
                'question' => 'What is the purpose of a function in programming?',
                'a' => 'To store data',
                'b' => 'To perform a specific task',
                'c' => 'To compile code',
                'd' => 'To display output',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 4,
                
                'question' => 'Which programming language is primarily used for statistical analysis and data visualization?',
                'a' => 'R',
                'b' => 'Ruby',
                'c' => 'Java',
                'd' => 'Swift',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 4,
                
                'question' => 'What does the term "syntax" refer to in programming?',
                'a' => 'The logic of the code',
                'b' => 'The speed of the code',
                'c' => 'The structure and rules of the code',
                'd' => 'The output of the code',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 4,
                
                'question' => 'Which of the following is a version control system commonly used in software development?',
                'a' => 'Git',
                'b' => 'Docker',
                'c' => 'Kubernetes',
                'd' => 'Nginx',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 4,
                
                'question' => 'What is the primary purpose of object-oriented programming?',
                'a' => 'To process data in parallel',
                'b' => 'To manage memory efficiently',
                'c' => 'To organize code into reusable objects',
                'd' => 'To compile code into machine language',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 4,
                
                'question' => 'Which of the following is a database query language?',
                'a' => 'HTML',
                'b' => 'SQL',
                'c' => 'CSS',
                'd' => 'XML',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 4,
                
                'question' => 'What does the acronym "API" stand for?',
                'a' => 'Application Programming Interface',
                'b' => 'Application Performance Index',
                'c' => 'Application Process Integration',
                'd' => 'Application Protocol Interface',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 4,
                
                'question' => 'What is the purpose of a loop in programming?',
                'a' => 'To repeat a block of code multiple times',
                'b' => 'To define a function',
                'c' => 'To store data',
                'd' => 'To compile code',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which programming language is known for its strong emphasis on simplicity and readability?',
                    'a' => 'Java',
                    'b' => 'Python',
                    'c' => 'C++',
                    'd' => 'Assembly',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What does the acronym "JSON" stand for?',
                    'a' => 'JavaScript Online Notation',
                    'b' => 'JavaScript Object Notation',
                    'c' => 'Java Source Open Network',
                    'd' => 'Java System Output Node',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following is a front-end JavaScript framework?',
                    'a' => 'Laravel',
                    'b' => 'Django',
                    'c' => 'React',
                    'd' => 'Flask',
                    'answer' => 'c',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is recursion in programming?',
                    'a' => 'A method where the solution to a problem depends on solutions to smaller instances of the same problem',
                    'b' => 'A function calling another function',
                    'c' => 'A way to store multiple values in a single variable',
                    'd' => 'A loop that never ends',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the purpose of a database index?',
                    'a' => 'To secure data in the database',
                    'b' => 'To speed up the retrieval of records',
                    'c' => 'To store data in the database',
                    'd' => 'To delete data from the database',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following is a dynamically typed programming language?',
                    'a' => 'Java',
                    'b' => 'C',
                    'c' => 'Python',
                    'd' => 'C++',
                    'answer' => 'c',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is an IDE in the context of programming?',
                    'a' => 'Internal Development Environment',
                    'b' => 'Integrated Development Environment',
                    'c' => 'Internet Development Environment',
                    'd' => 'Intranet Development Environment',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following is an example of a NoSQL database?',
                    'a' => 'MySQL',
                    'b' => 'PostgreSQL',
                    'c' => 'MongoDB',
                    'd' => 'SQLite',
                    'answer' => 'c',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the main advantage of using a framework in software development?',
                    'a' => 'It provides pre-written code to solve common problems',
                    'b' => 'It makes the code run faster',
                    'c' => 'It increases the complexity of the code',
                    'd' => 'It requires less memory',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which programming paradigm is focused on using functions and avoiding state and mutable data?',
                    'a' => 'Procedural programming',
                    'b' => 'Object-oriented programming',
                    'c' => 'Functional programming',
                    'd' => 'Imperative programming',
                    'answer' => 'c',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What does the acronym "HTML" stand for?',
                    'a' => 'Hyper Text Markup Language',
                    'b' => 'Hyperlinks and Text Markup Language',
                    'c' => 'Home Tool Markup Language',
                    'd' => 'Hyperlinks and Text Modulation Language',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following is a commonly used CSS framework?',
                    'a' => 'Bootstrap',
                    'b' => 'Django',
                    'c' => 'Angular',
                    'd' => 'React',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In Python, what is the output of the expression `3 + 2 * 2`?',
                    'a' => '10',
                    'b' => '7',
                    'c' => '9',
                    'd' => '8',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following is used to style HTML elements?',
                    'a' => 'CSS',
                    'b' => 'JavaScript',
                    'c' => 'PHP',
                    'd' => 'SQL',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is a variable in programming?',
                    'a' => 'A fixed value',
                    'b' => 'A named storage for data',
                    'c' => 'A function parameter',
                    'd' => 'A data type',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which keyword is used to define a function in JavaScript?',
                    'a' => 'def',
                    'b' => 'function',
                    'c' => 'func',
                    'd' => 'define',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the purpose of a for loop in programming?',
                    'a' => 'To create a conditional statement',
                    'b' => 'To repeat a block of code a specified number of times',
                    'c' => 'To define a function',
                    'd' => 'To store data',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which programming language is known for its use in artificial intelligence?',
                    'a' => 'Java',
                    'b' => 'Python',
                    'c' => 'PHP',
                    'd' => 'Ruby',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What does the term "algorithm" refer to in programming?',
                    'a' => 'A coding language',
                    'b' => 'A set of rules or steps to solve a problem',
                    'c' => 'A debugging tool',
                    'd' => 'A type of database',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following is used to interact with databases in PHP?',
                    'a' => 'Laravel',
                    'b' => 'Django',
                    'c' => 'MySQLi',
                    'd' => 'Flask',
                    'answer' => 'c',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following is a popular JavaScript runtime built on Chrome\'s V8 JavaScript engine?',
                    'a' => 'Node.js',
                    'b' => 'Deno',
                    'c' => 'React.js',
                    'd' => 'Angular.js',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is a closure in JavaScript?',
                    'a' => 'A function having access to the parent scope, even after the parent function has closed',
                    'b' => 'A data structure to store multiple values',
                    'c' => 'A way to handle exceptions in code',
                    'd' => 'A loop that runs indefinitely',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What does "SQL" stand for?',
                    'a' => 'Structured Query Language',
                    'b' => 'Simple Query Language',
                    'c' => 'Standard Query Language',
                    'd' => 'Sequential Query Language',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following is a way to handle asynchronous operations in JavaScript?',
                    'a' => 'Callbacks',
                    'b' => 'Promises',
                    'c' => 'Async/Await',
                    'd' => 'All of the above',
                    'answer' => 'd',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which HTML tag is used to define an internal style sheet?',
                    'a' => '<style>',
                    'b' => '<css>',
                    'c' => '<script>',
                    'd' => '<link>',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the main purpose of the Git version control system?',
                    'a' => 'To compile code',
                    'b' => 'To manage changes to source code',
                    'c' => 'To execute code',
                    'd' => 'To style web pages',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In CSS, what does "margin: 0 auto;" do to an element?',
                    'a' => 'Centers the element horizontally',
                    'b' => 'Sets the element\'s margin to zero on all sides',
                    'c' => 'Aligns the element to the left',
                    'd' => 'Aligns the element to the right',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following is used to create a class in Python?',
                    'a' => 'class',
                    'b' => 'def',
                    'c' => 'function',
                    'd' => 'struct',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What does CSS stand for?',
                    'a' => 'Cascading Style Sheets',
                    'b' => 'Cascading Simple Sheets',
                    'c' => 'Computer Style Sheets',
                    'd' => 'Colorful Style Sheets',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the correct HTML element for inserting a line break?',
                    'a' => '<lb>',
                    'b' => '<br>',
                    'c' => '<break>',
                    'd' => '<ln>',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which HTTP method is typically used to retrieve data from a server?',
                    'a' => 'POST',
                    'b' => 'PUT',
                    'c' => 'GET',
                    'd' => 'DELETE',
                    'answer' => 'c',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In JavaScript, which of the following methods can be used to select an element by its ID?',
                    'a' => 'getElementById()',
                    'b' => 'querySelector()',
                    'c' => 'getElementByClass()',
                    'd' => 'getElementsByName()',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following is a valid way to declare a variable in JavaScript?',
                    'a' => 'int x = 10;',
                    'b' => 'var x = 10;',
                    'c' => 'let x == 10;',
                    'd' => 'x := 10;',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which Python keyword is used to handle exceptions?',
                    'a' => 'catch',
                    'b' => 'handle',
                    'c' => 'try',
                    'd' => 'except',
                    'answer' => 'd',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In SQL, which command is used to update existing records in a table?',
                    'a' => 'INSERT',
                    'b' => 'UPDATE',
                    'c' => 'DELETE',
                    'd' => 'SELECT',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the purpose of the "this" keyword in JavaScript?',
                    'a' => 'To refer to the current object',
                    'b' => 'To declare a new variable',
                    'c' => 'To call a function',
                    'd' => 'To create a loop',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the output of the expression `4 + "5"` in JavaScript?',
                    'a' => '45',
                    'b' => '9',
                    'c' => 'NaN',
                    'd' => 'undefined',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following is a correct syntax to create an object in JavaScript?',
                    'a' => 'var obj = Object();',
                    'b' => 'var obj = new Object();',
                    'c' => 'var obj = {};',
                    'd' => 'All of the above',
                    'answer' => 'd',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following methods is used to access HTML elements using JavaScript?',
                    'a' => 'getElementById',
                    'b' => 'getElementByClassName',
                    'c' => 'getElementsByTagName',
                    'd' => 'All of the above',
                    'answer' => 'd',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In Java, which keyword is used to inherit a class?',
                    'a' => 'extends',
                    'b' => 'implements',
                    'c' => 'inherits',
                    'd' => 'derives',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ], [
                    'field_id' => 4,
                    
                    'question' => 'Which HTTP method is typically used to retrieve data from a server?',
                    'a' => 'POST',
                    'b' => 'PUT',
                    'c' => 'GET',
                    'd' => 'DELETE',
                    'answer' => 'c',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In JavaScript, which of the following methods can be used to select an element by its ID?',
                    'a' => 'getElementById()',
                    'b' => 'querySelector()',
                    'c' => 'getElementByClass()',
                    'd' => 'getElementsByName()',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following is a valid way to declare a variable in JavaScript?',
                    'a' => 'int x = 10;',
                    'b' => 'var x = 10;',
                    'c' => 'let x == 10;',
                    'd' => 'x := 10;',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which Python keyword is used to handle exceptions?',
                    'a' => 'catch',
                    'b' => 'handle',
                    'c' => 'try',
                    'd' => 'except',
                    'answer' => 'd',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In SQL, which command is used to update existing records in a table?',
                    'a' => 'INSERT',
                    'b' => 'UPDATE',
                    'c' => 'DELETE',
                    'd' => 'SELECT',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the purpose of the "this" keyword in JavaScript?',
                    'a' => 'To refer to the current object',
                    'b' => 'To declare a new variable',
                    'c' => 'To call a function',
                    'd' => 'To create a loop',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the output of the expression `4 + "5"` in JavaScript?',
                    'a' => '45',
                    'b' => '9',
                    'c' => 'NaN',
                    'd' => 'undefined',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following is a correct syntax to create an object in JavaScript?',
                    'a' => 'var obj = Object();',
                    'b' => 'var obj = new Object();',
                    'c' => 'var obj = {};',
                    'd' => 'All of the above',
                    'answer' => 'd',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following methods is used to access HTML elements using JavaScript?',
                    'a' => 'getElementById',
                    'b' => 'getElementByClassName',
                    'c' => 'getElementsByTagName',
                    'd' => 'All of the above',
                    'answer' => 'd',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In Java, which keyword is used to inherit a class?',
                    'a' => 'extends',
                    'b' => 'implements',
                    'c' => 'inherits',
                    'd' => 'derives',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following is a valid way to create an array in JavaScript?',
                    'a' => 'var arr = [];',
                    'b' => 'var arr = {};',
                    'c' => 'var arr = ()',
                    'd' => 'var arr = <>;',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In Python, which method can be used to find the length of a list?',
                    'a' => 'length()',
                    'b' => 'count()',
                    'c' => 'len()',
                    'd' => 'size()',
                    'answer' => 'c',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which SQL statement is used to remove a table from a database?',
                    'a' => 'DROP TABLE',
                    'b' => 'DELETE TABLE',
                    'c' => 'REMOVE TABLE',
                    'd' => 'TRUNCATE TABLE',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What does the "=== "operator do in JavaScript?',
                    'a' => 'Compares both value and type for equality',
                    'b' => 'Compares only value for equality',
                    'c' => 'Assigns a value to a variable',
                    'd' => 'Checks for inequality',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which HTML element is used to define a table row?',
                    'a' => '<td>',
                    'b' => '<th>',
                    'c' => '<tr>',
                    'd' => '<table>',
                    'answer' => 'c',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In CSS, which property is used to change the text color of an element?',
                    'a' => 'background-color',
                    'b' => 'color',
                    'c' => 'text-color',
                    'd' => 'font-color',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which JavaScript method is used to convert a JSON string into a JavaScript object?',
                    'a' => 'JSON.parse()',
                    'b' => 'JSON.stringify()',
                    'c' => 'JSON.object()',
                    'd' => 'JSON.convert()',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In Python, which keyword is used to create a new class?',
                    'a' => 'class',
                    'b' => 'def',
                    'c' => 'new',
                    'd' => 'create',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following is used to include an external JavaScript file in an HTML document?',
                    'a' => '<script src="file.js"></script>',
                    'b' => '<link rel="script" href="file.js">',
                    'c' => '<include src="file.js">',
                    'd' => '<script href="file.js"></script>',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In SQL, which clause is used to filter the results of a query based on specific conditions?',
                    'a' => 'WHERE',
                    'b' => 'FILTER',
                    'c' => 'GROUP BY',
                    'd' => 'ORDER BY',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ], [
                    'field_id' => 4,
                    
                    'question' => 'Which function is used to write a message to the console in JavaScript?',
                    'a' => 'print()',
                    'b' => 'log()',
                    'c' => 'write()',
                    'd' => 'console.log()',
                    'answer' => 'd',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What does the "continue" statement do in a loop?',
                    'a' => 'Exits the loop',
                    'b' => 'Skips the rest of the current iteration and proceeds to the next iteration',
                    'c' => 'Restarts the loop from the beginning',
                    'd' => 'Pauses the loop execution',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In CSS, which property is used to change the background color of an element?',
                    'a' => 'color',
                    'b' => 'background-color',
                    'c' => 'bgcolor',
                    'd' => 'background',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following is not a relational database management system (RDBMS)?',
                    'a' => 'MySQL',
                    'b' => 'MongoDB',
                    'c' => 'PostgreSQL',
                    'd' => 'SQLite',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which keyword is used to return a value from a function in Python?',
                    'a' => 'return',
                    'b' => 'yield',
                    'c' => 'output',
                    'd' => 'give',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In JavaScript, which method is used to remove the last element from an array?',
                    'a' => 'pop()',
                    'b' => 'remove()',
                    'c' => 'delete()',
                    'd' => 'splice()',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the purpose of the "super" keyword in Java?',
                    'a' => 'To call the parent class constructor',
                    'b' => 'To create a new instance of a class',
                    'c' => 'To declare a constant variable',
                    'd' => 'To inherit from another class',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following is used to define a block of code that can handle exceptions in Python?',
                    'a' => 'try-except',
                    'b' => 'try-catch',
                    'c' => 'try-finally',
                    'd' => 'try-handle',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In JavaScript, what does the "typeof" operator do?',
                    'a' => 'Returns the type of a variable',
                    'b' => 'Converts a variable to a different type',
                    'c' => 'Checks if a variable is defined',
                    'd' => 'Deletes a variable',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which SQL statement is used to add a new row to a table?',
                    'a' => 'INSERT INTO',
                    'b' => 'ADD INTO',
                    'c' => 'UPDATE INTO',
                    'd' => 'APPEND INTO',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],[
                    'field_id' => 4,
                    
                    'question' => 'Which of the following is not a valid variable name in Python?',
                    'a' => 'myVar',
                    'b' => 'my_var',
                    'c' => 'my-var',
                    'd' => '_myvar',
                    'answer' => 'c',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What does the acronym SQL stand for?',
                    'a' => 'Structured Query Language',
                    'b' => 'Simple Query Language',
                    'c' => 'Sequential Query Language',
                    'd' => 'Structured Quick Language',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In JavaScript, which keyword is used to declare a variable that cannot be reassigned?',
                    'a' => 'let',
                    'b' => 'var',
                    'c' => 'constant',
                    'd' => 'const',
                    'answer' => 'd',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following is a valid way to define a function in Python?',
                    'a' => 'function myFunction() {}',
                    'b' => 'def myFunction() {}',
                    'c' => 'myFunction() => {}',
                    'd' => 'def myFunction():',
                    'answer' => 'd',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In SQL, which keyword is used to sort the result-set in ascending order?',
                    'a' => 'SORT BY',
                    'b' => 'ORDER BY ASC',
                    'c' => 'ORDER BY',
                    'd' => 'SORT ASC',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following is not a looping structure in JavaScript?',
                    'a' => 'for',
                    'b' => 'foreach',
                    'c' => 'while',
                    'd' => 'do-while',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In Python, how do you create a list?',
                    'a' => 'myList = []',
                    'b' => 'myList = {}',
                    'c' => 'myList = ()',
                    'd' => 'myList = <>',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following is used to write an inline CSS?',
                    'a' => '<style>',
                    'b' => 'style',
                    'c' => 'css',
                    'd' => '<style>',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following is a JavaScript data type?',
                    'a' => 'Boolean',
                    'b' => 'Number',
                    'c' => 'String',
                    'd' => 'All of the above',
                    'answer' => 'd',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In Java, which method is used to find the length of a string?',
                    'a' => 'length()',
                    'b' => 'size()',
                    'c' => 'lengthOf()',
                    'd' => 'len()',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which keyword is used to define a constant in JavaScript?',
                    'a' => 'const',
                    'b' => 'let',
                    'c' => 'constant',
                    'd' => 'var',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the output of 2 + "2" in JavaScript?',
                    'a' => '4',
                    'b' => '22',
                    'c' => 'NaN',
                    'd' => 'Error',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which HTML tag is used to define an unordered list?',
                    'a' => '<ul>',
                    'b' => '<ol>',
                    'c' => '<li>',
                    'd' => '<list>',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In Python, how do you insert comments in your code?',
                    'a' => '// This is a comment',
                    'b' => '/* This is a comment */',
                    'c' => '# This is a comment',
                    'd' => '<!-- This is a comment -->',
                    'answer' => 'c',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which SQL keyword is used to retrieve unique values from a column?',
                    'a' => 'UNIQUE',
                    'b' => 'DISTINCT',
                    'c' => 'SELECT',
                    'd' => 'FILTER',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In JavaScript, which method is used to add one or more elements to the end of an array?',
                    'a' => 'push()',
                    'b' => 'pop()',
                    'c' => 'add()',
                    'd' => 'append()',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What does the "finally" block do in a try-catch statement in Java?',
                    'a' => 'It is executed if an exception is thrown',
                    'b' => 'It is executed regardless of whether an exception is thrown or not',
                    'c' => 'It is executed only if no exception is thrown',
                    'd' => 'It is executed before the try block',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In Python, which method is used to remove whitespace from the beginning and end of a string?',
                    'a' => 'strip()',
                    'b' => 'trim()',
                    'c' => 'clean()',
                    'd' => 'remove()',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following is a correct way to create an object in JavaScript?',
                    'a' => 'var obj = {};',
                    'b' => 'var obj = [];',
                    'c' => 'var obj = ();',
                    'd' => 'var obj = <>;',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In CSS, which property is used to change the font size of an element?',
                    'a' => 'text-size',
                    'b' => 'font-size',
                    'c' => 'font-weight',
                    'd' => 'font-style',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following is a correct way to declare a function in JavaScript?',
                    'a' => 'function myFunction() {}',
                    'b' => 'def myFunction() {}',
                    'c' => 'myFunction() => {}',
                    'd' => 'function: myFunction() {}',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the purpose of the "import" statement in Python?',
                    'a' => 'To import functions from a module',
                    'b' => 'To create a new module',
                    'c' => 'To export functions from a module',
                    'd' => 'To declare a variable',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In SQL, which keyword is used to delete data from a table?',
                    'a' => 'REMOVE',
                    'b' => 'DELETE',
                    'c' => 'DROP',
                    'd' => 'ERASE',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which method is used to create a new array by applying a function to each element of an array in JavaScript?',
                    'a' => 'filter()',
                    'b' => 'map()',
                    'c' => 'reduce()',
                    'd' => 'forEach()',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which keyword is used to handle exceptions in Java?',
                    'a' => 'try',
                    'b' => 'catch',
                    'c' => 'throw',
                    'd' => 'All of the above',
                    'answer' => 'd',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In Python, which keyword is used to define a generator function?',
                    'a' => 'yield',
                    'b' => 'return',
                    'c' => 'def',
                    'd' => 'generator',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which method is used to convert a JSON string into a JavaScript object?',
                    'a' => 'JSON.stringify()',
                    'b' => 'JSON.parse()',
                    'c' => 'JSON.convert()',
                    'd' => 'JSON.toObject()',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What does the "self" keyword represent in a Python class?',
                    'a' => 'It refers to the class itself',
                    'b' => 'It refers to the instance of the class',
                    'c' => 'It refers to the parent class',
                    'd' => 'It refers to a global variable',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following is not a valid data type in JavaScript?',
                    'a' => 'Number',
                    'b' => 'String',
                    'c' => 'Character',
                    'd' => 'Boolean',
                    'answer' => 'c',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In CSS, which property is used to change the text color of an element?',
                    'a' => 'color',
                    'b' => 'text-color',
                    'c' => 'font-color',
                    'd' => 'text-style',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the time complexity of accessing an element in an array?',
                    'a' => 'O(1)',
                    'b' => 'O(n)',
                    'c' => 'O(log n)',
                    'd' => 'O(n^2)',
                    'answer' => 'a',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What data structure is used to implement a LIFO (Last In, First Out) operation?',
                    'a' => 'Queue',
                    'b' => 'Stack',
                    'c' => 'Linked List',
                    'd' => 'Tree',
                    'answer' => 'b',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In which data structure are elements stored in a hierarchical manner?',
                    'a' => 'Array',
                    'b' => 'Graph',
                    'c' => 'Tree',
                    'd' => 'Hash Table',
                    'answer' => 'c',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the worst-case time complexity of quicksort?',
                    'a' => 'O(n log n)',
                    'b' => 'O(n^2)',
                    'c' => 'O(n)',
                    'd' => 'O(log n)',
                    'answer' => 'b',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which algorithm is used to find the shortest path in a graph?',
                    'a' => 'Merge Sort',
                    'b' => 'Dijkstra\'s Algorithm',
                    'c' => 'Binary Search',
                    'd' => 'Kruskal\'s Algorithm',
                    'answer' => 'b',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which data structure uses the concept of priority?',
                    'a' => 'Stack',
                    'b' => 'Queue',
                    'c' => 'Priority Queue',
                    'd' => 'Linked List',
                    'answer' => 'c',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following is not a type of binary tree?',
                    'a' => 'Full Binary Tree',
                    'b' => 'Complete Binary Tree',
                    'c' => 'Balanced Binary Tree',
                    'd' => 'Hash Tree',
                    'answer' => 'd',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the primary purpose of a hash table?',
                    'a' => 'Sorting data',
                    'b' => 'Searching data',
                    'c' => 'Storing data in a specific order',
                    'd' => 'Handling dynamic arrays',
                    'answer' => 'b',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In a doubly linked list, how many pointers does each node have?',
                    'a' => '1',
                    'b' => '2',
                    'c' => '3',
                    'd' => '4',
                    'answer' => 'b',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the time complexity of searching an element in a balanced binary search tree?',
                    'a' => 'O(1)',
                    'b' => 'O(log n)',
                    'c' => 'O(n)',
                    'd' => 'O(n^2)',
                    'answer' => 'b',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which sorting algorithm is considered the fastest for small datasets?',
                    'a' => 'Bubble Sort',
                    'b' => 'Merge Sort',
                    'c' => 'Insertion Sort',
                    'd' => 'Heap Sort',
                    'answer' => 'c',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the space complexity of an algorithm that uses a constant amount of extra space regardless of input size?',
                    'a' => 'O(1)',
                    'b' => 'O(n)',
                    'c' => 'O(log n)',
                    'd' => 'O(n^2)',
                    'answer' => 'a',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which data structure is typically used to implement recursion?',
                    'a' => 'Stack',
                    'b' => 'Queue',
                    'c' => 'Array',
                    'd' => 'Tree',
                    'answer' => 'a',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which traversal technique is used to visit all nodes of a binary tree level by level?',
                    'a' => 'In-order Traversal',
                    'b' => 'Pre-order Traversal',
                    'c' => 'Post-order Traversal',
                    'd' => 'Breadth-First Traversal',
                    'answer' => 'd',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the average time complexity of binary search on a sorted array?',
                    'a' => 'O(1)',
                    'b' => 'O(log n)',
                    'c' => 'O(n)',
                    'd' => 'O(n log n)',
                    'answer' => 'b',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In a hash table, what is used to handle collisions?',
                    'a' => 'Hash Function',
                    'b' => 'Linked List',
                    'c' => 'Rehashing',
                    'd' => 'Open Addressing',
                    'answer' => 'd',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following algorithms is used for sorting data in linear time?',
                    'a' => 'Quick Sort',
                    'b' => 'Merge Sort',
                    'c' => 'Radix Sort',
                    'd' => 'Heap Sort',
                    'answer' => 'c',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the primary difference between a singly linked list and a doubly linked list?',
                    'a' => 'Singly linked list has one pointer per node, while doubly linked list has two.',
                    'b' => 'Doubly linked list is faster for search operations.',
                    'c' => 'Singly linked list is more memory efficient.',
                    'd' => 'There is no difference.',
                    'answer' => 'a',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which algorithm is best suited for solving the traveling salesman problem?',
                    'a' => 'Dynamic Programming',
                    'b' => 'Greedy Algorithm',
                    'c' => 'Backtracking',
                    'd' => 'Branch and Bound',
                    'answer' => 'a',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In which type of data structure are elements stored in a circular manner?',
                    'a' => 'Queue',
                    'b' => 'Stack',
                    'c' => 'Circular Queue',
                    'd' => 'Binary Tree',
                    'answer' => 'c',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the best-case time complexity of bubble sort?',
                    'a' => 'O(n)',
                    'b' => 'O(n log n)',
                    'c' => 'O(n^2)',
                    'd' => 'O(1)',
                    'answer' => 'a',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which algorithm uses divide and conquer strategy?',
                    'a' => 'Insertion Sort',
                    'b' => 'Merge Sort',
                    'c' => 'Bubble Sort',
                    'd' => 'Selection Sort',
                    'answer' => 'b',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the primary advantage of using a balanced binary search tree?',
                    'a' => 'Faster insertion and deletion operations',
                    'b' => 'Lower space complexity',
                    'c' => 'Faster search operations',
                    'd' => 'No need for rebalancing',
                    'answer' => 'c',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the main advantage of using a linked list over an array?',
                    'a' => 'Faster access to elements',
                    'b' => 'Dynamic size adjustment',
                    'c' => 'Constant time complexity for insertions and deletions',
                    'd' => 'Better cache locality',
                    'answer' => 'b',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which sorting algorithm has the worst-case time complexity of O(n^2)?',
                    'a' => 'Merge Sort',
                    'b' => 'Quick Sort',
                    'c' => 'Selection Sort',
                    'd' => 'Heap Sort',
                    'answer' => 'c',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which data structure is used to implement depth-first search?',
                    'a' => 'Queue',
                    'b' => 'Stack',
                    'c' => 'Array',
                    'd' => 'Priority Queue',
                    'answer' => 'b',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the key characteristic of a hash function?',
                    'a' => 'It sorts data',
                    'b' => 'It maps input to fixed-size values',
                    'c' => 'It stores data in a specific order',
                    'd' => 'It balances the data structure',
                    'answer' => 'b',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which data structure is ideal for implementing a priority queue?',
                    'a' => 'Stack',
                    'b' => 'Queue',
                    'c' => 'Binary Heap',
                    'd' => 'Linked List',
                    'answer' => 'c',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the time complexity of inserting an element into a binary heap?',
                    'a' => 'O(1)',
                    'b' => 'O(log n)',
                    'c' => 'O(n)',
                    'd' => 'O(n log n)',
                    'answer' => 'b',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which traversal method is used to visit all nodes of a graph using BFS?',
                    'a' => 'Depth-First Traversal',
                    'b' => 'Breadth-First Traversal',
                    'c' => 'Post-order Traversal',
                    'd' => 'In-order Traversal',
                    'answer' => 'b',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In a binary search tree, which operation takes O(n) time in the worst case?',
                    'a' => 'Insertion',
                    'b' => 'Search',
                    'c' => 'Deletion',
                    'd' => 'Traversal',
                    'answer' => 'a',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the space complexity of storing a graph using an adjacency matrix?',
                    'a' => 'O(n)',
                    'b' => 'O(n^2)',
                    'c' => 'O(n log n)',
                    'd' => 'O(n^3)',
                    'answer' => 'b',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the main advantage of a doubly linked list over a singly linked list?',
                    'a' => 'Easier traversal in both directions',
                    'b' => 'Lower memory usage',
                    'c' => 'Faster insertion at the beginning',
                    'd' => 'No need for head pointer',
                    'answer' => 'a',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which data structure is used for implementing a recursive function?',
                    'a' => 'Queue',
                    'b' => 'Stack',
                    'c' => 'Array',
                    'd' => 'Linked List',
                    'answer' => 'b',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which algorithm is commonly used for finding the minimum spanning tree of a graph?',
                    'a' => 'Kruskal\'s Algorithm',
                    'b' => 'Dijkstra\'s Algorithm',
                    'c' => 'Bellman-Ford Algorithm',
                    'd' => 'Floyd-Warshall Algorithm',
                    'answer' => 'a',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the time complexity of the worst-case scenario for quicksort?',
                    'a' => 'O(n log n)',
                    'b' => 'O(n^2)',
                    'c' => 'O(n)',
                    'd' => 'O(log n)',
                    'answer' => 'b',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which data structure is used for implementing LRU cache?',
                    'a' => 'Stack',
                    'b' => 'Queue',
                    'c' => 'Doubly Linked List and Hash Map',
                    'd' => 'Binary Search Tree',
                    'answer' => 'c',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the primary purpose of a graph traversal algorithm?',
                    'a' => 'To find the shortest path between two nodes',
                    'b' => 'To visit all the nodes in a graph',
                    'c' => 'To find the minimum spanning tree',
                    'd' => 'To sort the nodes of the graph',
                    'answer' => 'b',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which algorithm is used to solve the knapsack problem optimally?',
                    'a' => 'Greedy Algorithm',
                    'b' => 'Dynamic Programming',
                    'c' => 'Divide and Conquer',
                    'd' => 'Backtracking',
                    'answer' => 'b',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In a directed graph, what is the term for a node with no outgoing edges?',
                    'a' => 'Source',
                    'b' => 'Sink',
                    'c' => 'Root',
                    'd' => 'Leaf',
                    'answer' => 'b',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which data structure is used for implementing a depth-first search?',
                    'a' => 'Queue',
                    'b' => 'Stack',
                    'c' => 'Priority Queue',
                    'd' => 'Array',
                    'answer' => 'b',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which algorithm is used for finding the shortest path in a weighted graph?',
                    'a' => 'Dijkstra\'s Algorithm',
                    'b' => 'Kruskal\'s Algorithm',
                    'c' => 'Prim\'s Algorithm',
                    'd' => 'Bellman-Ford Algorithm',
                    'answer' => 'a',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In a binary heap, what is the time complexity of deleting the root element?',
                    'a' => 'O(1)',
                    'b' => 'O(log n)',
                    'c' => 'O(n)',
                    'd' => 'O(n log n)',
                    'answer' => 'b',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which type of tree traversal method is used to get nodes in ascending order?',
                    'a' => 'Pre-order Traversal',
                    'b' => 'In-order Traversal',
                    'c' => 'Post-order Traversal',
                    'd' => 'Level-order Traversal',
                    'answer' => 'b',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the worst-case time complexity of insertion sort?',
                    'a' => 'O(n log n)',
                    'b' => 'O(n^2)',
                    'c' => 'O(n)',
                    'd' => 'O(log n)',
                    'answer' => 'b',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following is a stable sorting algorithm?',
                    'a' => 'Quick Sort',
                    'b' => 'Heap Sort',
                    'c' => 'Merge Sort',
                    'd' => 'Selection Sort',
                    'answer' => 'c',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the primary disadvantage of using a hash table?',
                    'a' => 'High memory usage',
                    'b' => 'Slow access time',
                    'c' => 'Complex implementation',
                    'd' => 'Difficulty in handling collisions',
                    'answer' => 'a',
                    'created_at' => '2024-07-25 13:28:30',
                    'updated_at' => '2024-07-25 13:28:30'
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which data structure is used for implementing a depth-first search algorithm?',
                    'a' => 'Queue',
                    'b' => 'Stack',
                    'c' => 'Priority Queue',
                    'd' => 'Array',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In which scenario would you prefer a hash map over a binary search tree?',
                    'a' => 'When you need ordered data',
                    'b' => 'When you need faster lookups',
                    'c' => 'When you need to traverse elements in sorted order',
                    'd' => 'When you need to perform range queries',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which algorithm is used for finding the shortest path in an unweighted graph?',
                    'a' => 'Dijkstra\'s Algorithm',
                    'b' => 'A* Algorithm',
                    'c' => 'Breadth-First Search',
                    'd' => 'Bellman-Ford Algorithm',
                    'answer' => 'c',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which data structure allows for constant-time insertion and deletion at both ends?',
                    'a' => 'Queue',
                    'b' => 'Stack',
                    'c' => 'Deque',
                    'd' => 'Priority Queue',
                    'answer' => 'c',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In a balanced binary search tree, what is the time complexity of searching for an element?',
                    'a' => 'O(n)',
                    'b' => 'O(log n)',
                    'c' => 'O(n log n)',
                    'd' => 'O(1)',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which algorithm is used to find the maximum subarray sum?',
                    'a' => 'Kruskal\'s Algorithm',
                    'b' => 'Kadane\'s Algorithm',
                    'c' => 'Prim\'s Algorithm',
                    'd' => 'Dijkstra\'s Algorithm',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the space complexity of depth-first search in a graph represented by an adjacency list?',
                    'a' => 'O(n)',
                    'b' => 'O(e)',
                    'c' => 'O(n + e)',
                    'd' => 'O(n^2)',
                    'answer' => 'c',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following is an example of a divide-and-conquer algorithm?',
                    'a' => 'Merge Sort',
                    'b' => 'Insertion Sort',
                    'c' => 'Selection Sort',
                    'd' => 'Bubble Sort',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the worst-case time complexity of accessing an element in an array?',
                    'a' => 'O(1)',
                    'b' => 'O(log n)',
                    'c' => 'O(n)',
                    'd' => 'O(n log n)',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the primary characteristic of a binary search tree?',
                    'a' => 'All nodes have at most two children',
                    'b' => 'All nodes have exactly two children',
                    'c' => 'All nodes are connected in a circular manner',
                    'd' => 'All nodes have a value greater than their children',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which algorithm is commonly used for solving the traveling salesman problem?',
                    'a' => 'Dynamic Programming',
                    'b' => 'Greedy Algorithm',
                    'c' => 'Backtracking',
                    'd' => 'Genetic Algorithm',
                    'answer' => 'd',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the space complexity of an adjacency matrix representation of a graph?',
                    'a' => 'O(n)',
                    'b' => 'O(e)',
                    'c' => 'O(n^2)',
                    'd' => 'O(n + e)',
                    'answer' => 'c',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which algorithm is used to find the maximum flow in a flow network?',
                    'a' => 'Ford-Fulkerson Algorithm',
                    'b' => 'Kruskal\'s Algorithm',
                    'c' => 'Prim\'s Algorithm',
                    'd' => 'Dijkstra\'s Algorithm',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the time complexity of searching for an element in a hash set?',
                    'a' => 'O(n)',
                    'b' => 'O(log n)',
                    'c' => 'O(1) on average',
                    'd' => 'O(n log n)',
                    'answer' => 'c',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What type of data structure is a binary heap?',
                    'a' => 'Binary Search Tree',
                    'b' => 'Balanced Tree',
                    'c' => 'Complete Binary Tree',
                    'd' => 'Graph',
                    'answer' => 'c',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In which scenario would you prefer using a binary search tree over a hash table?',
                    'a' => 'When you need to store data in sorted order',
                    'b' => 'When you need to perform constant-time lookups',
                    'c' => 'When you need to handle collisions',
                    'd' => 'When you need fast insertion and deletion',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which traversal technique is used for depth-first search?',
                    'a' => 'In-order Traversal',
                    'b' => 'Pre-order Traversal',
                    'c' => 'Post-order Traversal',
                    'd' => 'All of the above',
                    'answer' => 'd',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the primary goal of the dynamic programming technique?',
                    'a' => 'To divide a problem into smaller sub-problems',
                    'b' => 'To optimize recursive solutions by storing intermediate results',
                    'c' => 'To solve problems in a greedy manner',
                    'd' => 'To use divide-and-conquer strategies',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following is not a type of heap?',
                    'a' => 'Max-Heap',
                    'b' => 'Min-Heap',
                    'c' => 'Binary Heap',
                    'd' => 'Fibonacci Heap',
                    'answer' => 'c',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which algorithm is used for sorting a list with a small range of integers?',
                    'a' => 'Counting Sort',
                    'b' => 'Merge Sort',
                    'c' => 'Quick Sort',
                    'd' => 'Heap Sort',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the primary characteristic of a balanced tree?',
                    'a' => 'The height of the tree is minimized',
                    'b' => 'All nodes have at most two children',
                    'c' => 'All nodes have the same value',
                    'd' => 'The tree is always a complete binary tree',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which data structure is used for implementing a priority queue?',
                    'a' => 'Array',
                    'b' => 'Linked List',
                    'c' => 'Binary Heap',
                    'd' => 'Hash Table',
                    'answer' => 'c',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which sorting algorithm is known for its worst-case time complexity of O(n^2)?',
                    'a' => 'Bubble Sort',
                    'b' => 'Merge Sort',
                    'c' => 'Quick Sort',
                    'd' => 'Heap Sort',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which data structure is best for implementing a LRU (Least Recently Used) cache?',
                    'a' => 'Stack',
                    'b' => 'Queue',
                    'c' => 'Doubly Linked List with a Hash Map',
                    'd' => 'Binary Tree',
                    'answer' => 'c',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the time complexity of inserting an element in a hash table with separate chaining?',
                    'a' => 'O(1) on average',
                    'b' => 'O(log n)',
                    'c' => 'O(n)',
                    'd' => 'O(n log n)',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which algorithm is used for finding the shortest path in a graph with non-negative weights?',
                    'a' => 'Bellman-Ford Algorithm',
                    'b' => 'Dijkstra\'s Algorithm',
                    'c' => 'Floyd-Warshall Algorithm',
                    'd' => 'Kruskal\'s Algorithm',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In which scenario is an AVL tree preferred over a Red-Black tree?',
                    'a' => 'When you need faster insertion and deletion',
                    'b' => 'When you need a more balanced tree with stricter balancing conditions',
                    'c' => 'When you need faster lookups',
                    'd' => 'When you need to minimize tree height with less balancing overhead',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the time complexity of accessing an element in a doubly linked list?',
                    'a' => 'O(1)',
                    'b' => 'O(log n)',
                    'c' => 'O(n)',
                    'd' => 'O(n log n)',
                    'answer' => 'c',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which sorting algorithm is based on the divide-and-conquer strategy and uses the concept of partitioning?',
                    'a' => 'Quick Sort',
                    'b' => 'Merge Sort',
                    'c' => 'Bubble Sort',
                    'd' => 'Insertion Sort',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In a complete binary tree, how many levels are there if there are n nodes?',
                    'a' => 'log2(n)',
                    'b' => 'log2(n+1)',
                    'c' => 'n',
                    'd' => '2^log2(n)',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which technique is used to solve optimization problems where the objective is to find the best solution among many possible solutions?',
                    'a' => 'Greedy Algorithm',
                    'b' => 'Dynamic Programming',
                    'c' => 'Backtracking',
                    'd' => 'All of the above',
                    'answer' => 'd',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the worst-case time complexity of insertion sort?',
                    'a' => 'O(1)',
                    'b' => 'O(log n)',
                    'c' => 'O(n)',
                    'd' => 'O(n^2)',
                    'answer' => 'd',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which data structure is typically used to implement a recursive function?',
                    'a' => 'Queue',
                    'b' => 'Stack',
                    'c' => 'Heap',
                    'd' => 'Hash Table',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the time complexity of traversing a linked list?',
                    'a' => 'O(1)',
                    'b' => 'O(log n)',
                    'c' => 'O(n)',
                    'd' => 'O(n log n)',
                    'answer' => 'c',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which algorithm is used to solve the knapsack problem?',
                    'a' => 'Dynamic Programming',
                    'b' => 'Greedy Algorithm',
                    'c' => 'Backtracking',
                    'd' => 'Divide and Conquer',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In a binary heap, which operation takes O(log n) time complexity?',
                    'a' => 'Insertion',
                    'b' => 'Peek',
                    'c' => 'Deletion',
                    'd' => 'Heapify',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following is not a type of binary tree?',
                    'a' => 'Full Binary Tree',
                    'b' => 'Complete Binary Tree',
                    'c' => 'Perfect Binary Tree',
                    'd' => 'Triangular Tree',
                    'answer' => 'd',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the time complexity of deleting an element from a binary search tree?',
                    'a' => 'O(n)',
                    'b' => 'O(log n)',
                    'c' => 'O(n log n)',
                    'd' => 'O(1)',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which data structure is used to implement a graph traversal algorithm like Breadth-First Search?',
                    'a' => 'Queue',
                    'b' => 'Stack',
                    'c' => 'Priority Queue',
                    'd' => 'Heap',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In which scenario would you prefer to use a Trie data structure?',
                    'a' => 'When you need to perform search operations on strings',
                    'b' => 'When you need fast insertion and deletion of elements',
                    'c' => 'When you need to store large amounts of data',
                    'd' => 'When you need a sorted data structure',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which technique is used for solving the problem of finding the longest common subsequence?',
                    'a' => 'Greedy Algorithm',
                    'b' => 'Dynamic Programming',
                    'c' => 'Divide and Conquer',
                    'd' => 'Backtracking',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the time complexity of finding the maximum element in a max-heap?',
                    'a' => 'O(1)',
                    'b' => 'O(log n)',
                    'c' => 'O(n)',
                    'd' => 'O(n log n)',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the space complexity of a dynamic array that holds n elements?',
                    'a' => 'O(n)',
                    'b' => 'O(log n)',
                    'c' => 'O(n log n)',
                    'd' => 'O(1)',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which algorithm is used to find the minimum spanning tree of a graph?',
                    'a' => 'Kruskal\'s Algorithm',
                    'b' => 'Dijkstra\'s Algorithm',
                    'c' => 'Bellman-Ford Algorithm',
                    'd' => 'Floyd-Warshall Algorithm',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In which type of graph traversal does the algorithm explore all the vertices at the present depth level before moving on to the vertices at the next depth level?',
                    'a' => 'Depth-First Search',
                    'b' => 'Breadth-First Search',
                    'c' => 'Best-First Search',
                    'd' => 'A* Search',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which data structure is used for implementing a LIFO (Last In First Out) principle?',
                    'a' => 'Stack',
                    'b' => 'Queue',
                    'c' => 'Linked List',
                    'd' => 'Hash Table',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ], [
                    'field_id' => 4,
                    
                    'question' => 'Which algorithm is commonly used to solve the traveling salesman problem?',
                    'a' => 'Dynamic Programming',
                    'b' => 'Greedy Algorithm',
                    'c' => 'Genetic Algorithm',
                    'd' => 'Simulated Annealing',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the worst-case time complexity of binary search on a sorted array?',
                    'a' => 'O(1)',
                    'b' => 'O(log n)',
                    'c' => 'O(n)',
                    'd' => 'O(n log n)',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which algorithm is used for sorting data based on the frequency of elements?',
                    'a' => 'Merge Sort',
                    'b' => 'Quick Sort',
                    'c' => 'Counting Sort',
                    'd' => 'Bucket Sort',
                    'answer' => 'c',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which data structure is typically used for implementing a priority queue?',
                    'a' => 'Binary Heap',
                    'b' => 'Stack',
                    'c' => 'Queue',
                    'd' => 'Hash Table',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the primary advantage of using a balanced binary search tree?',
                    'a' => 'Faster insertion and deletion',
                    'b' => 'Minimized tree height and improved search time',
                    'c' => 'Increased space efficiency',
                    'd' => 'Simpler implementation',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which algorithm is used to solve the problem of finding the shortest path between all pairs of vertices in a graph?',
                    'a' => 'Dijkstra\'s Algorithm',
                    'b' => 'Floyd-Warshall Algorithm',
                    'c' => 'Bellman-Ford Algorithm',
                    'd' => 'Kruskal\'s Algorithm',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the space complexity of a binary search tree with n nodes?',
                    'a' => 'O(n)',
                    'b' => 'O(log n)',
                    'c' => 'O(n log n)',
                    'd' => 'O(1)',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In a graph with weighted edges, which algorithm is used to find the minimum spanning tree?',
                    'a' => 'Kruskal\'s Algorithm',
                    'b' => 'Prim\'s Algorithm',
                    'c' => 'Dijkstra\'s Algorithm',
                    'd' => 'Bellman-Ford Algorithm',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which data structure is used for implementing a recursive function in depth-first search?',
                    'a' => 'Queue',
                    'b' => 'Stack',
                    'c' => 'Array',
                    'd' => 'Hash Map',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the time complexity of inserting an element into a red-black tree?',
                    'a' => 'O(1)',
                    'b' => 'O(log n)',
                    'c' => 'O(n)',
                    'd' => 'O(n log n)',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which data structure can be used to implement a depth-first search algorithm?',
                    'a' => 'Queue',
                    'b' => 'Stack',
                    'c' => 'Priority Queue',
                    'd' => 'Heap',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],  [
                    'field_id' => 4,
                    
                    'question' => 'Which data structure is used to store data in a hierarchical manner?',
                    'a' => 'Binary Tree',
                    'b' => 'Hash Table',
                    'c' => 'Queue',
                    'd' => 'Graph',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which sorting algorithm is considered the most efficient for large datasets?',
                    'a' => 'Bubble Sort',
                    'b' => 'Merge Sort',
                    'c' => 'Insertion Sort',
                    'd' => 'Selection Sort',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the main advantage of using a hash table?',
                    'a' => 'Fast access and search time',
                    'b' => 'Simple implementation',
                    'c' => 'Increased data storage capacity',
                    'd' => 'Lower space complexity',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following is not a type of graph?',
                    'a' => 'Directed Graph',
                    'b' => 'Undirected Graph',
                    'c' => 'Weighted Graph',
                    'd' => 'Linear Graph',
                    'answer' => 'd',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which algorithm can be used to solve the problem of finding the maximum subarray sum?',
                    'a' => 'Dynamic Programming',
                    'b' => 'Greedy Algorithm',
                    'c' => 'Backtracking',
                    'd' => 'Divide and Conquer',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which data structure allows for constant-time access and modification of elements?',
                    'a' => 'Array',
                    'b' => 'Linked List',
                    'c' => 'Queue',
                    'd' => 'Stack',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In a directed graph, what does an edge from vertex A to vertex B represent?',
                    'a' => 'A one-way connection from A to B',
                    'b' => 'A two-way connection between A and B',
                    'c' => 'A connection from B to A',
                    'd' => 'A loop on vertex A',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which data structure is used to implement the concept of recursion?',
                    'a' => 'Stack',
                    'b' => 'Queue',
                    'c' => 'Array',
                    'd' => 'Hash Table',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which algorithm is used to find the shortest path in a weighted graph with possible negative weights?',
                    'a' => 'Dijkstra\'s Algorithm',
                    'b' => 'Bellman-Ford Algorithm',
                    'c' => 'Floyd-Warshall Algorithm',
                    'd' => 'Kruskal\'s Algorithm',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In which type of search does the algorithm reduce the problem size at each step?',
                    'a' => 'Binary Search',
                    'b' => 'Linear Search',
                    'c' => 'Jump Search',
                    'd' => 'Interpolation Search',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the primary use of a doubly linked list compared to a singly linked list?',
                    'a' => 'Bidirectional traversal',
                    'b' => 'Increased space efficiency',
                    'c' => 'Simpler implementation',
                    'd' => 'Faster insertion',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which data structure is ideal for implementing a LRU (Least Recently Used) cache?',
                    'a' => 'Hash Map with Doubly Linked List',
                    'b' => 'Binary Search Tree',
                    'c' => 'Priority Queue',
                    'd' => 'Stack',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the primary advantage of using a bloom filter?',
                    'a' => 'Space efficiency with probabilistic results',
                    'b' => 'Fast search time',
                    'c' => 'Guaranteed accuracy',
                    'd' => 'Simple implementation',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which data structure is used to implement a min-heap?',
                    'a' => 'Array',
                    'b' => 'Linked List',
                    'c' => 'Binary Search Tree',
                    'd' => 'Hash Table',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the key property of a skip list?',
                    'a' => 'Multilevel linked lists',
                    'b' => 'Self-balancing structure',
                    'c' => 'Sorted elements',
                    'd' => 'Unsorted elements',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which algorithm is used for searching an element in a rotated sorted array?',
                    'a' => 'Binary Search',
                    'b' => 'Linear Search',
                    'c' => 'Jump Search',
                    'd' => 'Exponential Search',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the primary disadvantage of using a linked list over an array?',
                    'a' => 'Higher memory usage due to pointers',
                    'b' => 'Slower access time',
                    'c' => 'Limited data storage',
                    'd' => 'Increased complexity in implementation',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which algorithm can be used to solve the problem of finding the longest increasing subsequence?',
                    'a' => 'Dynamic Programming',
                    'b' => 'Greedy Algorithm',
                    'c' => 'Divide and Conquer',
                    'd' => 'Backtracking',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which data structure is commonly used to implement a priority queue?',
                    'a' => 'Binary Heap',
                    'b' => 'Queue',
                    'c' => 'Stack',
                    'd' => 'Linked List',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In a binary search tree, what is the time complexity of searching for an element in the worst case?',
                    'a' => 'O(log n)',
                    'b' => 'O(n)',
                    'c' => 'O(n log n)',
                    'd' => 'O(1)',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which data structure is used to implement a graph traversal algorithm like BFS or DFS?',
                    'a' => 'Queue for BFS, Stack for DFS',
                    'b' => 'Stack for BFS, Queue for DFS',
                    'c' => 'Priority Queue for BFS, Hash Table for DFS',
                    'd' => 'Hash Table for BFS, Stack for DFS',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which algorithm is used for solving the knapsack problem?',
                    'a' => 'Greedy Algorithm',
                    'b' => 'Dynamic Programming',
                    'c' => 'Backtracking',
                    'd' => 'Divide and Conquer',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the purpose of a hash function?',
                    'a' => 'To map data to fixed-size values',
                    'b' => 'To sort data efficiently',
                    'c' => 'To encrypt data',
                    'd' => 'To compress data',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In which type of search algorithm is the search space divided in half with each iteration?',
                    'a' => 'Binary Search',
                    'b' => 'Linear Search',
                    'c' => 'Jump Search',
                    'd' => 'Exponential Search',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which sorting algorithm is based on the divide and conquer strategy?',
                    'a' => 'Bubble Sort',
                    'b' => 'Quick Sort',
                    'c' => 'Insertion Sort',
                    'd' => 'Selection Sort',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the time complexity of accessing an element in a hash table?',
                    'a' => 'O(1)',
                    'b' => 'O(log n)',
                    'c' => 'O(n)',
                    'd' => 'O(n log n)',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which algorithm is used to find the shortest path in a graph with positive weights?',
                    'a' => 'Dijkstra\'s Algorithm',
                    'b' => 'Floyd-Warshall Algorithm',
                    'c' => 'Bellman-Ford Algorithm',
                    'd' => 'Kruskal\'s Algorithm',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which data structure is used to implement a depth-first search algorithm?',
                    'a' => 'Stack',
                    'b' => 'Queue',
                    'c' => 'Priority Queue',
                    'd' => 'Linked List',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the space complexity of a binary heap used in priority queues?',
                    'a' => 'O(1)',
                    'b' => 'O(n)',
                    'c' => 'O(log n)',
                    'd' => 'O(n log n)',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which data structure is used to implement a priority queue in the most efficient way?',
                    'a' => 'Binary Heap',
                    'b' => 'Linked List',
                    'c' => 'Stack',
                    'd' => 'Queue',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which data structure is used to implement a LIFO (Last In, First Out) behavior?',
                    'a' => 'Stack',
                    'b' => 'Queue',
                    'c' => 'Linked List',
                    'd' => 'Priority Queue',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the time complexity of the merge sort algorithm?',
                    'a' => 'O(n log n)',
                    'b' => 'O(n^2)',
                    'c' => 'O(n)',
                    'd' => 'O(log n)',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which algorithm is used to find the maximum subarray sum?',
                    'a' => 'Kadane\'s Algorithm',
                    'b' => 'Divide and Conquer',
                    'c' => 'Greedy Algorithm',
                    'd' => 'Dynamic Programming',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which data structure is used to implement a breadth-first search algorithm?',
                    'a' => 'Queue',
                    'b' => 'Stack',
                    'c' => 'Priority Queue',
                    'd' => 'Linked List',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which algorithm is used for finding all pairs shortest paths in a weighted graph?',
                    'a' => 'Floyd-Warshall Algorithm',
                    'b' => 'Dijkstra\'s Algorithm',
                    'c' => 'Bellman-Ford Algorithm',
                    'd' => 'Kruskal\'s Algorithm',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the primary advantage of a binary search algorithm over a linear search algorithm?',
                    'a' => 'Faster search time with sorted data',
                    'b' => 'Works with unsorted data',
                    'c' => 'Requires less memory',
                    'd' => 'Easier to implement',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which data structure is used to implement a recursive function?',
                    'a' => 'Stack',
                    'b' => 'Queue',
                    'c' => 'Linked List',
                    'd' => 'Array',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which algorithm is used for sorting a nearly sorted array efficiently?',
                    'a' => 'Insertion Sort',
                    'b' => 'Quick Sort',
                    'c' => 'Merge Sort',
                    'd' => 'Heap Sort',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the purpose of a bloom filter?',
                    'a' => 'Space-efficient probabilistic data structure',
                    'b' => 'Guaranteed accuracy in membership testing',
                    'c' => 'Efficient sorting of data',
                    'd' => 'Simple hash table implementation',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which algorithm is used to solve the problem of finding the shortest path in a weighted graph?',
                    'a' => 'Dijkstra\'s Algorithm',
                    'b' => 'Kruskal\'s Algorithm',
                    'c' => 'Prim\'s Algorithm',
                    'd' => 'Bellman-Ford Algorithm',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the worst-case time complexity of quicksort?',
                    'a' => 'O(n^2)',
                    'b' => 'O(n log n)',
                    'c' => 'O(n)',
                    'd' => 'O(log n)',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which sorting algorithm is stable and has a time complexity of O(n^2)?',
                    'a' => 'Bubble Sort',
                    'b' => 'Quick Sort',
                    'c' => 'Merge Sort',
                    'd' => 'Heap Sort',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In which scenario is the worst-case time complexity of merge sort useful?',
                    'a' => 'When sorting large arrays with guaranteed O(n log n) performance',
                    'b' => 'When dealing with small arrays with O(n^2) performance',
                    'c' => 'When needing to sort data in constant time',
                    'd' => 'When working with dynamic data structures',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which algorithm can be used to solve the problem of finding the maximum value in a sliding window?',
                    'a' => 'Deque-based approach',
                    'b' => 'Binary Search',
                    'c' => 'Merge Sort',
                    'd' => 'Dynamic Programming',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which algorithm is used to solve the problem of finding the median in an unsorted array?',
                    'a' => 'Quick Select Algorithm',
                    'b' => 'Binary Search',
                    'c' => 'Merge Sort',
                    'd' => 'Heap Sort',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which data structure is used to efficiently support both insertions and deletions?',
                    'a' => 'Balanced Binary Search Tree',
                    'b' => 'Array',
                    'c' => 'Linked List',
                    'd' => 'Hash Table',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the main difference between a depth-first search and a breadth-first search?',
                    'a' => 'DFS uses a stack and explores deeply, BFS uses a queue and explores level by level',
                    'b' => 'DFS uses a queue and explores level by level, BFS uses a stack and explores deeply',
                    'c' => 'DFS is faster than BFS',
                    'd' => 'BFS is more memory-efficient than DFS',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which algorithm is used to solve the problem of finding the longest common subsequence?',
                    'a' => 'Dynamic Programming',
                    'b' => 'Greedy Algorithm',
                    'c' => 'Divide and Conquer',
                    'd' => 'Backtracking',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which data structure is used to implement a priority queue?',
                    'a' => 'Heap',
                    'b' => 'Array',
                    'c' => 'Linked List',
                    'd' => 'Stack',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which algorithm is used for efficiently searching in a sorted array?',
                    'a' => 'Binary Search',
                    'b' => 'Linear Search',
                    'c' => 'Jump Search',
                    'd' => 'Exponential Search',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ], [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following algorithms is used for supervised learning?',
                    'a' => 'K-Means Clustering',
                    'b' => 'Support Vector Machines',
                    'c' => 'Principal Component Analysis',
                    'd' => 'Apriori Algorithm',
                    'answer' => 'b',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the primary purpose of reinforcement learning?',
                    'a' => 'To classify data into categories',
                    'b' => 'To identify patterns in data',
                    'c' => 'To learn optimal actions through rewards and punishments',
                    'd' => 'To reduce the dimensionality of data',
                    'answer' => 'c',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In the context of neural networks, what does a "dropout" layer do?',
                    'a' => 'Prevents overfitting by randomly dropping neurons during training',
                    'b' => 'Increases the network depth',
                    'c' => 'Reduces the number of parameters',
                    'd' => 'Normalizes the input data',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which technique is used to prevent overfitting in machine learning models?',
                    'a' => 'Regularization',
                    'b' => 'Normalization',
                    'c' => 'Scaling',
                    'd' => 'Encoding',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the primary goal of unsupervised learning?',
                    'a' => 'To predict a target variable from input data',
                    'b' => 'To label data with predefined categories',
                    'c' => 'To discover hidden patterns or intrinsic structures in data',
                    'd' => 'To enhance the accuracy of supervised learning models',
                    'answer' => 'c',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the purpose of a confusion matrix in machine learning?',
                    'a' => 'To evaluate the performance of a classification algorithm',
                    'b' => 'To visualize data distributions',
                    'c' => 'To perform dimensionality reduction',
                    'd' => 'To measure the accuracy of regression models',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which of the following is a technique for dimensionality reduction?',
                    'a' => 'Principal Component Analysis (PCA)',
                    'b' => 'K-Nearest Neighbors (KNN)',
                    'c' => 'Support Vector Machines (SVM)',
                    'd' => 'Gradient Descent',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'In the context of neural networks, what does the activation function do?',
                    'a' => 'Adds non-linearity to the model',
                    'b' => 'Reduces the size of the network',
                    'c' => 'Improves data normalization',
                    'd' => 'Calculates the loss of the model',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'Which technique is used to improve the generalization of a machine learning model?',
                    'a' => 'Cross-Validation',
                    'b' => 'Feature Scaling',
                    'c' => 'Data Augmentation',
                    'd' => 'Data Shuffling',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'field_id' => 4,
                    
                    'question' => 'What is the purpose of using an ensemble method in machine learning?',
                    'a' => 'To combine multiple models to improve overall performance',
                    'b' => 'To reduce the complexity of a single model',
                    'c' => 'To speed up the training process',
                    'd' => 'To handle missing data more effectively',
                    'answer' => 'a',
                    'created_at' => now(),
                    'updated_at' => now()
                ],

                        [
        'field_id' => 4,
        
        'question' => 'What is the main purpose of the "loss function" in machine learning?',
        'a' => 'To measure the difference between predicted and actual values',
        'b' => 'To optimize the model’s parameters',
        'c' => 'To preprocess the input data',
        'd' => 'To validate the model’s performance',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is an example of a generative model?',
        'a' => 'Variational Autoencoder',
        'b' => 'Support Vector Machine',
        'c' => 'Decision Tree',
        'd' => 'Logistic Regression',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the main advantage of using a convolutional neural network (CNN) for image classification?',
        'a' => 'Ability to learn spatial hierarchies of features',
        'b' => 'Ability to handle sequential data',
        'c' => 'Ability to perform dimensionality reduction',
        'd' => 'Ability to manage large-scale databases',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which technique is used to fine-tune pre-trained models on specific tasks?',
        'a' => 'Transfer Learning',
        'b' => 'Data Augmentation',
        'c' => 'Feature Engineering',
        'd' => 'Regularization',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "backpropagation" do in the context of neural networks?',
        'a' => 'Calculates the gradient of the loss function with respect to weights',
        'b' => 'Preprocesses input data',
        'c' => 'Generates synthetic data for training',
        'd' => 'Optimizes the hyperparameters',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which algorithm is commonly used for clustering data?',
        'a' => 'K-Means',
        'b' => 'Linear Regression',
        'c' => 'Decision Trees',
        'd' => 'Gradient Descent',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "Natural Language Processing" (NLP) primarily concerned with?',
        'a' => 'Understanding and processing human language',
        'b' => 'Optimizing numerical algorithms',
        'c' => 'Predicting time series data',
        'd' => 'Classifying images',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "overfitting" in machine learning?',
        'a' => 'When a model performs well on training data but poorly on unseen data',
        'b' => 'When a model underperforms on both training and testing data',
        'c' => 'When a model generalizes well on unseen data',
        'd' => 'When a model is too simple to capture the underlying patterns',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which technique can be used to handle missing values in a dataset?',
        'a' => 'Imputation',
        'b' => 'Normalization',
        'c' => 'Scaling',
        'd' => 'Encoding',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "ensemble learning"?',
        'a' => 'Combining multiple models to improve performance',
        'b' => 'Reducing the complexity of a single model',
        'c' => 'Using a single model with multiple hyperparameters',
        'd' => 'Training models with different data subsets',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],[
        'field_id' => 4,
        
        'question' => 'What does the term "gradient descent" refer to in machine learning?',
        'a' => 'An optimization algorithm to minimize the loss function',
        'b' => 'A technique to increase the model’s complexity',
        'c' => 'A method to encode categorical data',
        'd' => 'A process to visualize data distributions',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is an example of a supervised learning algorithm?',
        'a' => 'Decision Trees',
        'b' => 'K-Means Clustering',
        'c' => 'Principal Component Analysis',
        'd' => 't-SNE',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is a "recurrent neural network" (RNN) mainly used for?',
        'a' => 'Processing sequential data',
        'b' => 'Classifying images',
        'c' => 'Dimensionality reduction',
        'd' => 'Feature selection',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'In machine learning, what does "hyperparameter tuning" involve?',
        'a' => 'Adjusting the parameters of the learning algorithm to improve performance',
        'b' => 'Selecting the features for the model',
        'c' => 'Splitting the data into training and testing sets',
        'd' => 'Normalizing the input data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following methods is used to evaluate the performance of a regression model?',
        'a' => 'Mean Squared Error (MSE)',
        'b' => 'Confusion Matrix',
        'c' => 'F1 Score',
        'd' => 'Area Under the Curve (AUC)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "feature scaling" used for in machine learning?',
        'a' => 'To normalize the range of feature values',
        'b' => 'To encode categorical variables',
        'c' => 'To perform dimensionality reduction',
        'd' => 'To increase model complexity',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the primary role of the "activation function" in a neural network?',
        'a' => 'To introduce non-linearity into the network',
        'b' => 'To reduce the network’s depth',
        'c' => 'To increase the learning rate',
        'd' => 'To perform feature selection',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the main advantage of using "Random Forest" over a single decision tree?',
        'a' => 'It reduces overfitting by averaging multiple trees',
        'b' => 'It requires less computational power',
        'c' => 'It automatically performs feature selection',
        'd' => 'It improves model interpretability',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'In the context of deep learning, what does "batch normalization" do?',
        'a' => 'Normalizes the input of each layer to improve training stability',
        'b' => 'Reduces the number of neurons in each layer',
        'c' => 'Increases the depth of the network',
        'd' => 'Augments the training data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is a common application of "Generative Adversarial Networks" (GANs)?',
        'a' => 'Generating synthetic images',
        'b' => 'Classifying text data',
        'c' => 'Clustering customer data',
        'd' => 'Predicting stock prices',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the primary purpose of the "activation function" in a neural network?',
        'a' => 'To introduce non-linearity into the network',
        'b' => 'To reduce the number of parameters',
        'c' => 'To optimize the loss function',
        'd' => 'To normalize the output data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'In which type of machine learning is the model trained using labeled data?',
        'a' => 'Supervised Learning',
        'b' => 'Unsupervised Learning',
        'c' => 'Reinforcement Learning',
        'd' => 'Semi-Supervised Learning',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which algorithm is typically used for dimensionality reduction?',
        'a' => 'Principal Component Analysis (PCA)',
        'b' => 'Naive Bayes',
        'c' => 'K-Nearest Neighbors (KNN)',
        'd' => 'Support Vector Machines (SVM)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the purpose of "cross-validation" in machine learning?',
        'a' => 'To assess the performance of a model on unseen data',
        'b' => 'To split the data into training and testing sets',
        'c' => 'To preprocess the data',
        'd' => 'To increase the model’s complexity',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "overfitting" in machine learning?',
        'a' => 'When a model performs well on training data but poorly on unseen data',
        'b' => 'When a model underperforms on both training and testing data',
        'c' => 'When a model generalizes well on unseen data',
        'd' => 'When a model is too simple to capture the underlying patterns',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is a commonly used technique for evaluating the performance of a classification model?',
        'a' => 'Confusion Matrix',
        'b' => 'Mean Squared Error (MSE)',
        'c' => 'R-squared',
        'd' => 'Precision-Recall Curve',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "regularization" do in the context of machine learning?',
        'a' => 'Prevents overfitting by adding a penalty to the loss function',
        'b' => 'Reduces the size of the dataset',
        'c' => 'Normalizes the feature values',
        'd' => 'Speeds up the training process',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which type of neural network is particularly effective for processing grid-like data such as images?',
        'a' => 'Convolutional Neural Network (CNN)',
        'b' => 'Recurrent Neural Network (RNN)',
        'c' => 'Generative Adversarial Network (GAN)',
        'd' => 'Feedforward Neural Network',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'In the context of machine learning, what is "feature engineering"?',
        'a' => 'Creating new features from existing data to improve model performance',
        'b' => 'Choosing the best algorithm for a given problem',
        'c' => 'Splitting data into training and testing sets',
        'd' => 'Evaluating the model’s accuracy',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is an example of a reinforcement learning algorithm?',
        'a' => 'Q-Learning',
        'b' => 'Linear Regression',
        'c' => 'Support Vector Machines (SVM)',
        'd' => 'K-Means Clustering',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the main benefit of using "Transfer Learning"?',
        'a' => 'Leveraging pre-trained models to improve performance on a new task',
        'b' => 'Training models faster by using smaller datasets',
        'c' => 'Reducing the complexity of a model',
        'd' => 'Increasing the number of features',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is NOT a common activation function used in neural networks?',
        'a' => 'Sigmoid',
        'b' => 'ReLU',
        'c' => 'Tanh',
        'd' => 'K-Means',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 4,
        
        'question' => 'What is "unsupervised learning" used for in machine learning?',
        'a' => 'Finding patterns or structures in data without labeled responses',
        'b' => 'Training models with labeled data',
        'c' => 'Optimizing hyperparameters of a model',
        'd' => 'Generating synthetic data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is a common technique for feature selection?',
        'a' => 'Recursive Feature Elimination (RFE)',
        'b' => 'Mean Squared Error (MSE)',
        'c' => 'Cross-Validation',
        'd' => 'Batch Normalization',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "batch size" refer to in the context of training neural networks?',
        'a' => 'The number of training samples processed before the model is updated',
        'b' => 'The number of layers in the neural network',
        'c' => 'The number of epochs used for training',
        'd' => 'The size of the validation dataset',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the purpose of "dropout" in neural network training?',
        'a' => 'To prevent overfitting by randomly dropping units during training',
        'b' => 'To reduce the number of features',
        'c' => 'To speed up the training process',
        'd' => 'To increase the model’s complexity',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is a common loss function used for classification problems?',
        'a' => 'Cross-Entropy Loss',
        'b' => 'Mean Squared Error (MSE)',
        'c' => 'R-squared',
        'd' => 'Log-Likelihood',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the purpose of "early stopping" during training?',
        'a' => 'To prevent overfitting by stopping the training process when performance plateaus',
        'b' => 'To reduce the learning rate progressively',
        'c' => 'To increase the batch size',
        'd' => 'To perform data augmentation',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which technique is used to prevent "vanishing gradients" in deep networks?',
        'a' => 'Using activation functions like ReLU',
        'b' => 'Applying L1 or L2 regularization',
        'c' => 'Using dropout layers',
        'd' => 'Increasing the batch size',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the role of "embedding layers" in neural networks?',
        'a' => 'To convert categorical data into dense vectors',
        'b' => 'To perform feature scaling',
        'c' => 'To handle missing data',
        'd' => 'To increase model interpretability',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is an advantage of using "ensemble methods"?',
        'a' => 'They combine multiple models to improve overall performance and robustness',
        'b' => 'They reduce the size of the dataset',
        'c' => 'They simplify the model architecture',
        'd' => 'They speed up the training process significantly',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'In which type of learning is the model rewarded for correct actions and penalized for incorrect ones?',
        'a' => 'Reinforcement Learning',
        'b' => 'Unsupervised Learning',
        'c' => 'Supervised Learning',
        'd' => 'Semi-Supervised Learning',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "bagging" stand for in ensemble learning?',
        'a' => 'Bootstrap Aggregating',
        'b' => 'Balanced Aggregation',
        'c' => 'Bayesian Aggregation',
        'd' => 'Binning Aggregation',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "gradient descent" optimize in machine learning?',
        'a' => 'The parameters of a model to minimize the loss function',
        'b' => 'The number of features in the dataset',
        'c' => 'The training data',
        'd' => 'The learning rate',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which technique is used to handle imbalanced datasets?',
        'a' => 'Resampling methods like oversampling and undersampling',
        'b' => 'Feature scaling',
        'c' => 'Dimensionality reduction',
        'd' => 'Hyperparameter tuning',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which type of neural network is used for sequential data, like text or time series?',
        'a' => 'Recurrent Neural Network (RNN)',
        'b' => 'Convolutional Neural Network (CNN)',
        'c' => 'Generative Adversarial Network (GAN)',
        'd' => 'Feedforward Neural Network',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the purpose of "data augmentation" in machine learning?',
        'a' => 'To artificially increase the size of the training dataset',
        'b' => 'To reduce the size of the dataset',
        'c' => 'To clean the data',
        'd' => 'To decrease the model’s complexity',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which method is used to address the problem of overfitting in a model?',
        'a' => 'Regularization techniques like L1 and L2',
        'b' => 'Increasing the number of features',
        'c' => 'Reducing the size of the training dataset',
        'd' => 'Increasing the number of epochs',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following techniques can be used for feature extraction?',
        'a' => 'Principal Component Analysis (PCA)',
        'b' => 'K-Means Clustering',
        'c' => 'Naive Bayes',
        'd' => 'Decision Trees',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does the "confusion matrix" show in classification problems?',
        'a' => 'The number of true positives, true negatives, false positives, and false negatives',
        'b' => 'The distribution of features in the dataset',
        'c' => 'The loss function values during training',
        'd' => 'The correlation between features',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is an example of a generative model?',
        'a' => 'Generative Adversarial Network (GAN)',
        'b' => 'Support Vector Machine (SVM)',
        'c' => 'Logistic Regression',
        'd' => 'Decision Tree',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the purpose of "model evaluation" in machine learning?',
        'a' => 'To assess how well a model performs on unseen data',
        'b' => 'To train the model on the training data',
        'c' => 'To clean and preprocess the data',
        'd' => 'To select the best model architecture',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is a common method to reduce the learning rate during training?',
        'a' => 'Learning Rate Scheduler',
        'b' => 'Gradient Clipping',
        'c' => 'Batch Normalization',
        'd' => 'Dropout',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "Hyperparameter Tuning" used for in machine learning?',
        'a' => 'To optimize the performance of a model by adjusting hyperparameters',
        'b' => 'To preprocess the data',
        'c' => 'To split the data into training and testing sets',
        'd' => 'To train the model on the data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],  [
        'field_id' => 4,
        
        'question' => 'Which of the following is a common activation function used in neural networks?',
        'a' => 'ReLU (Rectified Linear Unit)',
        'b' => 'K-Means',
        'c' => 'Principal Component Analysis (PCA)',
        'd' => 'Linear Regression',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "overfitting" refer to in the context of machine learning?',
        'a' => 'When a model performs well on training data but poorly on unseen data',
        'b' => 'When a model is trained on too little data',
        'c' => 'When the model is too simple to capture the underlying pattern',
        'd' => 'When the model is optimized with too many hyperparameters',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which technique is used for dimensionality reduction in machine learning?',
        'a' => 'Principal Component Analysis (PCA)',
        'b' => 'K-Means Clustering',
        'c' => 'Random Forest',
        'd' => 'Gradient Boosting',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "batch normalization" help with in deep learning?',
        'a' => 'It helps in stabilizing and accelerating the training process',
        'b' => 'It generates new training data',
        'c' => 'It reduces the number of layers in a neural network',
        'd' => 'It increases the size of the model',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the purpose of "cross-validation" in machine learning?',
        'a' => 'To evaluate the model’s performance on different subsets of data',
        'b' => 'To preprocess the data',
        'c' => 'To tune the hyperparameters',
        'd' => 'To handle missing values',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is NOT a type of neural network?',
        'a' => 'Time-Series Neural Network',
        'b' => 'Convolutional Neural Network (CNN)',
        'c' => 'Recurrent Neural Network (RNN)',
        'd' => 'Generative Adversarial Network (GAN)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "support vector machine" (SVM) do in machine learning?',
        'a' => 'It finds the optimal hyperplane that separates data into different classes',
        'b' => 'It generates synthetic data',
        'c' => 'It clusters data into groups',
        'd' => 'It performs feature selection',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following algorithms is used for clustering?',
        'a' => 'K-Means',
        'b' => 'Logistic Regression',
        'c' => 'Naive Bayes',
        'd' => 'Support Vector Machine',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "ensemble learning" aim to achieve?',
        'a' => 'It aims to combine the predictions of multiple models to improve overall performance',
        'b' => 'It simplifies the model architecture',
        'c' => 'It reduces the number of features',
        'd' => 'It speeds up the training process',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which method is used to evaluate the performance of a regression model?',
        'a' => 'Mean Absolute Error (MAE)',
        'b' => 'Confusion Matrix',
        'c' => 'F1 Score',
        'd' => 'Cross-Entropy Loss',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "feature engineering" in the context of machine learning?',
        'a' => 'It involves creating new features or modifying existing ones to improve model performance',
        'b' => 'It involves training the model on data',
        'c' => 'It involves tuning the hyperparameters of a model',
        'd' => 'It involves splitting the data into training and testing sets',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is a common technique for optimizing hyperparameters?',
        'a' => 'Grid Search',
        'b' => 'Normalization',
        'c' => 'Data Augmentation',
        'd' => 'Feature Scaling',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does the term "epoch" refer to in the context of training neural networks?',
        'a' => 'One complete pass through the entire training dataset',
        'b' => 'A single batch of data used in training',
        'c' => 'The process of adjusting model weights',
        'd' => 'The period of model evaluation',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following models is used for sequence prediction?',
        'a' => 'Long Short-Term Memory (LSTM)',
        'b' => 'Support Vector Machine (SVM)',
        'c' => 'Decision Tree',
        'd' => 'Naive Bayes',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "transfer learning" in the context of machine learning?',
        'a' => 'Using a pre-trained model on a new but related task',
        'b' => 'Transferring data between different storage systems',
        'c' => 'Applying different models to the same data',
        'd' => 'Learning from multiple datasets simultaneously',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which metric is commonly used to evaluate the performance of a classification model?',
        'a' => 'Accuracy',
        'b' => 'Mean Squared Error (MSE)',
        'c' => 'R-squared',
        'd' => 'Mean Absolute Error (MAE)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "activation function" used for in neural networks?',
        'a' => 'To introduce non-linearity into the model',
        'b' => 'To scale the input data',
        'c' => 'To initialize the model parameters',
        'd' => 'To reduce the dimensionality of the data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "precision" measure in classification problems?',
        'a' => 'The proportion of true positive predictions out of all positive predictions',
        'b' => 'The total number of correct predictions',
        'c' => 'The ratio of true positives to false negatives',
        'd' => 'The proportion of correct predictions out of all predictions',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is an example of a supervised learning algorithm?',
        'a' => 'Linear Regression',
        'b' => 'K-Means Clustering',
        'c' => 'Principal Component Analysis (PCA)',
        'd' => 'Generative Adversarial Network (GAN)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "recall" measure in classification problems?',
        'a' => 'The proportion of true positive predictions out of all actual positives',
        'b' => 'The total number of correct predictions',
        'c' => 'The ratio of true positives to false positives',
        'd' => 'The proportion of positive predictions out of all predictions',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which method is used to improve the generalization of a model?',
        'a' => 'Regularization',
        'b' => 'Data Encoding',
        'c' => 'Feature Selection',
        'd' => 'Normalization',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the main goal of "exploratory data analysis" (EDA)?',
        'a' => 'To analyze and summarize the main characteristics of a dataset',
        'b' => 'To train the machine learning model',
        'c' => 'To optimize the model hyperparameters',
        'd' => 'To perform feature engineering',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],[
        'field_id' => 4,
        
        'question' => 'Which algorithm is commonly used for feature selection?',
        'a' => 'Recursive Feature Elimination (RFE)',
        'b' => 'K-Nearest Neighbors (KNN)',
        'c' => 'Support Vector Machine (SVM)',
        'd' => 'Naive Bayes',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "gradient descent" aim to minimize?',
        'a' => 'The cost or loss function',
        'b' => 'The number of features',
        'c' => 'The size of the model',
        'd' => 'The number of epochs',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the purpose of a "confusion matrix" in classification problems?',
        'a' => 'To visualize the performance of a classification model',
        'b' => 'To normalize the data',
        'c' => 'To split the data into training and testing sets',
        'd' => 'To optimize the model parameters',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is a technique used to prevent overfitting?',
        'a' => 'Dropout',
        'b' => 'Feature Scaling',
        'c' => 'Data Augmentation',
        'd' => 'Principal Component Analysis (PCA)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "reinforcement learning" involve?',
        'a' => 'Learning to make decisions by receiving rewards or penalties',
        'b' => 'Learning from labeled data to classify new data',
        'c' => 'Learning to predict future values from past data',
        'd' => 'Learning to segment data into distinct groups',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which term refers to the process of adjusting a model to fit a new dataset?',
        'a' => 'Fine-tuning',
        'b' => 'Feature Engineering',
        'c' => 'Model Selection',
        'd' => 'Data Cleaning',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "hyperparameter tuning" involve?',
        'a' => 'Adjusting the parameters that control the learning process of a model',
        'b' => 'Splitting the dataset into training and testing sets',
        'c' => 'Choosing the features to use in the model',
        'd' => 'Normalizing the data for better model performance',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which model is commonly used for predicting continuous values?',
        'a' => 'Linear Regression',
        'b' => 'K-Means Clustering',
        'c' => 'Decision Tree',
        'd' => 'Logistic Regression',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "model evaluation" used for?',
        'a' => 'To assess how well a model performs on unseen data',
        'b' => 'To preprocess the data for training',
        'c' => 'To select the best features for the model',
        'd' => 'To adjust the model’s hyperparameters',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which type of neural network is particularly suited for image recognition?',
        'a' => 'Convolutional Neural Network (CNN)',
        'b' => 'Recurrent Neural Network (RNN)',
        'c' => 'Generative Adversarial Network (GAN)',
        'd' => 'Support Vector Machine (SVM)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ], [
        'field_id' => 4,
        
        'question' => 'Which of the following is a technique used to handle missing data?',
        'a' => 'Imputation',
        'b' => 'Normalization',
        'c' => 'Feature Engineering',
        'd' => 'Dimensionality Reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "bagging" used for in machine learning?',
        'a' => 'To improve the accuracy of a model by combining multiple models',
        'b' => 'To reduce the number of features in a dataset',
        'c' => 'To normalize the data before training',
        'd' => 'To handle missing values in a dataset',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "boosting" in the context of machine learning?',
        'a' => 'A technique that combines weak learners to form a strong learner',
        'b' => 'A method to scale the features of a dataset',
        'c' => 'A strategy to split data into training and testing sets',
        'd' => 'A process to remove outliers from the dataset',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which technique is used to evaluate the performance of a regression model?',
        'a' => 'Mean Absolute Error (MAE)',
        'b' => 'Confusion Matrix',
        'c' => 'F1 Score',
        'd' => 'Area Under Curve (AUC)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "model regularization" help to achieve?',
        'a' => 'Preventing overfitting by adding a penalty term to the loss function',
        'b' => 'Improving the speed of model training',
        'c' => 'Increasing the complexity of the model',
        'd' => 'Enhancing the interpretability of the model',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is a key component of a Recurrent Neural Network (RNN)?',
        'a' => 'Memory cells',
        'b' => 'Convolutional layers',
        'c' => 'Pooling layers',
        'd' => 'Activation functions',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the purpose of "cross-validation" in machine learning?',
        'a' => 'To assess the generalizability of a model on unseen data',
        'b' => 'To optimize hyperparameters of a model',
        'c' => 'To perform feature scaling',
        'd' => 'To clean and preprocess the data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which algorithm is known for handling large-scale datasets and high-dimensional spaces?',
        'a' => 'Support Vector Machine (SVM)',
        'b' => 'Decision Tree',
        'c' => 'K-Nearest Neighbors (KNN)',
        'd' => 'Naive Bayes',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "dimensionality reduction" used for?',
        'a' => 'Reducing the number of features in a dataset while preserving important information',
        'b' => 'Increasing the number of features in a dataset',
        'c' => 'Normalizing the data for better performance',
        'd' => 'Splitting the data into training and testing sets',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following techniques is used for clustering data?',
        'a' => 'K-Means Clustering',
        'b' => 'Linear Regression',
        'c' => 'Decision Tree',
        'd' => 'Principal Component Analysis (PCA)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "feature scaling" help with?',
        'a' => 'Bringing all features to a similar scale to improve model performance',
        'b' => 'Selecting the most relevant features for the model',
        'c' => 'Reducing the number of features in the dataset',
        'd' => 'Encoding categorical variables into numerical values',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is a common activation function used in neural networks?',
        'a' => 'ReLU',
        'b' => 'K-Means',
        'c' => 'Gradient Descent',
        'd' => 'Cross-Validation',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does the "loss function" measure in a machine learning model?',
        'a' => 'The difference between predicted and actual values',
        'b' => 'The speed of the training process',
        'c' => 'The complexity of the model',
        'd' => 'The amount of training data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which technique is often used to balance an imbalanced dataset?',
        'a' => 'Resampling',
        'b' => 'Feature Scaling',
        'c' => 'Dimensionality Reduction',
        'd' => 'Hyperparameter Tuning',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which algorithm is particularly used for unsupervised learning?',
        'a' => 'K-Means Clustering',
        'b' => 'Logistic Regression',
        'c' => 'Support Vector Machine (SVM)',
        'd' => 'Linear Regression',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "transfer learning" in the context of neural networks?',
        'a' => 'Using a pre-trained model on a new but related problem',
        'b' => 'Training a model from scratch',
        'c' => 'Combining multiple models to improve accuracy',
        'd' => 'Adjusting the learning rate during training',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which model is known for its use in natural language processing?',
        'a' => 'Transformer',
        'b' => 'Decision Tree',
        'c' => 'K-Nearest Neighbors (KNN)',
        'd' => 'Support Vector Machine (SVM)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does the "precision" metric measure in classification?',
        'a' => 'The ratio of true positive predictions to the total predicted positives',
        'b' => 'The ratio of true positive predictions to the total actual positives',
        'c' => 'The total number of correct predictions',
        'd' => 'The ratio of false negatives to the total actual positives',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which method is commonly used to evaluate the performance of a classification model?',
        'a' => 'Confusion Matrix',
        'b' => 'ROC Curve',
        'c' => 'Precision-Recall Curve',
        'd' => 'All of the above',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "feature extraction" in the context of machine learning?',
        'a' => 'The process of transforming raw data into a format suitable for model input',
        'b' => 'The process of adding more features to the dataset',
        'c' => 'The process of removing irrelevant data',
        'd' => 'The process of splitting data into training and testing sets',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the role of "dropout" in a neural network?',
        'a' => 'To prevent overfitting by randomly setting a fraction of input units to zero',
        'b' => 'To increase the complexity of the model',
        'c' => 'To optimize the learning rate',
        'd' => 'To normalize the input data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is a commonly used method for dimensionality reduction?',
        'a' => 'Principal Component Analysis (PCA)',
        'b' => 'K-Means Clustering',
        'c' => 'Decision Tree',
        'd' => 'Gradient Descent',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "hyperparameter tuning" used for in machine learning?',
        'a' => 'Finding the optimal set of hyperparameters for a model',
        'b' => 'Increasing the amount of training data',
        'c' => 'Normalizing the input data',
        'd' => 'Splitting the dataset into training and testing sets',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which technique is used to handle overfitting in a model?',
        'a' => 'Regularization',
        'b' => 'Normalization',
        'c' => 'Resampling',
        'd' => 'Dimensionality Reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the "bias-variance tradeoff" in machine learning?',
        'a' => 'The balance between a model’s ability to generalize and its ability to fit the training data',
        'b' => 'The balance between the complexity of the model and the amount of training data',
        'c' => 'The balance between training and testing accuracy',
        'd' => 'The balance between training speed and model accuracy',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is used for evaluating the performance of a regression model?',
        'a' => 'Root Mean Squared Error (RMSE)',
        'b' => 'Confusion Matrix',
        'c' => 'F1 Score',
        'd' => 'ROC Curve',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "ensemble learning" involve?',
        'a' => 'Combining predictions from multiple models to improve performance',
        'b' => 'Reducing the number of features in a dataset',
        'c' => 'Normalizing data for training',
        'd' => 'Splitting data into training and testing sets',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which method is used for feature selection?',
        'a' => 'Recursive Feature Elimination (RFE)',
        'b' => 'Cross-Validation',
        'c' => 'Dimensionality Reduction',
        'd' => 'Gradient Descent',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "autoencoder" refer to in neural networks?',
        'a' => 'A type of neural network used for unsupervised learning to compress and reconstruct data',
        'b' => 'A method for scaling input features',
        'c' => 'An optimization algorithm for training models',
        'd' => 'A technique for handling missing values',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the main goal of "reinforcement learning"?',
        'a' => 'To learn how to make decisions by receiving rewards or penalties',
        'b' => 'To classify data into predefined categories',
        'c' => 'To predict numerical values based on input features',
        'd' => 'To reduce the dimensionality of a dataset',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is a popular framework for developing deep learning models?',
        'a' => 'TensorFlow',
        'b' => 'K-Means',
        'c' => 'Naive Bayes',
        'd' => 'Principal Component Analysis',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "gradient descent" optimize in machine learning?',
        'a' => 'The model’s parameters to minimize the loss function',
        'b' => 'The number of features in the dataset',
        'c' => 'The amount of training data',
        'd' => 'The structure of the model',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is an example of a generative model?',
        'a' => 'Generative Adversarial Network (GAN)',
        'b' => 'Support Vector Machine (SVM)',
        'c' => 'Decision Tree',
        'd' => 'K-Nearest Neighbors (KNN)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "backpropagation" refer to in neural networks?',
        'a' => 'The process of updating weights based on the error gradient',
        'b' => 'The process of initializing the neural network weights',
        'c' => 'The process of selecting activation functions',
        'd' => 'The process of splitting data into training and validation sets',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following metrics is used to measure the quality of clustering?',
        'a' => 'Silhouette Score',
        'b' => 'F1 Score',
        'c' => 'Mean Squared Error (MSE)',
        'd' => 'Area Under Curve (AUC)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the purpose of "dropout" in a neural network?',
        'a' => 'To prevent overfitting by randomly deactivating neurons during training',
        'b' => 'To increase the learning rate',
        'c' => 'To add more layers to the network',
        'd' => 'To speed up the training process',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which algorithm is used for dimensionality reduction while preserving the local structure of the data?',
        'a' => 't-Distributed Stochastic Neighbor Embedding (t-SNE)',
        'b' => 'Principal Component Analysis (PCA)',
        'c' => 'Linear Discriminant Analysis (LDA)',
        'd' => 'K-Means Clustering',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "reinforcement learning" primarily used for?',
        'a' => 'Training agents to make sequences of decisions based on rewards and penalties',
        'b' => 'Classifying data into different categories',
        'c' => 'Predicting future values based on past data',
        'd' => 'Reducing the number of features in a dataset',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which technique is used to evaluate the performance of an unsupervised learning algorithm?',
        'a' => 'Cluster Validity Indices',
        'b' => 'Confusion Matrix',
        'c' => 'ROC Curve',
        'd' => 'Precision-Recall Curve',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does the term "bias" refer to in a machine learning model?',
        'a' => 'The error introduced by approximating a real-world problem with a simplified model',
        'b' => 'The error introduced by using too many features',
        'c' => 'The error introduced by splitting the data incorrectly',
        'd' => 'The error introduced by incorrect data normalization',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "cross-validation" used for in machine learning?',
        'a' => 'To assess the generalizability of a model by splitting the data into training and testing sets multiple times',
        'b' => 'To adjust the model’s hyperparameters',
        'c' => 'To normalize the input features',
        'd' => 'To handle missing values in the dataset',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following algorithms is used for both classification and regression tasks?',
        'a' => 'Support Vector Machine (SVM)',
        'b' => 'K-Means Clustering',
        'c' => 'Apriori Algorithm',
        'd' => 'Principal Component Analysis (PCA)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "hyperparameter tuning" in the context of machine learning?',
        'a' => 'The process of finding the optimal set of hyperparameters for a model',
        'b' => 'The process of adjusting the model’s weights during training',
        'c' => 'The process of normalizing input data',
        'd' => 'The process of evaluating model performance',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is an example of a supervised learning algorithm?',
        'a' => 'Linear Regression',
        'b' => 'K-Means Clustering',
        'c' => 'Principal Component Analysis (PCA)',
        'd' => 't-Distributed Stochastic Neighbor Embedding (t-SNE)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the purpose of "activation functions" in neural networks?',
        'a' => 'To introduce non-linearity into the model',
        'b' => 'To normalize input features',
        'c' => 'To split the dataset into training and testing sets',
        'd' => 'To handle missing values in the dataset',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which algorithm is commonly used for image classification tasks?',
        'a' => 'Convolutional Neural Network (CNN)',
        'b' => 'K-Means Clustering',
        'c' => 'Apriori Algorithm',
        'd' => 'Principal Component Analysis (PCA)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "overfitting" in the context of machine learning?',
        'a' => 'When a model performs well on training data but poorly on unseen data',
        'b' => 'When a model performs equally well on both training and unseen data',
        'c' => 'When a model performs poorly on both training and unseen data',
        'd' => 'When a model is too simple to capture the underlying patterns in the data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which method is used to evaluate the performance of a classification model?',
        'a' => 'Confusion Matrix',
        'b' => 'Root Mean Squared Error (RMSE)',
        'c' => 'Mean Absolute Error (MAE)',
        'd' => 'Silhouette Score',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "feature engineering"?',
        'a' => 'The process of selecting and transforming features to improve model performance',
        'b' => 'The process of adjusting the model’s hyperparameters',
        'c' => 'The process of normalizing input data',
        'd' => 'The process of splitting data into training and testing sets',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is an example of a model evaluation metric for regression?',
        'a' => 'Mean Absolute Error (MAE)',
        'b' => 'F1 Score',
        'c' => 'Silhouette Score',
        'd' => 'Area Under Curve (AUC)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "early stopping" prevent in neural network training?',
        'a' => 'Overfitting by halting training when performance on a validation set starts to degrade',
        'b' => 'Underfitting by increasing the number of epochs',
        'c' => 'Vanishing gradients by using more complex activation functions',
        'd' => 'Model convergence by adjusting the learning rate',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following techniques is used to balance a dataset with imbalanced classes?',
        'a' => 'Resampling (oversampling or undersampling)',
        'b' => 'Normalization',
        'c' => 'Feature Extraction',
        'd' => 'Cross-Validation',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "ensemble learning" combine?',
        'a' => 'Multiple models to improve predictive performance',
        'b' => 'Training and testing datasets',
        'c' => 'Feature extraction and feature selection',
        'd' => 'Data normalization and data augmentation',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which method is used for dimensionality reduction in a linear fashion?',
        'a' => 'Principal Component Analysis (PCA)',
        'b' => 't-Distributed Stochastic Neighbor Embedding (t-SNE)',
        'c' => 'Linear Discriminant Analysis (LDA)',
        'd' => 'Autoencoder',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "model interpretability"?',
        'a' => 'The degree to which a model’s decisions can be understood by humans',
        'b' => 'The process of optimizing the model’s hyperparameters',
        'c' => 'The ability of a model to fit the training data well',
        'd' => 'The technique used for splitting the dataset into training and validation sets',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ], [
        'field_id' => 4,
        
        'question' => 'Which type of neural network is most commonly used for sequence data?',
        'a' => 'Recurrent Neural Network (RNN)',
        'b' => 'Convolutional Neural Network (CNN)',
        'c' => 'Generative Adversarial Network (GAN)',
        'd' => 'Deep Belief Network (DBN)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "transfer learning" in the context of machine learning?',
        'a' => 'Using a pre-trained model on a new but related problem',
        'b' => 'Training a model from scratch on a new dataset',
        'c' => 'Combining multiple models to make predictions',
        'd' => 'Evaluating a model’s performance on a validation set',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which algorithm is commonly used for finding optimal parameters in reinforcement learning?',
        'a' => 'Q-Learning',
        'b' => 'K-Means Clustering',
        'c' => 'Principal Component Analysis (PCA)',
        'd' => 'Support Vector Machine (SVM)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "gradient descent" used for in training machine learning models?',
        'a' => 'To minimize the loss function by updating model parameters',
        'b' => 'To initialize the model parameters',
        'c' => 'To normalize the input data',
        'd' => 'To evaluate model performance',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is a technique for handling missing data?',
        'a' => 'Imputation',
        'b' => 'Normalization',
        'c' => 'Cross-Validation',
        'd' => 'Feature Extraction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "hyperparameter tuning" primarily used for?',
        'a' => 'Finding the best settings for a machine learning model',
        'b' => 'Splitting the dataset into training and validation sets',
        'c' => 'Evaluating the performance of the model',
        'd' => 'Normalizing the data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which type of model is used for dimensionality reduction by projecting data into a lower-dimensional space?',
        'a' => 'Principal Component Analysis (PCA)',
        'b' => 'K-Nearest Neighbors (KNN)',
        'c' => 'Support Vector Machine (SVM)',
        'd' => 'Decision Tree',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "batch normalization" used for in deep learning?',
        'a' => 'To normalize the inputs of each layer to improve training speed and stability',
        'b' => 'To increase the size of the training dataset',
        'c' => 'To prevent overfitting by using dropout',
        'd' => 'To adjust the learning rate',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which algorithm is best suited for a classification problem where classes are not linearly separable?',
        'a' => 'Support Vector Machine with a non-linear kernel',
        'b' => 'Linear Regression',
        'c' => 'K-Means Clustering',
        'd' => 'Principal Component Analysis (PCA)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "autoencoder" used for in machine learning?',
        'a' => 'Learning efficient representations of data by compressing and reconstructing it',
        'b' => 'Classifying data into different categories',
        'c' => 'Predicting future values based on past data',
        'd' => 'Finding the optimal hyperparameters for a model',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ], [
        'field_id' => 4,
        
        'question' => 'Which technique is used for reducing overfitting in a neural network?',
        'a' => 'Dropout',
        'b' => 'Feature Scaling',
        'c' => 'Data Augmentation',
        'd' => 'Cross-Validation',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "reinforcement learning" involve?',
        'a' => 'Learning optimal actions through trial and error to maximize cumulative reward',
        'b' => 'Supervised learning with labeled data',
        'c' => 'Unsupervised learning to find hidden patterns',
        'd' => 'Training with a pre-defined dataset',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "regularization" in machine learning?',
        'a' => 'Techniques used to prevent overfitting by adding a penalty to the loss function',
        'b' => 'The process of selecting important features for a model',
        'c' => 'Methods used to increase the size of the training dataset',
        'd' => 'Approaches for reducing computational complexity',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which algorithm is commonly used for clustering data into distinct groups?',
        'a' => 'K-Means Clustering',
        'b' => 'Decision Trees',
        'c' => 'Random Forest',
        'd' => 'Naive Bayes',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "exploration-exploitation tradeoff" in reinforcement learning?',
        'a' => 'Balancing between exploring new actions and exploiting known actions for reward',
        'b' => 'Choosing between different feature extraction methods',
        'c' => 'Deciding on the training vs. testing data split',
        'd' => 'Selecting the right model architecture',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "transfer learning" typically used for?',
        'a' => 'Applying knowledge from one domain to a related domain',
        'b' => 'Increasing the size of the training dataset',
        'c' => 'Optimizing hyperparameters for a model',
        'd' => 'Normalizing input features',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which method is used to evaluate the quality of clustering results?',
        'a' => 'Silhouette Score',
        'b' => 'Confusion Matrix',
        'c' => 'ROC Curve',
        'd' => 'Mean Squared Error (MSE)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "model ensembling"?',
        'a' => 'Combining multiple models to improve overall prediction accuracy',
        'b' => 'Increasing the size of individual models',
        'c' => 'Selecting the best model from multiple candidates',
        'd' => 'Optimizing model hyperparameters',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "cross-validation" help with in model evaluation?',
        'a' => 'Assessing the model’s performance on multiple subsets of the data',
        'b' => 'Improving the model’s learning speed',
        'c' => 'Increasing the size of the dataset',
        'd' => 'Optimizing model hyperparameters',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which approach is used to handle categorical features in machine learning models?',
        'a' => 'One-Hot Encoding',
        'b' => 'Normalization',
        'c' => 'Feature Scaling',
        'd' => 'Feature Selection',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "dimensionality reduction" used for?',
        'a' => 'Reducing the number of features while preserving important information',
        'b' => 'Increasing the size of the dataset',
        'c' => 'Improving the model’s performance on unseen data',
        'd' => 'Handling missing data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is a type of recurrent neural network architecture designed to handle long-term dependencies?',
        'a' => 'Long Short-Term Memory (LSTM)',
        'b' => 'Convolutional Neural Network (CNN)',
        'c' => 'Generative Adversarial Network (GAN)',
        'd' => 'Autoencoder',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the main advantage of using an ensemble method like Random Forest?',
        'a' => 'It reduces variance and improves predictive performance by combining multiple models',
        'b' => 'It increases model interpretability',
        'c' => 'It speeds up model training significantly',
        'd' => 'It ensures the model is trained on a larger dataset',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which activation function is often used to introduce non-linearity in neural networks?',
        'a' => 'ReLU (Rectified Linear Unit)',
        'b' => 'Sigmoid',
        'c' => 'Tanh',
        'd' => 'Softmax',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "overfitting" in the context of machine learning?',
        'a' => 'When a model learns the training data too well, including noise and outliers, leading to poor generalization',
        'b' => 'When a model performs well on the training data but poorly on the test data',
        'c' => 'When a model is too simple to capture the underlying patterns in the data',
        'd' => 'When a model has too many features and becomes too complex',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which technique is used to ensure that a machine learning model performs well on unseen data?',
        'a' => 'Cross-Validation',
        'b' => 'Data Augmentation',
        'c' => 'Hyperparameter Tuning',
        'd' => 'Feature Scaling',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "backpropagation" refer to in neural network training?',
        'a' => 'The process of adjusting weights based on the error gradient to minimize the loss function',
        'b' => 'The technique of normalizing input data before feeding it into the network',
        'c' => 'The method of splitting the dataset into training and validation sets',
        'd' => 'The process of initializing the model parameters randomly',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is a common metric used to evaluate classification models?',
        'a' => 'Accuracy',
        'b' => 'Mean Squared Error (MSE)',
        'c' => 'Silhouette Score',
        'd' => 'Log-Loss',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the purpose of "dropout" in a neural network?',
        'a' => 'To prevent overfitting by randomly dropping units during training',
        'b' => 'To speed up the training process by reducing the number of epochs',
        'c' => 'To handle missing data by imputing values',
        'd' => 'To normalize the data before training',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is an unsupervised learning technique?',
        'a' => 'K-Means Clustering',
        'b' => 'Support Vector Machine (SVM)',
        'c' => 'Logistic Regression',
        'd' => 'Naive Bayes',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "activation function" do in a neural network?',
        'a' => 'It introduces non-linearity into the network’s output',
        'b' => 'It normalizes the input features',
        'c' => 'It reduces the dimensionality of the input data',
        'd' => 'It initializes the weights of the network',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "data augmentation" used for?',
        'a' => 'Generating new training samples by applying transformations to existing data',
        'b' => 'Creating synthetic data to augment the dataset size',
        'c' => 'Cleaning the dataset by removing outliers',
        'd' => 'Selecting the most relevant features for model training',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "early stopping" in machine learning?',
        'a' => 'A technique to stop training a model once it starts to overfit the training data',
        'b' => 'A method to speed up the training process by reducing the number of epochs',
        'c' => 'A process to split data into training and validation sets',
        'd' => 'A technique to initialize model parameters',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ], [
        'field_id' => 4,
        
        'question' => 'What is a "confusion matrix" used for in machine learning?',
        'a' => 'To evaluate the performance of a classification model by showing true vs. predicted labels',
        'b' => 'To visualize the data distribution',
        'c' => 'To check the model’s residuals',
        'd' => 'To display the model’s learning curve',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which technique is used to handle missing values in a dataset?',
        'a' => 'Imputation',
        'b' => 'Normalization',
        'c' => 'Encoding',
        'd' => 'Feature Scaling',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "gradient descent" used for in machine learning?',
        'a' => 'To optimize the model by minimizing the loss function through iterative updates',
        'b' => 'To standardize the input data',
        'c' => 'To split the data into training and testing sets',
        'd' => 'To select the most important features for the model',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the purpose of the "softmax" activation function?',
        'a' => 'To convert raw scores into probabilities for classification tasks',
        'b' => 'To normalize the input features',
        'c' => 'To introduce non-linearity in hidden layers',
        'd' => 'To initialize the model weights',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "batch normalization" help with in training deep neural networks?',
        'a' => 'To stabilize and speed up the training process by normalizing the activations',
        'b' => 'To reduce the complexity of the model',
        'c' => 'To handle missing values in the data',
        'd' => 'To select important features for the model',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which type of neural network is best suited for image recognition tasks?',
        'a' => 'Convolutional Neural Network (CNN)',
        'b' => 'Recurrent Neural Network (RNN)',
        'c' => 'Generative Adversarial Network (GAN)',
        'd' => 'Autoencoder',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the purpose of the "learning rate" hyperparameter in training a neural network?',
        'a' => 'To control the size of the updates to the model parameters during training',
        'b' => 'To determine the number of layers in the network',
        'c' => 'To select the type of activation function',
        'd' => 'To adjust the batch size',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "ensemble learning" involve?',
        'a' => 'Combining predictions from multiple models to improve overall accuracy',
        'b' => 'Reducing the number of features used in the model',
        'c' => 'Splitting the data into multiple training sets',
        'd' => 'Selecting the best hyperparameters for a single model',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is a common problem when training machine learning models?',
        'a' => 'Overfitting',
        'b' => 'Underfitting',
        'c' => 'Data Leakage',
        'd' => 'All of the above',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "hyperparameter tuning" in machine learning?',
        'a' => 'The process of finding the best combination of hyperparameters for a model',
        'b' => 'The technique of increasing the training dataset size',
        'c' => 'The method of normalizing the features',
        'd' => 'The process of feature selection',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the "precision" metric in classification tasks?',
        'a' => 'The ratio of true positive predictions to the sum of true positive and false positive predictions',
        'b' => 'The ratio of true positive predictions to the sum of true positive and false negative predictions',
        'c' => 'The ratio of true negative predictions to the sum of true negative and false positive predictions',
        'd' => 'The ratio of true negative predictions to the sum of true negative and false negative predictions',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which algorithm is commonly used for dimensionality reduction?',
        'a' => 'Principal Component Analysis (PCA)',
        'b' => 'K-Means Clustering',
        'c' => 'Decision Trees',
        'd' => 'Support Vector Machines (SVM)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "Reinforcement Learning" primarily concerned with?',
        'a' => 'Training models to make decisions by maximizing cumulative rewards',
        'b' => 'Finding patterns in unlabeled data',
        'c' => 'Classifying data into predefined categories',
        'd' => 'Reducing the dimensionality of data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is a "Support Vector Machine" (SVM) used for?',
        'a' => 'Classification and regression tasks by finding the optimal hyperplane',
        'b' => 'Generating synthetic data',
        'c' => 'Clustering data into groups',
        'd' => 'Reducing the number of features',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "dimensionality reduction" aim to achieve?',
        'a' => 'Reducing the number of features in the dataset while preserving important information',
        'b' => 'Increasing the number of data samples',
        'c' => 'Splitting the dataset into training and testing sets',
        'd' => 'Normalizing the data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the primary goal of "feature selection" in machine learning?',
        'a' => 'To choose the most relevant features for model training to improve performance',
        'b' => 'To increase the number of features to capture more information',
        'c' => 'To normalize the data features',
        'd' => 'To split the data into training and testing sets',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which technique is used to handle class imbalance in a dataset?',
        'a' => 'Resampling methods such as oversampling the minority class or undersampling the majority class',
        'b' => 'Data augmentation to create more samples',
        'c' => 'Feature scaling to normalize the features',
        'd' => 'Cross-validation to assess model performance',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "gradient boosting" in machine learning?',
        'a' => 'An ensemble technique that builds models sequentially, with each model correcting errors made by the previous ones',
        'b' => 'A method of increasing the training data size',
        'c' => 'A technique for scaling features',
        'd' => 'A way to initialize model parameters',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "hyperparameter optimization"?',
        'a' => 'The process of tuning the hyperparameters of a model to find the best settings',
        'b' => 'The process of selecting the most relevant features for the model',
        'c' => 'The process of cleaning the data before training',
        'd' => 'The process of splitting the data into training and validation sets',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "cross-entropy loss" used for in classification tasks?',
        'a' => 'Measuring the performance of a classification model by comparing predicted probabilities with actual labels',
        'b' => 'Evaluating the model’s performance based on mean squared error',
        'c' => 'Calculating the variance of the predictions',
        'd' => 'Determining the accuracy of the predictions',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the "ROC curve" used for in machine learning?',
        'a' => 'Visualizing the trade-off between the true positive rate and the false positive rate',
        'b' => 'Assessing the performance of a regression model',
        'c' => 'Evaluating the distribution of features',
        'd' => 'Determining the training time of the model',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which algorithm is known for its use in recommendation systems?',
        'a' => 'Collaborative Filtering',
        'b' => 'Principal Component Analysis (PCA)',
        'c' => 'K-Means Clustering',
        'd' => 'Naive Bayes',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "K-Means Clustering" used for?',
        'a' => 'Partitioning data into clusters based on feature similarity',
        'b' => 'Reducing the dimensionality of the data',
        'c' => 'Classifying data into predefined categories',
        'd' => 'Predicting continuous values based on input features',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "principal component analysis" (PCA) used for?',
        'a' => 'Reducing the dimensionality of the data by transforming it into principal components',
        'b' => 'Normalizing the data features',
        'c' => 'Selecting the most important features for the model',
        'd' => 'Handling missing values in the dataset',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "overfitting" refer to in machine learning?',
        'a' => 'When a model performs well on training data but poorly on unseen data',
        'b' => 'When a model performs equally well on both training and unseen data',
        'c' => 'When a model has too few features',
        'd' => 'When a model has high bias and underperforms on training data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "underfitting" in machine learning?',
        'a' => 'When a model performs poorly on both training and unseen data',
        'b' => 'When a model is too complex and overfits the training data',
        'c' => 'When a model has too many parameters',
        'd' => 'When a model achieves high accuracy on the training data but fails on unseen data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the "F1 score" used for?',
        'a' => 'Combining precision and recall into a single metric for evaluating model performance',
        'b' => 'Evaluating the accuracy of regression models',
        'c' => 'Assessing the training time of the model',
        'd' => 'Determining the feature importance in a dataset',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "regularization" help with in machine learning?',
        'a' => 'Preventing overfitting by adding a penalty for large coefficients',
        'b' => 'Increasing the size of the training data',
        'c' => 'Selecting the most relevant features for the model',
        'd' => 'Normalizing the data features',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "dropout" used for in training neural networks?',
        'a' => 'To prevent overfitting by randomly dropping units during training',
        'b' => 'To increase the number of hidden layers',
        'c' => 'To normalize the activations of the network',
        'd' => 'To initialize the network weights',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which algorithm is known for its use in natural language processing (NLP)?',
        'a' => 'Transformers',
        'b' => 'K-Means Clustering',
        'c' => 'Principal Component Analysis (PCA)',
        'd' => 'Decision Trees',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "Word2Vec" used for?',
        'a' => 'Transforming words into numerical vectors in natural language processing',
        'b' => 'Generating synthetic images',
        'c' => 'Classifying data into categories',
        'd' => 'Performing dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "attention mechanism" in neural networks?',
        'a' => 'A technique that allows the model to focus on important parts of the input data',
        'b' => 'A method for feature selection',
        'c' => 'A technique for dimensionality reduction',
        'd' => 'A way to increase the training data size',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "reinforcement learning" involve?',
        'a' => 'Learning by receiving rewards or penalties based on actions taken',
        'b' => 'Learning from labeled data with supervised methods',
        'c' => 'Learning from unlabeled data with clustering techniques',
        'd' => 'Learning by reducing data dimensionality',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "exploration vs. exploitation" in reinforcement learning?',
        'a' => 'Balancing between trying new actions (exploration) and using known actions that yield high rewards (exploitation)',
        'b' => 'Selecting features from the data for training',
        'c' => 'Deciding between different machine learning models',
        'd' => 'Choosing the best hyperparameters for the model',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "backpropagation" do in neural networks?',
        'a' => 'Computes gradients to update the weights of the network during training',
        'b' => 'Generates synthetic data for training',
        'c' => 'Normalizes the input data',
        'd' => 'Splits the dataset into training and testing sets',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ], [
        'field_id' => 4,
        
        'question' => 'What is the "curse of dimensionality"?',
        'a' => 'The problem of increased computational complexity and sparsity of data as the number of features increases',
        'b' => 'The issue of having too few features for model training',
        'c' => 'The problem of overfitting with too few data samples',
        'd' => 'The challenge of reducing the number of data samples for training',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "gradient descent"?',
        'a' => 'An optimization algorithm used to minimize the loss function by iteratively adjusting model parameters',
        'b' => 'A technique for increasing the size of the training data',
        'c' => 'A method for feature selection',
        'd' => 'A technique for scaling the features',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the "confusion matrix" used for?',
        'a' => 'Evaluating the performance of a classification model by comparing predicted and actual labels',
        'b' => 'Assessing the accuracy of regression models',
        'c' => 'Calculating the feature importance',
        'd' => 'Normalizing the data features',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "feature engineering" involve?',
        'a' => 'Creating new features or modifying existing ones to improve model performance',
        'b' => 'Splitting the data into training and validation sets',
        'c' => 'Normalizing the features of the data',
        'd' => 'Selecting the best machine learning model',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is supervised learning?',
        'a' => 'A type of machine learning where the model is trained on labeled data',
        'b' => 'A type of machine learning where the model is trained on unlabeled data',
        'c' => 'A method of increasing the size of the dataset',
        'd' => 'A technique for reducing the dimensionality of the data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is unsupervised learning?',
        'a' => 'A type of machine learning where the model is trained on unlabeled data',
        'b' => 'A type of machine learning where the model is trained on labeled data',
        'c' => 'A method for supervised classification',
        'd' => 'A technique for feature selection',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is a "decision tree"?',
        'a' => 'A model that makes decisions based on feature values by creating a tree-like structure',
        'b' => 'A method for normalizing the features',
        'c' => 'A technique for reducing the number of data samples',
        'd' => 'A model for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "k-nearest neighbors" (KNN)?',
        'a' => 'A classification algorithm that assigns the class of the majority of its k-nearest neighbors',
        'b' => 'A method for dimensionality reduction',
        'c' => 'A technique for feature extraction',
        'd' => 'A model for predicting continuous values',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "cross-validation" help with?',
        'a' => 'Evaluating the performance of a model by splitting the data into multiple training and validation sets',
        'b' => 'Normalizing the features of the dataset',
        'c' => 'Selecting the most important features for the model',
        'd' => 'Combining multiple models for better performance',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "support vector machine" (SVM)?',
        'a' => 'A classification algorithm that finds the hyperplane that best separates different classes',
        'b' => 'A method for clustering data',
        'c' => 'A technique for dimensionality reduction',
        'd' => 'A model for predicting continuous values',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the "bias-variance tradeoff"?',
        'a' => 'The balance between model complexity and the risk of overfitting or underfitting',
        'b' => 'The tradeoff between training and validation accuracy',
        'c' => 'The choice between different machine learning algorithms',
        'd' => 'The decision between supervised and unsupervised learning',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "ensemble learning"?',
        'a' => 'Combining the predictions of multiple models to improve overall performance',
        'b' => 'A method for selecting the best features for the model',
        'c' => 'A technique for increasing the size of the dataset',
        'd' => 'A method for scaling the features of the data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "gradient boosting"?',
        'a' => 'An ensemble learning method that builds models sequentially to correct errors of previous models',
        'b' => 'A technique for feature selection',
        'c' => 'A method for dimensionality reduction',
        'd' => 'A model for clustering data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "hyperparameter tuning" involve?',
        'a' => 'Adjusting the settings of the machine learning model to improve performance',
        'b' => 'Selecting the best features for the model',
        'c' => 'Normalizing the data features',
        'd' => 'Increasing the size of the dataset',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "feature scaling"?',
        'a' => 'The process of standardizing or normalizing the features of the dataset',
        'b' => 'Selecting the most relevant features for the model',
        'c' => 'Reducing the number of features in the dataset',
        'd' => 'Splitting the data into training and testing sets',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "dimensionality reduction"?',
        'a' => 'The process of reducing the number of features in the dataset while preserving important information',
        'b' => 'Increasing the number of features in the dataset',
        'c' => 'Normalizing the data features',
        'd' => 'Combining multiple features into a single feature',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ], [
        'field_id' => 4,
        
        'question' => 'What is the "elbow method" used for?',
        'a' => 'Determining the optimal number of clusters in k-means clustering',
        'b' => 'Evaluating the performance of regression models',
        'c' => 'Selecting the best hyperparameters for a model',
        'd' => 'Normalizing the features of the data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is a "neural network"?',
        'a' => 'A computational model inspired by the human brain, consisting of interconnected nodes (neurons)',
        'b' => 'A method for dimensionality reduction',
        'c' => 'A classification algorithm based on decision trees',
        'd' => 'A technique for feature scaling',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "overfitting"?',
        'a' => 'When a model performs well on training data but poorly on unseen data',
        'b' => 'When a model performs equally well on both training and testing data',
        'c' => 'When a model is too simple to capture the underlying pattern',
        'd' => 'When a model has too few features',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "underfitting"?',
        'a' => 'When a model is too simple to capture the underlying pattern in the data',
        'b' => 'When a model is too complex and captures noise as well as the signal',
        'c' => 'When a model performs well on unseen data but poorly on training data',
        'd' => 'When a model has too many features',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "regularization"?',
        'a' => 'A technique used to prevent overfitting by adding a penalty to the model complexity',
        'b' => 'A method for scaling the features of the data',
        'c' => 'A technique for increasing the number of features',
        'd' => 'A method for splitting the data into training and testing sets',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "principal component analysis" (PCA)?',
        'a' => 'A technique for reducing the dimensionality of data while retaining as much variance as possible',
        'b' => 'A method for feature scaling',
        'c' => 'A technique for clustering data',
        'd' => 'A model for regression analysis',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "naive Bayes" used for?',
        'a' => 'A probabilistic classification technique based on Bayes\' theorem with the assumption of feature independence',
        'b' => 'A method for feature scaling',
        'c' => 'A technique for dimensionality reduction',
        'd' => 'A model for regression analysis',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "clustering"?',
        'a' => 'The process of grouping similar data points together based on their features',
        'b' => 'A method for splitting data into training and testing sets',
        'c' => 'A technique for dimensionality reduction',
        'd' => 'A model for regression analysis',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "logistic regression"?',
        'a' => 'A classification algorithm used to predict the probability of a binary outcome',
        'b' => 'A technique for clustering data',
        'c' => 'A method for dimensionality reduction',
        'd' => 'A model for regression analysis with continuous outcomes',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "random forest"?',
        'a' => 'An ensemble learning method that combines multiple decision trees to improve classification performance',
        'b' => 'A method for dimensionality reduction',
        'c' => 'A technique for feature scaling',
        'd' => 'A model for clustering data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "support vector regression" (SVR)?',
        'a' => 'A regression technique that uses support vector machines to predict continuous values',
        'b' => 'A classification algorithm based on support vector machines',
        'c' => 'A method for dimensionality reduction',
        'd' => 'A technique for feature scaling',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "k-means clustering"?',
        'a' => 'A clustering algorithm that partitions data into k clusters based on distance to the cluster centroids',
        'b' => 'A technique for dimensionality reduction',
        'c' => 'A method for feature scaling',
        'd' => 'A model for regression analysis',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "deep learning"?',
        'a' => 'A subset of machine learning involving neural networks with many layers',
        'b' => 'A technique for feature scaling',
        'c' => 'A method for dimensionality reduction',
        'd' => 'A model for clustering data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "backpropagation"?',
        'a' => 'An algorithm for training neural networks by adjusting weights based on errors',
        'b' => 'A technique for clustering data',
        'c' => 'A method for feature scaling',
        'd' => 'A model for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "convolutional neural network" (CNN)?',
        'a' => 'A type of deep learning model used primarily for image recognition',
        'b' => 'A method for dimensionality reduction',
        'c' => 'A technique for clustering data',
        'd' => 'A model for regression analysis',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "recurrent neural network" (RNN)?',
        'a' => 'A type of neural network designed for sequential data, such as time series',
        'b' => 'A method for feature scaling',
        'c' => 'A technique for dimensionality reduction',
        'd' => 'A model for clustering data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "batch normalization"?',
        'a' => 'A technique for normalizing the inputs of each layer to improve training stability',
        'b' => 'A method for feature scaling',
        'c' => 'A technique for dimensionality reduction',
        'd' => 'A model for regression analysis',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "dropout"?',
        'a' => 'A regularization technique used to prevent overfitting by randomly dropping units during training',
        'b' => 'A method for clustering data',
        'c' => 'A technique for feature scaling',
        'd' => 'A model for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "activation function"?',
        'a' => 'A function applied to the output of each neuron to introduce non-linearity into the model',
        'b' => 'A method for dimensionality reduction',
        'c' => 'A technique for feature scaling',
        'd' => 'A model for clustering data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "autoencoder"?',
        'a' => 'A type of neural network used for unsupervised learning to compress and reconstruct data',
        'b' => 'A method for feature scaling',
        'c' => 'A technique for dimensionality reduction',
        'd' => 'A model for clustering data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "transfer learning"?',
        'a' => 'A technique where a model developed for a task is adapted for a different but related task',
        'b' => 'A method for clustering data',
        'c' => 'A technique for feature scaling',
        'd' => 'A model for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "generative adversarial network" (GAN)?',
        'a' => 'A framework consisting of two neural networks, a generator and a discriminator, competing against each other',
        'b' => 'A method for clustering data',
        'c' => 'A technique for feature scaling',
        'd' => 'A model for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],[
        'field_id' => 4,
        
        'question' => 'What is "gradient descent"?',
        'a' => 'An optimization algorithm used to minimize the loss function by iteratively adjusting model parameters',
        'b' => 'A technique for dimensionality reduction',
        'c' => 'A method for feature scaling',
        'd' => 'A model for clustering data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "learning rate"?',
        'a' => 'A hyperparameter that controls the size of the steps taken during gradient descent',
        'b' => 'A method for dimensionality reduction',
        'c' => 'A technique for clustering data',
        'd' => 'A model for regression analysis',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "cross-validation"?',
        'a' => 'A technique for assessing how the results of a statistical analysis will generalize to an independent dataset',
        'b' => 'A method for feature scaling',
        'c' => 'A technique for clustering data',
        'd' => 'A model for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "confusion matrix"?',
        'a' => 'A table used to evaluate the performance of a classification algorithm by comparing predicted and actual values',
        'b' => 'A method for dimensionality reduction',
        'c' => 'A technique for feature scaling',
        'd' => 'A model for clustering data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "precision" in the context of classification? ',
        'a' => 'The ratio of true positive predictions to the sum of true positive and false positive predictions',
        'b' => 'The ratio of true positive predictions to the sum of true positive and false negative predictions',
        'c' => 'The ratio of true negative predictions to the sum of true negative and false positive predictions',
        'd' => 'The ratio of false positive predictions to the sum of false positive and true negative predictions',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "recall" in the context of classification?',
        'a' => 'The ratio of true positive predictions to the sum of true positive and false negative predictions',
        'b' => 'The ratio of true positive predictions to the sum of true positive and false positive predictions',
        'c' => 'The ratio of true negative predictions to the sum of true negative and false positive predictions',
        'd' => 'The ratio of false negative predictions to the sum of false negative and true positive predictions',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "F1-score"?',
        'a' => 'The harmonic mean of precision and recall',
        'b' => 'The average of precision and recall',
        'c' => 'The ratio of true positives to the sum of true positives and true negatives',
        'd' => 'The ratio of true positives to the sum of true positives and false positives',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "ROC curve"?',
        'a' => 'A graphical plot that illustrates the diagnostic ability of a binary classifier system as its discrimination threshold is varied',
        'b' => 'A method for dimensionality reduction',
        'c' => 'A technique for feature scaling',
        'd' => 'A model for regression analysis',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "area under the ROC curve" (AUC-ROC)?',
        'a' => 'A performance measurement for classification problems at various threshold settings',
        'b' => 'A method for clustering data',
        'c' => 'A technique for dimensionality reduction',
        'd' => 'A model for feature scaling',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "support vector machine" (SVM)?',
        'a' => 'A classification algorithm that finds the hyperplane that best separates classes in the feature space',
        'b' => 'A technique for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A method for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "k-nearest neighbors" (KNN)?',
        'a' => 'A classification algorithm that assigns a class based on the majority class among the k nearest neighbors',
        'b' => 'A technique for dimensionality reduction',
        'c' => 'A method for feature scaling',
        'd' => 'A model for clustering data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "hyperparameter tuning"?',
        'a' => 'The process of optimizing the hyperparameters of a model to improve its performance',
        'b' => 'A technique for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A method for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "ensemble learning"?',
        'a' => 'A technique that combines multiple models to improve overall performance',
        'b' => 'A method for dimensionality reduction',
        'c' => 'A technique for feature scaling',
        'd' => 'A model for clustering data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "bagging"?',
        'a' => 'An ensemble learning technique that involves training multiple instances of the same model on different subsets of the data',
        'b' => 'A technique for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A method for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "boosting"?',
        'a' => 'An ensemble learning technique that combines weak learners sequentially to create a strong model',
        'b' => 'A technique for clustering data',
        'c' => 'A model for dimensionality reduction',
        'd' => 'A method for feature scaling',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "AdaBoost"?',
        'a' => 'An ensemble learning algorithm that combines multiple weak classifiers to create a strong classifier',
        'b' => 'A technique for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A method for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "random forest"?',
        'a' => 'An ensemble learning method that combines multiple decision trees to improve classification accuracy',
        'b' => 'A technique for dimensionality reduction',
        'c' => 'A method for feature scaling',
        'd' => 'A model for clustering data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "support vector regression" (SVR)?',
        'a' => 'A type of support vector machine used for regression tasks',
        'b' => 'A technique for clustering data',
        'c' => 'A model for dimensionality reduction',
        'd' => 'A method for feature scaling',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "principal component analysis" (PCA)?',
        'a' => 'A technique for dimensionality reduction that transforms data into a set of orthogonal components',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for regression analysis',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "k-means clustering"?',
        'a' => 'A method for partitioning data into k clusters where each data point belongs to the cluster with the nearest mean',
        'b' => 'A technique for feature scaling',
        'c' => 'A model for dimensionality reduction',
        'd' => 'A method for regression analysis',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "hierarchical clustering"?',
        'a' => 'A method for clustering data that builds a hierarchy of clusters using either a bottom-up or top-down approach',
        'b' => 'A technique for feature scaling',
        'c' => 'A model for dimensionality reduction',
        'd' => 'A method for regression analysis',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "t-SNE"?',
        'a' => 'A technique for dimensionality reduction that helps visualize high-dimensional data in a lower-dimensional space',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for regression analysis',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],[
        'field_id' => 4,
        
        'question' => 'What is "neural network"?',
        'a' => 'A computational model inspired by the way biological neural networks in the brain process information',
        'b' => 'A method for dimensionality reduction',
        'c' => 'A model for clustering data',
        'd' => 'A technique for feature scaling',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "backpropagation"?',
        'a' => 'An algorithm used to train neural networks by adjusting weights based on the error gradient',
        'b' => 'A technique for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A method for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "activation function"?',
        'a' => 'A function used in neural networks to introduce non-linearity and help the network learn complex patterns',
        'b' => 'A technique for clustering data',
        'c' => 'A model for dimensionality reduction',
        'd' => 'A method for feature scaling',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "overfitting"?',
        'a' => 'When a model learns the training data too well and performs poorly on unseen data',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "underfitting"?',
        'a' => 'When a model is too simple to capture the underlying patterns in the data',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "dropout"?',
        'a' => 'A regularization technique used to prevent overfitting by randomly dropping neurons during training',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "batch normalization"?',
        'a' => 'A technique used to normalize the inputs of each layer in a neural network to stabilize and accelerate training',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "learning rate decay"?',
        'a' => 'A technique that reduces the learning rate over time to improve convergence and stability',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "exploding gradient"?',
        'a' => 'A problem where gradients grow exponentially during backpropagation, causing unstable training',
        'b' => 'A technique for dimensionality reduction',
        'c' => 'A model for clustering data',
        'd' => 'A method for feature scaling',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "vanishing gradient"?',
        'a' => 'A problem where gradients become very small during backpropagation, causing slow or stalled training',
        'b' => 'A technique for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A method for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "gradient descent"?',
        'a' => 'An optimization algorithm used to minimize the loss function by iteratively updating model parameters',
        'b' => 'A technique for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A method for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "stochastic gradient descent" (SGD)?',
        'a' => 'A variant of gradient descent that updates the model parameters using a single data point at a time',
        'b' => 'A technique for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A method for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "mini-batch gradient descent"?',
        'a' => 'An optimization technique that updates model parameters using a small batch of data points at a time',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "support vector machine" (SVM)?',
        'a' => 'A supervised learning model used for classification and regression tasks that finds the optimal hyperplane for separating data',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "kernel trick"?',
        'a' => 'A technique used in SVM to transform data into a higher-dimensional space to make it linearly separable',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "cross-validation"?',
        'a' => 'A technique for evaluating a model’s performance by splitting the data into training and validation sets multiple times',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "k-fold cross-validation"?',
        'a' => 'A cross-validation method that splits the data into k subsets, using each subset as a validation set while the remaining k-1 subsets are used for training',
        'b' => 'A technique for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A method for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "regularization"?',
        'a' => 'A technique used to prevent overfitting by adding a penalty to the loss function based on the complexity of the model',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "L1 regularization"?',
        'a' => 'A regularization technique that adds the absolute value of the model parameters to the loss function',
        'b' => 'A technique for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A method for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "L2 regularization"?',
        'a' => 'A regularization technique that adds the squared value of the model parameters to the loss function',
        'b' => 'A technique for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A method for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "Ridge regression"?',
        'a' => 'A type of linear regression that includes L2 regularization to prevent overfitting',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ], [
        'field_id' => 4,
        
        'question' => 'What is "lasso regression"?',
        'a' => 'A type of linear regression that includes L1 regularization to prevent overfitting',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "elastic net regularization"?',
        'a' => 'A regularization technique that combines both L1 and L2 regularization',
        'b' => 'A technique for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A method for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "k-means clustering"?',
        'a' => 'A clustering algorithm that partitions data into k distinct clusters based on distance to the centroid',
        'b' => 'A method for feature scaling',
        'c' => 'A model for dimensionality reduction',
        'd' => 'A technique for regularization',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "principal component analysis" (PCA)?',
        'a' => 'A dimensionality reduction technique that transforms data into a set of orthogonal components',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for regularization',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "t-distributed stochastic neighbor embedding" (t-SNE)?',
        'a' => 'A dimensionality reduction technique used for visualizing high-dimensional data',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for regularization',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "decision tree"?',
        'a' => 'A supervised learning model that splits data into subsets based on feature values to make predictions',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "random forest"?',
        'a' => 'An ensemble learning method that combines multiple decision trees to improve classification accuracy',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "gradient boosting"?',
        'a' => 'An ensemble learning technique that builds models sequentially to correct the errors of previous models',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "XGBoost"?',
        'a' => 'An optimized implementation of gradient boosting that improves performance and scalability',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "hyperparameter tuning"?',
        'a' => 'The process of adjusting the parameters of a machine learning model to improve performance',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ], [
        'field_id' => 4,
        
        'question' => 'What is "bagging" in ensemble learning?',
        'a' => 'A technique that builds multiple models on different subsets of data and averages their predictions',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "boosting" in ensemble learning?',
        'a' => 'A technique that builds models sequentially to correct the errors of previous models',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "AdaBoost"?',
        'a' => 'An ensemble learning method that adjusts weights on incorrectly classified instances to improve model performance',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "Naive Bayes"?',
        'a' => 'A probabilistic classifier based on applying Bayes’ theorem with strong independence assumptions between features',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "k-nearest neighbors" (KNN)?',
        'a' => 'A classification algorithm that assigns a class based on the majority class among its k-nearest neighbors',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "support vector regression" (SVR)?',
        'a' => 'A regression technique that uses support vector machines to predict continuous values',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "logistic regression"?',
        'a' => 'A classification algorithm that models the probability of a binary outcome using a logistic function',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "feature selection"?',
        'a' => 'The process of selecting the most relevant features for building a machine learning model',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "feature engineering"?',
        'a' => 'The process of creating new features or modifying existing features to improve model performance',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "deep learning"?',
        'a' => 'A subset of machine learning that uses neural networks with multiple layers to model complex patterns in data',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "neural network"?',
        'a' => 'A computational model inspired by the human brain, consisting of interconnected nodes or neurons organized in layers',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "activation function" in a neural network?',
        'a' => 'A function that determines the output of a neuron based on its input',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "backpropagation"?',
        'a' => 'A training algorithm for neural networks that adjusts weights based on the error between predicted and actual values',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "overfitting"?',
        'a' => 'A scenario where a model performs well on training data but poorly on unseen data due to excessive complexity',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "underfitting"?',
        'a' => 'A scenario where a model performs poorly on both training and unseen data due to insufficient complexity',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "cross-validation"?',
        'a' => 'A technique used to evaluate the performance of a model by partitioning the data into subsets and training/testing on them',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "learning rate"?',
        'a' => 'A hyperparameter that controls the step size during model training',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "dropout" in neural networks?',
        'a' => 'A regularization technique that randomly drops neurons during training to prevent overfitting',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "convolutional neural network" (CNN)?',
        'a' => 'A type of neural network designed to process structured grid data, such as images, using convolutional layers',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "recurrent neural network" (RNN)?',
        'a' => 'A type of neural network that is designed for sequence prediction tasks by maintaining hidden states',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "long short-term memory" (LSTM)?',
        'a' => 'A type of RNN architecture that can capture long-term dependencies and avoid vanishing gradient problems',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ], [
        'field_id' => 4,
        
        'question' => 'What is "gradient descent"?',
        'a' => 'An optimization algorithm used to minimize the loss function by iteratively adjusting model parameters',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "support vector machine" (SVM)?',
        'a' => 'A supervised learning model used for classification and regression by finding the hyperplane that best separates the classes',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "hyperparameter tuning"?',
        'a' => 'The process of optimizing the hyperparameters of a model to improve its performance',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "ensemble learning"?',
        'a' => 'A technique that combines the predictions of multiple models to improve overall performance',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "k-fold cross-validation"?',
        'a' => 'A technique for evaluating model performance by dividing the data into k subsets and training/testing on them k times',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "confusion matrix"?',
        'a' => 'A table used to evaluate the performance of a classification model by comparing predicted and actual values',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "ROC curve"?',
        'a' => 'A graphical plot that illustrates the diagnostic ability of a binary classifier system as its discrimination threshold is varied',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "precision" in classification metrics?',
        'a' => 'The ratio of true positive predictions to the total number of positive predictions made by the model',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "recall" in classification metrics?',
        'a' => 'The ratio of true positive predictions to the total number of actual positive instances in the data',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "F1 score"?',
        'a' => 'A metric that combines precision and recall into a single score by taking their harmonic mean',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "mean squared error" (MSE)?',
        'a' => 'A metric that measures the average squared difference between predicted and actual values',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "root mean squared error" (RMSE)?',
        'a' => 'A metric that measures the square root of the average squared difference between predicted and actual values',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "mean absolute error" (MAE)?',
        'a' => 'A metric that measures the average absolute difference between predicted and actual values',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "regularization" in machine learning?',
        'a' => 'A technique used to prevent overfitting by adding a penalty term to the loss function',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "L1 regularization"?',
        'a' => 'A type of regularization that adds the absolute value of coefficients to the loss function, encouraging sparsity',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "L2 regularization"?',
        'a' => 'A type of regularization that adds the squared value of coefficients to the loss function, discouraging large weights',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "bagging" in ensemble learning?',
        'a' => 'A technique that combines predictions from multiple models trained on different subsets of the data to improve performance',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "boosting" in ensemble learning?',
        'a' => 'A technique that combines weak models in a sequential manner, where each model corrects the errors of the previous one',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "feature importance"?',
        'a' => 'A measure of the contribution of each feature to the prediction of the model',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "k-means clustering"?',
        'a' => 'A clustering algorithm that partitions data into k clusters by minimizing the variance within each cluster',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "principal component analysis" (PCA)?',
        'a' => 'A technique for dimensionality reduction by transforming data into a set of orthogonal components that maximize variance',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for feature extraction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "t-distributed stochastic neighbor embedding" (t-SNE)?',
        'a' => 'A technique for dimensionality reduction that preserves the local structure of data by converting similarities into probabilities',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for feature extraction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "autoencoder"?',
        'a' => 'A type of neural network used for unsupervised learning to encode and decode data into a lower-dimensional representation',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for feature extraction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ], [
        'field_id' => 4,
        
        'question' => 'What is "gradient boosting"?',
        'a' => 'A technique that combines predictions from multiple models in a sequential manner, where each model aims to correct errors of the previous one',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "logistic regression"?',
        'a' => 'A statistical model used for binary classification that predicts probabilities using the logistic function',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "neural network"?',
        'a' => 'A computational model inspired by the human brain, consisting of interconnected nodes (neurons) that process data',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "activation function" in neural networks?',
        'a' => 'A function that determines the output of a neuron based on its input, introducing non-linearity into the model',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "convolutional neural network" (CNN)?',
        'a' => 'A type of neural network specifically designed for processing structured grid data, such as images',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "recurrent neural network" (RNN)?',
        'a' => 'A type of neural network that is designed to recognize patterns in sequences of data, such as time series or natural language',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "long short-term memory" (LSTM)?',
        'a' => 'A type of RNN that is capable of learning long-term dependencies by addressing the vanishing gradient problem',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "exploratory data analysis" (EDA)?',
        'a' => 'A process of analyzing data sets to summarize their main characteristics, often using visual methods',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "feature engineering"?',
        'a' => 'The process of using domain knowledge to create features that make machine learning algorithms work better',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "overfitting"?',
        'a' => 'A situation where a model performs well on the training data but poorly on unseen data due to excessive complexity',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "underfitting"?',
        'a' => 'A situation where a model is too simple to capture the underlying pattern of the data, leading to poor performance on both training and test data',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ], [
        'field_id' => 4,
        
        'question' => 'What is "hyperparameter tuning"?',
        'a' => 'The process of selecting the best hyperparameters for a model to improve its performance',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "cross-validation"?',
        'a' => 'A technique used to assess how the results of a statistical analysis generalize to an independent data set',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "support vector machine" (SVM)?',
        'a' => 'A supervised learning model used for classification and regression tasks, which finds the optimal hyperplane to separate classes',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "decision tree"?',
        'a' => 'A supervised learning model that splits data into branches to make decisions based on feature values',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "random forest"?',
        'a' => 'An ensemble learning method that combines multiple decision trees to improve prediction accuracy and control overfitting',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "k-nearest neighbors" (KNN)?',
        'a' => 'A simple algorithm that classifies data points based on the majority class among their k-nearest neighbors',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "confusion matrix"?',
        'a' => 'A table used to evaluate the performance of a classification model by showing the true vs. predicted classifications',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "precision" in classification?',
        'a' => 'The ratio of true positive predictions to the total number of positive predictions made',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "recall" in classification?',
        'a' => 'The ratio of true positive predictions to the total number of actual positive instances in the data',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "F1 score"?',
        'a' => 'The harmonic mean of precision and recall, providing a single metric to evaluate the performance of a classification model',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "ROC curve"?',
        'a' => 'A graphical plot that illustrates the diagnostic ability of a binary classifier by plotting the true positive rate against the false positive rate',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],[
        'field_id' => 4,
        
        'question' => 'What is "AUC-ROC"?',
        'a' => 'The Area Under the Receiver Operating Characteristic Curve, a performance measurement for classification problems',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "k-means clustering"?',
        'a' => 'A method of clustering that partitions data into k clusters, where each data point belongs to the cluster with the nearest mean',
        'b' => 'A method for feature scaling',
        'c' => 'A model for regression',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "dimensionality reduction"?',
        'a' => 'The process of reducing the number of features or dimensions in a dataset while preserving as much information as possible',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for classification',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "principal component analysis" (PCA)?',
        'a' => 'A technique for dimensionality reduction that transforms data into a set of orthogonal components based on variance',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for classification',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "t-distributed stochastic neighbor embedding" (t-SNE)?',
        'a' => 'A technique for dimensionality reduction that is particularly well-suited for visualizing high-dimensional data',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for classification',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "bias-variance tradeoff"?',
        'a' => 'The balance between the error due to bias (underfitting) and variance (overfitting) in a model',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for classification',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "ensemble learning"?',
        'a' => 'A method of combining multiple models to improve overall performance and robustness',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for classification',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "bagging"?',
        'a' => 'A technique in ensemble learning that involves training multiple models on different subsets of the data and combining their predictions',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "boosting"?',
        'a' => 'An ensemble learning technique that combines multiple weak models to create a strong model by focusing on correcting errors of previous models',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "AdaBoost"?',
        'a' => 'A boosting algorithm that combines multiple weak classifiers to create a strong classifier by weighting instances based on classification errors',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "gradient descent"?',
        'a' => 'An optimization algorithm used to minimize the loss function by iteratively adjusting model parameters in the direction of the steepest descent',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "learning rate"?',
        'a' => 'A hyperparameter that controls the step size during gradient descent optimization',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "stochastic gradient descent" (SGD)?',
        'a' => 'A variant of gradient descent that updates the model parameters using a randomly selected subset of data',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "overfitting"?',
        'a' => 'When a model learns the training data too well, including noise and outliers, leading to poor generalization to new data',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "underfitting"?',
        'a' => 'When a model is too simple to capture the underlying structure of the data, leading to poor performance on both training and test data',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "regularization"?',
        'a' => 'A technique used to prevent overfitting by adding a penalty to the model complexity',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "L1 regularization"?',
        'a' => 'A form of regularization that adds the absolute value of the coefficients as a penalty to the loss function, promoting sparsity',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "L2 regularization"?',
        'a' => 'A form of regularization that adds the squared value of the coefficients as a penalty to the loss function, discouraging large coefficients',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "support vector regression" (SVR)?',
        'a' => 'A regression technique that uses support vector machines to predict continuous values by finding a function that best fits the data',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "kernel trick"?',
        'a' => 'A technique used to enable linear classifiers to work in non-linear spaces by applying a kernel function to the data',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "gradient boosting"?',
        'a' => 'An ensemble learning method that builds models sequentially, each model correcting the errors of the previous ones by minimizing the loss function',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "XGBoost"?',
        'a' => 'An optimized implementation of gradient boosting that is known for its high performance and accuracy',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "LightGBM"?',
        'a' => 'A gradient boosting framework that uses tree-based learning algorithms and is designed for fast training and low memory usage',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "CatBoost"?',
        'a' => 'A gradient boosting library that handles categorical features efficiently and provides robust performance',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "GPT-3"?',
        'a' => 'A state-of-the-art language model developed by OpenAI, known for its ability to generate human-like text',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "reinforcement learning"?',
        'a' => 'A type of machine learning where an agent learns to make decisions by receiving rewards or penalties for actions taken',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "Q-learning"?',
        'a' => 'A reinforcement learning algorithm that seeks to find the best action to take given the current state by learning the Q-values for state-action pairs',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "deep reinforcement learning"?',
        'a' => 'A combination of deep learning and reinforcement learning, where neural networks are used to approximate the Q-values or policy functions',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "policy gradient"?',
        'a' => 'A family of reinforcement learning algorithms that optimize the policy directly by computing gradients of the expected reward',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "DQN" (Deep Q-Network)?',
        'a' => 'A deep learning model used to approximate the Q-values in reinforcement learning, proposed by DeepMind',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "PPO" (Proximal Policy Optimization)?',
        'a' => 'A popular reinforcement learning algorithm that balances exploration and exploitation while maintaining stability during training',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "A3C" (Asynchronous Advantage Actor-Critic)?',
        'a' => 'A reinforcement learning algorithm that uses multiple agents running in parallel to stabilize and speed up learning',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "meta-learning"?',
        'a' => 'A field of machine learning focused on developing models that can learn to learn, often improving learning efficiency and adaptability',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "few-shot learning"?',
        'a' => 'A machine learning approach where the model is trained to make predictions with only a few examples, often using meta-learning techniques',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "transfer learning"?',
        'a' => 'A machine learning approach where knowledge gained in one task is applied to a different but related task',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "self-supervised learning"?',
        'a' => 'A type of learning where the model learns to predict part of its input from other parts, often used in natural language processing and computer vision',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "semi-supervised learning"?',
        'a' => 'A learning approach that uses both labeled and unlabeled data to improve learning accuracy',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "zero-shot learning"?',
        'a' => 'A type of learning where the model can recognize objects or perform tasks it has never seen before, based on related knowledge',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "Bayesian optimization"?',
        'a' => 'A method for optimizing expensive-to-evaluate functions by building a probabilistic model and using it to select promising candidates for evaluation',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "data augmentation"?',
        'a' => 'A technique to artificially increase the size of a training dataset by creating modified versions of images in the dataset',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "dropout" in neural networks?',
        'a' => 'A regularization technique to prevent overfitting by randomly setting a fraction of input units to zero at each update during training',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "ensemble learning"?',
        'a' => 'A technique where multiple models are trained and combined to improve performance, typically using methods like bagging or boosting',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "bagging" in ensemble learning?',
        'a' => 'A method to improve the accuracy and stability of machine learning algorithms by training multiple versions of a model on different subsets of the data and averaging their predictions',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "boosting" in ensemble learning?',
        'a' => 'A technique to improve the performance of weak learners by training them sequentially, each one focusing more on the mistakes made by the previous learners',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "gradient boosting"?',
        'a' => 'A machine learning technique where new models are created to correct errors made by existing models, with each new model being trained to minimize the loss function of the overall model',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "AdaBoost"?',
        'a' => 'A boosting algorithm that combines multiple weak classifiers to create a strong classifier by focusing more on the misclassified instances',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "XGBoost"?',
        'a' => 'An optimized implementation of gradient boosting that is designed for performance and speed',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is a "confusion matrix"?',
        'a' => 'A table used to evaluate the performance of a classification model by comparing predicted and actual values',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "cross-validation"?',
        'a' => 'A technique for assessing how the results of a statistical analysis will generalize to an independent data set',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "precision" in the context of machine learning classification?',
        'a' => 'The ratio of true positive predictions to the total number of positive predictions made by the classifier',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "recall" in the context of machine learning classification?',
        'a' => 'The ratio of true positive predictions to the total number of actual positive instances',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "F1 score" in machine learning?',
        'a' => 'The harmonic mean of precision and recall, used as a single metric to evaluate a classifier\'s performance',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "ROC curve"?',
        'a' => 'A graphical representation of a classifier\'s performance by plotting the true positive rate against the false positive rate at various threshold settings',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "AUC - ROC"?',
        'a' => 'A single scalar value representing the area under the ROC curve, used as a measure of a classifier\'s overall performance',
        'b' => 'A method for feature scaling',
        'c' => 'A model for clustering data',
        'd' => 'A technique for dimensionality reduction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the primary purpose of a firewall?',
        'a' => 'To monitor and control incoming and outgoing network traffic based on predetermined security rules',
        'b' => 'To store data securely',
        'c' => 'To create a backup of data',
        'd' => 'To encrypt data during transmission',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "phishing"?',
        'a' => 'A technique used to trick users into providing sensitive information by pretending to be a legitimate entity',
        'b' => 'A method of securing data',
        'c' => 'A type of encryption algorithm',
        'd' => 'A network monitoring tool',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is a "DDoS attack"?',
        'a' => 'A distributed denial-of-service attack where multiple systems overwhelm a target, such as a server, with a flood of internet traffic',
        'b' => 'A method of data encryption',
        'c' => 'A secure way to transfer files',
        'd' => 'A technique for data compression',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "ransomware"?',
        'a' => 'Malicious software that threatens to publish the victim\'s data or perpetually block access to it unless a ransom is paid',
        'b' => 'A type of firewall',
        'c' => 'A secure communication protocol',
        'd' => 'A backup software',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "two-factor authentication" (2FA) provide?',
        'a' => 'An additional layer of security by requiring not only a password and username but also something that only the user has on them',
        'b' => 'A method of data compression',
        'c' => 'A type of firewall',
        'd' => 'A way to encrypt data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the primary goal of cybersecurity?',
        'a' => 'To protect systems, networks, and programs from digital attacks',
        'b' => 'To create data backups',
        'c' => 'To compress data',
        'd' => 'To monitor network traffic',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "encryption"?',
        'a' => 'The process of converting information or data into a code, especially to prevent unauthorized access',
        'b' => 'A type of firewall',
        'c' => 'A method of data compression',
        'd' => 'A way to backup data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is a "VPN"?',
        'a' => 'A Virtual Private Network that extends a private network across a public network, allowing users to send and receive data securely',
        'b' => 'A type of malware',
        'c' => 'A method of data compression',
        'd' => 'A type of firewall',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "social engineering"?',
        'a' => 'A technique that uses psychological manipulation to trick users into giving up confidential information',
        'b' => 'A method of data encryption',
        'c' => 'A type of firewall',
        'd' => 'A secure way to transfer files',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "malware"?',
        'a' => 'Malicious software designed to damage, disrupt, or gain unauthorized access to computer systems',
        'b' => 'A type of firewall',
        'c' => 'A secure communication protocol',
        'd' => 'A backup software',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ], [
        'field_id' => 4,
        
        'question' => 'What is "SQL injection"?',
        'a' => 'A code injection technique that might destroy your database',
        'b' => 'A method of data encryption',
        'c' => 'A secure way to transfer files',
        'd' => 'A type of malware',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is a "zero-day exploit"?',
        'a' => 'A vulnerability in software that is unknown to the vendor and is exploited by hackers before the vendor becomes aware and fixes it',
        'b' => 'A method of data compression',
        'c' => 'A type of firewall',
        'd' => 'A backup software',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "HTTPS" stand for?',
        'a' => 'HyperText Transfer Protocol Secure',
        'b' => 'High Transfer Protocol Secure',
        'c' => 'HyperText Transmission Protocol Secure',
        'd' => 'High Transfer Transmission Protocol Secure',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is a "botnet"?',
        'a' => 'A network of private computers infected with malicious software and controlled as a group without the owners\' knowledge',
        'b' => 'A method of data encryption',
        'c' => 'A secure way to transfer files',
        'd' => 'A type of firewall',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "penetration testing"?',
        'a' => 'A method of evaluating the security of a computer system or network by simulating an attack from malicious outsiders',
        'b' => 'A method of data compression',
        'c' => 'A type of firewall',
        'd' => 'A way to backup data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "multi-factor authentication" (MFA)?',
        'a' => 'A security system that requires more than one method of authentication from independent categories of credentials to verify the user\'s identity',
        'b' => 'A method of data encryption',
        'c' => 'A type of firewall',
        'd' => 'A way to backup data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "social engineering attack"?',
        'a' => 'An attack where an attacker uses human interaction (social skills) to obtain or compromise information about an organization or its computer systems',
        'b' => 'A method of data compression',
        'c' => 'A type of firewall',
        'd' => 'A secure communication protocol',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "spear phishing"?',
        'a' => 'An email or electronic communications scam targeted towards a specific individual, organization or business',
        'b' => 'A method of data encryption',
        'c' => 'A type of firewall',
        'd' => 'A backup software',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "hashing"?',
        'a' => 'The process of converting a given key into another value using a mathematical function',
        'b' => 'A method of data compression',
        'c' => 'A type of firewall',
        'd' => 'A secure communication protocol',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    
    [
        'field_id' => 4,
        
        'question' => 'What is "ransomware"?',
        'a' => 'A type of firewall',
        'b' => 'Malware that encrypts the victim’s data and demands payment for the decryption key',
        'c' => 'A method of data encryption',
        'd' => 'A secure communication protocol',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "firewall"?',
        'a' => 'A type of malware',
        'b' => 'A method of data compression',
        'c' => 'A secure communication protocol',
        'd' => 'A network security system that monitors and controls incoming and outgoing network traffic based on predetermined security rules',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "phishing"?',
        'a' => 'A method of trying to gather personal information using deceptive e-mails and websites',
        'b' => 'A type of firewall',
        'c' => 'A method of data encryption',
        'd' => 'A secure communication protocol',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "network sniffing"?',
        'a' => 'A method of data encryption',
        'b' => 'The practice of using a software tool to monitor and capture data being transmitted over a network',
        'c' => 'A type of firewall',
        'd' => 'A secure communication protocol',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "virtual private network" (VPN)?',
        'a' => 'A type of malware',
        'b' => 'A method of data compression',
        'c' => 'A data storage system',
        'd' => 'A service that allows you to connect to the internet via a server run by a VPN provider',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "DDoS attack"?',
        'a' => 'An attempt to make an online service unavailable by overwhelming it with traffic from multiple sources',
        'b' => 'A method of data encryption',
        'c' => 'A type of firewall',
        'd' => 'A secure communication protocol',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "encryption"?',
        'a' => 'The process of converting information or data into a code to prevent unauthorized access',
        'b' => 'A type of malware',
        'c' => 'A network protocol',
        'd' => 'A data storage system',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 4,
        
        'question' => 'What is "pharming"?',
        'a' => 'A cyber attack intended to redirect a website\'s traffic to another, fake site',
        'b' => 'A method of data encryption',
        'c' => 'A type of firewall',
        'd' => 'A backup software',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ], [
        'field_id' => 4,
        
        'question' => 'What is "SSL/TLS"?',
        'a' => 'Protocols designed to provide secure communication over a computer network',
        'b' => 'A type of firewall',
        'c' => 'A method of data compression',
        'd' => 'A secure communication protocol',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "cryptography"?',
        'a' => 'The practice and study of techniques for securing communication and data in the presence of adversaries',
        'b' => 'A type of firewall',
        'c' => 'A method of data compression',
        'd' => 'A secure communication protocol',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does "VPN" stand for?',
        'a' => 'Visual Private Network',
        'b' =>  'Virtual Private Network' ,
        'c' => 'Verified Private Network',
        'd' => 'Virtual Public Network',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "shoulder surfing"?',
        'a' => 'A technique used to obtain information such as personal identification numbers, passwords, and other confidential data by looking over the victim\'s shoulder',
        'b' => 'A method of data encryption',
        'c' => 'A type of firewall',
        'd' => 'A secure communication protocol',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "whaling"?',
        'a' =>'A type of firewall' ,
        'b' => 'A method of data encryption',
        'c' =>  'A type of phishing attack that targets high-profile employees such as the CEO or CFO',
        'd' => 'A backup software',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "data breach"?',
        'a' => 'A backup software', 
        'b' => 'A method of data encryption',
        'c' => 'A type of firewall',
        'd' => 'An incident where information is stolen or taken from a system without the knowledge or authorization of the system\'s owner',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "keylogging"?',
        'a' => 'The action of recording the keys struck on a keyboard, typically covertly, so that the person using the keyboard is unaware that their actions are being monitored',
        'b' => 'A method of data encryption',
        'c' => 'A type of firewall',
        'd' => 'A secure communication protocol',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "insider threat"?',
        'a' => 'A method of data encryption',
        'b' => 'A security risk that originates from within the targeted organization', 
        'c' => 'A type of firewall',
        'd' => 'A secure communication protocol',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],  [
        'field_id' => 4,
        
        'question' => 'What is "data breach"?',
        'a' => 'A method of data compression', 
        'b' => 'A type of encryption',
        'c' => 'An incident where information is stolen or taken from a system without the knowledge or authorization of the system\’s owner',
        'd' => 'A type of firewall',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "public key infrastructure" (PKI)?',
        'a' => 'A data storage system', 
        'b' => 'A type of malware',
        'c' => 'A network protocol',
        'd' => 'A set of roles, policies, and procedures needed to create, manage, distribute, use, store, and revoke digital certificates and manage public-key encryption',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "intrusion detection system" (IDS)?',
        'a' => 'A device or software application that monitors a network or systems for malicious activity or policy violations',
        'b' => 'A type of encryption',
        'c' => 'A method of data compression',
        'd' => 'A type of firewall',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "two-step verification"?',
        'a' => 'A method of data compression',
        'b' => 'A type of encryption',
        'c' => 'A method of confirming a user\’s claimed identity by utilizing a combination of two different components', 
        'd' => 'A type of firewall',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "Wi-Fi Protected Access" (WPA)?',
        'a' =>'A data storage system',
        'b' => 'A type of malware',
        'c' => 'A network protocol',
        'd' =>  'A security protocol designed to create secure wireless (Wi-Fi) networks' ,
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "cryptography"?',
        'a' => 'A data storage system',
        'b' => 'A type of malware',
        'c' => 'A network protocol',
        'd' =>  'The practice and study of techniques for secure communication in the presence of third parties',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "malvertising"?',
        'a' =>  'A method of data encryption',
        'b' =>  'The use of online advertising to spread malware',
        'c' => 'A type of firewall',
        'd' => 'A secure communication protocol',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is a "logic bomb"?',
        'a' => 'A piece of code intentionally inserted into a software system that will set off a malicious function when specified conditions are met',
        'b' => 'A type of encryption',
        'c' => 'A method of data compression',
        'd' => 'A type of firewall',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is a "honeypot"?',
        'a' => 'A network protocol',
        'b' => 'A type of malware' ,
        'c' =>  'A system intended to attract and trap attackers',
        'd' => 'A data storage system',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "cross-site scripting" (XSS)?',
        'a' => 'A secure communication protocol',
        'b' => 'A method of data encryption',
        'c' => 'A type of firewall',
        'd' => 'A security vulnerability that allows an attacker to inject malicious scripts into content from otherwise trusted websites',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ], [
        'field_id' => 4,
        
        'question' => 'Which of the following is a correct way to declare a function in JavaScript?',
        'a' => 'function myFunction() {}',
        'b' => 'def myFunction() {}',
        'c' => 'myFunction() => {}',
        'd' => 'function: myFunction() {}',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the purpose of the "import" statement in Python?',
        'a' => 'To import functions from a module',
        'b' => 'To create a new module',
        'c' => 'To export functions from a module',
        'd' => 'To declare a variable',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'In SQL, which keyword is used to delete data from a table?',
        'a' => 'REMOVE',
        'b' => 'DELETE',
        'c' => 'DROP',
        'd' => 'ERASE',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which method is used to create a new array by applying a function to each element of an array in JavaScript?',
        'a' => 'filter()',
        'b' => 'map()',
        'c' => 'reduce()',
        'd' => 'forEach()',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which keyword is used to handle exceptions in Java?',
        'a' => 'try',
        'b' => 'catch',
        'c' => 'throw',
        'd' => 'All of the above',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'In Python, which keyword is used to define a generator function?',
        'a' => 'yield',
        'b' => 'return',
        'c' => 'def',
        'd' => 'generator',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which method is used to convert a JSON string into a JavaScript object?',
        'a' => 'JSON.stringify()',
        'b' => 'JSON.parse()',
        'c' => 'JSON.convert()',
        'd' => 'JSON.toObject()',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does the "self" keyword represent in a Python class?',
        'a' => 'It refers to the class itself',
        'b' => 'It refers to the instance of the class',
        'c' => 'It refers to the parent class',
        'd' => 'It refers to a global variable',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is not a valid data type in JavaScript?',
        'a' => 'Number',
        'b' => 'String',
        'c' => 'Character',
        'd' => 'Boolean',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'In CSS, which property is used to change the text color of an element?',
        'a' => 'color',
        'b' => 'text-color',
        'c' => 'font-color',
        'd' => 'text-style',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "intrusion detection system" (IDS)?',
        'a' => 'A device or software application that monitors a network or systems for malicious activity or policy violations',
        'b' => 'A method of data compression',
        'c' => 'A type of firewall',
        'd' => 'A type of encryption',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "two-factor authentication"?',
        'a' => 'A type of firewall',
        'b' => 'A security process in which the user provides two different authentication factors to verify themselves',
        'c' => 'A method of data encryption',
        'd' => 'A secure communication protocol',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "social engineering"?',
        'a' => 'A type of encryption',
        'b' => 'A network security protocol',
        'c' => 'The use of deception to manipulate individuals into divulging confidential or personal information that may be used for fraudulent purposes',
        'd' => 'A method of data compression',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "malware"?',
        'a' => 'Software that is specifically designed to disrupt, damage, or gain unauthorized access to a computer system',
        'b' => 'A type of firewall',
        'c' => 'A method of data encryption',
        'd' => 'A secure communication protocol',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "spear phishing"?',
        'a' => 'A targeted attempt to steal sensitive information such as account credentials or financial information from a specific individual, often for malicious reasons, by masquerading as a trustworthy entity',
        'b' => 'A method of data encryption',
        'c' => 'A type of firewall',
        'd' => 'A secure communication protocol',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "public key infrastructure" (PKI)?',
        'a' => 'A network protocol',
        'b' => 'A data storage system',
        'c' => 'A set of roles, policies, and procedures needed to create, manage, distribute, use, store, and revoke digital certificates and manage public-key encryption',
        'd' => 'A type of malware',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "data breach"?',
        'a' => 'A type of firewall',
        'b' => 'A method of data compression',
        'c' => 'An incident where information is stolen or taken from a system without the knowledge or authorization of the system’s owner',
        'd' => 'A type of encryption',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "VPN"?',
        'a' => 'A type of malware',
        'b' => 'A secure communication protocol',
        'c' => 'A network security protocol',
        'd' => 'A service that allows you to connect to the internet via a server run by a VPN provider',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "DDoS attack"?',
        'a' => 'A method of data encryption',
        'b' => 'A type of firewall',
        'c' => 'A secure communication protocol',
        'd' => 'An attempt to make an online service unavailable by overwhelming it with traffic from multiple sources',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "encryption"?',
        'a' => 'A method of data compression',
        'b' => 'A type of firewall',
        'c' => 'A secure communication protocol',
        'd' => 'The process of converting information or data into a code to prevent unauthorized access',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    

    [
        'field_id' => 4,
        
        'question' => 'What is "zero-day exploit"?',
        'a' => 'An exploit that occurs on a day when the software vendor releases a fix',
        'b' => 'A security vulnerability that is exploited before the vendor is aware and has a chance to address it',
        'c' => 'A method of data encryption',
        'd' => 'A type of firewall',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "multi-factor authentication" (MFA)?',
        'a' => 'A network security protocol',
        'b' => 'A method of authentication that requires more than one form of verification',
        'c' => 'A type of malware',
        'd' => 'A method of data encryption',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "SQL injection"?',
        'a' => 'A type of encryption',
        'b' => 'A method of data compression',
        'c' => 'A security vulnerability that allows an attacker to interfere with the queries that an application makes to its database',
        'd' => 'A type of firewall',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "brute force attack"?',
        'a' => 'A method of data compression',
        'b' => 'A type of encryption',
        'c' => 'A type of attack where an attacker attempts to gain access to a system by trying many passwords or passphrases in a short period',
        'd' => 'A secure communication protocol',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "ethical hacking"?',
        'a' => 'The practice of intentionally causing harm to a network to improve its security',
        'b' => 'The practice of hacking with permission to find and fix vulnerabilities before malicious hackers can exploit them',
        'c' => 'A type of malware',
        'd' => 'A network security protocol',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],  
    [
        'field_id' => 4,
        
        'question' => 'What is "malware"?',
        'a' => 'Software designed to disrupt, damage, or gain unauthorized access to a computer system',
        'b' => 'A type of firewall',
        'c' => 'A method of data compression',
        'd' => 'A network security protocol',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "data exfiltration"?',
        'a' => 'The unauthorized transfer of data from a computer or network',
        'b' => 'A type of encryption',
        'c' => 'A secure communication protocol',
        'd' => 'A type of firewall',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "network segmentation"?',
        'a' => 'The practice of splitting a network into smaller, isolated segments to improve security',
        'b' => 'A method of data compression',
        'c' => 'A type of malware',
        'd' => 'A secure communication protocol',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "patch management"?',
        'a' => 'The process of managing updates to software and systems to fix vulnerabilities',
        'b' => 'A type of encryption',
        'c' => 'A network security protocol',
        'd' => 'A method of data compression',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is "data masking"?',
        'a' => 'The process of obscuring specific data within a database to protect it',
        'b' => 'A method of data compression',
        'c' => 'A type of malware',
        'd' => 'A secure communication protocol',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which CSS property is used to change the background color of an element?',
        'a' => 'color',
        'b' => 'bgcolor',
        'c' => 'background-color',
        'd' => 'background',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'In SQL, which keyword is used to retrieve unique records?',
        'a' => 'DISTINCT',
        'b' => 'UNIQUE',
        'c' => 'DIFFERENT',
        'd' => 'SELECT',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which method is used to combine two or more arrays in JavaScript?',
        'a' => 'merge()',
        'b' => 'concat()',
        'c' => 'combine()',
        'd' => 'append()',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is not a valid loop in Python?',
        'a' => 'for',
        'b' => 'while',
        'c' => 'do-while',
        'd' => 'foreach',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the value of the expression 3 + 4 * 2 / (1 - 5) ** 2 in Python?',
        'a' => '3.5',
        'b' => '3.0',
        'c' => '2.5',
        'd' => '2.0',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does the "extends" keyword do in Java?',
        'a' => 'Defines an interface',
        'b' => 'Creates an object',
        'c' => 'Inherits a class',
        'd' => 'Imports a package',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is not a primitive data type in Java?',
        'a' => 'int',
        'b' => 'float',
        'c' => 'String',
        'd' => 'boolean',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the purpose of the "super" keyword in Java?',
        'a' => 'To create a new class',
        'b' => 'To call the parent class constructor',
        'c' => 'To define an interface',
        'd' => 'To override a method',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which method is used to find the length of a string in JavaScript?',
        'a' => 'length()',
        'b' => 'size()',
        'c' => 'count()',
        'd' => 'length',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the output of the following Python code: print("Hello" + "World")?',
        'a' => 'HelloWorld',
        'b' => 'Hello World',
        'c' => 'Hello+World',
        'd' => 'HelloWorld',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ]
    ,
    [
        'field_id' => 4,
        
        'question' => 'Which CSS property is used to change the background color of an element?',
        'a' => 'color',
        'b' => 'bgcolor',
        'c' => 'background-color',
        'd' => 'background',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'In SQL, which keyword is used to retrieve unique records?',
        'a' => 'DISTINCT',
        'b' => 'UNIQUE',
        'c' => 'DIFFERENT',
        'd' => 'SELECT',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which method is used to combine two or more arrays in JavaScript?',
        'a' => 'merge()',
        'b' => 'concat()',
        'c' => 'combine()',
        'd' => 'append()',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is not a valid loop in Python?',
        'a' => 'for',
        'b' => 'while',
        'c' => 'do-while',
        'd' => 'foreach',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the value of the expression 3 + 4 * 2 / (1 - 5) ** 2 in Python?',
        'a' => '3.5',
        'b' => '3.0',
        'c' => '2.5',
        'd' => '2.0',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What does the "extends" keyword do in Java?',
        'a' => 'Defines an interface',
        'b' => 'Creates an object',
        'c' => 'Inherits a class',
        'd' => 'Imports a package',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which of the following is not a primitive data type in Java?',
        'a' => 'int',
        'b' => 'float',
        'c' => 'String',
        'd' => 'boolean',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the purpose of the "super" keyword in Java?',
        'a' => 'To create a new class',
        'b' => 'To call the parent class constructor',
        'c' => 'To define an interface',
        'd' => 'To override a method',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'Which method is used to find the length of a string in JavaScript?',
        'a' => 'length()',
        'b' => 'size()',
        'c' => 'count()',
        'd' => 'length',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 4,
        
        'question' => 'What is the output of the following Python code: print("Hello" + "World")?',
        'a' => 'HelloWorld',
        'b' => 'Hello World',
        'c' => 'Hello+World',
        'd' => 'HelloWorld',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],[
        'field_id' => 5,
        
        'question' => 'Which type of foundation is typically used for heavy loads and tall buildings?',
        'a' => 'Strip foundation',
        'b' => 'Raft foundation',
        'c' => 'Pile foundation',
        'd' => 'Pad foundation',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the primary purpose of a stormwater management system in urban areas?',
        'a' => 'To increase water supply',
        'b' => 'To manage runoff and prevent flooding',
        'c' => 'To irrigate agricultural fields',
        'd' => 'To provide drinking water',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the main advantage of using prestressed concrete?',
        'a' => 'Lower cost of materials',
        'b' => 'Increased tensile strength',
        'c' => 'Improved aesthetic appeal',
        'd' => 'Ease of construction',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the primary function of a sedimentation tank in wastewater treatment?',
        'a' => 'To aerate the water',
        'b' => 'To remove solid particles',
        'c' => 'To neutralize pH levels',
        'd' => 'To add chemicals for disinfection',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'Which of the following is a common non-destructive testing method for concrete structures?',
        'a' => 'Core drilling',
        'b' => 'Ultrasonic testing',
        'c' => 'Chemical analysis',
        'd' => 'Compression test',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the purpose of a dam in civil engineering?',
        'a' => 'To support building structures',
        'b' => 'To store and control water flow',
        'c' => 'To create roadways',
        'd' => 'To provide a passage for vehicles',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'Which soil classification system is widely used in civil engineering?',
        'a' => 'Unified Soil Classification System (USCS)',
        'b' => 'World Reference Base for Soil Resources (WRB)',
        'c' => 'Soil Taxonomy',
        'd' => 'Soil Conservation Service (SCS)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the purpose of a buttress dam?',
        'a' => 'To support building structures',
        'b' => 'To prevent soil erosion',
        'c' => 'To resist the horizontal pressure of water',
        'd' => 'To create roadways',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'Which of the following materials is typically used in the construction of flexible pavements?',
        'a' => 'Concrete',
        'b' => 'Steel',
        'c' => 'Wood',
        'd' => 'Asphalt',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the main function of a weir in a river or stream?',
        'a' => 'To support bridge structures',
        'b' => 'To control and measure water flow',
        'c' => 'To provide habitat for fish',
        'd' => 'To prevent flooding',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ], [
        'field_id' => 5,
        
        'question' => 'What is the primary purpose of a sedimentation basin in water treatment plants?',
        'a' => 'To increase oxygen levels',
        'b' => 'To remove large particles from water',
        'c' => 'To disinfect water',
        'd' => 'To balance pH levels',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'Which type of load is considered in the design of earthquake-resistant structures?',
        'a' => 'Static load',
        'b' => 'Dynamic load',
        'c' => 'Live load',
        'd' => 'Dead load',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the main advantage of using fiber-reinforced polymer (FRP) in construction?',
        'a' => 'Low cost',
        'b' => 'High strength-to-weight ratio',
        'c' => 'Ease of maintenance',
        'd' => 'Resistance to fire',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the purpose of using a retaining wall?',
        'a' => 'To enhance the aesthetic appeal',
        'b' => 'To resist the lateral pressure of soil',
        'c' => 'To support vertical loads',
        'd' => 'To reduce noise pollution',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the primary purpose of a cofferdam in construction?',
        'a' => 'To divert water flow',
        'b' => 'To create a dry work area',
        'c' => 'To support excavation activities',
        'd' => 'To stabilize soil',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'Which of the following is a key characteristic of high-performance concrete?',
        'a' => 'High water content',
        'b' => 'Low compressive strength',
        'c' => 'High durability',
        'd' => 'Low cost',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the main advantage of using precast concrete in construction?',
        'a' => 'Higher cost',
        'b' => 'Increased construction speed',
        'c' => 'Lower durability',
        'd' => 'Reduced strength',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the function of an expansion joint in construction?',
        'a' => 'To enhance aesthetic appeal',
        'b' => 'To allow for thermal movement',
        'c' => 'To increase structural strength',
        'd' => 'To support additional loads',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the primary purpose of a soil compaction test?',
        'a' => 'To determine soil color',
        'b' => 'To measure soil moisture content',
        'c' => 'To assess soil density and strength',
        'd' => 'To evaluate soil pH levels',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'Which type of surveying equipment is used to measure angles in horizontal and vertical planes?',
        'a' => 'Level',
        'b' => 'Theodolite',
        'c' => 'Tachometer',
        'd' => 'Compass',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the main purpose of a bridge abutment?',
        'a' => 'To support the vertical loads of the bridge',
        'b' => 'To prevent soil erosion',
        'c' => 'To provide a foundation for bridge piers',
        'd' => 'To connect the bridge to the approach embankment',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'Which test is commonly used to determine the compressive strength of concrete?',
        'a' => 'Tensile test',
        'b' => 'Slump test',
        'c' => 'Compression test',
        'd' => 'Flexural test',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the function of a gabion in civil engineering?',
        'a' => 'To support building structures',
        'b' => 'To provide a drainage system',
        'c' => 'To prevent soil erosion',
        'd' => 'To create a foundation',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'Which of the following is a key component of asphalt concrete?',
        'a' => 'Cement',
        'b' => 'Aggregate',
        'c' => 'Steel fibers',
        'd' => 'Lime',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the primary function of a pile cap in foundation construction?',
        'a' => 'To resist tensile forces',
        'b' => 'To distribute loads from the superstructure to the piles',
        'c' => 'To provide lateral support',
        'd' => 'To prevent water infiltration',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'Which type of concrete is used for constructing structures exposed to high temperatures?',
        'a' => 'High-strength concrete',
        'b' => 'Reinforced concrete',
        'c' => 'Lightweight concrete',
        'd' => 'Heat-resistant concrete',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the purpose of a dowel bar in concrete pavements?',
        'a' => 'To provide drainage',
        'b' => 'To reinforce the concrete',
        'c' => 'To transfer loads across joints',
        'd' => 'To support vertical loads',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the main function of a diaphragm wall in construction?',
        'a' => 'To support building loads',
        'b' => 'To act as a retaining wall',
        'c' => 'To provide thermal insulation',
        'd' => 'To reduce noise pollution',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'Which of the following is used to measure the density of asphalt concrete?',
        'a' => 'Core sample test',
        'b' => 'Nuclear density gauge',
        'c' => 'Compression test',
        'd' => 'Flexural test',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the primary purpose of a caisson in foundation construction?',
        'a' => 'To provide lateral support',
        'b' => 'To create a dry work environment underwater',
        'c' => 'To resist tensile forces',
        'd' => 'To prevent soil erosion',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the purpose of a geotextile fabric in civil engineering projects?',
        'a' => 'To provide thermal insulation',
        'b' => 'To act as a waterproof barrier',
        'c' => 'To stabilize soil and prevent erosion',
        'd' => 'To reduce noise pollution',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'Which type of foundation is typically used in areas with poor soil conditions?',
        'a' => 'Strip foundation',
        'b' => 'Raft foundation',
        'c' => 'Pad foundation',
        'd' => 'Pile foundation',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the main advantage of using prestressed concrete in construction?',
        'a' => 'Lower cost',
        'b' => 'Increased tensile strength',
        'c' => 'Ease of maintenance',
        'd' => 'Better thermal insulation',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the function of a buttress in retaining wall design?',
        'a' => 'To support vertical loads',
        'b' => 'To provide lateral support and stability',
        'c' => 'To enhance aesthetic appeal',
        'd' => 'To reduce noise pollution',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'Which material is commonly used for the construction of sewer pipes?',
        'a' => 'Steel',
        'b' => 'PVC',
        'c' => 'Wood',
        'd' => 'Glass',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the purpose of a culvert in civil engineering?',
        'a' => 'To support bridge structures',
        'b' => 'To allow water to flow under a road or railway',
        'c' => 'To provide thermal insulation',
        'd' => 'To reduce noise pollution',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the primary function of a riprap in erosion control?',
        'a' => 'To provide a smooth surface for vehicles',
        'b' => 'To absorb and dissipate wave energy',
        'c' => 'To enhance aesthetic appeal',
        'd' => 'To support vertical loads',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the purpose of using a diaphragm in structural engineering?',
        'a' => 'To increase thermal resistance',
        'b' => 'To provide lateral stability to a structure',
        'c' => 'To improve aesthetic design',
        'd' => 'To reduce sound transmission',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'Which test is used to determine the workability of fresh concrete?',
        'a' => 'Compression test',
        'b' => 'Slump test',
        'c' => 'Flexural test',
        'd' => 'Tensile test',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the main purpose of a weir in hydraulic engineering?',
        'a' => 'To provide lateral support',
        'b' => 'To measure and control water flow',
        'c' => 'To stabilize soil',
        'd' => 'To reduce thermal conductivity',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ], [
        'field_id' => 5,
        
        'question' => 'What is the function of a parapet wall on a building?',
        'a' => 'To support vertical loads',
        'b' => 'To provide lateral stability',
        'c' => 'To prevent water ingress',
        'd' => 'To protect the edge of the roof and prevent falls',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'Which type of survey is used to measure land elevations and contours?',
        'a' => 'Topographic survey',
        'b' => 'Boundary survey',
        'c' => 'Construction survey',
        'd' => 'Hydrographic survey',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the main purpose of a retaining wall?',
        'a' => 'To support building loads',
        'b' => 'To prevent soil erosion and retain soil at different levels',
        'c' => 'To enhance aesthetic appeal',
        'd' => 'To provide thermal insulation',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'Which material is commonly used for the construction of railway tracks?',
        'a' => 'Aluminum',
        'b' => 'PVC',
        'c' => 'Steel',
        'd' => 'Concrete',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the primary function of a bollard in civil engineering?',
        'a' => 'To support vertical loads',
        'b' => 'To provide a visual guide',
        'c' => 'To restrict or direct vehicle traffic',
        'd' => 'To enhance aesthetic appeal',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'Which of the following is a key characteristic of self-compacting concrete?',
        'a' => 'High tensile strength',
        'b' => 'High fluidity and ability to flow under its own weight',
        'c' => 'Low thermal conductivity',
        'd' => 'High resistance to fire',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the purpose of a cantilever in structural engineering?',
        'a' => 'To provide a waterproof barrier',
        'b' => 'To support loads that are distributed along its length',
        'c' => 'To enhance the aesthetic appeal of a structure',
        'd' => 'To measure and control water flow',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'Which construction method is used for tunneling in soft ground?',
        'a' => 'Drill and blast method',
        'b' => 'Cut and cover method',
        'c' => 'Slurry wall method',
        'd' => 'Open trench method',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the main function of a diaphragm in a concrete structure?',
        'a' => 'To provide vertical support',
        'b' => 'To distribute lateral loads',
        'c' => 'To enhance thermal insulation',
        'd' => 'To reduce noise transmission',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the purpose of a camber in road construction?',
        'a' => 'To support heavy loads',
        'b' => 'To provide lateral stability',
        'c' => 'To ensure water drainage from the road surface',
        'd' => 'To enhance aesthetic appeal',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the function of a shear wall in a building structure?',
        'a' => 'To support vertical loads',
        'b' => 'To provide lateral resistance to wind and seismic forces',
        'c' => 'To enhance thermal insulation',
        'd' => 'To reduce sound transmission',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the primary use of a theodolite in surveying?',
        'a' => 'To measure vertical distances',
        'b' => 'To measure horizontal and vertical angles',
        'c' => 'To measure soil density',
        'd' => 'To measure water flow',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'Which type of cement is best suited for use in marine environments?',
        'a' => 'Ordinary Portland Cement',
        'b' => 'Rapid Hardening Cement',
        'c' => 'Sulphate Resisting Cement',
        'd' => 'Low Heat Cement',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the purpose of a cofferdam in construction?',
        'a' => 'To support vertical loads',
        'b' => 'To provide thermal insulation',
        'c' => 'To create a dry work environment in waterlogged areas',
        'd' => 'To reduce sound transmission',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the main advantage of using reinforced concrete over plain concrete?',
        'a' => 'Lower cost',
        'b' => 'Higher tensile strength',
        'c' => 'Better aesthetic appeal',
        'd' => 'Higher thermal conductivity',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'Which type of bridge is most suitable for long spans?',
        'a' => 'Beam bridge',
        'b' => 'Arch bridge',
        'c' => 'Suspension bridge',
        'd' => 'Truss bridge',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the purpose of a gabion in civil engineering?',
        'a' => 'To provide vertical support',
        'b' => 'To reduce thermal conductivity',
        'c' => 'To control soil erosion and stabilize slopes',
        'd' => 'To enhance sound insulation',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the main function of a caisson in underwater construction?',
        'a' => 'To support vertical loads',
        'b' => 'To provide lateral stability',
        'c' => 'To create a dry work environment under water',
        'd' => 'To enhance aesthetic appeal',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'Which type of soil is best for the construction of an earthen dam?',
        'a' => 'Sandy soil',
        'b' => 'Clayey soil',
        'c' => 'Gravelly soil',
        'd' => 'Silty soil',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
        
        'question' => 'What is the purpose of a slurry wall in deep excavation projects?',
        'a' => 'To support vertical loads',
        'b' => 'To provide thermal insulation',
        'c' => 'To prevent groundwater seepage and soil collapse',
        'd' => 'To reduce noise pollution',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],













            ];

            DB::table('questions')->insert($questions);
        
    }
}
