<?php
namespace Modules\NsStoreAnalytics;

use Illuminate\Support\Facades\Event;
use App\Services\Module;

class NsStoreAnalyticsModule extends Module
{
    public function __construct()
    {
        parent::__construct( __FILE__ );
    }
}