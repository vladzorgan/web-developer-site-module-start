<?php

namespace App\Modules\ModuleHelper\Repositories;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class BaseRepository
{
    protected string $model;
    protected Builder $query;

    public function __construct()
    {
        if (isset($this->model)) {
            $this->query = app($this->model)->query();
        }
    }

    /**
     * Возвращает все данные из БД
     * @param bool $paginate
     * @return Collection
     */
    public function all(bool $paginate = false): Collection
    {
        if ($paginate) {
            return $this->query->paginate();
        }

        return $this->query->get();
    }

    /**
     * Возвращает запрос по модели
     * @return Builder
     */
    public function query(): Builder
    {
        return $this->query;
    }
}
