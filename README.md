# blt-command-installer
This is a Composer installer for installing custom BLT Commands

## Usage

When creating your custom command, add the following to a composer.json file. 

The name should match your package name

The type "blt-command" will mean that the file is installed to the BLT custom command folder

By requiring this ('blt-command-installer') repo, your BLT project will download the installer first. 

```json
{
    "name": "nedsbeds/custom-blt-command",
    "type": "blt-command",
    "require": {
        "nedsbeds/blt-command-installer": "*"
    }
}
