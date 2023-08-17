<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Contact Us form </title>
    <link rel="stylesheet" href="css-contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins" , sans-serif;
        }
        body{
        min-height: 100vh;
        width: 100%;
        background: #946B6B;
        display: flex;
        align-items: center;
        justify-content: center;
        }
        .container{
        width: 85%;
        background: #fff;
        border-radius: 6px;
        padding: 20px 60px 30px 40px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
        .container .content{
        display: flex;
        align-items: center;
        justify-content: space-between;
        }
        .container .content .left-side{
        width: 25%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-top: 15px;
        position: relative;
        }
        .content .left-side::before{
        content: '';
        position: absolute;
        height: 70%;
        width: 2px;
        right: -15px;
        top: 50%;
        transform: translateY(-50%);
        background: #afafb6;
        }
        .content .left-side .details{
        margin: 14px;
        text-align: center;
        }
        .content .left-side .details i{
        font-size: 30px;
        color: #3e2093;
        margin-bottom: 10px;
        }
        .content .left-side .details .topic{
        font-size: 18px;
        font-weight: 500;
        }
        .content .left-side .details .text-one,
        .content .left-side .details .text-two{
        font-size: 14px;
        color: #afafb6;
        }
        .container .content .right-side{
        width: 75%;
        margin-left: 75px;
        height: 400px;
        }
        .content .right-side .topic-text{
        font-size: 23px;
        font-weight: 600;
        color: #3e2093;
        }
        .right-side .input-box{
        height: 50px;
        width: 100%;
        margin: 12px 0;
        padding-bottom: 10px;
        }

        .form-container {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
        }
        .form-footer {
          display: flex;
          justify-content: center;
          align-items: center;
          margin-top: 20px; /* Add spacing from the form content */
          margin-top: 50px;
          text-align: center;
        }
        .right-side .input-box input,
        .right-side .input-box textarea{
        height: 100%;
        width: 100%;
        border: none;
        outline: none;
        font-size: 16px;
        background: #F0F1F8;
        border-radius: 6px;
        padding: 0 15px;
        resize: none;
        }

        .right-side .input-box1{
        height: 100px;
        width: 100%;
        margin: 12px 0;
        }
        .right-side .input-box1 input,
        .right-side .input-box1 textarea{
        height: 100%;
        width: 100%;
        border: none;
        outline: none;
        font-size: 16px;
        background: #F0F1F8;
        border-radius: 6px;
        padding: 0 15px;
        resize: none;
        }

        .right-side .message-box{
        min-height: 110px;
        }
        .right-side .input-box textarea{
        padding-top: 6px;
        }
        .right-side .button{
        display: inline-block;
        margin-top: 12px;
        }
        .right-side .button input[type="button"]{
        color: #fff;
        font-size: 18px;
        outline: none;
        border: none;
        padding: 8px 16px;
        border-radius: 6px;
        background: #3e2093;
        cursor: pointer;
        transition: all 0.3s ease;
        }
        .button input[type="button"]:hover{
        background: #5029bc;
        }

        @media (max-width: 950px) {
        .container{
            width: 90%;
            padding: 30px 40px 40px 35px ;
        }
        .container .content .right-side{
        width: 75%;
        margin-left: 55px;
        }
        }
        @media (max-width: 820px) {
        .container{
            margin: 40px 0;
            height: 100%;
        }
        .container .content{
            flex-direction: column-reverse;
        }
        .container .content .left-side{
        width: 100%;
        flex-direction: row;
        margin-top: 40px;
        justify-content: center;
        flex-wrap: wrap;
        }
        .container .content .left-side::before{
        display: none;
        }
        .container .content .right-side{
        width: 100%;
        margin-left: 0;
        }
        }
    </style>
   </head>
<body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Japan, Tokyo</div>
          <div class="text-two">Musashinoshi Sakai 2-5-13</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">090-6657-5963</div>
          <div class="text-two">080-7345-0415</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">nicolas.kojima@gmail.com</div>
          <div class="text-two">nicolas.t.y.kojima@gmail.com</div>
        </div>
      </div>

      <div class="right-side">
        <div class="topic-text">Send us a message</div>
          <p>If you have any work from us or any types of quries, you can send me message from here. It would be our pleasure to meet you!</p>
           <div class="form-container">
            <form name="registration" id="registration" method="post" action="{{url('store-form2')}}"  enctype="multipart/form-data">
            @csrf
                <div class="input-box">
                  <label for="exampleInputEmail1">Your Name</label>
                  <input type="string" id="name" name="name" class="form-control" required="" placeholder="enter your name">
                </div>
                <div class="input-box">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="string" id="email" name="email" class="form-control" required="" placeholder="enter your email">
                </div>
                <div class="input-box1">
                  <label for="exampleInputEmail1">Introduction</label>
                  <textarea name="inquiry" class="form-control" required="" placeholder="enter your inquiry"></textarea>
                </div>
                <div class="form-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
</html>