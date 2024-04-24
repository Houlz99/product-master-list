<?php

namespace App\Http\Services\Algorithms;

class QuickSort
{
    public array $list = [];

    public array $changes = [];

    public function __construct(array $list)
    {
        $this->initialList = $list;
        $this->list = $list;
    }

    public function sort(int $low, int $high)
    {
        if ($low < $high === false) {
            return ;
        }

        $pivot = $this->partition($low, $high);

        $this->sort($low, $pivot - 1);

        $this->sort($pivot + 1, $high);
    }

    public function partition(int $low, int $high)
    {
        $pivot = $this->list[$high];

        $i = $low - 1;

        for ($j = $low; $j < $high; $j++) {
            if ($this->list[$j] <= $pivot) {
                $i = $i + 1;

                $temp = $this->list[$i];

                $this->list[$i] = $this->list[$j];
                $this->list[$j] = $temp;

                $this->changes[] = $this->list;
            }
        }

        $temp = $this->list[$i + 1];

        $this->list[$i + 1] = $this->list[$high];
        $this->list[$high] = $temp;

        return $i + 1;
    }

    public function medianOfThree(array $list)
    {
        $a = $list[0];
        $b = $list[floor(count($list)/2)];
        $c = $list[count($list)-1];

        $m = max($a, $b, $c);
        $n = min($a, $b, $c);

        return $m ^ $n ^ $a ^ $b ^ $c;
    }
}