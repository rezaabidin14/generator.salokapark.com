<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible"
        content="ie=edge">
  <title>E-Ticket Saloka Fest</title>
</head>
<style>
  @page {
    margin: 0cm;
  }

  body {
    font-family: "Poppins", sans-serif;
    margin: 0;
    padding: 0;

    background-image: url("{{ public_path('images/background_saloka.jpg') }}");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
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
    <img src="{{ public_path('assets/images/footer_pdf.png') }}"
         alt="Footer Image">
  </div>
  <!--Detail Footer Section End -->

  <!--Header Section Start -->
  <div class="header">
    <table align="center"
           cellpadding="0"
           cellspacing="0"
           width="100%"
           class=""
           style="background-color: #eefbf5; padding: 1rem 2rem;">
      <tbody style="background-color: #eefbf5; padding-inline: 0rem; padding-block: 0rem">
        <tr>
          <td align="left">
            <h4 style="line-height: 1.2; font-size: 20px">
              <strong>E-Ticket</strong>
            </h4>
            <h6 style="line-height: 1.2; font-size: 14px; color: #169870; font-weight: 400">
              <strong> {{ $order_id }} </strong>
            </h6>
          </td>
          <td align="right">
            <img src="{{ public_path('assets/images/Saloka_Logo_Black.png') }}"
                 alt=""
                 width="100"
                 class="adapt-img">
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <!--Header Section End -->

  <!--Detail Tiket Section Start -->
  <main
        style="width: 100%; margin: 0; padding: 0; padding-inline: 0; padding-block: 0;  margin-top: 8rem; background-color: transparent;">
    <!--Detail QR Code Kode Booking Section Start -->
    <table align="center"
           cellpadding="0"
           cellspacing="0"
           width="100%"
           style="background-color: transparent; padding: 0.5rem 2rem">
      <tr>

        <!-- LEFT: QR ONLY -->
        <td align="center"
            valign="top"
            width="40%"
            style="padding-right: 1rem;">

          <img src="data:image/png;base64,{!! base64_encode(
              QrCode::format('png')->size(200)->merge(public_path('storage/avatar_loka_3d.png'), 0.25, true)->errorCorrection('Q')->margin(3)->generate($booking_code),
          ) !!}"
               width="200"
               style="display:block; margin-bottom:8px;">

          <h4 style="color: #169870; font-size: 20px; margin:4px 0;">
            <strong>{{ $booking_code }}</strong>
          </h4>

        </td>

        <!-- RIGHT: TEXT + LOCATION -->
        <td align="left"
            valign="top"
            width="60%"
            style="padding-left: 1rem; border-left: 1px dashed #505050;">

          <!-- INFO TEXT -->
          <table cellpadding="0"
                 cellspacing="0"
                 width="100%">
            <tr>
              <td valign="top"
                  width="20">
                <img src="{{ public_path('icons/calendar.png') }}"
                     width="16"
                     style="display:block;">
              </td>
              <td style="font-size: 12px; padding-bottom: 8px;">
                Silakan aktivasi Membership Edu Pride Sobat Loka sebelum
                <strong>30 Agustus 2026</strong>.
              </td>
            </tr>

            <tr>
              <td valign="top">
                <img src="{{ public_path('icons/clock.png') }}"
                     width="16"
                     style="display:block;">
              </td>
              <td style="font-size: 12px;">
                Membership Edu Pride yang telah diaktifasi dapat digunakan hingga
                <strong>1 Mei 2027</strong>.
              </td>
            </tr>
          </table>

          <!-- SPACING -->
          <div style="height:12px;"></div>

          <!-- LOCATION -->
          <table cellpadding="0"
                 cellspacing="0"
                 width="100%">
            <tr>
              <td valign="top"
                  width="20">
                <img src="{{ public_path('icons/location.png') }}"
                     width="16"
                     style="display:block;">
              </td>
              <td>
                <p style="font-size: 14px; margin:0;">
                  <strong>Saloka Theme Park</strong>
                </p>
                <p style="font-size: 12px; color: #999999; margin:0;">
                  <strong>
                    Jl. Fatmawati No.154, Tuntang, Semarang, Jawa Tengah 50773
                  </strong>
                </p>
              </td>
            </tr>
          </table>

        </td>

      </tr>
    </table>
    <!--Detail QR Code Kode Booking Section End -->

    <!--Detail Ringkasan Pemabyaran Section Start -->
    <table align="center"
           cellpadding="0"
           cellspacing="0"
           width="100%"
           style="border-top:1px dashed #505050; border-bottom:1px dashed #505050; padding:8px 0; font-family:Arial, sans-serif;">

      <tr>
        <td style="padding:10px 20px;">

          <!-- Title -->
          {{-- <p style="font-size:14px; margin:0 0 10px 0;">
            <strong>Detail Transaksi</strong>
          </p> --}}

          <!-- Main Table -->
          <table width="100%"
                 cellpadding="0"
                 cellspacing="0"
                 style="border-collapse:collapse; font-size:12px;">

            <!-- Header -->
            <tr>
              <th align="left"
                  style="padding:6px 0;">Tiket</th>
              <th align="center"
                  style="padding:6px 0;">Qty</th>
              <th align="right"
                  style="padding:6px 0;">Harga</th>
              <th align="right"
                  style="padding:6px 0;">Subtotal</th>
            </tr>

            <!-- Items -->
            @foreach ($ticket_orders as $ticket_order)
              <tr>
                <td style="padding:8px 0;">
                  {{ $ticket_order['ticket_name'] }}
                </td>
                <td align="center">
                  {{ $ticket_order['quantity'] }}
                </td>
                <td align="right">
                  {{ 'Rp ' . number_format($ticket_order['price'], 0, ',', '.') }}
                </td>
                <td align="right">
                  {{ 'Rp ' . number_format($ticket_order['subtotal'], 0, ',', '.') }}
                </td>
              </tr>
            @endforeach

            <!-- Spacer -->
            <tr>
              <td colspan="4"
                  style="padding:6px 0;"></td>
            </tr>

            <!-- Total -->
            <tr>
              <td colspan="3"
                  style="padding:10px 0;">
                <strong>Total Terbayar</strong>
              </td>
              <td align="right"
                  style="padding:10px 0;">
                <strong style="font-size:14px;">
                  {{ 'Rp ' . number_format($amount_total, 0, ',', '.') }}
                </strong>
              </td>
            </tr>

          </table>

        </td>
      </tr>
    </table>
    <!--Detail Ringkasan Pemabyaran Section End -->

    <!--Detail Detail Pemesan & Metode Pembayaran Section Start -->
    <table align="center"
           cellpadding="0"
           cellspacing="0"
           width="100%"
           style="border-bottom:1px dashed #505050; table-layout:fixed; font-family:Arial, sans-serif;">

      <tr>

        <!-- LEFT -->
        <td valign="top"
            width="65%"
            style="padding:16px 20px;">

          <p style="font-size:14px; margin:0 0 12px 0;">
            <strong>Data Pelanggan</strong>
          </p>

          <table width="100%"
                 cellpadding="0"
                 cellspacing="0"
                 style="font-size:12px; border-collapse:collapse;">

            <tr>
              <td width="95"
                  style="padding:6px 0; color:#666;">Nama</td>
              <td width="10"
                  style="padding:6px 0;">:</td>
              <td style="padding:6px 0; word-break:break-word;">
                {{ $customer_name }}
              </td>
            </tr>

            <tr>
              <td style="padding:6px 0; color:#666;">Telepon</td>
              <td style="padding:6px 0;">:</td>
              <td style="padding:6px 0; word-break:break-word;">
                {{ $customer_phone }}
              </td>
            </tr>

            <tr>
              <td style="padding:6px 0; color:#666;">Alamat</td>
              <td style="padding:6px 0;">:</td>
              <td style="padding:6px 0; word-break:break-word;">
                {{ $customer_city }} , {{ $customer_province }}
              </td>
            </tr>

          </table>
        </td>

        <!-- RIGHT -->
        <td valign="top"
            width="35%"
            style="padding:16px 20px;">

          <p style="font-size:14px; margin:0 0 12px 0;">
            <strong>Informasi Transaksi</strong>
          </p>

          <table width="100%"
                 cellpadding="0"
                 cellspacing="0"
                 style="font-size:12px; border-collapse:collapse;">

            <tr>
              <td width="120"
                  style="padding:6px 0; color:#666;">
                Waktu Pemesanan
              </td>
            </tr>

            <tr>
              <td style="padding:6px 0 10px 0;">
                <strong>{{ $registration_date }}</strong>
              </td>
            </tr>

            <tr style="border-top:1px solid #f0f0f0;">
              <td style="padding:6px 0; color:#666;">
                Metode Pembayaran
              </td>
            </tr>

            <tr>
              <td style="padding:6px 0;">
                <strong>{{ $payment_method }}</strong>
              </td>
            </tr>

          </table>

        </td>

      </tr>
    </table>
    <!--Detail Detail Pemesan & Metode Pembayaran Section End -->
  </main>
  <!--Detail Tiket Section End -->

  <div class="page-break"></div>

  <!-- Syart & Ketentuan Section Start -->
  <main style="width: 100%; margin: 0; padding: 0; padding-inline: 0; padding-block: 0; margin-top: 8rem;">
    <!--Cara Print Kode Booking Section Start -->
    <table align="center"
           cellpadding="0"
           cellspacing="0"
           width="100%"
           class=""
           style="background-color: transparent; padding: 0rem 0rem; border-top: 1px dashed #505050; border-bottom: 1px dashed #505050;">
      <tbody style="background-color: transparent; padding-inline: 0rem; padding-block: 0rem">
        <tr>
          <td align="left"
              valign="top">
            <table align="center"
                   cellpadding="0"
                   cellspacing="0"
                   width="100%"
                   style="background-color: transparent; padding: 1rem 2rem;">
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
                    <table align="center"
                           cellpadding="0"
                           cellspacing="0"
                           width="100%"
                           style="margin-top: .5rem">
                      <tbody>
                        <tr>
                          <td align="left"
                              class=""
                              width="100%"
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
                    <table align="center"
                           cellpadding="0"
                           cellspacing="0"
                           width="100%"
                           style="margin-top: .2rem">
                      <tbody>
                        <tr>
                          <td align="left"
                              class=""
                              width="100%"
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
                    <table align="center"
                           cellpadding="0"
                           cellspacing="0"
                           width="100%"
                           style="margin-top: .5rem">
                      <tbody>
                        <tr>
                          <td align="left"
                              class=""
                              width="100%"
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
                    <table align="center"
                           cellpadding="0"
                           cellspacing="0"
                           width="100%"
                           style="margin-top: .5rem">
                      <tbody>
                        <tr>
                          <td align="left"
                              class=""
                              width="3%"
                              style="font-size: 12px; line-height: 1.2;">
                            <p>
                              <span>
                                1.
                              </span>
                            </p>
                          </td>
                          <td align="left"
                              class=""
                              width="97%"
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
                    <table align="center"
                           cellpadding="0"
                           cellspacing="0"
                           width="100%"
                           style="margin-top: .2rem">
                      <tbody>
                        <tr>
                          <td align="left"
                              class=""
                              width="3%"
                              style="font-size: 12px; line-height: 1.2;">
                            <p>
                              <span>
                                2.
                              </span>
                            </p>
                          </td>
                          <td align="left"
                              class=""
                              width="97%"
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
                    <table align="center"
                           cellpadding="0"
                           cellspacing="0"
                           width="100%"
                           style="margin-top: .2rem">
                      <tbody>
                        <tr>
                          <td align="left"
                              class=""
                              width="3%"
                              style="font-size: 12px; line-height: 1.2;">
                            <p>
                              <span>
                                3.
                              </span>
                            </p>
                          </td>
                          <td align="left"
                              class=""
                              width="97%"
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
                    <table align="center"
                           cellpadding="0"
                           cellspacing="0"
                           width="100%"
                           style="margin-top: .2rem">
                      <tbody>
                        <tr>
                          <td align="left"
                              class=""
                              width="3%"
                              style="font-size: 12px; line-height: 1.2;">
                            <p>
                              <span>
                                4.
                              </span>
                            </p>
                          </td>
                          <td align="left"
                              class=""
                              width="97%"
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
                    <table align="center"
                           cellpadding="0"
                           cellspacing="0"
                           width="100%"
                           style="margin-top: .5rem">
                      <tbody>
                        <tr>
                          <td align="left"
                              class=""
                              width="100%"
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
                    <table align="center"
                           cellpadding="0"
                           cellspacing="0"
                           width="100%"
                           style="margin-top: .1rem">
                      <tbody>
                        <tr>
                          <td align="left"
                              class=""
                              width="100%"
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
    <table align="center"
           cellpadding="0"
           cellspacing="0"
           width="100%"
           class=""
           style="background-color: transparent; padding: 0rem 0rem; border-bottom: 1px dashed #505050;">
      <tbody style="background-color: transparent; padding-inline: 0rem; padding-block: 0rem">
        <tr>
          <td align="left"
              valign="top">
            <table align="center"
                   cellpadding="0"
                   cellspacing="0"
                   width="100%"
                   style="background-color: transparent; padding: 1rem 2rem;">
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
                    <table align="center"
                           cellpadding="0"
                           cellspacing="0"
                           width="100%"
                           style="margin-top: .5rem">
                      <tbody>
                        <tr>
                          <td align="left"
                              class=""
                              width="3%"
                              style="font-size: 12px; line-height: 1.2;">
                            <p>
                              <span>
                                1.
                              </span>
                            </p>
                          </td>
                          <td align="left"
                              class=""
                              width="97%"
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
                    <table align="center"
                           cellpadding="0"
                           cellspacing="0"
                           width="100%"
                           style="margin-top: .2rem">
                      <tbody>
                        <tr>
                          <td align="left"
                              class=""
                              width="3%"
                              style="font-size: 12px; line-height: 1.2;">
                            <p>
                              <span>
                                2.
                              </span>
                            </p>
                          </td>
                          <td align="left"
                              class=""
                              width="97%"
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
                    <table align="center"
                           cellpadding="0"
                           cellspacing="0"
                           width="100%"
                           style="margin-top: .2rem">
                      <tbody>
                        <tr>
                          <td align="left"
                              class=""
                              width="3%"
                              style="font-size: 12px; line-height: 1.2;">
                            <p>
                              <span>
                                3.
                              </span>
                            </p>
                          </td>
                          <td align="left"
                              class=""
                              width="97%"
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
                    <table align="center"
                           cellpadding="0"
                           cellspacing="0"
                           width="100%"
                           style="margin-top: .2rem">
                      <tbody>
                        <tr>
                          <td align="left"
                              class=""
                              width="3%"
                              style="font-size: 12px; line-height: 1.2;">
                            <p>
                              <span>
                                4.
                              </span>
                            </p>
                          </td>
                          <td align="left"
                              class=""
                              width="97%"
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
                    <table align="center"
                           cellpadding="0"
                           cellspacing="0"
                           width="100%"
                           style="margin-top: .2rem">
                      <tbody>
                        <tr>
                          <td align="left"
                              class=""
                              width="3%"
                              style="font-size: 12px; line-height: 1.2;">
                            <p>
                              <span>
                                5.
                              </span>
                            </p>
                          </td>
                          <td align="left"
                              class=""
                              width="97%"
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
                    <table align="center"
                           cellpadding="0"
                           cellspacing="0"
                           width="100%"
                           style="margin-top: .2rem">
                      <tbody>
                        <tr>
                          <td align="left"
                              class=""
                              width="3%"
                              style="font-size: 12px; line-height: 1.2;">
                            <p>
                              <span>
                                6.
                              </span>
                            </p>
                          </td>
                          <td align="left"
                              class=""
                              width="97%"
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
                    <table align="center"
                           cellpadding="0"
                           cellspacing="0"
                           width="100%"
                           style="margin-top: .2rem">
                      <tbody>
                        <tr>
                          <td align="left"
                              class=""
                              width="3%"
                              style="font-size: 12px; line-height: 1.2;">
                            <p>
                              <span>
                                7.
                              </span>
                            </p>
                          </td>
                          <td align="left"
                              class=""
                              width="97%"
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
                    <table align="center"
                           cellpadding="0"
                           cellspacing="0"
                           width="100%"
                           style="margin-top: .2rem; padding-left: 2rem">
                      <tbody>
                        <tr>
                          <td align="left"
                              class=""
                              width="2%"
                              style="font-size: 12px; line-height: 1.2;">
                            <p>
                              <span>
                                •
                              </span>
                            </p>
                          </td>
                          <td align="left"
                              class=""
                              width="98%"
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
                    <table align="center"
                           cellpadding="0"
                           cellspacing="0"
                           width="100%"
                           style="margin-top: .2rem; padding-left: 2rem">
                      <tbody>
                        <tr>
                          <td align="left"
                              class=""
                              width="2%"
                              style="font-size: 12px; line-height: 1.2;">
                            <p>
                              <span>
                                •
                              </span>
                            </p>
                          </td>
                          <td align="left"
                              class=""
                              width="98%"
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
                    <table align="center"
                           cellpadding="0"
                           cellspacing="0"
                           width="100%"
                           style="margin-top: .2rem; padding-left: 2rem">
                      <tbody>
                        <tr>
                          <td align="left"
                              class=""
                              width="2%"
                              style="font-size: 12px; line-height: 1.2;">
                            <p>
                              <span>
                                •
                              </span>
                            </p>
                          </td>
                          <td align="left"
                              class=""
                              width="98%"
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
