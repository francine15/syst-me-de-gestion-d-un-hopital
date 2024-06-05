<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Models\RdV;

class RdVControllerTest extends TestCase
{
    use DatabaseMigrations;

    public function testRendezVousAction()
    {
        // Appeler la méthode rendez_vous()
        $response = $this->get('/patients/rendez_vous');

        // Vérifier que la vue 'patients.rendez_vous' est utilisée
        $response->assertViewIs('patients.rendez_vous');
    }

    public function testAfficheAction()
    {
        // Créer des rendez-vous de test
        $rdvs = RdV::factory()->count(3)->create();

        // Appeler la méthode affiche()
        $response = $this->get('/patients/liste_rdv');

        // Vérifier que la vue 'patients.liste_rdv' est utilisée
        $response->assertViewIs('patients.liste_rdv');

        // Vérifier que tous les rendez-vous sont transmis à la vue
        $response->assertViewHas('patient', $rdvs);
    }
    public function testInsertionAction()
    {
        // Préparer les données de test
        $data = [
            'nom' => 'John Doe',
            'prenom' => 'John',
            'tel' => '0123456789',
            'email' => 'john.doe@example.com',
            'nomD' => 'Dr. Dupont',
            'telD' => '0987654321',
            'medecin' => 'Dr. Dupont',
            'date' => '2023-06-05',
            'heure' => '10:00',
            'motif' => 'Consultation'
        ];

        // Appeler la méthode insertion()
        $response = $this->post('/patients/insertion', $data);

        // Vérifier que la redirection est correcte
        $response->assertRedirect('/ajout');

        // Vérifier que le rendez-vous a bien été enregistré dans la base de données
        $this->assertDatabaseHas('rdvs', $data);
    }
}
