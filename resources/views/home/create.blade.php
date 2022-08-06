@extends('app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10 py-5">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('home') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label ">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label ">Foto</label>
                            <input class="form-control @error('foto') is-invalid @enderror" type="file" id="formFile"
                                accept=".jpg , .jpge, .png" name="foto">
                            @error('foto')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label ">Body</label>
                            <textarea name="body" cols="30" rows="10" class="form-control @error('body') is-invalid @enderror"></textarea>
                            @error('body')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button class="btn btn-secondary float-end"><i class="fa fa-save"></i> Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
