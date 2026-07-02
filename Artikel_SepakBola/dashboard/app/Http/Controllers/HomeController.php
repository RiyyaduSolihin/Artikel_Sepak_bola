<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $klubs = [
            ['nama' => 'Arsenal FC', 'logo' => 'arsenal.png'],
            ['nama' => 'Manchester City', 'logo' => 'man-city.png'],
            ['nama' => 'Manchester United', 'logo' => 'man-utd.png'],
            ['nama' => 'Liverpool FC', 'logo' => 'liverpool.png'],
            ['nama' => 'Chelsea FC', 'logo' => 'chelsea.png'],
            ['nama' => 'Tottenham Hotspur', 'logo' => 'tottenham.png'],
            ['nama' => 'Aston Villa', 'logo' => 'aston-villa.png'],
            ['nama' => 'Newcastle United', 'logo' => 'newcastle.png'],
            ['nama' => 'Ipswich Town', 'logo' => 'ipswich.png'],
            ['nama' => 'Everton FC', 'logo' => 'everton.png'],
            ['nama' => 'Brighton & Hove Albion', 'logo' => 'brighton.png'],
            ['nama' => 'Crystal Palace', 'logo' => 'crystal-palace.png'],
            ['nama' => 'Brentford FC', 'logo' => 'brentford.png'],
            ['nama' => 'Fulham FC', 'logo' => 'fulham.png'],
            ['nama' => 'Bournemouth AFC', 'logo' => 'bournemouth.png'],
            ['nama' => 'Nottingham Forest', 'logo' => 'nottingham-forest.png'],
            ['nama' => 'Hull City', 'logo' => 'hull.png'],
            ['nama' => 'Conventry City', 'logo' => 'conventry.png'],
            ['nama' => 'Leeds United', 'logo' => 'leeds.png'],
            ['nama' => 'Sunderland AFC', 'logo' => 'sunderland.png'],
            
        ];

        return view('home', ['klubs' => $klubs]);
    }
}