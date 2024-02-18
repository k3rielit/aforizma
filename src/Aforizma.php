<?php

namespace Ahurkatolto\Aforizma;

class Aforizma
{
    public string $quote = '...';
    public string $author = 'Ismeretlen szerző';

    public function __construct(string $quote = '-', string $author = 'Ismeretlen szerző')
    {
        $this->quote = $quote;
        $this->author = $author;
    }

    /**
     * An array of goofy quotes.
     * The first array item is the quote, and the optional second one is the author.
     */
    protected static $aforizmak = [
        ['Még egy ilyen aforizma, szádhoz pattan farom izma.'],
        ['Még egy ilyen nyerítés, nyakadban a kerítés.'],
        ['Ha nem nem esik az eső, akkor lényegében esik, ugye?', 'M. Zsolt'],
        ['Képzeljetek el egy folyót, tele pénzzel...', 'M. Zsolt'],
        ['Mindenhol ugyanazt az érettségit írják, külföldön is.', 'M. Zsolt'],
        ['Ha egy festékesvödörrel leöntesz egy kispolszkit, piros lesz.', 'M. Zsolt'],
        ['Több pénzt kerestem mint én.', 'M. Zsolt'],
        ['Bemegyünk a boltba, és kenyér!', 'M. Zsolt'],
        ['5 türelmet kérek!', 'M. Zsolt'],
        ['Vidám vasárnap után vidám hétfő.', 'M. Zsolt'],
        ['Megtudni se csinálja.', 'M. Zsolt'],
        ['Ezzel ongólt rúgtál magadnak!', 'M. Zsolt'],
        ['Maradj má halkabban!', 'M. Georgina'],
        ['Pedig csak VETŐŐDNI KELLETT VOLNA!', 'K. Jànos'],
        ['SÍKBA LEGYEN A TEST!!!', 'K. Jànos'],
        ['Kinek kurva az anyja már megint?', 'K. Jànos'],
        ['Barlangban lakik? Mér nem kapcsolja le a lámpát?', 'K. Jànos'],
    ];

    /**
     * Get the complete array of quotes and authors.
     * The first array item is the quote, and the optional second one is the author.
     */
    public static function everything(): array
    {
        return static::$aforizmak;
    }

    /**
     * Get a random aforizma model, with same day shipping, totally free of charge.
     */
    public static function random(): Aforizma
    {
        $params = static::$aforizmak[array_rand(static::$aforizmak)];
        $quote = $params[0] ?? '-';
        $author = $params[1] ?? 'Ismeretlen szerző';
        return new Aforizma($quote, $author);
    }

}