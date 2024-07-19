<?php

namespace App\Enum;

enum Saison: string
{
    case Printemps = 'Printemps';
    case Ete = 'Été';
    case Automne = 'Automne';
    case Hiver = 'Hiver';
    case Annee = "Toute l'année";

    public function getSaisonalite(): string
    {
        return match ($this) {
            self::Printemps => 'Printemps',
            self::Ete => 'Été',
            self::Automne => 'Automne',
            self::Hiver => 'Hiver',
            self::Annee => `Toute l'année`,
        };
    }
}