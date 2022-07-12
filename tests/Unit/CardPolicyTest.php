<?php

namespace Tests\Unit;

use App\Models\Card;
use App\Models\User;
use App\Policies\CardPolicy;
use PHPUnit\Framework\TestCase;

class CardPolicyTest extends TestCase
{
    private User $owner;
    private User $other;
    private Card $card;
    private CardPolicy $policy;

    public function setUp(): void
    {
        parent::setUp();

        $this->policy = new CardPolicy();
        $this->owner = new User();
        $this->owner->id = 1;

        $this->card = new Card(['user_id' => 1]);

        $this->other = new User();
        $this->other->id = 2;
    }


    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_owner_can_view_own_cards()
    {

        $this->assertTrue(
            $this->policy->view($this->owner, $this->card)
        );

    }

    public function test_non_owner_cannot_view_cards()
    {

        $this->assertFalse(
            $this->policy->view($this->other, $this->card)
        );

    }
}
