<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Informasi Akun Email</title>
  <style>
    @page {
      margin: 0cm;
    }

    * {
      box-sizing: border-box;
    }

    body {
      font-family: "Poppins", sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f3f3f3;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .card {
      background-color: #ffffff;
      padding: 2rem 2.5rem;
      border-radius: 12px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 600px;
    }

    .card-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2rem;
    }

    .card-header h4,
    .card-header h6 {
      margin: 0;
      line-height: 1.2;
    }

    .info-title {
      font-size: 18px;
      color: #169870;
      text-align: center;
      margin-bottom: 0.25rem;
    }

    .info-subtitle {
      font-size: 14px;
      color: #888888;
      text-align: center;
      margin-bottom: 1.5rem;
    }

    .info-row {
      display: flex;
      margin-bottom: 1rem;
    }

    .info-label {
      width: 30%;
      font-weight: 600;
      font-size: 14px;
      color: #444;
    }

    .info-value {
      width: 70%;
      font-size: 14px;
      color: #333;
    }

    .info-link a {
      color: #169870;
      text-decoration: underline;
      word-break: break-word;
    }

    .footer-img {
      margin-top: 2rem;
      text-align: center;
    }

    .footer-img img {
      max-width: 100%;
      height: auto;
    }
  </style>
</head>

<body>
  <div class="card">
    <div class="card-header">
      <div>
        <h4><strong>Informasi Akun Email Karyawan</strong></h4>
        <h6><strong>Saloka Theme Park</strong></h6>
      </div>
      <div>
        <img src="{{ public_path('assets/images/logosaloka.png') }}" alt="Logo Saloka" width="80" />
      </div>
    </div>

    <h4 class="info-title">Informasi Akun Anda</h4>
    <p class="info-subtitle">Gunakan informasi berikut untuk login ke sistem:</p>

    <div class="info-row">
      <div class="info-label">Nama</div>
      <div class="info-value">{{ $nama }}</div>
    </div>
    <div class="info-row">
      <div class="info-label">Email</div>
      <div class="info-value">{{ $email }}</div>
    </div>
    <div class="info-row">
      <div class="info-label">Password</div>
      <div class="info-value">{{ $password }}</div>
    </div>
    <div class="info-row info-link">
      <div class="info-label">URL Akses</div>
      <div class="info-value"><a href="{{ $url }}">{{ $url }}</a></div>
    </div>

    <div class="footer-img">
      <img src="{{ public_path('assets/images/footer_pdf.png') }}" alt="Footer Image" />
    </div>
  </div>
</body>

</html>
