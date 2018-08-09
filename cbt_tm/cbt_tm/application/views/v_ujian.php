<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title>SMK Tunas Media | CBT Application</title>
		<meta name="robots" content="all,follow">
		<meta name="googlebot" content="index,follow,snippet,archive">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="keywords" content="">
		<link href="<?php echo base_url(); ?>___/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>___/css/Css.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>___/css/bootstrap.css" rel="stylesheet">
	<style>
  body{
    background: #e3e3e3;
}



.head{
    width:100%;
    height:91px;
    background-color:#ef5401;
}

.datang{
    width:30%;
    float:right;

}

.inputan{
	margin: 10px;
    float: right;
}

.kepala {
    background-color: #fff;
    padding-top: 7px;
	padding-bottom:11px;
	margin-left:15px;
	margin-right:15px;
	margin-top:10px;
	margin-bottom:2px;


}
.kepala:before{
    color:white;
    content:'.';
    height:40px;
}

.lembarsoal {
    background-color: #fff;
    padding-top: 7px;
	padding-bottom:11px;
	margin-left:15px;
	margin-right:15px;
	margin-top:3px;
	margin-bottom:2px;
    height:70%;

}

.main {
	margin-right:15px;
	margin-top:10px;

}



.flex-putih {
    background-color: #fff;
    width: 150px;
    margin-right: -40px;
	margin-top:-34px;
    line-height: 20px;
    color: black;
    font-size: 15px;
	font-weight:bold;
    text-align: center;
	padding-left:12px;
	padding-right:45px;
	padding-top:-20px;
	padding-bottom:10px;
	float:left;
}

.flex-abu {
    background-color: #999;
    width: 120px;
    height: 40px;
    margin-right: 100px;
	margin-top:-30px;
    line-height: 20px;
    color: white;
    font-size: 15px;
    text-align: center;
	padding-left:12px;
	padding-right:12px;
	padding-top:10px;
	padding-bottom:10px;
	float:right;
}

.flex-biru {
    background-color: #f96900;
    width: 120px;
    height: 40px;
    margin-right: 0px;
	margin-top:-32px;
    line-height: 20px;
    color: white;
    font-size: 15px;
    text-align: center;
	padding-left:12px;
	padding-right:12px;
	padding-top:10px;
	padding-bottom:10px;
	float:right;
}


.flex-biru-nomor {
    background-color: #f96900;
    width: 40px;
    height: 30px;
    margin-right: -10px;
	margin-top:-30px;
    line-height: 20px;
    color: white;
    font-size: 20px;
    text-align: center;
	padding-left:9px;
	padding-right:12px;
	padding-top:6px;
	padding-bottom:10px;
    float:left;

}

#fontlembarsoal{
	margin-top:3px;
	margin-left:15px;
	margin-bottom:0px;
	margin-right:15px;
	background-color:#f0efef;
	font-size:12px;
	font-weight:bold;
	height:45px;
	left:40px;
	padding-top:10px;
	padding-bottom:3px;
	}

#hurufsoal{
    padding-left: 30px;
	padding-top:2px;
	padding-bottom:2px;
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
			height:91px;
		color:#FFFFFF;
		font-size: 13px; font-style:normal; font-weight:normal;
}

.foto{
    height:70px;
}

.user {
		color:#FFFFFF;
		font-size: 15px; font-style:normal; font-weight:bold;
		top:-20px;

}
.log {
		color:#3799c2;
		font-size: 15px; font-style:normal; font-weight:bold;
		top:-20px;
}



.text-confirm{
    height:20%;
}

.text-welcome{
    float:right;
    margin-right:60px;
    margin-top:25px;
}

.button-login{
    float:right;
    width:72%;
    margin-right:10px;
}

.button-submit{
    float:right;
    width:30%;

}

.label-login{
    float:left;
    width:25%;
    padding: 5px;
}

.kiri{
    float:left;
    width:20%;
    height:auto;
}

.kanan{
    float:right;
    width:20%;
    height:auto;
    background:#5a1f00;
    color:white;
}

.pink{
    width:84%;
    height:30px;
    background:#ffc2b4;
    margin-left:130px;
}

.slide-out-div {
          padding: 20px;
          width: 350px;
          background: white;
          border: #c7c7c7 10px solid;
      }


      .footer-ujian {
          clear:both;
          padding:20px;
          height:7%;
          width: 100%;
          background-color: #333333;
          color: white;
          text-align: center;
        }

        .btn_soal{
          margin:5px;
          padding-right: 10px;
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
	              <td><span class="user">
                  <?php echo $this->session->userdata('admin_nama')." (".$this->session->userdata('admin_user').")"; ?>
                </span></td>
	            </tr>
              <tr>
                <td><strong><a href="<?php echo base_url(); ?>adm/logout" onclick="return confirm('Yakin ingin keluar?');">Logout</strong></a></td>
              </tr>
	        </table>
	      </div>
	      	</div>
	    </div>

          <div class="col-lg-12 col-md-12 col-sm-3">
            <li class="kepala">
                <div class="main-soal">
                <span class="flex-putih">SOAL NO. </span>
                 <span class="flex-biru-nomor" id="soalke"></span>
                    <span class="flex-biru"> <div id="h_timer">
                      <div id="clock">
                      <span class="minutes"></span>  :
                      <span class="seconds"></span>
                      </div>
                   </span>
                  <span class="flex-abu">Sisa Waktu</span>
                 </div>
                </div>
            </li>

            <!--

            <-->
          </div>
            <div class="col-lg-12 col-md-12 col-sm-3">
              <div id="fontlembarsoal" class="fontlembarsoal">
                <span id="hurufsoal"> Ukuran font soal :
                  <a id="jfontsize-m2" href="#" style="font-size:14px; text-decoration:none; color:#ef5401;">&nbsp; A &nbsp;</a>
                  <a id="jfontsize-d2" href="#" style="font-size:16px; text-decoration:none; color:#ef5401;">&nbsp; A &nbsp;</a>
                  <a id="jfontsize-p2" href="#" style="font-size:18px; text-decoration:none; color:#ef5401;">&nbsp; A &nbsp;</a></span>

                </div>
            <div id="konten-soal" class="lembarsoal" style="margin-bottom:20px; padding:20px;">
            <form role="form" name="_form" method="post" id="_form">
              <div class="soal">
                <?php echo $html; ?>
                <div class="slide-out-div">
                <a class="handle" >Content</a>
                  <div id="tampil_jawaban" class="button-soal" style="height:200px;">

                  </div>
              </div>
              </div>
              <hr>
                <div class="footer-button">
                  <a class="action back btn btn-default" rel="2" onclick="return back();" style="margin-top:-0px;"><i class="glyphicon glyphicon-chevron-left"></i> SOAL SEBELUMNYA</a>
                  <a class="action next btn btn-primary btn-ujian" rel="0" onclick="return next();" style="margin-top:1px;"> SOAL BERIKUTNYA <i class="glyphicon glyphicon-chevron-right"></i></a>
                  <a class="action submit btn btn-primary btn-ujian" onclick="return simpan_akhir();" style="margin-top:1px;"><i class="glyphicon glyphicon-stop"></i> SELESAI</a>
                  <input type="hidden" name="jml_soal" value="<?php echo $no; ?>">
                </div>
            </div>
          </div>
            </form>

<div class="footer-ujian">
	<div class="ctr">
		&copy; 2017 SMK Tunas Media | Rizky Putra Junior - XII Rekayasa Perangkat Lunak
		<a href="<?php echo base_url(); ?>adm"><?php echo $this->config->item('nama_aplikasi')." ".$this->config->item('versi'); ?></a>
	</div>
</div>


<script src="<?php echo base_url(); ?>___/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo base_url(); ?>___/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>___/plugin/countdown/jquery.plugin.min.js"></script>
<script src="<?php echo base_url(); ?>___/plugin/countdown/jquery.countdown.min.js"></script>
<script src="<?php echo base_url(); ?>___/plugin/jquery_zoom/jquery.zoom.min.js"></script>
<script src="<?php echo base_url(); ?>___/js/jquery.tabSlideOut.min.js"></script>


<script>
    $(function(){
        $('.slide-out-div').tabSlideOut({
            tabHandle: '.handle',                     //class of the element that will become your tab
            pathToTabImage: '<?php echo base_url(); ?>___/gambar/daftarsoal.gif', //path to the image for the tab //Optionally can be set using css
            imageHeight: '70px',                     //height of tab image           //Optionally can be set using css
            imageWidth: '90px',                       //width of tab image            //Optionally can be set using css
            tabLocation: 'right',                      //side of screen where tab lives, top, right, bottom, or left
            speed: 300,                               //speed of animation
            action: 'click',                          //options: 'click' or 'hover', action to trigger animation
            topPos: '20px',                          //position from the top/ use if tabLocation is left or right
            leftPos: '20px',                          //position from left/ use if tabLocation is bottom or top
            fixedPosition: false                      //options: true makes it stick(fixed position) on scroll
        });

    });

    </script>


<script type="text/javascript">
    var base_url = "<?php echo base_url(); ?>";
    id_tes = "<?php echo $id_tes; ?>";

    function getFormData($form){
        var unindexed_array = $form.serializeArray();
        var indexed_array = {};
        $.map(unindexed_array, function(n, i){
            indexed_array[n['name']] = n['value'];
        });
        return indexed_array;
    }

    $(document).on("ready", function(){
        $('.gambar').each(function(){
            var url = $(this).attr("src");
            $(this).zoom({url: url});
        });

        hitung();
    	   simpan();
        buka(1);

        widget      = $(".step");
        btnnext     = $(".next");
        btnback     = $(".back");
        btnsubmit   = $(".submit");

        $(".step").hide();
        $(".back").show();
        $(".submit").hide();
        $("#widget_1").show();
    });

    widget      = $(".step");
    total_widget = widget.length;

    hitung = function() {
        <?php
        $tgl_selesai = $jam_selesai;
        $tgl_selesai = strtotime($tgl_selesai);
        $tgl_baru = date('F j, Y H:i:s', $tgl_selesai);
        ?>

        var waktu_selesai = new Date('<?php echo $tgl_baru; ?>');

        $('div#clock').countdown(
            {
                until: waktu_selesai,
                serverSync: dari_server,
                alwaysExpire: true,
                format: 'HMS',
                compact: true,
                onExpiry: selesai
            }
        );
    }

    selesai = function() {
        alert('Mohon maaf waktu Ujian telah habis! silahkan tekan OK untuk menyelesaikan ujian.')
        var f_asal  = $("#_form");
        var form  = getFormData(f_asal);
        simpan_akhir(id_tes);
        window.location.assign("<?php echo base_url(); ?>adm/sudah_selesai_ujian/"+id_tes);

        return false;
    }

    next = function() {
        var berikutnya  = $(".next").attr('rel');
        berikutnya = parseInt(berikutnya);
        berikutnya = berikutnya > total_widget ? total_widget : berikutnya;

        $("#soalke").html(berikutnya);

        $(".next").attr('rel', (berikutnya+1));
        $(".back").attr('rel', (berikutnya-1));

        var sudah_akhir = berikutnya == total_widget ? 1 : 0;

        $(".step").hide();
        $("#widget_"+berikutnya).show();

        if (sudah_akhir == 1) {
            $(".back").show();
            $(".next").hide();
            $(".submit").show();
        } else if (sudah_akhir == 0) {
            $(".next").show();
            $(".back").show();
            $(".submit").hide();
        }

        simpan();
    }

    dari_server = function() {
        var time = null;
        $.ajax({url: base_url+'adm/get_servertime',
            async: false,
            dataType: 'text',
            success: function(text) {
                time = new Date(text);
            },
            error: function(http, message, exc) {
                time = new Date();
            }
        });
        return time;
    }



    back = function() {
        var back  = $(".back").attr('rel');
        back = parseInt(back);
        back = back < 1 ? 1 : back;

        $("#soalke").html(back);

        $(".back").attr('rel', (back-1));
        $(".next").attr('rel', (back+1));

        $(".step").hide();
        $("#widget_"+back).show();

        var sudah_awal = back == 1 ? 1 : 0;

        $(".step").hide();
        $("#widget_"+back).show();

        if (sudah_awal == 1) {
            $(".back").show();
            $(".next").show();
        } else if (sudah_awal == 0) {
            $(".next").show();
            $(".back").show();
            $(".submit").hide();
        }

        simpan();
    }

    buka = function(id_widget) {
        $(".next").attr('rel', (id_widget+1));
        $(".back").attr('rel', (id_widget-1));

        $("#soalke").html(id_widget);

        $(".next").show();
        $(".submit").hide();
        $(".step").hide();
        $("#widget_"+id_widget).show();
    }

    simpan = function() {
        var f_asal  = $("#_form");
        var form  = getFormData(f_asal);

        $.ajax({
            type: "POST",
            url: base_url+"adm/ikut_ujian/simpan_satu/"+id_tes,
            data: JSON.stringify(form),
            dataType: 'json',
            contentType: 'application/json; charset=utf-8'
        }).done(function(response) {
          	var hasil_jawaban = "";
            var panjang       = response.data.length;

            for (var i = 0; i < panjang; i++) {
                if (response.data[i] != "") {
                    hasil_jawaban += '<a class="btn btn-success btn_soal " onclick="return buka('+(i+1)+');">'+(i+1)+". "+response.data[i]+"</a>";
                } else {
                    hasil_jawaban += '<a class="btn btn-default btn_soal " onclick="return buka('+(i+1)+');">'+(i+1)+". -</a>";
                }
            }

            $("#tampil_jawaban").html(hasil_jawaban);
        });
        return false;
    }

    simpan_akhir = function() {
        if (confirm('Anda yakin ingin mengakhiri Ujian? Tekan OK untuk mengakhiri')) {
            var f_asal  = $("#_form");
            var form  = getFormData(f_asal);

            $.ajax({
                type: "POST",
                url: base_url+"adm/ikut_ujian/simpan_akhir/"+id_tes,
                data: JSON.stringify(form),
                dataType: 'json',
                contentType: 'application/json; charset=utf-8'
            }).done(function(r) {
                if(r.status == "ok") {
                    window.location.assign("<?php echo base_url(); ?>adm/sudah_selesai_ujian/"+id_tes);
                }
            });

          return false;
        }
    }



    </script>
</body>
</html>
