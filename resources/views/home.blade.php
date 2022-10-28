@extends('layouts.master_backend')

@section('content')
<div class="col-sm-9 col-xl-6">
    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
        <i class="fa fa-chart-line fa-3x text-primary"></i>
        <div class="ms-3">
            <p class="mb-2">ยอดขายวันนี้</p>
            <h6 class="mb-0">1234บาท</h6>
        </div>
    </div>
</div>
<div class="col-sm9 col-xl-6">
    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
        <i class="fa fa-chart-bar fa-3x text-primary"></i>
        <div class="ms-3">
            <p class="mb-2">จำนวนการขายวันนี้</p>
            <h6 class="mb-0">1234บาท</h6>
        </div>
    </div>
</div>

<!-- Sale & Revenue End -->


<!-- Sales Chart Start -->
<div class="container-fluid pt-4 px-4">
<div class="row g-4">
<div class="col-sm-12 col-xl-6">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">ยอดการขายรายสัปดาห์</h6>
            <a href="">Show All</a>
        </div>
        <canvas id="worldwide-sales"></canvas>
    </div>
</div>
<div class="col-sm-12 col-xl-6">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">ตารางกราฟการขายอาหารยอดนิยม</h6>
            <a href="">Show All</a>
        </div>
        <canvas id="salse-revenue"></canvas>
    </div>
</div>
</div>
</div>
<!-- Sales Chart End -->


<!-- Recent Sales Start -->

<!-- Recent Sales End -->


<!-- Widgets Start -->

<!-- Widgets End -->
@endsection
