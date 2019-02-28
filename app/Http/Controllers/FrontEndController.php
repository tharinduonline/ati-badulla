<?php

namespace App\Http\Controllers;

use App\Tag;    
use App\Post;
use App\Event;
use App\Setting;
use App\Gallery;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class FrontEndController extends Controller
{

    public function index()
    {

        $events = Event::orderBy('created_at','desc')->paginate(6);
        $posts = Post::orderBy('created_at','desc')->paginate(3);

        return View('index',['events' => $events,'posts' => $posts])
        ->with('title', Setting::first()->site_name)
                ->with('categories', Category::all())
                ->with('news', Category::find(2))
                ->with('settings', Setting::first());

       /* return view('index')
                ->with('title', Setting::first()->site_name)
                ->with('categories', Category::all())
                ->with('news', Category::find(2))
                ->with('settings', Setting::first()); */
    }

    public function about()
    {

        $events = Event::orderBy('created_at','desc')->paginate(6);
        $posts = Post::orderBy('created_at','desc')->paginate(3);

        return View('pages.aboutus',['events' => $events,'posts' => $posts])
        ->with('title', Setting::first()->site_name)
                ->with('categories', Category::all())
                ->with('news', Category::find(2));
    }

    public function hndit()
    {

        $events = Event::orderBy('created_at','desc')->paginate(6);
        $posts = Post::orderBy('created_at','desc')->paginate(3);

        return View('pages.hndit',['events' => $events,'posts' => $posts])
        ->with('title', Setting::first()->site_name)
                ->with('categories', Category::all())
                ->with('news', Category::find(2));
    }

    
    public function hnda()
    {

        $events = Event::orderBy('created_at','desc')->paginate(6);
        $posts = Post::orderBy('created_at','desc')->paginate(3);

        return View('pages.hnda',['events' => $events,'posts' => $posts])
        ->with('title', Setting::first()->site_name)
                ->with('categories', Category::all())
                ->with('news', Category::find(2));
    }

    public function hndm()
    {

        $events = Event::orderBy('created_at','desc')->paginate(6);
        $posts = Post::orderBy('created_at','desc')->paginate(3);

        return View('pages.hndm',['events' => $events,'posts' => $posts])
        ->with('title', Setting::first()->site_name)
                ->with('categories', Category::all())
                ->with('news', Category::find(2));
    }

    public function english()
    {

        $events = Event::orderBy('created_at','desc')->paginate(6);
        $posts = Post::orderBy('created_at','desc')->paginate(3);

        return View('pages.english',['events' => $events,'posts' => $posts])
        ->with('title', Setting::first()->site_name)
                ->with('categories', Category::all())
                ->with('news', Category::find(2));
    }

    public function hndthm()
    {

        $events = Event::orderBy('created_at','desc')->paginate(6);
        $posts = Post::orderBy('created_at','desc')->paginate(3);

        return View('pages.hndthm',['events' => $events,'posts' => $posts])
        ->with('title', Setting::first()->site_name)
                ->with('categories', Category::all())
                ->with('news', Category::find(2));
    }


    public function events()
    {
        return view('pages.events')
                ->with('events', Event::all())
                ->with('news', Category::find(2));
    }

        public function contactus()
    {
        return view('pages.contactus');
    }

    //public function gallery()
   // {
       // return view('pages.gallery')
         //       ->with('galleries', Gallery::all());
   // }

        public function singlePost($slug)
    {
        $post = Post::where('slug', $slug)->first();

        $next_id = Post::where('id', '>', $post->id)->min('id');
        $prev_id = Post::where('id', '<', $post->id)->max('id');

        return view('single')->with('post', $post)
                             ->with('title', $post->title)
                             ->with('settings', Setting::first())
                             ->with('categories', Category::take(5)->get())
                             ->with('next', Post::find($next_id))
                             ->with('prev', Post::find($prev_id))
                             ->with('tags', Tag::all())
                             ->with('news', Category::find(2));

    }


     public function singleEvent($slug)
    {
        $event = Event::where('slug', $slug)->first();

        $next_id = Event::where('id', '>', $event->id)->min('id');
        $prev_id = Event::where('id', '<', $event->id)->max('id');

        return view('event')->with('event', $event)
                             ->with('title', $event->title)
                             ->with('settings', Setting::first())
                             ->with('categories', Category::take(5)->get())
                             ->with('next', Post::find($next_id))
                             ->with('prev', Post::find($prev_id))
                             ->with('news', Category::find(2))
                             ->with('notice', Category::find(3));

        


    }

    public function category($id)
    {
        $category = Category::find($id);

        return view('category')->with('category', $category)
                               ->with('title', $category->name)
                               ->with('settings', Setting::first())
                               ->with('categories', Category::take(5)->get());
    }



    public function tag($id)
    {
        $tag = Tag::find($id);

        return view('tag')->with('tag', $tag)
                          ->with('title', $tag->tag)
                          ->with('settings', Setting::first())
                          ->with('categories', Category::take(5)->get());
    }

    
}
