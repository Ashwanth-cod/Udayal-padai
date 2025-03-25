# Python script to generate .html files with the given template


def generate_html_file(filename):
    for i in filename:
        template = """<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{} - Udayal Padai Charitable Trust</title>
    <link rel="shortcut icon" href="contant/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="contant/s.css">    
</head>
<body>
    <div class="nav">
        <img src="contant/images/logo.png" alt="Logo" width="150" class="nav-logo">
        <div class="nav-image-side">
            <h2><b>Udayal Padai Charitable Trust - Women's Self Defense Training Program<b></h2>
            <div class="nav-title-bar">
                <a href="index.html" style="margin-left: 30px">Home</a>
                <a href="about.html">About Us</a>
                <a href="why.html">Why Us</a>
                <a href="events.html">Events</a>
                <a href="vision.html">Vision</a>
                <a href="contact.html" style="margin-right: 30px">Contact</a>
            </div>
        </div>
    </div>  
    <script src="contant/s.js"></script>
</body>
</html>
""".format(i.capitalize())
        with open(i+".html", 'w') as file:
            file.write(template)
        print(f"HTML file '{i}' has been created successfully.")

# Example usage
generate_html_file(["index", "about", "why", "events", "vision", "contact"])