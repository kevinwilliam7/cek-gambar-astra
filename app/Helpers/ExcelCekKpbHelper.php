<?php

namespace App\Helpers;

use Exception;
use Illuminate\Support\Facades\Log;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use Maatwebsite\Excel\Facades\Excel;

class ExcelCekKpbHelper
{
    /**
     * Konversi sheet ke-2 dari file Excel dan import hasilnya.
     *
     * @param string $path Lokasi file Excel
     * @param string $excelImportClass Class import Maatwebsite Excel
     * @param mixed|null $context (opsional) $this dari Command (punya ->info(), ->error())
     * @return array|string Jika dari controller -> array, jika dari command -> langsung echo lewat $this->command
     */
    public static function processExcelWithFormula($path, $excelImportClass, $context = null, $fileName = null, $job_id = null, $user_id = null)
    {
        try {
            $reader = IOFactory::createReaderForFile($path);
            $reader->setReadDataOnly(false);
            $spreadsheet = $reader->load($path);

            // 📄 Ambil sheet ke-2 (index 1)
            $sheetIndex = 1;
            if ($spreadsheet->getSheetCount() <= $sheetIndex) {
                throw new \Exception("Your requested sheet index: {$sheetIndex} is out of bounds. The actual number of sheets is {$spreadsheet->getSheetCount()}.");
            }

            $sheet = $spreadsheet->getSheet($sheetIndex);

            // 🔄 Evaluasi semua formula di sheet
            $evaluated = new Spreadsheet();
            $newSheet = $evaluated->getActiveSheet();

            $highestRow = $sheet->getHighestRow();
            $highestCol = $sheet->getHighestColumn();

            for ($row = 1; $row <= $highestRow; $row++) {
                for ($col = 'A'; $col <= $highestCol; $col++) {
                    $cell = $sheet->getCell($col . $row);
                    $newSheet->setCellValue(
                        $col . $row,
                        $cell->getCalculatedValue()
                    );
                }
            }

            // ✅ Simpan hasil evaluasi ke file sementara
            $tempPath = storage_path('app/temp_import' . time() . '_' . uniqid() . '.xlsx');
            IOFactory::createWriter($evaluated, 'Xlsx')->save($tempPath);

            // ✅ Jalankan import
            Excel::import(new $excelImportClass($context, $fileName, $job_id, $user_id), $tempPath);
            unlink($tempPath);

            $msg = "✅ Selesai konversi & import sheet ke-2";

            // Jika dipanggil dari Command
            if ($context && method_exists($context, 'info')) {
                $context->info($msg);
                return;
            }
            Log::info($msg);
        } catch (\Exception $e) {
            $msg = "❌ Gagal membaca file: " . $e->getMessage();

            if ($context && method_exists($context, 'error')) {
                $context->error($msg);
                return;
            }
            throw new Exception($msg); //biar masuk ke log_activities gagal
            return Log::warning($msg);
        }
    }
}
