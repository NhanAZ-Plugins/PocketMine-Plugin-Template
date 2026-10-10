# PocketMine Plugin Template

This template starts a small Axolotl-PM plugin with a GitHub Actions workflow that builds and validates a downloadable PHAR. A local PHP or Composer installation is optional for the hosted build.

## Start a plugin

1. Select **Use this template** on GitHub and create your repository.
2. Edit [`plugin.yml`](plugin.yml) to set the plugin name, version, description, author and main namespace. Keep `api` at the minimum API your code actually needs.
3. Rename the namespace and logger text in [`src/Main.php`](src/Main.php), then implement your plugin.
4. Update this README with the new plugin's features, configuration, commands, permissions and verified compatibility.
5. Commit and push. Open **Actions**, select **Build and validate template plugin**, open the run, and download the verified artifact.

The example declares Axolotl-PM API 5.0.0 and requires PHP 8.1 or newer. PHPStan at maximum level passes against Axolotl-PM 5.0.0 and 5.49.1 source. Compatibility with intermediate releases and behavior in a connected Bedrock client have not been verified. After replacing the example code, verify your own plugin's API needs and runtime behavior before release.

## Build and dependency updates

The [build workflow](.github/workflows/build.yml) checks the example against pinned Axolotl-PM source. It uses [DevTools](https://github.com/NhanAZ/DevTools) to run PHPStan, build the PHAR and inspect the artifact. The workflow pins the DevTools reusable workflow to a reviewed commit. [Dependabot](.github/dependabot.yml) checks GitHub Actions references for updates, which should be reviewed and tested before adoption.

The template has no runtime library or virion dependency. If your plugin needs a local virion, follow the [DevTools shared virion guide](https://github.com/NhanAZ/DevTools/blob/main/docs/shared-virions.md) and declare the dependency explicitly. To build locally, follow the [DevTools CLI guide](https://github.com/NhanAZ/DevTools/blob/main/docs/cli.md) with your plugin repository as the project directory.

The workflow artifact includes the PHAR and build metadata with its SHA-256. A successful build and static analysis do not prove gameplay behavior. Test your plugin on a clean Axolotl-PM server before publishing a release.

## License and support

The template source is licensed under [AGPL-3.0-only](LICENSE). Repositories created from it should retain the license and notices for inherited template code. The placeholder `author` field in `plugin.yml` should be replaced with your own name.

Report template issues in [GitHub Issues](https://github.com/NhanAZ-Plugins/PocketMine-Plugin-Template/issues) or contact [NhanAZ Discord](https://discord.gg/j2X83ujT6c).
