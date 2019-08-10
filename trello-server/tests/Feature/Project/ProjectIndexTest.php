<?php

namespace Tests\Feature\Project;

use Tests\TestCase;
use App\Models\Project;

class ProjectIndexTest extends TestCase
{
    /** @test */
    public function it_lists_all_user_projects()
    {
        $user = create('App\Models\User');

        $userProject = create(Project::class);
        create('App\Models\UserProject', [
            'user_id' => $user->id,
            'project_id' => $userProject->id
        ]);

        $notUserProject = create(Project::class);

        $response = $this->get($this->apiPath('projects') . "?api_token={$user->api_token}");

        $response
            ->assertJsonFragment([
                'title' => $userProject->title,
                'description' => $userProject->description
            ])
            ->assertJsonMissing([
                'title' => $notUserProject->title,
                'description' => $notUserProject->description
            ]);
    }
}
