<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.cache_warmer' shared service.

return $this->services['twig.cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer((new \Symfony\Component\DependencyInjection\ServiceLocator(array('twig' => function () {
    $f = function (\Twig\Environment $v) { return $v; }; return $f(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'});
})))->withContext('twig.cache_warmer', $this), ${($_ = isset($this->services['templating.finder']) ? $this->services['templating.finder'] : $this->load('getTemplating_FinderService.php')) && false ?: '_'}, array(($this->targetDirs[3].'/app') => 'app', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form') => NULL));
