<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PITIMOSS</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Isi CSS -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/custom.css" rel="stylesheet">

    <!-- Custom Login CSS -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/customlogin.css" rel="stylesheet"> 

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div class="navbar navbar-default">
        <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url('');?>"><strong>PITIMOSS</strong></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo site_url('login');?>">HOME</a></li>
                <li><a href="<?php echo site_url('login/blog');?>">BLOG</a></li>
                <li><a href="<?php echo site_url('login/peta');?>">PETA LOKASI</a></li>
                <li><a href="<?php echo site_url('login/search_buku');?>">BOOK FOR SALE</a></li>
                <li><a href="<?php echo site_url('login/admin');?>">LOGIN</a></li>
            </ul>

        </div><!--/.nav-collapse -->
        </div>
    </div>
    <!-- end navbar -->
    
    <!-- line-height -->
    <br />
    <div class="container">
    <div class="row">
    <div class="col-md-12">      
    <?php
    if(!empty($pesan)) {
        echo $pesan;
    }
    ?>
    </div>
    </div>
    </div>       
    <br />


<div class="container">
<div class="row">
<div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong>Follow Us!</strong>
            </div>
            <div class="panel-body">
            <!--Facebook-->
            <button type="button" class="btn btn-primary" onclick="location.href='https://web.facebook.com/pitimoss/?ref=hl'"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</button>
            <!--Twitter-->
            <button type="button" class="btn btn-primary" onclick="location.href='https://twitter.com/pitimoss'"><i class="fa fa-twitter-square" aria-hidden="true"></i> Twitter</button>
            <!--Instagram-->
            <button type="button" class="btn btn-primary" onclick="location.href='https://www.instagram.com/pitimoss/'"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</button>
            </div>
           
        </div>
    </div>
    <div class="col-md-8 ">
        <div class="panel panel-body">
    <h2>Selamat Datang di PITIMOSS</h2><hr class="line-title"> 
        
        <p><!--[if gte mso 9]><xml>
        <w:WordDocument>
        <w:View>Normal</w:View>
        <w:Zoom>0</w:Zoom>
        <w:TrackMoves/>
        <w:TrackFormatting/>
        <w:PunctuationKerning/>
        <w:ValidateAgainstSchemas/>
        <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
        <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
        <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
        <w:DoNotPromoteQF/>
        <w:LidThemeOther>EN-US</w:LidThemeOther>
        <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
        <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
        <w:Compatibility>
        <w:BreakWrappedTables/>
        <w:SnapToGridInCell/>
        <w:WrapTextWithPunct/>
        <w:UseAsianBreakRules/>
        <w:DontGrowAutofit/>
        <w:SplitPgBreakAndParaMark/>
        <w:DontVertAlignCellWithSp/>
        <w:DontBreakConstrainedForcedTables/>
        <w:DontVertAlignInTxbx/>
        <w:Word11KerningPairs/>
        <w:CachedColBalance/>
        </w:Compatibility>
        <w:BrowserLevel>MicrosoftInternetExplorer4</w:BrowserLevel>
        <m:mathPr>
        <m:mathFont m:val="Cambria Math"/>
        <m:brkBin m:val="before"/>
        <m:brkBinSub m:val="--"/>
        <m:smallFrac m:val="off"/>
        <m:dispDef/>
        <m:lMargin m:val="0"/>
        <m:rMargin m:val="0"/>
        <m:defJc m:val="centerGroup"/>
        <m:wrapIndent m:val="1440"/>
        <m:intLim m:val="subSup"/>
        <m:naryLim m:val="undOvr"/>
        </m:mathPr></w:WordDocument>
        </xml><![endif]--></p>
        <p><!--[if gte mso 9]><xml>
        <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="true"
        DefSemiHidden="true" DefQFormat="false" DefPriority="99"
        LatentStyleCount="267">
        <w:LsdException Locked="false" Priority="0" SemiHidden="false"
        UnhideWhenUsed="false" QFormat="true" Name="Normal"/>
        <w:LsdException Locked="false" Priority="9" SemiHidden="false"
        UnhideWhenUsed="false" QFormat="true" Name="heading 1"/>
        <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 2"/>
        <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 3"/>
        <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 4"/>
        <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 5"/>
        <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 6"/>
        <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 7"/>
        <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 8"/>
        <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 9"/>
        <w:LsdException Locked="false" Priority="39" Name="toc 1"/>
        <w:LsdException Locked="false" Priority="39" Name="toc 2"/>
        <w:LsdException Locked="false" Priority="39" Name="toc 3"/>
        <w:LsdException Locked="false" Priority="39" Name="toc 4"/>
        <w:LsdException Locked="false" Priority="39" Name="toc 5"/>
        <w:LsdException Locked="false" Priority="39" Name="toc 6"/>
        <w:LsdException Locked="false" Priority="39" Name="toc 7"/>
        <w:LsdException Locked="false" Priority="39" Name="toc 8"/>
        <w:LsdException Locked="false" Priority="39" Name="toc 9"/>
        <w:LsdException Locked="false" Priority="35" QFormat="true" Name="caption"/>
        <w:LsdException Locked="false" Priority="10" SemiHidden="false"
        UnhideWhenUsed="false" QFormat="true" Name="Title"/>
        <w:LsdException Locked="false" Priority="1" Name="Default Paragraph Font"/>
        <w:LsdException Locked="false" Priority="11" SemiHidden="false"
        UnhideWhenUsed="false" QFormat="true" Name="Subtitle"/>
        <w:LsdException Locked="false" Priority="22" SemiHidden="false"
        UnhideWhenUsed="false" QFormat="true" Name="Strong"/>
        <w:LsdException Locked="false" Priority="20" SemiHidden="false"
        UnhideWhenUsed="false" QFormat="true" Name="Emphasis"/>
        <w:LsdException Locked="false" Priority="59" SemiHidden="false"
        UnhideWhenUsed="false" Name="Table Grid"/>
        <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Placeholder Text"/>
        <w:LsdException Locked="false" Priority="1" SemiHidden="false"
        UnhideWhenUsed="false" QFormat="true" Name="No Spacing"/>
        <w:LsdException Locked="false" Priority="60" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light Shading"/>
        <w:LsdException Locked="false" Priority="61" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light List"/>
        <w:LsdException Locked="false" Priority="62" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light Grid"/>
        <w:LsdException Locked="false" Priority="63" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Shading 1"/>
        <w:LsdException Locked="false" Priority="64" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Shading 2"/>
        <w:LsdException Locked="false" Priority="65" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium List 1"/>
        <w:LsdException Locked="false" Priority="66" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium List 2"/>
        <w:LsdException Locked="false" Priority="67" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 1"/>
        <w:LsdException Locked="false" Priority="68" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 2"/>
        <w:LsdException Locked="false" Priority="69" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 3"/>
        <w:LsdException Locked="false" Priority="70" SemiHidden="false"
        UnhideWhenUsed="false" Name="Dark List"/>
        <w:LsdException Locked="false" Priority="71" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful Shading"/>
        <w:LsdException Locked="false" Priority="72" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful List"/>
        <w:LsdException Locked="false" Priority="73" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful Grid"/>
        <w:LsdException Locked="false" Priority="60" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light Shading Accent 1"/>
        <w:LsdException Locked="false" Priority="61" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light List Accent 1"/>
        <w:LsdException Locked="false" Priority="62" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light Grid Accent 1"/>
        <w:LsdException Locked="false" Priority="63" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Shading 1 Accent 1"/>
        <w:LsdException Locked="false" Priority="64" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Shading 2 Accent 1"/>
        <w:LsdException Locked="false" Priority="65" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium List 1 Accent 1"/>
        <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Revision"/>
        <w:LsdException Locked="false" Priority="34" SemiHidden="false"
        UnhideWhenUsed="false" QFormat="true" Name="List Paragraph"/>
        <w:LsdException Locked="false" Priority="29" SemiHidden="false"
        UnhideWhenUsed="false" QFormat="true" Name="Quote"/>
        <w:LsdException Locked="false" Priority="30" SemiHidden="false"
        UnhideWhenUsed="false" QFormat="true" Name="Intense Quote"/>
        <w:LsdException Locked="false" Priority="66" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium List 2 Accent 1"/>
        <w:LsdException Locked="false" Priority="67" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 1 Accent 1"/>
        <w:LsdException Locked="false" Priority="68" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 2 Accent 1"/>
        <w:LsdException Locked="false" Priority="69" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 3 Accent 1"/>
        <w:LsdException Locked="false" Priority="70" SemiHidden="false"
        UnhideWhenUsed="false" Name="Dark List Accent 1"/>
        <w:LsdException Locked="false" Priority="71" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful Shading Accent 1"/>
        <w:LsdException Locked="false" Priority="72" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful List Accent 1"/>
        <w:LsdException Locked="false" Priority="73" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful Grid Accent 1"/>
        <w:LsdException Locked="false" Priority="60" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light Shading Accent 2"/>
        <w:LsdException Locked="false" Priority="61" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light List Accent 2"/>
        <w:LsdException Locked="false" Priority="62" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light Grid Accent 2"/>
        <w:LsdException Locked="false" Priority="63" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Shading 1 Accent 2"/>
        <w:LsdException Locked="false" Priority="64" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Shading 2 Accent 2"/>
        <w:LsdException Locked="false" Priority="65" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium List 1 Accent 2"/>
        <w:LsdException Locked="false" Priority="66" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium List 2 Accent 2"/>
        <w:LsdException Locked="false" Priority="67" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 1 Accent 2"/>
        <w:LsdException Locked="false" Priority="68" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 2 Accent 2"/>
        <w:LsdException Locked="false" Priority="69" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 3 Accent 2"/>
        <w:LsdException Locked="false" Priority="70" SemiHidden="false"
        UnhideWhenUsed="false" Name="Dark List Accent 2"/>
        <w:LsdException Locked="false" Priority="71" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful Shading Accent 2"/>
        <w:LsdException Locked="false" Priority="72" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful List Accent 2"/>
        <w:LsdException Locked="false" Priority="73" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful Grid Accent 2"/>
        <w:LsdException Locked="false" Priority="60" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light Shading Accent 3"/>
        <w:LsdException Locked="false" Priority="61" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light List Accent 3"/>
        <w:LsdException Locked="false" Priority="62" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light Grid Accent 3"/>
        <w:LsdException Locked="false" Priority="63" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Shading 1 Accent 3"/>
        <w:LsdException Locked="false" Priority="64" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Shading 2 Accent 3"/>
        <w:LsdException Locked="false" Priority="65" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium List 1 Accent 3"/>
        <w:LsdException Locked="false" Priority="66" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium List 2 Accent 3"/>
        <w:LsdException Locked="false" Priority="67" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 1 Accent 3"/>
        <w:LsdException Locked="false" Priority="68" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 2 Accent 3"/>
        <w:LsdException Locked="false" Priority="69" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 3 Accent 3"/>
        <w:LsdException Locked="false" Priority="70" SemiHidden="false"
        UnhideWhenUsed="false" Name="Dark List Accent 3"/>
        <w:LsdException Locked="false" Priority="71" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful Shading Accent 3"/>
        <w:LsdException Locked="false" Priority="72" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful List Accent 3"/>
        <w:LsdException Locked="false" Priority="73" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful Grid Accent 3"/>
        <w:LsdException Locked="false" Priority="60" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light Shading Accent 4"/>
        <w:LsdException Locked="false" Priority="61" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light List Accent 4"/>
        <w:LsdException Locked="false" Priority="62" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light Grid Accent 4"/>
        <w:LsdException Locked="false" Priority="63" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Shading 1 Accent 4"/>
        <w:LsdException Locked="false" Priority="64" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Shading 2 Accent 4"/>
        <w:LsdException Locked="false" Priority="65" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium List 1 Accent 4"/>
        <w:LsdException Locked="false" Priority="66" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium List 2 Accent 4"/>
        <w:LsdException Locked="false" Priority="67" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 1 Accent 4"/>
        <w:LsdException Locked="false" Priority="68" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 2 Accent 4"/>
        <w:LsdException Locked="false" Priority="69" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 3 Accent 4"/>
        <w:LsdException Locked="false" Priority="70" SemiHidden="false"
        UnhideWhenUsed="false" Name="Dark List Accent 4"/>
        <w:LsdException Locked="false" Priority="71" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful Shading Accent 4"/>
        <w:LsdException Locked="false" Priority="72" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful List Accent 4"/>
        <w:LsdException Locked="false" Priority="73" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful Grid Accent 4"/>
        <w:LsdException Locked="false" Priority="60" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light Shading Accent 5"/>
        <w:LsdException Locked="false" Priority="61" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light List Accent 5"/>
        <w:LsdException Locked="false" Priority="62" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light Grid Accent 5"/>
        <w:LsdException Locked="false" Priority="63" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Shading 1 Accent 5"/>
        <w:LsdException Locked="false" Priority="64" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Shading 2 Accent 5"/>
        <w:LsdException Locked="false" Priority="65" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium List 1 Accent 5"/>
        <w:LsdException Locked="false" Priority="66" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium List 2 Accent 5"/>
        <w:LsdException Locked="false" Priority="67" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 1 Accent 5"/>
        <w:LsdException Locked="false" Priority="68" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 2 Accent 5"/>
        <w:LsdException Locked="false" Priority="69" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 3 Accent 5"/>
        <w:LsdException Locked="false" Priority="70" SemiHidden="false"
        UnhideWhenUsed="false" Name="Dark List Accent 5"/>
        <w:LsdException Locked="false" Priority="71" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful Shading Accent 5"/>
        <w:LsdException Locked="false" Priority="72" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful List Accent 5"/>
        <w:LsdException Locked="false" Priority="73" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful Grid Accent 5"/>
        <w:LsdException Locked="false" Priority="60" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light Shading Accent 6"/>
        <w:LsdException Locked="false" Priority="61" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light List Accent 6"/>
        <w:LsdException Locked="false" Priority="62" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light Grid Accent 6"/>
        <w:LsdException Locked="false" Priority="63" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Shading 1 Accent 6"/>
        <w:LsdException Locked="false" Priority="64" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Shading 2 Accent 6"/>
        <w:LsdException Locked="false" Priority="65" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium List 1 Accent 6"/>
        <w:LsdException Locked="false" Priority="66" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium List 2 Accent 6"/>
        <w:LsdException Locked="false" Priority="67" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 1 Accent 6"/>
        <w:LsdException Locked="false" Priority="68" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 2 Accent 6"/>
        <w:LsdException Locked="false" Priority="69" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 3 Accent 6"/>
        <w:LsdException Locked="false" Priority="70" SemiHidden="false"
        UnhideWhenUsed="false" Name="Dark List Accent 6"/>
        <w:LsdException Locked="false" Priority="71" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful Shading Accent 6"/>
        <w:LsdException Locked="false" Priority="72" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful List Accent 6"/>
        <w:LsdException Locked="false" Priority="73" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful Grid Accent 6"/>
        <w:LsdException Locked="false" Priority="19" SemiHidden="false"
        UnhideWhenUsed="false" QFormat="true" Name="Subtle Emphasis"/>
        <w:LsdException Locked="false" Priority="21" SemiHidden="false"
        UnhideWhenUsed="false" QFormat="true" Name="Intense Emphasis"/>
        <w:LsdException Locked="false" Priority="31" SemiHidden="false"
        UnhideWhenUsed="false" QFormat="true" Name="Subtle Reference"/>
        <w:LsdException Locked="false" Priority="32" SemiHidden="false"
        UnhideWhenUsed="false" QFormat="true" Name="Intense Reference"/>
        <w:LsdException Locked="false" Priority="33" SemiHidden="false"
        UnhideWhenUsed="false" QFormat="true" Name="Book Title"/>
        <w:LsdException Locked="false" Priority="37" Name="Bibliography"/>
        <w:LsdException Locked="false" Priority="39" QFormat="true" Name="TOC Heading"/>
        </w:LatentStyles>
        </xml><![endif]--><!--[if gte mso 10]>
        <style>
        /* Style Definitions */
        table.MsoNormalTable
            {mso-style-name:"Table Normal";
            mso-tstyle-rowband-size:0;
            mso-tstyle-colband-size:0;
            mso-style-noshow:yes;
            mso-style-priority:99;
            mso-style-qformat:yes;
            mso-style-parent:"";
            mso-padding-alt:0in 5.4pt 0in 5.4pt;
            mso-para-margin-top:0in;
            mso-para-margin-right:0in;
            mso-para-margin-bottom:10.0pt;
            mso-para-margin-left:0in;
            line-height:115%;
            mso-pagination:widow-orphan;
            font-size:11.0pt;
            font-family:"Calibri","sans-serif";
            mso-ascii-font-family:Calibri;
            mso-ascii-theme-font:minor-latin;
            mso-fareast-font-family:"Times New Roman";
            mso-fareast-theme-font:minor-fareast;
            mso-hansi-font-family:Calibri;
            mso-hansi-theme-font:minor-latin;
            mso-bidi-font-family:"Times New Roman";
            mso-bidi-theme-font:minor-bidi;}
        </style>
        <![endif]--></p>
        <p class="MsoNormal" style="text-align: justify; text-indent: .5in;"><span style="font-family: &#39;Arial Narrow&#39;,&#39;sans-serif&#39;; mso-bidi-font-family: &#39;Arial Narrow&#39;;">Selamat menikmati berbagai fasilitas dan kenyamanan yang kami sediakan untuk Anda. Saat ini Pitimoss menyediakan berbagai bacaan seperti komik, bacaan fiksi, non-fiksi, pop science, ensiklopedi, dan majalah yang dapat Anda baca ditempat atau Anda pinjam untuk dibawa pulang dengan lama pinjam yang dapat Anda tentukan sendiri, tentunya dengan harga yang sangat murah.</span><br><!--[if gte mso 9]><xml>
        <w:WordDocument>
        <w:View>Normal</w:View>
        <w:Zoom>0</w:Zoom>
        <w:TrackMoves/>
        <w:TrackFormatting/>
        <w:PunctuationKerning/>
        <w:ValidateAgainstSchemas/>
        <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
        <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
        <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
        <w:DoNotPromoteQF/>
        <w:LidThemeOther>EN-US</w:LidThemeOther>
        <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
        <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
        <w:Compatibility>
        <w:BreakWrappedTables/>
        <w:SnapToGridInCell/>
        <w:WrapTextWithPunct/>
        <w:UseAsianBreakRules/>
        <w:DontGrowAutofit/>
        <w:SplitPgBreakAndParaMark/>
        <w:DontVertAlignCellWithSp/>
        <w:DontBreakConstrainedForcedTables/>
        <w:DontVertAlignInTxbx/>
        <w:Word11KerningPairs/>
        <w:CachedColBalance/>
        </w:Compatibility>
        <w:BrowserLevel>MicrosoftInternetExplorer4</w:BrowserLevel>
        <m:mathPr>
        <m:mathFont m:val="Cambria Math"/>
        <m:brkBin m:val="before"/>
        <m:brkBinSub m:val="--"/>
        <m:smallFrac m:val="off"/>
        <m:dispDef/>
        <m:lMargin m:val="0"/>
        <m:rMargin m:val="0"/>
        <m:defJc m:val="centerGroup"/>
        <m:wrapIndent m:val="1440"/>
        <m:intLim m:val="subSup"/>
        <m:naryLim m:val="undOvr"/>
        </m:mathPr></w:WordDocument>
        </xml><![endif]--></p>
        <p class="MsoNormal" style="text-align: justify; text-indent: .5in;"><!--[if gte mso 9]><xml>
        <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="true"
        DefSemiHidden="true" DefQFormat="false" DefPriority="99"
        LatentStyleCount="267">
        <w:LsdException Locked="false" Priority="0" SemiHidden="false"
        UnhideWhenUsed="false" QFormat="true" Name="Normal"/>
        <w:LsdException Locked="false" Priority="9" SemiHidden="false"
        UnhideWhenUsed="false" QFormat="true" Name="heading 1"/>
        <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 2"/>
        <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 3"/>
        <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 4"/>
        <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 5"/>
        <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 6"/>
        <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 7"/>
        <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 8"/>
        <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 9"/>
        <w:LsdException Locked="false" Priority="39" Name="toc 1"/>
        <w:LsdException Locked="false" Priority="39" Name="toc 2"/>
        <w:LsdException Locked="false" Priority="39" Name="toc 3"/>
        <w:LsdException Locked="false" Priority="39" Name="toc 4"/>
        <w:LsdException Locked="false" Priority="39" Name="toc 5"/>
        <w:LsdException Locked="false" Priority="39" Name="toc 6"/>
        <w:LsdException Locked="false" Priority="39" Name="toc 7"/>
        <w:LsdException Locked="false" Priority="39" Name="toc 8"/>
        <w:LsdException Locked="false" Priority="39" Name="toc 9"/>
        <w:LsdException Locked="false" Priority="35" QFormat="true" Name="caption"/>
        <w:LsdException Locked="false" Priority="10" SemiHidden="false"
        UnhideWhenUsed="false" QFormat="true" Name="Title"/>
        <w:LsdException Locked="false" Priority="1" Name="Default Paragraph Font"/>
        <w:LsdException Locked="false" Priority="11" SemiHidden="false"
        UnhideWhenUsed="false" QFormat="true" Name="Subtitle"/>
        <w:LsdException Locked="false" Priority="22" SemiHidden="false"
        UnhideWhenUsed="false" QFormat="true" Name="Strong"/>
        <w:LsdException Locked="false" Priority="20" SemiHidden="false"
        UnhideWhenUsed="false" QFormat="true" Name="Emphasis"/>
        <w:LsdException Locked="false" Priority="59" SemiHidden="false"
        UnhideWhenUsed="false" Name="Table Grid"/>
        <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Placeholder Text"/>
        <w:LsdException Locked="false" Priority="1" SemiHidden="false"
        UnhideWhenUsed="false" QFormat="true" Name="No Spacing"/>
        <w:LsdException Locked="false" Priority="60" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light Shading"/>
        <w:LsdException Locked="false" Priority="61" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light List"/>
        <w:LsdException Locked="false" Priority="62" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light Grid"/>
        <w:LsdException Locked="false" Priority="63" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Shading 1"/>
        <w:LsdException Locked="false" Priority="64" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Shading 2"/>
        <w:LsdException Locked="false" Priority="65" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium List 1"/>
        <w:LsdException Locked="false" Priority="66" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium List 2"/>
        <w:LsdException Locked="false" Priority="67" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 1"/>
        <w:LsdException Locked="false" Priority="68" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 2"/>
        <w:LsdException Locked="false" Priority="69" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 3"/>
        <w:LsdException Locked="false" Priority="70" SemiHidden="false"
        UnhideWhenUsed="false" Name="Dark List"/>
        <w:LsdException Locked="false" Priority="71" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful Shading"/>
        <w:LsdException Locked="false" Priority="72" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful List"/>
        <w:LsdException Locked="false" Priority="73" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful Grid"/>
        <w:LsdException Locked="false" Priority="60" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light Shading Accent 1"/>
        <w:LsdException Locked="false" Priority="61" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light List Accent 1"/>
        <w:LsdException Locked="false" Priority="62" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light Grid Accent 1"/>
        <w:LsdException Locked="false" Priority="63" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Shading 1 Accent 1"/>
        <w:LsdException Locked="false" Priority="64" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Shading 2 Accent 1"/>
        <w:LsdException Locked="false" Priority="65" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium List 1 Accent 1"/>
        <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Revision"/>
        <w:LsdException Locked="false" Priority="34" SemiHidden="false"
        UnhideWhenUsed="false" QFormat="true" Name="List Paragraph"/>
        <w:LsdException Locked="false" Priority="29" SemiHidden="false"
        UnhideWhenUsed="false" QFormat="true" Name="Quote"/>
        <w:LsdException Locked="false" Priority="30" SemiHidden="false"
        UnhideWhenUsed="false" QFormat="true" Name="Intense Quote"/>
        <w:LsdException Locked="false" Priority="66" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium List 2 Accent 1"/>
        <w:LsdException Locked="false" Priority="67" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 1 Accent 1"/>
        <w:LsdException Locked="false" Priority="68" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 2 Accent 1"/>
        <w:LsdException Locked="false" Priority="69" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 3 Accent 1"/>
        <w:LsdException Locked="false" Priority="70" SemiHidden="false"
        UnhideWhenUsed="false" Name="Dark List Accent 1"/>
        <w:LsdException Locked="false" Priority="71" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful Shading Accent 1"/>
        <w:LsdException Locked="false" Priority="72" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful List Accent 1"/>
        <w:LsdException Locked="false" Priority="73" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful Grid Accent 1"/>
        <w:LsdException Locked="false" Priority="60" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light Shading Accent 2"/>
        <w:LsdException Locked="false" Priority="61" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light List Accent 2"/>
        <w:LsdException Locked="false" Priority="62" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light Grid Accent 2"/>
        <w:LsdException Locked="false" Priority="63" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Shading 1 Accent 2"/>
        <w:LsdException Locked="false" Priority="64" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Shading 2 Accent 2"/>
        <w:LsdException Locked="false" Priority="65" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium List 1 Accent 2"/>
        <w:LsdException Locked="false" Priority="66" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium List 2 Accent 2"/>
        <w:LsdException Locked="false" Priority="67" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 1 Accent 2"/>
        <w:LsdException Locked="false" Priority="68" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 2 Accent 2"/>
        <w:LsdException Locked="false" Priority="69" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 3 Accent 2"/>
        <w:LsdException Locked="false" Priority="70" SemiHidden="false"
        UnhideWhenUsed="false" Name="Dark List Accent 2"/>
        <w:LsdException Locked="false" Priority="71" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful Shading Accent 2"/>
        <w:LsdException Locked="false" Priority="72" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful List Accent 2"/>
        <w:LsdException Locked="false" Priority="73" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful Grid Accent 2"/>
        <w:LsdException Locked="false" Priority="60" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light Shading Accent 3"/>
        <w:LsdException Locked="false" Priority="61" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light List Accent 3"/>
        <w:LsdException Locked="false" Priority="62" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light Grid Accent 3"/>
        <w:LsdException Locked="false" Priority="63" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Shading 1 Accent 3"/>
        <w:LsdException Locked="false" Priority="64" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Shading 2 Accent 3"/>
        <w:LsdException Locked="false" Priority="65" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium List 1 Accent 3"/>
        <w:LsdException Locked="false" Priority="66" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium List 2 Accent 3"/>
        <w:LsdException Locked="false" Priority="67" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 1 Accent 3"/>
        <w:LsdException Locked="false" Priority="68" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 2 Accent 3"/>
        <w:LsdException Locked="false" Priority="69" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 3 Accent 3"/>
        <w:LsdException Locked="false" Priority="70" SemiHidden="false"
        UnhideWhenUsed="false" Name="Dark List Accent 3"/>
        <w:LsdException Locked="false" Priority="71" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful Shading Accent 3"/>
        <w:LsdException Locked="false" Priority="72" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful List Accent 3"/>
        <w:LsdException Locked="false" Priority="73" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful Grid Accent 3"/>
        <w:LsdException Locked="false" Priority="60" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light Shading Accent 4"/>
        <w:LsdException Locked="false" Priority="61" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light List Accent 4"/>
        <w:LsdException Locked="false" Priority="62" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light Grid Accent 4"/>
        <w:LsdException Locked="false" Priority="63" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Shading 1 Accent 4"/>
        <w:LsdException Locked="false" Priority="64" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Shading 2 Accent 4"/>
        <w:LsdException Locked="false" Priority="65" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium List 1 Accent 4"/>
        <w:LsdException Locked="false" Priority="66" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium List 2 Accent 4"/>
        <w:LsdException Locked="false" Priority="67" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 1 Accent 4"/>
        <w:LsdException Locked="false" Priority="68" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 2 Accent 4"/>
        <w:LsdException Locked="false" Priority="69" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 3 Accent 4"/>
        <w:LsdException Locked="false" Priority="70" SemiHidden="false"
        UnhideWhenUsed="false" Name="Dark List Accent 4"/>
        <w:LsdException Locked="false" Priority="71" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful Shading Accent 4"/>
        <w:LsdException Locked="false" Priority="72" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful List Accent 4"/>
        <w:LsdException Locked="false" Priority="73" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful Grid Accent 4"/>
        <w:LsdException Locked="false" Priority="60" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light Shading Accent 5"/>
        <w:LsdException Locked="false" Priority="61" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light List Accent 5"/>
        <w:LsdException Locked="false" Priority="62" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light Grid Accent 5"/>
        <w:LsdException Locked="false" Priority="63" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Shading 1 Accent 5"/>
        <w:LsdException Locked="false" Priority="64" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Shading 2 Accent 5"/>
        <w:LsdException Locked="false" Priority="65" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium List 1 Accent 5"/>
        <w:LsdException Locked="false" Priority="66" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium List 2 Accent 5"/>
        <w:LsdException Locked="false" Priority="67" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 1 Accent 5"/>
        <w:LsdException Locked="false" Priority="68" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 2 Accent 5"/>
        <w:LsdException Locked="false" Priority="69" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 3 Accent 5"/>
        <w:LsdException Locked="false" Priority="70" SemiHidden="false"
        UnhideWhenUsed="false" Name="Dark List Accent 5"/>
        <w:LsdException Locked="false" Priority="71" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful Shading Accent 5"/>
        <w:LsdException Locked="false" Priority="72" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful List Accent 5"/>
        <w:LsdException Locked="false" Priority="73" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful Grid Accent 5"/>
        <w:LsdException Locked="false" Priority="60" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light Shading Accent 6"/>
        <w:LsdException Locked="false" Priority="61" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light List Accent 6"/>
        <w:LsdException Locked="false" Priority="62" SemiHidden="false"
        UnhideWhenUsed="false" Name="Light Grid Accent 6"/>
        <w:LsdException Locked="false" Priority="63" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Shading 1 Accent 6"/>
        <w:LsdException Locked="false" Priority="64" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Shading 2 Accent 6"/>
        <w:LsdException Locked="false" Priority="65" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium List 1 Accent 6"/>
        <w:LsdException Locked="false" Priority="66" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium List 2 Accent 6"/>
        <w:LsdException Locked="false" Priority="67" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 1 Accent 6"/>
        <w:LsdException Locked="false" Priority="68" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 2 Accent 6"/>
        <w:LsdException Locked="false" Priority="69" SemiHidden="false"
        UnhideWhenUsed="false" Name="Medium Grid 3 Accent 6"/>
        <w:LsdException Locked="false" Priority="70" SemiHidden="false"
        UnhideWhenUsed="false" Name="Dark List Accent 6"/>
        <w:LsdException Locked="false" Priority="71" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful Shading Accent 6"/>
        <w:LsdException Locked="false" Priority="72" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful List Accent 6"/>
        <w:LsdException Locked="false" Priority="73" SemiHidden="false"
        UnhideWhenUsed="false" Name="Colorful Grid Accent 6"/>
        <w:LsdException Locked="false" Priority="19" SemiHidden="false"
        UnhideWhenUsed="false" QFormat="true" Name="Subtle Emphasis"/>
        <w:LsdException Locked="false" Priority="21" SemiHidden="false"
        UnhideWhenUsed="false" QFormat="true" Name="Intense Emphasis"/>
        <w:LsdException Locked="false" Priority="31" SemiHidden="false"
        UnhideWhenUsed="false" QFormat="true" Name="Subtle Reference"/>
        <w:LsdException Locked="false" Priority="32" SemiHidden="false"
        UnhideWhenUsed="false" QFormat="true" Name="Intense Reference"/>
        <w:LsdException Locked="false" Priority="33" SemiHidden="false"
        UnhideWhenUsed="false" QFormat="true" Name="Book Title"/>
        <w:LsdException Locked="false" Priority="37" Name="Bibliography"/>
        <w:LsdException Locked="false" Priority="39" QFormat="true" Name="TOC Heading"/>
        </w:LatentStyles>
        </xml><![endif]--><!--[if gte mso 10]>
        <style>
        /* Style Definitions */
        table.MsoNormalTable
            {mso-style-name:"Table Normal";
            mso-tstyle-rowband-size:0;
            mso-tstyle-colband-size:0;
            mso-style-noshow:yes;
            mso-style-priority:99;
            mso-style-qformat:yes;
            mso-style-parent:"";
            mso-padding-alt:0in 5.4pt 0in 5.4pt;
            mso-para-margin-top:0in;
            mso-para-margin-right:0in;
            mso-para-margin-bottom:10.0pt;
            mso-para-margin-left:0in;
            line-height:115%;
            mso-pagination:widow-orphan;
            font-size:11.0pt;
            font-family:"Times New Roman","serif";}
        </style>
        <![endif]--></p>
        <p class="MsoNormal" style="text-align: justify;"><span style="font-family: &#39;Arial Narrow&#39;,&#39;sans-serif&#39;; mso-bidi-font-family: &#39;Arial Narrow&#39;;">Sebagai <strong>Taman Bacaan terbesar di Kota Bandung</strong>, Pitimoss selalu melakukan penambahan koleksi dari hari-kehari, baik buku lama untuk melengkapi maupun buku yang baru terbit. Berbagai penerbit buku di tanah air mendukung penuh dalam penyediaan produk mereka di Pitimoss, yang tentunya buku baru akan cepat tersedia. Untuk komik Pitimoss menyediakan 3 sampai 5 copy untuk satu judul dan 2 sampai 4 copy buku untuk novel. Setiap komik baru yang terbit, 1 sampai 2 buku akan kami sediakan khusus untuk baca ditempat selama 1 minggu (supaya semua member cepat mendapatkan giliran baca), sisanya dapat langsung dipinjam. Untuk majalah, harga sewanya selalu kami turunkan berdasarkan umur majalah tersebut, makin lama majalah tersebut, maka makin murah harga sewanya.</span></p>
        <p class="MsoNormal" style="text-align: justify;"><span style="font-family: &#39;Arial Narrow&#39;,&#39;sans-serif&#39;; mso-bidi-font-family: &#39;Arial Narrow&#39;;"><span style="mso-tab-count: 1;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Kami sangat menghargai waktu Anda dalam melakukan transaksi, berbekal komitmen <strong>pelayanan cepat dan bersahabat</strong>, pelayanan<span style="mso-tab-count: 1;">&nbsp; </span> kami pun didukung oleh sistem<span style="mso-spacerun: yes;">&nbsp; </span>komputerisasi yang canggih. Ketika memilih koleksi yang ingin Anda baca, <strong>C<em>ustomer Assistance</em></strong> kami akan selalu siap melayani Anda, index dan katalog buku dapat diakses di komputer. Setelah bertransaksi, laporan akan langsung dikirim <strong>SMS Center</strong> kami ke ponsel anda.</span></p>
        <p class="MsoBodyText"><span style="font-family: &#39;Arial Narrow&#39;,&#39;sans-serif&#39;; mso-bidi-font-family: &#39;Arial Narrow&#39;;"><span style="mso-tab-count: 1;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Walaupun kami telah menerapkan mekanisme denda untuk buku yang dikembalikan melewati tanggal jatuh tempo, tapi kami akan sangat menghargai jika Anda mengembalikannya tepat waktu. Jika Anda berhalangan pada waktu jatuh tempo, perpanjangan pinjam melalui telepon dapat dilakukan, yang tentunya biaya perpanjangan akan lebih murah dibandingkan pinjam ulang ataupun denda. Pitimoss <strong>sangat tidak merekomendasikan buku yang Anda pinjam, dipinjamkan lagi pada orang lain</strong>, karena berbagai pengalaman member kami sulit menagih pada orang ketiga yang mereka pinjamkan tersebut yang akhirnya menimbulkan masalah dikemudian hari. Begitupun sebaliknya, buku yang anda kembalikan sebelum jatuh tempo, akan kami hadiahi point reward.</span></p>
        <p class="MsoNormal" style="text-align: justify;"><span style="font-family: &#39;Arial Narrow&#39;,&#39;sans-serif&#39;; mso-bidi-font-family: &#39;Arial Narrow&#39;;"><span style="mso-tab-count: 1;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><strong>Pitimoss Poin Reward</strong>, adalah program pemberian point untuk member yang bertransaksi atau mengajak teman yang lain menjadi anggota Pitimoss. Poin yang dikumpulkan, setiap bulannya akan dikonversi menjadi voucher yang digunakan bertransaksi. Anda dapat mengumpulkan poin tersebut dari:</span></p>
        <p class="MsoNormal" style="margin-left: .25in; text-align: justify; text-indent: -.25in; mso-list: l0 level1 lfo1; tab-stops: list .25in;"><span style="mso-list: Ignore;">1.<span style="font: 7.0pt &#39;Times New Roman&#39;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-family: &#39;Arial Narrow&#39;,&#39;sans-serif&#39;; mso-bidi-font-family: &#39;Arial Narrow&#39;;">Setiap peminjaman minimal 3 buku dengan kelipatan Rp. 5.000,- Anda akan mendapatkan poin sebesar 40 poin. </span></p>
        <p class="MsoNormal" style="margin-left: .25in; text-align: justify; text-indent: -.25in; mso-list: l0 level1 lfo1; tab-stops: list .25in;"><span style="mso-list: Ignore;">2.<span style="font: 7.0pt &#39;Times New Roman&#39;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-family: &#39;Arial Narrow&#39;,&#39;sans-serif&#39;; mso-bidi-font-family: &#39;Arial Narrow&#39;;">Mengembalikan buku yang masih dalam waktu peminjaman (sebelum jatuh tempo pengembalian) - jumlah poin tergantung pada harga sewa buku dan sisa hari peminjaman</span></p>
        <p class="MsoNormal" style="margin-left: .25in; text-align: justify; text-indent: -.25in; mso-list: l0 level1 lfo1; tab-stops: list .25in;"><span style="mso-list: Ignore;">3.<span style="font: 7.0pt &#39;Times New Roman&#39;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-family: &#39;Arial Narrow&#39;,&#39;sans-serif&#39;; mso-bidi-font-family: &#39;Arial Narrow&#39;;">Mengajak teman Anda menjadi member Pitimoss, Anda mendapatkan 100 poin.</span></p>
        <p class="MsoNormal" style="margin-left: .25in; text-align: justify; text-indent: -.25in; mso-list: l0 level1 lfo1; tab-stops: list .25in;"><span style="mso-list: Ignore;">4.<span style="font: 7.0pt &#39;Times New Roman&#39;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-family: &#39;Arial Narrow&#39;,&#39;sans-serif&#39;; mso-bidi-font-family: &#39;Arial Narrow&#39;;">Setiap teman Anda tadi (yang Anda sponsori) meminjam atau baca minimal Rp. 3.000,- dan kelipatannya Anda mendapatkan 20 poin</span></p>
        <p class="MsoNormal" style="margin-left: .25in; text-align: justify; text-indent: -.25in; mso-list: l0 level1 lfo1; tab-stops: list .25in;"><span style="mso-list: Ignore;">5.<span style="font: 7.0pt &#39;Times New Roman&#39;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-family: &#39;Arial Narrow&#39;,&#39;sans-serif&#39;; mso-bidi-font-family: &#39;Arial Narrow&#39;;">10 poin dari setiap transaksi orang yang diajak oleh teman yang Anda sponsori dengan ketentuan transaksi yang sama (dengan point 4)</span></p>
        <p class="MsoNormal" style="text-align: justify;"><span style="font-family: &#39;Arial Narrow&#39;,&#39;sans-serif&#39;; mso-bidi-font-family: &#39;Arial Narrow&#39;;"><span style="mso-tab-count: 1;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Setiap hari minggu dan libur nasional Anda dapat <strong>membaca gratis</strong> seluruh koleksi kami tanpa batas selama jam operasional Pitimoss (9.00 – 20.00 WIB). Pitimoss juga memberikan diskon khusus setiap pembelian buku yang kami sediakan. Saran dan kritik Anda kami tunggu di email: <span style="text-decoration: underline;"><script type="text/javascript">
        <!--
        var prefix = '&#109;a' + 'i&#108;' + '&#116;o';
        var path = 'hr' + 'ef' + '=';
        var addy46968 = 'p&#105;t&#105;m&#111;ss' + '&#64;';
        addy46968 = addy46968 + 'y&#97;h&#111;&#111;' + '&#46;' + 'c&#111;m';
        document.write('<a ' + path + '\'' + prefix + ':' + addy46968 + '\'>');
        document.write(addy46968);
        document.write('<\/a>');

        <!--
        document.write('<span style=\'display: none;\'>');
        //-->
        </script><span style="display: none;">This email address is being protected from spambots. You need JavaScript enabled to view it.
        <script type="text/javascript">
        <!--
        document.write('</');
        document.write('span>');
        //-->
        </script></span></span>. Semoga visii Pitimoss <strong>“Menjadikan Membaca Sebagai Kebiasaan Yang Meyenangkan dan Murah”</strong> akan terwujud. </span></p>
        <p class="MsoNormal" style="text-align: justify;"><span style="font-family: &#39;Arial Narrow&#39;,&#39;sans-serif&#39;; mso-bidi-font-family: &#39;Arial Narrow&#39;;"><span style="mso-tab-count: 1;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Untuk mendapatkan update informasi seputar Pitimoss, Anda dapat bergabung pada Facebook Pages: “pitimoss funlibrary” atau twitter: @pitimoss.</span></p>
        <address class="MsoNormal" style="text-align: justify; text-indent: .5in;"><span style="font-family: &#39;Arial Narrow&#39;,&#39;sans-serif&#39;; mso-bidi-font-family: &#39;Arial Narrow&#39;;">&nbsp;</span><strong><span style="font-family: &#39;Arial Narrow&#39;,&#39;sans-serif&#39;; mso-bidi-font-family: &#39;Arial Narrow&#39;;">PITIMOSS Fun Library</span></strong></address>
        <h3 class="MsoNormal" style="text-align: justify; text-indent: .5in;"><span style="font-size: 12.0pt; font-family: &#39;Arial Narrow&#39;,&#39;sans-serif&#39;; mso-fareast-font-family: &#39;Times New Roman&#39;; mso-bidi-font-family: &#39;Arial Narrow&#39;; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;">Jl Banda 12-S Bandung Tel/Fax. 022-4208072</span></h3> <div style="clear:both;"></div><div class="socbuttons" style="padding-top: 10px; overflow: hidden; float: left;"><div style="margin-left: 10px; width: 75px; height :20px; float: left;"><iframe src="./Selamat Datang di PITIMOSS_files/like.html" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width: 75px; height :20px;" allowtransparency="true"></iframe></div><div style="width: 100px; float: left; margin-left: 10px; margin-right:0px;"><iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button" style="position: static; visibility: visible; width: 1px; height: 1px;" title="Twitter Tweet Button" src="./Selamat Datang di PITIMOSS_files/tweet_button.d942dbac55d395b6a752976f272a24f6.en.html" data-url="http://pitimoss.com/"></iframe><script src="./Selamat Datang di PITIMOSS_files/widgets.js.download" type="text/javascript"></script></div><div style="clear:both;"></div><style>.soc_no a{color:#d6d6d6; font-size:8px;} .soc_yes a{color:#d6d6d6; font-size:8px;display:none;}</style><div class="soc_yes"><a href="http://stroibukva.ru/soc/socbuttons-v15.htm" title="SocButtons v1.5" target="_blank">SocButtons v1.5</a></div></div><div style="clear:both;"></div>
        </div>
    </div>
</div>
</div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>template/backend/sbadmin/dist/js/sb-admin-2.js"></script>

</body>

</html>
