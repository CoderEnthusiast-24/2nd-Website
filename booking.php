<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book an Appointment</title>
    <link rel="stylesheet" href="css/booking.css">

    </style>
</head>
<body>
    <div class="form-container">
        <h2>Book an Appointment</h2>
        <p class="form-description">
            Schedule a site visit to view our available land properties. We'll confirm your appointment within 24 hours.
        </p>

        <div class="info-note">
            Available viewing hours: Monday - Saturday, 9:00 AM - 5:00 PM
        </div>

        <form action="links/backend/bkn_insert.php" method="POST">

            <div class="form-row">
                <div class="form-group">
                    <label>First Name <span class="required">*</span></label>
                    <input type="text" name="fname" required>
                </div>
                <div class="form-group">
                    <label>Last Name <span class="required">*</span></label>
                    <input type="text" name="lname" required>
                </div>
            </div>

            <div class="form-group">
                <label for="email">Email Address <span class="required">*</span></label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number <span class="required">*</span></label>
                <input type="tel" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="property">Property/Land of Interest</label>
                <select name="property" id="property">
                    <option value="1">Pililla Heights 1</option>
                    <option value="2">Pililla Heights 2</option>
                    <option value="3">Pililla Heights 3</option>
                </select>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="date">Preferred Date <span class="required">*</span></label>
                    <input type="date" id="date" name="date" required>
                </div>

                <div class="form-group">
                    <label for="time">Preferred Time <span class="required">*</span></label>
                    <input type="time" id="time" name="time" required>
                </div>
            </div>

            <div class="form-group">
                <label for="visitors">Number of Visitors</label>
                <select id="visitors" name="visitors">
                    <option value="1">1 person</option>
                    <option value="2">2 people</option>
                    <option value="3">3 people</option>
                    <option value="4">4 people</option>
                    <option value="5+">5 or more</option>
                </select>
            </div>

            <div class="form-group">
                <label for="notes">Special Requests or Notes</label>
                <textarea id="notes" name="notes" placeholder="Any specific requirements or questions?"></textarea>
            </div>

            <button type="submit" class="submit-btn">Schedule Appointment</button>
        </form>

        <a href="../../landing.php" class="back-link">← Back to Home</a>
    </div>
</body>
</html>