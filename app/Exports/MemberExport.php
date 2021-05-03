<?php

namespace App\Exports;

use App\Models\Member;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MemberExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return[
            'ID',
            'First Name',
            'Last Name',
            'Email',
            'Phone Number',
            'Role',
            'Created Date',
            'Updated Date'
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
       // return Member::all();
       return collect(Member::getMember());
    }
}
