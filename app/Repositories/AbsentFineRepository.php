<?php

declare(strict_types=1);

namespace App\Repositories;

use App\AbsentFine;
use App\Interfaces\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class AbsentFineRepository implements BaseRepositoryInterface
{
    public function all(): Collection
    {
        return AbsentFine::all();
    }

    public function paginate(int $perPage = 10, array $filter = []): LengthAwarePaginator
    {
        $query = AbsentFine::query();

        // if (isset($filter['search'])) {
        //     $query->where('name', 'like', '%' . $filter['search'] . '%');
        // }

        return $query->orderBy('id', 'desc')->paginate($perPage);
    }

    public function create(array $data): ?AbsentFine
    {
        return AbsentFine::create($data);
    }

    public function update(array $data, int $id)
    {
        return AbsentFine::find($id)->update($data);
    }

    public function delete(int $id)
    {
        return AbsentFine::destroy($id);
    }

    public function show(int $id)
    {
        return AbsentFine::find($id);
    }
}
