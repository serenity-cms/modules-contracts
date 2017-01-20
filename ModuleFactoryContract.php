<?php

namespace Serenity\ModulesContracts;

interface ModuleFactoryContract {

    /**
     * Create module instance from metafile content.
     *
     * @param string $pathToMetaFile Path to module metafile
     *
     * @return Serenity\ModulesContracts\ModuleContract
     *
     * @throws ModuleMetaFileException when module metafile is corrupted or cannot be opened.
     */
    public function createModuleInstance($pathToMetaFile);

}
