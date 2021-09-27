<?php namespace Tests\Repositories;

use App\Models\EntityType;
use App\Repositories\EntityTypeRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class EntityTypeRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var EntityTypeRepository
     */
    protected $entityTypeRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->entityTypeRepo = \App::make(EntityTypeRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_entity_type()
    {
        $entityType = EntityType::factory()->make()->toArray();

        $createdEntityType = $this->entityTypeRepo->create($entityType);

        $createdEntityType = $createdEntityType->toArray();
        $this->assertArrayHasKey('id', $createdEntityType);
        $this->assertNotNull($createdEntityType['id'], 'Created EntityType must have id specified');
        $this->assertNotNull(EntityType::find($createdEntityType['id']), 'EntityType with given id must be in DB');
        $this->assertModelData($entityType, $createdEntityType);
    }

    /**
     * @test read
     */
    public function test_read_entity_type()
    {
        $entityType = EntityType::factory()->create();

        $dbEntityType = $this->entityTypeRepo->find($entityType->id);

        $dbEntityType = $dbEntityType->toArray();
        $this->assertModelData($entityType->toArray(), $dbEntityType);
    }

    /**
     * @test update
     */
    public function test_update_entity_type()
    {
        $entityType = EntityType::factory()->create();
        $fakeEntityType = EntityType::factory()->make()->toArray();

        $updatedEntityType = $this->entityTypeRepo->update($fakeEntityType, $entityType->id);

        $this->assertModelData($fakeEntityType, $updatedEntityType->toArray());
        $dbEntityType = $this->entityTypeRepo->find($entityType->id);
        $this->assertModelData($fakeEntityType, $dbEntityType->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_entity_type()
    {
        $entityType = EntityType::factory()->create();

        $resp = $this->entityTypeRepo->delete($entityType->id);

        $this->assertTrue($resp);
        $this->assertNull(EntityType::find($entityType->id), 'EntityType should not exist in DB');
    }
}
