@extends('app')

@section('content')
    <div class="row justify-content-center">

        <div class="col-md-10">
            <div class="row justify-content-center">
                <div class="col-md-10 pb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Tulisan hari ini</h3>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ url('create') }}" class="btn btn-secondary float-end"> New Write</a>
                        </div>
                    </div>
                    <hr>
                </div>
                @foreach ($list_post as $post)
                    <div class="col-md-10">
                        <a href="{{ url($post->id) }}" class="text-decoration-none">
                            <h5 class="text-primary">{{ $post->title }}</h5>
                        </a>
                        <p>
                            <em>- {{ $post->user->username }}</em> <br>
                            {{ str_word_count($post->body) > 60 ? substr($post->body, 0, 200) . '...' : $post->body }}
                        </p>
                        <footer class="blockquote-footer">created at <cite
                                title="Source Title">{{ $post->created_at->format('F j, Y, g:i a') }}</cite>
                        </footer>
                        <hr>
                    </div>
                @endforeach

            </div>
        </div>

    </div>
@endsection
