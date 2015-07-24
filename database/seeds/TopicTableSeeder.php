// app/database/seeds/TopicTableSeeder.php

<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TopicTableSeeder extends Seeder
{

public function run()
{
    DB::table('topics')->insert([
        'subject_code'=>'ETMA-101',
        'name'=>'Successive differentiation',
        'topic_code'=>'ETMA-101-1',
        'overview'=>'succesive differentiation ',
        'unit'=>1,
    ]);

    DB::table('topics')->insert([
        'subject_code'=>'ETMA-101',
        'name'=>'Infinite series',
        'topic_code'=>'ETMA-101-2',
        'overview'=>' Infine series',
        'unit'=>1,
    ]);

    DB::table('topics')->insert([
        'subject_code'=>'ETMA-101',
        'name'=>'Alternating series',
        'topic_code'=>'ETMA-101-3',
        'overview'=>'',
        'unit'=>1,
    ]);

    DB::table('topics')->insert([
        'subject_code'=>'ETMA-101',
        'name'=>'Asymptotes to Cartesian curves',
        'topic_code'=>'ETMA-101-4',
        'overview'=>'',
        'unit'=>2,
    ]);

    DB::table('topics')->insert([
        'subject_code'=>'ETMA-101',
        'name'=>'Integration',
        'topic_code'=>'ETMA-101-5',
        'overview'=>' ',
        'unit'=>2,
    ]);


    DB::table('topics')->insert([
        'subject_code'=>'ETMA-101',
        'name'=>'Application of integration',
        'topic_code'=>'ETMA-101-6',
        'overview'=>'',
        'unit'=>2,
    ]);

    DB::table('topics')->insert([
        'subject_code'=>'ETMA-101',
        'name'=>'Matrices',
        'topic_code'=>'ETMA-101-7',
        'overview'=>' ',
        'unit'=>3,
    ]);

    DB::table('topics')->insert([
        'subject_code'=>'ETMA-101',
        'name'=>'Ordinary differential equations',
        'topic_code'=>'ETMA-101-8',
        'overview'=>'',
        'unit'=>4,
    ]);

    DB::table('topics')->insert([
        'subject_code'=>'ETPH-103',
        'name'=>'Interference',
        'topic_code'=>'ETPH-103-1',
        'overview'=>' ',
        'unit'=>1,
    ]);

    DB::table('topics')->insert([
        'subject_code'=>'ETPH-103',
        'name'=>'Diffraction',
        'topic_code'=>'ETPH-103-2',
        'overview'=>'',
        'unit'=>1,
    ]);

    DB::table('topics')->insert([
        'subject_code'=>'ETPH-103',
        'name'=>'Polarization',
        'topic_code'=>'ETPH-103-3',
        'overview'=>'',
        'unit'=>2,
    ]);
    DB::table('topics')->insert([
        'subject_code'=>'ETPH-103',
        'name'=>'Laser',
        'topic_code'=>'ETPH-103-4',
        'overview'=>'',
        'unit'=>2,
    ]);
    DB::table('topics')->insert([
        'subject_code'=>'ETPH-103',
        'name'=>'Fibre optics',
        'topic_code'=>'ETPH-103-5',
        'overview'=>' ',
        'unit'=>2,
    ]);
    DB::table('topics')->insert([
        'subject_code'=>'ETPH-103',
        'name'=>'Theory of Relativity',
        'topic_code'=>'ETPH-103-6',
        'overview'=>' ',
        'unit'=>3,
    ]);
    DB::table('topics')->insert([
        'subject_code'=>'ETPH-103',
        'name'=>'Ultrasonics',
        'topic_code'=>'ETPH-103-7',
        'overview'=>' ',
        'unit'=>3,
    ]);
    DB::table('topics')->insert([
        'subject_code'=>'ETPH-103',
        'name'=>'Nuclear Physics',
        'topic_code'=>'ETPH-103-8',
        'overview'=>'',
        'unit'=>4,
    ]);
    DB::table('topics')->insert([
        'subject_code'=>'ETME-105',
        'name'=>'Introduction:',
        'topic_code'=>'ETME-105-1',
        'overview'=>'',
        'unit'=>1
    ]);

    DB::table('topics')->insert([
        'subject_code'=>'ETME-105',
        'name'=>'Casting Processes:',
        'topic_code'=>'ETME-105-2',
        'overview'=>'',
        'unit'=>1,
    ]);
    DB::table('topics')->insert([
        'subject_code'=>'ETME-105',
        'name'=>'Smithy and Forging',
        'topic_code'=>'ETME-105-3',
        'overview'=>'',
        'unit'=>2,
    ]);
    DB::table('topics')->insert([
        'subject_code'=>'ETME-105',
        'name'=>'Bench Work and Fitting:',
        'topic_code'=>'ETME-105-4',
        'overview'=>'',
        'unit'=>2,
    ]);
    DB::table('topics')->insert([
        'subject_code'=>'ETME-105',
        'name'=>'Metal joining',
        'topic_code'=>'ETME-105-5',
        'overview'=>'',
        'unit'=>3,
    ]);
    DB::table('topics')->insert([
        'subject_code'=>'ETME-105',
        'name'=>'Sheet Metal Work',
        'topic_code'=>'ETME-105-6',
        'overview'=>'',
        'unit'=>4,
    ]);
    DB::table('topics')->insert([
        'subject_code'=>'ETME-105',
        'name'=>'Powder Metallurgy',
        'topic_code'=>'ETME-105-7',
        'overview'=>'',
        'unit'=>4,
    ]);
    DB::table('topics')->insert([
        'subject_code'=>'ETEE-107',
        'name'=>'DC Circuits',
        'topic_code'=>'ETEE-107-1',
        'overview'=>'',
          'unit'=>1
    ]);

    DB::table('topics')->insert([
        'subject_code'=>'ETEE-107',
        'name'=>'A.C.Circuits',
        'topic_code'=>'ETEE-107-2',
        'overview'=>'',
          'unit'=>2
    ]);

    DB::table('topics')->insert([
        'subject_code'=>'ETEE-107',
        'name'=>'Measuring Instruments',
        'topic_code'=>'ETEE-107-3',
        'overview'=>'',
        'unit'=>3
    ]);

    DB::table('topics')->insert([
        'subject_code'=>'ETEE-107',
        'name'=>'Transformer and Rotating Machines',
        'topic_code'=>'ETEE-107-4',
        'overview'=>'',
        'unit'=>4,
    ]);

    DB::table('topics')->insert([
        'subject_code'=>'ETHS-109',
        'name'=>'Introduction to Value Education',
        'topic_code'=>'ETHS-109-1',
        'overview'=>'',
        'unit'=>1,
    ]);

    DB::table('topics')->insert([
        'subject_code'=>'ETHS-109',
        'name'=>'Harmony in the Human Being',
        'topic_code'=>'ETHS-109-2',
        'overview'=>'',
        'unit'=>2,
    ]);

    DB::table('topics')->insert([
        'subject_code'=>'ETHS-109',
        'name'=>'Ethical Human Conduct',
        'topic_code'=>'ETHS-109-3',
        'overview'=>'',
        'unit'=>3,
    ]);

    DB::table('topics')->insert([
        'subject_code'=>'ETHS-109',
        'name'=>'Humanistic Constitution and universal human order',
        'topic_code'=>'ETHS-109-4',
        'overview'=>'',
        'unit'=>3,
    ]);



    DB::table('topics')->insert([
        'subject_code'=>'ETSH-109',
        'name'=>'To identify the scope and characteristics of people',
        'topic_code'=>'ETSH-109-5',
        'overview'=>'',
        'unit'=>3,
    ]);

    DB::table('topics')->insert([
        'subject_code'=>'ETHS-109',
        'name'=>'Profession and Professionalism',
        'topic_code'=>'ETSH-109-6',
        'overview'=>'',
        'unit'=>4,
    ]);


        DB::table('topics')->insert([
            'subject_code'=>'ETSH-109',
            'name'=>'Engineering Profession and Ethics',
            'topic_code'=>'ETSH-109-8',
            'overview'=>'',
            'unit'=>4,
        ]);


            DB::table('topics')->insert([
                'subject_code'=>'ETSH-109',
                'name'=>'Profession and Professionalism',
                'topic_code'=>'ETSH-109-9',
                'overview'=>'',
                'unit'=>4,
            ]);

            DB::table('topics')->insert([
                'subject_code'=>'ETSH-109',
                'name'=>'Professional Responsibilities',
                'topic_code'=>'ETSH-109-9',
                'overview'=>'',
                'unit'=>4,
            ]);


            DB::table('topics')->insert([
                'subject_code'=>'ETCS-111',
                'name'=>'introduction',
                'topic_code'=>'ETCS-111-1',
                'overview'=>'',
                'unit'=>1,
            ]);



            DB::table('topics')->insert([
                'subject_code'=>'ETCS-111',
                'name'=>'Operating Systems',
                'topic_code'=>'ETCS-111-2',
                'overview'=>'',
                'unit'=>2,
            ]);
            DB::table('topics')->insert([
                'subject_code'=>'ETCS-111',
                'name'=>'Basics of programming through flow chart',
                'topic_code'=>'ETCS-111-3',
                'overview'=>'',
                'unit'=>3,
            ]);


            DB::table('topics')->insert([
                'subject_code'=>'ETCS-111',
                'name'=>'Networking Basics',
                'topic_code'=>'ETCS-111-4',
                'overview'=>'',
                'unit'=>3,
            ]);

            DB::table('topics')->insert([
                'subject_code'=>'ETCS-111',
                'name'=>'Overview of Database Management System',
                'topic_code'=>'ETCS-111-5',
                'overview'=>'',
                'unit'=>3,
            ]);

            DB::table('topics')->insert([
                'subject_code'=>'ETCS-111',
                'name'=>'Libre / Open Office Writer',
                'topic_code'=>'ETCS-111-6',
                'overview'=>'',
                'unit'=>4,
            ]);

            DB::table('topics')->insert([
                'subject_code'=>'ETCS-111',
                'name'=>'Libre / Open Office Calc',
                'topic_code'=>'ETCS-111-7',
                'overview'=>'',
                'unit'=>4,
            ]);

            DB::table('topics')->insert([
                'subject_code'=>'ETCS-111',
                'name'=>'Libre / Open Office Impres',
                'topic_code'=>'ETCS-111-8',
                'overview'=>'',
                'unit'=>4,
            ]);

            DB::table('topics')->insert([
                'subject_code'=>'ETCH-113',
                'name'=>'FUELS',
                'topic_code'=>'ETCH-113-1',
                'overview'=>'',
                'unit'=>1,
            ]);

            DB::table('topics')->insert([
                'subject_code'=>'ETCH-113',
                'name'=>'THE PHASE RULE & CATALYSIS',
                'topic_code'=>'ETCH-113-2',
                'overview'=>'',
                'unit'=>2,
            ]);

            DB::table('topics')->insert([
                'subject_code'=>'ETCH-113',
                'name'=>'WATER',
                'topic_code'=>'ETCH-113-3',
                'overview'=>'',
                'unit'=>3,
            ]);

            DB::table('topics')->insert([
                'subject_code'=>'ETCH-113',
                'name'=>'CORROSION & ITS CONTROL',
                'topic_code'=>'ETCH-113-4',
                'overview'=>'',
                'unit'=>4,
            ]);

}

}
