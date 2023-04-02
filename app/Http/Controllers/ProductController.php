<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = new Product();
        $products = $products->getModels();

        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function show(Request $request)
    {
        $id = $request->id;
        $product = new Product();
        $product = $product->findOrFail($id)->toArray();
        return view('product.show', compact('product'));
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $product = new Product();
        $product = $product->findOrFail($id)->toArray();
        return view('product.edit', compact('product'));
    }

    public function store(Request $request)
    {
        $msg = "";

        $code = $request->code;
        $amount = $request->amount;
        $name = $request->name;
        $value = $request->value;

        try {
            $product = new Product();
            $product->code = $code;
            $product->amount = $amount;
            $product->name = $name;
            $product->value = $value;
            $product->save();
            $msg = "Produto salvo!";

        } catch (\Throwable $e) {
            $msg = 'Ocorreu um erro: ' . $e;
        }

        return redirect('/')->with('msg', $msg);
    }

    public function update(Request $request)
    {
        $msg = "";

        $code = $request->code;
        $amount = $request->amount;
        $name = $request->name;
        $value = $request->value;

        try {
            $product = new Product();
            $product->code = $code;
            $product->amount = $amount;
            $product->name = $name;
            $product->value = $value;
            $product->update();
            $msg = "Produto alterado!";

        } catch (\Throwable $e) {
            $msg = 'Ocorreu um erro: ' . $e;
        }

        return redirect('/')->with('msg', $msg);
    }

    public function delete($id)
    {
        $product = new Product();
        $product = $product->findOrFail($id);
        return view('product.delete', compact('product'));
    }

    public function destroy($id)
    {
        $product = new Product();
        $product = $product->findOrFail($id);
        $product->destroy();
        return redirect('/')->with('msg', 'Produto excluído!');
    }
}
