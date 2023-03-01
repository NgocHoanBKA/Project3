<?php

namespace App\Repositories;


use App\Product;
use App\Utils\CommonUtils;
use Carbon\Carbon;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductRepository extends BaseRepository
{
    /**
     * @var array
     */

    protected $fieldSearchable = [
        'product_name', 'product_slug','category_id','product_desc','product_content','product_price','product_image','product_status','price_cost','ManufactureDate','ExpirationDate','expiry'
    ];

    protected $fieldInList = [
        'product_name', 'product_slug','category_id','product_desc','product_content','product_price','product_image','product_status','price_cost','ManufactureDate','ExpirationDate','expiry'
    ];

    protected $fieldFilter = [
        'status',
        'name'
    ];

    protected $fieldOrder = [
        'price',
        'created_at',
        'status',
        'products.created_at',
        'application_count'
    ];


    /**
     * Return searchable fields
     * @return array
     */
    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }



    /**
     * Configure the Model
     */
    public function model(): string
    {
        return Product::class;
    }

    public function create($input): Model
    {
        return parent::create($input);
    }

    public function show($id)
    {
        return $this->model->findOrFail($id);
    }

    public function update($input, $id)
    {
//        dd($input,$id);
        return parent::update($input, $id);
    }

    public function delete($id)
    {
        return parent::delete($id);
    }


    function beforeAllQuery()
    {
        $this->query->with('createdByUser');
        $this->query->with('applicationDetails.applications');
        $this->query->leftJoin('applications_details', 'products.id', '=', 'applications_details.product_id')
            ->groupBy('created_at', 'products.id')
            ->select('products.*', DB::raw('COUNT(applications_details.application_id) AS total'));
    }

    public function getProductNotApprove()
    {
        return $this->model->where('status', '=', 0)
            ->where('updated_at', '<=', Carbon::now()->subDays(7));
    }

    public function findBy($searchs)
    {
        $this->query = $this->model->newQuery();
        return $this->query->where(function ($query) use ($searchs) {
            $fields = array_keys($searchs);
            foreach ($fields as $field) {
                $query->where($field, $searchs[$field]);
            }
        })->get();
    }
    public function findProduct($product_name,$category_id){
        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('Y/m/d');
        return $this->model
            ->where('category_id','=',$category_id)
            ->where('product_name','=',$product_name)
            ->where('ExpirationDate','>',$today)
            ->first();
    }

}
