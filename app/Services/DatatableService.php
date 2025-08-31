<?php
// app/Services/DataTableService.php
namespace App\Services;

use Illuminate\Database\Eloquent\Builder;

class DatatableService
{
    public static function apply(Builder $query, $request, $searchCols = [], $allowedSort = [])
    {
        $page    = max((int) $request->get('page', 1), 1);
        $perPage = min(max((int) $request->get('per_page', 10), 1), 100);
        $q       = trim($request->get('q', ''));
        $sortBy  = $request->get('sort_by', 'id');
        $sortDir = $request->get('sort_dir', 'asc');

        // search
        if ($q && $searchCols) {
            $query->where(function ($w) use ($q, $searchCols) {
                foreach ($searchCols as $col) {
                    $w->orWhere($col, 'ilike', "%{$q}%");
                }
            });
        }

        // sort
        if (!in_array($sortBy, $allowedSort)) {
            $sortBy = $allowedSort[0] ?? 'id';
        }
        $query->orderBy($sortBy, $sortDir === 'desc' ? 'desc' : 'asc');

        $total = $query->getModel()->newQuery()->count();
        $filtered = (clone $query)->count();

        $rows = $query->forPage($page, $perPage)->get();

        return compact('rows','page','perPage','total','filtered','sortBy','sortDir','q');
    }
}
