@extends('app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10 py-3">
            <img src="{{ url($post->foto) }}" alt="" class="img-fluid">
            <h3>{{ $post->title }}</h3>
            <p><em>penulis - {{ $post->user->username }}</em> <br> <em>{{ $post->created_at->format('F j, Y, g:i a') }}</em>
            </p>
            <p>{{ $post->body }}</p>
        </div>

        <hr>

        <div class="col-md-10">
            <h3>Coment</h3>
            @foreach ($post->coment as $coment)
                <br>
                <div class="card">
                    <div class="card-body">
                        <h5>
                            {{ $coment->user->username }}
                        </h5>
                        <p>
                            {{ $coment->body }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="col-md-10">
            <form action="{{ url('coment') }}" method="POST">
                @csrf
                <input type="hidden" name="id_post" value="{{ $post->id }}">
                <div class="mt-3">
                    <textarea name="body" id="" cols="30" rows="10"
                        class="form-control @error('body') is-invalid @enderror"></textarea>
                        @error('body')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <button class="btn btn-secondary float-end mt-3">Coment</button>
            </form>
        </div>
    </div>
@endsection
