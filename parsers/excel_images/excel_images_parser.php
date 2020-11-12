<?php
require_once __DIR__ . '/vendor/autoload.php';

$objPHPExcel = \PhpOffice\PhpSpreadsheet\IOFactory::load(__DIR__ . "/parus.xls");

$number = 1;
foreach ($objPHPExcel->getSheet(0)->getDrawingCollection() as $drawing) {
    if ($drawing instanceof \PhpOffice\PhpSpreadsheet\Worksheet\MemoryDrawing) {
        ob_start();
        call_user_func(
            $drawing->getRenderingFunction(),
            $drawing->getImageResource()
        );
        $imageContents = ob_get_contents();
        file_put_contents(__DIR__ . '/'. $number . '.jpg',  $imageContents);
        ob_end_clean();
        $number++;
    }
}

exit;