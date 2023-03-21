
@extends('layouts.dashboard')


@section('title')
    Edit Dosen
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
                                <form action="{{ route('room.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Kode</label>
                                                <input type="text" name="code" value="{{ $item->code }}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" name="name" value="{{ $item->name }}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Gedung</label>
                                                <select name="building" class="form-control default-select">
                                                    <option value="{{ $item->building }}" selected >{{ $item->building }}</option>
                                                    <option value=""  disabled>Pilih Gedung</option>
                                                    <option value="Gedung Utama">Gedung Utama</option>
                                                    <option value="Teaching Factory">Teaching Factory</option>
                                                    <option value="Tower A">Tower A</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Kapasitas</label>
                                                <input type="number" min="0" name="capacity" value="{{ $item->capacity }}" class="form-control">
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