<?php 


include("session_control/seguridad.php");
include("functions/traductor.php");

$frase_inicial = lang("Guarda esta web en formato .mhtml y abrela en Word para editar el report!!");
echo "<script>alert('$frase_inicial')</script>";

$uri = $_SERVER["REQUEST_URI"];
$uriArray = explode('=', $uri);

$id_url = $uriArray[1];


include("connection.php");
$sentencia = "select * from reports where id=".$id_url;
$consulta = mysqli_query($connection, $sentencia) or die("Error de Consulta");

//vamos a recorrer la consulta y guardar los datos
while($file= mysqli_fetch_array($consulta)){

  $name_doc=$file['name_doc'];
  $audited_company_id = $file['audited_company_id'];
  $date = $file['date'];
  $state = $file['state'];
  $recommendations = $file['recommendations'];
  $conclusions = $file['conclusions'];

}

//sacamos da de la company auditada
$sentencia_company_auditada = "select * from companies where id=".$audited_company_id; 
$consulta_company_auditada = mysqli_query($connection, $sentencia_company_auditada) or die("Error de Consulta");

//vamos a recorrer la consulta y guardar los datos
while($file= mysqli_fetch_array($consulta_company_auditada)){
    $id_company_audit=$file['id'];
    $name_company_auditada=$file['name'];   
    $logo_company=$file['logo']; 
}

?>

<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <meta name=Generator content="Microsoft Word 15 (filtered)">
    <link rel="stylesheet" href="styles/styles_reports.css">
    <title> <?php echo $name_doc; ?></title>
  </head>


  <style>

      body{
          max-width: 750px;
          margin: 0 auto;
          padding: 20px;
          background-color:#444d55;
      }

      .contenedor{
          background-color:white;
          padding:70px;
      }
  </style>
  
<body lang=ES link="#0563C1" vlink="#954F72" style='word-wrap:break-word'>
<div class="contenedor">
  <div class=WordSection1>
    
    <p class=MsoBodyText >
      <center><img src="assets/images/report/top-banner.jpg"></center>
    </p>
          
          <p style="margin-left:-3.0cm;text-align:center;font-size:25px;">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <?php echo lang("Penetration Test Report for");?> 
                
                <br>
                <center>
                  <span style="font-family:'Verdana',sans-serif; font-size: 20px;">
                    <b><?php echo $name_company_auditada; ?></b>
                  </span>
                </center>
                <br>
                <hr>
                <br>
                <span style="font-family:'Verdana',sans-serif;"><?php echo lang("Date");?>: <?php echo $date ?></span><br>
                <span style="font-family:'Verdana',sans-serif;"><?php echo lang("Document name");?>: <?php echo $name_doc ?></span>
                <br><br><br><br>
          </p>

    <p class=MsoBodyText align=center style='margin-top:0cm;margin-right:23.05pt; margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:center'>
      <img width=200 height=200 id=image1.jpeg src="<?php echo $logo_company?>" style="border-radius:100px;">
      <img width=100 height=100 id=image1.jpeg src="assets/images/report/logo_portada2.png" style="margin-left:-75px;">
      <br><br><br>
    </p>
    <center>
    <?php $anioActual = date("Y"); ?>

    <span style="font-family:'Verdana',sans-serif; font-size: 12px;">
      Copyright &copy; <?php echo $anioActual; ?> blackstone9 Project. All rights reserved.
    </span>
    </center>

    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><span style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><span style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><span style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><span style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><span style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
    </div>
  <span style='font-size:12.0pt;font-family:"Times New Roman",serif'><br clear=all style='page-break-before:auto'></span>

  <!-- TITULO DEL report -->
  <div class=WordSection2>
    
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>
    
    <p class=TableParagraph style='margin-top:0cm;margin-right:23.05pt; margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'> 
    <img width=220 height=67 id=image2.jpeg src="assets/images/report/banner-mini.png">
  </p>
  </td>
  </div>

  <span style='font-size:12.0pt;font-family:"Times New Roman",serif'>
    <br clear=all style='page-break-before:always'>
  </span>


  <div style="height: 10px; background-color: #444d55; margin-left: -75px; margin-right: -75px;"></div>


  <!--SE AÑADE PUBLICIDAD DE LA HERRAMIENTA-->
  <span style='font-size:12.0pt;font-family:"Times New Roman",serif'><br clear=all style='page-break-before:auto'></span>

  <p style='margin-top:0cm;margin-right:23.05pt; margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:center'>
      <img width=200 height=200 id=image1.jpeg src="assets/images/report/logo_portada2.png" style="margin-left:-75px;">
      <br><br><br>
  </p>

  <p style='margin-top:0cm;margin-right:23.05pt; margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:center'>
      <?php echo lang("YOU CAN MAKE REPORTS ON AUDITS AND CERTIFICATION EXAMS WITH THE FREE REPORTING TOOL FOR KALI AND PARROT");?> "<b>blackstone9</b>"
      <br><br>
  </p>

  <p style='margin-top:0cm;margin-right:23.05pt; margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:center'>
      <img width=600 height=330 id=image1.jpeg src="assets/images/report/example_interface.png" style="margin-left:-75px;">
      <br><br><br>
  </p>

  <p style='margin-top:0cm;margin-right:23.05pt; margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:center'>
      <a href="https://github.com/micro-joan/blackstone9" style="color:blue;">https://github.com/micro-joan/blackstone9</a>
      <br><br>
  </p>
  
  <span style='font-size:12.0pt;font-family:"Times New Roman",serif'>
    <br clear=all style='page-break-before:always'>
  </span>


  <div class=WordSection3>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>

    <h4 style="color:<?php echo $color;?> !important;">
      <?php echo lang("LEGAL WARNING");?>
    </h4>

    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>

    <p>
        <?php echo lang("This document contains confidential and proprietary information which is for the exclusive use of ");?><?php echo $name_company_auditada?>. <?php echo lang("Unauthorized reproduction or use of this document is strictly prohibited.");?>
    </p>

    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>

    <h4 style="color:<?php echo $color;?> !important;">
        <?php echo lang("DOCUMENT CONTROL");?>
    </h4>

    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>

    <table>
      <!--name DOCUMENTO-->
      <tr style='height:35.0pt'>
        <td width=122 valign=top style='width:91.8pt;border:solid black 1.0pt;background:#191c24;padding:0cm 5.4pt 0cm 5.4pt;height:35.0pt'>
          <p class=TableParagraph style='margin-top:6.05pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
            <b>
              <span style='font-size:10.0pt;font-family:"Verdana",sans-serif;color:white'><?php echo lang("NAME");?><span style='letter-spacing:.05pt'> 
              </span><?php echo lang("DOCUMENT:");?></span>
            </b>
          </p>
        </td>
        <td width=523 valign=top style='width:392.2pt;border:solid black 1.0pt;border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:35.0pt'>
          <p class=TableParagraph style='margin-top:.25pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
            <b> <span style='font-size:9.5pt'>&nbsp;</span> </b>
          </p>
          <p class=TableParagraph style='margin-top:.05pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
            <b>
              <span style='font-size:10.0pt;font-family:"Verdana",sans-serif'><?php echo $name_doc; ?><span style='letter-spacing:-.05pt'> 
            </b>
          </p>
        </td>
      </tr>

      <!--AUTOR-->
      <tr style='height:35.0pt'>
        <td width=122 valign=top style='width:91.8pt;border:solid black 1.0pt;background:#191c24;padding:0cm 5.4pt 0cm 5.4pt;height:35.0pt'>
          <p class=TableParagraph style='margin-top:11.05pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
            <b>
              <span style='font-size:10.0pt;font-family:"Verdana",sans-serif;color:white;'><?php echo lang("AUTHOR:");?><span style='letter-spacing:-.05pt'> 
            </b>
          </p>
        </td>
        <td width=523 valign=top style='width:392.2pt;border:solid black 1.0pt;border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:35.0pt'>
          <p class=TableParagraph style='margin-top:.25pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
            <b> <span style='font-size:9.5pt'>&nbsp;</span> </b>
          </p>
          <p class=TableParagraph style='margin-top:.05pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
            <b>
              <span style='font-size:10.0pt;font-family:"Verdana",sans-serif'>blackstone9<span style='letter-spacing:-.05pt'> 
            </b>
          </p>
        </td>
      </tr>

      <!--CLIENTE-->
      <tr style='height:35.0pt'>
        <td width=122 valign=top style='width:91.8pt;border:solid black 1.0pt;background:#191c24;padding:0cm 5.4pt 0cm 5.4pt;height:35.0pt'>
          <p class=TableParagraph style='margin-top:11.05pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
            <b>
              <span style='font-size:10.0pt;font-family:"Verdana",sans-serif;color:white'><?php echo lang("CUSTOMER:");?><span style='letter-spacing:.05pt'> 
            </b>
          </p>
        </td>
        <td width=523 valign=top style='width:392.2pt;border:solid black 1.0pt;border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:35.0pt'>
          <p class=TableParagraph style='margin-top:.25pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
            <b> <span style='font-size:9.5pt'>&nbsp;</span> </b>
          </p>
          <p class=TableParagraph style='margin-top:.05pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
            <b>
              <span style='font-size:10.0pt;font-family:"Verdana",sans-serif'><?php echo $name_company_auditada; ?><span style='letter-spacing:-.05pt'> 
            </b>
          </p>
        </td>
      </tr>
    </table>

    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>

    <h4 style="color:<?php echo $color;?> !important;">
        <?php echo lang("CONFIDENTIALITY STATEMENT");?>
    </h4>

    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>

    <p>
        <?php echo lang("This report contains information regarding possible security breaches of ");?><?php echo $name_company_auditada?>
        <?php echo lang("and their systems.");?> blackstone9  <?php echo lang("recommends that special precautions be taken to");?>
        <?php echo lang(" protect the confidentiality of this document and the information contained in it.");?> 
        <?php echo lang("All other copies of the report have been delivered to ");?><?php echo $name_company_auditada?>. <?php echo lang("The security assessment");?> 
        <?php echo lang("it is an uncertain process, based on experiences, currently available information and known threats.");?>
        <?php echo lang("It must be understood that all information systems, by their nature, depend on human beings and are vulnerable in some degree.");?>
    </p>
    
    <p class=MsoBodyText style='margin-top:.4pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>&nbsp;</p>

    <p>
      <?php echo lang("This report");?>
      <?php echo lang("may recommend that");?> <?php echo $name_company_auditada?> <?php echo lang("use certain software or hardware products manufactured");?>
      <?php echo lang("or maintained by other providers. blackstone9 bases these recommendations on of your previous experience with the capabilities of these products. However, blackstone9 cannot and should not guarantee that any particular product will perform as advertised by the seller.");?>
    </p>
</div>

<span style='font-size:11.0pt;font-family:"Verdana",sans-serif'><br clear=all style='page-break-before:always'></span>

<div class=WordSection4>


<p class=MsoBodyText style='margin-top:.4pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>&nbsp;</p>

</div>

<div class=WordSection5>
  <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:10.0pt'>&nbsp;</span></b></p>
  <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b>&nbsp;</b></p>

  <h4 style="color:<?php echo $color;?> !important; text-align: center;">
    <?php echo lang("INDEX");?>
  </h4>
  
  <br><br>
  <h4 style="color:<?php echo $color;?> !important; text-align: center;">
    <?php echo lang("(GENERATE INDEX WITH WORD)");?>
  </h4>
</div>

<span style='font-size:12.0pt;font-family:"Verdana",sans-serif'><br clear=all style='page-break-before:always'></span>

<div class=WordSection6>

<p class=MsoBodyText style='margin-top:.05pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><span style='font-size:21.0pt'>&nbsp;</span></p>

  <h1 style="color:<?php echo $color; ?>" >
      1&nbsp;<?php echo lang("INTRODUCTION");?>
  </h1><br>

  <p>
    <?php echo lang("During the tests, the activities that a real attacker would carry out are simulated, discovering the vulnerabilities, their level of risk, and generating recommendations that allow the client to carry out the remediation of these. Each section of this report details important aspects of how an attacker could use the vulnerability to compromise and gain unauthorized access to sensitive information. Are included In addition, guidelines that, when applied, will improve the levels of confidentiality, integrity and availability of the analyzed systems.");?>
  </p><br>

  <p class=MsoBodyText style='margin-top:.05pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><span style='font-size:21.0pt'>&nbsp;</span></p>
 
  <h2 style="color:<?php echo $color; ?>" >
      1.1&nbsp;<?php echo lang("OBJECTIVE");?>
  </h2><br>

  <p>
    <?php echo lang("The objective of the security evaluation is to detect the existing security vulnerabilities in the analyzed systems in order to subsequently generate a report with the findings and recommendations that allow their remediation.");?>
  </p>  

  <p class=MsoBodyText style='margin-top:.05pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><span style='font-size:21.0pt'>&nbsp;</span></p>

  <h2 style="color:<?php echo $color; ?>" >
    1.2&nbsp;<?php echo lang("SCOPE");?>
  </h2><br>

  <p>
    <?php echo lang("The evaluation carried out has focused on the objectives approved in the scope of the contract, which establishes:");?>
  </p> <br>


<table>
  <tr style='height:23.9pt'>
    <td width=70 nowrap style='width:52.75pt;border:solid windowtext 1.0pt; background:#191c24;padding:0cm 3.5pt 0cm 3.5pt;height:23.9pt'>
      <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b>
        <span style='font-family:"Calibri",sans-serif;color:white'>No.</span></b></p>
    </td>
    <td width=380 nowrap style='width:284.7pt;border:solid windowtext 1.0pt;border-left:none;background:#191c24;padding:0cm 3.5pt 0cm 3.5pt;height:23.9pt'>
      <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b>
        <span style='font-family:"Calibri",sans-serif;color:white'><?php echo lang("Objectives");?></span></b></p>
    </td>
  </tr>

  <?php 
  
        $cantidad_objetivos_report = "select * from scope where id_report=".$id_url;  
        $consulta_objetivos_report = mysqli_query($connection, $cantidad_objetivos_report) or die("Error de conexión");
        
        $contador_scope = 1;

        while($file_scope = mysqli_fetch_array($consulta_objetivos_report)){
            $id_scope=$file_scope['id'];
            $url_scope=$file_scope['url'];

            echo"
            
            <tr style='height:23.9pt'>
              <td width=70 nowrap style='width:52.75pt;border:solid windowtext 1.0pt;border-top:none;padding:0cm 3.5pt 0cm 3.5pt;height:23.9pt'>
                <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
                  <span style='font-family:'Calibri',sans-serif;color:black'>$contador_scope</span>
                </p>
              </td>
              <td width=380 nowrap style='width:284.7pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:23.9pt'>
                <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
                  <span style='font-family:'Calibri',sans-serif;color:black'>$url_scope</span>
                </p>
              </td>
            </tr>
            ";

            $contador_scope ++;
        }
  
  ?>

</table>

</div>

<span style='font-size:11.0pt;font-family:"Verdana",sans-serif'><br clear=all style='page-break-before:always'></span>

<div class=WordSection9>
  <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><span style='font-size:10.0pt'>&nbsp;</span></p>
  
  <h1 style="color:<?php echo $color; ?>" >
    2&nbsp;<?php echo lang("EXECUTIVE SUMMARY");?>
  </h1><br>

  <!--DESARROLLO DE GRAFICO EJECUTIVO--->
  <?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

      $cantidad_criticas = 0;
      $cantidad_altas = 0;
      $cantidad_medias = 0;
      $cantidad_bajas = 0;
      $total_vulnerabilities = 0;

      $cantidad_objetivos_report = "select * from scope where id_report=".$id_url;  
      $consulta_objetivos_report = mysqli_query($connection, $cantidad_objetivos_report) or die("Error de conexión");
      
      
      while($file_scope = mysqli_fetch_array($consulta_objetivos_report)){

          $id_scope=$file_scope['id'];
          $name_scope=$file_scope['url'];

          $cantidad_vulns_scope = "select * from scope_vulnerabilities where id_scope=".$id_scope." order by level desc";  
          $consulta_vulns_scope = mysqli_query($connection, $cantidad_vulns_scope) or die("Error de conexión");
      
          while($file_vulns_scope = mysqli_fetch_array($consulta_vulns_scope)){

            $level_scope=$file_vulns_scope['level'];
           
            if($level_scope == 0){
              $total_vulnerabilities ++;
            }

            if($level_scope == 1){
              $cantidad_bajas ++;
            }else if ($level_scope == 2){
              $cantidad_medias ++;
            }else if ($level_scope == 3){
              $cantidad_altas ++;
            }else if ($level_scope == 4){
              $cantidad_criticas ++;
            }
          }
      }

      $total_vulnerabilities = $cantidad_altas + $cantidad_bajas + $cantidad_medias + $cantidad_criticas;

      if($cantidad_altas > 0 || $cantidad_criticas > 0 || $cantidad_medias > 0 || $cantidad_bajas > 0){

        $porcentaje_criticas = $cantidad_criticas * 100 / $total_vulnerabilities;
        $porcentaje_altas = $cantidad_altas * 100 / $total_vulnerabilities;
        $porcentaje_medias = $cantidad_medias * 100 / $total_vulnerabilities;
        $porcentaje_bajas = $cantidad_bajas * 100 / $total_vulnerabilities;

        $porcentaje_criticas = round($porcentaje_criticas, 1);
        $porcentaje_altas = round($porcentaje_altas, 1);
        $porcentaje_medias = round($porcentaje_medias, 1);
        $porcentaje_bajas = round($porcentaje_bajas, 1);

      }else{
        $porcentaje_criticas = 0;
        $porcentaje_altas = 0;
        $porcentaje_medias = 0;
        $porcentaje_bajas = 0;
      }
      
    ?>

  <span style='font-size:11.0pt;font-family:"Verdana",sans-serif'>
    <?php echo lang("You have to capture a screenshot of this graphic to insert it into Word.");?>
  </span>
  <br><br>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>td{border: 1px black solid} th{border: 1px black solid; background-color:black; color:white;}</style>
  <center><canvas id="grafico" width="400" height="300"></canvas></center>
  <br>
  <table id="tabla" style='font-size:11.0pt;font-family:"Verdana",sans-serif;'>
    <tr>
      <th><center><?php echo lang("Vulnerability");?></center></th>
      <th><center><?php echo lang("Amount");?></center></th>
      <th><center><?php echo lang("Percentage");?></center></th>
    </tr>
    <tr>
      <td><center><?php echo lang("Very High");?></center></td>
      <td id="cantidad-criticas"><center><?php echo $cantidad_criticas;?></center></td>
      <td id="porcentaje-criticas"><center><?php echo $porcentaje_criticas;?>%</center></td>
    </tr>
    <tr>
      <td><center><?php echo lang("High");?></center></td>
      <td id="cantidad-altas"><center><?php echo $cantidad_altas;?></center></td>
      <td id="porcentaje-altas"><center><?php echo $porcentaje_altas;?>%</center></td>
    </tr>
    <tr>
      <td><center><?php echo lang("Medium");?></center></td>
      <td id="cantidad-medias"><center><?php echo $cantidad_medias;?></center></td>
      <td id="porcentaje-medias"><center><?php echo $porcentaje_medias;?>%</center></td>
    </tr>
    <tr>
      <td><center><?php echo lang("Low");?></center></td>
      <td id="cantidad-bajas"><center><?php echo $cantidad_bajas;?></center></td>
      <td id="porcentaje-bajas"><center><?php echo $porcentaje_bajas;?></center></td>
    </tr>
  </table>

<script>
  const datos = {
    labels: ['<?php echo lang("Very High");?>', '<?php echo lang("High");?>', '<?php echo lang("Medium");?>', '<?php echo lang("Low");?>'],
    datasets: [{
      data: [<?php echo $cantidad_criticas;?>, <?php echo $cantidad_altas;?>, <?php echo $cantidad_medias;?>, <?php echo $cantidad_bajas;?>], // Reemplaza estos valores con tus datos reales
      backgroundColor: ['#ff1e16', '#ff8018', '#faef22', '#00a933']
    }]
  };

  const ctx = document.getElementById('grafico').getContext('2d');
  const myChart = new Chart(ctx, {
    type: 'doughnut',
    data: datos,
    options: {
      responsive: false,
      maintainAspectRatio: false
    }
  });

  // Función para calcular y mostrar porcentajes en la tabla
  function mostrarPorcentajes() {
    const cantidadTotal = datos.datasets[0].data.reduce((acc, val) => acc + val, 0);
    datos.labels.forEach((label, index) => {
      const cantidad = datos.datasets[0].data[index];
      const porcentaje = ((cantidad / cantidadTotal) * 100).toFixed(2) + '%';
      document.getElementById(`cantidad-${label.toLowerCase()}`).innerText = cantidad;
      document.getElementById(`porcentaje-${label.toLowerCase()}`).innerText = porcentaje;
    });
  }

  // Mostrar porcentajes al cargar la página
  mostrarPorcentajes();
</script>


<!--###############################################-->

<span style='font-size:12.0pt;font-family:"Times New Roman",serif'><br clear=all style='page-break-before:always'></span>

<div class=WordSection10>

  <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><span style='font-size:10.0pt'>&nbsp;</span></p>

  <h1 style="color:<?php echo $color; ?>" >
    3&nbsp;<?php echo lang("TEST RESULTS");?>
  </h2><br>

  <h2 style="color:<?php echo $color; ?>" >
    3.1&nbsp;<?php echo lang("Objectives details");?>
  </h2><br>

<?php 

      $cantidad_objetivos_report = "select * from scope where id_report=".$id_url;  
      $consulta_objetivos_report = mysqli_query($connection, $cantidad_objetivos_report) or die("Error de conexión");
      
      while($file_scope = mysqli_fetch_array($consulta_objetivos_report)){
          $id_scope=$file_scope['id'];
          $name_scope=$file_scope['url'];

          echo "<h3><u>$name_scope</u></h3><br>";

          $cantidad_vulns_scope = "select * from scope_vulnerabilities where id_scope=".$id_scope." order by level desc";  
          $consulta_vulns_scope = mysqli_query($connection, $cantidad_vulns_scope) or die("Error de conexión");
      
          while($file_vulns_scope = mysqli_fetch_array($consulta_vulns_scope)){

            $desc_name  = lang("Name");
            $criticidad_level  = lang("Criticality");
            $desc_description = lang("Description");
            $desc_recommendation  = lang("Recommendation");

            $id_scope=$file_vulns_scope['id'];
            $level_scope0=$file_vulns_scope['level'];
            $level_scope=$file_vulns_scope['level'];
            $name_scope=$file_vulns_scope['name'];
            $description_scope=$file_vulns_scope['description'];
            $recommendation_scope=$file_vulns_scope['solution'];

            if($level_scope == 1){
              $level_scope = '<label>'.lang('Low').'</label>';
            }else if ($level_scope == 2){
              $level_scope = '<label>'.lang('Medium').'</label>';
            }else if ($level_scope == 3){
              $level_scope = '<label>'.lang('High').'</label>';
            }else if ($level_scope == 4){
              $level_scope = '<label>'.lang('Very High').'</label>';
            }

            echo 
            "<br>
            <p style='text-align:justify !important;'>
              <b>$desc_name:</b> ".$name_scope."<br>
            </p>";

            echo
            "<p style='text-align:justify !important; '>
              <b>$criticidad_level:</b> ".$level_scope."<br>
            </p><br>";

            echo 
            "<p style='text-align:justify !important; '>
              <b>$desc_description</b><br><br>".$description_scope."
            </p><br><br>";
            
            $cantidad_vulns_imagen = "select * from pocs where id_scope_vulnerability=".$id_scope;  
            $consulta_vulns_imagen = mysqli_query($connection, $cantidad_vulns_imagen) or die("Error de conexión");
      
            while($file_vulns_imagen = mysqli_fetch_array($consulta_vulns_imagen)){
              $scope_imagen=$file_vulns_imagen['conclusion'];
              $description_imagen=$file_vulns_imagen['description'];
            
              if($scope_imagen > ''){
                  echo "<center><img src='$scope_imagen' width=436 height=300 ><br></center>";
                  echo "<br><p>$description_imagen</p><br>";
              }
            }

            echo
            "<br><p style='text-align:justify !important;'>
              <b>$desc_recommendation:</b> ".$recommendation_scope."<br><br>
            </p>";

            echo "<hr>";
          }
      }
  
?>

  <span style='font-size:12.0pt;font-family:"Times New Roman",serif'><br clear=all style='page-break-before:always'></span>

  <!--recommendations-->
  <h1 style="color:<?php echo $color; ?>" >
    4&nbsp;<?php echo lang("Criticality table");?>
  </h1><br>
  
<?php 

      $cantidad_objetivos_report = "select * from scope where id_report=".$id_url;  
      $consulta_objetivos_report = mysqli_query($connection, $cantidad_objetivos_report) or die("Error de conexión");
      
      while($file_scope = mysqli_fetch_array($consulta_objetivos_report)){
          $id_scope=$file_scope['id'];
          $name_scope=$file_scope['url'];

          echo "<br><h3>$name_scope</h3><br>";

          echo"
          
          <table>
            <tr style='height:14.8pt'>

              <!--CABECERAS-->
                <td width=175 nowrap valign=bottom style='width:300.1pt;border:solid windowtext 1.0pt; background:#191c24;padding:0cm 3.5pt 0cm 3.5pt;height:14.8pt;color:white;'>
                  <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:3.5pt;margin-bottom:.0001pt;'>
                    <b>
                      <span style='font-family:'Calibri',sans-serif;color:white'>$desc_name</span>
                    </b>
                  </p>
                </td>
                <td width=165 nowrap valign=bottom style='width:7.55pt;border:solid windowtext 1.0pt;border-left:none;background:#191c24;padding:0cm 3.5pt 0cm 3.5pt;height:14.8pt;color:white;'>
                  <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:center'>
                    <b>
                      <span style='font-family:'Calibri',sans-serif;color:white'>$criticidad_level</span>
                    </b>
                  </p>
                </td>
              </tr>
          ";

          $cantidad_vulns_scope = "select * from scope_vulnerabilities where id_scope=".$id_scope." order by level desc";  
          $consulta_vulns_scope = mysqli_query($connection, $cantidad_vulns_scope) or die("Error de conexión");
      
          while($file_vulns_scope = mysqli_fetch_array($consulta_vulns_scope)){

            $desc_name  = lang("Name");
            $criticidad_level  = lang("Criticality");
            $desc_description = lang("Description");
            $desc_recommendation  = lang("Recommendation");

            $id_scope=$file_vulns_scope['id'];
            $level_scope0=$file_vulns_scope['level'];
            $level_scope=$file_vulns_scope['level'];
            $name_scope=$file_vulns_scope['name'];
            $description_scope=$file_vulns_scope['description'];
            $recommendation_scope=$file_vulns_scope['solution'];

            if($level_scope == 1){
              $level_scope = '<label>'.lang('Low').'</label>';
            }else if ($level_scope == 2){
              $level_scope = '<label>'.lang('Medium').'</label>';
            }else if ($level_scope == 3){
              $level_scope = '<label>'.lang('High').'</label>';
            }else if ($level_scope == 4){
              $level_scope = '<label>'.lang('Very High').'</label>';
            }

            echo "
            
            <tr>
              <td width=175 nowrap style='width:300.1pt;border:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:14.8pt'>
                <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-bottom:.0001pt;margin-left:3.5pt;'>
                  <span style='font-size:10.0pt;font-family:'Calibri',sans-serif;color:black'>$name_scope</span>
                </p>
              </td>
              
              <td width=165 nowrap style='width:70.55pt;border:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:14.8pt'>
                <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-bottom:.0001pt;margin-left:3.5pt;'>
                  <span style='font-size:10.0pt;font-family:'Calibri',sans-serif;color:black'><center>$level_scope</center></span>
                </p>
              </td>
            </tr>
            ";
          }
          echo "</table>";
      }
  
?>



<span style='font-size:11.0pt;font-family:"Verdana",sans-serif'><br clear=all style='page-break-before:always'></span>

  <!--conclusions-->
  <h1 style="color:<?php echo $color; ?>" >
    5&nbsp;<?php echo lang("Conclusions");?>
  </h1><br>
  <p>
      <?php echo $conclusions; ?>
  </p>

<p class=Cabeceraypie>&nbsp;</p>

</div>

</body>

</html>
