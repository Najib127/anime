<?php 
 
namespace App\Http\Controllers\Api; 
 
use App\Http\Controllers\Controller; 
use App\Services\ApiService; 
use Illuminate\Http\Request; 
 
class AnimeController extends Controller 
{ 
    protected $apiService; 
 
    // Menambahkan dependensi pada constructor php artisan make:controller Api/PremierLeagueController  
    public function __construct(ApiService $apiService) 
    { 
        $this->apiService = $apiService; 
    } 
 
    // Method untuk mendapatkan semua tim 
    public function getAllAnimes() 
    { 
        // Ambil data tim dari API 
        $animes = $this->apiService->getAllAnimes(); 
        // return response()->json($animes); 

        return view('anime', ['data' => $animes]);
    } 
} 