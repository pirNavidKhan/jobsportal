@section('page_title',$product[0]->name) @section('img',$product[0]->image) @section('desc',$product[0]->desc) @section('keywords',$product[0]->keywords)
<html>

<head>
  <meta property="og:title" content="{{$product[0]->name}}" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
  <meta property="og:url" content="{{url()->current()}}" />
  <meta property="og:site_name" content="{{url('/')}}">
  <meta property="og:image" content="{{asset('storage/media/')}}/@yield('img')">
  <meta property="og:description" content="{{$product[0]->desc}}">
  <meta name="description" content="{{$product[0]->desc}}">
  <meta name="title" content="{{$product[0]->name}}">
  <meta name="keywords" content="{{$product[0]->keywords}}">
  <link rel="canonical" href="{{url()->current()}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('front_assets/css/boilerplate_mini.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('front_assets/css/reset_mini.css')}}">
 <link rel="stylesheet" type="text/css" href="{{asset('front_assets/css/
responsive_mini.css')}}">

  <script type="text/javascript" async src="{{asset('front_assets/js/respond.min.js')}}"></script>

  <script type="text/javascript" async src="{{asset('front_assets/js/menu-settings.js')}}"></script>
  <script type="text/javascript" async src="{{asset('front_assets/js/modernizr.min.js')}}"></script>
  <link rel="stylesheet" href="https://onesignal.com/sdks/OneSignalSDKStyles.css?v=2">
  <title>@yield('page_title')</title>
  </style>
  
   </head>


<body>
  <span style="font-size: 24px; line-height: 30px;">
  
</span></a>
  <div class="slicknav_menu" id="slicknav_menu">
    <a style="color: white;" href="{{url('/')}}" class="menu_logo">Jobtody</a>
    <ul class="slicknav_nav" aria-hidden="false" role="menu" style="display: block;"> </ul>
  </div>
  <div id="wrapper" class="mar-0-auto">
    <!--wrapper starts-->
    <div id="header" class="fleft">
      <!--header starts-->
      <div id="id-for-links" class="fleft menu rmm" style="position: fixed; min-width: 1140px; max-width: 1140px; z-index: 999; border-bottom: 2px solid rgb(135, 184, 67); padding-bottom: 2px;">
        <p id="logo_menu_desktop" > <a style="color: white;" href="{{url('/')}}">jobtody</a> </p>
        <ul id="menu">
         
        </ul>
      </div>
      <!--Menu ends -->
    </div>
    <!--header ends-->
    <!--<div class="fclear" ></div>-->
    <div id="main-contents" class="mar-t-10">
      <!--main-contents starts-->
      <div id="search-bar">
        <div id="search-bar-stick" class="fleft top_head_stick" style=" width:100%">
          <div class="right_search_bar">
            <div id="menu-2" style="border: none;">
              <ul>
                
              </ul>
            </div>
          </div>
          <div class="left_search_bar">
            <form  action="{{url('search/jobs')}}" method="GET" name="search" style="float: left; width: 100%;">
              <input type="search" name="search" class="textbox" value="{{Request::get('search')}}" placeholder="write search word">
              <input type="submit" value="Search"> </form>
            <div align="center"></div>
          </div>
        </div>
      </div>
      <div id="marquee_container" class="marquee_container"> <strong>Jobs in Pakistan</strong>, Official Govt Jobs, Dubai Career, Today Newspapers Jobs Pakistan, Paper PK 5 October 2022, Work Home, Earn Money Online 2023 </div>

      <div id="top-search-cont" style="padding: 10px 0px; float: left; width: 100%; margin: 15px 0px; box-shadow: 0px 0px 8px rgb(136, 136, 136);">
          <div style="text-align:center">
            <p style="float: left;font-size: 3em;margin-bottom: 5px;width: 97%; text-align:center;">Search Latest Jobs in Pakistan Today</p>
            <form action="{{url('search/jobs')}}" method="Get" name="search" style="float: left; width: 100%; margin-bottom: 10px;">
              <input type="search" name="search" value="{{Request::get('search')}}" placeholder="write search word" style="width:50%;"> 
              <input type="submit" value="Search" style="color: #000;">
            </form>
            <div style="clear:both;"></div>
            <div align="center">
              <div align="center" class="gov_cont">
                    @foreach($city as $list)
                    <a href="{{url('city/'.$list->city_slug)}}" class="gov_a">{{$list->city_name}}</a>
                    @endforeach

                </div>
            </div>
          </div>
        </div>
      <style>
      .vip {
        font-size: 18px;
        color: #F00;
        font-weight: bold;
      }
      
      .whasappgroup {
        font-size: 20px;
        color: #090;
        font-weight: bold;
      }
      </style>
      <div id="contents">
        <!--contents starts-->
        <div id="main-container">
          <div id="left-container-temp2">
            <div id="breadcrumb_container" class="breadcrumb_container">
              <ul id="breadcrumbs">
                <li></li>
                <li><a href="{{url('/')}}">Home</a></li>
                </li>{{$product[0]->slug}}</ul>
            </div>
            <div class="innerpage_big_div">
              <h1 id="head1">{{$product[0]->name}}</h1>
              <div id="desc-ad-cont" style="position: relative;">
                <div id="date-views" class="ca-box" style="margin-bottom: 15px; color: #aaa; padding: 0 5px; width: 98%;">
                  </div>
                <div class="ad_container"><span class="ad_text"></span>
                  <div class="inner_page_ad">
                    <script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- jobs_make_money_336x280_2 --><ins class="adsbygoogle" style="display:inline-block;width:336px;height:280px" data-ad-client="ca-pub-7753712740277746" data-ad-slot="3972321924"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                  </div>
                </div>
                <div class="job_detail">
                  <div class="row_job_detail">
                    <div class="job_detail_cell1"> </div>
                   
                  </div>
                  <div class="row_job_detail">
                    <div class="job_detail_cell1">Date Posted: </div>
                    <div class="job_detail_cell2">{{ date('d-M-Y', strtotime($product[0]->created_at)) }}</div>
                  </div>

                   <div class="row_job_detail">
                    <div class="job_detail_cell1">Expected Last Date:</div>
                    <div class="job_detail_cell2">{{ date('d-M-y', strtotime($product[0]->model)) }} </div>
                  </div>

                  <div class="row_job_detail">
                    <div class="job_detail_cell1">Category / Sector: </div>
                    <div class="job_detail_cell2"><a href="{{url('category/' .$product[0]->categories->cate_slug)}}" title="{{$product[0]->categories->cate_slug}}">{{$product[0]->categories->cate_name}}</a></div>
                  </div>
                  <div class="row_job_detail">
                    <div class="job_detail_cell1">Newspaper:</div>
                    <div class="">
                      <a href="{{url('paperpk/'.$product[0]->newspaper->newsp_slug)}}">{{$product[0]->newspaper->newsp_name}}</a>
                    </div>
                  </div>
                  <div class="row_job_detail">
                    <div class="job_detail_cell1">Education: </div>
                    <div class="job_detail_cell2"> <a href="{{url('education/' .$product[0]->education->edu_name)}}">{{$product[0]->education->edu_name}}</a></div>
                  </div>
                  <div class="row_job_detail">
                    <div class="job_detail_cell1">Vacancy Location: </div>
                    <div class="job_detail_cell2"><a href="{{url('city/' .$product[0]->city->city_slug)}}" target="_blank" title="jobs in Islamabad">{{$product[0]->city->city_name}}</a></div>
                  </div>
                  <div class="row_job_detail">
                    <div class="job_detail_cell1">Job Industry: </div>
                    <div class="job_detail_cell2"><a href="{{url('jobz/'.$product[0]->defartment->def_slug)}}">{{$product[0]->defartment->department}}</a></div>
                  </div>
                 

                     <div class="row_job_detail">
                    <div class="job_detail_cell1">Country:</div>
                    <div class="job_detail_cell2">
                      <a href="{{url('country/'.$product[0]->cuntry->cu_slug)}}">{{$product[0]->cuntry->cu_name}}</a>
                    </div>
                  </div>
                </div>
                <div id="ad-desc-cont" style="width: 100%; float:left; margin: 5px; border-bottom: 3px solid #618f2c; padding-bottom: 5px;">
                  <div style="width: 100%; float: left; font-weight: bold;">
                    <h2>Latest {{$product[0]->name}}</h2> </div>
                  <div style="width: 100%; float: left; padding-left:1px;">
                    <p> {!!$product[0]->desc!!} </p>
                  </div>
                </div>
                <br>
                <div id="ad-cont-btm" style="width: 100%; min-height:0px; float: left; margin: 10px 0; border-bottom:4px; border-bottom-color:#CCC;">
                  <div style="width: 100%; min-height:0px; min-width:0px; float: left;" align="center">
                    <script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    </div>
                </div>
                <div id="ad-pic-cont" style="width: 100%; float:left; margin: 5px 0; text-align:center;"> <img src="{{asset('storage/media/'.$product[0]->image)}}" alt="{{$product[0]->name}}">
                  <br>
                  <br>
                   <a style="font-size: 16px;" href="{{asset('storage/media/'.$product[0]->image)}}" target="_blank" title="{{$product[0]->name}}">View Full Image</a>
                  <hr> </div>
                <div style="clear:both"></div>
                <br>
                <div align="center">
                  <!-- jobs_make_money_linkads_responsive -->
                </div>
                <div style="clear:both"></div>
                <br> </div>
              <div class="fclear"></div>
              <br>
              <div class="fclear"></div>
              <div style="clear:both"></div>
              <br>
              <div style="clear:both"></div>
              <br>
              <div style="float: leftl; width: 100%; margin: 10px 0;"> </div>
            </div>
            <div class="fclear"></div>
            <div class="table">
              <h2>More Jobs in {{$product[0]->city->city_name}} <?php echo date('Y');?></h2>
              <p>{{$product[0]->city->c_desc}}</p><hr>
              <div class="table_contents"> @foreach($related_city as $list)
                <div class="table_cell" style="width: 100%;"> <a href="{{url('/'.$list->slug)}}" target="_blank">{{$list->name}}</a> </div> @endforeach </div>
            </div>


           

            <div class="table">
              <h2> Latest jobs in paperpk Pakistan  in <?php echo date('Y'); ?></h2>
              <div class="table_contents"> 
                <p>{{$product[0]->newspaper->newsp_desc}}</p> <hr>
                @foreach($newspaper as $list)
                <div class="table_cell" style="width: 120px;"> 
                  <a href="{{url('paperpk/' .$list->newsp_slug)}}" target="_blank">{{$list->newsp_name}}</a> </div> @endforeach </div>
            </div>

             <div class="table">
              <h2> Latest jobs in Pakistan departement in <?php echo date('Y'); ?></h2>
              <div class="table_contents"> @foreach($defartment as $list)
                <div class="table_cell" style="width: 120px;"> <a href="{{url('search/jobs')}}?search={{$list->department}}+jobs+in+{{$product[0]->city->city_name}}" target="_blank">{{$list->department}} jobs in {{$product[0]->city->city_name}}</a> </div> 
                @endforeach 
              </div>
            </div>

             <div class="table">
              <h2> Latest jobs by departement in {{$product[0]->cuntry->cu_name}} <?php echo date('Y'); ?></h2>
              <div class="table_contents"> 
                <p>{{$product[0]->defartment->def_desc}}</p> <hr>
                @foreach($defartment as $list)
                <div class="table_cell" style="width: 120px;"> <a href="{{url('jobz/'.$list->def_slug)}}" target="_blank">{{$list->department}}</a> 
                </div>
                @endforeach 
              </div>
            </div>

            <div class="fclear"></div>
            <br>
            <div style="text-align: center; float: left; width: 100%; margin: 10px 0;">
              <div style="width: 100%; text-align: center; color: #aaa;"></div>
              <div class="inner_page_ad" style="float: none; margin:0 auto;">
                <script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> <ins class="adsbygoogle" style="display:block" data-ad-format="autorelaxed" data-ad-client="ca-pub-7753712740277746" data-ad-slot="7137295526"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
              </div>
            </div>
            <div class="fclear"></div>
          </div>
          <div id="right-container-temp2">
            <div class="fclear"></div>

            <div class="table">
              <div class="table_contents">
                <div class="table_tittle">More jobs in {{$product[0]->categories->cate_name}} <?php echo date('Y');?></div>
                @foreach($related_def_product as $list)
                <div class="table_cell" style="width:100%;">
                 <a href="{{url('/'.$list->slug)}}">{{$list->name}}</a>
                 
                </div>
                @endforeach
              </div>
            </div>

              <div class="table">
              <div class="table_contents">
                <div class="table_tittle">Category jobs in {{$product[0]->cuntry->cu_name}}</div>
                @foreach($Category as $list)
                <div class="table_cell">
                 <a href="{{url('category/'.$list->cate_slug)}}">{{$list->cate_name}}</a>
                  
                </div>
                @endforeach
              </div>
            </div>

            <div class="table">
              <div class="table_contents" style="height: 100%;">
                <div class="table_cell">
                  <p>ads by Google</p>
                  <br> </div>
              </div>
            </div>
            <div class="fclear"></div>
          </div>
        </div>
        <div id="bottom-ad" class="bg-site" style="display: block; opacity: 0.349231;"> </div>
      </div>
    </div>
    <!--contents ends-->
    <!-- ################## End Body ################### -->
  </div>
  <!--main-contents ends-->
  <div id="left-fix-ad-div"> </div>
  <div id="right-fix-ad-div"> </div>
  <div class="fclear"></div>
  <div class="fclear"></div> <span class="">© <strong>Jobtody</strong> for latest <a href="{{url('/')}}" title="Pakistan Jobs"><b>Jobs in Pakistan</b></a> 2022, 2021 &amp; Upcoming Jobs 2023</span> </div>
  <!--footer ends-->
  </div>
  <!--wrapper ends-->
  <div id="fb-root" class=" fb_reset">
    <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
      <div></div>
    </div>
  </div>
  <div id="stcpDiv" style="position: absolute; top: -1999px; left: -1988px;">ShareThis Copy and Paste</div>
  <div id="stwrapper" class="stwrapper stwrapper4x stwrapper4x" style="display: none;">
    <iframe allowtransparency="true" id="stLframe" class="stLframe" name="stLframe" frameborder="0" scrolling="no" src="https://ws.sharethis.com/secure/index.html"></iframe>
  </div>
  <div id="stOverlay" onclick="javascript:stWidget.closeWidget();"></div>
  <grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>
  <div id="stcpDiv" style="position: absolute; top: -1999px; left: -1988px;">ShareThis Copy and Paste</div>
  <div id="stwrapper" class="stwrapper stwrapper4x stwrapper4x" style="display: none;">
    <iframe allowtransparency="true" id="stLframe" class="stLframe" name="stLframe" frameborder="0" scrolling="no" src="https://ws.sharethis.com/secure/index.html"></iframe>
  </div>
  <div id="stOverlay" onclick="javascript:stWidget.closeWidget();"></div>
</body>

</html>