<?php
/**
 * Created by PhpStorm.
 * User: Lainhart
 * Date: 2015-05-25
 * Time: 오전 11:44
 */
namespace Lainhart\YahooAPI;
use Illuminate\Support\ServiceProvider;

class YahooAPIServiceProvider extends ServiceProvider {
    public function register()
    {
        $this->app->bind(
            'Lainhart\YahooAPI\YahooPoxyService',
            'Lainhart\YahooAPI\YahooAuction'
        );
    }
}
