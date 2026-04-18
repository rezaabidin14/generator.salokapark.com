<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible"
        content="ie=edge">
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
          style="background-color: #FFFFFF; border-bottom: 2px dashed #ededed; margin-bottom: 2rem;">
      <tr>

        <!-- LEFT -->
        <td align="left"
            style="padding: 1rem 2rem;">
            
          <img src="{{ public_path('assets/images/logoedupride.png') }}"
              width="120"
              style="display:block; margin-bottom:8px;">

          <h6 style="line-height: 1.2; font-size: 16px; margin:0;">
            <strong>Membership Edu Pride Saloka</strong>
          </h6>
        </td>

        <!-- RIGHT -->
        <td align="right"
            style="padding: 1rem 2rem;">
            
          <img src="{{ public_path('assets/images/logosaloka.png') }}"
              width="120"
              style="display:block;">
        </td>

      </tr>
    </table>
  </div>
  <!--Header Section End -->

  <!--Detail Tiket Section Start -->
  <main
        style="width: 100%; margin: 0; padding: 0; padding-inline: 0; padding-block: 0;  margin-top: 8rem; background-color: #FFFFFFFF;">
    <!--Detail QR Code Kode Booking Section Start -->
    <table align="center"
          cellpadding="0"
          cellspacing="0"
          width="100%"
          style="background-color: #FFFFFF; padding: 0.5rem 2rem; border-bottom: 2px dashed #ededed;">
      <tr>

        <!-- LEFT: QR ONLY -->
        <td align="center"
            valign="top"
            width="40%"
            style="padding-right: 1rem;">

          <img src="data:image/png;base64,{!! base64_encode(
              QrCode::format('png')
                ->size(132)
                ->merge(public_path('storage/avatar_loka_3d.png'), 0.25, true)
                ->errorCorrection('Q')
                ->margin(3)
                ->generate($booking_code),
          ) !!}"
              width="132"
              style="display:block; margin-bottom:8px;">

          <p style="margin:0;">
            <strong style="font-size: 12px;">Kode Registrasi:</strong>
          </p>

          <h4 style="color: #169870; font-size: 20px; margin:4px 0;">
            <strong>{{ $booking_code }}</strong>
          </h4>

        </td>

        <!-- RIGHT: TEXT + LOCATION -->
        <td align="left"
            valign="top"
            width="60%"
            style="padding-left: 1rem; border-left: 1px solid #ededed;">

          <!-- INFO TEXT -->
          <table cellpadding="0" cellspacing="0" width="100%">
            <tr>
              <td valign="top" width="20">
                <img src="{{ public_path('icons/calendar.png') }}" width="16" style="display:block;">
              </td>
              <td style="font-size: 12px; padding-bottom: 8px;">
                Silakan aktivasi Membership Edu Pride Sobat Loka sebelum
                <strong>30 Agustus 2026</strong>.
              </td>
            </tr>

            <tr>
              <td valign="top">
                <img src="{{ public_path('icons/clock.png') }}" width="16" style="display:block;">
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
          <table cellpadding="0" cellspacing="0" width="100%">
            <tr>
              <td valign="top" width="20">
                <img src="{{ public_path('icons/location.png') }}" width="16" style="display:block;">
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

    <!--Detail Detail Pemesan & Metode Pembayaran Section Start -->
    <table align="center"
          cellpadding="0"
          cellspacing="0"
          width="100%"
          style="background-color:#FFFFFF; border-bottom:2px dashed #ededed; table-layout:fixed;">
      <tbody>
        <tr>

          <!-- LEFT -->
          <td valign="top" width="65%" style="padding:1rem 2rem;">

            <p style="font-size:14px; margin:0 0 10px 0;">
              <strong>Detail Member :</strong>
            </p>

            <table width="100%" cellpadding="0" cellspacing="0" style="table-layout:fixed;">
              
              <tr>
                <td width="15%" style="font-size:12px;">Nama</td>
                <td width="5%" style="font-size:12px;">:</td>
                <td width="80%" style="font-size:12px; word-break:break-word;">
                  {{ $name }}
                </td>
              </tr>

              <tr>
                <td style="font-size:12px; padding-top:4px;">Sekolah</td>
                <td style="font-size:12px; padding-top:4px;">:</td>
                <td style="font-size:12px; padding-top:4px; word-break:break-word;">
                  {{ $school }}
                </td>
              </tr>

              <tr>
                <td style="font-size:12px; padding-top:4px;">Telepon</td>
                <td style="font-size:12px; padding-top:4px;">:</td>
                <td style="font-size:12px; padding-top:4px; word-break:break-word;">
                  {{ $phone }}
                </td>
              </tr>

              <tr>
                <td style="font-size:12px; padding-top:4px;">Alamat</td>
                <td style="font-size:12px; padding-top:4px;">:</td>
                <td style="font-size:12px; padding-top:4px; word-break:break-word;">
                  {{ $address }}
                </td>
              </tr>

            </table>
          </td>

          <!-- RIGHT -->
          <td valign="top" width="35%" style="padding:1rem 2rem;">

            <p style="font-size:14px; margin:0 0 10px 0;">
              <strong>Tanggal Pendaftaran :</strong>
            </p>

            <p style="font-size:12px; margin:0; word-break:break-word;">
              {{ $registration_date }}
            </p>

          </td>

        </tr>
      </tbody>
    </table>
    <!--Detail Detail Pemesan & Metode Pembayaran Section End -->
  </main>
  <!--Detail Tiket Section End -->

  {{-- <div class="page-break"></div> --}}

  {{-- <!-- Syart & Ketentuan Section Start -->
  <main style="width: 100%; margin: 0; padding: 0; padding-inline: 0; padding-block: 0; margin-top: 8rem;">
    <!--Cara Print Kode Booking Section Start -->
    <table align="center"
           cellpadding="0"
           cellspacing="0"
           width="100%"
           class=""
           style="background-color: #FFFFFFFF; padding: 0rem 0rem; border-top: 2px dashed #ededed; border-bottom: 2px dashed #ededed;">
      <tbody style="background-color: #FFFFFFFF; padding-inline: 0rem; padding-block: 0rem">
        <tr>
          <td align="left"
              valign="top">
            <table align="center"
                   cellpadding="0"
                   cellspacing="0"
                   width="100%"
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
    </table> --}}
  <!--Cara Print Kode Booking Section End -->

  {{-- <!--Detail Syarat & Ketentuan Section Start -->
    <table align="center"
           cellpadding="0"
           cellspacing="0"
           width="100%"
           class=""
           style="background-color: #FFFFFFFF; padding: 0rem 0rem; border-bottom: 2px dashed #ededed;">
      <tbody style="background-color: #FFFFFFFF; padding-inline: 0rem; padding-block: 0rem">
        <tr>
          <td align="left"
              valign="top">
            <table align="center"
                   cellpadding="0"
                   cellspacing="0"
                   width="100%"
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
  </main> --}}
  <!-- Syart & Ketentuan Section End -->
</body>

</html>
