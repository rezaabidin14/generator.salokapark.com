<style>
    table {
        border-collapse: collapse;
        width: 100%;
        font-family: Arial, sans-serif;
        font-size: 12px;
    }

    th, td {
        border: 1px solid #dddddd;
        padding: 8px;
        text-align: left;
        vertical-align: top;
    }

    thead {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    .no-detail {
        color: #999;
        font-style: italic;
    }
</style>

<table border="1" style="border-collapse: collapse; width: 100%;">
    <thead>
        <tr>
            @php
            $headers = [
                'No',
                'Tahun',
                'Tipe Pemesanan',
                'ID Pesanan',
                'Kode Booking',
                'Tanggal Kedatangan',
                'Nama Peserta',
                'Sekolah',
                'Pendamping',
                'Kelas',
                'Telepon',
                'Email',
                'Kabupaten/Kota',
                'Kecamatan',
                'Nama Tiket',
                'Jumlah',
                'Subtotal',
                'Total Tagihan',
                'Status Pembayaran'
            ];

            @endphp
            @foreach ($headers as $header)
                <th style="text-align: center; vertical-align: middle;">{{ $header }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($pesertaMewarnai as $index => $reservation)
            @php
                $customer = $reservation['customer'] ?? [];
                $participants = json_decode($customer['participants'] ?? '[]', true);

                $participantNames = collect($participants)
                    ->pluck('name')
                    ->filter(fn($name) => !is_null($name) && trim($name) !== '')
                    ->implode(', ');

                $participantClasses = collect($participants)
                    ->pluck('typeClass')
                    ->filter(fn($typeClass) => !is_null($typeClass) && trim($typeClass) !== '')
                    ->implode(', ');

                $participantSchools = collect($participants)
                    ->pluck('school')
                    ->filter(fn($school) => !is_null($school) && trim($school) !== '')
                    ->implode(', ');

                $customerName = trim($customer['name'] ?? '') !== '-' && !empty(trim($customer['name'] ?? ''))
                    ? $customer['name']
                    : $participantNames;
                
                $customerClass = trim($customer['class'] ?? '') !== '-' && !empty(trim($customer['class'] ?? ''))
                    ? $customer['class']
                    : $participantClasses;
                    
                $customerSchool = trim($customer['school'] ?? '') !== '-' && !empty(trim($customer['school'] ?? ''))
                    ? $customer['school']
                    : $participantSchools;

                $tickets = $reservation['reservation_ticket'] ?? [];
                $ticketCount = count($tickets);
            @endphp

            @foreach ($tickets as $tIndex => $ticket)
                <tr>
                    @if ($tIndex === 0)
                        <td rowspan="{{ $ticketCount }}" style="text-align: center; vertical-align: middle;">{{ $index + 1 }}</td>
                        <td rowspan="{{ $ticketCount }}" style="text-align: center; vertical-align: middle;">{{ $reservation['year'] ?? '-' }}</td>
                        <td rowspan="{{ $ticketCount }}" style="text-align: center; vertical-align: middle;">{{ $reservation['type'] ?? '-' }}</td>
                        <td rowspan="{{ $ticketCount }}" style="text-align: center; vertical-align: middle;">{{ $reservation['order_id'] ?? '-' }}</td>
                        <td rowspan="{{ $ticketCount }}" style="text-align: center; vertical-align: middle;">{{ $reservation['booking_code'] ?? '-' }}</td>
                        <td rowspan="{{ $ticketCount }}" style="text-align: center; vertical-align: middle;">{{ $reservation['arrival_date'] ?? '-' }}</td>
                        <td rowspan="{{ $ticketCount }}" style="text-align: center; vertical-align: middle;">{{ $customerName }}</td>
                        <td rowspan="{{ $ticketCount }}" style="text-align: center; vertical-align: middle;">{{ $customerSchool ?? '-' }}</td>
                        <td rowspan="{{ $ticketCount }}" style="text-align: center; vertical-align: middle;">{{ $customer['companion'] ?? '-' }}</td>
                        <td rowspan="{{ $ticketCount }}" style="text-align: center; vertical-align: middle;">{{ $customerClass }}</td>
                        <td rowspan="{{ $ticketCount }}" style="text-align: center; vertical-align: middle;">{{ $customer['phone'] ?? '-' }}</td>
                        <td rowspan="{{ $ticketCount }}" style="text-align: center; vertical-align: middle;">{{ $customer['email'] ?? '-' }}</td>
                        <td rowspan="{{ $ticketCount }}" style="text-align: center; vertical-align: middle;">{{ $customer['regencie_name'] ?? '-' }}</td>
                        <td rowspan="{{ $ticketCount }}" style="text-align: center; vertical-align: middle;">{{ $customer['district_name'] ?? '-' }}</td>
                    @endif

                    <td style="text-align: center; vertical-align: middle;">{{ $ticket['ticket']['name'] ?? '-' }}</td>
                    <td style="text-align: center; vertical-align: middle;">{{ $ticket['qty'] ?? 0 }}</td>
                    <td style="text-align: center; vertical-align: middle;">{{ number_format($ticket['subtotal'] ?? 0, 0, ',', '.') }}</td>

                    @if ($tIndex === 0)
                        <td rowspan="{{ $ticketCount }}" style="text-align: center; vertical-align: middle;">{{ number_format($reservation['bill'] ?? 0, 0, ',', '.') }}</td>
                        <td rowspan="{{ $ticketCount }}" style="text-align: center; vertical-align: middle;">{{ $reservation['status'] ?? '-' }}</td>
                    @endif
                </tr>
            @endforeach
        @endforeach
    </tbody>
</table>




