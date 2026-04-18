<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ExportJathilan;
use App\Exports\ExportMewarnai;
use App\Exports\ExportMembershipHallowen;
use App\Exports\TariKreasiSupporter;
use App\Exports\TariKreasi;

use Maatwebsite\Excel\Facades\Excel;

class GenerateExcelController extends Controller
{
    //export excel evebt jathilan
    public function exportExcelEventJathilan(Request $request)
    {
        return Excel::download(
            new ExportJathilan($request->input('data', [])),
            'jathilan-'.$request->year.'.xlsx'
        );
    }

    public function exportExcelEventMewarnai(Request $request)
    {
        return Excel::download(
            new ExportMewarnai($request->input('data', [])),
            'mewarnai-'.$request->year.'.xlsx'
        );
    }

    public function exportExcelEventMembershipHallowen(Request $request)
    {
        return Excel::download(
            new ExportMembershipHallowen($request->input('data', [])),
            'membership-hallowen-'.$request->date_start.'-'.$request->date_end.'.xlsx'
        );
    }

    public function exportExcelTariKreasiSupporter(Request $request)
    {
        return Excel::download(
            new TariKreasiSupporter($request->input('data', [])),
            'tari-kreasi-supporter-"'.$request->date_start.'-'.$request->date_end.'.xlsx'
        );
    }

    public function exportExcelTariKreasi(Request $request)
    {
        return Excel::download(
            new TariKreasi($request->input('data', [])),
            'export-tari-kreasi-.xlsx'
        );
    }



}


