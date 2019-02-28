
                    <div class="col-lg-4 col-xl-4">
                            <aside  class="side-bar sticky-top">
                               
                                <div class="widget recent-posts-entry">
                                    <h6 class="widget-title">Recent News</h6>
                                    <div class="widget-post-bx">
                                            @foreach($news->posts()->orderBy('created_at', 'desc')->take(8)->get() as $post)
                                        <div class="widget-post clearfix">
                                            <div class="ttr-post-media"> <img src="{{ $post->featured }}" width="200" height="143" alt=""> </div>
                                            <div class="ttr-post-info">
                                                <div class="ttr-post-header">
                                                    <h6 class="post-title"><a href="{{ route('post.single', ['slug' => $post->slug ]) }}">{{ $post->title }}</a></h6>
                                                </div>
                                                <ul class="media-post">
                                                    <li><a href="{{ route('post.single', ['slug' => $post->slug ]) }}"><i class="fa fa-calendar"></i>{{ $post->created_at->toFormattedDateString() }}</a></li>
                                                 
                                                </ul>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                          
                            </aside>
                        </div>