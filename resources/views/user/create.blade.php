@extends('layouts.app')

@section('title', 'Tambah User Sumberkedawung')

@section('content')

    <div class="container">
        <a href="/admin/user" class="btn btn-primary mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            placeholder="Nama">
                        {{-- <label for="">Name</label> <input type="text" class="form-control" name="title"
                            placeholder="Nama"> --}}

                    </div>
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        {{-- <small style="color:red">{{$message}}</small> --}}
                    @enderror
                    <div class="form-group">
                        <label for="level">Level</label>
                        <input type="text" class="form-control @error('level') is-invalid @enderror" name="level"
                            placeholder="Level">
                        {{-- <label for="">Level</label> <input type="text" class="form-control" name="title"
                            placeholder="Level"> --}}

                    </div>
                    @error('level')
                        <small class="text-danger">{{ $message }}</small>
                        {{-- <small style="color:red">{{$message}}</small> --}}
                    @enderror
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                            placeholder="Email">
                        {{-- <label for="">Email</label> <input type="text" class="form-control" name="title"
                            placeholder="Email"> --}}

                    </div>
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                        {{-- <small style="color:red">{{$message}}</small> --}}
                    @enderror
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                            placeholder="Password">
                        {{-- <label for="">Password</label> <input type="text" class="form-control" name="title"
                            placeholder="Password"> --}}
                    </div>
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                        {{-- <small style="color:red">{{ $message }}</small> --}}
                    @enderror
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
