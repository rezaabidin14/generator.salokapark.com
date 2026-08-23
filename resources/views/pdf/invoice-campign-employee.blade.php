<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>E-Ticket Employee Campaign - Saloka Theme Park</title>

    <style>
        @page {
            margin: 0cm;
        }

        body {
            font-family: "Poppins", sans-serif;
            margin: 0cm;
            padding: 0cm;
            color: #333333;
        }

        main {
            margin: 0;
            padding: 0;
        }

        p,
        img,
        span,
        strong,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0;
            padding: 0;
            letter-spacing: 0;
        }

        .footer {
            position: fixed;
            bottom: 0px;
            left: 0px;
            right: 0px;
            text-align: center;
        }

        .footer img {
            width: 100%;
        }

        .page-break {
            page-break-after: always;
        }

        .header {
            position: fixed;
            top: 0px;
            left: 0px;
            right: 0px;
            text-align: center;
        }
    </style>
</head>

<body style="margin: 0; padding: 0;">

    <!-- =========================================================
         FOOTER
    ========================================================== -->
    <div class="footer">
        <img src="{{ public_path('assets/images/footer_pdf.png') }}" alt="Footer Image">
    </div>


    <!-- =========================================================
         HEADER
    ========================================================== -->
    <div class="header">

        <table align="center"
               cellpadding="0"
               cellspacing="0"
               width="100%"
               style="background-color: #FFFFFFFF; padding: 1rem 2rem;">

            <tbody style="background-color: #FFFFFFFF;">

                <tr>

                    <td align="left">

                        <h4 style="line-height: 1.2; font-size: 20px;">
                            <strong>E-ticket</strong>
                        </h4>

                        <h6 style="line-height: 1.2; font-size: 16px;">
                            <strong>Reservasi Campaign Karyawan</strong>
                        </h6>

                        <h6 style="
                            line-height: 1.2;
                            font-size: 14px;
                            color: #169870;
                            font-weight: 400;
                        ">
                            <span>Kode Booking:</span>
                            <strong>{{ $booking_code }}</strong>
                        </h6>

                    </td>

                    <td align="right">

                        <img
                            src="{{ public_path('assets/images/logosaloka.png') }}"
                            alt="Saloka"
                            width="100"
                        >

                    </td>

                </tr>

            </tbody>

        </table>

    </div>


    <!-- =========================================================
         DETAIL TIKET
    ========================================================== -->
    <main style="
        width: 100%;
        margin: 0;
        padding: 0;
        margin-top: 8rem;
        background-color: #FFFFFFFF;
    ">


        <!-- =====================================================
             INFORMASI TIKET + QR CODE
        ====================================================== -->
        <table align="center"
               cellpadding="0"
               cellspacing="0"
               width="100%"
               style="
                   background-color: #FFFFFFFF;
                   padding: 0.5rem 2rem;
               ">

            <tbody>

                <tr>

                    <!-- INFORMASI SALOKA -->
                    <td align="left"
                        valign="top"
                        style="
                            border-right: 1px solid #ededed;
                            padding-right: .5rem;
                            padding-left: 0rem;
                        ">

                        <p style="
                            font-size: 14px;
                            line-height: 1.2;
                        ">
                            <strong>Saloka Theme Park</strong>
                        </p>

                        <p style="
                            font-size: 12px;
                            line-height: 1.2;
                            color: #999999;
                            margin-top: 5px;
                        ">
                            <strong>
                                Jl. Fatmawati No.154,
                                Tuntang,
                                Semarang,
                                Jawa Tengah 50773
                            </strong>
                        </p>

                        <p style="
                            font-size: 12px;
                            line-height: 1.5;
                            color: #169870;
                            margin-top: 15px;
                        ">
                            <strong>
                                Employee Campaign
                            </strong>
                        </p>

                    </td>


                    <!-- INFORMASI KEDATANGAN -->
                    <td align="left"
                        valign="top"
                        style="
                            border-right: 1px solid #ededed;
                            padding-right: 1rem;
                            padding-left: 1rem;
                        ">

                        <table align="center"
                               cellpadding="0"
                               cellspacing="0"
                               width="100%"
                               style="background-color: #ffffff;">

                            <tbody>

                                <!-- TANGGAL KEDATANGAN -->
                                <tr>

                                    <td align="left">

                                        <div style="
                                            font-size: 12px;
                                            line-height: 1.2;
                                        ">

                                            <img
                                                src="{{ public_path('assets/images/calender_png.png') }}"
                                                alt="calendar"
                                                width="16"
                                                height="16"
                                                style="
                                                    margin-right: 6px;
                                                    vertical-align: middle;
                                                "
                                            >

                                            <span style="
                                                vertical-align: middle;
                                            ">
                                                Tgl Kedatangan:
                                                <strong>
                                                    {{ $date_plan }}
                                                </strong>
                                            </span>

                                        </div>

                                    </td>

                                </tr>


                                <!-- JUMLAH TIKET -->
                                <tr>

                                    <td align="left"
                                        style="padding-top: .8rem;">

                                        <div style="
                                            font-size: 12px;
                                            line-height: 1.2;
                                        ">

                                            <img
                                                src="{{ public_path('assets/images/ticket_png.jpg') }}"
                                                alt="ticket"
                                                width="20"
                                                height="20"
                                                style="
                                                    margin-right: 6px;
                                                    vertical-align: middle;
                                                "
                                            >

                                            <span style="
                                                vertical-align: middle;
                                            ">
                                                Qty Ticket:
                                                <strong>
                                                    {{ $total_ticket }}
                                                </strong>
                                                Pax
                                            </span>

                                        </div>

                                    </td>

                                </tr>


                                <!-- JENIS CAMPAIGN -->
                                <tr>

                                    <td align="left"
                                        style="padding-top: .8rem;">

                                        <div style="
                                            font-size: 12px;
                                            line-height: 1.2;
                                        ">

                                            <span>
                                                Jenis:
                                                <strong>
                                                    Campaign Karyawan
                                                </strong>
                                            </span>

                                        </div>

                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </td>


                    <!-- QR CODE -->
                    <td align="center"
                        style="
                            padding-right: 1rem;
                            padding-left: 1rem;
                        ">

                        <p style="
                            color: #169870;
                            font-size: 14px;
                            margin-bottom: 8px;
                        ">
                            <strong>
                                {{ 'Rp ' . number_format($amount_total, 0, ',', '.') }}
                            </strong>
                        </p>


                        <img
                            src="data:image/png;base64,{!! base64_encode(
                                QrCode::format('png')
                                    ->size(132)
                                    ->merge(
                                        public_path('storage/avatar_loka_3d.png'),
                                        0.25,
                                        true
                                    )
                                    ->errorCorrection('Q')
                                    ->color(0, 0, 0)
                                    ->style('square')
                                    ->eye('circle')
                                    ->margin(3)
                                    ->generate($booking_code)
                            ) !!}"
                            width="132"
                            style="
                                margin: 0;
                                padding: 0;
                            "
                        >

                        <p style="
                            margin-top: 5px;
                        ">
                            <strong style="font-size: 12px;">
                                Kode Booking:
                            </strong>
                        </p>

                        <h4 style="
                            color: #169870;
                            font-size: 20px;
                            margin-top: 3px;
                        ">
                            <strong>
                                {{ $booking_code }}
                            </strong>
                        </h4>

                    </td>

                </tr>

            </tbody>

        </table>


        <!-- =====================================================
             RINGKASAN RESERVASI
        ====================================================== -->
        <table align="center"
               cellpadding="0"
               cellspacing="0"
               width="100%"
               style="
                   background-color: #FFFFFFFF;
                   padding: 0rem 0rem;
                   padding-top: 1rem;
                   border-bottom: 2px dashed #ededed;
                   border-top: 2px dashed #ededed;
               ">

            <tbody>

                <tr>

                    <td align="left"
                        valign="top">

                        <table align="center"
                               cellpadding="0"
                               cellspacing="0"
                               width="100%"
                               style="
                                   background-color: #FFFFFFFF;
                                   padding: 1rem 2rem;
                               ">

                            <tbody>

                                <tr>

                                    <td align="left">

                                        <p style="
                                            line-height: 1.5;
                                            font-size: 14px;
                                        ">
                                            <strong>
                                                Ringkasan Reservasi
                                            </strong>
                                        </p>

                                    </td>

                                </tr>


                                <!-- ITEM TIKET -->
                                <tr>

                                    <td align="left">

                                        <table align="center"
                                               cellpadding="0"
                                               cellspacing="0"
                                               width="100%"
                                               style="
                                                   margin-top: .5rem;
                                               ">

                                            <tbody>

                                                <tr>

                                                    <td align="left"
                                                        width="45%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        ">

                                                        <p>
                                                            <span>
                                                                Tiket Campaign Karyawan
                                                            </span>
                                                        </p>

                                                    </td>


                                                    <td align="left"
                                                        width="15%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        ">

                                                        <p>
                                                            <span>
                                                                {{ $total_ticket }} Pax
                                                            </span>
                                                        </p>

                                                    </td>


                                                    <td align="left"
                                                        width="15%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        ">

                                                        <p>

                                                            <span>
                                                                Rp
                                                                {{ number_format(
                                                                    $unit_price ?? ($amount_total / max($total_ticket, 1)),
                                                                    0,
                                                                    ',',
                                                                    '.'
                                                                ) }}
                                                            </span>

                                                        </p>

                                                    </td>


                                                    <td align="right"
                                                        width="25%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        ">

                                                        <p>

                                                            <span>
                                                                Rp
                                                                {{ number_format(
                                                                    $amount_total,
                                                                    0,
                                                                    ',',
                                                                    '.'
                                                                ) }}
                                                            </span>

                                                        </p>

                                                    </td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </td>

                                </tr>


                                <!-- TOTAL -->
                                <tr>

                                    <td align="left">

                                        <table align="center"
                                               cellpadding="0"
                                               cellspacing="0"
                                               width="100%"
                                               style="
                                                   margin-top: .3rem;
                                               ">

                                            <tbody>

                                                <tr>

                                                    <td align="left"
                                                        width="45%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        ">

                                                        <p>
                                                            <strong>
                                                                Total Reservasi
                                                            </strong>
                                                        </p>

                                                    </td>


                                                    <td width="15%"></td>

                                                    <td width="15%"></td>


                                                    <td align="right"
                                                        width="25%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        ">

                                                        <p>

                                                            <strong>
                                                                Rp
                                                                {{ number_format(
                                                                    $amount_total,
                                                                    0,
                                                                    ',',
                                                                    '.'
                                                                ) }}
                                                            </strong>

                                                        </p>

                                                    </td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </td>

                </tr>

            </tbody>

        </table>


        <!-- =====================================================
             DETAIL RESERVASI
        ====================================================== -->
        <table align="center"
               cellpadding="0"
               cellspacing="0"
               width="100%"
               style="
                   background-color: #FFFFFFFF;
                   padding: 0rem 0rem;
                   border-bottom: 2px dashed #ededed;
               ">

            <tbody>

                <tr>

                    <td align="left"
                        valign="top">

                        <table align="center"
                               cellpadding="0"
                               cellspacing="0"
                               width="100%"
                               style="
                                   background-color: #FFFFFFFF;
                                   padding: 1rem 2rem;
                               ">

                            <tbody>

                                <tr>

                                    <td align="left">

                                        <p style="
                                            line-height: 1.5;
                                            font-size: 14px;
                                        ">
                                            <strong>
                                                Detail Reservasi
                                            </strong>
                                        </p>

                                    </td>

                                </tr>


                                <!-- KODE BOOKING -->
                                <tr>

                                    <td align="left">

                                        <table width="100%"
                                               style="
                                                   margin-top: .5rem;
                                               ">

                                            <tbody>

                                                <tr>

                                                    <td width="30%"
                                                        style="
                                                            font-size: 12px;
                                                        ">
                                                        Kode Booking
                                                    </td>

                                                    <td width="70%"
                                                        style="
                                                            font-size: 12px;
                                                        ">

                                                        <strong>
                                                            {{ $booking_code }}
                                                        </strong>

                                                    </td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </td>

                                </tr>


                                <!-- TANGGAL KEDATANGAN -->
                                <tr>

                                    <td align="left">

                                        <table width="100%"
                                               style="
                                                   margin-top: .2rem;
                                               ">

                                            <tbody>

                                                <tr>

                                                    <td width="30%"
                                                        style="
                                                            font-size: 12px;
                                                        ">
                                                        Tanggal Kedatangan
                                                    </td>

                                                    <td width="70%"
                                                        style="
                                                            font-size: 12px;
                                                        ">

                                                        {{ $date_plan }}

                                                    </td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </td>

                                </tr>


                                <!-- JUMLAH TIKET -->
                                <tr>

                                    <td align="left">

                                        <table width="100%"
                                               style="
                                                   margin-top: .2rem;
                                               ">

                                            <tbody>

                                                <tr>

                                                    <td width="30%"
                                                        style="
                                                            font-size: 12px;
                                                        ">
                                                        Jumlah Tiket
                                                    </td>

                                                    <td width="70%"
                                                        style="
                                                            font-size: 12px;
                                                        ">

                                                        {{ $total_ticket }} Pax

                                                    </td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </td>

                                </tr>


                                <!-- HARGA PER TIKET -->
                                <tr>

                                    <td align="left">

                                        <table width="100%"
                                               style="
                                                   margin-top: .2rem;
                                               ">

                                            <tbody>

                                                <tr>

                                                    <td width="30%"
                                                        style="
                                                            font-size: 12px;
                                                        ">
                                                        Harga per Tiket
                                                    </td>

                                                    <td width="70%"
                                                        style="
                                                            font-size: 12px;
                                                        ">

                                                        Rp
                                                        {{ number_format(
                                                            $unit_price ?? ($amount_total / max($total_ticket, 1)),
                                                            0,
                                                            ',',
                                                            '.'
                                                        ) }}

                                                    </td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </td>

                                </tr>


                                <!-- TOTAL -->
                                <tr>

                                    <td align="left">

                                        <table width="100%"
                                               style="
                                                   margin-top: .2rem;
                                               ">

                                            <tbody>

                                                <tr>

                                                    <td width="30%"
                                                        style="
                                                            font-size: 12px;
                                                        ">

                                                        <strong>
                                                            Total
                                                        </strong>

                                                    </td>

                                                    <td width="70%"
                                                        style="
                                                            font-size: 12px;
                                                        ">

                                                        <strong>
                                                            Rp
                                                            {{ number_format(
                                                                $amount_total,
                                                                0,
                                                                ',',
                                                                '.'
                                                            ) }}
                                                        </strong>

                                                    </td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </td>

                                </tr>


                                <!-- METODE -->
                                <tr>

                                    <td align="left">

                                        <table width="100%"
                                               style="
                                                   margin-top: .2rem;
                                               ">

                                            <tbody>

                                                <tr>

                                                    <td width="30%"
                                                        style="
                                                            font-size: 12px;
                                                        ">
                                                        Jenis Reservasi
                                                    </td>

                                                    <td width="70%"
                                                        style="
                                                            font-size: 12px;
                                                        ">

                                                        Employee Campaign

                                                    </td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </td>

                </tr>

            </tbody>

        </table>

    </main>


    <!-- =========================================================
         PAGE BREAK
    ========================================================== -->
    <div class="page-break"></div>


    <!-- =========================================================
         HALAMAN 2
         PETUNJUK PENGGUNAAN KODE BOOKING
    ========================================================== -->
    <main style="
        width: 100%;
        margin: 0;
        padding: 0;
        margin-top: 8rem;
    ">

        <table align="center"
               cellpadding="0"
               cellspacing="0"
               width="100%"
               style="
                   background-color: #FFFFFFFF;
                   padding: 0rem 0rem;
                   border-top: 2px dashed #ededed;
                   border-bottom: 2px dashed #ededed;
               ">

            <tbody>

                <tr>

                    <td align="left"
                        valign="top">

                        <table align="center"
                               cellpadding="0"
                               cellspacing="0"
                               width="100%"
                               style="
                                   background-color: #FFFFFFFF;
                                   padding: 1rem 2rem;
                               ">

                            <tbody>


                                <!-- JUDUL -->
                                <tr>

                                    <td align="left">

                                        <p style="
                                            line-height: 1.5;
                                            font-size: 14px;
                                        ">
                                            <strong>
                                                Penting! Begini Cara Gunakan
                                                Kode Booking Saloka Kamu
                                            </strong>
                                        </p>

                                    </td>

                                </tr>


                                <!-- INFO -->
                                <tr>

                                    <td align="left">

                                        <p style="
                                            font-size: 12px;
                                            line-height: 1.5;
                                            margin-top: .5rem;
                                        ">
                                            Kamu tidak perlu mencetak
                                            e-ticket ini.
                                        </p>

                                    </td>

                                </tr>


                                <tr>

                                    <td align="left">

                                        <p style="
                                            font-size: 12px;
                                            line-height: 1.5;
                                            margin-top: .2rem;
                                        ">
                                            Cukup tunjukkan Kode Booking
                                            kamu saat sampai di
                                            Saloka Theme Park.
                                        </p>

                                    </td>

                                </tr>


                                <!-- SUB JUDUL -->
                                <tr>

                                    <td align="left">

                                        <p style="
                                            font-size: 14px;
                                            line-height: 1.5;
                                            margin-top: .8rem;
                                        ">
                                            <strong>
                                                Berikut langkah mudahnya:
                                            </strong>
                                        </p>

                                    </td>

                                </tr>


                                <!-- LANGKAH 1 -->
                                <tr>

                                    <td align="left">

                                        <table width="100%"
                                               style="
                                                   margin-top: .5rem;
                                               ">

                                            <tr>

                                                <td width="3%"
                                                    valign="top"
                                                    style="
                                                        font-size: 12px;
                                                    ">
                                                    1.
                                                </td>

                                                <td width="97%"
                                                    style="
                                                        font-size: 12px;
                                                        line-height: 1.5;
                                                    ">

                                                    Cek Kode Booking kamu
                                                    yang dikirim melalui
                                                    WhatsApp.

                                                </td>

                                            </tr>

                                        </table>

                                    </td>

                                </tr>


                                <!-- LANGKAH 2 -->
                                <tr>

                                    <td align="left">

                                        <table width="100%"
                                               style="
                                                   margin-top: .2rem;
                                               ">

                                            <tr>

                                                <td width="3%"
                                                    valign="top"
                                                    style="
                                                        font-size: 12px;
                                                    ">
                                                    2.
                                                </td>

                                                <td width="97%"
                                                    style="
                                                        font-size: 12px;
                                                        line-height: 1.5;
                                                    ">

                                                    Tunjukkan
                                                    <strong>
                                                        Kode Booking
                                                    </strong>
                                                    saat di loket
                                                    penukaran tiket.

                                                </td>

                                            </tr>

                                        </table>

                                    </td>

                                </tr>


                                <!-- LANGKAH 3 -->
                                <tr>

                                    <td align="left">

                                        <table width="100%"
                                               style="
                                                   margin-top: .2rem;
                                               ">

                                            <tr>

                                                <td width="3%"
                                                    valign="top"
                                                    style="
                                                        font-size: 12px;
                                                    ">
                                                    3.
                                                </td>

                                                <td width="97%"
                                                    style="
                                                        font-size: 12px;
                                                        line-height: 1.5;
                                                    ">

                                                    Tim kami akan melakukan
                                                    scan dan verifikasi
                                                    Kode Booking.

                                                </td>

                                            </tr>

                                        </table>

                                    </td>

                                </tr>


                                <!-- LANGKAH 4 -->
                                <tr>

                                    <td align="left">

                                        <table width="100%"
                                               style="
                                                   margin-top: .2rem;
                                               ">

                                            <tr>

                                                <td width="3%"
                                                    valign="top"
                                                    style="
                                                        font-size: 12px;
                                                    ">
                                                    4.
                                                </td>

                                                <td width="97%"
                                                    style="
                                                        font-size: 12px;
                                                        line-height: 1.5;
                                                    ">

                                                    Setelah valid,
                                                    kamu akan mendapatkan
                                                    tiket fisik dan dapat
                                                    langsung menikmati
                                                    wahana Saloka.

                                                </td>

                                            </tr>

                                        </table>

                                    </td>

                                </tr>


                                <!-- INFO TAMBAHAN -->
                                <tr>

                                    <td align="left">

                                        <p style="
                                            font-size: 12px;
                                            line-height: 1.5;
                                            margin-top: .7rem;
                                        ">

                                            Kalau masih bingung,
                                            kamu bisa menunjukkan
                                            E-ticket ini kepada
                                            petugas kami di lokasi.

                                        </p>

                                    </td>

                                </tr>


                                <tr>

                                    <td align="left">

                                        <p style="
                                            font-size: 12px;
                                            line-height: 1.5;
                                            margin-top: .5rem;
                                        ">

                                            <strong>
                                                Rasakan keceriaan
                                                tiada habisnya di Saloka.
                                            </strong>

                                        </p>

                                    </td>

                                </tr>


                            </tbody>

                        </table>

                    </td>

                </tr>

            </tbody>

        </table>


        <!-- =====================================================
             SYARAT & KETENTUAN
        ====================================================== -->
        <table align="center"
               cellpadding="0"
               cellspacing="0"
               width="100%"
               style="
                   background-color: #FFFFFFFF;
                   padding: 0rem 0rem;
                   border-bottom: 2px dashed #ededed;
               ">

            <tbody>

                <tr>

                    <td align="left"
                        valign="top">

                        <table align="center"
                               cellpadding="0"
                               cellspacing="0"
                               width="100%"
                               style="
                                   background-color: #FFFFFFFF;
                                   padding: 1rem 2rem;
                               ">

                            <tbody>

                                <tr>

                                    <td align="left">

                                        <p style="
                                            line-height: 1.5;
                                            font-size: 14px;
                                        ">
                                            <strong>
                                                Syarat & Ketentuan Kunjungan:
                                            </strong>
                                        </p>

                                    </td>

                                </tr>


                                <!-- SYARAT 1 -->
                                <tr>

                                    <td align="left">

                                        <table width="100%"
                                               style="
                                                   margin-top: .5rem;
                                               ">

                                            <tr>

                                                <td width="3%"
                                                    valign="top"
                                                    style="
                                                        font-size: 12px;
                                                    ">
                                                    1.
                                                </td>

                                                <td width="97%"
                                                    style="
                                                        font-size: 12px;
                                                        line-height: 1.5;
                                                    ">

                                                    <strong>
                                                        Tiket hanya berlaku
                                                        di tanggal kunjungan
                                                    </strong>
                                                    yang telah dipilih
                                                    saat reservasi.

                                                </td>

                                            </tr>

                                        </table>

                                    </td>

                                </tr>


                                <!-- SYARAT 2 -->
                                <tr>

                                    <td align="left">

                                        <table width="100%"
                                               style="
                                                   margin-top: .2rem;
                                               ">

                                            <tr>

                                                <td width="3%"
                                                    valign="top"
                                                    style="
                                                        font-size: 12px;
                                                    ">
                                                    2.
                                                </td>

                                                <td width="97%"
                                                    style="
                                                        font-size: 12px;
                                                        line-height: 1.5;
                                                    ">

                                                    <strong>
                                                        Tiket tidak dapat
                                                        digunakan lebih
                                                        dari 1 kali
                                                    </strong>
                                                    atau di luar tanggal
                                                    kunjungan.

                                                </td>

                                            </tr>

                                        </table>

                                    </td>

                                </tr>


                                <!-- SYARAT 3 -->
                                <tr>

                                    <td align="left">

                                        <table width="100%"
                                               style="
                                                   margin-top: .2rem;
                                               ">

                                            <tr>

                                                <td width="3%"
                                                    valign="top"
                                                    style="
                                                        font-size: 12px;
                                                    ">
                                                    3.
                                                </td>

                                                <td width="97%"
                                                    style="
                                                        font-size: 12px;
                                                        line-height: 1.5;
                                                    ">

                                                    Pengunjung wajib menjaga
                                                    ketertiban dan kebersihan
                                                    selama berada di area
                                                    taman.

                                                </td>

                                            </tr>

                                        </table>

                                    </td>

                                </tr>


                                <!-- SYARAT 4 -->
                                <tr>

                                    <td align="left">

                                        <table width="100%"
                                               style="
                                                   margin-top: .2rem;
                                               ">

                                            <tr>

                                                <td width="3%"
                                                    valign="top"
                                                    style="
                                                        font-size: 12px;
                                                    ">
                                                    4.
                                                </td>

                                                <td width="97%"
                                                    style="
                                                        font-size: 12px;
                                                        line-height: 1.5;
                                                    ">

                                                    Dilarang membawa makanan
                                                    dan minuman dari luar
                                                    ke dalam area Saloka
                                                    Theme Park.

                                                </td>

                                            </tr>

                                        </table>

                                    </td>

                                </tr>


                                <!-- SYARAT 5 -->
                                <tr>

                                    <td align="left">

                                        <table width="100%"
                                               style="
                                                   margin-top: .2rem;
                                               ">

                                            <tr>

                                                <td width="3%"
                                                    valign="top"
                                                    style="
                                                        font-size: 12px;
                                                    ">
                                                    5.
                                                </td>

                                                <td width="97%"
                                                    style="
                                                        font-size: 12px;
                                                        line-height: 1.5;
                                                    ">

                                                    Tiket yang sudah dibeli
                                                    <strong>
                                                        tidak dapat
                                                        diuangkan kembali.
                                                    </strong>

                                                </td>

                                            </tr>

                                        </table>

                                    </td>

                                </tr>


                                <!-- SYARAT 6 -->
                                <tr>

                                    <td align="left">

                                        <table width="100%"
                                               style="
                                                   margin-top: .2rem;
                                               ">

                                            <tr>

                                                <td width="3%"
                                                    valign="top"
                                                    style="
                                                        font-size: 12px;
                                                    ">
                                                    6.
                                                </td>

                                                <td width="97%"
                                                    style="
                                                        font-size: 12px;
                                                        line-height: 1.5;
                                                    ">

                                                    Batas penukaran tiket
                                                    dilayani hingga
                                                    1 jam sebelum jam
                                                    operasional berakhir.

                                                </td>

                                            </tr>

                                        </table>

                                    </td>

                                </tr>


                                <!-- SYARAT 7 -->
                                <tr>

                                    <td align="left">

                                        <table width="100%"
                                               style="
                                                   margin-top: .2rem;
                                               ">

                                            <tr>

                                                <td width="3%"
                                                    valign="top"
                                                    style="
                                                        font-size: 12px;
                                                    ">
                                                    7.
                                                </td>

                                                <td width="97%"
                                                    style="
                                                        font-size: 12px;
                                                        line-height: 1.5;
                                                    ">

                                                    <strong>
                                                        Jam Operasional Saloka:
                                                    </strong>

                                                </td>

                                            </tr>

                                        </table>

                                    </td>

                                </tr>


                                <!-- JAM SENIN-KAMIS -->
                                <tr>

                                    <td align="left">

                                        <table width="100%"
                                               style="
                                                   margin-top: .1rem;
                                                   padding-left: 2rem;
                                               ">

                                            <tr>

                                                <td width="3%"
                                                    style="
                                                        font-size: 12px;
                                                    ">
                                                    •
                                                </td>

                                                <td width="97%"
                                                    style="
                                                        font-size: 12px;
                                                        line-height: 1.5;
                                                    ">

                                                    Senin - Kamis
                                                    10.00 - 18.00 WIB

                                                </td>

                                            </tr>

                                        </table>

                                    </td>

                                </tr>


                                <!-- JAM JUMAT -->
                                <tr>

                                    <td align="left">

                                        <table width="100%"
                                               style="
                                                   margin-top: .1rem;
                                                   padding-left: 2rem;
                                               ">

                                            <tr>

                                                <td width="3%"
                                                    style="
                                                        font-size: 12px;
                                                    ">
                                                    •
                                                </td>

                                                <td width="97%"
                                                    style="
                                                        font-size: 12px;
                                                        line-height: 1.5;
                                                    ">

                                                    Jum'at
                                                    12.00 - 19.00 WIB

                                                </td>

                                            </tr>

                                        </table>

                                    </td>

                                </tr>


                                <!-- JAM SABTU-MINGGU -->
                                <tr>

                                    <td align="left">

                                        <table width="100%"
                                               style="
                                                   margin-top: .1rem;
                                                   padding-left: 2rem;
                                               ">

                                            <tr>

                                                <td width="3%"
                                                    style="
                                                        font-size: 12px;
                                                    ">
                                                    •
                                                </td>

                                                <td width="97%"
                                                    style="
                                                        font-size: 12px;
                                                        line-height: 1.5;
                                                    ">

                                                    Sabtu - Minggu
                                                    10.00 - 19.00 WIB

                                                </td>

                                            </tr>

                                        </table>

                                    </td>

                                </tr>


                            </tbody>

                        </table>

                    </td>

                </tr>

            </tbody>

        </table>

    </main>

</body>

</html>