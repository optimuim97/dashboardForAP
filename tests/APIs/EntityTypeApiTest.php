<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\EntityType;

class EntityTypeApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_entity_type()
    {
        $entityType = EntityType::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/entity_types', $entityType
        );

        $this->assertApiResponse($entityType);
    }

    /**
     * @test
     */
    public function test_read_entity_type()
    {
        $entityType = EntityType::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/entity_types/'.$entityType->id
        );

        $this->assertApiResponse($entityType->toArray());
    }

    /**
     * @test
     */
    public function test_update_entity_type()
    {
        $entityType = EntityType::factory()->create();
        $editedEntityType = EntityType::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/entity_types/'.$entityType->id,
            $editedEntityType
        );

        $this->assertApiResponse($editedEntityType);
    }

    /**
     * @test
     */
    public function test_delete_entity_type()
    {
        $entityType = EntityType::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/entity_types/'.$entityType->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/entity_types/'.$entityType->id
        );

        $this->response->assertStatus(404);
    }
}
