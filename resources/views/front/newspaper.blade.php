<html >

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>{{$product[0]->newsp_slug}} | jobtody</title>
  <link rel="canonical" href="{{url()->current()}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('front_assets/css/boilerplate_mini.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('front_assets/css/reset_mini.css')}}">
 <link rel="stylesheet" type="text/css" href="{{asset('front_assets/css/
responsive_mini.css')}}">

  <script type="text/javascript" async src="{{asset('front_assets/js/respond.min.js')}}"></script>

  <script type="text/javascript" async src="{{asset('front_assets/js/menu-settings.js')}}"></script>
  <script type="text/javascript" async src="{{asset('front_assets/js/modernizr.min.js')}}"></script>
  <link rel="stylesheet" href="https://onesignal.com/sdks/OneSignalSDKStyles.css?v=2">
 

</head>

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
          <div id="left-container">
            <ul class="side_bar_links">
              <li style="font-size: 18px; background-color: #eee; text-align:center; list-style-type:none;">JOBS BY CATEGORY</li> 
              @foreach($Category as $list)
              <a href="{{url('category/'.$list->cate_slug)}}">{{$list->cate_name}}</a> |
              @endforeach
            </ul>
            <div style="height: 500px; width: 100%;"></div>
          </div>
          <div id="middle-container">
            <div id="breadcrumb_container" class="breadcrumb_container">
              <ul id="breadcrumbs">
                <li></li>
                <li><a href="{{url('/')}}">Home</a></li>{{$product[0]->newsp_slug}} </ul>
            </div>
            <div class="listings" style="position: relative;">
              <h1>Job Opportunities in {{$product[0]->newsp_name}}</h1>
              <div class="fclear"></div>
              <p>{{$product[0]->newsp_desc}}</p>
              <div class="fclear"></div>
              <div style="text-align: center; margin: 10px 0;">
                <div style="width: 100%; margin: 0 auto;" class="right_col_ad">

                  
                </div>
              </div>
              <h2>Latest Job Opportunities in {{$product[0]->newsp_name}} 2022 Pakistan</h2>
              <div class="row_container">
                <div class="cell1 bold color_top_text">Job Title</div>
                <div class="cell2 bold color_top_text">Job City</div>

                <div class="cell3 bold color_top_text">Education</div>

                <div class="cell4 bold color_top_text">Date Posted</div>
              </div>
              @foreach($product as $list)
              <div class="row_container">
                <div class="cell1"> <a href="{{url('/'.$list->slug)}}" target="_blank">{{$list->name}}</a> </div>
                <div class="cell2"> 
                  <a href="{{url('city/'.$list->city_slug)}}">{{$list->city_name}}</a> </div>

                   <div class="cell3"> 
                  <a href="{{url('education/'.$list->edu_slug)}}">{{$list->edu_name}}</a> </div>

                <div class="cell4">{{ date('d-m-Y', strtotime($list->created_at)) }}</div>
              </div>
              @endforeach
            </div>

            <div class="paging" style="text-align: center;"> <span style="float: left; margin-left: 5px; line-height: 22px;">Page No.</span></div>
            <br>
            <div style="text-align: center; width: 100%; float: left;"> </div>
            <br>
            <div style="text-align: center;">
              
            </div>
            <br>
            <h2>{{$product[0]->newsp_name}} Jobs in Pakistan 2022</h2>
            @foreach($City as $list)
             <a href="{{url('search/jobs')}}?search={{$product[0]->newsp_name}}+jobs+in+{{$list->city_name}}">{{$product[0]->newsp_name}} jobs in {{$list->city_name}}</a> |@endforeach
            <br>
            <br>
            <div style="clear:both"></div>
            <br>
            <div align="center">
            
              <!-- jobs_make_money_linkads_responsive --><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7753712740277746" data-ad-slot="8614028729" data-ad-format="link"></ins>
              <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
              </script>
            </div>
            <div style="clear:both"></div>
            <br> </div>
          <div id="right-container-temp2">
            <div class="fclear"></div>
            <div class="table">
              <div class="table_tittle">LATEST JOBS</div>
              <div class="table_contents">
                @foreach($alljobs as $list)
                <div class="table_cell" style="width: 100%;"><a href="{{url('/'.$list->slug)}}">{{$list->name}}</a></div>
                @endforeach
              </div>
              </div>
             <div class="table">
        <div class="table_tittle">JOBS IN PAKISTAN</div>
        <div class="table_contents">
          @foreach($defartment as $list)
          <div class="table_cell">
            <a href="{{url('/defartment/'.$list->def_slug)}}" target="_blank">{{$list->department}}</a></div>
            @endforeach
            
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
    <div class="fclear"></div> <span class="">© <strong>jobtody</strong> for latest <a href="{{url('/')}}" title="Pakistan Jobs"><b>Jobs in Pakistan</b></a> 2022, 2021 &amp; Upcoming Jobs 2023</span> </div>
  <!--footer ends-->
  <!--wrapper ends-->
  
  <div id="bottom-ad" style="display: block;"> <span align="center">
  

</html>