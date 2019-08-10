<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestResponse;
use App\Models\User;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, RefreshDatabase;

    public function setUp()
    {
        parent::setUp();

        $this->withoutExceptionHandling();

        TestResponse::macro('jsonData', function ($key) {
            return $this->decodeResponseJson()[$key];
        });

        // EloquentCollection::macro('assertEquals', function ($items) {
        //     Assert::assertCount($items->count(), $this);

        //     $this->zip($items)->each(function ($pair) {
        //         Assert::assertTrue($pair[0]->is($pair[1]));
        //     });

        //     // dd(collect([1, 2, 3])->zip([4, 5, 6])); //[[1, 4], [2, 5], [3, 6]];
        // });
    }

    protected function signIn($user = null)
    {
        $user = $user ?: create(User::class);
        $this->actingAs($user);
        return $this;
    }

    protected function apiPath($endpoint)
    {
        return "/api/{$endpoint}";
    }
}
