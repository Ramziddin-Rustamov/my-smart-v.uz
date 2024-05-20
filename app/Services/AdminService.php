<?php
namespace App\Services;

use App\Repositories\AdminRepository;

class AdminService
{
    protected $repository;

    public function __construct(AdminRepository $repository)
    {
        $this->repository = $repository;
    }

    public function all()
    {
        return $this->repository->all();
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }

    public function create(array $attributes)
    {
        return $this->repository->create($attributes);
    }

    public function update($id, array $attributes)
    {
        return $this->repository->update($id, $attributes);
    }

    public function delete($id)
    {
        $this->repository->delete($id);
    }
    public function users()
    {
        return $this->repository->users();
    }
    public function quarters()
    {
       return  $this->repository->quarters();
    }

    public function getVillageDirector()
    {
        return $this->repository->getVillageDirector();
    }
}
