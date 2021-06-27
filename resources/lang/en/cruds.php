<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'course' => [
        'title'          => 'Course',
        'title_singular' => 'Course',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => ' ',
            'title'                     => 'Title',
            'title_helper'              => ' ',
            'created_at'                => 'Created at',
            'created_at_helper'         => ' ',
            'updated_at'                => 'Updated at',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'Deleted at',
            'deleted_at_helper'         => ' ',
            'session_duration'          => 'Session Duration',
            'session_duration_helper'   => ' ',
            'session_time'              => 'Session Time',
            'session_time_helper'       => ' ',
            'session_start_date'        => 'Session Start Date',
            'session_start_date_helper' => ' ',
        ],
    ],
    'courseManagement' => [
        'title'          => 'Course Management',
        'title_singular' => 'Course Management',
    ],
    'sessionDuration' => [
        'title'          => 'Session Duration',
        'title_singular' => 'Session Duration',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'session_duration'        => 'Session Duration',
            'session_duration_helper' => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => ' ',
        ],
    ],
    'sessionTime' => [
        'title'          => 'Session Time',
        'title_singular' => 'Session Time',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'time'              => 'Time',
            'time_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'sessionStartDate' => [
        'title'          => 'Session Start Date',
        'title_singular' => 'Session Start Date',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'start_date'        => 'Start Date',
            'start_date_helper' => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'evaluation' => [
        'title'          => 'Evaluation',
        'title_singular' => 'Evaluation',
    ],
    'evaluationTest' => [
        'title'          => 'Evaluation Test',
        'title_singular' => 'Evaluation Test',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'limit_mcq'         => 'Limit Mcq',
            'limit_mcq_helper'  => ' ',
        ],
    ],
    'question' => [
        'title'          => 'Question',
        'title_singular' => 'Question',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'question'               => 'Question',
            'question_helper'        => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
            'evaluation_test'        => 'Evaluation Test',
            'evaluation_test_helper' => ' ',
            'marks'                  => 'Marks',
            'marks_helper'           => ' ',
        ],
    ],
    'answer' => [
        'title'          => 'Answer',
        'title_singular' => 'Answer',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'correct'           => 'Correct',
            'correct_helper'    => ' ',
            'question'          => 'Question',
            'question_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'candidate' => [
        'title'          => 'Candidate',
        'title_singular' => 'Candidate',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'name'                  => 'Name',
            'name_helper'           => ' ',
            'mobile'                => 'Mobile',
            'mobile_helper'         => ' ',
            'address'               => 'Address',
            'address_helper'        => ' ',
            'user_account'          => 'User Account',
            'user_account_helper'   => ' ',
            'gender'                => 'Gender',
            'gender_helper'         => ' ',
            'dob'                   => 'Date of Birth',
            'dob_helper'            => ' ',
            'cnic'                  => 'Cnic',
            'cnic_helper'           => ' ',
            'first_language'        => 'First Language',
            'first_language_helper' => ' ',
            'profession'            => 'Profession',
            'profession_helper'     => ' ',
            'city'                  => 'City',
            'city_helper'           => ' ',
            'country'               => 'Country',
            'country_helper'        => ' ',
            'nationality'           => 'Nationality',
            'nationality_helper'    => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
        ],
    ],
    'query' => [
        'title'          => 'Query',
        'title_singular' => 'Query',
    ],
    'invoice' => [
        'title'          => 'Invoices',
        'title_singular' => 'Invoice',
    ],
    'bill' => [
        'title'          => 'Bill',
        'title_singular' => 'Bill',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'candidate'         => 'Candidate',
            'candidate_helper'  => ' ',
            'amount'            => 'Amount',
            'amount_helper'     => ' ',
            'due_date'          => 'Due Date',
            'due_date_helper'   => ' ',
            'status'            => 'Status',
            'status_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'paid_on'           => 'Paid On',
            'paid_on_helper'    => ' ',
        ],
    ],
    'listening' => [
        'title'          => 'Listening',
        'title_singular' => 'Listening',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'question'               => 'Question',
            'question_helper'        => ' ',
            'audio'                  => 'Audio',
            'audio_helper'           => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
            'marks'                  => 'Marks',
            'marks_helper'           => ' ',
            'evaluation_test'        => 'Evaluation Test',
            'evaluation_test_helper' => ' ',
        ],
    ],
    'speaking' => [
        'title'          => 'Speaking',
        'title_singular' => 'Speaking',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'speaking_question'        => 'Speaking Question',
            'speaking_question_helper' => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
            'marks'                    => 'Marks',
            'marks_helper'             => ' ',
            'evaluation_test'          => 'Evaluation Test',
            'evaluation_test_helper'   => ' ',
        ],
    ],
];
