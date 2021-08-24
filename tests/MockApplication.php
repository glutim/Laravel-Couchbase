<?php

/**
 * Class MockApplication
 *
 * for test only
 */
class MockApplication extends \Illuminate\Container\Container implements \Illuminate\Contracts\Foundation\Application
{
    /**
     *  {@inheritdoc}
     */
    public function get($id)
    {
        // TODO: Implement get() method.
    }

    /**
     *  {@inheritdoc}
     */
    public function has($id)
    {
        // TODO: Implement has() method.
    }

    public function runningUnitTests()
    {
        return true;
    }

    public function runningInConsole()
    {
        // TODO: Implement runningInConsole() method.
    }

    public function getCachedPackagesPath()
    {
        // TODO: Implement getCachedPackagesPath() method.
    }

    public function version()
    {
        // TODO: Implement version() method.
    }

    public function environment(...$environments)
    {
        // TODO: Implement environment() method.
    }

    public function isDownForMaintenance()
    {
        // TODO: Implement isDownForMaintenance() method.
    }

    public function registerConfiguredProviders()
    {
        // TODO: Implement registerConfiguredProviders() method.
    }

    public function register($provider, $options = [], $force = false)
    {
        // TODO: Implement register() method.
    }

    public function registerDeferredProvider($provider, $service = null)
    {
        // TODO: Implement registerDeferredProvider() method.
    }

    public function boot()
    {
        // TODO: Implement boot() method.
    }

    public function booting($callback)
    {
        // TODO: Implement booting() method.
    }

    public function booted($callback)
    {
        // TODO: Implement booted() method.
    }

    public function basePath($path = '')
    {
        // TODO: Implement basePath() method.
    }

    public function getCachedServicesPath()
    {
        // TODO: Implement getCachedServicesPath() method.
    }

    public function bootstrapPath($path = '')
    {
        // TODO: Implement bootstrapPath() method.
    }

    public function configPath($path = '')
    {
        // TODO: Implement configPath() method.
    }

    public function databasePath($path = '')
    {
        // TODO: Implement databasePath() method.
    }

    public function environmentPath()
    {
        // TODO: Implement environmentPath() method.
    }

    public function resourcePath($path = '')
    {
        // TODO: Implement resourcePath() method.
    }

    public function storagePath()
    {
        // TODO: Implement storagePath() method.
    }

    public function resolveProvider($provider)
    {
        // TODO: Implement resolveProvider() method.
    }

    public function bootstrapWith(array $bootstrappers)
    {
        // TODO: Implement bootstrapWith() method.
    }

    public function configurationIsCached()
    {
        // TODO: Implement configurationIsCached() method.
    }

    public function detectEnvironment(Closure $callback)
    {
        // TODO: Implement detectEnvironment() method.
    }

    public function environmentFile()
    {
        // TODO: Implement environmentFile() method.
    }

    public function environmentFilePath()
    {
        // TODO: Implement environmentFilePath() method.
    }

    public function getCachedConfigPath()
    {
        // TODO: Implement getCachedConfigPath() method.
    }

    public function getCachedRoutesPath()
    {
        // TODO: Implement getCachedRoutesPath() method.
    }

    public function getLocale()
    {
        // TODO: Implement getLocale() method.
    }

    public function getNamespace()
    {
        // TODO: Implement getNamespace() method.
    }

    public function getProviders($provider)
    {
        // TODO: Implement getProviders() method.
    }

    public function hasBeenBootstrapped()
    {
        // TODO: Implement hasBeenBootstrapped() method.
    }

    public function loadDeferredProviders()
    {
        // TODO: Implement loadDeferredProviders() method.
    }

    public function loadEnvironmentFrom($file)
    {
        // TODO: Implement loadEnvironmentFrom() method.
    }

    public function routesAreCached()
    {
        // TODO: Implement routesAreCached() method.
    }

    public function setLocale($locale)
    {
        // TODO: Implement setLocale() method.
    }

    public function shouldSkipMiddleware()
    {
        // TODO: Implement shouldSkipMiddleware() method.
    }

    public function terminate()
    {
        // TODO: Implement terminate() method.
    }
}
