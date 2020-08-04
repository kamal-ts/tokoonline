<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $useTimestamps = true;
    // tentukan field yg boleh user isi
    protected $allowedFields = ['product_name', 'slug', 'description', 'category_id', 'price', 'image_id'];


    public function getProduct($slug = false)
    {
        if ($slug == false) {
            return $this->join('subcategory', 'subcategory.id = product.category_id')->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
