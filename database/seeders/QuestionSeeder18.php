<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class QuestionSeeder18 extends Seeder
{
    /**
     * Run the database seeds.
     */
    static   public function run(): void
    {
        $questions =    [
            // [
            //     'field_id' => 18,
            //    
            //     'question' => 'Was "Friends" set in Chicago?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'b', // It was set in New York City
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 18,
            //    
            //     'question' => 'Is "The Beatles" a rock band from the 1960s?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 18,
            //    
            //     'question' => 'Is "Frozen" a Pixar movie?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'b', // It's a Disney Animation Studios film
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 18,
            //    
            //     'question' => 'Did the movie "Inception" star Leonardo DiCaprio?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 18,
            //    
            //     'question' => 'Is "The Great Gatsby" a novel written by Ernest Hemingway?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'b', // Written by F. Scott Fitzgerald
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 18,
            //    
            //     'question' => 'Is "Stranger Things" a Netflix original series?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 18,
            //    
            //     'question' => 'Was "The Dark Knight" directed by Steven Spielberg?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'b', // Directed by Christopher Nolan
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 18,
            //    
            //     'question' => 'Is Harry Potter a character created by J.K. Rowling?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 18,
            //    
            //     'question' => 'Is "Breaking Bad" a show about a high school teacher who becomes a drug dealer?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 18,
            //    
            //     'question' => 'Is "The Office" set in Scranton, Pennsylvania?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
        
        
        
        
        
        
        
        
            // [
            //     'field_id' => 18,
            //    
            //     'question' => 'Is "Friends" a TV show that aired in the 2000s?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'b', // It aired from 1994 to 2004
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 18,
            //    
            //     'question' => 'Is "The Crown" a Netflix series about the British royal family?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 18,
            //    
            //     'question' => 'Was "Black Panther" the first Marvel movie to win an Oscar?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 18,
            //    
            //     'question' => 'Is "The Mandalorian" a series set in the Star Wars universe?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 18,
            //    
            //     'question' => 'Did "The Lion King" originally release in 1994?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 18,
            //    
            //     'question' => 'Is "The Godfather" a movie directed by Martin Scorsese?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'b', // Directed by Francis Ford Coppola
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 18,
            //    
            //     'question' => 'Did "Breaking Bad" run for six seasons?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'b', // It ran for five seasons
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 18,
            //    
            //     'question' => 'Is "Pulp Fiction" a film directed by Quentin Tarantino?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 18,
            //    
            //     'question' => 'Is "The Shining" a horror novel written by Stephen King?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 18,
            //    
            //     'question' => 'Did "Seinfeld" end in the year 2000?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'b', // It ended in 1998
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
        
        
        
        
        
            // [
            //     'field_id' => 18,
            //    
            //     'question' => 'Is "Wonder Woman" a character from DC Comics?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 18,
            //    
            //     'question' => 'Was "Friends" originally aired on NBC?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 18,
            //    
            //     'question' => 'Is "Darth Vader" the father of Luke Skywalker?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 18,
            //    
            //     'question' => 'Is "Inception" a movie directed by James Cameron?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'b', // Directed by Christopher Nolan
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 18,
            //    
            //     'question' => 'Did the band "Queen" release the song "Bohemian Rhapsody"?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 18,
            //    
            //     'question' => 'Is "Spider-Man: Into the Spider-Verse" an animated film?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 18,
            //    
            //     'question' => 'Is "Westworld" a series based on a movie from the 1970s?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 18,
            //    
            //     'question' => 'Was "Jaws" directed by Alfred Hitchcock?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'b', // Directed by Steven Spielberg
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 18,
            //    
            //     'question' => 'Is "The Matrix" a film that was released in 1999?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 18,
            //    
            //     'question' => 'Did "The Office" (US) have more than 200 episodes?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a', // It had 201 episodes
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            [ 'field_id' => 18, 'question' => 'Who directed the movie "Pulp Fiction"?', 'a' => 'Steven Spielberg', 'b' => 'Quentin Tarantino', 'c' => 'Martin Scorsese', 'd' => 'Christopher Nolan', 'answer' => 'b', 'created_at' => now(), 'updated_at' => now() ], [ 'field_id' => 18, 'question' => 'Which TV show featured the character "Walter White"?', 'a' => 'The Sopranos', 'b' => 'Mad Men', 'c' => 'Breaking Bad', 'd' => 'The Wire', 'answer' => 'c', 'created_at' => now(), 'updated_at' => now() ], [ 'field_id' => 18, 'question' => 'In which year was the original "Jurassic Park" movie released?', 'a' => '1990', 'b' => '1993', 'c' => '1995', 'd' => '1997', 'answer' => 'b', 'created_at' => now(), 'updated_at' => now() ], [ 'field_id' => 18, 'question' => 'Which band released the album "The Dark Side of the Moon"?', 'a' => 'The Beatles', 'b' => 'Pink Floyd', 'c' => 'Led Zeppelin', 'd' => 'The Rolling Stones', 'answer' => 'b', 'created_at' => now(), 'updated_at' => now() ], [ 'field_id' => 18, 'question' => 'Who played the character "Jack Sparrow" in the "Pirates of the Caribbean" movies?', 'a' => 'Johnny Depp', 'b' => 'Orlando Bloom', 'c' => 'Brad Pitt', 'd' => 'Leonardo DiCaprio', 'answer' => 'a', 'created_at' => now(), 'updated_at' => now() ], [ 'field_id' => 18, 'question' => 'Which movie won the Best Picture Oscar in 2020?', 'a' => '1917', 'b' => 'Joker', 'c' => 'Once Upon a Time in Hollywood', 'd' => 'Parasite', 'answer' => 'd', 'created_at' => now(), 'updated_at' => now() ], [ 'field_id' => 18, 'question' => 'Which of these is a song by The Beatles?', 'a' => 'Stairway to Heaven', 'b' => 'Bohemian Rhapsody', 'c' => 'Hey Jude', 'd' => 'Hotel California', 'answer' => 'c', 'created_at' => now(), 'updated_at' => now() ], [ 'field_id' => 18, 'question' => 'Which actor portrayed "Tony Stark" in the Marvel Cinematic Universe?', 'a' => 'Chris Evans', 'b' => 'Chris Hemsworth', 'c' => 'Robert Downey Jr.', 'd' => 'Mark Ruffalo', 'answer' => 'c', 'created_at' => now(), 'updated_at' => now() ], [ 'field_id' => 18, 'question' => 'Which TV show is known for the quote "Winter is coming"?', 'a' => 'The Witcher', 'b' => 'Game of Thrones', 'c' => 'Vikings', 'd' => 'The Walking Dead', 'answer' => 'b', 'created_at' => now(), 'updated_at' => now() ], [ 'field_id' => 18, 'question' => 'Which actress starred as "Katniss Everdeen" in "The Hunger Games" series?', 'a' => 'Jennifer Lawrence', 'b' => 'Emma Stone', 'c' => 'Scarlett Johansson', 'd' => 'Kristen Stewart', 'answer' => 'a', 'created_at' => now(), 'updated_at' => now() ],
        
        
        
            [
                'field_id' => 18,
               
                'question' => 'Which film features the quote "Here\’s looking at you, kid"?',
                'a' => 'Gone with the Wind',
                'b' => 'Casablanca',
                'c' => 'The Godfather',
                'd' => 'Citizen Kane',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Who is the author of the "Harry Potter" series?',
                'a' => 'J.K. Rowling',
                'b' => 'Stephen King',
                'c' => 'J.R.R. Tolkien',
                'd' => 'George R.R. Martin',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which TV series is set in the fictional town of Hawkins, Indiana?',
                'a' => 'Riverdale',
                'b' => 'Stranger Things',
                'c' => 'Twin Peaks',
                'd' => 'The X-Files',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which actor starred as the "Joker" in the 2019 movie?',
                'a' => 'Joaquin Phoenix',
                'b' => 'Heath Ledger',
                'c' => 'Jared Leto',
                'd' => 'Jack Nicholson',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which musical features the song "The Circle of Life"?',
                'a' => 'The Lion King',
                'b' => 'Les Misérables',
                'c' => 'Phantom of the Opera',
                'd' => 'Cats',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'What is the name of the kingdom in Disney’s "Frozen"?',
                'a' => 'Narnia',
                'b' => 'Arendelle',
                'c' => 'Atlantis',
                'd' => 'Mordor',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which famous artist painted the ceiling of the Sistine Chapel?',
                'a' => 'Leonardo da Vinci',
                'b' => 'Michelangelo',
                'c' => 'Raphael',
                'd' => 'Donatello',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which book starts with the line "Call me Ishmael"?',
                'a' => 'Moby-Dick',
                'b' => '1984',
                'c' => 'The Great Gatsby',
                'd' => 'Pride and Prejudice',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'In which movie does Tom Hanks play a character stranded on an island?',
                'a' => 'Forrest Gump',
                'b' => 'Cast Away',
                'c' => 'Saving Private Ryan',
                'd' => 'The Terminal',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which actor voices "Woody" in the "Toy Story" films?',
                'a' => 'Tim Allen',
                'b' => 'Tom Hanks',
                'c' => 'Billy Crystal',
                'd' => 'John Goodman',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
        
        
            [
                'field_id' => 18,
               
                'question' => 'Which movie features the song "My Heart Will Go On"?',
                'a' => 'Titanic',
                'b' => 'The Bodyguard',
                'c' => 'Moulin Rouge!',
                'd' => 'Pretty Woman',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Who wrote the novel "To Kill a Mockingbird"?',
                'a' => 'Harper Lee',
                'b' => 'George Orwell',
                'c' => 'Mark Twain',
                'd' => 'F. Scott Fitzgerald',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which character does Emilia Clarke play in "Game of Thrones"?',
                'a' => 'Cersei Lannister',
                'b' => 'Arya Stark',
                'c' => 'Sansa Stark',
                'd' => 'Daenerys Targaryen',
                'answer' => 'd',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which Marvel superhero is known as the "Merc with a Mouth"?',
                'a' => 'Iron Man',
                'b' => 'Deadpool',
                'c' => 'Spider-Man',
                'd' => 'Hulk',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which movie was the first to feature the character "James Bond"?',
                'a' => 'Dr. No',
                'b' => 'From Russia with Love',
                'c' => 'Goldfinger',
                'd' => 'Thunderball',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which famous artist is known for painting "The Starry Night"?',
                'a' => 'Pablo Picasso',
                'b' => 'Vincent van Gogh',
                'c' => 'Claude Monet',
                'd' => 'Leonardo da Vinci',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which of these movies was directed by Alfred Hitchcock?',
                'a' => 'Rear Window',
                'b' => 'Citizen Kane',
                'c' => 'The Godfather',
                'd' => 'Gone with the Wind',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'What is the name of the coffee shop in "Friends"?',
                'a' => 'Central Park Café',
                'b' => 'Central Perk',
                'c' => 'Java Joe’s',
                'd' => 'Monk’s Café',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which character in "The Lord of the Rings" is played by Elijah Wood?',
                'a' => 'Aragorn',
                'b' => 'Frodo Baggins',
                'c' => 'Legolas',
                'd' => 'Gandalf',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which song is associated with the movie "Dirty Dancing"?',
                'a' => 'Footloose',
                'b' => 'Time of My Life',
                'c' => 'Eye of the Tiger',
                'd' => 'Take My Breath Away',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
        
        
            [
                'field_id' => 18,
               
                'question' => 'Which character says "I am your father" in "Star Wars"?',
                'a' => 'Luke Skywalker',
                'b' => 'Darth Vader',
                'c' => 'Obi-Wan Kenobi',
                'd' => 'Yoda',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which movie features a DeLorean time machine?',
                'a' => 'The Terminator',
                'b' => 'Back to the Future',
                'c' => 'Blade Runner',
                'd' => 'The Matrix',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which singer is known as "The Queen of Pop"?',
                'a' => 'Madonna',
                'b' => 'Whitney Houston',
                'c' => 'Celine Dion',
                'd' => 'Mariah Carey',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'What is the title of the first "Harry Potter" book?',
                'a' => 'Harry Potter and the Chamber of Secrets',
                'b' => 'Harry Potter and the Goblet of Fire',
                'c' => 'Harry Potter and the Philosopher’s Stone',
                'd' => 'Harry Potter and the Prisoner of Azkaban',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which movie features the iconic dance scene between John Travolta and Uma Thurman?',
                'a' => 'Saturday Night Fever',
                'b' => 'Grease',
                'c' => 'Pulp Fiction',
                'd' => 'Urban Cowboy',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which band released the hit song "Bohemian Rhapsody"?',
                'a' => 'The Rolling Stones',
                'b' => 'The Beatles',
                'c' => 'Queen',
                'd' => 'Led Zeppelin',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which actress plays Hermione Granger in the "Harry Potter" films?',
                'a' => 'Emma Watson',
                'b' => 'Keira Knightley',
                'c' => 'Natalie Portman',
                'd' => 'Maggie Smith',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which movie is known for the line "You can’t handle the truth!"?',
                'a' => 'Gladiator',
                'b' => 'A Few Good Men',
                'c' => 'The Shawshank Redemption',
                'd' => 'Braveheart',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which TV series is set in the fictional country of Westeros?',
                'a' => 'The Witcher',
                'b' => 'The Mandalorian',
                'c' => 'Game of Thrones',
                'd' => 'The Crown',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Who directed the "Lord of the Rings" trilogy?',
                'a' => 'Steven Spielberg',
                'b' => 'Peter Jackson',
                'c' => 'James Cameron',
                'd' => 'Ridley Scott',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
        
        
            [
                'field_id' => 18,
               
                'question' => 'Which artist released the album "Thriller"?',
                'a' => 'Prince',
                'b' => 'Michael Jackson',
                'c' => 'Stevie Wonder',
                'd' => 'David Bowie',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which animated film features the character "Woody"?',
                'a' => 'Finding Nemo',
                'b' => 'The Lion King',
                'c' => 'Toy Story',
                'd' => 'Monsters, Inc.',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Who is the lead singer of the band U2?',
                'a' => 'Bono',
                'b' => 'Freddie Mercury',
                'c' => 'Mick Jagger',
                'd' => 'David Bowie',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which film is known for the quote "I’m going to make him an offer he can’t refuse"?',
                'a' => 'Goodfellas',
                'b' => 'The Godfather',
                'c' => 'Scarface',
                'd' => 'Pulp Fiction',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which TV show features a chemistry teacher turned methamphetamine manufacturer?',
                'a' => 'Breaking Bad',
                'b' => 'Dexter',
                'c' => 'The Sopranos',
                'd' => 'The Wire',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Who directed the movie "Inception"?',
                'a' => 'Quentin Tarantino',
                'b' => 'Christopher Nolan',
                'c' => 'Martin Scorsese',
                'd' => 'James Cameron',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which actress stars as Katniss Everdeen in "The Hunger Games" series?',
                'a' => 'Emma Stone',
                'b' => 'Jennifer Lawrence',
                'c' => 'Kristen Stewart',
                'd' => 'Shailene Woodley',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which famous painting features a woman with a mysterious smile?',
                'a' => 'The Starry Night',
                'b' => 'The Last Supper',
                'c' => 'Mona Lisa',
                'd' => 'Girl with a Pearl Earring',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which TV series is centered around the fictional paper company Dunder Mifflin?',
                'a' => 'Parks and Recreation',
                'b' => 'The Office',
                'c' => 'Brooklyn Nine-Nine',
                'd' => '30 Rock',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which famous actor portrayed the character of Tony Stark in the Marvel Cinematic Universe?',
                'a' => 'Chris Evans',
                'b' => 'Robert Downey Jr.',
                'c' => 'Chris Hemsworth',
                'd' => 'Mark Ruffalo',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
        
        
            [
                'field_id' => 18,
               
                'question' => 'Which movie features the character "Forrest Gump"?',
                'a' => 'Cast Away',
                'b' => 'Forrest Gump',
                'c' => 'Saving Private Ryan',
                'd' => 'Philadelphia',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Who sang the hit song "Rolling in the Deep"?',
                'a' => 'Beyoncé',
                'b' => 'Adele',
                'c' => 'Lady Gaga',
                'd' => 'Rihanna',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which movie features a group of friends looking for a lost boy named Will?',
                'a' => 'Stand by Me',
                'b' => 'The Goonies',
                'c' => 'Stranger Things',
                'd' => 'E.T. the Extra-Terrestrial',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which artist is known for the hit song "Purple Rain"?',
                'a' => 'Prince',
                'b' => 'Michael Jackson',
                'c' => 'David Bowie',
                'd' => 'Stevie Wonder',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Who played the character of Jack Dawson in "Titanic"?',
                'a' => 'Leonardo DiCaprio',
                'b' => 'Brad Pitt',
                'c' => 'Johnny Depp',
                'd' => 'Tom Cruise',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which movie is known for the quote "Life is like a box of chocolates"?',
                'a' => 'The Green Mile',
                'b' => 'Cast Away',
                'c' => 'Forrest Gump',
                'd' => 'A Beautiful Mind',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which TV show features the character "Walter White"?',
                'a' => 'The Sopranos',
                'b' => 'Mad Men',
                'c' => 'Breaking Bad',
                'd' => 'Better Call Saul',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which animated series features characters like Bart, Homer, and Marge?',
                'a' => 'Family Guy',
                'b' => 'The Simpsons',
                'c' => 'South Park',
                'd' => 'Futurama',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Who is the author of the "A Song of Ice and Fire" series, which inspired "Game of Thrones"?',
                'a' => 'J.K. Rowling',
                'b' => 'George R.R. Martin',
                'c' => 'J.R.R. Tolkien',
                'd' => 'Stephen King',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which movie features the character "The Dude"?',
                'a' => 'Pulp Fiction',
                'b' => 'Fight Club',
                'c' => 'The Big Lebowski',
                'd' => 'American Psycho',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
        
        
            [
                'field_id' => 18,
               
                'question' => 'Which TV show features a group of survivors on a mysterious island?',
                'a' => 'Lost',
                'b' => 'Survivor',
                'c' => 'Gilligan’s Island',
                'd' => 'The 100',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which movie features the quote "Here’s looking at you, kid"?',
                'a' => 'Gone with the Wind',
                'b' => 'Casablanca',
                'c' => 'Citizen Kane',
                'd' => 'It’s a Wonderful Life',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Who played the character of Tony Montana in "Scarface"?',
                'a' => 'Robert De Niro',
                'b' => 'Marlon Brando',
                'c' => 'Al Pacino',
                'd' => 'Jack Nicholson',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which band released the album "Dark Side of the Moon"?',
                'a' => 'The Beatles',
                'b' => 'Led Zeppelin',
                'c' => 'Pink Floyd',
                'd' => 'The Rolling Stones',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which actor played the role of Jack Sparrow in "Pirates of the Caribbean"?',
                'a' => 'Orlando Bloom',
                'b' => 'Johnny Depp',
                'c' => 'Hugh Jackman',
                'd' => 'Brad Pitt',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'What is the name of the coffee shop in the TV show "Friends"?',
                'a' => 'Central Perk',
                'b' => 'Monk’s Café',
                'c' => 'MacLaren’s Pub',
                'd' => 'The Peach Pit',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which artist is known for the song "Shape of You"?',
                'a' => 'Ed Sheeran',
                'b' => 'Justin Bieber',
                'c' => 'Shawn Mendes',
                'd' => 'Bruno Mars',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which movie features a theme park with cloned dinosaurs?',
                'a' => 'King Kong',
                'b' => 'Jurassic Park',
                'c' => 'The Lost World',
                'd' => 'Avatar',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Who played the character of Neo in "The Matrix" trilogy?',
                'a' => 'Keanu Reeves',
                'b' => 'Tom Cruise',
                'c' => 'Matt Damon',
                'd' => 'Brad Pitt',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which artist is known for the song "Uptown Funk"?',
                'a' => 'Bruno Mars',
                'b' => 'Pharrell Williams',
                'c' => 'Justin Timberlake',
                'd' => 'Sam Smith',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
        
        
            [
                'field_id' => 18,
               
                'question' => 'Which movie features the character "Indiana Jones"?',
                'a' => 'Raiders of the Lost Ark',
                'b' => 'The Mummy',
                'c' => 'Jurassic Park',
                'd' => 'Back to the Future',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which song by Queen became an anthem for sports events?',
                'a' => 'Bohemian Rhapsody',
                'b' => 'We Are the Champions',
                'c' => 'Don’t Stop Me Now',
                'd' => 'Somebody to Love',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which TV series features the character "Eleven" with telekinetic powers?',
                'a' => 'The Umbrella Academy',
                'b' => 'The X-Files',
                'c' => 'Stranger Things',
                'd' => 'Heroes',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which movie features the line "May the Force be with you"?',
                'a' => 'Star Trek',
                'b' => 'Star Wars',
                'c' => 'The Matrix',
                'd' => 'Guardians of the Galaxy',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Who starred as "The Joker" in "The Dark Knight"?',
                'a' => 'Joaquin Phoenix',
                'b' => 'Heath Ledger',
                'c' => 'Jared Leto',
                'd' => 'Jack Nicholson',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which animated series features the characters "Rick" and "Morty"?',
                'a' => 'Futurama',
                'b' => 'Family Guy',
                'c' => 'Rick and Morty',
                'd' => 'South Park',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which actor plays the role of Captain America in the Marvel Cinematic Universe?',
                'a' => 'Chris Hemsworth',
                'b' => 'Chris Evans',
                'c' => 'Robert Downey Jr.',
                'd' => 'Mark Ruffalo',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which artist released the song "Bad Guy"?',
                'a' => 'Dua Lipa',
                'b' => 'Billie Eilish',
                'c' => 'Ariana Grande',
                'd' => 'Lorde',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which movie features the character "John Wick"?',
                'a' => 'The Matrix',
                'b' => 'Die Hard',
                'c' => 'John Wick',
                'd' => 'Mad Max: Fury Road',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which pop star is known for the album "1989"?',
                'a' => 'Katy Perry',
                'b' => 'Taylor Swift',
                'c' => 'Selena Gomez',
                'd' => 'Ariana Grande',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
        
            [
                'field_id' => 18,
               
                'question' => 'Which TV show follows the lives of six friends living in New York City?',
                'a' => 'How I Met Your Mother',
                'b' => 'Friends',
                'c' => 'The Big Bang Theory',
                'd' => 'Seinfeld',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Who directed the movie "Inception"?',
                'a' => 'Steven Spielberg',
                'b' => 'Christopher Nolan',
                'c' => 'James Cameron',
                'd' => 'Quentin Tarantino',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which song is known for its iconic music video featuring a marching band?',
                'a' => 'Hey Jude',
                'b' => 'We Will Rock You',
                'c' => 'Seven Nation Army',
                'd' => 'Uptown Funk',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which movie features the quote "I\'ll be back"?',
                'a' => 'RoboCop',
                'b' => 'Terminator',
                'c' => 'Die Hard',
                'd' => 'Predator',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which band is known for the album "Nevermind"?',
                'a' => 'Pearl Jam',
                'b' => 'Nirvana',
                'c' => 'Soundgarden',
                'd' => 'Alice in Chains',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Who played the role of Wonder Woman in the 2017 film?',
                'a' => 'Scarlett Johansson',
                'b' => 'Gal Gadot',
                'c' => 'Brie Larson',
                'd' => 'Margot Robbie',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which TV series is set in the fictional town of Hawkins, Indiana?',
                'a' => 'Twin Peaks',
                'b' => 'Stranger Things',
                'c' => 'Riverdale',
                'd' => 'The X-Files',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which artist released the album "25" in 2015?',
                'a' => 'Beyoncé',
                'b' => 'Adele',
                'c' => 'Taylor Swift',
                'd' => 'Rihanna',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which movie features the song "My Heart Will Go On"?',
                'a' => 'Ghost',
                'b' => 'The Bodyguard',
                'c' => 'Titanic',
                'd' => 'Moulin Rouge!',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Who starred as the lead character in the movie "Deadpool"?',
                'a' => 'Ryan Gosling',
                'b' => 'Ryan Reynolds',
                'c' => 'Chris Pratt',
                'd' => 'Tom Hardy',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
        
        
            [
                'field_id' => 18,
               
                'question' => 'Which movie features the character "Forrest Gump"?',
                'a' => 'Cast Away',
                'b' => 'The Green Mile',
                'c' => 'Forrest Gump',
                'd' => 'Saving Private Ryan',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which artist is known for the hit song "Rolling in the Deep"?',
                'a' => 'Beyoncé',
                'b' => 'Adele',
                'c' => 'Taylor Swift',
                'd' => 'Lady Gaga',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which TV show features a chemistry teacher turned methamphetamine manufacturer?',
                'a' => 'The Sopranos',
                'b' => 'Mad Men',
                'c' => 'Breaking Bad',
                'd' => 'Narcos',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which movie features the quote "You can’t handle the truth!"?',
                'a' => 'A Few Good Men',
                'b' => 'The Godfather',
                'c' => 'Goodfellas',
                'd' => 'Scarface',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Who starred as the main character in "The Truman Show"?',
                'a' => 'Jim Carrey',
                'b' => 'Tom Hanks',
                'c' => 'Robin Williams',
                'd' => 'Will Smith',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which artist is known for the album "Thriller"?',
                'a' => 'Prince',
                'b' => 'Michael Jackson',
                'c' => 'Madonna',
                'd' => 'Whitney Houston',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which movie franchise features the character "Harry Potter"?',
                'a' => 'The Lord of the Rings',
                'b' => 'The Hunger Games',
                'c' => 'Harry Potter',
                'd' => 'Percy Jackson',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Who directed the movie "Pulp Fiction"?',
                'a' => 'Martin Scorsese',
                'b' => 'Quentin Tarantino',
                'c' => 'Francis Ford Coppola',
                'd' => 'Steven Spielberg',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which TV show is known for the phrase "Winter is coming"?',
                'a' => 'The Witcher',
                'b' => 'Game of Thrones',
                'c' => 'The Mandalorian',
                'd' => 'Vikings',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which artist is known for the hit "Blinding Lights"?',
                'a' => 'The Weeknd',
                'b' => 'Drake',
                'c' => 'Post Malone',
                'd' => 'Bruno Mars',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
        
        
            [
                'field_id' => 18,
               
                'question' => 'Which Nigerian movie is known for its story about a powerful political figure and his daughter?',
                'a' => 'The Wedding Party',
                'b' => 'King of Boys',
                'c' => 'October 1',
                'd' => 'Lionheart',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which Indian film is famous for its depiction of the life of a mathematician who made significant contributions to number theory?',
                'a' => '3 Idiots',
                'b' => 'Dangal',
                'c' => 'The Man Who Knew Infinity',
                'd' => 'Padman',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which Korean drama tells the story of a group of people trying to survive a zombie outbreak in a high school?',
                'a' => 'Squid Game',
                'b' => 'Train to Busan',
                'c' => 'Kingdom',
                'd' => 'All of Us Are Dead',
                'answer' => 'd',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which Filipino TV series is known for its story about a woman with a special connection to wild animals?',
                'a' => 'Ang Probinsyano',
                'b' => 'Darna',
                'c' => 'Lobo',
                'd' => 'Encantadia',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which Indian movie became an international hit for its portrayal of a man’s journey to prove his self-worth to society?',
                'a' => 'Baahubali',
                'b' => 'Lagaan',
                'c' => 'PK',
                'd' => 'Slumdog Millionaire',
                'answer' => 'd',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which Korean film won the Academy Award for Best Picture in 2020?',
                'a' => 'Oldboy',
                'b' => 'Parasite',
                'c' => 'Burning',
                'd' => 'Memories of Murder',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which Nollywood movie is about a woman who struggles to balance her work as a wedding planner with her personal life?',
                'a' => 'Fifty',
                'b' => 'The Wedding Party',
                'c' => 'Chief Daddy',
                'd' => 'Living in Bondage',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which Indian web series focuses on the lives of four female friends navigating the challenges of modern-day Mumbai?',
                'a' => 'Made in Heaven',
                'b' => 'Sacred Games',
                'c' => 'Four More Shots Please!',
                'd' => 'Mirzapur',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which Korean drama is set in a dystopian world where people participate in deadly games for a chance to win a large sum of money?',
                'a' => 'Squid Game',
                'b' => 'Sweet Home',
                'c' => 'Hellbound',
                'd' => 'Alice',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which Filipino film is about a woman who enters a beauty pageant to raise money for her family?',
                'a' => 'Kita Kita',
                'b' => 'Hello, Love, Goodbye',
                'c' => 'Four Sisters and a Wedding',
                'd' => 'Bwakaw',
                'answer' => 'd',
                'created_at' => now(),
                'updated_at' => now()
            ],
        
            [
                'field_id' => 18,
               
                'question' => 'Which Nigerian TV series revolves around the intense world of corporate banking?',
                'a' => 'Tinsel',
                'b' => 'Castle and Castle',
                'c' => 'Hush',
                'd' => 'Battleground',
                'answer' => 'd',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which Indian movie tells the story of an elderly couple who rediscover their love for each other?',
                'a' => 'Kabir Singh',
                'b' => 'Piku',
                'c' => 'Badhaai Ho',
                'd' => 'The Lunchbox',
                'answer' => 'd',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which Korean drama centers around a woman who travels through time to alter her fate?',
                'a' => 'Goblin',
                'b' => 'The King: Eternal Monarch',
                'c' => 'Hotel Del Luna',
                'd' => 'Signal',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which Filipino film follows the journey of a maid working in Singapore?',
                'a' => 'Caregiver',
                'b' => 'Anak',
                'c' => 'Bata, Bata... Pa\'no Ka Ginawa?',
                'd' => 'Madrasta',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which Indian TV show is about the struggles and triumphs of a middle-class family in Mumbai?',
                'a' => 'Yeh Rishta Kya Kehlata Hai',
                'b' => 'Anupamaa',
                'c' => 'Bade Achhe Lagte Hain',
                'd' => 'Taarak Mehta Ka Ooltah Chashmah',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which Korean movie is about a group of people trapped in a mall during a zombie apocalypse?',
                'a' => 'Peninsula',
                'b' => 'The Wailing',
                'c' => 'Alive',
                'd' => 'Train to Busan Presents: Peninsula',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which Nigerian film is about a young woman who disguises herself as a man to get a job?',
                'a' => 'Omo Ghetto: The Saga',
                'b' => 'Your Excellency',
                'c' => 'Isoken',
                'd' => 'The Set Up',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which Indian film is known for its powerful story about women wrestlers?',
                'a' => 'Chak De! India',
                'b' => 'Sultan',
                'c' => 'Dangal',
                'd' => 'Mary Kom',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which Korean drama features a rich heir and a poor girl falling in love?',
                'a' => 'Boys Over Flowers',
                'b' => 'Crash Landing on You',
                'c' => 'The Heirs',
                'd' => 'My Love From the Star',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which Filipino TV series is about twin sisters with contrasting personalities?',
                'a' => 'Mara Clara',
                'b' => 'Sana Bukas Pa Ang Kahapon',
                'c' => 'Kadenang Ginto',
                'd' => 'Impostora',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
        
        
            [
                'field_id' => 18,
               
                'question' => 'Which Nigerian film is centered around a historic event where a Nigerian musician and activist confronts military corruption?',
                'a' => '76',
                'b' => 'Half of a Yellow Sun',
                'c' => 'Fela\'s Republic',
                'd' => '93 Days',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which Indian movie features the story of a man with an exceptional memory who seeks revenge for the murder of his wife?',
                'a' => 'Ghajini',
                'b' => 'Kahaani',
                'c' => 'Drishyam',
                'd' => 'Andhadhun',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which Korean drama tells the story of a woman who sees ghosts and partners with a chef to solve their unresolved issues?',
                'a' => 'The Master’s Sun',
                'b' => 'Oh My Ghost',
                'c' => 'Hotel Del Luna',
                'd' => 'Let’s Fight, Ghost',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which Filipino movie revolves around a young man who pursues his dreams of becoming a professional singer while dealing with his father’s expectations?',
                'a' => 'The Hows of Us',
                'b' => 'Bakwit Boys',
                'c' => 'Goyo: Ang Batang Heneral',
                'd' => 'Alone/Together',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which Indian web series is about an undercover agent who must balance his duty to his country and his family life?',
                'a' => 'Paatal Lok',
                'b' => 'Sacred Games',
                'c' => 'The Family Man',
                'd' => 'Mirzapur',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which Korean movie is about a mother who takes on the judicial system to find justice for her wrongfully accused son?',
                'a' => 'Mother',
                'b' => 'A Moment to Remember',
                'c' => 'Hope',
                'd' => 'Silenced',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which Nigerian TV series is about the dramatic lives of five women living in Lagos?',
                'a' => 'Shuga',
                'b' => 'Skinny Girl in Transit',
                'c' => 'Gidi Up',
                'd' => 'Before 30',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which Indian movie is a coming-of-age story that focuses on the pressures faced by a young girl living in a conservative family?',
                'a' => 'Secret Superstar',
                'b' => 'Nil Battey Sannata',
                'c' => 'English Vinglish',
                'd' => 'Dear Zindagi',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which Korean drama follows the life of a woman who leads a double life as a fashion designer by day and a masked vigilante by night?',
                'a' => 'My Love from the Star',
                'b' => 'Healer',
                'c' => 'The Girl Who Sees Scents',
                'd' => 'Strong Woman Do Bong-soon',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 18,
               
                'question' => 'Which Filipino TV series features a story of time travel and love, where a man from the past meets a woman from the future?',
                'a' => 'A Love to Last',
                'b' => 'Walang Hanggan',
                'c' => 'Ikaw Lamang',
                'd' => 'The General’s Daughter',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
     
    [
        'field_id' => 18,
       
        'question' => 'In Greek mythology, who is known as the god of the sea?',
        'a' => 'Zeus',
        'b' => 'Hades',
        'c' => 'Poseidon',
        'd' => 'Apollo',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Norse mythology, what is the name of the world tree that connects the nine realms?',
        'a' => 'Mjölnir',
        'b' => 'Yggdrasil',
        'c' => 'Bifröst',
        'd' => 'Ragnarök',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Egyptian mythology, who is the god of the underworld?',
        'a' => 'Ra',
        'b' => 'Anubis',
        'c' => 'Osiris',
        'd' => 'Horus',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Hindu mythology, who is considered the preserver of the universe?',
        'a' => 'Brahma',
        'b' => 'Shiva',
        'c' => 'Vishnu',
        'd' => 'Indra',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Roman mythology, who is the equivalent of the Greek goddess Athena?',
        'a' => 'Diana',
        'b' => 'Minerva',
        'c' => 'Venus',
        'd' => 'Juno',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Greek mythology, what is the name of the river that separates the world of the living from the underworld?',
        'a' => 'Lethe',
        'b' => 'Acheron',
        'c' => 'Styx',
        'd' => 'Phlegethon',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Japanese mythology, who is the sun goddess and one of the most important deities?',
        'a' => 'Tsukuyomi',
        'b' => 'Susanoo',
        'c' => 'Amaterasu',
        'd' => 'Inari',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Celtic mythology, what is the name of the otherworld where the souls of the dead reside?',
        'a' => 'Avalon',
        'b' => 'Tir na nÓg',
        'c' => 'Asgard',
        'd' => 'Elysium',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Aztec mythology, who is the god of the sun and war?',
        'a' => 'Quetzalcoatl',
        'b' => 'Huitzilopochtli',
        'c' => 'Tlaloc',
        'd' => 'Tezcatlipoca',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Greek mythology, which hero is known for slaying the Minotaur?',
        'a' => 'Perseus',
        'b' => 'Theseus',
        'c' => 'Heracles',
        'd' => 'Odysseus',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],


    [
        'field_id' => 18,
       
        'question' => 'In Norse mythology, who is the god of thunder?',
        'a' => 'Odin',
        'b' => 'Loki',
        'c' => 'Thor',
        'd' => 'Freyr',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which creature in Greek mythology has the body of a lion, the head of a human, and the wings of a bird?',
        'a' => 'Sphinx',
        'b' => 'Griffin',
        'c' => 'Chimera',
        'd' => 'Hydra',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Egyptian mythology, who is the goddess of motherhood, magic, and fertility?',
        'a' => 'Isis',
        'b' => 'Hathor',
        'c' => 'Sekhmet',
        'd' => 'Nephthys',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Hindu mythology, which avatar of Vishnu is known as the warrior prince who fought in the Mahabharata?',
        'a' => 'Rama',
        'b' => 'Krishna',
        'c' => 'Buddha',
        'd' => 'Narasimha',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Roman mythology, who is the god of war and the equivalent of the Greek god Ares?',
        'a' => 'Mars',
        'b' => 'Jupiter',
        'c' => 'Neptune',
        'd' => 'Mercury',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Greek mythology, which hero was dipped in the River Styx as a baby, making him nearly invincible?',
        'a' => 'Achilles',
        'b' => 'Hercules',
        'c' => 'Jason',
        'd' => 'Theseus',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Japanese mythology, who is the god of storms and the sea?',
        'a' => 'Amaterasu',
        'b' => 'Susanoo',
        'c' => 'Tsukuyomi',
        'd' => 'Raijin',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Celtic mythology, what is the name of the Irish hero known for his incredible strength and skill in battle?',
        'a' => 'Finn MacCool',
        'b' => 'Cúchulainn',
        'c' => 'Lugh',
        'd' => 'Dagda',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Aztec mythology, who is the feathered serpent god associated with wind and learning?',
        'a' => 'Tezcatlipoca',
        'b' => 'Huitzilopochtli',
        'c' => 'Quetzalcoatl',
        'd' => 'Xipe Totec',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Greek mythology, which creature is known for turning people into stone with its gaze?',
        'a' => 'Gorgon',
        'b' => 'Minotaur',
        'c' => 'Hydra',
        'd' => 'Charybdis',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],


    [
        'field_id' => 18,
       
        'question' => 'In Norse mythology, who is the trickster god known for his cunning and shapeshifting abilities?',
        'a' => 'Odin',
        'b' => 'Loki',
        'c' => 'Thor',
        'd' => 'Baldur',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Greek mythology, who is the god of wine, revelry, and theatre?',
        'a' => 'Hermes',
        'b' => 'Apollo',
        'c' => 'Dionysus',
        'd' => 'Zeus',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Hindu mythology, who is the goddess of wealth, prosperity, and fortune?',
        'a' => 'Parvati',
        'b' => 'Lakshmi',
        'c' => 'Saraswati',
        'd' => 'Kali',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Egyptian mythology, which god is depicted with the head of a falcon and is known as the god of the sky?',
        'a' => 'Anubis',
        'b' => 'Ra',
        'c' => 'Horus',
        'd' => 'Thoth',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Greek mythology, which hero is known for his twelve labors, including slaying the Nemean Lion?',
        'a' => 'Perseus',
        'b' => 'Heracles',
        'c' => 'Jason',
        'd' => 'Theseus',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Roman mythology, who is the goddess of love and beauty, equivalent to the Greek goddess Aphrodite?',
        'a' => 'Diana',
        'b' => 'Minerva',
        'c' => 'Venus',
        'd' => 'Juno',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Japanese mythology, what is the name of the moon god who is the brother of Amaterasu?',
        'a' => 'Susanoo',
        'b' => 'Tsukuyomi',
        'c' => 'Inari',
        'd' => 'Raijin',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Celtic mythology, who is the god associated with the sun, healing, and prophecy?',
        'a' => 'Dagda',
        'b' => 'Lugh',
        'c' => 'Cernunnos',
        'd' => 'Morrigan',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Greek mythology, who is the queen of the gods and the wife of Zeus?',
        'a' => 'Athena',
        'b' => 'Hera',
        'c' => 'Demeter',
        'd' => 'Aphrodite',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Norse mythology, what is the name of the hall where warriors who die in battle are taken by the Valkyries?',
        'a' => 'Asgard',
        'b' => 'Valhalla',
        'c' => 'Midgard',
        'd' => 'Helheim',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 18,
       
        'question' => 'In Greek mythology, who is the goddess of the harvest and agriculture?',
        'a' => 'Hera',
        'b' => 'Aphrodite',
        'c' => 'Artemis',
        'd' => 'Demeter',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Egyptian mythology, which god is often depicted as a man with the head of a jackal?',
        'a' => 'Anubis',
        'b' => 'Ra',
        'c' => 'Osiris',
        'd' => 'Horus',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Norse mythology, who is the all-father and king of the gods?',
        'a' => 'Thor',
        'b' => 'Odin',
        'c' => 'Loki',
        'd' => 'Freyja',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Hindu mythology, which deity is known as the destroyer of the universe?',
        'a' => 'Vishnu',
        'b' => 'Brahma',
        'c' => 'Shiva',
        'd' => 'Indra',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Japanese mythology, what is the name of the storm god who is also known as the god of sea and storms?',
        'a' => 'Amaterasu',
        'b' => 'Susanoo',
        'c' => 'Raijin',
        'd' => 'Fujin',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Greek mythology, who is the hero that completed twelve nearly impossible tasks?',
        'a' => 'Achilles',
        'b' => 'Theseus',
        'c' => 'Odysseus',
        'd' => 'Heracles',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Roman mythology, who is the god of beginnings, gates, and transitions, often depicted with two faces?',
        'a' => 'Mars',
        'b' => 'Jupiter',
        'c' => 'Janus',
        'd' => 'Neptune',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Celtic mythology, who is the warrior goddess associated with fate and sovereignty?',
        'a' => 'Brigid',
        'b' => 'Morrigan',
        'c' => 'Rhiannon',
        'd' => 'Danu',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Norse mythology, what is the name of the apocalypse that is foretold to bring the end of the world?',
        'a' => 'Ragnarök',
        'b' => 'Fimbulwinter',
        'c' => 'Ginnungagap',
        'd' => 'Vigrid',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Hindu mythology, which god is known for his blue skin and the ability to lift Mount Govardhan?',
        'a' => 'Shiva',
        'b' => 'Krishna',
        'c' => 'Rama',
        'd' => 'Ganesha',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],


    [
        'field_id' => 18,
       
        'question' => 'In Greek mythology, who is the ruler of the underworld?',
        'a' => 'Zeus',
        'b' => 'Poseidon',
        'c' => 'Hades',
        'd' => 'Ares',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Egyptian mythology, who is the god of the afterlife, often depicted as a green-skinned man with a pharaoh\'s beard?',
        'a' => 'Anubis',
        'b' => 'Osiris',
        'c' => 'Thoth',
        'd' => 'Horus',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Norse mythology, what is the name of the world tree that connects the nine realms?',
        'a' => 'Yggdrasil',
        'b' => 'Bifröst',
        'c' => 'Mímameiðr',
        'd' => 'Gulltoppr',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Hindu mythology, who is the consort of Lord Shiva, often depicted as a fierce goddess?',
        'a' => 'Lakshmi',
        'b' => 'Saraswati',
        'c' => 'Parvati',
        'd' => 'Durga',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Japanese mythology, what is the name of the sun goddess who is considered the most important deity in Shinto?',
        'a' => 'Amaterasu',
        'b' => 'Tsukuyomi',
        'c' => 'Susanoo',
        'd' => 'Inari',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Greek mythology, who was punished by being condemned to hold up the sky for eternity?',
        'a' => 'Prometheus',
        'b' => 'Atlas',
        'c' => 'Sisyphus',
        'd' => 'Tantalus',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Celtic mythology, what is the name of the otherworldly island where the gods and heroes reside?',
        'a' => 'Tír na nÓg',
        'b' => 'Avalon',
        'c' => 'Mag Mell',
        'd' => 'Elysium',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Aztec mythology, who is the sun god and patron of warriors, often associated with human sacrifice?',
        'a' => 'Quetzalcoatl',
        'b' => 'Tezcatlipoca',
        'c' => 'Huitzilopochtli',
        'd' => 'Xipe Totec',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Greek mythology, who is the god of the sea and brother of Zeus?',
        'a' => 'Hades',
        'b' => 'Poseidon',
        'c' => 'Hermes',
        'd' => 'Apollo',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Norse mythology, which creature is destined to devour the sun during Ragnarök?',
        'a' => 'Fenrir',
        'b' => 'Jörmungandr',
        'c' => 'Surt',
        'd' => 'Sköll',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],


    [
        'field_id' => 18,
       
        'question' => 'In Greek mythology, who is the hero that ventured into the labyrinth to slay the Minotaur?',
        'a' => 'Perseus',
        'b' => 'Theseus',
        'c' => 'Odysseus',
        'd' => 'Heracles',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Egyptian mythology, who is the goddess of magic and motherhood, often depicted with a throne-shaped crown?',
        'a' => 'Isis',
        'b' => 'Hathor',
        'c' => 'Nephthys',
        'd' => 'Ma\'at',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Norse mythology, which god is known as the protector of mankind and is associated with thunder?',
        'a' => 'Odin',
        'b' => 'Thor',
        'c' => 'Tyr',
        'd' => 'Loki',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Hindu mythology, who is the monkey god and devotee of Lord Rama, known for his strength and loyalty?',
        'a' => 'Ganesha',
        'b' => 'Hanuman',
        'c' => 'Garuda',
        'd' => 'Kartikeya',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Greek mythology, who is the goddess of wisdom and warfare, born fully armored from the forehead of Zeus?',
        'a' => 'Aphrodite',
        'b' => 'Hera',
        'c' => 'Artemis',
        'd' => 'Athena',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Japanese mythology, who is the god of wind, often depicted with a bag of winds?',
        'a' => 'Raijin',
        'b' => 'Fujin',
        'c' => 'Susanoo',
        'd' => 'Hachiman',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Greek mythology, who is the messenger of the gods, known for his winged sandals?',
        'a' => 'Ares',
        'b' => 'Hermes',
        'c' => 'Apollo',
        'd' => 'Dionysus',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Aztec mythology, which god is often depicted as a feathered serpent and is associated with creation and the wind?',
        'a' => 'Tezcatlipoca',
        'b' => 'Xipe Totec',
        'c' => 'Huitzilopochtli',
        'd' => 'Quetzalcoatl',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Norse mythology, who is the wife of Odin and the goddess associated with foresight and wisdom?',
        'a' => 'Freyja',
        'b' => 'Frigg',
        'c' => 'Sif',
        'd' => 'Hel',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Greek mythology, who is the god of the underworld who abducted Persephone?',
        'a' => 'Hades',
        'b' => 'Zeus',
        'c' => 'Poseidon',
        'd' => 'Hermes',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 18,
       
        'question' => 'In Greek mythology, who is the hero that completed twelve labors, including slaying the Nemean Lion?',
        'a' => 'Perseus',
        'b' => 'Achilles',
        'c' => 'Odysseus',
        'd' => 'Heracles',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Norse mythology, which realm is the land of the giants, ruled by the giant king Útgarða-Loki?',
        'a' => 'Asgard',
        'b' => 'Vanaheim',
        'c' => 'Jotunheim',
        'd' => 'Alfheim',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Hindu mythology, who is the god of destruction and transformation, one of the principal deities of the Trimurti?',
        'a' => 'Brahma',
        'b' => 'Vishnu',
        'c' => 'Shiva',
        'd' => 'Indra',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Roman mythology, who is the goddess of the hunt, the moon, and wild animals, equivalent to the Greek goddess Artemis?',
        'a' => 'Venus',
        'b' => 'Minerva',
        'c' => 'Diana',
        'd' => 'Juno',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Egyptian mythology, who is the god of the dead, associated with mummification and the afterlife, depicted as a man with the head of a jackal?',
        'a' => 'Horus',
        'b' => 'Ra',
        'c' => 'Set',
        'd' => 'Anubis',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Greek mythology, which hero was dipped in the River Styx by his mother, making him invulnerable except for his heel?',
        'a' => 'Theseus',
        'b' => 'Achilles',
        'c' => 'Jason',
        'd' => 'Perseus',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Celtic mythology, who is the god of love, youth, and poetic inspiration, often depicted with a harp?',
        'a' => 'Lugh',
        'b' => 'Aengus',
        'c' => 'Dagda',
        'd' => 'Brigid',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Japanese mythology, who is the storm god, known for his battles with his sister, the sun goddess Amaterasu?',
        'a' => 'Tsukuyomi',
        'b' => 'Fujin',
        'c' => 'Susanoo',
        'd' => 'Raijin',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Greek mythology, who is the queen of the gods and the wife of Zeus, known for her jealousy and vengefulness?',
        'a' => 'Athena',
        'b' => 'Hestia',
        'c' => 'Demeter',
        'd' => 'Hera',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Aztec mythology, which goddess is associated with fertility, the earth, and agriculture, often depicted as a serpent-skirted figure?',
        'a' => 'Xochiquetzal',
        'b' => 'Coatlicue',
        'c' => 'Chalchiuhtlicue',
        'd' => 'Tlazolteotl',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 18,
       
        'question' => 'In Greek mythology, who is the Titan who holds up the sky on his shoulders?',
        'a' => 'Atlas',
        'b' => 'Prometheus',
        'c' => 'Cronus',
        'd' => 'Hyperion',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Egyptian mythology, who is the goddess of the sky, often depicted with a cow’s head?',
        'a' => 'Hathor',
        'b' => 'Sekhmet',
        'c' => 'Isis',
        'd' => 'Nut',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Norse mythology, who is the god associated with poetry, healing, and the runes?',
        'a' => 'Baldur',
        'b' => 'Bragi',
        'c' => 'Freyr',
        'd' => 'Tyr',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Hindu mythology, who is the demon king defeated by Lord Rama in the Ramayana?',
        'a' => 'Ravana',
        'b' => 'Kumbhakarna',
        'c' => 'Vibhishana',
        'd' => 'Surpanakha',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Roman mythology, who is the goddess of wisdom, equivalent to the Greek goddess Athena?',
        'a' => 'Juno',
        'b' => 'Venus',
        'c' => 'Minerva',
        'd' => 'Diana',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Aztec mythology, who is the god of the sun and war, often associated with the eagle?',
        'a' => 'Huitzilopochtli',
        'b' => 'Tlaloc',
        'c' => 'Quetzalcoatl',
        'd' => 'Tezcatlipoca',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Japanese mythology, who is the goddess of the sun, considered the ancestor of the Japanese imperial family?',
        'a' => 'Amaterasu',
        'b' => 'Tsukuyomi',
        'c' => 'Fujin',
        'd' => 'Raijin',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Greek mythology, who is the mother of the Olympian gods and the wife of Cronus?',
        'a' => 'Rhea',
        'b' => 'Themis',
        'c' => 'Demeter',
        'd' => 'Hera',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Celtic mythology, who is the goddess of fire, healing, and fertility, associated with the sacred flame?',
        'a' => 'Brigid',
        'b' => 'Epona',
        'c' => 'Arianrhod',
        'd' => 'Morrigan',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Norse mythology, who is the guardian of Bifröst, the rainbow bridge that connects Asgard to Midgard?',
        'a' => 'Thor',
        'b' => 'Odin',
        'c' => 'Heimdall',
        'd' => 'Loki',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Hindu mythology, who is the god of wealth and the protector of merchants and bankers?',
        'a' => 'Ganesha',
        'b' => 'Lakshmi',
        'c' => 'Kubera',
        'd' => 'Saraswati',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],


    [
        'field_id' => 18,
       
        'question' => 'In Yoruba mythology, who is the supreme god and creator of the universe?',
        'a' => 'Orunmila',
        'b' => 'Shango',
        'c' => 'Olodumare',
        'd' => 'Yemoja',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Igbo mythology, who is the supreme deity and creator of the universe?',
        'a' => 'Amadioha',
        'b' => 'Chukwu',
        'c' => 'Ekwensu',
        'd' => 'Ajao',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Hausa mythology, who is known as a spirit of the earth and fertility?',
        'a' => 'Dodo',
        'b' => 'Maman Borde',
        'c' => 'Goggo',
        'd' => 'Shah',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Kanuri mythology, who is the deity associated with creation and fertility?',
        'a' => 'Sao',
        'b' => 'Bima',
        'c' => 'Shah',
        'd' => 'Maman Borde',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Yoruba mythology, who is the deity of wisdom and divination?',
        'a' => 'Shango',
        'b' => 'Orunmila',
        'c' => 'Yemoja',
        'd' => 'Olodumare',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Igbo mythology, who is known as the trickster god associated with chaos and mischief?',
        'a' => 'Chukwu',
        'b' => 'Ekwensu',
        'c' => 'Amadioha',
        'd' => 'Ajao',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Hausa mythology, who is a revered protector of the community often associated with the supernatural?',
        'a' => 'Goggo',
        'b' => 'Shah',
        'c' => 'Maman Borde',
        'd' => 'Dodo',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Yoruba mythology, who is the goddess of the Ogun River and mother of many deities?',
        'a' => 'Olodumare',
        'b' => 'Orunmila',
        'c' => 'Yemoja',
        'd' => 'Shango',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Kanuri mythology, who is associated with rain and agriculture?',
        'a' => 'Bima',
        'b' => 'Sao',
        'c' => 'Shah',
        'd' => 'Maman Borde',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Igbo mythology, who is associated with the earth and fertility?',
        'a' => 'Ajao',
        'b' => 'Amadioha',
        'c' => 'Ekwensu',
        'd' => 'Ajao',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 18,
       
        'question' => 'In Yoruba mythology, who is known as the god of thunder and lightning, associated with power and justice?',
        'a' => 'Olodumare',
        'b' => 'Orunmila',
        'c' => 'Yemoja',
        'd' => 'Shango',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Hausa mythology, who is known for their wisdom and spiritual guidance, often depicted as a wise elder?',
        'a' => 'Goggo',
        'b' => 'Shah',
        'c' => 'Maman Borde',
        'd' => 'Dodo',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Igbo mythology, who is the deity associated with agriculture and the harvest?',
        'a' => 'Chukwu',
        'b' => 'Ajao',
        'c' => 'Ekwensu',
        'd' => 'Amadioha',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Kanuri mythology, who is the deity known for their role in creation and their influence over life and death?',
        'a' => 'Bima',
        'b' => 'Sao',
        'c' => 'Shah',
        'd' => 'Maman Borde',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Yoruba mythology, who is the deity associated with fertility, motherhood, and the Ogun River?',
        'a' => 'Olodumare',
        'b' => 'Shango',
        'c' => 'Yemoja',
        'd' => 'Orunmila',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Hausa mythology, who is considered a powerful spirit often associated with nature and protection?',
        'a' => 'Goggo',
        'b' => 'Dodo',
        'c' => 'Maman Borde',
        'd' => 'Shah',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Igbo mythology, who is the deity associated with the concept of mischief and deceit?',
        'a' => 'Ekwensu',
        'b' => 'Chukwu',
        'c' => 'Ajao',
        'd' => 'Amadioha',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Kanuri mythology, who is known as a major deity influencing fertility and prosperity?',
        'a' => 'Bima',
        'b' => 'Sao',
        'c' => 'Maman Borde',
        'd' => 'Shah',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Yoruba mythology, who is revered as the god of wisdom and divination, often consulted for guidance?',
        'a' => 'Yemoja',
        'b' => 'Shango',
        'c' => 'Olodumare',
        'd' => 'Orunmila',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Hausa mythology, who is often associated with supernatural abilities and revered as a guardian of the community?',
        'a' => 'Maman Borde',
        'b' => 'Goggo',
        'c' => 'Dodo',
        'd' => 'Shah',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],


    [
        'field_id' => 18,
       
        'question' => 'In Igbo mythology, who is the god of thunder and is often seen as the enforcer of justice?',
        'a' => 'Chukwu',
        'b' => 'Amadioha',
        'c' => 'Ekwensu',
        'd' => 'Ajao',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Yoruba mythology, who is the god of iron and war, often associated with blacksmiths?',
        'a' => 'Orunmila',
        'b' => 'Shango',
        'c' => 'Ogun',
        'd' => 'Yemoja',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Hausa mythology, who is the deity that represents the earth and is often associated with fertility?',
        'a' => 'Goggo',
        'b' => 'Maman Borde',
        'c' => 'Dodo',
        'd' => 'Shah',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Kanuri mythology, who is the spirit associated with rain, critical for agricultural success?',
        'a' => 'Sao',
        'b' => 'Bima',
        'c' => 'Maman Borde',
        'd' => 'Shah',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Yoruba mythology, which deity is often depicted with a double-headed axe and is the god of lightning?',
        'a' => 'Olodumare',
        'b' => 'Shango',
        'c' => 'Orunmila',
        'd' => 'Yemoja',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Igbo mythology, who is the earth goddess often associated with fertility and agriculture?',
        'a' => 'Amadioha',
        'b' => 'Chukwu',
        'c' => 'Ala',
        'd' => 'Ekwensu',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Hausa mythology, who is the spirit that is believed to bring rain and is important for crop growth?',
        'a' => 'Dodo',
        'b' => 'Goggo',
        'c' => 'Shah',
        'd' => 'Maman Borde',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Yoruba mythology, who is the goddess associated with the river and often invoked for fertility?',
        'a' => 'Orunmila',
        'b' => 'Shango',
        'c' => 'Yemoja',
        'd' => 'Olodumare',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Igbo mythology, who is considered the trickster god, often causing mischief?',
        'a' => 'Chukwu',
        'b' => 'Ala',
        'c' => 'Ekwensu',
        'd' => 'Amadioha',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Kanuri mythology, who is the major deity associated with fertility and the prosperity of the land?',
        'a' => 'Bima',
        'b' => 'Sao',
        'c' => 'Maman Borde',
        'd' => 'Shah',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 18,
       
        'question' => 'In Edo mythology, who is the deity associated with the sea and wealth?',
        'a' => 'Olokun',
        'b' => 'Esu',
        'c' => 'Ogiuwu',
        'd' => 'Soko',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Ijaw mythology, who is considered the mother goddess and creator of the universe?',
        'a' => 'Egbesu',
        'b' => 'Owu',
        'c' => 'Woyengi',
        'd' => 'Ekpenyong',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Nupe mythology, who is known as the supreme god and creator?',
        'a' => 'Soko',
        'b' => 'Kinnara',
        'c' => 'Gani',
        'd' => 'Aondo',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Tiv mythology, who is the supreme god responsible for creation and controlling the elements?',
        'a' => 'Swem',
        'b' => 'Nyian',
        'c' => 'Aondo',
        'd' => 'Ekpenyong',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Ibibio/Efik mythology, who is the goddess of mediation between the heavens and the earth?',
        'a' => 'Abassi',
        'b' => 'Atai',
        'c' => 'Ekpenyong',
        'd' => 'Owu',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Idoma mythology, who is the sacred symbol representing justice and truth?',
        'a' => 'Alekwu',
        'b' => 'Aje Shiwara',
        'c' => 'Owoicho',
        'd' => 'Egbesu',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Edo mythology, who is the trickster god and messenger between gods and humans?',
        'a' => 'Esu',
        'b' => 'Olokun',
        'c' => 'Ogiuwu',
        'd' => 'Soko',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Ijaw mythology, who is the deity associated with rain and critical for agricultural success?',
        'a' => 'Woyengi',
        'b' => 'Egbesu',
        'c' => 'Owu',
        'd' => 'Maman Borde',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Nupe mythology, which deity is linked to protection and fertility?',
        'a' => 'Bima',
        'b' => 'Sao',
        'c' => 'Kinnara',
        'd' => 'Gani',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Tiv mythology, who represents the spirits of the ancestors and nature?',
        'a' => 'Aondo',
        'b' => 'Swem',
        'c' => 'Nyian',
        'd' => 'Owoicho',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 18,
       
        'question' => 'In Yoruba mythology, who is the deity of creativity and wisdom often associated with divination?',
        'a' => 'Orunmila',
        'b' => 'Ogun',
        'c' => 'Yemoja',
        'd' => 'Shango',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Igbo mythology, who is the god of the sky and the supreme deity?',
        'a' => 'Amadioha',
        'b' => 'Chukwu',
        'c' => 'Ekwensu',
        'd' => 'Ala',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Hausa mythology, who is the deity associated with fertility and often worshiped for crop success?',
        'a' => 'Goggo',
        'b' => 'Maman Borde',
        'c' => 'Dodo',
        'd' => 'Shah',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Kanuri mythology, who is the deity of the sun and is often linked to prosperity?',
        'a' => 'Bima',
        'b' => 'Maman Borde',
        'c' => 'Shah',
        'd' => 'Sao',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Ibibio/Efik mythology, who is the deity associated with the creation of humans?',
        'a' => 'Atai',
        'b' => 'Abassi',
        'c' => 'Ekpenyong',
        'd' => 'Owu',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Idoma mythology, who is revered as the supreme god of creation?',
        'a' => 'Owoicho',
        'b' => 'Aje Shiwara',
        'c' => 'Alekwu',
        'd' => 'Aondo',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Edo mythology, who is considered the god of death?',
        'a' => 'Ogiuwu',
        'b' => 'Esu',
        'c' => 'Olokun',
        'd' => 'Soko',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Yoruba mythology, which deity is associated with the ocean and is considered the mother of all Orishas?',
        'a' => 'Yemoja',
        'b' => 'Shango',
        'c' => 'Orunmila',
        'd' => 'Ogun',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Kanuri mythology, who is the deity associated with fertility and agricultural success?',
        'a' => 'Maman Borde',
        'b' => 'Bima',
        'c' => 'Shah',
        'd' => 'Sao',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Nupe mythology, who is revered as the spirit associated with the waters and is crucial for prosperity?',
        'a' => 'Kinnara',
        'b' => 'Gani',
        'c' => 'Sao',
        'd' => 'Bima',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Idoma mythology, who is the deity representing the ancestral spirits?',
        'a' => 'Aondo',
        'b' => 'Owoicho',
        'c' => 'Aje Shiwara',
        'd' => 'Alekwu',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 18,
       
        'question' => 'In the Genesis creation story, how many days did it take for God to create the world?',
        'a' => 'Five',
        'b' => 'Six',
        'c' => 'Seven',
        'd' => 'Ten',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which angel announced the birth of Jesus to the Virgin Mary?',
        'a' => 'Michael',
        'b' => 'Raphael',
        'c' => 'Gabriel',
        'd' => 'Uriel',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the term for the belief in Jesus Christ’s return to judge the living and the dead?',
        'a' => 'The Incarnation',
        'b' => 'The Resurrection',
        'c' => 'The Second Coming',
        'd' => 'The Rapture',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Christian theology, what is the name of the place of eternal punishment for the wicked?',
        'a' => 'Heaven',
        'b' => 'Paradise',
        'c' => 'Hell',
        'd' => 'Purgatory',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which book of the New Testament describes the end times and the final judgment?',
        'a' => 'Matthew',
        'b' => 'Acts',
        'c' => 'Revelation',
        'd' => 'John',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Who is considered the first Christian martyr?',
        'a' => 'Saint Peter',
        'b' => 'Saint Paul',
        'c' => 'Saint Stephen',
        'd' => 'Saint Andrew',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Christian doctrine, what is the name of the sacrament that commemorates the Last Supper?',
        'a' => 'Baptism',
        'b' => 'Confirmation',
        'c' => 'Eucharist',
        'd' => 'Reconciliation',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Biblical figure is known for defeating the giant Goliath?',
        'a' => 'Solomon',
        'b' => 'Saul',
        'c' => 'David',
        'd' => 'Moses',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the term for the Christian belief that God became human in the person of Jesus Christ?',
        'a' => 'Atonement',
        'b' => 'Incarnation',
        'c' => 'Ascension',
        'd' => 'Redemption',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which angel is often depicted as a warrior and is associated with spiritual warfare?',
        'a' => 'Gabriel',
        'b' => 'Michael',
        'c' => 'Raphael',
        'd' => 'Uriel',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 18,
       
        'question' => 'In Christian belief, what event is commemorated on Good Friday?',
        'a' => 'The Last Supper',
        'b' => 'The Resurrection of Jesus',
        'c' => 'The Crucifixion of Jesus',
        'd' => 'The Birth of Jesus',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Who led the Israelites out of Egypt according to the Bible?',
        'a' => 'Abraham',
        'b' => 'Jacob',
        'c' => 'Moses',
        'd' => 'Joseph',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Biblical figure is known for interpreting the dreams of the Pharaoh of Egypt?',
        'a' => 'Daniel',
        'b' => 'Joseph',
        'c' => 'Samuel',
        'd' => 'Solomon',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the first book of the New Testament?',
        'a' => 'Mark',
        'b' => 'Luke',
        'c' => 'John',
        'd' => 'Matthew',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Christian tradition, what does the term "Pentecost" refer to?',
        'a' => 'The birth of Jesus',
        'b' => 'The descent of the Holy Spirit upon the apostles',
        'c' => 'The Resurrection of Jesus',
        'd' => 'The ascension of Jesus into heaven',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which apostle is known for doubting the resurrection of Jesus until he saw the wounds?',
        'a' => 'Peter',
        'b' => 'John',
        'c' => 'Thomas',
        'd' => 'James',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Who was the first king of Israel according to the Bible?',
        'a' => 'David',
        'b' => 'Solomon',
        'c' => 'Saul',
        'd' => 'Samuel',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Christian belief, what does the term "Trinity" refer to?',
        'a' => 'The Father, the Son, and the Holy Spirit',
        'b' => 'The Three Wise Men',
        'c' => 'The three parts of the Bible',
        'd' => 'The three days Jesus spent in the tomb',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Old Testament figure is known for building an ark to survive a great flood?',
        'a' => 'Noah',
        'b' => 'Abraham',
        'c' => 'Moses',
        'd' => 'Isaac',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Christian theology, what is the meaning of the term "Immaculate Conception"?',
        'a' => 'The virgin birth of Jesus',
        'b' => 'The belief that Mary was free from original sin from the moment of her conception',
        'c' => 'The conception of Jesus by the Holy Spirit',
        'd' => 'The birth of John the Baptist',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 18,
       
        'question' => 'According to Islamic tradition, which angel delivered the revelations of the Quran to Prophet Muhammad?',
        'a' => 'Mikail',
        'b' => 'Israfil',
        'c' => 'Jibril',
        'd' => 'Azrael',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the name of the first man created by Allah in Islamic belief?',
        'a' => 'Isa',
        'b' => 'Musa',
        'c' => 'Ibrahim',
        'd' => 'Adam',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Islamic eschatology, what is the name of the bridge that must be crossed to reach Paradise?',
        'a' => 'Al-Sirat',
        'b' => 'Jannah',
        'c' => 'Al-Buraq',
        'd' => 'Zamzam',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which prophet is known in Islam for surviving in the belly of a whale?',
        'a' => 'Nuh',
        'b' => 'Yunus',
        'c' => 'Yusuf',
        'd' => 'Ilyas',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the term for the declaration of faith in Islam?',
        'a' => 'Salat',
        'b' => 'Shahada',
        'c' => 'Zakat',
        'd' => 'Sawm',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Islamic prophet is associated with the construction of the Kaaba?',
        'a' => 'Musa',
        'b' => 'Isa',
        'c' => 'Ibrahim',
        'd' => 'Nuh',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Islamic tradition, who is the "Seal of the Prophets"?',
        'a' => 'Isa',
        'b' => 'Musa',
        'c' => 'Ibrahim',
        'd' => 'Muhammad',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the name of the holy book in Islam?',
        'a' => 'Torah',
        'b' => 'Bible',
        'c' => 'Quran',
        'd' => 'Gospel',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which event in Islamic tradition marks the beginning of the Islamic calendar?',
        'a' => 'The birth of Muhammad',
        'b' => 'The conquest of Mecca',
        'c' => 'The Hijra',
        'd' => 'The night journey (Isra and Mi\'raj)',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Islamic eschatology, who is expected to return to earth before the Day of Judgment?',
        'a' => 'Isa (Jesus)',
        'b' => 'Musa (Moses)',
        'c' => 'Yusuf (Joseph)',
        'd' => 'Nuh (Noah)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 18,
       
        'question' => 'Which figure is known as the "Father of the Prophets" in Islam?',
        'a' => 'Musa (Moses)',
        'b' => 'Ibrahim (Abraham)',
        'c' => 'Nuh (Noah)',
        'd' => 'Adam',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Islamic tradition, who is the mother of Prophet Isa (Jesus)?',
        'a' => 'Khadijah',
        'b' => 'Aisha',
        'c' => 'Maryam (Mary)',
        'd' => 'Fatimah',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the term for the pilgrimage to Mecca that Muslims are required to perform at least once in their lifetime if they are able?',
        'a' => 'Zakat',
        'b' => 'Sawm',
        'c' => 'Hajj',
        'd' => 'Salat',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which surah (chapter) of the Quran is known as "The Opening" and is recited in every unit of the Muslim prayer?',
        'a' => 'Surah Al-Baqarah',
        'b' => 'Surah Al-Ikhlas',
        'c' => 'Surah Al-Fatiha',
        'd' => 'Surah Yasin',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Islamic eschatology, what is the name of the false messiah who will appear before the Day of Judgment?',
        'a' => 'Al-Mahdi',
        'b' => 'Dajjal',
        'c' => 'Jibril',
        'd' => 'Israfil',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which angel is responsible for blowing the trumpet to signal the Day of Judgment in Islamic belief?',
        'a' => 'Israfil',
        'b' => 'Jibril',
        'c' => 'Mikail',
        'd' => 'Azrael',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In the Quran, which prophet is known for his patience and is often cited as an example of enduring faith?',
        'a' => 'Yusuf (Joseph)',
        'b' => 'Ayub (Job)',
        'c' => 'Nuh (Noah)',
        'd' => 'Musa (Moses)',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'According to Islamic tradition, which prophet was commanded by Allah to build an ark to save himself and his followers from a great flood?',
        'a' => 'Musa (Moses)',
        'b' => 'Ibrahim (Abraham)',
        'c' => 'Nuh (Noah)',
        'd' => 'Yunus (Jonah)',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Islamic tradition, who is the angel of death responsible for taking the souls of the deceased?',
        'a' => 'Jibril',
        'b' => 'Mikail',
        'c' => 'Israfil',
        'd' => 'Azrael',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which prophet is known for leading the Israelites across the Red Sea, as narrated in both Islamic and Biblical traditions?',
        'a' => 'Ibrahim (Abraham)',
        'b' => 'Musa (Moses)',
        'c' => 'Yusuf (Joseph)',
        'd' => 'Dawud (David)',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 18,
       
        'question' => 'Who is considered the first human created by God according to Christian belief?',
        'a' => 'Abraham',
        'b' => 'Noah',
        'c' => 'Moses',
        'd' => 'Adam',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Christian tradition, what is the name of the garden where Adam and Eve lived?',
        'a' => 'Garden of Eden',
        'b' => 'Mount Sinai',
        'c' => 'Canaan',
        'd' => 'Golgotha',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'According to Christian belief, which angel was cast out of heaven for rebelling against God?',
        'a' => 'Gabriel',
        'b' => 'Michael',
        'c' => 'Lucifer',
        'd' => 'Raphael',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Who led the Israelites out of Egypt in the Biblical Exodus?',
        'a' => 'David',
        'b' => 'Solomon',
        'c' => 'Joshua',
        'd' => 'Moses',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which of the following is not one of the Four Horsemen of the Apocalypse in Christian eschatology?',
        'a' => 'War',
        'b' => 'Famine',
        'c' => 'Flood',
        'd' => 'Death',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 18,
       
        'question' => 'In Yoruba mythology, who is the god of iron and war?',
        'a' => 'Oshun',
        'b' => 'Shango',
        'c' => 'Ogun',
        'd' => 'Obatala',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which creature from Igbo mythology is known for its ability to change shape and cause mischief?',
        'a' => 'Mami Wata',
        'b' => 'Ogbunabali',
        'c' => 'Ekwensu',
        'd' => 'Ogwugwu',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Greek mythology, who is the king of the gods?',
        'a' => 'Hades',
        'b' => 'Poseidon',
        'c' => 'Zeus',
        'd' => 'Apollo',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Islamic tradition, who is the angel responsible for delivering revelations to the prophets?',
        'a' => 'Israfil',
        'b' => 'Azrael',
        'c' => 'Jibril (Gabriel)',
        'd' => 'Mikail',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which goddess is known as the mother of gods in Igbo mythology?',
        'a' => 'Oya',
        'b' => 'Idemili',
        'c' => 'Ala',
        'd' => 'Ekwensu',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 18,
       
        'question' => 'In Christian tradition, who betrayed Jesus for thirty pieces of silver?',
        'a' => 'Peter',
        'b' => 'Judas Iscariot',
        'c' => 'John',
        'd' => 'Thomas',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Christian figure is known for slaying Goliath with a slingshot?',
        'a' => 'David',
        'b' => 'Saul',
        'c' => 'Samuel',
        'd' => 'Solomon',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the name of the Christian paradise where the righteous are said to go after death?',
        'a' => 'Eden',
        'b' => 'Purgatory',
        'c' => 'Heaven',
        'd' => 'Sheol',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 18,
       
        'question' => 'In Hindu mythology, who is the god of destruction and transformation?',
        'a' => 'Vishnu',
        'b' => 'Brahma',
        'c' => 'Shiva',
        'd' => 'Indra',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which of the following is the wife of Zeus in Greek mythology?',
        'a' => 'Aphrodite',
        'b' => 'Hera',
        'c' => 'Athena',
        'd' => 'Artemis',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Igbo mythology, who is the trickster god known for causing confusion?',
        'a' => 'Ekwensu',
        'b' => 'Amadioha',
        'c' => 'Ala',
        'd' => 'Ogwugwu',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Norse mythology, which god is known for his hammer, Mjölnir?',
        'a' => 'Loki',
        'b' => 'Thor',
        'c' => 'Odin',
        'd' => 'Frey',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Who is the creator god in the Yoruba religion?',
        'a' => 'Ogun',
        'b' => 'Shango',
        'c' => 'Obatala',
        'd' => 'Olodumare',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Islamic prophet is known for surviving in the belly of a whale?',
        'a' => 'Musa (Moses)',
        'b' => 'Yusuf (Joseph)',
        'c' => 'Yunus (Jonah)',
        'd' => 'Ibrahim (Abraham)',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Hindu mythology, which river is considered the holiest and is personified as a goddess?',
        'a' => 'Yamuna',
        'b' => 'Saraswati',
        'c' => 'Ganga',
        'd' => 'Godavari',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 18,
       
        'question' => 'In Egyptian mythology, who is the god of the underworld?',
        'a' => 'Ra',
        'b' => 'Anubis',
        'c' => 'Osiris',
        'd' => 'Horus',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Aztec god is associated with the sun and war?',
        'a' => 'Quetzalcoatl',
        'b' => 'Huitzilopochtli',
        'c' => 'Tezcatlipoca',
        'd' => 'Tlaloc',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Roman mythology, who is the god of war?',
        'a' => 'Jupiter',
        'b' => 'Neptune',
        'c' => 'Mars',
        'd' => 'Apollo',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Chinese mythology, who is the Jade Emperor?',
        'a' => 'The ruler of Heaven',
        'b' => 'The god of war',
        'c' => 'The god of the sea',
        'd' => 'The god of wealth',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Norse goddess is associated with love, fertility, and beauty?',
        'a' => 'Freya',
        'b' => 'Hel',
        'c' => 'Frigg',
        'd' => 'Sif',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Celtic mythology, who is the god of the sea?',
        'a' => 'Lugh',
        'b' => 'Manannán mac Lir',
        'c' => 'Cernunnos',
        'd' => 'Dagda',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Japanese mythology, who is the sun goddess?',
        'a' => 'Amaterasu',
        'b' => 'Susanoo',
        'c' => 'Tsukuyomi',
        'd' => 'Inari',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Hindu mythology, which god has the head of an elephant?',
        'a' => 'Vishnu',
        'b' => 'Shiva',
        'c' => 'Ganesha',
        'd' => 'Brahma',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In Yoruba mythology, who is the goddess of fertility and water?',
        'a' => 'Oshun',
        'b' => 'Yemaya',
        'c' => 'Oya',
        'd' => 'Nana Buluku',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Native American mythology includes the trickster figure Coyote?',
        'a' => 'Navajo',
        'b' => 'Inuit',
        'c' => 'Aztec',
        'd' => 'Maya',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],


    
    // Hobbies and Interests Questions
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves collecting stamps from around the world?',
        'a' => 'Numismatics',
        'b' => 'Philately',
        'c' => 'Cartography',
        'd' => 'Genealogy',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In photography, what does ISO measure?',
        'a' => 'Shutter speed',
        'b' => 'Aperture',
        'c' => 'Image noise',
        'd' => 'Light sensitivity',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which of these hobbies involves the art of folding paper into various shapes?',
        'a' => 'Origami',
        'b' => 'Calligraphy',
        'c' => 'Papercraft',
        'd' => 'Scrapbooking',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the main ingredient in the Japanese dish sushi?',
        'a' => 'Rice',
        'b' => 'Fish',
        'c' => 'Seaweed',
        'd' => 'Soy sauce',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which of these is a popular indoor gardening hobby that involves growing plants in water without soil?',
        'a' => 'Aquascaping',
        'b' => 'Hydroponics',
        'c' => 'Terrarium',
        'd' => 'Xeriscaping',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In knitting, what is the name of the stitch that creates a pattern resembling a wave or zigzag?',
        'a' => 'Garter stitch',
        'b' => 'Stockinette stitch',
        'c' => 'Cable stitch',
        'd' => 'Chevron stitch',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which type of dance originated in Argentina and is known for its dramatic movements and close embrace?',
        'a' => 'Salsa',
        'b' => 'Flamenco',
        'c' => 'Tango',
        'd' => 'Samba',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the term for a person who enjoys birdwatching as a hobby?',
        'a' => 'Ornithologist',
        'b' => 'Birder',
        'c' => 'Ecologist',
        'd' => 'Naturalist',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves solving puzzles with interlocking pieces to form a picture?',
        'a' => 'Crossword puzzles',
        'b' => 'Sudoku',
        'c' => 'Jigsaw puzzles',
        'd' => 'Rubik\'s Cube',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In model building, which material is commonly used to create scale models of airplanes, cars, and ships?',
        'a' => 'Metal',
        'b' => 'Clay',
        'c' => 'Plastic',
        'd' => 'Wood',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    // Hobbies and Interests Questions
    [
        'field_id' => 18,
       
        'question' => 'Which of these hobbies involves growing and cultivating bonsai trees?',
        'a' => 'Aquascaping',
        'b' => 'Floristry',
        'c' => 'Bonsai cultivation',
        'd' => 'Terrarium gardening',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In what hobby would you most likely use a spinning wheel?',
        'a' => 'Weaving',
        'b' => 'Spinning',
        'c' => 'Knitting',
        'd' => 'Crocheting',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which of these hobbies is most associated with train enthusiasts?',
        'a' => 'Railfanning',
        'b' => 'Model building',
        'c' => 'Amateur radio',
        'd' => 'Stamp collecting',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the primary activity in the hobby known as "geocaching"?',
        'a' => 'Solving puzzles',
        'b' => 'Finding hidden containers using GPS',
        'c' => 'Birdwatching',
        'd' => 'Rock climbing',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which craft involves making objects by sewing layers of fabric together?',
        'a' => 'Quilting',
        'b' => 'Embroidery',
        'c' => 'Knitting',
        'd' => 'Macrame',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In which hobby would you most likely encounter a "rosette"?',
        'a' => 'Cooking',
        'b' => 'Cake decorating',
        'c' => 'Pottery',
        'd' => 'Flower arranging',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which of these is a popular hobby involving remote-controlled vehicles?',
        'a' => 'RC cars',
        'b' => 'Model trains',
        'c' => 'Drone flying',
        'd' => 'Kite flying',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves the study of celestial objects and phenomena?',
        'a' => 'Meteorology',
        'b' => 'Geology',
        'c' => 'Astronomy',
        'd' => 'Astrology',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which of these hobbies involves creating and flying lightweight paper models?',
        'a' => 'Origami',
        'b' => 'Paper planes',
        'c' => 'Model rockets',
        'd' => 'Papercraft',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves exploring caves?',
        'a' => 'Spelunking',
        'b' => 'Rock climbing',
        'c' => 'Hiking',
        'd' => 'Scuba diving',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    // Hobbies and Interests Questions
    [
        'field_id' => 18,
       
        'question' => 'What hobby involves assembling small, plastic building blocks to create models?',
        'a' => 'Papercraft',
        'b' => 'Model building',
        'c' => 'Lego building',
        'd' => 'Woodworking',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which of these hobbies is associated with the phrase "tuning the airwaves"?',
        'a' => 'Amateur radio',
        'b' => 'DJing',
        'c' => 'Podcasting',
        'd' => 'Karaoke',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In which hobby would you use a "lure" to attract your target?',
        'a' => 'Birdwatching',
        'b' => 'Fishing',
        'c' => 'Hunting',
        'd' => 'Camping',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which type of puzzle involves filling in numbers so that every row, column, and box contains the digits 1 through 9?',
        'a' => 'Crossword',
        'b' => 'Sudoku',
        'c' => 'Word search',
        'd' => 'Kakuro',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the term for a person who collects and studies coins?',
        'a' => 'Philatelist',
        'b' => 'Numismatist',
        'c' => 'Cartographer',
        'd' => 'Genealogist',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which of these hobbies involves customizing and modifying personal computers for gaming?',
        'a' => 'Overclocking',
        'b' => 'Modding',
        'c' => 'Coding',
        'd' => '3D printing',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves making wine at home?',
        'a' => 'Fermenting',
        'b' => 'Brewing',
        'c' => 'Distilling',
        'd' => 'Viticulture',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In the world of gaming, what does MMORPG stand for?',
        'a' => 'Massive Multiplayer Online Role-Playing Game',
        'b' => 'Main Multiplayer Online Role-Playing Game',
        'c' => 'Massive Multiplayer Offline Role-Playing Game',
        'd' => 'Main Multiplayer Offline Role-Playing Game',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which of these hobbies involves navigating to specific locations using a map and compass?',
        'a' => 'Orienteering',
        'b' => 'Geocaching',
        'c' => 'Hiking',
        'd' => 'Birdwatching',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which of these hobbies involves drawing or painting outdoors?',
        'a' => 'Still life',
        'b' => 'Portrait painting',
        'c' => 'Plein air painting',
        'd' => 'Abstract art',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    // Hobbies and Interests Questions
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves collecting autographs from famous people?',
        'a' => 'Philately',
        'b' => 'Autograph collecting',
        'c' => 'Numismatics',
        'd' => 'Scrapbooking',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In which hobby would you most likely use an easel?',
        'a' => 'Pottery',
        'b' => 'Sculpting',
        'c' => 'Painting',
        'd' => 'Photography',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves baking bread and other baked goods at home?',
        'a' => 'Patisserie',
        'b' => 'Culinary arts',
        'c' => 'Baking',
        'd' => 'Home brewing',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which of these hobbies involves the collection of vintage cars?',
        'a' => 'Car detailing',
        'b' => 'Automobilia collecting',
        'c' => 'Classic car restoration',
        'd' => 'Auto racing',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which of these hobbies is centered around growing and maintaining gardens?',
        'a' => 'Horticulture',
        'b' => 'Botany',
        'c' => 'Gardening',
        'd' => 'Landscape design',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves writing a daily record of personal experiences?',
        'a' => 'Journaling',
        'b' => 'Blogging',
        'c' => 'Storytelling',
        'd' => 'Photography',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What hobby involves photographing and observing the night sky?',
        'a' => 'Astronomy',
        'b' => 'Astrophotography',
        'c' => 'Meteorology',
        'd' => 'Space exploration',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In which hobby would you most likely use a trowel?',
        'a' => 'Gardening',
        'b' => 'Pottery',
        'c' => 'Sculpting',
        'd' => 'Candle making',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves making your own beer at home?',
        'a' => 'Home brewing',
        'b' => 'Fermentation',
        'c' => 'Viticulture',
        'd' => 'Mixology',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which of these hobbies involves knitting or crocheting small, stuffed animals?',
        'a' => 'Tatting',
        'b' => 'Amigurumi',
        'c' => 'Embroidery',
        'd' => 'Quilting',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    // Hobbies and Interests Questions
    [
        'field_id' => 18,
       
        'question' => 'Which of these hobbies involves capturing light on film or digital sensors?',
        'a' => 'Filmmaking',
        'b' => 'Painting',
        'c' => 'Photography',
        'd' => 'Illustration',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the practice of growing and arranging ornamental plants called?',
        'a' => 'Horticulture',
        'b' => 'Botany',
        'c' => 'Gardening',
        'd' => 'Floristry',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves creating three-dimensional objects by cutting and folding paper?',
        'a' => 'Origami',
        'b' => 'Papercraft',
        'c' => 'Scrapbooking',
        'd' => 'Collage',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which of these hobbies is most associated with attending conventions and collecting comics?',
        'a' => 'Cosplay',
        'b' => 'Comic book collecting',
        'c' => 'LARPing',
        'd' => 'Fan fiction writing',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves painting miniatures, often for tabletop games?',
        'a' => 'Doll making',
        'b' => 'Warhammer painting',
        'c' => 'Miniature painting',
        'd' => 'Model train collecting',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which of these hobbies is associated with building and flying remote-controlled aircraft?',
        'a' => 'Droning',
        'b' => 'Aviation',
        'c' => 'RC flying',
        'd' => 'Kite flying',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves creating and maintaining aquariums, often for ornamental fish?',
        'a' => 'Aquascaping',
        'b' => 'Marine biology',
        'c' => 'Fishkeeping',
        'd' => 'Gardening',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves creating patterns and images with beads and thread?',
        'a' => 'Weaving',
        'b' => 'Embroidery',
        'c' => 'Beading',
        'd' => 'Quilting',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves restoring and riding vintage bicycles?',
        'a' => 'Cycling',
        'b' => 'Bicycle restoration',
        'c' => 'Vintage bike collecting',
        'd' => 'Motorcycling',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves creating and painting scenes on a canvas?',
        'a' => 'Sculpting',
        'b' => 'Illustration',
        'c' => 'Painting',
        'd' => 'Photography',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    // Hobbies and Interests Questions
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves brewing beer or fermenting wine at home?',
        'a' => 'Viticulture',
        'b' => 'Home brewing',
        'c' => 'Mixology',
        'd' => 'Culinary arts',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which of these hobbies is most associated with collecting stamps?',
        'a' => 'Philately',
        'b' => 'Numismatics',
        'c' => 'Autograph collecting',
        'd' => 'Coin collecting',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves maintaining a garden or small farm for fresh produce?',
        'a' => 'Organic gardening',
        'b' => 'Permaculture',
        'c' => 'Urban farming',
        'd' => 'Allotment gardening',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves performing physical poses and breathing exercises?',
        'a' => 'Yoga',
        'b' => 'Pilates',
        'c' => 'Meditation',
        'd' => 'Tai Chi',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which of these hobbies is centered around the creation of knitted fabrics?',
        'a' => 'Weaving',
        'b' => 'Embroidery',
        'c' => 'Knitting',
        'd' => 'Crocheting',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves decorating cakes and pastries?',
        'a' => 'Patisserie',
        'b' => 'Confectionery arts',
        'c' => 'Baking',
        'd' => 'Culinary arts',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves exploring and mapping caves?',
        'a' => 'Spelunking',
        'b' => 'Mountaineering',
        'c' => 'Rock climbing',
        'd' => 'Hiking',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves the construction of small-scale buildings or vehicles?',
        'a' => 'Model building',
        'b' => 'Sculpting',
        'c' => 'Woodworking',
        'd' => 'Pottery',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves cultivating bonsai trees?',
        'a' => 'Gardening',
        'b' => 'Horticulture',
        'c' => 'Bonsai',
        'd' => 'Floriculture',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which of these hobbies involves programming and creating software?',
        'a' => 'Web development',
        'b' => 'Software engineering',
        'c' => 'Coding',
        'd' => 'App development',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    // Hobbies and Interests Questions
    [
        'field_id' => 18,
       
        'question' => 'Which of these hobbies is most associated with restoring classic cars?',
        'a' => 'Auto detailing',
        'b' => 'Car collecting',
        'c' => 'Mechanics',
        'd' => 'Car restoration',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves capturing video footage and editing it into films or videos?',
        'a' => 'Videography',
        'b' => 'Photography',
        'c' => 'Screenwriting',
        'd' => 'Directing',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby is associated with bird watching and recording species observed?',
        'a' => 'Ornithology',
        'b' => 'Bird watching',
        'c' => 'Nature photography',
        'd' => 'Wildlife conservation',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which of these hobbies involves collecting rare and valuable items?',
        'a' => 'Antiquing',
        'b' => 'Treasure hunting',
        'c' => 'Collecting',
        'd' => 'Prospecting',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves assembling jigsaw puzzles?',
        'a' => 'Puzzle solving',
        'b' => 'Brain games',
        'c' => 'Jigsaw puzzling',
        'd' => 'Board gaming',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby is centered around flying kites?',
        'a' => 'Aerodynamics',
        'b' => 'Kite flying',
        'c' => 'Paragliding',
        'd' => 'Surfing',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves building computers and customizing their components?',
        'a' => 'Coding',
        'b' => 'Gaming',
        'c' => 'PC building',
        'd' => 'Networking',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby is associated with practicing magic tricks and illusions?',
        'a' => 'Magic',
        'b' => 'Stage performance',
        'c' => 'Theater arts',
        'd' => 'Hypnotism',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves riding and taking care of horses?',
        'a' => 'Equestrianism',
        'b' => 'Veterinary science',
        'c' => 'Pet care',
        'd' => 'Farming',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves collecting and preserving insects, often as part of a scientific study?',
        'a' => 'Entomology',
        'b' => 'Biology',
        'c' => 'Insect collecting',
        'd' => 'Taxidermy',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    // Hobbies and Interests Questions
    [
        'field_id' => 18,
       
        'question' => 'Which of these hobbies involves creating and maintaining aquariums?',
        'a' => 'Aquascaping',
        'b' => 'Marine biology',
        'c' => 'Fishkeeping',
        'd' => 'Oceanography',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves practicing the martial art of fencing?',
        'a' => 'Swordsmanship',
        'b' => 'Kendo',
        'c' => 'Fencing',
        'd' => 'Martial arts',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which of these hobbies involves building and flying model airplanes?',
        'a' => 'Aviation',
        'b' => 'Aeromodelling',
        'c' => 'Droning',
        'd' => 'Paragliding',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby is centered around performing card tricks and sleight of hand?',
        'a' => 'Gambling',
        'b' => 'Cardistry',
        'c' => 'Magic',
        'd' => 'Conjuring',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves collecting and caring for vinyl records?',
        'a' => 'Audiophilia',
        'b' => 'Music collecting',
        'c' => 'Record collecting',
        'd' => 'DJing',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby is associated with the study and collection of coins?',
        'a' => 'Numismatics',
        'b' => 'Philately',
        'c' => 'Collecting',
        'd' => 'Investing',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which of these hobbies involves designing and crafting jewelry?',
        'a' => 'Metalworking',
        'b' => 'Fashion design',
        'c' => 'Jewelry making',
        'd' => 'Gemology',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves the use of cameras to capture still images?',
        'a' => 'Videography',
        'b' => 'Photography',
        'c' => 'Film making',
        'd' => 'Graphic design',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which of these hobbies is focused on creating and arranging flower displays?',
        'a' => 'Floral design',
        'b' => 'Gardening',
        'c' => 'Botany',
        'd' => 'Floriculture',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves taking care of bonsai trees?',
        'a' => 'Gardening',
        'b' => 'Horticulture',
        'c' => 'Bonsai',
        'd' => 'Landscaping',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    // Hobbies and Interests Questions
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves painting miniatures used in tabletop games?',
        'a' => 'Miniature painting',
        'b' => 'Model building',
        'c' => 'Sculpting',
        'd' => 'Tabletop gaming',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which of these hobbies involves creating ceramic items like pots and vases?',
        'a' => 'Sculpting',
        'b' => 'Pottery',
        'c' => 'Crafting',
        'd' => 'Masonry',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves keeping and breeding tropical fish in an aquarium?',
        'a' => 'Aquascaping',
        'b' => 'Fishkeeping',
        'c' => 'Marine biology',
        'd' => 'Snorkeling',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves creating designs or patterns on fabric using needle and thread?',
        'a' => 'Knitting',
        'b' => 'Embroidery',
        'c' => 'Crocheting',
        'd' => 'Quilting',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which of these hobbies involves growing and caring for succulent plants?',
        'a' => 'Gardening',
        'b' => 'Bonsai',
        'c' => 'Succulent gardening',
        'd' => 'Botany',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves the careful maintenance and restoration of old books?',
        'a' => 'Bookbinding',
        'b' => 'Book restoration',
        'c' => 'Collecting',
        'd' => 'Librarianship',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which of these hobbies involves playing a musical instrument as a leisure activity?',
        'a' => 'Singing',
        'b' => 'Music production',
        'c' => 'Instrument playing',
        'd' => 'Songwriting',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves participating in or organizing cosplay events?',
        'a' => 'Costume design',
        'b' => 'Acting',
        'c' => 'Cosplay',
        'd' => 'Event planning',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves creating and solving complex puzzles, often online?',
        'a' => 'Puzzle solving',
        'b' => 'Riddle creation',
        'c' => 'Escape rooms',
        'd' => 'Cryptography',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby is focused on learning and speaking multiple languages?',
        'a' => 'Translation',
        'b' => 'Linguistics',
        'c' => 'Language learning',
        'd' => 'Interpreting',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    // Hobbies and Interests Questions
    [
        'field_id' => 18,
       
        'question' => 'Which of these hobbies involves collecting stamps from around the world?',
        'a' => 'Philately',
        'b' => 'Numismatics',
        'c' => 'Deltiology',
        'd' => 'Cartophily',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves the practice of growing vegetables and fruits in a garden?',
        'a' => 'Horticulture',
        'b' => 'Agriculture',
        'c' => 'Gardening',
        'd' => 'Botany',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which of these hobbies is related to watching birds in their natural habitat?',
        'a' => 'Birdkeeping',
        'b' => 'Birdwatching',
        'c' => 'Ornithology',
        'd' => 'Falconry',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves creating music by mixing and editing soundtracks?',
        'a' => 'DJing',
        'b' => 'Composing',
        'c' => 'Music production',
        'd' => 'Beatboxing',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which of these hobbies is centered around practicing meditation and physical postures?',
        'a' => 'Yoga',
        'b' => 'Pilates',
        'c' => 'Tai Chi',
        'd' => 'Martial arts',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves writing short stories, poems, or novels?',
        'a' => 'Journaling',
        'b' => 'Creative writing',
        'c' => 'Essay writing',
        'd' => 'Screenwriting',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves solving Rubik’s cubes and similar puzzles?',
        'a' => 'Speedcubing',
        'b' => 'Puzzling',
        'c' => 'Mind games',
        'd' => 'Riddle solving',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby involves traveling to new places and exploring different cultures?',
        'a' => 'Backpacking',
        'b' => 'Traveling',
        'c' => 'Cultural immersion',
        'd' => 'Adventure sports',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which of these hobbies involves practicing dance moves in various styles?',
        'a' => 'Choreography',
        'b' => 'Dancing',
        'c' => 'Gymnastics',
        'd' => 'Performing arts',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which hobby is focused on restoring vintage cars to their original condition?',
        'a' => 'Mechanics',
        'b' => 'Automotive restoration',
        'c' => 'Car collecting',
        'd' => 'Engineering',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    // General Knowledge Questions
    [
        'field_id' => 18,
       
        'question' => 'What is the capital of France?',
        'a' => 'Berlin',
        'b' => 'Madrid',
        'c' => 'Paris',
        'd' => 'Rome',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which planet is known as the Red Planet?',
        'a' => 'Earth',
        'b' => 'Venus',
        'c' => 'Mars',
        'd' => 'Jupiter',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Who wrote the play "Romeo and Juliet"?',
        'a' => 'William Shakespeare',
        'b' => 'Jane Austen',
        'c' => 'Mark Twain',
        'd' => 'Charles Dickens',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the largest ocean on Earth?',
        'a' => 'Atlantic Ocean',
        'b' => 'Indian Ocean',
        'c' => 'Pacific Ocean',
        'd' => 'Arctic Ocean',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which element has the chemical symbol "O"?',
        'a' => 'Oxygen',
        'b' => 'Gold',
        'c' => 'Osmium',
        'd' => 'Oganesson',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Who was the first President of the United States?',
        'a' => 'Abraham Lincoln',
        'b' => 'George Washington',
        'c' => 'Thomas Jefferson',
        'd' => 'John Adams',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which country is known as the Land of the Rising Sun?',
        'a' => 'China',
        'b' => 'India',
        'c' => 'Japan',
        'd' => 'South Korea',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the main ingredient in guacamole?',
        'a' => 'Tomato',
        'b' => 'Avocado',
        'c' => 'Onion',
        'd' => 'Pepper',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which artist painted the Mona Lisa?',
        'a' => 'Vincent van Gogh',
        'b' => 'Pablo Picasso',
        'c' => 'Leonardo da Vinci',
        'd' => 'Claude Monet',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which year did World War II end?',
        'a' => '1942',
        'b' => '1945',
        'c' => '1939',
        'd' => '1950',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    // General Knowledge Questions
    [
        'field_id' => 18,
       
        'question' => 'Which country hosted the 2016 Summer Olympics?',
        'a' => 'China',
        'b' => 'Brazil',
        'c' => 'United Kingdom',
        'd' => 'Japan',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the hardest natural substance on Earth?',
        'a' => 'Gold',
        'b' => 'Iron',
        'c' => 'Diamond',
        'd' => 'Graphite',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which famous ship sank in 1912 after hitting an iceberg?',
        'a' => 'Titanic',
        'b' => 'Lusitania',
        'c' => 'Bismarck',
        'd' => 'Queen Mary',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which element is known by the symbol "H"?',
        'a' => 'Helium',
        'b' => 'Hydrogen',
        'c' => 'Hafnium',
        'd' => 'Hassium',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the smallest country in the world by land area?',
        'a' => 'Monaco',
        'b' => 'Nauru',
        'c' => 'Vatican City',
        'd' => 'San Marino',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which artist is known for painting the ceiling of the Sistine Chapel?',
        'a' => 'Raphael',
        'b' => 'Leonardo da Vinci',
        'c' => 'Michelangelo',
        'd' => 'Donatello',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Who developed the theory of relativity?',
        'a' => 'Isaac Newton',
        'b' => 'Albert Einstein',
        'c' => 'Galileo Galilei',
        'd' => 'Stephen Hawking',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which river is the longest in the world?',
        'a' => 'Amazon',
        'b' => 'Yangtze',
        'c' => 'Mississippi',
        'd' => 'Nile',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which organ in the human body is responsible for pumping blood?',
        'a' => 'Lungs',
        'b' => 'Brain',
        'c' => 'Heart',
        'd' => 'Kidney',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which country is known as the birthplace of pizza?',
        'a' => 'France',
        'b' => 'Italy',
        'c' => 'Spain',
        'd' => 'Greece',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    // General Knowledge Questions
    [
        'field_id' => 18,
       
        'question' => 'Which planet is closest to the Sun?',
        'a' => 'Venus',
        'b' => 'Earth',
        'c' => 'Mercury',
        'd' => 'Mars',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the largest mammal in the world?',
        'a' => 'Elephant',
        'b' => 'Blue Whale',
        'c' => 'Giraffe',
        'd' => 'Great White Shark',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which country is known for the invention of the paper?',
        'a' => 'China',
        'b' => 'Egypt',
        'c' => 'Greece',
        'd' => 'India',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Who is the author of the Harry Potter series?',
        'a' => 'J.K. Rowling',
        'b' => 'J.R.R. Tolkien',
        'c' => 'George R.R. Martin',
        'd' => 'Suzanne Collins',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which country is the largest by land area?',
        'a' => 'Canada',
        'b' => 'United States',
        'c' => 'China',
        'd' => 'Russia',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the most spoken language in the world?',
        'a' => 'English',
        'b' => 'Spanish',
        'c' => 'Mandarin Chinese',
        'd' => 'Hindi',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the smallest unit of life?',
        'a' => 'Atom',
        'b' => 'Molecule',
        'c' => 'Cell',
        'd' => 'Organism',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Who painted the famous painting "The Starry Night"?',
        'a' => 'Pablo Picasso',
        'b' => 'Vincent van Gogh',
        'c' => 'Claude Monet',
        'd' => 'Salvador Dalí',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which year did the Berlin Wall fall?',
        'a' => '1985',
        'b' => '1987',
        'c' => '1989',
        'd' => '1991',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the name of the longest river in Africa?',
        'a' => 'Congo River',
        'b' => 'Nile River',
        'c' => 'Zambezi River',
        'd' => 'Niger River',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    // General Knowledge Questions
    [
        'field_id' => 18,
       
        'question' => 'Which famous physicist developed the laws of motion?',
        'a' => 'Albert Einstein',
        'b' => 'Isaac Newton',
        'c' => 'Niels Bohr',
        'd' => 'Galileo Galilei',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the capital city of Australia?',
        'a' => 'Sydney',
        'b' => 'Melbourne',
        'c' => 'Canberra',
        'd' => 'Brisbane',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which animal is known as the King of the Jungle?',
        'a' => 'Tiger',
        'b' => 'Elephant',
        'c' => 'Lion',
        'd' => 'Bear',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which organ in the human body is primarily responsible for breathing?',
        'a' => 'Heart',
        'b' => 'Lungs',
        'c' => 'Kidneys',
        'd' => 'Liver',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the chemical symbol for Gold?',
        'a' => 'Au',
        'b' => 'Ag',
        'c' => 'Fe',
        'd' => 'Pb',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which famous scientist is known for his theory of evolution?',
        'a' => 'Charles Darwin',
        'b' => 'Gregor Mendel',
        'c' => 'Louis Pasteur',
        'd' => 'James Watson',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which planet is known for having a ring system?',
        'a' => 'Jupiter',
        'b' => 'Mars',
        'c' => 'Saturn',
        'd' => 'Uranus',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Who wrote the novel "1984"?',
        'a' => 'Aldous Huxley',
        'b' => 'George Orwell',
        'c' => 'Ray Bradbury',
        'd' => 'J.D. Salinger',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the currency of Japan?',
        'a' => 'Yuan',
        'b' => 'Won',
        'c' => 'Yen',
        'd' => 'Ringgit',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which natural satellite is the Earth’s only moon?',
        'a' => 'Ganymede',
        'b' => 'Titan',
        'c' => 'Luna',
        'd' => 'Europa',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    // General Knowledge Questions
    [
        'field_id' => 18,
       
        'question' => 'Which famous landmark is located in Paris, France?',
        'a' => 'Eiffel Tower',
        'b' => 'Statue of Liberty',
        'c' => 'Big Ben',
        'd' => 'Colosseum',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the name of the galaxy that contains our solar system?',
        'a' => 'Andromeda',
        'b' => 'Milky Way',
        'c' => 'Triangulum',
        'd' => 'Whirlpool',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the chemical symbol for Sodium?',
        'a' => 'Na',
        'b' => 'K',
        'c' => 'S',
        'd' => 'So',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the capital city of Canada?',
        'a' => 'Toronto',
        'b' => 'Vancouver',
        'c' => 'Montreal',
        'd' => 'Ottawa',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which famous playwright wrote "Romeo and Juliet"?',
        'a' => 'William Shakespeare',
        'b' => 'Christopher Marlowe',
        'c' => 'George Bernard Shaw',
        'd' => 'Tennessee Williams',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which element is essential for the production of thyroid hormones?',
        'a' => 'Calcium',
        'b' => 'Iodine',
        'c' => 'Iron',
        'd' => 'Magnesium',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'In which year did the first man land on the Moon?',
        'a' => '1965',
        'b' => '1969',
        'c' => '1972',
        'd' => '1975',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the largest ocean on Earth?',
        'a' => 'Atlantic Ocean',
        'b' => 'Indian Ocean',
        'c' => 'Arctic Ocean',
        'd' => 'Pacific Ocean',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which continent is the Sahara Desert located in?',
        'a' => 'Asia',
        'b' => 'South America',
        'c' => 'Africa',
        'd' => 'Australia',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Who was the first president of the United States?',
        'a' => 'Abraham Lincoln',
        'b' => 'George Washington',
        'c' => 'Thomas Jefferson',
        'd' => 'John Adams',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    // General Knowledge Questions related to Nigeria
    [
        'field_id' => 18,
       
        'question' => 'What is the capital city of Nigeria?',
        'a' => 'Lagos',
        'b' => 'Abuja',
        'c' => 'Port Harcourt',
        'd' => 'Kaduna',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian city is known as the center of Nigeria’s oil industry?',
        'a' => 'Lagos',
        'b' => 'Abuja',
        'c' => 'Port Harcourt',
        'd' => 'Enugu',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the official language of Nigeria?',
        'a' => 'Hausa',
        'b' => 'Yoruba',
        'c' => 'Igbo',
        'd' => 'English',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian leader was known for the campaign against corruption during his tenure?',
        'a' => 'Goodluck Jonathan',
        'b' => 'Muhammadu Buhari',
        'c' => 'Olusegun Obasanjo',
        'd' => 'Sani Abacha',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the traditional attire for men in northern Nigeria called?',
        'a' => 'Agbada',
        'b' => 'Dashiki',
        'c' => 'Jalabiya',
        'd' => 'Kaftan',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian author wrote "Things Fall Apart"?',
        'a' => 'Chinua Achebe',
        'b' => 'Wole Soyinka',
        'c' => 'Ben Okri',
        'd' => 'Ngozi Adichie',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian city is famous for its annual Argungu Festival?',
        'a' => 'Kano',
        'b' => 'Sokoto',
        'c' => 'Argungu',
        'd' => 'Kaduna',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian musician is known for the hit song "African Queen"?',
        'a' => 'Fela Kuti',
        'b' => '2Baba',
        'c' => 'Wizkid',
        'd' => 'Burna Boy',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the largest ethnic group in Nigeria?',
        'a' => 'Hausa',
        'b' => 'Yoruba',
        'c' => 'Igbo',
        'd' => 'Fulani',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which river is the longest in Nigeria?',
        'a' => 'Niger River',
        'b' => 'Benue River',
        'c' => 'Rivers',
        'd' => 'Yobe River',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],


    // General Knowledge Questions related to Nigeria
    [
        'field_id' => 18,
       
        'question' => 'What year did Nigeria gain independence from British rule?',
        'a' => '1960',
        'b' => '1959',
        'c' => '1963',
        'd' => '1965',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian state is known for its large deposits of coal?',
        'a' => 'Enugu',
        'b' => 'Kogi',
        'c' => 'Niger',
        'd' => 'Plateau',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Who was the first military head of state in Nigeria?',
        'a' => 'Yakubu Gowon',
        'b' => 'Julius Nyerere',
        'c' => 'Ibrahim Babangida',
        'd' => 'Aguiyi Ironsi',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian city is known as the "City of Hills and Lights"?',
        'a' => 'Jos',
        'b' => 'Kaduna',
        'c' => 'Lagos',
        'd' => 'Abuja',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian film industry is known as Nollywood?',
        'a' => 'Lagos',
        'b' => 'Abuja',
        'c' => 'Enugu',
        'd' => 'Kaduna',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which popular Nigerian festival celebrates the harvest and is associated with the Igbo ethnic group?',
        'a' => 'Eid-el-Fitr',
        'b' => 'Easter',
        'c' => 'Odinani Festival',
        'd' => 'Argungu Festival',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian president served as both a military ruler and a civilian president?',
        'a' => 'Goodluck Jonathan',
        'b' => 'Olusegun Obasanjo',
        'c' => 'Muhammadu Buhari',
        'd' => 'Shehu Shagari',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which traditional Nigerian dish is made from fermented locust beans?',
        'a' => 'Jollof Rice',
        'b' => 'Ogiri',
        'c' => 'Pounded Yam',
        'd' => 'Efo Riro',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the name of the Nigerian national football team?',
        'a' => 'Super Eagles',
        'b' => 'Black Stars',
        'c' => 'Indomitable Lions',
        'd' => 'Elephants',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which river is the second longest in Nigeria?',
        'a' => 'Benue River',
        'b' => 'Niger River',
        'c' => 'Yobe River',
        'd' => 'Gongola River',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    // General Knowledge Questions related to Nigeria
    [
        'field_id' => 18,
       
        'question' => 'What is the largest city in Nigeria by population?',
        'a' => 'Lagos',
        'b' => 'Abuja',
        'c' => 'Port Harcourt',
        'd' => 'Kano',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian state is known for its rich cultural heritage and festivals like the Ogbunike Caves?',
        'a' => 'Enugu',
        'b' => 'Ogun',
        'c' => 'Ekiti',
        'd' => 'Ondo',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian football club has won the most Nigeria Professional Football League titles?',
        'a' => 'Enyimba FC',
        'b' => 'Rangers International FC',
        'c' => 'Kano Pillars FC',
        'd' => 'Heartland FC',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the primary currency used in Nigeria?',
        'a' => 'Naira',
        'b' => 'Dollar',
        'c' => 'Pound',
        'd' => 'Euro',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which famous Nigerian movie, released in 2020, deals with the impact of climate change on coastal communities?',
        'a' => 'The Wedding Party',
        'b' => 'Lionheart',
        'c' => 'The Set Up',
        'd' => 'Breaded Life',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Who was the first female governor in Nigeria?',
        'a' => 'Ngozi Okonjo-Iweala',
        'b' => 'Virginia Etiaba',
        'c' => 'Remi Tinubu',
        'd' => 'Oluremi Tinubu',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian author won the Nobel Prize in Literature?',
        'a' => 'Chinua Achebe',
        'b' => 'Wole Soyinka',
        'c' => 'Ben Okri',
        'd' => 'Ngozi Adichie',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which of these Nigerian ethnic groups primarily inhabits the southeastern region of Nigeria?',
        'a' => 'Hausa',
        'b' => 'Yoruba',
        'c' => 'Igbo',
        'd' => 'Fulani',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the name of the Nigerian traditional festival that celebrates the beginning of the year among the Yoruba people?',
        'a' => 'Eyo Festival',
        'b' => 'Osun-Osogbo Festival',
        'c' => 'Olojo Festival',
        'd' => 'Calabar Carnival',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian city is known for the famous Aso Rock?',
        'a' => 'Lagos',
        'b' => 'Abuja',
        'c' => 'Kaduna',
        'd' => 'Enugu',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    // General Knowledge Questions related to Nigeria
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian state is the largest by land area?',
        'a' => 'Borno',
        'b' => 'Niger',
        'c' => 'Kano',
        'd' => 'Yobe',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian author is known for the book "Half of a Yellow Sun"?',
        'a' => 'Chinua Achebe',
        'b' => 'Ngugi wa Thiong\'o',
        'c' => 'Chimamanda Ngozi Adichie',
        'd' => 'Wole Soyinka',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian music genre is known for its vibrant rhythms and use of traditional instruments?',
        'a' => 'Afrobeats',
        'b' => 'Highlife',
        'c' => 'Juju',
        'd' => 'Fuji',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the name of the Nigerian legislative body?',
        'a' => 'National Assembly',
        'b' => 'House of Representatives',
        'c' => 'Senate',
        'd' => 'Federal Council',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian state is famous for its ancient city of Ife, known as the cradle of Yoruba civilization?',
        'a' => 'Ekiti',
        'b' => 'Osun',
        'c' => 'Ogun',
        'd' => 'Ondo',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Who was the Nigerian military ruler known for his anti-corruption campaigns in the 1980s?',
        'a' => 'Sani Abacha',
        'b' => 'Olusegun Obasanjo',
        'c' => 'Ibrahim Babangida',
        'd' => 'Yakubu Gowon',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian state is known for the Argungu Festival, a cultural event celebrating fishing?',
        'a' => 'Kano',
        'b' => 'Sokoto',
        'c' => 'Kogi',
        'd' => 'Kebbi',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which prominent Nigerian businessman founded the Dangote Group?',
        'a' => 'Aliko Dangote',
        'b' => 'Mike Adenuga',
        'c' => 'Femi Otedola',
        'd' => 'Tony Elumelu',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the highest peak in Nigeria?',
        'a' => 'Mount Kilimanjaro',
        'b' => 'Mount Elgon',
        'c' => 'Chappal Waddi',
        'd' => 'Kibale Peak',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian musician is known for the hit song "Fall"?',
        'a' => 'Wizkid',
        'b' => 'Burna Boy',
        'c' => 'Davido',
        'd' => 'Olamide',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],


    // General Knowledge Questions related to Nigeria
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian state is known as the "Food Basket of the Nation"?',
        'a' => 'Benue',
        'b' => 'Kaduna',
        'c' => 'Cross River',
        'd' => 'Edo',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the national flower of Nigeria?',
        'a' => 'Rose',
        'b' => 'Sunflower',
        'c' => 'Costus Spectabilis',
        'd' => 'Lily',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian city is known for its large annual Durbar festival?',
        'a' => 'Abuja',
        'b' => 'Lagos',
        'c' => 'Kaduna',
        'd' => 'Kano',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian state is famous for the Olumo Rock, a popular tourist destination?',
        'a' => 'Ogun',
        'b' => 'Ondo',
        'c' => 'Ekiti',
        'd' => 'Osun',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at'=> now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which river is the longest in Nigeria?',
        'a' => 'River Niger',
        'b' => 'River Benue',
        'c' => 'Cross River',
        'd' => 'Ogun River',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at'=> now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Who is the Nigerian artist famous for the painting "Tutu"?',
        'a' => 'Ben Enwonwu',
        'b' => 'Bruce Onobrakpeya',
        'c' => 'Nike Davies-Okundaye',
        'd' => 'Kolade Oshinowo',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at'=> now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian state is known for producing the most palm oil?',
        'a' => 'Abia',
        'b' => 'Imo',
        'c' => 'Anambra',
        'd' => 'Akwa Ibom',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at'=> now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which of the following is the highest judicial authority in Nigeria?',
        'a' => 'Supreme Court',
        'b' => 'Court of Appeal',
        'c' => 'Federal High Court',
        'd' => 'Magistrate Court',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at'=> now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What year did Nigeria gain independence from British rule?',
        'a' => '1957',
        'b' => '1960',
        'c' => '1963',
        'd' => '1966',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at'=> now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian ethnic group is known for the popular traditional dance called "Swange"?',
        'a' => 'Igbo',
        'b' => 'Yoruba',
        'c' => 'Hausa',
        'd' => 'Tiv',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at'=> now()
    ],

    // General Knowledge Questions related to Nigeria
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian city is known for the Ogbunike Caves?',
        'a' => 'Enugu',
        'b' => 'Ibadan',
        'c' => 'Port Harcourt',
        'd' => 'Kaduna',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian state is known for its large annual Argungu Festival?',
        'a' => 'Bauchi',
        'b' => 'Kano',
        'c' => 'Kebbi',
        'd' => 'Sokoto',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which river flows through the city of Lagos?',
        'a' => 'River Niger',
        'b' => 'River Benue',
        'c' => 'River Ogun',
        'd' => 'River Lekki',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Who was the first President of Nigeria?',
        'a' => 'Goodluck Jonathan',
        'b' => 'Olusegun Obasanjo',
        'c' => 'Nnamdi Azikiwe',
        'd' => 'Muhammadu Buhari',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which of the following is a popular Nigerian food made from cassava?',
        'a' => 'Jollof Rice',
        'b' => 'Egusi Soup',
        'c' => 'Pounded Yam',
        'd' => 'Gari',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian city is known for the Olumo Rock?',
        'a' => 'Ibadan',
        'b' => 'Lagos',
        'c' => 'Abeokuta',
        'd' => 'Benin City',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which popular Nigerian TV show features a character named "Mama G"?',
        'a' => 'Tinsel',
        'b' => 'Jenifa\'s Diary',
        'c' => 'The Johnsons',
        'd' => 'Vicki',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Who was the Nigerian Nobel Laureate in Literature?',
        'a' => 'Chinua Achebe',
        'b' => 'Wole Soyinka',
        'c' => 'Ben Okri',
        'd' => 'Chimamanda Ngozi Adichie',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the capital city of Nigeria?',
        'a' => 'Lagos',
        'b' => 'Abuja',
        'c' => 'Port Harcourt',
        'd' => 'Kano',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian state is known for the annual Olojo Festival?',
        'a' => 'Ekiti',
        'b' => 'Oyo',
        'c' => 'Osun',
        'd' => 'Ondo',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    // General Knowledge Questions related to Nigeria
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian musician is known for the hit song "African Queen"?',
        'a' => 'Wizkid',
        'b' => '2Baba',
        'c' => 'Davido',
        'd' => 'Burna Boy',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the name of the Nigerian traditional garment worn by men?',
        'a' => 'Buba',
        'b' => 'Agbada',
        'c' => 'Isiagu',
        'd' => 'Wrapper',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian film is known for being the first Nollywood film to win an international award?',
        'a' => 'Living in Bondage',
        'b' => 'The Wedding Party',
        'c' => 'Lionheart',
        'd' => 'Half of a Yellow Sun',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian politician served as the Vice President of Nigeria from 2015 to 2023?',
        'a' => 'Yemi Osinbajo',
        'b' => 'Atiku Abubakar',
        'c' => 'Goodluck Jonathan',
        'd' => 'Mohammed Namadi Sambo',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian state is known for the Idanre Hills?',
        'a' => 'Ondo',
        'b' => 'Ekiti',
        'c' => 'Ogun',
        'd' => 'Osun',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian author wrote the novel "The Famished Road"?',
        'a' => 'Chinua Achebe',
        'b' => 'Wole Soyinka',
        'c' => 'Ben Okri',
        'd' => 'Ngugi wa Thiong\'o',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian city is famous for its annual cultural festival called the Calabar Carnival?',
        'a' => 'Lagos',
        'b' => 'Port Harcourt',
        'c' => 'Calabar',
        'd' => 'Benin City',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian traditional festival is celebrated with the "Argungu Fishing Festival"?',
        'a' => 'Yoruba',
        'b' => 'Igbo',
        'c' => 'Hausa',
        'd' => 'Kanuri',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian state is home to the popular tourist destination, Erin Ijesha Waterfall?',
        'a' => 'Ogun',
        'b' => 'Osun',
        'c' => 'Ekiti',
        'd' => 'Ondo',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Who is known as the founder of the Nigerian music genre, Afrobeat?',
        'a' => 'Fela Kuti',
        'b' => 'King Sunny Adé',
        'c' => 'Lagbaja',
        'd' => '2Baba',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    // General Knowledge Questions related to Nigeria
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian state is known for its production of yams and is often referred to as the "Yam State"?',
        'a' => 'Benue',
        'b' => 'Enugu',
        'c' => 'Plateau',
        'd' => 'Kogi',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian state is famous for its rich history and cultural heritage, including the Benin Bronzes?',
        'a' => 'Edo',
        'b' => 'Oyo',
        'c' => 'Abia',
        'd' => 'Lagos',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which popular Nigerian author wrote the novel "Purple Hibiscus"?',
        'a' => 'Chimamanda Ngozi Adichie',
        'b' => 'Sefi Atta',
        'c' => 'Helon Habila',
        'd' => 'Teju Cole',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian athlete won a gold medal in the 400 meters at the 1996 Atlanta Olympics?',
        'a' => 'Mary Onyali',
        'b' => 'Falilat Ogunkoya',
        'c' => 'Francis Obikwelu',
        'd' => 'Atanda Musa',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian city is known for the annual "Festival of Arts and Culture"?',
        'a' => 'Abuja',
        'b' => 'Lagos',
        'c' => 'Kano',
        'd' => 'Ibadan',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian musician is known for popularizing the "Afrobeats" genre globally?',
        'a' => 'Don Jazzy',
        'b' => 'Wizkid',
        'c' => 'P-Square',
        'd' => 'Yemi Alade',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the largest city by population in Nigeria?',
        'a' => 'Abuja',
        'b' => 'Lagos',
        'c' => 'Port Harcourt',
        'd' => 'Ibadan',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian festival celebrates the end of Ramadan?',
        'a' => 'Eid al-Fitr',
        'b' => 'Eid al-Adha',
        'c' => 'Olojo Festival',
        'd' => 'Argungu Festival',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which popular Nigerian film series features characters like "Sola" and "Dede"?',
        'a' => 'The Wedding Party',
        'b' => 'Jenifa\'s Diary',
        'c' => 'Tinsel',
        'd' => 'The Johnsons',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian city is known for hosting the "Nigerian International Film Festival"?',
        'a' => 'Calabar',
        'b' => 'Lagos',
        'c' => 'Abuja',
        'd' => 'Enugu',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],


    // Fun Facts Questions
    [
        'field_id' => 18,
       
        'question' => 'What is the smallest country in the world by land area?',
        'a' => 'Monaco',
        'b' => 'San Marino',
        'c' => 'Vatican City',
        'd' => 'Liechtenstein',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which animal is known to have fingerprints that are almost identical to human fingerprints?',
        'a' => 'Koala',
        'b' => 'Chimpanzee',
        'c' => 'Dolphin',
        'd' => 'Orangutan',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'How many hearts does an octopus have?',
        'a' => '1',
        'b' => '2',
        'c' => '3',
        'd' => '4',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which planet in our solar system has the longest day?',
        'a' => 'Earth',
        'b' => 'Mars',
        'c' => 'Jupiter',
        'd' => 'Venus',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the name of the largest ocean on Earth?',
        'a' => 'Atlantic Ocean',
        'b' => 'Indian Ocean',
        'c' => 'Southern Ocean',
        'd' => 'Pacific Ocean',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which element has the chemical symbol "Au"?',
        'a' => 'Silver',
        'b' => 'Gold',
        'c' => 'Platinum',
        'd' => 'Copper',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which fruit has more Vitamin C than an orange?',
        'a' => 'Apple',
        'b' => 'Strawberry',
        'c' => 'Banana',
        'd' => 'Pear',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the name of the first manned mission to land on the moon?',
        'a' => 'Apollo 11',
        'b' => 'Apollo 13',
        'c' => 'Apollo 1',
        'd' => 'Gemini 12',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which city is known as "The City of Light"?',
        'a' => 'London',
        'b' => 'New York',
        'c' => 'Paris',
        'd' => 'Tokyo',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the fastest land animal?',
        'a' => 'Lion',
        'b' => 'Cheetah',
        'c' => 'Leopard',
        'd' => 'Gazelle',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which country is known as the Land of the Rising Sun?',
        'a' => 'China',
        'b' => 'Japan',
        'c' => 'South Korea',
        'd' => 'Thailand',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],


    // Fun Facts Questions
    [
        'field_id' => 18,
       
        'question' => 'Which insect is known to produce the loudest sound relative to its size?',
        'a' => 'Cricket',
        'b' => 'Cicada',
        'c' => 'Beetle',
        'd' => 'Locust',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the most common gas in the Earth’s atmosphere?',
        'a' => 'Oxygen',
        'b' => 'Hydrogen',
        'c' => 'Carbon Dioxide',
        'd' => 'Nitrogen',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which popular beverage was originally developed as a medicinal tonic?',
        'a' => 'Tea',
        'b' => 'Coffee',
        'c' => 'Cola',
        'd' => 'Beer',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the only mammal capable of flight?',
        'a' => 'Bat',
        'b' => 'Flying Squirrel',
        'c' => 'Sugar Glider',
        'd' => 'Flying Fox',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which country is known for inventing the game of chess?',
        'a' => 'China',
        'b' => 'India',
        'c' => 'Persia',
        'd' => 'Egypt',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the hardest natural substance on Earth?',
        'a' => 'Gold',
        'b' => 'Diamond',
        'c' => 'Platinum',
        'd' => 'Iron',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which famous artist is known for cutting off his own ear?',
        'a' => 'Pablo Picasso',
        'b' => 'Vincent van Gogh',
        'c' => 'Claude Monet',
        'd' => 'Salvador Dalí',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which ocean is the largest by volume?',
        'a' => 'Atlantic Ocean',
        'b' => 'Indian Ocean',
        'c' => 'Pacific Ocean',
        'd' => 'Arctic Ocean',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which planet is known for its prominent ring system?',
        'a' => 'Jupiter',
        'b' => 'Saturn',
        'c' => 'Uranus',
        'd' => 'Neptune',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the capital city of Canada?',
        'a' => 'Toronto',
        'b' => 'Vancouver',
        'c' => 'Montreal',
        'd' => 'Ottawa',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],

    // Fun Facts Questions
    [
        'field_id' => 18,
       
        'question' => 'What is the tallest mountain in the world above sea level?',
        'a' => 'K2',
        'b' => 'Mount Kilimanjaro',
        'c' => 'Mount Everest',
        'd' => 'Kangchenjunga',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which country has the longest coastline in the world?',
        'a' => 'Australia',
        'b' => 'Canada',
        'c' => 'Russia',
        'd' => 'United States',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the hardest known natural material on Earth?',
        'a' => 'Graphene',
        'b' => 'Diamond',
        'c' => 'Wurtzite boron nitride',
        'd' => 'Osborne',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which element is the most abundant in the Earth’s crust?',
        'a' => 'Iron',
        'b' => 'Silicon',
        'c' => 'Oxygen',
        'd' => 'Aluminum',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the only continent that is also a country?',
        'a' => 'Australia',
        'b' => 'Africa',
        'c' => 'Antarctica',
        'd' => 'Europe',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which country is known as the Land of the Midnight Sun?',
        'a' => 'Norway',
        'b' => 'Sweden',
        'c' => 'Finland',
        'd' => 'Denmark',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which famous scientist developed the theory of relativity?',
        'a' => 'Isaac Newton',
        'b' => 'Albert Einstein',
        'c' => 'Galileo Galilei',
        'd' => 'Niels Bohr',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the largest organ in the human body?',
        'a' => 'Liver',
        'b' => 'Heart',
        'c' => 'Skin',
        'd' => 'Lung',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the capital city of Australia?',
        'a' => 'Sydney',
        'b' => 'Melbourne',
        'c' => 'Canberra',
        'd' => 'Brisbane',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which famous building is known as the "Eiffel Tower of the East"?',
        'a' => 'Sydney Opera House',
        'b' => 'Tokyo Tower',
        'c' => 'Burj Khalifa',
        'd' => 'Petronas Towers',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],


    // Fun Facts Questions related to Nigeria
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian city is known as the "City of Aquatic Splendor"?',
        'a' => 'Lagos',
        'b' => 'Abuja',
        'c' => 'Port Harcourt',
        'd' => 'Enugu',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the official language of Nigeria?',
        'a' => 'Hausa',
        'b' => 'Yoruba',
        'c' => 'Igbo',
        'd' => 'English',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian festival is celebrated with colorful masks and dances in the southeastern part of the country?',
        'a' => 'Argungu Festival',
        'b' => 'Eyo Festival',
        'c' => 'Owu Festival',
        'd' => 'Atilogwu Festival',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian state is known for its rich cultural heritage and the Olumo Rock?',
        'a' => 'Ogun State',
        'b' => 'Ekiti State',
        'c' => 'Osun State',
        'd' => 'Ondo State',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Who was the first President of Nigeria?',
        'a' => 'Olusegun Obasanjo',
        'b' => 'Nnamdi Azikiwe',
        'c' => 'Goodluck Jonathan',
        'd' => 'Muhammadu Buhari',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the name of the Nigerian national football team?',
        'a' => 'Super Eagles',
        'b' => 'Black Stars',
        'c' => 'Flamingos',
        'd' => 'Elephants',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian city is famous for its "Lagos Island" and bustling markets?',
        'a' => 'Lagos',
        'b' => 'Abuja',
        'c' => 'Kaduna',
        'd' => 'Benin City',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the most popular traditional music genre in Nigeria?',
        'a' => 'Afrobeat',
        'b' => 'Highlife',
        'c' => 'Fuji',
        'd' => 'Juju',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian film industry is often referred to as "Nollywood"?',
        'a' => 'Lagos Film Industry',
        'b' => 'Abuja Film Industry',
        'c' => 'Enugu Film Industry',
        'd' => 'Nigerian Film Industry',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian river is one of the longest in Africa?',
        'a' => 'Niger River',
        'b' => 'Benue River',
        'c' => 'Zambezi River',
        'd' => 'Limpopo River',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian cuisine is known for its spicy and flavorful dishes such as Jollof rice and Egusi soup?',
        'a' => 'Edo Cuisine',
        'b' => 'Yoruba Cuisine',
        'c' => 'Hausa Cuisine',
        'd' => 'Igbo Cuisine',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],

    // Fun Facts Questions
    [
        'field_id' => 18,
       
        'question' => 'Which planet is closest to the Sun?',
        'a' => 'Venus',
        'b' => 'Earth',
        'c' => 'Mercury',
        'd' => 'Mars',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the most spoken language in the world?',
        'a' => 'Spanish',
        'b' => 'Mandarin',
        'c' => 'English',
        'd' => 'Hindi',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which animal is known as the King of the Jungle?',
        'a' => 'Elephant',
        'b' => 'Lion',
        'c' => 'Tiger',
        'd' => 'Bear',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the longest river in the world?',
        'a' => 'Amazon',
        'b' => 'Nile',
        'c' => 'Yangtze',
        'd' => 'Mississippi',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the smallest country in the world by land area?',
        'a' => 'Monaco',
        'b' => 'San Marino',
        'c' => 'Liechtenstein',
        'd' => 'Vatican City',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the name of the galaxy that contains our solar system?',
        'a' => 'Andromeda',
        'b' => 'Milky Way',
        'c' => 'Triangulum',
        'd' => 'Whirlpool',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which element is known as the "building block of life"?',
        'a' => 'Carbon',
        'b' => 'Oxygen',
        'c' => 'Nitrogen',
        'd' => 'Hydrogen',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the currency of Japan?',
        'a' => 'Won',
        'b' => 'Yuan',
        'c' => 'Yen',
        'd' => 'Ringgit',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which famous scientist is known for his laws of motion?',
        'a' => 'Galileo Galilei',
        'b' => 'Isaac Newton',
        'c' => 'Albert Einstein',
        'd' => 'Nikola Tesla',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the main ingredient in guacamole?',
        'a' => 'Tomato',
        'b' => 'Avocado',
        'c' => 'Pepper',
        'd' => 'Onion',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],


    // Music, Poems, and Stories Questions related to Nigeria
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian musician is famously known as the "King of Afrobeat"?',
        'a' => 'Fela Kuti',
        'b' => 'King Sunny Adé',
        'c' => '2Baba',
        'd' => 'Davido',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian poet wrote "The Song of a Broken Son"?',
        'a' => 'Wole Soyinka',
        'b' => 'Chinua Achebe',
        'c' => 'J.P. Clark',
        'd' => 'Ben Okri',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which genre of music did the late Nigerian artist, Fela Kuti, pioneer?',
        'a' => 'Juju',
        'b' => 'Afrobeat',
        'c' => 'Highlife',
        'd' => 'Fuji',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'What is the title of the famous novel by Chinua Achebe that deals with the impact of colonialism in Nigeria?',
        'a' => 'No Longer at Ease',
        'b' => 'Things Fall Apart',
        'c' => 'Arrow of God',
        'd' => 'Man of the People',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian musician is known for his hit song "African Queen"?',
        'a' => 'P-Square',
        'b' => '2Baba',
        'c' => 'Wizkid',
        'd' => 'Olamide',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Who is the Nigerian author of the poetry collection "The Sun’s Eye"?',
        'a' => 'Niyi Osundare',
        'b' => 'Chinua Achebe',
        'c' => 'Ben Okri',
        'd' => 'J.P. Clark',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian music genre is known for its vibrant and rhythmic beats, often associated with celebrations?',
        'a' => 'Highlife',
        'b' => 'Fuji',
        'c' => 'Afrobeat',
        'd' => 'Gospel',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Who wrote the famous Nigerian novel "The Joys of Motherhood"?',
        'a' => 'Zaynab Alkali',
        'b' => 'Chinua Achebe',
        'c' => 'Sefi Atta',
        'd' => 'Wole Soyinka',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian artist is known for blending traditional music with contemporary sounds in his album "Ginger"?',
        'a' => 'Burna Boy',
        'b' => 'Davido',
        'c' => 'Wizkid',
        'd' => 'Tiwa Savage',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 18,
       
        'question' => 'Which Nigerian author won the 1991 Commonwealth Writers Prize for his novel "The Famished Road"?',
        'a' => 'Chinua Achebe',
        'b' => 'Wole Soyinka',
        'c' => 'Ben Okri',
        'd' => 'Helon Habila',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],


























































        
        
        ];

        DB::table('questions')->insert($questions);
        
        
        
    }
}
