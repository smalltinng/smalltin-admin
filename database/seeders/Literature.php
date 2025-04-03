<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Literature extends Seeder
{
    /**
     * Run the database seeds.
     */
    public static function run(): void
    {
        $questions = [

    [
        'field_id' => 8,
        
        'question' => 'Who wrote the epic poem "The Odyssey"?',
        'a' => 'Homer',
        'b' => 'Virgil',
        'c' => 'Dante',
        'd' => 'Shakespeare',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which poet is famous for the line, "I wandered lonely as a cloud"?',
        'a' => 'John Keats',
        'b' => 'William Wordsworth',
        'c' => 'Lord Byron',
        'd' => 'Percy Shelley',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which American poet wrote "The Raven"?',
        'a' => 'Robert Frost',
        'b' => 'Edgar Allan Poe',
        'c' => 'Emily Dickinson',
        'd' => 'Walt Whitman',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who is the author of "Paradise Lost"?',
        'a' => 'John Milton',
        'b' => 'Geoffrey Chaucer',
        'c' => 'Alexander Pope',
        'd' => 'Christopher Marlowe',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'In which century did Shakespeare write most of his sonnets?',
        'a' => '16th century',
        'b' => '17th century',
        'c' => '18th century',
        'd' => '15th century',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote the poem "Do Not Go Gentle into That Good Night"?',
        'a' => 'T.S. Eliot',
        'b' => 'Sylvia Plath',
        'c' => 'Dylan Thomas',
        'd' => 'Langston Hughes',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which poet is famous for "Ode to a Nightingale"?',
        'a' => 'John Keats',
        'b' => 'Lord Byron',
        'c' => 'Samuel Coleridge',
        'd' => 'Robert Burns',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote the poem "The Waste Land"?',
        'a' => 'Ezra Pound',
        'b' => 'Walt Whitman',
        'c' => 'T.S. Eliot',
        'd' => 'Allen Ginsberg',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who is considered the "national poet" of Scotland?',
        'a' => 'William Blake',
        'b' => 'Robert Burns',
        'c' => 'William Wordsworth',
        'd' => 'John Keats',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which poet is famous for the work "The Canterbury Tales"?',
        'a' => 'Geoffrey Chaucer',
        'b' => 'John Donne',
        'c' => 'Alfred Lord Tennyson',
        'd' => 'William Wordsworth',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 8,
        
        'question' => 'Which poet wrote "The Love Song of J. Alfred Prufrock"?',
        'a' => 'T.S. Eliot',
        'b' => 'Robert Frost',
        'c' => 'Wallace Stevens',
        'd' => 'Walt Whitman',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who is the author of "Leaves of Grass"?',
        'a' => 'Ezra Pound',
        'b' => 'William Carlos Williams',
        'c' => 'Walt Whitman',
        'd' => 'Langston Hughes',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which poet is associated with the "Beat Generation"?',
        'a' => 'Allen Ginsberg',
        'b' => 'Robert Lowell',
        'c' => 'Sylvia Plath',
        'd' => 'Emily Dickinson',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote the poem "Ode to the West Wind"?',
        'a' => 'John Milton',
        'b' => 'Percy Bysshe Shelley',
        'c' => 'William Blake',
        'd' => 'Samuel Coleridge',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which poet is famous for the collection "Ariel"?',
        'a' => 'Sylvia Plath',
        'b' => 'Emily Dickinson',
        'c' => 'Elizabeth Bishop',
        'd' => 'Anne Sexton',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote "The Divine Comedy"?',
        'a' => 'Homer',
        'b' => 'Virgil',
        'c' => 'Dante Alighieri',
        'd' => 'Geoffrey Chaucer',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which poet is known for the work "Song of Myself"?',
        'a' => 'T.S. Eliot',
        'b' => 'Walt Whitman',
        'c' => 'Emily Dickinson',
        'd' => 'Robert Frost',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which British Romantic poet wrote "Kubla Khan"?',
        'a' => 'William Blake',
        'b' => 'Lord Byron',
        'c' => 'Samuel Taylor Coleridge',
        'd' => 'John Keats',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who is the author of "Howl"?',
        'a' => 'Allen Ginsberg',
        'b' => 'Jack Kerouac',
        'c' => 'Gary Snyder',
        'd' => 'Lawrence Ferlinghetti',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which poet wrote "The Tyger"?',
        'a' => 'William Blake',
        'b' => 'Robert Browning',
        'c' => 'Percy Bysshe Shelley',
        'd' => 'John Keats',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 8,
        
        'question' => 'Who wrote the poem "The Road Not Taken"?',
        'a' => 'Robert Frost',
        'b' => 'Walt Whitman',
        'c' => 'William Wordsworth',
        'd' => 'Emily Dickinson',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which poet is famous for "Do Not Go Gentle into That Good Night"?',
        'a' => 'W.B. Yeats',
        'b' => 'Dylan Thomas',
        'c' => 'T.S. Eliot',
        'd' => 'Ezra Pound',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote "The Waste Land"?',
        'a' => 'Ezra Pound',
        'b' => 'T.S. Eliot',
        'c' => 'Wallace Stevens',
        'd' => 'W.B. Yeats',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which poet is known for "The Raven"?',
        'a' => 'Walt Whitman',
        'b' => 'Emily Dickinson',
        'c' => 'Edgar Allan Poe',
        'd' => 'Robert Frost',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who is the author of "Because I could not stop for Death"?',
        'a' => 'Walt Whitman',
        'b' => 'Elizabeth Barrett Browning',
        'c' => 'Emily Dickinson',
        'd' => 'Sylvia Plath',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote "The Song of Hiawatha"?',
        'a' => 'Henry Wadsworth Longfellow',
        'b' => 'Ralph Waldo Emerson',
        'c' => 'Walt Whitman',
        'd' => 'Edgar Allan Poe',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which poet wrote "To His Coy Mistress"?',
        'a' => 'John Donne',
        'b' => 'Andrew Marvell',
        'c' => 'Robert Herrick',
        'd' => 'Ben Jonson',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who is the author of "How Do I Love Thee?"',
        'a' => 'Anne Bradstreet',
        'b' => 'Elizabeth Barrett Browning',
        'c' => 'Emily Dickinson',
        'd' => 'Christina Rossetti',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which poet is known for "The Charge of the Light Brigade"?',
        'a' => 'Robert Browning',
        'b' => 'William Blake',
        'c' => 'Alfred, Lord Tennyson',
        'd' => 'John Milton',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who is known for the poem "Ode to a Nightingale"?',
        'a' => 'John Keats',
        'b' => 'Percy Bysshe Shelley',
        'c' => 'Lord Byron',
        'd' => 'William Wordsworth',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 8,
        
        'question' => 'Who wrote the poem "Ozymandias"?',
        'a' => 'John Keats',
        'b' => 'Percy Bysshe Shelley',
        'c' => 'William Wordsworth',
        'd' => 'Lord Byron',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which poet is famous for the line "I wandered lonely as a cloud"?',
        'a' => 'William Blake',
        'b' => 'Percy Bysshe Shelley',
        'c' => 'William Wordsworth',
        'd' => 'John Keats',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote the poem "Ode to the West Wind"?',
        'a' => 'William Blake',
        'b' => 'John Keats',
        'c' => 'Lord Byron',
        'd' => 'Percy Bysshe Shelley',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which poet wrote the sonnet "Shall I compare thee to a summer’s day?"',
        'a' => 'William Shakespeare',
        'b' => 'John Milton',
        'c' => 'John Donne',
        'd' => 'Geoffrey Chaucer',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote "The Tyger" from *Songs of Experience*?',
        'a' => 'William Wordsworth',
        'b' => 'William Blake',
        'c' => 'Robert Browning',
        'd' => 'Samuel Taylor Coleridge',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which poet wrote "The Love Song of J. Alfred Prufrock"?',
        'a' => 'Ezra Pound',
        'b' => 'Walt Whitman',
        'c' => 'T.S. Eliot',
        'd' => 'W.B. Yeats',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who is the poet behind "Kubla Khan"?',
        'a' => 'John Keats',
        'b' => 'William Wordsworth',
        'c' => 'Samuel Taylor Coleridge',
        'd' => 'Lord Byron',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which poet is known for "The Rime of the Ancient Mariner"?',
        'a' => 'William Wordsworth',
        'b' => 'Lord Byron',
        'c' => 'Samuel Taylor Coleridge',
        'd' => 'John Milton',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote the poem "To Autumn"?',
        'a' => 'John Keats',
        'b' => 'William Wordsworth',
        'c' => 'Lord Byron',
        'd' => 'Robert Browning',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who is the author of the poem "The Second Coming"?',
        'a' => 'T.S. Eliot',
        'b' => 'W.B. Yeats',
        'c' => 'Ezra Pound',
        'd' => 'D.H. Lawrence',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],



    [
        'field_id' => 8,
        
        'question' => 'Who wrote the poem "The Road Not Taken"?',
        'a' => 'Robert Frost',
        'b' => 'Emily Dickinson',
        'c' => 'Walt Whitman',
        'd' => 'William Blake',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who is the author of the epic poem "Paradise Lost"?',
        'a' => 'Geoffrey Chaucer',
        'b' => 'John Milton',
        'c' => 'Dante Alighieri',
        'd' => 'William Shakespeare',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which poet is known for the collection "Leaves of Grass"?',
        'a' => 'Robert Browning',
        'b' => 'William Wordsworth',
        'c' => 'Walt Whitman',
        'd' => 'Percy Bysshe Shelley',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which poet wrote "Howl", a poem that became a defining work of the Beat Generation?',
        'a' => 'Allen Ginsberg',
        'b' => 'Jack Kerouac',
        'c' => 'Ezra Pound',
        'd' => 'Charles Bukowski',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote the poem "The Raven"?',
        'a' => 'Walt Whitman',
        'b' => 'Robert Frost',
        'c' => 'Edgar Allan Poe',
        'd' => 'Emily Dickinson',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which poet wrote "Because I could not stop for Death"?',
        'a' => 'Emily Dickinson',
        'b' => 'Sylvia Plath',
        'c' => 'Robert Frost',
        'd' => 'Edna St. Vincent Millay',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote the poem "Daffodils", also known as "I Wandered Lonely as a Cloud"?',
        'a' => 'William Wordsworth',
        'b' => 'John Keats',
        'c' => 'Samuel Taylor Coleridge',
        'd' => 'Lord Byron',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which poet is famous for the line "Do not go gentle into that good night"?',
        'a' => 'W.B. Yeats',
        'b' => 'Dylan Thomas',
        'c' => 'Ezra Pound',
        'd' => 'T.S. Eliot',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote "The Waste Land", a complex modernist poem?',
        'a' => 'W.B. Yeats',
        'b' => 'Ezra Pound',
        'c' => 'T.S. Eliot',
        'd' => 'Robert Frost',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which poet is associated with the Imagist movement and wrote "In a Station of the Metro"?',
        'a' => 'Ezra Pound',
        'b' => 'Walt Whitman',
        'c' => 'Robert Frost',
        'd' => 'William Carlos Williams',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 8,
        
        'question' => 'Who wrote the epic poem "The Divine Comedy"?',
        'a' => 'John Milton',
        'b' => 'Dante Alighieri',
        'c' => 'Geoffrey Chaucer',
        'd' => 'Homer',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which poet is known for writing "Ode to a Nightingale"?',
        'a' => 'John Keats',
        'b' => 'William Wordsworth',
        'c' => 'Percy Bysshe Shelley',
        'd' => 'Lord Byron',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote the famous sonnet "Shall I compare thee to a summer’s day?"',
        'a' => 'William Blake',
        'b' => 'William Shakespeare',
        'c' => 'John Donne',
        'd' => 'Christopher Marlowe',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which poet wrote "The Love Song of J. Alfred Prufrock"?',
        'a' => 'W.B. Yeats',
        'b' => 'Robert Frost',
        'c' => 'T.S. Eliot',
        'd' => 'Ezra Pound',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote the narrative poem "The Rime of the Ancient Mariner"?',
        'a' => 'Samuel Taylor Coleridge',
        'b' => 'William Wordsworth',
        'c' => 'Robert Browning',
        'd' => 'Percy Bysshe Shelley',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote "Ode to the West Wind"?',
        'a' => 'John Keats',
        'b' => 'William Wordsworth',
        'c' => 'Percy Bysshe Shelley',
        'd' => 'Lord Byron',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which poet is famous for writing "Do not go gentle into that good night"?',
        'a' => 'T.S. Eliot',
        'b' => 'W.H. Auden',
        'c' => 'Dylan Thomas',
        'd' => 'W.B. Yeats',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote "Annabel Lee", a poem about a lost love? ',
        'a' => 'Emily Dickinson',
        'b' => 'Edgar Allan Poe',
        'c' => 'Robert Frost',
        'd' => 'Sylvia Plath',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which poet wrote "Ode on a Grecian Urn"?',
        'a' => 'Percy Bysshe Shelley',
        'b' => 'William Blake',
        'c' => 'John Keats',
        'd' => 'Lord Byron',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote "Song of Myself", a poem that celebrates individuality and democracy?',
        'a' => 'Robert Frost',
        'b' => 'Walt Whitman',
        'c' => 'Emily Dickinson',
        'd' => 'Langston Hughes',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 8,
        
        'question' => 'Who wrote the poem "The Raven"?',
        'a' => 'Walt Whitman',
        'b' => 'Emily Dickinson',
        'c' => 'Edgar Allan Poe',
        'd' => 'Robert Frost',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which poet wrote "Howl", a key work of the Beat Generation?',
        'a' => 'Ezra Pound',
        'b' => 'T.S. Eliot',
        'c' => 'Allen Ginsberg',
        'd' => 'Robert Lowell',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote the poem "Stopping by Woods on a Snowy Evening"?',
        'a' => 'Robert Frost',
        'b' => 'Walt Whitman',
        'c' => 'Emily Dickinson',
        'd' => 'Sylvia Plath',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which poet wrote the epic poem "Paradise Lost"?',
        'a' => 'Geoffrey Chaucer',
        'b' => 'John Milton',
        'c' => 'Homer',
        'd' => 'John Donne',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who is the poet behind "The Waste Land"?',
        'a' => 'T.S. Eliot',
        'b' => 'Ezra Pound',
        'c' => 'W.B. Yeats',
        'd' => 'Sylvia Plath',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which poet wrote "A Dream Deferred", which explores the frustration of African Americans?',
        'a' => 'Langston Hughes',
        'b' => 'Maya Angelou',
        'c' => 'Walt Whitman',
        'd' => 'Claude McKay',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote "Daddy", a confessional poem that addresses her complex relationship with her father?',
        'a' => 'Sylvia Plath',
        'b' => 'Anne Sexton',
        'c' => 'Emily Dickinson',
        'd' => 'Elizabeth Bishop',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote the famous line "Do I dare / Disturb the universe?" in "The Love Song of J. Alfred Prufrock"?',
        'a' => 'Ezra Pound',
        'b' => 'W.B. Yeats',
        'c' => 'T.S. Eliot',
        'd' => 'Allen Ginsberg',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which poet wrote "The Second Coming", famous for the line "Things fall apart; the centre cannot hold"?',
        'a' => 'Robert Frost',
        'b' => 'T.S. Eliot',
        'c' => 'W.B. Yeats',
        'd' => 'Walt Whitman',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote the poem "The Road Not Taken"?',
        'a' => 'Robert Frost',
        'b' => 'Walt Whitman',
        'c' => 'Emily Dickinson',
        'd' => 'Langston Hughes',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 8,
        
        'question' => 'Who wrote the novel "1984"?',
        'a' => 'Aldous Huxley',
        'b' => 'George Orwell',
        'c' => 'Ray Bradbury',
        'd' => 'Margaret Atwood',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'In which novel does the character Jay Gatsby appear?',
        'a' => 'The Great Gatsby',
        'b' => 'Moby Dick',
        'c' => 'The Catcher in the Rye',
        'd' => 'Brave New World',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which author wrote "Pride and Prejudice"?',
        'a' => 'Mary Shelley',
        'b' => 'Emily Brontë',
        'c' => 'Jane Austen',
        'd' => 'Charlotte Brontë',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which dystopian novel features the concept of "Big Brother"?',
        'a' => 'Fahrenheit 451',
        'b' => '1984',
        'c' => 'The Handmaid’s Tale',
        'd' => 'Brave New World',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who is the author of the science fiction novel "Dune"?',
        'a' => 'Isaac Asimov',
        'b' => 'Frank Herbert',
        'c' => 'Philip K. Dick',
        'd' => 'Arthur C. Clarke',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which novel follows the journey of Ishmael aboard the whaling ship Pequod?',
        'a' => 'Moby Dick',
        'b' => 'Treasure Island',
        'c' => 'Heart of Darkness',
        'd' => 'The Odyssey',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote "To Kill a Mockingbird"?',
        'a' => 'F. Scott Fitzgerald',
        'b' => 'J.D. Salinger',
        'c' => 'Harper Lee',
        'd' => 'John Steinbeck',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which novel is set on a deserted island and follows the lives of boys stranded there?',
        'a' => 'The Catcher in the Rye',
        'b' => 'Lord of the Flies',
        'c' => 'The Hobbit',
        'd' => 'Of Mice and Men',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which author wrote "One Hundred Years of Solitude"?',
        'a' => 'Gabriel Garcia Marquez',
        'b' => 'Jorge Luis Borges',
        'c' => 'Mario Vargas Llosa',
        'd' => 'Isabel Allende',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'In which novel does the character Holden Caulfield appear?',
        'a' => 'The Catcher in the Rye',
        'b' => 'Moby Dick',
        'c' => 'The Great Gatsby',
        'd' => 'Of Mice and Men',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 8,
        
        'question' => 'Who wrote the novel "The Catcher in the Rye"?',
        'a' => 'F. Scott Fitzgerald',
        'b' => 'John Steinbeck',
        'c' => 'J.D. Salinger',
        'd' => 'William Faulkner',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which novel is a satire of totalitarianism and features farm animals as main characters?',
        'a' => 'Brave New World',
        'b' => 'Animal Farm',
        'c' => '1984',
        'd' => 'Lord of the Flies',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'In which novel does Elizabeth Bennet appear?',
        'a' => 'Sense and Sensibility',
        'b' => 'Wuthering Heights',
        'c' => 'Pride and Prejudice',
        'd' => 'Jane Eyre',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which novel is set during the French Revolution and begins with the line, "It was the best of times, it was the worst of times"?',
        'a' => 'Les Misérables',
        'b' => 'A Tale of Two Cities',
        'c' => 'The Count of Monte Cristo',
        'd' => 'War and Peace',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote the novel "Moby-Dick"?',
        'a' => 'Herman Melville',
        'b' => 'Mark Twain',
        'c' => 'Nathaniel Hawthorne',
        'd' => 'James Fenimore Cooper',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which novel by William Golding is about a group of boys stranded on a deserted island?',
        'a' => 'Treasure Island',
        'b' => 'Lord of the Flies',
        'c' => 'The Coral Island',
        'd' => 'Swiss Family Robinson',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'In which novel does the character Atticus Finch appear?',
        'a' => 'To Kill a Mockingbird',
        'b' => 'Of Mice and Men',
        'c' => 'The Grapes of Wrath',
        'd' => 'East of Eden',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which novel features the Joad family during the Great Depression?',
        'a' => 'East of Eden',
        'b' => 'The Grapes of Wrath',
        'c' => 'Of Mice and Men',
        'd' => 'The Sound and the Fury',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote "The Brothers Karamazov"?',
        'a' => 'Leo Tolstoy',
        'b' => 'Fyodor Dostoevsky',
        'c' => 'Anton Chekhov',
        'd' => 'Nikolai Gogol',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which novel features the character Pip and the convict Magwitch?',
        'a' => 'Oliver Twist',
        'b' => 'Great Expectations',
        'c' => 'David Copperfield',
        'd' => 'A Tale of Two Cities',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 8,
        
        'question' => 'Who is the author of "1984" and "Animal Farm"?',
        'a' => 'George Orwell',
        'b' => 'Aldous Huxley',
        'c' => 'Ray Bradbury',
        'd' => 'Jules Verne',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which novel is about a dystopian future where books are banned, and "firemen" burn them?',
        'a' => 'Fahrenheit 451',
        'b' => 'Brave New World',
        'c' => '1984',
        'd' => 'The Handmaid’s Tale',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote the novel "Brave New World"?',
        'a' => 'George Orwell',
        'b' => 'Aldous Huxley',
        'c' => 'H.G. Wells',
        'd' => 'Ray Bradbury',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which novel by John Steinbeck focuses on the lives of two displaced ranch workers during the Great Depression?',
        'a' => 'East of Eden',
        'b' => 'The Grapes of Wrath',
        'c' => 'Of Mice and Men',
        'd' => 'Cannery Row',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'In which novel does the character "Big Brother" control the society?',
        'a' => '1984',
        'b' => 'Brave New World',
        'c' => 'The Handmaid’s Tale',
        'd' => 'Fahrenheit 451',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who is the protagonist in Herman Melville’s "Moby-Dick"?',
        'a' => 'Captain Ahab',
        'b' => 'Ishmael',
        'c' => 'Queequeg',
        'd' => 'Starbuck',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which novel features the character Jay Gatsby?',
        'a' => 'The Sun Also Rises',
        'b' => 'The Great Gatsby',
        'c' => 'This Side of Paradise',
        'd' => 'Tender is the Night',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which novel is about the adventures of a young orphan boy named Pip?',
        'a' => 'Oliver Twist',
        'b' => 'David Copperfield',
        'c' => 'Great Expectations',
        'd' => 'Bleak House',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote the novel "Crime and Punishment"?',
        'a' => 'Leo Tolstoy',
        'b' => 'Fyodor Dostoevsky',
        'c' => 'Anton Chekhov',
        'd' => 'Ivan Turgenev',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which novel follows the life of Scarlett O’Hara during the American Civil War?',
        'a' => 'Gone with the Wind',
        'b' => 'The Red Badge of Courage',
        'c' => 'The Grapes of Wrath',
        'd' => 'Little Women',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],


    [
        'field_id' => 8,
        
        'question' => 'Which novel by Jane Austen focuses on the character Elizabeth Bennet?',
        'a' => 'Emma',
        'b' => 'Sense and Sensibility',
        'c' => 'Pride and Prejudice',
        'd' => 'Mansfield Park',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote the novel "One Hundred Years of Solitude"?',
        'a' => 'Gabriel García Márquez',
        'b' => 'Jorge Luis Borges',
        'c' => 'Mario Vargas Llosa',
        'd' => 'Isabel Allende',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'In George Orwell’s "Animal Farm", which character represents Joseph Stalin?',
        'a' => 'Napoleon',
        'b' => 'Snowball',
        'c' => 'Boxer',
        'd' => 'Squealer',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which novel follows the life of Holden Caulfield, a disillusioned teenager?',
        'a' => 'The Great Gatsby',
        'b' => 'To Kill a Mockingbird',
        'c' => 'The Catcher in the Rye',
        'd' => 'On the Road',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote the science fiction novel "The War of the Worlds"?',
        'a' => 'Isaac Asimov',
        'b' => 'H.G. Wells',
        'c' => 'Arthur C. Clarke',
        'd' => 'Ray Bradbury',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which novel is considered a classic of the Harlem Renaissance and was written by Zora Neale Hurston?',
        'a' => 'Native Son',
        'b' => 'Their Eyes Were Watching God',
        'c' => 'Invisible Man',
        'd' => 'The Souls of Black Folk',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which Charles Dickens novel features the character Ebenezer Scrooge?',
        'a' => 'Great Expectations',
        'b' => 'A Tale of Two Cities',
        'c' => 'Oliver Twist',
        'd' => 'A Christmas Carol',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote the epic fantasy series "The Lord of the Rings"?',
        'a' => 'C.S. Lewis',
        'b' => 'J.R.R. Tolkien',
        'c' => 'George R.R. Martin',
        'd' => 'Philip Pullman',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'In which novel does the character Atticus Finch serve as a moral hero?',
        'a' => 'To Kill a Mockingbird',
        'b' => 'The Catcher in the Rye',
        'c' => 'Lord of the Flies',
        'd' => 'Brave New World',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which novel by Mark Twain features the adventures of a young boy named Tom and his friend Huck?',
        'a' => 'The Adventures of Tom Sawyer',
        'b' => 'The Adventures of Huckleberry Finn',
        'c' => 'Life on the Mississippi',
        'd' => 'The Prince and the Pauper',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 8,
        
        'question' => 'Who wrote the dystopian novel "Brave New World"?',
        'a' => 'George Orwell',
        'b' => 'Aldous Huxley',
        'c' => 'Ray Bradbury',
        'd' => 'Philip K. Dick',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which novel by Leo Tolstoy is set against the backdrop of the Napoleonic Wars?',
        'a' => 'War and Peace',
        'b' => 'Anna Karenina',
        'c' => 'The Brothers Karamazov',
        'd' => 'Crime and Punishment',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who is the author of the novel "Moby-Dick"?',
        'a' => 'Nathaniel Hawthorne',
        'b' => 'Herman Melville',
        'c' => 'Henry James',
        'd' => 'Ralph Waldo Emerson',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'In the novel "Frankenstein", who is the creator of the monster?',
        'a' => 'Victor Frankenstein',
        'b' => 'Henry Clerval',
        'c' => 'Captain Walton',
        'd' => 'Robert Walton',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which American author wrote the novel "The Grapes of Wrath"?',
        'a' => 'Ernest Hemingway',
        'b' => 'F. Scott Fitzgerald',
        'c' => 'John Steinbeck',
        'd' => 'William Faulkner',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which literary work features the character of Captain Ahab?',
        'a' => 'Moby-Dick',
        'b' => 'The Old Man and the Sea',
        'c' => 'Treasure Island',
        'd' => 'Heart of Darkness',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who is the author of "1984", a novel set in a totalitarian society?',
        'a' => 'George Orwell',
        'b' => 'Ray Bradbury',
        'c' => 'J.G. Ballard',
        'd' => 'Aldous Huxley',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which novel by F. Scott Fitzgerald is considered a classic of the Jazz Age?',
        'a' => 'The Great Gatsby',
        'b' => 'Tender is the Night',
        'c' => 'This Side of Paradise',
        'd' => 'The Beautiful and Damned',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote the novel "Slaughterhouse-Five"?',
        'a' => 'Kurt Vonnegut',
        'b' => 'Joseph Heller',
        'c' => 'Thomas Pynchon',
        'd' => 'J.D. Salinger',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which novel features the character Jay Gatsby? ',
        'a' => 'Of Mice and Men',
        'b' => 'The Great Gatsby',
        'c' => 'East of Eden',
        'd' => 'The Sun Also Rises',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 8,
        
        'question' => 'Who wrote the play "Death of a Salesman"?',
        'a' => 'Arthur Miller',
        'b' => 'Eugene O\'Neill',
        'c' => 'Tennessee Williams',
        'd' => 'Harold Pinter',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which Shakespearean tragedy features the characters of Iago and Desdemona?',
        'a' => 'Hamlet',
        'b' => 'Othello',
        'c' => 'King Lear',
        'd' => 'Macbeth',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'In which play by Tennessee Williams does the character Blanche DuBois appear?',
        'a' => 'The Glass Menagerie',
        'b' => 'The Night of the Iguana',
        'c' => 'A Streetcar Named Desire',
        'd' => 'Cat on a Hot Tin Roof',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who is the author of the play "Waiting for Godot"?',
        'a' => 'Harold Pinter',
        'b' => 'Samuel Beckett',
        'c' => 'Tom Stoppard',
        'd' => 'Bertolt Brecht',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which playwright wrote the comedy "The Importance of Being Earnest"?',
        'a' => 'Anton Chekhov',
        'b' => 'Oscar Wilde',
        'c' => 'Noel Coward',
        'd' => 'George Bernard Shaw',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which famous Norwegian playwright wrote "A Doll\'s House"?',
        'a' => 'Bertolt Brecht',
        'b' => 'Henrik Ibsen',
        'c' => 'August Strindberg',
        'd' => 'Anton Chekhov',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'In which Shakespeare play do the characters of Goneril and Regan appear?',
        'a' => 'Hamlet',
        'b' => 'Othello',
        'c' => 'Macbeth',
        'd' => 'King Lear',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote the play "Long Day\'s Journey Into Night"?',
        'a' => 'Arthur Miller',
        'b' => 'Eugene O\'Neill',
        'c' => 'Tennessee Williams',
        'd' => 'Edward Albee',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which play features the famous line "To be or not to be"?',
        'a' => 'Hamlet',
        'b' => 'Macbeth',
        'c' => 'Romeo and Juliet',
        'd' => 'Othello',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who is the author of "The Crucible", a play about the Salem witch trials?',
        'a' => 'Arthur Miller',
        'b' => 'Tennessee Williams',
        'c' => 'Eugene O\'Neill',
        'd' => 'Harold Pinter',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 8,
        
        'question' => 'Which Shakespearean tragedy features the characters of Rosencrantz and Guildenstern?',
        'a' => 'Othello',
        'b' => 'Hamlet',
        'c' => 'Macbeth',
        'd' => 'King Lear',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote the play "Pygmalion", which was later adapted into the musical "My Fair Lady"?',
        'a' => 'Oscar Wilde',
        'b' => 'George Bernard Shaw',
        'c' => 'Noel Coward',
        'd' => 'Harold Pinter',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'In which Shakespeare play do the characters of Viola and Malvolio appear?',
        'a' => 'Twelfth Night',
        'b' => 'As You Like It',
        'c' => 'Much Ado About Nothing',
        'd' => 'The Tempest',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who is the author of the play "A Raisin in the Sun"?',
        'a' => 'Lorraine Hansberry',
        'b' => 'August Wilson',
        'c' => 'Tennessee Williams',
        'd' => 'Arthur Miller',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which Arthur Miller play focuses on the Salem witch trials?',
        'a' => 'Death of a Salesman',
        'b' => 'The Crucible',
        'c' => 'All My Sons',
        'd' => 'A View from the Bridge',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which Shakespeare play is set on an enchanted island and features the characters of Prospero and Caliban?',
        'a' => 'The Tempest',
        'b' => 'A Midsummer Night\'s Dream',
        'c' => 'The Winter\'s Tale',
        'd' => 'Macbeth',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which modernist playwright wrote "The Homecoming"?',
        'a' => 'Tennessee Williams',
        'b' => 'Samuel Beckett',
        'c' => 'Harold Pinter',
        'd' => 'Edward Albee',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which Shakespearean play features the quote, "All the world’s a stage"?',
        'a' => 'As You Like It',
        'b' => 'Macbeth',
        'c' => 'Hamlet',
        'd' => 'The Tempest',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote the play "Who\'s Afraid of Virginia Woolf?"?',
        'a' => 'Edward Albee',
        'b' => 'Harold Pinter',
        'c' => 'Tennessee Williams',
        'd' => 'Arthur Miller',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which Shakespeare play features the quote, "Et tu, Brute?"',
        'a' => 'Hamlet',
        'b' => 'Julius Caesar',
        'c' => 'Macbeth',
        'd' => 'Othello',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 8,
        
        'question' => 'In which play does the character of Blanche DuBois appear?',
        'a' => 'The Glass Menagerie',
        'b' => 'Streetcar Named Desire',
        'c' => 'A Long Day\'s Journey into Night',
        'd' => 'Waiting for Godot',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which play features a character named Othello?',
        'a' => 'Othello',
        'b' => 'King Lear',
        'c' => 'The Merchant of Venice',
        'd' => 'Macbeth',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote the play "Waiting for Godot"?',
        'a' => 'Samuel Beckett',
        'b' => 'Tennessee Williams',
        'c' => 'Arthur Miller',
        'd' => 'Eugene O\'Neill',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which play is set during the American Civil War and features the character of Scarlett O\'Hara?',
        'a' => 'The Cherry Orchard',
        'b' => 'A Streetcar Named Desire',
        'c' => 'Gone with the Wind',
        'd' => 'The Glass Menagerie',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which classic Greek play features the character of Antigone?',
        'a' => 'Oedipus Rex',
        'b' => 'Antigone',
        'c' => 'The Frogs',
        'd' => 'Lysistrata',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote the play "Death of a Salesman"?',
        'a' => 'Arthur Miller',
        'b' => 'Eugene O\'Neill',
        'c' => 'Tennessee Williams',
        'd' => 'Harold Pinter',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which playwright is known for the play "The Birthday Party"?',
        'a' => 'Harold Pinter',
        'b' => 'Samuel Beckett',
        'c' => 'Tom Stoppard',
        'd' => 'Edward Albee',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which Shakespeare play is known for the line "To be, or not to be"?',
        'a' => 'Hamlet',
        'b' => 'Macbeth',
        'c' => 'Romeo and Juliet',
        'd' => 'Julius Caesar',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'In which play does the character of Willy Loman appear?',
        'a' => 'The Crucible',
        'b' => 'Death of a Salesman',
        'c' => 'A Raisin in the Sun',
        'd' => 'The Glass Menagerie',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who is the author of the play "A Midsummer Night\'s Dream"?',
        'a' => 'Christopher Marlowe',
        'b' => 'William Shakespeare',
        'c' => 'Ben Jonson',
        'd' => 'John Webster',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which dramatic work is known for its character named Iago?',
        'a' => 'Hamlet',
        'b' => 'Othello',
        'c' => 'King Lear',
        'd' => 'Macbeth',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 8,
        
        'question' => 'Which play by Tennessee Williams features the character of Laura Wingfield?',
        'a' => 'A Streetcar Named Desire',
        'b' => 'The Glass Menagerie',
        'c' => 'Cat on a Hot Tin Roof',
        'd' => 'The Rose Tattoo',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'In which play does the character of the Ghost appear?',
        'a' => 'Hamlet',
        'b' => 'The Tempest',
        'c' => 'Macbeth',
        'd' => 'Othello',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which playwright is known for the work "The Importance of Being Earnest"?',
        'a' => 'George Bernard Shaw',
        'b' => 'Oscar Wilde',
        'c' => 'Tennessee Williams',
        'd' => 'Harold Pinter',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which play by Edward Albee features the character Martha?',
        'a' => 'Three Tall Women',
        'b' => 'Who\'s Afraid of Virginia Woolf?',
        'c' => 'A Delicate Balance',
        'd' => 'Seascape',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which Greek tragedy deals with the themes of fate and family loyalty through the story of Orestes?',
        'a' => 'Agamemnon',
        'b' => 'Electra',
        'c' => 'Oedipus Rex',
        'd' => 'Medea',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'In which play does the character of Lady Macbeth appear?',
        'a' => 'Macbeth',
        'b' => 'King Lear',
        'c' => 'The Tempest',
        'd' => 'Julius Caesar',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which modern play by August Wilson is part of his Pittsburgh Cycle?',
        'a' => 'Fences',
        'b' => 'A Raisin in the Sun',
        'c' => 'The Piano Lesson',
        'd' => 'Death of a Salesman',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote "The Cherry Orchard"?',
        'a' => 'Anton Chekhov',
        'b' => 'Leo Tolstoy',
        'c' => 'Mikhail Bulgakov',
        'd' => 'Maxim Gorky',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'In which play by Shakespeare does the character of Portia appear?',
        'a' => 'The Merchant of Venice',
        'b' => 'Much Ado About Nothing',
        'c' => 'As You Like It',
        'd' => 'Taming of the Shrew',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which play features the famous quote "All the world\'s a stage"?',
        'a' => 'As You Like It',
        'b' => 'Twelfth Night',
        'c' => 'The Tempest',
        'd' => 'Measure for Measure',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who is the playwright of "Rhinocéros"?',
        'a' => 'Eugène Ionesco',
        'b' => 'Jean-Paul Sartre',
        'c' => 'Samuel Beckett',
        'd' => 'Henri Matisse',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 8,
        
        'question' => 'Which character is the protagonist in Shakespeare’s "Hamlet"?',
        'a' => 'Macbeth',
        'b' => 'Othello',
        'c' => 'Hamlet',
        'd' => 'King Lear',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'In which play by Tennessee Williams does the character of Blanche DuBois appear?',
        'a' => 'The Glass Menagerie',
        'b' => 'A Streetcar Named Desire',
        'c' => 'Cat on a Hot Tin Roof',
        'd' => 'The Rose Tattoo',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which play by George Bernard Shaw is set in the home of the Doolittle family?',
        'a' => 'Pygmalion',
        'b' => 'Saint Joan',
        'c' => 'Major Barbara',
        'd' => 'Arms and the Man',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which ancient Greek playwright is known for "Oedipus Rex"?',
        'a' => 'Euripides',
        'b' => 'Sophocles',
        'c' => 'Aeschylus',
        'd' => 'Aristophanes',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'In which play does the character of Hedda Gabler appear?',
        'a' => 'The Master Builder',
        'b' => 'A Doll’s House',
        'c' => 'Hedda Gabler',
        'd' => 'The Wild Duck',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which 20th-century play features the character of Willy Loman?',
        'a' => 'Death of a Salesman',
        'b' => 'A View from the Bridge',
        'c' => 'Long Day’s Journey into Night',
        'd' => 'The Glass Menagerie',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which play by August Wilson is set in Pittsburgh during the 1950s?',
        'a' => 'Fences',
        'b' => 'The Piano Lesson',
        'c' => 'Ma Rainey’s Black Bottom',
        'd' => 'Radio Golf',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'In which play by Harold Pinter does the character of Stanley Webber appear?',
        'a' => 'The Birthday Party',
        'b' => 'The Homecoming',
        'c' => 'The Caretaker',
        'd' => 'Old Times',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which play is known for the famous line "To be or not to be"?',
        'a' => 'Romeo and Juliet',
        'b' => 'Hamlet',
        'c' => 'Macbeth',
        'd' => 'Julius Caesar',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote "Waiting for Godot"?',
        'a' => 'Jean-Paul Sartre',
        'b' => 'Eugène Ionesco',
        'c' => 'Samuel Beckett',
        'd' => 'Harold Pinter',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which play features the character of Nora Helmer?',
        'a' => 'Hedda Gabler',
        'b' => 'A Doll’s House',
        'c' => 'The Seagull',
        'd' => 'The Cherry Orchard',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 8,
        
        'question' => 'Which playwright is known for the play "The Glass Menagerie"?',
        'a' => 'Tennessee Williams',
        'b' => 'Arthur Miller',
        'c' => 'Eugène Ionesco',
        'd' => 'George Bernard Shaw',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'In which play does the character of Lady Macbeth appear?',
        'a' => 'Othello',
        'b' => 'Macbeth',
        'c' => 'King Lear',
        'd' => 'Hamlet',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which play features the character of Blanche DuBois?',
        'a' => 'Cat on a Hot Tin Roof',
        'b' => 'A Streetcar Named Desire',
        'c' => 'The Glass Menagerie',
        'd' => 'The Rose Tattoo',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote the play "The Importance of Being Earnest"?',
        'a' => 'William Shakespeare',
        'b' => 'George Bernard Shaw',
        'c' => 'Oscar Wilde',
        'd' => 'Tennessee Williams',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which of these plays is set in the 1940s New York City?',
        'a' => 'The Glass Menagerie',
        'b' => 'Death of a Salesman',
        'c' => 'Long Day’s Journey into Night',
        'd' => 'A View from the Bridge',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which playwright is known for the play "Waiting for Godot"?',
        'a' => 'Samuel Beckett',
        'b' => 'Harold Pinter',
        'c' => 'Eugène Ionesco',
        'd' => 'Jean-Paul Sartre',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'In which play by Arthur Miller does the character of Willy Loman appear?',
        'a' => 'A View from the Bridge',
        'b' => 'The Crucible',
        'c' => 'Death of a Salesman',
        'd' => 'All My Sons',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which character is a central figure in Henrik Ibsen’s "A Doll’s House"?',
        'a' => 'Nora Helmer',
        'b' => 'Hedda Gabler',
        'c' => 'Mrs. Alving',
        'd' => 'Nina',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which play is set in the small, claustrophobic apartment of the Wingfield family?',
        'a' => 'The Glass Menagerie',
        'b' => 'The Cherry Orchard',
        'c' => 'Hedda Gabler',
        'd' => 'A Streetcar Named Desire',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which play by August Wilson depicts the life of an African American family in the 1950s?',
        'a' => 'Ma Rainey’s Black Bottom',
        'b' => 'Radio Golf',
        'c' => 'Fences',
        'd' => 'The Piano Lesson',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which playwright is known for his works on existentialism and absurdism?',
        'a' => 'Arthur Miller',
        'b' => 'Jean-Paul Sartre',
        'c' => 'Samuel Beckett',
        'd' => 'Eugène Ionesco',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 8,
        
        'question' => 'Which play by William Shakespeare is a tragedy set in ancient Rome? ',
        'a' => 'Romeo and Juliet',
        'b' => 'Othello',
        'c' => 'Julius Caesar',
        'd' => 'Hamlet',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'In which play does the character of Hedda Gabler appear?',
        'a' => 'A Doll’s House',
        'b' => 'Hedda Gabler',
        'c' => 'Miss Julie',
        'd' => 'The Wild Duck',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which Greek playwright is known for his tragedies "Oedipus Rex" and "Antigone"?',
        'a' => 'Sophocles',
        'b' => 'Euripides',
        'c' => 'Aeschylus',
        'd' => 'Aristophanes',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which drama is set in the mythical city of Thebes and revolves around the murder of King Laius?',
        'a' => 'Antigone',
        'b' => 'Oedipus Rex',
        'c' => 'Electra',
        'd' => 'The Libation Bearers',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which contemporary playwright wrote the play "The Vagina Monologues"?',
        'a' => 'Eve Ensler',
        'b' => 'Lynn Nottage',
        'c' => 'Harold Pinter',
        'd' => 'Tom Stoppard',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'In which play does the character of Willy Loman appear?',
        'a' => 'Death of a Salesman',
        'b' => 'The Glass Menagerie',
        'c' => 'Long Day’s Journey into Night',
        'd' => 'A Raisin in the Sun',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who is the author of the play "Waiting for Godot"?',
        'a' => 'Samuel Beckett',
        'b' => 'Jean-Paul Sartre',
        'c' => 'Eugène Ionesco',
        'd' => 'Harold Pinter',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which play by Tennessee Williams features the character of Stanley Kowalski?',
        'a' => 'Cat on a Hot Tin Roof',
        'b' => 'A Streetcar Named Desire',
        'c' => 'The Glass Menagerie',
        'd' => 'The Rose Tattoo',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which famous play is set in the fictional town of Gilead and deals with themes of religious extremism?',
        'a' => 'The Crucible',
        'b' => 'The Handmaid’s Tale',
        'c' => 'Les Misérables',
        'd' => 'The Vagina Monologues',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which play by August Wilson is set in the 1950s and deals with racial discrimination in the context of a boxing match?',
        'a' => 'Fences',
        'b' => 'Ma Rainey’s Black Bottom',
        'c' => 'The Piano Lesson',
        'd' => 'Radio Golf',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 8,
        
        'question' => 'Who wrote the non-fiction work "The Diary of a Young Girl"?',
        'a' => 'Elie Wiesel',
        'b' => 'Anne Frank',
        'c' => 'Maya Angelou',
        'd' => 'Helen Keller',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which non-fiction work by Nelson Mandela is known for detailing his life and struggles?',
        'a' => 'Long Walk to Freedom',
        'b' => 'Dreams from My Father',
        'c' => 'Becoming',
        'd' => 'A Promised Land',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which non-fiction book written by Malcolm X details his life experiences?',
        'a' => 'The Autobiography of Malcolm X',
        'b' => 'Up From Slavery',
        'c' => 'I Know Why the Caged Bird Sings',
        'd' => 'The Souls of Black Folk',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who is the author of "The Prince," a political treatise written in the early 16th century?',
        'a' => 'Thomas More',
        'b' => 'Niccolò Machiavelli',
        'c' => 'John Locke',
        'd' => 'Jean-Jacques Rousseau',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which famous speech by Martin Luther King Jr. is included in many collections of non-fiction works?',
        'a' => 'I Have a Dream',
        'b' => 'The Gettysburg Address',
        'c' => 'We Shall Overcome',
        'd' => 'A Time to Break Silence',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which non-fiction book by Rachel Carson launched the environmental movement?',
        'a' => 'The Silent Spring',
        'b' => 'The Jungle',
        'c' => 'A Sand County Almanac',
        'd' => 'The Omnivore’s Dilemma',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which non-fiction book details the story of survival after a plane crash in the Andes?',
        'a' => 'Into the Wild',
        'b' => 'Alive',
        'c' => 'In the Heart of the Sea',
        'd' => 'Between a Rock and a Hard Place',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote the non-fiction work "The Art of War"?',
        'a' => 'Sun Tzu',
        'b' => 'Confucius',
        'c' => 'Laozi',
        'd' => 'Genghis Khan',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which non-fiction book by Michelle Obama became a global bestseller?',
        'a' => 'A Promised Land',
        'b' => 'Becoming',
        'c' => 'Dreams from My Father',
        'd' => 'The Audacity of Hope',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which non-fiction book by Viktor Frankl is about his experiences as a Holocaust survivor?',
        'a' => 'Night',
        'b' => 'Man’s Search for Meaning',
        'c' => 'Survival in Auschwitz',
        'd' => 'Schindler’s List',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 8,
        
        'question' => 'Who wrote the non-fiction book "In Cold Blood," a pioneering work of true crime? ',
        'a' => 'Truman Capote',
        'b' => 'Harper Lee',
        'c' => 'Norman Mailer',
        'd' => 'Tom Wolfe',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which non-fiction book by Stephen Hawking explores the nature of time and space?',
        'a' => 'The God Delusion',
        'b' => 'A Brief History of Time',
        'c' => 'Cosmos',
        'd' => 'The Selfish Gene',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who authored the non-fiction work "The Second Sex," a key feminist text?',
        'a' => 'Betty Friedan',
        'b' => 'Gloria Steinem',
        'c' => 'Simone de Beauvoir',
        'd' => 'Virginia Woolf',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which non-fiction work by Barack Obama is a memoir of his early life and political journey?',
        'a' => 'Dreams from My Father',
        'b' => 'Becoming',
        'c' => 'A Promised Land',
        'd' => 'The Audacity of Hope',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which influential book by Betty Friedan sparked the second-wave feminist movement?',
        'a' => 'The Feminine Mystique',
        'b' => 'The Second Sex',
        'c' => 'A Room of One’s Own',
        'd' => 'Sister Outsider',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'What non-fiction book by Jon Krakauer tells the story of a young man who ventures into the Alaskan wilderness?',
        'a' => 'Into the Wild',
        'b' => 'Alive',
        'c' => 'In the Heart of the Sea',
        'd' => 'The Call of the Wild',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which non-fiction book by Richard Dawkins popularized the concept of the "selfish gene"?',
        'a' => 'The God Delusion',
        'b' => 'The Origin of Species',
        'c' => 'The Selfish Gene',
        'd' => 'A Brief History of Time',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote "The Right Stuff," a non-fiction account of America’s space program?',
        'a' => 'Tom Wolfe',
        'b' => 'Neil Armstrong',
        'c' => 'Norman Mailer',
        'd' => 'James Michener',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which book by Michelle Alexander discusses mass incarceration in the United States?',
        'a' => 'The New Jim Crow',
        'b' => 'Just Mercy',
        'c' => 'Between the World and Me',
        'd' => 'Evicted',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who is the author of the non-fiction book "Guns, Germs, and Steel," which explores human societies?',
        'a' => 'Yuval Noah Harari',
        'b' => 'Jared Diamond',
        'c' => 'David Attenborough',
        'd' => 'Bill Bryson',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 8,
        
        'question' => 'Which famous non-fiction work by Anne Frank chronicles her life hiding from the Nazis during World War II?',
        'a' => 'The Diary of Anne Frank',
        'b' => 'Night',
        'c' => 'Schindler’s List',
        'd' => 'A Child Called "It"',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote the non-fiction bestseller "Sapiens: A Brief History of Humankind"?',
        'a' => 'Steven Pinker',
        'b' => 'Yuval Noah Harari',
        'c' => 'Jared Diamond',
        'd' => 'Malcolm Gladwell',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which American journalist authored the book "The Immortal Life of Henrietta Lacks"?',
        'a' => 'Rebecca Skloot',
        'b' => 'Katie Couric',
        'c' => 'Rachel Carson',
        'd' => 'Mary Roach',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which 1962 book by Rachel Carson is credited with advancing the global environmental movement?',
        'a' => 'Silent Spring',
        'b' => 'The Origin of Species',
        'c' => 'Walden',
        'd' => 'The Descent of Man',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote "Born a Crime," a non-fiction memoir about growing up in South Africa during apartheid?',
        'a' => 'Nelson Mandela',
        'b' => 'Trevor Noah',
        'c' => 'Desmond Tutu',
        'd' => 'Thabo Mbeki',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which historical figure’s life is recounted in the non-fiction book "The Autobiography of Malcolm X"?',
        'a' => 'Martin Luther King Jr.',
        'b' => 'Frederick Douglass',
        'c' => 'Malcolm X',
        'd' => 'Marcus Garvey',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'What is the title of Nelson Mandela’s autobiography, which describes his fight against apartheid?',
        'a' => 'Long Walk to Freedom',
        'b' => 'I Know Why the Caged Bird Sings',
        'c' => 'The Souls of Black Folk',
        'd' => 'The Fire Next Time',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which book by Malcolm Gladwell examines how small actions can lead to a larger trend?',
        'a' => 'Outliers',
        'b' => 'The Tipping Point',
        'c' => 'Blink',
        'd' => 'Freakonomics',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who authored the non-fiction book "Educated," recounting her life growing up in a survivalist family?',
        'a' => 'Elizabeth Gilbert',
        'b' => 'Jeanette Walls',
        'c' => 'Tara Westover',
        'd' => 'Cheryl Strayed',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which non-fiction book by Michelle Obama became a global bestseller after its release in 2018?',
        'a' => 'Lean In',
        'b' => 'The Audacity of Hope',
        'c' => 'Becoming',
        'd' => 'Dreams from My Father',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 8,
        
        'question' => 'Who wrote the influential book "The Diary of a Young Girl"?',
        'a' => 'Anne Frank',
        'b' => 'Helen Keller',
        'c' => 'Virginia Woolf',
        'd' => 'Maya Angelou',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'What is the title of Nelson Mandela’s autobiography?',
        'a' => 'A Long Road to Freedom',
        'b' => 'Dreams from My Father',
        'c' => 'Long Walk to Freedom',
        'd' => 'Born a Crime',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which book is an account of the 1996 Mount Everest disaster?',
        'a' => 'Into Thin Air',
        'b' => 'Wild',
        'c' => 'The Climb',
        'd' => 'In the Heart of the Sea',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which American journalist wrote "The Right Stuff" about the early days of the U.S. space program?',
        'a' => 'Bob Woodward',
        'b' => 'Tom Wolfe',
        'c' => 'Truman Capote',
        'd' => 'Hunter S. Thompson',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which book by Malcolm X details his life and conversion to Islam?',
        'a' => 'The Autobiography of Malcolm X',
        'b' => 'The Souls of Black Folk',
        'c' => 'Up from Slavery',
        'd' => 'Narrative of the Life of Frederick Douglass',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which non-fiction work explores the assassination of John F. Kennedy?',
        'a' => 'The Death of a President',
        'b' => 'Helter Skelter',
        'c' => 'In Cold Blood',
        'd' => 'The Killing of a President',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who is the author of "The Immortal Life of Henrietta Lacks"?',
        'a' => 'Rebecca Skloot',
        'b' => 'Atul Gawande',
        'c' => 'Siddhartha Mukherjee',
        'd' => 'Paul Kalanithi',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which book by Stephen Hawking became a bestseller in explaining cosmology to the general public?',
        'a' => 'The Universe in a Nutshell',
        'b' => 'A Brief History of Time',
        'c' => 'Black Holes and Baby Universes',
        'd' => 'The Grand Design',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote the non-fiction book "The Man Who Mistook His Wife for a Hat"?',
        'a' => 'Oliver Sacks',
        'b' => 'Sigmund Freud',
        'c' => 'Carl Jung',
        'd' => 'Abraham Maslow',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'What book recounts the first successful summit of Mount Everest by Edmund Hillary and Tenzing Norgay?',
        'a' => 'High Adventure',
        'b' => 'The White Spider',
        'c' => 'Seven Years in Tibet',
        'd' => 'Mountaineering: The Freedom of the Hills',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 8,
        
        'question' => 'Which journalist authored "The Year of Magical Thinking"?',
        'a' => 'Joan Didion',
        'b' => 'Truman Capote',
        'c' => 'Hunter S. Thompson',
        'd' => 'Norman Mailer',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'What is the title of Barack Obama’s memoir covering his presidency?',
        'a' => 'The Audacity of Hope',
        'b' => 'A Promised Land',
        'c' => 'Dreams from My Father',
        'd' => 'Becoming',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which book by Laura Hillenbrand tells the story of an Olympic runner turned World War II hero?',
        'a' => 'Seabiscuit',
        'b' => 'Unbroken',
        'c' => 'The Boys in the Boat',
        'd' => 'Flags of Our Fathers',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which scientist authored "Silent Spring," credited with launching the environmental movement?',
        'a' => 'Rachel Carson',
        'b' => 'Jane Goodall',
        'c' => 'Stephen Jay Gould',
        'd' => 'E.O. Wilson',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which non-fiction work by Jon Krakauer examines the tragic 1992 death of Christopher McCandless in Alaska?',
        'a' => 'Into the Wild',
        'b' => 'Under the Banner of Heaven',
        'c' => 'Where Men Win Glory',
        'd' => 'The Wild Truth',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which book by Michelle Obama became a bestseller in 2018?',
        'a' => 'Becoming',
        'b' => 'Lean In',
        'c' => 'The Light We Carry',
        'd' => 'A Promised Land',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which Holocaust survivor authored "Night," a memoir of his experiences in Nazi concentration camps?',
        'a' => 'Elie Wiesel',
        'b' => 'Primo Levi',
        'c' => 'Viktor Frankl',
        'd' => 'Anne Frank',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which non-fiction book by Viktor Frankl describes his experiences in Nazi concentration camps and his theory of logotherapy?',
        'a' => 'Man’s Search for Meaning',
        'b' => 'Night',
        'c' => 'Survival in Auschwitz',
        'd' => 'The Gulag Archipelago',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which American president wrote "Profiles in Courage," detailing acts of political bravery?',
        'a' => 'John F. Kennedy',
        'b' => 'Theodore Roosevelt',
        'c' => 'Abraham Lincoln',
        'd' => 'Dwight D. Eisenhower',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which book by Trevor Noah recounts his experiences growing up during apartheid in South Africa?',
        'a' => 'Born a Crime',
        'b' => 'The Long Walk to Freedom',
        'c' => 'Crying in H Mart',
        'd' => 'Educated',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],



    [
        'field_id' => 8,
        
        'question' => 'Which critic is known for his theory of "deconstruction"?',
        'a' => 'Roland Barthes',
        'b' => 'Jacques Derrida',
        'c' => 'Michel Foucault',
        'd' => 'T.S. Eliot',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote the influential work "The Death of the Author"?',
        'a' => 'Jacques Derrida',
        'b' => 'Harold Bloom',
        'c' => 'Roland Barthes',
        'd' => 'Northrop Frye',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which work by M.H. Abrams focuses on Romantic literature and its theory of the imagination?',
        'a' => 'The Mirror and the Lamp',
        'b' => 'The Anxiety of Influence',
        'c' => 'On Deconstruction',
        'd' => 'S/Z',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which feminist critic authored "The Madwoman in the Attic"?',
        'a' => 'Elaine Showalter',
        'b' => 'Sandra Gilbert and Susan Gubar',
        'c' => 'Virginia Woolf',
        'd' => 'Judith Butler',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who is considered a major figure in New Historicism?',
        'a' => 'Stephen Greenblatt',
        'b' => 'Jacques Lacan',
        'c' => 'Terry Eagleton',
        'd' => 'Edward Said',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which theorist is associated with the term "intertextuality"?',
        'a' => 'Julia Kristeva',
        'b' => 'Jacques Derrida',
        'c' => 'Roland Barthes',
        'd' => 'Ferdinand de Saussure',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote "The Wretched of the Earth," focusing on postcolonial criticism?',
        'a' => 'Edward Said',
        'b' => 'Frantz Fanon',
        'c' => 'Chinua Achebe',
        'd' => 'Gayatri Spivak',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which literary critic authored "Orientalism," a foundational text in postcolonial studies?',
        'a' => 'Gayatri Spivak',
        'b' => 'Homi Bhabha',
        'c' => 'Edward Said',
        'd' => 'Chinua Achebe',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which scholar is known for his theory of "cultural materialism"?',
        'a' => 'Stephen Greenblatt',
        'b' => 'Raymond Williams',
        'c' => 'Terry Eagleton',
        'd' => 'Louis Althusser',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which theorist is known for their work on gender performativity in "Gender Trouble"?',
        'a' => 'Judith Butler',
        'b' => 'Simone de Beauvoir',
        'c' => 'Julia Kristeva',
        'd' => 'Elaine Showalter',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 8,
        
        'question' => 'Who developed the theory of "dialogism" in literary criticism?',
        'a' => 'Mikhail Bakhtin',
        'b' => 'Roland Barthes',
        'c' => 'Jacques Derrida',
        'd' => 'T.S. Eliot',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which critic is famous for the concept of the "anxiety of influence"?',
        'a' => 'Harold Bloom',
        'b' => 'Northrop Frye',
        'c' => 'Cleanth Brooks',
        'd' => 'Jacques Derrida',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who introduced the idea of "The Intentional Fallacy" in literary criticism?',
        'a' => 'F.R. Leavis',
        'b' => 'W.K. Wimsatt and Monroe Beardsley',
        'c' => 'I.A. Richards',
        'd' => 'T.S. Eliot',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which critic wrote "A Theory of Literary Production"?',
        'a' => 'Jacques Lacan',
        'b' => 'Pierre Macherey',
        'c' => 'Raymond Williams',
        'd' => 'Terry Eagleton',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who is known for the concept of "The Well Wrought Urn" in formalist criticism?',
        'a' => 'Cleanth Brooks',
        'b' => 'Harold Bloom',
        'c' => 'F.R. Leavis',
        'd' => 'T.S. Eliot',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which critic authored "The Archetypes of Literature," focusing on myth and symbol in literature?',
        'a' => 'T.S. Eliot',
        'b' => 'Carl Jung',
        'c' => 'Northrop Frye',
        'd' => 'Harold Bloom',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who is the author of "The Work of Art in the Age of Mechanical Reproduction"?',
        'a' => 'Theodor Adorno',
        'b' => 'Walter Benjamin',
        'c' => 'Herbert Marcuse',
        'd' => 'Georg Lukács',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which theorist introduced the concept of "hegemonic culture" in cultural studies?',
        'a' => 'Raymond Williams',
        'b' => 'Antonio Gramsci',
        'c' => 'Michel Foucault',
        'd' => 'Louis Althusser',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote "The Use of Poetry and the Use of Criticism"?',
        'a' => 'F.R. Leavis',
        'b' => 'T.S. Eliot',
        'c' => 'I.A. Richards',
        'd' => 'Harold Bloom',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which literary critic is famous for applying psychoanalytic theory to Shakespeare’s plays?',
        'a' => 'Jacques Lacan',
        'b' => 'Sigmund Freud',
        'c' => 'Harold Bloom',
        'd' => 'Stephen Greenblatt',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 8,
        
        'question' => 'Who coined the term "close reading" in literary criticism?',
        'a' => 'I.A. Richards',
        'b' => 'Cleanth Brooks',
        'c' => 'F.R. Leavis',
        'd' => 'Jacques Derrida',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which theorist is known for the concept of "intertextuality"?',
        'a' => 'Julia Kristeva',
        'b' => 'Roland Barthes',
        'c' => 'Jacques Derrida',
        'd' => 'Mikhail Bakhtin',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who is associated with "deconstruction" in literary criticism?',
        'a' => 'Jacques Lacan',
        'b' => 'Michel Foucault',
        'c' => 'Jacques Derrida',
        'd' => 'Gilles Deleuze',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which critic wrote "The Death of the Author"?',
        'a' => 'Michel Foucault',
        'b' => 'Roland Barthes',
        'c' => 'Jacques Derrida',
        'd' => 'F.R. Leavis',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who introduced the concept of "The Mirror Stage" in psychoanalytic theory?',
        'a' => 'Sigmund Freud',
        'b' => 'Jacques Lacan',
        'c' => 'Carl Jung',
        'd' => 'Julia Kristeva',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which critic is known for the phrase "The Author is Dead"?',
        'a' => 'Roland Barthes',
        'b' => 'Jacques Derrida',
        'c' => 'Michel Foucault',
        'd' => 'T.S. Eliot',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which literary theory emphasizes the power dynamics in the relationship between the colonizer and the colonized?',
        'a' => 'Deconstruction',
        'b' => 'Post-colonialism',
        'c' => 'Formalism',
        'd' => 'Psychoanalysis',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote "Discipline and Punish," analyzing social structures of power?',
        'a' => 'Gilles Deleuze',
        'b' => 'Michel Foucault',
        'c' => 'Jacques Derrida',
        'd' => 'Roland Barthes',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which literary critic emphasized the reader’s role in constructing the meaning of a text?',
        'a' => 'Stanley Fish',
        'b' => 'Harold Bloom',
        'c' => 'T.S. Eliot',
        'd' => 'Jacques Lacan',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who introduced the idea of "cultural capital" in literary theory?',
        'a' => 'Pierre Bourdieu',
        'b' => 'Raymond Williams',
        'c' => 'Terry Eagleton',
        'd' => 'Louis Althusser',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 8,
        
        'question' => 'Who introduced the concept of "base and superstructure" in Marxist theory?',
        'a' => 'Louis Althusser',
        'b' => 'Karl Marx',
        'c' => 'Antonio Gramsci',
        'd' => 'Raymond Williams',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which literary critic wrote "The Anxiety of Influence"?',
        'a' => 'Harold Bloom',
        'b' => 'Roland Barthes',
        'c' => 'T.S. Eliot',
        'd' => 'Stanley Fish',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which critic is associated with the theory of "Cultural Materialism"?',
        'a' => 'Raymond Williams',
        'b' => 'Louis Althusser',
        'c' => 'Terry Eagleton',
        'd' => 'Pierre Bourdieu',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote "The Well Wrought Urn," defending the importance of literary form?',
        'a' => 'Cleanth Brooks',
        'b' => 'I.A. Richards',
        'c' => 'F.R. Leavis',
        'd' => 'Northrop Frye',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which term refers to the interpretation of texts by considering their historical context and social conditions?',
        'a' => 'New Historicism',
        'b' => 'Formalism',
        'c' => 'Deconstruction',
        'd' => 'Post-structuralism',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which critic is known for the "Reader-Response Theory"?',
        'a' => 'Harold Bloom',
        'b' => 'Stanley Fish',
        'c' => 'Terry Eagleton',
        'd' => 'Jacques Derrida',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who introduced the term "Hegemony" in cultural theory?',
        'a' => 'Karl Marx',
        'b' => 'Antonio Gramsci',
        'c' => 'Louis Althusser',
        'd' => 'Raymond Williams',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which literary critic is associated with the idea of "archetypes" in literature?',
        'a' => 'Northrop Frye',
        'b' => 'Carl Jung',
        'c' => 'I.A. Richards',
        'd' => 'Joseph Campbell',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who wrote "Mythologies," analyzing the cultural meanings behind everyday objects?',
        'a' => 'Roland Barthes',
        'b' => 'Michel Foucault',
        'c' => 'Jacques Derrida',
        'd' => 'Julia Kristeva',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which critic is associated with the phrase "The intentional fallacy"?',
        'a' => 'I.A. Richards',
        'b' => 'William K. Wimsatt',
        'c' => 'Cleanth Brooks',
        'd' => 'T.S. Eliot',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 8,
        
        'question' => 'Which critic is known for developing "Structuralism"?',
        'a' => 'Claude Lévi-Strauss',
        'b' => 'Jacques Derrida',
        'c' => 'Michel Foucault',
        'd' => 'Roland Barthes',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'What is the main focus of "Post-structuralism"?',
        'a' => 'Language and meaning',
        'b' => 'Historical context',
        'c' => 'Social conditions',
        'd' => 'Literary form',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which theory focuses on the idea that texts have multiple meanings based on the reader’s interpretation?',
        'a' => 'Reader-Response Criticism',
        'b' => 'Formalism',
        'c' => 'New Criticism',
        'd' => 'Historical Criticism',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which critic is known for the concept of "Differance"?',
        'a' => 'Jacques Derrida',
        'b' => 'Michel Foucault',
        'c' => 'Roland Barthes',
        'd' => 'Paul de Man',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which term describes the approach that examines how literary works interact with societal power structures?',
        'a' => 'Postcolonial Criticism',
        'b' => 'Cultural Studies',
        'c' => 'Feminist Criticism',
        'd' => 'Marxist Criticism',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which literary theorist is known for "A Theory of Literary Production"?',
        'a' => 'Pierre Bourdieu',
        'b' => 'Terry Eagleton',
        'c' => 'Antonio Gramsci',
        'd' => 'Louis Althusser',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which critical theory examines how gender influences literature?',
        'a' => 'Feminist Criticism',
        'b' => 'Queer Theory',
        'c' => 'Postcolonial Criticism',
        'd' => 'Psychoanalytic Criticism',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Who is the author of "The Interpretation of Dreams"?',
        'a' => 'Sigmund Freud',
        'b' => 'Carl Jung',
        'c' => 'Jacques Lacan',
        'd' => 'Erik Erikson',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which critical approach focuses on the author’s background and influences?',
        'a' => 'Biographical Criticism',
        'b' => 'Historical Criticism',
        'c' => 'Formalist Criticism',
        'd' => 'Reader-Response Criticism',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 8,
        
        'question' => 'Which literary critic is associated with "Deconstruction"?',
        'a' => 'Jacques Derrida',
        'b' => 'Roland Barthes',
        'c' => 'Michel Foucault',
        'd' => 'Paul de Man',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
];

DB::table('questions')->insert($questions);
    }
}
