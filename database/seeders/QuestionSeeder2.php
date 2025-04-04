<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class QuestionSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     */
  static  public function run(): void
    {
$questions = [
   [
        'field_id' => 2,
    'question' => 'What is organic chemistry?',
        'a' => 'The study of the Earth\'s atmosphere',
        'b' => 'The study of carbon-containing compounds and their properties',
        'c' => 'The study of nuclear reactions',
        'd' => 'The study of electrical circuits',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What are hydrocarbons?',
        'a' => 'Compounds containing only hydrogen and oxygen atoms',
        'b' => 'Compounds containing only hydrogen and carbon atoms',
        'c' => 'Compounds containing only carbon and nitrogen atoms',
        'd' => 'Compounds containing only carbon and sulfur atoms',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
                'question' => 'What is an alkane?',
        'a' => 'A type of organic compound with double bonds between carbon atoms',
        'b' => 'A type of organic compound with triple bonds between carbon atoms',
        'c' => 'A type of organic compound with only single bonds between carbon atoms',
        'd' => 'A type of organic compound with alternating double and single bonds between carbon atoms',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What are functional groups in organic chemistry?',
        'a' => 'Groups of atoms responsible for the characteristic chemical reactions of a molecule',
        'b' => 'Groups of atoms that do not participate in chemical reactions',
        'c' => 'Groups of atoms found only in inorganic compounds',
        'd' => 'Groups of atoms that are stable under all conditions',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is a benzene ring?',
        'a' => 'A type of organic compound with a ring structure containing carbon and oxygen atoms',
        'b' => 'A type of organic compound with a ring structure containing carbon and nitrogen atoms',
        'c' => 'A type of organic compound with a ring structure containing carbon and hydrogen atoms',
        'd' => 'A type of organic compound with a ring structure containing carbon and sulfur atoms',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is a polymer?',
        'a' => 'A small molecule composed of repeating units called monomers',
        'b' => 'A large molecule composed of repeating units called monomers',
        'c' => 'A small molecule composed of a single type of atom',
        'd' => 'A large molecule composed of a single type of atom',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is chirality in organic chemistry?',
        'a' => 'The property of a molecule that is superimposable on its mirror image',
        'b' => 'The property of a molecule that is not superimposable on its mirror image',
        'c' => 'The property of a molecule that contains only one type of atom',
        'd' => 'The property of a molecule that is stable under all conditions',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is a nucleophile in organic chemistry?',
        'a' => 'An atom or molecule that donates electrons to form a new covalent bond',
        'b' => 'An atom or molecule that accepts electrons to form a new covalent bond',
        'c' => 'An atom or molecule that does not participate in chemical reactions',
        'd' => 'An atom or molecule that is stable under all conditions',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is a catalyst in organic chemistry?',
        'a' => 'A substance that slows down a chemical reaction',
        'b' => 'A substance that speeds up a chemical reaction without being consumed in the process',
        'c' => 'A substance that stops a chemical reaction',
        'd' => 'A substance that changes color in the presence of a chemical reaction',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is a covalent bond?',
        'a' => 'A bond formed by the transfer of electrons from one atom to another',
        'b' => 'A bond formed by the sharing of electrons between atoms',
        'c' => 'A bond formed by the attraction between positive and negative ions',
        'd' => 'A bond formed by the attraction between metal atoms',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is a reaction mechanism in organic chemistry?',
        'a' => 'The study of large-scale chemical reactions',
        'b' => 'The study of how reactions proceed at the molecular level',
        'c' => 'The study of electrical circuits',
        'd' => 'The study of human biology and genetics',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is resonance in organic chemistry?',
        'a' => 'The property of a molecule that is superimposable on its mirror image',
        'b' => 'The property of a molecule that is not superimposable on its mirror image',
        'c' => 'The property of a molecule that exists in multiple forms due to the delocalization of electrons',
        'd' => 'The property of a molecule that is stable under all conditions',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is a reaction intermediate in organic chemistry?',
        'a' => 'A substance that slows down a chemical reaction',
        'b' => 'A substance that speeds up a chemical reaction without being consumed in the process',
        'c' => 'A substance that is formed and consumed during the course of a reaction',
        'd' => 'A substance that stops a chemical reaction',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What are isomers in organic chemistry?',
        'a' => 'Compounds with the same molecular formula but different structures',
        'b' => 'Compounds with different molecular formulas but the same structure',
        'c' => 'Compounds with the same molecular formula and the same structure',
        'd' => 'Compounds with the same molecular formula and different structures',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is a heterocyclic compound?',
        'a' => 'A compound containing only carbon and hydrogen atoms',
        'b' => 'A compound containing only carbon and nitrogen atoms',
        'c' => 'A compound containing carbon atoms arranged in a ring structure that includes atoms of at least one other element',
        'd' => 'A compound containing only carbon and oxygen atoms',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is the Bohr model of the atom?',
        'a' => 'A model that describes the behavior of electrons in an atom as waves',
        'b' => 'A model that describes the behavior of electrons in an atom as particles',
        'c' => 'A model that describes the behavior of protons and neutrons in an atom',
        'd' => 'A model that describes the behavior of electrons in an atom as standing waves',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is a functional group in organic chemistry?',
        'a' => 'A group of atoms responsible for the characteristic chemical reactions of a molecule',
        'b' => 'A group of atoms that do not participate in chemical reactions',
        'c' => 'A group of atoms found only in inorganic compounds',
        'd' => 'A group of atoms that are stable under all conditions',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is a conjugated system in organic chemistry?',
        'a' => 'A system of atoms connected by double and triple bonds',
        'b' => 'A system of atoms connected by single bonds',
        'c' => 'A system of atoms connected by ionic bonds',
        'd' => 'A system of atoms connected by covalent bonds',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is electrophilic substitution in organic chemistry?',
        'a' => 'A reaction in which an electrophile replaces a nucleophile in a molecule',
        'b' => 'A reaction in which a nucleophile replaces an electrophile in a molecule',
        'c' => 'A reaction in which a molecule undergoes substitution without any electrophilic or nucleophilic attack',
        'd' => 'A reaction in which a molecule undergoes substitution with both electrophilic and nucleophilic attacks',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is the Diels-Alder reaction in organic chemistry?',
        'a' => 'A reaction that involves the formation of a cyclic compound from a diene and a dienophile',
        'b' => 'A reaction that involves the formation of a linear compound from a diene and a dienophile',
        'c' => 'A reaction that involves the cleavage of a cyclic compound into a diene and a dienophile',
        'd' => 'A reaction that involves the formation of a cyclic compound from a diene and a monophile',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is a protecting group in organic chemistry?',
        'a' => 'A group of atoms that protects a molecule from chemical reactions',
        'b' => 'A group of atoms that enhances the reactivity of a molecule',
        'c' => 'A group of atoms that stabilizes a molecule',
        'd' => 'A group of atoms that modifies the physical properties of a molecule',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is a carbocation in organic chemistry?',
        'a' => 'A positively charged carbon atom',
        'b' => 'A negatively charged carbon atom',
        'c' => 'A neutral carbon atom',
        'd' => 'A carbon atom with a lone pair of electrons',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
     [
        'field_id' => 2,
        
        'question' => 'What is inorganic chemistry?',
        'a' => 'The study of carbon-containing compounds and their properties',
        'b' => 'The study of non-carbon-containing compounds and their properties',
        'c' => 'The study of electrical circuits and components',
        'd' => 'The study of human biology and genetics',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What are coordination compounds in inorganic chemistry?',
        'a' => 'Compounds that contain only carbon and hydrogen atoms',
        'b' => 'Compounds that contain a central metal ion bonded to one or more molecules or ions',
        'c' => 'Compounds that contain only carbon and oxygen atoms',
        'd' => 'Compounds that contain only carbon and nitrogen atoms',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What are transition metals in inorganic chemistry?',
        'a' => 'Metals that undergo a transition from solid to liquid state',
        'b' => 'Metals that have properties intermediate between those of metals and nonmetals',
        'c' => 'Metals that form compounds with other elements through coordination bonds',
        'd' => 'Metals that react readily with water',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is a ligand in inorganic chemistry?',
        'a' => 'A substance that slows down a chemical reaction',
        'b' => 'A substance that speeds up a chemical reaction without being consumed in the process',
        'c' => 'A substance that forms a complex with a metal ion by donating electron pairs',
        'd' => 'A substance that stops a chemical reaction',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What are metalloids in inorganic chemistry?',
        'a' => 'Elements that have properties intermediate between metals and nonmetals',
        'b' => 'Elements that have properties similar to those of halogens',
        'c' => 'Elements that have properties similar to those of noble gases',
        'd' => 'Elements that have properties similar to those of alkali metals',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is a complex ion in inorganic chemistry?',
        'a' => 'An ion formed by the transfer of electrons from one atom to another',
        'b' => 'An ion formed by the combination of a metal ion and one or more ligands',
        'c' => 'An ion formed by the combination of a metal ion and one or more nonmetal ions',
        'd' => 'An ion formed by the combination of a metal ion and one or more halogen ions',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What are lanthanides and actinides in inorganic chemistry?',
        'a' => 'Groups of metals with similar properties',
        'b' => 'Groups of nonmetals with similar properties',
        'c' => 'Groups of elements with similar properties',
        'd' => 'Groups of metalloids with similar properties',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is a redox reaction in inorganic chemistry?',
        'a' => 'A reaction that involves the transfer of electrons between atoms',
        'b' => 'A reaction that involves the formation of a complex ion',
        'c' => 'A reaction that involves the combination of a metal ion and one or more ligands',
        'd' => 'A reaction that involves the combination of a metal ion and one or more nonmetal ions',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is an acid-base reaction in inorganic chemistry?',
        'a' => 'A reaction that involves the transfer of protons between acids and bases',
        'b' => 'A reaction that involves the formation of a complex ion',
        'c' => 'A reaction that involves the combination of a metal ion and one or more ligands',
        'd' => 'A reaction that involves the combination of a metal ion and one or more nonmetal ions',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What are intermolecular forces in inorganic chemistry?',
        'a' => 'Forces between atoms within a molecule',
        'b' => 'Forces between molecules',
        'c' => 'Forces between ions',
        'd' => 'Forces between protons and neutrons',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is a crystal lattice in inorganic chemistry?',
        'a' => 'A regular arrangement of atoms, ions, or molecules in a three-dimensional structure',
        'b' => 'A random arrangement of atoms, ions, or molecules in a three-dimensional structure',
        'c' => 'A regular arrangement of atoms, ions, or molecules in a two-dimensional structure',
        'd' => 'A regular arrangement of atoms, ions, or molecules in a one-dimensional structure',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is a stoichiometric reaction in inorganic chemistry?',
        'a' => 'A reaction that occurs in a fixed ratio of reactants to products',
        'b' => 'A reaction that occurs in an indefinite ratio of reactants to products',
        'c' => 'A reaction that occurs without any change in the number of atoms or molecules involved',
        'd' => 'A reaction that occurs with a change in the number of atoms or molecules involved',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is a complexometric titration in inorganic chemistry?',
        'a' => 'A titration that involves the reaction between an acid and a base',
        'b' => 'A titration that involves the formation of a complex ion',
        'c' => 'A titration that involves the combination of a metal ion and one or more ligands',
        'd' => 'A titration that involves the combination of a metal ion and one or more nonmetal ions',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is a crystal field theory in inorganic chemistry?',
        'a' => 'A theory that describes the behavior of electrons in a crystal lattice',
        'b' => 'A theory that describes the behavior of protons and neutrons in an atom',
        'c' => 'A theory that describes the behavior of ions in a crystal lattice',
        'd' => 'A theory that describes the behavior of atoms in a crystal lattice',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at'=> now(),
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is a chelating agent in inorganic chemistry?',
        'a' => 'A substance that speeds up a chemical reaction without being consumed in the process',
        'b' => 'A substance that forms a complex with a metal ion by donating multiple electron pairs',
        'c' => 'A substance that forms a complex with a metal ion by donating a single electron pair',
        'd' => 'A substance that slows down a chemical reaction',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
            ],
        [
        'field_id' => 2,
        
        'question' => 'What is a molecular orbital in inorganic chemistry?',
        'a' => 'An orbital formed by the overlap of atomic orbitals to form a bond',
        'b' => 'An orbital that describes the behavior of electrons in a crystal lattice',
        'c' => 'An orbital that describes the behavior of protons and neutrons in an atom',
        'd' => 'An orbital that describes the behavior of ions in a crystal lattice',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
        ],
        [
        'field_id' => 2,
        
        'question' => 'What is a coordination number in inorganic chemistry?',
        'a' => 'The number of atoms bonded to a central atom in a complex ion',
        'b' => 'The number of ligands bonded to a central metal ion in a coordination compound',
        'c' => 'The number of electrons transferred between atoms in a redox reaction',
        'd' => 'The number of protons and neutrons in the nucleus of an atom',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
        ],
        [
        'field_id' => 2,
        
        'question' => 'What are silicates in inorganic chemistry?',
        'a' => 'Compounds that contain only silicon and oxygen atoms',
        'b' => 'Compounds that contain a central metal ion bonded to one or more molecules or ions',
        'c' => 'Compounds that contain only carbon and hydrogen atoms',
        'd' => 'Compounds that contain only carbon and nitrogen atoms',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
        ],
        [
        'field_id' => 2,
        
        'question' => 'What is a salt in inorganic chemistry?',
        'a' => 'A compound formed by the reaction between an acid and a base',
        'b' => 'A compound formed by the reaction between a metal ion and one or more ligands',
        'c' => 'A compound formed by the reaction between a metal ion and one or more nonmetal ions',
        'd' => 'A compound formed by the reaction between a metal ion and one or more halogen ions',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
        ],
        [
        'field_id' => 2,
        
        'question' => 'What is a binary compound in inorganic chemistry?',
        'a' => 'A compound that contains only two elements',
        'b' => 'A compound that contains only one element',
        'c' => 'A compound that contains more than two elements',
        'd' => 'A compound that contains only nonmetals',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
        ],
        [
        'field_id' => 2,
        
        'question' => 'What is an allotrope in inorganic chemistry?',
        'a' => 'A substance that consists of only one type of atom',
        'b' => 'A substance that consists of two or more types of atoms',
        'c' => 'A substance that can exist in multiple forms with different molecular structures',
        'd' => 'A substance that can only exist in one form with a fixed molecular structure',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
        ],
        [
        'field_id' => 2,
        
        'question' => 'What is a catalyst in inorganic chemistry?',
        'a' => 'A substance that speeds up a chemical reaction without being consumed in the process',
        'b' => 'A substance that forms a complex with a metal ion by donating electron pairs',
        'c' => 'A substance that slows down a chemical reaction',
        'd' => 'A substance that enhances the reactivity of a molecule',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
        ],
        [
        'field_id' => 2,
        
        'question' => 'What is a covalent bond in inorganic chemistry?',
        'a' => 'A bond formed by the transfer of electrons from one atom to another',
        'b' => 'A bond formed by the sharing of electrons between atoms',
        'c' => 'A bond formed by the attraction between positively charged ions',
        'd' => 'A bond formed by the attraction between negatively charged ions',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
        ],
        [
        'field_id' => 2,
        
        'question' => 'What are lanthanides and actinides in inorganic chemistry?',
        'a' => 'Groups of metals with similar properties',
        'b' => 'Groups of nonmetals with similar properties',
        'c' => 'Groups of elements with similar properties',
        'd' => 'Groups of metalloids with similar properties',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
        ], [
        'field_id' => 2,
        
        'question' => 'What is the definition of Physical Chemistry?',
        'a' => 'The study of the properties and behavior of inorganic compounds',
        'b' => 'The study of the physical properties and changes of chemical substances',
        'c' => 'The study of the properties and reactions of organic compounds',
        'd' => 'The study of the chemical processes in living organisms',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is thermodynamics in Physical Chemistry?',
        'a' => 'The study of the rates of chemical reactions',
        'b' => 'The study of energy changes and the laws governing them',
        'c' => 'The study of the structure of molecules',
        'd' => 'The study of the movement of particles in a solution',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is the first law of thermodynamics?',
        'a' => 'Energy cannot be created or destroyed, only transformed',
        'b' => 'The entropy of a system approaches a constant value as the temperature approaches absolute zero',
        'c' => 'For a spontaneous process, the free energy of the system decreases',
        'd' => 'The rate of a chemical reaction is proportional to the concentration of reactants',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is a state function in Physical Chemistry?',
        'a' => 'A property that depends on the path taken to reach a particular state',
        'b' => 'A property that depends only on the current state of the system',
        'c' => 'A property that depends on the initial and final states of the system',
        'd' => 'A property that changes with time',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is the definition of entropy?',
        'a' => 'A measure of the energy available to do work',
        'b' => 'A measure of the disorder or randomness of a system',
        'c' => 'A measure of the heat content of a system',
        'd' => 'A measure of the volume of a system',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is Gibbs free energy?',
        'a' => 'The energy required to start a chemical reaction',
        'b' => 'The total energy of a system',
        'c' => 'The energy available to do work at constant temperature and pressure',
        'd' => 'The energy released in a chemical reaction',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is an endothermic reaction?',
        'a' => 'A reaction that releases heat',
        'b' => 'A reaction that absorbs heat',
        'c' => 'A reaction that occurs without any change in temperature',
        'd' => 'A reaction that occurs without any change in pressure',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is the difference between heat and temperature?',
        'a' => 'Heat is a measure of the average kinetic energy of particles, while temperature is a measure of the total energy of particles',
        'b' => 'Heat is a measure of the total energy of particles, while temperature is a measure of the average kinetic energy of particles',
        'c' => 'Heat is a measure of the potential energy of particles, while temperature is a measure of the kinetic energy of particles',
        'd' => 'Heat is a measure of the kinetic energy of particles, while temperature is a measure of the potential energy of particles',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is the definition of a chemical equilibrium?',
        'a' => 'A state where the concentrations of reactants and products are equal',
        'b' => 'A state where the rates of the forward and reverse reactions are equal',
        'c' => 'A state where the concentrations of reactants and products change continuously',
        'd' => 'A state where the rate of the forward reaction is greater than the rate of the reverse reaction',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is a catalyst in Physical Chemistry?',
        'a' => 'A substance that slows down a chemical reaction',
        'b' => 'A substance that speeds up a chemical reaction without being consumed',
        'c' => 'A substance that reacts with the products of a chemical reaction',
        'd' => 'A substance that reacts with the reactants of a chemical reaction',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is the Arrhenius equation?',
        'a' => 'An equation that describes the rate of a chemical reaction as a function of temperature',
        'b' => 'An equation that describes the relationship between pressure and volume of a gas',
        'c' => 'An equation that describes the relationship between energy and wavelength of light',
        'd' => 'An equation that describes the rate of diffusion of particles',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is the Boltzmann constant?',
        'a' => 'A constant that relates the average kinetic energy of particles to temperature',
        'b' => 'A constant that relates the pressure of a gas to its volume',
        'c' => 'A constant that relates the wavelength of light to its energy',
        'd' => 'A constant that relates the diffusion rate of particles to their concentration',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is the definition of a mole in Physical Chemistry?',
        'a' => 'A unit of mass used to measure the amount of a substance',
        'b' => 'A unit of volume used to measure the amount of a substance',
        'c' => 'A unit of quantity used to measure the amount of a substance',
        'd' => 'A unit of energy used to measure the amount of a substance',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is the ideal gas law?',
        'a' => 'PV = nRT',
        'b' => 'E = mc^2',
        'c' => 'F = ma',
        'd' => 'V = IR',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is the definition of diffusion?',
        'a' => 'The movement of particles from a region of lower concentration to a region of higher concentration',
        'b' => 'The movement of particles from a region of higher concentration to a region of lower concentration',
        'c' => 'The movement of particles from a region of lower temperature to a region of higher temperature',
        'd' => 'The movement of particles from a region of higher temperature to a region of lower temperature',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is the definition of osmosis?',
        'a' => 'The movement of water molecules through a selectively permeable membrane',
        'b' => 'The movement of solute molecules through a selectively permeable membrane',
        'c' => 'The movement of particles through a semipermeable membrane from a region of lower concentration to a region of higher concentration',
        'd' => 'The movement of particles through a semipermeable membrane from a region of higher concentration to a region of lower concentration',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is the difference between a solvent and a solute?',
        'a' => 'A solvent is a substance that is dissolved, while a solute is a substance that does the dissolving',
        'b' => 'A solute is a substance that is dissolved, while a solvent is a substance that does the dissolving',
        'c' => 'A solute is a substance that changes its state during dissolution, while a solvent does not',
        'd' => 'A solvent is a substance that changes its state during dissolution, while a solute does not',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is a phase diagram?',
        'a' => 'A diagram that shows the equilibrium conditions between different phases of a substance',
        'b' => 'A diagram that shows the rate of a chemical reaction as a function of temperature',
        'c' => 'A diagram that shows the relationship between pressure and volume of a gas',
        'd' => 'A diagram that shows the energy changes during a chemical reaction',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is Le Chatelier\'s principle?',
        'a' => 'If a dynamic equilibrium is disturbed by changing the conditions, the position of equilibrium moves to counteract the change',
        'b' => 'The entropy of a system approaches a constant value as the temperature approaches absolute zero',
        'c' => 'Energy cannot be created or destroyed, only transformed',
        'd' => 'The rate of a chemical reaction is proportional to the concentration of reactants',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is the van\'t Hoff factor?',
        'a' => 'A measure of the effect of a solute on the colligative properties of a solution',
        'b' => 'A measure of the effect of temperature on the rate of a chemical reaction',
        'c' => 'A measure of the effect of pressure on the volume of a gas',
        'd' => 'A measure of the effect of concentration on the equilibrium constant',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ], [
        'field_id' => 2,
        
        'question' => 'What is Analytical Chemistry?',
        'a' => 'The study of chemical reactions and processes in living organisms',
        'b' => 'The study of the composition of substances',
        'c' => 'The study of the properties and changes of matter',
        'd' => 'The study of energy changes in chemical reactions',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is qualitative analysis in Analytical Chemistry?',
        'a' => 'Determining the amount of a specific substance in a sample',
        'b' => 'Identifying the components of a substance',
        'c' => 'Measuring the energy changes in chemical reactions',
        'd' => 'Studying the physical properties of substances',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is quantitative analysis in Analytical Chemistry?',
        'a' => 'Determining the amount of each component in a substance',
        'b' => 'Identifying the components of a substance',
        'c' => 'Measuring the physical properties of substances',
        'd' => 'Studying the energy changes in chemical reactions',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is chromatography?',
        'a' => 'A technique for separating components of a mixture',
        'b' => 'A technique for measuring the energy changes in chemical reactions',
        'c' => 'A technique for identifying the components of a substance',
        'd' => 'A technique for determining the amount of a specific substance in a sample',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is spectroscopy?',
        'a' => 'A technique for measuring the physical properties of substances',
        'b' => 'A technique for measuring the interaction of light with matter',
        'c' => 'A technique for identifying the components of a substance',
        'd' => 'A technique for separating components of a mixture',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is mass spectrometry?',
        'a' => 'A technique for measuring the energy changes in chemical reactions',
        'b' => 'A technique for measuring the mass-to-charge ratio of ions',
        'c' => 'A technique for separating components of a mixture',
        'd' => 'A technique for determining the amount of a specific substance in a sample',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is titration?',
        'a' => 'A technique for measuring the concentration of a solution',
        'b' => 'A technique for separating components of a mixture',
        'c' => 'A technique for identifying the components of a substance',
        'd' => 'A technique for measuring the energy changes in chemical reactions',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is a standard solution in Analytical Chemistry?',
        'a' => 'A solution with an unknown concentration',
        'b' => 'A solution used to calibrate instruments',
        'c' => 'A solution with a known concentration',
        'd' => 'A solution used in qualitative analysis',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is a calibration curve?',
        'a' => 'A graph used to determine the concentration of an unknown solution',
        'b' => 'A graph used to identify the components of a substance',
        'c' => 'A graph used to measure the energy changes in chemical reactions',
        'd' => 'A graph used to separate components of a mixture',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is gravimetric analysis?',
        'a' => 'A technique for measuring the mass of a substance',
        'b' => 'A technique for measuring the concentration of a solution',
        'c' => 'A technique for identifying the components of a substance',
        'd' => 'A technique for separating components of a mixture',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is the principle of UV-Vis spectroscopy?',
        'a' => 'Measurement of the absorption of ultraviolet and visible light by a substance',
        'b' => 'Measurement of the emission of light by a substance',
        'c' => 'Measurement of the scattering of light by a substance',
        'd' => 'Measurement of the reflection of light by a substance',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is a mobile phase in chromatography?',
        'a' => 'The phase that moves through the stationary phase, carrying the components of the mixture',
        'b' => 'The phase that remains stationary, allowing separation of components',
        'c' => 'The phase that measures the energy changes in chemical reactions',
        'd' => 'The phase that identifies the components of a substance',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is the principle of gas chromatography?',
        'a' => 'Separation of components based on their solubility in a solvent',
        'b' => 'Separation of components based on their interaction with a solid stationary phase and a gaseous mobile phase',
        'c' => 'Separation of components based on their size and shape',
        'd' => 'Separation of components based on their interaction with a liquid stationary phase and a gaseous mobile phase',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is the role of an indicator in titration?',
        'a' => 'To react with the analyte to form a colored product',
        'b' => 'To react with the titrant to form a colored product',
        'c' => 'To indicate the end point of the titration by changing color',
        'd' => 'To measure the concentration of the titrant',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is the purpose of a blank sample in analytical measurements?',
        'a' => 'To calibrate the instrument',
        'b' => 'To provide a reference point for zero concentration',
        'c' => 'To react with the analyte to form a colored product',
        'd' => 'To indicate the end point of the titration by changing color',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is an analyte in Analytical Chemistry?',
        'a' => 'The substance being measured or analyzed',
        'b' => 'The substance used to calibrate the instrument',
        'c' => 'The substance that reacts with the analyte to form a product',
        'd' => 'The substance that indicates the end point of a titration',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is a matrix in Analytical Chemistry?',
        'a' => 'The medium in which the analyte is contained',
        'b' => 'The medium used to calibrate the instrument',
        'c' => 'The medium that reacts with the analyte to form a product',
        'd' => 'The medium that indicates the end point of a titration',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is a standard deviation in Analytical Chemistry?',
        'a' => 'A measure of the accuracy of the analytical measurements',
        'b' => 'A measure of the precision of the analytical measurements',
        'c' => 'A measure of the sensitivity of the analytical measurements',
        'd' => 'A measure of the selectivity of the analytical measurements',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is an internal standard in Analytical Chemistry?',
        'a' => 'A substance added to samples, standards, and blanks to calibrate the instrument',
        'b' => 'A substance used to indicate the end point of a titration',
        'c' => 'A substance used to measure the sensitivity of the analytical method',
        'd' => 'A substance used to identify the components of a substance',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        
        'question' => 'What is the principle of ion chromatography?',
        'a' => 'Separation of ions based on their interaction with a solid stationary phase and a liquid mobile phase',
        'b' => 'Separation of ions based on their size and shape',
        'c' => 'Separation of ions based on their solubility in a solvent',
        'd' => 'Separation of ions based on their interaction with a liquid stationary phase and a gaseous mobile phase',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],  [
        'field_id' => 2,
        ,
        'question' => 'What is Biochemistry?',
        'a' => 'The study of chemical reactions and processes in living organisms',
        'b' => 'The study of the composition of substances',
        'c' => 'The study of the properties and changes of matter',
        'd' => 'The study of energy changes in chemical reactions',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What are enzymes?',
        'a' => 'Substances that catalyze chemical reactions in living organisms',
        'b' => 'Substances that store energy in living organisms',
        'c' => 'Substances that regulate body temperature in living organisms',
        'd' => 'Substances that transport oxygen in living organisms',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What is metabolism?',
        'a' => 'The breakdown of complex molecules into simpler ones',
        'b' => 'The synthesis of complex molecules from simpler ones',
        'c' => 'The sum of all chemical reactions in a living organism',
        'd' => 'The regulation of body temperature in a living organism',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What is the role of ATP in biochemical reactions?',
        'a' => 'To store energy temporarily in cells',
        'b' => 'To regulate body temperature in cells',
        'c' => 'To transport oxygen in cells',
        'd' => 'To catalyze chemical reactions in cells',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What is the central dogma of molecular biology?',
        'a' => 'The flow of genetic information from DNA to RNA to protein',
        'b' => 'The regulation of gene expression in cells',
        'c' => 'The replication of DNA in cells',
        'd' => 'The translation of mRNA into proteins',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What are carbohydrates?',
        'a' => 'Macromolecules that store genetic information',
        'b' => 'Macromolecules that store energy in cells',
        'c' => 'Macromolecules that catalyze chemical reactions in cells',
        'd' => 'Macromolecules that regulate body temperature in cells',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What are lipids?',
        'a' => 'Macromolecules that store genetic information',
        'b' => 'Macromolecules that store energy in cells',
        'c' => 'Macromolecules that catalyze chemical reactions in cells',
        'd' => 'Macromolecules that regulate body temperature in cells',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What are proteins?',
        'a' => 'Macromolecules that store genetic information',
        'b' => 'Macromolecules that store energy in cells',
        'c' => 'Macromolecules that catalyze chemical reactions in cells',
        'd' => 'Macromolecules that regulate body temperature in cells',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What is DNA?',
        'a' => 'A molecule that stores genetic information',
        'b' => 'A molecule that stores energy in cells',
        'c' => 'A molecule that catalyzes chemical reactions in cells',
        'd' => 'A molecule that regulates body temperature in cells',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What is RNA?',
        'a' => 'A molecule that stores genetic information',
        'b' => 'A molecule that stores energy in cells',
        'c' => 'A molecule that catalyzes chemical reactions in cells',
        'd' => 'A molecule that regulates body temperature in cells',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What is the structure of an amino acid?',
        'a' => 'Amino group, carboxyl group, and R group',
        'b' => 'Amino group, phosphate group, and R group',
        'c' => 'Phosphate group, carboxyl group, and R group',
        'd' => 'Amino group, carboxyl group, and sugar group',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What is a peptide bond?',
        'a' => 'A bond between two amino acids',
        'b' => 'A bond between two nucleotides',
        'c' => 'A bond between two sugars',
        'd' => 'A bond between two lipids',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What is denaturation of proteins?',
        'a' => 'The breakdown of proteins into amino acids',
        'b' => 'The synthesis of proteins from amino acids',
        'c' => 'The disruption of protein structure due to heat or other factors',
        'd' => 'The regulation of protein activity in cells',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What are enzymes?',
        'a' => 'Substances that catalyze chemical reactions in living organisms',
        'b' => 'Substances that store energy in living organisms',
        'c' => 'Substances that regulate body temperature in living organisms',
        'd' => 'Substances that transport oxygen in living organisms',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What is the structure of ATP?',
        'a' => 'Adenine, ribose sugar, and three phosphate groups',
        'b' => 'Adenine, deoxyribose sugar, and three phosphate groups',
        'c' => 'Adenine, ribose sugar, and two phosphate groups',
        'd' => 'Adenine, deoxyribose sugar, and two phosphate groups',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What is glycolysis?',
        'a' => 'The breakdown of glucose into pyruvate',
        'b' => 'The synthesis of glucose from pyruvate',
        'c' => 'The breakdown of pyruvate into glucose',
        'd' => 'The synthesis of pyruvate from glucose',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What is the Krebs cycle?',
        'a' => 'A series of reactions that produce ATP in the presence of oxygen',
        'b' => 'A series of reactions that produce glucose in the absence of oxygen',
        'c' => 'A series of reactions that produce pyruvate in the presence of oxygen',
        'd' => 'A series of reactions that produce oxygen in the absence of glucose',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What is fermentation?',
        'a' => 'The breakdown of glucose into pyruvate',
        'b' => 'The breakdown of pyruvate into glucose',
        'c' => 'The breakdown of glucose into ethanol and carbon dioxide',
        'd' => 'The breakdown of ethanol into glucose and carbon dioxide',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],    [
        'field_id' => 2,
        ,
        'question' => 'What are nucleic acids?',
        'a' => 'Macromolecules that store genetic information',
        'b' => 'Macromolecules that store energy in cells',
        'c' => 'Macromolecules that catalyze chemical reactions in cells',
        'd' => 'Macromolecules that regulate body temperature in cells',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What is the structure of DNA?',
        'a' => 'Double helix with sugar-phosphate backbone and nitrogenous bases',
        'b' => 'Single strand with ribose sugar and nitrogenous bases',
        'c' => 'Double helix with deoxyribose sugar and nitrogenous bases',
        'd' => 'Single strand with sugar-phosphate backbone and nitrogenous bases',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What is transcription in molecular biology?',
        'a' => 'The synthesis of RNA from DNA',
        'b' => 'The synthesis of DNA from RNA',
        'c' => 'The breakdown of RNA into nucleotides',
        'd' => 'The breakdown of DNA into nucleotides',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What is translation in molecular biology?',
        'a' => 'The synthesis of proteins from mRNA',
        'b' => 'The synthesis of mRNA from DNA',
        'c' => 'The breakdown of mRNA into nucleotides',
        'd' => 'The breakdown of proteins into amino acids',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What is gene expression?',
        'a' => 'The regulation of gene activity in cells',
        'b' => 'The replication of DNA in cells',
        'c' => 'The breakdown of RNA into nucleotides',
        'd' => 'The synthesis of proteins from amino acids',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What is the role of RNA in protein synthesis?',
        'a' => 'To store genetic information',
        'b' => 'To transport amino acids',
        'c' => 'To act as a messenger between DNA and ribosomes',
        'd' => 'To catalyze chemical reactions',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What is the function of ribosomes in cells?',
        'a' => 'To store genetic information',
        'b' => 'To produce ATP',
        'c' => 'To synthesize proteins',
        'd' => 'To regulate gene expression',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What is the structure of RNA?',
        'a' => 'Single strand with ribose sugar and nitrogenous bases',
        'b' => 'Double helix with deoxyribose sugar and nitrogenous bases',
        'c' => 'Double helix with sugar-phosphate backbone and nitrogenous bases',
        'd' => 'Single strand with sugar-phosphate backbone and nitrogenous bases',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What is the role of mRNA in protein synthesis?',
        'a' => 'To store genetic information',
        'b' => 'To transport amino acids',
        'c' => 'To act as a messenger between DNA and ribosomes',
        'd' => 'To catalyze chemical reactions',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What is the role of tRNA in protein synthesis?',
        'a' => 'To store genetic information',
        'b' => 'To transport amino acids',
        'c' => 'To act as a messenger between DNA and ribosomes',
        'd' => 'To catalyze chemical reactions',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What are codons in genetic code?',
        'a' => 'Three-base sequences on mRNA that specify a particular amino acid',
        'b' => 'Three-base sequences on tRNA that specify a particular amino acid',
        'c' => 'Three-base sequences on DNA that specify a particular amino acid',
        'd' => 'Three-base sequences on RNA that specify a particular nucleotide',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What is the genetic code?',
        'a' => 'A set of rules that determines how genetic information is encoded in DNA',
        'b' => 'A set of rules that determines how proteins are synthesized from mRNA',
        'c' => 'A set of rules that determines how amino acids are synthesized from tRNA',
        'd' => 'A set of rules that determines how nucleotides are synthesized from DNA',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What is the role of DNA polymerase in DNA replication?',
        'a' => 'To synthesize new strands of DNA',
        'b' => 'To synthesize new strands of RNA',
        'c' => 'To break down DNA into nucleotides',
        'd' => 'To break down RNA into nucleotides',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What is the role of RNA polymerase in transcription?',
        'a' => 'To synthesize new strands of DNA',
        'b' => 'To synthesize new strands of RNA',
        'c' => 'To break down DNA into nucleotides',
        'd' => 'To break down RNA into nucleotides',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What is the role of helicase in DNA replication?',
        'a' => 'To synthesize new strands of DNA',
        'b' => 'To separate the DNA strands',
        'c' => 'To break down DNA into nucleotides',
        'd' => 'To break down RNA into nucleotides',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What is the role of ligase in DNA replication?',
        'a' => 'To synthesize new strands of DNA',
        'b' => 'To separate the DNA strands',
        'c' => 'To join Okazaki fragments',
        'd' => 'To break down RNA into nucleotides',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What is a mutation in genetics?',
        'a' => 'A change in the sequence of nucleotides in DNA',
        'b' => 'A change in the sequence of amino acids in proteins',
        'c' => 'A change in the sequence of mRNA in cells',
        'd' => 'A change in the sequence of tRNA in cells',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What are enzymes in biochemistry?',
        'a' => 'Proteins that catalyze chemical reactions in cells',
        'b' => 'Nucleic acids that store genetic information',
        'c' => 'Lipids that regulate body temperature in cells',
        'd' => 'Carbohydrates that produce energy in cells',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What is an allele in genetics?',
        'a' => 'A variant form of a gene',
        'b' => 'A variant form of a protein',
        'c' => 'A variant form of a chromosome',
        'd' => 'A variant form of a cell',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 2,
        ,
        'question' => 'What is the difference between DNA and RNA?',
        'a' => 'DNA is double-stranded, RNA is single-stranded',
        'b' => 'DNA contains deoxyribose sugar, RNA contains ribose sugar',
        'c' => 'DNA contains thymine, RNA contains uracil',
        'd' => 'All of the above',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],


];


   



DB::table('questions')->insert($questions);



   






    }
}
