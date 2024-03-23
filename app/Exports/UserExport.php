<?php

namespace App\Exports;

use App\Models\Partner;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    // public function collection()
    // {
    //     // $user = Partner::select('fname','email','phone','location')->get();
    //     // return $user;

    //     return Partner::all();
    // }
    public function collection()
    {
        return User::all();
    }

    public function headings(): array
    {
        return ['fname', 'email', 'phone', 'location'];
    }

}