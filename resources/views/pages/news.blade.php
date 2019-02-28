@extends('layouts.front')
@section('title', 'News')
@section('class3', 'active')
@section('content')


<div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white">ATI NEWS</h1>
         </div>
    </div>
</div>


<div class="content-block">
   
    <div class="section-area section-sp1">
        <div class="container">
            <div class="ttr-blog-grid-3 row" id="masonry">

                    @if($posts->count() > 0)
                    @foreach($posts->reverse() as $post)
                <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                    <div class="recent-news">
                        <div class="action-box">
                            <img src="{{ $post->featured }}" alt="{{ $post->title }}">
                        </div>
                        <div class="info-bx">
                            <ul class="media-post">
                                <li><a href="{{ route('post.single', ['slug' => $post->slug ]) }}"><i class="fa fa-calendar"></i> {{ $post->created_at->toFormattedDateString() }}</a></li>
                            </ul>
                            <h5 class="post-title"><a href="{{ route('post.single', ['slug' => $post->slug ]) }}">{{ $post->title }}</a></h5>
                            <p>{!! str_limit($post->content, 100) !!}</p>
                            <div class="post-extra">
                                <a href="{{ route('post.single', ['slug' => $post->slug ]) }}" class="btn-link">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
          
        </div>
    </div>
   
</div>
@stop