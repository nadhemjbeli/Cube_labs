{{-- 
<form action="" method="post" class="login-form text-center">
    field <br>
    <select name="" id="" style="float:left">
        <option value="">opt1</option>
        <option value="">opt2</option>
    </select><br><br>
    <input type="text" class="form-control rounded-pill form-control-lg" placeholder="your name"><br>
    <input type="email" class="form-control rounded-pill form-control-lg" placeholder="your e-mail"><br>
    <input type="text" class="form-control rounded-pill form-control-lg" placeholder="your address"><br>
    <input type="text" class="form-control rounded-pill form-control-lg" placeholder="your number"><br>
    <button>send</button>
</form>
<input type="radio" name="" id=""> --}}
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}
<style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    body {

        background: #eee;
        margin: 15px;
        display: flex;
        justify-content: space-around;
        /* align-items: center; */
        flex-direction: column;
        font-family: sans-serif;
    }

    .form {
        width: 60%;
        position: relative;
        height: 48px;
    }

    .form input {
        width: 100%;
        background: #eee;
        min-width: 400px;
        height: 100%;
        color: #595f6e;
        padding-top: 20px;
        border: none;
        outline: none;
    }

    .form label {
        position: absolute;
        bottom: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        pointer-events: none;
        border-bottom: 1px solid black;
        overflow: hidden;
    }

    .form label::after {
        content: "";
        position: absolute;
        left: 0px;
        bottom: -1px;
        height: 100%;
        width: 100%;
        border-bottom: 3px solid #723dbe;
        transform: translateX(-100%);
        transition: transform 0.3s ease;
    }

    .content-name {
        position: absolute;
        bottom: 5px;
        left: 0px;
        transition: all 0.3s ease;
    }

    .form input:focus+.label-name .content-name,
    .form input:valid+.label-name .content-name {
        transform: translateY(-150%);
        font-size: 14px;
        color: #723dbe;
    }

    .form input:focus+.label-name::after,
    .form input:valid+.label-name::after {
        transform: translateX(0%);
    }

    div {
        width: 100%;
    }

    textarea {
        /*TextArea*/
        font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
        font-size: 16px;
        background: #eee;
        color: black;
        border-style: solid;
        border-width: 2px;
        border-radius: 5px;
        border-color: #000;
        padding: 15px
    }

    textarea:focus {

        outline: none
    }

    fieldset {
        border-radius: 10px;
        border-color: #723dbe;
        padding: 15px
    }

    li {
        list-style: none;
    }

    a {
        padding: 7px;
        text-decoration: none;
        display: inline-block;
        background: #723dbe;
        border-radius: 5px;
        color: #eee;
    }
</style>
<br>
<ul>
    <li>
        <a href="#">return</a>
    </li>
</ul>
<br>
<fieldset>
    <legend>personal inforamtion</legend>
    <div class="form">

        <input type="text" name="name" id="" autocomplete="off" required />
        <label for="name" class="label-name">
            <span class="content-name">Your name</span>
        </label>
    </div>
    <br>

    <div class="form">
        <input type="text" name="name" id="" autocomplete="off" required />
        <label for="name" class="label-name">
            <span class="content-name">Your address</span>
        </label>

    </div>
    <br>
    <div class="form">
        <input type="number" name="name" id="" autocomplete="off" required />
        <label for="name" class="label-name">
            <span class="content-name">your phone number</span>
        </label>
    </div>
    <br />

    <div class="form">
        <input type="email" name="name" id="" autocomplete="off" required />
        <label for="name" class="label-name">
            <span class="content-name">Your email </span>
        </label>
    </div>
    <br />
    <div class="form">
        <input type="number" name="name" v-model="message" id="" autocomplete="off" required max="6" />
        <label for="name" class="label-name">
            <span class="content-name">The number of your collegues (max 6)</span>
        </label>
    </div>
    <br>

</fieldset>
<br>
<fieldset>
    <legend>startup idea</legend>

    <div class="form">
        <input type="text" name="name" v-model="message" id="" autocomplete="off" required />
        <label for="name" class="label-name">
            <span class="content-name">what's the name of your startup</span>
        </label>
    </div>
    <br>
    <br>
    please explain your startup idea <br>
    <textarea name="" id="" cols="60" rows="10" placeholder="tell us everything here""></textarea>
</fieldset>
<br />





</div>