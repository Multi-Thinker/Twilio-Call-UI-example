<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Twilio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <!-- <script src="main.js"></script> -->
</head>
<body>
    <div class='container-fluid'>
        <div class="row"></div>
            <div class='col-md-1 col-sm-1 col-xs-1 col-lg-1 pull-left bg'>
                <div class='nav'>
                    <ul>
                        <li><i class='fa fa-shopping-bag'></i></li>
                        <li><i class='fa fa-signature'></i><p>Dashboard</p></li>
                        <li><i class='fa fa-question-circle'></i><p>FAQ</p></li>
                        <li><i class='fa fa-sign-out-alt'></i><p>Sign-out</p></li>
                    </ul>
                </div>
            </div>
            <div class='col-md-11 col-sm-11 col-xs-11 col-lg-11 pull-right'>
                <div class='row head'>
                        <div class='com-md-1'>
                            <span class='bBtn pull-left'>
                                <i class='fa fa-arrow-left'></i>
                                BACK
                            </span>
                        </div>
                    <div class='col-md-2'>
                        <span class='inputGroup'>
                            <input type='text' placeholder="Go to case ID#">
                            <button class='blue'><i class='fa fa-arrow-right'></i></button>
                        </span>
                    </div>
                    <div class='col-md-3 hidden-sm hidden-xs'>
                            <span class='score'>
                                <i class='fa fa-chart-line'></i>Fullfilment KPIs
                            </span>
                    </div>        
                    <div class='col-md-5 hidden-xs hidden-sm pull-right'>
                        <span class='user pull-right'>
                            example@example.com<i class='fa fa-angle-down'></i>
                        </span>
                    </div>
                </div>
                <div class='row'>
                    <div class='container box'>
                        <h2>Matched Providers</h2>
                        <table class='table table-hover table-striped'>
                            <thead>
                                <tr>
                                    <td>Type</td>
                                    <td>Name</td>
                                    <td>Phone</td>
                                    <td>Email</td>
                                    <td>ID</td>
                                    <td>Status</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <i class='fa fa-flag'></i>
                                        <i class='fa fa-user'></i>
                                    </td>
                                    <td class='name'>Lucile Munoz</td>
                                    <td>oceane.torp@brennan.us</td>
                                    <td>+1 (727) 809-1539</td>
                                    <td>7543</td>
                                    <td>
                                        <span class='optionLink popen'>
                                            <i class='fa fa-arrow-right'></i>
                                            <span>Contacting</span>
                                        </span>
                                        <span class='MenuLink pull-right inpopen'>
                                                <i class='fa fa-ellipsis-v'></i>
                                            </span>
                                        <span class='actionBtn pull-right'>
                                            <button class='btn btn-primary' disabled>
                                                CHAT
                                            </button>
                                            <button class='btn btn-success callIt'>
                                                CALL
                                            </button>
                                        </span>
                                        <div class="intoPopup hidden">
                                            <ul>
                                                <li>Send intro</li>
                                                <li class='inpopen'>Provide feedback</li>
                                                <li>Send reminder</li>
                                                <li>Background check</li>
                                            </ul>
                                        </div>
                                       
                                        <div class='popup hidden'>
                                                <ul>
                                                    <li class='popen'>
                                                        <span class='optionLink'>
                                                                <i class='fa fa-arrow-right'></i>
                                                                <span>Contacting</span>
                                                        </span>
                                                    </li>
                                                    <li class='popen'>
                                                        <span class='optionLink'>
                                                            <i class='fa fa-phone'></i>
                                                            <span>Talked to the client</span>
                                                        </span>
                                                    </li>
                                                    <li class='popen'>
                                                        <span class='optionLink'>
                                                            <i class='fa fa-eye'></i>
                                                            <span>Assessment scheduled</span>
                                                        </span>
                                                    </li>
                                                    <li class='popen'>
                                                        <span class='optionLink'>
                                                            <i class='fa fa-star'></i>
                                                            <span>Contacting</span>
                                                        </span>
                                                    </li>
                                                    <li class='popen'>
                                                            <span class='optionLink'>
                                                                <i class='fa fa-times'></i>
                                                                <span>Cancel the client</span>
                                                            </span>
                                                    </li>
                                                </ul>
                                            </div>
                                    </td>
                                </tr>
                                <tr>
                                        <td>
                                            <i class='fa fa-flag'></i>
                                            <i class='fa fa-user'></i>
                                        </td>
                                        <td class='name'>Winifred Henderson</td>
                                        <td>landen_deckow@hotmail.com</td>
                                        <td>+1 (532) 831-5321</td>
                                        <td>9755</td>
                                        <td>
                                            <span class='optionLink'>
                                                <i class='fa fa-phone'></i>
                                                <span>Talked to the client</span>
                                            </span>
                                            <span class='MenuLink pull-right'>
                                                    <i class='fa fa-ellipsis-v'></i>
                                                </span>
                                            <span class='actionBtn pull-right'>
                                                <button class='btn btn-primary' disabled>
                                                    CHAT
                                                </button>
                                                <button class='btn btn-success' disabled>
                                                    CALL
                                                </button>
                                            </span>
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                            <td>
                                                <i class='fa fa-window-minimize'></i>
                                                <i class='fa fa-user'></i>
                                            </td>
                                            <td class='name'>Birdie Carson</td>
                                            <td>dietrich_amiya@yahoo.com</td>
                                            <td>+1 (673) 223-7379</td>
                                            <td>3421</td>
                                            <td>
                                                <span class='optionLink'>
                                                    <i class='fa fa-eye'></i>
                                                    <span>Assessment scheduled</span>
                                                </span>
                                                <span class='MenuLink pull-right'>
                                                        <i class='fa fa-ellipsis-v'></i>
                                                    </span>
                                                <span class='actionBtn pull-right'>
                                                    <button class='btn btn-primary' disabled>
                                                        CHAT
                                                    </button>
                                                    <button class='btn btn-success' disabled>
                                                        CALL
                                                    </button>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                                <td>
                                                    <i class='fa fa-window-minimize'></i>
                                                    <i class='fa fa-envelope'></i>
                                                </td>
                                                <td class='name'>Family Care SF,Inc.</td>
                                                <td>dorothy.lesch@dickinson.me</td>
                                                <td>+1 (866) 124-5438</td>
                                                <td>7675</td>
                                                <td>
                                                    <span class='optionLink'>
                                                        <i class='fa fa-star'></i>
                                                        <span>Contacting</span>
                                                    </span>
                                                    <span class='MenuLink pull-right'>
                                                            <i class='fa fa-ellipsis-v'></i>
                                                        </span>
                                                    <span class='actionBtn pull-right'>
                                                        <button class='btn btn-primary' disabled>
                                                            CHAT
                                                        </button>
                                                        <button class='btn btn-success' disabled>
                                                            CALL
                                                        </button>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr class='warn'>
                                                    <td>
                                                        <i class='fa fa-flag'></i>
                                                        <i class='fa fa-user'></i>
                                                    </td>
                                                    <td class='name'>Barry Alenxander</td>
                                                    <td>reilly.julius@gmail.com</td>
                                                    <td>+1 (885) 163-9766</td>
                                                    <td>5553</td>
                                                    <td>
                                                        <span class='optionLink'>
                                                            <i class='fa fa-times warn'></i>
                                                            <span>Cancel the client</span>
                                                        </span>
                                                        <span class='MenuLink pull-right'>
                                                                <i class='fa fa-ellipsis-v'></i>
                                                            </span>
                                                        <span class='actionBtn pull-right'>
                                                            <button class='btn btn-primary' disabled>
                                                                CHAT
                                                            </button>
                                                            <button class='btn btn-success' disabled>
                                                                CALL
                                                            </button>
                                                        </span>
                                                        
                                                    </td>
                                                </tr>
                            </tbody>
                        </table>

                        <b>NOTE:</b>
                        <pre> because this is trail account, twilio doesn't let you call to other number, you can setup your app sid, app key, account sid and provide twilio number and number calling to test this functionality, the file call.php should be the call back, ?print param records debug. res.xml must be present on root to call different number. 
                        </pre>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class='raetPopup hidden'>
            <div class='bgo'>
                <div class='pop'>
                <i class='fa fa-times pull-right'></i>
                <h3>Set the rating and provide the feedback note:</h3>
                <span class='rate'>
                    <i class='fa fa-star cy'></i>
                    <i class="fa fa-star cy"></i>
                    <i class="fa fa-star cy"></i>
                    <i class="fa fa-star cy"></i>
                    <i class="fa fa-star"></i>
                </span>
                <textarea placeholder="Type here"></textarea>
                    <button class='svBtn btn btn-primary'>SAVE</button>
                </div>
            </div>
        </div>
    <script src='http://code.jquery.com/jquery-latest.min.js'></script>
    <script>
        $(function(){
            $(".popen").click(function(){
                $(".popup").toggleClass("hidden");
            });
            $(".inpopen").click(function(){
                $(".intoPopup").toggleClass("hidden");
            });
            $("li.inpopen,.pop i").click(function(){
                $(".raetPopup").toggleClass("hidden");
            });
        })
    
    </script>
</body>
</html>