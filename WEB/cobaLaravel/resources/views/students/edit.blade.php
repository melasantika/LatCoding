@extends('layout/main')

@section('title', 'Form edit data Siswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Form edit data Siswa</h1>
            <form method="post" action="/students/{{$student->id}}">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukan nama" value="{{$student->nama}}">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nis">Nis</label>
                    <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" name="nis" placeholder="Masukan nis" value="{{$student->nis}}">
                    @error('nis')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Masukan email" value="{{$student->email}}">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Masukan jurusan" value="{{$student->jurusan}}">
                </div>
                <button type="submit" class="btn btn-primary">Ubah data</button>
            </form>

        </div>
    </div>
</div>
@endsection