#!/bin/bash

set -e

# Directory containing this script 
SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"

# Configuration
RESUME_REPO="$HOME/Resume"
WEBSITE_DIR="$SCRIPT_DIR/../"

# Move to the resume repository
cd "$RESUME_REPO"

echo "Pulling latest resume..."
git pull origin main

# Make sure the PDFs exist before replacing the website copies
if [[ ! -f "resume.pdf" ]]; then
    echo "Error: resume.pdf not found in $RESUME_REPO"
    exit 1
fi

if [[ ! -f "CV.pdf" ]]; then
    echo "Error: CV.pdf not found in $RESUME_REPO"
    exit 1
fi

# Copy the PDFs into the website
echo "Updating website PDFs..."
cp resume.pdf "$WEBSITE_DIR/webroot/resume/HenryDemarestResume.pdf"
cp CV.pdf "$WEBSITE_DIR/webroot/resume/HenryDemarestCV.pdf"

echo "Resume and CV updated successfully."