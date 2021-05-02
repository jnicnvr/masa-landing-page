const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");

mix.js("resources/js/app.js", "public/js")
    
    .vue()
    .sass("resources/sass/app.scss", "public/css")  
    .copy(
        'node_modules/@fortawesome/fontawesome-free/webfonts',
        'public/webfonts'
    ) 
    .options({
        processCssUrls: false,
        postCss: [tailwindcss("./tailwind.config.js")]
    });
