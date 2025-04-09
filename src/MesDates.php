<?php


/**
 * Ce fichier contient la classe MesDates
 * pour gérer les fonctionnalités liées aux dates.
 * php version 8.3.1.1
 *
 * @category Utility
 * @package  DateFunctions
 * @author   insset <accueil@insset.u-picardie.fr>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://www.insset.u-picardie.fr
 */



/**
 * Classe responsable de fournir des opérations liées aux dates,
 * comme retourner la date de demain.
 * php version 8.4.5
 *
 * @category Utility
 * @package  DateFunctions
 * @author   camron <arr1234@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://bloup.nvsphr.fr
 */
// src/MesDates.php



class MesDates
{
    /**
     * Renvoie un objet JSON avec la date de demain.
     *
     * @return string Chaîne JSON contenant la date de demain.
     */
    public function demain(): string
    {
        $demain = new \DateTime('tomorrow');
        $formattedDate = $demain->format('d-m-Y');

        return json_encode(
            ['demain' => $formattedDate],
            JSON_THROW_ON_ERROR
        );
    }
}