<!-- This is the header section -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<!-- Add SweetAlert2 CSS and JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Add jQuery and DataTables CSS and JS -->
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
<!-- Add Google Font -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<!-- JS Poppers-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>
    body {
        font-family: "Poppins", sans-serif;
        font-weight: 500;
        margin: 0;
        height: 100vh;
        display: grid;
        grid-template-columns: 14rem 1fr;
        grid-template-rows: 3.5rem 1fr auto;
        grid-template-areas: 
            "header header"
            "main main"
            "footer footer";
        transition: all 1s ease;
        padding-right: 0 !important;
    }

    .page-header {
        grid-area: header;
        background-color: rgba(247, 248, 249, 1);
        padding: .4rem 0 0;

        .menu {
            padding: .4rem 2rem;

            ul {
                border-bottom: 1px solid rgba(242, 242, 242, 1);
                list-style-type: none;
                margin: 0;
                overflow: hidden;
                padding: 0;
                text-align: right;
            }

            li {
                display: inline-block;

                a {
                    border-radius: 5px;
                    color: rgba(0, 0, 0, .5);
                    display: block;
                    height: 44px;
                    text-decoration: none;
                }

                .menu-item a {
                    border-radius: 5px;
                    margin: 5px 0;
                    height: 38px;
                    line-height: 36px;
                    padding: .4rem .65rem;
                    text-align: center;
                }

                .menu-item a:hover,
                .menu-item a:focus {
                    background-color: rgba(221, 72, 20, .2);
                    color: rgba(221, 72, 20, 1);
                }
            }

            .logo {
                float: left;
                height: 44px;
                padding: 0rem;
            }

            .menu-toggle {
                display: none;
                float: right;
                font-size: 2rem;
                font-weight: bold;
            }

            .menu-toggle button {
                background-color: rgba(221, 72, 20, .6);
                border: none;
                border-radius: 3px;
                color: rgba(255, 255, 255, 1);
                cursor: pointer;
                font: inherit;
                font-size: 1.3rem;
                height: 36px;
                padding: 0;
                margin: 11px 0;
                overflow: visible;
                width: 40px;
            }

            .menu-toggle button:hover,
            .menu-toggle button:focus {
                background-color: rgba(221, 72, 20, .8);
                color: rgba(255, 255, 255, .8);
            }
        }
    }

    .page-main {
        grid-area: main;
        background-color: #e7fff7;
        padding: 2rem;

        .main-content {
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0px 1px 10px #00000047;
            height: 100%;
            padding: 1rem;

            .content-header {
                /* border: 1px solid black; */
                display: flex;
                justify-content: space-between;
                align-items: center;
                height: 10%;
            }

            .content-body {
                /* border: 1px solid black; */
                display: flex;
                justify-content: space-between;
                align-items: center;
                height: 90%;
            }
        }
    }

    .page-footer {
        grid-area: footer;
        background-color: #17a589;
        text-align: center;

        .copyrights {
            padding: 16px;

            p {
                font-family: "Poppins", sans-serif;
                font-size: 1rem;
                color: #ffffff;
                margin: 0;
            }
        }
    }

    @media (max-width: 629px) {
        header ul {
            padding: 0;
        }

        header .menu-toggle {
            padding: 0 1rem;
        }

        header .menu-item {
            background-color: rgba(244, 245, 246, 1);
            border-top: 1px solid rgba(242, 242, 242, 1);
            margin: 0 15px;
            width: calc(100% - 30px);
        }

        header .menu-toggle {
            display: block;
        }

        header .hidden {
            display: none;
        }

        header li.menu-item a {
            background-color: rgba(221, 72, 20, .1);
        }

        header li.menu-item a:hover,
        header li.menu-item a:focus {
            background-color: rgba(221, 72, 20, .7);
            color: rgba(255, 255, 255, .8);
        }
    }

    .modal {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
    }
</style>