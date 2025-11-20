<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use thiagoalessio\TesseractOCR\TesseractOCR;
use OnnxRuntime\Model;

class AnalyzeFotoSpeedometer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:analyze-foto-speedometer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $links = [
            "https://fruitbasket.blob.core.windows.net/gk2o5k/avatar/21361684820250908114331CSW36D.jpg",
"https://fruitbasket.blob.core.windows.net/gk2o5k/avatar/21392375320250904155032AVFXSN.jpg",
"https://fruitbasket.blob.core.windows.net/gk2o5k/avatar/21361684820250903102055ZLHOJN.jpg",
"https://fruitbasket.blob.core.windows.net/gk2o5k/avatar/213452976202509011449219V2XC4.jpg",
"https://fruitbasket.blob.core.windows.net/gk2o5k/avatar/21088191720250901135241SLOS3B.jpg",
"https://fruitbasket.blob.core.windows.net/gk2o5k/avatar/21361684820250916115040PKLZOD.jpg",
"https://fruitbasket.blob.core.windows.net/gk2o5k/avatar/21340355720250915102902ENWVZO.jpg",
"https://fruitbasket.blob.core.windows.net/gk2o5k/avatar/21361684820250915094008YYFT7Q.jpg",
"https://fruitbasket.blob.core.windows.net/gk2o5k/avatar/21088191720250911170547PTWCSK.jpg",
"https://fruitbasket.blob.core.windows.net/gk2o5k/avatar/21395983720250911142708JO0JDB.jpg",
"https://fruitbasket.blob.core.windows.net/gk2o5k/avatar/21361684820250911102235HB5SCK.jpg",
"https://fruitbasket.blob.core.windows.net/gk2o5k/avatar/21395983720250911095552JTLE0U.jpg",
"https://fruitbasket.blob.core.windows.net/gk2o5k/avatar/21361684820250910155642UCFDGW.jpg",
"https://fruitbasket.blob.core.windows.net/gk2o5k/avatar/21382922920250910090613RYLRJE.jpg",
"https://fruitbasket.blob.core.windows.net/gk2o5k/avatar/21382922920250909113244PPUJ9Q.jpg",
"https://fruitbasket.blob.core.windows.net/gk2o5k/avatar/21351976520250922130650XJNVSM.jpg",
"https://fruitbasket.blob.core.windows.net/gk2o5k/avatar/2914187020250920113210E4LZRG.jpg",
"https://fruitbasket.blob.core.windows.net/gk2o5k/avatar/21357763720250919115031OYVNY9.jpg",
"https://fruitbasket.blob.core.windows.net/gk2o5k/avatar/21305161920250917092239MJYBVV.jpg",
"https://fruitbasket.blob.core.windows.net/gk2o5k/avatar/21344996520250930092026VGOKCD.jpg",
"https://fruitbasket.blob.core.windows.net/gk2o5k/avatar/213051619202509291644051LUEEJ.jpg",
"https://fruitbasket.blob.core.windows.net/gk2o5k/avatar/212755218202509291152265W0VJU.jpg",
"https://fruitbasket.blob.core.windows.net/gk2o5k/avatar/21107602220250929113938TR7AK6.jpg",
"https://fruitbasket.blob.core.windows.net/gk2o5k/avatar/212755485202509271111564W2X1V.jpg",
"https://fruitbasket.blob.core.windows.net/gk2o5k/avatar/21345001320250926150702CDTBHM.jpg",
"https://fruitbasket.blob.core.windows.net/gk2o5k/avatar/21338317420250901014341CRF0XT.jpg",
"https://fruitbasket.blob.core.windows.net/gk2o5k/avatar/21340349420250910084555QXEWPZ.jpg",
"https://fruitbasket.blob.core.windows.net/gk2o5k/avatar/21340367120250927004512YQHP0I.jpg",
"https://fruitbasket.blob.core.windows.net/gk2o5k/avatar/21344996520250930091303D9VO1X.jpg",

        ];

        // pastikan folder storage/app/public/foto ada
        $savePath = public_path('python/train_datasets/Beat/JMF1E');
        if (!file_exists($savePath)) {
            mkdir($savePath, 0777, true);
        }
        foreach ($links as $link) {
            try {
                $fileContents = Http::get($link)->body();
                $fileName = basename($link); // ambil nama file dari URL
                file_put_contents($savePath . '/' . $fileName, $fileContents);
                $this->info("Berhasil download: $fileName");
            } catch (\Exception $e) {
                $this->error("Gagal download: $link | " . $e->getMessage());
            }
        }
    }
}
