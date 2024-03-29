<style>
    @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";

    body {
        font-family: 'Poppins', sans-serif;
        background: #fafafa;
    }

    p {
        font-family: 'Poppins', sans-serif;
        font-size: 1.1em;
        font-weight: 300;
        line-height: 1.7em;
        color: #999;
    }

    a,
    a:hover,
    a:focus {
        color: inherit;
        text-decoration: none;
        transition: all 0.3s;
    }

    .wrapper {
        display: flex;
        width: 100%;
        align-items: stretch;
    }

    #sidebar {
        background: #2176bd;
        color: #fff;
        transition: all 0.3s;
        min-width: 250px;
        max-width: 250px;
        min-height: 100vh;
    }

    #sidebar .sidebar-header {
        padding: 20px;
    }

    #sidebar ul.components {
        padding: 20px 0;
        border-bottom: 1px solid #47748b;
    }

    #sidebar ul p {
        color: #fff;
        padding: 10px;
    }

    #sidebar ul li a {
        padding: 10px;
        font-size: 1.1em;
        display: block;
        text-align: left;
    }

    #sidebar ul li a:hover {
        color: #7386D5;
        background: #fff;
    }

    #sidebar ul li.active>a,
    a[aria-expanded="true"] {
        color: #2176bd;
        font-weight: bold;
        background: #fff;
    }

    #sidebar.active {
        min-width: 80px;
        max-width: 80px;
        text-align: center;
    }

    #sidebar .sidebar-header strong {
        display: none;
    }

    #sidebar.active .sidebar-header h3 {
        display: none;
    }

    #sidebar.active .sidebar-header strong {
        display: block;
    }

    #sidebar.active ul li a {
        padding: 20px 10px;
        text-align: center;
        font-size: 0.85em;
    }

    #sidebar.active ul li a i {
        margin-right: 0;
        display: block;
        font-size: 1.8em;
        margin-bottom: 5px;
    }

    #sidebar.active ul ul a {
        padding: 10px !important;
    }

    #sidebar.active .dropdown-toggle::after {
        top: auto;
        bottom: 10px;
        right: 50%;
        -webkit-transform: translateX(50%);
        -ms-transform: translateX(50%);
        transform: translateX(50%);
    }

    @media (max-width: 768px) {
        #sidebar.active {
            min-width: 80px;
            max-width: 80px;
            text-align: center;
            margin-left: -80px !important;
        }

        #sidebar {
            margin-left: 0;
        }

        #sidebar .sidebar-header strong {
            display: none;
        }

        #sidebar.active .sidebar-header h3 {
            display: none;
        }

        #sidebar.active .sidebar-header strong {
            display: block;
        }

        #sidebar.active ul li a {
            padding: 20px 10px;
            font-size: 0.85em;
        }

        #sidebar.active ul li a i {
            margin-right: 0;
            display: block;
            font-size: 1.8em;
            margin-bottom: 5px;
        }

        #sidebar.active ul ul a {
            padding: 10px !important;
        }

        .dropdown-toggle::after {
            top: auto;
            bottom: 10px;
            right: 50%;
            -webkit-transform: translateX(50%);
            -ms-transform: translateX(50%);
            transform: translateX(50%);
        }

        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #6d7fcc;
        }

        a[data-toggle="collapse"] {
            position: relative;
        }

        .dropdown-toggle::after {
            display: block;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }
    }
    #content{
        margin-left: 0px;
        width:100%
    }
</style>