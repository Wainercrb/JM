@extends('public.layouts.app') 
@section('title')
    PROFILE
@endsection
@section('content')
<div class="resume-header">
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 container-picture">
            <img src="https://cap.stanford.edu/profiles/viewImage?profileId=4179&type=square&ts=1509499351707" class="img-fluid" alt="Responsive image">    
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 container-personal-info">
                <div class="header-infomation">
                <h3>Wainer Rodriguez Bonilla</h3>
                <h4>Especialista proficional</h4>
                </div>
                <div class="container-info">
                <h5><stron class="font-italic">Algo:</stron>    algundatos<h5/>
                <h5><stron class="font-italic">Algo:</stron>    algundatos<h5/>
                <h5><stron class="font-italic">Algo:</stron>    algundatos<h5/>
                <h5><stron class="font-italic">Algo:</stron>    algundatos<h5/>
                <h5><stron class="font-italic">Algo:</stron>    algundatos<h5/>
                <h5><stron class="font-italic">Algo:</stron>    algundatos<h5/>
                </div>
        </div>
    </div>
    </div>
    </div>
    <div class="resume-body">
    <div class="container main-body">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
            <div class="container-resume">
                <div class="title-resume card">
                <h1 class="text-center">Educación</h1>
                </div>
                <div class="body-resume card">
                        <div class="container">
                                <div class="row">
                                  <div class="col">
                                    <div class="main-container-header">
                                      <div class="line-resume-container">
                                        <ul>
                                          <li>
                                            <div class="line-resume">
                                              <div class="icon-line-resume">
                                                <span>
                                                  <img src="http://www.foreclosure-support.com/images/johnny-depp.jpg" alt="">
                                                </span>
                                              </div>
                                              <div class="line-resume-li">
                                                <div class="line-resume-head">
                                                  <h3>2000-2002</h3>
                                                </div>
                                                <div class="line-resume-content">
                                                  <p>Cotai San Carlos</p>
                                                </div>
                                              </div>
                                            </div>
                                          </li>
                                          <div class="line-resume">
                                            <div class="icon-line-resume">
                                              <span>
                                                <img src="http://www.foreclosure-support.com/images/johnny-depp.jpg" alt="">
                                              </span>
                                            </div>
                                            <div class="line-resume-li">
                                              <div class="line-resume-head">
                                                <h3>2004-2008
                                                </h3>
                                              </div>
                                              <div class="line-resume-content">
                                                <p>U.C.R</p>
                                              </div>
                                            </div>
                                          </div>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                </div>      
        </div>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="container-experience">
                    <div class="title-experience card">
                    <h1 class="text-center">Experiencia</h1>
                    </div>
                    <div class="body-experience">
                            <ul class="list-group">
                            <li class="list-group-item">- 6 años gererente clinica dentex</li>
                            <li class="list-group-item">- 6 años gererente clinica dentex</li>
                            <li class="list-group-item">- 6 años gererente clinica dentex</li>
                            <li class="list-group-item">- 6 años gererente clinica dentex</li>
                            <li class="list-group-item">- 6 años gererente clinica dentex</li>
                          </ul>
                    </div>
                </div>
            </div>
    </div>
    </div>
</div>

<style>
    /*general desing*/
    .col-12{
        
        padding: 0.2% !important;
    }
    .resume-header{
        background-color:black;
        color:#fff;
    }
   
    .resume-body{
        background-color:none;
    }
    .body-resume{
        background-color:none;
    }
    .body-experience{
        background-color:none;
    }
   

    
      /*/general desing*/
      /*for big divices screen*/
      @media screen and (max-width: 5000px) and (min-width: 1301px) {
        .container-picture{
           margin-top:5%
          }
          .container-personal-info{
            margin-top:5%
          }
          .header-infomation{
              margin-bottom:5%;
          }
          .container-info, .header-infomation{
              padding-left:5%;
          }
          .title-resume{

            margin: 2px;
            padding:3% 0% 3% 1%;
            margin:2% 0% 2% 0%;
            background-color:none;
        }
        .title-experience{

            margin: 2px;
            padding:6% 0% 6.1% 2%;
            margin:4% 0% 4% 0%;
            background-color:none; 
        }
      }
      /*/for big divices screen*/
      /*for medium divices screen*/
      @media screen and (max-width: 1300px) and (min-width: 576px) {
        .container-picture{
            margin-top:4%
           }
           .container-personal-info{
            margin-top:4%
          }
          .header-infomation{
            margin-bottom:4%;
        }
        .container-info, .header-infomation{
            padding-left:10%;
        }

        .title-resume{

            margin: 2px;
            padding:3% 0% 3% 1%;
            margin:2% 0% 2% 0%;
            background-color:none;
        }
        .title-experience{

            margin: 2px;
            padding:6% 0% 6% 2%;
            margin:4% 0% 4.1% 0%;
            background-color:none; 
        }
         }
      /*/for medium divices screen*/
      /*for small divices screen*/
      @media screen and (max-width: 575px) and (min-width: 0px) {
        .container-picture{
            margin-top:3%
      
          }
          .container-personal-info{
            margin-top:1%
          }
          .img-fluid{
            display: block;
            margin: 0 auto;
          }
          .header-infomation{
            margin-bottom:1.5%;
        }
        .container-info, .header-infomation{
            padding-left:4%;
        }
        .title-resume{

            margin: 2px;
            padding:1% 0% 1% 0%;
            margin:2% 0% 1% 0%;
            background-color:none;
        }
        .title-experience{

            margin: 2px;
            padding:1% 0% 1% 0%;
            margin:2% 0% 1% 0%;
            background-color:none; 
        }
          
    }
      /*for small divices screen*/
      
      .main-container-header {
        padding: 0;
      }
    
      .main-container-header {
        float: left;
        margin-top: 30px;
        padding: 25px 30px;
        width: 100%;
      }
    
      .line-resume-container {
        float: left;
        width: 100%;
      }
    
      .line-resume-container>ul {
        float: left;
        list-style: none outside none;
        margin: 0;
        padding: 0;
        position: relative;
        width: 100%;
      }
    
      .line-resume-container>ul:before {
        background: none repeat scroll 0 0 #fafafa;
        content: "";
        height: 100%;
        left: 22px;
        position: absolute;
        top: 0;
        width: 2px;
      }
    
      .line-resume-container>ul>li {
        float: left;
        margin-bottom: 30px;
        position: relative;
        width: 100%;
      }
    
      .line-resume {
        float: left;
        padding-left: 70px;
        position: relative;
        width: 100%;
      }
    
      .icon-line-resume {
        left: 0;
        position: absolute;
        top: 0;
        width: 70px;
      }
    
      .icon-line-resume>span {
        float: left;
        position: relative;
        width: 100%;
      }
    
      .icon-line-resume>span>img {
        border: 3px solid #f5f5f5;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        -o-border-radius: 50%;
        border-radius: 50%;
        float: left;
        height: 45px;
        overflow: hidden;
        width: 45px;
      }
    
      .line-resume-li {
        background: none repeat scroll 0 0 #f5f5f5;
        float: left;
        position: relative;
        width: 100%;
      }
    
      .line-resume-li:before {
        border-bottom: 8px solid transparent;
        border-right: 8px solid #fafafa;
        border-top: 8px solid transparent;
        content: "";
        left: -7px;
        position: absolute;
        top: 12px;
      }
    
      .line-resume-head {
        background: none repeat scroll 0 0 #fafafa;
        float: left;
        width: 100%;
      }
    
      .line-resume-head>h3 {
        color: #333333;
        float: left;
        font-size: 14px;
        font-weight: normal;
        letter-spacing: 0.3px;
        line-height: 22px;
        margin: 0;
        padding: 9px 0 9px 20px;
      }
    
      .line-resume-head>h3>span {
        color: #999999;
        font-size: 11px;
        letter-spacing: 0.3px;
        margin-left: 20px;
        margin-right: 12px;
      }
    
      .line-resume-content {
        float: left;
        padding: 15px 20px;
        width: 100%;
      }


</style>

@endsection




