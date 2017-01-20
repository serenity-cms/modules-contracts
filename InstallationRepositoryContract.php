<?php

namespace Serenity\ModulesContracts;

interface InstallationRepositoryContract {

    /**
     * Reload and recache modules.
     *
     * @return $this
     */
    function reload();

    /**
     * Mark the module as installed.
     *
     * @param string $moduleName Name of the module.
     *
     * @return $this
     */
    function install($moduleName);

    /**
     * Mark the module as uninstalled.
     *
     * @param string $moduleName Name of the module.
     *
     * @return $this
     */
    function uninstall($moduleName);

    /**
     * Get the array of modules, which are marked as installed.
     *
     * @return array
     */
    function getInstalled();

    /**
     * Determine, if the module is marked as installed.
     *
     * @param string $moduleName Name of the module.
     *
     * @return bool
     */
    function isInstalled($moduleName);

}
