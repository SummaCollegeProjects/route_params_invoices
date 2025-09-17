<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{

    private $offertes = [
        'of12872' => [
            'offertenummer' => 'of12872',
            'klant' => 'Van Meer Solutions',
            'bedrag' => 1500.50
        ],
        'of10632' => [
            'offertenummer' => 'of10632',
            'klant' => 'Groene vingers',
            'bedrag' => 1200.00
        ],
        'of28003' => [
            'offertenummer' => 'of28003',
            'klant' => "Mario's pizza",
            'bedrag' => 2500.75
        ],
        'of10891' => [
            'offertenummer' => 'of10891',
            'klant' => 'Blauwwater Consulting',
            'bedrag' => 1750.00
        ]
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home');
    }

    public function offertes()
    {
        return view('offertes');
    }
    public function offerteDetail($nummer)
    {
        $offerte = $this->offertes[$nummer] ?? null;
        return view('offerte_detail', ['offerte' => $offerte]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
