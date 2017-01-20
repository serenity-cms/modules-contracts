<?php

namespace Serenity\ModulesContracts;

interface ModulesManagerContract {

    /**
     * Add multiple directories.
     *
     * @param array $dirs An array of directories.
     *
     * @return $this
     */
    function addDirs(array $dirs = []);

    /**
     * Add one directory.
     *
     * @param string $dir A directory.
     *
     * @return $this
     */
    function addDir($dir);

    /**
     * Determine, if modules manager has the directory.
     *
     * @param string $dir Directoy.
     *
     * @return bool
     */
    function hasDir($dir);

    /**
     * Remove directory from modules manager.
     *
     * @param string $dir Directory.
     *
     * @return $this
     */
    function removeDir($dir);

    /**
     * Get all modules manager directories.
     *
     * @return array Modules manager directories.
     */
    function getDirs();

    /**
     * Find all modules in set directories.
     *
     * @return array of Serenity\ModulesContracts\ModuleContract
     */
    function all();

    /**
     * Find the module by it's name.
     *
     * @param string $moduleName Name of the module.
     *
     * @return Serenity\ModulesContracts\ModuleContract
     *
     * @throws Serenity\Modules\Exceptions\ModuleDoesNotExistException
     */
    function get($moduleName);

    /**
     * Find all installed modules in set directories.
     *
     * @return array of Serenity\ModulesContracts\ModuleContract
     */
    function installed();

    /**
     * Find all uninstalled modules in set directories.
     *
     * @return array of Serenity\ModulesContracts\ModuleContract
     */
    function uninstalled();

    /**
     * Determine, if the module exists.
     *
     * @param string $moduleName Name of the module.
     *
     * @return bool
     */
    function has($moduleName);

    /**
     * Reload and recache modules.
     *
     * @return $this
     *
     * @throws Serenity\Modules\Exceptions\ModuleAlreadyExistsException when multiple modules with the same name are found.
     */
    function reload();

    /**
     * Install all uninstalled modules.
     *
     * @return $this
     */
    function installAll();

    /**
     * Install the module.
     *
     * @param string $moduleName Name of the module.
     *
     * @return $this
     *
     * @throws Serenity\Modules\Exceptions\ModuleAlreadyInstalledException
     * @throws Serenity\Modules\Exceptions\ModuleInstallerDoesNotExistException
     * @throws Serenity\Modules\Exceptions\ModuleInstallerNotCompatibleException
     */
    function install($moduleName);

    /**
     * Install the module by it's instance.
     *
     * @param Serenity\ModulesContracts\ModuleContract $module Module instance.
     *
     * @return $this
     *
     * @throws Serenity\Modules\Exceptions\ModuleAlreadyInstalledException
     * @throws Serenity\Modules\Exceptions\ModuleInstallerDoesNotExistException
     * @throws Serenity\Modules\Exceptions\ModuleInstallerNotCompatibleException
     */
    function installByInstance(ModuleContract $module);

    /**
     * Determine, if the module is installed.
     *
     * @param string $moduleName Name of the module.
     *
     * @return bool
     */
    function isInstalled($moduleName);

    /**
     * Determine, if the module is installed by it's instance.
     *
     * @param Serenity\ModulesContracts\ModuleContract $module Module instance.
     *
     * @return
     */
    function isInstalledByInstance(ModuleContract $module);

    /**
     * Uninstall all installed modules.
     *
     * @return $this
     */
    function uninstallAll();

    /**
     * Uninstall the module.
     *
     * @param string $moduleName Name of the module.
     *
     * @return $this
     *
     * @throws Serenity\Modules\Exceptions\ModuleProtectionException
     * @throws Serenity\Modules\Exceptions\ModuleAlreadyUninstalledException
     * @throws Serenity\Modules\Exceptions\ModuleUninstallerDoesNotExistException
     * @throws Serenity\Modules\Exceptions\ModuleUninstallerNotCompatibleException
     */
    function uninstall($moduleName);

    /**
     * Uninstall the module by it's instance.
     *
     * @param Serenity\ModulesContracts\ModuleContract $module Module instance.
     *
     * @return $this
     *
     * @throws Serenity\Modules\Exceptions\ModuleProtectionException
     * @throws Serenity\Modules\Exceptions\ModuleAlreadyUninstalledException
     * @throws Serenity\Modules\Exceptions\ModuleUninstallerDoesNotExistException
     * @throws Serenity\Modules\Exceptions\ModuleUninstallerNotCompatibleException
     */
    function uninstallByInstance(ModuleContract $module);

}
