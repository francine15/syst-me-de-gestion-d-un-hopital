<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Partient;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PatientControllerTest extends TestCase
{
    use DatabaseMigrations;

    public function testAfficheAction()
    {
        // Créer des patients de test
        $patients = Partient::factory()->count(3)->create();

        // Appeler la méthode affiche()
        $response = $this->get('/patients/suivi');

        // Vérifier que la vue 'patients.suivi' est utilisée
        $response->assertViewIs('patients.suivi');

        // Vérifier que tous les patients sont transmis à la vue
        $response->assertViewHas('patient', $patients);
    }
    public function testAjoutAction()
    {
        // Appeler la méthode ajout()
        $response = $this->get('/patients/ajout');

        // Vérifier que la vue 'patients.ajout' est utilisée
        $response->assertViewIs('patients.ajout');
    }
    public function testInsertionAction()
    {
        // Préparer les données de test
        $data = [
            'nom' => 'John Doe',
            'prenom' => 'John',
            'adresse' => '123 Rue de la Paix',
            'tel' => '0123456789',
            'email' => 'john.doe@example.com',
            'jour' => '2023-06-05',
            'heure' => '10:00'
        ];

        // Appeler la méthode insertion()
        $response = $this->post('/patients/insertion', $data);

        // Vérifier que la redirection est correcte
        $response->assertRedirect('/ajout');

        // Vérifier que le message de succès est affiché
        $response->assertSessionHas('statut', 'ajout effectue avec succes');

        // Vérifier que le patient a bien été enregistré dans la base de données
        $this->assertDatabaseHas('partients', $data);
    }
        public function testSupprimerAction()
        {
            // Créer un patient de test
            $patient = Partient::factory()->create();
    
            // Appeler la méthode supprimer()
            $response = $this->delete('/patients/supprimer/' . $patient->id);
    
            // Vérifier que la redirection est correcte
            $response->assertRedirect('/patients/suivi');
    
            // Vérifier que le patient a bien été supprimé de la base de données
            $this->assertDatabaseMissing('partients', ['id' => $patient->id]);
        }
    }



    

