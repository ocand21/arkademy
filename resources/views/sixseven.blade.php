@extends('layouts.app')

@section('content')
<div class="col-lg-12">

<h1 class="mt-5">Soal Nomor 6</h1>
<p>Tabel <b>product_categories</b></p>
<table class="table table-hover">
	<tbody>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Created_Date</th>
		</tr>
		@foreach($product_categories as $category)
		<tr>
			<td>{{ $category->id }}</td>
			<td>{{ $category->name }}</td>
			<td>{{ $category->created_at }}</td>
		</tr>
		@endforeach
	</tbody>
	
</table>

<p>Tabel <b>products</b></p>
<table class="table table-hover">
	<tbody>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Category_Id</th>
			<th>Created_Date</th>
		</tr>
		@foreach($tproducts as $tproduct)
		<tr>
			<td>{{ $tproduct->id }}</td>
			<td>{{ $tproduct->name }}</td>
			<td>{{ $tproduct->category_id }}</td>
			<td>{{ $tproduct->created_at }}</td>
		</tr>
		@endforeach
	</tbody>
	
</table>

<p>Query SQL</p>
<code>SELECT c.id, c.name, COUNT(p.id) AS jumlah_product 
FROM product_categories c, products p 
WHERE c.id=p.category_id GROUP BY p.category_id;</code>
<p style="margin-top: 5px">Syntax di Laravel</p>
<code>$products = DB::table('product_categories')
                    ->join('products', 'product_categories.id', '=', 'products.category_id')
                    ->select('product_categories.id', 'product_categories.name', DB::raw('COUNT(products.id) as Jumlah_Product'))
                    ->groupBy('products.category_id', 'product_categories.id', 'product_categories.name')->get();</code>

<h1 class="mt-5">Soal Nomor 7</h1>
<table class="table table-hover">
	<tbody>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Jumlah Product</th>
		</tr>
		@foreach($products as $product)
		<tr>
			<td>{{ $product->id }}</td>
			<td>{{ $product->name }}</td>
			<td>{{ $product->Jumlah_Product }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
@endsection
