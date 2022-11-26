<?php

namespace App\Http\Controllers;

use App\Models\DetailProduct;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductTag;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("adminDashboard.products.index", [
            "products" => Product::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("adminDashboard.products.create", [
            "tags" => Tag::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            "name" => "required|max:255",
            "slogan" => "required|max:500",
            "excerpt" => "required",
            "age" => "required",
            "description" => "required|min:20",
            "price" => "required|min_digits:4",
            "tags" => "required",
            "body" => "required",
            "content" => "required",
            "duration" => "required",
            "donts" => "required",
            "benefits" => "required",
            "images" => 'required',
        ]);

        $validateData['star'] = mt_rand(3 * 10, 4 * 10) / 10;

        $new_product = Product::create($validateData);

        foreach ($request->tags as $tag) {
            ProductTag::create([
                "product_id" => $new_product->id,
                "tag_id" => $tag,
            ]);
        }

        DetailProduct::create([
            "product_id" => $new_product->id,
            "body" => $request->body,
            "contents" => $request->content,
            "duration" => $request->duration,
            "donts" => $request->donts,
            "benefits" => $request->benefits
        ]);

        if ($request->has('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = $image->store('product-images');
                ProductImage::create([
                    'product_id' => $new_product->id,
                    'image' => $imageName
                ]);
            }
        }

        return redirect('/admin/dashboard/products')->with('success', "New product has been created");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view("adminDashboard.products.show", [
            "product" => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view("adminDashboard.products.edit", [
            "product" => $product,
            "tags" => Tag::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validateData = $request->validate([
            "name" => "required|max:255",
            "slogan" => "required|max:500",
            "excerpt" => "required",
            "age" => "required",
            "description" => "required|min:20",
            "price" => "required|min_digits:4",
            "tags" => "required",
            "body" => "required",
            "content" => "required",
            "duration" => "required",
            "donts" => "required",
            "benefits" => "required",
        ]);


        foreach ($product->tags as $tag) {
            ProductTag::where("product_id", $product->id)->where("tag_id", $tag->id)->delete();
        }

        foreach ($request->tags as $tag) {
            ProductTag::create([
                "product_id" => $product->id,
                "tag_id" => $tag,
            ]);
        }

        DetailProduct::where('product_id', $product->id)->update([
            "product_id" => $product->id,
            "body" => $request->body,
            "contents" => $request->content,
            "duration" => $request->duration,
            "donts" => $request->donts,
            "benefits" => $request->benefits
        ]);

        if ($request->has('images')) {
            foreach ($product->images as $image) {
                Storage::delete($image->image);
                ProductImage::where('id', $image->id)->delete();
            }

            foreach ($request->file('images') as $image) {
                $imageName = $image->store('product-images');
                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $imageName
                ]);
            }
        }

        Product::where('id', $product->id)->update([
            "name" => $validateData['name'],
            "slogan" => $validateData['slogan'],
            "excerpt" => $validateData['excerpt'],
            "age" => $validateData['age'],
            "description" => $validateData['description'],
            "price" => $validateData['price'],
        ]);

        return redirect('/admin/dashboard/products')->with('success', "Product has been updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        foreach ($product->tags as $tag) {
            ProductTag::where("product_id", $product->id)->where("tag_id", $tag->id)->delete();
        }

        DetailProduct::where('product_id', $product->id)->delete();

        foreach ($product->images as $image) {
            Storage::delete($image->image);
            ProductImage::where('id', $image->id)->delete();
        }

        Product::destroy($product->id);

        return redirect('/admin/dashboard/products')->with('success', "Product has been deleted");
    }
}
