@extends('layouts.dashboard')


@section('title')
    {{ $product->name }}
@endsection

@section('content')
<div class="container-fluid">
  <div class="page-titles">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('tool-all') }}">Alat</a></li>
      <li class="breadcrumb-item active"><a href="{{ route('detail-tool', $product->slug) }}">{{ $product->name }}</a></li>
    </ol>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-xl-3 col-lg-6  col-md-6 col-xxl-5 ">
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade active show" id="first">
                  <img class="img-fluid" src="http://test-peminjaman.test/images/product/1.jpg" alt="">
                </div>
                <div role="tabpanel" class="tab-pane fade" id="second">
                  <img class="img-fluid" src="http://test-peminjaman.test/images/product/2.jpg" alt="">
                </div>
                <div role="tabpanel" class="tab-pane fade" id="third">
                  <img class="img-fluid" src="http://test-peminjaman.test/images/product/3.jpg" alt="">
                </div>
                <div role="tabpanel" class="tab-pane fade" id="for">
                  <img class="img-fluid" src="http://test-peminjaman.test/images/product/4.jpg" alt="">
                </div>
              </div>
              <div class="tab-slide-content new-arrival-product mb-4 mb-xl-0">
                <!-- Nav tabs -->
                <ul class="nav slide-item-list mt-3" role="tablist">
                  <li role="presentation" class="show">
                    <a href="#first" role="tab" data-toggle="tab" class="active" aria-selected="true">
                      <img class="img-fluid" src="http://test-peminjaman.test/images/tab/1.jpg" alt="" width="50">
                    </a>
                  </li>
                  <li role="presentation">
                    <a href="#second" role="tab" data-toggle="tab" class="" aria-selected="false"><img class="img-fluid" src="http://test-peminjaman.test/images/tab/2.jpg" alt="" width="50"></a>
                  </li>
                  <li role="presentation">
                    <a href="#third" role="tab" data-toggle="tab" class="" aria-selected="false"><img class="img-fluid" src="http://test-peminjaman.test/images/tab/3.jpg" alt="" width="50"></a>
                  </li>
                  <li role="presentation">
                    <a href="#for" role="tab" data-toggle="tab" class="" aria-selected="false"><img class="img-fluid" src="http://test-peminjaman.test/images/tab/4.jpg" alt="" width="50"></a>
                  </li>
                </ul>
              </div>
            </div>
            <!--Tab slider End-->
            <div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
              <div class="product-detail-content">
                <!--Product details-->
                <div class="new-arrival-content pr">
                  <h4>{{ $product->name }}</h4>
                  <p>Stok: <span class="item"> {{ $product->stock }} Pcs </span>
                  </p>
                  <p>Nomor BMN: <span class="item">{{ $product->nomor_bmn }}</span> </p>
                  <p class="text-content">
                    {{ $product->description }}
                  </p>
                  <!--Quantity start-->

                  <div class="form-row">
                      <div class="form-group col-md-2">
                        <input type="number" name="num" class="form-control input-btn input-number" value="1">
                      </div>
                      
                  </div>
                  <!--Quanatity End-->
                  <div class="shopping-cart mt-3">
                    <a class="btn btn-primary btn-lg" href="javascript:void(0)"><i class="fa fa-shopping-basket mr-2"></i>Add
                    to cart</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>

@endsection

@push('addon-scripts')

@endpush