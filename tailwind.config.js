/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        'node_modules/preline/dist/*.js',
    ],
    theme: {
        extend: {
            margin: {
                '33': '7.5rem',
            },
            colors: {
                'primary': '#0A2342',
                'secondary': '#F0F3FA',
                'thirdy': '#D5DEEF',
                'logout': '#FFC55A',
                'cek_surat': '#FF7F3E',
                'buat_surat': '#00224D',
                'warga': '#596FB7',

            },
            fontFamily: {
                'sans': ['"Lexend"'],
            },
        },
    },
    plugins: [
        require('preline/plugin'),
    ],
}
