<!DOCTYPE html>
<html>
<head>
<script src="https://kit.fontawesome.com/1b66a8f9ef.js" crossorigin="anonymous"></script>
<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    /* background-color: rgb(0,0,0);  */
    background-color: rgba(167,102,40,0.5);
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    max-width:350px;
    border: 1px solid #888;
    height:55vh;
    z-index:1;
}

/* The Close Button */
.close {
    float: right;
    font-size: 28px;
    font-weight: bold;
    color:	#A23400;
}

.require{
    display:flex;
    flex-direction:column;
    margin-left:5vw;
}
.close:hover{
    color: 	#F75000;
    text-decoration: none;
    cursor: pointer;
}
</style>
</head>
<body>



<!-- Trigger/Open The Modal -->
<button id="myBtn">我要註冊</button>

<!-- The Modal -->
<div id="myModal" class="modal">


  <!-- Modal content -->
  <div class="modal-content">
    <span class="close"><i class="fas fa-grip-lines"></i></span>
    <form action="require.php" method="post" class="require">   
    <p><img src="images/idnumber.png" style="width:100;"><br><input type="text" name='Idcard' style="background:url('images/logintext.png') no-repeat;width:200px;height:50px;border-width:0;outline: none;background-color: rgba(0, 0, 0, 0); "  maxlength="10" minlength="10">
      <br>
      <p><img src="images/loginpw.png" ><br><input type="password" name='pw' style="background:url('images/logintext.png') no-repeat;width:200px;height:50px;border-width:0;outline: none;background-color: rgba(0, 0, 0, 0); "  maxlength="8" minlength="4"></p>
      <p><input type="submit" value="" style="background:url('images/loginsubmit.png') no-repeat;width:200px;height:40px;border-width:0;outline: none;background-color: rgba(0, 0, 0, 0); "></p>
      <p><input type="reset" value="" style="background:url('images/loginsubmit.png') no-repeat;width:200px;height:40px;border-width:0;outline: none;background-color: rgba(0, 0, 0, 0); "></p>
    </form>
  </div>

  </div>


<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
</script>

</body>
</html>
