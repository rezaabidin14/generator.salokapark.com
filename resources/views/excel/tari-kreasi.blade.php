<style>
    table {
        border-collapse: collapse;
        width: 100%;
        font-family: Arial, sans-serif;
        font-size: 12px;
    }

    th, td {
        border: 1px solid #dddddd;
        padding: 6px;
        vertical-align: top;
    }

    th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    th.center, td.center {
        text-align: center;
    }

    th.right, td.right {
        text-align: right;
    }

    .no-detail {
        color: #999;
        font-style: italic;
    }

    img.letter {
        width: 100px;
        height: auto;
        border-radius: 4px;
        border: 1px solid #ccc;
    }
</style>

<table>
    <thead>
        <tr>
            <th class="center">No</th>
            <th>Kode Booking</th>
            <th>ID Order</th>
            <th>Nama Grup</th>
            <th>Nama Sekolah</th>
            <th class="center">Penari</th>
            <th class="center">Kru</th>
            <th class="center">Pendamping</th>
            <th>Nama PIC</th>
            <th>Telepon PIC</th>
            <th>Email</th>
            <th>Bukti Pembayaran</th>
            <th>Sales</th>
            <th>Finance</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tariKreasi as $item)
            <tr>
                <td class="center">{{ $loop->iteration }}</td>
                <td>{{ $item['booking_code'] ?? '-' }}</td>
                <td>{{ $item['order_id'] ?? '-' }}</td>
                <td>{{ $item['group_name'] ?? '-' }}</td>
                <td>{{ $item['school_name'] ?? '-' }}</td>
                <td class="center">{{ $item['dancers'] ?? '-' }}</td>
                <td class="center">{{ $item['crew'] ?? '-' }}</td>
                <td class="center">{{ $item['companions'] ?? '-' }}</td>
                <td>{{ $item['pic_name'] ?? '-' }}</td>
                <td>{{ $item['pic_phone'] ?? '-' }}</td>
                <td>{{ $item['email'] ?? '-' }}</td>
                <td>
                    @if(!empty($item['payment_path']))
                        <a href="https://serviceevent.salokapark.app/storage/bukti_bayar/{{ $item['payment_path'] }}" target="_blank">Lihat</a>
                    @else
                        -
                    @endif
                </td>
                <td>{{ $item['sales_uname'] ?? '-' }}</td>
                <td>{{ $item['finance_uname'] ?? '-' }}</td>
                <td>{{ ucfirst($item['status']) ?? '-' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
