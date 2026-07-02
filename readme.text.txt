================================================================
PROJECT NAME : Cyber Fraud Awareness System
DEVELOPED IN : Laravel (PHP Framework)
COURSE       : BCA Final Year Project
GITHUB REPO  : https://github.com/muskaanverma20/cyber_fraud_awareness

--- TEAM MEMBERS ---
* Student 1  : Muskan (Roll No: [103382])
* Student 2  : Vandana (Roll No: [103402])
================================================================


--- PROJECT DESCRIPTION ---
This is a web-based application designed to spread awareness about 
cyber frauds. It allows users to file complaints regarding scams, 
track report statuses, and access safety guidelines. An Admin Panel 
is provided to manage, investigate, and update all fraud reports.

--- DEFAULT ADMIN LOGIN CREDENTIALS ---
   ADMIN OPTION 1:
* Admin Email    : admin@gmail.com
* Admin Password : password

  ADMIN OPTION 2:
* Admin Email    : admin2@gmail.com
* Admin Password : password
 

(More admins can be configured directly in the database or via the Admin Panel.)

================================================================
--- HOW TO RUN THIS PROJECT ON YOUR SYSTEM ---
================================================================

STEP 1: Extract the Project ZIP File
----------------------------------------------------------------
- Copy the project ZIP file and extract (unzip) it into your 
  local server directory (e.g., C:\xampp\htdocs\).
- Alternatively, you can clone it directly from GitHub using:
  git clone https://github.com

STEP 2: Setup Database via phpMyAdmin
----------------------------------------------------------------
1. Open XAMPP Control Panel and START 'Apache' and 'MySQL'.
2. Open your browser and go to: http://localhost/phpmyadmin/
3. Click on "New" and create a database named: cyber_fraud_awareness
4. Click on the newly created database, then go to the "Import" tab.
5. Click "Choose File", select the 'cyber_fraud_awareness.sql' file 
   from the 'database_file' folder inside the project.
6. Click the "Import" button at the bottom.

STEP 3: Open Command Prompt (CMD) & Install Dependencies
----------------------------------------------------------------
1. Open CMD and navigate to your project root folder:
   cd C:\xampp\htdocs\cyber_fraud_awareness
   
   *Tip: You can also open the project folder in File Explorer, 
   type 'cmd' in the address bar at the top, and press Enter.*

2. Run the following commands one by one to install dependencies:
   
   composer install
   
   npm install

3. Create the environment configuration file:
   
   copy .env.example .env

4. Generate the application encryption key:
   
   php artisan key:generate

STEP 4: Start the Local Development Server
----------------------------------------------------------------
1. Run this final command to start the Laravel server:
   
   php artisan serve

2. Now, open your web browser and visit this URL:
   URL: http://127.0.0.1:8000

================================================================
--- PROJECT FEATURES ---
================================================================
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
   - Secure authentication and cross-site scripting protection

================================================================
NOTE:
- Update the `.env` file with the correct DB username/password if changed.
- The project database comes pre-loaded with a dummy test report 
  (Harish Yadav - Instagram UPI Scam) for quick validation.
================================================================