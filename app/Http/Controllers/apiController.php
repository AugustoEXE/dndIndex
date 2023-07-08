<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\VarDumper\VarDumper;

class apiController extends Controller
{
    public function getIndexData($type)
    {
        $response = Http::get("https://www.dnd5eapi.co/api/{$type}");
        $data =  json_decode($response)->results;


        if ($type == 'spells') {
            /* TODO:
             * fazer uma paginação pra isso pq assim nao da
             */
            for ($i = 0; $i < count($data); $i++) {
                $pattern = "/api/spells/";
                $data[$i]->url = str_replace($pattern, "", $data[$i]->url);
                // $res = Http::get("https://www.dnd5eapi.co/api/spells/{$data[$i]->url}");
                // $description = json_decode($res)->desc;

                // $data[$i]->description = $description;
                // dd($data[0]);
            }


            return view('spells', ['data' => $data]);
        }
    }

    public function getSpellDetail($thing)
    {
        $response = Http::get("https://www.dnd5eapi.co/api/spells/{$thing}");
        $data =  json_decode($response);

        return view('spell', ['spell'=>$data]);
    }
}
