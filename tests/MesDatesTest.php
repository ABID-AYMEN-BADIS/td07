<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../src/MesDates.php';

class MesDatesTest extends TestCase
{
    /**
     * Teste la méthode 'demain()' pour vérifier si elle retourne la bonne date au format JSON.
     */
    public function testDemain()
    {
        
        $mesDates = new MesDates();

        
        $resultat = $mesDates->demain();

        
        $dateDemain = json_decode($resultat, true);

        $this->assertIsArray($dateDemain);

        $this->assertArrayHasKey('demain', $dateDemain);

        $demainAttendu = (new \DateTime('tomorrow'))->format('d-m-Y');

        $this->assertEquals($demainAttendu, $dateDemain['demain']);
    }
}
