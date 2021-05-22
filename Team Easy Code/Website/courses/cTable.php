<!DOCTYPE html>
<html lang="en">

<head>
    <title>C Programming Course</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <style>
        h1 {
            text-align: center;
        }
        
        #wrapper {
            background: rgb(252, 250, 250);
            overflow: hidden;
            transition: height 200ms;
            height: 0;
            /* <-- set this */
        }
        
        #wrapper1 {
            background: rgb(252, 250, 250);
            overflow: hidden;
            transition: height 200ms;
            height: 0;
            /* <-- set this */
        }
        
        #wrapper3 {
            background: rgb(252, 250, 250);
            overflow: hidden;
            transition: height 200ms;
            height: 0;
            /* <-- set this */
        }
        
        #wrapper2 {
            background: rgb(252, 250, 250);
            overflow: hidden;
            transition: height 200ms;
            height: 0;
            /* <-- set this */
        }
        
        #wrapper4 {
            background: rgb(252, 250, 250);
            overflow: hidden;
            transition: height 200ms;
            height: 0;
            /* <-- set this */
        }
        
        #wrapper5 {
            background: rgb(252, 250, 250);
            overflow: hidden;
            transition: height 200ms;
            height: 0;
            /* <-- set this */
        }
        
        #wrapper6 {
            background: rgb(252, 250, 250);
            overflow: hidden;
            transition: height 200ms;
            height: 0;
            /* <-- set this */
        }
        
        #wrapper7 {
            background: rgb(252, 250, 250);
            overflow: hidden;
            transition: height 200ms;
            height: 0;
            /* <-- set this */
        }
        
        #wrapper8 {
            background: rgb(252, 250, 250);
            overflow: hidden;
            transition: height 200ms;
            height: 0;
            /* <-- set this */
        }
        
        #wrapper9 {
            background: rgb(252, 250, 250);
            overflow: hidden;
            transition: height 200ms;
            height: 0;
            /* <-- set this */
        }
        
        .mp {
            background-color: black;
            margin-top: 5%;
        }
        
        * {
            box-sizing: border-box;
        }
        
        * {
            box-sizing: border-box
        }
        
        body {
            font-family: "Lato", sans-serif;
        }
        /* Style the tab */
        /* Style the buttons inside the tab */
        
        .tab button {
            display: block;
            background-color: inherit;
            color: black;
            padding: 22px 16px;
            width: 100%;
            border: none;
            outline: none;
            text-align: left;
            cursor: pointer;
            transition: 0.3s;
            font-size: 17px;
        }
        /* Change background color of buttons on hover */
        
        .tab button:hover {
            background-color: #8ECAE6;
        }
        /* Create an active/current "tab button" class */
        
        .tab button.active {
            color: black;
            font-weight: bold;
        }
        /* Style the tab content */
        
        @media only screen and (min-width: 1200px) {
            .tabcontent {
                float: left;
                padding: 0px 12px;
                border: 1px solid #8ECAE6;
                width: 1000px;
                border-left: none;
                height: 1000px;
            }
            .tab {
                float: left;
                border: 1px solid #8ECAE6;
                background-color: #8ECAE6;
                width: 30%;
                margin-left: 1%;
                overflow-x: hidden;
                overflow-y: auto;
            }
        }
        
        @media only screen and (max-width: 600px) {
            .tab {
                float: left;
                border: 1px solid #8ECAE6;
                background-color: #8ECAE6;
                width: 90%;
                margin-left: 5%;
                overflow-x: hidden;
                overflow-y: auto;
            }
            .tabcontent {
                float: left;
                padding: 0px 12px;
                border: 1px solid #8ECAE6;
                /* width: 1000px; */
                border-left: none;
                visibility: hidden;
            }
        }
        
        .scroll {
            margin: 4px, 4px;
            padding: 4px;
            background-color: green;
            width: 500px;
            height: 110px;
            text-align: justify;
        }
        /* Create two equal columns that floats next to each other */
    </style>
    <link rel="shortcut icon" type="icon" href="../images/logo.ico" />
</head>

<body>

    <nav class=" navbar navbar-expand-lg navbar-dark " style="display:flex; background-color: black;">
        <div class="col-1">
            <img src="black_Logo.png" width=" 60 " height=" 60 " class=" d-inline align-top " alt=" ">
        </div>
        <div class="col">
            <p style="margin-top: 2%;color: white; font-size: x-large;"><b>EasyCode</b></p>
        </div>

        <button class=" navbar-toggler " type=" button " data-toggle=" collapse " data-target=" #navbarNav " aria-controls=" navbarNav " aria-expanded=" false " aria-label=" Toggle navigation ">
            <span class=" navbar-toggler-icon "></span>
        </button>
        <div class=" collapse navbar-collapse " id=" navbarNav ">
            <ul class=" navbar-nav ml-auto ">
                <li class=" nav-item ">
                    <a class=" nav-link " href="../index.php">
                        Home </a>
                </li>
                <li class=" nav-item active ">
                    <a class=" nav-link " href="home.html">Courses<span class=" sr-only ">(current)</span></a>
                </li>
                <li class=" nav-item ">
                    <a class=" nav-link " href=" # ">Contact</a>
                </li>
                <li class=" nav-item ">
                    <a class=" nav-link " href="logout.php ">Logout</a>
                </li>
                <li class=" nav-item ">
                    <a class=" nav-link disabled " href=" # "></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class=" container-fluid " style="text-align:center;background-color: gold; ">
        <h1 class=" h1 ">C Programming A to Z</h1>
        <!-- <h1 class="text-muted" style="color: black;"> Welcome, <?php echo $_SESSION['name'] ?></h1> -->
    </div>


    <h2 style="text-align: left;margin-left: 3%;margin-bottom:1% ;">Hi
Student!!</h2>


    <div class="tab" class="scroll">

        <button class="tablinks" id="button" id="defaultOpen" onclick="openCity(event, 'Introduction')">Introduction to Programming</button>
        <div id="wrapper" class="open">
            <div id="list">
                <table class="table table-striped">
                    <thead>
                    </thead>
                    <tbody>

                        <tr>

                            <td>
                                <p class="btn btn-link btn-sm" onclick="openCity(event, 'intro')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">1. Introduction to Programming</td>
                            <td>
                                <a href="https://drive.google.com/file/d/17tB1caQ3KGDy_AfUzpaa35u9RFjMuuqh/view?usp=sharing" target="_blank">7:27</a> </td>
                        </tr>

                        <tr>

                            <tr>

                                <td>
                                    <p class="btn btn-link btn-sm" onclick="openCity(event, 'software')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">1.1 Software Installation</td>
                                <td>
                                    </a>
                                </td>
                            </tr>


                            <!-- <td style="border-bottom: black 3px solid"></td>
                    <td style="border-bottom: black 3px solid"></td> -->

                            <tr>
                                <tr>

                                    <td>
                                        <p class="btn btn-link btn-sm" onclick="openCity(event, 'first_c')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">2. My first C Program</td>
                                    <td><a href="https://drive.google.com/file/d/1UvDABrURzja6sVrIB1OidbmV56EkfPCx/view?usp=sharing" target="_blank">13:52</a> </td>
                                </tr>
                                <tr>
                                    <tr>

                                        <td>
                                            <p class="btn btn-link btn-sm" onclick="openCity(event, 'steps')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">3. Steps to learn language</td>
                                        <td><a href="https://drive.google.com/file/d/1vTy28vX-F7WSv7TFccf8abWlELsV3H1n/view?usp=sharing" target="_blank">1:55</a> </td>
                                    </tr>

                                    <tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button class="tablinks" id="button1" onclick="openCity(event, 'Basics')" style="background-color: lightyellow;color:black">Basics of C Programming</button>
        <div id="wrapper1">
            <div id="list1">
                <table class="table table-striped">
                    <thead>

                    </thead>
                    <tbody>

                        <tr>

                            <td>
                                <p class="btn btn-link btn-sm" onclick="openCity(event, 'constants')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">4. Constants</td>
                            <td><a href="https://drive.google.com/file/d/1SfANb342xenJMTNKG2VKSEgvDxhSQRX-/view?usp=sharing" target="_blank">4:29</a></td>
                        </tr>


                        <!-- <td style="border-bottom: black 3px solid"></td>
                <td style="border-bottom: black 3px solid"></td> -->

                        <tr>

                            <tr>

                                <td>
                                    <p class="btn btn-link btn-sm" onclick="openCity(event, 'variables')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">5. Variable</td>
                                <td><a href="https://drive.google.com/file/d/13wkYY-kRKOoPta4WKe4LfqMfB5hvwYoC/view?usp=sharing" target="_blank">6:31</a> </td>
                            </tr>


                            <!-- <td style="border-bottom: black 3px solid"></td>
                    <td style="border-bottom: black 3px solid"></td> -->

                            <tr>
                                <tr>

                                    <td>
                                        <p class="btn btn-link btn-sm" onclick="openCity(event, 'printf')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">6. Printf </td>
                                    <td><a href="https://drive.google.com/file/d/1RKYMlAcb5McgN7g5g4BAyxq4Yjkzb3XT/view?usp=sharing" target="_blank">2:07</a> </td>
                                </tr>
                                <tr>
                                    <tr>
                                        <td>
                                            <p class="btn btn-link btn-sm" onclick="openCity(event, 'instructions')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">7. Instructions </td>
                                        <td><a href="https://drive.google.com/file/d/1lmihkUpQs_0YOERZs38POmVmItfb7NG8/view?usp=sharing" target="_blank">1:37</a> </td>
                                    </tr>
                                    <!-- <td style="border-bottom: black 3px solid"></td>
                        <td style="border-bottom: black 3px solid"></td> -->

                                    <tr>



                    </tbody>
                </table>
            </div>
        </div>
        <button class="tablinks" id="button2" onclick="openCity(event, 'Operators')">Operators</button>
        <div id="wrapper2">
            <div id="list2">
                <table class="table table-striped">
                    <thead>

                    </thead>
                    <tbody>

                        <tr>

                            <td>
                                <p class="btn btn-link btn-sm" onclick="openCity(event, 'arithmetic_operators')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">8. Arithmetic Operators</td>
                            <td><a href="https://drive.google.com/file/d/1mxF8DFMmeTRKV5sGxiNeXjz6BmmXrxxr/view?usp=sharing" target="_blank">2:18</a></td>
                        </tr>
                        <tr>

                            <tr>

                                <td>
                                    <p class="btn btn-link btn-sm" onclick="openCity(event, 'increment_decrement')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">9. Increment Decrement</td>
                                <td><a href="https://drive.google.com/file/d/1yjAhrO-XR3_lq6e5vl_U50AOCJaLMRAY/view?usp=sharing" target="_blank">6:58</a> </td>
                            </tr>


                            <!-- <td style="border-bottom: black 3px solid"></td>
                    <td style="border-bottom: black 3px solid"></td> -->

                            <tr>
                                <tr>

                                    <td>
                                        <p class="btn btn-link btn-sm" onclick="openCity(event, 'extra_problems')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">10. Extra Problems</td>
                                    <td><a href="https://drive.google.com/file/d/1e_yXrVr_HVYRoH8vvjgJd-D0K623Zwql/view?usp=sharing" target="_blank">2:55</a> </td>
                                </tr>


                                <tr>

                                    <tr>

                                        <td>
                                            <p class="btn btn-link btn-sm" onclick="openCity(event, 'other_operators')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">
                                                11. Other Operators </td>
                                        <td><a href="https://drive.google.com/file/d/1NS1NlB_tw5alRffemZtDAxSrL3s4KVZy/view?usp=sharing" target="_blank">4.37</a> </td>
                                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <button class="tablinks" id="button3" onclick="openCity(event, 'Conditional_Statements_01')" style="color:black;background-color: lightyellow;">Control Statements:1</button>
        <div id="wrapper3">
            <div id="list3">
                <table class="table table-striped">
                    <thead>

                    </thead>
                    <tbody>

                        <tr>

                            <td>
                                <p class="btn btn-link btn-sm" onclick="openCity(event, 'intro_con')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">12. Introduction</td>
                            <td><a href="https://drive.google.com/file/d/1jEp_i_8cEE7Gi9m8KpffWnkgi9i29bbY/view?usp=sharing" target="_blank">0:44</a></td>
                        </tr>


                        <tr>

                            <tr>

                                <td>
                                    <p class="btn btn-link btn-sm" onclick="openCity(event, 'con_examples')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">13. Examples</td>
                                <td><a href="https://drive.google.com/file/d/1FykWQF57L24JvHfrI-H8DxwDlspbjc3H/view?usp=sharing" target="_blank">4:20</a> </td>
                            </tr>


                            <tr>
                                <tr>

                                    <td>
                                        <p class="btn btn-link btn-sm" onclick="openCity(event, 'con_statements')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">14. Conditional Statements</td>
                                    <td><a href="https://drive.google.com/file/d/1E8VetIDgUaO1Ba-CUnwbvO0g8mr07P03/view?usp=sharing" target="_blank">2:57</a> </td>
                                </tr>


                                <tr>

                                    <tr>

                                        <td>
                                            <p class="btn btn-link btn-sm" onclick="openCity(event, 'con_challenge')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">15. Challenge</td>
                                        <td><a href="https://drive.google.com/file/d/1cOtbt9hX6uCa2-9HXVDLeKexeBP59nGT/view?usp=sharing" target="_blank">0:21</a> </td>
                                    </tr>
                                    <tr>
                                        <tr>

                                            <td>
                                                <p class="btn btn-link btn-sm" onclick="openCity(event, 'if_else')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">16. IF-Else</td>
                                            <td><a href="https://drive.google.com/file/d/1cJDbt-IXjx16E5y1Dh4Dr_EwYh7N8WkH/view?usp=sharing" target="_blank">4:13</a> </td>
                                        </tr>
                                        <tr>
                                            <tr>

                                                <td>
                                                    <p class="btn btn-link btn-sm" onclick="openCity(event, 'con_challenge_02')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">17. Challenge</td>
                                                <td><a href="https://drive.google.com/file/d/10e4GA5Fqgsl0ppYpQ32M36TXRVWM0hYV/view?usp=sharing" target="_blank">0:29</a> </td>
                                            </tr>


                    </tbody>
                </table>
            </div>
        </div>
        <button class="tablinks" id="button4" onclick="openCity(event, 'Conditional_Statements_02')">Control Statements:2</button>

        <div id="wrapper4">
            <div id="list4">
                <table class="table table-striped">
                    <thead>

                    </thead>
                    <tbody>

                        <tr>

                            <td>
                                <p class="btn btn-link btn-sm" onclick="openCity(event, 'nested')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">18. Nested If-Else Intuition</td>
                            <td><a href="https://drive.google.com/file/d/1h9Yk-Sh7ej70e_oeXHzNU3mPJ86Uj7v2/view?usp=sharing" target="_blank">1:22</a></td>
                        </tr>


                        <tr>

                            <tr>

                                <td>
                                    <p class="btn btn-link btn-sm" onclick="openCity(event, 'nes_problem')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">19. Problem</td>
                                <td><a href="https://drive.google.com/file/d/1SfrQSvdJguSlPSew6hnLVA7uh38lZ-V4/view?usp=sharing" target="_blank">3:46</a> </td>
                            </tr>


                            <tr>
                                <tr>

                                    <td>
                                        <p class="btn btn-link btn-sm" onclick="openCity(event, 'else_if')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">20. Else-if</td>
                                    <td><a href="https://drive.google.com/file/d/1qTLwAkjPci50gerrrMewO-LDMFvB20wL/view?usp=sharing" target="_blank">3:28</a> </td>
                                </tr>


                                <tr>
                                    <tr>

                                        <td>
                                            <p class="btn btn-link btn-sm" onclick="openCity(event, 'challenge_03')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">21. Challenge</td>
                                        <td><a href="https://drive.google.com/file/d/1VptsNrbX7Fi7-dfP0waa7RNBRQvqO08V/view?usp=sharing" target="_blank">0:26</a> </td>
                                    </tr>
                                    <tr>
                                        <tr>

                                            <td>
                                                <p class="btn btn-link btn-sm" onclick="openCity(event, 'con_operators')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">22. Conditional Operators</td>
                                            <td><a href="https://drive.google.com/file/d/1nGrepaCCDHppAgc8FdCtIbjZ5O-BEJe-/view?usp=sharing" target="_blank">1:56</a> </td>
                                        </tr>
                                        <tr>
                                            <tr>

                                                <td>
                                                    <p class="btn btn-link btn-sm" onclick="openCity(event, 'switch_case')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">23. Switch Case</td>
                                                <td><a href="https://drive.google.com/file/d/1gME3JK0EoQKeDBuP0FmbSL4gCeFcxlKR/view?usp=sharing" target="_blank">10:20</a> </td>
                                            </tr>


                    </tbody>
                </table>
            </div>
        </div>


        <button class="tablinks" id="button5" onclick="openCity(event, 'iterative_01')" style="color:black;background-color: lightyellow;">Iterative Statements:1</button>
        <div id="wrapper5">
            <div id="list5">
                <table class="table table-striped">
                    <thead>

                    </thead>
                    <tbody>

                        <tr>

                            <td>
                                <p class="btn btn-link btn-sm" onclick="openCity(event, 'iterative_intro')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">24. Introduction</td>
                            <td><a href="https://drive.google.com/file/d/1PPhkLCYWtD8JaJv7JODFXSe3rwj0uLtc/view?usp=sharing" target="_blank">0:30</a></td>
                        </tr>


                        <tr>

                            <tr>

                                <td>
                                    <p class="btn btn-link btn-sm" onclick="openCity(event, 'while_intro')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">25. While Loop</td>
                                <td><a href="https://drive.google.com/file/d/1obJGOmuBRSXPMON0V6h2DMNsGpfCVLpe/view?usp=sharing" target="_blank">4:54</a> </td>
                            </tr>


                            <tr>
                                <tr>

                                    <td>
                                        <p class="btn btn-link btn-sm" onclick="openCity(event, 'while')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">26. While Loop Program</td>
                                    <td><a href="https://drive.google.com/file/d/1gzWZg1B_bg_JoTDoF5zt_wb-PdTa4-Nd/view?usp=sharing" target="_blank">2:50</a> </td>
                                </tr>


                                <tr>
                                    <tr>

                                        <td>
                                            <p class="btn btn-link btn-sm" onclick="openCity(event, 'do_while')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">27. Do While</td>
                                        <td><a href="https://drive.google.com/file/d/16Wj1ACBli984anznIPaIIZwb5Vbad0WQ/view?usp=sharing" target="_blank">3:24</a> </td>
                                    </tr>
                                    <tr>
                                        <tr>
                                            <td>
                                                <p class="btn btn-link btn-sm" onclick="openCity(event, 'do_while_program')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">28. Do While Program</td>
                                            <td><a href="https://drive.google.com/file/d/1I0Ue-6uzY3XH8cGi0udv1NDQ6qmC35KR/view?usp=sharing" target="_blank">4:20</a> </td>
                                        </tr>



                    </tbody>
                </table>
            </div>
        </div>
        <button class="tablinks" id="button6" onclick="openCity(event, 'iterative_02')">Iterative Statemnts:2</button>
        <div id="wrapper6">
            <div id="list6">
                <table class="table table-striped">
                    <thead>

                    </thead>
                    <tbody>

                        <tr>

                            <td>
                                <p class="btn btn-link btn-sm" onclick="openCity(event, 'for_loop')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">29. For Loop</td>
                            <td><a href="https://drive.google.com/file/d/16QKFtSTVPBt82px6bVZ5UzQ9riAIWO-Y/view?usp=sharing" target="_blank">6:11</a></td>
                        </tr>


                        <tr>

                            <tr>

                                <td>
                                    <p class="btn btn-link btn-sm" onclick="openCity(event, 'for_loop_program')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">30. For Loop Program</td>
                                <td><a href="https://drive.google.com/file/d/1fjLgzrhJqRqsW9iUYw8RLdOwtt_eEA80/view?usp=sharing" target="_blank">4:07</a> </td>
                            </tr>


                            <tr>
                                <tr>

                                    <td>
                                        <p class="btn btn-link btn-sm" onclick="openCity(event, 'for_loop_assignment')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">31. For Loop Assignment</td>
                                    <td><a href="https://drive.google.com/file/d/1nrTfTe4Mi_76UX71JTm9NvjPYUWKkavx/view?usp=sharing" target="_blank">0:48</a> </td>
                                </tr>


                                <tr>



                    </tbody>
                </table>
            </div>
        </div>
        <button class="tablinks" id="button7" onclick="openCity(event, 'Jump_Statements')" style="background-color: lightyellow;">Jump Statements</button>
        <div id="wrapper7">
            <div id="list7">
                <table class="table table-striped">
                    <thead>

                    </thead>
                    <tbody>

                        <tr>

                            <td>
                                <p class="btn btn-link btn-sm" onclick="openCity(event, 'jump_intro')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">32. Jump Statements</td>
                            <td><a href="https://drive.google.com/file/d/1EEXpe64A85mSFDs5MUMD4g7W-IoSP1LO/view?usp=sharing" target="_blank">3:05 </td>
                                </tr>
                            
                
                                <tr>
                
                                <tr>
                
                                    <td><p class="btn btn-link btn-sm" onclick="openCity(event, 'jump_program')" style="margin-left:20%;margin-bottom: 0%;" 
                                        target="_blank">33. Jump Statement Program</td>
                                    <td><a href="https://drive.google.com/file/d/1wIvy_u7SEtHVw3BvderAdzMjDF77275X/view?usp=sharing" target="_blank">2:58</a> </td>
                        </tr>






                    </tbody>
                </table>
            </div>
        </div>
        <button class="tablinks" id="button8" onclick="openCity(event, 'Arrays')">Arrays</button>
        <div id="wrapper8">
            <div id="list8">
                <table class="table table-striped">
                    <thead>

                    </thead>
                    <tbody>

                        <tr>

                            <td>
                                <p class="btn btn-link btn-sm" onclick="openCity(event, 'array_intro')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">34. Arrays Intro</td>
                            <td><a href="https://drive.google.com/file/d/1kDYefhgwufeAvKGtnbQH23d9TY0PXrwG/view?usp=sharing" target="_blank">0:21</a></td>
                        </tr>


                        <tr>

                            <tr>

                                <td>
                                    <p class="btn btn-link btn-sm" onclick="openCity(event, 'why_array')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">35. Arrays: Why & How</td>
                                <td><a href="https://drive.google.com/file/d/17KCDmB0K5qoeRGMHIW5g6j4sm0oOifRW/view?usp=sharing" target="_blank">3:39</a> </td>
                            </tr>


                            <tr>
                                <tr>

                                    <td>
                                        <p class="btn btn-link btn-sm" onclick="openCity(event, 'arr')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">36. Arrays</td>
                                    <td><a href="https://drive.google.com/file/d/1KroXl_r3CnHbLk-XaCTNYRvPXAP09DmU/view?usp=sharing" target="_blank">7:42</a> </td>
                                </tr>


                                <tr>
                                    <tr>

                                        <td>
                                            <p class="btn btn-link btn-sm" onclick="openCity(event, 'array_program')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">37. Array Programs</td>
                                        <td><a href="https://drive.google.com/file/d/1liKlCmLz7cvaH8iOEmQkkzjvO56A7pUM/view?usp=sharing" target="_blank">5:05</a> </td>
                                    </tr>
                                    <tr>
                                        <tr>

                                            <td>
                                                <p class="btn btn-link btn-sm" onclick="openCity(event, 'ch_array_reverse')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">38. Character Array Reversal</td>
                                            <td><a href="https://drive.google.com/file/d/1x1cZngMRJvy-W-dDxck98k6iUqOX3vmD/view?usp=sharing" target="_blank">9:35</a> </td>
                                        </tr>
                                        <tr>
                                            <tr>

                                                <td>
                                                    <p class="btn btn-link btn-sm" onclick="openCity(event, '2d_array')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">39. 2D Arrays</td>
                                                <td><a href="https://drive.google.com/file/d/1nGUNxXd4vgIQ2GL8CO2Rye4_gTKrLoU_/view?usp=sharing" target="_blank">7:07</a> </td>
                                            </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <button class="tablinks" id="button9" style="background-color: lightyellow  ;" onclick="openCity(event, 'Strings')">Strings</button>
        <div id="wrapper9">
            <div id="list9">
                <table class="table table-striped">
                    <thead>

                    </thead>
                    <tbody>

                        <tr>

                            <td>
                                <p class="btn btn-link btn-sm" onclick="openCity(event, 'string_intro')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">40. Strings Intro</td>
                            <td><a href="https://drive.google.com/file/d/1Mxr0fjQNLvhFch3A9cD-vctddp7eMLBJ/view?usp=sharing" target="_blank">0:41</a> </td>
                        </tr>


                        <tr>

                            <tr>

                                <td>
                                    <p class="btn btn-link btn-sm" onclick="openCity(event, 'string')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">41. Strings</td>
                                <td><a href="https://drive.google.com/file/d/1wBtvW3Bae_Uyt_gEnev5h97gp9QpvqTV/view?usp=sharing" target="_blank">0:05</a> </td>
                            </tr>


                            <tr>
                                <tr>

                                    <td>
                                        <p class="btn btn-link btn-sm" onclick="openCity(event, 'string_operations')" style="margin-left:20%;margin-bottom: 0%;" target="_blank">42. Operations on Strings</td>
                                    <td><a href="https://drive.google.com/file/d/1LyQpXCl6p4Cc5ha8i93EeyHB_r8LcPBR/view?usp=sharing" target="_blank">7:33</a> </td>
                                </tr>

                                <tr>



                    </tbody>
                </table>
            </div>
        </div>

    </div>


    <script>
        $('#defaultOpen').click(function() {
            $('#wrapper').toggle();
        });
    </script>
    <script>
        $(function() {
            var b = $("#button");
            var w = $("#wrapper");
            var l = $("#list");

            // w.height(l.outerHeight(true)); REMOVE THIS 

            b.click(function() {

                if (w.hasClass('open')) {
                    w.removeClass('open');
                    w.height(0);
                } else {
                    w.addClass('open');
                    w.height(l.outerHeight(true));
                }

            });
        });
    </script>
    <script>
        $(function() {
            var b1 = $("#button1");
            var w1 = $("#wrapper1");
            var l1 = $("#list1");

            // w.height(l.outerHeight(true)); REMOVE THIS 

            b1.click(function() {

                if (w1.hasClass('open')) {
                    w1.removeClass('open');
                    w1.height(0);
                } else {
                    w1.addClass('open');
                    w1.height(l1.outerHeight(true));
                }

            });
        });
    </script>
    <script>
        $(function() {
            var b2 = $("#button2");
            var w2 = $("#wrapper2");
            var l2 = $("#list2");

            // w.height(l.outerHeight(true)); REMOVE THIS 

            b2.click(function() {

                if (w2.hasClass('open')) {
                    w2.removeClass('open');
                    w2.height(0);
                } else {
                    w2.addClass('open');
                    w2.height(l2.outerHeight(true));
                }

            });
        });
    </script>

    <script>
        $(function() {
            var b3 = $("#button3");
            var w3 = $("#wrapper3");
            var l3 = $("#list3");

            // w.height(l.outerHeight(true)); REMOVE THIS 

            b3.click(function() {

                if (w3.hasClass('open')) {
                    w3.removeClass('open');
                    w3.height(0);
                } else {
                    w3.addClass('open');
                    w3.height(l3.outerHeight(true));
                }

            });
        });
    </script>

    <script>
        $(function() {
            var b4 = $("#button4");
            var w4 = $("#wrapper4");
            var l4 = $("#list4");

            // w.height(l.outerHeight(true)); REMOVE THIS 

            b4.click(function() {

                if (w4.hasClass('open')) {
                    w4.removeClass('open');
                    w4.height(0);
                } else {
                    w4.addClass('open');
                    w4.height(l4.outerHeight(true));
                }
                5
            });
        });
    </script>
    <script>
        $(function() {
            var b5 = $("#button5");
            var w5 = $("#wrapper5");
            var l5 = $("#list5");

            // w.height(l.outerHeight(true)); REMOVE THIS 

            b5.click(function() {

                if (w5.hasClass('open')) {
                    w5.removeClass('open');
                    w5.height(0);
                } else {
                    w5.addClass('open');
                    w5.height(l5.outerHeight(true));
                }

            });
        });
    </script>
    <script>
        $(function() {
            var b6 = $("#button6");
            var w6 = $("#wrapper6");
            var l6 = $("#list6");

            // w.height(l.outerHeight(true)); REMOVE THIS 

            b6.click(function() {

                if (w6.hasClass('open')) {
                    w6.removeClass('open');
                    w6.height(0);
                } else {
                    w6.addClass('open');
                    w6.height(l6.outerHeight(true));
                }

            });
        });
    </script>
    <script>
        $(function() {
            var b7 = $("#button7");
            var w7 = $("#wrapper7");
            var l7 = $("#list7");

            // w.height(l.outerHeight(true)); REMOVE THIS 

            b7.click(function() {

                if (w7.hasClass('open')) {
                    w7.removeClass('open');
                    w7.height(0);
                } else {
                    w7.addClass('open');
                    w7.height(l7.outerHeight(true));
                }

            });
        });
    </script>
    <script>
        $(function() {
            var b8 = $("#button8");
            var w8 = $("#wrapper8");
            var l8 = $("#list8");

            // w.height(l.outerHeight(true)); REMOVE THIS 

            b8.click(function() {

                if (w8.hasClass('open')) {
                    w8.removeClass('open');
                    w8.height(0);
                } else {
                    w8.addClass('open');
                    w8.height(l8.outerHeight(true));
                }

            });
        });
    </script>
    <script>
        $(function() {
            var b9 = $("#button9");
            var w9 = $("#wrapper9");
            var l9 = $("#list9");

            // w.height(l.outerHeight(true)); REMOVE THIS 

            b9.click(function() {

                if (w9.hasClass('open')) {
                    w9.removeClass('open');
                    w9.height(0);
                } else {
                    w9.addClass('open');
                    w9.height(l9.outerHeight(true));
                }

            });
        });
    </script>
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
    <div id="Introduction" class="tabcontent">
        <h1>Introduction</h1>
        <iframe style="width:70%;margin-left: 17%;height:40%" src="https://www.youtube.com/embed/ovoyiSoO0yA" title="Introduction to C Programming" frameborder="0" allowfullscreen></iframe>
    </div>
    <div id="intro" class="tabcontent">
        <h1>1.1</h1>
        <a href="https://drive.google.com/file/d/17tB1caQ3KGDy_AfUzpaa35u9RFjMuuqh/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="img1.jpeg" alt="a">
        </a>
    </div>

    <div id="software" class="tabcontent row-6">
        <div class="row">
            <div class="col-6">
                <h1 style="text-align: center;">Laptop users</h1>
                <a href="https://drive.google.com/file/d/14QNaUFSuNw8TJnH-StQ_oFwHfHVahL9a/view?usp=sharing" target="_blank">
                    <img src="click_PC.jpg" style="width:90%;margin: 5%;">
                </a>
            </div>

            <div class="col-6">
                <h1 style="text-align: center;">Mobile users</h1>
                <a href="https://www.youtube.com/watch?v=pAEKqF4At4E" target="_blank">
                    <img src="click_Mobile.jpg" style="width:90%;margin: 5%;">
                </a>
            </div>
        </div>
    </div>
    <div id="first_c" class="tabcontent">
        <h1>1.3</h1>
        <a href="https://drive.google.com/file/d/1UvDABrURzja6sVrIB1OidbmV56EkfPCx/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="img1.jpeg" alt="a">
        </a>
    </div>
    <div id="steps" class="tabcontent">
        <h1>1.4</h1>
        <a href="https://drive.google.com/file/d/1vTy28vX-F7WSv7TFccf8abWlELsV3H1n/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img1_4.jpeg" alt="a">
        </a>
    </div>
    <div id="Basics" class="tabcontent">
        <h1>Basics of C Programming</h1>
        <img style="width:70%;margin-left: 17%;height:40%" src="img1.jpeg" alt="a">

    </div>

    <div id="constants" class="tabcontent">
        <h1>2.1</h1>
        <a href="https://drive.google.com/file/d/1SfANb342xenJMTNKG2VKSEgvDxhSQRX-/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img2_1.jpeg" alt="a">
        </a>
    </div>
    <div id="variables" class="tabcontent">
        <h1>2.2</h1>
        <a href="https://drive.google.com/file/d/13wkYY-kRKOoPta4WKe4LfqMfB5hvwYoC/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img2_2.jpeg" alt="a">
        </a>
    </div>
    <div id="printf" class="tabcontent">
        <h1>2.3</h1>
        <a href="https://drive.google.com/file/d/1RKYMlAcb5McgN7g5g4BAyxq4Yjkzb3XT/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img2_3.jpeg" alt="a">
        </a>
    </div>
    <div id="instructions" class="tabcontent">
        <h1>2.4</h1>
        <a href="https://drive.google.com/file/d/1lmihkUpQs_0YOERZs38POmVmItfb7NG8/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img2_4.jpeg" alt="a">
        </a>
    </div>

    <div id="Operators" class="tabcontent">
        <h1>Operators</h1>
        <img style="width:70%;margin-left: 17%;height:40%" src="img1.jpeg" alt="a">
    </div>

    <div id="arithmetic_operators" class="tabcontent">
        <h1>3.1</h1>
        <a href="https://drive.google.com/file/d/1mxF8DFMmeTRKV5sGxiNeXjz6BmmXrxxr/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img3_1.jpeg" alt="a">
        </a>
    </div>

    <div id="increment_decrement" class="tabcontent">
        <h1>3.2</h1>
        <a href="https://drive.google.com/file/d/1yjAhrO-XR3_lq6e5vl_U50AOCJaLMRAY/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img3_2.jpeg" alt="a">
        </a>
    </div>

    <div id="extra_problems" class="tabcontent">
        <h1>3.3</h1>
        <a href="https://drive.google.com/file/d/1e_yXrVr_HVYRoH8vvjgJd-D0K623Zwql/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="img1.jpeg" alt="a">
        </a>
    </div>

    <div id="other_operators" class="tabcontent">
        <h1>3.4</h1>
        <a href="https://drive.google.com/file/d/1NS1NlB_tw5alRffemZtDAxSrL3s4KVZy/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img3_4.jpeg" alt="a">
        </a>
    </div>
    <div id="Conditional_Statements_01" class="tabcontent">
        <h1>Conditional Statements 1</h1>
        <img style="width:70%;margin-left: 17%;height:40%" src="img1.jpeg" alt="a">
    </div>

    <div id="intro_con" class="tabcontent">
        <h1>4.1</h1>
        <a href="https://drive.google.com/file/d/1jEp_i_8cEE7Gi9m8KpffWnkgi9i29bbY/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img4_1.jpeg" alt="a">
        </a>
    </div>

    <div id="con_examples" class="tabcontent">
        <h1>4.2</h1>
        <a href="https://drive.google.com/file/d/1FykWQF57L24JvHfrI-H8DxwDlspbjc3H/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img4_2.jpeg" alt="a">
        </a>
    </div>
    <div id="con_statements" class="tabcontent">
        <h1>4.3</h1>
        <a href="https://drive.google.com/file/d/1E8VetIDgUaO1Ba-CUnwbvO0g8mr07P03/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img4_3.jpeg" alt="Click Here">
        </a>
    </div>
    <div id="con_challenge" class="tabcontent">
        <h1>4.4</h1>
        <a href="https://drive.google.com/file/d/1cOtbt9hX6uCa2-9HXVDLeKexeBP59nGT/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img4_4.jpeg" alt="a">
        </a>
    </div>

    <div id="if_else" class="tabcontent">
        <h1>4.5</h1>
        <a href="https://drive.google.com/file/d/1cJDbt-IXjx16E5y1Dh4Dr_EwYh7N8WkH/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img4_5.jpeg" alt="a">
        </a>
    </div>

    <div id="con_challenge_02" class="tabcontent">
        <h1>4.6</h1>
        <a href="https://drive.google.com/file/d/10e4GA5Fqgsl0ppYpQ32M36TXRVWM0hYV/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img4_6.jpeg" alt="a">
        </a>
    </div>

    <div id="Conditional_Statements_02" class="tabcontent">
        <h1>Conditional Statements 2</h1>
        <img style="width:70%;margin-left: 17%;height:40%" src="img1.jpeg" alt="a">
    </div>
    <div id="nested" class="tabcontent">
        <h1>5.1</h1>
        <a href="https://drive.google.com/file/d/1h9Yk-Sh7ej70e_oeXHzNU3mPJ86Uj7v2/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img5_1.jpeg" alt="a">
        </a>

    </div>

    <div id="nes_problem" class="tabcontent">
        <h1>5.2</h1>
        <a href="https://drive.google.com/file/d/1SfrQSvdJguSlPSew6hnLVA7uh38lZ-V4/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img5_2.jpeg" alt="a">
        </a>
    </div>

    <div id="else_if" class="tabcontent">
        <h1>5.3</h1>
        <a href="https://drive.google.com/file/d/1qTLwAkjPci50gerrrMewO-LDMFvB20wL/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img5_3.jpeg" alt="a">
        </a>
    </div>

    <div id="challenge_03" class="tabcontent">
        <h1>5.4</h1>
        <a href="https://drive.google.com/file/d/1VptsNrbX7Fi7-dfP0waa7RNBRQvqO08V/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img5_4.jpeg" alt="a">
        </a>
    </div>

    <div id="con_operators" class="tabcontent">
        <h1>5.5</h1>
        <a href="https://drive.google.com/file/d/1nGrepaCCDHppAgc8FdCtIbjZ5O-BEJe-/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img5_5.jpeg" alt="a">
        </a>
    </div>
    <div id="switch_case" class="tabcontent">
        <h1>5.6</h1>
        <a href="https://drive.google.com/file/d/1gME3JK0EoQKeDBuP0FmbSL4gCeFcxlKR/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img5_6.jpeg" alt="a">
        </a>
    </div>



    <div id="iterative_01" class="tabcontent">
        <h1>Iterative Statement 1</h1>
        <img style="width:70%;margin-left: 17%;height:40%" src="img1.jpeg" alt="a">
    </div>


    <div id="iterative_intro" class="tabcontent">
        <h1>6.1</h1>
        <a href="https://drive.google.com/file/d/1PPhkLCYWtD8JaJv7JODFXSe3rwj0uLtc/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img6_1.jpeg" alt="a">
        </a>
    </div>

    <div id="while_intro" class="tabcontent">
        <h1>6.2</h1>
        <a href="https://drive.google.com/file/d/1obJGOmuBRSXPMON0V6h2DMNsGpfCVLpe/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img6_2.jpeg" alt="a">
        </a>
    </div>
    <div id="while" class="tabcontent">
        <h1>6.3</h1>
        <a href="https://drive.google.com/file/d/1gzWZg1B_bg_JoTDoF5zt_wb-PdTa4-Nd/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img6_3.jpeg" alt="a">
        </a>
    </div>
    <div id="do_while" class="tabcontent">
        <h1>6.4</h1>
        <a href="https://drive.google.com/file/d/16Wj1ACBli984anznIPaIIZwb5Vbad0WQ/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img6_4.jpeg" alt="a">
        </a>
    </div>

    <div id="do_while_program" class="tabcontent">
        <h1>6.5</h1>
        <a href="https://drive.google.com/file/d/1I0Ue-6uzY3XH8cGi0udv1NDQ6qmC35KR/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img6_5.jpeg" alt="a">
        </a>
    </div>
    <div id="iterative_02" class="tabcontent">
        <h1>Iterative Statement 2</h1>
        <img style="width:70%;margin-left: 17%;height:40%" src="img1.jpeg" alt="a">
    </div>

    <div id="for_loop" class="tabcontent">
        <h1>7.1</h1>
        <a href="https://drive.google.com/file/d/16QKFtSTVPBt82px6bVZ5UzQ9riAIWO-Y/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img7_1.jpeg" alt="a">
        </a>
    </div>

    <div id="for_loop_program" class="tabcontent">
        <h1>7.2</h1>
        <a href="https://drive.google.com/file/d/1fjLgzrhJqRqsW9iUYw8RLdOwtt_eEA80/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img7_2.jpeg" alt="a">
        </a>
    </div>

    <div id="for_loop_assignment" class="tabcontent">
        <h1>7.3</h1>
        <a href="https://drive.google.com/file/d/1nrTfTe4Mi_76UX71JTm9NvjPYUWKkavx/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img7_3.jpeg" alt="a">
        </a>
    </div>




    <div id="Jump_Statements" class="tabcontent">
        <h1>Jump Statements</h1>
        <img style="width:70%;margin-left: 17%;height:40%" src="img1.jpeg" alt="a">
    </div>

    <div id="jump_intro" class="tabcontent">
        <h1>8.1</h1>
        <a href="https://drive.google.com/file/d/1EEXpe64A85mSFDs5MUMD4g7W-IoSP1LO/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img8_1.jpeg" alt="a">
        </a>
    </div>

    <div id="jump_program" class="tabcontent">
        <h1>8.2</h1>
        <a href="https://drive.google.com/file/d/1wIvy_u7SEtHVw3BvderAdzMjDF77275X/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img8_2.jpeg" alt="a">
        </a>
    </div>

    <div id="Arrays" class="tabcontent">
        <h1>Arrays</h1>
        <img style="width:70%;margin-left: 17%;height:40%" src="img1.jpeg" alt="a">
    </div>

    <div id="array_intro" class="tabcontent">
        <h1>9.1</h1>
        <a href="https://drive.google.com/file/d/1wIvy_u7SEtHVw3BvderAdzMjDF77275X/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img9_1.jpeg" alt="a">
        </a>
    </div>

    <div id="why_array" class="tabcontent">
        <h1>9.2</h1>
        <a href="https://drive.google.com/file/d/17KCDmB0K5qoeRGMHIW5g6j4sm0oOifRW/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img9_2.jpeg" alt="a">
        </a>
    </div>

    <div id="arr" class="tabcontent">
        <h1>9.3</h1>
        <a href="https://drive.google.com/file/d/1KroXl_r3CnHbLk-XaCTNYRvPXAP09DmU/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img9_3.jpeg" alt="a">
        </a>
    </div>

    <div id="array_program" class="tabcontent">
        <h1>9.4</h1>
        <a href="https://drive.google.com/file/d/1liKlCmLz7cvaH8iOEmQkkzjvO56A7pUM/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img9_4.jpeg" alt="a">
        </a>
    </div>

    <div id="ch_array_reverse" class="tabcontent">
        <h1>9.5</h1>
        <a href="https://drive.google.com/file/d/1x1cZngMRJvy-W-dDxck98k6iUqOX3vmD/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img9_5.jpeg" alt="a">
        </a>
    </div>

    <div id="2d_array" class="tabcontent">
        <h1>9.6</h1>
        <a href="https://drive.google.com/file/d/1nGUNxXd4vgIQ2GL8CO2Rye4_gTKrLoU_/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img9_6.jpeg" alt="a">
        </a>
    </div>


    <div id="Strings" class="tabcontent">
        <h1>Strings</h1>
        <img style="width:70%;margin-left: 17%;height:40%" src="img1.jpeg" alt="a">
    </div>

    <div id="string_intro" class="tabcontent">
        <h1>10.1</h1>
        <a href="https://drive.google.com/file/d/1Mxr0fjQNLvhFch3A9cD-vctddp7eMLBJ/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img10_1.jpeg" alt="a">
        </a>
    </div>

    <div id="string" class="tabcontent">
        <h1>10.2</h1>
        <a href="https://drive.google.com/file/d/1wBtvW3Bae_Uyt_gEnev5h97gp9QpvqTV/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img10_2.jpeg" alt="a">
        </a>
    </div>

    <div id="string_operations" class="tabcontent">
        <h1>10.3</h1>
        <a href="https://drive.google.com/file/d/1wBtvW3Bae_Uyt_gEnev5h97gp9QpvqTV/view?usp=sharing" target="_blank">
            <img style="width:70%;margin-left: 17%;height:40%" src="imgn/img10_3.jpeg" alt="a">
        </a>
    </div>

    <table class="table table-striped" style="border: black 3px solid;">

    </table>
    </div>
    <footer class=" mp text-white pt-5 pb-4">

        <div class="container text-center text-md-left">

            <div class="row text-center text-md-left ">

                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-4 text-md-left pb-4">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">EasyCode</h5>

                    <p>
                        <a href="https://easycodeclasses.in" class="text-white" style="text-decoration: none;"> Home</a>
                    </p>
                    <p>
                        <a href="https://easycodeclasses.in/about_us.html" class="text-white" style="text-decoration: none;"> About Us</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;"> Register</a>
                    </p>


                </div>


                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-4 text-md-center  pb-4">


                    <a href="https://easycodeclasses.in"><img src="2.png" class="rounded-circle" alt="Cinque Terre" width="150" height="150 "></a>
                </div>



                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-4 text-md-right  pb-4">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Products</h5>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;"> Our Motive</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;"> Our Courses</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;"> Our Policy</a>
                    </p>


                </div>

                <hr class="mb-4">

                <div class="row align-items-left">

                    <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mt-6 text-md-left">
                        <p> Copyright ©2021 All rights reserved by:
                            <a href="#" style="text-decoration: none;">
                                <strong class="text-warning">EasyCode Classes</strong>
                            </a>
                        </p>

                    </div>

                    <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mt-6 text-md-right">
                        <div class="text-center text-md-right">

                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">
                                    <a href="https://www.facebook.com/easycode1121/" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i
                                            class="fab fa-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.instagram.com/easy_code_classes/?igshid=1vk9yeazcs4ax" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i
                                            class="fab fa-instagram"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://easycodeclasses.in" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-google-plus"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.linkedin.com/company/easy-code-classes" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i
                                            class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.youtube.com/channel/UCQ3y7QxCSl4tfh4hlfDh9UA" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i
                                            class="fab fa-youtube"></i></a>
                                </li>
                            </ul>

                        </div>

                    </div>

                </div>

            </div>

    </footer>
</body>

</html>