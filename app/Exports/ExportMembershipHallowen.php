<?php
namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Carbon\Carbon;

class ExportMembershipHallowen implements FromView
{
    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function view(): View
    {
        return view('excel.membership-hallowen', [
            'membershipHallowen' => $this->data
        ]);
    }

    public function title(): string
    {
        return 'Membership Hallowen Export';
    }
}
