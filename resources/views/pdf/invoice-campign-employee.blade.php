<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    >

    <title>
        Reservasi Tiket Saloka Theme Park
    </title>

</head>


<style>

    @page {
        margin: 0cm;
    }


    body {
        font-family: "Poppins", sans-serif;
        margin: 0cm;
        padding: 0cm;
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


<body style="margin: 0; padding: 0;">


    <!-- =========================================================
         FOOTER
    ========================================================== -->

    <div class="footer">

        <img
            src="{{ public_path('assets/images/footer_pdf.png') }}"
            alt="Footer Image"
        >

    </div>


    <!-- =========================================================
         HEADER
    ========================================================== -->

    <div class="header">

        <table
            align="center"
            cellpadding="0"
            cellspacing="0"
            width="100%"
            style="
                background-color: #FFFFFFFF;
                padding: 1rem 2rem;
            "
        >

            <tbody
                style="
                    background-color: #FFFFFFFF;
                    padding-inline: 0rem;
                    padding-block: 0rem;
                "
            >

                <tr>

                    <td align="left">

                        <h4
                            style="
                                line-height: 1.2;
                                font-size: 20px;
                            "
                        >

                            <strong>
                                E-ticket
                            </strong>

                        </h4>


                        <h6
                            style="
                                line-height: 1.2;
                                font-size: 16px;
                            "
                        >

                            <strong>
                                Reservasi Saloka Theme Park
                            </strong>

                        </h6>


                        <h6
                            style="
                                line-height: 1.2;
                                font-size: 14px;
                                color: #169870;
                                font-weight: 400;
                            "
                        >

                            <span>
                                Kode Booking:
                            </span>

                            <strong>
                                {{ $booking_code }}
                            </strong>

                        </h6>

                    </td>


                    <td align="right">

                        <img
                            src="{{ public_path('assets/images/logosaloka.png') }}"
                            alt="Saloka"
                            width="100"
                            class="adapt-img"
                        >

                    </td>

                </tr>

            </tbody>

        </table>

    </div>


    <!-- =========================================================
         DETAIL TIKET
    ========================================================== -->

    <main
        style="
            width: 100%;
            margin: 0;
            padding: 0;
            padding-inline: 0;
            padding-block: 0;
            margin-top: 8rem;
            background-color: #FFFFFFFF;
        "
    >


        <!-- =====================================================
             QR CODE + INFORMASI TIKET
        ====================================================== -->

        <table
            align="center"
            cellpadding="0"
            cellspacing="0"
            width="100%"
            style="
                background-color: #FFFFFFFF;
                padding: 0.5rem 2rem;
            "
        >

            <tbody>

                <tr>


                    <!-- =================================================
                         INFORMASI SALOKA
                    ================================================== -->

                    <td
                        align="left"
                        valign="top"
                        style="
                            border-right: 1px solid #ededed;
                            padding-right: .5rem;
                            padding-left: 0rem;
                        "
                    >

                        <p
                            style="
                                font-size: 14px;
                                line-height: 1.2;
                            "
                        >

                            <strong>
                                Saloka Theme Park
                            </strong>

                        </p>


                        <p
                            style="
                                font-size: 12px;
                                line-height: 1.2;
                                color: #999999;
                            "
                        >

                            <strong>
                                Jl. Fatmawati No.154,
                                Tuntang,
                                Semarang,
                                Jawa Tengah 50773
                            </strong>

                        </p>

                    </td>


                    <!-- =================================================
                         INFORMASI KEDATANGAN
                    ================================================== -->

                    <td
                        align="left"
                        valign="top"
                        style="
                            border-right: 1px solid #ededed;
                            padding-right: 1rem;
                            padding-left: 1rem;
                        "
                    >

                        <table
                            align="center"
                            cellpadding="0"
                            cellspacing="0"
                            width="100%"
                            style="
                                background-color: #ffffff;
                            "
                        >

                            <tbody>


                                <!-- TANGGAL KEDATANGAN -->

                                <tr>

                                    <td align="left">

                                        <div
                                            style="
                                                display: flex;
                                                align-items: center;
                                                font-size: 12px;
                                                line-height: 1.2;
                                                white-space: nowrap;
                                            "
                                        >

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

                                            <span
                                                style="
                                                    vertical-align: middle;
                                                    white-space: nowrap;
                                                "
                                            >

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

                                    <td
                                        align="left"
                                        style="
                                            padding-top: .5rem;
                                        "
                                    >

                                        <div
                                            style="
                                                display: flex;
                                                align-items: center;
                                                font-size: 12px;
                                                line-height: 1.2;
                                                white-space: nowrap;
                                            "
                                        >

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

                                            <span
                                                style="
                                                    vertical-align: middle;
                                                "
                                            >

                                                Qty Ticket:

                                                <strong>
                                                    {{ $total_ticket }}
                                                </strong>

                                                Pax

                                            </span>

                                        </div>

                                    </td>

                                </tr>


                            </tbody>

                        </table>

                    </td>


                    <!-- =================================================
                         QR CODE
                    ================================================== -->

                    <td
                        align="center"
                        style="
                            padding-right: 1rem;
                            padding-left: 1rem;
                        "
                    >


                        <!-- TOTAL -->

                        <p
                            style="
                                color: #169870;
                                font-size: 14px;
                            "
                        >

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


                        <!-- QR -->

                        <img
                            src="data:image/png;base64,{!! base64_encode(
                                QrCode::format('png')
                                    ->size(132)
                                    ->format('png')
                                    ->merge(
                                        public_path(
                                            'storage/avatar_loka_3d.png'
                                        ),
                                        0.25,
                                        true
                                    )
                                    ->errorCorrection('Q')
                                    ->color(0, 0, 0)
                                    ->style('square')
                                    ->eye('circle')
                                    ->margin(3)
                                    ->color(0, 0, 0)
                                    ->eyeColor(
                                        0,
                                        22,
                                        152,
                                        112,
                                        22,
                                        152,
                                        112
                                    )
                                    ->eyeColor(
                                        1,
                                        22,
                                        152,
                                        112,
                                        22,
                                        152,
                                        112
                                    )
                                    ->eyeColor(
                                        2,
                                        22,
                                        152,
                                        112,
                                        22,
                                        152,
                                        112
                                    )
                                    ->generate($booking_code)
                            ) !!}"
                            width="132"
                            style="
                                margin: 0;
                                padding: 0;
                            "
                        >


                        <p>

                            <strong
                                style="
                                    font-size: 12px;
                                "
                            >
                                Kode Booking:
                            </strong>

                        </p>


                        <h4
                            style="
                                color: #169870;
                                font-size: 20px;
                            "
                        >

                            <strong>
                                {{ $booking_code }}
                            </strong>

                        </h4>


                    </td>

                </tr>

            </tbody>

        </table>


        <!-- =====================================================
             RINGKASAN PEMBAYARAN
        ====================================================== -->

        <table
            align="center"
            cellpadding="0"
            cellspacing="0"
            width="100%"
            style="
                background-color: #FFFFFFFF;
                padding: 0rem 0rem;
                padding-top: 1rem;
                border-bottom: 2px dashed #ededed;
                border-top: 2px dashed #ededed;
            "
        >

            <tbody>

                <tr>

                    <td
                        align="left"
                        valign="top"
                    >

                        <table
                            align="center"
                            cellpadding="0"
                            cellspacing="0"
                            width="100%"
                            style="
                                background-color: #FFFFFFFF;
                                padding: 1rem 2rem;
                            "
                        >

                            <tbody>


                                <!-- JUDUL -->

                                <tr>

                                    <td align="left">

                                        <p
                                            style="
                                                line-height: 1.5;
                                                font-size: 14px;
                                            "
                                        >

                                            <strong>
                                                Ringkasan Reservasi
                                            </strong>

                                        </p>

                                    </td>

                                </tr>


                                <!-- =================================================
                                     ITEM TIKET
                                ================================================== -->

                                @foreach ($ticket_orders as $ticket_order)

                                    <tr>

                                        <td align="left">

                                            <table
                                                align="center"
                                                cellpadding="0"
                                                cellspacing="0"
                                                width="100%"
                                                style="
                                                    margin-top: .5rem;
                                                "
                                            >

                                                <tbody>

                                                    <tr>


                                                        <!-- NAMA TIKET -->

                                                        <td
                                                            align="left"
                                                            width="45%"
                                                            style="
                                                                font-size: 12px;
                                                                line-height: 1.2;
                                                            "
                                                        >

                                                            <p>

                                                                <span>
                                                                    {{ $ticket_order['ticket_name'] }}
                                                                </span>

                                                            </p>

                                                        </td>


                                                        <!-- QUANTITY -->

                                                        <td
                                                            align="left"
                                                            width="15%"
                                                            style="
                                                                font-size: 12px;
                                                                line-height: 1.2;
                                                            "
                                                        >

                                                            <p>

                                                                <span>
                                                                    {{ $ticket_order['quantity'] }}
                                                                    Pax
                                                                </span>

                                                            </p>

                                                        </td>


                                                        <!-- HARGA -->

                                                        <td
                                                            align="left"
                                                            width="15%"
                                                            style="
                                                                font-size: 12px;
                                                                line-height: 1.2;
                                                            "
                                                        >

                                                            <p>

                                                                <span>

                                                                    Rp
                                                                    {{ number_format(
                                                                        $ticket_order['price'],
                                                                        0,
                                                                        ',',
                                                                        '.'
                                                                    ) }}

                                                                </span>

                                                            </p>

                                                        </td>


                                                        <!-- SUBTOTAL -->

                                                        <td
                                                            align="right"
                                                            width="25%"
                                                            style="
                                                                font-size: 12px;
                                                                line-height: 1.2;
                                                            "
                                                        >

                                                            <p>

                                                                <span>

                                                                    Rp
                                                                    {{ number_format(
                                                                        $ticket_order['subtotal'],
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

                                @endforeach


                                <!-- =================================================
                                     TOTAL PEMBAYARAN
                                ================================================== -->

                                <tr>

                                    <td align="left">

                                        <table
                                            align="center"
                                            cellpadding="0"
                                            cellspacing="0"
                                            width="100%"
                                            style="
                                                margin-top: .3rem;
                                            "
                                        >

                                            <tbody>

                                                <tr>


                                                    <td
                                                        align="left"
                                                        width="45%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>

                                                            <strong>
                                                                Total Pembayaran
                                                            </strong>

                                                        </p>

                                                    </td>


                                                    <td
                                                        width="15%"
                                                    ></td>


                                                    <td
                                                        width="15%"
                                                    ></td>


                                                    <td
                                                        align="right"
                                                        width="25%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

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


    </main>


    <!-- =========================================================
         PAGE BREAK
    ========================================================== -->

    <div class="page-break"></div>


    <!-- =========================================================
         HALAMAN 2
         PETUNJUK PENGGUNAAN KODE BOOKING
    ========================================================== -->

    <main
        style="
            width: 100%;
            margin: 0;
            padding: 0;
            padding-inline: 0;
            padding-block: 0;
            margin-top: 8rem;
        "
    >


        <!-- =====================================================
             PETUNJUK PENGGUNAAN
        ====================================================== -->

        <table
            align="center"
            cellpadding="0"
            cellspacing="0"
            width="100%"
            style="
                background-color: #FFFFFFFF;
                padding: 0rem 0rem;
                border-top: 2px dashed #ededed;
                border-bottom: 2px dashed #ededed;
            "
        >

            <tbody>

                <tr>

                    <td
                        align="left"
                        valign="top"
                    >

                        <table
                            align="center"
                            cellpadding="0"
                            cellspacing="0"
                            width="100%"
                            style="
                                background-color: #FFFFFFFF;
                                padding: 1rem 2rem;
                            "
                        >

                            <tbody>


                                <!-- JUDUL -->

                                <tr>

                                    <td align="left">

                                        <p
                                            style="
                                                line-height: 1.5;
                                                font-size: 14px;
                                            "
                                        >

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

                                        <table
                                            align="center"
                                            cellpadding="0"
                                            cellspacing="0"
                                            width="100%"
                                            style="
                                                margin-top: .5rem;
                                            "
                                        >

                                            <tbody>

                                                <tr>

                                                    <td
                                                        align="left"
                                                        width="100%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>

                                                            <span>
                                                                Kamu tidak perlu
                                                                mencetak
                                                                e-ticketnya
                                                            </span>

                                                        </p>

                                                    </td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </td>

                                </tr>


                                <!-- INFO 2 -->

                                <tr>

                                    <td align="left">

                                        <table
                                            align="center"
                                            cellpadding="0"
                                            cellspacing="0"
                                            width="100%"
                                            style="
                                                margin-top: .2rem;
                                            "
                                        >

                                            <tbody>

                                                <tr>

                                                    <td
                                                        align="left"
                                                        width="100%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>

                                                            <span>
                                                                Cukup tunjukkan
                                                                Kode Booking
                                                                kamu saat sampai
                                                                di Saloka Theme Park
                                                            </span>

                                                        </p>

                                                    </td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </td>

                                </tr>


                                <!-- SUB JUDUL -->

                                <tr>

                                    <td align="left">

                                        <table
                                            align="center"
                                            cellpadding="0"
                                            cellspacing="0"
                                            width="100%"
                                            style="
                                                margin-top: .5rem;
                                            "
                                        >

                                            <tbody>

                                                <tr>

                                                    <td
                                                        align="left"
                                                        width="100%"
                                                        style="
                                                            font-size: 14px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>

                                                            <strong>
                                                                Berikut langkah
                                                                mudahnya:
                                                            </strong>

                                                        </p>

                                                    </td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </td>

                                </tr>


                                <!-- LANGKAH 1 -->

                                <tr>

                                    <td align="left">

                                        <table
                                            align="center"
                                            cellpadding="0"
                                            cellspacing="0"
                                            width="100%"
                                            style="
                                                margin-top: .5rem;
                                            "
                                        >

                                            <tbody>

                                                <tr>

                                                    <td
                                                        align="left"
                                                        width="3%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>
                                                            <span>
                                                                1.
                                                            </span>
                                                        </p>

                                                    </td>


                                                    <td
                                                        align="left"
                                                        width="97%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>

                                                            <span>
                                                                Cek kode booking
                                                                kamu yang dikirim
                                                                lewat email atau
                                                                Whatsapp.
                                                            </span>

                                                        </p>

                                                    </td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </td>

                                </tr>


                                <!-- LANGKAH 2 -->

                                <tr>

                                    <td align="left">

                                        <table
                                            align="center"
                                            cellpadding="0"
                                            cellspacing="0"
                                            width="100%"
                                            style="
                                                margin-top: .2rem;
                                            "
                                        >

                                            <tbody>

                                                <tr>

                                                    <td
                                                        align="left"
                                                        width="3%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>
                                                            <span>
                                                                2.
                                                            </span>
                                                        </p>

                                                    </td>


                                                    <td
                                                        align="left"
                                                        width="97%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>

                                                            <span>

                                                                Tunjukkan

                                                                <strong>
                                                                    Kode Booking
                                                                </strong>

                                                                saat di loket
                                                                penukaran tiket.

                                                            </span>

                                                        </p>

                                                    </td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </td>

                                </tr>


                                <!-- LANGKAH 3 -->

                                <tr>

                                    <td align="left">

                                        <table
                                            align="center"
                                            cellpadding="0"
                                            cellspacing="0"
                                            width="100%"
                                            style="
                                                margin-top: .2rem;
                                            "
                                        >

                                            <tbody>

                                                <tr>

                                                    <td
                                                        align="left"
                                                        width="3%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>
                                                            <span>
                                                                3.
                                                            </span>
                                                        </p>

                                                    </td>


                                                    <td
                                                        align="left"
                                                        width="97%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>

                                                            <span>
                                                                Tim kami akan
                                                                scan &
                                                                verifikasi.
                                                            </span>

                                                        </p>

                                                    </td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </td>

                                </tr>


                                <!-- LANGKAH 4 -->

                                <tr>

                                    <td align="left">

                                        <table
                                            align="center"
                                            cellpadding="0"
                                            cellspacing="0"
                                            width="100%"
                                            style="
                                                margin-top: .2rem;
                                            "
                                        >

                                            <tbody>

                                                <tr>

                                                    <td
                                                        align="left"
                                                        width="3%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>
                                                            <span>
                                                                4.
                                                            </span>
                                                        </p>

                                                    </td>


                                                    <td
                                                        align="left"
                                                        width="97%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>

                                                            <span>

                                                                Setelah valid,
                                                                kamu akan
                                                                mendapatkan
                                                                tiket fisik dan
                                                                langsung bisa
                                                                masuk untuk
                                                                nikmati semua
                                                                wahana
                                                                sepuasnya!

                                                            </span>

                                                        </p>

                                                    </td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </td>

                                </tr>


                                <!-- INFO TAMBAHAN -->

                                <tr>

                                    <td align="left">

                                        <table
                                            align="center"
                                            cellpadding="0"
                                            cellspacing="0"
                                            width="100%"
                                            style="
                                                margin-top: .5rem;
                                            "
                                        >

                                            <tbody>

                                                <tr>

                                                    <td
                                                        align="left"
                                                        width="100%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>

                                                            <span>

                                                                Kalau masih
                                                                bingung, kamu
                                                                bisa tunjukkan
                                                                E-tiket ini ke
                                                                petugas kami di
                                                                lokasi.

                                                            </span>

                                                        </p>

                                                    </td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </td>

                                </tr>


                                <!-- PENUTUP -->

                                <tr>

                                    <td align="left">

                                        <table
                                            align="center"
                                            cellpadding="0"
                                            cellspacing="0"
                                            width="100%"
                                            style="
                                                margin-top: .1rem;
                                            "
                                        >

                                            <tbody>

                                                <tr>

                                                    <td
                                                        align="left"
                                                        width="100%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>

                                                            <strong>
                                                                Rasakan
                                                                keceriaan tiada
                                                                habisnya di
                                                                Saloka.
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
             SYARAT & KETENTUAN
        ====================================================== -->

        <table
            align="center"
            cellpadding="0"
            cellspacing="0"
            width="100%"
            style="
                background-color: #FFFFFFFF;
                padding: 0rem 0rem;
                border-bottom: 2px dashed #ededed;
            "
        >

            <tbody>

                <tr>

                    <td
                        align="left"
                        valign="top"
                    >

                        <table
                            align="center"
                            cellpadding="0"
                            cellspacing="0"
                            width="100%"
                            style="
                                background-color: #FFFFFFFF;
                                padding: 1rem 2rem;
                            "
                        >

                            <tbody>


                                <!-- JUDUL -->

                                <tr>

                                    <td align="left">

                                        <p
                                            style="
                                                line-height: 1.5;
                                                font-size: 14px;
                                            "
                                        >

                                            <strong>
                                                Syarat & Ketentuan Kunjungan:
                                            </strong>

                                        </p>

                                    </td>

                                </tr>


                                <!-- SYARAT 1 -->

                                <tr>

                                    <td align="left">

                                        <table
                                            align="center"
                                            cellpadding="0"
                                            cellspacing="0"
                                            width="100%"
                                            style="
                                                margin-top: .5rem;
                                            "
                                        >

                                            <tbody>

                                                <tr>

                                                    <td
                                                        align="left"
                                                        width="3%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>
                                                            <span>
                                                                1.
                                                            </span>
                                                        </p>

                                                    </td>


                                                    <td
                                                        align="left"
                                                        width="97%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>

                                                            <span>

                                                                <strong>
                                                                    Tiket hanya
                                                                    berlaku di
                                                                    tanggal
                                                                    kunjungan
                                                                </strong>

                                                                yang telah
                                                                dipilih saat
                                                                reservasi.

                                                            </span>

                                                        </p>

                                                    </td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </td>

                                </tr>


                                <!-- SYARAT 2 -->

                                <tr>

                                    <td align="left">

                                        <table
                                            align="center"
                                            cellpadding="0"
                                            cellspacing="0"
                                            width="100%"
                                            style="
                                                margin-top: .2rem;
                                            "
                                        >

                                            <tbody>

                                                <tr>

                                                    <td
                                                        align="left"
                                                        width="3%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>
                                                            <span>
                                                                2.
                                                            </span>
                                                        </p>

                                                    </td>


                                                    <td
                                                        align="left"
                                                        width="97%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>

                                                            <span>

                                                                <strong>
                                                                    Tiket tidak
                                                                    dapat
                                                                    digunakan
                                                                    lebih dari
                                                                    1 kali
                                                                </strong>

                                                                atau di luar
                                                                tanggal
                                                                kunjungan.

                                                            </span>

                                                        </p>

                                                    </td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </td>

                                </tr>


                                <!-- SYARAT 3 -->

                                <tr>

                                    <td align="left">

                                        <table
                                            align="center"
                                            cellpadding="0"
                                            cellspacing="0"
                                            width="100%"
                                            style="
                                                margin-top: .2rem;
                                            "
                                        >

                                            <tbody>

                                                <tr>

                                                    <td
                                                        align="left"
                                                        width="3%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>
                                                            <span>
                                                                3.
                                                            </span>
                                                        </p>

                                                    </td>


                                                    <td
                                                        align="left"
                                                        width="97%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>

                                                            <span>

                                                                Pengunjung
                                                                wajib menjaga
                                                                ketertiban dan
                                                                kebersihan
                                                                selama berada
                                                                di area taman.

                                                            </span>

                                                        </p>

                                                    </td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </td>

                                </tr>


                                <!-- SYARAT 4 -->

                                <tr>

                                    <td align="left">

                                        <table
                                            align="center"
                                            cellpadding="0"
                                            cellspacing="0"
                                            width="100%"
                                            style="
                                                margin-top: .2rem;
                                            "
                                        >

                                            <tbody>

                                                <tr>

                                                    <td
                                                        align="left"
                                                        width="3%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>
                                                            <span>
                                                                4.
                                                            </span>
                                                        </p>

                                                    </td>


                                                    <td
                                                        align="left"
                                                        width="97%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>

                                                            <span>

                                                                Dilarang
                                                                membawa
                                                                makanan dan
                                                                minuman dari
                                                                luar ke dalam
                                                                area Saloka
                                                                Theme Park.

                                                            </span>

                                                        </p>

                                                    </td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </td>

                                </tr>


                                <!-- SYARAT 5 -->

                                <tr>

                                    <td align="left">

                                        <table
                                            align="center"
                                            cellpadding="0"
                                            cellspacing="0"
                                            width="100%"
                                            style="
                                                margin-top: .2rem;
                                            "
                                        >

                                            <tbody>

                                                <tr>

                                                    <td
                                                        align="left"
                                                        width="3%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>
                                                            <span>
                                                                5.
                                                            </span>
                                                        </p>

                                                    </td>


                                                    <td
                                                        align="left"
                                                        width="97%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>

                                                            <span>

                                                                Tiket yang
                                                                sudah dibeli

                                                                <strong>
                                                                    tidak dapat
                                                                    diuangkan
                                                                    kembali
                                                                </strong>.

                                                            </span>

                                                        </p>

                                                    </td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </td>

                                </tr>


                                <!-- SYARAT 6 -->

                                <tr>

                                    <td align="left">

                                        <table
                                            align="center"
                                            cellpadding="0"
                                            cellspacing="0"
                                            width="100%"
                                            style="
                                                margin-top: .2rem;
                                            "
                                        >

                                            <tbody>

                                                <tr>

                                                    <td
                                                        align="left"
                                                        width="3%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>
                                                            <span>
                                                                6.
                                                            </span>
                                                        </p>

                                                    </td>


                                                    <td
                                                        align="left"
                                                        width="97%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>

                                                            <span>

                                                                Batas penukaran
                                                                tiket dilayani
                                                                hingga 1 Jam
                                                                sebelum jam
                                                                Operasional
                                                                berakhir.

                                                            </span>

                                                        </p>

                                                    </td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </td>

                                </tr>


                                <!-- SYARAT 7 -->

                                <tr>

                                    <td align="left">

                                        <table
                                            align="center"
                                            cellpadding="0"
                                            cellspacing="0"
                                            width="100%"
                                            style="
                                                margin-top: .2rem;
                                            "
                                        >

                                            <tbody>

                                                <tr>

                                                    <td
                                                        align="left"
                                                        width="3%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>
                                                            <span>
                                                                7.
                                                            </span>
                                                        </p>

                                                    </td>


                                                    <td
                                                        align="left"
                                                        width="97%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>

                                                            <span>

                                                                Jam Operasional
                                                                Saloka :

                                                            </span>

                                                        </p>

                                                    </td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </td>

                                </tr>


                                <!-- JAM SENIN - KAMIS -->

                                <tr>

                                    <td align="left">

                                        <table
                                            align="center"
                                            cellpadding="0"
                                            cellspacing="0"
                                            width="100%"
                                            style="
                                                margin-top: .1rem;
                                                padding-left: 2rem;
                                            "
                                        >

                                            <tbody>

                                                <tr>

                                                    <td
                                                        align="left"
                                                        width="2%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>
                                                            <span>
                                                                •
                                                            </span>
                                                        </p>

                                                    </td>


                                                    <td
                                                        align="left"
                                                        width="98%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>

                                                            <span>
                                                                Senin - Kamis
                                                                10.00 - 18.00 WIB
                                                            </span>

                                                        </p>

                                                    </td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </td>

                                </tr>


                                <!-- JAM JUMAT -->

                                <tr>

                                    <td align="left">

                                        <table
                                            align="center"
                                            cellpadding="0"
                                            cellspacing="0"
                                            width="100%"
                                            style="
                                                margin-top: .1rem;
                                                padding-left: 2rem;
                                            "
                                        >

                                            <tbody>

                                                <tr>

                                                    <td
                                                        align="left"
                                                        width="2%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>
                                                            <span>
                                                                •
                                                            </span>
                                                        </p>

                                                    </td>


                                                    <td
                                                        align="left"
                                                        width="98%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>

                                                            <span>
                                                                Jum'at
                                                                12.00 - 19.00 WIB
                                                            </span>

                                                        </p>

                                                    </td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </td>

                                </tr>


                                <!-- JAM SABTU - MINGGU -->

                                <tr>

                                    <td align="left">

                                        <table
                                            align="center"
                                            cellpadding="0"
                                            cellspacing="0"
                                            width="100%"
                                            style="
                                                margin-top: .1rem;
                                                padding-left: 2rem;
                                            "
                                        >

                                            <tbody>

                                                <tr>

                                                    <td
                                                        align="left"
                                                        width="2%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>
                                                            <span>
                                                                •
                                                            </span>
                                                        </p>

                                                    </td>


                                                    <td
                                                        align="left"
                                                        width="98%"
                                                        style="
                                                            font-size: 12px;
                                                            line-height: 1.2;
                                                        "
                                                    >

                                                        <p>

                                                            <span>
                                                                Sabtu - Minggu
                                                                10.00 - 19.00 WIB
                                                            </span>

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


    </main>


</body>

</html>