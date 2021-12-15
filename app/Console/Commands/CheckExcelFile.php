<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use App\Imports\TraitResultImport;
use App\Models\Traits;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Route;

class CheckExcelFile extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:excelfile';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check folder for excel file';


    /**
     * Execute the console command.
     *
     * @return int
     */


    public function handle()
    {

        $publicPath = storage_path('app\public');
        $publicFiles = File::allFiles($publicPath);
        if ($publicFiles) {
            foreach ($publicFiles as $file) {
                $public = trim($file);
                if (File::extension($public) == 'xls' || File::extension($public) == 'xlsx') {
                    $date = date('Y-m-d');
                    Excel::import(new TraitResultImport(), ($public));
                    Log::info('File loaded');

                    File::move($public, storage_path('app\oldfiles\oldData' . $date . '.xlsx'));
                } else {
                    Log::info('File is not exist');
                }
            }
        }
    }
}

