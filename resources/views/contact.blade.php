<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <h2>Contact Us</h2>
  <form id="contactForm" novalidate>
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" required>
      <div class="invalid-feedback">
        Please enter your name.
      </div>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" name="email" required>
      <div class="invalid-feedback">
        Please enter a valid email address.
      </div>
    </div>
    <div class="mb-3">
      <label for="subject" class="form-label">Subject</label>
      <input type="text" class="form-control" id="subject" name="subject" required>
      <div class="invalid-feedback">
        Please enter the subject.
      </div>
    </div>
    <div class="mb-3">
      <label for="message" class="form-label">Message</label>
      <textarea class="form-control" id="message" name="message"  rows="4" required></textarea>
      <div class="invalid-feedback">
        Please enter your message.
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>

<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict';

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation');

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function(form) {
        form.addEventListener('submit', function(event) {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }

          form.classList.add('was-validated');
        }, false);
      });
  })();
</script>

</body>
</html>
