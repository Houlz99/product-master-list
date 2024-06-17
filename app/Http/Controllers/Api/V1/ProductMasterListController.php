<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductMasterList;
use App\Jobs\ProcessProductStatusFile;

class ProductMasterListController extends Controller
{
    public function index(Request $request)
    {
        $products = ProductMasterList::paginate(10);
        return response()->json($products);
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx'
        ]);

        $path = $request->file('file')->store('uploads');

        ProcessProductStatusFile::dispatch($path);

        return response()->json(['message' => 'File uploaded successfully.']);
    }
}
