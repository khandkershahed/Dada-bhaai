@extends('frontend.astell.frontend_dashboard_astell')
@section('index_astell')
    <section>
        <div class="contact-group">
            <div class="visual">
                <h2>FAQ</h2>
                <p>Have some question? We are here to help!</p>
            </div>
            <a href="" class="btn-ty2">
                Looking for FAQ? <span>Find Here</span>
            </a>
        </div>
    </section>
    <form id="tmpForm">
        <section>
            <div class="wrap">
                <h2 class="sub-tit">FAQ</h2>
                <div class="list-dropdown">
                    <div class="list-top v1">
                        <p>
                            Total
                            <strong>27</strong>
                        </p>
                        <div class="select-group">
                            <div class="select-ty v2">
                                <input type="hidden" name="faqCategory" value="">
                                <a href="javascript:void(0)">
                                    All Category </a>
                                <ul style="width:178px">
                                    <li value="" id="categoryFaq_" class="on">All Category</li>
                                    <li value="1" id="categoryFaq_1">Product</li>
                                    <li value="4" id="categoryFaq_4">A/S</li>
                                    <li value="6" id="categoryFaq_6">Software</li>
                                    <li value="8" id="categoryFaq_8">etc</li>
                                </ul>
                            </div>
                            <div class="select-ty3 v1">
                                <input type="hidden" name="productNos" value="">
                                <a href="javascript:void(0)">
                                    All Product </a>
                                <div class="scroll-y mCustomScrollbar _mCS_2 mCS_no_scrollbar" style="width: 178px;">
                                    <div id="mCSB_2" class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_inside"
                                        tabindex="0" style="max-height: 420px;">
                                        <div id="mCSB_2_container" class="mCSB_container mCS_no_scrollbar_y"
                                            style="position:relative; top:0; left:0;" dir="ltr">
                                            <ul>
                                                <li value="" id="categoryProduct_" class="on">All Product</li>
                                                <li value="105" id="categoryProduct_105">2 Split
                                                    Carrying
                                                    Case</li>
                                                <li value="106" id="categoryProduct_106">3 Split
                                                    Carrying
                                                    Case</li>
                                                <li value="127" id="categoryProduct_127">ACRO BE100</li>
                                                <li value="130" id="categoryProduct_130">ACRO CA1000</li>
                                                <li value="141" id="categoryProduct_141">ACRO CA1000T</li>
                                                <li value="10" id="categoryProduct_10">ACRO L1000</li>
                                                <li value="11" id="categoryProduct_11">ACRO S1000</li>
                                                <li value="128" id="categoryProduct_128">Activo CT10</li>
                                                <li value="47" id="categoryProduct_47">AK
                                                    SOLARIS X</li>
                                                <li value="154" id="categoryProduct_154">AK HB1
                                                    Case</li>
                                                <li value="151" id="categoryProduct_151">AK HB1</li>
                                                <li value="132" id="categoryProduct_132">AK HC2</li>
                                                <li value="140" id="categoryProduct_140">AK HC3</li>
                                                <li value="152" id="categoryProduct_152">AK HC4</li>
                                                <li value="41" id="categoryProduct_41">AK Jr</li>
                                                <li value="120" id="categoryProduct_120">AK Jr PU Case</li>
                                                <li value="142" id="categoryProduct_142">AK PA10</li>
                                                <li value="64" id="categoryProduct_64">AK T1</li>
                                                <li value="45" id="categoryProduct_45">AK T1p</li>
                                                <li value="4" id="categoryProduct_4">AK T5p
                                                    2nd Generation</li>
                                                <li value="46" id="categoryProduct_46">AK T5P </li>
                                                <li value="53" id="categoryProduct_53">AK T8iE
                                                    Mk II</li>
                                                <li value="58" id="categoryProduct_58">AK T8iE</li>
                                                <li value="9" id="categoryProduct_9">AK T9iE</li>
                                                <li value="131" id="categoryProduct_131">AK UW100</li>
                                                <li value="149" id="categoryProduct_149">AK UW100MKII</li>
                                                <li value="15" id="categoryProduct_15">AK XB10</li>
                                                <li value="122" id="categoryProduct_122">AK ZERO1</li>
                                                <li value="144" id="categoryProduct_144">AK ZERO2</li>
                                                <li value="69" id="categoryProduct_69">AK10</li>
                                                <li value="44" id="categoryProduct_44">AK100</li>
                                                <li value="38" id="categoryProduct_38">AK100 II</li>
                                                <li value="117" id="categoryProduct_117">AK100 II Case</li>
                                                <li value="42" id="categoryProduct_42">AK120</li>
                                                <li value="121" id="categoryProduct_121">AK120 Case</li>
                                                <li value="37" id="categoryProduct_37">AK120 II</li>
                                                <li value="116" id="categoryProduct_116">AK120 II Case</li>
                                                <li value="43" id="categoryProduct_43">AK120 TITAN</li>
                                                <li value="8" id="categoryProduct_8">AK240
                                                    BLUENOTE</li>
                                                <li value="35" id="categoryProduct_35">AK240</li>
                                                <li value="115" id="categoryProduct_115">AK240 Case</li>
                                                <li value="36" id="categoryProduct_36">AK240SS</li>
                                                <li value="34" id="categoryProduct_34">AK300</li>
                                                <li value="33" id="categoryProduct_33">AK320</li>
                                                <li value="114" id="categoryProduct_114">AK320 Case</li>
                                                <li value="32" id="categoryProduct_32">AK380
                                                    Stainless
                                                    Steel
                                                    Package</li>
                                                <li value="30" id="categoryProduct_30">AK380</li>
                                                <li value="67" id="categoryProduct_67">AK380 AMP
                                                    Copper</li>
                                                <li value="68" id="categoryProduct_68">AK380 AMP</li>
                                                <li value="113" id="categoryProduct_113">AK380 Case</li>
                                                <li value="31" id="categoryProduct_31">AK380 Copper</li>
                                                <li value="12" id="categoryProduct_12">AK500 Series</li>
                                                <li value="40" id="categoryProduct_40">AK70</li>
                                                <li value="119" id="categoryProduct_119">AK70 Case</li>
                                                <li value="112" id="categoryProduct_112">AK70 MK II
                                                    PU Case</li>
                                                <li value="39" id="categoryProduct_39">AK70 MK II</li>
                                                <li value="118" id="categoryProduct_118">AK70 PU
                                                    Case</li>
                                                <li value="63" id="categoryProduct_63">AKR01</li>
                                                <li value="62" id="categoryProduct_62">AKRO2</li>
                                                <li value="61" id="categoryProduct_61">AKRO3</li>
                                                <li value="95" id="categoryProduct_95">AKS01</li>
                                                <li value="92" id="categoryProduct_92">AKS02</li>
                                                <li value="60" id="categoryProduct_60">ANGIE</li>
                                                <li value="56" id="categoryProduct_56">ANGIE II</li>
                                                <li value="147" id="categoryProduct_147">AURA</li>
                                                <li value="50" id="categoryProduct_50">Bille Jean</li>
                                                <li value="91" id="categoryProduct_91">CD RIPPER</li>
                                                <li value="16" id="categoryProduct_16">CD RIPPER MKII</li>
                                                <li value="21" id="categoryProduct_21">DAPSource</li>
                                                <li value="73" id="categoryProduct_73">DEF21</li>
                                                <li value="49" id="categoryProduct_49">Diana</li>
                                                <li value="7" id="categoryProduct_7">KANN
                                                    ALPHA</li>
                                                <li value="28" id="categoryProduct_28">KANN</li>
                                                <li value="100" id="categoryProduct_100">KANN ALPHA
                                                    Case</li>
                                                <li value="104" id="categoryProduct_104">KANN CUBE
                                                    Case</li>
                                                <li value="27" id="categoryProduct_27">KANN CUBE</li>
                                                <li value="136" id="categoryProduct_136">KANN MAX
                                                    Case</li>
                                                <li value="133" id="categoryProduct_133">KANN MAX</li>
                                                <li value="153" id="categoryProduct_153">KANN Ultra
                                                    Case</li>
                                                <li value="150" id="categoryProduct_150">KANN ULTRA</li>
                                                <li value="59" id="categoryProduct_59">LAYLA</li>
                                                <li value="48" id="categoryProduct_48">Layla AION</li>
                                                <li value="54" id="categoryProduct_54">LAYLA II</li>
                                                <li value="51" id="categoryProduct_51">Michelle
                                                    Limited</li>
                                                <li value="52" id="categoryProduct_52">Michelle</li>
                                                <li value="156" id="categoryProduct_156">NOVUS</li>
                                                <li value="137" id="categoryProduct_137">ODYSSEY</li>
                                                <li value="134" id="categoryProduct_134">PATHFINDER</li>
                                                <li value="78" id="categoryProduct_78">PEE12</li>
                                                <li value="72" id="categoryProduct_72">PEE31</li>
                                                <li value="71" id="categoryProduct_71">PEE41</li>
                                                <li value="14" id="categoryProduct_14">PEE51</li>
                                                <li value="90" id="categoryProduct_90">PEF11</li>
                                                <li value="88" id="categoryProduct_88">PEF12</li>
                                                <li value="87" id="categoryProduct_87">PEF13</li>
                                                <li value="86" id="categoryProduct_86">PEF14</li>
                                                <li value="84" id="categoryProduct_84">PEF15</li>
                                                <li value="83" id="categoryProduct_83">PEF16</li>
                                                <li value="89" id="categoryProduct_89">PEF21</li>
                                                <li value="82" id="categoryProduct_82">PEF22</li>
                                                <li value="81" id="categoryProduct_81">PEF23</li>
                                                <li value="80" id="categoryProduct_80">PEF24</li>
                                                <li value="79" id="categoryProduct_79">PEF25</li>
                                                <li value="77" id="categoryProduct_77">PEF28</li>
                                                <li value="76" id="categoryProduct_76">PEF29</li>
                                                <li value="75" id="categoryProduct_75">PEF30</li>
                                                <li value="74" id="categoryProduct_74">PEF31</li>
                                                <li value="94" id="categoryProduct_94">PEM11</li>
                                                <li value="93" id="categoryProduct_93">PEM12</li>
                                                <li value="17" id="categoryProduct_17">PEM13</li>
                                                <li value="70" id="categoryProduct_70">PEP11</li>
                                                <li value="97" id="categoryProduct_97">PRF11
                                                    - AK Stereo
                                                    MIC Kit</li>
                                                <li value="96" id="categoryProduct_96">PRF11 AK Recorder Single Kit
                                                </li>
                                                <li value="57" id="categoryProduct_57">ROSIE</li>
                                                <li value="55" id="categoryProduct_55">ROXANNE II</li>
                                                <li value="29" id="categoryProduct_29">SA700</li>
                                                <li value="103" id="categoryProduct_103">SA700 Case</li>
                                                <li value="24" id="categoryProduct_24">SE100</li>
                                                <li value="108" id="categoryProduct_108">SE100 Case</li>
                                                <li value="25" id="categoryProduct_25">SE100 M.Chat</li>
                                                <li value="2" id="categoryProduct_2">SE180</li>
                                                <li value="99" id="categoryProduct_99">SE180 Case</li>
                                                <li value="23" id="categoryProduct_23">SE200</li>
                                                <li value="101" id="categoryProduct_101">SE200 Case</li>
                                                <li value="146" id="categoryProduct_146">SE300</li>
                                                <li value="148" id="categoryProduct_148">SE300 Case</li>
                                                <li value="65" id="categoryProduct_65">SEM2</li>
                                                <li value="123" id="categoryProduct_123">SEM3</li>
                                                <li value="135" id="categoryProduct_135">SEM4</li>
                                                <li value="111" id="categoryProduct_111">SP1000
                                                    Case</li>
                                                <li value="3" id="categoryProduct_3">SP1000</li>
                                                <li value="66" id="categoryProduct_66">SP1000 AMP</li>
                                                <li value="110" id="categoryProduct_110">SP1000 Cordovan Case</li>
                                                <li value="107" id="categoryProduct_107">SP1000M
                                                    Case</li>
                                                <li value="20" id="categoryProduct_20">SP1000M
                                                    GOLD</li>
                                                <li value="19" id="categoryProduct_19">SP1000M</li>
                                                <li value="18" id="categoryProduct_18">SP2000</li>
                                                <li value="13" id="categoryProduct_13">SP2000 Case</li>
                                                <li value="22" id="categoryProduct_22">SP2000T</li>
                                                <li value="98" id="categoryProduct_98">SP2000T Case</li>
                                                <li value="139" id="categoryProduct_139">SP3000
                                                    Case</li>
                                                <li value="138" id="categoryProduct_138">SP3000</li>
                                                <li value="157" id="categoryProduct_157">SP3000T
                                                    Case</li>
                                                <li value="155" id="categoryProduct_155">SP3000T</li>
                                                <li value="26" id="categoryProduct_26">SR15</li>
                                                <li value="109" id="categoryProduct_109">SR15 PU Case</li>
                                                <li value="102" id="categoryProduct_102">SR25
                                                    PU Case</li>
                                                <li value="6" id="categoryProduct_6">SR25</li>
                                                <li value="126" id="categoryProduct_126">SR25 MKII
                                                    Case</li>
                                                <li value="85" id="categoryProduct_85">SR25 MKII</li>
                                                <li value="143" id="categoryProduct_143">SR35</li>
                                                <li value="145" id="categoryProduct_145">SR35 Case</li>
                                            </ul>
                                        </div>
                                        <div id="mCSB_2_scrollbar_vertical"
                                            class="mCSB_scrollTools mCSB_2_scrollbar mCS-dark mCSB_scrollTools_vertical">
                                            <div class="mCSB_draggerContainer">
                                                <div id="mCSB_2_dragger_vertical" class="mCSB_dragger"
                                                    style="position: absolute; min-height: 30px; display: none; top: 0px;">
                                                    <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                                    <div class="mCSB_draggerRail"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-area">
                            <div class="select-ty">
                                <input type="hidden" name="searchType" value="">
                                <a href="javascript:void(0)">
                                    All </a>
                                <ul>
                                    <li id="searchType_All" class="on">All</li>
                                    <li id="searchType_Title">Title</li>
                                    <li id="searchType_Contents">Contents</li>
                                </ul>
                            </div>
                            <div class="srch-ty">
                                <input type="text" name="searchKeyword" id="searchKeyword" value=""
                                    class="submit" placeholder="Search">
                                <a href="javascript:search()" class="btn-srch"></a>
                            </div>
                        </div>
                    </div>
                    <div class="cont">
                        <ul>
                            <li>
                                <div value="312" class="cont-top">
                                    <span class="num">27</span>
                                    <span class="t1">A/S</span>
                                    <div class="t2">
                                        [Astell&amp;Kern] Europe RMA center in Germany
                                    </div>
                                </div>
                                <div class="inner">
                                    <ul class="file-ty">
                                    </ul>
                                    <div class="edit">
                                        <div>Astell&amp;Kern official RMA center in Europe is<b>&nbsp;DM Solution</b>, which
                                            deals with enquiry&nbsp;and RMA service.</div>
                                        <div><br></div>
                                        <div>Please refer to the below information.&nbsp;</div>
                                        <div>Before enquiry, please name us exact product information such as
                                            Serial&nbsp;Number, Place of Purchase, Receipt to see the purchase date
                                            etc.&nbsp;</div>
                                        <div>The more detailed the symptom description is, the faster it can proceed.</div>
                                        <p><br>Address: &nbsp;DM Solution, Ober der Roeth 4, 65824 Schwalbach,
                                            Germany<br>Email:&nbsp;<a href="mailto:info@astellkernservice.de"
                                                target="_blank"
                                                style="color: rgb(17, 85, 204);">info@astellkernservice.de</a><br>Tel : +49
                                            (0) 6196 / 953 573 0<br>Typical working time:&nbsp;<br>Monday to Friday&nbsp;
                                            &nbsp;09:00 ~ 17:00&nbsp; Lunch time&nbsp; 12:00 ~ 13:00</p>
                                        <div><br
                                                style="color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div value="39" class="cont-top">
                                    <span class="num">26</span>
                                    <span class="t1">Product</span>
                                    <div class="t2">
                                        [Astell&amp;Kern] Support Open APP Service and APK Version
                                    </div>
                                </div>
                                <div class="inner">
                                    <ul class="file-ty">
                                    </ul>
                                    <div class="edit">
                                        <div>Open APP Service and APK file versions that can be supported by Astell&amp;Kern
                                            products.</div>
                                        <div>This might not be supported by policy changes from APP company.<br></div>
                                        <div>(Updated Feb.1th.2024)</div>
                                        <div><br></div>
                                        <div><br></div>


                                        <table
                                            style="border-collapse:collapse;border-spacing:0;table-layout: fixed; width: 100%"
                                            class="tg">
                                            <colgroup>
                                                <col style="width: 30%">
                                                <col style="width: 35%">
                                                <col style="width: 35%">
                                            </colgroup>
                                            <tbody>
                                                <tr>
                                                    <td
                                                        style="background-color:#efefef;border-color:inherit;border-style:solid;border-width:1px;color:#00009b;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        <span style="font-weight:bold">Product</span>
                                                    </td>
                                                    <td
                                                        style="background-color:#efefef;border-color:inherit;border-style:solid;border-width:1px;color:#00009b;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        <span style="font-weight:bold">Open APP</span>
                                                    </td>
                                                    <td
                                                        style="background-color:#efefef;border-color:inherit;border-style:solid;border-width:1px;color:#00009b;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        <span style="font-weight:bold">Version</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                                                        rowspan="25">SP3000</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Roon ARC</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        1.0.40</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Amazon Music</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        24.1.5</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Apple Music</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        4.6.0</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Deezer</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        8.0.4.108</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        TIDAL</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        2.98.2</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        MOOV</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        4.1.7</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        QQMusic(CN)</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        13.0.0.11</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Spotify</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        8.9.8.545</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        FLO</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        7.7.0</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Melon</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        6.7.8.1</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Bugs</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        5.04.03</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        KKBOX</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        6.13.48</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Qobuz</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        7.13.0.0</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        AWA</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        4.17.0</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Yandex Music</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        2024.01.3#29gpr</td>
                                                </tr>
                                            </tbody>
                                        </table>




                                        <table
                                            style="border-collapse:collapse;border-spacing:0;table-layout: fixed; width: 100%"
                                            class="tg">
                                            <colgroup>
                                                <col style="width: 30%">
                                                <col style="width: 35%">
                                                <col style="width: 35%">
                                            </colgroup>
                                            <tbody>
                                                <tr>
                                                    <td style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                                                        rowspan="28">KANN ULTRA</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Roon ARC</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        1.0.45</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Amazon Music</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        24.1.5</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Apple Music</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        4.6.0</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Deezer</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        8.0.4.108</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        TIDAL</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        2.98.2</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        MOOV</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        4.1.7</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        QQMusic(CN)</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        13.0.0.11</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Spotify</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        8.9.8.545</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        FLO</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        7.7.0</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Melon</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        6.7.8.1</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Bugs</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        5.04.03</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        KKBOX</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        6.13.48</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Qobuz</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        7.13.0.0</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        AWA</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        4.17.0</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Yandex Music</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        2024.01.3#29gpr</td>
                                                </tr>
                                            </tbody>
                                        </table>





                                        <table
                                            style="border-collapse:collapse;border-spacing:0;table-layout: fixed; width: 100%"
                                            class="tg">
                                            <colgroup>
                                                <col style="width: 30%">
                                                <col style="width: 35%">
                                                <col style="width: 35%">
                                            </colgroup>
                                            <tbody>
                                                <tr>
                                                    <td style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                                                        rowspan="28">SP2000, SP1000, SP1000M,<br>SE200, SE100</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Amazon Music</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        24.1.5</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Apple Music</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        4.6.0</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Deezer</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        8.0.4.108</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        TIDAL</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        2.66</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        MOOV</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        4.1.7</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        QQMusic(CN)</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        13.0.0.11</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Spotify</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        8.9.8.545</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        FLO</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        7.5.1</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Melon</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        6.5.0.1</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        KKBOX</td>
                                                    <td
                                                        style="border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        6.13.48</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Qobuz</td>
                                                    <td
                                                        style="border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        7.13.0.0</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        AWA</td>
                                                    <td
                                                        style="border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        4.17.0</td>
                                                </tr>
                                            </tbody>
                                        </table>



                                        <table
                                            style="border-collapse:collapse;border-spacing:0;table-layout: fixed; width: 100%"
                                            class="tg">
                                            <colgroup>
                                                <col style="width: 30%">
                                                <col style="width: 35%">
                                                <col style="width: 35%">
                                            </colgroup>
                                            <tbody>
                                                <tr>
                                                    <td style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                                                        rowspan="28">SP2000T, SE300, SE180,<br>SR35, SR25MII,
                                                        SR25,<br>KANN MAX, KANN Alpha,<br>CA1000T, CA1000</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Amazon Music</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        22.15.13</td>
                                                </tr>

                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Apple Music</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        4.6.0</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Deezer</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        8.0.4.108</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        TIDAL</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        2.98.2</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        MOOV</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        4.1.7</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        QQMusic(CN)</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        13.0.0.11</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Spotify</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        8.9.8.545</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        FLO</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        7.7.0</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Melon</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        6.7.8.1</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Bugs</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        5.05.03</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        KKBOX</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        6.13.48</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Qobuz</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        7.13.0.0</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        AWA</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        4.17.0</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Yandex Music</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        2024.01.3#29gpr</td>
                                                </tr>
                                            </tbody>
                                        </table>



                                        <table
                                            style="border-collapse:collapse;border-spacing:0;table-layout: fixed; width: 100%"
                                            class="tg">
                                            <colgroup>
                                                <col style="width: 30%">
                                                <col style="width: 35%">
                                                <col style="width: 35%">
                                            </colgroup>
                                            <tbody>
                                                <tr>
                                                    <td style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal"
                                                        rowspan="22">SA700, KANN CUBE, SR15<br>CT15, CT10</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Amazon Music</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        22.15.13</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Apple Music</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        3.10.2</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        QQMusic(CN)</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        12.0.5.8</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Spotify</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        8.9.8.545</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        FLO</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        6.3.0</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Melon</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        6.5.0.1</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        KKBOX</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        6.13.48</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        AWA</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        4.17.0</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        Qobuz</td>
                                                    <td
                                                        style="border-color:inherit;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal">
                                                        6.4.1.3</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div value="38" class="cont-top">
                                    <span class="num">25</span>
                                    <span class="t1">Product</span>
                                    <div class="t2">
                                        [Astell&amp;Kern] SR15 'External USB' icon recognition issue.
                                        <ul class="tag">
                                            <li>SR15</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="inner">
                                    <ul class="file-ty">
                                    </ul>
                                    <div class="edit">
                                        <p>1. When the OTG cable is connected, automatic activation of the 'External USB'
                                            icon is the specification? -&gt; Yes</p>
                                        <p><span style="color: inherit; font-size: 1rem;">- The 'External USB' icon is
                                                activated and it is normal operation.</span><br></p>
                                        <p>- Regarding of SP1000/SE100, they use same Interface, their 'External USB' icon
                                            is activated automatically too.</p>
                                        <p><span style="color: inherit; font-size: 1rem;"><br></span></p>
                                        <p><span style="color: inherit; font-size: 1rem;">2. When connecting with a AK
                                                RIPPER/MKII, SR15 cannot be charged (NEXEL) -&gt; It is
                                                specification.</span><br></p>
                                        <p><span style="color: inherit; font-size: 1rem;">- SR15(using NEXEL) officially
                                                does not support charging while connecting with AK RIPPER/MKII</span><br>
                                        </p>
                                        <p><span style="color: inherit; font-size: 1rem;"><br></span></p>
                                        <p><span style="color: inherit; font-size: 1rem;">3. Cannot disable 'External USB'
                                                -&gt; It is specification.</span><br></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div value="36" class="cont-top">
                                    <span class="num">24</span>
                                    <span class="t1">Product</span>
                                    <div class="t2">
                                        [Astell&amp;Kern] Wi-Fi Connection check points
                                    </div>
                                </div>
                                <div class="inner">
                                    <ul class="file-ty">
                                    </ul>
                                    <div class="edit">
                                        <p>Wi-Fi Connection issue check points:</p>
                                        <p><span style="color: inherit; font-size: 1rem;"><br></span></p>
                                        <p><span style="color: inherit; font-size: 1rem;">1. Make sure your router is on
                                                and in range</span><br></p>
                                        <p><span style="color: inherit; font-size: 1rem;">2. Make sure Wi-Fi is on and the
                                                network is showing</span><br></p>
                                        <p><span style="color: inherit; font-size: 1rem;">3. Check for Wi-Fi network
                                                issues, Make sure the router is connected to the modem and turned
                                                on.</span><br></p>
                                        <p><span style="color: inherit; font-size: 1rem;">4. If there is problem, Please
                                                delete the existing wireless router connection information and
                                                reconnect.</span><br></p>
                                        <p><span style="color: inherit; font-size: 1rem;">5. Restart router and device to
                                                see if the issue is resolved. Also check it with other devices or
                                                router.</span><br></p>
                                        <div><br></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div value="35" class="cont-top">
                                    <span class="num">23</span>
                                    <span class="t1">Product</span>
                                    <div class="t2">
                                        [Astell&amp;Kern] USB TYPE C version
                                    </div>
                                </div>
                                <div class="inner">
                                    <ul class="file-ty">
                                    </ul>
                                    <div class="edit">
                                        <p>USB TYPE C version.</p>
                                        <p><span style="color: inherit; font-size: 1rem;">KANN - USB 2.0</span><br></p>
                                        <p>SP1000 - USB 3.0</p>
                                        <p><span style="color: inherit; font-size: 1rem;">* KANN and SP1000 use same parts,
                                                but its performance is different because of CPU Performance.</span><br></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div value="34" class="cont-top">
                                    <span class="num">22</span>
                                    <span class="t1">Product</span>
                                    <div class="t2">
                                        When there is no sound or there is static/interference.
                                    </div>
                                </div>
                                <div class="inner">
                                    <ul class="file-ty">
                                    </ul>
                                    <div class="edit">
                                        <p>1. Check that the volume setting is above 0.</p>
                                        <p><span style="color: inherit; font-size: 1rem;">2. Check that the earphones are
                                                plugged in properly and no debris is obstructing the port
                                                connection.</span><br></p>
                                        <p><span style="color: inherit; font-size: 1rem;">3. Check if the music file is
                                                corrupted.</span><br></p>
                                        <p><span style="color: inherit; font-size: 1rem;">4. Verify that the audio settings
                                                have been properly set. (Balanced out, line out, etc.)</span><br></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div value="33" class="cont-top">
                                    <span class="num">21</span>
                                    <span class="t1">Product</span>
                                    <div class="t2">
                                        [Astell&amp;Kern] Precautions for Using microSD Card
                                    </div>
                                </div>
                                <div class="inner">
                                    <ul class="file-ty">
                                    </ul>
                                    <div class="edit">
                                        <p>[AK 1st generation model: AK100 / AK120 / AK JR]</p>
                                        <p><span style="color: inherit; font-size: 1rem;">Supported codecs: WAV, FLAC,
                                                AIFF, ALAC, (Not MP3)</span><br></p>
                                        <p><span style="color: inherit; font-size: 1rem;">Conditions: The sample rate, bit,
                                                and codec of the current playback song and the next playback song must be
                                                the same.</span><br></p>
                                        <p><br></p>
                                        <p>[AK model except for 1st generation. (Android OS)]</p>
                                        <p><span style="color: inherit; font-size: 1rem;">Supported codecs: All playback
                                                supported formats</span><br></p>
                                        <p><span style="color: inherit; font-size: 1rem;">Conditions: The sample rate, bit,
                                                and codec of the current playback song and the next playback song must be
                                                the same.</span><br></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div value="32" class="cont-top">
                                    <span class="num">20</span>
                                    <span class="t1">Product</span>
                                    <div class="t2">
                                        [Astell&amp;Kern] USB DAC function and recognition
                                        <ul class="tag">
                                            <li>AK100</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="inner">
                                    <ul class="file-ty">
                                    </ul>
                                    <div class="edit">
                                        <p>[USB DAC function]</p>
                                        <p><span style="color: inherit; font-size: 1rem;">This is a function that can be
                                                used as a "USB sound card" by connecting the AK product to PC
                                                USB.</span><br></p>
                                        <p><span style="color: inherit; font-size: 1rem;">- After connecting the product to
                                                PC, select [USB DAC] to connect to USB DAC mode.</span><br></p>
                                        <p>- The USB DAC function is automatically installed and recognized through the
                                            driver built into the OS.</p>
                                        <p>- If the device does not install properly, check the device driver (automatically
                                            search) through the Device Manager.</p>
                                        <p><span style="color: inherit; font-size: 1rem;">- If the device is installed but
                                                no sound is output, delete the device through Device Manager</span><br></p>
                                        <p><span style="color: inherit; font-size: 1rem;">&nbsp; and connect the product to
                                                the PC again and confirm.</span><br></p>
                                        <p><span style="color: inherit; font-size: 1rem;">- If your PC already has a sound
                                                card, change the default device through the control panel,</span><br></p>
                                        <p>Sound is played only when you select the AK product as the device to output the
                                            sound through the playback program setting.</p>
                                        <p><span style="color: inherit; font-size: 1rem;"><br></span></p>
                                        <p><span style="color: inherit; font-size: 1rem;">[Check path]&nbsp;</span><br></p>
                                        <p><span style="color: inherit; font-size: 1rem;">※ Windows XP:</span><br></p>
                                        <p><span style="color: inherit; font-size: 1rem;">Control Panel - Sounds and Audio
                                                Devices - Change Sound Playback default device to "USB DAC" in the ‘Audio’
                                                tab.</span><br></p>
                                        <p><span style="color: inherit; font-size: 1rem;"><br></span></p>
                                        <p><span style="color: inherit; font-size: 1rem;">※ Windows
                                                vista/7/8/10:</span><br></p>
                                        <p><span style="color: inherit; font-size: 1rem;">Control Panel - Hardware and
                                                Sounds - Sounds - Audio Devices manager - Select the "USB DAC" in the ‘Play’
                                                tab,</span><br></p>
                                        <p><span style="color: inherit; font-size: 1rem;">and then select as “set as the
                                                Default device”</span><br></p>
                                        <p><span style="color: inherit; font-size: 1rem;"><br></span></p>
                                        <p><span style="color: inherit; font-size: 1rem;">[USB DAC support
                                                specification]</span><br></p>
                                        <p><span style="color: inherit; font-size: 1rem;">Please refer to the each product
                                                manual.</span><br></p>
                                        <p><span style="color: inherit; font-size: 1rem;"><br></span></p>
                                        <p><span style="color: inherit; font-size: 1rem;">[Cautions]</span><br></p>
                                        <p><span style="color: inherit; font-size: 1rem;">- If the support format is
                                                exceeded, the sound will not play.</span><br></p>
                                        <p><span style="color: inherit; font-size: 1rem;">- When the USB DAC is connected,
                                                the volume control is unavailable when the LCD is off.</span><br></p>
                                        <p><span style="color: inherit; font-size: 1rem;">- When connecting USB DAC,
                                                previous, play and next keys are unavailable.</span><br></p>
                                        <p><span style="color: inherit; font-size: 1rem;">- If the USB usage is high or the
                                                PC is slow, the playback sound can be cut off</span><br></p>
                                        <p><span style="color: inherit; font-size: 1rem;">- When video is played back,
                                                depending on the original and output quality, the sync may not
                                                fit.</span><br></p>
                                        <p><span style="color: inherit; font-size: 1rem;">- Optical output (S/PDIF) is
                                                unavailable during USB DAC connection.</span><br></p>
                                        <p><span style="color: inherit; font-size: 1rem;">- Volume cannot be adjusted via
                                                the Windows volume control.</span><br></p>
                                        <p><span style="color: inherit; font-size: 1rem;">- You can adjust the sound volume
                                                through the volume of the program you are using or volume key</span><br></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div value="31" class="cont-top">
                                    <span class="num">19</span>
                                    <span class="t1">Product</span>
                                    <div class="t2">
                                        [JH Earphone] 4 pin connection method
                                        <ul class="tag">
                                            <li>LAYLA II</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="inner">
                                    <ul class="file-ty">
                                    </ul>
                                    <div class="edit">
                                        <p>[4 pin connection method]</p>
                                        <p><span style="color: inherit; font-size: 1rem;">- Align the unit with the groove
                                                of the cable as shown in the figure below and fix the connector of the cable
                                                part by turning it.</span><br></p>
                                        <p><span style="color: inherit; font-size: 1rem;">- If you force it to fit the
                                                groove, it may damage the unit or cable connector part.</span></p>
                                        <p><span style="color: inherit; font-size: 1rem;"><br></span><img
                                                src="/system/download.jsp?type=editor&amp;subType=img&amp;filename=20211010074029_f64bb8e4-753e-4a31-a190-d29cbaf8df76.jpg&amp;name=JH Earphoe 4 pin.jpg"
                                                style="width: 350px;"><br></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div value="30" class="cont-top">
                                    <span class="num">18</span>
                                    <span class="t1">Product</span>
                                    <div class="t2">
                                        [AK380 AMP] Amplifier Basic volume automatic change guide
                                        <ul class="tag">
                                            <li>AK380 AMP</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="inner">
                                    <ul class="file-ty">
                                    </ul>
                                    <div class="edit">
                                        <p>- When using the following connection while using the amplifier connected to the
                                            AK380</p>
                                        <p>&nbsp; It is adjusted to the basic volume level of the amplifier for protection
                                            of Earphone / Headphone / Ear&nbsp;</p>
                                        <p><br></p>
                                        <p>Connection as below:</p>
                                        <p>1. Activation of Amplifier</p>
                                        <p>2. Change of High Gain / Low Gain</p>
                                        <p>3. When removing earphones / headphones connected to the amplifier</p>
                                        <p><br></p>
                                        <p>* The basic volume of the amplifier is 50.&nbsp;</p>
                                        <p><span style="color: inherit; font-size: 1rem;">&nbsp; When the volume is over
                                                50, if you do above three actions, volume will be adjusted
                                                automatically.</span><span
                                                style="color: inherit; font-size: 1rem;">&nbsp;</span></p>
                                        <p>&nbsp; When deactivate the amplifier, regardless of volume level,&nbsp;</p>
                                        <p>&nbsp; it maintains the existing volumes when the earphone / headphone is
                                            connected to amplifier.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="page-nav">
                        <a href="javascript:goPage(1)" class="btn-first"></a>
                        <a href="javascript:goPage(1)" class="btn-prev"></a>
                        <ul>
                            <li>
                                <a href="javascript:goPage(1)" class="num active">1</a>
                            </li>
                            <li>
                                <a href="javascript:goPage(2)" class="num">2</a>
                            </li>
                            <li>
                                <a href="javascript:goPage(3)" class="num">3</a>
                            </li>
                        </ul>
                        <a href="javascript:goPage(3)" class="btn-next"></a>
                        <a href="javascript:goPage(3)" class="btn-last"></a>
                    </div>
                </div>
            </div>
        </section>
    </form>
@endsection
