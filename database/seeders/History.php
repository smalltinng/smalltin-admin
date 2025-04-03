<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class History extends Seeder
{
    /**
     * Run the database seeds.
     */
    public static function run(): void
    {
        $questions = [

    [
        'field_id' => 7,
       
        'question' => 'Who was the first emperor of the Roman Empire?',
        'a' => 'Julius Caesar',
        'b' => 'Nero',
        'c' => 'Augustus',
        'd' => 'Constantine',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'What year did the French Revolution begin?',
        'a' => '1789',
        'b' => '1776',
        'c' => '1804',
        'd' => '1756',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Who was the leader of the Soviet Union during World War II?',
        'a' => 'Lenin',
        'b' => 'Stalin',
        'c' => 'Trotsky',
        'd' => 'Gorbachev',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which empire was known as the "Empire on which the sun never sets"?',
        'a' => 'Ottoman Empire',
        'b' => 'Mongol Empire',
        'c' => 'British Empire',
        'd' => 'Roman Empire',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Who was the first President of the United States?',
        'a' => 'Thomas Jefferson',
        'b' => 'John Adams',
        'c' => 'George Washington',
        'd' => 'Abraham Lincoln',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'What was the name of the ship that brought the Pilgrims to America in 1620?',
        'a' => 'Santa Maria',
        'b' => 'Mayflower',
        'c' => 'Endeavour',
        'd' => 'Victory',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Who discovered the sea route to India in 1498?',
        'a' => 'Christopher Columbus',
        'b' => 'Vasco da Gama',
        'c' => 'Ferdinand Magellan',
        'd' => 'Marco Polo',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which event is considered the spark that started World War I?',
        'a' => 'The sinking of the Lusitania',
        'b' => 'The assassination of Archduke Franz Ferdinand',
        'c' => 'The invasion of Poland',
        'd' => 'The Treaty of Versailles',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Who was the ruler of Egypt during the Battle of Actium?',
        'a' => 'Cleopatra',
        'b' => 'Ramses II',
        'c' => 'Nefertiti',
        'd' => 'Tutankhamun',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'When did the Berlin Wall fall?',
        'a' => '1989',
        'b' => '1991',
        'c' => '1979',
        'd' => '1995',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
       
        'question' => 'Who led the Norman conquest of England in 1066?',
        'a' => 'William the Conqueror',
        'b' => 'King Harold',
        'c' => 'Richard the Lionheart',
        'd' => 'Edward the Confessor',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'What year did the United States enter World War I?',
        'a' => '1914',
        'b' => '1917',
        'c' => '1918',
        'd' => '1915',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Who was the first woman to fly solo across the Atlantic Ocean?',
        'a' => 'Amelia Earhart',
        'b' => 'Marie Curie',
        'c' => 'Harriet Tubman',
        'd' => 'Sally Ride',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'In which year did the United Nations officially form?',
        'a' => '1941',
        'b' => '1945',
        'c' => '1947',
        'd' => '1950',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'What was the capital of the Byzantine Empire?',
        'a' => 'Rome',
        'b' => 'Constantinople',
        'c' => 'Athens',
        'd' => 'Alexandria',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Who was the British Prime Minister during World War II?',
        'a' => 'Winston Churchill',
        'b' => 'Neville Chamberlain',
        'c' => 'Margaret Thatcher',
        'd' => 'Clement Attlee',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which ancient civilization built the pyramids of Giza?',
        'a' => 'Mesopotamians',
        'b' => 'Romans',
        'c' => 'Egyptians',
        'd' => 'Greeks',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'What year did the Titanic sink?',
        'a' => '1900',
        'b' => '1912',
        'c' => '1914',
        'd' => '1905',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which ancient city is known for the Hanging Gardens, one of the Seven Wonders of the Ancient World?',
        'a' => 'Babylon',
        'b' => 'Carthage',
        'c' => 'Thebes',
        'd' => 'Troy',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Who was the leader of the Indian independence movement against British rule?',
        'a' => 'Jawaharlal Nehru',
        'b' => 'Subhas Chandra Bose',
        'c' => 'Mahatma Gandhi',
        'd' => 'Indira Gandhi',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
       
        'question' => 'Which country was responsible for initiating the Industrial Revolution?',
        'a' => 'Germany',
        'b' => 'United States',
        'c' => 'France',
        'd' => 'United Kingdom',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Who was the first President of the United States?',
        'a' => 'John Adams',
        'b' => 'Thomas Jefferson',
        'c' => 'George Washington',
        'd' => 'James Madison',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'In which year did the French Revolution begin?',
        'a' => '1790',
        'b' => '1789',
        'c' => '1799',
        'd' => '1800',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Who was the Emperor of France during the Napoleonic Wars?',
        'a' => 'Napoleon Bonaparte',
        'b' => 'Louis XVI',
        'c' => 'Maximilien Robespierre',
        'd' => 'Charles de Gaulle',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'What was the primary cause of the Russian Revolution of 1917?',
        'a' => 'Military defeat in World War I',
        'b' => 'Overthrow of the monarchy',
        'c' => 'Economic inequality and unrest',
        'd' => 'Religious persecution',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'What treaty ended World War I?',
        'a' => 'Treaty of Paris',
        'b' => 'Treaty of Versailles',
        'c' => 'Treaty of Ghent',
        'd' => 'Treaty of Westphalia',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Who was the leader of the Soviet Union during World War II?',
        'a' => 'Vladimir Lenin',
        'b' => 'Joseph Stalin',
        'c' => 'Nikita Khrushchev',
        'd' => 'Leon Trotsky',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which city was the capital of the Aztec Empire?',
        'a' => 'Cusco',
        'b' => 'Tikal',
        'c' => 'Tenochtitlan',
        'd' => 'Machu Picchu',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'What year did India gain independence from British rule?',
        'a' => '1947',
        'b' => '1945',
        'c' => '1950',
        'd' => '1939',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which famous speech was delivered by Martin Luther King Jr. in 1963?',
        'a' => 'I Have a Dream',
        'b' => 'Gettysburg Address',
        'c' => 'Four Freedoms Speech',
        'd' => 'Iron Curtain Speech',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
       
        'question' => 'What was the primary purpose of the Berlin Wall?',
        'a' => 'To prevent the spread of communism',
        'b' => 'To separate East and West Berlin',
        'c' => 'To protect against foreign invasion',
        'd' => 'To mark the boundary of Nazi Germany',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Who was the British Prime Minister during World War II?',
        'a' => 'Winston Churchill',
        'b' => 'Neville Chamberlain',
        'c' => 'Clement Attlee',
        'd' => 'Margaret Thatcher',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which ancient civilization built the pyramids of Giza?',
        'a' => 'The Romans',
        'b' => 'The Incas',
        'c' => 'The Egyptians',
        'd' => 'The Mayans',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'What event marked the beginning of World War II?',
        'a' => 'The assassination of Archduke Franz Ferdinand',
        'b' => 'The invasion of Poland by Germany',
        'c' => 'The signing of the Treaty of Versailles',
        'd' => 'The bombing of Pearl Harbor',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Who was the first Emperor of Rome?',
        'a' => 'Julius Caesar',
        'b' => 'Nero',
        'c' => 'Augustus',
        'd' => 'Caligula',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which empire was known for the Code of Hammurabi?',
        'a' => 'The Babylonian Empire',
        'b' => 'The Roman Empire',
        'c' => 'The Byzantine Empire',
        'd' => 'The Ottoman Empire',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'The Magna Carta was signed in which year?',
        'a' => '1215',
        'b' => '1066',
        'c' => '1492',
        'd' => '1302',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which war was fought between the North and South regions of the United States?',
        'a' => 'The American Revolutionary War',
        'b' => 'The American Civil War',
        'c' => 'The War of 1812',
        'd' => 'The Mexican-American War',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Who was the first female Prime Minister of the United Kingdom?',
        'a' => 'Theresa May',
        'b' => 'Margaret Thatcher',
        'c' => 'Angela Merkel',
        'd' => 'Indira Gandhi',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'What was the name of the ship that brought the Pilgrims to America in 1620?',
        'a' => 'The Nina',
        'b' => 'The Mayflower',
        'c' => 'The Pinta',
        'd' => 'The Santa Maria',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
       
        'question' => 'Which empire was led by Genghis Khan?',
        'a' => 'The Roman Empire',
        'b' => 'The Mongol Empire',
        'c' => 'The Ottoman Empire',
        'd' => 'The Byzantine Empire',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'The Treaty of Versailles ended which major conflict?',
        'a' => 'World War I',
        'b' => 'The Crimean War',
        'c' => 'World War II',
        'd' => 'The Franco-Prussian War',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Who was the first President of the United States?',
        'a' => 'Abraham Lincoln',
        'b' => 'John Adams',
        'c' => 'George Washington',
        'd' => 'Thomas Jefferson',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which country was the first to land a man on the moon?',
        'a' => 'The Soviet Union',
        'b' => 'The United States',
        'c' => 'China',
        'd' => 'France',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'What was the name of the ship that famously sank in 1912?',
        'a' => 'The Lusitania',
        'b' => 'The Titanic',
        'c' => 'The Queen Mary',
        'd' => 'The Bismarck',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which ancient Greek city-state was known for its military discipline?',
        'a' => 'Athens',
        'b' => 'Corinth',
        'c' => 'Sparta',
        'd' => 'Thebes',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Who was the leader of Nazi Germany during World War II?',
        'a' => 'Joseph Stalin',
        'b' => 'Benito Mussolini',
        'c' => 'Adolf Hitler',
        'd' => 'Winston Churchill',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which civilization is credited with inventing the wheel?',
        'a' => 'The Mesopotamians',
        'b' => 'The Egyptians',
        'c' => 'The Greeks',
        'd' => 'The Romans',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'The Industrial Revolution began in which country?',
        'a' => 'Germany',
        'b' => 'The United States',
        'c' => 'France',
        'd' => 'The United Kingdom',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which leader is famous for the speech "I Have a Dream"?',
        'a' => 'John F. Kennedy',
        'b' => 'Nelson Mandela',
        'c' => 'Martin Luther King Jr.',
        'd' => 'Malcolm X',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
       
        'question' => 'Which famous explorer first circumnavigated the Earth?',
        'a' => 'Christopher Columbus',
        'b' => 'Vasco da Gama',
        'c' => 'Ferdinand Magellan',
        'd' => 'Marco Polo',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'The fall of the Berlin Wall in 1989 marked the end of what?',
        'a' => 'World War II',
        'b' => 'The Cold War',
        'c' => 'The Great Depression',
        'd' => 'The Vietnam War',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which dynasty built the Great Wall of China?',
        'a' => 'The Ming Dynasty',
        'b' => 'The Tang Dynasty',
        'c' => 'The Han Dynasty',
        'd' => 'The Qing Dynasty',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Who was the first emperor of Rome?',
        'a' => 'Julius Caesar',
        'b' => 'Nero',
        'c' => 'Augustus',
        'd' => 'Caligula',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'In which year did India gain independence from Britain?',
        'a' => '1945',
        'b' => '1948',
        'c' => '1947',
        'd' => '1950',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which battle marked the end of Napoleon’s reign?',
        'a' => 'Battle of Trafalgar',
        'b' => 'Battle of Leipzig',
        'c' => 'Battle of Austerlitz',
        'd' => 'Battle of Waterloo',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'What was the primary cause of the American Civil War?',
        'a' => 'Taxation without representation',
        'b' => 'Slavery',
        'c' => 'Religious freedom',
        'd' => 'Manifest Destiny',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which country did Joan of Arc fight for?',
        'a' => 'Spain',
        'b' => 'Italy',
        'c' => 'France',
        'd' => 'England',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Who led the Soviet Union during World War II?',
        'a' => 'Vladimir Lenin',
        'b' => 'Nikita Khrushchev',
        'c' => 'Joseph Stalin',
        'd' => 'Leonid Brezhnev',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'What year did the French Revolution begin?',
        'a' => '1789',
        'b' => '1776',
        'c' => '1804',
        'd' => '1812',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
       
        'question' => 'Who was the longest-reigning British monarch before Queen Elizabeth II?',
        'a' => 'Queen Victoria',
        'b' => 'King George III',
        'c' => 'Henry VIII',
        'd' => 'Edward VII',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'In which year did the Titanic sink?',
        'a' => '1910',
        'b' => '1911',
        'c' => '1912',
        'd' => '1913',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which empire was known as the "Sick Man of Europe" in the 19th century?',
        'a' => 'The Ottoman Empire',
        'b' => 'The Roman Empire',
        'c' => 'The Austro-Hungarian Empire',
        'd' => 'The Russian Empire',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which historical figure is associated with the phrase "I have a dream"?',
        'a' => 'Nelson Mandela',
        'b' => 'Martin Luther King Jr.',
        'c' => 'Malcolm X',
        'd' => 'John F. Kennedy',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which country was the first to grant women the right to vote?',
        'a' => 'United Kingdom',
        'b' => 'New Zealand',
        'c' => 'United States',
        'd' => 'France',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which battle is considered Napoleon’s greatest victory?',
        'a' => 'Battle of Waterloo',
        'b' => 'Battle of Leipzig',
        'c' => 'Battle of Austerlitz',
        'd' => 'Battle of Trafalgar',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'What was the main cause of the Opium Wars between Britain and China?',
        'a' => 'Religious differences',
        'b' => 'Disputes over trade routes',
        'c' => 'The illegal opium trade',
        'd' => 'Territorial expansion',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'The assassination of which leader led to the start of World War I?',
        'a' => 'Archduke Franz Ferdinand',
        'b' => 'Kaiser Wilhelm II',
        'c' => 'Tsar Nicholas II',
        'd' => 'Winston Churchill',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Who was the first President of the United States?',
        'a' => 'John Adams',
        'b' => 'Thomas Jefferson',
        'c' => 'George Washington',
        'd' => 'James Madison',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which country was the main ally of the United States during World War I?',
        'a' => 'France',
        'b' => 'Germany',
        'c' => 'Japan',
        'd' => 'Russia',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
       
        'question' => 'Which country was known as the "Land of the Rising Sun"?',
        'a' => 'Japan',
        'b' => 'China',
        'c' => 'Korea',
        'd' => 'Vietnam',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Who was the first Emperor of Rome?',
        'a' => 'Nero',
        'b' => 'Augustus',
        'c' => 'Julius Caesar',
        'd' => 'Caligula',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'What event marked the end of the Cold War?',
        'a' => 'Fall of the Berlin Wall',
        'b' => 'Cuban Missile Crisis',
        'c' => 'Collapse of the Soviet Union',
        'd' => 'Korean Armistice Agreement',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which ancient civilization built the Pyramids of Giza?',
        'a' => 'Roman',
        'b' => 'Inca',
        'c' => 'Egyptian',
        'd' => 'Mayan',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Who was the leader of the Soviet Union during World War II?',
        'a' => 'Vladimir Lenin',
        'b' => 'Joseph Stalin',
        'c' => 'Leon Trotsky',
        'd' => 'Nikita Khrushchev',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which treaty ended World War I?',
        'a' => 'Treaty of Versailles',
        'b' => 'Treaty of Paris',
        'c' => 'Treaty of Tordesillas',
        'd' => 'Treaty of Ghent',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which explorer is credited with discovering the Americas in 1492?',
        'a' => 'Ferdinand Magellan',
        'b' => 'Christopher Columbus',
        'c' => 'Vasco da Gama',
        'd' => 'John Cabot',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which ancient Greek philosopher taught Alexander the Great?',
        'a' => 'Socrates',
        'b' => 'Plato',
        'c' => 'Aristotle',
        'd' => 'Pythagoras',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'What was the main purpose of the Magna Carta, signed in 1215?',
        'a' => 'To declare war',
        'b' => 'To limit the power of the king',
        'c' => 'To create a new religion',
        'd' => 'To establish a parliament',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which country did the United States buy Alaska from in 1867?',
        'a' => 'Canada',
        'b' => 'Russia',
        'c' => 'France',
        'd' => 'Mexico',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
       
        'question' => 'Who was the British Prime Minister during most of World War II?',
        'a' => 'Winston Churchill',
        'b' => 'Neville Chamberlain',
        'c' => 'Clement Attlee',
        'd' => 'Margaret Thatcher',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which empire was known for building an extensive road system across South America?',
        'a' => 'Aztec Empire',
        'b' => 'Roman Empire',
        'c' => 'Inca Empire',
        'd' => 'Ottoman Empire',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'What was the name of the first manned spaceflight to land on the Moon?',
        'a' => 'Apollo 13',
        'b' => 'Apollo 11',
        'c' => 'Sputnik 1',
        'd' => 'Gemini 8',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which city was divided by a wall from 1961 to 1989 during the Cold War?',
        'a' => 'Berlin',
        'b' => 'Moscow',
        'c' => 'Warsaw',
        'd' => 'Vienna',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'What was the first written code of laws in human history?',
        'a' => 'The Twelve Tables',
        'b' => 'The Magna Carta',
        'c' => 'The Code of Hammurabi',
        'd' => 'The Justinian Code',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which event is considered the start of the French Revolution?',
        'a' => 'Storming of the Bastille',
        'b' => 'Execution of Louis XVI',
        'c' => 'Battle of Waterloo',
        'd' => 'Declaration of the Rights of Man',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Who led the Soviet Union during the Cuban Missile Crisis?',
        'a' => 'Joseph Stalin',
        'b' => 'Nikita Khrushchev',
        'c' => 'Mikhail Gorbachev',
        'd' => 'Leonid Brezhnev',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'What was the main purpose of the League of Nations, founded after World War I?',
        'a' => 'To promote trade',
        'b' => 'To prevent wars',
        'c' => 'To encourage colonialism',
        'd' => 'To expand territory',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which revolution overthrew the Tsarist regime in Russia?',
        'a' => 'The February Revolution',
        'b' => 'The Russian Civil War',
        'c' => 'The Bolshevik Revolution',
        'd' => 'The Communist Revolution',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which war ended with the Treaty of Versailles in 1919?',
        'a' => 'World War II',
        'b' => 'World War I',
        'c' => 'The Franco-Prussian War',
        'd' => 'The Napoleonic Wars',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
       
        'question' => 'Who was the first emperor of Rome?',
        'a' => 'Julius Caesar',
        'b' => 'Augustus Caesar',
        'c' => 'Nero',
        'd' => 'Caligula',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'What event marked the beginning of World War II?',
        'a' => 'The invasion of Poland by Germany',
        'b' => 'The attack on Pearl Harbor',
        'c' => 'The assassination of Archduke Ferdinand',
        'd' => 'The bombing of Hiroshima',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which ancient civilization is known for constructing the pyramids?',
        'a' => 'The Romans',
        'b' => 'The Babylonians',
        'c' => 'The Egyptians',
        'd' => 'The Mayans',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Who wrote the "Communist Manifesto"?',
        'a' => 'Friedrich Engels',
        'b' => 'Vladimir Lenin',
        'c' => 'Karl Marx',
        'd' => 'Joseph Stalin',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which empire was ruled by Genghis Khan?',
        'a' => 'Ottoman Empire',
        'b' => 'Mongol Empire',
        'c' => 'Roman Empire',
        'd' => 'Byzantine Empire',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'What was the main reason for the fall of the Roman Empire?',
        'a' => 'Invasions by barbarian tribes',
        'b' => 'Economic collapse',
        'c' => 'Civil wars',
        'd' => 'Natural disasters',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which country was the first to grant women the right to vote?',
        'a' => 'United Kingdom',
        'b' => 'New Zealand',
        'c' => 'United States',
        'd' => 'France',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'What was the name of the ship that carried the Pilgrims to America in 1620?',
        'a' => 'The Santa Maria',
        'b' => 'The Mayflower',
        'c' => 'The Beagle',
        'd' => 'The Titanic',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'What was the Cold War?',
        'a' => 'A war fought in Antarctica',
        'b' => 'A political and ideological struggle between the US and the Soviet Union',
        'c' => 'A series of military conflicts in the Arctic',
        'd' => 'A conflict over climate change',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
       
        'question' => 'Which country did the United States purchase the Louisiana Territory from?',
        'a' => 'Spain',
        'b' => 'France',
        'c' => 'Mexico',
        'd' => 'United Kingdom',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],



    [
        'field_id' => 7,
        
        'question' => 'Which civilization built the Hanging Gardens of Babylon?',
        'a' => 'The Assyrians',
        'b' => 'The Egyptians',
        'c' => 'The Babylonians',
        'd' => 'The Persians',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the famous Greek philosopher who taught Alexander the Great?',
        'a' => 'Socrates',
        'b' => 'Aristotle',
        'c' => 'Plato',
        'd' => 'Pythagoras',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What was the capital of the Roman Empire?',
        'a' => 'Athens',
        'b' => 'Carthage',
        'c' => 'Rome',
        'd' => 'Constantinople',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who is credited with founding the city of Rome?',
        'a' => 'Remus and Romulus',
        'b' => 'Hannibal',
        'c' => 'Julius Caesar',
        'd' => 'Octavian',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which pharaoh commissioned the construction of the Great Pyramid of Giza?',
        'a' => 'Tutankhamun',
        'b' => 'Khufu',
        'c' => 'Ramses II',
        'd' => 'Cleopatra',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What was the primary language spoken in the Roman Empire?',
        'a' => 'Greek',
        'b' => 'Latin',
        'c' => 'Aramaic',
        'd' => 'Hebrew',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the first emperor of China?',
        'a' => 'Emperor Wu',
        'b' => 'Liu Bang',
        'c' => 'Qin Shi Huang',
        'd' => 'Kublai Khan',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which ancient Greek city-state was known for its military prowess?',
        'a' => 'Athens',
        'b' => 'Corinth',
        'c' => 'Sparta',
        'd' => 'Thebes',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the first recorded female pharaoh of ancient Egypt?',
        'a' => 'Nefertiti',
        'b' => 'Cleopatra',
        'c' => 'Hatshepsut',
        'd' => 'Nefertari',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which war was fought between Athens and Sparta?',
        'a' => 'The Persian War',
        'b' => 'The Peloponnesian War',
        'c' => 'The Trojan War',
        'd' => 'The Punic War',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
        
        'question' => 'What was the name of the ancient trade route that connected the East and the West?',
        'a' => 'The Silk Road',
        'b' => 'The Amber Route',
        'c' => 'The Spice Route',
        'd' => 'The Royal Road',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the first king of the Kingdom of Israel?',
        'a' => 'David',
        'b' => 'Saul',
        'c' => 'Solomon',
        'd' => 'Rehoboam',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which famous structure was built during the reign of Emperor Hadrian?',
        'a' => 'The Parthenon',
        'b' => 'The Colosseum',
        'c' => 'Hadrian\'s Wall',
        'd' => 'The Pantheon',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the Carthaginian general famous for leading elephants across the Alps?',
        'a' => 'Hamilcar Barca',
        'b' => 'Hannibal',
        'c' => 'Scipio Africanus',
        'd' => 'Mago Barca',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which Roman emperor famously converted to Christianity?',
        'a' => 'Constantine',
        'b' => 'Nero',
        'c' => 'Augustus',
        'd' => 'Caligula',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which battle marked the end of the Roman Republic and the rise of the Roman Empire?',
        'a' => 'The Battle of Zama',
        'b' => 'The Battle of Actium',
        'c' => 'The Battle of Cannae',
        'd' => 'The Battle of Philippi',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the famous pharaoh known for extensive temple building and the signing of the first known peace treaty?',
        'a' => 'Akhenaten',
        'b' => 'Thutmose III',
        'c' => 'Ramses II',
        'd' => 'Amenhotep III',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which ancient civilization used cuneiform as their writing system?',
        'a' => 'The Egyptians',
        'b' => 'The Sumerians',
        'c' => 'The Phoenicians',
        'd' => 'The Greeks',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the Greek god of the sea?',
        'a' => 'Zeus',
        'b' => 'Poseidon',
        'c' => 'Hades',
        'd' => 'Apollo',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which civilization created the first known code of laws, known as the Code of Hammurabi?',
        'a' => 'The Persians',
        'b' => 'The Assyrians',
        'c' => 'The Babylonians',
        'd' => 'The Egyptians',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
        
        'question' => 'Which civilization is credited with the creation of the pyramids at Giza?',
        'a' => 'The Egyptians',
        'b' => 'The Mayans',
        'c' => 'The Mesopotamians',
        'd' => 'The Aztecs',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which ancient civilization invented the concept of democracy?',
        'a' => 'The Romans',
        'b' => 'The Persians',
        'c' => 'The Greeks',
        'd' => 'The Phoenicians',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the legendary founder of Rome, raised by a she-wolf along with his brother Remus?',
        'a' => 'Julius Caesar',
        'b' => 'Romulus',
        'c' => 'Aeneas',
        'd' => 'Augustus',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which famous battle did Alexander the Great win against Darius III of Persia in 331 BCE?',
        'a' => 'The Battle of Thermopylae',
        'b' => 'The Battle of Gaugamela',
        'c' => 'The Battle of Marathon',
        'd' => 'The Battle of Salamis',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the first emperor of unified China, famous for his terracotta army?',
        'a' => 'Liu Bang',
        'b' => 'Kublai Khan',
        'c' => 'Qin Shi Huang',
        'd' => 'Sun Tzu',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which civilization developed the first known form of writing, called cuneiform?',
        'a' => 'The Egyptians',
        'b' => 'The Babylonians',
        'c' => 'The Sumerians',
        'd' => 'The Hittites',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'In which city was the famous Hanging Gardens of Babylon believed to be located?',
        'a' => 'Thebes',
        'b' => 'Babylon',
        'c' => 'Athens',
        'd' => 'Nineveh',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which Egyptian queen was the last active ruler of the Ptolemaic Kingdom of Egypt?',
        'a' => 'Nefertiti',
        'b' => 'Hatshepsut',
        'c' => 'Cleopatra',
        'd' => 'Nefertari',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which Greek historian is known as the "Father of History"?',
        'a' => 'Thucydides',
        'b' => 'Herodotus',
        'c' => 'Plato',
        'd' => 'Homer',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which Greek philosopher was the tutor of Alexander the Great?',
        'a' => 'Plato',
        'b' => 'Aristotle',
        'c' => 'Socrates',
        'd' => 'Epicurus',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
        
        'question' => 'Which civilization is known for building Machu Picchu?',
        'a' => 'The Maya',
        'b' => 'The Aztecs',
        'c' => 'The Inca',
        'd' => 'The Olmecs',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the famous Carthaginian general who crossed the Alps to invade Italy?',
        'a' => 'Hamilcar Barca',
        'b' => 'Hannibal',
        'c' => 'Scipio Africanus',
        'd' => 'Julius Caesar',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'The "Epic of Gilgamesh" is a famous work from which ancient civilization?',
        'a' => 'Babylonian',
        'b' => 'Greek',
        'c' => 'Sumerian',
        'd' => 'Egyptian',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which Greek city-state was known for its militaristic society?',
        'a' => 'Sparta',
        'b' => 'Athens',
        'c' => 'Thebes',
        'd' => 'Corinth',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which Egyptian pharaoh is known for building the Great Temple at Abu Simbel?',
        'a' => 'Thutmose III',
        'b' => 'Tutankhamun',
        'c' => 'Ramses II',
        'd' => 'Akhenaten',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which ancient people are credited with creating the first alphabet?',
        'a' => 'The Phoenicians',
        'b' => 'The Egyptians',
        'c' => 'The Greeks',
        'd' => 'The Persians',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which war is described in Homer\'s epic, "The Iliad"?',
        'a' => 'The Persian Wars',
        'b' => 'The Peloponnesian War',
        'c' => 'The Trojan War',
        'd' => 'The Punic Wars',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which civilization built the Colosseum in Rome?',
        'a' => 'The Greeks',
        'b' => 'The Egyptians',
        'c' => 'The Romans',
        'd' => 'The Persians',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which of the Seven Wonders of the Ancient World was located in Egypt?',
        'a' => 'The Statue of Zeus',
        'b' => 'The Temple of Artemis',
        'c' => 'The Great Pyramid of Giza',
        'd' => 'The Lighthouse of Alexandria',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which Roman emperor famously "fiddled while Rome burned"?',
        'a' => 'Julius Caesar',
        'b' => 'Augustus',
        'c' => 'Nero',
        'd' => 'Caligula',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
        
        'question' => 'Who was the first emperor of China?',
        'a' => 'Kublai Khan',
        'b' => 'Qin Shi Huang',
        'c' => 'Sun Yat-sen',
        'd' => 'Liu Bang',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'The Rosetta Stone helped scholars decipher which language?',
        'a' => 'Ancient Sumerian',
        'b' => 'Cuneiform',
        'c' => 'Egyptian Hieroglyphics',
        'd' => 'Phoenician',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which ancient civilization is known for its large stone heads?',
        'a' => 'Olmec',
        'b' => 'Maya',
        'c' => 'Aztec',
        'd' => 'Inca',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which Mesopotamian ruler is known for creating one of the world’s earliest legal codes?',
        'a' => 'Sargon of Akkad',
        'b' => 'Hammurabi',
        'c' => 'Nebuchadnezzar',
        'd' => 'Ashurbanipal',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the first Roman emperor?',
        'a' => 'Julius Caesar',
        'b' => 'Tiberius',
        'c' => 'Augustus',
        'd' => 'Nero',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which ancient civilization built the Hanging Gardens of Babylon?',
        'a' => 'Sumerian',
        'b' => 'Assyrian',
        'c' => 'Babylonian',
        'd' => 'Egyptian',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What is the name of the battle where 300 Spartans famously fought against a much larger Persian army?',
        'a' => 'The Battle of Marathon',
        'b' => 'The Battle of Salamis',
        'c' => 'The Battle of Thermopylae',
        'd' => 'The Battle of Plataea',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which famous Greek philosopher was the teacher of Alexander the Great?',
        'a' => 'Socrates',
        'b' => 'Plato',
        'c' => 'Aristotle',
        'd' => 'Heraclitus',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What is the ancient city of Troy best known for?',
        'a' => 'The Trojan War',
        'b' => 'The Trojan Horse',
        'c' => 'The Siege of Troy',
        'd' => 'All of the above',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the Egyptian queen known for her relationships with Julius Caesar and Mark Antony?',
        'a' => 'Cleopatra',
        'b' => 'Hatshepsut',
        'c' => 'Nefertiti',
        'd' => 'Ankhesenamun',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
        
        'question' => 'What is the name of the legendary founder of Rome?',
        'a' => 'Remus',
        'b' => 'Aeneas',
        'c' => 'Romulus',
        'd' => 'Hannibal',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which battle marked the final defeat of Carthage in the Punic Wars?',
        'a' => 'Battle of Zama',
        'b' => 'Battle of Cannae',
        'c' => 'Battle of Actium',
        'd' => 'Battle of Thermopylae',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which pharaoh built the Great Pyramid of Giza?',
        'a' => 'Ramses II',
        'b' => 'Khufu',
        'c' => 'Tutankhamun',
        'd' => 'Amenhotep III',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which Greek god was considered the king of the gods?',
        'a' => 'Apollo',
        'b' => 'Zeus',
        'c' => 'Ares',
        'd' => 'Poseidon',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which ancient empire was ruled by Cyrus the Great?',
        'a' => 'Assyrian Empire',
        'b' => 'Babylonian Empire',
        'c' => 'Persian Empire',
        'd' => 'Egyptian Empire',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What famous road connected the Roman Empire?',
        'a' => 'The Via Appia',
        'b' => 'The Silk Road',
        'c' => 'The Royal Road',
        'd' => 'The Amber Road',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'The Parthenon is a famous temple dedicated to which Greek goddess?',
        'a' => 'Aphrodite',
        'b' => 'Hera',
        'c' => 'Athena',
        'd' => 'Demeter',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which ancient civilization used cuneiform writing?',
        'a' => 'Egyptian',
        'b' => 'Sumerian',
        'c' => 'Greek',
        'd' => 'Roman',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which civilization is associated with the Oracle of Delphi?',
        'a' => 'Roman',
        'b' => 'Egyptian',
        'c' => 'Greek',
        'd' => 'Persian',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which city was buried by the eruption of Mount Vesuvius in AD 79?',
        'a' => 'Herculaneum',
        'b' => 'Pompeii',
        'c' => 'Naples',
        'd' => 'Rome',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
        
        'question' => 'Who was the first Roman emperor?',
        'a' => 'Nero',
        'b' => 'Julius Caesar',
        'c' => 'Augustus',
        'd' => 'Tiberius',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which ancient civilization is credited with creating the first written code of laws?',
        'a' => 'Babylonian',
        'b' => 'Greek',
        'c' => 'Roman',
        'd' => 'Sumerian',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which famous Carthaginian general crossed the Alps to invade Italy?',
        'a' => 'Scipio',
        'b' => 'Hannibal',
        'c' => 'Hasdrubal',
        'd' => 'Mago',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What ancient civilization built the city of Machu Picchu?',
        'a' => 'Inca',
        'b' => 'Aztec',
        'c' => 'Maya',
        'd' => 'Olmec',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which civilization constructed the famous Colosseum?',
        'a' => 'Greeks',
        'b' => 'Babylonians',
        'c' => 'Romans',
        'd' => 'Egyptians',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What city was known as Byzantium before becoming Constantinople?',
        'a' => 'Rome',
        'b' => 'Athens',
        'c' => 'Troy',
        'd' => 'Byzantium',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the Egyptian queen who famously allied with Julius Caesar and Mark Antony?',
        'a' => 'Cleopatra',
        'b' => 'Nefertiti',
        'c' => 'Hatshepsut',
        'd' => 'Isis',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who wrote the epic poems "The Iliad" and "The Odyssey"?',
        'a' => 'Virgil',
        'b' => 'Sophocles',
        'c' => 'Homer',
        'd' => 'Herodotus',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which city-state was the main rival of Athens during the Peloponnesian War?',
        'a' => 'Sparta',
        'b' => 'Thebes',
        'c' => 'Corinth',
        'd' => 'Delphi',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What was the purpose of the "Rosetta Stone"?',
        'a' => 'To build pyramids',
        'b' => 'To preserve ancient law',
        'c' => 'To decode ancient languages',
        'd' => 'To chronicle wars',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
        
        'question' => 'Which ancient wonder was located in Babylon?',
        'a' => 'Temple of Artemis',
        'b' => 'Statue of Zeus',
        'c' => 'Hanging Gardens',
        'd' => 'Colossus of Rhodes',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the first emperor of China?',
        'a' => 'Qin Shi Huang',
        'b' => 'Han Gaozu',
        'c' => 'Wudi',
        'd' => 'Yuan Shikai',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which civilization developed cuneiform script?',
        'a' => 'Egyptian',
        'b' => 'Sumerian',
        'c' => 'Assyrian',
        'd' => 'Phoenician',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which of these was a ruler of the Persian Empire?',
        'a' => 'Ramses II',
        'b' => 'Cyrus the Great',
        'c' => 'Cleopatra',
        'd' => 'Nebuchadnezzar',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What was the primary language of ancient Rome?',
        'a' => 'Greek',
        'b' => 'Latin',
        'c' => 'Aramaic',
        'd' => 'Hebrew',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which ancient philosopher taught Alexander the Great?',
        'a' => 'Socrates',
        'b' => 'Plato',
        'c' => 'Aristotle',
        'd' => 'Epicurus',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which kingdom was ruled by King Nebuchadnezzar II?',
        'a' => 'Egypt',
        'b' => 'Babylon',
        'c' => 'Assyria',
        'd' => 'Persia',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which of the following was the most important river to Ancient Egypt?',
        'a' => 'Nile',
        'b' => 'Tigris',
        'c' => 'Euphrates',
        'd' => 'Indus',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the Greek god of war?',
        'a' => 'Hermes',
        'b' => 'Ares',
        'c' => 'Zeus',
        'd' => 'Apollo',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What was the name of the king of Sparta who fought in the Battle of Thermopylae?',
        'a' => 'Leonidas',
        'b' => 'Agamemnon',
        'c' => 'Menelaus',
        'd' => 'Lycurgus',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
        
        'question' => 'Which ancient civilization is credited with inventing the wheel?',
        'a' => 'Ancient Egyptians',
        'b' => 'Sumerians',
        'c' => 'Minoans',
        'd' => 'Indus Valley Civilization',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What was the primary purpose of the ancient Egyptian pyramids?',
        'a' => 'Fortresses',
        'b' => 'Tombs',
        'c' => 'Temples',
        'd' => 'Observatories',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which empire was ruled by Alexander the Great?',
        'a' => 'Roman Empire',
        'b' => 'Macedonian Empire',
        'c' => 'Persian Empire',
        'd' => 'Ottoman Empire',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which ancient city is known for the Hanging Gardens?',
        'a' => 'Babylon',
        'b' => 'Athens',
        'c' => 'Rome',
        'd' => 'Thebes',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the last pharaoh of Egypt?',
        'a' => 'Cleopatra',
        'b' => 'Ramses II',
        'c' => 'Tutankhamun',
        'd' => 'Akhenaten',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What was the main language used in ancient Greece?',
        'a' => 'Latin',
        'b' => 'Greek',
        'c' => 'Phoenician',
        'd' => 'Etruscan',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which ruler is known for his conquests across Europe and Asia and was crowned Emperor of the Romans?',
        'a' => 'Julius Caesar',
        'b' => 'Charlemagne',
        'c' => 'Alexander the Great',
        'd' => 'Augustus',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which ancient civilization built the city of Petra?',
        'a' => 'Roman',
        'b' => 'Greek',
        'c' => 'Nabatean',
        'd' => 'Byzantine',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the ancient Greek historian known as the "Father of History"?',
        'a' => 'Socrates',
        'b' => 'Homer',
        'c' => 'Herodotus',
        'd' => 'Plato',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which empire was known for its extensive road network and military organization?',
        'a' => 'Persian Empire',
        'b' => 'Roman Empire',
        'c' => 'Mongol Empire',
        'd' => 'Ottoman Empire',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which famous ancient structure was used for gladiatorial contests?',
        'a' => 'Pantheon',
        'b' => 'Colosseum',
        'c' => 'Parthenon',
        'd' => 'Forum',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
        
        'question' => 'Which ancient civilization is known for developing a complex system of writing called cuneiform?',
        'a' => 'Ancient Egyptians',
        'b' => 'Sumerians',
        'c' => 'Hittites',
        'd' => 'Babylonians',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What was the primary function of the Roman aqueducts?',
        'a' => 'Military defense',
        'b' => 'Water supply',
        'c' => 'Transportation',
        'd' => 'Agriculture',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which Greek philosopher taught Alexander the Great?',
        'a' => 'Plato',
        'b' => 'Socrates',
        'c' => 'Aristotle',
        'd' => 'Pythagoras',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which ancient civilization is known for the creation of the Code of Hammurabi?',
        'a' => 'Persians',
        'b' => 'Egyptians',
        'c' => 'Babylonians',
        'd' => 'Greeks',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the Carthaginian general who fought against Rome in the Second Punic War?',
        'a' => 'Julius Caesar',
        'b' => 'Hannibal',
        'c' => 'Scipio Africanus',
        'd' => 'Augustus',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which of the following was NOT one of the Seven Wonders of the Ancient World?',
        'a' => 'The Great Pyramid of Giza',
        'b' => 'The Colossus of Rhodes',
        'c' => 'The Eiffel Tower',
        'd' => 'The Lighthouse of Alexandria',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which ruler was known for unifying China and building the Great Wall?',
        'a' => 'Confucius',
        'b' => 'Qin Shi Huang',
        'c' => 'Liu Bang',
        'd' => 'Han Wudi',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What was the name of the ancient Greek city-state known for its military discipline and training?',
        'a' => 'Athens',
        'b' => 'Corinth',
        'c' => 'Sparta',
        'd' => 'Thebes',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which ancient civilization is credited with developing the first known form of democracy?',
        'a' => 'Romans',
        'b' => 'Athenians',
        'c' => 'Persians',
        'd' => 'Egyptians',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which ancient empire is known for its extensive library in Alexandria?',
        'a' => 'Greek Empire',
        'b' => 'Roman Empire',
        'c' => 'Egyptian Empire',
        'd' => 'Macedonian Empire',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
      
        'question' => 'Which event in 1066 marked the beginning of Norman rule in England?',
        'a' => 'The signing of the Magna Carta',
        'b' => 'The Battle of Hastings',
        'c' => 'The start of the Crusades',
        'd' => 'The fall of Constantinople',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Who was the first Holy Roman Emperor?',
        'a' => 'Charlemagne',
        'b' => 'Otto I',
        'c' => 'Frederick Barbarossa',
        'd' => 'Charles V',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which empire was centered in Constantinople during the medieval period?',
        'a' => 'The Byzantine Empire',
        'b' => 'The Frankish Empire',
        'c' => 'The Mongol Empire',
        'd' => 'The Holy Roman Empire',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'What was the purpose of the Magna Carta signed in 1215?',
        'a' => 'To give the king absolute power',
        'b' => 'To establish the House of Commons',
        'c' => 'To limit the power of the English monarchy',
        'd' => 'To start a new royal dynasty',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which famous medieval figure led the French army to victory during the Hundred Years\' War?',
        'a' => 'Joan of Arc',
        'b' => 'Richard the Lionheart',
        'c' => 'Eleanor of Aquitaine',
        'd' => 'Henry V',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'What was the Black Death?',
        'a' => 'A conflict between European powers',
        'b' => 'A pandemic that killed millions in Europe',
        'c' => 'A major political movement',
        'd' => 'A military campaign in the Crusades',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which Pope called for the First Crusade in 1095?',
        'a' => 'Pope Innocent III',
        'b' => 'Pope Urban II',
        'c' => 'Pope Gregory VII',
        'd' => 'Pope Clement V',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Who was known as the "Lionheart" among medieval kings?',
        'a' => 'Henry V',
        'b' => 'Charlemagne',
        'c' => 'Richard I of England',
        'd' => 'Edward III',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which religious order was founded by St. Benedict in the 6th century?',
        'a' => 'The Knights Templar',
        'b' => 'The Jesuits',
        'c' => 'The Benedictines',
        'd' => 'The Dominicans',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which of the following was a result of the fall of Constantinople in 1453?',
        'a' => 'The rise of the Ottoman Empire',
        'b' => 'The start of the Hundred Years\' War',
        'c' => 'The Reconquista in Spain',
        'd' => 'The invention of the printing press',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
      
        'question' => 'Which battle in 732 stopped the Muslim advance into Western Europe?',
        'a' => 'The Battle of Tours',
        'b' => 'The Battle of Hastings',
        'c' => 'The Battle of Agincourt',
        'd' => 'The Battle of Lepanto',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Who was the famous ruler of the Mongol Empire in the 13th century?',
        'a' => 'Kublai Khan',
        'b' => 'Attila the Hun',
        'c' => 'Genghis Khan',
        'd' => 'Tamerlane',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which of these was a significant architectural development of the medieval period?',
        'a' => 'The Romanesque style',
        'b' => 'The Gothic style',
        'c' => 'Baroque style',
        'd' => 'Renaissance architecture',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which medieval queen was the wife of both the King of France and the King of England?',
        'a' => 'Catherine of Aragon',
        'b' => 'Eleanor of Aquitaine',
        'c' => 'Joan of Arc',
        'd' => 'Matilda of England',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'What was the main focus of the Fourth Crusade?',
        'a' => 'Recapturing Jerusalem',
        'b' => 'Defeating the Mongols',
        'c' => 'Conquering Constantinople',
        'd' => 'Securing trade routes in the Middle East',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which group was responsible for the sacking of Rome in 410?',
        'a' => 'The Vikings',
        'b' => 'The Visigoths',
        'c' => 'The Huns',
        'd' => 'The Ottomans',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'What was the name of the legislative body in England established in the 13th century?',
        'a' => 'The Estates General',
        'b' => 'The Reichstag',
        'c' => 'Parliament',
        'd' => 'The House of Lords',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which empire reached its height under Justinian I during the 6th century?',
        'a' => 'The Byzantine Empire',
        'b' => 'The Ottoman Empire',
        'c' => 'The Persian Empire',
        'd' => 'The Frankish Empire',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'What was the Domesday Book?',
        'a' => 'A religious manuscript',
        'b' => 'A census of England',
        'c' => 'A collection of medieval laws',
        'd' => 'A historical account of the Crusades',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which famous medieval university was established in 1088?',
        'a' => 'Oxford University',
        'b' => 'University of Paris',
        'c' => 'University of Bologna',
        'd' => 'University of Cambridge',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
      
        'question' => 'Who was crowned the first Holy Roman Emperor in 800 AD?',
        'a' => 'Charlemagne',
        'b' => 'Otto I',
        'c' => 'Frederick I',
        'd' => 'Constantine',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which event is considered the start of the Crusades?',
        'a' => 'The Fall of Constantinople',
        'b' => 'The Council of Clermont',
        'c' => 'The Battle of Manzikert',
        'd' => 'The Treaty of Verdun',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which king signed the Magna Carta in 1215?',
        'a' => 'King Richard I',
        'b' => 'King Edward I',
        'c' => 'King John',
        'd' => 'King Henry II',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'What was the Black Death?',
        'a' => 'A series of Viking raids',
        'b' => 'A famine',
        'c' => 'A plague that killed millions in Europe',
        'd' => 'A political rebellion',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which Viking leader was the first to establish a settlement in Greenland?',
        'a' => 'Leif Erikson',
        'b' => 'Harald Hardrada',
        'c' => 'Eric the Red',
        'd' => 'Ragnar Lodbrok',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'What was the purpose of the medieval Inquisition?',
        'a' => 'To seek out and punish heresy',
        'b' => 'To defend Europe from invasions',
        'c' => 'To crown new kings',
        'd' => 'To negotiate peace treaties',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which event ended the Wars of the Roses in England?',
        'a' => 'The Battle of Bosworth Field',
        'b' => 'The Battle of Hastings',
        'c' => 'The signing of the Magna Carta',
        'd' => 'The Battle of Agincourt',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which religious figure was known for preaching the First Crusade?',
        'a' => 'Bernard of Clairvaux',
        'b' => 'Pope Gregory VII',
        'c' => 'Pope Urban II',
        'd' => 'Thomas Aquinas',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which treaty divided the Carolingian Empire into three parts in 843?',
        'a' => 'The Treaty of Verdun',
        'b' => 'The Treaty of Westphalia',
        'c' => 'The Treaty of Utrecht',
        'd' => 'The Treaty of Paris',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which city was a major center of learning during the Islamic Golden Age?',
        'a' => 'Constantinople',
        'b' => 'Baghdad',
        'c' => 'Jerusalem',
        'd' => 'Cairo',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
      
        'question' => 'Who was the famous Byzantine Emperor who codified Roman law?',
        'a' => 'Justinian I',
        'b' => 'Constantine the Great',
        'c' => 'Theodosius I',
        'd' => 'Heraclius',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'The Great Schism of 1054 led to the split between which two branches of Christianity?',
        'a' => 'Catholic and Protestant',
        'b' => 'Roman Catholic and Eastern Orthodox',
        'c' => 'Eastern Orthodox and Coptic',
        'd' => 'Protestant and Calvinist',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'What was the name of the French heroine who played a key role in the Hundred Years’ War?',
        'a' => 'Catherine de Medici',
        'b' => 'Isabella of Castile',
        'c' => 'Joan of Arc',
        'd' => 'Marie Antoinette',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Who was the founder of the Islamic Caliphate?',
        'a' => 'Muhammad',
        'b' => 'Saladin',
        'c' => 'Harun al-Rashid',
        'd' => 'Al-Mansur',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which war was fought between the houses of Lancaster and York?',
        'a' => 'The Hundred Years\' War',
        'b' => 'The War of the Roses',
        'c' => 'The Crusades',
        'd' => 'The English Civil War',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Who led the Norman invasion of England in 1066?',
        'a' => 'Harald Hardrada',
        'b' => 'William the Conqueror',
        'c' => 'Edward the Confessor',
        'd' => 'King Harold II',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'What was the primary language of scholarship in medieval Europe?',
        'a' => 'Latin',
        'b' => 'Greek',
        'c' => 'French',
        'd' => 'German',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which architectural style is most associated with medieval cathedrals?',
        'a' => 'Baroque',
        'b' => 'Gothic',
        'c' => 'Renaissance',
        'd' => 'Romanesque',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'What was the primary goal of the Crusades?',
        'a' => 'To conquer the Byzantine Empire',
        'b' => 'To reclaim Jerusalem and the Holy Land',
        'c' => 'To spread Christianity in Europe',
        'd' => 'To defeat the Mongols',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which battle is considered a turning point in the Reconquista of Spain?',
        'a' => 'The Battle of Hastings',
        'b' => 'The Battle of Tours',
        'c' => 'The Battle of Lepanto',
        'd' => 'The Battle of Las Navas de Tolosa',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
      
        'question' => 'Which English document, signed in 1215, limited the powers of the king and laid the foundation for constitutional law?',
        'a' => 'The Petition of Right',
        'b' => 'The Magna Carta',
        'c' => 'The Bill of Rights',
        'd' => 'The Statute of Westminster',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Who was crowned the first Holy Roman Emperor in 800 AD?',
        'a' => 'Otto I',
        'b' => 'Charles Martel',
        'c' => 'Charlemagne',
        'd' => 'Pepin the Short',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which medieval king is known for signing the Magna Carta?',
        'a' => 'Richard I',
        'b' => 'Henry II',
        'c' => 'John',
        'd' => 'Edward I',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'What was the primary economic system of medieval Europe?',
        'a' => 'Capitalism',
        'b' => 'Feudalism',
        'c' => 'Socialism',
        'd' => 'Mercantilism',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which Pope called for the First Crusade in 1095?',
        'a' => 'Pope Innocent III',
        'b' => 'Pope Urban II',
        'c' => 'Pope Gregory VII',
        'd' => 'Pope Alexander III',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Who was the Muslim leader who recaptured Jerusalem during the Crusades?',
        'a' => 'Saladin',
        'b' => 'Muhammad II',
        'c' => 'Harun al-Rashid',
        'd' => 'Al-Mansur',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which city was sacked by Crusaders during the Fourth Crusade?',
        'a' => 'Rome',
        'b' => 'Constantinople',
        'c' => 'Jerusalem',
        'd' => 'Alexandria',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'What was the primary weapon used by English soldiers at the Battle of Agincourt?',
        'a' => 'Crossbow',
        'b' => 'Cannon',
        'c' => 'Longbow',
        'd' => 'Sword',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Who was the Viking leader who founded the Duchy of Normandy?',
        'a' => 'Eric the Red',
        'b' => 'Rollo',
        'c' => 'Leif Erikson',
        'd' => 'Harald Bluetooth',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which dynasty ruled France from the 10th to the 14th century?',
        'a' => 'The Merovingians',
        'b' => 'The Capetians',
        'c' => 'The Carolingians',
        'd' => 'The Plantagenets',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
      
        'question' => 'Which battle in 1066 resulted in the Norman conquest of England?',
        'a' => 'Battle of Stamford Bridge',
        'b' => 'Battle of Hastings',
        'c' => 'Battle of Tours',
        'd' => 'Battle of Agincourt',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Who was the Byzantine Emperor during the First Crusade?',
        'a' => 'Alexios I Komnenos',
        'b' => 'Constantine XI',
        'c' => 'Basil II',
        'd' => 'John I Tzimiskes',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which English monarch was forced into exile during the Wars of the Roses?',
        'a' => 'Richard III',
        'b' => 'Henry VI',
        'c' => 'Edward IV',
        'd' => 'Henry V',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which famous medieval university was founded in 1088?',
        'a' => 'University of Paris',
        'b' => 'University of Oxford',
        'c' => 'University of Bologna',
        'd' => 'University of Cambridge',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Who was the French king during the Battle of Poitiers in 1356?',
        'a' => 'Philip VI',
        'b' => 'Charles V',
        'c' => 'John II',
        'd' => 'Louis IX',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'What was the dominant architectural style of cathedrals built during the High Middle Ages?',
        'a' => 'Gothic',
        'b' => 'Romanesque',
        'c' => 'Baroque',
        'd' => 'Renaissance',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which empire fell with the capture of Constantinople in 1453?',
        'a' => 'Ottoman Empire',
        'b' => 'Byzantine Empire',
        'c' => 'Holy Roman Empire',
        'd' => 'Roman Empire',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Who was the English king who led the Third Crusade?',
        'a' => 'Henry II',
        'b' => 'Richard I',
        'c' => 'John',
        'd' => 'Henry III',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'The Hundred Years’ War was fought between which two countries?',
        'a' => 'Spain and France',
        'b' => 'England and France',
        'c' => 'Germany and France',
        'd' => 'England and Scotland',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which medieval saint is credited with founding the Franciscan Order?',
        'a' => 'St. Thomas Aquinas',
        'b' => 'St. Francis of Assisi',
        'c' => 'St. Benedict',
        'd' => 'St. Dominic',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
      
        'question' => 'Who was crowned Holy Roman Emperor by Pope Leo III in 800 AD?',
        'a' => 'Charlemagne',
        'b' => 'Otto I',
        'c' => 'Frederick I',
        'd' => 'Henry IV',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'What was the name of the document signed by King John of England in 1215?',
        'a' => 'Treaty of Tordesillas',
        'b' => 'Domesday Book',
        'c' => 'Magna Carta',
        'd' => 'Concordat of Worms',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which medieval empire was known as the Eastern Roman Empire?',
        'a' => 'Byzantine Empire',
        'b' => 'Frankish Empire',
        'c' => 'Ottoman Empire',
        'd' => 'Holy Roman Empire',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which military order was founded in 1119 to protect pilgrims to the Holy Land?',
        'a' => 'Teutonic Knights',
        'b' => 'Order of Saint Lazarus',
        'c' => 'Knights Templar',
        'd' => 'Order of Calatrava',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which English king famously fought in the Battle of Agincourt in 1415?',
        'a' => 'Richard II',
        'b' => 'Henry V',
        'c' => 'Edward III',
        'd' => 'Henry IV',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'The Reconquista refers to the efforts by Christian states to retake the Iberian Peninsula from which group?',
        'a' => 'Vikings',
        'b' => 'Moors',
        'c' => 'Franks',
        'd' => 'Saxons',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'What was the main purpose of the Domesday Book commissioned by William the Conqueror?',
        'a' => 'Legal code',
        'b' => 'Religious reform',
        'c' => 'Taxation records',
        'd' => 'Military strategy',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which medieval philosopher is often called the “father of scholasticism”?',
        'a' => 'St. Augustine',
        'b' => 'Peter Abelard',
        'c' => 'Thomas Aquinas',
        'd' => 'Anselm of Canterbury',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which war was fought between England and France over the succession of the French throne from 1337 to 1453?',
        'a' => 'War of the Roses',
        'b' => 'Hundred Years\' War',
        'c' => 'Napoleonic Wars',
        'd' => 'Thirty Years\' War',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'What was the role of a medieval serf?',
        'a' => 'Military knight',
        'b' => 'Land-owning noble',
        'c' => 'Free artisan',
        'd' => 'Peasant laborer tied to land',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
      
        'question' => 'Which famous battle in 1066 saw the Norman Conquest of England?',
        'a' => 'Battle of Hastings',
        'b' => 'Battle of Tours',
        'c' => 'Battle of Agincourt',
        'd' => 'Battle of Stirling Bridge',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Who was the Byzantine Emperor during the construction of the Hagia Sophia?',
        'a' => 'Constantine the Great',
        'b' => 'Justinian I',
        'c' => 'Basil II',
        'd' => 'Alexios I Komnenos',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which Viking explorer is credited with discovering Greenland?',
        'a' => 'Leif Erikson',
        'b' => 'Erik the Red',
        'c' => 'Ragnar Lothbrok',
        'd' => 'Harald Hardrada',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'The Black Death swept across Europe during which century?',
        'a' => '12th century',
        'b' => '13th century',
        'c' => '14th century',
        'd' => '15th century',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Who was the first ruler of the Holy Roman Empire?',
        'a' => 'Charlemagne',
        'b' => 'Otto I',
        'c' => 'Frederick Barbarossa',
        'd' => 'Louis the Pious',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'What was the name of the Muslim leader who recaptured Jerusalem during the Crusades?',
        'a' => 'Suleiman the Magnificent',
        'b' => 'Saladin',
        'c' => 'Mehmed II',
        'd' => 'Al-Mu\'tadid',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'What was the main purpose of the Crusades?',
        'a' => 'Colonizing Africa',
        'b' => 'Trade expansion',
        'c' => 'Religious wars to reclaim the Holy Land',
        'd' => 'Territorial expansion in Europe',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'What was the outcome of the Battle of Tours in 732?',
        'a' => 'Muslim expansion into Europe was halted',
        'b' => 'Viking dominance in Europe began',
        'c' => 'The Mongols were driven out of Eastern Europe',
        'd' => 'The Byzantine Empire regained territory in the East',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Who was the Frankish king who united much of Western Europe during the early Middle Ages?',
        'a' => 'Clovis I',
        'b' => 'Pepin the Short',
        'c' => 'Charlemagne',
        'd' => 'Louis the German',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'What was the medieval code of conduct associated with knights?',
        'a' => 'Feudalism',
        'b' => 'Chivalry',
        'c' => 'Manorialism',
        'd' => 'Serfdom',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
      
        'question' => 'Which empire was known as the Eastern Roman Empire?',
        'a' => 'Ottoman Empire',
        'b' => 'Holy Roman Empire',
        'c' => 'Byzantine Empire',
        'd' => 'Mongol Empire',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'What was the capital of the Byzantine Empire?',
        'a' => 'Rome',
        'b' => 'Cairo',
        'c' => 'Constantinople',
        'd' => 'Athens',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which religious figure led the Protestant Reformation in the 16th century?',
        'a' => 'John Calvin',
        'b' => 'Martin Luther',
        'c' => 'Henry VIII',
        'd' => 'Pope Leo X',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which Islamic dynasty ruled from 750 to 1258 and was centered in Baghdad?',
        'a' => 'Ottoman Empire',
        'b' => 'Abbasid Caliphate',
        'c' => 'Fatimid Caliphate',
        'd' => 'Umayyad Caliphate',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Who was the leader of the Mongol Empire who created one of the largest empires in history?',
        'a' => 'Kublai Khan',
        'b' => 'Genghis Khan',
        'c' => 'Tamerlane',
        'd' => 'Ögedei Khan',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'The Hundred Years\' War was fought between which two countries?',
        'a' => 'England and France',
        'b' => 'Spain and Portugal',
        'c' => 'England and Spain',
        'd' => 'France and Germany',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'What was the main language of the educated and religious elite in Medieval Europe?',
        'a' => 'French',
        'b' => 'Latin',
        'c' => 'German',
        'd' => 'Greek',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which battle is considered to have ended the Viking Age?',
        'a' => 'Battle of Stamford Bridge',
        'b' => 'Battle of Hastings',
        'c' => 'Battle of Clontarf',
        'd' => 'Battle of Tours',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which treaty in 843 split the Carolingian Empire into three parts?',
        'a' => 'Treaty of Verdun',
        'b' => 'Treaty of Troyes',
        'c' => 'Treaty of Utrecht',
        'd' => 'Treaty of Paris',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Who was the first king of England to unite the Anglo-Saxon kingdoms?',
        'a' => 'Edward the Confessor',
        'b' => 'Alfred the Great',
        'c' => 'Aethelstan',
        'd' => 'Harold Godwinson',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
      
        'question' => 'Who was crowned Holy Roman Emperor in 800 AD?',
        'a' => 'Charlemagne',
        'b' => 'Otto I',
        'c' => 'Frederick Barbarossa',
        'd' => 'Henry IV',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which event marked the beginning of the Viking Age?',
        'a' => 'The Battle of Hastings',
        'b' => 'The raid on Lindisfarne',
        'c' => 'The crowning of Charlemagne',
        'd' => 'The Fall of Rome',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'What was the primary religion of the Byzantine Empire?',
        'a' => 'Islam',
        'b' => 'Judaism',
        'c' => 'Eastern Orthodox Christianity',
        'd' => 'Roman Catholicism',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Who led the Norman invasion of England in 1066?',
        'a' => 'Harold Godwinson',
        'b' => 'William the Conqueror',
        'c' => 'Richard the Lionheart',
        'd' => 'Henry II',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which pope initiated the First Crusade in 1095?',
        'a' => 'Pope Gregory VII',
        'b' => 'Pope Urban II',
        'c' => 'Pope Innocent III',
        'd' => 'Pope Alexander III',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'The Magna Carta was signed in which year?',
        'a' => '1215',
        'b' => '1066',
        'c' => '1307',
        'd' => '1453',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which Muslim leader recaptured Jerusalem from the Crusaders in 1187?',
        'a' => 'Saladin',
        'b' => 'Baybars',
        'c' => 'Suleiman the Magnificent',
        'd' => 'Tamerlane',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which dynasty ruled the Frankish Empire before it split?',
        'a' => 'Carolingian',
        'b' => 'Merovingian',
        'c' => 'Capetian',
        'd' => 'Valois',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'The Black Death, which devastated Europe in the 14th century, was caused by which disease?',
        'a' => 'Cholera',
        'b' => 'Smallpox',
        'c' => 'Bubonic plague',
        'd' => 'Leprosy',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
      
        'question' => 'Which conflict is considered to have ended the Medieval period in Europe?',
        'a' => 'The Hundred Years\' War',
        'b' => 'The Crusades',
        'c' => 'The War of the Roses',
        'd' => 'The Fall of Constantinople',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
        
        'question' => 'Who was the British Prime Minister during World War II?',
        'a' => 'Winston Churchill',
        'b' => 'Neville Chamberlain',
        'c' => 'Clement Attlee',
        'd' => 'Anthony Eden',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which event triggered the start of World War I?',
        'a' => 'The sinking of the Lusitania',
        'b' => 'The assassination of Archduke Franz Ferdinand',
        'c' => 'The invasion of Poland',
        'd' => 'The bombing of Pearl Harbor',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'The Cold War was primarily between which two superpowers?',
        'a' => 'USA and USSR',
        'b' => 'USA and China',
        'c' => 'USA and Germany',
        'd' => 'USA and Japan',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What was the main purpose of the Marshall Plan?',
        'a' => 'To provide military aid to Asia',
        'b' => 'To rebuild European economies after World War II',
        'c' => 'To fund the space race',
        'd' => 'To support the civil rights movement',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which treaty ended World War I?',
        'a' => 'Treaty of Versailles',
        'b' => 'Treaty of Paris',
        'c' => 'Treaty of London',
        'd' => 'Treaty of Brest-Litovsk',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the first man to walk on the moon?',
        'a' => 'Buzz Aldrin',
        'b' => 'Yuri Gagarin',
        'c' => 'Neil Armstrong',
        'd' => 'Michael Collins',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What was the main goal of the feminist movement in the 1960s?',
        'a' => 'To achieve voting rights for women',
        'b' => 'To promote gender equality in the workplace',
        'c' => 'To support the women’s suffrage movement',
        'd' => 'To establish women’s colleges',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which event marked the end of apartheid in South Africa?',
        'a' => 'The release of Nelson Mandela',
        'b' => 'The election of Nelson Mandela',
        'c' => 'The Soweto Uprising',
        'd' => 'The end of the Cold War',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'The Berlin Wall fell in which year?',
        'a' => '1989',
        'b' => '1979',
        'c' => '1991',
        'd' => '1985',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What was the primary goal of the Cuban Missile Crisis?',
        'a' => 'To overthrow the Cuban government',
        'b' => 'To place nuclear missiles in Cuba',
        'c' => 'To negotiate arms reduction',
        'd' => 'To end the Cuban trade embargo',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
        
        'question' => 'Which battle is considered the turning point of the American Civil War?',
        'a' => 'Battle of Gettysburg',
        'b' => 'Battle of Antietam',
        'c' => 'Battle of Bull Run',
        'd' => 'Battle of Shiloh',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the leader of the Soviet Union during the Cuban Missile Crisis?',
        'a' => 'Leonid Brezhnev',
        'b' => 'Nikita Khrushchev',
        'c' => 'Joseph Stalin',
        'd' => 'Mikhail Gorbachev',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What was the main objective of the Nazi regime during World War II?',
        'a' => 'To spread communism',
        'b' => 'To establish a New World Order',
        'c' => 'To promote democracy',
        'd' => 'To create a racial empire',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which event marked the end of the French Revolution?',
        'a' => 'The execution of Louis XVI',
        'b' => 'The rise of Napoleon Bonaparte',
        'c' => 'The signing of the Treaty of Paris',
        'd' => 'The establishment of the Napoleonic Code',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which country was the first to grant women the right to vote?',
        'a' => 'New Zealand',
        'b' => 'Sweden',
        'c' => 'Australia',
        'd' => 'United Kingdom',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the leader of the Indian independence movement against British rule?',
        'a' => 'Jawaharlal Nehru',
        'b' => 'Subhas Chandra Bose',
        'c' => 'Mahatma Gandhi',
        'd' => 'Bhagat Singh',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What was the main goal of the Vietnam War?',
        'a' => 'To unify Vietnam under communist rule',
        'b' => 'To promote democracy in South Vietnam',
        'c' => 'To support the French colonial government',
        'd' => 'To establish a communist government in Laos',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What was the primary cause of the Spanish Civil War?',
        'a' => 'Economic depression',
        'b' => 'Political instability',
        'c' => 'The rise of fascism',
        'd' => 'Religious conflict',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which famous wall was built during the Cold War to divide a city?',
        'a' => 'Great Wall of China',
        'b' => 'Berlin Wall',
        'c' => 'Hadrian’s Wall',
        'd' => 'Walls of Jericho',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which major event took place in 1969?',
        'a' => 'The signing of the Paris Peace Accords',
        'b' => 'The moon landing',
        'c' => 'The Watergate scandal',
        'd' => 'The end of the Vietnam War',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
        
        'question' => 'Who was the first President of the United States to be impeached?',
        'a' => 'Andrew Johnson',
        'b' => 'Ulysses S. Grant',
        'c' => 'Richard Nixon',
        'd' => 'Bill Clinton',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What was the purpose of the Marshall Plan?',
        'a' => 'To provide military support to Western Europe',
        'b' => 'To rebuild Europe after World War II',
        'c' => 'To create the European Union',
        'd' => 'To establish NATO',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which event triggered the start of World War I?',
        'a' => 'The sinking of the Lusitania',
        'b' => 'The assassination of Archduke Franz Ferdinand',
        'c' => 'The signing of the Treaty of Versailles',
        'd' => 'The invasion of Poland',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What was the main cause of the Great Depression?',
        'a' => 'Stock market crash',
        'b' => 'The end of World War I',
        'c' => 'High inflation',
        'd' => 'Overproduction of goods',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the British Prime Minister during World War II?',
        'a' => 'Winston Churchill',
        'b' => 'Neville Chamberlain',
        'c' => 'Clement Attlee',
        'd' => 'Margaret Thatcher',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which treaty ended World War I?',
        'a' => 'Treaty of Versailles',
        'b' => 'Treaty of Paris',
        'c' => 'Treaty of Rome',
        'd' => 'Treaty of Ghent',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What was the main focus of the Progressive Era in the United States?',
        'a' => 'Economic growth',
        'b' => 'Social reform',
        'c' => 'Expansion of territories',
        'd' => 'Military strength',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which empire was known as “the empire on which the sun never sets”?',
        'a' => 'Ottoman Empire',
        'b' => 'Spanish Empire',
        'c' => 'British Empire',
        'd' => 'Roman Empire',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What was the primary goal of the League of Nations?',
        'a' => 'To promote global trade',
        'b' => 'To prevent future wars',
        'c' => 'To control the global economy',
        'd' => 'To spread democracy',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which event led to the fall of the Berlin Wall?',
        'a' => 'The end of the Cold War',
        'b' => 'The reunification of Germany',
        'c' => 'The collapse of the Soviet Union',
        'd' => 'The signing of the Helsinki Accords',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
        
        'question' => 'Who was the leader of the Soviet Union during World War II?',
        'a' => 'Joseph Stalin',
        'b' => 'Leon Trotsky',
        'c' => 'Vladimir Lenin',
        'd' => 'Nikita Khrushchev',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which country was the first to grant women the right to vote?',
        'a' => 'United States',
        'b' => 'New Zealand',
        'c' => 'United Kingdom',
        'd' => 'Australia',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What year did the Berlin Wall fall?',
        'a' => '1987',
        'b' => '1989',
        'c' => '1991',
        'd' => '1993',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the American President during the Cuban Missile Crisis?',
        'a' => 'John F. Kennedy',
        'b' => 'Lyndon B. Johnson',
        'c' => 'Richard Nixon',
        'd' => 'Dwight D. Eisenhower',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which conflict was known as “The Great War” before World War II?',
        'a' => 'The Korean War',
        'b' => 'World War I',
        'c' => 'The Vietnam War',
        'd' => 'World War II',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which U.S. President was in office during the signing of the Civil Rights Act of 1964?',
        'a' => 'Lyndon B. Johnson',
        'b' => 'John F. Kennedy',
        'c' => 'Richard Nixon',
        'd' => 'Dwight D. Eisenhower',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What was the primary goal of the United Nations after its establishment?',
        'a' => 'Economic development',
        'b' => 'Preventing conflicts and maintaining peace',
        'c' => 'Global economic integration',
        'd' => 'Colonial expansion',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which movement aimed to end racial segregation and discrimination in the United States?',
        'a' => 'The Suffrage Movement',
        'b' => 'The Civil Rights Movement',
        'c' => 'The Labor Movement',
        'd' => 'The Progressive Movement',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which empire controlled much of the Middle East during the early 20th century?',
        'a' => 'Ottoman Empire',
        'b' => 'British Empire',
        'c' => 'French Empire',
        'd' => 'Roman Empire',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What was the main aim of the “Red Scare” in the United States?',
        'a' => 'To combat environmental pollution',
        'b' => 'To suppress communist influence',
        'c' => 'To promote civil rights',
        'd' => 'To expand U.S. territories',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],


    [
        'field_id' => 7,
        
        'question' => 'Which war was fought between 1950 and 1953 on the Korean Peninsula?',
        'a' => 'Vietnam War',
        'b' => 'Korean War',
        'c' => 'Cold War',
        'd' => 'World War II',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the first President of South Africa elected in a fully representative democratic election?',
        'a' => 'Nelson Mandela',
        'b' => 'Desmond Tutu',
        'c' => 'Thabo Mbeki',
        'd' => 'Jacob Zuma',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What was the main purpose of the Marshall Plan?',
        'a' => 'To rebuild war-torn Europe',
        'b' => 'To contain the spread of communism',
        'c' => 'To establish NATO',
        'd' => 'To promote space exploration',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which country was involved in the Falklands War of 1982?',
        'a' => 'Argentina',
        'b' => 'Brazil',
        'c' => 'Chile',
        'd' => 'Colombia',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which treaty ended the First World War?',
        'a' => 'Treaty of Versailles',
        'b' => 'Treaty of Paris',
        'c' => 'Treaty of Ghent',
        'd' => 'Treaty of Utrecht',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What was the main goal of the Cuban Revolution?',
        'a' => 'To establish a democratic government',
        'b' => 'To overthrow Batista and establish a communist state',
        'c' => 'To gain independence from Spain',
        'd' => 'To expand Cuban territory',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which U.S. President was known for the “New Deal” program?',
        'a' => 'Theodore Roosevelt',
        'b' => 'Franklin D. Roosevelt',
        'c' => 'Harry S. Truman',
        'd' => 'Dwight D. Eisenhower',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which event is often considered the beginning of the French Revolution?',
        'a' => 'Storming of the Bastille',
        'b' => 'Execution of Louis XVI',
        'c' => 'Reign of Terror',
        'd' => 'Establishment of the National Assembly',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which empire was divided into East and West after the fall of the Western Roman Empire?',
        'a' => 'Byzantine Empire',
        'b' => 'Ottoman Empire',
        'c' => 'Holy Roman Empire',
        'd' => 'Mongol Empire',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which document declared the independence of the American colonies from Britain?',
        'a' => 'The Constitution',
        'b' => 'The Bill of Rights',
        'c' => 'The Declaration of Independence',
        'd' => 'The Federalist Papers',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],


    [
        'field_id' => 7,
        
        'question' => 'What was the main cause of the Spanish Civil War?',
        'a' => 'Economic collapse',
        'b' => 'Political instability and fascism',
        'c' => 'Colonial disputes',
        'd' => 'Religious conflict',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which event marked the end of the Cold War?',
        'a' => 'Fall of the Berlin Wall',
        'b' => 'Vietnam War',
        'c' => 'Cuban Missile Crisis',
        'd' => 'Soviet invasion of Afghanistan',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the leader of the Soviet Union during World War II?',
        'a' => 'Leon Trotsky',
        'b' => 'Joseph Stalin',
        'c' => 'Nikita Khrushchev',
        'd' => 'Vladimir Lenin',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which U.S. President signed the Emancipation Proclamation?',
        'a' => 'Abraham Lincoln',
        'b' => 'Andrew Johnson',
        'c' => 'Ulysses S. Grant',
        'd' => 'Theodore Roosevelt',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which treaty ended the Russo-Japanese War?',
        'a' => 'Treaty of Portsmouth',
        'b' => 'Treaty of Versailles',
        'c' => 'Treaty of Paris',
        'd' => 'Treaty of Brest-Litovsk',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What was the name of the economic and political system established by the Soviets in Eastern Europe after World War II?',
        'a' => 'Communism',
        'b' => 'Fascism',
        'c' => 'Socialism',
        'd' => 'Democracy',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which event triggered the beginning of World War I?',
        'a' => 'Assassination of Archduke Franz Ferdinand',
        'b' => 'Invasion of Poland',
        'c' => 'Attack on Pearl Harbor',
        'd' => 'Russian Revolution',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the British Prime Minister during World War II?',
        'a' => 'Winston Churchill',
        'b' => 'Neville Chamberlain',
        'c' => 'Clement Attlee',
        'd' => 'Anthony Eden',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which historical figure is known for his role in the unification of Germany?',
        'a' => 'Otto von Bismarck',
        'b' => 'Wilhelm II',
        'c' => 'Kaiser Franz Joseph',
        'd' => 'Ludwig van Beethoven',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What was the main objective of the Allied Powers in World War II?',
        'a' => 'To defeat the Axis Powers and end fascist aggression',
        'b' => 'To establish colonial empires',
        'c' => 'To expand democratic governments',
        'd' => 'To promote economic growth',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],


    [
        'field_id' => 7,
        
        'question' => 'Who was the first Emperor of the Roman Empire?',
        'a' => 'Julius Caesar',
        'b' => 'Augustus',
        'c' => 'Nero',
        'd' => 'Tiberius',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What major global event was triggered by the assassination of Archduke Franz Ferdinand?',
        'a' => 'World War I',
        'b' => 'World War II',
        'c' => 'The Cold War',
        'd' => 'The Korean War',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which country was the first to grant women the right to vote?',
        'a' => 'New Zealand',
        'b' => 'United States',
        'c' => 'United Kingdom',
        'd' => 'Canada',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What was the main focus of the Harlem Renaissance?',
        'a' => 'African American cultural revival',
        'b' => 'Industrial expansion',
        'c' => 'Political reform',
        'd' => 'Military advancements',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which U.S. President is known for his New Deal policies?',
        'a' => 'Franklin D. Roosevelt',
        'b' => 'Theodore Roosevelt',
        'c' => 'Harry S. Truman',
        'd' => 'Woodrow Wilson',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which conflict was fought between the Union and Confederate states?',
        'a' => 'American Civil War',
        'b' => 'Spanish-American War',
        'c' => 'War of 1812',
        'd' => 'Mexican-American War',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What was the purpose of the Marshall Plan?',
        'a' => 'To rebuild Europe after World War II',
        'b' => 'To establish a national park system',
        'c' => 'To support civil rights movements',
        'd' => 'To promote space exploration',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which empire was known for its extensive trade routes across Asia and Europe?',
        'a' => 'Mongol Empire',
        'b' => 'Ottoman Empire',
        'c' => 'Roman Empire',
        'd' => 'British Empire',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the leader of the French Revolution?',
        'a' => 'Maximilien Robespierre',
        'b' => 'Napoleon Bonaparte',
        'c' => 'Louis XVI',
        'd' => 'George Washington',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What was the primary cause of the Opium Wars?',
        'a' => 'Trade imbalances and British opium sales',
        'b' => 'Territorial disputes',
        'c' => 'Religious conflicts',
        'd' => 'Military alliances',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
        
        'question' => 'Which country was divided into East and West during the Cold War?',
        'a' => 'Vietnam',
        'b' => 'Germany',
        'c' => 'Korea',
        'd' => 'China',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the British Prime Minister during most of World War II?',
        'a' => 'Winston Churchill',
        'b' => 'Clement Attlee',
        'c' => 'Anthony Eden',
        'd' => 'Neville Chamberlain',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What was the name of the U.S. program to develop the atomic bomb during World War II?',
        'a' => 'Enigma Project',
        'b' => 'Operation Overlord',
        'c' => 'Manhattan Project',
        'd' => 'Project Apollo',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which leader was known for his policy of Glasnost?',
        'a' => 'Leonid Brezhnev',
        'b' => 'Nikita Khrushchev',
        'c' => 'Joseph Stalin',
        'd' => 'Mikhail Gorbachev',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What was the main cause of the French Revolution?',
        'a' => 'Economic prosperity',
        'b' => 'Social inequality',
        'c' => 'Colonial expansion',
        'd' => 'Religious conflicts',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What event marked the beginning of the Great Depression?',
        'a' => 'The Dust Bowl',
        'b' => 'World War I',
        'c' => 'Stock Market Crash of 1929',
        'd' => 'The Oil Crisis',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the famous leader of the Indian independence movement?',
        'a' => 'Subhas Chandra Bose',
        'b' => 'Bhagat Singh',
        'c' => 'Jawaharlal Nehru',
        'd' => 'Mahatma Gandhi',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which war was fought between 1950 and 1953 on the Korean Peninsula?',
        'a' => 'Cold War',
        'b' => 'Chinese Civil War',
        'c' => 'Korean War',
        'd' => 'Vietnam War',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which empire was dissolved after World War I?',
        'a' => 'Ottoman Empire',
        'b' => 'British Empire',
        'c' => 'Russian Empire',
        'd' => 'Austro-Hungarian Empire',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which treaty ended World War I?',
        'a' => 'Treaty of Rome',
        'b' => 'Treaty of Paris',
        'c' => 'Treaty of Versailles',
        'd' => 'Treaty of Utrecht',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
        
        'question' => 'Which event is widely considered to have triggered World War I?',
        'a' => 'Assassination of Archduke Franz Ferdinand',
        'b' => 'Treaty of Versailles',
        'c' => 'Russian Revolution',
        'd' => 'Great Depression',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What year did the Berlin Wall fall, symbolizing the end of the Cold War?',
        'a' => '1985',
        'b' => '1989',
        'c' => '1991',
        'd' => '1995',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the Prime Minister of the UK during World War II?',
        'a' => 'Neville Chamberlain',
        'b' => 'Winston Churchill',
        'c' => 'Margaret Thatcher',
        'd' => 'David Lloyd George',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which country was invaded by Nazi Germany, sparking the start of World War II?',
        'a' => 'France',
        'b' => 'Czechoslovakia',
        'c' => 'Poland',
        'd' => 'Belgium',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which major global event took place between 1929 and 1939?',
        'a' => 'The Great Depression',
        'b' => 'The Spanish Civil War',
        'c' => 'World War I',
        'd' => 'Russian Revolution',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who led the Bolshevik Revolution in Russia in 1917?',
        'a' => 'Joseph Stalin',
        'b' => 'Vladimir Lenin',
        'c' => 'Leon Trotsky',
        'd' => 'Nikita Khrushchev',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which treaty formally ended World War I?',
        'a' => 'Treaty of Versailles',
        'b' => 'Treaty of Paris',
        'c' => 'Treaty of Tordesillas',
        'd' => 'Treaty of Ghent',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What was the primary goal of the United Nations when it was founded in 1945?',
        'a' => 'To promote global trade',
        'b' => 'To prevent future wars',
        'c' => 'To establish nuclear power regulations',
        'd' => 'To promote industrialization',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which major war was fought between North and South Vietnam from 1955 to 1975?',
        'a' => 'Vietnam War',
        'b' => 'Korean War',
        'c' => 'Gulf War',
        'd' => 'Sino-Japanese War',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the first president of the United States?',
        'a' => 'Abraham Lincoln',
        'b' => 'George Washington',
        'c' => 'John Adams',
        'd' => 'Thomas Jefferson',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
        
        'question' => 'What year did the United States land the first human on the moon?',
        'a' => '1969',
        'b' => '1963',
        'c' => '1972',
        'd' => '1957',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the leader of the Soviet Union during the Cuban Missile Crisis?',
        'a' => 'Joseph Stalin',
        'b' => 'Leonid Brezhnev',
        'c' => 'Nikita Khrushchev',
        'd' => 'Mikhail Gorbachev',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which U.S. president resigned due to the Watergate scandal?',
        'a' => 'Lyndon B. Johnson',
        'b' => 'Gerald Ford',
        'c' => 'Richard Nixon',
        'd' => 'Jimmy Carter',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which African country gained independence from Britain in 1960, becoming the most populous country on the continent?',
        'a' => 'Nigeria',
        'b' => 'South Africa',
        'c' => 'Ghana',
        'd' => 'Egypt',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'The attack on Pearl Harbor by Japan led to which country’s entry into World War II?',
        'a' => 'Germany',
        'b' => 'Soviet Union',
        'c' => 'United States',
        'd' => 'United Kingdom',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What was the name of the economic plan to rebuild Europe after World War II?',
        'a' => 'New Deal',
        'b' => 'Marshall Plan',
        'c' => 'Truman Doctrine',
        'd' => 'League of Nations',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which European dictator was overthrown and executed in 1945?',
        'a' => 'Adolf Hitler',
        'b' => 'Benito Mussolini',
        'c' => 'Joseph Stalin',
        'd' => 'Francisco Franco',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which global conflict was known as "The Great War" before World War II?',
        'a' => 'World War I',
        'b' => 'Napoleonic Wars',
        'c' => 'Franco-Prussian War',
        'd' => 'Crimean War',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which country was reunified in 1990 after being divided into East and West for nearly 50 years?',
        'a' => 'Korea',
        'b' => 'Vietnam',
        'c' => 'Germany',
        'd' => 'Yugoslavia',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who was the U.S. president during the majority of the American Civil War?',
        'a' => 'Andrew Johnson',
        'b' => 'Abraham Lincoln',
        'c' => 'Ulysses S. Grant',
        'd' => 'James Buchanan',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],


    [
        'field_id' => 7,
        
        'question' => 'Who painted the famous artwork "Starry Night"?',
        'a' => 'Claude Monet',
        'b' => 'Vincent van Gogh',
        'c' => 'Pablo Picasso',
        'd' => 'Leonardo da Vinci',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which ancient civilization is known for building the Great Pyramids of Giza?',
        'a' => 'Egyptians',
        'b' => 'Greeks',
        'c' => 'Romans',
        'd' => 'Mayans',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'The painting "The Last Supper" was created by which Renaissance artist?',
        'a' => 'Donatello',
        'b' => 'Michelangelo',
        'c' => 'Raphael',
        'd' => 'Leonardo da Vinci',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What movement is associated with the works of Salvador Dalí?',
        'a' => 'Cubism',
        'b' => 'Surrealism',
        'c' => 'Baroque',
        'd' => 'Impressionism',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'The famous sculpture "David" was crafted by which Italian artist?',
        'a' => 'Leonardo da Vinci',
        'b' => 'Michelangelo',
        'c' => 'Donatello',
        'd' => 'Raphael',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What art style is Jackson Pollock most known for?',
        'a' => 'Abstract Expressionism',
        'b' => 'Romanticism',
        'c' => 'Realism',
        'd' => 'Neoclassicism',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which of these artists is famous for the painting "The Persistence of Memory"?',
        'a' => 'Salvador Dalí',
        'b' => 'Henri Matisse',
        'c' => 'Pablo Picasso',
        'd' => 'Edvard Munch',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'The art movement known as "Impressionism" originated in which country?',
        'a' => 'Germany',
        'b' => 'France',
        'c' => 'Spain',
        'd' => 'Italy',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artist is known for the ceiling fresco of the Sistine Chapel?',
        'a' => 'Leonardo da Vinci',
        'b' => 'Raphael',
        'c' => 'Michelangelo',
        'd' => 'Titian',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'The "Mona Lisa" is a famous artwork created by which artist?',
        'a' => 'Vincent van Gogh',
        'b' => 'Pablo Picasso',
        'c' => 'Leonardo da Vinci',
        'd' => 'Michelangelo',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
        
        'question' => 'Which artist is famous for the painting "Guernica"?',
        'a' => 'Pablo Picasso',
        'b' => 'Claude Monet',
        'c' => 'Edvard Munch',
        'd' => 'Henri Matisse',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who is considered the father of modern sculpture?',
        'a' => 'Donatello',
        'b' => 'Auguste Rodin',
        'c' => 'Gian Lorenzo Bernini',
        'd' => 'Antonio Canova',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which of these artists was a leader in the Cubist movement?',
        'a' => 'Vincent van Gogh',
        'b' => 'Claude Monet',
        'c' => 'Pablo Picasso',
        'd' => 'Rembrandt',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What famous artist is known for his "Blue Period"?',
        'a' => 'Pablo Picasso',
        'b' => 'Vincent van Gogh',
        'c' => 'Salvador Dalí',
        'd' => 'Henri Matisse',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artist is famous for the series of paintings of "Water Lilies"?',
        'a' => 'Paul Cézanne',
        'b' => 'Claude Monet',
        'c' => 'Pablo Picasso',
        'd' => 'Georges Seurat',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which Renaissance artist painted "The Birth of Venus"?',
        'a' => 'Titian',
        'b' => 'Botticelli',
        'c' => 'Leonardo da Vinci',
        'd' => 'Raphael',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which art movement is Georges Seurat associated with?',
        'a' => 'Cubism',
        'b' => 'Pointillism',
        'c' => 'Impressionism',
        'd' => 'Surrealism',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artist is famous for his "Self-Portrait with Bandaged Ear"?',
        'a' => 'Paul Gauguin',
        'b' => 'Vincent van Gogh',
        'c' => 'Paul Cézanne',
        'd' => 'Edvard Munch',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which movement is Andy Warhol most closely associated with?',
        'a' => 'Pop Art',
        'b' => 'Surrealism',
        'c' => 'Dadaism',
        'd' => 'Expressionism',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which painter is known for his "Sunflowers" series?',
        'a' => 'Claude Monet',
        'b' => 'Vincent van Gogh',
        'c' => 'Paul Gauguin',
        'd' => 'Henri Matisse',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
        
        'question' => 'Which famous artist painted "The Persistence of Memory"?',
        'a' => 'René Magritte',
        'b' => 'Pablo Picasso',
        'c' => 'Salvador Dalí',
        'd' => 'Max Ernst',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who painted the ceiling of the Sistine Chapel?',
        'a' => 'Leonardo da Vinci',
        'b' => 'Raphael',
        'c' => 'Michelangelo',
        'd' => 'Donatello',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artist is known for the painting "The Scream"?',
        'a' => 'Claude Monet',
        'b' => 'Edvard Munch',
        'c' => 'Henri Matisse',
        'd' => 'Paul Cézanne',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which famous French artist painted "Liberty Leading the People"?',
        'a' => 'Édouard Manet',
        'b' => 'Eugène Delacroix',
        'c' => 'Jean-Auguste-Dominique Ingres',
        'd' => 'Jacques-Louis David',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artist is known for the "Four Seasons" series?',
        'a' => 'Pieter Bruegel the Elder',
        'b' => 'Hieronymus Bosch',
        'c' => 'Giotto',
        'd' => 'Albrecht Dürer',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which Spanish artist is associated with the surrealist movement?',
        'a' => 'Pablo Picasso',
        'b' => 'Francisco Goya',
        'c' => 'Salvador Dalí',
        'd' => 'Joan Miró',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which 17th-century artist is famous for his "Night Watch" painting?',
        'a' => 'Johannes Vermeer',
        'b' => 'Rembrandt',
        'c' => 'Diego Velázquez',
        'd' => 'Caravaggio',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artist painted "Girl with a Pearl Earring"?',
        'a' => 'Johannes Vermeer',
        'b' => 'Rembrandt',
        'c' => 'Caravaggio',
        'd' => 'Peter Paul Rubens',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which American artist is known for the painting "Whistler’s Mother"?',
        'a' => 'Grant Wood',
        'b' => 'James McNeill Whistler',
        'c' => 'Edward Hopper',
        'd' => 'Jackson Pollock',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which Baroque artist painted "The Calling of Saint Matthew"?',
        'a' => 'Diego Velázquez',
        'b' => 'Peter Paul Rubens',
        'c' => 'Caravaggio',
        'd' => 'Rembrandt',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
        
        'question' => 'Which artist is known for the "Campbell’s Soup Cans" series?',
        'a' => 'Andy Warhol',
        'b' => 'Roy Lichtenstein',
        'c' => 'Jasper Johns',
        'd' => 'Robert Rauschenberg',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who painted "The Birth of Venus"?',
        'a' => 'Leonardo da Vinci',
        'b' => 'Raphael',
        'c' => 'Sandro Botticelli',
        'd' => 'Michelangelo',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artist is associated with the "Fauvism" movement?',
        'a' => 'Henri Matisse',
        'b' => 'Gustav Klimt',
        'c' => 'Marc Chagall',
        'd' => 'Egon Schiele',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artist is known for his "Water Lilies" series?',
        'a' => 'Claude Monet',
        'b' => 'Édouard Manet',
        'c' => 'Pierre-Auguste Renoir',
        'd' => 'Camille Pissarro',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artist painted "The School of Athens"?',
        'a' => 'Raphael',
        'b' => 'Leonardo da Vinci',
        'c' => 'Michelangelo',
        'd' => 'Titian',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which surrealist artist created the work "The Elephants"?',
        'a' => 'Max Ernst',
        'b' => 'Salvador Dalí',
        'c' => 'René Magritte',
        'd' => 'Joan Miró',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artist is known for the "Les Demoiselles d’Avignon" painting?',
        'a' => 'Pablo Picasso',
        'b' => 'Henri Matisse',
        'c' => 'Georges Braque',
        'd' => 'Juan Gris',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artist created the sculpture "David" during the Renaissance?',
        'a' => 'Michelangelo',
        'b' => 'Donatello',
        'c' => 'Gian Lorenzo Bernini',
        'd' => 'Lorenzo Ghiberti',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which American artist is known for the painting "American Gothic"?',
        'a' => 'Grant Wood',
        'b' => 'Edward Hopper',
        'c' => 'Jackson Pollock',
        'd' => 'Georgia O’Keeffe',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artist is famous for his "Campbell’s Soup Cans" series?',
        'a' => 'Andy Warhol',
        'b' => 'Roy Lichtenstein',
        'c' => 'Jasper Johns',
        'd' => 'Robert Rauschenberg',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
        
        'question' => 'Which artist painted "The Persistence of Memory"?',
        'a' => 'Salvador Dalí',
        'b' => 'Marc Chagall',
        'c' => 'Pablo Picasso',
        'd' => 'René Magritte',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who is known for the sculpture "The Thinker"?',
        'a' => 'Alberto Giacometti',
        'b' => 'Henry Moore',
        'c' => 'Auguste Rodin',
        'd' => 'Gian Lorenzo Bernini',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artist is famous for the painting "Starry Night"?',
        'a' => 'Paul Cézanne',
        'b' => 'Henri Toulouse-Lautrec',
        'c' => 'Vincent van Gogh',
        'd' => 'Edvard Munch',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artist is known for his work "The Scream"?',
        'a' => 'Egon Schiele',
        'b' => 'Gustav Klimt',
        'c' => 'Edvard Munch',
        'd' => 'Franz Marc',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who painted "The Girl with a Pearl Earring"?',
        'a' => 'Francis Bacon',
        'b' => 'Johannes Vermeer',
        'c' => 'Jan van Eyck',
        'd' => 'Rembrandt',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artist is known for the mural "Guernica"?',
        'a' => 'Diego Rivera',
        'b' => 'Pablo Picasso',
        'c' => 'David Alfaro Siqueiros',
        'd' => 'José Clemente Orozco',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which global movement is associated with Jackson Pollock?',
        'a' => 'Surrealism',
        'b' => 'Cubism',
        'c' => 'Abstract Expressionism',
        'd' => 'Pop Art',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artist created the "Nighthawks" painting?',
        'a' => 'Grant Wood',
        'b' => 'James Whistler',
        'c' => 'Edward Hopper',
        'd' => 'Georgia O’Keeffe',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artist is famous for the "Mona Lisa"?',
        'a' => 'Titian',
        'b' => 'Caravaggio',
        'c' => 'Leonardo da Vinci',
        'd' => 'Raphael',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who painted "The Last Supper"?',
        'a' => 'Michelangelo',
        'b' => 'Fra Angelico',
        'c' => 'Leonardo da Vinci',
        'd' => 'Giotto',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artist is known for the painting "The Persistence of Memory"?',
        'a' => 'Joan Miró',
        'b' => 'Salvador Dalí',
        'c' => 'Max Ernst',
        'd' => 'René Magritte',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
        
        'question' => 'Which artist painted "The Birth of Venus"?',
        'a' => 'Sandro Botticelli',
        'b' => 'Leonardo da Vinci',
        'c' => 'Raphael',
        'd' => 'Michelangelo',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artist is known for "The School of Athens"?',
        'a' => 'Pieter Bruegel',
        'b' => 'Raphael',
        'c' => 'Titian',
        'd' => 'Caravaggio',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who painted "The Arnolfini Portrait"?',
        'a' => 'Jan van Eyck',
        'b' => 'Hieronymus Bosch',
        'c' => 'Albrecht Dürer',
        'd' => 'Lucas Cranach the Elder',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artist is associated with the "Blue Period"?',
        'a' => 'Henri Matisse',
        'b' => 'Pablo Picasso',
        'c' => 'Claude Monet',
        'd' => 'Paul Gauguin',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which movement is Salvador Dalí associated with?',
        'a' => 'Surrealism',
        'b' => 'Cubism',
        'c' => 'Impressionism',
        'd' => 'Fauvism',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who created the "David" statue, a Renaissance masterpiece?',
        'a' => 'Donatello',
        'b' => 'Michelangelo',
        'c' => 'Gian Lorenzo Bernini',
        'd' => 'Alessandro Algardi',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artist painted "The Last Judgment" on the altar wall of the Sistine Chapel?',
        'a' => 'Raphael',
        'b' => 'Michelangelo',
        'c' => 'Leonardo da Vinci',
        'd' => 'Giotto',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who painted "The Night Watch"?',
        'a' => 'Rembrandt',
        'b' => 'Vermeer',
        'c' => 'Goya',
        'd' => 'Rubens',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artist created the "Water Lilies" series?',
        'a' => 'Paul Cézanne',
        'b' => 'Claude Monet',
        'c' => 'Henri Matisse',
        'd' => 'Édouard Manet',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artist is known for the painting "The Kiss"?',
        'a' => 'Gustav Klimt',
        'b' => 'Egon Schiele',
        'c' => 'Franz Marc',
        'd' => 'Wassily Kandinsky',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
        
        'question' => 'Which artist is known for his use of light and shadow, especially in his works such as "The Calling of Saint Matthew"?',
        'a' => 'Rembrandt',
        'b' => 'Caravaggio',
        'c' => 'Vermeer',
        'd' => 'Titian',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who is the artist behind the painting "The Persistence of Memory"?',
        'a' => 'Joan Miró',
        'b' => 'Pablo Picasso',
        'c' => 'Max Ernst',
        'd' => 'Salvador Dalí',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artist created "The Birth of Venus" and is considered a master of the Early Renaissance?',
        'a' => 'Leonardo da Vinci',
        'b' => 'Donatello',
        'c' => 'Sandro Botticelli',
        'd' => 'Raphael',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What is the name of the technique where artists use small dots of color to create a larger image, as seen in Georges Seurat’s work?',
        'a' => 'Fauvism',
        'b' => 'Pointillism',
        'c' => 'Expressionism',
        'd' => 'Impressionism',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who painted "Guernica," a powerful anti-war statement?',
        'a' => 'Diego Rivera',
        'b' => 'Francisco de Goya',
        'c' => 'Pablo Picasso',
        'd' => 'Joan Miró',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which art movement is characterized by the use of bright colors and bold brush strokes, as seen in works by artists like Henri Matisse?',
        'a' => 'Cubism',
        'b' => 'Fauvism',
        'c' => 'Surrealism',
        'd' => 'Impressionism',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which famous artist created the "Mona Lisa"?',
        'a' => 'Michelangelo',
        'b' => 'Raphael',
        'c' => 'Leonardo da Vinci',
        'd' => 'Titian',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artist is known for his detailed and emotive paintings such as "The Scream"?',
        'a' => 'Gustav Klimt',
        'b' => 'Egon Schiele',
        'c' => 'Henri Toulouse-Lautrec',
        'd' => 'Edvard Munch',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who is known for the innovative use of perspective in works such as "The Last Supper"?',
        'a' => 'Titian',
        'b' => 'Leonardo da Vinci',
        'c' => 'Raphael',
        'd' => 'Caravaggio',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artist is celebrated for his work in the Abstract Expressionist movement, with pieces like "No. 5, 1948"?',
        'a' => 'Mark Rothko',
        'b' => 'Clyfford Still',
        'c' => 'Jackson Pollock',
        'd' => 'Willem de Kooning',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
        
        'question' => 'Who painted the "Mona Lisa"?',
        'a' => 'Vincent van Gogh',
        'b' => 'Leonardo da Vinci',
        'c' => 'Pablo Picasso',
        'd' => 'Claude Monet',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which art movement is Pablo Picasso associated with?',
        'a' => 'Impressionism',
        'b' => 'Cubism',
        'c' => 'Baroque',
        'd' => 'Surrealism',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'The "Starry Night" was painted by which artist?',
        'a' => 'Salvador Dalí',
        'b' => 'Claude Monet',
        'c' => 'Vincent van Gogh',
        'd' => 'Henri Matisse',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artist is known for the "Creation of Adam" fresco?',
        'a' => 'Michelangelo',
        'b' => 'Raphael',
        'c' => 'Titian',
        'd' => 'Caravaggio',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What is the name of the famous sculpture by Auguste Rodin?',
        'a' => 'The Thinker',
        'b' => 'David',
        'c' => 'The Kiss',
        'd' => 'Venus de Milo',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which period is characterized by the use of vibrant colors and dynamic movement?',
        'a' => 'Renaissance',
        'b' => 'Baroque',
        'c' => 'Romanticism',
        'd' => 'Realism',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What style is characterized by exaggerated forms and colors to express emotions?',
        'a' => 'Expressionism',
        'b' => 'Impressionism',
        'c' => 'Post-Impressionism',
        'd' => 'Art Nouveau',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artist created the "Girl with a Pearl Earring"?',
        'a' => 'Rembrandt',
        'b' => 'Johannes Vermeer',
        'c' => 'Gustav Klimt',
        'd' => 'Jan van Eyck',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What is the name of the art movement that focused on depicting everyday scenes of working-class life?',
        'a' => 'Surrealism',
        'b' => 'Realism',
        'c' => 'Cubism',
        'd' => 'Fauvism',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which art movement is known for its use of geometric shapes and abstract forms?',
        'a' => 'Fauvism',
        'b' => 'Cubism',
        'c' => 'Expressionism',
        'd' => 'Dada',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who painted the "Birth of Venus"?',
        'a' => 'Sandro Botticelli',
        'b' => 'Leonardo da Vinci',
        'c' => 'Raphael',
        'd' => 'Michelangelo',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],


    [
        'field_id' => 7,
        
        'question' => 'Which artist is famous for the "Water Lilies" series?',
        'a' => 'Paul Cézanne',
        'b' => 'Claude Monet',
        'c' => 'Henri Toulouse-Lautrec',
        'd' => 'Georges Seurat',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'The "Persistence of Memory" is a famous painting by which artist?',
        'a' => 'René Magritte',
        'b' => 'Joan Miró',
        'c' => 'Salvador Dalí',
        'd' => 'Max Ernst',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What art movement is associated with Jackson Pollock?',
        'a' => 'Pop Art',
        'b' => 'Surrealism',
        'c' => 'Abstract Expressionism',
        'd' => 'Minimalism',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artist created "The School of Athens"?',
        'a' => 'Leonardo da Vinci',
        'b' => 'Michelangelo',
        'c' => 'Raphael',
        'd' => 'Titian',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which movement is known for its use of bright colors and simplified forms?',
        'a' => 'Realism',
        'b' => 'Fauvism',
        'c' => 'Baroque',
        'd' => 'Renaissance',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who painted "The Last Supper"?',
        'a' => 'Michelangelo',
        'b' => 'Raphael',
        'c' => 'Leonardo da Vinci',
        'd' => 'Donatello',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What style of painting is characterized by its depiction of everyday life and scenes of the working class?',
        'a' => 'Impressionism',
        'b' => 'Romanticism',
        'c' => 'Expressionism',
        'd' => 'Realism',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which Dutch painter is known for his "Night Watch"?',
        'a' => 'Johannes Vermeer',
        'b' => 'Frans Hals',
        'c' => 'Vincent van Gogh',
        'd' => 'Rembrandt',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'The "Birth of Venus" was created during which art period?',
        'a' => 'Baroque',
        'b' => 'Neoclassicism',
        'c' => 'Romanticism',
        'd' => 'Renaissance',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who is known for creating the art style called "Pointillism"?',
        'a' => 'Paul Signac',
        'b' => 'Henri Toulouse-Lautrec',
        'c' => 'Claude Monet',
        'd' => 'Georges Seurat',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 7,
        
        'question' => 'Which artist is known for the "Guernica" mural?',
        'a' => 'Pablo Picasso',
        'b' => 'Marc Chagall',
        'c' => 'Salvador Dalí',
        'd' => 'Juan Gris',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'What art movement is associated with Andy Warhol?',
        'a' => 'Abstract Expressionism',
        'b' => 'Pop Art',
        'c' => 'Dadaism',
        'd' => 'Cubism',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artist created the iconic sculpture "David" during the Renaissance?',
        'a' => 'Michelangelo',
        'b' => 'Donatello',
        'c' => 'Gian Lorenzo Bernini',
        'd' => 'Leonardo da Vinci',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'The "Scream" is a famous painting by which artist?',
        'a' => 'Edvard Munch',
        'b' => 'Gustav Klimt',
        'c' => 'Henri Matisse',
        'd' => 'Marc Chagall',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which French artist is known for "The Starry Night"?',
        'a' => 'Paul Cézanne',
        'b' => 'Claude Monet',
        'c' => 'Gustav Klimt',
        'd' => 'Vincent van Gogh',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artist is renowned for his work in the Surrealist movement, especially the painting "The Elephants"?',
        'a' => 'Salvador Dalí',
        'b' => 'René Magritte',
        'c' => 'Max Ernst',
        'd' => 'Joan Miró',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which movement is characterized by its emphasis on the use of geometric shapes and abstraction?',
        'a' => 'Cubism',
        'b' => 'Fauvism',
        'c' => 'Impressionism',
        'd' => 'Expressionism',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Who is known for the painting "Girl with a Pearl Earring"?',
        'a' => 'Rembrandt',
        'b' => 'Johannes Vermeer',
        'c' => 'Jan Steen',
        'd' => 'Frans Hals',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artist is known for the sculpture "The Thinker"?',
        'a' => 'Auguste Rodin',
        'b' => 'Constantin Brâncuși',
        'c' => 'Alberto Giacometti',
        'd' => 'Henry Moore',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 7,
        
        'question' => 'Which artistic style is characterized by its use of elongated forms and emotional expression?',
        'a' => 'Art Nouveau',
        'b' => 'Baroque',
        'c' => 'Expressionism',
        'd' => 'Rococo',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

        ];

        DB::table('questions')->insert($questions);
    }
}