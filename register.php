
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />

    <title>Register</title>
    <meta
      content="Computer Science and Engineering Department of JNTU Gurajada,Vizianagaram is going to organize a 2 day fest ,CRESENSE-2022 on 25-03-2022 and 26-03-2022.Our event involves various technical and non technical events which are mentioned in detail in our brochure.We invite you all to join this most awaiting event."
      name="description"
    />
    <meta content="CRESENSE-2022,CSE FEST,jntukucev,JNTU-GV" name="keywords" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="JNTU-GV" />
    <!--Import Google Icon Font-->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!--Import materialize.css-->
    <link
      type="text/css"
      rel="stylesheet"
      href="assets/css/materialize.css"
      media="screen,projection"
    />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./assets/img/hero-img.png" type="image/icon type" />
    <style>
      .input-field {
        margin: 1rem auto;
        float: none !important;
      }
      .container {
        margin-top: 50px;
        border: 5px solid black;
        border-radius: 20px;
      }
      /* From cssbuttons.io by @adamgiebl */
      /* Hide the default checkbox */
      .checkcontainer input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
      }

      .checkcontainer {
        display: block;
        position: relative;
        cursor: pointer;
        font-size: 20px;
        user-select: none;
      }

      /* Create a custom checkbox */
      .checkmark {
        position: relative;
        top: 0;
        left: 0;
        height: 1.3em;
        width: 1.3em;
        background-color: #ccc;
        transition: all 0.3s;
        border-radius: 5px;
      }

      /* When the checkbox is checked, add a blue background */
      .container input:checked ~ .checkmark {
        background-color: #47da99;
        animation: pop 0.5s;
        animation-direction: alternate;
      }

      /* Create the checkmark/indicator (hidden when not checked) */
      .checkmark:after {
        content: "";
        position: absolute;
        display: none;
      }

      /* Show the checkmark when checked */
      .checkcontainer input:checked ~ .checkmark:after {
        display: block;
      }

      /* Style the checkmark/indicator */
      .checkcontainer .checkmark:after {
        left: 0.45em;
        top: 0.25em;
        width: 0.25em;
        height: 0.5em;
        border: solid white;
        border-width: 0 0.15em 0.15em 0;
        transform: rotate(45deg);
      }

      @keyframes pop {
        0% {
          transform: scale(1);
        }

        50% {
          transform: scale(0.9);
        }

        100% {
          transform: scale(1);
        }
      }
      .check {
        display: inline-block;
        margin-top: 2px;
      }
      /* From cssbuttons.io by @CristianMontoya98 */
      .btnpay {
        width: 6.5em;
        height: 2.3em;
        margin: 0.5em;
        background: black !important;
        color: white;
        border: none;
        border-radius: 0.625em;
        font-size: 20px;
        font-weight: bold;
        cursor: pointer;
        position: relative;
        z-index: 1;
        overflow: hidden;
      }

      .btnpay:hover {
        color: black !important;
        border: 2px solid black;
      }

      .btnpay:after {
        content: "";
        background: white;
        position: absolute;
        z-index: -1;
        left: -20%;
        right: -20%;
        top: 0;
        bottom: 0;
        transform: skewX(-45deg) scale(0, 1);
        transition: all 0.5s;
      }

      .btnpay:hover:after {
        transform: skewX(-45deg) scale(1, 1);
        -webkit-transition: all 0.5s;
        transition: all 0.5s;
      }
      .modal {
        box-shadow: none;
        -webkit-box-shadow: none;
        background: none;
      }
      @media only screen and (max-width: 600px) {
        .input-field {
          width: 100% !important;
        }
        .container {
          border: none;
        }
      }
    </style>
    <base href="http://localhost/fest/">
  </head>

  <body>
    <?php echo '
    <div class="container">
      <div class="row dcenter">
        <form class="col s12" action="forms/response.php" method="post">
        <input type="hidden" name="ename" value="'?><?php echo $_POST['ename'];?><?php echo '" />
          <div class="row dcenter">
            <div class="col-sm-12">
              <h2 class="well text-center">Register</h2>
              <h5 class="well text-center">'?><?php if(isset($_POST['type'])){ if(strcmp($_POST['type'],'w')==0) echo 'Workshop CODE: '.$_POST['ename']; else echo 'Event CODE: '.$_POST['ename'];}?>
              <?php echo '</h5>
            </div>
            <div class="col-sm-12">
              <div class="input-field col s4">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_prefix" type="text" class="validate" name="fname" required/>
                <label for="icon_prefix">First Name</label>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="input-field col s4">
                <i class="material-icons prefix">phone</i>
                <input id="icon_telephone" type="tel" class="validate" name="phone" required pattern="[0-9]{10}" title="Enter 10 digit phone no."/>
                <label for="icon_telephone">Telephone</label>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="input-field col s4">
                <i class="material-icons prefix">school</i>
                <input id="icon_school" type="text" class="validate" name="college" required/>
                <label for="icon_school">College</label>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="input-field col s4">
                <i class="material-icons prefix">email</i>
                <input id="icon_email" type="email" class="validate" name="email" required/>
                <label for="icon_email">Email</label>
              </div>
            </div>
            <div class="col-sm-12 text-center">
              <label class="checkcontainer">
                <input type="checkbox" id="tc"/>
                <div class="checkmark check"></div>
                I have read and agree to the
                <a
                  href="#"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal"
                  class="update"
                  >Terms and Conditions</a
                >
              </label>
            </div>
            <div class="col-sm-12 text-center">
              <button class="btnpay" id="paybtn">Pay '?><?php if(isset($_POST['amount'])) echo $_POST['amount'];?><?php echo '</button>
            </div>
            <div
              class="modal fade"
              id="exampleModal"
              tabindex="-1"
              aria-labelledby="exampleModalLabel"
              aria-hidden="true"
            >
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                      Terms and Conditions
                    </h5>
                    <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    ></button>
                  </div>
                  <div class="modal-body">
                    <b> 1) return, refund & cancellation policy</b> <br />
                    <p style="padding-left: 20px">
                      No return , refund & cancellation
                    </p>
                    <br />
                    <b> 2) Product/Services Purchase Flow for your customers</b
                    ><br />
                    <p style="padding-left: 20px">
                      Once the payment method is selected, user reaches to the
                      order completion page displaying his/her Order ID &
                      transaction ID for the payment along with the order
                      details.
                    </p>
                  </div>
                  <div class="modal-footer">
                    <button
                      type="button"
                      class="btn btn-secondary"
                      data-bs-dismiss="modal"
                    >
                      Close
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>'?>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="assets/js/materialize.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script>
      var checker = document.getElementById('tc');
var sendbtn = document.getElementById('paybtn');
checker.onchange = function() {
  sendbtn.disabled = !!this.checked;
};
      var myModal = new bootstrap.Modal(
        document.getElementById("exampleModal"),
        {
          keyboard: false,
        }
      );
      $(function () {
        $("a[class='update']").click(function () {
          myModal.show();
          return false;
        });
      });
    </script>
  </body>
</html>
