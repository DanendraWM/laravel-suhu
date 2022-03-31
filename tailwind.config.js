module.exports = {

    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    darkMode: 'class',
    theme: {
        extend: {
            spacing: {
                '13': '3.25rem',
            },
            fontFamily: {
                raleway: ['Raleway'],
                comforter: ['Comforter']
            },
            colors: {
                bebas: '#bada55',
            },
        }
    },
    plugins: [
        require('flowbite/plugin')
    ],
}
