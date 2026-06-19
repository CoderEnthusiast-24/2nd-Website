# MCR Realty Ventures OPC
## Project Description
A web-based real estate platform for MCR Realty Ventures OPC. The system allows visitors to browse featured land properties, submit inquiries, and book site-viewing appointments, while administrators manage clients, properties, appointments, and accounts through a dedicated admin dashboard.

## Features
- Public landing page with property showcase and image carousel
- Land inquiry form for prospective clients
- Appointment booking form for site visits
- Admin authentication (login and registration with hashed passwords)
- Admin dashboard with summary statistics
- Client management (view inquiries and bookings)
- Property management and listing overview
- Appointment management with interactive calendar view
- Real-time status updates (Pending, Accepted, Declined, Completed) via AJAX
- Account management overview

## Technologies Used
- PHP (vanilla, no framework)
- MySQL / MariaDB
- HTML5 & CSS3
- JavaScript (vanilla)

## Installation
1. Clone the repository
2. Place the project folder inside your local server's web root (e.g. `htdocs` for XAMPP)
3. Start Apache and MySQL via your local server stack
4. Configure the database (see Database Setup below)
5. Access the site through your browser, e.g. `http://localhost/mcr-realty/index.php`

## Database Setup
1. Create a database named `mcr_db`
2. Import `mcr_db.sql` into the database
3. Update database credentials in `links/backend/database.php` if needed (default: host `localhost`, user `root`, no password)

## Project Structure
```
admin/
  admin-log.php
  admin-reg.php
  login.php
  dashboard/
    accounts.php
    appointments.php
    clients.php
    dashboard.php
    properties.php
    update_status.php
contact/
  booking.php
  inquiry.php
css/
  admin.css
  admin-reg.css
  appointment.css
  booking.css
  clients.css
  dashboard.css
  inquiry.css
  Land.css
  login.css
  properties.css
  style.css
  h&f.css
images/
links/
  backend/
    database.php
    bkn_insert.php
    inq_insert.php
  dashboard/
    accounts.php
    appointments.php
    clients.php
    dashboard.php
    properties.php
    update_status.php
  database.php
  form.php
  login.php
script/
  loginscript.js
  script.js
index.php
landing.php
mcr_db.sql
```

## Developers
- [Name]