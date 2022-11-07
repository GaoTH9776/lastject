@extends('layouts.master_backend')
@section('content')

<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms Edit/</span> Typeproduct</h4>
    
    <div class="row">
      <!-- Basic -->
      <div class="row">
        <div class="col-md-11.5">
          <div class="card mb-6">
            <div class="card-body demo-vertical-spacing demo-only-element">
              <div class="input-group">
                <form action="{{ route('typeproducts.update',$typeproducts->id) }}" method="post">
                  @csrf

              <h5 class="card-header">Name</h5>
                <input
                type="text"
                class="form-control"
                placeholder="Name"
                aria-label="Name"
                aria-describedby="basic-addon11"
                name="name" value="{{$typeproducts->name}}"
                />
              </div>
              
           
                
               
                
                <Button type="submit" value="บันทึก" class="btn btn-success mt-3" >บันทึก</Button>
                <a href="{{ route('typeproducts.index') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
              </div> 
            </div>
          </div>
    {{-- </form> --}}
  </div>
  <!-- / Content -->

@endsection