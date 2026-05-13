<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible"
        content="ie=edge">
  <title>Sertifikat</title>

  <style>
    @page {
      margin: 0cm;
    }

    body {
      font-family: "Poppins", sans-serif;
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;

      background-image: url("{{ public_path('images/SERTIFIKAT JAMBORE HR.png') }}");
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

    .page-break {
      page-break-after: always;
    }

    .footer {
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      text-align: center;
    }

    .footer img {
      width: 100%;
    }

    /* =========================
       POSISI NAMA SERTIFIKAT
       ========================= */
    .header {
      position: absolute;
      top: 400px; /* ubah ini untuk naik/turun */
      left: 0;
      width: 100%;
      text-align: center;
    }

    .participant-name {
      font-size: 30px;
      font-weight: bold;
      color: white;
    }
  </style>
</head>

<body>

  <div class="header">
    <table align="center"
           cellpadding="0"
           cellspacing="0"
           width="100%">
      <tr>
        <td align="center">
          <h2 class="participant-name">
            {{ $name }}
          </h2>
        </td>
      </tr>
    </table>
  </div>

</body>

</html>