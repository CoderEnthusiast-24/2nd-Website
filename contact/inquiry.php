<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Land Inquiry Form</title>
    <link rel="stylesheet" href="css/inquiry.css">
    <style>
        
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Land Inquiry Form</h2>
        <p class="form-description">
            Interested in viewing our available land? Fill out this form and we'll get back to you shortly to arrange a property showing.
        </p>

        <form action="links/backend/inq_insert.php" method="POST">
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
                <label for="inquiry">Type of Inquiry <span class="required">*</span></label>
                <select id="inquiry" name="inquiry" required>
                    <option value="">Select inquiry type</option>
                    <option value="general">General Inquiry About Land</option>
                    <option value="property">Property Inquiry (Specific Land)</option>
                    <option value="pricing">Pricing & Payment Terms</option>
                    <option value="availability">Land Availability</option>
                    <option value="documentation">Documentation & Legal Requirements</option>
                    <option value="site-visit">Site Visit Information</option>
                </select>
            </div>

            <div class="form-group">
                <label for="message">Additional Information</label>
                <textarea id="message" name="message" placeholder="Tell us about your requirements, budget, preferred size, etc."></textarea>
            </div>

            <button type="submit" class="submit-btn">Submit Inquiry</button>
        </form>

        <a href="landing.php" class="back-link">← Back to Home</a>
    </div>
</body>
</html>