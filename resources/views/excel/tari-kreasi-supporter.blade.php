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

    img.receipt {
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
            <th>Order ID</th>
            <th>Kode Booking</th>
            <th>Tanggal Transaksi</th>
            <th>Nama</th>
            <th>Whatsapp</th>
            <th>Kota</th>
            <!-- <th>Tipe</th> -->
            <th>Referensi</th>
            <!-- <th>Ref ID</th> -->
            <th class="center">Quantity</th>
            <th class="right">Total Amount</th>
            <th>Metode Pembayaran</th>
            <th>Status</th>
            <th>Tanggal Redeem</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tariKreasiSupporter as $item)
            <tr>
                <td class="center">{{ $loop->iteration }}</td>
                <td>{{ $item['order_id'] ?? '-' }}</td>
                <td>{{ $item['booking_code'] ?? '-' }}</td>
                <td>{{ \Carbon\Carbon::parse($item['created_at'])->format('d-m-Y H:i') ?? '-' }}</td>
                <td>{{ $item['name'] ?? '-' }}</td>
                <td>{{ $item['whatsapp'] ?? '-' }}</td>
                <td>{{ $item['city'] ?? '-' }}</td>
                <!-- <td>{{ $item['type'] ?? '-' }}</td> -->
                <td>{{ $item['ref'] ?? '-' }}</td>
                <!-- <td>{{ $item['ref_id'] ?? '-' }}</td> -->
                <td class="center">{{ $item['quantity'] ?? '-' }}</td>
                 <td class="right">
                    {{ $item['total_amount'] !== null ? number_format($item['total_amount'], 2, ',', '.') : '-' }}
                </td>
                <td>{{ $item['payment_channel'] ?? '-' }}</td>
                <td>{{ ucfirst($item['status']) ?? '-' }}</td>
                <td>
                    {{ !empty($item['redeemed_at']) 
                        ? \Carbon\Carbon::parse($item['redeemed_at'])->format('d-m-Y H:i') 
                        : '-' }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
