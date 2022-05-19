@extends('layouts.masters')

@section('top')
@endsection

@section('content')

<div class="main-part">
<div class="cpanel">
<div class="icon-part">
<i class="fa fa-users" aria-hidden="true"></i><br>
<small>Users</small>
<p>{{ \App\User::count() }}</p>
</div>
<div class="card-content-part">
<a href="/user" class="small-box-footer">More info </a>
</div>
</div>
<div class="cpanel cpanel-green">
<div class="icon-part">
<i class="fa fa-list" aria-hidden="true"></i><br>
<small>Categories</small>
<p>{{ \App\Category::count() }}</p>
</div>
<div class="card-content-part">
<a href="{{ route('categories.index') }}">More Details </a>
</div>
</div>
<div class="cpanel cpanel-orange">
<div class="icon-part">
<i class="fa fa-cubes" aria-hidden="true"></i><br>
<small>Product</small>
<p>{{ \App\Product::count() }}</p>
</div>
<div class="card-content-part">
<a href="{{ route('products.index') }}">More Details </a>
</div>
</div>
<div class="cpanel cpanel-blue">
<div class="icon-part">
<i class="fa fa-tasks" aria-hidden="true"></i><br>
<small>Customer</small>
<p>{{ \App\Customer::count() }}</p>
</div>
<div class="card-content-part">
<a href="{{ route('customers.index') }}">More Details </a>
</div>
</div>
<div class="cpanel cpanel-red">
<div class="icon-part">
<i class="fa fa-shopping-cart" aria-hidden="true"></i><br>
<small>Penjualan</small>
<p>{{ \App\Sale::count() }}</p>
</div>
<div class="card-content-part">
<a href="{{ route('sales.index') }}">More Details </a>
</div>
</div>
<div class="cpanel cpanel-skyblue">
<div class="icon-part">
<i class="ion ion-stats-bars" aria-hidden="true"></i><br>
<small>Supplier</small>
<p>{{ \App\Supplier::count() }}</p>
</div>
<div class="card-content-part">
<a href="{{ route('suppliers.index') }}">More Details </a>
</div>
</div>
</div>
@endsection

@section('top')
@endsection
