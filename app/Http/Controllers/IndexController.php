<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\Setting;
use App\Models\Video;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        $videos = Video::where("show_main", 1)->get()->toArray();
        return view("index", ["settings" => $settings, "videos" => $videos]);
    }
    public function allVideos()
    {
        $settings = Setting::first();
        $videos = Video::all();
        return view("all_videos", ["settings" => $settings, "videos" => $videos]);
    }
    public function showVideoInCategory($category)
    {
        $settings = Setting::first();
        $videosQuery = Video::where('category', 'LIKE', '%' . $category . '%')->get();

        $videos = $videosQuery->isEmpty() ? Video::all() : $videosQuery;
        return view("videos", ["settings" => $settings, "videos" => $videos]);
    }
    public function viewVideo($video_id)
    {
        $settings = Setting::first();
        $video = Video::where("id", $video_id)->first();
        $categories = json_decode($video->category, true);
        $videos = Video::inRandomOrder()->limit(10)->get();
        return view("video", ["settings" => $settings, "video" => $video, "videos" => $videos, "categories" => $categories]);
    }

    public function redirect($btn_name)
    {
        $settings = Setting::first();
        $link = $settings->$btn_name;
        $geo = session()->get('GEO');
        $action = Action::create([
            "type" => "redirect",
            "IP" => $_SERVER['REMOTE_ADDR'],
            "url" => $link,
            "GEO" => json_encode($geo),
            "country" => $geo->countryName,
             "btn" => $btn_name,
        ]);
        $action->save();
        return redirect($link);

    }
    public function auth($token)
    {
        if($token == env("PRIVATE_TOKEN")){
            session()->put("token", $token);
            return redirect()->route("admin");
        }
        return redirect()->route("index");
    }
}
