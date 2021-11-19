@extends('layout/main')
@section('content')
<div class="container-fluid bg-light">
    <div class="content-wrapper">
    
        <nav class="navbar navbar-expand-md">
            <div class="container">
                <h4><i class="fa fa-address-card-o"></i> Data Produk</h4>      
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item active">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-datasiswa"><i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Data Siswa</button>
                        </li>                           
                    </ul>
                </div>     
            </div>
        </nav>         
   
        <table class="table table-striped table-hover">
            <thead class="table-bordered">
                <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center" width="250">Nama Produk</th>
                    <th scope="col" class="text-center" width="250">Deskripsi</th>
                    <th scope="col" class="text-center">Harga</th>                                        
                    <th scope="col" class="text-center">Stok</th>
                    <th scope="col" class="text-center" width="100">Perubahan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                @php $no = 1; @endphp
                
                    <th scope="row" class="text-center">{{ $no++ }}</th>
                    <td></td>     
                    <td></td>     
                    <td></td>     
                    <td></td>                                                                  
                    <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-warning mr-2"><i class="fa fa-pencil-square" aria-hidden="true"></i></button>
                            <button type="button" class="btn btn-info mr-2"><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                            <button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </div>
                    </td>
                </tr>               
                
            </tbody>
        </table>

    </div>
</div>
@endsection