<?php

namespace App\Libraries;

use Illuminate\Support\Collection;

class Documents
{
    public static function documents()
    {
        $data = [
            [
                'name' => 'D.I.P Form-4 ( Free of cost )',
                'filename' => 'dpi_form_4_free_of_cost',
            ],
            [
                'name' => 'VISA EXTENTION',
                'filename' => 'visa_extension',
            ],
            [
                'name' => 'Passport Receiving Slip',
                'filename' => 'passport_receiving_slip',
            ],
            [
                'name' => 'Information Sheet for foreigner student',
                'filename' => 'information_sheet_for_foreigner_student',
            ],
            [
                'name' => 'Admission Letter',
                'filename' => 'admission_letter',
            ],
            [
                'name' => 'For another University\'s student\'s admission',
                'filename' => 'for_another_university_student_admission',
            ],
            [
                'name' => 'Extend Visa',
                'filename' => 'extend_visa',
            ],
            [
                'name' => 'Next Payment',
                'filename' => 'next_payment',
            ],
            [
                'name' => 'Oath',
                'filename' => 'oath',
            ],
            [
                'name' => 'Payment Schedule',
                'filename' => 'payment_schedule',
            ],
        ];

        return collect($data);
    }
}
