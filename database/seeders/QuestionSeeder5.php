<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class QuestionSeeder5 extends Seeder
{
    /**
     * Run the database seeds.
     */
    static   public function run(): void
    {
        $questions =    [
            [
                'field_id' => 5,
               
                'question' => 'What is the primary purpose of reinforcement in concrete structures?',
                'a' => 'To increase thermal resistance',
                'b' => 'To improve aesthetic appeal',
                'c' => 'To enhance tensile strength',
                'd' => 'To reduce weight',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 5,
               
                'question' => 'Which type of bridge uses cables suspended between towers to support the bridge deck?',
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
               
                'question' => 'What is the main function of a retaining wall?',
                'a' => 'To support vertical loads',
                'b' => 'To prevent soil erosion',
                'c' => 'To provide drainage',
                'd' => 'To enhance landscaping',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 5,
               
                'question' => 'Which type of soil has the highest permeability?',
                'a' => 'Clay',
                'b' => 'Silt',
                'c' => 'Sand',
                'd' => 'Gravel',
                'answer' => 'd',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 5,
               
                'question' => 'What does the term "dead load" refer to in structural engineering?',
                'a' => 'Temporary loads during construction',
                'b' => 'Live loads due to occupancy',
                'c' => 'Permanent static loads',
                'd' => 'Loads from environmental factors',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 5,
               
                'question' => 'Which material is commonly used for road surface construction?',
                'a' => 'Concrete',
                'b' => 'Asphalt',
                'c' => 'Granite',
                'd' => 'Marble',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 5,
               
                'question' => 'What is the purpose of a cantilever in structural design?',
                'a' => 'To create vertical support',
                'b' => 'To distribute loads evenly',
                'c' => 'To extend structures without external bracing',
                'd' => 'To provide aesthetic appeal',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 5,
               
                'question' => 'Which test is used to determine the compressive strength of concrete?',
                'a' => 'Tensile test',
                'b' => 'Slump test',
                'c' => 'Compression test',
                'd' => 'Shear test',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 5,
               
                'question' => 'What is the purpose of a survey in civil engineering?',
                'a' => 'To estimate project costs',
                'b' => 'To assess environmental impact',
                'c' => 'To map and measure land features',
                'd' => 'To design structural elements',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 5,
               
                'question' => 'Which factor is most critical in the design of a foundation?',
                'a' => 'Color of the soil',
                'b' => 'Type of construction materials',
                'c' => 'Load-bearing capacity of the soil',
                'd' => 'Proximity to water sources',
                'answer' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            //  [
            //     'field_id' => 4,
            //    
            //     'question' => 'Can CSS be used to control the layout of a web page?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 4,
            //    
            //     'question' => 'Is the "print" function used to display output in Python?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 4,
            //    
            //     'question' => 'Can SQL be used to update records in a database?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 4,
            //    
            //     'question' => 'Is Java an object-oriented programming language?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 4,
            //    
            //     'question' => 'Is JavaScript executed on the server side?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'b',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 4,
            //    
            //     'question' => 'Does Python support multiple inheritance?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 4,
            //    
            //     'question' => 'Can you use CSS to add a background image to a web page?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 4,
            //    
            //     'question' => 'Is "NaN" a valid value in JavaScript?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 4,
            //    
            //     'question' => 'Is it possible to create a custom class in Python?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 4,
            //    
            //     'question' => 'Does SQL support transactions?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 4,
            //    
            //     'question' => 'Can the "return" statement be used in a Python function?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 4,
            //    
            //     'question' => 'Is "null" a valid value in SQL?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 4,
            //    
            //     'question' => 'Does JavaScript have a "switch" statement?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 4,
            //    
            //     'question' => 'Is Python case-sensitive?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 4,
            //    
            //     'question' => 'Can you use CSS to create a grid layout?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 4,
            //    
            //     'question' => 'Is "String" a data type in Java?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 4,
            //    
            //     'question' => 'Can you use CSS to change the color of text?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 4,
            //    
            //     'question' => 'Is the "input" function used to get user input in Python?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 4,
            //    
            //     'question' => 'Can JavaScript manipulate the HTML content of a webpage?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'field_id' => 4,
            //    
            //     'question' => 'Is "POST" a valid HTTP method?',
            //     'a' => 'Yes',
            //     'b' => 'No',
            //     'answer' => 'a',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],      
            [
                'field_id' => 5,
               
                'question' => 'What is the primary purpose of a retaining wall in civil engineering?',
                'a' => 'To support vertical loads',
                'b' => 'To prevent soil erosion and stabilize slopes',
                'c' => 'To provide thermal insulation',
                'd' => 'To reduce sound transmission',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 5,
               
                'question' => 'What is the function of a settlement tank in a water treatment plant?',
                'a' => 'To filter suspended particles',
                'b' => 'To allow heavy particles to settle out of the water',
                'c' => 'To provide chemical treatment',
                'd' => 'To enhance water aeration',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 5,
               
                'question' => 'Which method is commonly used to improve the bearing capacity of soil?',
                'a' => 'Soil stabilization',
                'b' => 'Soil washing',
                'c' => 'Soil bioremediation',
                'd' => 'Soil aeration',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 5,
               
                'question' => 'What is the purpose of a manhole in a sewer system?',
                'a' => 'To provide ventilation',
                'b' => 'To allow access for maintenance and inspection',
                'c' => 'To reduce water flow',
                'd' => 'To filter debris',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 5,
               
                'question' => 'Which material is commonly used for road surface construction due to its durability and flexibility?',
                'a' => 'Concrete',
                'b' => 'Asphalt',
                'c' => 'Brick',
                'd' => 'Gravel',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 5,
               
                'question' => 'What is the function of a weir in hydraulic engineering?',
                'a' => 'To measure water flow rate',
                'b' => 'To support vertical loads',
                'c' => 'To provide lateral stability',
                'd' => 'To reduce water evaporation',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 5,
               
                'question' => 'What is the main purpose of using a geogrid in road construction?',
                'a' => 'To provide thermal insulation',
                'b' => 'To reinforce soil and increase load-bearing capacity',
                'c' => 'To enhance aesthetic appeal',
                'd' => 'To reduce noise pollution',
                'answer' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 5,
               
                'question' => 'Which type of load is considered in the design of a highway bridge?',
                'a' => 'Wind load',
                'b' => 'Seismic load',
                'c' => 'Dead load',
                'd' => 'Live load',
                'answer' => 'd',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 5,
               
                'question' => 'What is the purpose of a culvert in transportation engineering?',
                'a' => 'To allow water to pass under a road or railway',
                'b' => 'To support vertical loads',
                'c' => 'To provide lateral stability',
                'd' => 'To reduce sound transmission',
                'answer' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 5,
               
                'question' => 'Which type of soil is most suitable for the construction of an earthen dam?',
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
       
        'question' => 'What is the primary purpose of a retaining wall in civil engineering?',
        'a' => 'To support vertical loads',
        'b' => 'To prevent soil erosion and stabilize slopes',
        'c' => 'To provide thermal insulation',
        'd' => 'To reduce sound transmission',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the function of a settlement tank in a water treatment plant?',
        'a' => 'To filter suspended particles',
        'b' => 'To allow heavy particles to settle out of the water',
        'c' => 'To provide chemical treatment',
        'd' => 'To enhance water aeration',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'Which method is commonly used to improve the bearing capacity of soil?',
        'a' => 'Soil stabilization',
        'b' => 'Soil washing',
        'c' => 'Soil bioremediation',
        'd' => 'Soil aeration',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the purpose of a manhole in a sewer system?',
        'a' => 'To provide ventilation',
        'b' => 'To allow access for maintenance and inspection',
        'c' => 'To reduce water flow',
        'd' => 'To filter debris',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'Which material is commonly used for road surface construction due to its durability and flexibility?',
        'a' => 'Concrete',
        'b' => 'Asphalt',
        'c' => 'Brick',
        'd' => 'Gravel',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the function of a weir in hydraulic engineering?',
        'a' => 'To measure water flow rate',
        'b' => 'To support vertical loads',
        'c' => 'To provide lateral stability',
        'd' => 'To reduce water evaporation',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the main purpose of using a geogrid in road construction?',
        'a' => 'To provide thermal insulation',
        'b' => 'To reinforce soil and increase load-bearing capacity',
        'c' => 'To enhance aesthetic appeal',
        'd' => 'To reduce noise pollution',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'Which type of load is considered in the design of a highway bridge?',
        'a' => 'Wind load',
        'b' => 'Seismic load',
        'c' => 'Dead load',
        'd' => 'Live load',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the purpose of a culvert in transportation engineering?',
        'a' => 'To allow water to pass under a road or railway',
        'b' => 'To support vertical loads',
        'c' => 'To provide lateral stability',
        'd' => 'To reduce sound transmission',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'Which type of soil is most suitable for the construction of an earthen dam?',
        'a' => 'Sandy soil',
        'b' => 'Clayey soil',
        'c' => 'Gravelly soil',
        'd' => 'Silty soil',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    ///
    [
        'field_id' => 5,
       
        'question' => 'What is the primary function of an expansion joint in a bridge?',
        'a' => 'To provide structural support',
        'b' => 'To allow for thermal expansion and contraction',
        'c' => 'To increase load-bearing capacity',
        'd' => 'To prevent water leakage',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the primary use of a soil test in construction?',
        'a' => 'To determine soil color',
        'b' => 'To assess soil texture',
        'c' => 'To evaluate soil stability and strength',
        'd' => 'To measure soil moisture',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'Which of the following is an essential component of a stormwater drainage system?',
        'a' => 'Reinforced concrete',
        'b' => 'Catch basins',
        'c' => 'Sound barriers',
        'd' => 'Thermal insulation',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'In civil engineering, what does the term "load-bearing wall" refer to?',
        'a' => 'A wall that provides insulation',
        'b' => 'A wall that supports vertical loads from above',
        'c' => 'A decorative wall with no structural function',
        'd' => 'A wall that prevents moisture penetration',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the purpose of using a foundation pad in construction?',
        'a' => 'To provide a base for structural loads',
        'b' => 'To enhance aesthetic appeal',
        'c' => 'To improve drainage',
        'd' => 'To reduce vibration',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the primary advantage of using precast concrete in construction?',
        'a' => 'Increased flexibility in design',
        'b' => 'Reduced construction time',
        'c' => 'Enhanced thermal insulation',
        'd' => 'Improved aesthetic quality',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'Which of the following is a common method for reinforcing concrete structures?',
        'a' => 'Using fiber optic cables',
        'b' => 'Embedding steel bars',
        'c' => 'Applying heat treatment',
        'd' => 'Using composite materials',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],


    [
        'field_id' => 5,
       
        'question' => 'What is the role of a diaphragm wall in civil engineering?',
        'a' => 'To provide aesthetic appeal',
        'b' => 'To support vertical loads in deep excavation',
        'c' => 'To reduce noise levels',
        'd' => 'To enhance thermal insulation',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What type of survey is typically used to determine land boundaries?',
        'a' => 'Geodetic survey',
        'b' => 'Hydrographic survey',
        'c' => 'Topographic survey',
        'd' => 'Land survey',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is a common cause of structural failure in buildings?',
        'a' => 'Inadequate insulation',
        'b' => 'Poorly designed foundation',
        'c' => 'Incorrect paint application',
        'd' => 'Inadequate lighting',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 5,
       
        'question' => 'What is the main purpose of using a vibration isolator in a building?',
        'a' => 'To reduce noise levels',
        'b' => 'To absorb vibrations and reduce structural stress',
        'c' => 'To enhance aesthetic appeal',
        'd' => 'To provide thermal insulation',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'Which test is commonly used to determine the compaction of soil?',
        'a' => 'Atterberg limits test',
        'b' => 'Proctor compaction test',
        'c' => 'Moisture content test',
        'd' => 'Sieve analysis test',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the role of a drainage layer in a retaining wall?',
        'a' => 'To provide additional strength',
        'b' => 'To allow water to drain away and reduce pressure',
        'c' => 'To improve insulation',
        'd' => 'To enhance aesthetic appearance',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What type of foundation is typically used for buildings on soft or loose soil?',
        'a' => 'Shallow foundation',
        'b' => 'Deep foundation',
        'c' => 'Strip foundation',
        'd' => 'Raft foundation',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the primary function of a shear wall in a building?',
        'a' => 'To provide thermal insulation',
        'b' => 'To resist lateral forces such as wind or earthquakes',
        'c' => 'To enhance aesthetic appearance',
        'd' => 'To support vertical loads',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the purpose of using a geotextile fabric in construction?',
        'a' => 'To provide aesthetic appeal',
        'b' => 'To separate soil layers and enhance stability',
        'c' => 'To improve thermal insulation',
        'd' => 'To increase load-bearing capacity',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'Which type of concrete is designed to have a high resistance to cracking?',
        'a' => 'High-strength concrete',
        'b' => 'Self-compacting concrete',
        'c' => 'Fiber-reinforced concrete',
        'd' => 'Lightweight concrete',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the main function of a bridge pier?',
        'a' => 'To provide support to the bridge deck',
        'b' => 'To reduce noise levels',
        'c' => 'To enhance the aesthetic design of the bridge',
        'd' => 'To facilitate water flow underneath the bridge',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the role of a capillary break layer in construction?',
        'a' => 'To provide additional insulation',
        'b' => 'To prevent moisture from rising through the foundation',
        'c' => 'To enhance structural strength',
        'd' => 'To support vertical loads',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the primary purpose of using a soil nail in retaining wall construction?',
        'a' => 'To provide additional insulation',
        'b' => 'To reinforce and stabilize the soil',
        'c' => 'To enhance aesthetic appeal',
        'd' => 'To reduce noise transmission',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the purpose of using formwork in concrete construction?',
        'a' => 'To support the concrete until it sets',
        'b' => 'To enhance the aesthetic appearance',
        'c' => 'To provide thermal insulation',
        'd' => 'To reduce noise levels',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'Which material is often used for reinforcing concrete to improve its tensile strength?',
        'a' => 'Wood',
        'b' => 'Steel',
        'c' => 'Plastic',
        'd' => 'Glass',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the primary function of a bearing pad in bridge construction?',
        'a' => 'To provide thermal insulation',
        'b' => 'To accommodate movements and distribute loads',
        'c' => 'To enhance aesthetic appeal',
        'd' => 'To reduce noise transmission',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the primary function of a retaining wall drainage system?',
        'a' => 'To provide structural support',
        'b' => 'To allow water to escape and prevent hydrostatic pressure buildup',
        'c' => 'To enhance the appearance of the wall',
        'd' => 'To provide thermal insulation',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is a common cause of differential settlement in buildings?',
        'a' => 'Uniform soil compaction',
        'b' => 'Variation in soil properties and load distribution',
        'c' => 'Evenly distributed loads',
        'd' => 'Proper foundation design',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'Which type of foundation is typically used for high-rise buildings?',
        'a' => 'Shallow foundation',
        'b' => 'Pile foundation',
        'c' => 'Strip foundation',
        'd' => 'Raft foundation',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the primary purpose of a waterproof membrane in building construction?',
        'a' => 'To provide additional insulation',
        'b' => 'To prevent water infiltration',
        'c' => 'To enhance aesthetic appearance',
        'd' => 'To reduce noise levels',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the main advantage of using composite materials in construction?',
        'a' => 'Increased weight',
        'b' => 'Improved strength-to-weight ratio',
        'c' => 'Reduced durability',
        'd' => 'Decreased flexibility',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the purpose of a seismic design in buildings?',
        'a' => 'To provide aesthetic appeal',
        'b' => 'To protect the structure from earthquake-induced forces',
        'c' => 'To enhance thermal insulation',
        'd' => 'To improve water resistance',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the role of a pile cap in foundation engineering?',
        'a' => 'To distribute loads from the superstructure to the piles',
        'b' => 'To provide aesthetic appeal',
        'c' => 'To enhance thermal insulation',
        'd' => 'To reduce noise levels',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the function of a diaphragm in a water tank?',
        'a' => 'To regulate water temperature',
        'b' => 'To provide structural support',
        'c' => 'To separate different water levels',
        'd' => 'To enhance aesthetic appeal',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the purpose of a construction joint in concrete structures?',
        'a' => 'To provide aesthetic design',
        'b' => 'To accommodate movements and prevent cracks',
        'c' => 'To improve thermal insulation',
        'd' => 'To reduce water infiltration',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the main purpose of a land survey in construction?',
        'a' => 'To assess aesthetic value',
        'b' => 'To determine property boundaries and topography',
        'c' => 'To measure structural strength',
        'd' => 'To evaluate environmental impact',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is a common method for soil stabilization?',
        'a' => 'Chemical treatment',
        'b' => 'Adding organic matter',
        'c' => 'Compaction',
        'd' => 'Increasing soil moisture',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'Which type of concrete is used for underwater construction?',
        'a' => 'Air-entrained concrete',
        'b' => 'High-strength concrete',
        'c' => 'Rapid-setting concrete',
        'd' => 'Wet-mix concrete',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the purpose of using a concrete admixture?',
        'a' => 'To change the color of concrete',
        'b' => 'To modify the properties of concrete',
        'c' => 'To increase the cost of concrete',
        'd' => 'To improve the aesthetic appearance',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the function of a concrete slab in building construction?',
        'a' => 'To provide aesthetic design',
        'b' => 'To serve as a horizontal load-bearing element',
        'c' => 'To enhance thermal insulation',
        'd' => 'To reduce noise transmission',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'Which type of wall is designed to support both vertical and lateral loads?',
        'a' => 'Partition wall',
        'b' => 'Load-bearing wall',
        'c' => 'Curtain wall',
        'd' => 'Non-load-bearing wall',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the primary purpose of a bridge abutment?',
        'a' => 'To provide aesthetic appeal',
        'b' => 'To support the ends of the bridge and transfer loads to the foundation',
        'c' => 'To reduce water flow',
        'd' => 'To enhance the aesthetic design of the bridge',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the purpose of a geotechnical investigation?',
        'a' => 'To evaluate the structural integrity of a building',
        'b' => 'To assess soil properties and stability for foundation design',
        'c' => 'To improve aesthetic design',
        'd' => 'To enhance thermal insulation',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What type of retaining wall is commonly used for high loads and limited space?',
        'a' => 'Gravity wall',
        'b' => 'Cantilever wall',
        'c' => 'Sheet pile wall',
        'd' => 'Counterfort wall',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the main function of a soil permeability test?',
        'a' => 'To measure soil compaction',
        'b' => 'To determine the rate at which water flows through soil',
        'c' => 'To assess soil strength',
        'd' => 'To evaluate soil texture',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'Which type of construction material is known for its high compressive strength?',
        'a' => 'Wood',
        'b' => 'Steel',
        'c' => 'Concrete',
        'd' => 'Glass',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is a common use of a retaining wall in landscape architecture?',
        'a' => 'To provide additional seating',
        'b' => 'To support a garden feature and prevent soil erosion',
        'c' => 'To create decorative elements',
        'd' => 'To separate different plant species',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What type of load does a cantilever beam primarily support?',
        'a' => 'Live load',
        'b' => 'Dead load',
        'c' => 'Shear load',
        'd' => 'Moment load',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the purpose of a foundation settlement observation?',
        'a' => 'To check the aesthetic quality of the foundation',
        'b' => 'To monitor and measure any movement or sinking of the foundation',
        'c' => 'To assess the thermal insulation',
        'd' => 'To evaluate the structural load capacity',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the main function of a diaphragm wall?',
        'a' => 'To provide insulation',
        'b' => 'To act as a structural element that retains soil and supports excavation',
        'c' => 'To enhance aesthetic appeal',
        'd' => 'To filter water',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "frost heave" refer to in civil engineering?',
        'a' => 'Soil expansion due to water freezing and thawing',
        'b' => 'Soil compaction due to heavy loads',
        'c' => 'Water infiltration into soil',
        'd' => 'Soil erosion during heavy rains',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the purpose of using a thermal bridge in building design?',
        'a' => 'To enhance heat retention in specific areas',
        'b' => 'To provide structural support',
        'c' => 'To facilitate ventilation',
        'd' => 'To reduce noise transmission',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the role of a bridge expansion joint?',
        'a' => 'To provide thermal insulation',
        'b' => 'To allow for movements due to temperature changes and prevent damage',
        'c' => 'To enhance the aesthetic design',
        'd' => 'To reduce vibration',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'Which type of retaining wall is best suited for high loads and has limited space?',
        'a' => 'Gravity wall',
        'b' => 'Cantilever wall',
        'c' => 'Sheet pile wall',
        'd' => 'Counterfort wall',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the purpose of using a cross-lot bracing system in construction?',
        'a' => 'To enhance aesthetic design',
        'b' => 'To provide lateral stability and support excavation',
        'c' => 'To improve thermal insulation',
        'd' => 'To facilitate water drainage',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the main advantage of using pre-stressed concrete?',
        'a' => 'Increased weight',
        'b' => 'Improved resistance to tensile stresses',
        'c' => 'Reduced compressive strength',
        'd' => 'Enhanced thermal insulation',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "soil liquefaction" refer to?',
        'a' => 'The process of soil turning into a liquid state due to seismic activity',
        'b' => 'The process of soil becoming more solid due to compaction',
        'c' => 'The process of soil mixing with groundwater',
        'd' => 'The process of soil becoming less permeable',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'Which type of concrete is commonly used for high-strength applications?',
        'a' => 'Normal-strength concrete',
        'b' => 'High-strength concrete',
        'c' => 'Lightweight concrete',
        'd' => 'Fiber-reinforced concrete',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the primary purpose of a sump pit in construction?',
        'a' => 'To provide aesthetic design',
        'b' => 'To collect and manage water from drainage systems',
        'c' => 'To enhance thermal insulation',
        'd' => 'To support structural loads',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the main function of a vibration isolator in a building?',
        'a' => 'To enhance aesthetic appeal',
        'b' => 'To reduce the transmission of vibrations from machinery and external sources',
        'c' => 'To provide thermal insulation',
        'd' => 'To improve structural strength',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the purpose of using expansion joints in road construction?',
        'a' => 'To improve the road surface texture',
        'b' => 'To accommodate thermal expansion and contraction',
        'c' => 'To enhance aesthetic design',
        'd' => 'To reduce noise levels',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the main purpose of a drainage layer in a retaining wall?',
        'a' => 'To provide additional insulation',
        'b' => 'To manage water pressure and prevent wall failure',
        'c' => 'To enhance aesthetic appeal',
        'd' => 'To improve structural strength',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What type of foundation is best suited for buildings on unstable soil?',
        'a' => 'Shallow foundation',
        'b' => 'Pile foundation',
        'c' => 'Strip foundation',
        'd' => 'Raft foundation',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the primary function of a wing wall in bridge construction?',
        'a' => 'To support the bridge deck',
        'b' => 'To retain soil and provide lateral support at bridge ends',
        'c' => 'To enhance aesthetic design',
        'd' => 'To reduce water flow',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the purpose of using a load-bearing wall?',
        'a' => 'To support non-structural elements',
        'b' => 'To carry and transfer loads from the structure above to the foundation',
        'c' => 'To enhance aesthetic design',
        'd' => 'To provide thermal insulation',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the main advantage of using a cantilever retaining wall?',
        'a' => 'Its ability to support large loads with minimal material',
        'b' => 'Its aesthetic appeal',
        'c' => 'Its ease of construction',
        'd' => 'Its ability to reduce noise',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the purpose of a shear wall in high-rise buildings?',
        'a' => 'To support vertical loads',
        'b' => 'To resist lateral forces and enhance building stability',
        'c' => 'To provide thermal insulation',
        'd' => 'To improve aesthetic design',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the function of a dewatering system on a construction site?',
        'a' => 'To enhance soil stability by removing excess water',
        'b' => 'To provide cooling to machinery',
        'c' => 'To filter out pollutants',
        'd' => 'To increase soil moisture for better compaction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the purpose of a pile cap in foundation construction?',
        'a' => 'To provide aesthetic design',
        'b' => 'To distribute loads from the structure to the piles below',
        'c' => 'To enhance thermal insulation',
        'd' => 'To reduce water infiltration',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the role of a concrete screed in construction?',
        'a' => 'To level and smooth the surface of freshly poured concrete',
        'b' => 'To provide structural support',
        'c' => 'To add color to concrete',
        'd' => 'To enhance thermal insulation',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the main purpose of a drainage ditch in civil engineering?',
        'a' => 'To improve soil strength',
        'b' => 'To collect and direct surface water away from structures',
        'c' => 'To support load-bearing elements',
        'd' => 'To provide aesthetic landscaping',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "load factor" refer to in structural design?',
        'a' => 'The factor used to estimate material cost',
        'b' => 'The multiplier applied to loads to ensure safety and account for uncertainties',
        'c' => 'The factor used to calculate aesthetic value',
        'd' => 'The ratio of live load to dead load',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the purpose of a settlement plate in building construction?',
        'a' => 'To measure aesthetic changes',
        'b' => 'To monitor ground settlement and structural movement',
        'c' => 'To improve thermal insulation',
        'd' => 'To enhance structural strength',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the main function of a bearing capacity test?',
        'a' => 'To measure soil compaction',
        'b' => 'To determine the load-carrying capacity of soil',
        'c' => 'To assess soil permeability',
        'd' => 'To evaluate soil texture',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the purpose of a foundation pile?',
        'a' => 'To distribute loads from the building to the stable soil or rock deeper underground',
        'b' => 'To enhance the aesthetic design of a building',
        'c' => 'To reduce noise',
        'd' => 'To provide thermal insulation',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],[
        'field_id' => 5,
       
        'question' => 'What is the primary function of a heat exchanger in mechanical systems?',
        'a' => 'To transfer heat between two or more fluids',
        'b' => 'To filter particles from fluids',
        'c' => 'To increase the temperature of a fluid',
        'd' => 'To cool the surrounding environment',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "thermodynamics" study?',
        'a' => 'The behavior of fluids in motion',
        'b' => 'The conversion of heat into work and the associated energy transfers',
        'c' => 'The analysis of mechanical vibrations',
        'd' => 'The design of mechanical systems',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the purpose of a governor in an engine?',
        'a' => 'To control the engine speed and maintain it at a desired level',
        'b' => 'To improve fuel efficiency',
        'c' => 'To enhance engine power',
        'd' => 'To reduce noise',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the main function of a pump in mechanical systems?',
        'a' => 'To compress gases',
        'b' => 'To transfer fluids from one place to another',
        'c' => 'To filter contaminants',
        'd' => 'To measure fluid pressure',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'Which type of gear is commonly used to transmit motion between shafts that are at an angle to each other?',
        'a' => 'Spur gear',
        'b' => 'Bevel gear',
        'c' => 'Helical gear',
        'd' => 'Worm gear',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the function of a cooling system in an engine?',
        'a' => 'To increase the engine temperature',
        'b' => 'To remove excess heat and maintain optimal operating temperature',
        'c' => 'To improve fuel combustion',
        'd' => 'To enhance engine power',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "fluid dynamics" refer to?',
        'a' => 'The study of mechanical vibrations',
        'b' => 'The study of fluid behavior and flow',
        'c' => 'The analysis of thermal systems',
        'd' => 'The design of structural elements',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the primary function of a compressor in a refrigeration system?',
        'a' => 'To expand refrigerant gas',
        'b' => 'To increase the pressure of the refrigerant gas',
        'c' => 'To cool the refrigerant gas',
        'd' => 'To filter refrigerant contaminants',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the main advantage of using a centrifugal pump?',
        'a' => 'High efficiency for low flow rates',
        'b' => 'Ability to handle high flow rates with relatively low energy consumption',
        'c' => 'Low maintenance requirements',
        'd' => 'High-pressure generation',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the purpose of a bearing in mechanical systems?',
        'a' => 'To support rotating components and reduce friction',
        'b' => 'To increase the load capacity of shafts',
        'c' => 'To enhance thermal insulation',
        'd' => 'To filter contaminants from fluids',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],[
        'field_id' => 5,
       
        'question' => 'What is the primary purpose of a flywheel in an engine?',
        'a' => 'To increase engine temperature',
        'b' => 'To improve fuel efficiency',
        'c' => 'To reduce noise levels',
        'd' => 'To store and smooth out rotational energy',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the main function of a hydraulic actuator?',
        'a' => 'To increase fluid temperature',
        'b' => 'To filter hydraulic fluid',
        'c' => 'To measure fluid pressure',
        'd' => 'To convert hydraulic pressure into mechanical movement',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "specific heat capacity" refer to?',
        'a' => 'The ability of a material to conduct electricity',
        'b' => 'The measurement of a material\'s thermal conductivity',
        'c' => 'The density of a material',
        'd' => 'The amount of heat required to raise the temperature of a unit mass by one degree Celsius',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the purpose of an expansion valve in a refrigeration system?',
        'a' => 'To increase the pressure of the refrigerant',
        'b' => 'To cool the refrigerant',
        'c' => 'To remove contaminants from the refrigerant',
        'd' => 'To reduce the pressure and control the flow of refrigerant',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the main advantage of using a pneumatic system?',
        'a' => 'Ability to handle high temperatures',
        'b' => 'Ability to transmit power with high efficiency',
        'c' => 'Ability to operate at very high speeds',
        'd' => 'Ability to provide force transmission with controlled pressure',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "mechanical advantage" refer to?',
        'a' => 'The ratio of power output to power input',
        'b' => 'The reduction in wear and tear of mechanical parts',
        'c' => 'The ease of assembly of mechanical components',
        'd' => 'The ratio of output force to input force in a machine',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    ///
    [
        'field_id' => 5,
       
        'question' => 'What is the primary function of a gear reducer?',
        'a' => 'To increase the rotational speed',
        'b' => 'To measure gear wear',
        'c' => 'To filter gear lubricant',
        'd' => 'To reduce the speed of rotation and increase torque',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the main purpose of a vibration damper?',
        'a' => 'To increase the amplitude of vibrations',
        'b' => 'To enhance aesthetic appearance',
        'c' => 'To measure vibration intensity',
        'd' => 'To reduce and control unwanted vibrations',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the main function of a clutch in a mechanical system?',
        'a' => 'To increase rotational speed',
        'b' => 'To filter contaminants from lubricants',
        'c' => 'To provide cooling to the system',
        'd' => 'To engage and disengage the power transmission between the engine and the wheels',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "entropy" refer to in thermodynamics?',
        'a' => 'The amount of work done by a system',
        'b' => 'The total energy of a system',
        'c' => 'The efficiency of energy transfer',
        'd' => 'The measure of disorder or randomness in a system',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the function of a cooling system in an engine?',
        'a' => 'To increase the engine temperature',
        'b' => 'To improve fuel combustion',
        'c' => 'To enhance engine power',
        'd' => 'To remove excess heat and maintain optimal operating temperature',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ], [
        'field_id' => 5,
       
        'question' => 'What is the purpose of a turbocharger in an engine?',
        'a' => 'To reduce fuel consumption',
        'b' => 'To increase engine power by forcing in more air',
        'c' => 'To improve exhaust gas flow',
        'd' => 'To enhance the engine cooling system',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "thermal conductivity" measure?',
        'a' => 'The ability of a material to absorb heat',
        'b' => 'The rate at which heat passes through a material',
        'c' => 'The resistance of a material to heat flow',
        'd' => 'The amount of heat required to raise the temperature of a material',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the primary role of a camshaft in an engine?',
        'a' => 'To increase engine speed',
        'b' => 'To control the timing of valve openings and closings',
        'c' => 'To manage the fuel injection system',
        'd' => 'To enhance engine cooling',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the main function of a bearing in a machine?',
        'a' => 'To increase the rotational speed of the shaft',
        'b' => 'To reduce friction between moving parts',
        'c' => 'To measure the load on the shaft',
        'd' => 'To enhance the cooling of the machine',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the purpose of using a heat exchanger?',
        'a' => 'To transfer heat between two fluids',
        'b' => 'To filter contaminants from fluids',
        'c' => 'To increase fluid pressure',
        'd' => 'To provide additional insulation',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    ///
    [
        'field_id' => 5,
       
        'question' => 'What is the primary function of a gear reducer?',
        'a' => 'To increase the rotational speed',
        'b' => 'To measure gear wear',
        'c' => 'To filter gear lubricant',
        'd' => 'To reduce the speed of rotation and increase torque',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the main purpose of a vibration damper?',
        'a' => 'To increase the amplitude of vibrations',
        'b' => 'To enhance aesthetic appearance',
        'c' => 'To measure vibration intensity',
        'd' => 'To reduce and control unwanted vibrations',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "entropy" refer to in thermodynamics?',
        'a' => 'The amount of work done by a system',
        'b' => 'The total energy of a system',
        'c' => 'The efficiency of energy transfer',
        'd' => 'The measure of disorder or randomness in a system',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "gear ratio" refer to?',
        'a' => 'The number of gears in a gearbox',
        'b' => 'The size of the gears used',
        'c' => 'The ratio of the number of teeth on the driving gear to the number of teeth on the driven gear',
        'd' => 'The speed at which the gears rotate',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the main function of a piston in an engine?',
        'a' => 'To regulate fuel injection',
        'b' => 'To create and transfer mechanical power from combustion',
        'c' => 'To enhance exhaust gas flow',
        'd' => 'To increase engine temperature',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the purpose of a lubricating system in machinery?',
        'a' => 'To increase the temperature of the machine',
        'b' => 'To reduce friction and wear on moving parts',
        'c' => 'To filter air entering the machine',
        'd' => 'To enhance the appearance of the machine',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the main advantage of using an electric motor over a combustion engine?',
        'a' => 'Higher noise levels',
        'b' => 'Lower maintenance requirements',
        'c' => 'Increased fuel consumption',
        'd' => 'Higher exhaust emissions',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "rpm" stand for in mechanical systems?',
        'a' => 'Revolutions per minute',
        'b' => 'Radial pressure measurement',
        'c' => 'Rate of power measurement',
        'd' => 'Resistance per meter',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the main purpose of a governor in an engine?',
        'a' => 'To regulate engine speed',
        'b' => 'To increase fuel efficiency',
        'c' => 'To enhance engine cooling',
        'd' => 'To measure exhaust emissions',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "moment of inertia" refer to?',
        'a' => 'The resistance to rotational acceleration',
        'b' => 'The total energy of a rotating object',
        'c' => 'The rate of heat transfer',
        'd' => 'The amount of torque applied',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the function of a pressure relief valve in a hydraulic system?',
        'a' => 'To increase hydraulic pressure',
        'b' => 'To control the flow rate of hydraulic fluid',
        'c' => 'To prevent excessive pressure and protect the system',
        'd' => 'To enhance cooling efficiency',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the primary function of a throttle valve in an engine?',
        'a' => 'To control the air-fuel mixture',
        'b' => 'To regulate engine speed',
        'c' => 'To increase engine power',
        'd' => 'To improve fuel injection accuracy',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    

    [
        'field_id' => 5,
       
        'question' => 'What does the term "torque" measure?',
        'a' => 'The rotational force applied to an object',
        'b' => 'The rate of energy conversion',
        'c' => 'The speed of rotation',
        'd' => 'The amount of heat generated',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the main purpose of a centrifugal pump?',
        'a' => 'To increase fluid pressure',
        'b' => 'To create a high-speed rotational flow of fluid',
        'c' => 'To filter contaminants from the fluid',
        'd' => 'To enhance fluid cooling',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the primary role of a radiator in a vehicle?',
        'a' => 'To increase engine temperature',
        'b' => 'To filter the air entering the engine',
        'c' => 'To cool the engine by dissipating heat',
        'd' => 'To regulate fuel flow',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the purpose of a gear in a mechanical system?',
        'a' => 'To convert rotational motion and change torque',
        'b' => 'To increase the weight of the system',
        'c' => 'To improve the thermal efficiency',
        'd' => 'To measure mechanical power',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the function of a crankshaft in an engine?',
        'a' => 'To convert reciprocating motion into rotational motion',
        'b' => 'To regulate engine temperature',
        'c' => 'To filter fuel',
        'd' => 'To enhance exhaust flow',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "vibration" refer to in mechanical systems?',
        'a' => 'The oscillatory motion of an object',
        'b' => 'The heat generated by the system',
        'c' => 'The rate of fluid flow',
        'd' => 'The resistance to motion',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the primary purpose of a torque wrench?',
        'a' => 'To measure the angle of rotation',
        'b' => 'To apply a specific amount of torque to a fastener',
        'c' => 'To measure the speed of rotation',
        'd' => 'To filter contaminants from the fluid',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "fluid dynamics" study?',
        'a' => 'The motion of fluids and their interactions with solid boundaries',
        'b' => 'The thermal properties of materials',
        'c' => 'The strength of materials',
        'd' => 'The chemical composition of fluids',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "specific heat capacity" measure?',
        'a' => 'The amount of heat required to change the temperature of a unit mass by one degree Celsius',
        'b' => 'The rate of heat loss from a material',
        'c' => 'The thermal conductivity of a material',
        'd' => 'The total heat content of a material',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],   
    [
        'field_id' => 5,
       
        'question' => 'What is the function of a flywheel in an engine?',
        'a' => 'To smooth out the delivery of power',
        'b' => 'To increase engine speed',
        'c' => 'To filter contaminants',
        'd' => 'To regulate fuel flow',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "heat exchanger" refer to?',
        'a' => 'A device used to transfer heat between two or more fluids',
        'b' => 'A tool used to measure temperature',
        'c' => 'A component used to increase fluid pressure',
        'd' => 'A system used to filter contaminants',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the purpose of a spring in a mechanical system?',
        'a' => 'To store and release energy',
        'b' => 'To regulate fluid flow',
        'c' => 'To increase rotational speed',
        'd' => 'To enhance thermal conductivity',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the main purpose of a piston ring?',
        'a' => 'To seal the combustion chamber and reduce oil consumption',
        'b' => 'To increase engine power',
        'c' => 'To enhance fuel injection accuracy',
        'd' => 'To measure exhaust emissions',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "thermodynamics" study?',
        'a' => 'The relationship between heat, work, and energy',
        'b' => 'The properties of fluids in motion',
        'c' => 'The behavior of materials under stress',
        'd' => 'The efficiency of mechanical systems',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the main role of a mechanical seal?',
        'a' => 'To prevent leakage between rotating and stationary parts',
        'b' => 'To enhance the thermal conductivity',
        'c' => 'To regulate fluid pressure',
        'd' => 'To measure torque',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the purpose of a gear train?',
        'a' => 'To transmit torque and change rotational speed',
        'b' => 'To filter contaminants from the fluid',
        'c' => 'To regulate engine temperature',
        'd' => 'To increase the weight of the system',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ], [
        'field_id' => 5,
       
        'question' => 'What is the primary function of a gear in a mechanical system?',
        'a' => 'To change the speed and direction of rotation',
        'b' => 'To regulate fluid pressure',
        'c' => 'To filter contaminants',
        'd' => 'To measure torque',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "enthalpy" refer to?',
        'a' => 'The total heat content of a system',
        'b' => 'The resistance of a material to deformation',
        'c' => 'The heat capacity of a material',
        'd' => 'The thermal conductivity of a material',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the function of a heat sink in electronics?',
        'a' => 'To dissipate heat away from sensitive components',
        'b' => 'To regulate electrical current',
        'c' => 'To filter electrical noise',
        'd' => 'To increase voltage',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the primary role of a solenoid?',
        'a' => 'To convert electrical energy into linear motion',
        'b' => 'To regulate hydraulic pressure',
        'c' => 'To measure temperature',
        'd' => 'To filter impurities',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "dynamic balance" refer to?',
        'a' => 'The state where the forces and moments acting on a rotating body are balanced',
        'b' => 'The resistance of a material to thermal expansion',
        'c' => 'The rate of heat transfer',
        'd' => 'The density of a material',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the role of a spring in a mechanical system?',
        'a' => 'To absorb and store mechanical energy',
        'b' => 'To regulate fluid pressure',
        'c' => 'To measure rotational speed',
        'd' => 'To filter contaminants',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "vibration" refer to?',
        'a' => 'Oscillations of a mechanical system around its equilibrium position',
        'b' => 'Resistance to fluid flow',
        'c' => 'Change in material density',
        'd' => 'Change in temperature',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the primary purpose of a flywheel in an engine?',
        'a' => 'To smooth out fluctuations in rotational speed',
        'b' => 'To regulate fuel flow',
        'c' => 'To filter exhaust gases',
        'd' => 'To measure engine speed',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
        [
        'field_id' => 5,
       
        'question' => 'What is the function of a solenoid valve in a hydraulic system?',
        'a' => 'To control the flow of fluid',
        'b' => 'To regulate temperature',
        'c' => 'To measure pressure',
        'd' => 'To filter contaminants',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "moment of inertia" measure?',
        'a' => 'The resistance of a body to rotational acceleration',
        'b' => 'The density of a material',
        'c' => 'The thermal conductivity of a material',
        'd' => 'The deformation under applied force',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],[
        'field_id' => 5,
       
        'question' => 'What is the primary purpose of a clutch in a mechanical system?',
        'a' => 'To engage and disengage the power transmission',
        'b' => 'To filter contaminants',
        'c' => 'To regulate fluid temperature',
        'd' => 'To measure rotational speed',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "turbine" refer to?',
        'a' => 'A device that converts fluid energy into mechanical energy',
        'b' => 'A tool that measures temperature',
        'c' => 'A component that regulates pressure',
        'd' => 'A filter for removing impurities',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the function of a ball bearing?',
        'a' => 'To reduce friction between moving parts',
        'b' => 'To convert electrical energy into motion',
        'c' => 'To measure vibration',
        'd' => 'To filter contaminants',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "compressibility" measure?',
        'a' => 'The degree to which a material can be compressed',
        'b' => 'The resistance to thermal expansion',
        'c' => 'The rate of heat transfer',
        'd' => 'The density of a fluid',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the role of a differential in a vehicle?',
        'a' => 'To allow wheels to rotate at different speeds while turning',
        'b' => 'To measure fuel consumption',
        'c' => 'To regulate engine temperature',
        'd' => 'To filter exhaust gases',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "viscosity" refer to?',
        'a' => 'The measure of a fluid’s resistance to flow',
        'b' => 'The density of a material',
        'c' => 'The thermal conductivity of a fluid',
        'd' => 'The electrical conductivity of a fluid',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the primary function of a gearbox?',
        'a' => 'To adjust the output speed and torque',
        'b' => 'To regulate fuel flow',
        'c' => 'To measure pressure',
        'd' => 'To filter impurities',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "entropic efficiency" measure?',
        'a' => 'The effectiveness of a system in converting energy',
        'b' => 'The density of a material',
        'c' => 'The rate of heat transfer',
        'd' => 'The resistance to thermal expansion',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the role of a piston in an engine?',
        'a' => 'To convert the energy from combustion into mechanical work',
        'b' => 'To measure fuel consumption',
        'c' => 'To filter air',
        'd' => 'To regulate engine temperature',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "thermal conductivity" refer to?',
        'a' => 'The ability of a material to conduct heat',
        'b' => 'The density of a material',
        'c' => 'The rate of fluid flow',
        'd' => 'The resistance to deformation',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the purpose of a camshaft in an engine?',
        'a' => 'To control the timing of valve openings and closings',
        'b' => 'To regulate fuel injection',
        'c' => 'To measure exhaust emissions',
        'd' => 'To filter air',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],

    [
        'field_id' => 5,
       
        'question' => 'What is the purpose of a shock absorber in a vehicle?',
        'a' => 'To control the impact and oscillations of the suspension system',
        'b' => 'To measure fuel efficiency',
        'c' => 'To regulate engine speed',
        'd' => 'To filter exhaust gases',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "specific heat capacity" refer to?',
        'a' => 'The amount of heat required to change the temperature of a unit mass of a substance by one degree Celsius',
        'b' => 'The rate of thermal expansion',
        'c' => 'The density of a material',
        'd' => 'The resistance to electrical flow',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the function of a carburetor in an engine?',
        'a' => 'To mix air with fuel in the correct ratio for combustion',
        'b' => 'To filter air entering the engine',
        'c' => 'To regulate exhaust emissions',
        'd' => 'To measure engine temperature',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the purpose of a torque converter in an automatic transmission?',
        'a' => 'To transfer power from the engine to the transmission smoothly',
        'b' => 'To measure vehicle speed',
        'c' => 'To filter engine oil',
        'd' => 'To regulate fuel pressure',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "modulus of elasticity" measure?',
        'a' => 'The ability of a material to resist deformation under stress',
        'b' => 'The rate of thermal expansion',
        'c' => 'The thermal conductivity of a material',
        'd' => 'The density of a fluid',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the function of a hydraulic pump?',
        'a' => 'To convert mechanical energy into hydraulic energy',
        'b' => 'To measure pressure',
        'c' => 'To filter contaminants',
        'd' => 'To regulate fluid flow',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "kinematic viscosity" refer to?',
        'a' => 'The measure of a fluid’s resistance to flow under the influence of gravity',
        'b' => 'The ability of a material to conduct heat',
        'c' => 'The density of a fluid',
        'd' => 'The rate of heat transfer',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the purpose of a pressure gauge in a hydraulic system?',
        'a' => 'To measure the pressure of the hydraulic fluid',
        'b' => 'To filter contaminants from the fluid',
        'c' => 'To regulate temperature',
        'd' => 'To convert mechanical energy into hydraulic energy',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the role of a bearing in a mechanical system?',
        'a' => 'To reduce friction and support rotating components',
        'b' => 'To measure vibration',
        'c' => 'To filter impurities',
        'd' => 'To regulate fluid flow',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "heat exchanger" refer to?',
        'a' => 'A device that transfers heat between two or more fluids',
        'b' => 'A component that regulates engine speed',
        'c' => 'A tool for measuring temperature',
        'd' => 'A filter for removing impurities',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the purpose of a flywheel in an engine?',
        'a' => 'To store rotational energy and smooth out power delivery',
        'b' => 'To filter fuel',
        'c' => 'To regulate exhaust emissions',
        'd' => 'To measure temperature',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "fluid dynamics" study?',
        'a' => 'The motion of fluids and their interactions with solid boundaries',
        'b' => 'The thermal properties of materials',
        'c' => 'The strength of materials',
        'd' => 'The chemical composition of fluids',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the main function of a solenoid in a mechanical system?',
        'a' => 'To convert electrical energy into linear motion',
        'b' => 'To measure pressure',
        'c' => 'To filter contaminants',
        'd' => 'To regulate fluid temperature',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the purpose of a pressure relief valve?',
        'a' => 'To prevent excessive pressure buildup in a system',
        'b' => 'To measure fluid flow rate',
        'c' => 'To filter impurities',
        'd' => 'To regulate temperature',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "entropy" refer to in thermodynamics?',
        'a' => 'The measure of disorder or randomness in a system',
        'b' => 'The ability of a material to conduct heat',
        'c' => 'The density of a fluid',
        'd' => 'The rate of energy transfer',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What is the role of a governor in an engine?',
        'a' => 'To regulate engine speed and maintain constant RPM',
        'b' => 'To filter air',
        'c' => 'To measure fuel consumption',
        'd' => 'To convert mechanical energy into hydraulic energy',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 5,
       
        'question' => 'What does the term "dynamic balance" refer to?',
        'a' => 'The state of equilibrium in a rotating system',
        'b' => 'The rate of thermal expansion',
        'c' => 'The measure of a material’s ductility',
        'd' => 'The ability to conduct electricity',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ]
,    

[
    'field_id' => 5,
   
    'question' => 'What is the primary function of a radiator in an engine?',
    'a' => 'To dissipate heat from the engine coolant',
    'b' => 'To filter contaminants',
    'c' => 'To measure exhaust emissions',
    'd' => 'To regulate fuel pressure',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does the term "compressor" refer to in mechanical systems?',
    'a' => 'A device that increases the pressure of a gas by reducing its volume',
    'b' => 'A tool for measuring temperature',
    'c' => 'A component that regulates fluid flow',
    'd' => 'A filter for removing impurities',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the function of an expansion valve in an air conditioning system?',
    'a' => 'To regulate the flow of refrigerant and reduce pressure',
    'b' => 'To measure humidity',
    'c' => 'To filter air',
    'd' => 'To convert electrical energy into mechanical energy',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the purpose of a muffler in an exhaust system?',
    'a' => 'To reduce noise produced by the engine exhaust gases',
    'b' => 'To filter air entering the engine',
    'c' => 'To measure fuel efficiency',
    'd' => 'To regulate coolant flow',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does the term "viscosity" refer to in fluids?',
    'a' => 'The measure of a fluid’s resistance to flow',
    'b' => 'The rate of heat transfer',
    'c' => 'The density of the fluid',
    'd' => 'The ability to conduct electricity',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the function of a clutch in a vehicle?',
    'a' => 'To engage or disengage the engine from the transmission',
    'b' => 'To regulate fuel injection',
    'c' => 'To measure speed',
    'd' => 'To filter air',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does the term "heat transfer" encompass?',
    'a' => 'The movement of thermal energy from one place to another',
    'b' => 'The measurement of pressure',
    'c' => 'The density of a material',
    'd' => 'The ability of a material to resist corrosion',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the purpose of a throttle valve in an engine?',
    'a' => 'To regulate the amount of air entering the engine',
    'b' => 'To filter exhaust gases',
    'c' => 'To measure fuel consumption',
    'd' => 'To control engine temperature',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does the term "dynamic loading" refer to?',
    'a' => 'The application of loads that change over time',
    'b' => 'The resistance to material fatigue',
    'c' => 'The measure of thermal expansion',
    'd' => 'The density of the material',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the role of a gear in a mechanical system?',
    'a' => 'To transmit torque and rotational motion between shafts',
    'b' => 'To filter contaminants',
    'c' => 'To measure temperature',
    'd' => 'To regulate fluid flow',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does the term "thermal conductivity" refer to?',
    'a' => 'The ability of a material to conduct heat',
    'b' => 'The density of a material',
    'c' => 'The rate of mechanical energy transfer',
    'd' => 'The measure of a fluid’s viscosity',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the purpose of a ball joint in a suspension system?',
    'a' => 'To allow rotational movement between connected parts',
    'b' => 'To measure wheel alignment',
    'c' => 'To filter contaminants',
    'd' => 'To regulate fluid pressure',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the function of an intercooler in a turbocharged engine?',
    'a' => 'To cool the compressed air before it enters the engine',
    'b' => 'To measure fuel pressure',
    'c' => 'To filter exhaust gases',
    'd' => 'To regulate engine temperature',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
]
,
[
    'field_id' => 5,
   
    'question' => 'What is the primary function of a camshaft in an engine?',
    'a' => 'To control the timing of the engine valves',
    'b' => 'To measure fuel pressure',
    'c' => 'To regulate engine temperature',
    'd' => 'To filter air',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the main purpose of a turbocharger?',
    'a' => 'To increase the engine’s power by forcing more air into the combustion chamber',
    'b' => 'To measure exhaust temperature',
    'c' => 'To filter air',
    'd' => 'To regulate coolant flow',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does the term "kinematic viscosity" refer to?',
    'a' => 'The measure of a fluid’s resistance to flow due to internal friction',
    'b' => 'The thermal conductivity of a material',
    'c' => 'The density of a fluid',
    'd' => 'The measure of a material’s strength',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the purpose of a differential in a vehicle?',
    'a' => 'To allow the wheels to rotate at different speeds while turning',
    'b' => 'To measure fuel efficiency',
    'c' => 'To filter air',
    'd' => 'To regulate exhaust gases',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does the term "elastic deformation" refer to?',
    'a' => 'The temporary change in shape or size of a material when stress is applied',
    'b' => 'The ability of a material to conduct heat',
    'c' => 'The density of a material',
    'd' => 'The rate of thermal expansion',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the function of an alternator in a vehicle?',
    'a' => 'To generate electrical power to charge the battery and power electrical systems',
    'b' => 'To measure exhaust emissions',
    'c' => 'To filter air',
    'd' => 'To regulate engine temperature',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does the term "compressibility" refer to?',
    'a' => 'The ability of a material to decrease in volume under pressure',
    'b' => 'The measure of thermal conductivity',
    'c' => 'The density of a material',
    'd' => 'The rate of mechanical energy transfer',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the role of a shock absorber in a vehicle?',
    'a' => 'To absorb and dampen shock and vibration from the road',
    'b' => 'To measure fuel consumption',
    'c' => 'To filter air',
    'd' => 'To regulate fluid flow',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does the term "specific heat capacity" refer to?',
    'a' => 'The amount of heat required to change the temperature of a unit mass of a substance by one degree Celsius',
    'b' => 'The density of a material',
    'c' => 'The measure of a fluid’s viscosity',
    'd' => 'The ability of a material to resist corrosion',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the function of a thermostat in an engine?',
    'a' => 'To regulate the engine temperature by controlling coolant flow',
    'b' => 'To measure exhaust emissions',
    'c' => 'To filter air',
    'd' => 'To generate electrical power',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the main purpose of a piston in an engine?',
    'a' => 'To convert the pressure from combustion into mechanical motion',
    'b' => 'To regulate fuel flow',
    'c' => 'To filter exhaust gases',
    'd' => 'To measure engine temperature',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
]
,
///
[
    'field_id' => 5,
   
    'question' => 'What is the role of a centrifugal pump in mechanical engineering?',
    'a' => 'To convert mechanical energy into hydraulic energy using centrifugal force',
    'b' => 'To measure fluid flow rate',
    'c' => 'To regulate fluid temperature',
    'd' => 'To filter contaminants from fluid',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the specific heat capacity?',
    'a' => 'The density of a material',
    'b' => 'The ability of a material to conduct electricity',
    'c' => 'The amount of heat required to raise the temperature of a unit mass of a substance by one degree Celsius',
    'd' => 'The rate of thermal expansion',
    'answer' => 'c',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is Bernoulli’s principle?',
    'a' => 'The measure of a fluid’s viscosity',
    'b' => 'The ability of a material to conduct heat',
    'c' => 'The principle that as the velocity of a fluid increases, its pressure decreases',
    'd' => 'The density of a material',
    'answer' => 'c',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does the elastic modulus measure?',
    'a' => 'The measure of a material’s ability to resist deformation under stress',
    'b' => 'The rate of thermal expansion',
    'c' => 'The density of a material',
    'd' => 'The ability of a material to conduct heat',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the purpose of a turbocharger in an engine?',
    'a' => 'To measure exhaust emissions',
    'b' => 'To increase the engine’s power output by forcing more air into the combustion chamber',
    'c' => 'To regulate fuel flow',
    'd' => 'To filter air',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does the term "torque" refer to?',
    'a' => 'The rotational force exerted on an object',
    'b' => 'The measure of a material’s resistance to deformation',
    'c' => 'The rate of thermal expansion',
    'd' => 'The density of a material',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the function of a shock absorber in a vehicle?',
    'a' => 'To measure wheel alignment',
    'b' => 'To filter air',
    'c' => 'To dampen the impact of road irregularities and improve ride comfort',
    'd' => 'To regulate engine temperature',
    'answer' => 'c',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the function of a diaphragm in a mechanical system?',
    'a' => 'To measure pressure',
    'b' => 'To filter contaminants',
    'c' => 'To separate and control the flow of fluids or gases',
    'd' => 'To regulate temperature',
    'answer' => 'c',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the primary function of a gearbox in a vehicle?',
    'a' => 'To filter air',
    'b' => 'To change the torque and speed between the engine and the wheels',
    'c' => 'To regulate coolant flow',
    'd' => 'To measure fuel efficiency',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does the term "adiabatic process" refer to?',
    'a' => 'The measure of a fluid’s viscosity',
    'b' => 'The rate of thermal expansion',
    'c' => 'A process in which no heat is transferred to or from the system',
    'd' => 'The density of a material',
    'answer' => 'c',
    'created_at' => now(),
    'updated_at' => now()
],[
    'field_id' => 5,
   
    'question' => 'What is the principle of conservation of energy?',
    'a' => 'Energy can be created or destroyed, but not transferred',
    'b' => 'Energy can be transferred or transformed, but not created or destroyed',
    'c' => 'Energy can only be transformed into matter',
    'd' => 'Energy is only conserved in closed systems',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does a hydraulic press use to exert force?',
    'a' => 'Mechanical advantage through lever arms',
    'b' => 'Pneumatic pressure',
    'c' => 'Hydraulic fluid pressure',
    'd' => 'Magnetic fields',
    'answer' => 'c',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the function of a thermal conductor?',
    'a' => 'To insulate and reduce heat transfer',
    'b' => 'To enhance and transfer heat efficiently',
    'c' => 'To filter heat',
    'd' => 'To regulate temperature',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the purpose of a condenser in an air conditioning system?',
    'a' => 'To cool the refrigerant after it has absorbed heat',
    'b' => 'To increase the temperature of the refrigerant',
    'c' => 'To filter contaminants from the air',
    'd' => 'To measure humidity levels',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does the term "hydraulic lift" refer to?',
    'a' => 'A device that uses fluid pressure to lift heavy objects',
    'b' => 'A machine that uses mechanical advantage to lift weights',
    'c' => 'A system that uses pneumatic pressure to lift objects',
    'd' => 'A tool that regulates fluid flow',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the function of a gear train in a mechanical system?',
    'a' => 'To change the direction of rotation',
    'b' => 'To transfer torque and adjust speed between components',
    'c' => 'To filter contaminants from fluids',
    'd' => 'To measure temperature',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the purpose of a piston in an engine?',
    'a' => 'To compress and move the engine’s working fluid',
    'b' => 'To measure fuel consumption',
    'c' => 'To regulate exhaust emissions',
    'd' => 'To filter air entering the engine',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does the term "fluid dynamics" study?',
    'a' => 'The behavior of fluids in motion and at rest',
    'b' => 'The mechanical properties of solids',
    'c' => 'The chemical reactions in fluids',
    'd' => 'The electrical properties of fluids',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the role of a camshaft in an internal combustion engine?',
    'a' => 'To control the timing of valve openings and closings',
    'b' => 'To regulate the engine temperature',
    'c' => 'To filter exhaust gases',
    'd' => 'To increase fuel efficiency',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does the term "thermodynamics" encompass?',
    'a' => 'The study of heat and energy transfer',
    'b' => 'The analysis of mechanical vibrations',
    'c' => 'The measurement of fluid velocity',
    'd' => 'The design of electrical circuits',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the main purpose of a regulator in a mechanical system?',
    'a' => 'To control and stabilize system parameters',
    'b' => 'To increase the system’s output power',
    'c' => 'To measure system efficiency',
    'd' => 'To filter contaminants',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],

[
    'field_id' => 5,
   
    'question' => 'What is the primary purpose of a catalyst in a chemical reaction?',
    'a' => 'To increase the reaction temperature',
    'b' => 'To speed up the reaction without being consumed',
    'c' => 'To change the product of the reaction',
    'd' => 'To increase the concentration of reactants',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does "Raoult’s Law" describe?',
    'a' => 'The relationship between pressure and volume of gases',
    'b' => 'The partial vapor pressure of each component in an ideal mixture',
    'c' => 'The diffusion rate of solutes in a solvent',
    'd' => 'The heat transfer in a liquid',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'In chemical engineering, what is the "Reynolds number" used to predict?',
    'a' => 'The rate of chemical reactions',
    'b' => 'The type of fluid flow, whether laminar or turbulent',
    'c' => 'The heat capacity of a fluid',
    'd' => 'The electrical conductivity of a solution',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'Which process is used to separate mixtures based on differences in boiling points?',
    'a' => 'Filtration',
    'b' => 'Distillation',
    'c' => 'Centrifugation',
    'd' => 'Extraction',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the term for a reaction that releases heat?',
    'a' => 'Endothermic',
    'b' => 'Exothermic',
    'c' => 'Isothermal',
    'd' => 'Adiabatic',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'In a chemical plant, what does "PID" stand for in PID control systems?',
    'a' => 'Pressure, Indicator, Detector',
    'b' => 'Proportional, Integral, Derivative',
    'c' => 'Partial, Incremental, Direct',
    'd' => 'Pump, Inlet, Drain',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the purpose of a "heat exchanger"?',
    'a' => 'To mix chemicals in a controlled environment',
    'b' => 'To transfer heat between two or more fluids',
    'c' => 'To increase the temperature of a single fluid',
    'd' => 'To reduce pressure in a closed system',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "mass transfer" in chemical engineering?',
    'a' => 'The process of heat exchange between substances',
    'b' => 'The movement of mass from one location to another',
    'c' => 'The diffusion of particles in a fluid',
    'd' => 'The reaction between two chemical substances',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the primary component of natural gas?',
    'a' => 'Ethane',
    'b' => 'Methane',
    'c' => 'Propane',
    'd' => 'Butane',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the name of the process used to convert crude oil into useful products like gasoline?',
    'a' => 'Cracking',
    'b' => 'Fractional Distillation',
    'c' => 'Polymerization',
    'd' => 'Hydrogenation',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],

[
    'field_id' => 5,
   
    'question' => 'What is the function of a "packed column" in chemical engineering?',
    'a' => 'To cool down chemical reactions',
    'b' => 'To separate mixtures based on differences in component volatility',
    'c' => 'To measure pressure in a reactor',
    'd' => 'To filter out impurities from liquids',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'Which equation is used to determine the energy balance in a thermodynamic system?',
    'a' => 'Newton\'s Second Law',
    'b' => 'Bernoulli\'s Equation',
    'c' => 'The First Law of Thermodynamics',
    'd' => 'Boyle\'s Law',
    'answer' => 'c',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'In chemical engineering, what is "Le Chatelier\'s principle" concerned with?',
    'a' => 'The conservation of energy in closed systems',
    'b' => 'The equilibrium shift when a system\'s conditions are changed',
    'c' => 'The rate of diffusion in gases',
    'd' => 'The behavior of fluids in motion',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the purpose of "distillation" in chemical processing?',
    'a' => 'To heat up a mixture',
    'b' => 'To separate components based on boiling points',
    'c' => 'To break down complex molecules',
    'd' => 'To neutralize acids',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "saponification"?',
    'a' => 'The process of soap formation from fats and an alkali',
    'b' => 'The distillation of essential oils',
    'c' => 'The refining of crude oil',
    'd' => 'The polymerization of ethylene',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'In chemical reaction engineering, what does "batch reactor" refer to?',
    'a' => 'A reactor that operates continuously without interruption',
    'b' => 'A reactor that processes one batch at a time',
    'c' => 'A reactor that uses steam to drive chemical reactions',
    'd' => 'A reactor used specifically for polymerization reactions',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'Which law is used to calculate the rate of mass transfer in a fluid?',
    'a' => 'Fick\'s Law',
    'b' => 'Hooke\'s Law',
    'c' => 'Ohm\'s Law',
    'd' => 'Darcy\'s Law',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the purpose of "crystallization" in chemical engineering?',
    'a' => 'To evaporate solvents from a solution',
    'b' => 'To form solid crystals from a homogeneous solution',
    'c' => 'To neutralize acidic compounds',
    'd' => 'To filter impurities from a liquid',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does the term "flash point" refer to?',
    'a' => 'The temperature at which a liquid gives off enough vapor to ignite',
    'b' => 'The pressure at which a gas condenses into a liquid',
    'c' => 'The energy required to break chemical bonds',
    'd' => 'The point where a solid melts into a liquid',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "fluidization" in chemical engineering?',
    'a' => 'The process of transforming a solid directly into a gas',
    'b' => 'The technique of making a solid behave like a fluid by passing a gas or liquid through it',
    'c' => 'The mixing of two immiscible fluids',
    'd' => 'The cooling of gases in a condenser',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],

[
    'field_id' => 5,
   
    'question' => 'What does "Henry\'s Law" describe in chemical engineering?',
    'a' => 'The relationship between the temperature and vapor pressure of a liquid',
    'b' => 'The solubility of a gas in a liquid at a constant temperature',
    'c' => 'The rate of a chemical reaction in relation to the concentration of reactants',
    'd' => 'The viscosity of a fluid under varying pressures',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "viscosity" in the context of fluid dynamics?',
    'a' => 'The resistance of a fluid to flow',
    'b' => 'The density of a fluid relative to water',
    'c' => 'The speed at which a fluid flows through a pipe',
    'd' => 'The temperature at which a fluid boils',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the purpose of "filtration" in chemical engineering?',
    'a' => 'To separate solids from liquids or gases using a filter medium',
    'b' => 'To distill liquids based on boiling points',
    'c' => 'To mix chemicals in a reactor',
    'd' => 'To cool down hot gases',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'In a heat exchanger, what is the role of the "shell" in a shell-and-tube heat exchanger?',
    'a' => 'To contain the tube bundle',
    'b' => 'To facilitate the flow of the heating fluid',
    'c' => 'To increase the heat transfer surface area',
    'd' => 'To separate the hot and cold fluids',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does "pH" measure in a solution?',
    'a' => 'The concentration of salts in water',
    'b' => 'The hydrogen ion concentration',
    'c' => 'The electrical conductivity',
    'd' => 'The oxidation-reduction potential',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "autoignition temperature" of a substance?',
    'a' => 'The temperature at which a substance spontaneously ignites without an external source',
    'b' => 'The temperature required to ignite a substance with a spark',
    'c' => 'The melting point of a solid material',
    'd' => 'The temperature at which a liquid vaporizes',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does "enthalpy" represent in thermodynamics?',
    'a' => 'The total heat content of a system',
    'b' => 'The rate of heat transfer in a system',
    'c' => 'The work done by a system at constant volume',
    'd' => 'The temperature change in a system',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the function of a "scrubber" in a chemical plant?',
    'a' => 'To filter particulate matter from gases',
    'b' => 'To cool down gases before releasing them into the atmosphere',
    'c' => 'To neutralize acidic gases before emission',
    'd' => 'To absorb harmful gases using a liquid medium',
    'answer' => 'd',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'Which material is commonly used as a catalyst in the Haber process for ammonia production?',
    'a' => 'Copper',
    'b' => 'Iron',
    'c' => 'Platinum',
    'd' => 'Nickel',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "adsorption" in chemical engineering?',
    'a' => 'The process where a substance adheres to the surface of a solid or liquid',
    'b' => 'The absorption of light by a substance',
    'c' => 'The reaction between a solid and a liquid',
    'd' => 'The evaporation of a liquid into a gas',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],

[
    'field_id' => 5,
   
    'question' => 'What is the purpose of "fractional distillation"?',
    'a' => 'To separate components of a mixture based on boiling points',
    'b' => 'To purify liquids by evaporation and condensation',
    'c' => 'To filter out solid impurities from a liquid',
    'd' => 'To increase the concentration of a solution',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'Which property of a fluid is measured by a viscometer?',
    'a' => 'Density',
    'b' => 'Viscosity',
    'c' => 'Thermal conductivity',
    'd' => 'Surface tension',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'In chemical engineering, what does the "Prandtl number" represent?',
    'a' => 'The ratio of momentum diffusivity to thermal diffusivity',
    'b' => 'The rate of reaction in a catalytic process',
    'c' => 'The thermal conductivity of a fluid',
    'd' => 'The Reynolds number for turbulent flow',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does the "Arrhenius equation" relate to?',
    'a' => 'The effect of temperature on the rate of a chemical reaction',
    'b' => 'The solubility of gases in liquids',
    'c' => 'The diffusion of molecules through a membrane',
    'd' => 'The boiling point of liquids under pressure',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "mean free path" in gas molecules?',
    'a' => 'The average distance traveled by a molecule between collisions',
    'b' => 'The shortest path taken by gas molecules in a reaction',
    'c' => 'The distance between two points in a gas chamber',
    'd' => 'The mean temperature gradient in a gas',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "azeotrope" in the context of distillation?',
    'a' => 'A mixture of two liquids that has a constant boiling point',
    'b' => 'A liquid that cannot be separated by fractional distillation',
    'c' => 'A compound with a boiling point higher than its components',
    'd' => 'A vapor phase containing multiple components',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'Which type of reactor is typically used for polymerization processes?',
    'a' => 'CSTR (Continuous Stirred-Tank Reactor)',
    'b' => 'PFR (Plug Flow Reactor)',
    'c' => 'Batch Reactor',
    'd' => 'Fluidized Bed Reactor',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'In fluid dynamics, what does the "Bernoulli’s principle" state?',
    'a' => 'An increase in the speed of a fluid occurs simultaneously with a decrease in pressure',
    'b' => 'The rate of flow in a pipe is inversely proportional to its diameter',
    'c' => 'The viscosity of a fluid decreases with an increase in temperature',
    'd' => 'The pressure of a fluid is directly proportional to its temperature',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "catalytic cracking" used for in petroleum refining?',
    'a' => 'To break down larger hydrocarbon molecules into smaller ones',
    'b' => 'To purify crude oil by removing sulfur',
    'c' => 'To combine smaller hydrocarbons into larger ones',
    'd' => 'To distill crude oil into its components',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does "Langmuir isotherm" describe?',
    'a' => 'The adsorption of molecules on a solid surface',
    'b' => 'The boiling point elevation in a solution',
    'c' => 'The diffusion of gases through a membrane',
    'd' => 'The rate of heat transfer in a fluid',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],

[
    'field_id' => 5,
   
    'question' => 'In chemical engineering, what is "saponification"?',
    'a' => 'The process of producing soap from fats and alkali',
    'b' => 'The reaction of acids with bases to form salts',
    'c' => 'The crystallization of solids from a solution',
    'd' => 'The formation of emulsions from immiscible liquids',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "order of a reaction"?',
    'a' => 'The sum of the powers of the concentration terms in the rate equation',
    'b' => 'The sequence in which reactants are added to a reactor',
    'c' => 'The classification of a reaction based on its temperature dependence',
    'd' => 'The rank of a reaction based on its energy change',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does "Le Chatelier\'s principle" state?',
    'a' => 'A system at equilibrium will adjust to counteract changes imposed on it',
    'b' => 'The rate of a reaction is proportional to the product of the reactant concentrations',
    'c' => 'The energy required to initiate a reaction is called activation energy',
    'd' => 'The rate of diffusion of a gas is inversely proportional to the square root of its molar mass',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "osmotic pressure"?',
    'a' => 'The pressure required to stop the flow of solvent through a semipermeable membrane',
    'b' => 'The pressure exerted by a gas in a closed container',
    'c' => 'The pressure at which a liquid boils at a given temperature',
    'd' => 'The pressure generated by the weight of a column of fluid',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'Which process is used to separate liquids based on their volatility?',
    'a' => 'Distillation',
    'b' => 'Filtration',
    'c' => 'Sedimentation',
    'd' => 'Chromatography',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'In heat transfer, what does "Fourier\'s law" relate to?',
    'a' => 'The rate of heat transfer through a material is proportional to the temperature gradient',
    'b' => 'The relationship between heat capacity and temperature',
    'c' => 'The diffusion rate of heat in fluids',
    'd' => 'The energy required to change the temperature of a substance',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "crystallization" in chemical engineering?',
    'a' => 'The formation of solid crystals from a solution',
    'b' => 'The conversion of a solid directly into a gas',
    'c' => 'The process of forming liquid droplets from a vapor',
    'd' => 'The separation of a mixture into its components',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does the "Gibbs free energy" tell us about a chemical reaction?',
    'a' => 'Whether a reaction is spontaneous or non-spontaneous',
    'b' => 'The amount of heat released or absorbed during the reaction',
    'c' => 'The change in entropy during the reaction',
    'd' => 'The equilibrium constant of the reaction',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the function of a "baffle" in a chemical reactor?',
    'a' => 'To improve the mixing of reactants',
    'b' => 'To separate immiscible liquids',
    'c' => 'To increase the surface area for heat transfer',
    'd' => 'To control the flow rate of fluids',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does "Boyle\'s law" describe?',
    'a' => 'The inverse relationship between the pressure and volume of a gas at constant temperature',
    'b' => 'The direct relationship between temperature and pressure of a gas',
    'c' => 'The effect of pressure on the solubility of a gas',
    'd' => 'The relationship between gas volume and temperature at constant pressure',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],

[
    'field_id' => 5,
   
    'question' => 'What is "chemical equilibrium"?',
    'a' => 'The state in which the rate of the forward reaction equals the rate of the reverse reaction',
    'b' => 'The temperature at which a reaction proceeds at its fastest rate',
    'c' => 'The state where no further chemical reactions occur',
    'd' => 'The point at which all reactants have been converted to products',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "adsorption" in chemical engineering?',
    'a' => 'The separation of particles based on size',
    'b' => 'The movement of molecules across a membrane',
    'c' => 'The process by which molecules stick to a surface',
    'd' => 'The process of dissolving a substance in a liquid',
    'answer' => 'c',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "activation energy" of a chemical reaction?',
    'a' => 'The minimum energy required for a reaction to occur',
    'b' => 'The energy released during the formation of products',
    'c' => 'The heat absorbed during the reaction',
    'd' => 'The difference in energy between reactants and products',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'Which type of reaction is characterized by the release of energy?',
    'a' => 'Isothermal reaction',
    'b' => 'Endothermic reaction',
    'c' => 'Exothermic reaction',
    'd' => 'Adiabatic reaction',
    'answer' => 'c',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "Henry\'s law" concerned with?',
    'a' => 'The thermal conductivity of fluids',
    'b' => 'The solubility of a gas in a liquid is directly proportional to the partial pressure of the gas',
    'c' => 'The boiling point of liquids at different pressures',
    'd' => 'The rate of diffusion of gases across a membrane',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'In thermodynamics, what does the "first law" state?',
    'a' => 'Energy cannot be created or destroyed, only transferred or converted',
    'b' => 'The entropy of a system always increases',
    'c' => 'The total energy of a system is conserved',
    'd' => 'The pressure of a gas is directly proportional to its temperature',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "Nusselt number" used to describe?',
    'a' => 'The rate of mass transfer in a fluid',
    'b' => 'The ratio of convective to conductive heat transfer',
    'c' => 'The pressure drop in a pipe flow',
    'd' => 'The velocity profile of fluid flow in a pipe',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the main function of a "scrubber" in a chemical plant?',
    'a' => 'To control the flow rate of gases',
    'b' => 'To separate solid particles from liquids',
    'c' => 'To increase the temperature of a fluid',
    'd' => 'To remove pollutants from gas emissions',
    'answer' => 'd',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does the "Claus process" involve?',
    'a' => 'The conversion of hydrogen sulfide into elemental sulfur',
    'b' => 'The production of ammonia from nitrogen and hydrogen',
    'c' => 'The removal of carbon dioxide from natural gas',
    'd' => 'The refining of crude oil into petroleum products',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "enthalpy" of a system?',
    'a' => 'The change in entropy during a process',
    'b' => 'The total heat content of a system',
    'c' => 'The energy required to break chemical bonds',
    'd' => 'The equilibrium constant of a reaction',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],

[
    'field_id' => 5,
   
    'question' => 'What is the purpose of a "fluidized bed" in chemical engineering?',
    'a' => 'To support the movement of solid particles within a fluid',
    'b' => 'To increase the pressure of a gas',
    'c' => 'To mix liquids of different viscosities',
    'd' => 'To separate gases based on their density',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "reaction kinetics" concerned with?',
    'a' => 'The rates of chemical reactions and the factors affecting them',
    'b' => 'The equilibrium constant of reactions',
    'c' => 'The energy changes during reactions',
    'd' => 'The formation of reaction intermediates',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "dynamic viscosity"?',
    'a' => 'A measure of a fluid’s resistance to shear or flow',
    'b' => 'The ability of a fluid to transfer heat',
    'c' => 'The ratio of a fluid’s density to its volume',
    'd' => 'The resistance of a fluid to compression',
    'answer' => 'd',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does the "Coulomb\'s law" describe?',
    'a' => 'The electrostatic force between charged particles',
    'b' => 'The flow of electric current in a conductor',
    'c' => 'The relation between temperature and pressure in gases',
    'd' => 'The heat capacity of materials',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "Boiling Point Elevation" phenomenon?',
    'a' => 'The increase in boiling point of a solvent due to the presence of a non-volatile solute',
    'b' => 'The rise in temperature of a solution during exothermic reactions',
    'c' => 'The decrease in boiling point due to pressure reduction',
    'd' => 'The increase in boiling point due to increased temperature',
    'answer' => 'c',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "vapor-liquid equilibrium"?',
    'a' => 'The state where a liquid reaches its boiling point',
    'b' => 'The condition where the rate of evaporation equals the rate of condensation',
    'c' => 'The condition where the pressure is equal in both phases',
    'd' => 'The state where vapor and liquid phases are at different temperatures',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the main advantage of using "membrane separation" techniques?',
    'a' => 'Ability to handle very high temperatures',
    'b' => 'Reduction of reaction time significantly',
    'c' => 'Ability to neutralize harmful chemicals effectively',
    'd' => 'High efficiency in separating mixtures with minimal energy',
    'answer' => 'd',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'In chemical engineering, what does "heat capacity" refer to?',
    'a' => 'The heat released during a chemical reaction',
    'b' => 'The rate at which heat is transferred through a material',
    'c' => 'The total energy content of a chemical system',
    'd' => 'The amount of heat required to change the temperature of a substance by one degree',
    'answer' => 'd',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "Raoult\'s law" used for in chemical engineering?',
    'a' => 'Estimating the heat capacity of a solution',
    'b' => 'Determining the rate of a chemical reaction',
    'c' => 'Predicting the vapor pressure of a solution based on its components',
    'd' => 'Calculating the diffusion rate of solutes in a solvent',
    'answer' => 'c',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "thermal conductivity"?',
    'a' => 'The total heat capacity of a system',
    'b' => 'The change in heat content with temperature',
    'c' => 'The ability of a material to conduct heat',
    'd' => 'The rate of energy absorption by a material',
    'answer' => 'c',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does the "Arrhenius equation" describe?',
    'a' => 'The equilibrium constant of a reaction',
    'b' => 'The effect of temperature on the rate of a chemical reaction',
    'c' => 'The solubility of gases in liquids',
    'd' => 'The relationship between pressure and volume of gases',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],


[
    'field_id' => 5,
   
    'question' => 'What is "chemical engineering thermodynamics"?',
    'a' => 'The study of energy changes in chemical processes',
    'b' => 'The study of chemical reactions at different temperatures',
    'c' => 'The study of the rates of chemical reactions',
    'd' => 'The study of fluid dynamics in chemical processes',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does the "Dew Point" refer to?',
    'a' => 'The temperature at which a gas begins to condense',
    'b' => 'The pressure at which a liquid boils',
    'c' => 'The temperature at which a liquid freezes',
    'd' => 'The temperature at which a gas reaches its maximum pressure',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "chemical process control"?',
    'a' => 'The management of chemical reactions and systems to ensure safe and efficient operation',
    'b' => 'The separation of chemicals based on their properties',
    'c' => 'The optimization of reaction conditions',
    'd' => 'The study of chemical kinetics and reaction mechanisms',
    'answer' => 'd',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does the "Hess\'s Law" state?',
    'a' => 'The total enthalpy change of a reaction is the same regardless of the number of steps',
    'b' => 'The enthalpy change of a reaction is dependent on the temperature',
    'c' => 'The entropy change of a reaction is constant',
    'd' => 'The heat capacity of a substance changes with pressure',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the main function of a "centrifuge" in chemical engineering?',
    'a' => 'To increase the temperature of a chemical reaction',
    'b' => 'To mix chemicals in a controlled manner',
    'c' => 'To measure the chemical composition of a solution',
    'd' => 'To separate mixtures based on density by spinning them at high speeds',
    'answer' => 'd',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "enthalpy of formation"?',
    'a' => 'The heat released or absorbed when one mole of a compound is formed from its elements',
    'b' => 'The energy required to break chemical bonds in a substance',
    'c' => 'The change in heat content during a phase transition',
    'd' => 'The heat capacity of a substance at constant pressure',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does "Le Chatelier\'s principle" predict?',
    'a' => 'How a system at equilibrium will respond to changes in concentration, pressure, or temperature',
    'b' => 'The rate at which a chemical reaction will reach equilibrium',
    'c' => 'The energy change associated with a reaction',
    'd' => 'The solubility of a substance in a solution',
    'answer' => 'c',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "chemical reactor design"?',
    'a' => 'The process of designing reactors to achieve optimal reaction conditions and efficiency',
    'b' => 'The study of reaction kinetics in different types of reactors',
    'c' => 'The analysis of chemical reaction mechanisms',
    'd' => 'The development of new chemical reactions',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does "adsorption" differ from "absorption"?',
    'a' => 'Adsorption involves molecules sticking to a surface, while absorption involves molecules being incorporated into the bulk of a material',
    'b' => 'Adsorption occurs at high temperatures, while absorption occurs at low temperatures',
    'c' => 'Adsorption is a physical process, while absorption is a chemical process',
    'd' => 'Adsorption and absorption are synonymous terms',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "mass balance" in chemical engineering?',
    'a' => 'The calculation of the mass flow rates and concentrations in a chemical process to ensure that mass is conserved',
    'b' => 'The measurement of the density of different substances',
    'c' => 'The assessment of heat transfer in a chemical reaction',
    'd' => 'The determination of the reaction rates in a chemical process',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "Zeta potential" used to measure?',
    'a' => 'The electrostatic potential at the slipping plane of a particle in a liquid',
    'b' => 'The pressure required to compress a fluid',
    'c' => 'The temperature at which a fluid boils',
    'd' => 'The rate of heat transfer in a fluid',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],

[
    'field_id' => 5,
   
    'question' => 'What is the main use of "fluidized bed reactors" in chemical engineering?',
    'a' => 'To separate liquid mixtures based on density',
    'b' => 'To control the temperature of exothermic reactions',
    'c' => 'To measure the pressure of gas streams',
    'd' => 'To increase the surface area for chemical reactions',
    'answer' => 'd',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the significance of the "Arrhenius equation" in chemical engineering?',
    'a' => 'It predicts the equilibrium position of a chemical reaction',
    'b' => 'It calculates the heat released during a chemical reaction',
    'c' => 'It measures the energy required to initiate a chemical reaction',
    'd' => 'It describes the relationship between temperature and the rate of a chemical reaction',
    'answer' => 'd',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "Knudsen diffusion"?',
    'a' => 'The movement of molecules in a fluid due to concentration gradients',
    'b' => 'The diffusion of gas molecules through small pores where collisions with the pore walls dominate',
    'c' => 'The process of mixing two gases of different densities',
    'd' => 'The diffusion of molecules in a liquid across a membrane',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the purpose of a "scrubber" in chemical engineering?',
    'a' => 'To mix reactants in a reactor',
    'b' => 'To filter out impurities from liquid chemicals',
    'c' => 'To cool down chemical reactors',
    'd' => 'To remove particulates and gases from industrial exhaust streams',
    'answer' => 'd',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "crystallization" used for in chemical processes?',
    'a' => 'To increase the solubility of a substance',
    'b' => 'To purify a solid substance from a solution',
    'c' => 'To control the pH of a solution',
    'd' => 'To separate a mixture into its components',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "Gibbs free energy" in a chemical reaction?',
    'a' => 'The total energy required to break all chemical bonds in the reactants',
    'b' => 'The energy required to overcome activation energy',
    'c' => 'The energy lost to the surroundings as heat',
    'd' => 'The energy available to do work in a system at constant temperature and pressure',
    'answer' => 'd',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does the "Langmuir isotherm" describe?',
    'a' => 'The rate of diffusion of gases through a membrane',
    'b' => 'The solubility of gases in liquids at different temperatures',
    'c' => 'The relationship between the concentration of a gas and the amount adsorbed onto a solid surface',
    'd' => 'The distribution of solutes between a solid and a liquid phase',
    'answer' => 'c',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "octane number" a measure of?',
    'a' => 'The viscosity of a fuel',
    'b' => 'The heat capacity of a fuel',
    'c' => 'The anti-knock properties of gasoline',
    'd' => 'The density of a fuel',
    'answer' => 'c',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "Flash Point" of a substance?',
    'a' => 'The temperature at which it spontaneously ignites',
    'b' => 'The lowest temperature at which it can vaporize to form an ignitable mixture in air',
    'c' => 'The highest temperature at which a liquid can exist under atmospheric pressure',
    'd' => 'The temperature at which a liquid solidifies',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "supercritical fluid extraction"?',
    'a' => 'A method of distillation under high pressure',
    'b' => 'A process of separating one component from another using a supercritical fluid as the extracting solvent',
    'c' => 'The extraction of substances at sub-zero temperatures',
    'd' => 'The separation of solids based on particle size',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],

[
    'field_id' => 5,
   
    'question' => 'What is "Henry’s Law" in chemical engineering?',
    'a' => 'The principle that describes the diffusion of gases through a membrane',
    'b' => 'The law stating that the amount of dissolved gas in a liquid is proportional to its partial pressure above the liquid',
    'c' => 'The law that relates the pressure and volume of a gas at constant temperature',
    'd' => 'The principle that governs the rate of chemical reactions',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the purpose of "Le Chatelier’s principle"?',
    'a' => 'To predict the effect of a change in conditions on chemical equilibria',
    'b' => 'To determine the rate of a chemical reaction',
    'c' => 'To calculate the energy change during a reaction',
    'd' => 'To describe the solubility of gases in liquids',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "Fick’s first law of diffusion"?',
    'a' => 'It states that the rate of diffusion is proportional to the concentration gradient',
    'b' => 'It describes the relationship between the rate of diffusion and temperature',
    'c' => 'It relates the diffusion coefficient to the viscosity of the medium',
    'd' => 'It explains the diffusion of particles in a turbulent flow',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "Boyle’s Law" in relation to gases?',
    'a' => 'It states that the volume of a gas is directly proportional to its temperature',
    'b' => 'It states that the pressure of a gas is inversely proportional to its volume at constant temperature',
    'c' => 'It states that the pressure of a gas is directly proportional to its volume at constant temperature',
    'd' => 'It describes the relationship between pressure, volume, and temperature of a gas',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "specific heat capacity"?',
    'a' => 'The amount of heat required to raise the temperature of a unit mass of a substance by one degree Celsius',
    'b' => 'The amount of heat released when a substance is burned in oxygen',
    'c' => 'The energy required to change the phase of a substance at constant temperature',
    'd' => 'The heat absorbed by a substance during a chemical reaction',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the function of a "mixer-settler" in a chemical process?',
    'a' => 'To mix two immiscible liquids and separate them based on density differences',
    'b' => 'To control the temperature of a reaction',
    'c' => 'To filter solid particles from a liquid',
    'd' => 'To extract a solute from one solvent into another',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "molarity" in the context of solutions?',
    'a' => 'The amount of solute present in a solution',
    'b' => 'The number of moles of solute per liter of solution',
    'c' => 'The volume of solvent required to dissolve a solute',
    'd' => 'The concentration of ions in a solution',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does the "Haber process" produce?',
    'a' => 'Ammonia',
    'b' => 'Methanol',
    'c' => 'Sulfuric acid',
    'd' => 'Urea',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "pH scale" used to measure?',
    'a' => 'The acidity or basicity of a solution',
    'b' => 'The concentration of hydrogen ions in a solution',
    'c' => 'The conductivity of an electrolyte solution',
    'd' => 'The solubility of gases in liquids',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does the "Claus process" recover from natural gas?',
    'a' => 'Methane',
    'b' => 'Sulfur',
    'c' => 'Hydrogen',
    'd' => 'Carbon dioxide',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],

// Aeroscope engineering


[
    'field_id' => 5,
   
    'question' => 'What is the primary purpose of a "winglet" on an aircraft?',
    'a' => 'To increase the lift generated by the wings',
    'b' => 'To reduce the drag caused by wingtip vortices',
    'c' => 'To increase the stability of the aircraft',
    'd' => 'To improve fuel efficiency by reducing weight',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the function of a "gyroscope" in an aircraft?',
    'a' => 'To measure altitude',
    'b' => 'To control the roll of the aircraft',
    'c' => 'To provide stability and orientation',
    'd' => 'To measure the speed of the aircraft',
    'answer' => 'c',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "thrust" in aerospace engineering?',
    'a' => 'The force that opposes gravity',
    'b' => 'The force generated by the propulsion system to move the aircraft forward',
    'c' => 'The lift generated by the wings',
    'd' => 'The resistance force caused by air drag',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the main purpose of a "heat shield" on a spacecraft?',
    'a' => 'To protect the spacecraft from micrometeoroids',
    'b' => 'To reduce the weight of the spacecraft',
    'c' => 'To protect the spacecraft from intense heat during re-entry into Earth’s atmosphere',
    'd' => 'To stabilize the spacecraft during flight',
    'answer' => 'c',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "Mach number" in aerospace engineering?',
    'a' => 'The speed of sound in air',
    'b' => 'The ratio of the speed of an object to the speed of sound',
    'c' => 'The distance an object travels in one second',
    'd' => 'The force exerted by an object moving at high speed',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "aerodynamics"?',
    'a' => 'The study of how gases interact with moving objects',
    'b' => 'The design of spacecraft to withstand space travel',
    'c' => 'The study of the effects of radiation on aircraft materials',
    'd' => 'The process of reducing aircraft weight',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the primary function of "ailerons" on an aircraft?',
    'a' => 'To control the pitch of the aircraft',
    'b' => 'To control the roll of the aircraft',
    'c' => 'To control the yaw of the aircraft',
    'd' => 'To increase the speed of the aircraft',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "drag" in the context of flight?',
    'a' => 'The force that propels the aircraft forward',
    'b' => 'The force that opposes the forward motion of the aircraft',
    'c' => 'The lift generated by the wings',
    'd' => 'The force that keeps the aircraft in the air',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the purpose of "flaps" on an aircraft wing?',
    'a' => 'To decrease lift during landing',
    'b' => 'To increase lift during takeoff and landing',
    'c' => 'To reduce drag during flight',
    'd' => 'To control the roll of the aircraft',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "altimeter" used for in an aircraft?',
    'a' => 'To measure airspeed',
    'b' => 'To measure altitude',
    'c' => 'To measure the direction of the aircraft',
    'd' => 'To measure the rate of climb or descent',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],

[
    'field_id' => 5,
   
    'question' => 'What is the purpose of the "rudder" on an aircraft?',
    'a' => 'To control the pitch of the aircraft',
    'b' => 'To control the yaw of the aircraft',
    'c' => 'To increase lift during takeoff',
    'd' => 'To control the roll of the aircraft',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "lift" in the context of aerodynamics?',
    'a' => 'The force that propels the aircraft forward',
    'b' => 'The force that opposes the forward motion of the aircraft',
    'c' => 'The force that keeps the aircraft in the air',
    'd' => 'The force that pulls the aircraft downward',
    'answer' => 'c',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the function of a "turbojet engine"?',
    'a' => 'To produce thrust by expelling air at high velocity',
    'b' => 'To provide lift for the aircraft',
    'c' => 'To control the pitch of the aircraft',
    'd' => 'To reduce drag during flight',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "angle of attack" in aviation?',
    'a' => 'The angle between the aircraft’s longitudinal axis and the ground',
    'b' => 'The angle between the wing’s chord line and the direction of the oncoming air',
    'c' => 'The angle between the aircraft’s wings and the fuselage',
    'd' => 'The angle between the aircraft’s tail and the ground',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the purpose of a "spoiler" on an aircraft?',
    'a' => 'To increase lift during takeoff',
    'b' => 'To reduce lift and increase drag during landing',
    'c' => 'To control the roll of the aircraft',
    'd' => 'To decrease drag during flight',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "re-entry" in the context of spaceflight?',
    'a' => 'The phase when a spacecraft returns to Earth’s atmosphere from space',
    'b' => 'The phase when a spacecraft enters orbit around Earth',
    'c' => 'The process of docking with a space station',
    'd' => 'The maneuver used to launch a spacecraft from Earth',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "g-force" in aerospace engineering?',
    'a' => 'The force exerted by gravity on a stationary object',
    'b' => 'The force of acceleration experienced by an object',
    'c' => 'The force that opposes lift during flight',
    'd' => 'The force generated by the engine of an aircraft',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the purpose of "afterburners" in jet engines?',
    'a' => 'To increase fuel efficiency during cruise flight',
    'b' => 'To reduce the noise of the jet engine',
    'c' => 'To provide additional thrust by injecting fuel into the exhaust stream',
    'd' => 'To control the temperature of the engine',
    'answer' => 'c',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "fuselage" of an aircraft?',
    'a' => 'The main body of the aircraft that houses the crew, passengers, and cargo',
    'b' => 'The wing structure that provides lift',
    'c' => 'The engine compartment of the aircraft',
    'd' => 'The tail section of the aircraft',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the purpose of the "elevator" on an aircraft?',
    'a' => 'To control the pitch of the aircraft',
    'b' => 'To control the yaw of the aircraft',
    'c' => 'To increase lift during takeoff',
    'd' => 'To reduce drag during flight',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],

[
    'field_id' => 5,
   
    'question' => 'What is "turbulence" in aviation?',
    'a' => 'The smooth and steady flow of air over the wings',
    'b' => 'The irregular and unpredictable movement of air',
    'c' => 'The force that opposes lift during flight',
    'd' => 'The sudden increase in altitude',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the primary function of "landing gear" on an aircraft?',
    'a' => 'To reduce drag during flight',
    'b' => 'To provide stability in flight',
    'c' => 'To support the aircraft during takeoff and landing',
    'd' => 'To control the direction of the aircraft on the ground',
    'answer' => 'c',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "aeronautics"?',
    'a' => 'The study of how gases interact with spacecraft',
    'b' => 'The design and development of spacecraft for space travel',
    'c' => 'The study of the principles and technology of flight within the Earth’s atmosphere',
    'd' => 'The study of the Earth’s atmosphere and weather patterns',
    'answer' => 'c',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the purpose of a "black box" on an aircraft?',
    'a' => 'To record flight data and cockpit conversations',
    'b' => 'To control the flight path of the aircraft',
    'c' => 'To provide real-time communication with air traffic control',
    'd' => 'To store fuel for long-distance flights',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "stall" condition in aviation?',
    'a' => 'When the engine of an aircraft fails during flight',
    'b' => 'When the aircraft exceeds the speed of sound',
    'c' => 'When the airflow over the wings is disrupted, causing a loss of lift',
    'd' => 'When the landing gear fails to deploy',
    'answer' => 'c',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the role of "mission control" during a space mission?',
    'a' => 'To design and construct the spacecraft',
    'b' => 'To monitor and support the spacecraft and crew during the mission',
    'c' => 'To launch the spacecraft from Earth',
    'd' => 'To conduct spacewalks and repairs on the spacecraft',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "cockpit" of an aircraft?',
    'a' => 'The section of the aircraft where cargo is stored',
    'b' => 'The area where the passengers are seated',
    'c' => 'The area where the pilots control the aircraft',
    'd' => 'The compartment where the engines are located',
    'answer' => 'c',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the function of a "jet nozzle" in an aircraft engine?',
    'a' => 'To mix fuel with air for combustion',
    'b' => 'To exhaust the gases at high speed to produce thrust',
    'c' => 'To reduce noise during takeoff',
    'd' => 'To increase the fuel efficiency of the engine',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "hypersonic speed"?',
    'a' => 'A speed faster than the speed of sound',
    'b' => 'A speed five times or more than the speed of sound',
    'c' => 'A speed that allows an aircraft to exit the Earth’s atmosphere',
    'd' => 'A speed slower than the speed of sound',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the primary purpose of "ailerons" on an aircraft?',
    'a' => 'To control the pitch of the aircraft',
    'b' => 'To control the roll of the aircraft',
    'c' => 'To control the yaw of the aircraft',
    'd' => 'To increase lift during takeoff',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],

[
    'field_id' => 5,
   
    'question' => 'What is the "Mach number"?',
    'a' => 'The ratio of the speed of sound to the speed of light',
    'b' => 'The ratio of an object’s speed to the speed of sound',
    'c' => 'The ratio of the speed of an aircraft to the speed of its engine',
    'd' => 'The ratio of the speed of light to the speed of sound',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the primary function of "flaps" on an aircraft?',
    'a' => 'To control the pitch of the aircraft',
    'b' => 'To increase lift during takeoff and landing',
    'c' => 'To reduce the drag of the aircraft',
    'd' => 'To control the roll of the aircraft',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "drag" in the context of aerodynamics?',
    'a' => 'The force that pushes the aircraft forward',
    'b' => 'The force that pulls the aircraft upward',
    'c' => 'The force that opposes the motion of the aircraft through the air',
    'd' => 'The force that causes the aircraft to descend',
    'answer' => 'c',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does "thrust" refer to in aviation?',
    'a' => 'The upward force that opposes gravity',
    'b' => 'The force generated by the engines to propel the aircraft forward',
    'c' => 'The resistance experienced by the aircraft moving through the air',
    'd' => 'The force that stabilizes the aircraft during flight',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the function of "ailerons" on an aircraft?',
    'a' => 'To increase the lift during takeoff',
    'b' => 'To control the roll of the aircraft',
    'c' => 'To reduce drag during flight',
    'd' => 'To control the yaw of the aircraft',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "fuselage" of an aircraft?',
    'a' => 'The wing structure that provides lift',
    'b' => 'The main body of the aircraft that houses the crew, passengers, and cargo',
    'c' => 'The engine compartment of the aircraft',
    'd' => 'The tail section of the aircraft',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "escape velocity" in aerospace engineering?',
    'a' => 'The speed needed to stay in orbit around Earth',
    'b' => 'The speed required to break free from Earth’s gravitational pull',
    'c' => 'The speed needed to re-enter Earth’s atmosphere',
    'd' => 'The speed required to land safely on Earth',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "re-entry" in the context of spaceflight?',
    'a' => 'The phase when a spacecraft returns to Earth’s atmosphere from space',
    'b' => 'The phase when a spacecraft enters orbit around Earth',
    'c' => 'The process of docking with a space station',
    'd' => 'The maneuver used to launch a spacecraft from Earth',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the function of "landing gear" on an aircraft?',
    'a' => 'To support the aircraft during takeoff and landing',
    'b' => 'To reduce drag during flight',
    'c' => 'To provide stability in flight',
    'd' => 'To control the direction of the aircraft on the ground',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "stall" condition in aviation?',
    'a' => 'When the engine of an aircraft fails during flight',
    'b' => 'When the aircraft exceeds the speed of sound',
    'c' => 'When the airflow over the wings is disrupted, causing a loss of lift',
    'd' => 'When the landing gear fails to deploy',
    'answer' => 'c',
    'created_at' => now(),
    'updated_at' => now()
],


[
    'field_id' => 5,
   
    'question' => 'What is the "Center of Gravity" (CG) in an aircraft?',
    'a' => 'The point where the aircraft’s weight is evenly distributed in all directions',
    'b' => 'The point where the wings generate maximum lift',
    'c' => 'The point where the aircraft’s nose is directed',
    'd' => 'The point where the aircraft’s engines are located',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the purpose of a "tailplane" on an aircraft?',
    'a' => 'To increase the speed of the aircraft',
    'b' => 'To provide stability and control in pitch',
    'c' => 'To reduce the aircraft’s drag',
    'd' => 'To house the aircraft’s engines',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does "VTOL" stand for in aerospace engineering?',
    'a' => 'Vertical Take-Off and Landing',
    'b' => 'Variable Thrust Operation Load',
    'c' => 'Very Tall Operational Launch',
    'd' => 'Variable Temperature Output Level',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the function of the "rudder" on an aircraft?',
    'a' => 'To control the roll of the aircraft',
    'b' => 'To control the yaw of the aircraft',
    'c' => 'To increase lift during takeoff',
    'd' => 'To control the pitch of the aircraft',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "afterburner" used for in jet engines?',
    'a' => 'To reduce noise during flight',
    'b' => 'To increase thrust by injecting fuel into the exhaust stream',
    'c' => 'To cool the engine during high-speed flight',
    'd' => 'To improve fuel efficiency during cruise',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "cockpit" of an aircraft?',
    'a' => 'The area where the pilots control the aircraft',
    'b' => 'The section of the aircraft where cargo is stored',
    'c' => 'The compartment where the engines are located',
    'd' => 'The area where the passengers are seated',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "fuselage" in an aircraft?',
    'a' => 'The wing structure that provides lift',
    'b' => 'The main body of the aircraft that houses the crew, passengers, and cargo',
    'c' => 'The tail section of the aircraft',
    'd' => 'The engine compartment of the aircraft',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "hypersonic speed"?',
    'a' => 'A speed five times or more than the speed of sound',
    'b' => 'A speed faster than the speed of sound',
    'c' => 'A speed that allows an aircraft to exit the Earth’s atmosphere',
    'd' => 'A speed slower than the speed of sound',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "thrust" in aviation?',
    'a' => 'The resistance experienced by the aircraft moving through the air',
    'b' => 'The force generated by the engines to propel the aircraft forward',
    'c' => 'The upward force that opposes gravity',
    'd' => 'The force that stabilizes the aircraft during flight',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "Mach number"?',
    'a' => 'The ratio of an object’s speed to the speed of sound',
    'b' => 'The ratio of the speed of light to the speed of sound',
    'c' => 'The ratio of the speed of an aircraft to the speed of its engine',
    'd' => 'The ratio of the speed of sound to the speed of light',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],


[
    'field_id' => 5,
   
    'question' => 'What is the purpose of a "winglet" on an aircraft?',
    'a' => 'To reduce drag and improve fuel efficiency',
    'b' => 'To increase the aircraft’s speed',
    'c' => 'To provide additional lift during takeoff',
    'd' => 'To stabilize the aircraft during landing',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does "ISP" stand for in rocket propulsion?',
    'a' => 'Ignition Start Point',
    'b' => 'Internal System Pressure',
    'c' => 'Impulse Speed',
    'd' => 'Specific Impulse',
    'answer' => 'd',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "black box" in an aircraft?',
    'a' => 'The device that records flight data and cockpit voice communications',
    'b' => 'The emergency location transmitter',
    'c' => 'The backup control system for flight operations',
    'd' => 'The compartment where hazardous materials are stored',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the function of "spoilers" on an aircraft?',
    'a' => 'To increase lift during takeoff',
    'b' => 'To decrease lift and increase drag',
    'c' => 'To control the yaw of the aircraft',
    'd' => 'To provide additional thrust during flight',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "angle of attack" in aerodynamics?',
    'a' => 'The angle between the aircraft’s flight path and the horizon',
    'b' => 'The angle between the oncoming air and the wing’s chord line',
    'c' => 'The angle between the aircraft’s nose and its tail',
    'd' => 'The angle between the wings and the fuselage',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the primary cause of a "stall" in an aircraft?',
    'a' => 'Excessive speed',
    'b' => 'Insufficient lift due to a high angle of attack',
    'c' => 'Engine failure',
    'd' => 'Loss of control surfaces',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "yaw" in aviation?',
    'a' => 'The vertical axis rotation of an aircraft',
    'b' => 'The lateral movement of the aircraft’s nose left or right',
    'c' => 'The tilting motion of the aircraft’s wings',
    'd' => 'The forward motion of the aircraft',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the purpose of "landing flaps" on an aircraft?',
    'a' => 'To reduce the aircraft’s speed during descent',
    'b' => 'To increase lift at lower speeds for safe landing',
    'c' => 'To stabilize the aircraft during flight',
    'd' => 'To assist in takeoff by providing additional lift',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the function of the "elevator" on an aircraft?',
    'a' => 'To control the roll of the aircraft',
    'b' => 'To control the pitch of the aircraft',
    'c' => 'To reduce drag during flight',
    'd' => 'To control the yaw of the aircraft',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does "G-force" refer to in aerospace engineering?',
    'a' => 'The force of gravity acting on an object',
    'b' => 'The force exerted by an object moving through a fluid',
    'c' => 'The force experienced by an aircraft during a turn',
    'd' => 'The force generated by an aircraft’s engines',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],

[
    'field_id' => 5,
   
    'question' => 'What is the "pitch" of an aircraft?',
    'a' => 'The upward or downward movement of the aircraft’s nose',
    'b' => 'The side-to-side movement of the aircraft’s tail',
    'c' => 'The rotational speed of the aircraft’s propeller',
    'd' => 'The horizontal movement of the aircraft’s wings',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "drag" force in aerodynamics?',
    'a' => 'The force that opposes the aircraft’s forward motion',
    'b' => 'The force that lifts the aircraft upward',
    'c' => 'The force that pushes the aircraft forward',
    'd' => 'The force that stabilizes the aircraft during flight',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does "APU" stand for in aviation?',
    'a' => 'Air Pressure Unit',
    'b' => 'Auxiliary Power Unit',
    'c' => 'Altitude Position Unit',
    'd' => 'Aerodynamic Propulsion Unit',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the primary purpose of "flaps" on an aircraft wing?',
    'a' => 'To increase the lift during takeoff and landing',
    'b' => 'To reduce drag during cruise',
    'c' => 'To stabilize the aircraft during turns',
    'd' => 'To control the aircraft’s speed',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "chord line" of an aircraft wing?',
    'a' => 'The imaginary straight line from the leading edge to the trailing edge of the wing',
    'b' => 'The curved path of air over the top of the wing',
    'c' => 'The line representing the aircraft’s direction of travel',
    'd' => 'The line indicating the aircraft’s center of mass',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the primary function of "thrust reversers" on an aircraft?',
    'a' => 'To increase lift during takeoff',
    'b' => 'To slow down the aircraft during landing',
    'c' => 'To assist in steep climbs',
    'd' => 'To provide additional thrust in emergencies',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "aerodynamic stall"?',
    'a' => 'A condition where the airflow over the wings is disrupted, causing a loss of lift',
    'b' => 'A sudden increase in airspeed causing instability',
    'c' => 'The aircraft reaching maximum altitude',
    'd' => 'An engine failure during flight',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "rudder" used for in an aircraft?',
    'a' => 'To control the yaw motion of the aircraft',
    'b' => 'To increase lift during takeoff',
    'c' => 'To control the pitch of the aircraft',
    'd' => 'To reduce drag during cruise',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does "supersonic" refer to in aerospace engineering?',
    'a' => 'Speeds greater than the speed of sound',
    'b' => 'Speeds greater than the speed of light',
    'c' => 'Speeds lower than the speed of sound',
    'd' => 'Speeds at the speed of sound',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "bank angle" in aviation?',
    'a' => 'The angle at which the aircraft tilts during a turn',
    'b' => 'The angle between the aircraft’s nose and the horizon',
    'c' => 'The angle between the wings and the fuselage',
    'd' => 'The angle at which the aircraft descends during landing',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],

[
    'field_id' => 5,
   
    'question' => 'What does "Mach number" represent in aerospace engineering?',
    'a' => 'The speed of an object relative to the speed of wind',
    'b' => 'The speed of an aircraft relative to the speed of light',
    'c' => 'The ratio of an object’s speed to the speed of sound',
    'd' => 'The ratio of an aircraft’s altitude to its airspeed',
    'answer' => 'c',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the purpose of a "jet engine compressor"?',
    'a' => 'To compress incoming air to increase its pressure',
    'b' => 'To reduce the noise generated by the engine',
    'c' => 'To mix fuel with air for combustion',
    'd' => 'To decrease the temperature of incoming air',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the function of "ailerons" on an aircraft?',
    'a' => 'To control the yaw of the aircraft',
    'b' => 'To control the roll of the aircraft',
    'c' => 'To increase lift during takeoff',
    'd' => 'To control the pitch of the aircraft',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does "VTOL" stand for in aerospace technology?',
    'a' => 'Vector Thrust and Orientation Lift',
    'b' => 'Velocity Test and Operational Lift',
    'c' => 'Variable Thrust and Onboard Lift',
    'd' => 'Vertical Take-Off and Landing',
    'answer' => 'd',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "lift" in aerodynamics?',
    'a' => 'The force that controls the stability of the aircraft',
    'b' => 'The force that opposes the thrust and slows down the aircraft',
    'c' => 'The force that opposes the weight of the aircraft and holds it in the air',
    'd' => 'The force that pushes the aircraft forward',
    'answer' => 'c',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does "thrust" refer to in an aircraft?',
    'a' => 'The force that stabilizes the aircraft during turns',
    'b' => 'The force generated by the engines to propel the aircraft forward',
    'c' => 'The force that reduces the speed of the aircraft',
    'd' => 'The force that opposes the lift and keeps the aircraft on the ground',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the purpose of "airbrakes" on an aircraft?',
    'a' => 'To provide additional lift during landing',
    'b' => 'To stabilize the aircraft during flight',
    'c' => 'To increase the speed of the aircraft during takeoff',
    'd' => 'To reduce the speed of the aircraft during descent and landing',
    'answer' => 'd',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "fuselage" of an aircraft?',
    'a' => 'The main body of the aircraft that holds the crew, passengers, and cargo',
    'b' => 'The wing structure that generates lift',
    'c' => 'The rotating blade that provides lift in a helicopter',
    'd' => 'The tail section that controls the aircraft’s direction',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "cockpit" in an aircraft?',
    'a' => 'The rear part of the aircraft that contains the tail',
    'b' => 'The section that houses the aircraft’s engines',
    'c' => 'The compartment for cargo storage',
    'd' => 'The area where the pilots control the aircraft',
    'answer' => 'd',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does "AOA" stand for in aviation?',
    'a' => 'Angle of Attack',
    'b' => 'Altitude Over Air',
    'c' => 'Aircraft Orientation Angle',
    'd' => 'Airflow Over Altitude',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],

[
    'field_id' => 5,
   
    'question' => 'What is the purpose of a "rudder" on an aircraft?',
    'a' => 'To control the yaw (left and right movement) of the aircraft',
    'b' => 'To control the pitch (up and down movement) of the aircraft',
    'c' => 'To increase the lift during takeoff',
    'd' => 'To reduce drag during flight',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "drag" in aerodynamics?',
    'a' => 'The force that opposes the forward motion of the aircraft',
    'b' => 'The force that lifts the aircraft into the air',
    'c' => 'The force that pushes the aircraft forward',
    'd' => 'The force that stabilizes the aircraft during flight',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'Which part of an aircraft is primarily responsible for lift?',
    'a' => 'The tail',
    'b' => 'The wings',
    'c' => 'The fuselage',
    'd' => 'The landing gear',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the function of a "spoiler" on an aircraft wing?',
    'a' => 'To disrupt airflow and reduce lift',
    'b' => 'To increase thrust during takeoff',
    'c' => 'To stabilize the aircraft during flight',
    'd' => 'To increase lift during landing',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "afterburner" used for in jet engines?',
    'a' => 'To increase thrust by injecting fuel into the exhaust stream',
    'b' => 'To reduce noise generated by the engine',
    'c' => 'To cool down the engine during high-speed flight',
    'd' => 'To reduce fuel consumption at high altitudes',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does "IAS" stand for in aviation?',
    'a' => 'Indicated Airspeed',
    'b' => 'Instantaneous Altitude Speed',
    'c' => 'Internal Aerodynamic Stability',
    'd' => 'In-flight Altitude System',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the purpose of "flaps" on an aircraft wing?',
    'a' => 'To increase lift during takeoff and landing',
    'b' => 'To decrease drag during high-speed flight',
    'c' => 'To stabilize the aircraft during turns',
    'd' => 'To control the yaw of the aircraft',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "angle of attack" in aviation?',
    'a' => 'The angle between the wing and the horizontal plane',
    'b' => 'The angle between the oncoming air and the wing',
    'c' => 'The angle between the aircraft’s nose and its tail',
    'd' => 'The angle between the aircraft’s path and the horizon',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the primary function of a "turbojet" engine?',
    'a' => 'To propel an aircraft by expelling jet exhaust gases',
    'b' => 'To generate electricity on board an aircraft',
    'c' => 'To cool down the aircraft’s cabin',
    'd' => 'To stabilize the aircraft during flight',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "leading edge" of an aircraft wing?',
    'a' => 'The front edge of the wing that first meets the airflow',
    'b' => 'The rear edge of the wing where the airflow separates',
    'c' => 'The upper surface of the wing',
    'd' => 'The lower surface of the wing',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],


[
    'field_id' => 5,
   
    'question' => 'What is the purpose of "landing gear" on an aircraft?',
    'a' => 'To assist in the aircraft’s navigation systems',
    'b' => 'To provide stability during turns in the air',
    'c' => 'To support the aircraft during takeoff and landing',
    'd' => 'To increase lift during takeoff',
    'answer' => 'c',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "thrust reversal" used for in an aircraft?',
    'a' => 'To increase the speed of the aircraft during takeoff',
    'b' => 'To slow down the aircraft after landing',
    'c' => 'To stabilize the aircraft during turbulence',
    'd' => 'To increase the lift of the aircraft during flight',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'Which component of an aircraft primarily controls pitch?',
    'a' => 'The rudder',
    'b' => 'The ailerons',
    'c' => 'The elevator',
    'd' => 'The flaps',
    'answer' => 'c',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "stagnation point" in aerodynamics?',
    'a' => 'The point on the aircraft where the air velocity is the highest',
    'b' => 'The point on the aircraft where the air pressure is the lowest',
    'c' => 'The point on the aircraft where the airflow changes direction',
    'd' => 'The point on the aircraft where the airflow velocity is zero',
    'answer' => 'd',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is "wing loading" in aircraft design?',
    'a' => 'The amount of weight an aircraft can carry',
    'b' => 'The distribution of fuel across the wings',
    'c' => 'The ratio of the aircraft’s weight to the wing area',
    'd' => 'The balance of forces acting on the wings during flight',
    'answer' => 'c',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does the "elevator" control on an aircraft?',
    'a' => 'The yaw of the aircraft',
    'b' => 'The pitch of the aircraft',
    'c' => 'The roll of the aircraft',
    'd' => 'The speed of the aircraft',
    'answer' => 'b',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the function of "slats" on an aircraft wing?',
    'a' => 'To increase lift at low speeds by extending the leading edge of the wing',
    'b' => 'To reduce drag during high-speed flight',
    'c' => 'To stabilize the aircraft during turbulence',
    'd' => 'To control the yaw of the aircraft',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What is the "Chord Line" in relation to an aircraft wing?',
    'a' => 'The imaginary line from the leading edge to the trailing edge of the wing',
    'b' => 'The path taken by the airflow over the wing',
    'c' => 'The distance between the wingtip and the fuselage',
    'd' => 'The line that connects the wingtips of an aircraft',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'What does "stall" mean in the context of aerodynamics?',
    'a' => 'A sudden loss of lift caused by exceeding the critical angle of attack',
    'b' => 'A decrease in aircraft speed due to engine failure',
    'c' => 'A temporary loss of power in the engines',
    'd' => 'A rapid increase in drag during flight',
    'answer' => 'a',
    'created_at' => now(),
    'updated_at' => now()
],
[
    'field_id' => 5,
   
    'question' => 'Which instrument in the cockpit measures altitude?',
    'a' => 'Airspeed Indicator',
    'b' => 'Artificial Horizon',
    'c' => 'Altimeter',
    'd' => 'Vertical Speed Indicator',
    'answer' => 'c',
    'created_at' => now(),
    'updated_at' => now()
],



































    
    


            ];
        
            DB::table('questions')->insert($questions);
    }
}
