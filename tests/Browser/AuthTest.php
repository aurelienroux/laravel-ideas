<?php

use App\Models\User;

it('user can register', function () {
    visit('/register')
        ->fill('name', 'Jane Doe')
        ->fill('email', 'jane@example.com')
        ->fill('password', 'password1234!@')
        // ->debug()
        ->press('@register-button')
        ->assertPathIs('/ideas');

    expect(User::count())->toBe(1);
    // $this->assertAuthenticated();

});
