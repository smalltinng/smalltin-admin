<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MathematicsSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
   static public function run(): void
    {
        $questions = [

    [
        'field_id' => 6,
        
        'question' => 'What is the solution to the equation x^2 - 5x + 6 = 0?',
        'a' => 'x = 2 or x = 3',
        'b' => 'x = 1 or x = 6',
        'c' => 'x = -2 or x = -3',
        'd' => 'x = 0 or x = 6',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the value of x in the equation 2x + 3 = 7?',
        'a' => 'x = 2',
        'b' => 'x = 3',
        'c' => 'x = 4',
        'd' => 'x = 5',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Simplify the expression (3x^2 - 2x) - (x^2 + 4x).',
        'a' => '2x^2 - 6x',
        'b' => '4x^2 - 6x',
        'c' => '2x^2 - 2x',
        'd' => '2x^2 + 2x',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the factored form of x^2 - 9?',
        'a' => '(x - 3)(x + 3)',
        'b' => '(x - 1)(x + 9)',
        'c' => '(x + 1)(x - 9)',
        'd' => '(x + 3)(x + 3)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Solve for y in the equation 4y - 7 = 9.',
        'a' => 'y = 4',
        'b' => 'y = 5',
        'c' => 'y = 6',
        'd' => 'y = 7',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the solution set for the inequality 2x - 3 > 5?',
        'a' => 'x > 4',
        'b' => 'x > 3',
        'c' => 'x < 4',
        'd' => 'x < 3',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'If f(x) = 2x + 1, what is f(3)?',
        'a' => '7',
        'b' => '8',
        'c' => '9',
        'd' => '10',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the slope of the line given by the equation 4x - 2y = 8?',
        'a' => '2',
        'b' => '-2',
        'c' => '4',
        'd' => '-4',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Solve the equation 3(x - 2) = 12.',
        'a' => 'x = 6',
        'b' => 'x = 8',
        'c' => 'x = 10',
        'd' => 'x = 4',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the quadratic formula used to solve ax^2 + bx + c = 0?',
        'a' => 'x = (-b ± √(b^2 - 4ac)) / (2a)',
        'b' => 'x = (-b ± √(b^2 + 4ac)) / (2a)',
        'c' => 'x = (-a ± √(b^2 - 4ac)) / (2b)',
        'd' => 'x = (-b ± √(4ac - b^2)) / (2a)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the solution to the equation 3x - 4 = 2x + 5?',
        'a' => 'x = 9',
        'b' => 'x = 5',
        'c' => 'x = 4',
        'd' => 'x = 1',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which of the following is a factor of x^2 - 4?',
        'a' => '(x - 2)(x + 2)',
        'b' => '(x - 1)(x + 4)',
        'c' => '(x + 1)(x - 4)',
        'd' => '(x - 2)(x - 2)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Simplify the expression 5(x - 3) + 2x.',
        'a' => '7x - 15',
        'b' => '7x - 5',
        'c' => '5x - 9',
        'd' => '5x - 15',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the value of x in the equation 2x/3 = 4?',
        'a' => 'x = 6',
        'b' => 'x = 8',
        'c' => 'x = 12',
        'd' => 'x = 16',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the vertex form of a quadratic function?',
        'a' => 'y = a(x - h)^2 + k',
        'b' => 'y = ax^2 + bx + c',
        'c' => 'y = a(x + h)^2 - k',
        'd' => 'y = a(x - h)^2 - k',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the result of the polynomial division of x^3 - 4x by x - 2?',
        'a' => 'x^2 + 2x - 2',
        'b' => 'x^2 - 2x - 2',
        'c' => 'x^2 - 2x + 2',
        'd' => 'x^2 + 2x + 2',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the common factor of 6x^2 - 9x?',
        'a' => '3x',
        'b' => '2x',
        'c' => '3',
        'd' => '6',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the sum of the roots of the quadratic equation x^2 - 7x + 10 = 0?',
        'a' => '7',
        'b' => '10',
        'c' => '5',
        'd' => '0',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the product of the roots of the equation x^2 - 4x + 4 = 0?',
        'a' => '4',
        'b' => '2',
        'c' => '8',
        'd' => '16',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'If 2x + 3 = 7y, what is x in terms of y?',
        'a' => 'x = 7y - 3',
        'b' => 'x = (7y - 3)/2',
        'c' => 'x = 3 - 7y',
        'd' => 'x = 3 + 7y',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the simplified form of the expression (x^2 - 1)/(x - 1)?',
        'a' => 'x + 1',
        'b' => 'x - 1',
        'c' => 'x^2 - 1',
        'd' => '1',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the solution to the equation 5x - 3 = 2x + 9?',
        'a' => 'x = 4',
        'b' => 'x = 6',
        'c' => 'x = 7',
        'd' => 'x = 5',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which of the following is a solution to the equation x^2 - 16 = 0?',
        'a' => 'x = ±4',
        'b' => 'x = ±2',
        'c' => 'x = ±8',
        'd' => 'x = ±5',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Simplify the expression 4(x + 2) - 3(x - 1).',
        'a' => 'x + 11',
        'b' => 'x + 10',
        'c' => 'x + 7',
        'd' => 'x + 8',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the value of x in the equation 5x - 4 = 6x + 1?',
        'a' => 'x = -5',
        'b' => 'x = -1',
        'c' => 'x = 5',
        'd' => 'x = -2',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the vertex of the parabola given by y = (x - 2)^2 + 3?',
        'a' => '(2, 3)',
        'b' => '(-2, -3)',
        'c' => '(2, -3)',
        'd' => '(-2, 3)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the product of the roots of the quadratic equation x^2 - 8x + 12 = 0?',
        'a' => '12',
        'b' => '8',
        'c' => '6',
        'd' => '4',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the simplified form of (2x^2 + 4x)/(2x)?',
        'a' => 'x + 2',
        'b' => 'x + 1',
        'c' => 'x - 2',
        'd' => '2x + 4',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        'question' => 'What is the common factor of 9x^2 - 6x?',
        'a' => '3x',
        'b' => '3',
        'c' => 'x',
        'd' => '9',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the solution to the equation 4x/5 = 2?',
        'a' => 'x = 5',
        'b' => 'x = 8',
        'c' => 'x = 4',
        'd' => 'x = 6',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'If f(x) = 3x^2 - x + 2, what is f(2)?',
        'a' => '8',
        'b' => '10',
        'c' => '12',
        'd' => '6',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the simplified form of (x^2 - 9)/(x - 3)?',
        'a' => 'x + 3',
        'b' => 'x - 3',
        'c' => 'x + 9',
        'd' => 'x - 9',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'Solve for x: 6x - 5 = 7x + 2.',
        'a' => 'x = -7',
        'b' => 'x = 5',
        'c' => 'x = -3',
        'd' => 'x = 7',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the solution set of the inequality x/3 ≤ 2?',
        'a' => 'x ≤ 6',
        'b' => 'x ≥ 6',
        'c' => 'x ≤ 3',
        'd' => 'x ≥ 3',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the result of the expression 7 - (3 + x) when x = 4?',
        'a' => '0',
        'b' => '2',
        'c' => '-2',
        'd' => '-4',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the factored form of x^2 + 2x - 15?',
        'a' => '(x + 5)(x - 3)',
        'b' => '(x - 5)(x + 3)',
        'c' => '(x + 3)(x + 5)',
        'd' => '(x - 3)(x - 5)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the inverse of the function f(x) = 3x + 2?',
        'a' => 'f^(-1)(x) = (x - 2)/3',
        'b' => 'f^(-1)(x) = 3(x - 2)',
        'c' => 'f^(-1)(x) = (x + 2)/3',
        'd' => 'f^(-1)(x) = (x - 3)/2',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the solution to the equation 7x + 4 = 3(x + 2)?',
        'a' => 'x = -2',
        'b' => 'x = 2',
        'c' => 'x = -4',
        'd' => 'x = 4',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the coefficient of x in the expansion of (2x + 3)(x - 5)?',
        'a' => '2',
        'b' => '1',
        'c' => '-7',
        'd' => '-2',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Simplify the expression (x^2 + 2x)/(x + 2).',
        'a' => 'x',
        'b' => 'x + 2',
        'c' => 'x - 2',
        'd' => 'x^2',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the solution to the equation 8 - 2(x + 3) = 0?',
        'a' => 'x = -2',
        'b' => 'x = -4',
        'c' => 'x = 2',
        'd' => 'x = 4',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the sum of the roots of the polynomial x^2 - 3x - 4?',
        'a' => '3',
        'b' => '-4',
        'c' => '-3',
        'd' => '4',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the solution to the equation x^2 + 6x + 9 = 0?',
        'a' => 'x = -3',
        'b' => 'x = 3',
        'c' => 'x = -9',
        'd' => 'x = 9',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the simplified form of (3x^2 - x - 4)/(x - 1)?',
        'a' => '3x + 3',
        'b' => '3x - 4',
        'c' => '3x + 4',
        'd' => '3x - 3',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the value of x in the equation 3x + 7 = 16?',
        'a' => 'x = 3',
        'b' => 'x = 5',
        'c' => 'x = 4',
        'd' => 'x = 2',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the factored form of x^2 - 9?',
        'a' => '(x - 3)(x + 3)',
        'b' => '(x - 1)(x + 9)',
        'c' => '(x - 6)(x + 6)',
        'd' => '(x - 4)(x + 4)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the solution to the equation 2x^2 - 8 = 0?',
        'a' => 'x = ±2',
        'b' => 'x = ±4',
        'c' => 'x = ±1',
        'd' => 'x = ±3',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Solve for x: x/2 - 4 = 6.',
        'a' => 'x = 20',
        'b' => 'x = 28',
        'c' => 'x = 12',
        'd' => 'x = 22',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the solution to the inequality 5x + 3 > 8?',
        'a' => 'x > 1',
        'b' => 'x > 2',
        'c' => 'x > 0',
        'd' => 'x > 5',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the value of y if y - 3 = 2y + 4?',
        'a' => 'y = -7',
        'b' => 'y = 7',
        'c' => 'y = -4',
        'd' => 'y = 4',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the result of 2(x + 5) - 3x?',
        'a' => '-x + 10',
        'b' => '-x + 5',
        'c' => '-x + 15',
        'd' => '-x + 20',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the solution to the equation 4(x - 1) = 2x + 6?',
        'a' => 'x = 2',
        'b' => 'x = 3',
        'c' => 'x = 4',
        'd' => 'x = 5',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the vertex form of the quadratic function y = x^2 - 6x + 5?',
        'a' => 'y = (x - 3)^2 - 4',
        'b' => 'y = (x - 2)^2 - 1',
        'c' => 'y = (x - 5)^2 - 10',
        'd' => 'y = (x + 3)^2 - 4',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the simplified form of (2x^2 - x + 1) - (x^2 + 2x - 3)?',
        'a' => 'x^2 - 3x + 4',
        'b' => 'x^2 - 3x - 2',
        'c' => 'x^2 + x - 2',
        'd' => 'x^2 - x + 4',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'Solve for x: 5x - 3 = 2x + 12.',
        'a' => 'x = 5',
        'b' => 'x = 6',
        'c' => 'x = 15',
        'd' => 'x = 9',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the result of the expression 4(x - 2) + 3x?',
        'a' => '7x - 10',
        'b' => '7x - 6',
        'c' => '7x - 8',
        'd' => '7x - 4',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the value of x if 3(x - 2) = 2x + 1?',
        'a' => 'x = 1',
        'b' => 'x = 7',
        'c' => 'x = 2',
        'd' => 'x = 3',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the simplified form of (x^2 + 4x + 4)/(x + 2)?',
        'a' => 'x + 4',
        'b' => 'x',
        'c' => 'x + 2',
        'd' => 'x + 1',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the product of (x + 1) and (x - 3)?',
        'a' => 'x^2 - 2x + 3',
        'b' => 'x^2 - 3x - 1',
        'c' => 'x^2 - 2x - 3',
        'd' => 'x^2 + 2x - 3',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the solution to the equation 2x^2 + x - 3 = 0?',
        'a' => 'x = 3, x = -1',
        'b' => 'x = 1, x = -3/2',
        'c' => 'x = -3, x = 1',
        'd' => 'x = -1, x = 3/2',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the coefficient of x in the expansion of 3(x + 4) - 2(x - 1)?',
        'a' => '2',
        'b' => '5',
        'c' => '4',
        'd' => '1',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the result of (x^2 - 4)/(x + 2)?',
        'a' => 'x + 2',
        'b' => 'x - 2',
        'c' => 'x + 4',
        'd' => 'x - 4',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the sum of the roots of x^2 - 8x + 15?',
        'a' => '7',
        'b' => '4',
        'c' => '8',
        'd' => '15',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the solution to the equation 5 - 2x = 1?',
        'a' => 'x = -2',
        'b' => 'x = 3',
        'c' => 'x = 5',
        'd' => 'x = 2',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Solve for x: 7x + 2 = 3x + 18.',
        'a' => 'x = 2',
        'b' => 'x = 4',
        'c' => 'x = 5',
        'd' => 'x = 6',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the solution of the equation 4x - 2 = 2x + 10?',
        'a' => 'x = 5',
        'b' => 'x = 7',
        'c' => 'x = 6',
        'd' => 'x = 8',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],




    [
        'field_id' => 6,
        
        'question' => 'Solve for x: x/4 + 3 = 5.',
        'a' => 'x = 12',
        'b' => 'x = 8',
        'c' => 'x = 10',
        'd' => 'x = 16',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the result of 2(x + 3) - 4?',
        'a' => '2x + 2',
        'b' => '2x + 6',
        'c' => '2x + 8',
        'd' => '2x + 4',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the result of (3x^2 - x + 2) - (x^2 + x - 1)?',
        'a' => '2x^2 - 3x + 3',
        'b' => '2x^2 - 2x + 1',
        'c' => '2x^2 - 2x + 3',
        'd' => '2x^2 - 3x + 1',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the result of 5(x - 1) + 2(x + 3)?',
        'a' => '7x + 10',
        'b' => '7x + 1',
        'c' => '7x + 12',
        'd' => '7x + 8',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Solve for x: 6x + 5 = 17.',
        'a' => 'x = 2',
        'b' => 'x = 3',
        'c' => 'x = 4',
        'd' => 'x = 5',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the solution to the equation x^2 - 6x + 9 = 0?',
        'a' => 'x = 4',
        'b' => 'x = 3',
        'c' => 'x = 6',
        'd' => 'x = 9',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the value of x in the equation x^2 - 1 = 0?',
        'a' => 'x = ±2',
        'b' => 'x = ±1',
        'c' => 'x = 1',
        'd' => 'x = -1',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the result of (x + 5) - (2x - 3)?',
        'a' => '-x + 8',
        'b' => 'x + 8',
        'c' => '-x + 10',
        'd' => 'x + 5',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the expanded form of (x + 2)^2?',
        'a' => 'x^2 + 4x + 4',
        'b' => 'x^2 + 2x + 4',
        'c' => 'x^2 + 2x + 2',
        'd' => 'x^2 + 4x + 8',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the result of 3(x + 4) - 2x?',
        'a' => 'x + 12',
        'b' => 'x + 10',
        'c' => 'x + 8',
        'd' => 'x + 6',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the solution to the equation 2x - 3 = x + 4?',
        'a' => 'x = 2',
        'b' => 'x = 3',
        'c' => 'x = 4',
        'd' => 'x = 7',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the result of x^2 + 2x - 8 when factored?',
        'a' => '(x + 4)(x - 2)',
        'b' => '(x - 4)(x + 2)',
        'c' => '(x + 2)(x - 4)',
        'd' => '(x - 2)(x + 4)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Solve for x: 2x^2 - 5x = 0.',
        'a' => 'x = 0 or x = 2.5',
        'b' => 'x = 0 or x = 5',
        'c' => 'x = 0 or x = 2',
        'd' => 'x = 0 or x = -2.5',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the solution to the quadratic equation x^2 - 4x + 4 = 0?',
        'a' => 'x = 2',
        'b' => 'x = -2',
        'c' => 'x = 4',
        'd' => 'x = 0',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the value of the discriminant in the quadratic equation x^2 + 4x + 4 = 0?',
        'a' => '0',
        'b' => '4',
        'c' => '8',
        'd' => '16',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the result of (x^2 - 1)/(x - 1)?',
        'a' => 'x + 1',
        'b' => 'x - 1',
        'c' => 'x^2 - 1',
        'd' => 'x + 2',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the simplified form of 3(x - 2) + 4(x + 1)?',
        'a' => '7x + 2',
        'b' => '7x - 2',
        'c' => '7x + 6',
        'd' => '7x + 8',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Solve for x: x^2 - 2x - 3 = 0.',
        'a' => 'x = 3 or x = -1',
        'b' => 'x = 1 or x = -3',
        'c' => 'x = 3 or x = 1',
        'd' => 'x = -3 or x = 1',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the sum of the roots of the equation x^2 + 6x + 9 = 0?',
        'a' => '-6',
        'b' => '6',
        'c' => '9',
        'd' => '-9',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Find the value of x in the equation x/3 - 4 = -2.',
        'a' => 'x = 6',
        'b' => 'x = 8',
        'c' => 'x = 12',
        'd' => 'x = 4',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the result of (2x - 3)(x + 5)?',
        'a' => '2x^2 + 7x - 15',
        'b' => '2x^2 - x - 15',
        'c' => '2x^2 - 3x + 15',
        'd' => '2x^2 + 3x - 15',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the solution for x if 4x - 5 = 3x + 6?',
        'a' => 'x = 11',
        'b' => 'x = 9',
        'c' => 'x = 8',
        'd' => 'x = 12',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the solution for x if 5x - 7 = 2x + 8?',
        'a' => 'x = 4',
        'b' => 'x = 5',
        'c' => 'x = 6',
        'd' => 'x = 7',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the expanded form of (x - 3)^2?',
        'a' => 'x^2 - 6x + 9',
        'b' => 'x^2 + 6x + 9',
        'c' => 'x^2 - 9x + 9',
        'd' => 'x^2 - 6x - 9',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Solve for x: 3x^2 + 5x - 2 = 0.',
        'a' => 'x = -2/3 or x = 1',
        'b' => 'x = 1/3 or x = -2',
        'c' => 'x = -1/3 or x = 2',
        'd' => 'x = -1 or x = 2/3',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the sum of the coefficients in the polynomial 2x^3 - 3x^2 + 4x - 5?',
        'a' => '-2',
        'b' => '2',
        'c' => '0',
        'd' => '4',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the result of (4x^2 - 9)/(2x - 3)?',
        'a' => '2x + 3',
        'b' => '2x - 3',
        'c' => '2x + 4',
        'd' => '2x - 4',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the solution to the equation 7x - 4 = 3x + 12?',
        'a' => 'x = 4',
        'b' => 'x = 3',
        'c' => 'x = 5',
        'd' => 'x = 6',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the result of (x^2 + 6x + 9)/(x + 3)?',
        'a' => 'x + 3',
        'b' => 'x - 3',
        'c' => 'x + 2',
        'd' => 'x + 4',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Find the roots of the quadratic equation x^2 - 5x + 6 = 0.',
        'a' => 'x = 2, 3',
        'b' => 'x = 1, 6',
        'c' => 'x = -2, -3',
        'd' => 'x = -1, -6',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the vertex form of the quadratic function y = x^2 + 4x + 3?',
        'a' => 'y = (x + 2)^2 - 1',
        'b' => 'y = (x - 2)^2 + 1',
        'c' => 'y = (x + 1)^2 + 2',
        'd' => 'y = (x - 1)^2 - 2',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Solve for x: 4x^2 - 12x + 9 = 0.',
        'a' => 'x = 3/2',
        'b' => 'x = 1',
        'c' => 'x = -1',
        'd' => 'x = 2',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the value of x in the equation 2x + 3 = 7 - x?',
        'a' => 'x = 2',
        'b' => 'x = 1',
        'c' => 'x = 3',
        'd' => 'x = 4',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the solution for x if 2x + 5 = 11?',
        'a' => 'x = 4',
        'b' => 'x = 3',
        'c' => 'x = 5',
        'd' => 'x = 6',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the result of (x^2 + 2x)/(x)?',
        'a' => 'x + 2',
        'b' => 'x + 1',
        'c' => 'x^2 + 2',
        'd' => '2x',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Solve for x: x^2 - 4 = 0.',
        'a' => 'x = ±2',
        'b' => 'x = ±4',
        'c' => 'x = ±1',
        'd' => 'x = ±3',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the simplified form of (3x^2 + 6x)/(3x)?',
        'a' => 'x + 2',
        'b' => 'x + 3',
        'c' => '2x',
        'd' => 'x + 1',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the value of x if 4x^2 = 64?',
        'a' => 'x = ±4',
        'b' => 'x = ±2',
        'c' => 'x = ±6',
        'd' => 'x = ±8',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the solution for x in the equation 6x - 2 = 4x + 10?',
        'a' => 'x = 4',
        'b' => 'x = 6',
        'c' => 'x = 5',
        'd' => 'x = 3',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the simplified form of (x^2 - 9)/(x - 3)?',
        'a' => 'x + 3',
        'b' => 'x - 3',
        'c' => 'x^2 - 3',
        'd' => 'x + 9',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the product of (x + 2) and (x - 2)?',
        'a' => 'x^2 - 4',
        'b' => 'x^2 + 4',
        'c' => 'x^2 - 2x',
        'd' => 'x^2 + 2x',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the factored form of x^2 - 9?',
        'a' => '(x - 3)(x + 3)',
        'b' => '(x - 1)(x + 9)',
        'c' => '(x - 3)^2',
        'd' => '(x + 3)^2',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the solution to x^2 + 6x + 9 = 0?',
        'a' => 'x = -3',
        'b' => 'x = 0',
        'c' => 'x = 3',
        'd' => 'x = -2',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the result of (x + 4)^2 - 16?',
        'a' => 'x^2 + 8x',
        'b' => 'x^2 + 8x + 16',
        'c' => 'x^2 + 8x - 16',
        'd' => 'x^2 - 8x + 16',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

// GEOMETRY


    [
        'field_id' => 6,
        
        'question' => 'What is the sum of the interior angles of a triangle?',
        'a' => '180°',
        'b' => '360°',
        'c' => '90°',
        'd' => '270°',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the area of a circle with a radius of 4 units?',
        'a' => '16π square units',
        'b' => '8π square units',
        'c' => '64π square units',
        'd' => '4π square units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the length of the hypotenuse in a right triangle with legs of length 3 and 4?',
        'a' => '5 units',
        'b' => '6 units',
        'c' => '7 units',
        'd' => '8 units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the volume of a rectangular prism with dimensions 3 units by 4 units by 5 units?',
        'a' => '12 cubic units',
        'b' => '20 cubic units',
        'c' => '60 cubic units',
        'd' => '30 cubic units',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the formula for the area of a trapezoid?',
        'a' => '(base1 + base2) × height',
        'b' => '1/2 × (base1 + base2) × height',
        'c' => 'base × height',
        'd' => '1/2 × base × height',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which of the following is a property of similar triangles?',
        'a' => 'They have equal areas.',
        'b' => 'They have equal perimeters.',
        'c' => 'They have equal corresponding angles.',
        'd' => 'They have equal corresponding sides.',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the measure of each interior angle of a regular hexagon?',
        'a' => '108°',
        'b' => '120°',
        'c' => '135°',
        'd' => '150°',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the perimeter of a square with side length 5 units?',
        'a' => '20 units',
        'b' => '25 units',
        'c' => '15 units',
        'd' => '10 units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the circumference of a circle with a diameter of 10 units?',
        'a' => '5π units',
        'b' => '10π units',
        'c' => '15π units',
        'd' => '20π units',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the Pythagorean theorem?',
        'a' => 'a^2 + b^2 = c^2',
        'b' => 'a^2 - b^2 = c^2',
        'c' => 'a + b = c',
        'd' => 'a^2 × b^2 = c^2',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the area of a triangle with a base of 6 units and a height of 4 units?',
        'a' => '10 square units',
        'b' => '12 square units',
        'c' => '20 square units',
        'd' => '24 square units',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the sum of the interior angles of a pentagon?',
        'a' => '360°',
        'b' => '540°',
        'c' => '720°',
        'd' => '900°',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the length of one side of a square if its area is 81 square units?',
        'a' => '7 units',
        'b' => '8 units',
        'c' => '9 units',
        'd' => '10 units',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the area of a parallelogram with a base of 8 units and a height of 3 units?',
        'a' => '24 square units',
        'b' => '26 square units',
        'c' => '28 square units',
        'd' => '32 square units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the measure of each exterior angle of a regular hexagon?',
        'a' => '45°',
        'b' => '60°',
        'c' => '72°',
        'd' => '90°',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'In a right triangle, what is the ratio of the length of the opposite side to the hypotenuse called?',
        'a' => 'Tangent',
        'b' => 'Cosine',
        'c' => 'Sine',
        'd' => 'Secant',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the formula for the volume of a cylinder?',
        'a' => 'πr²h',
        'b' => '2πr²h',
        'c' => 'πr²/2h',
        'd' => 'πr² + h',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the measure of an angle formed by two intersecting lines?',
        'a' => '90°',
        'b' => '45°',
        'c' => '180°',
        'd' => '360°',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the perimeter of a rectangle with length 5 units and width 3 units?',
        'a' => '8 units',
        'b' => '15 units',
        'c' => '16 units',
        'd' => '18 units',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the measure of the central angle of a circle if the arc it intercepts has a length of 10 units and the radius of the circle is 5 units?',
        'a' => '36°',
        'b' => '72°',
        'c' => '108°',
        'd' => '144°',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the perimeter of a square with a side length of 7 units?',
        'a' => '28 units',
        'b' => '35 units',
        'c' => '21 units',
        'd' => '14 units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the area of a circle with a radius of 5 units?',
        'a' => '78.5 square units',
        'b' => '25 square units',
        'c' => '314 square units',
        'd' => '15.7 square units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the volume of a cube with a side length of 4 units?',
        'a' => '16 cubic units',
        'b' => '32 cubic units',
        'c' => '64 cubic units',
        'd' => '128 cubic units',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the sum of the interior angles of a hexagon?',
        'a' => '360°',
        'b' => '540°',
        'c' => '720°',
        'd' => '900°',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the length of the diagonal of a rectangle with dimensions 6 units by 8 units?',
        'a' => '14 units',
        'b' => '12 units',
        'c' => '10 units',
        'd' => '15 units',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the measure of each interior angle of a regular octagon?',
        'a' => '120°',
        'b' => '135°',
        'c' => '140°',
        'd' => '160°',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the equation of a circle with a center at the origin and a radius of 3 units?',
        'a' => 'x^2 + y^2 = 9',
        'b' => 'x^2 + y^2 = 6',
        'c' => 'x^2 + y^2 = 3',
        'd' => 'x^2 + y^2 = 12',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the area of a trapezoid with bases of 5 units and 7 units and a height of 4 units?',
        'a' => '20 square units',
        'b' => '48 square units',
        'c' => '24 square units',
        'd' => '36 square units',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the circumference of a circle with a diameter of 10 units?',
        'a' => '31.4 units',
        'b' => '62.8 units',
        'c' => '15.7 units',
        'd' => '25 units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the measure of the angle between the hands of a clock at 3:00?',
        'a' => '45°',
        'b' => '60°',
        'c' => '90°',
        'd' => '120°',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],


    [
        'field_id' => 6,
        
        'question' => 'What is the area of a triangle with a base of 10 units and a height of 5 units?',
        'a' => '25 square units',
        'b' => '50 square units',
        'c' => '15 square units',
        'd' => '20 square units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the measure of each exterior angle of a regular pentagon?',
        'a' => '60°',
        'b' => '72°',
        'c' => '108°',
        'd' => '90°',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the length of the hypotenuse of a right triangle with legs of 6 units and 8 units?',
        'a' => '12 units',
        'b' => '14 units',
        'c' => '10 units',
        'd' => '15 units',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the volume of a cylinder with a radius of 3 units and a height of 10 units?',
        'a' => '282.6 cubic units',
        'b' => '150 cubic units',
        'c' => '188.4 cubic units',
        'd' => '120 cubic units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the measure of the central angle of a circle with a radius of 5 units and an arc length of 5π units?',
        'a' => '180°',
        'b' => '90°',
        'c' => '72°',
        'd' => '108°',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the lateral surface area of a cone with a radius of 4 units and a slant height of 10 units?',
        'a' => '40π square units',
        'b' => '50π square units',
        'c' => '60π square units',
        'd' => '20π square units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the total surface area of a sphere with a radius of 6 units?',
        'a' => '72π square units',
        'b' => '144π square units',
        'c' => '36π square units',
        'd' => '96π square units',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the equation of the line that passes through the point (2, 3) with a slope of 4?',
        'a' => 'y = 4x + 3',
        'b' => 'y = 4x - 5',
        'c' => 'y = 4x - 1',
        'd' => 'y = 4x - 8',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the measure of the angle formed by two intersecting lines that create supplementary angles of 120° and 60°?',
        'a' => '90°',
        'b' => '120°',
        'c' => '60°',
        'd' => '150°',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the area of a parallelogram with a base of 8 units and a height of 5 units?',
        'a' => '20 square units',
        'b' => '40 square units',
        'c' => '30 square units',
        'd' => '50 square units',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the circumference of a circle with a radius of 7 units?',
        'a' => '14π units',
        'b' => '44π units',
        'c' => '21π units',
        'd' => '7π units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the measure of each interior angle of a regular hexagon?',
        'a' => '120°',
        'b' => '135°',
        'c' => '108°',
        'd' => '140°',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the area of a sector with a central angle of 60° and a radius of 6 units?',
        'a' => '6π square units',
        'b' => '12π square units',
        'c' => '3π square units',
        'd' => '4π square units',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the volume of a rectangular prism with dimensions 4 units by 5 units by 10 units?',
        'a' => '200 cubic units',
        'b' => '100 cubic units',
        'c' => '150 cubic units',
        'd' => '50 cubic units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the length of the diagonal of a square with side length 5 units?',
        'a' => '5√2 units',
        'b' => '6√2 units',
        'c' => '7√2 units',
        'd' => '4√2 units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the measure of the angle formed between a tangent and a radius of a circle?',
        'a' => '45°',
        'b' => '60°',
        'c' => '90°',
        'd' => '30°',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the equation of a circle with a center at (2, 3) and a radius of 5 units?',
        'a' => '(x - 2)^2 + (y - 3)^2 = 25',
        'b' => '(x - 3)^2 + (y - 2)^2 = 25',
        'c' => '(x - 2)^2 + (y - 3)^2 = 16',
        'd' => '(x + 2)^2 + (y + 3)^2 = 25',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the sum of the interior angles of a polygon with 8 sides?',
        'a' => '1080°',
        'b' => '1440°',
        'c' => '1260°',
        'd' => '1350°',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the surface area of a cube with a side length of 4 units?',
        'a' => '96 square units',
        'b' => '64 square units',
        'c' => '128 square units',
        'd' => '144 square units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the measure of an angle inscribed in a semicircle?',
        'a' => '60°',
        'b' => '90°',
        'c' => '45°',
        'd' => '120°',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the area of a triangle with a base of 8 units and a height of 5 units?',
        'a' => '40 square units',
        'b' => '20 square units',
        'c' => '30 square units',
        'd' => '35 square units',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the distance between the points (3, 4) and (7, 1) in the coordinate plane?',
        'a' => '5 units',
        'b' => '8 units',
        'c' => '10 units',
        'd' => '√20 units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the perimeter of a rectangle with length 10 units and width 4 units?',
        'a' => '14 units',
        'b' => '28 units',
        'c' => '20 units',
        'd' => '40 units',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the volume of a cylinder with a radius of 3 units and a height of 7 units?',
        'a' => '63π cubic units',
        'b' => '21π cubic units',
        'c' => '42π cubic units',
        'd' => '105π cubic units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the length of the hypotenuse of a right triangle with legs of 6 units and 8 units?',
        'a' => '10 units',
        'b' => '12 units',
        'c' => '14 units',
        'd' => '15 units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the measure of each exterior angle of a regular pentagon?',
        'a' => '60°',
        'b' => '72°',
        'c' => '108°',
        'd' => '120°',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the equation of a line with slope 2 and y-intercept -3?',
        'a' => 'y = 2x + 3',
        'b' => 'y = 2x - 3',
        'c' => 'y = -2x + 3',
        'd' => 'y = -2x - 3',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the area of a parallelogram with a base of 6 units and a height of 4 units?',
        'a' => '20 square units',
        'b' => '24 square units',
        'c' => '30 square units',
        'd' => '18 square units',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the length of the arc of a circle with a radius of 10 units and a central angle of 90°?',
        'a' => '5π units',
        'b' => '10π units',
        'c' => '20π units',
        'd' => '15π units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the midpoint of the line segment with endpoints (2, 3) and (6, 7)?',
        'a' => '(4, 5)',
        'b' => '(3, 5)',
        'c' => '(4, 6)',
        'd' => '(5, 7)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the sum of the interior angles of a hexagon?',
        'a' => '720°',
        'b' => '540°',
        'c' => '1080°',
        'd' => '360°',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'If two angles of a triangle measure 45° and 55°, what is the measure of the third angle?',
        'a' => '75°',
        'b' => '90°',
        'c' => '80°',
        'd' => '60°',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the area of a circle with a radius of 7 units?',
        'a' => '49π square units',
        'b' => '14π square units',
        'c' => '7π square units',
        'd' => '28π square units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the circumference of a circle with a diameter of 10 units?',
        'a' => '10π units',
        'b' => '20π units',
        'c' => '15π units',
        'd' => '5π units',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the length of a diagonal of a rectangle with length 8 units and width 6 units?',
        'a' => '10 units',
        'b' => '12 units',
        'c' => '14 units',
        'd' => '8 units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the area of a trapezoid with bases 6 units and 10 units, and a height of 4 units?',
        'a' => '64 square units',
        'b' => '32 square units',
        'c' => '24 square units',
        'd' => '40 square units',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the volume of a cone with a radius of 3 units and a height of 9 units?',
        'a' => '27π cubic units',
        'b' => '36π cubic units',
        'c' => '54π cubic units',
        'd' => '81π cubic units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the measure of each interior angle of a regular octagon?',
        'a' => '120°',
        'b' => '135°',
        'c' => '150°',
        'd' => '108°',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the area of an equilateral triangle with a side length of 6 units?',
        'a' => '9√3 square units',
        'b' => '18 square units',
        'c' => '12√3 square units',
        'd' => '15√3 square units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the surface area of a cube with a side length of 4 units?',
        'a' => '64 square units',
        'b' => '96 square units',
        'c' => '48 square units',
        'd' => '80 square units',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the length of the hypotenuse of a right triangle with legs of length 3 units and 4 units?',
        'a' => '5 units',
        'b' => '6 units',
        'c' => '7 units',
        'd' => '8 units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the area of a regular hexagon with a side length of 5 units?',
        'a' => '75√3 square units',
        'b' => '50√3 square units',
        'c' => '25√3 square units',
        'd' => '60√3 square units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the volume of a sphere with a radius of 3 units?',
        'a' => '36π cubic units',
        'b' => '81π cubic units',
        'c' => '27π cubic units',
        'd' => '72π cubic units',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the surface area of a cylinder with a radius of 3 units and a height of 5 units?',
        'a' => '48π square units',
        'b' => '60π square units',
        'c' => '94π square units',
        'd' => '90π square units',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the area of a parallelogram with a base of 10 units and a height of 6 units?',
        'a' => '60 square units',
        'b' => '70 square units',
        'c' => '50 square units',
        'd' => '80 square units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the measure of each exterior angle of a regular dodecagon?',
        'a' => '30°',
        'b' => '45°',
        'c' => '60°',
        'd' => '75°',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the distance between the points (3, 4) and (6, 8) in a Cartesian plane?',
        'a' => '5 units',
        'b' => '6 units',
        'c' => '7 units',
        'd' => '8 units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the radius of a circle with an area of 49π square units?',
        'a' => '7 units',
        'b' => '14 units',
        'c' => '21 units',
        'd' => '10 units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the perimeter of a square with a side length of 8 units?',
        'a' => '32 units',
        'b' => '64 units',
        'c' => '24 units',
        'd' => '16 units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the length of a diagonal of a square with a side length of 5 units?',
        'a' => '5√2 units',
        'b' => '10 units',
        'c' => '5 units',
        'd' => '7 units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the area of a sector of a circle with radius 6 units and central angle 90 degrees?',
        'a' => '18π square units',
        'b' => '12π square units',
        'c' => '9π square units',
        'd' => '24π square units',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the length of the altitude of a triangle with a base of 8 units and area of 24 square units?',
        'a' => '6 units',
        'b' => '4 units',
        'c' => '3 units',
        'd' => '8 units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the surface area of a cube with edge length 4 units?',
        'a' => '96 square units',
        'b' => '64 square units',
        'c' => '80 square units',
        'd' => '128 square units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the volume of a cone with a radius of 4 units and a height of 9 units?',
        'a' => '48π cubic units',
        'b' => '72π cubic units',
        'c' => '36π cubic units',
        'd' => '108π cubic units',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the measure of each interior angle of a regular hexagon?',
        'a' => '120°',
        'b' => '90°',
        'c' => '60°',
        'd' => '150°',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the length of the diagonal of a rectangle with length 6 units and width 8 units?',
        'a' => '10 units',
        'b' => '12 units',
        'c' => '14 units',
        'd' => '8 units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the area of an equilateral triangle with a side length of 10 units?',
        'a' => '25√3 square units',
        'b' => '50√3 square units',
        'c' => '100√3 square units',
        'd' => '75√3 square units',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the sum of the interior angles of a pentagon?',
        'a' => '540°',
        'b' => '360°',
        'c' => '720°',
        'd' => '180°',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the height of a cylinder with a volume of 150π cubic units and a radius of 5 units?',
        'a' => '6 units',
        'b' => '10 units',
        'c' => '12 units',
        'd' => '15 units',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the area of a trapezoid with bases of 7 units and 5 units, and a height of 4 units?',
        'a' => '24 square units',
        'b' => '28 square units',
        'c' => '30 square units',
        'd' => '32 square units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the volume of a sphere with a radius of 3 units?',
        'a' => '36π cubic units',
        'b' => '27π cubic units',
        'c' => '81π cubic units',
        'd' => '9π cubic units',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the area of a parallelogram with a base of 10 units and a height of 6 units?',
        'a' => '60 square units',
        'b' => '50 square units',
        'c' => '40 square units',
        'd' => '70 square units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the length of the hypotenuse of a right triangle with legs of 6 units and 8 units?',
        'a' => '10 units',
        'b' => '12 units',
        'c' => '14 units',
        'd' => '16 units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the volume of a rectangular prism with length 4 units, width 3 units, and height 5 units?',
        'a' => '60 cubic units',
        'b' => '50 cubic units',
        'c' => '70 cubic units',
        'd' => '40 cubic units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the area of a regular octagon with a side length of 5 units?',
        'a' => '120 square units',
        'b' => '160 square units',
        'c' => '140 square units',
        'd' => '100 square units',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the measure of each exterior angle of a regular polygon with 10 sides?',
        'a' => '36°',
        'b' => '30°',
        'c' => '45°',
        'd' => '40°',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the area of a rhombus with diagonals of lengths 8 units and 6 units?',
        'a' => '24 square units',
        'b' => '30 square units',
        'c' => '48 square units',
        'd' => '20 square units',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the length of each side of a regular pentagon with a perimeter of 50 units?',
        'a' => '10 units',
        'b' => '12 units',
        'c' => '8 units',
        'd' => '15 units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the surface area of a sphere with a radius of 7 units?',
        'a' => '196π square units',
        'b' => '84π square units',
        'c' => '144π square units',
        'd' => '112π square units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the area of a trapezoid with bases of 9 units and 12 units, and a height of 5 units?',
        'a' => '105 square units',
        'b' => '90 square units',
        'c' => '95 square units',
        'd' => '80 square units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the measure of each interior angle of a regular hexagon?',
        'a' => '120°',
        'b' => '90°',
        'c' => '108°',
        'd' => '135°',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the surface area of a cube with side length 4 units?',
        'a' => '96 square units',
        'b' => '64 square units',
        'c' => '128 square units',
        'd' => '80 square units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the area of a circle with a radius of 7 units?',
        'a' => '49π square units',
        'b' => '14π square units',
        'c' => '49π square units',
        'd' => '28π square units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the length of the diagonal of a square with side length 6 units?',
        'a' => '6√2 units',
        'b' => '12 units',
        'c' => '6√3 units',
        'd' => '6 units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the volume of a cone with a base radius of 5 units and a height of 10 units?',
        'a' => '250π cubic units',
        'b' => '150π cubic units',
        'c' => '100π cubic units',
        'd' => '200π cubic units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the surface area of a rectangular prism with dimensions 2 units × 3 units × 4 units?',
        'a' => '22 square units',
        'b' => '24 square units',
        'c' => '28 square units',
        'd' => '20 square units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the area of an equilateral triangle with side length 8 units?',
        'a' => '27.71 square units',
        'b' => '32 square units',
        'c' => '30.93 square units',
        'd' => '40 square units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the length of the hypotenuse of a right triangle with legs of 5 units and 12 units?',
        'a' => '13 units',
        'b' => '15 units',
        'c' => '17 units',
        'd' => '10 units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the volume of a cylinder with a base radius of 3 units and a height of 7 units?',
        'a' => '63π cubic units',
        'b' => '84π cubic units',
        'c' => '78π cubic units',
        'd' => '21π cubic units',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the circumference of a circle with a diameter of 10 units?',
        'a' => '10π units',
        'b' => '20π units',
        'c' => '30π units',
        'd' => '5π units',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

// CALCULUS


    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of sin(x)?',
        'a' => 'cos(x)',
        'b' => '-cos(x)',
        'c' => '-sin(x)',
        'd' => 'sin(x)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of 1/x dx?',
        'a' => 'ln|x| + C',
        'b' => 'x + C',
        'c' => '1/x + C',
        'd' => 'e^x + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the limit of (x^2 - 1)/(x - 1) as x approaches 1?',
        'a' => '2',
        'b' => '1',
        'c' => '0',
        'd' => 'Undefined',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the second derivative of x^3?',
        'a' => '6x',
        'b' => '6',
        'c' => '3x^2',
        'd' => 'x',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the antiderivative of 3x^2?',
        'a' => 'x^3 + C',
        'b' => '3x^3 + C',
        'c' => 'x^2 + C',
        'd' => 'x^3 + 3x + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of e^x?',
        'a' => 'e^x',
        'b' => 'x e^x',
        'c' => 'ln(x)',
        'd' => 'e^x + 1',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of 2x dx?',
        'a' => 'x^2 + C',
        'b' => 'x^2 + 2x + C',
        'c' => 'x + C',
        'd' => '2x^2 + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the limit of sin(x)/x as x approaches 0?',
        'a' => '1',
        'b' => '0',
        'c' => '∞',
        'd' => 'Undefined',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of ln(x)?',
        'a' => '1/x',
        'b' => 'x',
        'c' => 'e^x',
        'd' => 'ln(x)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of cos(x) dx?',
        'a' => 'sin(x) + C',
        'b' => '-sin(x) + C',
        'c' => 'cos(x) + C',
        'd' => '-cos(x) + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of x^2 - 4x + 4?',
        'a' => '2x - 4',
        'b' => 'x - 4',
        'c' => '2x - 2',
        'd' => '2x + 4',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],


    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of tan(x)?',
        'a' => 'sec^2(x)',
        'b' => 'cos(x)',
        'c' => 'sin(x)',
        'd' => 'sec(x)tan(x)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of x^2 dx?',
        'a' => 'x^3/3 + C',
        'b' => 'x^2/2 + C',
        'c' => 'x^3 + C',
        'd' => 'x^2 + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the limit of (3x^2 - 4x + 1) as x approaches 2?',
        'a' => '7',
        'b' => '5',
        'c' => '8',
        'd' => '6',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of e^x dx?',
        'a' => 'e^x + C',
        'b' => 'e^x - C',
        'c' => 'e^x',
        'd' => 'x e^x + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of ln(x^2)?',
        'a' => '2/x',
        'b' => '1/x',
        'c' => '2x',
        'd' => 'x',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the second derivative of 4x^3?',
        'a' => '24x',
        'b' => '12x',
        'c' => '24',
        'd' => '12',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of x^4?',
        'a' => '4x^3',
        'b' => '3x^2',
        'c' => '2x^3',
        'd' => 'x^3',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of 1/(x^2 + 1) dx?',
        'a' => 'arctan(x) + C',
        'b' => 'ln|x| + C',
        'c' => 'x + C',
        'd' => '1/x + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the limit of (2x^3 - x)/(x^2 + 1) as x approaches ∞?',
        'a' => '∞',
        'b' => '2',
        'c' => '0',
        'd' => '1',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of 5x^2 - 3x + 2?',
        'a' => '10x - 3',
        'b' => '5x - 3',
        'c' => '10x',
        'd' => '5x + 3',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of cos(x)?',
        'a' => 'sin(x)',
        'b' => '-sin(x)',
        'c' => 'cos(x)',
        'd' => '-cos(x)',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of x dx?',
        'a' => 'x + C',
        'b' => 'x^2/2 + C',
        'c' => 'x^2 + C',
        'd' => 'x^2/3 + C',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of 3x^2 - 5x + 2?',
        'a' => '6x - 2',
        'b' => '3x - 5',
        'c' => '6x - 5',
        'd' => '6x + 2',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the limit of (x^2 - 1)/(x - 1) as x approaches 1?',
        'a' => '1/2',
        'b' => '2',
        'c' => '0',
        'd' => '1',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of sin(x) dx?',
        'a' => '-cos(x) + C',
        'b' => 'sin(x) + C',
        'c' => '-sin(x) + C',
        'd' => 'cos(x) + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of x^5?',
        'a' => '5x^4',
        'b' => '4x^5',
        'c' => '5x^3',
        'd' => 'x^4',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of 3x^3 dx?',
        'a' => '3x^4/4 + C',
        'b' => '3x^4 + C',
        'c' => 'x^4 + C',
        'd' => 'x^3 + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the limit of (sin(x)/x) as x approaches 0?',
        'a' => '0',
        'b' => '1',
        'c' => '∞',
        'd' => '-1',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of 2x^3 - 4x?',
        'a' => '6x - 4',
        'b' => '6x^2 + 4',
        'c' => '6x^2 - 2',
        'd' => '6x^2 - 4',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of 1/x dx?',
        'a' => '1/x + C',
        'b' => 'ln(x) + C',
        'c' => 'x + C',
        'd' => 'ln|x| + C',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the second derivative of x^2 - 3x + 2?',
        'a' => '0',
        'b' => '1',
        'c' => '-2',
        'd' => '2',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of e^x?',
        'a' => 'e^x ',
        'b' => 'e^x + C',
        'c' => 'x * e^x',
        'd' => 'e^x - 1',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of 1/x dx?',
        'a' => 'ln(x) + C ',
        'b' => '1/x + C',
        'c' => 'x + C',
        'd' => 'e^x + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of ln(x)?',
        'a' => '1/x ',
        'b' => 'x',
        'c' => 'ln(x) + C',
        'd' => 'e^x',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the limit of (x^3 - 1)/(x - 1) as x approaches 1?',
        'a' => '2',
        'b' => '1',
        'c' => '3 ',
        'd' => '0',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of 3x^2 dx?',
        'a' => 'x^3 + C',
        'b' => 'x^3 + C ',
        'c' => '3x^3 + C',
        'd' => 'x^2 + C',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of sin(x)?',
        'a' => 'cos(x) ',
        'b' => '-cos(x)',
        'c' => '-sin(x)',
        'd' => 'sin(x)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of cos(x) dx?',
        'a' => 'sin(x) + C ',
        'b' => '-sin(x) + C',
        'c' => 'cos(x) + C',
        'd' => '-cos(x) + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the limit of (2x^2 - 3x + 1) as x approaches ∞?',
        'a' => '1',
        'b' => '∞ ',
        'c' => '2',
        'd' => '0',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of 4x^2 + 5x?',
        'a' => '8x + 5 ',
        'b' => '4x + 5',
        'c' => '8x',
        'd' => '4x^2 + 5',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of 5 dx?',
        'a' => '5x + C ',
        'b' => '5x^2/2 + C',
        'c' => '5x',
        'd' => 'x + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of x^3?',
        'a' => '3x^2 ',
        'b' => '2x^2',
        'c' => 'x^2',
        'd' => '3x',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of 2x dx?',
        'a' => 'x^2 + C ',
        'b' => '2x^2 + C',
        'c' => 'x + C',
        'd' => 'x^2/2 + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of cos(x)?',
        'a' => '-sin(x) ',
        'b' => 'sin(x)',
        'c' => '-cos(x)',
        'd' => 'cos(x)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the limit of sin(x)/x as x approaches 0?',
        'a' => '1 ',
        'b' => '0',
        'c' => '∞',
        'd' => 'undefined',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of the function f(x) = 5?',
        'a' => '0 ',
        'b' => '5',
        'c' => '1',
        'd' => 'undefined',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of 1/(x^2 + 1) dx?',
        'a' => 'arctan(x) + C ',
        'b' => 'ln|x| + C',
        'c' => 'arcsin(x) + C',
        'd' => 'ln|x^2 + 1| + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the second derivative of x^2?',
        'a' => '2 ',
        'b' => '0',
        'c' => '4x',
        'd' => '2x',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of e^x dx?',
        'a' => 'e^x + C ',
        'b' => 'e^x',
        'c' => 'xe^x + C',
        'd' => 'e^x - C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of ln|x|?',
        'a' => '1/x ',
        'b' => 'x',
        'c' => '-1/x',
        'd' => 'ln|x|',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the limit of (x^2 + 3x)/(x + 1) as x approaches ∞?',
        'a' => '∞',
        'b' => 'x',
        'c' => 'x + 3',
        'd' => 'x ',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of x^3 dx?',
        'a' => 'x^4/4 + C ',
        'b' => 'x^3/3 + C',
        'c' => 'x^2/2 + C',
        'd' => 'x^4/4',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of e^x?',
        'a' => 'e^x',
        'b' => 'x^2 e^x',
        'c' => 'e^x + C',
        'd' => 'e^x / x ',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of sin(x) dx?',
        'a' => '-cos(x) + C ',
        'b' => 'cos(x) + C',
        'c' => '-sin(x) + C',
        'd' => 'sin(x) + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of tan(x)?',
        'a' => 'sec^2(x) ',
        'b' => 'sec(x)',
        'c' => 'csc^2(x)',
        'd' => 'sec^2(x) + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of 3x^2 dx?',
        'a' => 'x^3 + C ',
        'b' => 'x^3 + 3x + C',
        'c' => 'x^3/3 + C',
        'd' => 'x^2 + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of ln(x^2)?',
        'a' => '2/x ',
        'b' => '1/x',
        'c' => '2x',
        'd' => 'x',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the limit of (x^3 - 2x^2 + 3x)/(x) as x approaches ∞?',
        'a' => 'x^2 ',
        'b' => 'x',
        'c' => 'x^3',
        'd' => '3',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of 1/x dx?',
        'a' => 'ln|x| + C ',
        'b' => '1/x + C',
        'c' => 'x + C',
        'd' => 'e^x + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of x^4?',
        'a' => '4x^3 ',
        'b' => '3x^2',
        'c' => '4x^2',
        'd' => 'x^3',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of 5 dx?',
        'a' => '5x + C ',
        'b' => '5/x + C',
        'c' => '5x^2/2 + C',
        'd' => '5/x^2 + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the second derivative of e^x?',
        'a' => 'e^x ',
        'b' => 'e^x + C',
        'c' => 'x^2 e^x',
        'd' => 'e^x - C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the limit of (2x^2 + 5x + 3)/(x^2) as x approaches ∞?',
        'a' => '2 ',
        'b' => '5',
        'c' => '2x',
        'd' => '∞',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the integral of cos(x) dx?',
        'a' => 'sin(x) + C',
        'b' => '-sin(x) + C',
        'c' => 'cos(x) + C',
        'd' => '-cos(x) + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of 5x^3?',
        'a' => '15x^2',
        'b' => '10x^2',
        'c' => '5x^2',
        'd' => '20x^2',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of 2x dx?',
        'a' => 'x^2 + C',
        'b' => '2x^2 + C',
        'c' => 'x + C',
        'd' => 'x^2/2 + C',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of x^2 + 4x + 4?',
        'a' => '2x + 4',
        'b' => '2x',
        'c' => '2x + 4',
        'd' => 'x + 4',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of e^(-x) dx?',
        'a' => '-e^(-x) + C',
        'b' => 'e^(-x) + C',
        'c' => '-e^x + C',
        'd' => 'e^x + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of 1/x?',
        'a' => '-1/x^2',
        'b' => '1/x^2',
        'c' => '-x',
        'd' => '1/x',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of x^2 dx?',
        'a' => 'x^3/3 + C',
        'b' => '2x^3 + C',
        'c' => 'x^3 + C',
        'd' => 'x^2/2 + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of 3x^2 - 2x?',
        'a' => '6x - 2',
        'b' => '6x + 2',
        'c' => '3x - 2',
        'd' => '6x',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of 4 dx?',
        'a' => '4x + C',
        'b' => 'x + C',
        'c' => '4x^2 + C',
        'd' => '4x',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of sin(x)?',
        'a' => 'cos(x)',
        'b' => '-sin(x)',
        'c' => '-cos(x)',
        'd' => 'sin(x)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of 5/x dx?',
        'a' => '5ln|x| + C',
        'b' => '5x + C',
        'c' => '5xln|x| + C',
        'd' => 'ln|x| + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the limit of (2x^2 - 3x + 1) as x approaches 2?',
        'a' => '3',
        'b' => '5',
        'c' => '7',
        'd' => '6',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of ln(x)?',
        'a' => '1/x',
        'b' => 'x',
        'c' => 'x^2',
        'd' => '1/x^2',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of 1/(x^2 + 1) dx?',
        'a' => 'arctan(x) + C',
        'b' => 'ln|x| + C',
        'c' => 'arcsin(x) + C',
        'd' => 'ln|x^2 + 1| + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the second derivative of x^3?',
        'a' => '6x',
        'b' => '6x^2',
        'c' => '3x^2',
        'd' => '3x',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of sin(x) dx?',
        'a' => '-cos(x) + C',
        'b' => 'cos(x) + C',
        'c' => '-sin(x) + C',
        'd' => 'sin(x) + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of e^(3x)?',
        'a' => '3e^(3x)',
        'b' => 'e^(3x)',
        'c' => '3e^x',
        'd' => 'e^(3x) * ln(3)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the limit of (x^3 - 1)/(x - 1) as x approaches 1?',
        'a' => '3',
        'b' => '2',
        'c' => '1',
        'd' => '0',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of (3x^2 - 2x) dx?',
        'a' => 'x^3 - x^2 + C',
        'b' => 'x^3 - x^2/2 + C',
        'c' => 'x^3 - x^2 + C',
        'd' => 'x^3 - x + C',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of cos(x)?',
        'a' => '-sin(x)',
        'b' => 'sin(x)',
        'c' => '-cos(x)',
        'd' => 'cos(x)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of (2x + 3) dx?',
        'a' => 'x^2 + 3x + C',
        'b' => 'x^2 + 3x/2 + C',
        'c' => 'x^2 + 3x',
        'd' => 'x^2 + 3x + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of tan(x)?',
        'a' => 'sec(x)',
        'b' => 'sec^2(x)',
        'c' => 'csc^2(x)',
        'd' => 'cot(x)',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of cos(x) dx?',
        'a' => '-sin(x) + C',
        'b' => 'sin(x) + C',
        'c' => 'cos(x) + C',
        'd' => '-cos(x) + C',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the limit of sin(x)/x as x approaches 0?',
        'a' => '0',
        'b' => '1',
        'c' => 'infinity',
        'd' => '-1',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of e^(-x)?',
        'a' => '-e^(-x)',
        'b' => 'e^(-x)',
        'c' => '-e^x',
        'd' => 'e^x',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of x^2 dx?',
        'a' => 'x^3/3 + C',
        'b' => 'x^2/2 + C',
        'c' => '2x^2 + C',
        'd' => 'x^3 + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the limit of (x^2 - 1)/(x - 1) as x approaches 1?',
        'a' => 'infinity',
        'b' => '1',
        'c' => '0',
        'd' => '2',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the second derivative of 3x^3?',
        'a' => '18x',
        'b' => '9x^2',
        'c' => '6x',
        'd' => '18',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of ln(x)?',
        'a' => 'x',
        'b' => 'ln(x)',
        'c' => '1',
        'd' => '1/x',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of 5 dx?',
        'a' => '5 + C',
        'b' => '5x + C',
        'c' => '5x^2 + C',
        'd' => '5/x + C',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the limit of (2x^2 - 3x + 1)/(x + 1) as x approaches -1?',
        'a' => '2',
        'b' => '-1',
        'c' => '0',
        'd' => '1',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of x^3 + 2x?',
        'a' => '3x^2 + 2',
        'b' => '3x^2 - 2',
        'c' => 'x^2 + 2',
        'd' => '**3x^2 + 2**',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of 3x^2 dx?',
        'a' => '**x^3 + C**',
        'b' => '3x^3 + C',
        'c' => 'x^2 + C',
        'd' => 'x^3/3 + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of sin(x)?',
        'a' => 'cos(x)',
        'b' => '**cos(x)**',
        'c' => '-sin(x)',
        'd' => '-cos(x)',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of e^x dx?',
        'a' => '**e^x + C**',
        'b' => 'e^x',
        'c' => 'x e^x + C',
        'd' => 'e^x + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of ln(x^2)?',
        'a' => '1/x',
        'b' => '**2/x**',
        'c' => '2/x^2',
        'd' => '1/2x',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of 1/x dx?',
        'a' => '**ln|x| + C**',
        'b' => 'x + C',
        'c' => 'ln(x) + C',
        'd' => 'e^x + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of e^(-x)?',
        'a' => '-e^(-x)',
        'b' => '**-e^(-x)**',
        'c' => 'e^(-x)',
        'd' => '-e^x',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of cos(x) dx?',
        'a' => '**sin(x) + C**',
        'b' => 'cos(x) + C',
        'c' => '-sin(x) + C',
        'd' => '-cos(x) + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of x^2 + 3x?',
        'a' => '**2x + 3**',
        'b' => '2x',
        'c' => 'x + 3',
        'd' => '2x + 1',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of 2x dx?',
        'a' => 'x^2 + C',
        'b' => '**x^2 + C**',
        'c' => '2x^2 + C',
        'd' => '2x + C',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of tan(x)?',
        'a' => 'sec(x)',
        'b' => 'csc(x)',
        'c' => '-sec(x)',
        'd' => '**sec²(x)**',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of 5x^4?',
        'a' => '20x^3',
        'b' => '10x^3',
        'c' => '15x^3',
        'd' => '25x^3',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of x^2 + 4x?',
        'a' => 'x^3/3 + 2x^2 + C',
        'b' => 'x^3/3 + 4x^2/2 + C',
        'c' => 'x^3/3 + 4x^2 + C',
        'd' => 'x^3/3 + 2x^2 + C',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of cos(x)?',
        'a' => '-sin(x)',
        'b' => 'sin(x)',
        'c' => '-cos(x)',
        'd' => 'cos(x)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of x^3 dx?',
        'a' => 'x^4/4 + C',
        'b' => 'x^3/3 + C',
        'c' => 'x^4/3 + C',
        'd' => 'x^4/4',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of ln(x)?',
        'a' => '1/x',
        'b' => 'x',
        'c' => 'ln(x)',
        'd' => 'e^x',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of 2/x dx?',
        'a' => '2ln|x| + C',
        'b' => 'ln|x| + C',
        'c' => '2x + C',
        'd' => 'x^2 + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of e^(2x)?',
        'a' => '2e^(2x)',
        'b' => 'e^(2x)',
        'c' => '2e^(x)',
        'd' => 'e^(2x)ln(e)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of cos(x) dx?',
        'a' => 'sin(x) + C',
        'b' => '-sin(x) + C',
        'c' => 'cos(x) + C',
        'd' => '-cos(x) + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of x^5?',
        'a' => '5x^4',
        'b' => '4x^5',
        'c' => '5x^3',
        'd' => '4x^4',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of 3e^x dx?',
        'a' => '3e^x + C',
        'b' => 'e^x + C',
        'c' => '3x + C',
        'd' => '3x e^x + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the derivative of 3x^2 - 7x + 4?',
        'a' => '6x - 7',
        'b' => '6x + 7',
        'c' => '3x - 7',
        'd' => '6x - 4',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the value of the limit lim(x→0) (sin(x)/x)?',
        'a' => '1',
        'b' => '0',
        'c' => '∞',
        'd' => 'undefined',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of 1/x dx?',
        'a' => 'ln|x| + C',
        'b' => 'x + C',
        'c' => 'e^x + C',
        'd' => 'x^2/2 + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the result of the derivative of tan(x)?',
        'a' => 'sec^2(x)',
        'b' => 'cos(x)',
        'c' => 'csc^2(x)',
        'd' => 'sec(x)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the value of the derivative of 7x^3 - 5x?',
        'a' => '21x^2 - 5',
        'b' => '21x^2 + 5',
        'c' => '7x^2 - 5',
        'd' => '7x^2 - 7',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of 6x dx?',
        'a' => '3x^2 + C',
        'b' => '6x^2 + C',
        'c' => '3x + C',
        'd' => '6x^2/2 + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the result of the derivative of e^(3x)?',
        'a' => '3e^(3x)',
        'b' => 'e^(3x)',
        'c' => '3e^(x)',
        'd' => 'e^(x)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of 4 dx?',
        'a' => '4x + C',
        'b' => '4x^2/2 + C',
        'c' => '4x^2 + C',
        'd' => '4/x + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the result of the limit lim(x→∞) 1/x?',
        'a' => '0',
        'b' => '∞',
        'c' => '1',
        'd' => 'undefined',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of cos(2x) dx?',
        'a' => 'sin(2x)/2 + C',
        'b' => 'sin(x) + C',
        'c' => '-sin(2x)/2 + C',
        'd' => 'cos(2x)/2 + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the result of the derivative of 2^x?',
        'a' => '2^x ln(2)',
        'b' => '2^x',
        'c' => 'x 2^(x-1)',
        'd' => '2^x / ln(2)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the integral of x^2 + 3x + 2 dx?',
        'a' => 'x^3/3 + 3x^2/2 + 2x + C',
        'b' => 'x^3/3 + 3x^2/2 + C',
        'c' => 'x^3/3 + x^2 + 2x + C',
        'd' => 'x^3/3 + 3x + 2x^2/2 + C',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
// STATISTICS
    [
        'field_id' => 6,
        
        'question' => 'What is the mean of the following data set: 5, 7, 9, 10, 12?',
        'a' => '8.6',
        'b' => '8',
        'c' => '7.5',
        'd' => '9.2',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the median of the following data set: 2, 4, 7, 10, 12?',
        'a' => '6.5',
        'b' => '7',
        'c' => '5',
        'd' => '8',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the mode of the following data set: 3, 3, 4, 5, 7, 7, 8?',
        'a' => '3 and 7',
        'b' => '4',
        'c' => '7',
        'd' => '5',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the range of the following data set: 15, 18, 21, 24, 30?',
        'a' => '15',
        'b' => '12',
        'c' => '10',
        'd' => '18',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the variance of the following data set: 2, 4, 4, 6, 8?',
        'a' => '3.5',
        'b' => '2.5',
        'c' => '3.2',
        'd' => '4',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'If the probability of an event happening is 0.3, what is the probability of the event not happening?',
        'a' => '0.5',
        'b' => '0.7',
        'c' => '0.3',
        'd' => '0.4',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the standard deviation of the following data set: 10, 12, 12, 14, 16?',
        'a' => '2',
        'b' => '2.5',
        'c' => '1.8',
        'd' => '1.5',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'If a data set has a skewness value of 0, what does this indicate about the distribution?',
        'a' => 'It is positively skewed',
        'b' => 'It is symmetrical',
        'c' => 'It is negatively skewed',
        'd' => 'It has no skewness',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'In a normal distribution, what percentage of data falls within one standard deviation of the mean?',
        'a' => '95%',
        'b' => '68%',
        'c' => '99%',
        'd' => '50%',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the z-score for a data point that is 2 standard deviations above the mean?',
        'a' => '0',
        'b' => '2',
        'c' => '-2',
        'd' => '1',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the probability of rolling a sum of 7 with two six-sided dice?',
        'a' => '1/6',
        'b' => '1/3',
        'c' => '1/12',
        'd' => '5/36',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which measure of central tendency is most affected by outliers?',
        'a' => 'Mode',
        'b' => 'Median',
        'c' => 'Range',
        'd' => 'Mean',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the interquartile range (IQR) of the following data set: 4, 6, 8, 10, 12?',
        'a' => '6',
        'b' => '4',
        'c' => '2',
        'd' => '8',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'In a normal distribution, what is the approximate percentage of data that lies within three standard deviations of the mean?',
        'a' => '95%',
        'b' => '68%',
        'c' => '99.7%',
        'd' => '90%',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the correlation coefficient for a perfect positive linear relationship?',
        'a' => '1',
        'b' => '-1',
        'c' => '0.5',
        'd' => '0',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the probability of flipping three coins and getting exactly two heads?',
        'a' => '1/4',
        'b' => '1/2',
        'c' => '3/8',
        'd' => '3/4',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which measure of dispersion indicates how much a data set is spread out?',
        'a' => 'Mean',
        'b' => 'Median',
        'c' => 'Standard deviation',
        'd' => 'Mode',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the sample space for flipping a coin twice?',
        'a' => '{HH, HT, TH, TT}',
        'b' => '{H, T}',
        'c' => '{HT, TH}',
        'd' => '{HH, TT}',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What does a standard deviation close to 0 indicate about a data set?',
        'a' => 'Data points are close to the mean',
        'b' => 'Data points are spread out',
        'c' => 'There are outliers',
        'd' => 'Data is skewed',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the expected value when rolling a fair six-sided die?',
        'a' => '4.5',
        'b' => '3.5',
        'c' => '3',
        'd' => '6',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What type of sampling involves dividing the population into subgroups and randomly selecting from each subgroup?',
        'a' => 'Simple random sampling',
        'b' => 'Stratified sampling',
        'c' => 'Cluster sampling',
        'd' => 'Systematic sampling',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'In hypothesis testing, what is the probability of rejecting the null hypothesis when it is actually true?',
        'a' => 'Type I error',
        'b' => 'Type II error',
        'c' => 'Power of the test',
        'd' => 'Significance level',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which distribution is used to model the number of successes in a fixed number of independent Bernoulli trials?',
        'a' => 'Normal distribution',
        'b' => 'Binomial distribution',
        'c' => 'Poisson distribution',
        'd' => 'Exponential distribution',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the p-value in hypothesis testing?',
        'a' => 'The probability of observing the data given that the null hypothesis is true',
        'b' => 'The probability that the null hypothesis is true',
        'c' => 'The probability of rejecting the null hypothesis when it is false',
        'd' => 'The significance level',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which measure indicates the strength and direction of a linear relationship between two variables?',
        'a' => 'Correlation coefficient',
        'b' => 'Regression coefficient',
        'c' => 'Variance',
        'd' => 'Standard deviation',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the central limit theorem?',
        'a' => 'The distribution of sample means approaches a normal distribution as the sample size increases',
        'b' => 'The mean of a population is the same as the mean of the sample',
        'c' => 'As sample size increases, the standard deviation decreases',
        'd' => 'The variance of a population equals the variance of the sample',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which test is used to compare the means of two independent groups?',
        'a' => 'Paired t-test',
        'b' => 'Chi-square test',
        'c' => 'Independent samples t-test',
        'd' => 'ANOVA',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What does a p-value less than the significance level indicate in hypothesis testing?',
        'a' => 'Fail to reject the null hypothesis',
        'b' => 'Reject the null hypothesis',
        'c' => 'Accept the alternative hypothesis',
        'd' => 'The test is inconclusive',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which measure is not affected by extreme values?',
        'a' => 'Mean',
        'b' => 'Median',
        'c' => 'Variance',
        'd' => 'Standard deviation',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'In linear regression, what does the R-squared value represent?',
        'a' => 'The slope of the regression line',
        'b' => 'The intercept of the regression line',
        'c' => 'The proportion of the variance in the dependent variable explained by the independent variable',
        'd' => 'The correlation between the variables',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the purpose of a confidence interval?',
        'a' => 'To estimate the range within which a population parameter lies',
        'b' => 'To determine the sample size needed for a study',
        'c' => 'To test the null hypothesis',
        'd' => 'To calculate the margin of error',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which measure of central tendency is most appropriate for skewed distributions?',
        'a' => 'Mean',
        'b' => 'Median',
        'c' => 'Mode',
        'd' => 'Range',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What does the term "standard deviation" represent in a dataset?',
        'a' => 'The average distance from the mean',
        'b' => 'The difference between the maximum and minimum values',
        'c' => 'The middle value in a sorted list',
        'd' => 'The most frequent value',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the relationship between variance and standard deviation?',
        'a' => 'Variance is the square root of standard deviation',
        'b' => 'Standard deviation is the square root of variance',
        'c' => 'They are equivalent',
        'd' => 'Standard deviation is twice the variance',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'In a normal distribution, what percentage of data falls within one standard deviation of the mean?',
        'a' => '68%',
        'b' => '95%',
        'c' => '99.7%',
        'd' => '50%',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What does a z-score represent in a dataset?',
        'a' => 'The number of standard deviations a data point is from the mean',
        'b' => 'The probability of a data point occurring',
        'c' => 'The difference between the mean and median',
        'd' => 'The range of the data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which test is used to assess the relationship between two categorical variables?',
        'a' => 't-test',
        'b' => 'Chi-square test',
        'c' => 'ANOVA',
        'd' => 'Regression analysis',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the purpose of an ANOVA test?',
        'a' => 'To compare the means of three or more groups',
        'b' => 'To assess the strength of a relationship between two variables',
        'c' => 'To estimate population parameters',
        'd' => 'To determine the correlation between variables',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What does the term "outlier" refer to in a dataset?',
        'a' => 'A data point that is significantly different from the other data points',
        'b' => 'The most frequent value in the dataset',
        'c' => 'The value that lies in the middle of the dataset',
        'd' => 'The average value of the dataset',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which measure of dispersion is defined as the difference between the maximum and minimum values in a dataset?',
        'a' => 'Standard deviation',
        'b' => 'Variance',
        'c' => 'Range',
        'd' => 'Interquartile range',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the mean of the following data set: 2, 4, 6, 8, 10?',
        'a' => '5',
        'b' => '7',
        'c' => '6',
        'd' => '8',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which probability distribution is appropriate for modeling the number of successes in a fixed number of trials?',
        'a' => 'Normal distribution',
        'b' => 'Poisson distribution',
        'c' => 'Binomial distribution',
        'd' => 'Exponential distribution',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What does the correlation coefficient measure?',
        'a' => 'The slope of the regression line',
        'b' => 'The strength and direction of a linear relationship',
        'c' => 'The difference between two variables',
        'd' => 'The standard error of the estimate',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the mode of the following data set: 1, 2, 2, 3, 4, 4, 4, 5?',
        'a' => '2',
        'b' => '4',
        'c' => '3',
        'd' => '5',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'In hypothesis testing, what does the p-value represent?',
        'a' => 'The probability of the null hypothesis being true',
        'b' => 'The probability of obtaining the observed result under the null hypothesis',
        'c' => 'The probability of making a Type I error',
        'd' => 'The probability of making a Type II error',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which of the following is a measure of variability?',
        'a' => 'Mean',
        'b' => 'Median',
        'c' => 'Variance',
        'd' => 'Mode',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the purpose of a regression analysis?',
        'a' => 'To compare the means of two groups',
        'b' => 'To predict the value of one variable based on another',
        'c' => 'To test for independence between variables',
        'd' => 'To estimate the probability of an event',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What does the term "sample space" refer to in probability?',
        'a' => 'The set of all possible outcomes',
        'b' => 'The probability of a single event',
        'c' => 'The subset of possible outcomes',
        'd' => 'The mean of all outcomes',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the main purpose of using a scatterplot?',
        'a' => 'To compare the means of two datasets',
        'b' => 'To display the relationship between two variables',
        'c' => 'To summarize a data set with a single value',
        'd' => 'To calculate the standard deviation',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What does the central limit theorem state?',
        'a' => 'The sample mean will be equal to the population mean',
        'b' => 'The distribution of sample means approaches a normal distribution as sample size increases',
        'c' => 'The sample variance will be equal to the population variance',
        'd' => 'The sample median will be equal to the population median',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the range of the following data set: 12, 7, 9, 15, 10?',
        'a' => '8',
        'b' => '7',
        'c' => '6',
        'd' => '5',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'In a standard normal distribution, what is the mean?',
        'a' => '1',
        'b' => '0',
        'c' => '2',
        'd' => '-1',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which of the following measures the amount of spread or dispersion in a set of values?',
        'a' => 'Mean',
        'b' => 'Standard deviation',
        'c' => 'Median',
        'd' => 'Mode',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'If the probability of an event occurring is 0.2, what is the probability of the event not occurring?',
        'a' => '0.8',
        'b' => '0.2',
        'c' => '0.5',
        'd' => '0.6',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the interquartile range (IQR) of the following data set: 1, 3, 5, 7, 9?',
        'a' => '6',
        'b' => '5',
        'c' => '4',
        'd' => '3',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which of the following is not a type of sampling method?',
        'a' => 'Simple random sampling',
        'b' => 'Systematic sampling',
        'c' => 'Random assignment',
        'd' => 'Stratified sampling',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'In statistics, what is the main purpose of a confidence interval?',
        'a' => 'To estimate the probability of a hypothesis',
        'b' => 'To provide a range of values that likely contain the population parameter',
        'c' => 'To test the significance of a hypothesis',
        'd' => 'To determine the margin of error in a study',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which type of error occurs when a true null hypothesis is incorrectly rejected?',
        'a' => 'Type I error',
        'b' => 'Type II error',
        'c' => 'Random error',
        'd' => 'Sampling error',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which of the following is an example of a categorical variable?',
        'a' => 'Height',
        'b' => 'Age',
        'c' => 'Favorite color',
        'd' => 'Income',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the probability of rolling a 3 on a fair six-sided die?',
        'a' => '1/3',
        'b' => '1/4',
        'c' => '1/6',
        'd' => '1/2',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the median of the data set: 4, 7, 9, 10, 12?',
        'a' => '7',
        'b' => '9',
        'c' => '10',
        'd' => '8',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'If a dataset has a mean of 50 and a standard deviation of 5, what is the z-score of a value 60?',
        'a' => '2',
        'b' => '1',
        'c' => '1.5',
        'd' => '0.5',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the mode of the following data set: 2, 4, 4, 6, 7, 8, 9?',
        'a' => '4',
        'b' => '2',
        'c' => '6',
        'd' => '7',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which of the following distributions is symmetric?',
        'a' => 'Skewed left',
        'b' => 'Skewed right',
        'c' => 'Normal distribution',
        'd' => 'Bimodal distribution',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the probability of drawing an ace from a standard deck of cards?',
        'a' => '1/13',
        'b' => '1/52',
        'c' => '1/4',
        'd' => '1/2',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'In a data set, which measure is more affected by outliers?',
        'a' => 'Mean',
        'b' => 'Median',
        'c' => 'Mode',
        'd' => 'Range',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the probability of getting two heads in a row when flipping a fair coin?',
        'a' => '1/4',
        'b' => '1/3',
        'c' => '1/2',
        'd' => '1/8',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which of the following is an example of a continuous variable?',
        'a' => 'Number of students in a class',
        'b' => 'Height of students',
        'c' => 'Number of books read in a month',
        'd' => 'Number of pets owned',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the expected value of rolling a fair six-sided die?',
        'a' => '3.5',
        'b' => '4.5',
        'c' => '5.5',
        'd' => '2.5',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'In hypothesis testing, what does a p-value less than 0.05 indicate?',
        'a' => 'The null hypothesis is rejected',
        'b' => 'The null hypothesis is accepted',
        'c' => 'The alternative hypothesis is rejected',
        'd' => 'The test is inconclusive',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the variance of a dataset with values 2, 4, 6, 8, and 10?',
        'a' => '8',
        'b' => '10',
        'c' => '12',
        'd' => '6',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the coefficient of variation if the standard deviation is 3 and the mean is 12?',
        'a' => '25%',
        'b' => '20%',
        'c' => '15%',
        'd' => '10%',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'In a normal distribution, what percentage of the data lies within one standard deviation of the mean?',
        'a' => '68%',
        'b' => '95%',
        'c' => '99%',
        'd' => '50%',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which measure is used to describe the spread of a dataset?',
        'a' => 'Mean',
        'b' => 'Mode',
        'c' => 'Variance',
        'd' => 'Median',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the range of the data set: 3, 5, 7, 9, 11?',
        'a' => '8',
        'b' => '10',
        'c' => '6',
        'd' => '4',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the standard deviation of a dataset where the variance is 16?',
        'a' => '4',
        'b' => '2',
        'c' => '8',
        'd' => '6',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'If two events A and B are mutually exclusive, what is the probability of either event occurring?',
        'a' => 'P(A) + P(B)',
        'b' => 'P(A) - P(B)',
        'c' => 'P(A) * P(B)',
        'd' => 'P(A) / P(B)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the probability of rolling a sum of 7 with two six-sided dice?',
        'a' => '1/6',
        'b' => '1/12',
        'c' => '1/8',
        'd' => '1/3',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the expected value of a discrete random variable with outcomes 1, 2, 3, each with probability 1/3?',
        'a' => '2',
        'b' => '1.5',
        'c' => '3',
        'd' => '2.5',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What does a box plot display?',
        'a' => 'Distribution of data',
        'b' => 'Frequency of data',
        'c' => 'Probability of events',
        'd' => 'Correlation between variables',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the purpose of a chi-square test?',
        'a' => 'To test for independence in categorical data',
        'b' => 'To measure the spread of data',
        'c' => 'To calculate the mean of a dataset',
        'd' => 'To find correlations between continuous variables',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What type of distribution is described by the bell-shaped curve?',
        'a' => 'Binomial',
        'b' => 'Uniform',
        'c' => 'Normal',
        'd' => 'Exponential',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the median of the dataset 1, 3, 5, 7, 9?',
        'a' => '5',
        'b' => '6',
        'c' => '4',
        'd' => '7',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the mode of the dataset 2, 2, 3, 4, 5?',
        'a' => '2',
        'b' => '3',
        'c' => '4',
        'd' => '5',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the probability of flipping heads on a fair coin?',
        'a' => '1/2',
        'b' => '1/3',
        'c' => '1/4',
        'd' => '1/5',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the term for the value that occurs most frequently in a dataset?',
        'a' => 'Mean',
        'b' => 'Median',
        'c' => 'Mode',
        'd' => 'Range',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'In which situation is the mean not a good measure of central tendency?',
        'a' => 'When the data has outliers',
        'b' => 'When the data is symmetric',
        'c' => 'When the data is normally distributed',
        'd' => 'When the data is clustered',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What does the interquartile range (IQR) measure?',
        'a' => 'Spread of the middle 50% of data',
        'b' => 'Total spread of the data',
        'c' => 'Mean of the data',
        'd' => 'Variance of the data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the purpose of a p-value in hypothesis testing?',
        'a' => 'To measure the strength of evidence against the null hypothesis',
        'b' => 'To calculate the mean of the data',
        'c' => 'To find the median of the data',
        'd' => 'To determine the spread of the data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the term for the average of a dataset?',
        'a' => 'Mean',
        'b' => 'Median',
        'c' => 'Mode',
        'd' => 'Range',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which of the following is not a type of probability distribution?',
        'a' => 'Chi-square',
        'b' => 'Normal',
        'c' => 'Poisson',
        'd' => 'Linear',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is a box plot also known as?',
        'a' => 'Box-and-whisker plot',
        'b' => 'Histogram',
        'c' => 'Bar chart',
        'd' => 'Line graph',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the term for the difference between the highest and lowest values in a dataset?',
        'a' => 'Range',
        'b' => 'Variance',
        'c' => 'Standard Deviation',
        'd' => 'Mean',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What does the standard deviation measure?',
        'a' => 'Spread of the data',
        'b' => 'Central tendency of the data',
        'c' => 'Frequency of the data',
        'd' => 'Median of the data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What type of data is represented by categories with no natural order?',
        'a' => 'Nominal data',
        'b' => 'Ordinal data',
        'c' => 'Interval data',
        'd' => 'Ratio data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the probability of drawing a red card from a standard deck of 52 cards?',
        'a' => '1/2',
        'b' => '1/4',
        'c' => '1/3',
        'd' => '1/6',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the central limit theorem about?',
        'a' => 'Distribution of sample means approximates a normal distribution as sample size increases',
        'b' => 'Data will always be evenly distributed',
        'c' => 'Mean of a sample is always equal to the mean of the population',
        'd' => 'Median is always equal to the mean in a normal distribution',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What does a box plot visually display?',
        'a' => 'Quartiles and outliers',
        'b' => 'Frequency of categories',
        'c' => 'Correlation between variables',
        'd' => 'Mean and median',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which measure of central tendency is least affected by outliers?',
        'a' => 'Median',
        'b' => 'Mean',
        'c' => 'Mode',
        'd' => 'Range',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the term for a graphical representation of the frequency distribution of a dataset?',
        'a' => 'Histogram',
        'b' => 'Pie chart',
        'c' => 'Box plot',
        'd' => 'Scatter plot',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the term for a number that describes a characteristic of a population?',
        'a' => 'Parameter',
        'b' => 'Statistic',
        'c' => 'Mean',
        'd' => 'Median',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What does a correlation coefficient measure?',
        'a' => 'Strength and direction of a linear relationship between two variables',
        'b' => 'Spread of the data',
        'c' => 'Probability of an event',
        'd' => 'Mean of the data',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the term for the square root of the variance?',
        'a' => 'Standard Deviation',
        'b' => 'Mean',
        'c' => 'Median',
        'd' => 'Range',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the measure of central tendency that divides a dataset into two equal halves?',
        'a' => 'Mean',
        'b' => 'Median',
        'c' => 'Mode',
        'd' => 'Range',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the formula for calculating the variance of a dataset?',
        'a' => 'Σ(x - μ)^2 / N',
        'b' => 'Σ(x - x̄)^2 / (N - 1)',
        'c' => 'Σx / N',
        'd' => 'Σ(x - μ) / N',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'In a normal distribution, what percentage of data falls within one standard deviation of the mean?',
        'a' => '68%',
        'b' => '95%',
        'c' => '99%',
        'd' => '50%',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which type of sampling method ensures that every individual in a population has an equal chance of being selected?',
        'a' => 'Simple Random Sampling',
        'b' => 'Stratified Sampling',
        'c' => 'Cluster Sampling',
        'd' => 'Systematic Sampling',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What type of distribution is represented by the bell-shaped curve?',
        'a' => 'Normal Distribution',
        'b' => 'Binomial Distribution',
        'c' => 'Poisson Distribution',
        'd' => 'Uniform Distribution',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the term for a statistical measure that summarizes a dataset with a single value?',
        'a' => 'Descriptive Statistic',
        'b' => 'Inferential Statistic',
        'c' => 'Probability Distribution',
        'd' => 'Sampling Error',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the purpose of hypothesis testing in statistics?',
        'a' => 'To determine if there is enough evidence to support a claim',
        'b' => 'To measure the average of a dataset',
        'c' => 'To calculate the standard deviation',
        'd' => 'To display data graphically',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is a p-value in hypothesis testing?',
        'a' => 'The probability of obtaining results at least as extreme as the observed results, assuming the null hypothesis is true',
        'b' => 'The proportion of data that falls within one standard deviation',
        'c' => 'The mean of the sample',
        'd' => 'The variance of the dataset',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the median of the following dataset: 5, 7, 3, 9, 6?',
        'a' => '6',
        'b' => '7',
        'c' => '5',
        'd' => '9',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What type of graph is best for showing the proportion of each category in a dataset?',
        'a' => 'Pie Chart',
        'b' => 'Histogram',
        'c' => 'Box Plot',
        'd' => 'Scatter Plot',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the measure of the average distance between each data point and the mean?',
        'a' => 'Mean Absolute Deviation',
        'b' => 'Variance',
        'c' => 'Standard Deviation',
        'd' => 'Range',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

// NUMBER THEORY


    [
        'field_id' => 6,
        
        'question' => 'What is the smallest prime number?',
        'a' => '1',
        'b' => '2',
        'c' => '3',
        'd' => '5',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the greatest common divisor (GCD) of 24 and 36?',
        'a' => '6',
        'b' => '12',
        'c' => '18',
        'd' => '24',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the least common multiple (LCM) of 4 and 5?',
        'a' => '10',
        'b' => '20',
        'c' => '15',
        'd' => '25',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which of the following is a composite number?',
        'a' => '7',
        'b' => '11',
        'c' => '9',
        'd' => '13',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the number of positive divisors of 28?',
        'a' => '4',
        'b' => '6',
        'c' => '8',
        'd' => '10',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the result of the prime factorization of 60?',
        'a' => '2^2 × 3 × 5',
        'b' => '2 × 3 × 5',
        'c' => '2 × 3^2 × 5',
        'd' => '2^3 × 3 × 5',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which of the following is a perfect square?',
        'a' => '18',
        'b' => '25',
        'c' => '27',
        'd' => '30',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the Euler’s totient function φ(9)?',
        'a' => '2',
        'b' => '6',
        'c' => '4',
        'd' => '8',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the sum of the first 10 positive integers?',
        'a' => '55',
        'b' => '45',
        'c' => '50',
        'd' => '60',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the modular inverse of 7 modulo 26?',
        'a' => '15',
        'b' => '13',
        'c' => '19',
        'd' => '23',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which of the following numbers is a Mersenne prime?',
        'a' => '31',
        'b' => '37',
        'c' => '41',
        'd' => '43',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the result of 2^5?',
        'a' => '32',
        'b' => '16',
        'c' => '64',
        'd' => '10',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the prime factorization of 84?',
        'a' => '2^2 × 3 × 7',
        'b' => '2 × 3 × 7',
        'c' => '2 × 2 × 3 × 5',
        'd' => '2^2 × 3^2 × 7',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the largest prime number less than 50?',
        'a' => '47',
        'b' => '43',
        'c' => '41',
        'd' => '37',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the number of prime numbers less than 10?',
        'a' => '4',
        'b' => '3',
        'c' => '5',
        'd' => '6',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the value of the greatest common divisor (GCD) of 54 and 24?',
        'a' => '6',
        'b' => '12',
        'c' => '18',
        'd' => '24',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the least common multiple (LCM) of 8 and 12?',
        'a' => '24',
        'b' => '48',
        'c' => '36',
        'd' => '16',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the result of the number of divisors of 30?',
        'a' => '8',
        'b' => '6',
        'c' => '12',
        'd' => '10',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which of the following numbers is not a perfect number?',
        'a' => '28',
        'b' => '6',
        'c' => '12',
        'd' => '496',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the result of Euler’s totient function φ(15)?',
        'a' => '8',
        'b' => '10',
        'c' => '12',
        'd' => '6',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the result of 7^2?',
        'a' => '49',
        'b' => '64',
        'c' => '36',
        'd' => '56',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the smallest positive integer that is both a multiple of 4 and 6?',
        'a' => '12',
        'b' => '24',
        'c' => '6',
        'd' => '18',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which of the following numbers is a prime number?',
        'a' => '39',
        'b' => '51',
        'c' => '29',
        'd' => '57',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'The number 15 can be expressed as the product of which prime numbers?',
        'a' => '3 × 5',
        'b' => '2 × 3 × 5',
        'c' => '3 × 3 × 5',
        'd' => '2 × 7 × 3',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the sum of all positive divisors of 12?',
        'a' => '28',
        'b' => '24',
        'c' => '18',
        'd' => '36',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the 5th Fibonacci number?',
        'a' => '5',
        'b' => '8',
        'c' => '13',
        'd' => '21',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which of the following numbers is a perfect square?',
        'a' => '50',
        'b' => '64',
        'c' => '85',
        'd' => '95',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the greatest common divisor (GCD) of 48 and 60?',
        'a' => '12',
        'b' => '6',
        'c' => '24',
        'd' => '30',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the least common multiple (LCM) of 9 and 15?',
        'a' => '45',
        'b' => '30',
        'c' => '60',
        'd' => '75',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'How many distinct prime factors does the number 84 have?',
        'a' => '3',
        'b' => '2',
        'c' => '4',
        'd' => '5',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the number of positive integers less than 10 that are relatively prime to 10?',
        'a' => '4',
        'b' => '3',
        'c' => '5',
        'd' => '6',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the prime factorization of 84?',
        'a' => '2^2 × 3 × 7',
        'b' => '2^2 × 3^2 × 7',
        'c' => '2 × 3 × 7',
        'd' => '2^3 × 3 × 7',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the number of positive divisors of 36?',
        'a' => '6',
        'b' => '9',
        'c' => '12',
        'd' => '18',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the sum of the first 10 positive integers?',
        'a' => '45',
        'b' => '50',
        'c' => '55',
        'd' => '60',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which of the following is a composite number?',
        'a' => '13',
        'b' => '17',
        'c' => '21',
        'd' => '29',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the 10th number in the Fibonacci sequence?',
        'a' => '34',
        'b' => '55',
        'c' => '89',
        'd' => '144',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the greatest common divisor (GCD) of 56 and 98?',
        'a' => '7',
        'b' => '14',
        'c' => '28',
        'd' => '56',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'How many distinct prime factors does the number 90 have?',
        'a' => '2',
        'b' => '3',
        'c' => '4',
        'd' => '5',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the least common multiple (LCM) of 8 and 12?',
        'a' => '24',
        'b' => '48',
        'c' => '96',
        'd' => '60',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the value of φ(30), where φ is the Euler’s totient function?',
        'a' => '8',
        'b' => '10',
        'c' => '12',
        'd' => '14',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which number is both a perfect square and a perfect cube?',
        'a' => '16',
        'b' => '36',
        'c' => '64',
        'd' => '100',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the result of the modulo operation 37 mod 5?',
        'a' => '2',
        'b' => '3',
        'c' => '4',
        'd' => '1',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the largest prime number less than 50?',
        'a' => '47',
        'b' => '43',
        'c' => '41',
        'd' => '37',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the 5th triangular number?',
        'a' => '10',
        'b' => '15',
        'c' => '21',
        'd' => '28',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the remainder when 123 is divided by 7?',
        'a' => '2',
        'b' => '4',
        'c' => '5',
        'd' => '6',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which of the following numbers is a perfect number?',
        'a' => '12',
        'b' => '18',
        'c' => '28',
        'd' => '30',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the 4th number in the sequence of prime numbers?',
        'a' => '7',
        'b' => '11',
        'c' => '13',
        'd' => '17',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the sum of the first 5 prime numbers?',
        'a' => '28',
        'b' => '30',
        'c' => '32',
        'd' => '35',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which number is both a multiple of 3 and a square number?',
        'a' => '9',
        'b' => '16',
        'c' => '25',
        'd' => '36',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the value of 5! (5 factorial)?',
        'a' => '120',
        'b' => '60',
        'c' => '24',
        'd' => '30',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the greatest common divisor (GCD) of 81 and 153?',
        'a' => '9',
        'b' => '18',
        'c' => '27',
        'd' => '45',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the result of the sum of the first 10 positive integers?',
        'a' => '55',
        'b' => '50',
        'c' => '45',
        'd' => '60',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the least common multiple (LCM) of 4 and 6?',
        'a' => '12',
        'b' => '24',
        'c' => '6',
        'd' => '8',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the 10th Fibonacci number?',
        'a' => '34',
        'b' => '55',
        'c' => '21',
        'd' => '13',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the result of 7^2?',
        'a' => '49',
        'b' => '42',
        'c' => '56',
        'd' => '64',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the smallest prime number greater than 20?',
        'a' => '23',
        'b' => '29',
        'c' => '19',
        'd' => '31',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the value of the 8th term in the arithmetic sequence where the first term is 3 and the common difference is 5?',
        'a' => '38',
        'b' => '43',
        'c' => '48',
        'd' => '53',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the product of the first 4 prime numbers?',
        'a' => '210',
        'b' => '120',
        'c' => '30',
        'd' => '60',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the number of factors of 36?',
        'a' => '9',
        'b' => '8',
        'c' => '6',
        'd' => '12',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the sum of the first 4 terms of the geometric sequence with the first term 2 and common ratio 3?',
        'a' => '80',
        'b' => '80',
        'c' => '80',
        'd' => '80',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the result of the expression (3 + 5)^2?',
        'a' => '64',
        'b' => '80',
        'c' => '50',
        'd' => '72',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the greatest common divisor (GCD) of 18 and 24?',
        'a' => '6',
        'b' => '8',
        'c' => '4',
        'd' => '12',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the value of 5 factorial (5!)?',
        'a' => '120',
        'b' => '100',
        'c' => '60',
        'd' => '30',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'How many prime numbers are there between 1 and 10?',
        'a' => '4',
        'b' => '5',
        'c' => '6',
        'd' => '3',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the sum of the first 5 terms of the sequence 2, 4, 8, 16, ...?',
        'a' => '30',
        'b' => '31',
        'c' => '32',
        'd' => '29',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the remainder when 23 is divided by 6?',
        'a' => '5',
        'b' => '4',
        'c' => '3',
        'd' => '2',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the value of the sum of squares of the first 3 positive integers?',
        'a' => '14',
        'b' => '12',
        'c' => '15',
        'd' => '16',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the 4th triangular number?',
        'a' => '10',
        'b' => '12',
        'c' => '8',
        'd' => '15',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which of the following numbers is not a perfect square?',
        'a' => '49',
        'b' => '64',
        'c' => '50',
        'd' => '81',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the next number in the sequence 1, 3, 6, 10, 15, ...?',
        'a' => '21',
        'b' => '20',
        'c' => '19',
        'd' => '22',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the sum of the squares of 2 and 5?',
        'a' => '29',
        'b' => '27',
        'c' => '25',
        'd' => '30',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the greatest common divisor (GCD) of 45 and 75?',
        'a' => '15',
        'b' => '10',
        'c' => '20',
        'd' => '25',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the least common multiple (LCM) of 4 and 5?',
        'a' => '20',
        'b' => '15',
        'c' => '25',
        'd' => '10',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the sum of the digits of 12345?',
        'a' => '15',
        'b' => '20',
        'c' => '18',
        'd' => '12',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which number is a perfect cube?',
        'a' => '27',
        'b' => '64',
        'c' => '81',
        'd' => '100',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the value of 3^4?',
        'a' => '81',
        'b' => '64',
        'c' => '27',
        'd' => '36',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the next prime number after 7?',
        'a' => '11',
        'b' => '13',
        'c' => '17',
        'd' => '19',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the result of 10 choose 2 (10C2)?',
        'a' => '45',
        'b' => '55',
        'c' => '60',
        'd' => '40',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the product of the first 4 prime numbers?',
        'a' => '210',
        'b' => '231',
        'c' => '240',
        'd' => '252',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the 6th Fibonacci number?',
        'a' => '8',
        'b' => '13',
        'c' => '21',
        'd' => '34',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which number is both a perfect square and a perfect cube?',
        'a' => '64',
        'b' => '36',
        'c' => '49',
        'd' => '100',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the 5th triangular number?',
        'a' => '15',
        'b' => '10',
        'c' => '20',
        'd' => '12',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the smallest prime number greater than 10?',
        'a' => '11',
        'b' => '13',
        'c' => '17',
        'd' => '19',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the least common multiple (LCM) of 4 and 5?',
        'a' => '20',
        'b' => '15',
        'c' => '10',
        'd' => '25',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the sum of the digits of 12345?',
        'a' => '20',
        'b' => '15',
        'c' => '12',
        'd' => '18',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which number is a perfect cube?',
        'a' => '27',
        'b' => '81',
        'c' => '100',
        'd' => '64',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the value of 3^4?',
        'a' => '64',
        'b' => '81',
        'c' => '36',
        'd' => '27',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the next prime number after 7?',
        'a' => '13',
        'b' => '11',
        'c' => '17',
        'd' => '19',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the result of 10 choose 2 (10C2)?',
        'a' => '60',
        'b' => '45',
        'c' => '40',
        'd' => '55',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the product of the first 4 prime numbers?',
        'a' => '231',
        'b' => '252',
        'c' => '210',
        'd' => '240',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the 6th Fibonacci number?',
        'a' => '13',
        'b' => '21',
        'c' => '8',
        'd' => '34',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which number is both a perfect square and a perfect cube?',
        'a' => '36',
        'b' => '49',
        'c' => '100',
        'd' => '64',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the 5th triangular number?',
        'a' => '20',
        'b' => '12',
        'c' => '15',
        'd' => '10',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the smallest prime number greater than 10?',
        'a' => '17',
        'b' => '13',
        'c' => '11',
        'd' => '19',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 6,
        
        'question' => 'What is the greatest common divisor (GCD) of 36 and 60?',
        'a' => '12',
        'b' => '18',
        'c' => '6',
        'd' => '30',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the sum of the first 5 prime numbers?',
        'a' => '28',
        'b' => '24',
        'c' => '20',
        'd' => '26',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which of the following is a composite number?',
        'a' => '13',
        'b' => '7',
        'c' => '15',
        'd' => '29',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the value of 5! (5 factorial)?',
        'a' => '60',
        'b' => '120',
        'c' => '30',
        'd' => '24',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the remainder when 29 is divided by 5?',
        'a' => '3',
        'b' => '4',
        'c' => '2',
        'd' => '1',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the largest prime factor of 42?',
        'a' => '2',
        'b' => '5',
        'c' => '3',
        'd' => '7',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the result of 2^5?',
        'a' => '16',
        'b' => '32',
        'c' => '24',
        'd' => '64',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the 4th triangular number?',
        'a' => '8',
        'b' => '10',
        'c' => '12',
        'd' => '6',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'Which of the following numbers is a perfect square?',
        'a' => '50',
        'b' => '53',
        'c' => '49',
        'd' => '52',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the smallest composite number?',
        'a' => '6',
        'b' => '8',
        'c' => '4',
        'd' => '9',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 6,
        
        'question' => 'What is the value of the 7th Fibonacci number?',
        'a' => '13',
        'b' => '21',
        'c' => '34',
        'd' => '8',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],































































































        ];


        DB::table('questions')->insert($questions);
    }
}
