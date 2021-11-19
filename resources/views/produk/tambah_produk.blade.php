@extends('layout/main')
@section('content')
<div class="container-fluid bg-light p-5">
    <div class="content-wrapper">
        <form>            
            <!-- Text input -->
            <div class="form-outline mb-4">
                <input type="text" id="form6Example3" class="form-control" />
                <label class="form-label" for="form6Example3">Nama Produk</label>
            </div>

            <!-- Message input -->
            <div class="form-outline mb-4">
                <textarea class="form-control" id="form6Example7" rows="4"></textarea>
                <label class="form-label" for="form6Example7">Deskripsi Produk</label>
            </div>
           
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
                <div class="col">
                <div class="form-outline">
                    <input type="text" id="form6Example1" class="form-control" />
                    <label class="form-label" for="form6Example1">Stok Produk</label>
                </div>
                </div>
                <div class="col">
                <div class="form-outline">
                    <input type="text" id="form6Example2" class="form-control" />
                    <label class="form-label" for="form6Example2">Harga Produk</label>
                </div>
                </div>
            </div>            

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Tambahkan!</button>
        </form>

    </div>
</div>
@endsection