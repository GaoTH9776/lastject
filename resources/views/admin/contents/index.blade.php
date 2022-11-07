@extends('layouts.master_backend')
@section('content') 

<div class="d-flex align-items-center justify-content-between mb-4">
    <h6 class="mb-0">คอนเทนท์</h6>
    <a href="/admin/contents/from">เพิ่ม</a>
</div>
<div class="table-responsive">
    <table class="table text-start align-middle table-bordered table-hover mb-0">
        <thead>
            <tr class="text-white">

                <th scope="col">id</th>
                <th scope="col">ชื่อ</th>
                <th scope="col">รายเอียด</th>
                <th scope="col">รูป</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
@foreach ($contents as $item)
            <tr>
                <td>{{ $contents->firstItem()+$loop->index}} </td>
                <td> {{ $item->name}} </td>   
                <td> {{ $item->details}} </td>   
                <td> {{ $item->image}} </td>      

             
                <td><a class="btn btn-sm btn-primary" href="{{ route('contents.edit',$item->id) }}">แก้ไข</a></td>
                <td><a class="btn btn-sm btn-primary" href="">ลบ</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $contents->links('pagination::bootstrap-5') }}
</div>
    
@endsection