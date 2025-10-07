#!/bin/bash

echo "Installing Corporate Template..."

# Copy template configuration
cp -n vendor/tu-usuario/sulu-corporate-template/config/templates/*.xml config/templates/

echo "Template installed successfully!"
echo "Please register the bundle in config/bundles.php"
