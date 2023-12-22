<?php

namespace Database\Seeders;

use App\User;
use App\Permission;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

/**
 * Class RolePermissionSeeder.
 *
 * @see https://spatie.be/docs/laravel-permission/v5/basic-usage/multiple-guards
 *
 * @package App\Database\Seeds
 */
class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /**
         * Enable these options if you need same role and other permission for User Model
         * Else, please follow the below steps for admin guard
         */

        // Create Roles and Permissions
        // $roleSuperAdmin = Role::create(['name' => 'Super Admin']);
        // $roleAdmin = Role::create(['name' => 'Admin']);
        // $roleEditor = Role::create(['name' => 'editor']);
        // $roleUser = Role::create(['name' => 'user']);

        // Permission List as array
        $permissions = [
            [
                'group_name' => 'dashboard',
                'permissions' => [
                    'dashboard.view',
                    // 'student_dashboard',
                    // 'teacher_dashboard',
                    // 'administrator_dashboard',
                ]
            ],
            [
                'group_name' => 'students',
                'permissions' => [
                    'students.view',
                    'students.create',
                    'students.edit',
                    'students.delete',
                ]
            ],
            [
                'group_name' => 'students_id_password',
                'permissions' => [
                    'students_id_password.create',
                    'students_id_password.edit',
                    'students_id_password.delete',
                ]
            ],
            [
                'group_name' => 'students_migration',
                'permissions' => [
                    'students_migration.create',
                    'students_migration.pushback',
                ]
            ],
            [
                'group_name' => 'students_report',
                'permissions' => [
                    'students_report.summary',
                    'students_report.details',
                    'students_report.taught',
                    'students_report.migrated',
                    'students_report.at_a_glance',
                    'students_report.quick_search',
                ]
            ],
            [
                'group_name' => 'teachers',
                'permissions' => [
                    'teachers.view',
                    'teachers.create',
                    'teachers.edit',
                    'teachers.delete',
                    'teachers.status_change',
                    'teachers.assign_subject',
                    'teachers.assign_class',
                    'teachers.assign_shift',
                ]
            ],
            [
                'group_name' => 'staffs',
                'permissions' => [
                    'staffs.view',
                    'staffs.create',
                    'staffs.edit',
                    'staffs.delete',
                ]
            ],
            [
                'group_name' => 'staff_attendance',
                'permissions' => [
                    'staff_attendance.view',
                    'staff_attendance.create',
                ]
            ],
            [
                'group_name' => 'committee',
                'permissions' => [
                    'committee.view',
                    'committee.create',
                    'committee.edit',
                    'committee.delete',
                ]
            ],
            [
                'group_name' => 'student_attendance',
                'permissions' => [
                    'student_attendance.view',
                    'student_attendance.create',
                    'student_attendance.edit',
                    'student_attendance.delete',
                ]
            ],
            [
                'group_name' => 'student_report',
                'permissions' => [
                    'student_attendance_report.view',
                    'student_attendance_status_report.view',
                ]
            ],
            [
                'group_name' => 'exam_attendance',
                'permissions' => [
                    'exam_attendance.view',
                    'exam_attendance.create',
                    'exam_attendance.edit',
                    'exam_attendance.delete',
                ]
            ],
            [
                'group_name' => 'exam_mark',
                'permissions' => [
                    'exam_mark_configuration.view',
                    'exam_mark_configuration.create',
                    'exam_mark_configuration.edit',
                    'exam.routine',
                    'exam_mark.view',
                    'exam_mark.create',
                    'exam_mark.edit',
                    'exam_mark.quiz_view',
                    'exam_mark.quiz_create',
                    'exam_mark.quiz_edit',
                    'exam_mark.quiz_delete',
                ]
            ],
            [
                'group_name' => 'payroll_configuration',
                'permissions' => [
                    'payroll_configuration.salary_head_create',
                    'payroll_configuration.salary_head_view',
                    'payroll_configuration.salary_head_edit',
                    'payroll_configuration.salary_head_delete',
                    'payroll_configuration.mapping_create',
                    'payroll_configuration.mapping_view',
                ]
            ],
            [
                'group_name' => 'payroll',
                'permissions' => [
                    'payroll.assign',
                    'payroll.salary_slip',
                    'payroll.salary_payment',
                    'payroll.salary_advance_payment',
                    'payroll.salary_due_payment',
                    'payroll.salary_return_payment',
                ]
            ],
            [
                'group_name' => 'fees_management_configruation',
                'permissions' => [
                    'fees_management_configruation.startup',
                    'fees_management_configruation.mapping',
                    'fees_management_configruation.amount_config',
                    'fees_management_configruation.date_config',
                    'fees_management_configruation.waiver_config',
                    'fees_management_configruation.account_setting',
                ]
            ],
            [
                'group_name' => 'fees_management',
                'permissions' => [
                    'fees_management.payslip_single',
                    'fees_management.all_fees',
                    'fees_management.payslip_collection',
                    'fees_management.quick_collection',
                    'fees_management.payslip_create',
                ]
            ],
            [
                'group_name' => 'accounting',
                'permissions' => [
                    'accounting.categories',
                    'accounting.groups',
                    'accounting.funds',
                    'accounting.ledgers',
                    'accounting.payment_reciept',
                    'accounting.journal',
                    'accounting.fund_transfer',
                    'accounting.contra'
                ]
            ],
            [
                'group_name' => 'accounting_report',
                'permissions' => [
                    'accounting_report.transaction_report_voucher_wise',
                    'accounting_report.transaction_report_user_wise',
                    'accounting_report.transaction_report_ledger_wise',
                    'accounting_report.transaction_report_fund_wise',
                    'accounting_report.transaction_report_fund_trans_summary',
                    'accounting_report.transaction_report_fund_trans_montly',
                    'accounting_report.core_report_balance_sheet',
                    'accounting_report.core_report_trial_balance',
                    'accounting_report.core_report_income_statement',
                    'accounting_report.core_report_cash_summary',
                    'accounting_report.core_report_cash_flow_statment',
                    'accounting_report.core_report_book_of_account',
                ]
            ],
            [
                'group_name' => 'academic',
                'permissions' => [
                    'academic.student_categories',
                    'academic.periods',
                    'academic.departments',
                    'academic.classes',
                    'academic.shifts',
                    'academic.sections',
                    'academic.subjects',
                    'academic.syllabuses',
                    'academic.assignments',
                    'academic.clubs',
                    'academic.student_result_reports',
                    'academic.routine_management',
                    'academic.routine_management_class_routine',
                    'academic.routine_management_report',
                ]
            ],
            [
                'group_name' => 'library_books',
                'permissions' => [
                    'library_books.create',
                    'library_books.create_bulk',
                    'library_books.edit',
                    'library_books.view',
                    'library_books.delete',
                    'library_books.category.view',
                    'library_books.category.create',
                    'library_books.category.edit',
                    'library_books.category.delete',
                ]
            ],
            [
                'group_name' => 'library_book_issue',
                'permissions' => [
                    'library_book_issue.create',
                    'library_book_issue.edit',
                    'library_book_issue.view',
                    'library_book_issue.delete',
                ]
            ],
            [
                'group_name' => 'layouts_cetificates',
                'permissions' => [
                    'layouts_cetificates.testimonial',
                    'layouts_cetificates.transfer',
                ]
            ],
            [
                'group_name' => 'configurations',
                'permissions' => [
                    'configurations.system_setting',
                    'configurations.academic_session',
                    'configurations.student_group',
                    'configurations.picklist',
                    'configurations.users.view',
                    'configurations.users.create',
                    'configurations.users.edit',
                    'configurations.users.delete',
                    'configurations.roles.view',
                    'configurations.roles.create',
                    'configurations.roles.edit',
                    'configurations.roles.delete',
                    'configurations.languages',
                    'configurations.database_backup',
                ]
            ],
            [
                'group_name' => 'sms_notifications',
                'permissions' => [
                    'sms_notifications.templates.view',
                    'sms_notifications.templates.create',
                    'sms_notifications.templates.edit',
                    'sms_notifications.templates.delete',


                    'sms_notifications.phonebook.view',
                    'sms_notifications.phonebook.create',
                    'sms_notifications.phonebook.edit',
                    'sms_notifications.phonebook.delete',

                    'sms_notifications.phonebook_category.view',
                    'sms_notifications.phonebook_category.create',
                    'sms_notifications.phonebook_category.edit',
                    'sms_notifications.phonebook_category.delete',

                    'sms_notifications.send_sms_person_wise',
                    'sms_notifications.send_sms_institute_wise',
                    'sms_notifications.send_sms_notification_wise',

                    'sms_notifications.purchase_sms_view',
                    'sms_notifications.purchase_sms_create',
                    'sms_notifications.purchase_sms_edit',
                    'sms_notifications.purchase_sms_delete',

                    'sms_notifications.sms_summary',
                    'sms_notifications.sms_send_summary',
                    'sms_notifications.sms_purchases',
                ]
            ],
            [
                'group_name' => 'website_cms',
                'permissions' => [
                    'website_cms.posts.view',
                    'website_cms.posts.create',
                    'website_cms.posts.edit',
                    'website_cms.posts.delete',

                    'website_cms.posts_category.view',
                    'website_cms.posts_category.create',
                    'website_cms.posts_category.edit',
                    'website_cms.posts_category.delete',

                    'website_cms.pages.view',
                    'website_cms.pages.create',
                    'website_cms.pages.edit',
                    'website_cms.pages.delete',

                    'website_cms.pages_category.view',
                    'website_cms.pages_category.create',
                    'website_cms.pages_category.edit',
                    'website_cms.pages_category.delete',

                    'website_cms.sliders.view',
                    'website_cms.sliders.create',
                    'website_cms.sliders.edit',
                    'website_cms.sliders.delete',

                    'website_cms.sliders_category.view',
                    'website_cms.sliders_category.create',
                    'website_cms.sliders_category.edit',
                    'website_cms.sliders_category.delete',

                    'website_cms.menus.view',
                    'website_cms.menus.create',
                    'website_cms.menus.edit',
                    'website_cms.menus.delete',
                    'website_cms.theme_options',

                    'website_cms.medias.view',
                    'website_cms.medias.create',
                    'website_cms.medias.edit',
                    'website_cms.medias.delete',

                    'website_cms.medias_category.view',
                    'website_cms.medias_category.create',
                    'website_cms.medias_category.edit',
                    'website_cms.medias_category.delete',

                    'website_cms.contact_message.view',
                    'website_cms.contact_message.create',
                    'website_cms.contact_message.edit',
                    'website_cms.contact_message.delete',
                ]
            ],
            [
                'group_name' => 'reports',
                'permissions' => [
                    'reports.staff_attendance',
                    'reports.posts.progress_card',
                    'reports.posts.income_report',
                    'reports.posts.expense_report',
                    'reports.posts.financial_account_balance',
                    'reports.posts.user_logs',
                ]
            ],
            [
                'group_name' => 'role',
                'permissions' => [
                    'role.create',
                    'role.edit',
                    'role.delete',
                ]
            ],
            [
                'group_name' => 'profile',
                'permissions' => [
                    'profile.view',
                    'profile.edit',
                ]
            ],
        ];

        $roleSuperAdmin = Role::create(['name' => 'Super Admin']);

        // Create and Assign Permissions
        for ($i = 0; $i < count($permissions); $i++) {
            $permissionGroup = $permissions[$i]['group_name'];
            for ($j = 0; $j < count($permissions[$i]['permissions']); $j++) {
                // Create Permission
                $permission = Permission::create(['name' => $permissions[$i]['permissions'][$j], 'group_name' => $permissionGroup]);
                $roleSuperAdmin->givePermissionTo($permission);
                $permission->assignRole($roleSuperAdmin);
            }
        }

        // Assign super admin role permission to superadmin user
        $user = User::where('name', 'Super Admin')->first();
        if ($user) {
            $user->assignRole('Super Admin');
        }
    }
}
