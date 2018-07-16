<?php

/**
 * Cart management for user
 * It using cart class in codeigniter
 */
class Cart extends MY_Controller{
	/**
	 * Constructor
	 * Load some extensions
	 */
	public function __construct(){
		$this->load->library('cart');
		$this->load->library('session');
	}
	/**
	 * Show all items in cart
	 */
	public function index(){
		$this->load->model('CartModel');
		$data = [
			'template' => '/cart/index',
			'products' => $this->cart->contents()
		];
		$this->load->view('layout/app', $data);
	}
	/**
	 * Update item in cart
	 *
	 * URL to update exist item in cart:
	 * <?= site_url('cart/cart/update?rowid=' . $rowid . '&qty=' . $quantily) ?>
	 */
	public function update(){
		if($this->input->get('rowid') && $this->input->get('qty')){
			$data = [
				'rowid' => $this->input->get('rowid'),
       			'qty'   => $this->input->get('qty')
			];

			$this->cart->update($data);

			//TODO: Add success flash data if you want
		}

		//TODO: Add fail flash data if you want

		redirect('/cart','refresh');
	}

	/**
	 * Add new item to cart
	 *
	 * URL to add new item: <?= site_url('cart/cart/add?id=' . $product_id . '&qty=1&price=' . $product_price) ?>
	 */
	public function add(){
		if($this->input->get('id') && $this->input->get('qty') && $this->input->get('price')){
			$data = [
				'id'      => $this->input->get('id'),
		        'qty'     => $this->input->get('qty'),
		        'price'   => $this->input->get('price'),
		        'name'    => 'Product name',
		        // 'thumbnail' => $this->input->get('thumbnail') ? $this->input->get('thumbnail') : ''
			];

			$this->cart->insert($data);
			//TODO: Set success flash data if you want
		}

		//TODO: Add fail flash data if you want
		redirect('/cart','refresh');
	}
	/**
	 * Delete a item from cart
	 *
	 * URL to delete a item: <?= site_url('cart/cart/delete?rowid=' . $rowid) ?>
	 */
	public function delete(){
		if($this->input->get('rowid')){
			$this->cart->remove($this->input->get('rowid'));
			//TODO: Set success flash data if you want
		}
		//TODO: Add fail flash data if you want
		redirect('/cart','refresh');
	}
	/**
	 * Remove all items from cart
	 */
	public function remove_all(){
		$this->cart->destroy();
		//TODO: Add success flash data if you want
		redirect('/cart','refresh');
	}
}