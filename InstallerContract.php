<?php

namespace Serenity\ModulesContracts;

interface InstallerContract {

    /**
     * Install the module.
     *
     * @param  Serenity\ModulesContracts\ModuleContract  $module
     * @param  Serenity\ModulesContracts\ModulesManagerContract  $modulesManager
     */
    static function install(ModuleContract $module, ModulesManagerContract $modulesManager);

}
