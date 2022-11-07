@extends('layouts.master_backend')
@section('content')

<div class="d-flex align-items-center justify-content-between mb-4">
    <h6 class="mb-0">ประเภทอาหาร</h6>
    <a href="/admin/typeproducts/from">เพิ่ม</a>
</div>
<div class="table-responsive">
    <table class="table text-start align-middle table-bordered table-hover mb-0">
        <thead>
            <tr class="text-white">

                <th scope="col">id</th>
                <th scope="col">ชื่อ</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
@foreach ($typeproducts as $item)
            <tr>
                <td>{{ $typeproducts->firstItem()+$loop->index}} </td>
                <td> {{ $item->name}} </td>     
   

             
                <td><a class="btn btn-sm btn-primary" href="{{ route('typeproducts.edit',$item->id) }}">แก้ไข</a></td>
                <td><a class="btn btn-sm btn-primary" href="">ลบ</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $typeproducts->links('pagination::bootstrap-5') }}
</div>
    
@endsection