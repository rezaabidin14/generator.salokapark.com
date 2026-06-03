<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Carbon\Carbon;

class ExportMewarnai implements FromView
{
    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function view(): View
    {
        return view('excel.event-mewarnai', [
            'pesertaMewarnai' => $this->data
        ]);
    }

    public function title(): string
    {
        return 'Mewarnai Export';
    }
}
