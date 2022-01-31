const colors = require('tailwindcss/colors')
const defaultTheme = require('tailwindcss/defaultTheme')
module.exports = {
    content: [
        './resources/views/livewire/evaluation-test/**/*.php',
        './resources/views/candidate/**/*.php',
        './resources/views/components/candidate/**/*.php',
        './resources/views/components/layouts/**/*.php',
        './resources/views/livewire/frontend/**/*.blade.php',
        './resources/views/candidate/**/*.blade.php',
        './resources/views/components/layouts/**/*blade.php',
        './resources/views/components/candidate/**/*.blade.php',
        './resources/views/components/**/*.blade.php',
        './resources/views/test-markup.blade.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [require('@tailwindcss/forms')]
}
