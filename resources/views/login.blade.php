@include('header')
<script>
        $().ready(function () {
 
            $("#signupForm").validate({
               
                // In 'rules' user have to specify all the
               // constraints for respective fields
                rules: {
                    firstname: "required",
                    lastname: "required",
                   
                    password: {
                        required: true,
                        minlength: 5
                    },
                    
                    email: {
                        required: true,
                        email: true
                    },
                    agree: "required"
                },
                // In 'messages' user have to specify message as per rules
                messages: {
                    firstname: " Please enter your firstname",
                    lastname: " Please enter your lastname",
                    
                    password: {
                        required: " Please enter a password",
                        minlength:
                      " Your password must be consist of at least 5 characters"
                    },
                    
                }
            });
        });
    </script>
<div class="container">
  <h2>Login form</h2>
  <form class="cmxform"
          id="signupForm"
          method="post"
          action="{{ route("login.post") }}" 
          autocomplete="off">
                @csrf
    <p>
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </p>
    <p>
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </p>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>

</html>
