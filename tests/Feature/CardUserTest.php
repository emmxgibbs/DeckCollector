<?php

namespace Tests\Feature;

use App\Models\Card;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

//how do i make a seed tester for the api seeding feature?
class CardUserTest extends TestCase
{
    use RefreshDatabase;
    private User $owner;
    private Card $card;
    private User $otherUser;
    private string $url;

    //won't pass - can't remember how to set up mock db
    public function setUp(): void
    {
        parent::setUp();
        echo app()->environment();

        $this->owner = User::factory()->create();
        $this->otherUser = User::factory()->create();

        //attach a card to a specific owner
        $this->card = $this->owner->cards()->create([
            //use a factory?
            'name' => 'Pikachu',
            'image' => 'https://cdn.vox-cdn.com/thumbor/29xNt_2ksid5n58PD0HDXDdMyYY=/0x0:819x1114/1200x0/filters:focal(0x0:819x1114):no_upscale()/cdn.vox-cdn.com/uploads/chorus_asset/file/16022773/SM190_BSP_EN_2__3_.jpg',
            'image_large' => 'https://cdn.vox-cdn.com/thumbor/29xNt_2ksid5n58PD0HDXDdMyYY=/0x0:819x1114/1200x0/filters:focal(0x0:819x1114):no_upscale()/cdn.vox-cdn.com/uploads/chorus_asset/file/16022773/SM190_BSP_EN_2__3_.jpg',
            'hp' => '90',
            'evolves_from' => '',
            'types' => 'Electric',
            'cardmarket' => '0.9',
            'pokedex_number' => '025',
        ]);

        $this->url = route('users.cards.index');
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_non_logged_in_users_cannot_view_cards()
    {
        $this->get($this->url)->assertRedirect();
    }

    public function test_non_owner_cannot_view_cards()
    {
        $this->actingAs($this->otherUser)
            ->get($this->url)
            ->assertStatus(200)
            ->assertViewHas('userCards', function($userCards) {
                return $userCards->count() == 0;
            });
    }

    public function test_owner_can_view_cards()
    {
        $this->actingAs($this->owner)
            ->get($this->url)
            ->assertStatus(200)
            ->assertSeeText($this->card->name)
            ->assertViewHas('userCards', function($userCards) {
                return $userCards->count() == 1 && $userCards->first()->name == $this->card->name;
            });
    }
}
