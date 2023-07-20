@include('header')
<script>
        $().ready(function () {
 
            $("#signupForm").validate({
               
               
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
               
                messages: {
                    firstname: " Please enter your firstname",
                    lastname: " Please enter your lastname",
                    
                    password: {
                        required: " Please enter a password",
                        minlength:
                      " Your password must be consist of at least 5 characters"
                    },

            
                    
                },
                
            
            });
            
           
        });
    </script>
<div class="container">
  <h2>Register form</h2>
  <form class="cmxform"
          id="signupForm"
          method="post"
          action="{{ route("register.post") }}" 
          autocomplete="off">
                @csrf
                <p>
                <label for="firstname"> First Name</label>
                <input id="firstname"  class="form-control" name="firstname" value="" type="text">
            </p>
            <p>
      <label for="lastname">Last Name</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" value="" name="lastname">
    </p>
    <p>
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" value="" name="email">
    </p>
    <p>
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" value="" placeholder="Enter password" name="password">
    </p>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>

</html>
