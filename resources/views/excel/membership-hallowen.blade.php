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

    ul.details {
        padding-left: 16px;
        margin: 0;
        list-style-type: disc;
    }

    ul.details li {
        margin: 2px 0;
    }

    .no-detail {
        color: #999;
        font-style: italic;
    }
</style>

<table>
    <thead>
        <tr>
            <th class="center">No</th>
            <th>Order ID</th>
            <th>Tanggal Transaksi</th>
            <th>Email</th>
            <th>Whatsapp</th>
            <th>Type</th>
            <th>Referensi</th>
            <th class="center">Quantity</th>
            <th class="right">Total Amount</th>
            <th>Metode Pembayaran</th>
            <th>Detail Membership</th>
        </tr>
    </thead>
    <tbody>
        @foreach($membershipHallowen as $member)
            <tr>
                <td class="center">{{ $loop->iteration }}</td>
                <td>{{ $member['order_id'] ?? '-' }}</td>
                <td>{{ \Carbon\Carbon::parse($member['updated_at'])->format('d-m-Y H:i') ?? '-' }}</td>
                <td>{{ $member['email'] ?? '-' }}</td>
                <td>{{ $member['whatsapp'] ?? '-' }}</td>
                <td>{{ $member['type'] ?? '-' }}</td>
                <td>{{ $member['ref'] ?? '-' }}</td>
                <td class="center">{{ $member['total_member'] ?? '-' }}</td>
                <td class="right">
                    {{ $member['total_amount'] !== null ? number_format($member['total_amount'], 2, ',', '.') : '-' }}
                </td>
                <td>{{ $member['payment_channels'] ?? '-' }}</td>
                <td>
                    @if(!empty($member['membership_details']))
                        <ul class="details">
                        @foreach ($member['membership_details'] as $detail)
                            <li>{{ $detail['name'] ?? '-' }} | {{ $detail['date_of_birth'] ?? '-' }}</li>
                        @endforeach
                        </ul>
                    @else
                        <span class="no-detail">Tidak ada detail</span>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
