<?php

// app/Imports/UsersImport.php

namespace App\Imports;

use App\Models\Partner;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class UsersImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            Partner::create([
                'fname' => $row[0],
                'email' => $row[1],
                'phone' => $row[2],
                'location' => $row[3],
                // Add more columns as needed
            ]);
        }
    }
}
