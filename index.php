<?php
include "header.php";
?>

  <div class="banner">
      
          <div class="center">
          <div class="title">PT. FATAHA COCO</div>
          <div class="sub_title">Ready to Supply and Export Coco Based Raw Materials</div>
          <a href="#contactUs"><button class="btn">Contact Us</button></a>
        </div>
  </div>
  
  <section class="about Company-Profile" id="Company Profile">
          
    <div class="content">
      <div class="title">Company Profile</div>
      <p>Our company is engaged in exports from Indonesia to the world which is engaged in agriculture and we also supply raw materials from coconut which will be produced in several products.</p>
      <div class="title">Our Vision</div>
      <p>Building Indonesian Agricultural Integrity</p>
      <div class="title">Our Mision</div>
      <ol>
      <li>Doing international trade with various countries.</li>
      <li>Utilizing coconut raw materials to produce quality products.</li>
      <li>Carrying out local and cross-country trade transactions.</li>
      <li>Performing the production of goods that support trade.</li>
      <li>Establish partnerships with integrated services by utilizing reliable Information Technology networks and systems.</li>
      <li>Creating job vacancies for the unemployed.</li>
      </ol>
      </div>
  </section>
  <section class="contactUs" id="contactUs">
      <div class="contact" >
     <div class="content" >
         <h2>Contact Us</h2>
     </div> 
     <div class="container">
         <div class="contactInfo">
             <div class="box">
                 <div class="icon"><i class="fas fa-map-marked-alt"></i></div>
                 <div class="text">
                     <h2>Address</h2>
                     <p>Monjali St No.124 Kutu Dukuh, Sinduadi Mlati Sleman Regency, Special Region of Yogyakarta 55284, Indonesia</p>
                 </div>
             </div>
            <div class="box">
                 <div class="icon"><i class="far fa-envelope"></i></div>
                 <div class="text">
                     <h2>Email</h2>
                     <p>fatahacocoindonesia@gmail.com</p>
                 </div>
             </div>
            <div class="box">
                 <div class="icon"><i class="fas fa-phone-alt"></i></div>
                 <div class="text">
                     <h2>Phone</h2>
                     <p>+62 813-2465-6949</p>
                 </div>
             </div> 
         </div>
        <div class="contactForm">
             <form name="contactForm">
                 <h2>Send Message</h2>
                 
                 <div class="inputBox">
                     <input type="text" id="name" name="nama" required="required">
                     <span>Full Name</span>
                 </div>
                 <div class="inputBox">
                     <input type="email" id="email" name="email" required="required">
                     <span>Email</span>
                 </div>
                 <div class="inputBox">
                     <input type="text" id="subject" name="subject" required="required">
                     <span>Subject</span>
                 </div>
                 <div class="inputBox">
                     <input type="text" id="body" name="pesan" required="required"></textarea>
                     <span>Type your Message...</span>
                 </div>
                 <div class="alert success d-none">
                  <i class="closebtn fas fa-times"></i>  
                  <strong>Message sent!</strong> <br>Thank You for your feedback We will contact You soon.
                </div>
                <div class="inputBox sendBtn">
                     <input type="submit"  value="Send">
                 </div>
                 <div class="inputBox d-none sendingBtn">
                     <input type="submit2"  value="Sending...">
                 </div>
                 
             </form>
         </div>
         
     </div>
     </div>
  </section>
  
  <script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbzYGR5BuNPCJL3JPlcyqiZ7ZWcjqbQ42cVrimX-5f89se6jZosuZ_KWHHu8eMA4ibUB/exec'
  const form = document.forms['contactForm']
  const sendBtn = document.querySelector('.sendBtn')
  const sendingBtn = document.querySelector('.sendingBtn')
  const alerT = document.querySelector('.alert')

  form.addEventListener('submit', e => {
    e.preventDefault();
    sendBtn.classList.toggle('d-none')
    sendingBtn.classList.toggle('d-none')
    
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => {
          console.log('Success!', response)
          sendBtn.classList.toggle('d-none')
          sendingBtn.classList.toggle('d-none')
          alerT.classList.toggle('d-none')
          form.reset()
      })
      .catch(error => console.error('Error!', error.message))
  })
</script>

<!--
<script src="https://code.jquery.com/jquery-3.6.0.min.js"?></script>
         
         <script type="text/javascript">
             function sendMail(){
                 var name = $("#name");
                 var email = $("#email");
                 var subject = $("#subject");
                 var body = $("#body");
                 
                 if(isNotEmpty(name)) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)){
                     $ajax({
                         url: 'sendMail.php',
                         method: 'POST',
                         dataType: 'json',
                         data:{
                             name: name.val(),
                             email: email.val(),
                             subject: subject.val(),
                             body: body.val()
                         }, success: function(response){
                             $('#contactForm')[0].reset();
                             $('send-notification').text("Message sent successfully");
                         }
                     });
                 }
                 function isNotEmpty(caller){
                     if(caller.val()==""){
                         caller.css('border',1px solid red);
                         return false;
                     }
                     else {
                         caller.css('border', '');
                         return true;
                 }
                 }
             }
         </script>
-->
<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>


<?php
include "footer.php";
?>