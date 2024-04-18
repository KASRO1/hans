<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\Category;
use App\Models\Video;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Setting;


class AdminController extends Controller
{


    public function index(Request $request) {
        $visitsByCountryQuery = Action::select('country', Action::raw('count(distinct IP) as unique_visits'))
            ->groupBy('country');

        $visitsByBtnQuery = Action::where("type", "redirect")
            ->select('btn', Action::raw('count(distinct IP) as unique_visits'))
            ->groupBy('btn');

        $totalUniqueVisitsQuery = Action::distinct('IP');

        if ($request->has('date')) {
            [$startDate, $endDate] = explode(' - ', $request->get('date'));

            $startDate = Carbon::createFromFormat('m/d/Y', trim($startDate));
            $endDate = Carbon::createFromFormat('m/d/Y', trim($endDate))->endOfDay(); // Включаем конец дня для конечной даты

            // Применяем фильтрацию по дате
            $visitsByCountryQuery->whereBetween('created_at', [$startDate, $endDate])->orderBy("desc");
            $visitsByBtnQuery->whereBetween('created_at', [$startDate, $endDate])->orderBy("desc");
            $totalUniqueVisitsQuery->whereBetween('created_at', [$startDate, $endDate])->orderBy("desc");
        }

        $visitsByCountry = $visitsByCountryQuery->get();
        $visitsByBtn = $visitsByBtnQuery->get();
        $totalUniqueVisits = $totalUniqueVisitsQuery->count('IP');

        // Возвращаем представление с данными
        return view('admin.index', [
            "visitsByCountry" => $visitsByCountry,
            "totalUniqueVisits" => $totalUniqueVisits,
            "visitsByBtn" => $visitsByBtn
        ]);
    }

    public function settings()
    {
        $Settings = Setting::first();
        if($Settings['btn_fansly'] == 1) {
            $Settings['btn_fansly'] = "checked";
        }
        if($Settings['btn_onlyfans_free'] == 1) {
            $Settings['btn_onlyfans_free'] = "checked";
        }
        if($Settings['btn_onlyfans_vip'] == 1) {
            $Settings['btn_onlyfans_vip'] = "checked";
        }


        return view('admin.settings', ["settings" => $Settings]);
    }

    public function settingsSave(Request $request)
    {

        $settings = Setting::first();
        $settings->onlyfans_vip = $request->onlyfans_vip;
        $settings->onlyfans_free = $request->onlyfans_free;
        $settings->fansly = $request->fansly;
        $settings->instagram = $request->instagram;
        $settings->twitter = $request->twitter;
        $settings->btn_fansly = $request->fansly_check == "" ? 0 : 1;
        $settings->btn_onlyfans_free = $request->onlyfans_free_check == "" ? 0 : 1;
        $settings->btn_onlyfans_vip = $request->onlyfans_vip_check  == "" ? 0 : 1;
        $settings->save();
        return redirect()->route('settings');

    }

    public function videos()
    {
        $videos = Video::all();
        $category = Category::all();
        return view("admin.videos", ["videos" => $videos, "category" => $category]);
    }

    public function videoAdd(Request $request)
    {
        $show_main = $request->show_main == "on" ? 1 : 0;

        $preview = $request->file('preview');
        $video = $request->file('video');
        $categories = json_decode($request->category, true);
        foreach ($categories as $key => $category) {
            $categories[$key] = $category['value'];
        }
        $categories = json_encode($categories);
        $preview_path = $preview->store('previews', 'public');
        $video_path = $video->store('videos', 'public');
        $video = new Video();
        $video->title = $request->title;
        $video->path_preview = $preview_path;
        $video->description = $request->description;
        $video->time_video = $request->video_time;
        $video->category = $categories;
        $video->path_video = $video_path;
        $video->show_main = $show_main;
        $video->save();

        return redirect()->route('settings.videos');
    }
    public function createCategory(Request $request)
    {
        $category = new Category();
        $category->title = $request->title;
        $category->save();

        return redirect()->route('settings.videos');
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        return back();
    }
}
