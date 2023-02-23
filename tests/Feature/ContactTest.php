<?php

namespace Tests\Feature;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactTest extends TestCase
{
    public function testContactCreatedSuccessfully()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user, 'api');

        $ceoData = [
            "name" => "Susan ",
            "surname" => "Wojcicki",
            "company" => "Wojcicki",
            "photo"=>""
        ];

        $this->json('POST', 'api/contacts', $ceoData, ['Accept' => 'application/json'])
            ->assertStatus(201)
            ->assertJsonStructure([
                "data"
            ]);
    }

    public function testContactListedSuccessfully()
    {

        $user = factory(User::class)->create();
        $this->actingAs($user, 'api');

        factory(Contact::class)->create([
            "name" => "Susan ",
            "surname" => "Wojcicki",
            "company" => "Wojcicki",
            "photo"=>""
        ]);

        factory(Contact::class)->create([
            "name" => "Susan ",
            "surname" => "Wojcicki2",
            "company" => "Wojcicki2",
            "photo"=>""
        ]);

        $this->json('GET', 'api/contacts', ['Accept' => 'application/json'])
            ->assertStatus(200)
            ->assertJsonStructure([
                "data"
            ]);
    }
}
