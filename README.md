# Destitutes of India

A compassionate tech-driven initiative dedicated to identifying, mapping, and aiding the destitute population across India. This platform empowers citizens to document and report sightings of destitute individuals through geotagged photos, creating a real-time database accessible to authorities and NGOs.

## 🌟 Mission

To make the invisible visible — and reachable. By creating a people-powered map of destitution, we aim to help authorities identify clusters, track movement patterns, and deliver timely aid such as food, shelter, medical care, and rehabilitation programs.

## 🚀 Features

- **Photo Capture & Upload**: Take geotagged photos of destitute individuals
- **Location Tagging**: Automatic GPS location capture
- **Gallery Display**: View recent posts and locations
- **Responsive Design**: Works on desktop and mobile devices
- **Donation System**: Support the mission through secure donations

## 🛠️ Technology Stack

- **Frontend**: HTML5, CSS3, JavaScript (Vanilla)
- **Backend**: PHP (Serverless functions on Vercel)
- **Styling**: Custom CSS with responsive design
- **Icons**: FontAwesome
- **Fonts**: Google Fonts (Poppins)

## 📦 Installation & Local Development

### Prerequisites
- PHP 7.4 or higher
- Web server (Apache/Nginx) or PHP built-in server

### Quick Start
1. Clone the repository:
```bash
git clone https://github.com/yourusername/destitutes-of-india.git
cd destitutes-of-india
```

2. Start the development server:
```bash
php -S localhost:8000 -t public
```

3. Open your browser and navigate to `http://localhost:8000`

## 🌐 Deployment

### Vercel Deployment (Recommended)

This project is configured for easy deployment on Vercel:

1. **Install Vercel CLI** (optional):
```bash
npm i -g vercel
```

2. **Deploy to Vercel**:
```bash
vercel
```

3. **Or connect your GitHub repository**:
   - Push your code to GitHub
   - Go to [vercel.com](https://vercel.com)
   - Import your repository
   - Vercel will automatically detect the configuration and deploy

### Manual Deployment

1. **Upload files** to your web server
2. **Ensure PHP support** is enabled
3. **Set proper permissions** for upload directories
4. **Configure your domain** to point to the `public` directory

## 📁 Project Structure

```
destitutes-of-india/
├── public/                 # Web root directory
│   ├── index.html         # Main homepage
│   ├── about.html         # About page
│   ├── mission.html       # Mission & vision
│   ├── donate.html        # Donation page
│   ├── contact.html       # Contact information
│   ├── css/
│   │   └── style.css      # Main stylesheet
│   ├── js/
│   │   ├── app.js         # Main application logic
│   │   └── donate.js      # Donation functionality
│   ├── images/
│   │   └── logo.webp      # Project logo
│   ├── upload.php         # Image upload handler
│   ├── api_posts.php      # Posts API endpoint
│   └── posts.json         # Posts data (local development)
├── vercel.json            # Vercel configuration
├── package.json           # Project metadata
└── README.md             # This file
```

## 🔧 Configuration

### Environment Variables
For production deployment, consider setting up:
- Database connection strings
- Cloud storage credentials
- API keys for external services

### File Upload Settings
- Maximum file size: 5MB
- Supported formats: JPG, PNG, GIF
- Images are stored in `public/uploads/` (local development)

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the MIT License - see the LICENSE file for details.

## 🙏 Acknowledgments

- Built with ❤️ for social impact
- Special thanks to all volunteers and contributors
- Inspired by the need to make invisible lives visible

## 📞 Contact

- **Organization**: YugaYatra Retail (Opc) Pvt Ltd
- **Website**: [Your deployed URL]
- **Email**: [Your contact email]

---

**Note**: This is a demo deployment. In production, implement proper database storage, cloud image hosting, and security measures.