<?php

// j'initalise la classe 'TableMultiplication'
class TableMultiplication
{
    /**
     * Variable indiquant le nombre de colonnes
     *
     * @var integer
     */
    private int $_nombreDeColonnes = 9;

    /**
     * Variable indiquant le nombre de rangées
     *
     * @var integer
     */
    private int $_nombreDeRangees = 9;

    /**
     * Récupérer le nombre de colonnes
     * Getter (accesseur) : affichage la propriété de $_nombreDeColonnes
     * @return void
     */
    public function getColonnes() : string
    {
        return $this->_nombreDeColonnes;
    }

    /**
     * Récupérer le nombre de rangées
     * Getter (accesseur) : affichage la propriété de $_nombreDeRangees
     * @return void
     */
    public function getRangees() : string
    {
        return $this->_nombreDeRangees;
    }
}