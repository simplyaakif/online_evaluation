const colors = require('tailwindcss/colors')
const defaultTheme = require('tailwindcss/defaultTheme')
module.exports = {
    mode: 'jit',
    purge: [
        './resources/views/livewire/evaluation-test/**/*.php',
        './resources/views/candidate/**/*.php',
        './resources/views/components/candidate/**/*.php',
        './resources/views/components/layouts/**/*.php',
        './resources/views/livewire/frontend/**/*.blade.php',
        './resources/views/candidate/**/*.blade.php',
        './resources/views/components/layouts/**/*blade.php',
        './resources/views/components/candidate/**/*.blade.php',
        './resources/views/test-markup.blade.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    variants: [
        'responsive',
        'group-hover',
        'focus-within',
        'first',
        'last',
        'odd',
        'even',
        'hover',
        'focus',
        'active',
        'visited',
        'disabled'
    ],
    plugins: [require('@tailwindcss/forms')]
}
