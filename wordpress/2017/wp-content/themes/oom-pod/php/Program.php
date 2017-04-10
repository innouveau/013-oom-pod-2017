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
            'title' => 'algemeen',
            'fields' => [
                'field_1' => [
                    'type' => 'input',
                    'name' => 'name',
                    'date' => 'date'
                ],
                'field_2' => [
                    'type' => 'input',
                    'name' => 'tijd',
                    'date' => 'date'
                ],
                'field_3' => [
                    'type' => 'input',
                    'name' => 'afloop',
                    'date' => 'date'
                ],
            ],
        ],
        'group_2' => [
            'title' => 'Workshops',
            'programs' => [
                'program_1' => [
                    'fields' => [
                        'field_1' => [
                            'type' => 'input',
                            'name' => 'name_program_1',
                            'date' => 'date'
                        ],
                        'field_2' => [
                            'type' => 'input',
                            'name' => 'time_program_1',
                            'date' => 'date'
                        ],
                        'field_3' => [
                            'type' => 'input',
                            'name' => 'afloop_program_1',
                            'date' => 'date'
                        ],
                    ],
                ],
                'program_2' => [
                    'fields' => [
                        'field_1' => [
                            'type' => 'input',
                            'name' => 'name_program_2',
                            'date' => 'date'
                        ],
                        'field_2' => [
                            'type' => 'input',
                            'name' => 'tijd_program_2',
                            'date' => 'date'
                        ],
                        'field_3' => [
                            'type' => 'input',
                            'name' => 'afloop_program_2',
                            'date' => 'date'
                        ],
                    ],
                ],
            ],
        ],
    ];
}