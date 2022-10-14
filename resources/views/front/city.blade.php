<html>
  <head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>

    <title>Today Jobs in pakisatn <?php echo date('Y'); ?></title>

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
<!-- ######### Start Body ############### -->
        <style>
          .color_top_text {
            color: #87b843;
          }

          .first_big_4col,
          .equal_4cols,
          .five_cols {
            border: 1px solid #ccc;
            float: left;
            padding: 0 1%;
            margin-bottom: 15px;
          }
        </style>
        <div id="contents">
          <!--contents starts-->
          <div id="main-container">
            <div id="left-container-temp2">
              <div class="first_big_4col">
                <h2>Latest Jobs in {{$product[0]->city_name}} <?php echo date('Y');?></h2>
                <p>{{$product[0]->c_desc}} </p>
                <br>
                <div class="row_container">
                  <div class="cell1 bold color_top_text">Job Title / Vacancy - Online Job Search</div>
                  <div class="cell2 bold color_top_text">Industry / Department</div>
                  <div class="cell_three">
                    <div class="inner_cell bold color_top_text">Category</div>
                    <div class="inner_cell bold color_top_text">Date Posted</div>
                  </div>
                </div>
                 
               
               @foreach($product as $list)
    <div class="row_container">
      <div class="cell1">
        <a href="{{url('/'.$list->slug)}}">{{$list->name}}</a>
      </div>
      <div class="cell2">

        <a href="{{url('jobz/' .$list->def_slug)}}">{{$list->department}}</a>
      </div>
      <div class="cell_three">
        <div class="inner_cell">
         {{$list->cate_name}}
        </div>
        <div class="inner_cell">{{ date('d-M-Y', strtotime($list->created_at)) }}</div>

      </div>
    </div>

               @endforeach
              </div>




              <div class="table">
                <h2>Latest All jobs in Pakisatn <?php echo date('Y');?></h2>
                <div class="table_contents">
                 @foreach($all_product as $list)
                  <div class="table_cell" style="width: 100%;">
                    <a href="{{url('/'.$list->slug)}}">{{$list->city->city_name}} jobs in {{$list->name}}
                      
                    </a>

                  </div>
                  @endforeach
                   
                </div>
              </div>
              <div class="equal_4cols">
                <h2>Latest Jobs from by Category In pakistan <?php echo date('Y');?></h2>
                <p>Jobs com is best place to search jobs in Pakistan for all fresh graduates, students, experienced.</p><hr>
                <br>
                <div class="row_cont_onecell">
                  @foreach($all_category as $list)
                  <div class="table_cell">
                    <a href="{{url('category/'.$list->cate_slug)}}">
                      <b>{{$list->cate_name}}</b>
                    </a>

                  </div>

                  @endforeach
                </div>


                <div class="row_cont_onecell">
                  <br>
                  <p>
                    law firms, data entry operators, medical practitioner, media, teachers, financial advisors, managers, supervisors, accountants, professors, lecturers, labor, media persons, and personnel of the security forces and the police force. The candidates can get all necessary information of the career opportunities in Karachi through online and the print media as well as the electronic media.
                  </p>
                </div>
              </div>

               <div class="equal_4cols">
                <h2>Latest jobs in {{$product[0]->city_name}} <?php echo date('Y');?></h2>
                <p>{{$product[0]->c_desc}}</p><hr>
                <br>
                <div class="row_cont_onecell">
                  @foreach($all_category as $list)
                  <div class="one_cell">
                    <a href="{{url('search/jobs')}}?search={{$list->cate_name}}+jobs+in+{{$product[0]->city_name}}">
                      {{$list->cate_name}} jobs in {{$product[0]->city_name}}
                    </a>

                  </div>  

                  @endforeach
                </div>
</div>

                 <div class="equal_4cols">
                <h2>More jobs in pakistan<?php echo date('Y');?></h2>
                <p></p><hr>
                <br>
                <div class="row_cont_onecell">
                  @foreach($all_def as $list)
                  <div class="one_cell">
                    <a href="{{url('search/jobs')}}?search={{$list->department}}+jobs">
                      {{$list->department}} jobs
                    </a>

                  </div>  

                  @endforeach
                </div>
              


                <div class="row_cont_onecell">
                  <br>
                  <p>{{$product[0]->name}}
                    The private sector offers the services in various fields like telecom companies jobs and IT companies, trade, commerce, stock exchange, commercial banks and financial departments, government exchequers, 
                  </p>
                </div>
              </div>
            </div>

            <div id="right-container-temp2">
             
              <div class="table" style="height: 100%;">
                <div class="table_contents">
                  <div class="table_cell">
                   <p>ads by Google</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       
  </body>
  
</html>