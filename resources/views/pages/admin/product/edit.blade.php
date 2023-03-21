@extends('layouts.dashboard')


@section('title')
    Edit Produk
@endsection

{{-- Content --}}
@section('content')

<div
    class="section-content section-dashboard-home"
    >
    <div class="container-fluid">
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nomor BMN</label>
                                            <input type="text" name="nomor_bmn" value="{{ $item->nomor_bmn }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" name="name" value="{{ $item->nama }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>User</label>
                                            <select name="users_id" class="form-control default-select">
                                                <option value="{{ $item->users_id }}" selected>{{ $item->user->name }}</option>
                                                <option value="" disabled>Pilih User</option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <select name="categories_id" class="form-control default-select">
                                                <option value="{{ $item->categories_id }}" selected>{{ $item->category->name }}</option>
                                                <option value="" disabled>Pilih Kategori</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Ruangan</label>
                                            <select name="rooms_id" class="form-control default-select">
                                                <option value="{{ $item->rooms_id }}" selected>{{ $item->room->name }}</option>
                                                <option value="" disabled>Pilih Ruangan</option>
                                                @foreach ($rooms as $room)
                                                    <option value="{{ $room->id }}">{{ $room->code }} - {{ $room->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <input type="text" name="description" value="{{ $item->description }}" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Stock</label>
                                            <input type="text" name="stock" value="{{ $item->stock }}" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Lokasi</label>
                                            <input type="text" name="location" value="{{ $item->location }}" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Kondisi</label>
                                            <select name="condition" class="form-control default-select">
                                                <option value="{{ $item->condition }}" selected>{{ $item->condition }}</option>
                                                <option value="" disabled>Pilih Kondisi</option>
                                                <option value="Baik">Baik</option>
                                                <option value="Rusak">Rusak</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <button class="btn btn-primary px-5">
                                            Save now
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection