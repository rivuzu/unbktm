<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>SMK Tunas Media | CBT Application</title>
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="">
    <link href="<?php echo base_url(); ?>___/css/styles.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>___/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>___/plugin/fa/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>___/plugin/datatables/dataTables.bootstrap.css" rel="stylesheet">

    <style>
        body {
            background: #e3e3e3;
        }

        .head {
            width: 100%;
            height: 91px;
            background-color: #ef5401;
        }

        .datang {
            width: 30%;
            float: right;
        }

        .inputan {
            margin: 10px;
            float: right;
        }

        .kepala {
            background-color: #fff;
            padding-top: 7px;
            padding-bottom: 11px;
            margin-left: 15px;
            margin-right: 15px;
            margin-top: 10px;
            margin-bottom: 2px;
        }

        .lembarsoal {
            background-color: #fff;
            padding-top: 7px;
            padding-bottom: 11px;
            margin-left: 15px;
            margin-right: 15px;
            margin-top: 3px;
            margin-bottom: 2px;
            height: 70%;
        }

        .main {
            margin-right: 15px;
            margin-top: 10px;
        }

        .flex-putih {
            background-color: #fff;
            width: 120px;
            height: 40px;
            margin-right: 0px;
            margin-top: -32px;
            line-height: 20px;
            color: black;
            font-size: 15px;
            font-weight: bold;
            text-align: center;
            padding-left: 12px;
            padding-right: 12px;
            padding-top: 10px;
            padding-bottom: 10px;
            float: left;
        }

        .flex-abu {
            background-color: #999;
            width: 120px;
            height: 40px;
            margin-right: 0px;
            margin-top: -32px;
            line-height: 20px;
            color: white;
            font-size: 15px;
            text-align: center;
            padding-left: 12px;
            padding-right: 12px;
            padding-top: 10px;
            padding-bottom: 10px;
            float: right;
        }

        #fontlembarsoal {
            margin-top: 3px;
            margin-left: 15px;
            margin-bottom: 0px;
            margin-right: 15px;
            background-color: #f0efef;
            font-size: 12px;
            font-weight: bold;
            height: 45px;
            left: 40px;
            padding-top: 10px;
            padding-bottom: 3px;
        }

        #hurufsoal {
            padding-left: 30px;
            padding-top: 2px;
            padding-bottom: 2px;
        }

        .box {
            background: #fff;
            margin: 0 0 30px;
            border: solid 1px #e6e6e6;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 20px;
            -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
        }

        .right {
            float: right;
            width: 30%;
            background-color: #5a1f00;
            height: 91px;
            color: #FFFFFF;
            font-size: 13px;
            font-style: normal;
            font-weight: normal;
        }

        .foto {
            height: 70px;
        }

        .user {
            color: #FFFFFF;
            font-size: 15px;
            font-style: normal;
            font-weight: bold;
            top: -20px;
        }

        .log {
            color: #3799c2;
            font-size: 15px;
            font-style: normal;
            font-weight: bold;
            top: -20px;
        }

        .inputan {}

        .text-confirm {
            height: 20%;
        }

        .text-welcome {
            float: right;
            margin-right: 60px;
            margin-top: 25px;
        }

        .button-login {
            float: right;
            width: 72%;
            margin-right: 10px;
        }

        .button-submit {
            float: right;
            width: 30%;
        }

        .label-login {
            float: left;
            width: 25%;
            padding: 5px;
        }

        .kiri {
            float: left;
            width: 20%;
            height: auto;
        }

        .kanan {
            float: right;
            width: 20%;
            height: auto;
            background: #5a1f00;
            color: white;
        }

        .pink {
            width: 84%;
            height: 30px;
            background: #ffc2b4;
            margin-left: 130px;
        }

        .footer {
            clear:both;
            padding: 20px;
            height: 8%;
            width: 100%;
            background-color: #424242;
            color: white;
            text-align: center;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 30;
        }
    </style>
</head>

<body>
    <div class="head">
        <div class="group">
            <div class="kiri">
                <img src="<?php echo base_url(); ?>___/gambar/logotmweb.png">
            </div>
            <div class="right">
                <table width="100%" border="0" style="margin-top:10px">
                    <tr>
                      <td rowspan="3" width="90px" align="center"><img src="<?php echo base_url(); ?>___/gambar/dummy.png" style=" margin-left:5px; " class="foto"></td>
                    </tr>
                      <tr>
                        <td>
                          <span class="user">
                            <?php echo $this->session->userdata('admin_nama')." (".$this->session->userdata('admin_user').")"; ?>
                          </span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <strong>
                            <a href="<?php echo base_url(); ?>adm/logout" onclick="return confirm('Yakin ingin keluar?');">Logout
                          </strong></a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- WORK IN PROGRESS
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Dashboard - <?php echo $this->config->item('nama_aplikasi')." ".$this->config->item('versi'); ?></title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <link href="<?php echo base_url(); ?>___/css/bootstrap.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>___/css/style.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>___/plugin/fa/css/font-awesome.min.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>___/plugin/datatables/dataTables.bootstrap.css" rel="stylesheet">
   </head>
   <body>

   <div class="" style="min-height: 450px">
      <nav class="navbar navbar-findcond navbar-fixed-top">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand">SMK Tunas Media</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
               <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $this->session->userdata('admin_nama')." (".$this->session->userdata('admin_user').")"; ?> <span class="caret"></span></a>
                     <ul class="dropdown-menu" role="menu">
                        <li><a href="#" onclick="return rubah_password();">Ubah Password</a></li>
                        <li><a href="<?php echo base_url(); ?>adm/logout" onclick="return confirm('keluar..?');">Logout</a></li>
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
-->

    <?php gen_menu(); ?>
        <?php echo $this->load->view($p); ?>

            <div class="col-md-12 footer">
                &copy; 2017 SMK Tunas Media | Rizky Putra Junior - XII Rekayasa Perangkat Lunak
                <a href="<?php echo base_url(); ?>adm"><?php echo $this->config->item('nama_aplikasi')." ".$this->config->item('versi'); ?></a>
            </div>

            <!-- insert modal -->
            <div id="tampilkan_modal"></div>

            <script src="<?php echo base_url(); ?>___/js/jquery-1.11.3.min.js"></script>
            <script src="<?php echo base_url(); ?>___/js/bootstrap.js"></script>

            <?php
if ($this->uri->segment(2) == "m_soal" && $this->uri->segment(3) == "edit") {
?>
                <script src="<?php echo base_url(); ?>___/plugin/ckeditor/ckeditor.js"></script>
                <?php
}
?>
                    <!-- editor
<script src="<?php echo base_url(); ?>___/plugin/editor/nicEdit.js"></script>
 -->

                    <script src="<?php echo base_url(); ?>___/plugin/datatables/jquery.dataTables.min.js"></script>
                    <script src="<?php echo base_url(); ?>___/plugin/datatables/dataTables.bootstrap.min.js"></script>

                    <script src="<?php echo base_url(); ?>___/plugin/countdown/jquery.plugin.min.js"></script>
                    <script src="<?php echo base_url(); ?>___/plugin/countdown/jquery.countdown.min.js"></script>
                    <script src="<?php echo base_url(); ?>___/plugin/jquery_zoom/jquery.zoom.min.js"></script>

                    <script type="text/javascript">
                        var base_url = "<?php echo base_url(); ?>";
                        var editor_style = "<?php echo $this->config->item('editor_style'); ?>";
                        var uri_js = "<?php echo $this->config->item('uri_js'); ?>";
                    </script>
                    <script src="<?php echo base_url(); ?>___/js/aplikasi.js"></script>

</body>

</html>
