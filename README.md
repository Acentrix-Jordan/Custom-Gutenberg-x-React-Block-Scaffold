# Custom Gutenberg Block using React

WordPress Components & Elements:
https://wp-gb.com/

WordPress Block Development Guide:
https://developer.wordpress.org/block-editor/

## Dependencies

-   Node >= v19
-   @wordPress/block-editor
-   @wordpress/components
-   @wordpress/element
-   @wordpress/scripts
-   react
-   react-dom

## Scripts

`npm install` To install dependencies<br>
`npm run start` Watches for changes in our JS files <br>
`npm run build` Creates Production Ready Code

## File Structure

```
.
├── build # Compiled files (NEVER EDIT)
├── node_modules # Third Party Packages (NEVER EDIT)
├── src
│ ├── assets
│ │ └── Styles, Images, etc...
│ ├── components # React Components
│ ├── layouts # Holds our Root files
│ │ ├── editor.js # Root Editor File
│ │ └── frontend.js # Rooter Frontend File
│ └── index.js # Block Registration
├── .gitignore # Files for Git to ignore
├── index.php # Plugin Config
├── package.json # Dependancies and Scripts
├── package-lock.json # This is generated by npm install (NEVER EDIT)
└── README.md # This File
```