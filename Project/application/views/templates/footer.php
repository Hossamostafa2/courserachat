    </div>
  </body>
</html>

<script>
function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

$.validator.addMethod("emailCheck",
  function (value, element, arg) {
      return this.optional(element) || isEmail(value);
  },
  "Email must be in the correct format");

$("#registerForm").validate({
    ignore: ".hide input, .hide select",
    rules: {
        Name: { required: true },
        Password: { required: true },
        Phone: { required: true },
        Email: { required: true, emailCheck: "0" },
        SecurityAnswer: { required: true }
    },
    errorPlacement: function(error, element) {
        error.insertAfter(element);
    },
    success: function (error) {
    }
});

$("#loginForm").validate({
    ignore: ".hide input, .hide select",
    rules: {
        Email: { required: true, emailCheck: "0" },
        Password: { required: true }
    },
    errorPlacement: function(error, element) {
        error.insertAfter(element);
    },
    success: function (error) {
    }
});
</script>
