<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            $news_channels = array(
                array(
                    'name' => 'jvpnews',
                    'url' => 'http://www.jvpnews.com/rss.xml'
                ),
                array(
                    'name' => 'lankasri',
                    'url' => 'http://news.lankasri.com/rss.xml'
                ),
                array(
                    'name' => 'canadamirror',
                    'url' => 'http://www.canadamirror.com/rss.xml'
                ),
                array(
                    'name' => 'tamilwin',
                    'url' => 'http://www.tamilwin.com/rss.xml'
                ),
                array(
                    'name' => 'cineulagam',
                    'url' => 'http://www.cineulagam.com/rss.xml'
                ),
                array(
                    'name' => 'manithan',
                    'url' => 'http://www.manithan.com/rss.xml'
                )
            );
            foreach ($news_channels as $channel) {
                $contents = file_get_contents($channel['url']);
                $path = public_path().DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'news'.DIRECTORY_SEPARATOR.$channel['name'].'.xml';
                file_put_contents($path, $contents);
            }           
        })->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
