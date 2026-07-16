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
              style="width: 40%;">
            <h4 style="line-height: 1.2; font-size: 18px">
              <strong>E-ticket</strong>
            </h4>
            <h6 style="line-height: 1.2; font-size: 14px">
              <strong>Lomba Tari Kreasi Saloka 2026</strong>
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
            <img src="{{ public_path('assets/images/logo_lomba_tari_2026_1.png') }}"
                 alt="Logo Lomba Tari"
                 width="140"
                 style="display:block; margin:auto;"
                 class="adapt-img">
          </td>

          <td align="center"
              style="width: 25%;">
            <img src="{{ public_path('assets/images/logosaloka.png') }}"
                 alt="Logo Saloka"
                 width="90"
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

                <!--- Item Produk Terbayar  -->
                @foreach ($ticket_orders as $ticket_order)
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
                                width="45%"
                                style="font-size: 12px; line-height: 1.2;">
                              <p>
                                <span>
                                  {{ $ticket_order['ticket_name'] }}
                                </span>
                              </p>
                            </td>
                            <td align="left"
                                class=""
                                width="15%"
                                style="font-size: 12px; line-height: 1.2;">
                              <p>
                                <span>{{ $ticket_order['quantity'] }} Pax</span>
                              </p>
                            </td>
                            <td align="left"
                                class=""
                                width="15%"
                                style="font-size: 12px; line-height: 1.2;">
                              <p>
                                <span>{{ 'Rp ' . number_format($ticket_order['price'], 0, ',', '.') }}</span>
                              </p>
                            </td>
                            <td align="right"
                                class=""
                                width="25%"
                                style="font-size: 12px; line-height: 1.2;">
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
                                Nama Group
                              </span>
                            </p>
                          </td>
                          <td align="left"
                              class=""
                              width="70%"
                              style="font-size: 12px; line-height: 1.2;">
                            <p>
                              <span>
                                {{ $group_name }}
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
                              width="30%"
                              style="font-size: 12px; line-height: 1.2;">
                            <p>
                              <span>
                                Sanggar/Sekolah
                              </span>
                            </p>
                          </td>
                          <td align="left"
                              class=""
                              width="70%"
                              style="font-size: 12px; line-height: 1.2;">
                            <p>
                              <span>
                                {{ $school_name }}
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
                <!-- Alamat Pemesan  -->
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
                                Alamat
                              </span>
                            </p>
                          </td>
                          <td align="left"
                              class=""
                              width="70%"
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
          style="background-color: transparent; padding: 0rem 0rem; border-bottom: 2px dashed #ededed;">
        <tbody>
            <tr>
                <td align="left" valign="top">
                    <table align="center"
                          cellpadding="0"
                          cellspacing="0"
                          width="100%"
                          style="background-color: transparent; padding: 1rem 2rem;">
                        <tbody>
                            <tr>
                                <td align="left">
                                    <p style="line-height:1.5; font-size:14px">
                                        <strong>Syarat & Ketentuan Lomba Tari Kreasi 2026:</strong>
                                    </p>
                                </td>
                            </tr>

                            <!-- 1 -->
                            <tr>
                                <td align="left" style="font-size:12px; line-height:1.5;">
                                    <p><strong>1.</strong> Terbuka untuk umum (Sanggar / PAUD-TK / SD / SMP / SMA / Universitas).</p>
                                </td>
                            </tr>

                            <!-- 2 -->
                            <tr>
                                <td align="left" style="font-size:12px; line-height:1.5;">
                                    <p><strong>2.</strong> Pendaftaran melalui website lombatari.salokapark.com dan kemudian melakukan pembayaran secara online dengan adanya batasan waktu pembayaran.</p>
                                </td>
                            </tr>

                            <!-- 3 -->
                            <tr>
                                <td align="left" style="font-size:12px; line-height:1.5;">
                                    <p><strong>3.</strong> Membawakan 1 (satu) Tari Kreasi dengan Tema Tari Kreasi Nusantara dengan durasi maksimal 8 (delapan) menit, serta diberikan waktu maksimal 2 (dua) menit untuk persiapan.</p>
                                </td>
                            </tr>

                            <!-- 4 -->
                            <tr>
                                <td align="left" style="font-size:12px; line-height:1.5;">
                                    <p><strong>4.</strong> Konsep tarian tidak mengandung unsur SARA.</p>
                                </td>
                            </tr>

                            <!-- 5 -->
                            <tr>
                                <td align="left" style="font-size:12px; line-height:1.5;">
                                    <p><strong>5.</strong> 1 (satu) grup terdiri atas maksimal 10 (sepuluh) orang yang terdiri atas 7–9 orang penari (pria/wanita) dan 1 (satu) orang official.</p>
                                </td>
                            </tr>

                            <!-- 6 -->
                            <tr>
                                <td align="left" style="font-size:12px; line-height:1.5;">
                                    <p><strong>6.</strong> Setiap kontingen boleh mengirimkan lebih dari 1 (satu) tim.</p>
                                </td>
                            </tr>

                            <!-- 7 -->
                            <tr>
                                <td align="left" style="font-size:12px; line-height:1.5;">
                                    <p><strong>7.</strong> Biaya pendaftaran Presale Rp250.000/team dan tiket pendamping Rp80.000/orang. Jumlah pendamping tidak terbatas (sudah termasuk tiket wahana Saloka).</p>
                                </td>
                            </tr>

                            <!-- 8 -->
                            <tr>
                                <td align="left" style="font-size:12px; line-height:1.5;">
                                    <p><strong>8.</strong> Biaya pendaftaran Regular Rp300.000/team dan tiket pendamping Rp100.000/orang. Jumlah pendamping tidak terbatas (sudah termasuk tiket wahana Saloka).</p>
                                </td>
                            </tr>

                            <!-- 9 -->
                            <tr>
                                <td align="left" style="font-size:12px; line-height:1.5;">
                                    <p><strong>9.</strong> Musik pengiring bebas (rekaman), dikirim dalam format MP3 melalui email atau Google Drive maksimal H-3 pelaksanaan serta melampirkan sumber musik.</p>
                                </td>
                            </tr>

                            <!-- 10 -->
                            <tr>
                                <td align="left" style="font-size:12px; line-height:1.5;">
                                    <p><strong>10.</strong> Registrasi peserta dimulai pukul 07.00–10.00 WIB di Sales Counter untuk mendapatkan nomor urut peserta, sertifikat peserta/grup (online), dan ID Card Official.</p>
                                </td>
                            </tr>

                            <!-- 11 -->
                            <tr>
                                <td align="left" style="font-size:12px; line-height:1.5;">
                                    <p><strong>11.</strong> Peserta harus standby 30 menit sebelum jadwal tampil di area lomba.</p>
                                </td>
                            </tr>

                            <!-- 12 -->
                            <tr>
                                <td align="left" style="font-size:12px; line-height:1.5;">
                                    <p><strong>12.</strong> Perwakilan tim wajib menghadiri Technical Meeting pada tanggal 19 Juli 2026 melalui Google Meet.</p>
                                </td>
                            </tr>

                            <!-- 13 -->
                            <tr>
                                <td align="left" style="font-size:12px; line-height:1.5;">
                                    <p><strong>13.</strong> Penilaian berdasarkan aspek Wirogo, Wiromo, Wiroso, dan Visual.</p>
                                </td>
                            </tr>

                            <!-- 14 -->
                            <tr>
                                <td align="left" style="font-size:12px; line-height:1.5;">
                                    <p><strong>14.</strong> Pendaftaran ditutup pada 13 Juli 2026 pukul 23.59 WIB atau saat kuota peserta telah terpenuhi.</p>
                                </td>
                            </tr>

                            <!-- 15 -->
                            <tr>
                                <td align="left" style="font-size:12px; line-height:1.5;">
                                    <p><strong>15.</strong> Panitia menyediakan tempat transit (touch up area) yang dapat digunakan bersama oleh seluruh peserta.</p>
                                </td>
                            </tr>

                            <!-- 16 -->
                            <tr>
                                <td align="left" style="font-size:12px; line-height:1.5;">
                                    <p><strong>16.</strong> Peserta diperkenankan menggunakan properti tari yang mendukung penampilan.</p>
                                </td>
                            </tr>

                            <!-- 17 -->
                            <tr>
                                <td align="left" style="font-size:12px; line-height:1.5;">
                                    <p><strong>17.</strong> Properti yang digunakan tidak diperkenankan mengotori panggung (misalnya flare, mercon, tepung, kelopak bunga, pasir, air, bubuk glitter, daun kering, confetti, balon helium, dan sejenisnya).</p>
                                </td>
                            </tr>

                            <!-- 18 -->
                            <tr>
                                <td align="left" style="font-size:12px; line-height:1.5;">
                                    <p><strong>18.</strong> Peserta dengan nomor undi 1–10 dihimbau sudah melakukan persiapan dari rumah (make up dan hairdo).</p>
                                </td>
                            </tr>

                            <!-- 19 -->
                            <tr>
                                <td align="left" style="font-size:12px; line-height:1.5;">
                                    <p><strong>19.</strong> Peserta tidak diperkenankan membawa makanan dan minuman dari luar Saloka.</p>
                                </td>
                            </tr>

                            <!-- 20 -->
                            <tr>
                                <td align="left" style="font-size:12px; line-height:1.5;">
                                    <p><strong>20.</strong> Peserta dihimbau untuk membawa tumbler atau botol minum sendiri.</p>
                                </td>
                            </tr>

                            <!-- 21 -->
                            <tr>
                                <td align="left" style="font-size:12px; line-height:1.5;">
                                    <p><strong>21.</strong> Peserta yang dipanggil sebanyak 3 (tiga) kali dan tidak hadir di tempat akan otomatis didiskualifikasi.</p>
                                </td>
                            </tr>

                            <!-- 22 -->
                            <tr>
                                <td align="left" style="font-size:12px; line-height:1.5;">
                                    <p><strong>22.</strong> Pengumuman juara dilakukan setelah Baruklinting Show pukul 18.00 WIB.</p>
                                </td>
                            </tr>

                            <!-- 23 -->
                            <tr>
                                <td align="left" style="font-size:12px; line-height:1.5;">
                                    <p><strong>23.</strong> Keputusan Dewan Juri bersifat mutlak dan tidak dapat diganggu gugat.</p>
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
