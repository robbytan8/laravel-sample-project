<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class Data2Controller extends Controller
{

    /**
     *  This method is used to return some data using controller to view
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('data2', [
            'category' => 'HDD capacity',
            'storages' => [
                'HDD S Brand 1TB',
                'HDD S Brand 2TB',
                'HDD S Brand 4TB',
                'HDD W Brand 512GB',
                'HDD W Brand 1TB',
                'HDD W Brand 2TB',
            ]
        ]);
    }
}
