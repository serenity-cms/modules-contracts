<?php

namespace Serenity\ModulesContracts;

interface UninstallerContract {

    /**
     * Uninstall the module.
     *
     * @param  Serenity\ModulesContracts\ModuleContract  $module
     * @param  Serenity\ModulesContracts\ModulesManagerContract  $modulesManager
     */
    static function uninstall(ModuleContract $module, ModulesManagerContract $modulesManager);

}
