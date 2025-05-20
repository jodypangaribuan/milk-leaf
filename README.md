# Milk Leaf Website

A clean, responsive website for Milk Leaf, a goat milk product company.

## Project Structure

The project follows a clean architecture for easy maintenance:

```
milk-leaf/
├── assets/
│   ├── css/
│   │   └── styles.css        # Main stylesheet with component-based organization
│   ├── js/
│   │   └── main.js           # JavaScript with modular pattern architecture
│   └── images/               # Image assets directory
├── index.html                # Main HTML file
└── README.md                 # Project documentation
```

## Technologies Used

- HTML5 for semantic markup
- CSS3 with custom properties and media queries for responsive design
- JavaScript (ES6+) with module pattern for clean code organization
- Bootstrap 5 for layout and components
- Google Fonts (Poppins) for typography

## Features

- Responsive design for all device sizes
- Clean component architecture for easy maintenance
- Modular JavaScript using namespace pattern
- Smooth animations and transitions
- Cross-browser compatibility

## Getting Started

1. Clone this repository
2. Open `index.html` in your browser to view the site locally

## Development

For local development with hot reloading, you can use a local server:

```bash
# If you have Python installed:
python -m http.server

# If you have Node.js installed:
npx serve
```

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## Future Enhancements

- Add contact form functionality
- Implement product details pages
- Add shopping cart functionality
- Integrate with a CMS for content management

## Maintainability

This project is designed for easy maintenance with:

1. **Component-Based CSS**: Styles are organized by component
2. **CSS Variables**: Central color and style management
3. **JavaScript Modules**: Clean code organization with the module pattern
4. **Responsive Utilities**: Mobile-first approach for all screen sizes
5. **Semantic HTML**: Clear structure with semantic elements 