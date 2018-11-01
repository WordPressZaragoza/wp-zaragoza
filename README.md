# WordPress Zaragoza

Website: https://wpzaragoza.es/

Website project from *WordPress Zaragoza community*.

## Project

Built with WordPress platform using the following technologies: Understrap and Understrap child theme, HTML 5, Bootstrap 4, JavaScript, jQuery, CSS3, SASS & Compass, Lando (Docker), NPM or Yarn, Gulp and the continuous integration.

More information about themes:

- Website: https://understrap.com/
- Theme: https://github.com/understrap/understrap
- Child theme: https://github.com/understrap/understrap-child

### Installing dependencies
- You have to install **Lando**: https://docs.devwithlando.io/

If Lando's tools does not work for you, there is another way. You must install the environment manually: XAMP, Node.JS, NPM or Yarn and Gulp.

For more information visit:

- XAMP: https://www.apachefriends.org/es/index.html
- Node and NPM: https://nodejs.org/es/
- Yarn: https://yarnpkg.com/es-ES/
- Gulp: https://gulpjs.com/

**Note:** If you work with Windows. To execute the commands, we recommend installing **Cygwin** http://www.cygwin.com/

**Note:** We recommend installing the following IDE for PHP Programming: Visual Studio Code (https://code.visualstudio.com/) or PHPStorm (https://www.jetbrains.com/phpstorm/).

### Installing
1. Open your terminal and browse to the root location of your project.
2. Run `$lando start`.
	- The project has a .lando.yml file with all the environment settings.
	- The command starts the installation process when it finishes, you can see all the URLs to access.
3. End. Happy developing.

### Developing with NPM or Yarn, Gulp and SASS
- Open your terminal and browse to the location of your *UnderStrap child* copy.
- Run: `$lando npm install` or `$lando yarn install` then: `$lando gulp copy-assets`
- To work with and compile your Sass files on the fly start: `$lando gulp watch`

**Note:** All commands to develop, open your terminal to the location of your child theme.

## Finally

More information on the following commits. If required.

Grettings **WordPress Zaragoza organization**.
