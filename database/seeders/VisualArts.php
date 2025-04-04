<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class VisualArts extends Seeder
{
    /**
     * Run the database seeds.
     */
    public static function run(): void
    {
        $questions = [

       
    [
        'field_id' => 9,
        
        'question' => 'Which artist is known for painting the "Mona Lisa"?',
        'a' => 'Leonardo da Vinci',
        'b' => 'Michelangelo',
        'c' => 'Raphael',
        'd' => 'Caravaggio',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which famous painting depicts a starry night sky over a small town?',
        'a' => 'The Persistence of Memory',
        'b' => 'The Scream',
        'c' => 'Starry Night',
        'd' => 'Guernica',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which artist is known for the painting "The Birth of Venus"?',
        'a' => 'Sandro Botticelli',
        'b' => 'Titian',
        'c' => 'Giorgione',
        'd' => 'Donatello',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Who painted the famous work "The Persistence of Memory"?',
        'a' => 'Pablo Picasso',
        'b' => 'Salvador Dalí',
        'c' => 'Joan Miró',
        'd' => 'Henri Matisse',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which painting is an iconic example of the Surrealist movement?',
        'a' => 'Girl with a Pearl Earring',
        'b' => 'The Persistence of Memory',
        'c' => 'Water Lilies',
        'd' => 'The Hay Wain',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which painter is famous for his series of Water Lilies paintings?',
        'a' => 'Claude Monet',
        'b' => 'Édouard Manet',
        'c' => 'Pierre-Auguste Renoir',
        'd' => 'Paul Cézanne',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which artist painted the "The Last Supper"?',
        'a' => 'Leonardo da Vinci',
        'b' => 'Michelangelo',
        'c' => 'Raphael',
        'd' => 'Titian',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which famous painting by Edvard Munch depicts a figure with an agonized expression?',
        'a' => 'The Scream',
        'b' => 'Starry Night',
        'c' => 'The Kiss',
        'd' => 'American Gothic',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which painting style is characterized by small, thin, yet visible brush strokes that emphasize light?',
        'a' => 'Baroque',
        'b' => 'Impressionism',
        'c' => 'Cubism',
        'd' => 'Surrealism',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which painter is known for cubist works such as "Les Demoiselles d’Avignon"?',
        'a' => 'Paul Gauguin',
        'b' => 'Pablo Picasso',
        'c' => 'Georges Braque',
        'd' => 'Edgar Degas',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 9,
        
        'question' => 'Which artist painted "The Girl with a Pearl Earring"?',
        'a' => 'Johannes Vermeer',
        'b' => 'Rembrandt',
        'c' => 'Caravaggio',
        'd' => 'Peter Paul Rubens',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Who is considered one of the pioneers of abstract art, known for his "Composition" series?',
        'a' => 'Piet Mondrian',
        'b' => 'Jackson Pollock',
        'c' => 'Paul Klee',
        'd' => 'Wassily Kandinsky',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which artist is famous for his "Blue Period" paintings?',
        'a' => 'Vincent van Gogh',
        'b' => 'Pablo Picasso',
        'c' => 'Henri Matisse',
        'd' => 'Georges Seurat',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which French artist painted "The Luncheon on the Grass"?',
        'a' => 'Claude Monet',
        'b' => 'Édouard Manet',
        'c' => 'Pierre-Auguste Renoir',
        'd' => 'Edgar Degas',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which artist is known for creating works using the Pointillism technique?',
        'a' => 'Paul Cézanne',
        'b' => 'Georges Seurat',
        'c' => 'Paul Gauguin',
        'd' => 'Vincent van Gogh',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which painting technique involves the use of light and shadow to create the illusion of depth?',
        'a' => 'Sfumato',
        'b' => 'Impasto',
        'c' => 'Chiaroscuro',
        'd' => 'Fresco',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which Spanish painter is known for the masterpiece "Guernica"?',
        'a' => 'Salvador Dalí',
        'b' => 'Joan Miró',
        'c' => 'Pablo Picasso',
        'd' => 'Diego Velázquez',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which Renaissance painter is known for the ceiling of the Sistine Chapel?',
        'a' => 'Michelangelo',
        'b' => 'Raphael',
        'c' => 'Leonardo da Vinci',
        'd' => 'Donatello',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which painting style was pioneered by artists like Claude Monet and Edgar Degas?',
        'a' => 'Impressionism',
        'b' => 'Expressionism',
        'c' => 'Cubism',
        'd' => 'Futurism',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which artist painted "Las Meninas," a famous depiction of the Spanish royal family?',
        'a' => 'Francisco Goya',
        'b' => 'Diego Velázquez',
        'c' => 'El Greco',
        'd' => 'Bartolomé Esteban Murillo',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 9,
        
        'question' => 'Which Dutch artist is famous for his painting "The Night Watch"?',
        'a' => 'Rembrandt',
        'b' => 'Johannes Vermeer',
        'c' => 'Vincent van Gogh',
        'd' => 'Frans Hals',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Who painted the iconic "The Birth of Venus"?',
        'a' => 'Sandro Botticelli',
        'b' => 'Leonardo da Vinci',
        'c' => 'Raphael',
        'd' => 'Titian',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which artist is known for his swirling, emotional work "Starry Night"?',
        'a' => 'Paul Gauguin',
        'b' => 'Vincent van Gogh',
        'c' => 'Claude Monet',
        'd' => 'Georges Seurat',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which Italian painter is known for his frescoes in the Vatican, including "The School of Athens"?',
        'a' => 'Michelangelo',
        'b' => 'Raphael',
        'c' => 'Leonardo da Vinci',
        'd' => 'Donatello',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which famous painter created the "Water Lilies" series?',
        'a' => 'Claude Monet',
        'b' => 'Édouard Manet',
        'c' => 'Henri Rousseau',
        'd' => 'Paul Cézanne',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which painting by Edvard Munch is a famous expression of anxiety?',
        'a' => 'The Scream',
        'b' => 'Melancholy',
        'c' => 'Anxiety',
        'd' => 'The Dance of Life',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which artist is famous for the painting "The Persistence of Memory," featuring melting clocks?',
        'a' => 'Salvador Dalí',
        'b' => 'René Magritte',
        'c' => 'Joan Miró',
        'd' => 'Max Ernst',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Who was the artist behind the iconic mural "The Last Supper"?',
        'a' => 'Michelangelo',
        'b' => 'Leonardo da Vinci',
        'c' => 'Raphael',
        'd' => 'Sandro Botticelli',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which Spanish artist is known for his "Black Paintings" series?',
        'a' => 'Pablo Picasso',
        'b' => 'Salvador Dalí',
        'c' => 'Francisco Goya',
        'd' => 'El Greco',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which famous painting technique did Leonardo da Vinci use for his masterpiece "Mona Lisa"?',
        'a' => 'Sfumato',
        'b' => 'Impasto',
        'c' => 'Chiaroscuro',
        'd' => 'Fresco',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 9,
        
        'question' => 'Which painting is considered Leonardo da Vinci’s masterpiece and one of the most famous in the world?',
        'a' => 'The Last Supper',
        'b' => 'The Baptism of Christ',
        'c' => 'Mona Lisa',
        'd' => 'Vitruvian Man',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Who painted "Guernica," a powerful anti-war painting?',
        'a' => 'Joan Miró',
        'b' => 'Francisco Goya',
        'c' => 'Diego Rivera',
        'd' => 'Pablo Picasso',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which painting by Vincent van Gogh features a famous depiction of cypress trees and swirling stars?',
        'a' => 'Irises',
        'b' => 'Sunflowers',
        'c' => 'Starry Night',
        'd' => 'The Red Vineyard',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which post-impressionist artist is famous for his use of bold colors and distorted forms, as seen in "The Card Players"?',
        'a' => 'Georges Seurat',
        'b' => 'Paul Gauguin',
        'c' => 'Paul Cézanne',
        'd' => 'Édouard Manet',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which Renaissance artist painted the ceiling of the Sistine Chapel?',
        'a' => 'Leonardo da Vinci',
        'b' => 'Donatello',
        'c' => 'Michelangelo',
        'd' => 'Raphael',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which artist created the "Blue Nude" series, known for its vibrant use of color?',
        'a' => 'Henri Matisse',
        'b' => 'Pablo Picasso',
        'c' => 'Wassily Kandinsky',
        'd' => 'Paul Klee',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which artist painted the surrealist work "The Lovers," featuring two figures with covered faces?',
        'a' => 'Max Ernst',
        'b' => 'Joan Miró',
        'c' => 'René Magritte',
        'd' => 'Salvador Dalí',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which famous artwork by Pablo Picasso depicts five nude women with abstract, distorted forms?',
        'a' => 'Three Musicians',
        'b' => 'Les Demoiselles d’Avignon',
        'c' => 'Weeping Woman',
        'd' => 'Girl before a Mirror',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which famous painter is credited with the invention of Cubism, alongside Georges Braque?',
        'a' => 'Marc Chagall',
        'b' => 'Wassily Kandinsky',
        'c' => 'Pablo Picasso',
        'd' => 'Kazimir Malevich',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which Renaissance artist is famous for his painting "The Creation of Adam"?',
        'a' => 'Sandro Botticelli',
        'b' => 'Raphael',
        'c' => 'Michelangelo',
        'd' => 'Titian',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 9,
        
        'question' => 'Which artist is famous for the painting "The Persistence of Memory," featuring melting clocks?',
        'a' => 'René Magritte',
        'b' => 'Salvador Dalí',
        'c' => 'Joan Miró',
        'd' => 'Max Ernst',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which painter is known for the work "The Birth of Venus," showcasing the goddess emerging from the sea?',
        'a' => 'Leonardo da Vinci',
        'b' => 'Raphael',
        'c' => 'Sandro Botticelli',
        'd' => 'Titian',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which post-impressionist artist is famous for the painting "The Yellow House" and "Sunflowers"?',
        'a' => 'Georges Seurat',
        'b' => 'Vincent van Gogh',
        'c' => 'Paul Cézanne',
        'd' => 'Paul Gauguin',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which modernist painter is known for "The Dance" and "The Red Room"?',
        'a' => 'Henri Matisse',
        'b' => 'Pablo Picasso',
        'c' => 'Edvard Munch',
        'd' => 'Marc Chagall',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Who painted the work "Liberty Leading the People," commemorating the July Revolution of 1830?',
        'a' => 'Édouard Manet',
        'b' => 'Gustave Courbet',
        'c' => 'Eugène Delacroix',
        'd' => 'Jean-Auguste-Dominique Ingres',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which Baroque artist is known for dramatic use of light and shadow, as seen in "The Calling of Saint Matthew"?',
        'a' => 'Peter Paul Rubens',
        'b' => 'Caravaggio',
        'c' => 'Diego Velázquez',
        'd' => 'Rembrandt',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which famous Spanish artist painted the "Third of May 1808," depicting the Spanish resistance to Napoleon?',
        'a' => 'Francisco Goya',
        'b' => 'El Greco',
        'c' => 'Pablo Picasso',
        'd' => 'Diego Velázquez',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which famous painting by Edvard Munch features a figure with an agonized expression against a tumultuous sky?',
        'a' => 'The Dance of Life',
        'b' => 'Starry Night',
        'c' => 'The Scream',
        'd' => 'Melancholy',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which Impressionist artist is known for his series of paintings featuring water lilies?',
        'a' => 'Pierre-Auguste Renoir',
        'b' => 'Edgar Degas',
        'c' => 'Claude Monet',
        'd' => 'Camille Pissarro',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which painter is known for his portrait of the "Girl with a Pearl Earring"?',
        'a' => 'Rembrandt',
        'b' => 'Johannes Vermeer',
        'c' => 'Frans Hals',
        'd' => 'Jan van Eyck',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 9,
        
        'question' => 'Who sculpted "David," one of the most famous Renaissance sculptures?',
        'a' => 'Donatello',
        'b' => 'Michelangelo',
        'c' => 'Gian Lorenzo Bernini',
        'd' => 'Leonardo da Vinci',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which artist is famous for sculpting "The Thinker"?',
        'a' => 'Auguste Rodin',
        'b' => 'Antoine-Louis Barye',
        'c' => 'Jean-Baptiste Carpeaux',
        'd' => 'Camille Claudel',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'The Statue of Liberty was a gift to the United States from which country?',
        'a' => 'Germany',
        'b' => 'United Kingdom',
        'c' => 'France',
        'd' => 'Italy',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which ancient Greek sculptor created the statue of Zeus at Olympia, one of the Seven Wonders of the Ancient World?',
        'a' => 'Polykleitos',
        'b' => 'Phidias',
        'c' => 'Praxiteles',
        'd' => 'Myron',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Who is the sculptor behind "The Gates of Hell," a monumental work inspired by Dante’s Inferno?',
        'a' => 'Jean-Antoine Houdon',
        'b' => 'Camille Claudel',
        'c' => 'Auguste Rodin',
        'd' => 'Antoine Bourdelle',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which sculptor is associated with the creation of the bronze statue "Winged Victory of Samothrace"?',
        'a' => 'Phidias',
        'b' => 'Paionios',
        'c' => 'Lysippos',
        'd' => 'Polykleitos',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'The "Venus de Milo," a famous ancient Greek sculpture, is believed to depict which goddess?',
        'a' => 'Aphrodite',
        'b' => 'Athena',
        'c' => 'Hera',
        'd' => 'Artemis',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which Baroque artist created the dynamic sculpture "Apollo and Daphne"?',
        'a' => 'Gian Lorenzo Bernini',
        'b' => 'Michelangelo',
        'c' => 'Alessandro Algardi',
        'd' => 'Antonio Canova',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which modern artist is famous for his "mobile" sculptures, which are kinetic and often suspended in air?',
        'a' => 'Henry Moore',
        'b' => 'Alexander Calder',
        'c' => 'Isamu Noguchi',
        'd' => 'Alberto Giacometti',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Who created the monumental sculpture of "Mount Rushmore," featuring the faces of four U.S. presidents?',
        'a' => 'Gutzon Borglum',
        'b' => 'Daniel Chester French',
        'c' => 'Frederick Hart',
        'd' => 'John Gutzon de la Mothe',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 9,
        
        'question' => 'Which sculptor is known for the minimalist sculptures "Untitled" made from steel and aluminum?',
        'a' => 'Auguste Rodin',
        'b' => 'Constantin Brâncuși',
        'c' => 'Donald Judd',
        'd' => 'Henry Moore',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Who sculpted "The Pietà," a masterpiece located in St. Peter’s Basilica, Vatican City?',
        'a' => 'Donatello',
        'b' => 'Gian Lorenzo Bernini',
        'c' => 'Michelangelo',
        'd' => 'Antonio Canova',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which artist is famous for the sculpture "The Kiss"?',
        'a' => 'Jean-Baptiste Carpeaux',
        'b' => 'Camille Claudel',
        'c' => 'Auguste Rodin',
        'd' => 'Constantin Brâncuși',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'The "Great Sphinx of Giza" is thought to depict the face of which Egyptian pharaoh?',
        'a' => 'Tutankhamun',
        'b' => 'Ramses II',
        'c' => 'Khafre',
        'd' => 'Akhenaten',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which modern sculptor is known for his abstract, biomorphic forms, including the famous "Reclining Figure"?',
        'a' => 'Jean Arp',
        'b' => 'Constantin Brâncuși',
        'c' => 'Henry Moore',
        'd' => 'David Smith',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which famous sculptor created the massive statue "Christ the Redeemer" in Rio de Janeiro?',
        'a' => 'Antoine Bourdelle',
        'b' => 'Auguste Rodin',
        'c' => 'Paul Landowski',
        'd' => 'Gutzon Borglum',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which early 20th-century sculptor is famous for his tall, thin human figures, exemplified by "Walking Man I"?',
        'a' => 'Pablo Picasso',
        'b' => 'Jean Arp',
        'c' => 'Alberto Giacometti',
        'd' => 'Henry Moore',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which Roman emperor’s likeness is depicted in the famous sculpture "Augustus of Prima Porta"?',
        'a' => 'Nero',
        'b' => 'Julius Caesar',
        'c' => 'Augustus',
        'd' => 'Trajan',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which sculptor designed the Vietnam Veterans Memorial in Washington, D.C.?',
        'a' => 'Maya Lin',
        'b' => 'Daniel Chester French',
        'c' => 'Richard Serra',
        'd' => 'Louise Bourgeois',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Who is known for creating large, vibrant balloon animal sculptures, such as "Balloon Dog"?',
        'a' => 'Damien Hirst',
        'b' => 'Jeff Koons',
        'c' => 'Takashi Murakami',
        'd' => 'Richard Serra',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 9,
        
        'question' => 'Which sculptor created "The Thinker"?',
        'a' => 'Henry Moore',
        'b' => 'Alexander Calder',
        'c' => 'Auguste Rodin',
        'd' => 'Pablo Picasso',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Who sculpted the famous bronze statue "David"?',
        'a' => 'Donatello',
        'b' => 'Bernini',
        'c' => 'Michelangelo',
        'd' => 'Gian Lorenzo',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which sculptor is known for mobile sculptures?',
        'a' => 'Barbara Hepworth',
        'b' => 'Jean Arp',
        'c' => 'Alexander Calder',
        'd' => 'Constantin Brâncuși',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Who created the massive sculpture "Mount Rushmore"?',
        'a' => 'Auguste Rodin',
        'b' => 'Henry Moore',
        'c' => 'Gutzon Borglum',
        'd' => 'Constantin Brâncuși',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which sculptor is associated with the work "Venus of Willendorf"?',
        'a' => 'Jean Arp',
        'b' => 'Henry Moore',
        'c' => 'An unknown artist',
        'd' => 'Gian Lorenzo Bernini',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which sculptor is credited with the work "Bird in Space"?',
        'a' => 'Henry Moore',
        'b' => 'Barbara Hepworth',
        'c' => 'Constantin Brâncuși',
        'd' => 'Jean Arp',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which artist sculpted "The Burghers of Calais"?',
        'a' => 'Auguste Rodin',
        'b' => 'Michelangelo',
        'c' => 'Donatello',
        'd' => 'Jean Arp',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which Renaissance sculptor created the "Rape of Proserpina"?',
        'a' => 'Leonardo da Vinci',
        'b' => 'Michelangelo',
        'c' => 'Gian Lorenzo Bernini',
        'd' => 'Donatello',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which modern artist created the giant public sculpture "Maman"?',
        'a' => 'Alexander Calder',
        'b' => 'Louise Bourgeois',
        'c' => 'Barbara Hepworth',
        'd' => 'Gian Lorenzo Bernini',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Who is known for creating "The Risen Christ"?',
        'a' => 'Michelangelo',
        'b' => 'Donatello',
        'c' => 'Leonardo da Vinci',
        'd' => 'Jean Arp',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Who sculpted the famous statue "Laocoön and His Sons"?',
        'a' => 'Donatello',
        'b' => 'Michelangelo',
        'c' => 'Hagesandros, Polydoros, and Athenodoros',
        'd' => 'Jean Arp',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which modern sculptor is known for "The Kiss"?',
        'a' => 'Pablo Picasso',
        'b' => 'Constantin Brâncuși',
        'c' => 'Auguste Rodin',
        'd' => 'Barbara Hepworth',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Who is known for the sculpture "The Ecstasy of Saint Teresa"?',
        'a' => 'Donatello',
        'b' => 'Henry Moore',
        'c' => 'Gian Lorenzo Bernini',
        'd' => 'Michelangelo',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which sculptor is known for the "Statue of Liberty"?',
        'a' => 'Jean Arp',
        'b' => 'Constantin Brâncuși',
        'c' => 'Frédéric Auguste Bartholdi',
        'd' => 'Auguste Rodin',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Who created the "Winged Victory of Samothrace"?',
        'a' => 'Praxiteles',
        'b' => 'Michelangelo',
        'c' => 'An unknown Greek sculptor',
        'd' => 'Jean Arp',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which famous sculpture represents "The Dying Gaul"?',
        'a' => 'Athenodoros',
        'b' => 'Jean Arp',
        'c' => 'An ancient Roman artist',
        'd' => 'Henry Moore',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which famous work is a large statue of the Roman Emperor Augustus?',
        'a' => 'Gian Lorenzo Bernini',
        'b' => 'Alexander Calder',
        'c' => 'Augustus of Prima Porta',
        'd' => 'Donatello',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Who sculpted "The Gates of Hell"?',
        'a' => 'Auguste Rodin',
        'b' => 'Michelangelo',
        'c' => 'Donatello',
        'd' => 'Jean Arp',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which artist is known for the monumental sculpture "Crazy Horse Memorial"?',
        'a' => 'Henry Moore',
        'b' => 'Constantin Brâncuși',
        'c' => 'Korczak Ziolkowski',
        'd' => 'Auguste Rodin',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Who created "Nike of Samothrace", a masterpiece of Hellenistic sculpture?',
        'a' => 'An unknown Greek artist',
        'b' => 'Michelangelo',
        'c' => 'Praxiteles',
        'd' => 'Jean Arp',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 9,
        
        'question' => 'Which artist is known for creating the "David" sculpture that predates Michelangelo’s version?',
        'a' => 'Jean Arp',
        'b' => 'Auguste Rodin',
        'c' => 'Donatello',
        'd' => 'Constantin Brâncuși',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Who sculpted the large outdoor installation "The Gates" in Central Park?',
        'a' => 'Jean Arp',
        'b' => 'Gian Lorenzo Bernini',
        'c' => 'Christo and Jeanne-Claude',
        'd' => 'Pablo Picasso',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which sculptor is associated with the work "The Thinker"?',
        'a' => 'Michelangelo',
        'b' => 'Donatello',
        'c' => 'Auguste Rodin',
        'd' => 'Alexander Calder',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which artist created "Bird in Space"?',
        'a' => 'Constantin Brâncuși',
        'b' => 'Jean Arp',
        'c' => 'Henry Moore',
        'd' => 'Donatello',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which of these sculptures is known as "The Little Mermaid"?',
        'a' => 'Donatello’s David',
        'b' => 'Auguste Rodin’s The Kiss',
        'c' => 'Edvard Eriksen’s The Little Mermaid',
        'd' => 'Michelangelo’s David',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Who created the famous sculpture "The Burghers of Calais"?',
        'a' => 'Michelangelo',
        'b' => 'Jean Arp',
        'c' => 'Auguste Rodin',
        'd' => 'Constantin Brâncuși',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which artist is known for the marble sculpture "The Dying Slave"?',
        'a' => 'Auguste Rodin',
        'b' => 'Jean Arp',
        'c' => 'Michelangelo',
        'd' => 'Constantin Brâncuși',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which famous sculpture is a bronze depiction of a riderless horse?',
        'a' => 'Constantin Brâncuși’s Bird in Space',
        'b' => 'Michelangelo’s David',
        'c' => 'Donatello’s Judith and Holofernes',
        'd' => 'Equestrian Statue of Marcus Aurelius',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Who created the sculpture known as "Man with a Hat"?',
        'a' => 'Pablo Picasso',
        'b' => 'Jean Arp',
        'c' => 'Alexander Calder',
        'd' => 'Auguste Rodin',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which artist created "The Gates of Paradise" reliefs?',
        'a' => 'Donatello',
        'b' => 'Constantin Brâncuși',
        'c' => 'Lorenzo Ghiberti',
        'd' => 'Michelangelo',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 9,
        
        'question' => 'Who is known for the iconic photograph "Migrant Mother"?',
        'a' => 'Edward Weston',
        'b' => 'Dorothea Lange',
        'c' => 'Ansel Adams',
        'd' => 'Imogen Cunningham',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which photographer is known for the "Afghan Girl" cover photo on National Geographic?',
        'a' => 'Henri Cartier-Bresson',
        'b' => 'Steve McCurry',
        'c' => 'Sebastião Salgado',
        'd' => 'James Nachtwey',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which artist is famous for the "The Americans" photo series?',
        'a' => 'Garry Winogrand',
        'b' => 'William Eggleston',
        'c' => 'Robert Frank',
        'd' => 'Walker Evans',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the term for a photograph that captures a subject in its natural environment?',
        'a' => 'Portrait',
        'b' => 'Landscape',
        'c' => 'Candid',
        'd' => 'Studio',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which famous photojournalist is known for the "Vietnam War" coverage?',
        'a' => 'Larry Burrows',
        'b' => 'Nick Ut',
        'c' => 'Robert Capa',
        'd' => 'Don McCullin',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the term for a photograph taken without the subject’s awareness?',
        'a' => 'Formal',
        'b' => 'Candid',
        'c' => 'Abstract',
        'd' => 'Staged',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which of these photographers is associated with the concept of "Street Photography"?',
        'a' => 'Edward Weston',
        'b' => 'Diane Arbus',
        'c' => 'Henri Cartier-Bresson',
        'd' => 'Ansel Adams',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the process of printing a photograph onto a light-sensitive surface called?',
        'a' => 'Exposing',
        'b' => 'Developing',
        'c' => 'Scanning',
        'd' => 'Editing',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which of these is known for pioneering color photography?',
        'a' => 'Cindy Sherman',
        'b' => 'Diane Arbus',
        'c' => 'William Eggleston',
        'd' => 'Ansel Adams',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which photo technique involves capturing multiple exposures in a single frame?',
        'a' => 'High Dynamic Range',
        'b' => 'Double Exposure',
        'c' => 'Panorama',
        'd' => 'Long Exposure',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which camera type is characterized by a viewfinder that shows a reflected image of the subject?',
        'a' => 'Mirrorless',
        'b' => 'Rangefinder',
        'c' => 'Single-Lens Reflex',
        'd' => 'Twin-Lens Reflex',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Who is credited with developing the first photographic process known as daguerreotype?',
        'a' => 'William Henry Fox Talbot',
        'b' => 'Joseph Nicéphore Niépce',
        'c' => 'George Eastman',
        'd' => 'Louis Daguerre',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which type of lens is commonly used for close-up photography?',
        'a' => 'Wide-Angle Lens',
        'b' => 'Telephoto Lens',
        'c' => 'Macro Lens',
        'd' => 'Fisheye Lens',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the primary purpose of a polarizing filter in photography?',
        'a' => 'Increase Depth of Field',
        'b' => 'Reduce Glare and Reflections',
        'c' => 'Enhance Color Saturation',
        'd' => 'Change Exposure Settings',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which photography technique involves using a long exposure to capture motion in a static image?',
        'a' => 'High Dynamic Range',
        'b' => 'Long Exposure',
        'c' => 'Double Exposure',
        'd' => 'Tilt-Shift',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the name of the process that converts digital images into physical prints?',
        'a' => 'Scanning',
        'b' => 'Printing',
        'c' => 'Developing',
        'd' => 'Editing',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which of these photographers is famous for capturing portraits of celebrities and cultural figures?',
        'a' => 'Annie Leibovitz',
        'b' => 'Garry Winogrand',
        'c' => 'Cindy Sherman',
        'd' => 'Robert Mapplethorpe',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the term for adjusting the brightness and contrast of a digital image?',
        'a' => 'Cropping',
        'b' => 'Editing',
        'c' => 'Exposure Compensation',
        'd' => 'Post-Processing',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which of these is a well-known type of camera used for instant photography?',
        'a' => 'Leica M3',
        'b' => 'Canon EOS 5D',
        'c' => 'Polaroid SX-70',
        'd' => 'Nikon D850',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which technique uses a special lens to create a miniature effect in photographs?',
        'a' => 'Macro Photography',
        'b' => 'Tilt-Shift Photography',
        'c' => 'Fish-Eye Photography',
        'd' => 'Panorama Photography',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which term describes the amount of light that enters the camera through the lens?',
        'a' => 'ISO',
        'b' => 'Shutter Speed',
        'c' => 'Aperture',
        'd' => 'Exposure',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 9,
        
        'question' => 'Which type of camera uses a mirror to reflect light from the lens up into the viewfinder?',
        'a' => 'Mirrorless Camera',
        'b' => 'Rangefinder Camera',
        'c' => 'Single-Lens Reflex (SLR) Camera',
        'd' => 'Twin-Lens Reflex (TLR) Camera',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the primary purpose of using a tripod in photography?',
        'a' => 'To Increase Depth of Field',
        'b' => 'To Stabilize the Camera for Sharp Images',
        'c' => 'To Adjust the Exposure',
        'd' => 'To Enhance Color Saturation',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which photographic technique involves combining multiple images to create a panoramic view?',
        'a' => 'High Dynamic Range Imaging',
        'b' => 'Stitched Panorama',
        'c' => 'Double Exposure',
        'd' => 'Focus Stacking',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the term for the amount of light sensitivity of the camera sensor?',
        'a' => 'Aperture',
        'b' => 'ISO',
        'c' => 'Shutter Speed',
        'd' => 'White Balance',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which feature in a camera allows you to control the amount of light entering the lens?',
        'a' => 'ISO Settings',
        'b' => 'Aperture',
        'c' => 'Shutter Speed',
        'd' => 'Focus',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which of these photographers is renowned for their work with environmental portraits?',
        'a' => 'Richard Avedon',
        'b' => 'Ansel Adams',
        'c' => 'Imogen Cunningham',
        'd' => 'Garry Winogrand',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the term for the process of adjusting the colors and tones in a photograph after it has been taken?',
        'a' => 'Cropping',
        'b' => 'Color Correction',
        'c' => 'Exposure Adjustment',
        'd' => 'Sharpening',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which camera accessory is used to control the light exposure on a subject?',
        'a' => 'Light Meter',
        'b' => 'Lens Hood',
        'c' => 'Tripod',
        'd' => 'Remote Shutter Release',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which photography technique involves adjusting the lens to create a shallow depth of field?',
        'a' => 'Macro Photography',
        'b' => 'Portrait Photography',
        'c' => 'Landscape Photography',
        'd' => 'Street Photography',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which element of a photograph refers to the arrangement of objects and subjects within the frame?',
        'a' => 'Focus',
        'b' => 'Composition',
        'c' => 'Exposure',
        'd' => 'Color Balance',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 9,
        
        'question' => 'Which photographic technique involves adjusting the camera settings to capture a high level of detail in both shadows and highlights?',
        'a' => 'High Dynamic Range (HDR)',
        'b' => 'Long Exposure',
        'c' => 'Panoramic Photography',
        'd' => 'Selective Focus',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What type of lens is typically used for capturing wide-angle scenes?',
        'a' => 'Telephoto Lens',
        'b' => 'Macro Lens',
        'c' => 'Wide-Angle Lens',
        'd' => 'Fish-Eye Lens',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which of these settings controls the duration the camera’s sensor is exposed to light?',
        'a' => 'Aperture',
        'b' => 'ISO',
        'c' => 'Shutter Speed',
        'd' => 'White Balance',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What does the term "bokeh" refer to in photography?',
        'a' => 'The Depth of Field',
        'b' => 'The Out-of-Focus Areas in an Image',
        'c' => 'The Contrast of the Image',
        'd' => 'The Camera Shutter Speed',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which of these is known for their use of unconventional camera angles and perspectives?',
        'a' => 'Cindy Sherman',
        'b' => 'Dorothea Lange',
        'c' => 'Man Ray',
        'd' => 'Sebastião Salgado',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which type of photography focuses on capturing subjects with very close-up detail?',
        'a' => 'Portrait Photography',
        'b' => 'Landscape Photography',
        'c' => 'Macro Photography',
        'd' => 'Architectural Photography',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the primary function of a polarizing filter in photography?',
        'a' => 'To Increase Depth of Field',
        'b' => 'To Reduce Glare and Reflections',
        'c' => 'To Adjust Color Temperature',
        'd' => 'To Enhance Contrast',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which photographer is famous for their black-and-white portraits of American celebrities in the 1960s?',
        'a' => 'Richard Avedon',
        'b' => 'Helmut Newton',
        'c' => 'Annie Leibovitz',
        'd' => 'Diane Arbus',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the purpose of a lens hood in photography?',
        'a' => 'To Improve Image Sharpness',
        'b' => 'To Prevent Lens Flare',
        'c' => 'To Stabilize the Camera',
        'd' => 'To Increase Depth of Field',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which of these photographers is best known for their work in photojournalism during the Great Depression?',
        'a' => 'Walker Evans',
        'b' => 'Henri Cartier-Bresson',
        'c' => 'Ansel Adams',
        'd' => 'Garry Winogrand',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 9,
        
        'question' => 'Which of the following is a common method for reducing camera shake during handheld shooting?',
        'a' => 'Increasing ISO',
        'b' => 'Using a Tripod',
        'c' => 'Decreasing Shutter Speed',
        'd' => 'Increasing Aperture Size',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the term for the technique of adjusting the depth of field to emphasize the subject of a photograph?',
        'a' => 'Focus Stacking',
        'b' => 'Selective Focus',
        'c' => 'Exposure Bracketing',
        'd' => 'Image Stabilization',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which type of camera sensor is commonly used in digital SLR cameras for high-quality image capture?',
        'a' => 'Full-Frame Sensor',
        'b' => 'Medium Format Sensor',
        'c' => 'APS-C Sensor',
        'd' => 'Micro Four Thirds Sensor',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which photography technique involves capturing a series of images to create a single composite photograph?',
        'a' => 'Time-Lapse Photography',
        'b' => 'Panoramic Photography',
        'c' => 'HDR Photography',
        'd' => 'Focus Stacking',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which type of photography is focused on capturing images of objects or scenes at close range with fine detail?',
        'a' => 'Architectural Photography',
        'b' => 'Fashion Photography',
        'c' => 'Macro Photography',
        'd' => 'Documentary Photography',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which of these is a characteristic feature of a tilt-shift lens?',
        'a' => 'Variable Focal Length',
        'b' => 'Adjustable Perspective',
        'c' => 'Built-in Flash',
        'd' => 'Automatic Focus Adjustment',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the technique of adjusting colors and tones in an image to correct for lighting conditions called?',
        'a' => 'Color Grading',
        'b' => 'White Balancing',
        'c' => 'Contrast Adjustment',
        'd' => 'Saturation Adjustment',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which of these is a common technique for creating a dramatic effect in portrait photography?',
        'a' => 'Backlighting',
        'b' => 'Wide Aperture',
        'c' => 'High ISO',
        'd' => 'Black and White Conversion',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which type of lens is ideal for capturing detailed images of distant subjects?',
        'a' => 'Wide-Angle Lens',
        'b' => 'Telephoto Lens',
        'c' => 'Fish-Eye Lens',
        'd' => 'Macro Lens',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which camera setting determines the amount of light that enters the camera and affects the depth of field?',
        'a' => 'Shutter Speed',
        'b' => 'Aperture',
        'c' => 'ISO',
        'd' => 'White Balance',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],


    [
        'field_id' => 9,
        
        'question' => 'Which technique involves using parallel lines to create shading in a drawing?',
        'a' => 'Hatching',
        'b' => 'Stippling',
        'c' => 'Cross-Hatching',
        'd' => 'Blending',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the term for a drawing technique that uses small dots to create texture?',
        'a' => 'Stippling',
        'b' => 'Hatching',
        'c' => 'Scumbling',
        'd' => 'Blending',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which tool is commonly used to create fine lines in pencil drawings?',
        'a' => 'Charcoal',
        'b' => 'Graphite Pencil',
        'c' => 'Ink Pen',
        'd' => 'Pastel',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which drawing technique involves creating smooth gradations between light and dark areas?',
        'a' => 'Hatching',
        'b' => 'Blending',
        'c' => 'Stippling',
        'd' => 'Cross-Hatching',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the term for a quick, loose drawing used to capture a subject’s basic shape?',
        'a' => 'Sketch',
        'b' => 'Study',
        'c' => 'Detail Drawing',
        'd' => 'Contour Drawing',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which of these is a common method for creating texture in a drawing?',
        'a' => 'Cross-Hatching',
        'b' => 'Blending',
        'c' => 'Stippling',
        'd' => 'Scumbling',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the term for drawing that involves outlining the shape of a subject without focusing on details?',
        'a' => 'Contour Drawing',
        'b' => 'Gesture Drawing',
        'c' => 'Blind Contour Drawing',
        'd' => 'Detailed Drawing',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which material is known for its use in both shading and creating fine lines in drawings?',
        'a' => 'Ink',
        'b' => 'Graphite',
        'c' => 'Charcoal',
        'd' => 'Pastel',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which technique involves using varying pressure to create different shades in a pencil drawing?',
        'a' => 'Scumbling',
        'b' => 'Blending',
        'c' => 'Hatching',
        'd' => 'Stippling',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the term for a drawing created without looking at the paper?',
        'a' => 'Contour Drawing',
        'b' => 'Gesture Drawing',
        'c' => 'Blind Contour Drawing',
        'd' => 'Detailed Drawing',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which type of drawing uses a method that emphasizes the direction and flow of lines?',
        'a' => 'Gesture Drawing',
        'b' => 'Contour Drawing',
        'c' => 'Detail Drawing',
        'd' => 'Blind Contour Drawing',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 9,
        
        'question' => 'Which technique is used to create texture by applying irregular marks in a drawing?',
        'a' => 'Scumbling',
        'b' => 'Hatching',
        'c' => 'Cross-Hatching',
        'd' => 'Blending',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which type of pencil is best for achieving a dark, rich line in drawing?',
        'a' => 'H Pencil',
        'b' => 'B Pencil',
        'c' => 'F Pencil',
        'd' => 'HB Pencil',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which drawing technique involves creating a series of intersecting lines to form a shaded area?',
        'a' => 'Stippling',
        'b' => 'Cross-Hatching',
        'c' => 'Hatching',
        'd' => 'Scumbling',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What technique involves creating a drawing by focusing on the subject’s overall shape and structure?',
        'a' => 'Gesture Drawing',
        'b' => 'Contour Drawing',
        'c' => 'Detail Drawing',
        'd' => 'Blind Contour Drawing',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which drawing medium is known for its ability to create deep blacks and rich textures?',
        'a' => 'Charcoal',
        'b' => 'Graphite',
        'c' => 'Ink',
        'd' => 'Pastel',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which technique involves using a pencil to create a smooth transition between light and dark areas?',
        'a' => 'Blending',
        'b' => 'Hatching',
        'c' => 'Stippling',
        'd' => 'Cross-Hatching',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which drawing technique is used to emphasize the flow and energy of the subject?',
        'a' => 'Gesture Drawing',
        'b' => 'Contour Drawing',
        'c' => 'Blind Contour Drawing',
        'd' => 'Detailed Drawing',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the purpose of using a kneaded eraser in drawing?',
        'a' => 'To create texture',
        'b' => 'To blend shades',
        'c' => 'To lighten areas',
        'd' => 'To sharpen lines',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which technique involves making irregular, organic marks to create texture or shading?',
        'a' => 'Scumbling',
        'b' => 'Cross-Hatching',
        'c' => 'Hatching',
        'd' => 'Stippling',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the term for a drawing made without any preliminary lines or sketches?',
        'a' => 'Direct Drawing',
        'b' => 'Contour Drawing',
        'c' => 'Gesture Drawing',
        'd' => 'Blind Contour Drawing',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which drawing technique is used to create a soft, gradual transition between light and dark areas?',
        'a' => 'Blending',
        'b' => 'Cross-Hatching',
        'c' => 'Hatching',
        'd' => 'Stippling',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 9,
        
        'question' => 'Which technique is used to create texture by applying irregular marks in a drawing?',
        'a' => 'Scumbling',
        'b' => 'Hatching',
        'c' => 'Cross-Hatching',
        'd' => 'Blending', 
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which type of pencil is best for achieving a dark, rich line in drawing?',
        'a' => 'B Pencil',
        'b' => 'H Pencil',
        'c' => 'F Pencil',
        'd' => 'HB Pencil', 
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which drawing technique involves creating a series of intersecting lines to form a shaded area?',
        'a' => 'Scumbling',
        'b' => 'Hatching',
        'c' => 'Cross-Hatching',
        'd' => 'Stippling', 
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What technique involves using a pencil to create a smooth transition between light and dark areas?',
        'a' => 'Blending',
        'b' => 'Cross-Hatching',
        'c' => 'Scumbling',
        'd' => 'Stippling', 
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which drawing medium is known for its ability to create deep blacks and rich textures?',
        'a' => 'Charcoal',
        'b' => 'Graphite',
        'c' => 'Ink',
        'd' => 'Pastel', 
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which drawing technique is used to emphasize the flow and energy of the subject?',
        'a' => 'Gesture Drawing',
        'b' => 'Contour Drawing',
        'c' => 'Blind Contour Drawing',
        'd' => 'Detailed Drawing', 
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the purpose of using a kneaded eraser in drawing?',
        'a' => 'Create texture',
        'b' => 'Blend shades',
        'c' => 'Lighten areas',
        'd' => 'Sharpen lines', 
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which of these techniques involves making irregular, organic marks to create texture or shading?',
        'a' => 'Cross-Hatching',
        'b' => 'Hatching',
        'c' => 'Stippling',
        'd' => 'Scumbling', 
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the term for a drawing made without any preliminary lines or sketches?',
        'a' => 'Direct Drawing',
        'b' => 'Contour Drawing',
        'c' => 'Gesture Drawing',
        'd' => 'Blind Contour Drawing', 
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which drawing technique is used to create a soft, gradual transition between light and dark areas?',
        'a' => 'Stippling',
        'b' => 'Cross-Hatching',
        'c' => 'Blending',
        'd' => 'Hatching', 
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which drawing technique captures a subject’s movement in a single drawing?',
        'a' => 'Detailed Drawing',
        'b' => 'Contour Drawing',
        'c' => 'Gesture Drawing',
        'd' => 'Blind Contour Drawing', 
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 9,
        
        'question' => 'Which technique involves creating texture by applying irregular marks in a drawing?',
        'a' => 'Scumbling',
        'b' => 'Hatching',
        'c' => 'Cross-Hatching',
        'd' => 'Blending', 
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which type of pencil is best for achieving a dark, rich line in drawing?',
        'a' => 'B Pencil',
        'b' => 'H Pencil',
        'c' => 'F Pencil',
        'd' => 'HB Pencil', 
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which drawing technique involves creating a series of intersecting lines to form a shaded area?',
        'a' => 'Scumbling',
        'b' => 'Hatching',
        'c' => 'Cross-Hatching',
        'd' => 'Stippling', 
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What technique involves using a pencil to create a smooth transition between light and dark areas?',
        'a' => 'Blending',
        'b' => 'Cross-Hatching',
        'c' => 'Scumbling',
        'd' => 'Stippling', 
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which drawing medium is known for its ability to create deep blacks and rich textures?',
        'a' => 'Charcoal',
        'b' => 'Graphite',
        'c' => 'Ink',
        'd' => 'Pastel', 
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which drawing technique is used to emphasize the flow and energy of the subject?',
        'a' => 'Gesture Drawing',
        'b' => 'Contour Drawing',
        'c' => 'Blind Contour Drawing',
        'd' => 'Detailed Drawing', 
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the purpose of using a kneaded eraser in drawing?',
        'a' => 'Create texture',
        'b' => 'Blend shades',
        'c' => 'Lighten areas',
        'd' => 'Sharpen lines', 
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which of these techniques involves making irregular, organic marks to create texture or shading?',
        'a' => 'Cross-Hatching',
        'b' => 'Hatching',
        'c' => 'Stippling',
        'd' => 'Scumbling', 
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the term for a drawing made without any preliminary lines or sketches?',
        'a' => 'Direct Drawing',
        'b' => 'Contour Drawing',
        'c' => 'Gesture Drawing',
        'd' => 'Blind Contour Drawing', 
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which drawing technique creates a soft, gradual transition between light and dark areas?',
        'a' => 'Stippling',
        'b' => 'Cross-Hatching',
        'c' => 'Blending',
        'd' => 'Hatching', 
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which drawing technique captures a subject’s movement in a single drawing?',
        'a' => 'Detailed Drawing',
        'b' => 'Contour Drawing',
        'c' => 'Gesture Drawing',
        'd' => 'Blind Contour Drawing', 
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 9,
        
        'question' => 'Which drawing technique involves using parallel lines to create shading?',
        'a' => 'Cross-Hatching',
        'b' => 'Scumbling',
        'c' => 'Hatching',
        'd' => 'Stippling', 
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the term for drawing using only lines without shading?',
        'a' => 'Contour Drawing',
        'b' => 'Gesture Drawing',
        'c' => 'Line Drawing',
        'd' => 'Detailed Drawing', 
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which of these is a technique for adding texture by making small dots?',
        'a' => 'Hatching',
        'b' => 'Cross-Hatching',
        'c' => 'Stippling',
        'd' => 'Blending', 
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which drawing technique uses a soft pencil to create a smooth texture?',
        'a' => 'Scumbling',
        'b' => 'Hatching',
        'c' => 'Blending',
        'd' => 'Cross-Hatching', 
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which drawing technique is used to create depth by varying the density of lines?',
        'a' => 'Hatching',
        'b' => 'Cross-Hatching',
        'c' => 'Stippling',
        'd' => 'Scumbling', 
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What tool is used to create precise and sharp lines in a drawing?',
        'a' => 'Eraser',
        'b' => 'Blending Stump',
        'c' => 'Sharpener',
        'd' => 'Pencil', 
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which type of paper is typically used for detailed pencil drawings?',
        'a' => 'Newsprint',
        'b' => 'Watercolor Paper',
        'c' => 'Bristol Board',
        'd' => 'Cardstock', 
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which technique involves drawing without lifting the pencil from the paper?',
        'a' => 'Gesture Drawing',
        'b' => 'Contour Drawing',
        'c' => 'Blind Contour Drawing',
        'd' => 'Detailed Drawing', 
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the term for the technique where the artist uses quick, expressive lines to capture the essence of the subject?',
        'a' => 'Gesture Drawing',
        'b' => 'Contour Drawing',
        'c' => 'Detailed Drawing',
        'd' => 'Blind Contour Drawing', 
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which technique uses varied pressure to create different values of tone?',
        'a' => 'Stippling',
        'b' => 'Cross-Hatching',
        'c' => 'Blending',
        'd' => 'Hatching', 
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],


    [
        'field_id' => 9,
        
        'question' => 'What term describes the visual arrangement of text and images on a page?',
        'a' => 'Layout',
        'b' => 'Typography',
        'c' => 'Color Theory',
        'd' => 'Composition',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which color model is primarily used for digital displays?',
        'a' => 'CMYK',
        'b' => 'Pantone',
        'c' => 'RGB',
        'd' => 'Lab',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What does the acronym CMYK stand for?',
        'a' => 'Cyan, Magenta, Yellow, Key (Black)',
        'b' => 'Cyan, Magenta, Yellow, Key (White)',
        'c' => 'Cobalt, Magenta, Yellow, Key (Black)',
        'd' => 'Cyan, Magenta, Yellow, Key (Green)',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which design principle involves using space to separate and organize content?',
        'a' => 'Contrast',
        'b' => 'Alignment',
        'c' => 'White Space',
        'd' => 'Repetition',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What tool is used to adjust color and tone in graphic design software?',
        'a' => 'Eraser',
        'b' => 'Gradient Tool',
        'c' => 'Brush Tool',
        'd' => 'Selection Tool',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which software is commonly used for vector graphics design?',
        'a' => 'Photoshop',
        'b' => 'Illustrator',
        'c' => 'InDesign',
        'd' => 'CorelDRAW',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which design principle is used to create a focal point in a design?',
        'a' => 'Repetition',
        'b' => 'Alignment',
        'c' => 'Contrast',
        'd' => 'Balance',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the term for the size and spacing of text characters in design?',
        'a' => 'Kerning',
        'b' => 'Tracking',
        'c' => 'Leading',
        'd' => 'Typeface',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which of the following is a principle of effective logo design?',
        'a' => 'Complexity',
        'b' => 'Readability',
        'c' => 'Scalability',
        'd' => 'Overuse of Color',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What does the term "typography" refer to in graphic design?',
        'a' => 'Image manipulation',
        'b' => 'Text design and arrangement',
        'c' => 'Color theory',
        'd' => 'Layout design',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which element is crucial for creating a balanced and harmonious design?',
        'a' => 'Contrast',
        'b' => 'Alignment',
        'c' => 'Proximity',
        'd' => 'Balance',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 9,
        
        'question' => 'What is the primary purpose of a mood board in graphic design?',
        'a' => 'To outline technical specifications',
        'b' => 'To provide a visual reference and inspiration',
        'c' => 'To create a final layout design',
        'd' => 'To determine color palettes and fonts',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which type of graphic design focuses on creating visual content for print media?',
        'a' => 'Digital Design',
        'b' => 'Web Design',
        'c' => 'Print Design',
        'd' => 'Motion Graphics',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What term describes the use of grids to organize content in a design?',
        'a' => 'Hierarchy',
        'b' => 'Modular System',
        'c' => 'Alignment',
        'd' => 'Gutter',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which design principle involves the arrangement of elements to create a sense of movement?',
        'a' => 'Contrast',
        'b' => 'Rhythm',
        'c' => 'Proximity',
        'd' => 'Balance',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the term for adjusting the size of text to fit a specific design space?',
        'a' => 'Scaling',
        'b' => 'Kerning',
        'c' => 'Leading',
        'd' => 'Tracking',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which type of typography involves the use of decorative fonts?',
        'a' => 'Serif Typography',
        'b' => 'Sans Serif Typography',
        'c' => 'Display Typography',
        'd' => 'Body Typography',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the process of selecting and arranging typefaces in design called?',
        'a' => 'Typography',
        'b' => 'Font Management',
        'c' => 'Type Design',
        'd' => 'Typeface Selection',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which file format is commonly used for high-resolution print designs?',
        'a' => 'JPEG',
        'b' => 'PNG',
        'c' => 'TIFF',
        'd' => 'GIF',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the name of the principle that helps create a sense of unity and cohesiveness in design?',
        'a' => 'Alignment',
        'b' => 'Contrast',
        'c' => 'Repetition',
        'd' => 'Proximity',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which design element involves choosing and applying colors to a design?',
        'a' => 'Color Theory',
        'b' => 'Typography',
        'c' => 'Composition',
        'd' => 'Layout',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 9,
        
        'question' => 'Which design tool is primarily used for creating vector graphics?',
        'a' => 'Photoshop',
        'b' => 'Illustrator',
        'c' => 'InDesign',
        'd' => 'Sketch',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the term for creating designs that work well on both print and digital media?',
        'a' => 'Responsive Design',
        'b' => 'Cross-Platform Design',
        'c' => 'Adaptive Design',
        'd' => 'Multichannel Design',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which design concept involves using a limited color palette to create visual harmony?',
        'a' => 'Color Blocking',
        'b' => 'Monochromatic Scheme',
        'c' => 'Analogous Colors',
        'd' => 'Triadic Colors',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the term for a design that adjusts its layout based on the screen size?',
        'a' => 'Fixed Layout',
        'b' => 'Fluid Layout',
        'c' => 'Responsive Layout',
        'd' => 'Adaptive Layout',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which principle of design emphasizes the difference between elements to create visual interest?',
        'a' => 'Contrast',
        'b' => 'Alignment',
        'c' => 'Repetition',
        'd' => 'Balance',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the primary use of a wireframe in web design?',
        'a' => 'To create detailed visual mockups',
        'b' => 'To outline the structure and layout',
        'c' => 'To select color schemes',
        'd' => 'To design graphics and illustrations',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which design method involves creating multiple variations of a concept to explore different solutions?',
        'a' => 'Prototyping',
        'b' => 'Brainstorming',
        'c' => 'A/B Testing',
        'd' => 'Sketching',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which color mode is best suited for designs intended for digital screens?',
        'a' => 'CMYK',
        'b' => 'RGB',
        'c' => 'Pantone',
        'd' => 'LAB',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which graphic design concept involves the arrangement of elements in a way that draws attention to key parts?',
        'a' => 'Hierarchy',
        'b' => 'Alignment',
        'c' => 'Repetition',
        'd' => 'Contrast',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the term for the space between lines of text in a design?',
        'a' => 'Kerning',
        'b' => 'Tracking',
        'c' => 'Leading',
        'd' => 'Margin',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which design principle involves repeating elements to create cohesion in a design?',
        'a' => 'Contrast',
        'b' => 'Repetition',
        'c' => 'Alignment',
        'd' => 'Proximity',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 9,
        
        'question' => 'Which design tool is specifically used for creating layouts and typography for print and digital media?',
        'a' => 'Illustrator',
        'b' => 'Photoshop',
        'c' => 'InDesign',
        'd' => 'Figma',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What term describes the use of visual elements to guide the viewer’s eye across a design?',
        'a' => 'Flow',
        'b' => 'Movement',
        'c' => 'Rhythm',
        'd' => 'Balance',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which graphic design term refers to the arrangement of elements within a design to create a sense of unity?',
        'a' => 'Alignment',
        'b' => 'Proximity',
        'c' => 'Balance',
        'd' => 'Repetition',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the term for the process of adjusting the space between characters in a line of text?',
        'a' => 'Kerning',
        'b' => 'Leading',
        'c' => 'Tracking',
        'd' => 'Spacing',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which color scheme uses colors that are opposite each other on the color wheel?',
        'a' => 'Analogous',
        'b' => 'Monochromatic',
        'c' => 'Complementary',
        'd' => 'Triadic',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the primary goal of using white space in graphic design?',
        'a' => 'To fill gaps in the design',
        'b' => 'To create contrast and emphasis',
        'c' => 'To add color',
        'd' => 'To increase text readability',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which design concept involves repeating elements to create a pattern or rhythm?',
        'a' => 'Contrast',
        'b' => 'Alignment',
        'c' => 'Repetition',
        'd' => 'Proximity',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the term for the visual weight distribution in a design?',
        'a' => 'Contrast',
        'b' => 'Balance',
        'c' => 'Hierarchy',
        'd' => 'Alignment',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which software is commonly used for vector-based graphic design?',
        'a' => 'Photoshop',
        'b' => 'InDesign',
        'c' => 'Illustrator',
        'd' => 'After Effects',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the practice of creating multiple design concepts to choose the best solution called?',
        'a' => 'Prototyping',
        'b' => 'Sketching',
        'c' => 'Iteration',
        'd' => 'Wireframing',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which term describes the visual strategy of using different types of fonts to create visual interest?',
        'a' => 'Typography',
        'b' => 'Font Pairing',
        'c' => 'Contrast',
        'd' => 'Hierarchy',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 9,
        
        'question' => 'What is the primary purpose of a mood board in graphic design?',
        'a' => 'To finalize the design',
        'b' => 'To gather visual inspiration and direction',
        'c' => 'To create a color palette',
        'd' => 'To test design elements',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the term for the use of a grid system to organize content in a design?',
        'a' => 'Layout',
        'b' => 'Composition',
        'c' => 'Alignment',
        'd' => 'Grid Structure',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which design principle involves creating a visual hierarchy to guide the viewer’s attention?',
        'a' => 'Contrast',
        'b' => 'Alignment',
        'c' => 'Hierarchy',
        'd' => 'Repetition',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What term describes the visual impact created by placing elements in contrasting colors or sizes?',
        'a' => 'Contrast',
        'b' => 'Emphasis',
        'c' => 'Balance',
        'd' => 'Proximity',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which design software is commonly used for web and interface design?',
        'a' => 'Sketch',
        'b' => 'Illustrator',
        'c' => 'InDesign',
        'd' => 'Photoshop',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the term for the art of arranging type in a visually appealing way?',
        'a' => 'Lettering',
        'b' => 'Typography',
        'c' => 'Font Design',
        'd' => 'Calligraphy',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which color model is used for digital screens and web design?',
        'a' => 'CMYK',
        'b' => 'Pantone',
        'c' => 'RGB',
        'd' => 'Lab',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What is the term for a preliminary drawing or sketch of a design layout?',
        'a' => 'Mockup',
        'b' => 'Prototype',
        'c' => 'Wireframe',
        'd' => 'Storyboard',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which principle of design is concerned with the visual weight distribution in a composition?',
        'a' => 'Repetition',
        'b' => 'Alignment',
        'c' => 'Balance',
        'd' => 'Contrast',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'What design term refers to the consistency of visual elements throughout a design project?',
        'a' => 'Uniformity',
        'b' => 'Consistency',
        'c' => 'Alignment',
        'd' => 'Contrast',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 9,
        
        'question' => 'Which technique involves creating a visual flow by arranging elements in a deliberate manner?',
        'a' => 'Movement',
        'b' => 'Hierarchy',
        'c' => 'Alignment',
        'd' => 'Proximity',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],






        ];
        
        DB::table('questions')->insert($questions);

    }
}
