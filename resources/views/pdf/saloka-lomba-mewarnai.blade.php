<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible"
        content="ie=edge">
  <title>Reservasi Tiket Saloka Theme Park</title>
</head>
<style>
  @page {
    margin: 0cm;
  }

  body {
    font-family: "Poppins", sans-serif;
    margin: 0;
    padding: 0;

    background:
      linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)),
      url("{{ public_path('images/background_saloka.jpg') }}");

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
    <img src="{{ public_path('assets/images/footer_phrd.png') }}"
         alt="Footer Image">
  </div>
  <!--Detail Footer Section End -->

  <!--Header Section Start -->
  <div class="header">
    <table align="center"
           cellpadding="0"
           cellspacing="0"
           width="100%"
           style="background-color: white; padding: 1rem 2rem;">
      <tbody>
        <tr>
          <td align="left"
              style="width: 65%;">
            <h4 style="line-height: 1.2; font-size: 18px">
              <strong>E-ticket</strong>
            </h4>
            <h6 style="line-height: 1.2; font-size: 14px">
              <strong>Lomba Mewarnai Saloka 2026</strong>
            </h6>
            <h6 style="line-height: 1.2; font-size: 12px; color: #169870; font-weight: 400">
              <span>ID Pesanan:</span>
            </h6>
            <h6 style="line-height: 1.2; font-size: 12px; color: #169870; font-weight: 400">
              <strong>{{ $booking_code }}</strong>
            </h6>
          </td>

          <td align="center"  
              style="width: 35%;">
            <img src="{{ public_path('assets/images/logo_lomba_mewarnai_2026.png') }}"
                 alt="Logo Lomba Mewarnai"
                 width="140"
                 style="display:block; margin:auto;"
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
           class=""
           style="background-color: transparent; padding: 0.5rem 2rem;">
      <tbody style="background-color: transparent; padding-inline: 0rem; padding-block: 0rem">
        <tr>
          <td align="left"
              valign="top"
              style="border-right: 1px solid #ededed; padding-right: .5rem; padding-left: 0rem;">
            <p class="es-text-mobile-size-16"
               style="font-size: 14px; line-height: 1.2">
              <strong>Saloka Theme Park</strong>
            </p>
            <p class="es-text-mobile-size-14"
               style="font-size: 12px; line-height: 1.2; color: #999999;">
              <strong>
                Jl. Fatmawati No.154, Tuntang, Semarang, Jawa Tengah 50773
              </strong>
            </p>
          </td>
          <td align="left"
              valign="top"
              style="border-right: 1px solid #ededed; padding-right: 1rem; padding-left: 1rem;">
            <table align="center"
                   cellpadding="0"
                   cellspacing="0"
                   width="100%"
                   style="background-color: transparent;">
              <tbody>
                <tr>
                  <td align="left">
                    <div
                         style="display: flex; align-items: center; font-size: 12px; line-height: 1.2; white-space: nowrap;">
                      <img src="{{ public_path('assets/images/calender_png.png') }}"
                           alt="calendar"
                           width="16"
                           height="16"
                           style="margin-right: 6px; vertical-align: middle;">
                      <span style="vertical-align: middle; white-space: nowrap;">
                        Tgl Kedatangan: {{ $date_plan }}
                      </span>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td align="left"
                      style="padding-top: .5rem;">
                    <div
                         style="display: flex; align-items: center; font-size: 12px; line-height: 1.2; white-space: nowrap;">
                      <img src="{{ public_path('assets/images/ticket_png.jpg') }}"
                           alt="calendar"
                           width="20"
                           height="20"
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
          <td align="center"
              style="padding-right: 1rem; padding-left: 1rem;">
            <p style="color: #169870; font-size: 14px;">
              <strong>{{ $amount_total }} </strong>
            </p>
            <img src="data:image/png;base64, {!! base64_encode(
                QrCode::format('png')->size(132)->format('png')->merge(public_path('storage/avatar_loka_3d.png'), 0.25, true)->errorCorrection('Q')->color(0, 0, 0)->style('square')->eye('circle')->margin(3)->color(0, 0, 0)->eyeColor(0, 22, 152, 112, 22, 152, 112)->eyeColor(1, 22, 152, 112, 22, 152, 112)->eyeColor(2, 22, 152, 112, 22, 152, 112)->generate($booking_code),
            ) !!} "
                 style="margin: 0; padding: 0;"
                 width="132">
            <p>
              <strong style="font-size: 12px;">Kode Booking:</strong>
            </p>
            <h4 style="color: #169870; font-size: 20px;">
              <strong>{{ $booking_code }} </strong>
            </h4>
          </td>
        </tr>
      </tbody>
    </table>
    <!--Detail QR Code Kode Booking Section End -->

    <!--Detail Ringkasan Pemabyaran Section Start -->
    <table align="center"
           cellpadding="0"
           cellspacing="0"
           width="100%"
           class=""
           style="background-color: transparent; padding: 0rem 0rem; padding-top: 1rem; border-bottom: 2px dashed #ededed; border-top: 2px dashed #ededed">
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
                      <strong>Ringkasan Pembayaran</strong>
                    </p>
                  </td>
                </tr>

             <!--- Item Produk Terbayar -->
              @foreach ($ticket_orders as $ticket_order)
                  <tr>
                      <td align="left">
                          <table
                              align="center"
                              cellpadding="0"
                              cellspacing="0"
                              width="100%"
                              style="
                                  margin-top:.5rem;
                                  @if($ticket_order['is_meet_and_greet'] ?? false)
                                      background:#FFF9EA;
                                      border:2px solid #D4AF37;
                                      border-radius:12px;
                                      box-shadow:0 4px 12px rgba(212,175,55,.18);
                                  @endif
                              "
                          >
                              <tbody>
                                  <tr>
                                      <td
                                          align="left"
                                          width="45%"
                                          style="
                                              font-size:12px;
                                              line-height:1.5;
                                              padding:12px;
                                          "
                                      >
                                          <div
                                              style="
                                                  font-size:13px;
                                                  font-weight:bold;
                                                  color:#4B3600;
                                              "
                                          >
                                              {{ $ticket_order['ticket_name'] }}
                                          </div>

                                          @if($ticket_order['is_meet_and_greet'] ?? false)
                                              <div
                                                  style="
                                                      margin-top:8px;
                                                      display:inline-block;
                                                      padding:5px 14px;
                                                      background:#D4AF37;
                                                      border:1px solid #E7C75F;
                                                      border-radius:999px;
                                                      color:#FFFFFF;
                                                      font-size:9px;
                                                      font-weight:bold;
                                                      letter-spacing:1px;
                                                      text-transform:uppercase;
                                                  "
                                              >
                                                  Ticket Special
                                              </div>

                                              <div
                                                  style="
                                                      margin-top:8px;
                                                      padding:8px 10px;
                                                      background:#FFFDF7;
                                                      border-left:4px solid #D4AF37;
                                                      border-radius:6px;
                                                      color:#6B5200;
                                                      font-size:9px;
                                                      line-height:1.55;
                                                  "
                                              >
                                                  <strong>Selamat!</strong> Ananda terpilih
                                                  <strong>untuk menikmati pengalaman eksklusif</strong>.
                                                  <strong>Meet &amp; Greet bersama Loka &amp; Riri</strong>,
                                                  lengkap dengan sesi foto untuk mengabadikan
                                                  momen spesial yang tak terlupakan.
                                              </div>
                                          @endif
                                      </td>

                                      <td
                                          align="left"
                                          width="15%"
                                          style="
                                              font-size:12px;
                                              line-height:1.3;
                                              padding:12px 8px;
                                              @if($ticket_order['is_meet_and_greet'] ?? false)
                                                  color:#8A6A00;
                                                  font-weight:bold;
                                              @endif
                                          "
                                      >
                                          {{ $ticket_order['quantity'] }} Pax
                                      </td>

                                      <td
                                          align="left"
                                          width="15%"
                                          style="
                                              font-size:12px;
                                              line-height:1.3;
                                              padding:12px 8px;
                                              @if($ticket_order['is_meet_and_greet'] ?? false)
                                                  color:#8A6A00;
                                                  font-weight:bold;
                                              @endif
                                          "
                                      >
                                          {{ 'Rp ' . number_format($ticket_order['price'], 0, ',', '.') }}
                                      </td>

                                      <td
                                          align="right"
                                          width="25%"
                                          style="
                                              font-size:13px;
                                              line-height:1.3;
                                              padding:12px;
                                              font-weight:bold;
                                              @if($ticket_order['is_meet_and_greet'] ?? false)
                                                  color:#8A6A00;
                                              @endif
                                          "
                                      >
                                          {{ 'Rp ' . number_format($ticket_order['subtotal'], 0, ',', '.') }}
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
                    <table align="center"
                           cellpadding="0"
                           cellspacing="0"
                           width="100%"
                           style="margin-top: .3rem">
                      <tbody>
                        <tr>
                          <td align="left"
                              class=""
                              width="45%"
                              style="font-size: 12px; line-height: 1.2;">
                            <p>
                              <strong>
                                Total Terbayar
                              </strong>
                            </p>
                          </td>
                          <td align="left"
                              class=""
                              width="15%"
                              style="font-size: 12px; line-height: 1.2;">
                          </td>
                          <td align="left"
                              class=""
                              width="15%"
                              style="font-size: 12px; line-height: 1.2;">
                          </td>
                          <td align="right"
                              class=""
                              width="25%"
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
    <table align="center"
           cellpadding="0"
           cellspacing="0"
           width="100%"
           class=""
           style="background-color: transparent; padding: 0rem 0rem; border-bottom: 2px dashed #ededed;">
      <tbody style="background-color: transparent; padding-inline: 0rem; padding-block: 0rem">
        <tr>
          <!--Detail Detail Pemesan -->
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
                      <strong>Detail Pemesan</strong>
                    </p>
                  </td>
                </tr>
                <!-- Nama Pemesan  -->
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
                              width="30%"
                              style="font-size: 12px; line-height: 1.2;">
                            <p>
                              <span>
                                Nama
                              </span>
                            </p>
                          </td>
                          <td align="left"
                              class=""
                              width="70%"
                              style="font-size: 12px; line-height: 1.2;">
                            <p>
                              <span>
                                {{ $customer_name }}
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
                    <table align="center"
                           cellpadding="0"
                           cellspacing="0"
                           width="100%"
                           style="margin-top: .2rem">
                      <tbody>
                        <tr>
                          <td align="left"
                              class=""
                              width="30%"
                              style="font-size: 12px; line-height: 1.2;">
                            <p>
                              <span>
                                Email
                              </span>
                            </p>
                          </td>
                          <td align="left"
                              class=""
                              width="70%"
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
                    <table align="center"
                           cellpadding="0"
                           cellspacing="0"
                           width="100%"
                           style="margin-top: .2rem">
                      <tbody>
                        <tr>
                          <td align="left"
                              class=""
                              width="30%"
                              style="font-size: 12px; line-height: 1.2;">
                            <p>
                              <span>
                                Telpon
                              </span>
                            </p>
                          </td>
                          <td align="left"
                              class=""
                              width="70%"
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
              </tbody>
            </table>
          </td>
          <!-- Metode Pembayaran -->
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
                      <strong>Detail Pembayaran</strong>
                    </p>
                  </td>
                </tr>
                <!-- Metode Pembayaran -->
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
                              width="50%"
                              style="font-size: 12px; line-height: 1.2;">
                            <p>
                              <span>
                                Dibayarkan dengan
                              </span>
                            </p>
                          </td>
                          <td align="left"
                              class=""
                              width="50%"
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
                    <table align="center"
                           cellpadding="0"
                           cellspacing="0"
                           width="100%"
                           style="margin-top: .2rem">
                      <tbody>
                        <tr>
                          <td align="left"
                              class=""
                              width="50%"
                              style="font-size: 12px; line-height: 1.2;">
                            <p>
                              <span>
                                Berhasil dibayarkan
                              </span>
                            </p>
                          </td>
                          <td align="left"
                              class=""
                              width="50%"
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
                    <table align="center"
                           cellpadding="0"
                           cellspacing="0"
                           width="100%"
                           style="margin-top: .2rem">
                      <tbody>
                        <tr>
                          <td align="left"
                              class=""
                              width="50%"
                              style="font-size: 12px; line-height: 1.2;">
                            <p>
                              <span>
                                Jumlah dibayarkan
                              </span>
                            </p>
                          </td>
                          <td align="left"
                              class=""
                              width="50%"
                              style="font-size: 12px; line-height: 1.2;">
                            <p>
                              <strong>
                                {{ number_format($amount_total, 0, ',', '.') }}
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
    <table align="center"
           cellpadding="0"
           cellspacing="0"
           width="100%"
           class=""
           style="background-color: transparent; padding: 0rem 0rem; border-top: 2px dashed #ededed; border-bottom: 2px dashed #ededed;">
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
                                Cek kode booking kamu yang dikirim lewat Whatsapp.
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
                                tempat registrasI.
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
                                Setelah valid, kamu akan mendapatkan tiket fisik dan langsung bisa masuk untuk mengikuti
                                acara dan menikmati semua wahana sepuasnya!
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
          style="background-color:transparent;padding:0;border-bottom:2px dashed #ededed; padding-top:140px;">
        <tbody>
            <tr>
                <td align="left" valign="top">
                    <table align="center"
                          cellpadding="0"
                          cellspacing="0"
                          width="100%"
                          style="padding:1rem 2rem;">
                        <tbody>

                            <!-- Title -->
                            <tr>
                                <td align="left">
                                    <p style="font-size:14px;line-height:1.6;">
                                        <strong>Syarat & Ketentuan Lomba Menggambar & Mewarnai Loka & Riri 2026</strong>
                                    </p>
                                </td>
                            </tr>

                            <!-- ================= A ================= -->
                            <tr>
                                <td align="left">
                                    <p style="font-size:13px;line-height:1.6;margin-top:12px;">
                                        <strong>A. KETENTUAN UMUM</strong>
                                    </p>
                                </td>
                            </tr>

                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>1.</strong> Lomba Menggambar & Mewarnai Loka & Riri diselenggarakan oleh Saloka Theme Park bekerja sama dengan Educa Studio.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>2.</strong> Dengan melakukan pendaftaran, peserta dianggap telah membaca, memahami, dan menyetujui seluruh syarat dan ketentuan yang berlaku.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>3.</strong> Peserta wajib melakukan registrasi sesuai kategori usia yang ditentukan panitia.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>4.</strong> Data pendaftaran harus benar dan dapat dipertanggungjawabkan.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>5.</strong> Panitia berhak melakukan verifikasi data peserta apabila diperlukan.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>6.</strong> Akses wahana mengikuti ketentuan operasional, batas usia, tinggi badan, dan standar keselamatan yang berlaku di Saloka Theme Park.</p></td></tr>

                            <!-- ================= B ================= -->
                            <tr>
                                <td align="left">
                                    <p style="font-size:13px;line-height:1.6;margin-top:18px;">
                                        <strong>B. KATEGORI PESERTA</strong>
                                    </p>
                                </td>
                            </tr>

                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>1.</strong> Kategori A: KB – TK.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>2.</strong> Kategori B: SD Kelas 1 – 3.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>3.</strong> Kategori C: SD Kelas 4 – 6.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>4.</strong> Peserta wajib mengikuti kategori sesuai jenjang pendidikan yang sedang ditempuh.</p></td></tr>

                            <!-- ================= C ================= -->
                            <tr>
                                <td align="left">
                                    <p style="font-size:13px;line-height:1.6;margin-top:18px;">
                                        <strong>C. PENDAFTARAN & PEMBAYARAN</strong>
                                    </p>
                                </td>
                            </tr>

                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>1.</strong> Pendaftaran dilakukan melalui website resmi lombamewarnai.salokapark.com.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>2.</strong> Pendaftaran dinyatakan sah setelah pembayaran berhasil diverifikasi oleh sistem.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>3.</strong> Setiap peserta dan pendamping yang terdaftar akan mendapatkan tiket masuk dan akses bermain wahana sesuai ketentuan operasional Saloka Theme Park.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>4.</strong> E-ticket dikirim secara digital melalui WhatsApp atau kanal resmi Saloka.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>5.</strong> Voucher Riri Digital dikirim melalui WhatsApp resmi Saloka Theme Park setelah pembayaran berhasil diverifikasi.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>6.</strong> E-Sertifikat peserta dikirim melalui WhatsApp resmi Saloka Theme Park setelah pembayaran berhasil diverifikasi.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>7.</strong> Kuota peserta terbatas dan pendaftaran dapat ditutup sewaktu-waktu apabila kuota telah terpenuhi.</p></td></tr>

                            <!-- ================= D ================= -->
                            <tr>
                                <td align="left">
                                    <p style="font-size:13px;line-height:1.6;margin-top:18px;">
                                        <strong>D. PERUBAHAN DATA PESERTA</strong>
                                    </p>
                                </td>
                            </tr>

                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>1.</strong> Pergantian nama peserta diperbolehkan maksimal H-1 pelaksanaan acara.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>2.</strong> Pergantian peserta wajib berada pada kategori lomba yang sama.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>3.</strong> Perubahan data peserta harus disampaikan melalui kontak resmi panitia.</p></td></tr>

                            <!-- ================= E ================= -->
                            <tr>
                                <td align="left">
                                    <p style="font-size:13px;line-height:1.6;margin-top:18px;">
                                        <strong>E. PEMBATALAN & REFUND</strong>
                                    </p>
                                </td>
                            </tr>

                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>1.</strong> Biaya pendaftaran yang telah dibayarkan tidak dapat dikembalikan (non-refundable).</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>2.</strong> Peserta yang berhalangan hadir dapat mengalihkan kepesertaannya kepada peserta lain sesuai kategori.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>3.</strong> Pengalihan peserta hanya dapat dilakukan maksimal H-1 pelaksanaan acara.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>4.</strong> Refund hanya berlaku apabila acara dibatalkan oleh penyelenggara.</p></td></tr>

                            <!-- ================= F ================= -->
                            <tr>
                                <td align="left">
                                    <p style="font-size:13px;line-height:1.6;margin-top:18px;padding-top:190px;">
                                        <strong>F. PELAKSANAAN LOMBA</strong>
                                    </p>
                                </td>
                            </tr>

                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>1.</strong> Registrasi ulang peserta dimulai pukul 07.00 WIB.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>2.</strong> Peserta wajib hadir sesuai jadwal yang ditentukan panitia.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>3.</strong> Peserta wajib hadir paling lambat 30 menit sebelum perlombaan dimulai.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>4.</strong> Panitia tidak menyediakan alat mewarnai. Peserta wajib membawa perlengkapan sendiri.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>5.</strong> Peserta tidak diperkenankan meminjam atau meminjamkan alat menggambar dan mewarnai.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>6.</strong> Alat yang diperbolehkan: Crayon, Pensil Warna, dan Spidol.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>7.</strong> Kertas lomba ukuran A3 disediakan oleh panitia.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>8.</strong> Peserta diperbolehkan menambahkan objek gambar sesuai kreativitas.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>9.</strong> Orang tua atau pendamping tidak diperkenankan memasuki area lomba selama perlombaan berlangsung.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>10.</strong> Peserta dan pendamping tidak diperkenankan membawa makanan dan minuman dari luar Saloka Theme Park.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>11.</strong> Peserta dan pendamping dihimbau membawa tumbler atau botol minum pribadi.</p></td></tr>

                            <!-- ================= G ================= -->
                            <tr>
                                <td align="left">
                                    <p style="font-size:13px;line-height:1.6;margin-top:18px;">
                                        <strong>G. PENJURIAN</strong>
                                    </p>
                                </td>
                            </tr>

                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>Kriteria Penilaian:</strong></p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p>• Harmoni & Komposisi Warna</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p>• Motorik, Kecermatan & Ketelitian</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p>• Kerapihan & Kebersihan</p></td></tr>

                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>Ketentuan:</strong></p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>1.</strong> Penilaian dilakukan oleh dewan juri yang ditunjuk panitia.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>2.</strong> Keputusan dewan juri bersifat mutlak, final, dan tidak dapat diganggu gugat.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>3.</strong> Panitia tidak melayani keberatan atau banding atas hasil penilaian.</p></td></tr>

                            <!-- ================= H ================= -->
                            <tr>
                                <td align="left">
                                    <p style="font-size:13px;line-height:1.6;margin-top:18px;">
                                        <strong>H. MEET & GREET LOKA & RIRI</strong>
                                    </p>
                                </td>
                            </tr>

                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>1.</strong> Meet & Greet merupakan benefit tambahan bagi peserta yang terpilih melalui Lucky Draw.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>2.</strong> Meet & Greet tidak dipungut biaya tambahan.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>3.</strong> Total peserta Meet & Greet yang dipilih adalah 90 peserta (30 peserta setiap kategori).</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>4.</strong> Keputusan sistem Lucky Draw bersifat final dan tidak dapat diganggu gugat.</p></td></tr>

                            <!-- ================= I ================= -->
                            <tr>
                                <td align="left">
                                    <p style="font-size:13px;line-height:1.6;margin-top:18px;">
                                        <strong>I. DOKUMENTASI & PUBLIKASI</strong>
                                    </p>
                                </td>
                            </tr>

                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>1.</strong> Panitia berhak mengambil foto dan video selama acara berlangsung.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>2.</strong> Dokumentasi dapat digunakan untuk kebutuhan promosi, publikasi, dan media sosial Saloka Theme Park maupun Educa Studio tanpa kompensasi tambahan.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>3.</strong> Dengan mengikuti acara, peserta dan pendamping menyetujui penggunaan dokumentasi tersebut.</p></td></tr>

                            <!-- ================= J ================= -->
                            <tr>
                                <td align="left">
                                    <p style="font-size:13px;line-height:1.6;margin-top:18px;">
                                        <strong>J. KETENTUAN LAIN</strong>
                                    </p>
                                </td>
                            </tr>

                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>1.</strong> Panitia berhak mengubah jadwal, susunan acara, atau ketentuan teknis apabila diperlukan demi kelancaran acara.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>2.</strong> Panitia berhak mendiskualifikasi peserta yang melanggar peraturan.</p></td></tr>
                            <tr><td style="font-size:12px;line-height:1.6;"><p><strong>3.</strong> Keputusan panitia terkait pelaksanaan acara bersifat final.</p></td></tr>

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
