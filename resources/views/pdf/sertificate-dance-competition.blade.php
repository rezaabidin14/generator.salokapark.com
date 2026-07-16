<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">

  <style>
    @font-face {
      font-family: 'Montserrat';
      src: url('{{ public_path('fonts/Montserrat-ExtraBold.ttf') }}') format('truetype');
    }

    @page {
      margin: 0;
    }

    body {
      margin: 0;
      padding: 0;
    }

    .bg {
      position: fixed;
      top: 0;
      left: 0;
      width: 1123px;
      height: 794px;
    }

    .school-name {
      font-family: 'Montserrat';
      position: fixed;
      top: 310px;
      left: 60px;
      right: 60px;

      text-align: center;
      font-size: 48px;
      font-weight: bold;
      line-height: 1.3;
    }

    .group-name {
      font-family: 'Montserrat';
      position: fixed;
      top: 375px;
      left: 60px;
      right: 60px;

      text-align: center;
      font-size: 32px;
      font-weight: bold;
      line-height: 1.0;
    }
  </style>
</head>

<body>

  <img class="bg"
       src="{{ public_path('images/SERTIFIKAT_TARI_KREASI.png') }}">

  <div class="school-name">
    {{ $school_name }}
  </div>

  <div class="group-name">
    {{ $group_name }}
  </div>

</body>

</html>
