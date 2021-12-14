const mix = require('laravel-mix');
const path = require('path/posix');
const del = require('del');
if(process.env.NODE_ENV !="dev")
    del('public/dist/hot');
mix.js('lofi-frontend/src/main.js', 'js').vue({ version: 3, publicPath: "/dist/" });
mix.postCss('lofi-frontend/src/index.css', 'css');

mix.options({
    postCss: [
        require("tailwindcss")
    ]
});

mix.webpackConfig({
    module: {
        rules: [
            {
                test: /\.mp3$/i,
                use: [
                    {
                        loader: 'file-loader',
                        options: {
                            name: '[name].[ext]',
                            outputPath: 'media',
                            publicPath:'dist/media',
                            esModule: false
                        }
                    }
                ]
            },
        ]
    },
    output: {
        path: path.resolve(__dirname, 'public/dist'),
    }
});

mix.setPublicPath('public/dist');
mix.setResourceRoot('/dist/');