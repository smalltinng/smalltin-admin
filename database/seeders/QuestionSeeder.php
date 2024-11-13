<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
  static  public function run(): void
    {
    $questions = [
    [
        'field_id' => 1,
        'sub_fields_id' => 1,
        'question' => 'What is the first law of motion?',
        'a' => 'Every object moves in a straight line unless acted upon by a force.',
        'b' => 'For every action, there is an equal and opposite reaction.',
        'c' => 'The acceleration of an object is directly proportional to the net force.',
        'd' => 'Energy cannot be created or destroyed.',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 1,
        'question' => 'Who formulated the laws of motion?',
        'a' => 'Albert Einstein',
        'b' => 'Galileo Galilei',
        'c' => 'Isaac Newton',
        'd' => 'Nikola Tesla',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 1,
        'question' => 'What is the unit of force?',
        'a' => 'Pascal',
        'b' => 'Newton',
        'c' => 'Joule',
        'd' => 'Watt',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 1,
        'question' => 'What is the acceleration due to gravity on Earth?',
        'a' => '9.8 m/s^2',
        'b' => '3.7 m/s^2',
        'c' => '12 m/s^2',
        'd' => '5.5 m/s^2',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 1,
        'question' => 'What is the formula for kinetic energy?',
        'a' => '1/2 mv^2',
        'b' => 'mv',
        'c' => 'mgh',
        'd' => '2m/v^2',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 1,
        'question' => 'What is the measure of inertia?',
        'a' => 'Weight',
        'b' => 'Mass',
        'c' => 'Velocity',
        'd' => 'Force',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 1,
        'question' => 'What is the unit of work?',
        'a' => 'Newton',
        'b' => 'Pascal',
        'c' => 'Joule',
        'd' => 'Watt',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 1,
        'question' => 'What is the second law of motion?',
        'a' => 'Every object moves in a straight line unless acted upon by a force.',
        'b' => 'For every action, there is an equal and opposite reaction.',
        'c' => 'The acceleration of an object is directly proportional to the net force.',
        'd' => 'Energy cannot be created or destroyed.',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 1,
        'question' => 'What is the formula for potential energy?',
        'a' => '1/2 mv^2',
        'b' => 'mv',
        'c' => 'mgh',
        'd' => '2m/v^2',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 1,
        'question' => 'What is the unit of power?',
        'a' => 'Newton',
        'b' => 'Pascal',
        'c' => 'Joule',
        'd' => 'Watt',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 1,
        'question' => 'What is the third law of motion?',
        'a' => 'Every object moves in a straight line unless acted upon by a force.',
        'b' => 'For every action, there is an equal and opposite reaction.',
        'c' => 'The acceleration of an object is directly proportional to the net force.',
        'd' => 'Energy cannot be created or destroyed.',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 1,
        'question' => 'Who discovered the law of universal gravitation?',
        'a' => 'Albert Einstein',
        'b' => 'Galileo Galilei',
        'c' => 'Isaac Newton',
        'd' => 'Nikola Tesla',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 1,
        'question' => 'What is the formula for force?',
        'a' => 'F = ma',
        'b' => 'E = mc^2',
        'c' => 'P = mv',
        'd' => 'W = mg',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 1,
        'question' => 'What is the unit of mass?',
        'a' => 'Kilogram',
        'b' => 'Gram',
        'c' => 'Newton',
        'd' => 'Watt',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 1,
        'question' => 'What is the unit of velocity?',
        'a' => 'm/s',
        'b' => 'm/s^2',
        'c' => 'kg m/s',
        'd' => 'Newton',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 1,
        'question' => 'What is the formula for momentum?',
        'a' => 'p = mv',
        'b' => 'F = ma',
        'c' => 'E = mc^2',
        'd' => 'W = mg',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 1,
        'question' => 'What is the unit of energy?',
        'a' => 'Joule',
        'b' => 'Watt',
        'c' => 'Newton',
        'd' => 'Pascal',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 1,
        'question' => 'What is the formula for pressure?',
        'a' => 'P = F/A',
        'b' => 'W = mg',
        'c' => 'p = mv',
        'd' => 'F = ma',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 1,
        'question' => 'What is the unit of pressure?',
        'a' => 'Pascal',
        'b' => 'Newton',
        'c' => 'Joule',
        'd' => 'Watt',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 1,
        'question' => 'What is the formula for weight?',
        'a' => 'W = mg',
        'b' => 'F = ma',
        'c' => 'p = mv',
        'd' => 'P = F/A',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
        
    ]
    , [
        'field_id' => 1,
        'sub_fields_id' => 2,
        'question' => 'What is the fundamental concept of quantum mechanics?',
        'a' => 'Wave-particle duality',
        'b' => 'Conservation of momentum',
        'c' => 'Newton\'s laws of motion',
        'd' => 'Gravitational force',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 2,
        'question' => 'Who is considered the father of quantum mechanics?',
        'a' => 'Albert Einstein',
        'b' => 'Niels Bohr',
        'c' => 'Max Planck',
        'd' => 'Erwin Schrödinger',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 2,
        'question' => 'What does the Heisenberg Uncertainty Principle state?',
        'a' => 'Energy is quantized in discrete packets called quanta.',
        'b' => 'Particles can exhibit both wave and particle characteristics.',
        'c' => 'It is impossible to simultaneously know the exact position and momentum of a particle.',
        'd' => 'All of the above',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 2,
        'question' => 'What is Schrödinger\'s famous thought experiment?',
        'a' => 'Schrödinger\'s Dog',
        'b' => 'Schrödinger\'s Atom',
        'c' => 'Schrödinger\'s Cat',
        'd' => 'Schrödinger\'s Particle',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 2,
        'question' => 'What is the name of the principle that suggests particles exist in all states simultaneously until observed?',
        'a' => 'Wave-particle duality',
        'b' => 'Quantum superposition',
        'c' => 'Entanglement',
        'd' => 'Uncertainty principle',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 2,
        'question' => 'What is the phenomenon where two particles remain connected so that the state of one affects the state of the other?',
        'a' => 'Interference',
        'b' => 'Diffraction',
        'c' => 'Entanglement',
        'd' => 'Polarization',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 2,
        'question' => 'What equation is used to describe the wave function of a quantum system?',
        'a' => 'Einstein\'s mass-energy equivalence',
        'b' => 'Planck\'s equation',
        'c' => 'Schrödinger equation',
        'd' => 'Heisenberg equation',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 2,
        'question' => 'What principle explains that the physical properties of particles are quantized?',
        'a' => 'Wave-particle duality',
        'b' => 'Quantization',
        'c' => 'Uncertainty principle',
        'd' => 'Complementarity',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 2,
        'question' => 'What does quantum mechanics primarily study?',
        'a' => 'Large-scale physical phenomena',
        'b' => 'Gravitational fields',
        'c' => 'Behavior of particles at atomic and subatomic levels',
        'd' => 'Electromagnetic waves',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 2,
        'question' => 'Who proposed the quantum theory of light?',
        'a' => 'Albert Einstein',
        'b' => 'Niels Bohr',
        'c' => 'Max Planck',
        'd' => 'Erwin Schrödinger',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 2,
        'question' => 'What term describes the smallest possible discrete unit of any physical property?',
        'a' => 'Photon',
        'b' => 'Quantum',
        'c' => 'Quark',
        'd' => 'Boson',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 2,
        'question' => 'What does the principle of complementarity state?',
        'a' => 'Objects can exhibit both wave-like and particle-like properties.',
        'b' => 'Energy is conserved in a closed system.',
        'c' => 'The position and momentum of a particle cannot both be precisely determined.',
        'd' => 'All of the above',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 2,
        'question' => 'What are the two main types of statistics used in quantum mechanics?',
        'a' => 'Fermi-Dirac and Bose-Einstein',
        'b' => 'Newtonian and Lagrangian',
        'c' => 'Classical and Quantum',
        'd' => 'Statistical and Thermodynamic',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 2,
        'question' => 'What is the Pauli Exclusion Principle?',
        'a' => 'Two identical fermions cannot occupy the same quantum state simultaneously.',
        'b' => 'Particles cannot travel faster than the speed of light.',
        'c' => 'The energy of a system is quantized.',
        'd' => 'Wave functions of particles can interfere constructively or destructively.',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 2,
        'question' => 'What is a quantum state?',
        'a' => 'A specific arrangement of particles in an atom',
        'b' => 'The state of an electron in a hydrogen atom',
        'c' => 'The state of a physical system described by a set of quantum numbers',
        'd' => 'The ground state of a quantum harmonic oscillator',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 2,
        'question' => 'What is quantum tunneling?',
        'a' => 'The phenomenon where particles can pass through potential barriers',
        'b' => 'The process of splitting a particle into two',
        'c' => 'The creation of a quantum entangled state',
        'd' => 'The absorption of energy by an electron',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 2,
        'question' => 'What is the significance of Planck\'s constant?',
        'a' => 'It relates the energy of a photon to its frequency.',
        'b' => 'It describes the rate of expansion of the universe.',
        'c' => 'It measures the strength of gravitational attraction.',
        'd' => 'It determines the speed of light in a vacuum.',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 2,
        'question' => 'What is the wave function in quantum mechanics?',
        'a' => 'A function that describes the energy levels of an atom',
        'b' => 'A function that represents the probability amplitude of a particle\'s position and momentum',
        'c' => 'A function that determines the speed of a particle',
        'd' => 'A function that measures the mass of a particle',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 2,
        'question' => 'What is the main concept behind the Copenhagen interpretation?',
        'a' => 'Particles exist in a single state until measured.',
        'b' => 'Particles exist in multiple states simultaneously until observed.',
        'c' => 'Particles can travel faster than the speed of light.',
        'd' => 'Particles do not exist until they are observed.',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
        
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 2,
        'question' => 'What is the significance of the double-slit experiment?',
        'a' => 'It demonstrates the particle nature of light.',
        'b' => 'It demonstrates the wave nature of light.',
        'c' => 'It demonstrates the wave-particle duality of light and matter.',
        'd' => 'It demonstrates the quantum tunneling effect.',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
        
    ],  [
        'field_id' => 1,
        'sub_fields_id' => 2,
        'question' => 'What is quantum mechanics?',
        'a' => 'The study of large-scale objects in the universe',
        'b' => 'The study of microscopic particles and their behavior',
        'c' => 'The study of electrical circuits and components',
        'd' => 'The study of human biology and genetics',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 2,
        'question' => 'What is a quantum superposition?',
        'a' => 'A state where a particle is in multiple positions at once',
        'b' => 'A state where a particle is stationary',
        'c' => 'A state where a particle is moving at the speed of light',
        'd' => 'A state where a particle is at rest',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 3,
        'question' => 'What is the first law of thermodynamics?',
        'a' => 'Energy cannot be created or destroyed, only transformed from one form to another.',
        'b' => 'For every action, there is an equal and opposite reaction.',
        'c' => 'The acceleration of an object is directly proportional to the net force.',
        'd' => 'Every object moves in a straight line unless acted upon by a force.',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 3,
        'question' => 'What is entropy?',
        'a' => 'The measure of disorder or randomness in a system',
        'b' => 'The force that attracts objects toward the center of the Earth',
        'c' => 'The amount of heat needed to raise the temperature of a substance by one degree Celsius',
        'd' => 'The pressure exerted by the atmosphere on Earth\'s surface',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 3,
        'question' => 'What is the second law of thermodynamics?',
        'a' => 'Energy cannot be created or destroyed, only transformed from one form to another.',
        'b' => 'Entropy of an isolated system always increases over time.',
        'c' => 'The acceleration of an object is directly proportional to the net force.',
        'd' => 'Every action has an equal and opposite reaction.',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 3,
        'question' => 'What is heat?',
        'a' => 'The measure of disorder or randomness in a system',
        'b' => 'The energy transferred between objects due to a temperature difference',
        'c' => 'The amount of heat needed to raise the temperature of a substance by one degree Celsius',
        'd' => 'The pressure exerted by the atmosphere on Earth\'s surface',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 3,
        'question' => 'What is a heat engine?',
        'a' => 'A device that converts thermal energy into mechanical work',
        'b' => 'A device that measures the temperature of an object',
        'c' => 'A device that increases the temperature of a substance',
        'd' => 'A device that measures the pressure of a gas',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 3,
        'question' => 'What is the Carnot cycle?',
        'a' => 'A theoretical cycle of four reversible processes',
        'b' => 'A cycle that describes the behavior of gases under constant pressure',
        'c' => 'A cycle that describes the behavior of liquids under changing temperatures',
        'd' => 'A cycle that measures the efficiency of a heat engine',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 3,
        'question' => 'What is specific heat capacity?',
        'a' => 'The measure of disorder or randomness in a system',
        'b' => 'The energy required to change the temperature of a unit mass of a substance by one degree Celsius',
        'c' => 'The pressure exerted by the atmosphere on Earth\'s surface',
        'd' => 'The force that attracts objects toward the center of the Earth',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 3,
        'question' => 'What is an adiabatic process?',
        'a' => 'A process where heat is exchanged between a system and its surroundings',
        'b' => 'A process where no heat is exchanged between a system and its surroundings',
        'c' => 'A process where temperature remains constant',
        'd' => 'A process where pressure remains constant',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 3,
        'question' => 'What is an isothermal process?',
        'a' => 'A process where heat is exchanged between a system and its surroundings',
        'b' => 'A process where no heat is exchanged between a system and its surroundings',
        'c' => 'A process where temperature remains constant',
        'd' => 'A process where pressure remains constant',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 3,
        'question' => 'What is the difference between heat and temperature?',
        'a' => 'Heat is a measure of the total energy in a system, while temperature is a measure of the average kinetic energy of particles.',
        'b' => 'Heat is a measure of the average kinetic energy of particles, while temperature is a measure of the total energy in a system.',
        'c' => 'Heat is measured in Joules, while temperature is measured in Kelvin.',
        'd' => 'Heat and temperature are the same thing.',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 3,
        'question' => 'What is the thermal equilibrium?',
        'a' => 'A state where there is no heat transfer between two systems in contact',
        'b' => 'A state where the temperature of a system remains constant',
        'c' => 'A state where there is no change in entropy',
        'd' => 'A state where there is maximum disorder in a system',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 3,
        'question' => 'What is the ideal gas law?',
        'a' => 'PV = nRT',
        'b' => 'F = ma',
        'c' => 'E = mc^2',
        'd' => 'W = mg',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 3,
        'question' => 'What is thermal conduction?',
        'a' => 'The transfer of heat through direct contact between particles',
        'b' => 'The transfer of heat through electromagnetic waves',
        'c' => 'The transfer of heat through fluid motion',
        'd' => 'The transfer of heat through chemical reactions',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 3,
        'question' => 'What is thermal radiation?',
        'a' => 'The transfer of heat through direct contact between particles',
        'b' => 'The transfer of heat through electromagnetic waves',
        'c' => 'The transfer of heat through fluid motion',
        'd' => 'The transfer of heat through chemical reactions',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 3,
        'question' => 'What is thermal expansion?',
        'a' => 'The increase in volume of a substance due to an increase in temperature',
        'b' => 'The decrease in volume of a substance due to a decrease in temperature',
        'c' => 'The change in shape of a substance due to temperature changes',
        'd' => 'The change in state of a substance from solid to liquid due to temperature changes',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 3,
        'question' => 'What is a heat pump?',
        'a' => 'A device that extracts heat from a colder space and transfers it to a warmer space',
        'b' => 'A device that measures the temperature of an object',
        'c' => 'A device that increases the temperature of a substance',
        'd' => 'A device that measures the pressure of a gas',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 3,
        'question' => 'What is the difference between reversible and irreversible processes in thermodynamics?',
        'a' => 'Reversible processes can occur naturally, while irreversible processes cannot.',
        'b' => 'Reversible processes can be reversed to restore the system and surroundings to their original states, while irreversible processes cannot.',
        'c' => 'Reversible processes involve heat transfer, while irreversible processes involve work transfer.',
        'd' => 'Reversible processes change the state of a substance, while irreversible processes do not.',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 3,
        'question' => 'What is the efficiency of a heat engine?',
        'a' => 'The ratio of work output to energy input',
        'b' => 'The ratio of energy output to work input',
        'c' => 'The ratio of heat output to energy input',
        'd' => 'The ratio of work output to heat input',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
      [
        'field_id' => 1,
        'sub_fields_id' => 4,
        'question' => 'What is electromagnetic induction?',
        'a' => 'The generation of electricity by moving a conductor through a magnetic field',
        'b' => 'The generation of electricity by passing current through a conductor',
        'c' => 'The generation of light by passing current through a conductor',
        'd' => 'The generation of sound by moving a conductor through a magnetic field',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 4,
        'question' => 'What is Faraday\'s law of electromagnetic induction?',
        'a' => 'The electric force between two charged particles is directly proportional to the product of their charges and inversely proportional to the square of the distance between them',
        'b' => 'The induced electromotive force (emf) in any closed circuit is equal to the rate of change of the magnetic flux through the circuit',
        'c' => 'The electric potential difference between two points in an electric field is equal to the work done per unit charge in moving a small test charge from one point to the other',
        'd' => 'The resistance of a conductor is directly proportional to its length and inversely proportional to its cross-sectional area',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
      [
        'field_id' => 1,
        'sub_fields_id' => 4,
        'question' => 'What is electromagnetism?',
        'a' => 'The study of electric and magnetic fields',
        'b' => 'The study of gravitational forces',
        'c' => 'The study of atomic and subatomic particles',
        'd' => 'The study of planetary motion',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 4,
        'question' => 'Who formulated the laws of electromagnetism?',
        'a' => 'Isaac Newton',
        'b' => 'James Clerk Maxwell',
        'c' => 'Albert Einstein',
        'd' => 'Niels Bohr',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 4,
        'question' => 'What are Maxwell\'s equations?',
        'a' => 'A set of four equations that describe the behavior of electric and magnetic fields',
        'b' => 'A set of equations that describe the behavior of particles in motion',
        'c' => 'A set of equations that describe the behavior of light waves',
        'd' => 'A set of equations that describe the behavior of gravitational forces',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 4,
        'question' => 'What is Coulomb\'s law?',
        'a' => 'The law that describes the force between electric charges',
        'b' => 'The law that describes the force between magnetic poles',
        'c' => 'The law that describes the force between gravitational masses',
        'd' => 'The law that describes the force between light waves',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 4,
        'question' => 'What is Gauss\'s law for electricity?',
        'a' => 'The law that relates the magnetic field to the electric current',
        'b' => 'The law that relates the electric field to the charge distribution',
        'c' => 'The law that relates the electric potential to the charge',
        'd' => 'The law that relates the force between electric charges',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 4,
        'question' => 'What is Faraday\'s law of electromagnetic induction?',
        'a' => 'The law that describes the force between electric charges',
        'b' => 'The law that describes the force between magnetic poles',
        'c' => 'The law that describes the force between gravitational masses',
        'd' => 'The law that describes the generation of electromotive force in a closed circuit',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 4,
        'question' => 'What is Ampère\'s law?',
        'a' => 'The law that relates the magnetic field to the electric current',
        'b' => 'The law that relates the electric field to the charge distribution',
        'c' => 'The law that relates the force between electric charges',
        'd' => 'The law that relates the force between magnetic poles',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 4,
        'question' => 'What is electromagnetic radiation?',
        'a' => 'The study of electric and magnetic fields',
        'b' => 'The propagation of energy through electric and magnetic waves',
        'c' => 'The study of atomic and subatomic particles',
        'd' => 'The study of planetary motion',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 4,
        'question' => 'What is the electromagnetic spectrum?',
        'a' => 'A range of all possible frequencies of electromagnetic radiation',
        'b' => 'A range of all possible frequencies of gravitational waves',
        'c' => 'A range of all possible frequencies of atomic particles',
        'd' => 'A range of all possible frequencies of light waves',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 4,
        'question' => 'What are electromagnetic waves?',
        'a' => 'Waves that consist of electric and magnetic fields oscillating perpendicular to each other and to the direction of propagation',
        'b' => 'Waves that consist of gravitational fields oscillating perpendicular to each other and to the direction of propagation',
        'c' => 'Waves that consist of atomic particles oscillating perpendicular to each other and to the direction of propagation',
        'd' => 'Waves that consist of light particles oscillating perpendicular to each other and to the direction of propagation',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 4,
        'question' => 'What is electromagnetic shielding?',
        'a' => 'The use of materials to block or reduce the intensity of electromagnetic fields',
        'b' => 'The use of materials to enhance electromagnetic fields',
        'c' => 'The use of materials to generate electromagnetic waves',
        'd' => 'The use of materials to measure electromagnetic radiation',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 4,
        'question' => 'What is the Poynting vector?',
        'a' => 'A vector that describes the direction of propagation of electromagnetic waves',
        'b' => 'A vector that describes the force between electric charges',
        'c' => 'A vector that describes the electric field around a charge',
        'd' => 'A vector that describes the magnetic field around a current',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 4,
        'question' => 'What is an electromagnetic field?',
        'a' => 'A region of space characterized by the presence of electric and magnetic fields',
        'b' => 'A region of space characterized by the presence of gravitational fields',
        'c' => 'A region of space characterized by the presence of atomic particles',
        'd' => 'A region of space characterized by the presence of light waves',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 4,
        'question' => 'What is the electromagnetic force?',
        'a' => 'A force that attracts objects toward the center of the Earth',
        'b' => 'A force that holds atomic nuclei together',
        'c' => 'A force that holds electrons in orbit around atomic nuclei',
        'd' => 'A force that acts between electrically charged particles',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 4,
        'question' => 'What is an electromagnetic waveguide?',
        'a' => 'A device that guides electromagnetic waves along a path',
        'b' => 'A device that measures the intensity of electromagnetic waves',
        'c' => 'A device that generates electromagnetic waves',
        'd' => 'A device that detects the presence of electromagnetic waves',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 4,
        'question' => 'What is an antenna?',
        'a' => 'A device that guides electromagnetic waves along a path',
        'b' => 'A device that measures the intensity of electromagnetic waves',
        'c' => 'A device that generates electromagnetic waves',
        'd' => 'A device that detects the presence of electromagnetic waves',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 4,
        'question' => 'What is an electromagnetic field sensor?',
        'a' => 'A device that guides electromagnetic waves along a path',
        'b' => 'A device that measures the intensity of electromagnetic waves',
        'c' => 'A device that detects the presence of electromagnetic fields',
        'd' => 'A device that generates electromagnetic waves',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 4,
        'question' => 'What is the electromagnetic spectrum?',
        'a' => 'A range of all possible frequencies of electromagnetic radiation',
        'b' => 'A range of all possible frequencies of gravitational waves',
        'c' => 'A range of all possible frequencies of atomic particles',
        'd' => 'A range of all possible frequencies of light waves',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ], 
      [
        'field_id' => 1,
        'sub_fields_id' => 5,
        'question' => 'What is astrophysics?',
        'a' => 'The study of Earth\'s atmosphere',
        'b' => 'The study of celestial bodies and the universe',
        'c' => 'The study of the Earth\'s magnetic field',
        'd' => 'The study of ocean currents',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 5,
        'question' => 'What is a star?',
        'a' => 'A planet orbiting the Sun',
        'b' => 'A large celestial body composed of hydrogen and helium undergoing nuclear fusion',
        'c' => 'A moon orbiting a planet',
        'd' => 'A comet passing through the solar system',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 5,
        'question' => 'What is a galaxy?',
        'a' => 'A small group of stars orbiting a planet',
        'b' => 'A large system of stars, gas, and dust bound together by gravity',
        'c' => 'A large body of water in space',
        'd' => 'A comet passing through the solar system',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 5,
        'question' => 'What is a black hole?',
        'a' => 'A region of space where gravity is so strong that nothing, not even light, can escape',
        'b' => 'A region of space with extremely high temperatures',
        'c' => 'A region of space with no stars',
        'd' => 'A region of space with no planets',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 5,
        'question' => 'What is a supernova?',
        'a' => 'A star that emits a bright flash of light',
        'b' => 'An explosion that occurs when a star reaches the end of its life cycle',
        'c' => 'A comet passing through the solar system',
        'd' => 'A region of space with no planets',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 5,
        'question' => 'What is dark matter?',
        'a' => 'Matter that emits light',
        'b' => 'Matter that can be detected with telescopes',
        'c' => 'Matter that interacts with electromagnetic radiation',
        'd' => 'Matter that does not emit, reflect, or interact with light or any other form of electromagnetic radiation',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 5,
        'question' => 'What is a pulsar?',
        'a' => 'A type of star that emits radio waves',
        'b' => 'A type of star that emits bright flashes of light',
        'c' => 'A type of star that emits X-rays',
        'd' => 'A type of neutron star that emits regular pulses of radiation',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 5,
        'question' => 'What is a quasar?',
        'a' => 'A star that emits a bright flash of light',
        'b' => 'An object that emits massive amounts of energy from its nucleus',
        'c' => 'A comet passing through the solar system',
        'd' => 'A planet orbiting a star',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 5,
        'question' => 'What is cosmic microwave background radiation?',
        'a' => 'Radiation emitted by stars',
        'b' => 'Radiation emitted by galaxies',
        'c' => 'Radiation left over from the Big Bang',
        'd' => 'Radiation emitted by black holes',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 5,
        'question' => 'What is a nebula?',
        'a' => 'A small group of stars orbiting a planet',
        'b' => 'A large system of stars, gas, and dust bound together by gravity',
        'c' => 'A large body of water in space',
        'd' => 'A comet passing through the solar system',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 5,
        'question' => 'What is a red giant?',
        'a' => 'A large star that is expanding and cooling',
        'b' => 'A small star that is expanding and cooling',
        'c' => 'A large star that is shrinking and heating up',
        'd' => 'A small star that is shrinking and heating up',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 5,
        'question' => 'What is a white dwarf?',
        'a' => 'A type of star that emits radio waves',
        'b' => 'A small, dense star that is the remnant of a sun-like star after it has exhausted its nuclear fuel',
        'c' => 'A type of star that emits X-rays',
        'd' => 'A type of neutron star that emits regular pulses of radiation',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 5,
        'question' => 'What is a brown dwarf?',
        'a' => 'A small, dense star that is the remnant of a sun-like star after it has exhausted its nuclear fuel',
        'b' => 'A type of star that emits radio waves',
        'c' => 'A type of star that emits X-rays',
        'd' => 'A type of neutron star that emits regular pulses of radiation',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 5,
        'question' => 'What is a neutron star?',
        'a' => 'A type of star that emits radio waves',
        'b' => 'A small, dense star that is the remnant of a massive star after it has exploded as a supernova',
        'c' => 'A type of star that emits X-rays',
        'd' => 'A small star that is shrinking and heating up',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 5,
        'question' => 'What is dark energy?',
        'a' => 'Energy emitted by stars',
        'b' => 'Energy emitted by galaxies',
        'c' => 'Energy that makes up most of the universe and is responsible for its accelerating expansion',
        'd' => 'Energy emitted by black holes',
        'answer' => 'c',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 5,
        'question' => 'What is a gamma-ray burst?',
        'a' => 'A burst of energy in the gamma-ray part of the electromagnetic spectrum, often associated with the explosion of a massive star',
        'b' => 'A burst of energy in the X-ray part of the electromagnetic spectrum, often associated with the explosion of a massive star',
        'c' => 'A burst of energy in the infrared part of the electromagnetic spectrum, often associated with the explosion of a massive star',
        'd' => 'A burst of energy in the ultraviolet part of the electromagnetic spectrum, often associated with the explosion of a massive star',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 5,
        'question' => 'What is a comet?',
        'a' => 'A small, icy body that orbits the Sun and releases gas and dust as it passes close to the Sun',
        'b' => 'A large, rocky body that orbits the Sun and occasionally passes close to Earth',
        'c' => 'A small, rocky body that orbits the Sun and occasionally passes close to Earth',
        'd' => 'A large, icy body that orbits the Sun and releases gas and dust as it passes close to the Sun',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 5,
        'question' => 'What is a meteor?',
        'a' => 'A small, icy body that orbits the Sun and releases gas and dust as it passes close to the Sun',
        'b' => 'A large, rocky body that orbits the Sun and occasionally passes close to Earth',
        'c' => 'A small, rocky body that orbits the Sun and occasionally passes close to Earth',
        'd' => 'A streak of light produced by a meteoroid as it enters Earth\'s atmosphere',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 5,
        'question' => 'What is a meteorite?',
        'a' => 'A small, icy body that orbits the Sun and releases gas and dust as it passes close to the Sun',
        'b' => 'A large, rocky body that orbits the Sun and occasionally passes close to Earth',
        'c' => 'A small, rocky body that orbits the Sun and occasionally passes close to Earth',
        'd' => 'A fragment of a meteoroid that survives its passage through Earth\'s atmosphere and lands on the Earth\'s surface',
        'answer' => 'd',
        'created_at' => now(),
        'updated_at' => now()
    ], [
        'field_id' => 1,
        'sub_fields_id' => 5,
        'question' => 'What is a galaxy cluster?',
        'a' => 'A small group of stars orbiting a planet',
        'b' => 'A large system of galaxies bound together by gravity',
        'c' => 'A large body of water in space',
        'd' => 'A comet passing through the solar system',
        'answer' => 'b',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'field_id' => 1,
        'sub_fields_id' => 5,
        'question' => 'What is the Big Bang theory?',
        'a' => 'The theory that the universe began as a singularity and has been expanding ever since',
        'b' => 'The theory that the Earth is at the center of the universe',
        'c' => 'The theory that galaxies are randomly distributed throughout the universe',
        'd' => 'The theory that the universe is static and unchanging',
        'answer' => 'a',
        'created_at' => now(),
        'updated_at' => now()
    ]


];





DB::table('questions')->insert($questions);





// DB::table('questions')->insert($questions);


    }
}
