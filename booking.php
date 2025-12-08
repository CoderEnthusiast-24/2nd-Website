<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book an Appointment</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }

        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            margin-bottom: 10px;
            font-size: 28px;
        }

        .form-description {
            color: #666;
            margin-bottom: 30px;
            font-size: 14px;
            line-height: 1.5;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 500;
            font-size: 14px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        input[type="time"],
        textarea,
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            font-family: Arial, sans-serif;
            transition: border-color 0.3s;
        }

        input:focus,
        textarea:focus,
        select:focus {
            outline: none;
            border-color: #1e293b;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        .form-row {
            display: flex;
            gap: 15px;
        }

        .form-row .form-group {
            flex: 1;
        }

        .submit-btn {
            width: 100%;
            padding: 14px;
            background-color: #1e293b;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #0f172a;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            color: #1e293b;
            text-decoration: none;
            font-size: 14px;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        .required {
            color: red;
        }

        .info-note {
            background-color: #f0f9ff;
            padding: 12px;
            border-radius: 4px;
            border-left: 3px solid #38bdf8;
            margin-bottom: 25px;
            font-size: 13px;
            color: #0369a1;
        }

        @media (max-width: 768px) {
            .form-row {
                flex-direction: column;
                gap: 0;
            }
        }
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

        <form action="#" method="POST">
            <div class="form-group">
                <label for="name">Full Name <span class="required">*</span></label>
                <input type="text" id="name" name="name" required>
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
                <input type="text" id="property" name="property" placeholder="e.g., Lot 12, Block 5 or specific location">
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

        <a href="landing.php" class="back-link">← Back to Home</a>
    </div>
</body>
</html>