<?php

namespace App\Http\Controllers\Api\Practice;

use App\Http\Controllers\Controller;
use App\Http\Services\Algorithms\QuickSort;

class LeetController extends Controller
{
    public function execute()
    {
        $prices = [7,1,5,3,6,4];

        $buy = 0;
        $sell = 1;
        $maxProfit = 0;

        while ($sell < count($prices)) {
            if ($prices[$buy] < $prices[$sell]) {
                $maxProfit = max($maxProfit, ($prices[$sell] - $prices[$buy]));
            } else {
                $buy = $sell;
            }

            $sell ++;
        }

        return $maxProfit;

    }


    public function anagram()
    {
        $string1 = 'anagram';
        $string2 = 'nagaram';

        if (strlen($string1) !== strlen($string2)) {
            return false;
        }

        $strArray1 = str_split($string1);
        $strArray2 = str_split($string2);

        $maps = [];

        for ($i=0; $i<count($strArray1); $i++) {
            if (array_key_exists($strArray1[$i], $maps)) {
                $maps[$strArray1[$i]] += 1;
            } else {
                $maps[$strArray1[$i]] = 1;
            }

            if (array_key_exists($strArray2[$i], $maps)) {
                $maps[$strArray2[$i]] -= 1;
            } else {
                $maps[$strArray2[$i]] = -1;
            }
        }
        
        foreach ($maps as $amount) {
            if ($amount !== 0) {
                return false;
            }
        }

        return true;

        // Simple solution by sorting
        sort($strArray1);
        sort($strArray2);

        return $strArray1 === $strArray2;
    }

    public function containsDuplicate()
    {
        $nums = [1,2,3,1];

        $maps = [];

        foreach ($nums as $num) {
            if (in_array($num, $maps)) {
                return 'true';
            }
            $maps[] = $num;
        }

        return 'false';
    }

    public function twoSum()
    {
        $nums = [2, 7, 11, 15];
        $target = 26;

        $maps = [];

        foreach ($nums as $key => $value) {
            $diff = $target - $value;

            if (array_key_exists($diff, $maps) === true) {
                return 'Index 1: ' . $key . ' Index 2: ' . $maps[$diff];
            }
            

            $maps[$value] = $key;
        };

        return 0;
    }

    public function tryQuickSort()
    {
        $list = [10,2,3,7,34,1,5];

        $quickSort = new QuickSort($list);

        $quickSort->sort(0, count($list) - 1);

        return $quickSort->list;
    }
}