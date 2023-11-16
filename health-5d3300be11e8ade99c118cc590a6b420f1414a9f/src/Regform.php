
<h3>Create an account</h3>
<form class="regform" action="welcome.html" method="post" enctype="multipart/form-data" autocomplete="off">
    <div class="alert alert-error">
    </div>
    <input type="text" placeholder="First Name" name="name" required />
    <input type="text" placeholder="Surname" name="surname" required />
    <label for="Facility"><b>Select your facility from the dropdown list</br></label>

    
    <select name="facility" id="facility">
        <option value="Addington Hospital">Addington Hospital</option>
        <option value="Benedictine Hospital">Benedictine Hospital</option>
        <option value="CJM Hospital">CJM Hospital</option>
        <option value="Charles James Hospital">Charles James Hospital</option>
        <option value="Childrens Hospital">Childrens Hospital</option>
        <option value="Port Shepstone">Port Shepstone</option>
        <option value="St Andrews Hospital">St Andrews Hospital</option> <br>
    </select>
    <label for="Position"><b>Select your Position from the dropdown list</br></label>

    <select name="position" id="position">
        <option value="Pharmacy Manager">Pharmacy Manager</option>
        <option value="Assistant Manager">Assistant Manager</option>
        <option value="Pharmacy Supervisor">Pharmacy Supervisor</option>
        <option value="Pharmacist">Pharmacist</option>
        <option value="Post Basic PA">Post Basic PA</option>
        <option value="Basic PA">Basic PA</option>
        <option value="Pharmacist Assistant">Pharmacist Assistant</option>
    </select>

    <label for="District"><b>Select your District from the dropdown list</br></label>
        <select name="district" id="district">
        <option value="Amajuba">Amajuba</option>
        <option value="Ugu">Ugu</option>
        <option value="Uthukela">Uthukela</option>
        <option value="King Cetshwayo">King Cetshwayo</option>
        <option value="Umzinyathi">Umzinyathi</option>
        <option value="Umgungundlovu">Umgungundlovu</option>
        <option value="Ethekwini">Ethekwini</option>
    </select>
    <br>
    <input type="email" placeholder="Email" name="email" required />
    <input type="text" placeholder="User Name" name="username" required />
    <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
    <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
    <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
</form>
<hr>
<a href="?page=welcome" class="btn btn-warning">Cancel</a>