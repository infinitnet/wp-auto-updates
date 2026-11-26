# wp-auto-updates

<p align="center">
  <a href="https://buymeacoffee.com/infinitnet"><img src="https://cdn.buymeacoffee.com/buttons/v2/default-yellow.png" alt="Buy Me A Coffee" height="40"></a>
  <a href="https://ko-fi.com/infinitnet"><img src="https://storage.ko-fi.com/cdn/kofi3.png?v=6" alt="Support me on Ko-fi" height="40"></a>
</p>

Automatically updates WordPress core, plugins & optionally themes. Updates rarely break WordPress, so this should be pretty safe.

## Installation
Download from the [latest release](https://github.com/infinitnet/wp-auto-updates/releases/latest).

- Must-use plugin (recommended, cannot be deactivated from wp-admin): download `wp-auto-updates.php` from the release and upload it to `./wp-content/mu-plugins/wp-auto-updates.php`, creating the folder if needed. Do not unzip the release ZIP into `mu-plugins`: WordPress does not load must-use plugins from subfolders.
- Regular plugin: upload `wp-auto-updates.zip` under Plugins > Add New > Upload Plugin and activate it. The ZIP holds one folder, `wp-auto-updates/`, with the same file.

Use one of the two, not both.

## Credits
- https://codex.wordpress.org/Configuring_Automatic_Background_Updates
- https://infinitnet.de/

## Changelog
- 2017-05-20
  - Initial commit

