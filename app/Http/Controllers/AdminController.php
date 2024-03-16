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

        // Проверяем наличие параметра 'date' в запросе
        if ($request->has('date')) {
            // Получаем диапазон дат из GET-параметра и разделяем его
            [$startDate, $endDate] = explode(' - ', $request->get('date'));

            // Преобразуем строки в объекты Carbon для использования в запросах
            $startDate = Carbon::createFromFormat('m/d/Y', trim($startDate));
            $endDate = Carbon::createFromFormat('m/d/Y', trim($endDate))->endOfDay(); // Включаем конец дня для конечной даты

            // Применяем фильтрацию по дате
            $visitsByCountryQuery->whereBetween('created_at', [$startDate, $endDate]);
            $visitsByBtnQuery->whereBetween('created_at', [$startDate, $endDate]);
            $totalUniqueVisitsQuery->whereBetween('created_at', [$startDate, $endDate]);
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
}
