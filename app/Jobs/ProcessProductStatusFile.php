<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\ProductMasterList;

class ProcessProductStatusFile implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $path;

    /**
     * Create a new job instance.
     */
    public function __construct($path)
    {
        $this->path = $path;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $file = Storage::path($this->path);

        $data = Excel::toArray([], $file);

        foreach ($data[0] as $row) {
            if ($row[0] === "Product ID") {
                continue;
            }
            
            $product = ProductMasterList::find($row[0]);
            if($product === null) {
                // log product id not found... Add new item or throw error
                continue;
            }
            
            if ($row[5] == 'Sold') {
                if ($product->quantity > 0) {
                    $product->quantity --;
                } else {
                    // log no stock exists... data not tally
                }
            } elseif ($row[5] == 'Buy') {
                $product->quantity ++;
            }

            $product->save();
        }

        Storage::delete($this->path);
    }
}
