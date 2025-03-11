# GitHub Setup Guide

Follow these steps to upload your Online Shoe Store project to GitHub and set up GitHub Pages.

## 1. Create a GitHub Account

If you don't already have a GitHub account, go to [GitHub](https://github.com/) and sign up.

## 2. Create a New Repository

1. Log in to your GitHub account
2. Click on the "+" icon in the top right corner and select "New repository"
3. Name your repository (e.g., "online-shoe-store")
4. Add a description (optional)
5. Choose "Public" visibility
6. Check "Add a README file"
7. Click "Create repository"

## 3. Upload Your Project Files

### Option 1: Using GitHub Desktop (Recommended for beginners)

1. Download and install [GitHub Desktop](https://desktop.github.com/)
2. Log in to your GitHub account in GitHub Desktop
3. Clone your newly created repository to your local machine
4. Copy all your project files to the cloned repository folder
5. In GitHub Desktop, you'll see all the changes
6. Add a commit message (e.g., "Initial commit")
7. Click "Commit to main"
8. Click "Push origin" to upload your files to GitHub

### Option 2: Using Git Command Line

```bash
# Navigate to your project directory
cd path/to/your/project

# Initialize a Git repository
git init

# Add all files to the repository
git add .

# Commit the changes
git commit -m "Initial commit"

# Add the remote repository
git remote add origin https://github.com/yourusername/online-shoe-store.git

# Push to GitHub
git push -u origin main
```

## 4. Set Up GitHub Pages

1. Go to your repository on GitHub
2. Click on "Settings"
3. Scroll down to the "GitHub Pages" section
4. Under "Source", select "main" branch and "/docs" folder
5. Click "Save"
6. Wait a few minutes for GitHub Pages to build your site
7. Your site will be available at `https://yourusername.github.io/online-shoe-store/`

## 5. Update Repository Information

1. Replace the placeholder URLs in the HTML files with your actual GitHub repository URL
2. Update the README.md file with your project information

## Note About PHP on GitHub Pages

GitHub Pages only supports static websites (HTML, CSS, JavaScript), not PHP. The PHP functionality of your project won't work on GitHub Pages. The GitHub Pages site will serve as a showcase/documentation for your project, but visitors won't be able to use the actual e-commerce functionality.

To fully demonstrate the working application, you would need to deploy it to a PHP-compatible hosting service like:
- InfinityFree
- 000webhost
- Hostinger
- Heroku (with PHP buildpack)

## Additional Resources

- [GitHub Documentation](https://docs.github.com/)
- [Git Handbook](https://guides.github.com/introduction/git-handbook/)
- [GitHub Pages Documentation](https://docs.github.com/en/pages) 