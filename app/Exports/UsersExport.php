<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements WithHeadings, FromCollection
{
    public function headings(): array
    {
        return [
            'ID',
            'Fullname',
            'Email',
            'Phone',
        ];
    }

    public function collection()
    {
        return User::get(['id', 'name', 'email', 'phone']);
    }

}
