<?php

namespace CorporateTemplate;

use Composer\Script\Event;

class ComposerScripts
{
    public static function postInstall(Event $event): void
    {
        self::displayInstallMessage($event);
    }

    public static function postUpdate(Event $event): void
    {
        self::displayInstallMessage($event);
    }

    private static function displayInstallMessage(Event $event): void
    {
        $io = $event->getIO();
        
        $io->write('');
        $io->write('==================================================');
        $io->write(' Corporate Template for Sulu CMS installed!');
        $io->write('==================================================');
        $io->write('');
        $io->write('Next steps:');
        $io->write('1. Register the bundle in config/bundles.php:');
        $io->write('   CorporateTemplate\CorporateTemplateBundle::class => [\'all\' => true],');
        $io->write('');
        $io->write('2. Configure template mappings in sulu_admin.yaml:');
        $io->write('   sulu_core:');
        $io->write('       content:');
        $io->write('           structure:');
        $io->write('               default_type:');
        $io->write('                   skeleton: default');
        $io->write('               paths:');
        $io->write('                   corporate_template:');
        $io->write('                       path: "%kernel.project_dir%/vendor/tu-usuario/sulu-corporate-template/templates"');
        $io->write('                       type: "page"');
        $io->write('');
    }
}
