<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ASIA PACKER TRAVEL</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" href="/izbooking/common/css/ress.min.css">
  <link rel="stylesheet" href="/izbooking/common/css/jquery-datepicker-ui.min.css">
  <link rel="stylesheet" href="/izbooking/common/css/fontawesome.min.css">
  <link rel="stylesheet" href="/izbooking/common/css/slick.css">
  <link rel="stylesheet" href="/izbooking/common/css/main.css">
  <link rel="stylesheet" href="/izbooking/common/css/tour/style.css">
</head>

<body>
  <div class="container">
    <?php include $_SERVER['DOCUMENT_ROOT']."/izbooking/common/inc/header.php"; ?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/izbooking/common/inc/menu-mobile.php"; ?>

    <div class="tour">
      <div class="section-banner">
        <div class="top-banner">
          <div id="top-banner">
            <div class="item">
              <div class="txt-banner">
                <p class="sm">EXPERIENCE</p>
                <p class="big">Vietnam Holliday</p>
              </div>
              <img src="/izbooking/common/images/tour/banner.jpg" alt="" width="1920" height="500">

            </div>
          </div>
          <div class="search-box">
            <div class="tab-content">
              <form action="" method="" class="form-box" name="tour_form_search">
                <div class="form-row">
                  <div class="form-group">
                    <div class="select-box select-icon select-place">
                      <select name="tour_place" id="tour_place" class="form-control">
                        <option value="">Place</option>
                        <option value="">Place 1</option>
                        <option value="">Place 2</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="select-box select-icon select-duration">
                      <select name="duration" id="duration" class="form-control">
                        <option value="">All duration</option>
                        <option value="5">5 days (-)</option>
                        <option value="5-10">5 - 10 days</option>
                        <option value="10">10 days (+)</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="select-box select-tour">
                      <select name="tour_type" id="tour_type" class="form-control">
                        <option value="">All tour types</option>
                        <option value="1">Group tour</option>
                        <option value="2">Small tour</option>
                        <option value="3">Private tour</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group select-icon select-calendar">
                    <input type="text" name="date_tour" id="date_tour" class="form-control datepicker" data-format="MM dd, yy"
                      placeholder="August, 18 2018">
                  </div>
                  <div class="form-group form-btn">
                    <button type="button" name="tour_search" class="form-control btn"><i class="fa fa-search"></i>
                      Search</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="section-breadcrumb">
        <div class="wrap">
          <ul class="breadcrumb">
            <li>
              <a href="/">Home</a>
            </li>
            <li>Halong Bay Cruises</li>
          </ul>
        </div>
      </div>
      <div class="section-content">
        <div class="wrap">
          <p class="review-count">300+ Halong Bay Cruises with 8888 reviews</p>
          <div class="filter-sort">
            <div class="filter-box">Filter by</div>
            <div class="sort-box select-box">
              <select name="filter-select" id="filter-select">
                <option value="Popularity">Popularity</option>
                <option value="Pool">Pool</option>
                <option value="Free Wifi">Free Wifi</option>
              </select>
            </div>
          </div>

          <div class="main-section-content">
            <div class="sidebar">
              <form action="" id="formFiterHotel" name="formFiterHotel">
                <div class="filter-sidebar">
                  <h2>Filter By</h2>
                  <div class="box-sidebar">
                    <h3>Departure date</h3>
                    <div class="inner-box">
                      <p class="datebox"><i class="fa fa-calendar"></i><input type="text" class="txtDate datepicker"
                          placeholder="Select a specific date" id="txtDate"></p>
                    </div>
                  </div>
                  <!-- /box-sidebar -->
                  <div class="box-sidebar">
                    <h3>Departure date</h3>
                    <div class="inner-box">
                      <p class="range range-date" id="range-date">&nbsp;</p>
                      <input type="hidden" name="txtRangeDate" id="txtRangeDate">
                    </div>
                  </div>
                  <!-- /box-sidebar -->
                  <div class="box-sidebar">
                    <h3>Regions</h3>
                    <div class="inner-box">
                      <ul class="list-sidebar">
                        <li class="item"><a href="">Southern Vietnam <span>(20)</span></a></li>
                        <li class="item"><a href="">Northern Vietnam <span>(22)</span></a></li>
                        <li class="item"><a href="">Norteast Vietnam <span>(11)</span></a></li>
                        <li class="item"><a href="">Red River Delta <span>(40)</span></a></li>
                        <li class="item"><a href="">Northwest Vietnam <span>(25)</span></a></li>
                        <li class="item"><a href="">Halong Bay <span>(10)</span></a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /box-sidebar -->
                  <div class="box-sidebar">
                    <h3>Budget</h3>
                    <div class="inner-box">
                      <p class="range" id="price01">&nbsp;</p>
                      <input type="hidden" name="txtPrice01" id="txtPrice01">
                      <p class="txt-val"><span>$20</span><span>$9100</span></p>
                      <p class="lead">Price per day</p>
                      <p class="range" id="price02">&nbsp;</p>
                      <input type="hidden" name="txtPrice02" id="txtPrice02">
                      <p class="txt-val"><span>$0</span><span>$1000+</span></p>
                    </div>
                  </div>
                  <!-- /box-sidebar -->
                  <div class="box-sidebar">
                    <h3>Start &amp; ending city</h3>
                    <div class="inner-box">
                      <p class="search-box">
                        <i class="fa fa-search"></i>
                        <input type="text" name="txtStart" placeholder="search" id="txtStart">
                      </p>
                      <p class="search-box">
                        <i class="fa fa-search"></i>
                        <input type="text" name="txtEnd" placeholder="search" id="txtEnd">
                      </p>
                    </div>
                  </div>
                  <!-- /box-sidebar -->
                  <div class="box-sidebar">
                    <h3>Travel Style</h3>
                    <div class="inner-box">
                      <ul class="list-sidebar">
                        <li class="item"><a href="">Festival &amp; Events <span>(20)</span></a></li>
                        <li class="item"><a href="">Indipendent <span>(22)</span></a></li>
                        <li class="item"><a href="">Cultural <span>(11)</span></a></li>
                        <li class="item"><a href="">Activities <span>(40)</span></a></li>
                        <li class="item"><a href="">Nature &amp; Adventure <span>(25)</span></a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /box-sidebar -->
                  <div class="box-sidebar">
                    <h3>Travel Style</h3>
                    <div class="inner-box">
                      <ul class="list-sidebar">
                        <li class="item"><a href="">Hotel <span>(20)</span></a></li>
                        <li class="item"><a href="">Home-stay <span>(22)</span></a></li>
                        <li class="item"><a href="">Guesthouse <span>(11)</span></a></li>
                        <li class="item"><a href="">Hostel <span>(40)</span></a></li>
                        <li class="item"><a href="">Bungalow <span>(25)</span></a></li>
                        <li class="item"><a href="">Lodge <span>(25)</span></a></li>
                        <li class="item"><a href="">Resort <span>(25)</span></a></li>
                        <li class="item"><a href="">Temple <span>(25)</span></a></li>
                        <li class="item"><a href="">Sleep Bus <span>(25)</span></a></li>
                        <li class="item"><a href="">House Boat <span>(25)</span></a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /box-sidebar -->
                  <div class="box-sidebar">
                    <h3>Must see countries</h3>
                    <div class="inner-box">
                      <p class="search-box">
                        <i class="fa fa-search"></i>
                        <input type="text" name="txtCountry" placeholder="search" id="txtCountry">
                      </p>
                    </div>
                  </div>
                  <!-- /box-sidebar -->
                </div>
              </form>
              <div class="hot-deals">
                <h2>Hot Deals</h2>
                <div class="box-sidebar">
                  <div class="inner-box box-deals">
                    <ul class="list-deals">
                      <li class="item"><a href="#">La Pinta Cruise 2 days 1 night</a></li>
                      <li class="item"><a href="">Discover vietnam northern in 9 days</a></li>
                      <li class="item"><a href="">Discover vietnam northern in 9 days</a></li>
                    </ul>
                  </div>
                </div>
                <div class="box-sidebar">
                  <div class="inner-box box-deals">
                    <ul class="list-deals">
                      <li class="item"><a href="#">See all best Vietnam Tours 2018</a></li>
                      <li class="item"><a href="">See all top destinations in Vietnam 2018</a></li>
                      <li class="item"><a href="">Thailand Packages Tours &amp; Trips 2018</a></li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
            <!-- /sidebar -->
            <div class="main-tour">
              <div id="loading"></div>

              <ul class="list-tours">
                <li class="tour">
                  <div class="inner-tour">
                    <div class="thumbnails">
                      <figure>
                        <img src="/izbooking/common/images/tour/tour01.jpg" alt="" width="244" height="179">
                      </figure>
                      <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d43819.38373351124!2d105.85390682225626!3d21.02070383727981!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x90d6982234a65f25!2sSofitel+Legend+Metropole+Hanoi!5e0!3m2!1svi!2s!4v1543051777046"></iframe>
                      </div>
                      <p class="btn-favorite">&nbsp;</p>
                    </div>
                    <div class="info-tour">
                      <div class="info-txt">
                        <h2 class="tl"><a href="#">Paloma Cruise 3 days/2 nights</a></h2>
                        <div class="rate">
                          <div class="star-rate">
                            <div class="rate-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-half-o"></i>
                            </div>
                          </div>
                          <div class="rate-ponit">
                            <p class="point">9.6</p>
                            <p class="count">123 Reviews - Excellent</p>
                          </div>
                        </div>
                        <p class="txt-cus">"Vietnam Intro was amazing! Went with my bf and got to see so many cool
                          parts of the..."</p>
                        <div class="tour-detail">
                          <ul>
                            <li>
                              <span class="lb">TOUR LINE</span>
                              <span class="desc">Hanoi - Tuan Chau Marina</span>
                            </li>
                            <li>
                              <span class="lb">DURATION</span>
                              <span class="desc">2 Days 1 Night</span>
                            </li>
                            <li>
                              <span class="lb">ACCOMODATION</span>
                              <span class="desc">Berth / Cabin</span>
                            </li>
                            <li>
                              <span class="lb">STARTS/ENDS IN</span>
                              <span class="desc">Hanoi / Hanoi</span>
                            </li>
                            <li>
                              <span class="lb">COUNTRY REGIONS</span>
                              <span class="desc">Northern Vietnam</span>
                            </li>
                            <li>
                              <span class="lb">TRANSPORT</span>
                              <span class="desc">Boat</span>
                            </li>
                            <li><span class="lb">PRODUCT CODE</span><span class="desc">T31APH01</span></li>
                          </ul>
                        </div>
                      </div>
                      <div class="info-schedule-price">
                        <div class="price">
                          <div class="price01">
                            <p>Our saving<span><b>$30</b></span></p>
                            <div class="tooltip">
                              <dl>
                                <dt>Brochure Price</dt>
                                <dd>$529</dd>
                              </dl>
                              <dl>
                                <dt>Save with TourRadar</dt>
                                <dd>-$21</dd>
                              </dl>
                              <dl class="tot">
                                <dt>Our Price from</dt>
                                <dd>$508</dd>
                              </dl>
                            </div>
                          </div>
                          <p class="price02">From <span>US <b>$969</b><img src="/izbooking/common/images/tour/rocket.svg" alt=""
                                class="icon"></span></p>
                        </div>
                        <div class="date">
                          <p class="date-count">12 days</p>
                          <p class="date-price">$81 per day</p>
                        </div>
                        <div class="schedule">
                          <p class="schedule01">24 Aug 2018</p>
                          <p class="schedule02">10+ spaces left</p>
                        </div>
                        <div class="btns">
                          <ul>
                            <li><a href="" class="more-tour">View More</a></li>
                            <li><a href="" class="download" target="_blank">Download Itineraries</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="tour">
                  <div class="inner-tour">
                    <p class="sale"><span>-15%;</span></p>
                    <div class="thumbnails">
                      <figure>
                        <img src="/izbooking/common/images/tour/tour02.jpg" alt="" width="244" height="179">
                      </figure>
                      <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d43819.38373351124!2d105.85390682225626!3d21.02070383727981!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x90d6982234a65f25!2sSofitel+Legend+Metropole+Hanoi!5e0!3m2!1svi!2s!4v1543051777046"></iframe>
                      </div>
                      <p class="btn-favorite">&nbsp;</p>
                    </div>
                    <div class="info-tour">
                      <div class="info-txt">
                        <h2 class="tl"><a href="#">Paloma Cruise 3 days/2 nights</a></h2>
                        <div class="rate">
                          <div class="star-rate">
                            <div class="rate-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-half-o"></i>
                            </div>
                          </div>
                          <div class="rate-ponit">
                            <p class="point">9.6</p>
                            <p class="count">123 Reviews - Excellent</p>
                          </div>
                        </div>
                        <p class="txt-cus">"Vietnam Intro was amazing! Went with my bf and got to see so many cool
                          parts of the..."</p>
                        <div class="tour-detail">
                          <ul>
                            <li>
                              <span class="lb">TOUR LINE</span>
                              <span class="desc">Hanoi - Tuan Chau Marina</span>
                            </li>
                            <li>
                              <span class="lb">DURATION</span>
                              <span class="desc">2 Days 1 Night</span>
                            </li>
                            <li>
                              <span class="lb">ACCOMODATION</span>
                              <span class="desc">Berth / Cabin</span>
                            </li>
                            <li>
                              <span class="lb">STARTS/ENDS IN</span>
                              <span class="desc">Hanoi / Hanoi</span>
                            </li>
                            <li>
                              <span class="lb">COUNTRY REGIONS</span>
                              <span class="desc">Northern Vietnam</span>
                            </li>
                            <li>
                              <span class="lb">TRANSPORT</span>
                              <span class="desc">Boat</span>
                            </li>
                            <li><span class="lb">PRODUCT CODE</span><span class="desc">T31APH01</span></li>
                          </ul>
                        </div>
                      </div>
                      <div class="info-schedule-price">
                        <div class="price">
                          <div class="price01">
                            <p>Our saving<span><b>$30</b></span></p>
                            <div class="tooltip">
                              <dl>
                                <dt>Brochure Price</dt>
                                <dd>$529</dd>
                              </dl>
                              <dl>
                                <dt>Save with TourRadar</dt>
                                <dd>-$21</dd>
                              </dl>
                              <dl class="tot">
                                <dt>Our Price from</dt>
                                <dd>$508</dd>
                              </dl>
                            </div>
                          </div>
                          <p class="price02">From <span>US <b>$969</b><img src="/izbooking/common/images/tour/rocket.svg" alt=""
                                class="icon"></span></p>
                        </div>
                        <div class="date">
                          <p class="date-count">12 days</p>
                          <p class="date-price">$81 per day</p>
                        </div>
                        <div class="schedule">
                          <p class="schedule01">24 Aug 2018</p>
                          <p class="schedule02">10+ spaces left</p>
                        </div>
                        <div class="btns">
                          <ul>
                            <li><a href="" class="more-tour">View More</a></li>
                            <li><a href="" class="download" target="_blank">Download Itineraries</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="tour">
                  <div class="inner-tour">
                    <div class="thumbnails">
                      <figure>
                        <img src="/izbooking/common/images/tour/tour03.jpg" alt="" width="244" height="179">
                      </figure>
                      <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d43819.38373351124!2d105.85390682225626!3d21.02070383727981!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x90d6982234a65f25!2sSofitel+Legend+Metropole+Hanoi!5e0!3m2!1svi!2s!4v1543051777046"></iframe>
                      </div>
                      <p class="btn-favorite">&nbsp;</p>
                    </div>
                    <div class="info-tour">
                      <div class="info-txt">
                        <h2 class="tl"><a href="#">Paloma Cruise 3 days/2 nights</a></h2>
                        <div class="rate">
                          <div class="star-rate">
                            <div class="rate-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-half-o"></i>
                            </div>
                          </div>
                          <div class="rate-ponit">
                            <p class="point">9.6</p>
                            <p class="count">123 Reviews - Excellent</p>
                          </div>
                        </div>
                        <p class="txt-cus">"Vietnam Intro was amazing! Went with my bf and got to see so many cool
                          parts of the..."</p>
                        <div class="tour-detail">
                          <ul>
                            <li>
                              <span class="lb">TOUR LINE</span>
                              <span class="desc">Hanoi - Tuan Chau Marina</span>
                            </li>
                            <li>
                              <span class="lb">DURATION</span>
                              <span class="desc">2 Days 1 Night</span>
                            </li>
                            <li>
                              <span class="lb">ACCOMODATION</span>
                              <span class="desc">Berth / Cabin</span>
                            </li>
                            <li>
                              <span class="lb">STARTS/ENDS IN</span>
                              <span class="desc">Hanoi / Hanoi</span>
                            </li>
                            <li>
                              <span class="lb">COUNTRY REGIONS</span>
                              <span class="desc">Northern Vietnam</span>
                            </li>
                            <li>
                              <span class="lb">TRANSPORT</span>
                              <span class="desc">Boat</span>
                            </li>
                            <li><span class="lb">PRODUCT CODE</span><span class="desc">T31APH01</span></li>
                          </ul>
                        </div>
                      </div>
                      <div class="info-schedule-price">
                        <div class="price">
                          <div class="price01">
                            <p>Our saving<span><b>$30</b></span></p>
                            <div class="tooltip">
                              <dl>
                                <dt>Brochure Price</dt>
                                <dd>$529</dd>
                              </dl>
                              <dl>
                                <dt>Save with TourRadar</dt>
                                <dd>-$21</dd>
                              </dl>
                              <dl class="tot">
                                <dt>Our Price from</dt>
                                <dd>$508</dd>
                              </dl>
                            </div>
                          </div>
                          <p class="price02">From <span>US <b>$969</b><img src="/izbooking/common/images/tour/rocket.svg" alt=""
                                class="icon"></span></p>
                        </div>
                        <div class="date">
                          <p class="date-count">12 days</p>
                          <p class="date-price">$81 per day</p>
                        </div>
                        <div class="schedule">
                          <p class="schedule01">24 Aug 2018</p>
                          <p class="schedule02">10+ spaces left</p>
                        </div>
                        <div class="btns">
                          <ul>
                            <li><a href="" class="more-tour">View More</a></li>
                            <li><a href="" class="download" target="_blank">Download Itineraries</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="tour">
                  <div class="inner-tour">
                    <p class="sale"><span>-15%;</span></p>
                    <div class="thumbnails">
                      <figure>
                        <img src="/izbooking/common/images/tour/tour04.jpg" alt="" width="244" height="179">
                      </figure>
                      <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d43819.38373351124!2d105.85390682225626!3d21.02070383727981!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x90d6982234a65f25!2sSofitel+Legend+Metropole+Hanoi!5e0!3m2!1svi!2s!4v1543051777046"></iframe>
                      </div>
                      <p class="btn-favorite">&nbsp;</p>
                    </div>
                    <div class="info-tour">
                      <div class="info-txt">
                        <h2 class="tl"><a href="#">Paloma Cruise 3 days/2 nights</a></h2>
                        <div class="rate">
                          <div class="star-rate">
                            <div class="rate-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-half-o"></i>
                            </div>
                          </div>
                          <div class="rate-ponit">
                            <p class="point">9.6</p>
                            <p class="count">123 Reviews - Excellent</p>
                          </div>
                        </div>
                        <p class="txt-cus">"Vietnam Intro was amazing! Went with my bf and got to see so many cool
                          parts of the..."</p>
                        <div class="tour-detail">
                          <ul>
                            <li>
                              <span class="lb">TOUR LINE</span>
                              <span class="desc">Hanoi - Tuan Chau Marina</span>
                            </li>
                            <li>
                              <span class="lb">DURATION</span>
                              <span class="desc">2 Days 1 Night</span>
                            </li>
                            <li>
                              <span class="lb">ACCOMODATION</span>
                              <span class="desc">Berth / Cabin</span>
                            </li>
                            <li>
                              <span class="lb">STARTS/ENDS IN</span>
                              <span class="desc">Hanoi / Hanoi</span>
                            </li>
                            <li>
                              <span class="lb">COUNTRY REGIONS</span>
                              <span class="desc">Northern Vietnam</span>
                            </li>
                            <li>
                              <span class="lb">TRANSPORT</span>
                              <span class="desc">Boat</span>
                            </li>
                            <li><span class="lb">PRODUCT CODE</span><span class="desc">T31APH01</span></li>
                          </ul>
                        </div>
                      </div>
                      <div class="info-schedule-price">
                        <div class="price">
                          <div class="price01">
                            <p>Our saving<span><b>$30</b></span></p>
                            <div class="tooltip">
                              <dl>
                                <dt>Brochure Price</dt>
                                <dd>$529</dd>
                              </dl>
                              <dl>
                                <dt>Save with TourRadar</dt>
                                <dd>-$21</dd>
                              </dl>
                              <dl class="tot">
                                <dt>Our Price from</dt>
                                <dd>$508</dd>
                              </dl>
                            </div>
                          </div>
                          <p class="price02">From <span>US <b>$969</b><img src="/izbooking/common/images/tour/rocket.svg" alt=""
                                class="icon"></span></p>
                        </div>
                        <div class="date">
                          <p class="date-count">12 days</p>
                          <p class="date-price">$81 per day</p>
                        </div>
                        <div class="schedule">
                          <p class="schedule01">24 Aug 2018</p>
                          <p class="schedule02">10+ spaces left</p>
                        </div>
                        <div class="btns">
                          <ul>
                            <li><a href="" class="more-tour">View More</a></li>
                            <li><a href="" class="download" target="_blank">Download Itineraries</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="tour">
                  <div class="inner-tour">
                    <div class="thumbnails">
                      <figure>
                        <img src="/izbooking/common/images/tour/tour05.jpg" alt="" width="244" height="179">
                      </figure>
                      <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d43819.38373351124!2d105.85390682225626!3d21.02070383727981!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x90d6982234a65f25!2sSofitel+Legend+Metropole+Hanoi!5e0!3m2!1svi!2s!4v1543051777046"></iframe>
                      </div>
                      <p class="btn-favorite">&nbsp;</p>
                    </div>
                    <div class="info-tour">
                      <div class="info-txt">
                        <h2 class="tl"><a href="#">Paloma Cruise 3 days/2 nights</a></h2>
                        <div class="rate">
                          <div class="star-rate">
                            <div class="rate-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-half-o"></i>
                            </div>
                          </div>
                          <div class="rate-ponit">
                            <p class="point">9.6</p>
                            <p class="count">123 Reviews - Excellent</p>
                          </div>
                        </div>
                        <p class="txt-cus">"Vietnam Intro was amazing! Went with my bf and got to see so many cool
                          parts of the..."</p>
                        <div class="tour-detail">
                          <ul>
                            <li>
                              <span class="lb">TOUR LINE</span>
                              <span class="desc">Hanoi - Tuan Chau Marina</span>
                            </li>
                            <li>
                              <span class="lb">DURATION</span>
                              <span class="desc">2 Days 1 Night</span>
                            </li>
                            <li>
                              <span class="lb">ACCOMODATION</span>
                              <span class="desc">Berth / Cabin</span>
                            </li>
                            <li>
                              <span class="lb">STARTS/ENDS IN</span>
                              <span class="desc">Hanoi / Hanoi</span>
                            </li>
                            <li>
                              <span class="lb">COUNTRY REGIONS</span>
                              <span class="desc">Northern Vietnam</span>
                            </li>
                            <li>
                              <span class="lb">TRANSPORT</span>
                              <span class="desc">Boat</span>
                            </li>
                            <li><span class="lb">PRODUCT CODE</span><span class="desc">T31APH01</span></li>
                          </ul>
                        </div>
                      </div>
                      <div class="info-schedule-price">
                        <div class="price">
                          <div class="price01">
                            <p>Our saving<span><b>$30</b></span></p>
                            <div class="tooltip">
                              <dl>
                                <dt>Brochure Price</dt>
                                <dd>$529</dd>
                              </dl>
                              <dl>
                                <dt>Save with TourRadar</dt>
                                <dd>-$21</dd>
                              </dl>
                              <dl class="tot">
                                <dt>Our Price from</dt>
                                <dd>$508</dd>
                              </dl>
                            </div>
                          </div>
                          <p class="price02">From <span>US <b>$969</b><img src="/izbooking/common/images/tour/rocket.svg" alt=""
                                class="icon"></span></p>
                        </div>
                        <div class="date">
                          <p class="date-count">12 days</p>
                          <p class="date-price">$81 per day</p>
                        </div>
                        <div class="schedule">
                          <p class="schedule01">24 Aug 2018</p>
                          <p class="schedule02">10+ spaces left</p>
                        </div>
                        <div class="btns">
                          <ul>
                            <li><a href="" class="more-tour">View More</a></li>
                            <li><a href="" class="download" target="_blank">Download Itineraries</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="tour">
                  <div class="inner-tour">
                    <div class="thumbnails">
                      <figure>
                        <img src="/izbooking/common/images/tour/tour06.jpg" alt="" width="244" height="179">
                      </figure>
                      <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d43819.38373351124!2d105.85390682225626!3d21.02070383727981!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x90d6982234a65f25!2sSofitel+Legend+Metropole+Hanoi!5e0!3m2!1svi!2s!4v1543051777046"></iframe>
                      </div>
                      <p class="btn-favorite">&nbsp;</p>
                    </div>
                    <div class="info-tour">
                      <div class="info-txt">
                        <h2 class="tl"><a href="#">Paloma Cruise 3 days/2 nights</a></h2>
                        <div class="rate">
                          <div class="star-rate">
                            <div class="rate-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-half-o"></i>
                            </div>
                          </div>
                          <div class="rate-ponit">
                            <p class="point">9.6</p>
                            <p class="count">123 Reviews - Excellent</p>
                          </div>
                        </div>
                        <p class="txt-cus">"Vietnam Intro was amazing! Went with my bf and got to see so many cool
                          parts of the..."</p>
                        <div class="tour-detail">
                          <ul>
                            <li>
                              <span class="lb">TOUR LINE</span>
                              <span class="desc">Hanoi - Tuan Chau Marina</span>
                            </li>
                            <li>
                              <span class="lb">DURATION</span>
                              <span class="desc">2 Days 1 Night</span>
                            </li>
                            <li>
                              <span class="lb">ACCOMODATION</span>
                              <span class="desc">Berth / Cabin</span>
                            </li>
                            <li>
                              <span class="lb">STARTS/ENDS IN</span>
                              <span class="desc">Hanoi / Hanoi</span>
                            </li>
                            <li>
                              <span class="lb">COUNTRY REGIONS</span>
                              <span class="desc">Northern Vietnam</span>
                            </li>
                            <li>
                              <span class="lb">TRANSPORT</span>
                              <span class="desc">Boat</span>
                            </li>
                            <li><span class="lb">PRODUCT CODE</span><span class="desc">T31APH01</span></li>
                          </ul>
                        </div>
                      </div>
                      <div class="info-schedule-price">
                        <div class="price">
                          <div class="price01">
                            <p>Our saving<span><b>$30</b></span></p>
                            <div class="tooltip">
                              <dl>
                                <dt>Brochure Price</dt>
                                <dd>$529</dd>
                              </dl>
                              <dl>
                                <dt>Save with TourRadar</dt>
                                <dd>-$21</dd>
                              </dl>
                              <dl class="tot">
                                <dt>Our Price from</dt>
                                <dd>$508</dd>
                              </dl>
                            </div>
                          </div>
                          <p class="price02">From <span>US <b>$969</b><img src="/izbooking/common/images/tour/rocket.svg" alt=""
                                class="icon"></span></p>
                        </div>
                        <div class="date">
                          <p class="date-count">12 days</p>
                          <p class="date-price">$81 per day</p>
                        </div>
                        <div class="schedule">
                          <p class="schedule01">24 Aug 2018</p>
                          <p class="schedule02">10+ spaces left</p>
                        </div>
                        <div class="btns">
                          <ul>
                            <li><a href="" class="more-tour">View More</a></li>
                            <li><a href="" class="download" target="_blank">Download Itineraries</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="tour">
                  <div class="inner-tour">
                    <div class="thumbnails">
                      <figure>
                        <img src="/izbooking/common/images/tour/tour07.jpg" alt="" width="244" height="179">
                      </figure>
                      <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d43819.38373351124!2d105.85390682225626!3d21.02070383727981!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x90d6982234a65f25!2sSofitel+Legend+Metropole+Hanoi!5e0!3m2!1svi!2s!4v1543051777046"></iframe>
                      </div>
                      <p class="btn-favorite">&nbsp;</p>
                    </div>
                    <div class="info-tour">
                      <div class="info-txt">
                        <h2 class="tl"><a href="#">Paloma Cruise 3 days/2 nights</a></h2>
                        <div class="rate">
                          <div class="star-rate">
                            <div class="rate-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-half-o"></i>
                            </div>
                          </div>
                          <div class="rate-ponit">
                            <p class="point">9.6</p>
                            <p class="count">123 Reviews - Excellent</p>
                          </div>
                        </div>
                        <p class="txt-cus">"Vietnam Intro was amazing! Went with my bf and got to see so many cool
                          parts of the..."</p>
                        <div class="tour-detail">
                          <ul>
                            <li>
                              <span class="lb">TOUR LINE</span>
                              <span class="desc">Hanoi - Tuan Chau Marina</span>
                            </li>
                            <li>
                              <span class="lb">DURATION</span>
                              <span class="desc">2 Days 1 Night</span>
                            </li>
                            <li>
                              <span class="lb">ACCOMODATION</span>
                              <span class="desc">Berth / Cabin</span>
                            </li>
                            <li>
                              <span class="lb">STARTS/ENDS IN</span>
                              <span class="desc">Hanoi / Hanoi</span>
                            </li>
                            <li>
                              <span class="lb">COUNTRY REGIONS</span>
                              <span class="desc">Northern Vietnam</span>
                            </li>
                            <li>
                              <span class="lb">TRANSPORT</span>
                              <span class="desc">Boat</span>
                            </li>
                            <li><span class="lb">PRODUCT CODE</span><span class="desc">T31APH01</span></li>
                          </ul>
                        </div>
                      </div>
                      <div class="info-schedule-price">
                        <div class="price">
                          <div class="price01">
                            <p>Our saving<span><b>$30</b></span></p>
                            <div class="tooltip">
                              <dl>
                                <dt>Brochure Price</dt>
                                <dd>$529</dd>
                              </dl>
                              <dl>
                                <dt>Save with TourRadar</dt>
                                <dd>-$21</dd>
                              </dl>
                              <dl class="tot">
                                <dt>Our Price from</dt>
                                <dd>$508</dd>
                              </dl>
                            </div>
                          </div>
                          <p class="price02">From <span>US <b>$969</b><img src="/izbooking/common/images/tour/rocket.svg" alt=""
                                class="icon"></span></p>
                        </div>
                        <div class="date">
                          <p class="date-count">12 days</p>
                          <p class="date-price">$81 per day</p>
                        </div>
                        <div class="schedule">
                          <p class="schedule01">24 Aug 2018</p>
                          <p class="schedule02">10+ spaces left</p>
                        </div>
                        <div class="btns">
                          <ul>
                            <li><a href="" class="more-tour">View More</a></li>
                            <li><a href="" class="download" target="_blank">Download Itineraries</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="tour">
                  <div class="inner-tour">
                    <div class="thumbnails">
                      <figure>
                        <img src="/izbooking/common/images/tour/tour08.jpg" alt="" width="244" height="179">
                      </figure>
                      <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d43819.38373351124!2d105.85390682225626!3d21.02070383727981!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x90d6982234a65f25!2sSofitel+Legend+Metropole+Hanoi!5e0!3m2!1svi!2s!4v1543051777046"></iframe>
                      </div>
                      <p class="btn-favorite">&nbsp;</p>
                    </div>
                    <div class="info-tour">
                      <div class="info-txt">
                        <h2 class="tl"><a href="#">Paloma Cruise 3 days/2 nights</a></h2>
                        <div class="rate">
                          <div class="star-rate">
                            <div class="rate-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-half-o"></i>
                            </div>
                          </div>
                          <div class="rate-ponit">
                            <p class="point">9.6</p>
                            <p class="count">123 Reviews - Excellent</p>
                          </div>
                        </div>
                        <p class="txt-cus">"Vietnam Intro was amazing! Went with my bf and got to see so many cool
                          parts of the..."</p>
                        <div class="tour-detail">
                          <ul>
                            <li>
                              <span class="lb">TOUR LINE</span>
                              <span class="desc">Hanoi - Tuan Chau Marina</span>
                            </li>
                            <li>
                              <span class="lb">DURATION</span>
                              <span class="desc">2 Days 1 Night</span>
                            </li>
                            <li>
                              <span class="lb">ACCOMODATION</span>
                              <span class="desc">Berth / Cabin</span>
                            </li>
                            <li>
                              <span class="lb">STARTS/ENDS IN</span>
                              <span class="desc">Hanoi / Hanoi</span>
                            </li>
                            <li>
                              <span class="lb">COUNTRY REGIONS</span>
                              <span class="desc">Northern Vietnam</span>
                            </li>
                            <li>
                              <span class="lb">TRANSPORT</span>
                              <span class="desc">Boat</span>
                            </li>
                            <li><span class="lb">PRODUCT CODE</span><span class="desc">T31APH01</span></li>
                          </ul>
                        </div>
                      </div>
                      <div class="info-schedule-price">
                        <div class="price">
                          <div class="price01">
                            <p>Our saving<span><b>$30</b></span></p>
                            <div class="tooltip">
                              <dl>
                                <dt>Brochure Price</dt>
                                <dd>$529</dd>
                              </dl>
                              <dl>
                                <dt>Save with TourRadar</dt>
                                <dd>-$21</dd>
                              </dl>
                              <dl class="tot">
                                <dt>Our Price from</dt>
                                <dd>$508</dd>
                              </dl>
                            </div>
                          </div>
                          <p class="price02">From <span>US <b>$969</b><img src="/izbooking/common/images/tour/rocket.svg" alt=""
                                class="icon"></span></p>
                        </div>
                        <div class="date">
                          <p class="date-count">12 days</p>
                          <p class="date-price">$81 per day</p>
                        </div>
                        <div class="schedule">
                          <p class="schedule01">24 Aug 2018</p>
                          <p class="schedule02">10+ spaces left</p>
                        </div>
                        <div class="btns">
                          <ul>
                            <li><a href="" class="more-tour">View More</a></li>
                            <li><a href="" class="download" target="_blank">Download Itineraries</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
              <div class="paging-block">
                <ul class="list-pagings">
                  <li class="item"><a href="#" class="active">1</a></li>
                  <li class="item"><a href="#">2</a></li>
                  <li class="item"><a href="#">3</a></li>
                  <li class="item"><a href="#">4</a></li>
                  <li class="item"><a href="#">5</a></li>
                  <li class="item"><a href="#">6</a></li>
                  <li class="item"><a href="#">7</a></li>
                  <li class="item"><a href="#">8</a></li>
                  <li class="item"><a href="#">9</a></li>
                  <li class="item"><a href="#">Next</a></li>
                </ul>
              </div>
            </div>
            <!-- /main-tour -->

          </div>
          <div class="box-section-content">
            <div class="box">
              <h2>Halong Bay Cruise - Why you should choose this</h2>
              <p class="txt">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of
                spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot,
                which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the
                exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing
                a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When,
                while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of
                the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, </p>
            </div>
            <div class="box">
              <h2>Halong Bay Cruise reviews</h2>
              <ul>
                <li>
                  <p class="txt">"When I look back on the best things in my 2009 trip, it was a great adventure and it
                    changed and challenged me. Some of the countries I visited were Iran, India and Tibet which were
                    all amazing. I enjoyed the nights spent in bush camps with campfires and beers and the toiletries
                    were prized possessions. I loved the tour and I am super excited for 2015."</p>
                  <p class="link"><a href="#">London to Sydney Overland Adventure Tour</a></p>
                </li>
                <li>
                  <p class="txt">"When I look back on the best things in my 2009 trip, it was a great adventure and it
                    changed and challenged me. Some of the countries I visited were Iran, India and Tibet which were
                    all amazing. I enjoyed the nights spent in bush camps with campfires and beers and the toiletries
                    were prized possessions. I loved the tour and I am super excited for 2015."</p>
                  <p class="link"><a href="#">London to Sydney Overland Adventure Tour</a></p>
                </li>
                <li>
                  <p class="txt">"When I look back on the best things in my 2009 trip, it was a great adventure and it
                    changed and challenged me. Some of the countries I visited were Iran, India and Tibet which were
                    all amazing. I enjoyed the nights spent in bush camps with campfires and beers and the toiletries
                    were prized possessions. I loved the tour and I am super excited for 2015."</p>
                  <p class="link"><a href="#">London to Sydney Overland Adventure Tour</a></p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include $_SERVER['DOCUMENT_ROOT']."/izbooking/common/inc/footer.php"; ?>
  </div>
  <?php include $_SERVER['DOCUMENT_ROOT']."/izbooking/common/inc/common-js.php"; ?>
  <script src="/izbooking/common/js/tour/index.js"></script>
</body>

</html>