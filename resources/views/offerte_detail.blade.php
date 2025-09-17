@php
$offertes = [
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
@endphp

@if(isset($offerte))
    <h1>Offerte {{ $offerte['offertenummer'] }}</h1>
    <ul>
        <li>Klant: {{ $offerte['klant'] }}</li>
        <li>Bedrag: €{{ number_format($offerte['bedrag'], 2, ',', '.') }}</li>
    </ul>
    <a href="{{ url('/offertes') }}">Terug naar overzicht</a>
@else
    <p>Offerte niet gevonden.</p>
    <a href="{{ url('/offertes') }}">Terug naar overzicht</a>
@endif
