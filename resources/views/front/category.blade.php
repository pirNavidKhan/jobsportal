<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
  <meta name="description" content="{{$category_jobs[0]->cate_desc}}">
  <meta name="keywords" content="{{$category_jobs[0]->cate_key}}">
  <title>jobtody | jobs in pakistan
    <?php echo date('Y'); ?>
  </title>
   <link rel="canonical" href="{{url()->current()}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('front_assets/css/boilerplate_mini.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('front_assets/css/reset_mini.css')}}">
 <link rel="stylesheet" type="text/css" href="{{asset('front_assets/css/
responsive_mini.css')}}">

  <script type="text/javascript" async src="{{asset('front_assets/js/respond.min.js')}}"></script>

  <script type="text/javascript" async src="{{asset('front_assets/js/menu-settings.js')}}"></script>
  <script type="text/javascript" async src="{{asset('front_assets/js/modernizr.min.js')}}"></script>
  <link rel="stylesheet" href="https://onesignal.com/sdks/OneSignalSDKStyles.css?v=2">
  
<body>
   <span style="font-size: 24px; line-height: 30px;">
  
</span></a>
  <div class="slicknav_menu">
    <a style="color: white;" href="{{url('/')}}" class="menu_logo">Jobtody</a>
    <ul class="slicknav_nav" aria-hidden="false" role="menu" style="display: block;"> </ul>
  </div>
  <div id="wrapper" class="mar-0-auto">
    <!--wrapper starts-->
    <div id="header" class="fleft">
      <!--header starts-->
      <div id="id-for-links" class="fleft menu rmm" style="position: fixed; min-width: 1140px; max-width: 1140px; z-index: 999; border-bottom: 2px solid rgb(135, 184, 67); padding-bottom: 2px;">
        <p id="logo_menu_desktop"> <a style="color: white;" href="{{url('/')}}">jobtody</a> </p>
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
      <div id="marquee_container" class="marquee_container"> <strong>Jobs in Pakistan</strong>, Official Govt Jobs, Dubai Career, Today Newspapers Jobs Pakistan, Paper PK  Work Home, Earn Money Online 2023 </div>

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
                    @foreach($cuntry as $list)
                    <a href="{{url('country/'.$list->cu_slug)}}" class="gov_a">{{$list->cu_name}}</a>
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
      <!-- ################## Start Body ################### -->
      <style>
      .row_container {
        width: 98%;
        padding: 3px 0;
      }
      </style>
      <div id="contents">
        <!--contents starts-->
        <div id="main-container">
          <div id="middle-container">
            <div id="breadcrumb_container" class="breadcrumb_container">
              <ul id="breadcrumbs">
                <li></li>
                <li><a href="{{url('/')}}">Home</a>
                 
                </li>{{$category_jobs[0]->cate_slug}}
                
              </ul>
            </div>
            <div class="listings" style="position: relative;">
              <h1>Job Opportunities in {{$category_jobs[0]->cate_name}}</h1>
              <div class="fclear"></div>
              <p>{{$category_jobs[0]->cate_slug}}</p>
              <div class="fclear"></div>
              <div style="text-align: center; margin: 10px 0;">
                <div style="width: 100%; margin: 0 auto;" class="right_col_ad">
                  <script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                  <!-- jobs_make_money_responsive1 --><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7753712740277746" data-ad-slot="4183829122" data-ad-format="auto"></ins>
                  <script>
                  (adsbygoogle = window.adsbygoogle || []).push({});
                  </script>
                </div>
              </div>
              <h2>Latest Job Opportunities in {{$category_jobs[0]->cate_name}} 2022 Pakistan</h2>
              <div class="row_container">
                <div class="cell31 bold color_top_text">Job Title</div>
                <div class="cell32 bold color_top_text">Job City</div>
                <div class="cell33 bold color_top_text">Date Posted</div>
              </div>
              @foreach($product as $list)
              <div class="row_container">
                
                <div class="cell31"> <a href="{{url('/' .$list->slug)}}">{{$list->name}}</a>
                 </div>
                <div class="cell32"> 
                  <a href="{{url('city/' .$list->city_slug)}}">{{$list->city_name}}</a> 
                </div>
                <div class="cell33">{{ date('d-M-y', strtotime($list->created_at)) }}</div>
              </div>
  @endforeach
            </div>

            <div class="paging" style="text-align: center;"> <span style="float: left; margin-left: 5px; line-height: 22px;">Page No.</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
            <br>
            <div style="text-align: center; width: 100%; float: left;"> </div>
            <br>
            <div style="text-align: center;">
              <div style="width: 100%; margin: 0 auto 10px;">
              
              </div>
            </div>
            <br>
            <h2>Latest More  Jobs In Pakistan <?php echo date('Y');?></h2> 
            @foreach($all_product as $list)
            <a href="{{url(url('/' .$list->slug))}}">{{$list->categories->cate_name}} {{$list->name}}</a> 
            |@endforeach
            <br>
            <br>
            <br>
            <div style="clear:both"></div>
            <br>
            <div align="center">
              
            </div>
            <div style="clear:both"></div>
            <br> </div>
          <div id="right-container-temp2">
            <div class="table">
              <div class="table_tittle">More jobs by department in <?php echo date('Y');?></div>
              <div class="table_contents">
                <div class="table_cell">
                  <a href="">test</a>
                </div>
              </div>
            </div>

            <div class="fclear"></div>
           <div class="table">
              
            <div class="table_contents" style="
          height: 50%;
          ">
                ads by google
              </div>
            </div>
           
            </div>
          </div>
        </div>
      </div>
      <!--contents ends-->
      <!-- ################## End Body ################### -->
    </div>
    <!--main-contents ends-->
    <div id="left-fix-ad-div"> </div>
    <div id="right-fix-ad-div"> </div>
    <div class="fclear"></div>
    <div id="footer">
      <!--footer starts-->
      <!-- social icons for footer ends -->
    </div>
    <!--footer ends-->
    <!--wrapper ends-->

   
  <!-- ################## Start Body ################### -->
  <div id="fb-root" class=" fb_reset">
    <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
      <div></div>
    </div>
  </div>
</html>