# PocketMine Plugin Template

A minimal Axolotl-PM plugin repository for people who want a working PHAR build without setting up PHP or Composer locally.

## Start here

1. Use **Use this template** to create your plugin repository.
2. Edit `plugin.yml`: change the plugin name, version, description, author, and main namespace.
3. Edit `src/Main.php` to implement your plugin.
4. Commit and push the changes.
5. Open **Actions**, select **Build plugin PHAR**, open the run, and download the artifact.

The workflow uses [DevTools v1.0.0](https://github.com/NhanAZ/DevTools/releases/tag/v1.0.0) to set up Axolotl-PM PHP, build a standalone PHAR, and upload exactly one artifact. No PocketMine server source checkout or project-local Composer installation is required.

## When to use a virion

This template is intentionally a normal plugin with no virion. Do not add `devtools.yml` or `virions/` unless the plugin intentionally shares a local development package. When that is needed, follow DevTools' [shared virion guide](https://github.com/NhanAZ/DevTools/blob/v1.0.0/docs/shared-virions.md).

## Local server development

The template is designed first for the GitHub Actions path. To load the folder locally during development, install the DevTools PHAR in Axolotl-PM and copy this repository below `plugins/`. See the [DevTools Quick Start](https://github.com/NhanAZ/DevTools#quick-start).

The reusable workflow is pinned to `v1.0.0` and its required builder input to release commit `2d5f6011acb5c478d2201a9987d3687e937217a4`. Keep both aligned when upgrading. The artifact includes `build-metadata.json` with its SHA-256. See the [organization rollout and rollback guide](https://github.com/NhanAZ/DevTools/blob/v1.0.0/docs/org-rollout.md).

DevTools officially launches on 2026-10-10 as a consolidated, signed `v1.0.0`. Refresh cached prelaunch tags/checkouts and old SHA pins. Earlier downloaded PHARs remain their original bytes; keep a local working copy for rollback. The launch [rollout guide](https://github.com/NhanAZ/DevTools/blob/v1.0.0/docs/org-rollout.md) explains the new source identity.
