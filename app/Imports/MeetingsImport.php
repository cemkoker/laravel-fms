<?php

namespace App\Imports;

use App\Models\Meeting;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class MeetingsImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)

    {

        if ($row['interpsrs'] == "") $row['interpsrs'] = 'none';
        if ($row['resources'] == "") $row['resources'] = 'none';
        if ($row['client'] == "") $row['client'] = 'none';

        $from = intval($row['from']);
        $to = intval($row['to']);
        $row['from'] = Date::excelToDateTimeObject($from)->format('Y-m-d');
        $row['to'] = Date::excelToDateTimeObject($to)->format('Y-m-d');

        $start = ($row['start']);
        $end = ($row['end']);
        $row['start'] = Date::excelToDateTimeObject($start)->format('Y-m-d H:i:s');
        $row['end'] = Date::excelToDateTimeObject($end)->format('Y-m-d H:i:s');

       
        return new Meeting([
            'reference' => $row['meeting_id'],
            'client' => $row['client'],
            'subclient' => $row['sub_client'],
            'title' => $row['meeting'],
            'room' => $row['room'],
            'start_date' => $row['from'],
            'end_date' => $row['to'],
            'privacy' => $row['public'],
            'start_time' => $row['start'],
            'end_time' => $row['end'],
            'interpretation' => $row['interpsrs'],
            'resources' => $row['resources'],
            'status' => $row['stat'],
        ]);
    }

    public function headingRow(): int
    {
        return 2;
    }
}
