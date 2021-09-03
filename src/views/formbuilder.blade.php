
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial" />
      <link rel="stylesheet" href="./style.css" />
      

  </head>
  <style>
  body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  },
  h1{
    color: #0687ff;
    font-weight: 700;
    font-size: 5rem;
    opacity: 0.8;
  }
  h2,
  p{
    color: #658ec6;
    font-weight: 500;
  
    opacity: 0.8;
  }
  h3{
    color: #0687ff;
    font-weight: 600;
    font-size: 4rem;
    opacity: 0.8;
  }
  main {
    font-family: "Poppins", sans-serif;
    min-height: 110vh;
    background: linear-gradient(to right top, #65dfc9, #6cdbeb);
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  .glass {
    background: rgb(219, 203, 203);
    min-height: 90vh;
    width: 70%;
    background: linear-gradient(
      to right bottom,
      rgba(232, 236, 236, 0.7),
      rgba(164, 218, 218, 0.3)
    );
    border-radius: 2rem;
    z-index: 5;
    backdrop-filter: blur(2rem);
    display: flex;
  },
  .circle1,
  .circle2 {
    background: white;
    background: linear-gradient(
      to right bottom,
      rgba(255, 255, 255, 0.8),
      rgba(19, 194, 28, 0.3)
    );
    height: 15rem;
    width: 15rem;
    position: absolute;
    border-radius: 50%;
  },
  .circle3 {
    background: white;
    background: linear-gradient(
      to right bottom,
      rgba(255, 255, 255, 0.8),
      rgba(19, 194, 28, 0.3)
    );
    height: 15rem;
    width: 15rem;
    position: absolute;
    border-radius: 50%;
  }
  
  .circle1 {
    top: 5%;
    right: 15%;
 
  }
  .circle2 {
    bottom: 5%;
    left: 10%;
  }
  .circle3 {
    top: 5%;
    left: 10%;
  }
  
  }
  .link{
    display: flex;
    margin: 2rem 0rem;
    padding: 1rem 6rem;
    align-items: center;
  }
  .link h2{
    display: flex;
    padding: 0rem 2rem;
   
  }
  input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

  input[type=submit] {
    background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

    input[type=submit]:hover {
    background-color: #45a049;
    }

   .container {
     border-radius: 5px;
     background-color: #f2f2f2;
     padding: 20px;
    }

     }
  </style>
  <body>
      <main>
        <section class="glass">
          <h3>Contact Form</h3>

          <div class="container">
            <form action="{{route('FormBuilder')}}" method="post">
              @csrf
              <label for="fname">First Name</label>
              <input type="text" id="fname" name="firstname" placeholder="Your name..">
          
              <label for="lname">Last Name</label>
              <input type="text" id="lname" name="lastname" placeholder="Your last name..">

              <input type="checkbox" id="vehicle_status" name="vehicle_status" value="Have a bike">
              <label for="vehicle_status"> I have a bike</label><br>
          
              <label for="country">Country</label>
              <select id="country" name="country">
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
              </select>

            
           
          
              <label for="subject">Subject</label>
              <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

           
          
              <input type="submit" value="Submit">
            </form>
          </div> 
              
        </section>
      </main>
      <div class="circle1"></div>

      <div class="circle2"></div>
      <div class="circle3"></div>

  </body>
</html>