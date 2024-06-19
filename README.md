README for MAVENWIT Text Generator
Overview

The MAVENWIT Text Generator is a WordPress-based application designed to generate 500-word blog posts from user-provided prompts. This guide details the structure, setup, and necessary code snippets to create and run the application.

Wireframe Description


1. Header Section (Designed on WordPress)
Logo: Positioned at the top-left corner to brand the application.
Navigation Links/Icons: Placed at the top-right corner, includes links such as Home, About, Contact, and a link to GitHub or other social media if relevant.
2. Main Content Area
Title: Centered and prominent, displaying "MAVENWIT Blog Generator" or similar, capturing the primary function of the application.
Subtitle: Below the title, smaller text provides additional context, like "We will then generate your completed 500-word blog post."
3. Input Section
Step 1: Text Prompt Input:
Label: "Type here"
Input Field: A large text area with a placeholder, e.g., "e.g., Write a story about a brave knight," allowing users to input their desired text prompt.
Step 2: Select Tone/Style:
Label: "Select the tone or style."
Dropdown Menu: A dropdown allowing users to select the style or tone of the generated text, e.g., Professional, Casual, Formal, Friendly, etc.
4. Generate Button
Button: A large, black button labeled "Generate blog post" positioned centrally below the input field.
5. Output Section
Generated Text Display: A section below the generate button where the generated text will be displayed after the user clicks the "Generate Text" button. This can be a bordered box or a styled div to highlight the result.


Instructions in WordPress staging


Create snippets


In your wp-config.php file, add PHP code in file

In Snippets > Add New, create a snippet titled "cURL Request Function" and add code in file

In Snippets > Add New, create a snippet titled "Handle Generate Blog Post AJAX" and add code in file

In Snippets > Add New, create a snippet titled "Shortcode for Form" and add code in file

In Snippets > Add New, create a snippet titled "jQuery" and add code in file

In Snippets > Add New, create a snippet titled "Functions" and add code in file


Activate all snippets

Add Shortcode to New Page

Go to Pages > Add New or edit an existing page

Add a Shortcode block and insert code in the "Shortcode for Form"

