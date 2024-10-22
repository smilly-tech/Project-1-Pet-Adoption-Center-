Pet Adoption Center Documentation

The Pet Adoption Center is a simple platform that lets users browse available pets and submit adoption requests. It’s built using PHP and HTML, with some styling to make it clean and easy to use. The goal is to help users see what pets are available, navigate the site smoothly, and easily submit adoption forms.

*Platform Structure*
The site has a few main pages:
index.php: This is the homepage. It introduces users to the Pet Adoption Center and lets them navigate to other parts of the site (Available Pets, Contact, and Process Adoption). It has a clean design with a background that fits the pet care theme.
available_pets.php: This page shows all the available pets for adoption (6 cats and 6 dogs). It displays each pet’s image, name, and breed. Users can click the “Adopt” button next to each pet to go to the processorder.php page and fill out an adoption form. The layout is organized, so users can easily browse through the pets.
processorder.php: This page is where users can fill out the adoption form after selecting a pet. It dynamically loads the selected pet’s info and processes the form submission. The user gets a confirmation message once the form is successfully submitted.
contact.php: This is a contact page where users can send a message to the Pet Adoption Center by filling out their name, email, and a message. The design keeps the same adoption theme.

*Features*
Adoption Process: Users can browse the pets and click to adopt one. They fill out a form with their name and email, and the adoption request gets processed through processorder.php.
Form Handling: The processorder.php page handles both the display and submission of the adoption form. It pulls in the pet's info and confirms the submission when everything is filled out.
Multiple Pages: The platform includes several pages (home, available pets, contact, adoption form), which makes it easy to navigate and use.
Consistent Design: I made sure the design across all pages follows the same pet adoption theme, with simple navigation, user-friendly forms, and a consistent color scheme.

*Page Breakdown*
1. Homepage (index.php)
 Purpose: This is the entry point to the platform. It gives a basic introduction and lets users navigate to other pages (available pets, contact, adopt).
 Key Elements:
 Navigation links to available_pets.php, contact.php, and processorder.php
 A background that matches the pet care theme
2. Available Pets Page (available_pets.php)
 Purpose: Displays all available pets with their names, breeds, and images. Users can click “Adopt” to start the adoption process.
 Key Elements:
 Grid layout for all 12 pets (6 cats, 6 dogs)
 Each pet has an “Adopt” button linked to the adoption form
3. Adoption Process Page (processorder.php)
 Purpose: Handles the adoption process. After a user clicks to adopt a pet, they are redirected here to fill out their info and submit the request.
 Key Elements:
 Shows the selected pet’s name and breed
 Form where the user fills in their name and email
 Confirmation message after form submission
4. Contact Page (contact.php)
 Purpose: Allows users to contact the Pet Adoption Center by filling out a form.
 Key Elements:
 Form fields for name, email, and message
 Consistent design to match the adoption center’s theme
5. Styling Key Elements:
 Paw print background pattern
 Lime green theme color
 Button and form styling
 Code and Modifications
 
*The platform makes use of basic PHP and HTML concepts, especially form handling and page linking. I pulled ideas from Chapters 1-7 of the course and applied them here. Specially from the early lessons where we used PHP files and XAMPP.

*HTML Forms and PHP Form Handling: I used HTML forms for the adoption and contact pages, and PHP to process the form submissions.

*Dynamic Pages: Each pet has a unique ID that gets passed through the URL when a user clicks “Adopt,” so the correct pet’s info shows up on the form page.

*Modifications*
I adapted the code to make sure the adoption form pulls in the right pet based on which “Adopt” button was clicked.
I styled the platform to have a user-friendly look that aligns with the adoption center theme.

*Challenges & Solutions*
Styling: One big challenge I faced was adding the right styling to the webpage. I wanted the design to reflect the theme of pets and care, but finding the right combination of background patterns, colors, and layouts to make it visually appealing was difficult. In the end, I was able to implement a background related to pet adoption and a consistent lime green theme that makes the platform look good.
Pet ID Management: One challenge was making sure the “Adopt” button for each pet linked to the right form page. I solved this by using PHP’s GET method to pass the pet’s ID in the URL.
Form Handling: I had to make sure that the form submission worked smoothly. I used PHP to validate and process the user’s input, and everything is now functioning properly.