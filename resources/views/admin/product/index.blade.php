@extends('layouts.master_backend')
@section('content')

<div class="d-flex align-items-center justify-content-between mb-4">
    <h6 class="mb-0">เมนูอาหาร</h6>
    <a href="{{route('products.from_add')}}" class="btn btn-success mx-15"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a>
</div>
<div class="table-responsive">
    <table class="table text-start align-middle table-bordered table-hover mb-0">
        <thead>
            <tr class="text-white">

                <th scope="col">id</th>
                <th scope="col">ชื่อ</th>
                <th scope="col">รายเอียด</th>
                <th scope="col">ราคา</th>
                <th scope="col">รูป</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
@foreach ($products as $item)
            <tr>
                <td>{{ $products->firstItem()+$loop->index}} </td>
                <td> {{ $item->name}} </td>   
                <td> {{ $item->detail}} </td>   
                <td> {{ $item->price}} </td>
                <td> {{ $item->image}} </td>      

             
                <td><a class="btn btn-sm btn-primary" href="">แก้ไข</a></td>
                <td><a class="btn btn-sm btn-primary" href="">ลบ</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $products->links('pagination::bootstrap-5') }}
</div>
    
@endsection