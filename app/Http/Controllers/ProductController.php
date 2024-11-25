<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductDropdownResource;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ProductSimplifiedResource;
use App\Models\Product;
use App\Models\Status;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    const STATUS_APPROVED = 'approved';

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize('viewAny', Product::class);
        $products = Product::orderBy('id', 'desc')->paginate(10);

        return ProductSimplifiedResource::collection($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        Gate::authorize('create', Product::class);
        $product = Product::create(array_merge($request->validated(), array('user_id' => \Auth::id())));

        return new ProductResource($product);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        Gate::authorize('view', $product);

        return new ProductResource($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, string $id)
    {
        $product = Product::findOrFail($id);
        Gate::authorize('update', $product);
        $product->update($request->validated());

        return new ProductResource($product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        Gate::authorize('delete', $product);
        $product->delete();
        return response()->json(['Deleted successfully']);
    }

    public function getForDropdown()
    {
        Gate::authorize('viewAny', Product::class);
        //we could add enum with statuses' ids, so we don't need to fetch approved status record from the databases,
        //but let's make it simple
        $approvedStatus = Status::where('name', self::STATUS_APPROVED)->firstOrFail();
        $products = Product::where('status_id', $approvedStatus->id)->orderBy('id')->get();

        return ProductDropdownResource::collection($products);
    }
}
