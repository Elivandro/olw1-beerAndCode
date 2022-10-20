<?php

namespace App\Http\Controllers;

use App\Models\Export;
use Illuminate\Support\Facades\Storage;

class ExportController extends Controller
{
    public function index()
    {
        $exports = Export::paginate(15);
    }

    public function destroy(Export $export)
    {
        Storage::delete($export->file_name);
        $export->delete();

        return "deletado";
    }
}
