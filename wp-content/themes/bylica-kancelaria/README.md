# WordPress Theme Boilerplate

### Helpful links

https://developer.wordpress.org/themes/core-concepts/theme-structure/

## Introduction

The WordPress Theme Boilerplate project is designed to be a quick launchpad for developers looking to create custom WordPress themes.
It comes equipped with a simple build system using GULP, and is structured with the essential files and a straightforward folder organization.
This README provides guidance on how to use this starter kit to jump-start your theme development.

## Setup

1. **npm**
   I'm using NPM as my package manager of choice. Make sure to have `Node.js` installed and run `npm install`.

2. **package.json**
   Change the `name` and `version` for your requirements.
   There is an 'engines' property that set's strict version of node.js and npm to use.
   With '.npmrc' configured with 'engine-strict=true' we won't be able to call 'npm install'
   without correct version of node.js and npm

3. **style.css**
   Navigate to `style.css` and replace:

- `***INPUT THEME NAME***`
- `***INPUT AUTHOR***`
- `***INPUT VERSION***`

4. **screenshot.png**
   Replace `screenshot.png` with an image that represents your theme.
   This should be 1200x900 pixels, following WordPress recommendations.
   The name "screenshot" should remain the same for it to load the file correctly.

5. **Remove unnecessary files**
   Use `CLEAN_EXAMPLE_FILES.bat` script to remove all example files accross the project directory.
   Just double click it :)

## Content

- The `functions.php` file comes pre-configured with functions to enqueue stylesheets and scripts, maintaining a clean and clear structure. It also includes basic theme setup functionalities like support for post thumbnails and dynamic title tags.
- `index.php`, `header.php`, and `footer.php` are the fundamental building blocks of any WordPress theme. These files are pre-setup in the repository, providing the most basic structure you need.
- The `src` folder contains your working SCSS and JavaScript files. When GULP runs, it compiles these files and places them into the `dist` folder, where the minified versions are stored.
- SCSS is set up as the CSS preprocessor of choice. This allows for more complex styles with variables, nested rules, and more, which then compiles down to standard CSS.

## Folder structure
- `assets` - folder to keep fonts, icons, images, videos and other files of similar usability
- `languages` - Wordpress theme folder for language `.pot` files (used for adding translation strings)
- `src` - folder for source files of the theme
- `src/inc` - folder for `.php` only classes that server the purpose of the backend (helpers, repository etc.)
- `src/js` - folder for `.js` scripts, best to use it as a centralized place for scripts that affect the global scope of the application
- `src/scss` - folder for `.scss` styles, best to use it as a centralized place for styles that affect the global scope of the application (variables, fonts, utility classes)
- `src/template-parts` - folder for creating parts displayed accross the application. Best to keep their `.scss` and `.js` files along with it's `.php` where we include component's HTML structure.
  For example:

  `src/template-parts/example-part`:
     - example-part.php
     - example-part.scss
     - example-part.js

## Development Workflow

- To start working with the theme, clone the repository to your local environment and paste it's content to fresh Wordpress theme folder `(wp-content/themes/yourthemefolder)`
- Make sure to have required Node.js installation, then run `npm install` to install all the required dependencies.
- Use `npm run build` to compile scss and js files or `npm start` to start the development server and watch for any changes in your SCSS, JS and PHP files which will automatically compile and reload your local WordPress environment.

Feel free to extend functionalities, add new files, or modify the structure as needed for your project requirements. This boilerplate aims to be flexible and straightforward, giving you a solid foundation for your WordPress theme development.

**Happy Coding!**
