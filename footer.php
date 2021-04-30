<head>
  <style>
    .footer {
      padding: 20px;
      text-align: center;
      background: rgb(55, 55, 55,1.6);
      position: relative;
      height: 100px;
      display: flex;
      bottom: 0px;
      color: white;
    }

    #loc{
      position: absolute;
      left: 50%;
      transform: translate(-50%,-50%);
      top: 50%;
   }
    #con{
      position: absolute;
        right: 10px;
      top: 50%;
      transform: translate(0, -50%)
    }

    #loc, #con{
      opacity: 0.5;
      font-family: Loto;
    }

    #loc #con:hover{
      opacity: 1;
      color: red;
    }
    #contactus {
      font-size: small;
    }

    .social-items {
      list-style: none;
      margin-left: 0px;
    }

    #call {
      width: 18px;
      color: white;
    }

    .f_contact {
      color: white;

    }

    a {
      text-decoration: none;
    }

    .s1{
      height:16px;
    }
    .s2 {
      margin-top: 5px;
    }

    #copyright{
      /* font-size: 15px; */
      text-align: center;
      bottom: 0px;
      margin: 0px;
      color: white;
      left: 50%;
      background-color: black;
      width: 100%;
      }

      #copyright>p{
        font-size: 19px;
        margin-top: 0px;
        margin-bottom: 0px;
      }

      .a{
       transform:  translate(-56px, 18px);
}
      .b{
        transform:  translate(-79px, 18px);
      }
      /* .s1{
        /* height: 20px; */
      

      /* .hove{
        opacity: 0.5;
      }
      .hove:hover{
        opacity: 0.9;
      }  */
      @media (max-width:470px){
        #copyright >p{
          font-size: 10px;
        }
        .title{
          height: 80px;
        }
        #loc , #con{
          font-size: 11px;
        }

        .footer{
          height: 180px;
        }
        #loc{
          top: 32%;
          width: 71%;
        }

        #con{
          top: 75%;
          transform: translate(-50%, -54%);
          left: 50%;
        }

        .a{
          transform: translate(-40px, 16px)
        }
        .b{
          transform: translate(-56px, 14px)
        }
        .s1{
          height: 16px;
        }
      }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div class="footer">

  <div id="loc">
    <span class="hove" style="margin-bottom: 4px;">Location</span>
    <li class="social-items locat"> <a href="#"><img id="call" src="location-.png"><span class="f_contact"><span></a><span>  Office no. 401, 4th Floor,<br> RAAMA ICON Opposite Darshanam complex,</span></li>
   <span> Gotri - Sevasi Rd, Chandramauleshwar Nagar,<br> Vadodara, Gujarat 390021 </span>
  </div>
  <div id="con">
    <span class="hove" style="margin-bottom: 4px;">Contact Us</span>
    <li class="social-items s1"><img id="call" class="a" src="call-.png"><div class="f_contact">: 9897867668</div></li>
    <li class="social-items s2"> <img id="call" class="b"  src="email-.png"><div class="f_contact">: abc@xyzgmail.com</div></li>
  </div>
</div>

  <div id="copyright">
     <p>Ⓒ 2021 OrionCoders Digital Private Limited</p>
  </div>