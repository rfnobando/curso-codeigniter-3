<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('product_model');
	}

	// index -> muestra la lista de productos -> VISTA
	public function index()
	{
		$main_data = [
            'title' => 'Lista de productos',
			'inner_view_path' => 'products/index',
            'products' => $this->product_model->get_all_products()
		];

		$this->load->view('layouts/main', $main_data);
	}

	// show -> muestra un solo producto -> VISTA
	// products/show/$id
	public function show($id)
	{
        $product = $this->product_model->get_product_by_id($id);

        if($product == null) {
            show_404();
        }

        $main_data = [
            'title' => 'Producto #' . $id,
			'inner_view_path' => 'products/show',
            'product' => $product
		];

		$this->load->view('layouts/main', $main_data);
	}


	// create -> entrada de datos para un nuevo producto (form) -> VISTA
	public function create()
	{
		echo "Ruta products/create";
	}
	
	// store -> procesa los datos del nuevo producto -> PROCESO
	public function store()
	{
		//
	}

	// edit -> entrada de datos para actualizar un producto existente (form) -> VISTA
	public function edit($id)
	{
		echo "Ruta products/edit/$id";
	}

	// update -> procesa los nuevos datos del producto editado -> PROCESO
	public function update($id)
	{
		//
	}

	// delete -> borra un producto -> PROCESO
	public function delete($id)
	{
		//
	}
}

