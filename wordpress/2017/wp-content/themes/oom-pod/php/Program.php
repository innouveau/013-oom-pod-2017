<?php
/**
 * Created by PhpStorm.
 * User: Arjen
 * Date: 10/04/2017
 * Time: 17:39
 */

class Program
{
    public static $data = [
        'group_1' => [
            'title' => 'Algemeen',
            'fields' => [
                'field_1' => [
                    'type' => 'input',
                    'name' => 'meeting_date',
                    'placeholder' => 'Datum',
                    'size' => 20
                ],
                'field_2' => [
                    'type' => 'input',
                    'name' => 'meeting_location',
                    'placeholder' => 'Locatie',
                    'size' => 20
                ],
                'field_3' => [
                    'type' => 'input',
                    'name' => 'meeting_city',
                    'placeholder' => 'Plaatsnaam',
                    'size' => 20
                ],
                'field_4' => [
                    'type' => 'input',
                    'name' => 'meeting_address',
                    'placeholder' => 'Straat + huisnummer',
                    'size' => 20
                ],
                'field_5' => [
                    'type' => 'input',
                    'name' => 'meeting_zipcode',
                    'placeholder' => 'Postcode',
                    'size' => 8
                ],
            ],
        ],


        'group_2' => [
            'title' => 'Programma',
            'programs' => [
                'P1' => [
                    'fields' => [
                        'field_1' => [
                            'type' => 'input',
                            'name' => 'program_1_time',
                            'placeholder' => 'Tijd',
                            'size' => 3
                        ],
                        'field_2' => [
                            'type' => 'input',
                            'name' => 'program_1_name',
                            'placeholder' => 'Titel',
                            'size' => 20
                        ],
                        'field_3' => [
                            'type' => 'textarea',
                            'name' => 'program_1_description',
                            'placeholder' => 'Beschrijving',
                            'size' => 5,
                        ],
                    ],
                ],
                'P2' => [
                    'fields' => [
                        'field_1' => [
                            'type' => 'input',
                            'name' => 'program_2_time',
                            'placeholder' => 'Tijd',
                            'size' => 3
                        ],
                        'field_2' => [
                            'type' => 'input',
                            'name' => 'program_2_name',
                            'placeholder' => 'Titel',
                            'size' => 20
                        ],
                        'field_3' => [
                            'type' => 'textarea',
                            'name' => 'program_2_description',
                            'placeholder' => 'Beschrijving',
                            'size' => 5,
                        ],
                    ],
                ],
                'P3' => [
                    'fields' => [
                        'field_1' => [
                            'type' => 'input',
                            'name' => 'program_3_time',
                            'placeholder' => 'Tijd',
                            'size' => 3
                        ],
                        'field_2' => [
                            'type' => 'input',
                            'name' => 'program_3_name',
                            'placeholder' => 'Titel',
                            'size' => 20
                        ],
                        'field_3' => [
                            'type' => 'textarea',
                            'name' => 'program_3_description',
                            'placeholder' => 'Beschrijving',
                            'size' => 5,
                        ],
                    ],
                ],
                'P4' => [
                    'fields' => [
                        'field_1' => [
                            'type' => 'input',
                            'name' => 'program_4_time',
                            'placeholder' => 'Tijd',
                            'size' => 3
                        ],
                        'field_2' => [
                            'type' => 'input',
                            'name' => 'program_4_name',
                            'placeholder' => 'Titel',
                            'size' => 20
                        ],
                        'field_3' => [
                            'type' => 'textarea',
                            'name' => 'program_4_description',
                            'placeholder' => 'Beschrijving',
                            'size' => 5,
                        ],
                    ],
                ],
                'P5' => [
                    'fields' => [
                        'field_1' => [
                            'type' => 'input',
                            'name' => 'program_5_time',
                            'placeholder' => 'Tijd',
                            'size' => 3
                        ],
                        'field_2' => [
                            'type' => 'input',
                            'name' => 'program_5_name',
                            'placeholder' => 'Titel',
                            'size' => 20
                        ],
                        'field_3' => [
                            'type' => 'textarea',
                            'name' => 'program_5_description',
                            'placeholder' => 'Beschrijving',
                            'size' => 5,
                        ],
                    ],
                ],
                'P6' => [
                    'fields' => [
                        'field_1' => [
                            'type' => 'input',
                            'name' => 'program_6_time',
                            'placeholder' => 'Tijd',
                            'size' => 3
                        ],
                        'field_2' => [
                            'type' => 'input',
                            'name' => 'program_6_name',
                            'placeholder' => 'Titel',
                            'size' => 20
                        ],
                        'field_3' => [
                            'type' => 'textarea',
                            'name' => 'program_6_description',
                            'placeholder' => 'Beschrijving',
                            'size' => 5,
                        ],
                    ],
                ],
                'P7' => [
                    'fields' => [
                        'field_1' => [
                            'type' => 'input',
                            'name' => 'program_7_time',
                            'placeholder' => 'Tijd',
                            'size' => 3
                        ],
                        'field_2' => [
                            'type' => 'input',
                            'name' => 'program_7_name',
                            'placeholder' => 'Titel',
                            'size' => 20
                        ],
                        'field_3' => [
                            'type' => 'textarea',
                            'name' => 'program_7_description',
                            'placeholder' => 'Beschrijving',
                            'size' => 5,
                        ],
                    ],
                ],
                'P8' => [
                    'fields' => [
                        'field_1' => [
                            'type' => 'input',
                            'name' => 'program_8_time',
                            'placeholder' => 'Tijd',
                            'size' => 3
                        ],
                        'field_2' => [
                            'type' => 'input',
                            'name' => 'program_8_name',
                            'placeholder' => 'Titel',
                            'size' => 20
                        ],
                        'field_3' => [
                            'type' => 'textarea',
                            'name' => 'program_8_description',
                            'placeholder' => 'Beschrijving',
                            'size' => 5,
                        ],
                    ],
                ],
            ],
        ],
    ];
}