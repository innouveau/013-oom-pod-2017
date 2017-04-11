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
                    'size' => 8
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
                'field_6' => [
                    'type' => 'input',
                    'name' => 'meeting_lat',
                    'placeholder' => 'Google Maps Lat.',
                    'size' => 20
                ],
                'field_7' => [
                    'type' => 'input',
                    'name' => 'meeting_lng',
                    'placeholder' => 'Google Maps Lng.',
                    'size' => 20
                ],
                'field_8' => [
                    'type' => 'input',
                    'name' => 'meeting_form_link',
                    'placeholder' => 'Link naar het formulier',
                    'size' => 70
                ],
                'field_9' => [
                    'type' => 'input',
                    'name' => 'program_intro',
                    'placeholder' => 'Tekst bij het pogrammma',
                    'size' => 70
                ],
                'field_10' => [
                    'type' => 'input',
                    'name' => 'workshop_quote',
                    'placeholder' => 'Quote bij de workshops',
                    'size' => 70
                ],
                'field_11' => [
                    'type' => 'textarea',
                    'name' => 'workshop_intro',
                    'placeholder' => 'Introtekst bij de workshops',
                    'size' => 10
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
                'P9' => [
                    'fields' => [
                        'field_1' => [
                            'type' => 'input',
                            'name' => 'program_9_time',
                            'placeholder' => 'Tijd',
                            'size' => 3
                        ],
                        'field_2' => [
                            'type' => 'input',
                            'name' => 'program_9_name',
                            'placeholder' => 'Titel',
                            'size' => 20
                        ],
                        'field_3' => [
                            'type' => 'textarea',
                            'name' => 'program_9_description',
                            'placeholder' => 'Beschrijving',
                            'size' => 5,
                        ],
                    ],
                ],
                'P10' => [
                    'fields' => [
                        'field_1' => [
                            'type' => 'input',
                            'name' => 'program_10_time',
                            'placeholder' => 'Tijd',
                            'size' => 3
                        ],
                        'field_2' => [
                            'type' => 'input',
                            'name' => 'program_10_name',
                            'placeholder' => 'Titel',
                            'size' => 20
                        ],
                        'field_3' => [
                            'type' => 'textarea',
                            'name' => 'program_10_description',
                            'placeholder' => 'Beschrijving',
                            'size' => 5,
                        ],
                    ],
                ],
                'P11' => [
                    'fields' => [
                        'field_1' => [
                            'type' => 'input',
                            'name' => 'program_11_time',
                            'placeholder' => 'Tijd',
                            'size' => 3
                        ],
                        'field_2' => [
                            'type' => 'input',
                            'name' => 'program_11_name',
                            'placeholder' => 'Titel',
                            'size' => 20
                        ],
                        'field_3' => [
                            'type' => 'textarea',
                            'name' => 'program_11_description',
                            'placeholder' => 'Beschrijving',
                            'size' => 5,
                        ],
                    ],
                ],
                'P12' => [
                    'fields' => [
                        'field_1' => [
                            'type' => 'input',
                            'name' => 'program_12_time',
                            'placeholder' => 'Tijd',
                            'size' => 3
                        ],
                        'field_2' => [
                            'type' => 'input',
                            'name' => 'program_12_name',
                            'placeholder' => 'Titel',
                            'size' => 20
                        ],
                        'field_3' => [
                            'type' => 'textarea',
                            'name' => 'program_12_description',
                            'placeholder' => 'Beschrijving',
                            'size' => 5,
                        ],
                    ],
                ]
            ],
        ],

        'group_3' => [
                'title' => 'Workshops',
                'programs' => [
                    'W1' => [
                        'fields' => [
                            'field_1' => [
                                'type' => 'input',
                                'name' => 'workshop_1_time',
                                'placeholder' => 'Code',
                                'size' => 3
                            ],
                            'field_2' => [
                                'type' => 'input',
                                'name' => 'workshop_1_name',
                                'placeholder' => 'Titel',
                                'size' => 20
                            ],
                            'field_3' => [
                                'type' => 'textarea',
                                'name' => 'workshop_1_description',
                                'placeholder' => 'Beschrijving',
                                'size' => 5,
                            ],
                        ],
                    ],
                    'W2' => [
                        'fields' => [
                            'field_1' => [
                                'type' => 'input',
                                'name' => 'workshop_2_time',
                                'placeholder' => 'Code',
                                'size' => 3
                            ],
                            'field_2' => [
                                'type' => 'input',
                                'name' => 'workshop_2_name',
                                'placeholder' => 'Titel',
                                'size' => 20
                            ],
                            'field_3' => [
                                'type' => 'textarea',
                                'name' => 'workshop_2_description',
                                'placeholder' => 'Beschrijving',
                                'size' => 5,
                            ],
                        ],
                    ],
                    'W3' => [
                        'fields' => [
                            'field_1' => [
                                'type' => 'input',
                                'name' => 'workshop_3_time',
                                'placeholder' => 'Code',
                                'size' => 3
                            ],
                            'field_2' => [
                                'type' => 'input',
                                'name' => 'workshop_3_name',
                                'placeholder' => 'Titel',
                                'size' => 20
                            ],
                            'field_3' => [
                                'type' => 'textarea',
                                'name' => 'workshop_3_description',
                                'placeholder' => 'Beschrijving',
                                'size' => 5,
                            ],
                        ],
                    ],
                    'W4' => [
                        'fields' => [
                            'field_1' => [
                                'type' => 'input',
                                'name' => 'workshop_4_time',
                                'placeholder' => 'Code',
                                'size' => 3
                            ],
                            'field_2' => [
                                'type' => 'input',
                                'name' => 'workshop_4_name',
                                'placeholder' => 'Titel',
                                'size' => 20
                            ],
                            'field_3' => [
                                'type' => 'textarea',
                                'name' => 'workshop_4_description',
                                'placeholder' => 'Beschrijving',
                                'size' => 5,
                            ],
                        ],
                    ],
                    'W5' => [
                        'fields' => [
                            'field_1' => [
                                'type' => 'input',
                                'name' => 'workshop_5_time',
                                'placeholder' => 'Code',
                                'size' => 3
                            ],
                            'field_2' => [
                                'type' => 'input',
                                'name' => 'workshop_5_name',
                                'placeholder' => 'Titel',
                                'size' => 20
                            ],
                            'field_3' => [
                                'type' => 'textarea',
                                'name' => 'workshop_5_description',
                                'placeholder' => 'Beschrijving',
                                'size' => 5,
                            ],
                        ],
                    ],
                    'W6' => [
                        'fields' => [
                            'field_1' => [
                                'type' => 'input',
                                'name' => 'workshop_6_time',
                                'placeholder' => 'Code',
                                'size' => 3
                            ],
                            'field_2' => [
                                'type' => 'input',
                                'name' => 'workshop_6_name',
                                'placeholder' => 'Titel',
                                'size' => 20
                            ],
                            'field_3' => [
                                'type' => 'textarea',
                                'name' => 'workshop_6_description',
                                'placeholder' => 'Beschrijving',
                                'size' => 5,
                            ],
                        ],
                    ],
                    'W7' => [
                        'fields' => [
                            'field_1' => [
                                'type' => 'input',
                                'name' => 'workshop_7_time',
                                'placeholder' => 'Code',
                                'size' => 3
                            ],
                            'field_2' => [
                                'type' => 'input',
                                'name' => 'workshop_7_name',
                                'placeholder' => 'Titel',
                                'size' => 20
                            ],
                            'field_3' => [
                                'type' => 'textarea',
                                'name' => 'workshop_7_description',
                                'placeholder' => 'Beschrijving',
                                'size' => 5,
                            ],
                        ],
                    ],
                    'W8' => [
                        'fields' => [
                            'field_1' => [
                                'type' => 'input',
                                'name' => 'workshop_8_time',
                                'placeholder' => 'Code',
                                'size' => 3
                            ],
                            'field_2' => [
                                'type' => 'input',
                                'name' => 'workshop_8_name',
                                'placeholder' => 'Titel',
                                'size' => 20
                            ],
                            'field_3' => [
                                'type' => 'textarea',
                                'name' => 'workshop_8_description',
                                'placeholder' => 'Beschrijving',
                                'size' => 5,
                            ],
                        ],
                    ],
                    'W9' => [
                        'fields' => [
                            'field_1' => [
                                'type' => 'input',
                                'name' => 'workshop_9_time',
                                'placeholder' => 'Code',
                                'size' => 3
                            ],
                            'field_2' => [
                                'type' => 'input',
                                'name' => 'workshop_9_name',
                                'placeholder' => 'Titel',
                                'size' => 20
                            ],
                            'field_3' => [
                                'type' => 'textarea',
                                'name' => 'workshop_9_description',
                                'placeholder' => 'Beschrijving',
                                'size' => 5,
                            ],
                        ],
                    ],
                    'W10' => [
                        'fields' => [
                            'field_1' => [
                                'type' => 'input',
                                'name' => 'workshop_10_time',
                                'placeholder' => 'Code',
                                'size' => 3
                            ],
                            'field_2' => [
                                'type' => 'input',
                                'name' => 'workshop_10_name',
                                'placeholder' => 'Titel',
                                'size' => 20
                            ],
                            'field_3' => [
                                'type' => 'textarea',
                                'name' => 'workshop_10_description',
                                'placeholder' => 'Beschrijving',
                                'size' => 5,
                            ],
                        ],
                    ],
                    'W11' => [
                        'fields' => [
                            'field_1' => [
                                'type' => 'input',
                                'name' => 'workshop_11_time',
                                'placeholder' => 'Code',
                                'size' => 3
                            ],
                            'field_2' => [
                                'type' => 'input',
                                'name' => 'workshop_11_name',
                                'placeholder' => 'Titel',
                                'size' => 20
                            ],
                            'field_3' => [
                                'type' => 'textarea',
                                'name' => 'workshop_11_description',
                                'placeholder' => 'Beschrijving',
                                'size' => 5,
                            ],
                        ],
                    ],
                    'W12' => [
                        'fields' => [
                            'field_1' => [
                                'type' => 'input',
                                'name' => 'workshop_12_time',
                                'placeholder' => 'Code',
                                'size' => 3
                            ],
                            'field_2' => [
                                'type' => 'input',
                                'name' => 'workshop_12_name',
                                'placeholder' => 'Titel',
                                'size' => 20
                            ],
                            'field_3' => [
                                'type' => 'textarea',
                                'name' => 'workshop_12_description',
                                'placeholder' => 'Beschrijving',
                                'size' => 5,
                            ],
                        ],
                    ]
                ],
            ],
    ];
}