<?php

namespace App\Http\Controllers;

use App\Imports\MeetingsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ImportMeetings extends Controller
{
    public function import()
    {
        Excel::import(new MeetingsImport, 'DailyProgramme.xlsx');

        return redirect('/')->with('success', 'All good!');
    }
}
