# Corporate Template for Sulu CMS

Professional corporate website template for Sulu CMS.

## Installation

```bash
composer require estratos/sulu-corporate-template



## Configuración adicional

**config/packages/corporate_template.yaml**
```yaml
corporate_template:
    website_name: 'Your Company'
    contact_email: 'info@company.com'
    contact_phone: '+1 234 567 890'



Configuration
Register the bundle in config/bundles.php:

php
return [
    // ...
    CorporateTemplate\CorporateTemplateBundle::class => ['all' => true],
];
Add template mapping in config/packages/sulu_admin.yaml:

yaml
sulu_core:
    content:
        structure:
            default_type:
                skeleton: corporate_default
            paths:
                corporate_template:
                    path: '%kernel.project_dir%/vendor/tu-usuario/sulu-corporate-template/templates'
                    type: 'page'
Clear cache:

bash
bin/console cache:clear
