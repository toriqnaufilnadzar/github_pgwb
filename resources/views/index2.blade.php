@extends('layout/main')
@section('content')
<div class="container">
    <div class="content-wrapper">
        <h5>ini index 2</h5>
        <!-- produk -->
        $table->bigIncrements('id');
            $table->string('name', 191);
            $table->string('description', 191);
            $table->string('stock', 191);
            $table->string('price', 191); 
            $table->integer('category_id');       
            $table->timestamps();
        <!-- kategori -->
        $table->bigIncrements('id');
            $table->integer('name', 191);
            $table->integer('description', 191);
            $table->timestamps();
        <!-- customer -->
        $table->bigIncrements('id');
            $table->integer('name', 191);
            $table->integer('email', 191);
            $table->text('address');
            $table->integer('phone', 191);
            $table->timestamps();
        <!-- order -->
        $table->bigIncrements('id');
            $table->string('invoice', 191);
            $table->bigInteger('customer_id');      
            $table->bigInteger('user_id');      
            $table->bigInteger('total', 11);
            $table->timestamps();
        <!-- order detail -->
        $table->bigIncrements('id');
            $table->bigInteger('order_id');
            $table->bigInteger('product_id');      
            $table->bigInteger('qty', 11);
            $table->bigInteger('price', 11);
            $table->timestamps();
    </div>
</div>
@endsection