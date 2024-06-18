<?php
namespace App\Views;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Core\ImageEstablishment\ImageEstablishmentRepositoryInterface;

class IndexView extends Controller
{
    public function __construct(
        protected ImageEstablishmentRepositoryInterface $imageEstablishmentRepositoryInterface
    )
    {

    }
    public function index()
    {
        $etsData = $this->imageEstablishmentRepositoryInterface->listAll();

        return view('index', ['ets' => $etsData[0], 'images' => $etsData[1]]);
    }
}
