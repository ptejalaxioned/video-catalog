/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./components/**/*.{html,js,php}", // Include PHP files in components
    "./pages/**/*.{html,js,php}", // Include PHP files in pages
    "./header.php",
    "./footer.php",
  ],
}