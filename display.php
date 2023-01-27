<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            text-transform: uppercase;
        }

        nav {
            padding: 16px;
            background: linear-gradient(90deg, rgba(84, 30, 171, 1) 0%, rgba(81, 78, 171, 1) 35%, rgba(117, 30, 171, 1) 100%);
            background-size: 236%;
            animation: anime 5s infinite ease-in-out;
        }

        @keyframes anime {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        a {
            text-decoration: none;
        }

        button {
            padding: 8px 14px;
            border: none;
            background-color: #dadada;
            border-radius: 6px;
            width: 100%;
        }

        button:hover {
            cursor: pointer;
            background-color: #acadac;
        }

        ul {
            color: aliceblue;
            display: flex;
            justify-content: space-between;
            align-items: center;
            list-style: none;
        }

        table {
            width: 100%;
            /* border-top: 2px solid #acadac; */
            /* border-bottom: 2px solid #acadac; */
            background-color: aliceblue;
            /* border-radius: 4px; */
        }

        thead {
            background-color: #ccc;
        }

        th,
        td {
            display: grid;
            padding: 12px;
            justify-content: center;
            align-items: center;
            word-break: break-word;
        }

        td.td-md.td-sm.operation-btn {
            display: grid;
            width: 100%;
            justify-content: space-between;
            grid-template-columns: 80px 80px;
        }

        tr {
            border-bottom: 1px double #acadac;
            display: grid;
            word-break: break-word;
            grid-template-columns: 100px 106px 120px 120px 142px 161px 132px 175px 110px 110px 170px;
        }

        tr:hover {
            /* color: #ccc; */
            /* cursor: grab; */
            /* background: linear-gradient(90deg, rgba(84, 30, 171, 1) 0%, rgba(81, 78, 171, 1) 35%, rgba(117, 30, 171, 1) 100%); */
        }

        tr:nth-child(even) {
            /* background-color: #ccc; */
        }

        caption {
            font-size: 34px;
            padding: 25px
        }

        main {
            display: flex;
            justify-content: center;
        }

        @media screen and (max-width:1107px) {
            .button-xl {
                display: block;
                margin: 4px;
                width: 100%;
            }
        }

        @media screen and (max-width:901px) {

            .th-md,
            .td-md {
                padding: 14px;
            }

        }

        @media screen and (max-width:757px) {

            .td-sm,
            .th-sm {
                padding: 4px;
            }

            .button-sm {
                width: 90%;
            }
        }

        @media screen and (max-width:1440px) {
            .tr-laptop-l {
                grid-template-columns: 60px 130px 139px 115px 120px 160px 107px 182px 96px 95px 170px;
                /* grid-template-columns: repeat(auto-fill, minmax(100px, 1fr)); */
            }
        }

        @media screen and (max-width:1406) {
            .tr-laptop-l-go {
                grid-template-columns: 89px 125px 120px 157px 88px 88px 136px 174px 83px 83px 162px;
            }
        }

        @media screen and (max-width:1207px) {
            .tr-laptop-l-go-2 {
                grid-template-columns: 89px 125px 120px 157px 88px 88px 136px 174px 83px 83px 162px;
            }
        }

        @media screen and (max-width:1137px) {
            .tr-laptop {
                grid-template-columns: 89px 125px 120px 157px 88px 88px 136px 174px 83px 83px 162px;
            }
        }

        @media screen and (max-width:1160px) {
            .tr-laptop-go {
                grid-template-columns: 89px 125px 120px 157px 88px 88px 136px 174px 83px 83px 162px;
            }
        }

        /* @media screen and (max-width:1106px) {
            .tr-laptop-go {
                grid-template-columns: 135px 135px 135px 135px 135px 135px 135px;
            }
        } */

        /* @media screen and (max-width:1106px) { 
             134px 134px 134px 134px 134px 134px 134px 
        } */


        /*  modal fo delete button css  */
        /* #modal-overlay {
            display: none;
            z-index: 10000;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            overflow: auto;
            position: absolute;
            background: rgba(0, 0, 0, 0.7);
        }

        #modal-overlay #modal {
            max-width: 650px;
            width: 100%;
            background: white;
            height: auto;
            border-radius: 10px;

            display: flex;
            flex-direction: column;
            padding: 10px;
        }

        .modal-headerC {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px #cfcfcf solid;
            padding: 8px;
        }

        .cross-modal {
            color: black;
            text-decoration: none;
            margin-right: 16px;
        }

        .cross-modal:hover {
            color: red;
        }

        #modal-overlay #modal .modal-footerC {
            margin-top: auto;
            border-top: 1px #cfcfcf solid;
            padding: 8px;
        } */

        /*  modal fo delete button css  */
    </style>

    <script>
        // document.addEventListener("DOMContentLoaded", () => {
        //     //Contact click Modal
        //     const openModalButton = document.querySelector("#open-modal");
        //     const modalWindowOverlay = document.querySelector("#modal-overlay");
        //     const crossModal = document.querySelector(".cross-modal");

        //     //showModal
        //     const showModalWindow = () => {

        //         modalWindowOverlay.style.display = "flex";
        //         modalWindowOverlay.style.position = "fixed";
        //     };
        //     openModalButton.addEventListener("click", showModalWindow);

        //     // hideModal
        //     const hideModalWindow = () => {
        //         modalWindowOverlay.style.display = "none";
        //     };
        //     crossModal.addEventListener("click", hideModalWindow);

        //     // Hide On Overlay
        //     const hideModalWindowOnBlur = (event) => {
        //         if (event.target === event.currentTarget) {
        //             console.log(event.target === event.currentTarget);
        //             hideModalWindow();
        //         }
        //     };
        //     modalWindowOverlay.addEventListener("click", hideModalWindowOnBlur);
        // });
    </script>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li>HOME</li>
                <li><a href="form-after.php"><button>ADD</button></a></li>
            </ul>
        </nav>
    </header>
    <main>
        <table>
            <caption>FORM DATA</caption>
            <thead>
                <tr class="tr-laptop-l tr-laptop-l-go tr-laptop-l-go-2 tr-laptop tr-laptop-go">
                    <th class="th-md th-sm">SR NO.</th>
                    <th class="th-md th-sm">Profile Photo</th>
                    <th class="th-md th-sm">FIRST NAME</th>
                    <th class="th-md th-sm">LAST NAME</th>
                    <th class="th-md th-sm">PHONE NUMBER</th>
                    <th class="th-md th-sm">MAIL</th>
                    <th class="th-md th-sm">FIELD</th>
                    <th class="th-md th-sm">DATE AND TIME</th>
                    <th class="th-md th-sm">Gender</th>
                    <th class="th-md th-sm">Skills</th>
                    <th class="th-md th-sm">OPERATIONS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("connect-after.php");
                $query = "SELECT * FROM interns";
                $run = mysqli_query($conn, $query);
                $sr = 1;
                while ($data = mysqli_fetch_assoc($run)) {
                    ?>
                    <tr class="tr-laptop-l tr-laptop-l-go tr-laptop-l-go-2 tr-laptop tr-laptop-go">
                        <td class="td-md td-sm">
                            <?php echo $sr; ?>
                        </td>
                        <td class="td-md">
                            <img style="border-radius:50px" height="50" width="50"
                                src="<?php echo $data['upload_files']; ?>" />
                        </td>
                        <td class="td-md td-sm">
                            <?php echo $data['first_name']; ?>
                        </td>
                        <td class="td-md td-sm">
                            <?php echo $data['last_name']; ?>
                        </td>
                        <td class="td-md td-sm">
                            <?php echo $data['phone_no']; ?>
                        </td>
                        <td class="td-md td-sm">
                            <?php echo $data['mail']; ?>
                        </td>
                        <td class="td-md">
                            <?php echo $data['field']; ?>
                        </td>
                        <td class="td-md">
                            <?php echo $data['date_time']; ?>
                        </td>
                        <td class="td-md">
                            <?php echo $data['gender'] ?>
                        </td>
                        <td class="td-md">
                            <?php echo $data['skills'] ?>
                        </td>

                        <td class="td-md td-sm operation-btn">
                            <a href="update-after.php?updateId=<?php echo $data['id'] ?>"><button
                                    class="button-xl button-sm">EDIT</button></a>

                            <a href="delete-after.php?deleteId=<?php echo $data['id'] ?>"><button id="open-modal"
                                    class="button-xl button-sm">DELETE</button></a>
                        </td>
                    </tr>
                    <?php
                    $sr++;
                }
                ?>
            </tbody>
        </table>
    </main>
    <footer>
        <!-- modal fo delete button -->
        <!-- <div id="modal-overlay">
            <div id="modal">
                <div class="modal-headerC">
                    <h2 class="">Contact Us</h2>
                    <a href="#" class="cross-modal fs-4">X</a>
                </div>

                <div class="modal-contentC">
                    <form action="#" method="#">
                        <input id="firstName" class="col-12 form-control my-3" name="firstName" type="text"
                            placeholder="Enter Your First Name" />
                        <input id="lastName" class="col-12 form-control mb-3 " name="lastName" type="text"
                            placeholder="Enter Your Last Name" />
                        <input type="email" class="col-12 form-control mb-3" id="emailAddress"
                            placeholder="Enter Your E-mail" />
                        <textarea class="col-12 form-control mb-3" id="exampleFormControlTextarea1"
                            placeholder="Enter your Queries/feedback" rows="4"></textarea>
                    </form>
                </div>
                 modal fo delete button over-->
        <!-- </div>
        </div>  -->
    </footer>
</body>

</html>