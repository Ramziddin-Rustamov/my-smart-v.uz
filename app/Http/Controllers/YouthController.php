<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Services\YouthService;

class YouthController extends Controller
{

    private $youthSerive;

    public function __construct(YouthService $youthSerive)
    {
        $this->youthSerive = $youthSerive;
    }

    public function index()
    {
        // youth
        return view("youth.index");
    }

    public function searchByName($name)
    {
        return $this->youthSerive->searchByName($name);
    }
    public function searchBySurname($surname)
    {
        return $this->youthSerive->searchBySurname($surname);
    }
}
