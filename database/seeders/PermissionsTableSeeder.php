<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'course_create',
            ],
            [
                'id'    => 18,
                'title' => 'course_edit',
            ],
            [
                'id'    => 19,
                'title' => 'course_show',
            ],
            [
                'id'    => 20,
                'title' => 'course_delete',
            ],
            [
                'id'    => 21,
                'title' => 'course_access',
            ],
            [
                'id'    => 22,
                'title' => 'course_management_access',
            ],
            [
                'id'    => 23,
                'title' => 'session_duration_create',
            ],
            [
                'id'    => 24,
                'title' => 'session_duration_edit',
            ],
            [
                'id'    => 25,
                'title' => 'session_duration_show',
            ],
            [
                'id'    => 26,
                'title' => 'session_duration_delete',
            ],
            [
                'id'    => 27,
                'title' => 'session_duration_access',
            ],
            [
                'id'    => 28,
                'title' => 'session_time_create',
            ],
            [
                'id'    => 29,
                'title' => 'session_time_edit',
            ],
            [
                'id'    => 30,
                'title' => 'session_time_show',
            ],
            [
                'id'    => 31,
                'title' => 'session_time_delete',
            ],
            [
                'id'    => 32,
                'title' => 'session_time_access',
            ],
            [
                'id'    => 33,
                'title' => 'session_start_date_create',
            ],
            [
                'id'    => 34,
                'title' => 'session_start_date_edit',
            ],
            [
                'id'    => 35,
                'title' => 'session_start_date_show',
            ],
            [
                'id'    => 36,
                'title' => 'session_start_date_delete',
            ],
            [
                'id'    => 37,
                'title' => 'session_start_date_access',
            ],
            [
                'id'    => 38,
                'title' => 'evaluation_access',
            ],
            [
                'id'    => 39,
                'title' => 'evaluation_test_create',
            ],
            [
                'id'    => 40,
                'title' => 'evaluation_test_edit',
            ],
            [
                'id'    => 41,
                'title' => 'evaluation_test_show',
            ],
            [
                'id'    => 42,
                'title' => 'evaluation_test_delete',
            ],
            [
                'id'    => 43,
                'title' => 'evaluation_test_access',
            ],
            [
                'id'    => 44,
                'title' => 'question_create',
            ],
            [
                'id'    => 45,
                'title' => 'question_edit',
            ],
            [
                'id'    => 46,
                'title' => 'question_show',
            ],
            [
                'id'    => 47,
                'title' => 'question_delete',
            ],
            [
                'id'    => 48,
                'title' => 'question_access',
            ],
            [
                'id'    => 49,
                'title' => 'answer_create',
            ],
            [
                'id'    => 50,
                'title' => 'answer_edit',
            ],
            [
                'id'    => 51,
                'title' => 'answer_show',
            ],
            [
                'id'    => 52,
                'title' => 'answer_delete',
            ],
            [
                'id'    => 53,
                'title' => 'answer_access',
            ],
            [
                'id'    => 54,
                'title' => 'candidate_create',
            ],
            [
                'id'    => 55,
                'title' => 'candidate_edit',
            ],
            [
                'id'    => 56,
                'title' => 'candidate_show',
            ],
            [
                'id'    => 57,
                'title' => 'candidate_delete',
            ],
            [
                'id'    => 58,
                'title' => 'candidate_access',
            ],
            [
                'id'    => 59,
                'title' => 'query_access',
            ],
            [
                'id'    => 60,
                'title' => 'invoice_access',
            ],
            [
                'id'    => 61,
                'title' => 'bill_create',
            ],
            [
                'id'    => 62,
                'title' => 'bill_edit',
            ],
            [
                'id'    => 63,
                'title' => 'bill_show',
            ],
            [
                'id'    => 64,
                'title' => 'bill_delete',
            ],
            [
                'id'    => 65,
                'title' => 'bill_access',
            ],
            [
                'id'    => 66,
                'title' => 'listening_create',
            ],
            [
                'id'    => 67,
                'title' => 'listening_edit',
            ],
            [
                'id'    => 68,
                'title' => 'listening_show',
            ],
            [
                'id'    => 69,
                'title' => 'listening_delete',
            ],
            [
                'id'    => 70,
                'title' => 'listening_access',
            ],
            [
                'id'    => 71,
                'title' => 'speaking_create',
            ],
            [
                'id'    => 72,
                'title' => 'speaking_edit',
            ],
            [
                'id'    => 73,
                'title' => 'speaking_show',
            ],
            [
                'id'    => 74,
                'title' => 'speaking_delete',
            ],
            [
                'id'    => 75,
                'title' => 'speaking_access',
            ],
            [
                'id'    => 76,
                'title' => 'setting_create',
            ],
            [
                'id'    => 77,
                'title' => 'setting_edit',
            ],
            [
                'id'    => 78,
                'title' => 'setting_show',
            ],
            [
                'id'    => 79,
                'title' => 'setting_delete',
            ],
            [
                'id'    => 80,
                'title' => 'setting_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
