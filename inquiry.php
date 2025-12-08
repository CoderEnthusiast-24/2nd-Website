<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Land Inquiry Form</title>
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
            border-color: #10b981;
        }

        textarea {
            resize: vertical;
            min-height: 120px;
        }

        .submit-btn {
            width: 100%;
            padding: 14px;
            background-color: #10b981;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #059669;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            color: #10b981;
            text-decoration: none;
            font-size: 14px;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        .required {
            color: red;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Land Inquiry Form</h2>
        <p class="form-description">
            Interested in viewing our available land? Fill out this form and we'll get back to you shortly to arrange a property showing.
        </p>

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
                <label for="inquiry-type">Type of Inquiry <span class="required">*</span></label>
                <select id="inquiry-type" name="inquiry_type" required>
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