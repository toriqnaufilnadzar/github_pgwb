@extends('layout/main')
@section('content')
      
<div class="content-wrapper">
<table class="table">
  <thead>    
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">deskripsi produk</th>
      <th scope="col">harga</th>
      <th scope="col">jumlah</th>
      <th scope="col">edit</th>
    </tr>
  </thead>
  <tbody>
      <?php $no = 1; ?>
      @foreach($getProduct as $item)
    <tr>
      <td>{{ $no++ }}</td>     
      <td>{{ $item->nama_produk }}</td>     
      <td>{{ $item->diskripsi }}</td>     
      <td>{{ $item->jumlah }}</td>     
      <td>{{ $item->harga }}</td>     
      <td><a href="{{ route('hapusProduk', $item->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>             
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection