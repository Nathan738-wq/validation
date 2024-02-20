<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>
<body>
   <div class="container">
    <form>
        <i class="fas fa-paper-plane"></i>

        <div class="input-group">
            <label>Full Nama</label>
            <input type="text" placeholder="Enter Your Name" id="contact-name" onkeyup="validateName()">
            <span id="name-error"></span>
        </div>

        <div class="input-group">
            <label>Phone No.</label>
            <input type="tel" placeholder="123 456 7890" id="contact-phone" onkeyup="validatePhone()">
            <span id="phone-error"></span>
        </div>
        
        <div class="input-group">
            <label>Email Id</label>
            <input type="email" placeholder="Enter Email" id="contact-email" onkeyup="validateNEmail()">
            <span id="email-error"></span>
        </div>
        <div class="input-group">
            <label>Your Message</label>
            <textarea rows="5" placeholder="Enter Your Message"></textarea>
            <span id="message"></span>
        </div>
        
        <button>Submit</button>
        <span id="subit-error"></span>
    </form>
   </div>
   <script src="script.js"></script>
</body>
</html>