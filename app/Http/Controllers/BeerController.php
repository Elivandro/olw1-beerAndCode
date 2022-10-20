<?php

namespace App\Http\Controllers;

use App\Http\Requests\BeerRequest;
use App\Jobs\ExportJob;
use App\Jobs\SendExportEmailJob;
use App\Jobs\StoreExportDataJob;
use App\Services\PunkApiService;

class BeerController extends Controller
{
    public function index(BeerRequest $request, PunkApiService $service)
    {
        return $service->getBeers(...$request->validated());
    }

    public function export(BeerRequest $request)
    {
        $filename = "cervejas-encontradas-" . now()->format('d-m-Y_H-i') . ".xlsx";

        ExportJob::withChain([
            new SendExportEmailJob($filename),
            new StoreExportDataJob(Auth()->user(), $filename)
        ])->dispatch($request->validated(), $filename);
       
        return 'relatorio criado';
    }
}