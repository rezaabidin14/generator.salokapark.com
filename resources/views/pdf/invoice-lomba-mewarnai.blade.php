<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> -->
    <title>Reservasi Tiket Saloka Theme Park</title>
</head>
<style>
    @page {
        margin: 0cm;
    }

    /* 
    .poppins-thin {
    font-family: "Poppins", sans-serif;
    font-weight: 100;
    font-style: normal;
    }

    .poppins-extralight {
    font-family: "Poppins", sans-serif;
    font-weight: 200;
    font-style: normal;
    }

    .poppins-light {
    font-family: "Poppins", sans-serif;
    font-weight: 300;
    font-style: normal;
    }

    .poppins-regular {
    font-family: "Poppins", sans-serif;
    font-weight: 400;
    font-style: normal;
    }

    .poppins-medium {
    font-family: "Poppins", sans-serif;
    font-weight: 500;
    font-style: normal;
    }

    .poppins-semibold {
    font-family: "Poppins", sans-serif;
    font-weight: 600;
    font-style: normal;
    }

    .poppins-bold {
    font-family: "Poppins", sans-serif;
    font-weight: 700;
    font-style: normal;
    }

    .poppins-extrabold {
    font-family: "Poppins", sans-serif;
    font-weight: 800;
    font-style: normal;
    }

    .poppins-black {
    font-family: "Poppins", sans-serif;
    font-weight: 900;
    font-style: normal;
    }

    .poppins-thin-italic {
    font-family: "Poppins", sans-serif;
    font-weight: 100;
    font-style: italic;
    }

    .poppins-extralight-italic {
    font-family: "Poppins", sans-serif;
    font-weight: 200;
    font-style: italic;
    }

    .poppins-light-italic {
    font-family: "Poppins", sans-serif;
    font-weight: 300;
    font-style: italic;
    }

    .poppins-regular-italic {
    font-family: "Poppins", sans-serif;
    font-weight: 400;
    font-style: italic;
    }

    .poppins-medium-italic {
    font-family: "Poppins", sans-serif;
    font-weight: 500;
    font-style: italic;
    }

    .poppins-semibold-italic {
    font-family: "Poppins", sans-serif;
    font-weight: 600;
    font-style: italic;
    }

    .poppins-bold-italic {
    font-family: "Poppins", sans-serif;
    font-weight: 700;
    font-style: italic;
    }

    .poppins-extrabold-italic {
    font-family: "Poppins", sans-serif;
    font-weight: 800;
    font-style: italic;
    }

    .poppins-black-italic {
    font-family: "Poppins", sans-serif;
    font-weight: 900;
    font-style: italic;
    } */


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
    <!--Detail Footer Section Start -->
    <div class="footer">
        <img src="{{ public_path('assets/images/footer_pdf.png') }}" alt="Footer Image">
    </div>
    <!--Detail Footer Section End -->

    <!--Header Section Start -->
    <div class="header">
        <table align="center" cellpadding="0" cellspacing="0" width="100%" class=""
            style="background-color: #FFFFFFFF; padding: 1rem 2rem;">
            <tbody style="background-color: #FFFFFFFF; padding-inline: 0rem; padding-block: 0rem">
                <tr>
                    <td align="left">
                        <h4 style="line-height: 1.2; font-size: 20px">
                            <strong>E-ticket</strong>
                        </h4>
                        <h6 style="line-height: 1.2; font-size: 16px">
                            <strong>Lomba Mewarnai Saloka Theme Park</strong>
                        </h6>
                        <h6 style="line-height: 1.2; font-size: 14px; color: #169870; font-weight: 400">
                            <span>ID Pesanan:</span><strong> {{ $order_id }} </strong> 
                        </h6>  
                    </td> 
                    <td align="right">
                        <img src="{{ public_path('assets/images/logosaloka.png') }}" alt="" width="100"
                            class="adapt-img">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!--Header Section End --> 

    <!--Detail Tiket Section Start -->
    <main style="width: 100%; margin: 0; padding: 0; padding-inline: 0; padding-block: 0;  margin-top: 8rem; background-color: #FFFFFFFF;">
        <!--Detail QR Code Kode Booking Section Start -->
        <table align="center" cellpadding="0" cellspacing="0" width="100%" class=""
            style="background-color: #FFFFFFFF; padding: 0.5rem 2rem;">
            <tbody style="background-color: #FFFFFFFF; padding-inline: 0rem; padding-block: 0rem">
                <tr>
                    <td align="left" valign="top"
                        style="border-right: 1px solid #ededed; padding-right: .5rem; padding-left: 0rem;">
                        <p class="es-text-mobile-size-16" style="font-size: 14px; line-height: 1.2">
                            <strong>Saloka Theme Park</strong>
                        </p>
                        <p class="es-text-mobile-size-14" style="font-size: 12px; line-height: 1.2; color: #999999;">
                            <strong>
                                Jl. Fatmawati No.154, Tuntang, Semarang, Jawa Tengah 50773
                            </strong>
                        </p>
                    </td>
                    <td align="left" valign="top"
                        style="border-right: 1px solid #ededed; padding-right: 1rem; padding-left: 1rem;">
                        <table align="center" cellpadding="0" cellspacing="0" width="100%"
                            style="background-color: #ffffff;">
                            <tbody>
                                <tr>
                                    <td align="left">
                                        <div
                                            style="display: flex; align-items: center; font-size: 12px; line-height: 1.2; white-space: nowrap;">
                                            <img src="{{ public_path('assets/images/calender_png.png') }}"
                                                alt="calendar" width="16" height="16"
                                                style="margin-right: 6px; vertical-align: middle;">
                                            <span style="vertical-align: middle; white-space: nowrap;">
                                                Tgl Kedatangan: {{$date_plan}}
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" style="padding-top: .5rem;">
                                        <div
                                            style="display: flex; align-items: center; font-size: 12px; line-height: 1.2; white-space: nowrap;">
                                            <img src="{{ public_path('assets/images/ticket_png.jpg') }}" alt="calendar"
                                                width="20" height="20"
                                                style="margin-right: 6px; vertical-align: middle;">
                                            <span style="vertical-align: middle;">
                                                Qty Ticket: {{ $total_ticket }} Pax
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td align="center" style="padding-right: 1rem; padding-left: 1rem;">
                        <img src="data:image/png;base64, {!! base64_encode(
                            QrCode::format('png')
                                ->size(132)
                                ->merge(public_path('storage/avatar_loka_3d.png'), 0.25, true)
                                ->errorCorrection('Q')
                                ->color(0, 0, 0)
                                ->style('square')
                                ->eye('circle')
                                ->margin(3)
                                ->eyeColor(0, 22, 152, 112, 22, 152, 112)
                                ->eyeColor(1, 22, 152, 112, 22, 152, 112)
                                ->eyeColor(2, 22, 152, 112, 22, 152, 112)
                                ->generate($booking_code) // ← Ini bagian penting!
                        ) !!} " style="margin: 0; padding: 0;" width="132">
                        
                        <p>
                            <strong style="font-size: 12px;">Kode Booking:</strong>
                        </p>
                        <h4 style="color: #169870; font-size: 20px;">
                            <strong>{{ $booking_code }}</strong>
                        </h4>
                    </td>
                </tr>
            </tbody>
        </table>
        <!--Detail QR Code Kode Booking Section End -->

        <!--Detail Ringkasan Pemabyaran Section Start -->
        <table align="center" cellpadding="0" cellspacing="0" width="100%" class=""
            style="background-color: #FFFFFFFF; padding: 0rem 0rem; padding-top: 1rem; border-bottom: 2px dashed #ededed; border-top: 2px dashed #ededed">
            <tbody style="background-color: #FFFFFFFF; padding-inline: 0rem; padding-block: 0rem">
                <tr>
                    <td align="left" valign="top">
                        <table align="center" cellpadding="0" cellspacing="0" width="100%"
                            style="background-color: #FFFFFFFF; padding: 1rem 2rem;">
                            <tbody>
                                <tr>
                                    <td align="left">
                                        <p style="line-height:1.5; font-size: 14px">
                                            <strong>Ringkasan Pembayaran</strong>
                                        </p>
                                    </td>
                                </tr>

                                <!--- Item Produk Terbayar  -->
                                @foreach ($ticket_orders as $ticket_order)
                                <tr>
                                    <td align="left">
                                        <table align="center" cellpadding="0" cellspacing="0" width="100%" style="margin-top: .5rem">
                                            <tbody>
                                                <tr>
                                                    <td align="left" class="" width="45%" style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                            {{ $ticket_order['ticket_name'] }}
                                                            </span>
                                                        </p>
                                                    </td>
                                                    <td align="left" class="" width="15%" style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>{{ $ticket_order['quantity'] }} Pax</span>
                                                        </p>
                                                    </td>
                                                    <td align="left" class="" width="15%" style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>{{ 'Rp ' . number_format($ticket_order['price'], 0, ',', '.') }}</span>
                                                        </p>
                                                    </td>
                                                    <td align="right" class="" width="25%" style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>{{ 'Rp ' . number_format($ticket_order['subtotal'], 0, ',', '.') }}</span>
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                @endforeach

                                <!--- Total Terbayar  -->
                                <tr>
                                    <td align="left">
                                        <table align="center" cellpadding="0" cellspacing="0" width="100%"
                                            style="margin-top: .3rem">
                                            <tbody>
                                                <tr>
                                                    <td align="left" class="" width="45%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <strong>
                                                                Total Terbayar
                                                            </strong>
                                                        </p>
                                                    </td>
                                                    <td align="left" class="" width="15%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                    </td>
                                                    <td align="left" class="" width="15%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                    </td>
                                                    <td align="right" class="" width="25%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <strong>{{ 'Rp ' . number_format($amount_total, 0, ',', '.') }}</strong>
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
        <!--Detail Ringkasan Pemabyaran Section End -->

        <!--Detail Detail Pemesan & Metode Pembayaran Section Start -->
        <table align="center" cellpadding="0" cellspacing="0" width="100%" class=""
            style="background-color: #FFFFFFFF; padding: 0rem 0rem; border-bottom: 2px dashed #ededed;">
            <tbody style="background-color: #FFFFFFFF; padding-inline: 0rem; padding-block: 0rem">
                <tr>
                    <!--Detail Detail Pemesan -->
                    <td align="left" valign="top">
                        <table align="center" cellpadding="0" cellspacing="0" width="100%"
                            style="background-color: #FFFFFFFF; padding: 1rem 2rem;">
                            <tbody>
                                <tr>
                                    <td align="left">
                                        <p style="line-height:1.5; font-size: 14px">
                                            <strong>Detail Peserta</strong>
                                        </p>
                                    </td>
                                </tr>
                                <!-- Nama Pemesan  -->

                                <tr>
                                    <td align="left">
                                        <table align="center" cellpadding="0" cellspacing="0" width="100%" style="margin-top: .5rem">
                                            <tbody>
                                                <tr>
                                                    <td align="left" width="40%" style="font-size: 12px; line-height: 1.2; vertical-align: top;">
                                                        <p><span>Peserta</span></p>
                                                    </td>
                                                    <td align="left" width="60%" style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                        @if ($customer_name == '-')
                                                            @foreach ($participants as $participant)
                                                                @if ($participant['ticketName'] != "Pendamping")
                                                                    - {{ $participant['name'] }} {{ $participant['ticketName'] ?? '-' }} <br>
                                                                @endif
                                                            @endforeach
                                                        @else
                                                            - {{ $customer_name }}
                                                        @endif

                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>

                                <tr>
                                    <td align="left">
                                        <table align="center" cellpadding="0" cellspacing="0" width="100%"
                                            style="margin-top: .5rem">
                                            <tbody>
                                                <tr>
                                                    <td align="left" class="" width="40%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                Pendamping
                                                            </span>
                                                        </p>
                                                    </td>
                                                    <td align="left" class="" width="60%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                               {{ $companion_name }}
                                                            </span>
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>

                                @if ($customer_name != '-')                                                           
                                <tr>
                                    <td align="left">
                                        <table align="center" cellpadding="0" cellspacing="0" width="100%"
                                            style="margin-top: .5rem">
                                            <tbody>
                                                <tr>
                                                    <td align="left" class="" width="40%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                Kelas
                                                            </span>
                                                        </p>
                                                    </td>
                                                    <td align="left" class="" width="60%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                               {{ $class }}
                                                            </span>
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">
                                        <table align="center" cellpadding="0" cellspacing="0" width="100%"
                                            style="margin-top: .5rem">
                                            <tbody>
                                                <tr>
                                                    <td align="left" class="" width="40%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                Sekolah
                                                            </span>
                                                        </p>
                                                    </td>
                                                    <td align="left" class="" width="60%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                               {{ $school }}
                                                            </span>
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                @endif
                                <!-- Email Pemesan  -->
                                <tr>
                                    <td align="left">
                                        <table align="center" cellpadding="0" cellspacing="0" width="100%"
                                            style="margin-top: .2rem">
                                            <tbody>
                                                <tr>
                                                    <td align="left" class="" width="40%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                Email
                                                            </span>
                                                        </p>
                                                    </td>
                                                    <td align="left" class="" width="60%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                {{ $customer_email }}
                                                            </span>
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <!-- Nomor Telpon Pemesan  -->
                                <tr>
                                    <td align="left">
                                        <table align="center" cellpadding="0" cellspacing="0" width="100%"
                                            style="margin-top: .2rem">
                                            <tbody>
                                                <tr>
                                                    <td align="left" class="" width="40%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                Telpon
                                                            </span>
                                                        </p>
                                                    </td>
                                                    <td align="left" class="" width="60%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                {{ $customer_phone }}
                                                            </span>
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <!-- Alamat Pemesan  -->
                                <tr>
                                    <td align="left">
                                        <table align="center" cellpadding="0" cellspacing="0" width="100%"
                                            style="margin-top: .2rem">
                                            <tbody>
                                                <tr>
                                                    <td align="left" class="" width="40%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                Alamat
                                                            </span>
                                                        </p>
                                                    </td>
                                                    <td align="left" class="" width="60%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                {{ $customer_city }} , {{ $customer_province }}
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
                    <!-- Metode Pembayaran -->
                    <td align="left" valign="top">
                        <table align="center" cellpadding="0" cellspacing="0" width="100%"
                            style="background-color: #FFFFFFFF; padding: 1rem 2rem;">
                            <tbody>
                                <tr>
                                    <td align="left">
                                        <p style="line-height:1.5; font-size: 14px">
                                            <strong>Detail Pembayaran</strong>
                                        </p>
                                    </td>
                                </tr>
                                <!-- Metode Pembayaran -->
                                <tr>
                                    <td align="left">
                                        <table align="center" cellpadding="0" cellspacing="0" width="100%"
                                            style="margin-top: .5rem">
                                            <tbody>
                                                <tr>
                                                    <td align="left" class="" width="50%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                Dibayarkan dengan
                                                            </span>
                                                        </p>
                                                    </td>
                                                    <td align="left" class="" width="50%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                               {{ $payment_method }}
                                                            </span>
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <!-- Tanggal Pembayaran -->
                                <tr>
                                    <td align="left">
                                        <table align="center" cellpadding="0" cellspacing="0" width="100%"
                                            style="margin-top: .2rem">
                                            <tbody>
                                                <tr>
                                                    <td align="left" class="" width="50%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                Berhasil dibayarkan
                                                            </span>
                                                        </p>
                                                    </td>
                                                    <td align="left" class="" width="50%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                {{ $payment_date }}
                                                            </span>
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <!-- Jumlah Dibayarkan -->
                                <tr>
                                    <td align="left">
                                        <table align="center" cellpadding="0" cellspacing="0" width="100%"
                                            style="margin-top: .2rem">
                                            <tbody>
                                                <tr>
                                                    <td align="left" class="" width="50%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                Jumlah dibayarkan
                                                            </span>
                                                        </p>
                                                    </td>
                                                    <td align="left" class="" width="50%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <strong>
                                                                {{  number_format($amount_total, 0, ',', '.') }}
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
        <!--Detail Detail Pemesan & Metode Pembayaran Section End -->
    </main>
    <!--Detail Tiket Section End -->

    <div class="page-break"></div>

    <!-- Syart & Ketentuan Section Start -->
    <main style="width: 100%; margin: 0; padding: 0; padding-inline: 0; padding-block: 0; margin-top: 8rem;">
        <!--Cara Print Kode Booking Section Start -->

        <!--Detail Syarat & Ketentuan Section Start -->
        <table align="center" cellpadding="0" cellspacing="0" width="100%" class=""
            style="background-color: #FFFFFFFF; padding: 0rem 0rem; border-bottom: 2px dashed #ededed;">
            <tbody style="background-color: #FFFFFFFF; padding-inline: 0rem; padding-block: 0rem">
                <tr>
                    <td align="left" valign="top">
                        <table align="center" cellpadding="0" cellspacing="0" width="100%"
                            style="background-color: #FFFFFFFF; padding: 1rem 2rem;">
                            <tbody>
                                <tr>
                                    <td align="left">
                                        <p style="line-height:1.5; font-size: 14px">
                                            <strong>Syarat & Ketentuan Lomba Mewarnai:</strong>
                                        </p>
                                    </td>
                                </tr>
                                <!-- Item SnK -->
                                <tr>
                                    <td align="left">
                                        <table align="center" cellpadding="0" cellspacing="0" width="100%"
                                            style="margin-top: .5rem">
                                            <tbody>
                                                <tr>
                                                    <td align="left" class="" width="3%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                1.
                                                            </span>
                                                        </p>
                                                    </td>
                                                    <td align="left" class="" width="97%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>PESERTA ADALAH SISWA <strong>PAUD/TK/SD</strong> 
                                                            </span>
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">
                                        <table align="center" cellpadding="0" cellspacing="0" width="100%"
                                            style="margin-top: .2rem">
                                            <tbody>
                                                <tr>
                                                    <td align="left" class="" width="3%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                2.
                                                            </span>
                                                        </p>
                                                    </td>
                                                    <td align="left" class="" width="97%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                              <strong>CRAYON DAN MEJA LIPAT ATAU PAPAN</strong> UNTUK ALAS MEWARNAI.   
                                                            </span>
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <!-- Item 1 -->
                                <tr>
                                    <td align="left">
                                        <table align="center" cellpadding="0" cellspacing="0" width="100%" style="margin-top: .5rem">
                                            <tbody>
                                                <tr>
                                                    <td width="3%" style="font-size: 12px; line-height: 1.2;">
                                                        <p><span>3.</span></p>
                                                    </td>
                                                    <td width="97%" style="font-size: 12px; line-height: 1.2;">
                                                        <p>WAKTU LOMBA SELAMA <strong>120 MENIT</strong>.</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>

                                <tr>
                                    <td align="left">
                                        <table align="center" cellpadding="0" cellspacing="0" width="100%" style="margin-top: .5rem">
                                            <tbody>
                                                <tr>
                                                    <td width="3%" style="font-size: 12px; line-height: 1.2;">
                                                        <p><span>4.</span></p>
                                                    </td>
                                                    <td width="97%" style="font-size: 12px; line-height: 1.2;">
                                                        <p>PESERTA DIPERBOLEHKAN MENAMBAH OBJEK GAMBAR <strong>(TIDAK ADA BATASAN DALAM JUMLAH OBJEK)</strong>.</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>


                                <!-- Item 2 -->
                                <tr>
                                    <td align="left">
                                        <table align="center" cellpadding="0" cellspacing="0" width="100%" style="margin-top: .2rem">
                                            <tbody>
                                                <tr>
                                                    <td width="3%" style="font-size: 12px; line-height: 1.2;">
                                                        <p><span>5.</span></p>
                                                    </td>
                                                    <td width="97%" style="font-size: 12px; line-height: 1.2;">
                                                        <p>PESERTA HADIR DI LOKASI LOMBA <strong>MAKSIMAL 30 MENIT SEBELUM PERLOMBAAN DIMULAI</strong>.</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>

                                <!-- Item 3 -->
                                <tr>
                                    <td align="left">
                                        <table align="center" cellpadding="0" cellspacing="0" width="100%" style="margin-top: .2rem">
                                            <tbody>
                                                <tr>
                                                    <td width="3%" style="font-size: 12px; line-height: 1.2;">
                                                        <p><span>6.</span></p>
                                                    </td>
                                                    <td width="97%" style="font-size: 12px; line-height: 1.2;">
                                                        <p>TIDAK DIPERKENANKAN PINJAM MEMINJAM ALAT MEWARNAI DENGAN PESERTA LAIN.</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>

                                <!-- Item 4 -->
                                <tr>
                                    <td align="left">
                                        <table align="center" cellpadding="0" cellspacing="0" width="100%" style="margin-top: .2rem">
                                            <tbody>
                                                <tr>
                                                    <td width="3%" style="font-size: 12px; line-height: 1.2;">
                                                        <p><span>7.</span></p>
                                                    </td>
                                                    <td width="97%" style="font-size: 12px; line-height: 1.2;">
                                                        <p>TIDAK DIPERKENANKAN MENDAPATKAN BANTUAN SAAT LOMBA BERLANGSUNG.</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>

                                <!-- Item 5 -->
                                <tr>
                                    <td align="left">
                                        <table align="center" cellpadding="0" cellspacing="0" width="100%" style="margin-top: .2rem">
                                            <tbody>
                                                <tr>
                                                    <td width="3%" style="font-size: 12px; line-height: 1.2;">
                                                        <p><span>8.</span></p>
                                                    </td>
                                                    <td width="97%" style="font-size: 12px; line-height: 1.2;">
                                                        <p>ORANG TUA <strong>TIDAK DIPERKENANKAN MEMASUKI AREA LOMBA</strong>.</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>

                                <!-- Item 6 -->
                                <tr>
                                    <td align="left">
                                        <table align="center" cellpadding="0" cellspacing="0" width="100%" style="margin-top: .2rem">
                                            <tbody>
                                                <tr>
                                                    <td width="3%" style="font-size: 12px; line-height: 1.2;">
                                                        <p><span>9.</span></p>
                                                    </td>
                                                    <td width="97%" style="font-size: 12px; line-height: 1.2;">
                                                        <p>SETIAP PESERTA DAN PENDAMPING SUDAH MENDAPATKAN TIKET LOMBA DAN TERUSAN WAHANA.</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>

                                <!-- Item 7 -->
                                <tr>
                                    <td align="left">
                                        <table align="center" cellpadding="0" cellspacing="0" width="100%" style="margin-top: .2rem">
                                            <tbody>
                                                <tr>
                                                    <td width="3%" style="font-size: 12px; line-height: 1.2;">
                                                        <p><span>10.</span></p>
                                                    </td>
                                                    <td width="97%" style="font-size: 12px; line-height: 1.2;">
                                                        <p><strong>SEGALA BENTUK KECURANGAN TIDAK DAPAT DITOLERANSI</strong>.</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>

                                <!-- Judul Penilaian -->
                                <tr>
                                    <td align="left" style="padding-top: 1rem;">
                                        <p style="line-height:1.5; font-size: 14px">
                                            <strong>Kriteria Penilaian:</strong>
                                        </p>
                                    </td>
                                </tr>

                                <!-- Penilaian 1 -->
                                <tr>
                                    <td align="left">
                                        <table align="center" cellpadding="0" cellspacing="0" width="100%" style="margin-top: .3rem">
                                            <tbody>
                                                <tr>
                                                    <td width="3%" style="font-size: 12px;"><p><span>-</span></p></td>
                                                    <td width="97%" style="font-size: 12px;">
                                                        <p>HARMONI / KOMPOSISI WARNA</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>

                                <!-- Penilaian 2 -->
                                <tr>
                                    <td align="left">
                                        <table align="center" cellpadding="0" cellspacing="0" width="100%">
                                            <tbody>
                                                <tr>
                                                    <td width="3%" style="font-size: 12px;"><p><span>-</span></p></td>
                                                    <td width="97%" style="font-size: 12px;">
                                                        <p>MOTORIK / KECERMATAN / KETELITIAN</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>

                                <!-- Penilaian 3 -->
                                <tr>
                                    <td align="left">
                                        <table align="center" cellpadding="0" cellspacing="0" width="100%">
                                            <tbody>
                                                <tr>
                                                    <td width="3%" style="font-size: 12px;"><p><span>-</span></p></td>
                                                    <td width="97%" style="font-size: 12px;">
                                                        <p>KERAPIHAN / KEBERSIHAN</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>

                                <!-- Keputusan Juri -->
                                <tr>
                                    <td align="left" style="padding-top: .3rem;">
                                        <p style="font-size: 12px;">
                                            <strong>KEPUTUSAN DEWAN JURI BERSIFAT MUTLAK DAN TIDAK DAPAT DIGANGGU GUGAT.</strong>
                                        </p>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!--Detail Syarat & Ketentuan Section End -->
    </main>
    <!-- Syart & Ketentuan Section End -->
</body>

</html>
