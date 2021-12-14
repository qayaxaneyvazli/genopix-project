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
        $infoPath = pathinfo(storage_path('app\public\file.xlsx'));

        $extension = $infoPath['basename'];

        if ( File::exists(storage_path('app\public\file.xlsx') )&& $extension=='file.xlsx') {

            Excel::import(new TraitResultImport(), storage_path('app\public\file.xlsx'));
            Log::info('File loaded');

//        Log::info('File is exists');
        } else {
            Log::info('File is not exist');
//        dd($infoPath);
////                return dd(storage_path('app\public\excelfiles\file.xlsx'));
///
        }
    }

}
