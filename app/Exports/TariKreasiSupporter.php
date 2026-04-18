<?php
namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Carbon\Carbon;

class TariKreasiSupporter implements FromView
{
    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function view(): View
    {
        return view('excel.tari-kreasi-supporter', [
            'tariKreasiSupporter' => $this->data
        ]);
    }

    public function title(): string
    {
        return 'Tari Kreasi Export';
    }
}
