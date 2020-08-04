<?php

namespace App\Controllers;

use App\Models\SubCategoryModel;


class SubCategory extends BaseController
{
    protected $subCategoryModel;

    public function __construct()
    {
        $this->subCategoryModel = new SubCategoryModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Sub Category Data',
            'profil' => $this->nama,
            'category' => $this->subCategoryModel->getCategory(),
            'validation' => \Config\Services::validation()
        ];

        return view('subCategory/v_list', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'category' => [
                'rules' => 'required|is_unique[product.product_name]',
            ],

            'subCategory' => [
                'label'  => 'Sub Category',
                'rules' => 'required|is_unique[subcategory.subCategory]',
                'errors' => [
                    'is_unique' => 'The {field} you entered already exists'
                ]
            ]
        ])) {

            $validation = \Config\Services::validation();
            return redirect()->to('/subcategory')->withInput()->with('validation', $validation);
        }
    }
}
