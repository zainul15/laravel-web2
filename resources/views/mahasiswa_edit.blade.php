@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Edit Mahasiswa</h1>
            <hr>
            @foreach($data as $datas)
            <form action="{{ route('mahasiswa.update', $datas->id) }}" method="post"> <!-- mahasiswa = nama controller // update = nama fungsi -->
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="usr" name="nama" value="{{ $datas->nama }}">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $datas->email }}">
                </div>
                <div class="form-group">
                    <label for="nohp">No Hp:</label>
                    <input type="text" class="form-control" id="nohp" name="nohp" value="{{ $datas->nohp }}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <textarea class="form-control" id="alamat" name="alamat">{{ $datas->alamat }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
            @endforeach
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection