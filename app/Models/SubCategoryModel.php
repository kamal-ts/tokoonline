<?php

namespace App\Models;

use CodeIgniter\Model;

class SubCategoryModel extends Model
{
    protected $table = 'subcategory';
    protected $useTimestamps = true;
    // tentukan field yg boleh user isi
    protected $allowedFields = ['subCategory', 'category_id'];


    public function getCategory()
    {
        return $this->join('category', 'category.id = subcategory.category_id')->findAll();
    }
}
