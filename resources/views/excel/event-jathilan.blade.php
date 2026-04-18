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

<table>
    <thead>
        <tr>
            <th style="text-align: center;">No</th>
            <th style="text-align: center;">Tahun</th>
            <th style="text-align: center;">Nama Group</th>
            <th style="text-align: center;">Nama Yayasan</th>
            <th style="text-align: center;">Asal Daerah</th>
            <th style="text-align: center;">Jenis Tarian</th>
            <th style="text-align: center;">Penanggung Jawab</th>
            <th style="text-align: center;">Telepon</th>
            <th style="text-align: center;">Email</th>
            <th style="text-align: center;">Jumlah Penari</th>
            <th style="text-align: center;">Jumlah Pengiring</th>
            <th style="text-align: center;">Link Video</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pesertaJathilan as $peserta)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $peserta['tahun'] ?? '-' }}</td>
                <td>{{ $peserta['nama_group'] ?? '-' }}</td>
                <td>{{ $peserta['nama_yayasan'] ?? '-' }}</td>
                <td>{{ $peserta['asal_daerah'] ?? '-' }}</td>
                <td>{{ $peserta['jenis_tarian'] ?? '-' }}</td>
                <td>{{ $peserta['penanggung_jawab'] ?? '-' }}</td>
                <td>{{ $peserta['telepon'] ?? '-' }}</td>
                <td>{{ $peserta['email'] ?? '-' }}</td>
                <td>{{ $peserta['jumlah_penari'] ?? '-' }}</td>
                <td>{{ $peserta['jumlah_pengiring'] ?? '-' }}</td>
                <td>{{ $peserta['link_video'] ?? '-' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

