<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Imagick;

class GenerateImageFromSheet extends Controller
{
    public function sheetToImage(Request $request)
    {
        $sheetId = $request->input('sheet_id', '1we0vLQyijwtyPHYrYoqnrtZ_pvKie0b-HeBtBrn2QmI');
        $gid = $request->input('gid', '0');
        $filename = $request->input('filename', 'sheet.jpg');

        try {
            // Ambil PDF langsung dari Google Sheet
            $pdfUrl = "https://docs.google.com/spreadsheets/d/{$sheetId}/export?format=pdf&gid={$gid}"
                . "&size=A0"               // Kertas besar supaya tidak terpotong
                . "&portrait=false"        // Landscape
                . "&fitw=true"             // Fit to width
                . "&gridlines=false"       // Hilangkan garis grid
                . "&sheetnames=false"      // Hilangkan nama sheet
                . "&printtitle=false"      // Hilangkan judul
                . "&pagenum=UNDEFINED"     // Tidak tampilkan nomor halaman
                . "&fzr=false"             // Jangan freeze rows
                . "&horizontal_alignment=LEFT"
                . "&vertical_alignment=TOP"
                . "&top_margin=0.0"
                . "&bottom_margin=0.0"
                . "&left_margin=0.0"
                . "&right_margin=0.0";
            $pdfContent = file_get_contents($pdfUrl);
            if (!$pdfContent) {
                throw new \Exception("Gagal mengambil file dari Google Sheet");
            }

            // Convert PDF -> Image
            $imagick = new Imagick();
            $imagick->setResolution(200, 200);
            $imagick->readImageBlob($pdfContent);
            $imagick->setIteratorIndex(0);
            $imagick->setImageFormat('jpeg');

            // Auto trim area kosong
            $imagick->trimImage(0);
            $imagick->setImagePage(0, 0, 0, 0);

            // Ambil ukuran asli
            $width = $imagick->getImageWidth();
            $height = $imagick->getImageHeight();

            // Crop sampai kolom I (±75% dari total lebar)
            $cropWidth = intval($width );
            $imagick->cropImage($cropWidth, $height, 0, 0);
            $imagick->setImagePage(0, 0, 0, 0);

            // Tambah sedikit margin biar rapi
            $imagick->borderImage('white', 10, 10);

            // Ambil hasil blob
            $imageBlob = $imagick->getImageBlob();

            $imagick->clear();
            $imagick->destroy();

            // Langsung kirim ke browser (download)
            return response($imageBlob, 200)
                ->header('Content-Type', 'image/jpeg')
                ->header('Content-Disposition', 'attachment; filename="'.$filename.'"')
                ->header('Content-Length', strlen($imageBlob));

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Error: ' . $e->getMessage(),
            ]);
        }
    }
}
