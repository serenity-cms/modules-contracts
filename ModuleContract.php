<?php

namespace Serenity\ModulesContracts;

interface ModuleContract {

    /**
     * Filename of the module metafile.
     *
     * @var string
     */
    const METAFILE = 'serenity-module.json';

    /**
     * Module constructor.
     *
     * @param string $path Path to the root of the module.
     * @param string $name Module name.
     * @param bool $protected Indicates if the module is protected. Protected modules
     * could not be uninstalled.
     * @param array $providers An array of the module service providers.
     * @param array $files An array of the module required files. These files will be
     * required (once) during the module booting.
     * @param string $installer Full name of the module installer class.
     * @param string $uninstaller Full name of the module uninstaller class.
     */
    function __construct($path, $name, $protected = false, array $providers = [], array $files = [], $installer = null, $uninstaller = null);

    /**
     * Get path to the root of the module.
     *
     * @return string
     */
     function getPath();

    /**
     * Get module name.
     *
     * @return string
     */
    function getName();

    /**
     * Determine if the module is installed.
     *
     * @return bool
     */
    function isInstalled();

    /**
     * Determine if the module is protected. Protected modules could not be
     * uninstalled.
     *
     * @return bool
     */
    function isProtected();

    /**
     * Get an array of the module service providers.
     *
     * @return array
     */
    function getProviders();

    /**
     * Register module service providers to the application.
     *
     * @return void
     */
    function registerProviders();

    /**
     * Get an array of the module required files.
     *
     * @return array
     */
    function getFiles();

    /**
     * Load (require once) the module required files.
     *
     * @return void
     */
    function requireFiles();

    /**
     * Get full name of the module installer class.
     *
     * @return string
     */
    function getInstaller();

    /**
     * Install the module.
     *
     * @return void
     */
    function install();

    /**
     * Get full name of the module uninstaller class.
     *
     * @return string
     */
    function getUninstaller();

    /**
     * Uninstall the module.
     *
     * @return void
     */
    function uninstall();

}
