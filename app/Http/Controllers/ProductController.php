<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
	public function getIndex(){
		$produits = Product::All();
		return view('product.product',['produits'=>$produits]);
	}

	public function Ajoutstock($id){
		$stock=Product::find($id);
		$stock->stock++;
		$stock->save();
		return back();
	}
	public function Enleverstock($id){
		$stock=Product::find($id);
		$stock->stock--;
		$stock->save();
		return back();
	}
	public function AjoutProduit(){
		return View('product.ajoutproduit');
	}
	
	public function Produitajouter(Request $request) {

		$newProduct = new Product;
		$newProduct->name = $request->name;
		$newProduct->price = $request->price;
		$newProduct->description = $request->description;
		$newProduct->stock = $request->stock;
		$newProduct->save();

		return redirect('/product');
	}
	public function DeleteProduct($id) {


		$deleteProduct =Product::find($id);
		$deleteProduct->delete();
		return redirect('/product');
	}
	public function getEdit($id) {

		$modif =Product::find($id);
		// return view('product.edit',['produits'=>$modif]);
		return view ('product.edit',compact('modif'));
	}

	public function update(Request $request,$id) {

		$editProduct =Product::find($id);
		$editProduct->name = $request->input('name');
		$editProduct->price = $request->input('price');
		$editProduct->stock = $request->input('stock');
		$editProduct->update();

		return redirect('/product');
	}
}

