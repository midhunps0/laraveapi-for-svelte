<?php
namespace App\Services;

use App\Models\Product;
use Modules\Ynotz\EasyApi\Traits\DefaultApiCrudHelper;
use Modules\Ynotz\EasyApi\Contracts\ApiCrudHelperContract;
use Modules\Ynotz\EasyApi\DataObjects\OperationEnum;

class ProductService implements ApiCrudHelperContract {
    use DefaultApiCrudHelper;

    public function __construct()
    {
        $this->modelClass = Product::class;

        // $this->query = null;
        // $this->idKey = 'id'; // id column in the db table to identify the items
        // $this->selects = '*'; // query select keys/calcs
        // $this->selIdsKey = 'id'; // selected items id key
        // $this->searchesMap = []; // associative array mapping search query params to db
        // $this->sortsMap = []; // associative array mapping sort query params to db columns
        // $this->filtersMap = [];
        // $this->orderBy = ['created_at', 'desc'];
        // $this->uniqueSortKey = null; // unique key to sort items. it can be a
        // $this->sqlOnlyFullGroupBy = true;
        // $this->defaultSearchColumn = 'name';
        // $this->defaultSearchMode = 'startswith'; // contains, startswith, endswith
        // $this->relations = [];
        // $this->processRelationsManually = false;
        // $this->processMediaManually = false;
        // $this->downloadFileName = 'results';
    }

    private function searchFieldsOperations($data): array
    {
        return [
            'name' => OperationEnum::STARTS_WITH
        ];
    }

    protected function relations()
    {
        return [];
        // // Example:
        // return [
        //     'author' => [
        //         'search_column' => 'id',
        //         'filter_column' => 'id',
        //         'sort_column' => 'id',
        //     ],
        //     'reviewScore' => [
        //         'search_column' => 'score',
        //         'filter_column' => 'id',
        //         'sort_column' => 'id',
        //     ],
        // ];
    }

    public function getDownloadCols(): array
    {
        return [];
        // // Example
        // return [
        //     'title',
        //     'author.name'
        // ];
    }

    public function getDownloadColTitles(): array
    {
        return [
            // 'name' => 'Name',
            // 'author.name' => 'Author'
        ];
    }

    private function getQuery()
    {
        return $this->modelClass::query();
        // // Example:
        // return $this->modelClass::query()->with([
        //     'author' => function ($query) {
        //         $query->select('id', 'name');
        //     }
        // ]);
    }

    public function getStoreValidationRules(): array
    {
        return [];
        // // Example:
        // return [
        //     'title' => ['required', 'string'],
        //     'description' => ['required', 'string'],
        // ];
    }

    public function getUpdateValidationRules($id = null): array
    {
        return [];
        // // Example:
        // $arr = $this->getStoreValidationRules();
        // return $arr;
    }

    public function processBeforeStore(array $data): array
    {
        // // Example:
        // $data['user_id'] = auth()->user()->id;

        return $data;
    }

    public function processBeforeUpdate(array $data): array
    {
        // // Example:
        // $data['user_id'] = auth()->user()->id;

        return $data;
    }

    public function processAfterStore($instance): void
    {
        //Do something with the created $instance
    }

    public function processAfterUpdate($oldInstance, $instance): void
    {
        //Do something with the updated $instance
    }
}

?>
