<?php

namespace App\Controllers;

// use App\Models\SubCategoryModel;


class Category extends BaseController
{   
    // protected $subCategoryModel;

    // public function __construct()
    // {
    //     $this->subCategoryModel = new SubCategoryModel();
    // }

    public function index()
    {
        $data = [
            'title' => 'Category Data'
        ];

        return view('category/v_list', $data);
    }

    public function detail($slug)
    {
        // $product = $this->productModel->getProduct($slug);
        $data = [
            'title' => 'Product Detail',
            'product' => $this->productModel->getProduct($slug)
        ];

        // jika produk tdk ada di tabel
        if (empty($data['product'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Product ' . $slug . ' is not found.');
        }
        return view('product/v_detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Product Added Form',
            'category' => $this->categoryModel->getCategory(),
            'validation' => \Config\Services::validation()
        ];

        return view('product/v_create', $data);
    }

    public function save()
    {

        if (!$this->validate([
            'product_name' => [
                'label'  => 'product name',
                'rules' => 'required|is_unique[product.product_name]',
                'errors' => [
                    'is_unique' => 'This product name already exists.'
                ]
            ],
            'price' => [

                'rules' => 'required|numeric',
                'errors' => [
                    'numeric' => 'Must be an integer.'
                ]
            ],
            'category_id' => [
                'label'  => 'category',
                'rules' => 'numeric',
                'errors' => [
                    'numeric' => 'choose a category.'
                ]
            ],
            'editor1' => [
                'label' => 'description',
                'rules' => 'required'
                
            ]

        ])) {

            $validation = \Config\Services::validation();
            return redirect()->to('/product/create')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('product_name'), '-', true);

        $this->productModel->save([
            'product_name' => $this->request->getVar('product_name'),
            'slug' => $slug,
            'description' => $this->request->getVar('editor1'),
            'category_id' => $this->request->getVar('category_id'),
            'price' => $this->request->getVar('price'),
            'image_id' => $this->request->getVar('image_id')
        ]);

        session()->setFlashdata('pesan', 'Product added successfully.');

        return redirect()->to('/product');
    }
}
