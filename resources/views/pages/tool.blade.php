@extends('layouts.dashboard')


@section('title')
    List Alat
@endsection

@section('content')
<div
    class="section-content section-dashboard-home"
    >
    <div class="container-fluid">
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-body">
                                    <div class="row">
                                        @forelse ($products as $product)
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                                <a href="{{ route('detail-tool', $product->slug) }}">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="new-arrival-product">
                                                                <div class="new-arrivals-img-contnent">
                                                                    <img class="img-fluid" src="{{ Storage::url($product->galleries->first()->photos) }}" alt="">
                                                                </div>
                                                                <div class="new-arrival-content text-center mt-3">
                                                                    <h4>
                                                                        {{ $product->name }}
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @empty
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="text-center">
                                                    Data Alat Kosong
                                                </div>
                                            </div>
                                        @endforelse
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mt-4">
                                            {{ $products->links() }}
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
</div>

@endsection

@push('addon-scripts')

@endpush