@extends('layouts.app')

@section('hero')
    @include('app.partials.hero')
@endsection

@section('content')
    <div class="row mt-5">
        @foreach($articles as $article)
            <div class="col-6 pb-3">
                <div class="card">
                    <img src="{{$article->img}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <p class="card-text">{{$article->getBodyPreview()}}</p>
                        <p>{{$article->createdAtForHumans()}}</p>
                        <a href="{{ route('article.show', $article->slug) }}" class="btn btn-primary">Подробнее</a>
                        <div class="mt-3">
                            <span class="badge bg-primary">{{$article->state->likes}} <i class="far fa-thumbs-up"></i></span>
                            <span class="badge bg-danger">{{$article->state->views}} <i class="far fa-eye"></i></span>
                        </div>
                        <div class="mt-4">
                            Теги:
                            @foreach ($article->tags as $tag)
                                <a href="{{ route('article.tag', $tag->id) }}" class="badge bg-danger">{{$tag->label}}</a>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
