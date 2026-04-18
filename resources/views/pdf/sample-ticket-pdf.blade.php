<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservasi Tiket Saloka Theme Park</title>
</head>
<style>
    @page {
        margin: 0cm;
    }

    /* open-sauce-one-300 latin */
    @font-face {
        font-family: "Open Sauce One";
        font-style: normal;
        font-weight: 300;
        src: local("Open Sauce One Light"), local("Open Sauce One Light"),
            url("/assets/fonts/open-sauce-one/webfonts/open-sauce-one-latin-300-normal.woff") format("woff"),
            url("/assets/fonts/open-sauce-one/webfonts/open-sauce-one-latin-300-normal.woff2") format("woff2"),
            url("/assets/fonts/open-sauce-one/ttf/open-sauce-one-latin-300-normal.ttf") format("truetype");
    }

    /* open-sauce-one-400 latin */
    @font-face {
        font-family: "Open Sauce One";
        font-style: normal;
        font-weight: 400;
        src: local("Open Sauce One Reguler"), local("Open Sauce One Reguler"),
            url("/assets/fonts/open-sauce-one/webfonts/open-sauce-one-latin-400-normal.woff") format("woff"),
            url("/assets/fonts/open-sauce-one/webfonts/open-sauce-one-latin-400-normal.woff2") format("woff2"),
            url("/assets/fonts/open-sauce-one/ttf/open-sauce-one-latin-400-normal.ttf") format("truetype");
    }

    /* open-sauce-one-500 latin */
    @font-face {
        font-family: "Open Sauce One";
        font-style: normal;
        font-weight: 500;
        src: local("Open Sauce One Medium"), local("Open Sauce One Medium"),
            url("/assets/fonts/open-sauce-one/webfonts/open-sauce-one-latin-500-normal.woff") format("woff"),
            url("/assets/fonts/open-sauce-one/webfonts/open-sauce-one-latin-500-normal.woff2") format("woff2"),
            url("/assets/fonts/open-sauce-one/ttf/open-sauce-one-latin-500-normal.ttf") format("truetype");
    }

    /* open-sauce-one-600 latin */
    @font-face {
        font-family: "Open Sauce One";
        font-style: normal;
        font-weight: 600;
        src: local("Open Sauce One SemiBold"), local("Open Sauce One SemiBold"),
            url("/assets/fonts/open-sauce-one/webfonts/open-sauce-one-latin-600-normal.woff") format("woff"),
            url("/assets/fonts/open-sauce-one/webfonts/open-sauce-one-latin-600-normal.woff2") format("woff2"),
            url("/assets/fonts/open-sauce-one/ttf/open-sauce-one-latin-600-normal.ttf") format("truetype");
    }

    /* open-sauce-one-700 latin */
    @font-face {
        font-family: "Open Sauce One";
        font-style: normal;
        font-weight: 700;
        src: local("Open Sauce One Bold"), local("Open Sauce One Bold"),
            url("/assets/fonts/open-sauce-one/webfonts/open-sauce-one-latin-700-normal.woff") format("woff"),
            url("/assets/fonts/open-sauce-one/webfonts/open-sauce-one-latin-700-normal.woff2") format("woff2"),
            url("/assets/fonts/open-sauce-one/ttf/open-sauce-one-latin-700-normal.ttf") format("truetype");
    }

    /* open-sauce-one-800 latin */
    @font-face {
        font-family: "Open Sauce One";
        font-style: normal;
        font-weight: 800;
        src: local("Open Sauce One ExtraBold"), local("Open Sauce One ExtraBold"),
            url("/assets/fonts/open-sauce-one/webfonts/open-sauce-one-latin-800-normal.woff") format("woff"),
            url("/assets/fonts/open-sauce-one/webfonts/open-sauce-one-latin-800-normal.woff2") format("woff2"),
            url("/assets/fonts/open-sauce-one/ttf/open-sauce-one-latin-800-normal.ttf") format("truetype");
    }

    body {
        font-family: 'Open Sauce One', sans-serif;
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
                            <strong>Reservasi Saloka Theme Park</strong>
                        </h6>
                        <h6 style="line-height: 1.2; font-size: 14px; color: #169870; font-weight: 400">
                            <span>Order ID:</span><strong> 1238483</strong>
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
    <main
        style="width: 100%; margin: 0; padding: 0; padding-inline: 0; padding-block: 0; margin-top: 8rem; background-color: #FFFFFFFF;">
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
                        <p class="" style="font-size: 12px; line-height: 1.2">
                            Reservasi Reguler Ticket - Weekend
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
                                                Tgl Kedatangan: 21 Apr 2025
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
                                                Qty Ticket: 8 Pax
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td align="center" style="padding-right: 1rem; padding-left: 1rem;">
                        <p style="color: #169870; font-size: 14px;">
                            <strong>IDR 300.000</strong>
                        </p>
                        <img src="data:image/png;base64, {!! base64_encode(
                            QrCode::format('png')->size(132)->format('png')->merge(public_path('storage/avatar_loka_3d.png'), 0.25, true)->errorCorrection('Q')->color(0, 0, 0)->style('square')->eye('circle')->margin(3)->color(0, 0, 0)->eyeColor(0, 22, 152, 112, 22, 152, 112)->eyeColor(1, 22, 152, 112, 22, 152, 112)->eyeColor(2, 22, 152, 112, 22, 152, 112)->generate('202504202134706'),
                        ) !!} " style="margin: 0; padding: 0;"
                            width="132">
                        <p>
                            <strong style="font-size: 12px;">Kode Booking:</strong>
                        </p>
                        <h4 style="color: #169870; font-size: 20px;">
                            <strong>202504202134706</strong>
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
                                <tr>
                                    <td align="left">
                                        <table align="center" cellpadding="0" cellspacing="0" width="100%"
                                            style="margin-top: .5rem">
                                            <tbody>
                                                <tr>
                                                    <td align="left" class="" width="45%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                Reservasi Reguler Ticket - Weekend
                                                            </span>
                                                        </p>
                                                    </td>
                                                    <td align="left" class="" width="15%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>8 Pax</span>
                                                        </p>
                                                    </td>
                                                    <td align="left" class="" width="15%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>Rp 120.000</span>
                                                        </p>
                                                    </td>
                                                    <td align="right" class="" width="25%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>Rp 960.000</span>
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
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
                                                            <strong>Rp 960.000</strong>
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
                                            <strong>Detail Pemesan</strong>
                                        </p>
                                    </td>
                                </tr>
                                <!-- Nama Pemesan  -->
                                <tr>
                                    <td align="left">
                                        <table align="center" cellpadding="0" cellspacing="0" width="100%"
                                            style="margin-top: .5rem">
                                            <tbody>
                                                <tr>
                                                    <td align="left" class="" width="20%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                Nama
                                                            </span>
                                                        </p>
                                                    </td>
                                                    <td align="left" class="" width="80%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                Agnes Cherrly
                                                            </span>
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <!-- Email Pemesan  -->
                                <tr>
                                    <td align="left">
                                        <table align="center" cellpadding="0" cellspacing="0" width="100%"
                                            style="margin-top: .2rem">
                                            <tbody>
                                                <tr>
                                                    <td align="left" class="" width="20%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                Email
                                                            </span>
                                                        </p>
                                                    </td>
                                                    <td align="left" class="" width="80%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                agnescherrlysairondi@gmail.com
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
                                                    <td align="left" class="" width="20%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                Telpon
                                                            </span>
                                                        </p>
                                                    </td>
                                                    <td align="left" class="" width="80%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                01326010378
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
                                                    <td align="left" class="" width="20%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                Alamat
                                                            </span>
                                                        </p>
                                                    </td>
                                                    <td align="left" class="" width="80%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                Salatiga, Jawa Tengah
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
                                                                BRI Virtual Account
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
                                                                2025-04-20 12:11:39
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
                                                                Rp 960.000
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
        <table align="center" cellpadding="0" cellspacing="0" width="100%" class=""
            style="background-color: #FFFFFFFF; padding: 0rem 0rem; border-top: 2px dashed #ededed; border-bottom: 2px dashed #ededed;">
            <tbody style="background-color: #FFFFFFFF; padding-inline: 0rem; padding-block: 0rem">
                <tr>
                    <td align="left" valign="top">
                        <table align="center" cellpadding="0" cellspacing="0" width="100%"
                            style="background-color: #FFFFFFFF; padding: 1rem 2rem;">
                            <tbody>
                                <!-- Cara Print Kode Booking Start -->
                                <tr>
                                    <td align="left">
                                        <p style="line-height:1.5; font-size: 14px">
                                            <strong>
                                                Penting! Begini Cara Gunakan Kode Booking Saloka Kamu
                                            </strong>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">
                                        <table align="center" cellpadding="0" cellspacing="0" width="100%"
                                            style="margin-top: .5rem">
                                            <tbody>
                                                <tr>
                                                    <td align="left" class="" width="100%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                Kamu tidak perlu mencetak e-ticketnya
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
                                                    <td align="left" class="" width="100%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                Cukup tunjukkan Kode Booking kamu saat sampai di Saloka
                                                                Theme Park
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
                                                    <td align="left" class="" width="100%"
                                                        style="font-size: 14px; line-height: 1.2;">
                                                        <p>
                                                            <strong>
                                                                Berikut langkah mudahnya:
                                                            </strong>
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
                                                            <span>
                                                                Cek kode booking kamu yang dikirim lewat email atau
                                                                Whatsapp.
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
                                                                Tunjukkan <strong>Kode Booking (12 digit angka
                                                                    hijau)</strong> saat di
                                                                loket penukaran tiket.
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
                                                                3.
                                                            </span>
                                                        </p>
                                                    </td>
                                                    <td align="left" class="" width="97%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                Tim kami akan scan & verifikasi.
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
                                                                4.
                                                            </span>
                                                        </p>
                                                    </td>
                                                    <td align="left" class="" width="97%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                Setelah valid, kamu akan mendapatkan tiket fisik dan
                                                                langsung bisa masuk untuk nikmati semua wahana
                                                                sepuasnya!
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
                                                    <td align="left" class="" width="100%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                Kalau masih bingung, kamu bisa tunjukkan E-tiket ini ke
                                                                petugas kami di lokasi.
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
                                            style="margin-top: .1rem">
                                            <tbody>
                                                <tr>
                                                    <td align="left" class="" width="100%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <strong>
                                                                Rasakan keceriaan tiada habisnya di Saloka.
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
        <!--Cara Print Kode Booking Section End -->

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
                                            <strong>Syarat & Ketentuan Kunjungan:</strong>
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
                                                            <span>
                                                                <strong>Tiket hanya berlaku di tanggal
                                                                    kunjungan</strong> yang telah dipilih saat
                                                                reservasi.
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
                                                                <strong>Tiket tidak dapat digunakan lebih dari 1
                                                                    kali</strong> atau di luar tanggal kunjungan.
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
                                                                3.
                                                            </span>
                                                        </p>
                                                    </td>
                                                    <td align="left" class="" width="97%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                Pengunjung wajib menjaga ketertiban dan kebersihan
                                                                selama berada di area taman.
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
                                                                4.
                                                            </span>
                                                        </p>
                                                    </td>
                                                    <td align="left" class="" width="97%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                Dilarang membawa makanan dan minuman dari luar ke dalam
                                                                area Saloka Theme Park.
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
                                                                5.
                                                            </span>
                                                        </p>
                                                    </td>
                                                    <td align="left" class="" width="97%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                Tiket yang sudah dibeli <strong>tidak dapat diuangkan
                                                                    kembali</strong>.
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
                                                                6.
                                                            </span>
                                                        </p>
                                                    </td>
                                                    <td align="left" class="" width="97%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                Batas penukaran tiket dilayani hingga 1 Jam sebelum jam
                                                                Operasional berakhir.
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
                                                                7.
                                                            </span>
                                                        </p>
                                                    </td>
                                                    <td align="left" class="" width="97%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                Jam Operasional Saloka :
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
                                            style="margin-top: .2rem; padding-left: 2rem">
                                            <tbody>
                                                <tr>
                                                    <td align="left" class="" width="2%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                •
                                                            </span>
                                                        </p>
                                                    </td>
                                                    <td align="left" class="" width="98%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                Senin - Kamis 10.00 - 18.00 WIB
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
                                            style="margin-top: .2rem; padding-left: 2rem">
                                            <tbody>
                                                <tr>
                                                    <td align="left" class="" width="2%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                •
                                                            </span>
                                                        </p>
                                                    </td>
                                                    <td align="left" class="" width="98%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                Jum'at 12.00 - 19.00 WIB
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
                                            style="margin-top: .2rem; padding-left: 2rem">
                                            <tbody>
                                                <tr>
                                                    <td align="left" class="" width="2%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                •
                                                            </span>
                                                        </p>
                                                    </td>
                                                    <td align="left" class="" width="98%"
                                                        style="font-size: 12px; line-height: 1.2;">
                                                        <p>
                                                            <span>
                                                                Sabtu - Minggu 10.00 - 19.00 WIB
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
        <!--Detail Syarat & Ketentuan Section End -->
    </main>
    <!-- Syart & Ketentuan Section End -->
</body>

</html>
