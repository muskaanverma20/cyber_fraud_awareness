================================================================================
PROJECT NAME : Cyber Fraud Awareness System
DEVELOPED IN : Laravel (PHP Framework)
COURSE       : BCA Final Year Project
GITHUB REPO  : https://github.com/muskaanverma20/cyber_fraud_awareness
================================================================================

--- PROJECT DESCRIPTION ---
This is a web-based application designed to spread awareness about cyber 
frauds. It allows users to file complaints regarding scams, track report 
statuses, and access safety guidelines. An Admin Panel is provided to 
manage, investigate, and update all fraud reports dynamically.

--- SOFT COPY FOLDER STRUCTURE ---
If you are running this from a USB Drive or CD, the root folder contains:
1. /cyber_fraud_awareness  -> Complete Source Code Folder
2. /database_file          -> Contains 'cyber_fraud_awareness.sql'

--- DEFAULT ADMIN LOGIN CREDENTIALS ---
Use these credentials on the login screen to access the Admin Panel:

  ADMIN OPTION 1:
* Admin Email    : admin@gmail.com
* Admin Password : password

  ADMIN OPTION 2:
* Admin Email    : admin2@gmail.com
* Admin Password : password

(Note: Additional admin accounts can be configured directly via the Admin Panel.)

================================================================================
--- HOW TO RUN THIS PROJECT ON YOUR SYSTEM ---
================================================================================

STEP 1: Extract Project Files or Clone
--------------------------------------------------------------------------------
Choose ANY ONE of the following options to get the project files on your PC:

Option A (From USB Drive / Soft Copy):
- Copy the project ZIP folder from your USB drive/CD.
- Extract (unzip) it directly into your local server directory:
  Path: C:\xampp\htdocs\
- Ensure the extracted folder name inside htdocs is: cyber_fraud_awareness

Option B (Clone via GitHub - Internet Required):
- Open Git Bash or Command Prompt (CMD) and navigate to htdocs: cd C:\xampp\htdocs
- Run the following exact command to clone the repository:
  git clone https://github.com/muskaanverma20/cyber_fraud_awareness


STEP 2: Open Terminal & Install Dependencies
--------------------------------------------------------------------------------
1. Open VS Code, go to File -> Open Folder, and select:
   C:\xampp\htdocs\cyber_fraud_awareness
   
2. Open a New Terminal in VS Code (Terminal -> New Terminal) and run these 
   commands one by one to install all required software packages:
   
   composer install
   
   npm install
   
   npm run build

3. Create the environment configuration file by running:
   
   copy .env.example .env

4. IMPORTANT: Open the newly created `.env` file in VS Code or Notepad. Find the 
   database lines and ensure they match your local XAMPP setup:
   
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=cyber_fraud_awareness
   DB_USERNAME=root
   DB_PASSWORD=

5. Generate the unique application encryption key:
   
   php artisan key:generate


STEP 3: Setup Database via phpMyAdmin
--------------------------------------------------------------------------------
1. Open XAMPP Control Panel and START 'Apache' and 'MySQL'.
2. Open your web browser and navigate to: http://localhost/phpmyadmin/
3. Click on "New" in the left sidebar and create a database named: 
   cyber_fraud_awareness
4. Click on this newly created database, then go to the "Import" tab at the top.
5. Click "Choose File", select the 'cyber_fraud_awareness.sql' file from your 
   project's 'database_file' folder.
6. Scroll down and click the "Import" button at the bottom.


STEP 4: Start the Local Development Server
--------------------------------------------------------------------------------
1. Go back to your VS Code terminal and run this final command:
   
   php artisan serve

2. Now, open your web browser and visit these URLs to test the system:
   
   * Main Website (Home Page) : http://127.0.0.1:8000 
     (No login required to view the home page and safety guidelines)
     
   * Admin Panel Login        : http://127.0.0
     (Use the Admin Credentials provided above to access the dashboard)

================================================================================
--- PROJECT FEATURES ---
================================================================================
1. User Module:
   - User Registration & Secure Login
   - Personal Dashboard to view submitted complaints
   - Track live complaint status (Pending, Investigating, Action Taken)
   - Educational safety tips for different types of cyber fraud

2. Admin Module (Multi-Admin Support):
   - Secure Admin Login & Authentication
   - Dashboard showing overview of total fraud metrics
   - Update complaint status with dynamic tracking
   - Manage user profiles and add additional admin accounts

3. General Features:
   - Fully responsive UI using Laravel Blade Templates and CSS
   - Relational Database Management system via MySQL
   - Secure authentication and cross-site scripting (XRF) protection

================================================================================
NOTE:
- Update the `.env` file with the correct DB username/password if changed.
- The project database comes pre-loaded with a dummy test report 
  (Harish Yadav - Instagram UPI Scam) for quick validation during viva.
================================================================================
