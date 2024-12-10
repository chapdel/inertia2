<?php

declare(strict_types=1);

use App\Models\User;

test('other browser sessions can be logged out', function (): void {
    $this->actingAs(User::factory()->create());

    $response = $this->delete('/user/other-browser-sessions', [
        'password' => 'password',
    ]);

    $response->assertSessionHasNoErrors();
});