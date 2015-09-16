// app/database/seeds/SubTopicTableSeeder.php

<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SubTopicTableSeeder extends Seeder
{

public function run()
{
    DB::table('sub_topics')->insert([
        'name'=>'Leibnitz theorem for nth derivative (without proof)',
        'topic_code'=>'ETMA-101-1',
        'subtopic_code'=>'ETMA-101-1-1',
        'tag'=>'leibnitz',

    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Convergence and divergence of infinite series',
        'topic_code'=>'ETMA-101-2',
        'subtopic_code'=>'ETMA-101-2-1',


    ]);

    DB::table('sub_topics')->insert([
        'name'=>'positive terms infinite series',
        'topic_code'=>'ETMA-101-2',
        'subtopic_code'=>'ETMA-101-2-2',


    ]);

    DB::table('sub_topics')->insert([
        'name'=>'necessary condition',
        'topic_code'=>'ETMA-101-2',
        'subtopic_code'=>'ETMA-101-2-3',


    ]);


    DB::table('sub_topics')->insert([
        'name'=>'comparison test (Limit test)',
        'topic_code'=>'ETMA-101-2',
        'subtopic_code'=>'ETMA-101-2-4',


    ]);

    DB::table('sub_topics')->insert([
        'name'=>'D’Alembert ratio test',
        'topic_code'=>'ETMA-101-2',
        'subtopic_code'=>'ETMA-101-2-5',


    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Integral Test',
        'topic_code'=>'ETMA-101-2',
        'subtopic_code'=>'ETMA-101-2-6',


    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Cauchy root test',
        'topic_code'=>'ETMA-101-2',
        'subtopic_code'=>'ETMA-101-2-7',


    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Raabe test',
        'topic_code'=>'ETMA-101-2',
        'subtopic_code'=>'ETMA-101-2-8',


    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Logarithmic test',
        'topic_code'=>'ETMA-101-2',
        'subtopic_code'=>'ETMA-101-2-9',


    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Leibnitz test',
        'topic_code'=>'ETMA-101-3',
        'subtopic_code'=>'ETMA-101-3-1',


    ]);

    DB::table('sub_topics')->insert([
        'name'=>'conditional and absolutely convergence',
        'topic_code'=>'ETMA-101-3',
        'subtopic_code'=>'ETMA-101-3-2',


    ]);

    DB::table('sub_topics')->insert([
        'name'=>"Taylor’s and Maclaurin’s expansion(without proof) of function ( e x , log(1+x), cos x , sin x) with remainder terms",
        'topic_code'=>'ETMA-101-3',
        'subtopic_code'=>'ETMA-101-3-3',


    ]);

    DB::table('sub_topics')->insert([
        'name'=>"Taylor’s and Maclaurin’s seriese",
        'topic_code'=>'ETMA-101-3',
        'subtopic_code'=>'ETMA-101-3-4',


    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Error and approximation',
        'topic_code'=>'ETMA-101-3',
        'subtopic_code'=>'ETMA-101-3-5',


    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Radius of curvature and curve tracing for Cartesiann',
        'topic_code'=>'ETMA-101-4',
        'subtopic_code'=>'ETMA-101-4-1',

    ]);

    DB::table('sub_topics')->insert([
        'name'=>'parametric and polar curves',
        'topic_code'=>'ETMA-101-4',
        'subtopic_code'=>'ETMA-101-4-2',


    ]);

    DB::table('sub_topics')->insert([
        'name'=>'integration using reduction formula',
        'topic_code'=>'ETMA-101-5',
        'subtopic_code'=>'ETMA-101-5-1',


    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Area under the curve',
        'topic_code'=>'ETMA-101-6',
        'subtopic_code'=>'ETMA-101-6-1',


    ]);


    DB::table('sub_topics')->insert([
        'name'=>'length of the curve',
        'topic_code'=>'ETMA-101-6',
        'subtopic_code'=>'ETMA-101-6-2',


    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Error and approximation',
        'topic_code'=>'ETMA-101-6',
        'subtopic_code'=>'ETMA-101-6-3',


    ]);

    DB::table('sub_topics')->insert([
        'name'=>'volumes and surface area of solids of revolution about axis onlyn',
        'topic_code'=>'ETMA-101-6',
        'subtopic_code'=>'ETMA-101-6-4',

    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Gamma and Beta functions',
        'topic_code'=>'ETMA-101-6',
        'subtopic_code'=>'ETMA-101-6-5',


    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Orthogonal matrix',
        'topic_code'=>'ETMA-101-7',
        'subtopic_code'=>'ETMA-101-7-1',


    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Hermitian matrix',
        'topic_code'=>'ETMA-101-7',
        'subtopic_code'=>'ETMA-101-7-2',


    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Skew-Hermitian matrix',
        'topic_code'=>'ETMA-101-7',
        'subtopic_code'=>'ETMA-101-7-3',


    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Unitary matrix',
        'topic_code'=>'ETMA-101-7',
        'subtopic_code'=>'ETMA-101-7-4',


    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Inverse of matrix by Gauss-Jordan Method',
        'topic_code'=>'ETMA-101-7',
        'subtopic_code'=>'ETMA-101-7-5',


    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Rank of matrix by echelon and Normal (canonical) form',
        'topic_code'=>'ETMA-101-7',
        'subtopic_code'=>'ETMA-101-7-6',

    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Linear dependence and linear independence of vectors',
        'topic_code'=>'ETMA-101-7',
        'subtopic_code'=>'ETMA-101-7-7',

    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Consistency and inconsistency of linear system of homogeneous and non homogeneous equations',
        'topic_code'=>'ETMA-101-7',
        'subtopic_code'=>'ETMA-101-7-8',

    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Eigen values and Eigen vectors',
        'topic_code'=>'ETMA-101-7',
        'subtopic_code'=>'ETMA-101-7-9',

    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Properties of Eigen values',
        'topic_code'=>'ETMA-101-7',
        'subtopic_code'=>'ETMA-101-7-10',

    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Cayley-Hamilton theorem',
        'topic_code'=>'ETMA-101-7',
        'subtopic_code'=>'ETMA-101-7-11',

    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Diagonlization of matrix',
        'topic_code'=>'ETMA-101-7',
        'subtopic_code'=>'ETMA-101-7-12',

    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Quadratic form, reduction of quadratic form to canonical form',
        'topic_code'=>'ETMA-101-7',
        'subtopic_code'=>'ETMA-101-7-13',

    ]);





    DB::table('sub_topics')->insert([
        'name'=>'First order linear differential equations',
        'topic_code'=>'ETMA-101-8',
        'subtopic_code'=>'ETMA-101-8-1',

    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Leibnitz and Bernaulli’s equation',
        'topic_code'=>'ETMA-101-8',
        'subtopic_code'=>'ETMA-101-8-2',

    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Exact differential equations',
        'topic_code'=>'ETMA-101-8',
        'subtopic_code'=>'ETMA-101-8-3',

    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Equations reducible to exact differential equations',
        'topic_code'=>'ETMA-101-8',
        'subtopic_code'=>'ETMA-101-8-4',

    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Linear differential equation of higher order with constant coefficients',
        'topic_code'=>'ETMA-101-8',
        'subtopic_code'=>'ETMA-101-8-5',

    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Homogeneous and non homogeneous differential equations reducible to linear differential equations with constant coefficients',
      'topic_code'=>'ETMA-101-8',
        'subtopic_code'=>'ETMA-101-8-6',

    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Method of variation of parameters',
        'topic_code'=>'ETMA-101-8',
        'subtopic_code'=>'ETMA-101-8-7',


    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Bessel’s and Legendre’sequations',
        'topic_code'=>'ETMA-101-8',
        'subtopic_code'=>'ETMA-101-8-8',


    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Bessel’s and Legendre’s functions and their properties',
        'topic_code'=>'ETMA-101-8',
        'subtopic_code'=>'ETMA-101-8-9',


    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Bessel’s and Legendre’s functions and their properties',
        'topic_code'=>'ETMA-101-8',
        'subtopic_code'=>'ETMA-101-8-10',


    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Introduction',
        'topic_code'=>'EPHA-103-1',
        'subtopic_code'=>'ETPH-103-1-1',

    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Interference due to division of wave front: Fresnel’s Biprism',
        'topic_code'=>'ETPH-103-1',
        'subtopic_code'=>'ETPH-103-1-2',

    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Interference due to division of amplitude: wedge shaped film',
        'topic_code'=>'ETPH-103-1',
        'subtopic_code'=>'ETPH-103-1-3',

    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Newton’s rings',
        'topic_code'=>'ETPH-103-1',
        'subtopic_code'=>'ETPH-103-1-4',

    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Introduction',
        'topic_code'=>'ETPPH103-2',
        'subtopic_code'=>'ETPH-103-2-1',

    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Difference between Fresnel and Fraunhofer diffraction',
        'topic_code'=>'ETPH-103-2',
        'subtopic_code'=>'ETPH-103-2-2',

    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Single slit diffraction',
        'topic_code'=>'ETPH-103-2',
        'subtopic_code'=>'ETPH-103-2-3',

    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Transmission diffraction grating',
        'topic_code'=>'ETPH-103-2',
        'subtopic_code'=>'ETPH-103-2-4',

    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Absent spectra',
        'topic_code'=>'ETPH-103-2',
        'subtopic_code'=>'ETPH-103-2-5',

    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Introduction',
        'topic_code'=>'ETPH-103-3',
        'subtopic_code'=>'ETPH-103-3-1',

    ]);
    DB::table('sub_topics')->insert([
        'name'=>'Uniaxial crystals',
        'topic_code'=>'ETPH-103-3',
        'subtopic_code'=>'ETPH-103-3-2',

    ]);
    DB::table('sub_topics')->insert([
        'name'=>'Double refraction',
        'topic_code'=>'ETPH-103-3',
        'subtopic_code'=>'ETPH-103-3-3',

    ]);
    DB::table('sub_topics')->insert([
        'name'=>'Nicol prism',
        'topic_code'=>'ETPH-103-3',
        'subtopic_code'=>'ETPH-103-3-4',

    ]);
    DB::table('sub_topics')->insert([
        'name'=>'Quarter PHd half wave plates',
        'topic_code'=>'ETPH-103-3',
        'subtopic_code'=>'ETPH-103-3-5',

    ]);
    DB::table('sub_topics')->insert([
        'name'=>'Theory of production of plane',
        'topic_code'=>'ETPH-103-3',
        'subtopic_code'=>'ETPH-103-3-6',

    ]);


    DB::table('sub_topics')->insert([
        'name'=>'circularly and elliptically polarized lights',
        'topic_code'=>'ETPH-103-3',
        'subtopic_code'=>'ETPH-103-3-7',

    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Specific rotation',
        'topic_code'=>'ETPH-103-3',
        'subtopic_code'=>'ETPH-103-3-8',

    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Laurents half shade polarimeter',
        'topic_code'=>'ETPH-103-3',
        'subtopic_code'=>'ETPH-103-3-9',

    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Spontaneous and stimulated emissions',
        'topic_code'=>'ETPH-103-4',
        'subtopic_code'=>'ETPH-103-4-1',

    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Einstein’s coefficients',
        'topic_code'=>'ETPH-103-4',
        'subtopic_code'=>'ETPH-103-4-2',

    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Laser and its principle',
        'topic_code'=>'ETPH-103-4',
        'subtopic_code'=>'ETPH-103-4-3',

    ]);

    DB::table('sub_topics')->insert([
        'name'=>'He-Ne laser',
        'topic_code'=>'ETPH-103-4',
        'subtopic_code'=>'ETPH-103-4-4',

    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Introduction',
        'topic_code'=>'ETPH-103-5',
        'subtopic_code'=>'ETPH-103-5-1',

    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Single mode fibre',
        'topic_code'=>'ETPH-103-5',
        'subtopic_code'=>'ETPH-103-5-2',

    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Step index and graded index multimode fibres',
        'topic_code'=>'ETPH-103-5',
        'subtopic_code'=>'ETPH-103-5-3',

    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Acceptance angle',
        'topic_code'=>'ETPH-103-5',
        'subtopic_code'=>'ETPH-103-5-4',

    ]);

    DB::table('sub_topics')->insert([
        'name'=>'numerical aperture',
        'topic_code'=>'ETPH-103-5',
        'subtopic_code'=>'ETPH-103-5-5',

    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Introduction',
        'topic_code'=>'ETPH-103-6',
        'subtopic_code'=>'ETPH-103-6-1',

    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Frame of reference',
        'topic_code'=>'ETPH-103-6',
        'subtopic_code'=>'ETPH-103-6-2',

    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Galilean transformation',
        'topic_code'=>'ETPH-103-6',
        'subtopic_code'=>'ETPH-103-6-3',

    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Michelson-Morley experiment',
        'topic_code'=>'ETPH-103-6',
        'subtopic_code'=>'ETPH-103-6-4',

    ]);
    DB::table('sub_topics')->insert([
        'name'=>'Postulates of special theory of relativity',
        'topic_code'=>'ETPH-103-6',
        'subtopic_code'=>'ETPH-103-6-5',

    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Lorentz transformations',
        'topic_code'=>'ETPH-103-6',
        'subtopic_code'=>'ETPH-103-6-6',

    ]);



    DB::table('sub_topics')->insert([
        'name'=>'Length contraction',
        'topic_code'=>'ETPH-103-6',
        'subtopic_code'=>'ETPH-103-6-7',

    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Time dilation',
        'topic_code'=>'ETPH-103-6',
        'subtopic_code'=>'ETPH-103-6-8',

    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Mass energy relation',
        'topic_code'=>'ETPH-103-6',
        'subtopic_code'=>'ETPH-103-6-9',
    ]);
    DB::table('sub_topics')->insert([
        'name'=>'Introduction',
        'topic_code'=>'ETPH-103-7',
        'subtopic_code'=>'ETPH-103-7-1',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'ProductioPHof ultrasonics by magnetostriction and Piezoelectric methods',
        'topic_code'=>'ETPH-103-7',
        'subtopic_code'=>'ETPH-103-7-2',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Applications',
        'topic_code'=>'ETPH-103-7',
        'subtopic_code'=>'ETPH-103-7-3',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Introduction',
        'topic_code'=>'ETPH-103-8',
        'subtopic_code'=>'ETPH-103-8-1',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Radioactivity',
        'topic_code'=>'ETPH-103-8',
        'subtopic_code'=>'ETPH-103-8-2',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Alpha decay',
        'topic_code'=>'ETPH-103-8',
        'subtopic_code'=>'ETPH-103-8-3',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Beta decay',
        'topic_code'=>'ETPH-103-8',
        'subtopic_code'=>'ETPH-103-8-4',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Gamma decay',
        'topic_code'=>'ETPH-103-8',
        'subtopic_code'=>'ETPH-103-8-5',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Q value',
        'topic_code'=>'ETPH-103-8',
        'subtopic_code'=>'ETPH-103-8-6',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Threshold energy',
        'topic_code'=>'ETPH-103-8',
        'subtopic_code'=>'ETPH-103-8-7',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Nuclear reactions',
        'topic_code'=>'ETPH-103-8',
        'subtopic_code'=>'ETPH-103-8-8',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Nuclear fisPHon: Liquid drop model',
        'topic_code'=>'ETPH-103-8',
        'subtopic_code'=>'ETPH-103-8-9',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Nuclear fusion',
        'topic_code'=>'ETPH-103-8',
        'subtopic_code'=>'ETPH-103-8-10',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Particle accelerators: Linear accelerator',
        'topic_code'=>'ETPH-103-8',
        'subtopic_code'=>'ETPH-103-8-11',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Cyclotron',
        'topic_code'=>'ETPH-103-8',
        'subtopic_code'=>'ETPH-103-8-12',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Radiation detectors: Ionization chamber',
        'topic_code'=>'ETPH-103-8',
        'subtopic_code'=>'ETPH-103-8-13',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Geiger Mueller Counter',
        'topic_code'=>'ETPH-103-8',
        'subtopic_code'=>'ETPH-103-8-14',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Introduction of Manufacturing processes and their classification',
        'topic_code'=>'ETME-105-1',
        'subtopic_code'=>'ETME-105-1-1',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Basic Metals & Alloys : Properties and Applications',
        'topic_code'=>'ETME-105-1',
        'subtopic_code'=>'ETME-105-1-2',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Properties of Materials: Strength ,elasticity, stiffness, malleability, ductility, brittleness, toughness and hardness',
        'topic_code'=>'ETME-105-1',
        'subtopic_code'=>'ETME-105-1-3',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Ferrous Materials: Carbon steels, its classification based on % carbon as low, mild, medium & high carbon steel, its properties & applications',
        'topic_code'=>'ETME-105-1',
        'subtopic_code'=>'ETME-105-1-4',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Wrought iron,Cast iron',
        'topic_code'=>'ETME-105-1',
        'subtopic_code'=>'ETME-105-1-5',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Alloy steels: stainless steel, tool steel',
        'topic_code'=>'ETME-105-1',
        'subtopic_code'=>'ETME-105-1-6',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Elementary introduction to Heat',
        'topic_code'=>'ETME-105-1',
        'subtopic_code'=>'ETME-105-1-17',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'treatment of carbon steels: annealing, normalizing, quenching & tempering and case- hardening',
        'topic_code'=>'ETME-105-1',
        'subtopic_code'=>'ETME-105-1-8',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Non-Ferrous metals & alloys: Properties and uses of various non-ferrous metals & alloys and its composition such as Cu-alloys: Brass, Bronze, Al-alloys such as Duralumin',
        'topic_code'=>'ETME-105-1',
        'subtopic_code'=>'ETME-105-1-9',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Principles of metal casting',
        'topic_code'=>'ETME-105-2',
        'subtopic_code'=>'ETME-105-2-1',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Pattern materials',
        'topic_code'=>'ETME-105-2',
        'subtopic_code'=>'ETME-105-2-2',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'types and allowance',
        'topic_code'=>'ETME-105-2',
        'subtopic_code'=>'ETME-105-2-3',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'composition and properties of moulding sand',
        'topic_code'=>'ETME-105-2',
        'subtopic_code'=>'ETME-105-2-4',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'foundry tools',
        'topic_code'=>'ETME-105-2',
        'subtopic_code'=>'ETME-105-2-5',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'concept of cores and core print',
        'topic_code'=>'ETME-105-2',
        'subtopic_code'=>'ETME-105-2-6',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'elements of gating system',
        'topic_code'=>'ETME-105-2',
        'subtopic_code'=>'ETME-105-2-7',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'description and operation of cupola',
        'topic_code'=>'ETME-105-2',
        'subtopic_code'=>'ETME-105-2-8',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'special casting processes e.g. die-casting; permanent mould casting; centrifugal casting; investment casting',
        'topic_code'=>'ETME-105-2',
        'subtopic_code'=>'ETME-105-2-9',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'casting defects',
        'topic_code'=>'ETME-105-2',
        'subtopic_code'=>'ETME-105-2-10',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Hot working and cold working',
        'topic_code'=>'ETME-105-3',
        'subtopic_code'=>'ETME-105-3-1',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Forging tools and equipments',
        'topic_code'=>'ETME-105-3',
        'subtopic_code'=>'ETME-105-3-2',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Forging operations',
        'topic_code'=>'ETME-105-3',
        'subtopic_code'=>'ETME-105-3-4',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Forging types: Smith forging, Drop forging, Press forging, Machine forging',
        'topic_code'=>'ETME-105-3',
        'subtopic_code'=>'ETME-105-3-5',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Forging defects; Extrusion, wire drawing, swaging',
        'topic_code'=>'ETME-105-3',
        'subtopic_code'=>'ETME-105-3-6',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Fitting shop tools',
        'topic_code'=>'ETME-105-4',
        'subtopic_code'=>'ETME-105-4-1',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'operation: Fitting , sawing, chipping',
        'topic_code'=>'ETME-105-4',
        'subtopic_code'=>'ETME-105-4-2',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'thread cutting (with taps and dies)',
        'topic_code'=>'ETME-105-4',
        'subtopic_code'=>'ETME-105-4-3',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Marking and marking tools',
        'topic_code'=>'ETME-105-4',
        'subtopic_code'=>'ETME-105-4-4',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Welding principles',
        'topic_code'=>'ETME-105-5',
        'subtopic_code'=>'ETME-105-5-1',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'classification of welding techniques',
        'topic_code'=>'ETME-105-5',
        'subtopic_code'=>'ETME-105-5-2',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Oxyacetylene Gas welding',
        'topic_code'=>'ETME-105-5',
        'subtopic_code'=>'ETME-105-5-3',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'equipment and field of application',
        'topic_code'=>'ETME-105-5',
        'subtopic_code'=>'ETME-105-5-4',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Arc-welding',
        'topic_code'=>'ETME-105-5',
        'subtopic_code'=>'ETME-105-5-5',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'metal arc',
        'topic_code'=>'ETME-105-5',
        'subtopic_code'=>'ETME-105-5-6',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Carbon arc welding',
        'topic_code'=>'ETME-105-5',
        'subtopic_code'=>'ETME-105-5-7',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'submerged arc welding',
        'topic_code'=>'ETME-105-5',
        'subtopic_code'=>'ETME-105-5-8',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'atomic hydrogen welding',
        'topic_code'=>'ETME-105-5',
        'subtopic_code'=>'ETME-105-5-9',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'TIG and MIG welding',
        'topic_code'=>'ETME-105-5',
        'subtopic_code'=>'ETME-105-5-10',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Electric resistance welding: spot; seam; flash; butt and percussion welding',
        'topic_code'=>'ETME-105-5',
        'subtopic_code'=>'ETME-105-5-11',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Flux: composition; properties and function',
        'topic_code'=>'ETME-105-5',
        'subtopic_code'=>'ETME-105-5-12',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Electrodes',
        'topic_code'=>'ETME-105-5',
        'subtopic_code'=>'ETME-105-5-13',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Types of joints and edge preparation',
        'topic_code'=>'ETME-105-5',
        'subtopic_code'=>'ETME-105-5-14',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Brazing and soldering',
        'topic_code'=>'ETME-105-5',
        'subtopic_code'=>'ETME-105-5-15',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'welding defects',
        'topic_code'=>'ETME-105-5',
        'subtopic_code'=>'ETME-105-5-16',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Tools and equipments used in sheet metal work',
        'topic_code'=>'ETME-105-6',
        'subtopic_code'=>'ETME-105-6-1',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'metals used for sheets',
        'topic_code'=>'ETME-105-6',
        'subtopic_code'=>'ETME-105-6-2',
    ]);
    DB::table('sub_topics')->insert([
        'name'=>'standard specification for sheets',
        'topic_code'=>'ETME-105-6',
        'subtopic_code'=>'ETME-105-6-3',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Types of sheet metal operations: shearing, drawing, bending',
        'topic_code'=>'ETME-105-6',
        'subtopic_code'=>'ETME-105-6-4',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Other operations like spinning, stretch forming,embossing and coining ',
        'topic_code'=>'ETME-105-6',
        'subtopic_code'=>'ETME-105-6-5',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Introduction of powder metallurgy process: powder production, blending, compaction,sintering',
        'topic_code'=>'ETME-105-7',
        'subtopic_code'=>'ETME-105-7-1',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Introduction of Circuit parameters and energy sources (Dependent and Independent)',
        'topic_code'=>'ETEE-107-1',
        'subtopic_code'=>'ETEE-107-1-1',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Mesh and Nodal Analysis',
        'topic_code'=>'ETEE-107-1',
        'subtopic_code'=>'ETEE-107-1-2',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Superposition',
        'topic_code'=>'ETEE-107-1',
        'subtopic_code'=>'ETEE-107-1-3',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Thevenin’s',
        'topic_code'=>'ETEE-107-1',
        'subtopic_code'=>'ETEE-107-1-4',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Norton’s',
        'topic_code'=>'ETEE-107-1',
        'subtopic_code'=>'ETEE-107-1-5',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Reciprocity',
        'topic_code'=>'ETEE-107-1',
        'subtopic_code'=>'ETEE-107-1-6',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Maximum Power Transfer',
        'topic_code'=>'ETEE-107-1',
        'subtopic_code'=>'ETEE-107-1-7',
    ]);
    DB::table('sub_topics')->insert([
        'name'=>'Millman’s Theorems',
        'topic_code'=>'ETEE-107-1',
        'subtopic_code'=>'ETEE-107-1-8',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Star- Delta Transformation and their Applications to the Analysis of DC circuits',
        'topic_code'=>'ETEE-107-1',
        'subtopic_code'=>'ETEE-107-1-9',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'A.C. Fundamentals',
        'topic_code'=>'ETEE-107-2',
        'subtopic_code'=>'ETEE-107-2-1',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Phasor representation',
        'topic_code'=>'ETEE-107-2',
        'subtopic_code'=>'ETEE-107-2-3',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Steady State Response of Series and Parallel R-L, R-C and R-L-C circuits using j-notation',
        'topic_code'=>'ETEE-107-2',
        'subtopic_code'=>'ETEE-107-2-4',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Series and Parallel resonance of RLC Circuits, Quality factor, Bandwidth, Complex Power',
        'topic_code'=>'ETEE-107-2',
        'subtopic_code'=>'ETEE-107-2-5',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Introduction to balanced 3-phase circuits with Star- Delta Connections',
        'topic_code'=>'ETEE-107-2',
        'subtopic_code'=>'ETEE-107-2-6',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Basics of measuring instruments and their types',
        'topic_code'=>'ETEE-107-3',
        'subtopic_code'=>'ETEE-107-3-1',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Working principles and applications of moving coil, moving iron (ammeter & voltmeter) and Extension of their ranges',
        'topic_code'=>'ETEE-107-3',
        'subtopic_code'=>'ETEE-107-3-2',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'dynamometer- type Wattmeter',
        'topic_code'=>'ETEE-107-3',
        'subtopic_code'=>'ETEE-107-3-3',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'induction-type Energy Meter ',
        'topic_code'=>'ETEE-107-3',
        'subtopic_code'=>'ETEE-107-3-4',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Two-wattmeter method for the measurement of power in three phase circuits',
        'topic_code'=>'ETEE-107-3',
        'subtopic_code'=>'ETEE-107-3-5',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Introduction to digital voltmeter, digital Multimeter and Electronic Energy Meter',
        'topic_code'=>'ETEE-107-3',
        'subtopic_code'=>'ETEE-107-3-6',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Fundamentals of Magnetic Circuits',
        'topic_code'=>'ETEE-107-4',
        'subtopic_code'=>'ETEE-107-4-1',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Hysteresis and Eddy current losses',
        'topic_code'=>'ETEE-107-4',
        'subtopic_code'=>'ETEE-107-4-2',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'working principle, equivalent circuit, efficiency and voltage regulation of single phase transformer and its applications',
        'topic_code'=>'ETEE-107-4',
        'subtopic_code'=>'ETEE-107-4-3',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Introduction to DC and Induction motors (both three phase and single phase)',
        'topic_code'=>'ETEE-107-4',
        'subtopic_code'=>'ETEE-107-4-4',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Stepper Motor',
        'topic_code'=>'ETEE-107-4',
        'subtopic_code'=>'ETEE-107-4-5',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Permanent Magnet Brushless DC Motor',
        'topic_code'=>'ETEE-107-4',
        'subtopic_code'=>'ETEE-107-4-6',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Understanding the need, basic guidelines, content and process for value education',
        'topic_code'=>'ETHS-109-1',
        'subtopic_code'=>'ETHS-109-1-1',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Basic Human Aspirations: Prosperity and happiness',
        'topic_code'=>'ETHS-109-1',
        'subtopic_code'=>'ETHS-109-1-2',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Methods to fulfil the human aspirations – understanding and living in harmony at various levels',
        'topic_code'=>'ETHS-109-1',
        'subtopic_code'=>'ETHS-109-1-3',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Practice Session-1',
        'topic_code'=>'ETHS-109-1',
        'subtopic_code'=>'ETHS-109-1-4',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Co-existence of the sentient “I” and the material body – understanding their needs – Happiness & Conveniences',
        'topic_code'=>'ETHS-109-2',
        'subtopic_code'=>'ETHS-109-2-1',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Understanding the Harmony of “I” with the body – Correct appraisal of physical needs and the meaning of prosperity',
        'topic_code'=>'ETHS-109-2',
        'subtopic_code'=>'ETHS-109-2-2',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Programme to ensure harmony of “I” and Body-Mental and Physical health and happiness',
        'topic_code'=>'ETHS-109-2',
        'subtopic_code'=>'ETHS-109-2-3',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Harmony in family and society: Understanding Human-human relationship in terms of mutual trust and respect',
        'topic_code'=>'ETHS-109-2',
        'subtopic_code'=>'ETHS-109-2-4',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Understanding society',
        'topic_code'=>'ETHS-109-2',
        'subtopic_code'=>'ETHS-109-2-5',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Practice Session-2',
        'topic_code'=>'ETHS-109-2',
        'subtopic_code'=>'ETHS-109-2-6',
    ]);



    DB::table('sub_topics')->insert([
        'name'=>'Ethical Human Conduct – based on acceptance of basic human values',
        'topic_code'=>'ETHS-109-3',
        'subtopic_code'=>'ETHS-109-3-1',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Humanistic Constitution and universal human order – skills, sincerity and fidelity',
        'topic_code'=>'ETHS-109-3',
        'subtopic_code'=>'ETHS-109-3-2',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'To identify the scope and characteristics of people – friendly and eco-friendly production system, Technologies and management systems',
        'topic_code'=>'ETHS-109-3',
        'subtopic_code'=>'ETHS-109-3-3',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Practice Session – 03',
        'topic_code'=>'ETHS-109-3',
        'subtopic_code'=>'ETHS-109-3-4',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Professional Accountability, Roles of a professional, Ethics and image of profession.',
        'topic_code'=>'ETHS-109-4',
        'subtopic_code'=>'ETHS-109-4-1',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Technology and society',
        'topic_code'=>'ETHS-109-4',
        'subtopic_code'=>'ETHS-109-4-2',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Ethical obligations of Engineering professionals',
        'topic_code'=>'ETHS-109-4',
        'subtopic_code'=>'ETHS-109-4-3',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Roles of Engineers in industry, society, nation and the world',
        'topic_code'=>'ETHS-109-4',
        'subtopic_code'=>'ETHS-109-4-4',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Collegiality',
        'topic_code'=>'ETHS-109-4',
        'subtopic_code'=>'ETHS-109-4-5',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Loyalty',
        'topic_code'=>'ETHS-109-4',
        'subtopic_code'=>'ETHS-109-4-6',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Confidentiality',
        'topic_code'=>'ETHS-109-4',
        'subtopic_code'=>'ETHS-109-4-7',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Conflict of Interest',
        'topic_code'=>'ETHS-109-4',
        'subtopic_code'=>'ETHS-109-4-8',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Whistle Blowing',
        'topic_code'=>'ETHS-109-4',
        'subtopic_code'=>'ETHS-109-4-9',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Practice Session-04',
        'topic_code'=>'ETHS-109-4',
        'subtopic_code'=>'ETHS-109-4-10',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Five Component Model of a Computer',
        'topic_code'=>'ETCS-111-1',
        'subtopic_code'=>'ETCS-111-1-1',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'System and Application software ( introduction ) storage devices',
        'topic_code'=>'ETCS-111-1',
        'subtopic_code'=>'ETCS-111-1-2',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'primary (RAM, ROM, PROM, EPROM, cache ) Memory and secondary (magnetic tape, hard disk, Compact disks) memory',
        'topic_code'=>'ETCS-111-1',
        'subtopic_code'=>'ETCS-111-1-3',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'peripheral devices ',
        'topic_code'=>'ETCS-111-1',
        'subtopic_code'=>'ETCS-111-1-4',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'printers',
        'topic_code'=>'ETCS-111-1',
        'subtopic_code'=>'ETCS-111-1-5',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'DOS Internal, External commands',
        'topic_code'=>'ETCS-111-2',
        'subtopic_code'=>'ETCS-111-2-1',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Windows ( 2000 and NT)',
        'topic_code'=>'ETCS-111-2',
        'subtopic_code'=>'ETCS-111-2-2',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Overview of architecture of Windows, tools and system utilities including registry , partitioning of hard disk',
        'topic_code'=>'ETCS-111-2',
        'subtopic_code'=>'ETCS-111-2-3',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Overview of Linux architecture , File system , file and permissions , concept of user and group , installation of rpm and deb based packages',
        'topic_code'=>'ETCS-111-2',
        'subtopic_code'=>'ETCS-111-2-4',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Basics of programming through flow chart',
        'topic_code'=>'ETCS-111-3',
        'subtopic_code'=>'ETCS-111-3-1',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Uses of a network and Common types of networks ',
        'topic_code'=>'ETCS-111-4',
        'subtopic_code'=>'ETCS-111-4-1',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Network topologies and protocols ',
        'topic_code'=>'ETCS-111-4',
        'subtopic_code'=>'ETCS-111-4-2',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Network media and hardware ',
        'topic_code'=>'ETCS-111-4',
        'subtopic_code'=>'ETCS-111-4-3',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Overview of Database Management System',
        'topic_code'=>'ETCS-111-5',
        'subtopic_code'=>'ETCS-111-5-1',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Editing and Reviewing, Drawing, Tables, Graphs, Templates',
        'topic_code'=>'ETCS-111-6',
        'subtopic_code'=>'ETCS-111-6-1',
    ]);



    DB::table('sub_topics')->insert([
        'name'=>'Worksheet Management , Formulas, Functions, Charts',
        'topic_code'=>'ETCS-111-7',
        'subtopic_code'=>'ETCS-111-7-1',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'designing powerful power-point presentation',
        'topic_code'=>'ETCS-111-8',
        'subtopic_code'=>'ETCS-111-8-1',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Definition, Classification & Calorific value of fuels (gross and net)',
        'topic_code'=>'ETCH-113-1',
        'subtopic_code'=>'ETCH-113-1-1',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Dulong’s formula (Numericals)',
        'topic_code'=>'ETCH-113-1',
        'subtopic_code'=>'ETCH-113-1-2',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Determination of calorific value of fuels using bomb’s calorimeter (Numericals)',
        'topic_code'=>'ETCH-113-1',
        'subtopic_code'=>'ETCH-113-1-3',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Determination of calorific value of fuels using Boy’s Gas Calorimeter (Numericals)',
        'topic_code'=>'ETCH-113-1',
        'subtopic_code'=>'ETCH-113-1-4',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Cracking – Thermal & catalytic cracking',
        'topic_code'=>'ETCH-113-1',
        'subtopic_code'=>'ETCH-113-1-5',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Octane & Cetane numbers with their significance',
        'topic_code'=>'ETCH-113-1',
        'subtopic_code'=>'ETCH-113-1-6',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'High & Low temperature carbonization',
        'topic_code'=>'ETCH-113-1',
        'subtopic_code'=>'ETCH-113-1-7',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Manufacture of coke (Otto-Hoffmann oven)',
        'topic_code'=>'ETCH-113-1',
        'subtopic_code'=>'ETCH-113-1-8',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Proximate and ultimate analysis of Coal (Numericals)',
        'topic_code'=>'ETCH-113-1',
        'subtopic_code'=>'ETCH-113-1-9',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Combustion of fuels (Numericals)',
        'topic_code'=>'ETCH-113-1',
        'subtopic_code'=>'ETCH-113-1-10',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Definition of various terms',
        'topic_code'=>'ETCH-113-2',
        'subtopic_code'=>'ETCH-113-2-1',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Gibb’s Phase rule & its derivation',
        'topic_code'=>'ETCH-113-2',
        'subtopic_code'=>'ETCH-113-2-2',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Application of phase rule to One component system- The water system',
        'topic_code'=>'ETCH-113-2',
        'subtopic_code'=>'ETCH-113-2-3',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Application of phase rule to Two component system- The Lead-Silver system (Pattinson’s process)',
        'topic_code'=>'ETCH-113-2',
        'subtopic_code'=>'ETCH-113-2-4',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Catalyst and its characteristics',
        'topic_code'=>'ETCH-113-2',
        'subtopic_code'=>'ETCH-113-2-5',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Types of catalysts',
        'topic_code'=>'ETCH-113-2',
        'subtopic_code'=>'ETCH-113-2-6',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Concept of promoters, inhibitors and poisons',
        'topic_code'=>'ETCH-113-2',
        'subtopic_code'=>'ETCH-113-2-7',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Theories of catalysis: Intermediate compound formation theory, adsorption or contact theory',
        'topic_code'=>'ETCH-113-2',
        'subtopic_code'=>'ETCH-113-2-8',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Application of catalysts for industrially important processes',
        'topic_code'=>'ETCH-113-2',
        'subtopic_code'=>'ETCH-113-2-9',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Enzyme catalysis: Characteristics, Kinetics & Mechanism of enzyme catalysed reaction ( Michaelis-Menten equation)',
        'topic_code'=>'ETCH-113-2',
        'subtopic_code'=>'ETCH-113-2-10',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Acid-Base catalysis: Types, Kinetics & Mechanism',
        'topic_code'=>'ETCH-113-2',
        'subtopic_code'=>'ETCH-113-2-11',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Catalysis by metals salts (Wilkinson’s Catalyst)',
        'topic_code'=>'ETCH-113-2',
        'subtopic_code'=>'ETCH-113-2-12',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Auto-catalysis',
        'topic_code'=>'ETCH-113-2',
        'subtopic_code'=>'ETCH-113-2-13',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Heterogeneous catalysis (Langmuir-Hinshelwood mechanism)',
        'topic_code'=>'ETCH-113-2',
        'subtopic_code'=>'ETCH-113-2-14',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Introduction and specifications of water',
        'topic_code'=>'ETCH-113-3',
        'subtopic_code'=>'ETCH-113-3-1',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Hardness and its determination by EDTA method (Numericals)',
        'topic_code'=>'ETCH-113-3',
        'subtopic_code'=>'ETCH-113-3-2',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Alkalinity and its determination (Numericals)',
        'topic_code'=>'ETCH-113-3',
        'subtopic_code'=>'ETCH-113-3-3',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Reverse Osmosis',
        'topic_code'=>'ETCH-113-3',
        'subtopic_code'=>'ETCH-113-3-4',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Electrodialysis',
        'topic_code'=>'ETCH-113-3',
        'subtopic_code'=>'ETCH-113-3-5',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Disinfection by break-point chlorination',
        'topic_code'=>'ETCH-113-3',
        'subtopic_code'=>'ETCH-113-3-6',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Boiler feed water',
        'topic_code'=>'ETCH-113-3',
        'subtopic_code'=>'ETCH-113-3-7',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'boiler problems– scale, sludge, priming & foaming: causes & prevention',
        'topic_code'=>'ETCH-113-3',
        'subtopic_code'=>'ETCH-113-3-8',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Boiler problems– caustic embrittlement & corrosion: causes & prevention',
        'topic_code'=>'ETCH-113-3',
        'subtopic_code'=>'ETCH-113-3-9',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Water Softening by Internal Treatment:carbonate & phosphate conditioning, colloidal conditioning',
        'topic_code'=>'ETCH-113-3',
        'subtopic_code'=>'ETCH-113-3-10',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'calgon treatment Water Softening by External Treatment: Lime-Soda Process (Numericals) Zeolite & Ion-Exchange Process',
        'topic_code'=>'ETCH-113-3',
        'subtopic_code'=>'ETCH-113-3-11',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Causes, effects & consequences',
        'topic_code'=>'ETCH-113-4',
        'subtopic_code'=>'ETCH-113-4-1',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Chemical or Dry corrosion & its mechanism (Pilling-Bedworth Rule)',
        'topic_code'=>'ETCH-113-4',
        'subtopic_code'=>'ETCH-113-4-2',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Electrochemial or Wet Corrosion & Its mechanism',
        'topic_code'=>'ETCH-113-4',
        'subtopic_code'=>'ETCH-113-4-3',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Rusting of Iron Passivity',
        'topic_code'=>'ETCH-113-4',
        'subtopic_code'=>'ETCH-113-4-4',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'  Galvanic series',
        'topic_code'=>'ETCH-113-4',
        'subtopic_code'=>'ETCH-113-4-5',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Galvanic Corrosion',
        'topic_code'=>'ETCH-113-4',
        'subtopic_code'=>'ETCH-113-4-6',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Soil Corrosion Pitting Corrosion',
        'topic_code'=>'ETCH-113-4',
        'subtopic_code'=>'ETCH-113-4-7',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Concentration Cell or Differential Aeration Corrosion',
        'topic_code'=>'ETCH-113-4',
        'subtopic_code'=>'ETCH-113-4-8',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Stress Corrosion',
        'topic_code'=>'ETCH-113-4',
        'subtopic_code'=>'ETCH-113-4-9',
    ]);


    DB::table('sub_topics')->insert([
        'name'=>'Factors Influencing Corrosion: Nature of metal and nature of corroding environment;',
        'topic_code'=>'ETCH-113-4',
        'subtopic_code'=>'ETCH-113-4-10',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Protective measures: Galvanization',
        'topic_code'=>'ETCH-113-4',
        'subtopic_code'=>'ETCH-113-4-11',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Protective measures:Tinning Cathodic Protection',
        'topic_code'=>'ETCH-113-4',
        'subtopic_code'=>'ETCH-113-4-12',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>'Protective measures:Sacrificial Anodic protection',
        'topic_code'=>'ETCH-113-4',
        'subtopic_code'=>'ETCH-113-4-13',
    ]);

    DB::table('sub_topics')->insert([
        'name'=>' Protective measures:Electroplating',
        'topic_code'=>'ETCH-113-4',
        'subtopic_code'=>'ETCH-113-4-14',
    ]);

      DB::table('sub_topics')->insert([
          'name'=>'Protective measures:Electroless plating',
          'topic_code'=>'ETCH-113-4',
          'subtopic_code'=>'ETCH-113-4-15',
      ]);

      DB::table('sub_topics')->insert([
          'name'=>'Prevention of Corrosion by Material selection & Design',
          'topic_code'=>'ETCH-113-4',
          'subtopic_code'=>'ETCH-113-4-16',
      ]);


}

}
//kaha se uthaaya h? ye database?
