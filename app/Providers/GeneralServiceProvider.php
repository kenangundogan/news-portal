<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\News;
use App\Models\Category;
use Illuminate\Support\Facades\Schema;

class GeneralServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        try {
            if (!Schema::hasTable('categories')) {
                return;
            }

            if (Category::all()->isEmpty()) {
                return;
            }

            $categories = Category::all();
            $news = News::all();
            $categories = $categories->whereIn('id', $news->pluck('category_id'));

            view()->share('categories', $categories);
        } catch (\Exception $e) {
            return;
        }
    }
}
