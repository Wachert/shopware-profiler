<?php
namespace ShopwarePlugins\Profiler\Subscriber;


use Enlight\Event\SubscriberInterface;

class ProfilerController implements SubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            'Enlight_Controller_Dispatcher_ControllerPath_Frontend_Profiler' => 'onProfilerController'
        ];
    }
    
    public function onProfilerController()
    {
        Shopware()->Template()->addTemplateDir(
            Shopware()->Container()->getParameter('profiler.plugin_dir') . 'Views/'
        );

        return Shopware()->Container()->getParameter('profiler.plugin_dir') . 'Controllers/Frontend/Profiler.php';
    }
}
