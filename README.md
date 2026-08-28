# PocketMine Plugin Template

A minimal PocketMine-MP plugin repository for people who want a working PHAR build without setting up PHP or Composer locally.

## Start here

1. Use **Use this template** to create your plugin repository.
2. Edit `plugin.yml`: change the plugin name, version, description, author, and main namespace.
3. Edit `src/Main.php` to implement your plugin.
4. Commit and push the changes.
5. Open **Actions**, select **Build plugin PHAR**, open the run, and download the artifact.

The workflow uses [DevTools](https://github.com/NhanAZ-Plugins/DevTools) to set up PocketMine PHP, build a standalone PHAR, and upload exactly one artifact. No PocketMine server source checkout or project-local Composer installation is required.

## When to use a virion

This template is intentionally a normal plugin with no virion. Do not add `devtools.yml` or `virions/` unless the plugin intentionally shares a local development package. When that is needed, follow DevTools' [shared virion guide](https://github.com/NhanAZ-Plugins/DevTools/blob/v0.2.0/docs/shared-virions.md).

## Local server development

The template is designed first for the GitHub Actions path. To load the folder locally during development, install the DevTools PHAR in a compatible server and copy this repository below `plugins/`. See the [DevTools Quick Start](https://github.com/NhanAZ-Plugins/DevTools#quick-start).
