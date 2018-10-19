require('dotenv').config();

const polyfills = [
    'Promise',
    'Object.assign',
    'Object.values',
    'Array.prototype.find',
    'Array.prototype.findIndex',
    'Array.prototype.includes',
    'String.prototype.includes',
    'String.prototype.startsWith',
    'String.prototype.endsWith'
];

module.exports = {
    mode: 'spa',

    srcDir: __dirname,
    dev: process.env.DEV,
    env: {
        appUrl: process.env.APP_URL || '/302/d_visualize/admin/index.php?',
        appName: process.env.APP_NAME || 'Laravel-Nuxt',
        appLocale: process.env.APP_LOCALE || 'en',
        user_token: process.env.USER_TOKEN,
        isDev: process.env.DEV === 'true',
        githubAuth: !!process.env.GITHUB_CLIENT_ID
    },

    head: {
        title: process.env.APP_NAME,
        titleTemplate: '%s - ' + process.env.APP_NAME,
        meta: [
            {charset: 'utf-8'},
            {name: 'viewport', content: 'width=device-width, initial-scale=1'},
            {hid: 'description', name: 'description', content: 'Nuxt.js project'}
        ],
        link: [
            {rel: 'icon', type: 'image/x-icon', href: '/favicon.ico'}
        ],
        script: [
            {src: `https://cdn.polyfill.io/v2/polyfill.min.js?features=${polyfills.join(',')}`}
        ]
    },

    loading: {color: '#007bff'},

    router: {
        mode: 'hash',
        middleware: ['locale', 'check-auth']
    },

    css: [
        {src: '~assets/sass/app.scss', lang: 'scss'}
    ],

    plugins: [
        '~components/global',
        '~plugins/i18n',
        '~plugins/vform',
        '~plugins/axios',
        '~plugins/fontawesome',
        '~plugins/nuxt-client-init',
        {src: '~plugins/bootstrap', ssr: false}
    ],

    modules: [
        '@nuxtjs/axios',
        // '@nuxtjs/proxy'
    ],
    axios: {
        withCredentials: true,

    },
    proxy: {
        '/shopunity/': 'http://api.shopunity.net'
    },
    build: {
        extractCSS: true,
        splitChunks: {
            layouts: false,
            pages: false,
            commons: false
        }
    }
};