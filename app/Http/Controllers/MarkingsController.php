<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Employees;
use App\Markings;


class MarkingsController extends Controller
{
    final public function createMarkingList()
    {
        $collection = collect([
            '1',
            '2',
            '3',
            '4',
            '5',
        ]);

        $random = $collection->random(2);

        return $random;
    }
}
