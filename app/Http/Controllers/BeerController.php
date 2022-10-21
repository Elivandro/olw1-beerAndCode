<?php

namespace App\Http\Controllers;

use App\Http\Requests\BeerRequest;
use App\Jobs\ExportJob;
use App\Jobs\SendExportEmailJob;
use App\Jobs\StoreExportDataJob;
use App\Models\Meal;
use App\Services\PunkApiService;
use Inertia\Inertia;

class BeerController extends Controller
{
    public function index(BeerRequest $request, PunkApiService $service)
    {
        $filters = $request->validated();
        $beers = $service->getBeers(...$filters);
        $meals = Meal::all();
        return Inertia::render('Beers', [
            'beers' => $beers,
            'meals' => $meals,
            'filters' => $filters
        ]);
    }

    public function export(BeerRequest $request)
    {
        $filename = "cervejas-encontradas-" . now()->format('d-m-Y_H-i') . ".xlsx";

        ExportJob::withChain([
            new SendExportEmailJob($filename),
            new StoreExportDataJob(Auth()->user(), $filename)
        ])->dispatch($request->validated(), $filename);
       
        return redirect()->back()
            ->with('success', "Seu arquivo foi enviado e logo estára em seu email.");
    }
}