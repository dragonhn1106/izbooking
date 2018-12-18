<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ASIA PACKER TRAVEL</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" href="/izbooking/common/css/ress.min.css">
  <link rel="stylesheet" href="/izbooking/common/css/jquery-datepicker-ui.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
  <link rel="stylesheet" href="/izbooking/common/css/fontawesome.min.css">
  <link rel="stylesheet" href="/izbooking/common/css/slick.css">
  <link rel="stylesheet" href="/izbooking/common/css/main_sp.css">
  <link rel="stylesheet" href="/izbooking/common/css/tour/style_sp.css">
</head>
<body>
  <div class="container">
    <?php include $_SERVER['DOCUMENT_ROOT']."/izbooking/common/inc/header_sp.php"; ?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/izbooking/common/inc/menu-mobile.php"; ?>

    <div class="tour">
      <div class="section-banner">
        <div class="top-banner">
          <div id="top-banner">
            <div class="item">
              <img src="/izbooking/common/images/tour/sp/banner.jpg" alt="" width="1080" height="347">
            </div>
          </div>
        </div>
      </div>
      <div class="pannel-top">
        <div class="wrap">
          <ul class="list-pannel-top">
            <li class="item">
              <a href="" class="active">
                Halong Bay Cruise
              </a>
            </li>
            <li class="item">
              <a href="">
                Hanoi Tours
              </a>
            </li>
            <li class="item">
              <a href="">
                Sapa Tours
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="section-content">
        <div class="wrap">
          <p class="review-count">300+ Halong Hotels with 999 reviews</p>
          <form action="" method="" name="formFilter" id="formFilter">
            <div class="filter-sort">
              <div class="btn-form filter-box" data-box="filter-popup">
                Filter by
              </div>
              <div class="btn-form sortby-box" data-box="sort-select">
                Sort: <span>Popularity</span>
              </div>
              <div class="popup">
                <div id="filter-popup" class="popup-cont">
                  <div class="inner-popup">
                    <div class="block-filter-by">
                      <div class="wrap">
                        <div class="box-toggle">
                          <p class="toggle-tl">Regions</p>
                          <div class="toggle-cont region">
                            <ul class="list-label">
                              <li class="item">
                                <input type="checkbox" name="regions" id="region-01" class="regions_btn">
                                <label for="region-01" class="lb-01">Southern Vietnam (20)</label>
                              </li>
                              <li class="item">
                                <input type="checkbox" name="regions" id="region-02" class="regions_btn">
                                <label for="region-02" class="lb-01">Red River Delta (40)</label>
                              </li>
                              <li class="item">
                                <input type="checkbox" name="regions" id="region-03" class="regions_btn">
                                <label for="region-03" class="lb-01">Halong Bay (10)</label>
                              </li>
                              <li class="item">
                                <input type="checkbox" name="regions" id="region-04" class="regions_btn">
                                <label for="region-04" class="lb-01">Northern Vietnam (22)</label>
                              </li>
                              <li class="item">
                                <input type="checkbox" name="regions" id="region-05" class="regions_btn">
                                <label for="region-05" class="lb-01">Northwest Vietnam (25)</label>
                              </li>
                              <li class="item">
                                <input type="checkbox" name="regions" id="region-06" class="regions_btn">
                                <label for="region-06" class="lb-01">Northeast Vietnam (11)</label>
                              </li>
                              <li class="item">
                                <input type="checkbox" name="regions" id="region-07" class="regions_btn">
                                <label for="region-07" class="lb-01">Northwest Vietnam (25)</label>
                              </li>
                              <li class="item">
                                <input type="checkbox" name="regions" id="region-08" class="regions_btn">
                                <label for="region-08" class="lb-01">Northeast Vietnam (11)</label>
                              </li>
                            </ul>
                            <div class="btn-show-more">
                              <a href="">Show more</a>
                            </div>
                          </div>
                        </div>
                        <div class="box-toggle">
                          <p class="toggle-tl">Start & ending city</p>
                          <div class="toggle-cont">
                            <div class="start-end">
                              <div class="sr-city start-city">
                                <!-- <input type="text" name="start-city" class="search-city filter-place-search" id="start" placeholder="Starting city"> -->
                                <select name="start-city" id="name" class="search-city filter-place-search" placeholder="Starting city">
                                  <option value="">Starting city</option>
                                  <option value="Hoi An">Hoi An</option>
                                  <option value="Sapa">Sapa</option>
                                  <option value="Ha Noi">Ha Noi</option>
                                </select>
                                <label for="start" class="lb-02"><i class="fa fa-search"></i></label>
                              </div>
                              <div class="sr-city end-city">
                                <!-- <input type="text" name="end-city" class="search-city filter-place-search" id="end" placeholder="Ending city"> -->
                                <select name="end-city" id="end" class="search-city filter-place-search" placeholder="Ending city">
                                  <option value="">Ending city</option>
                                  <option value="Hoi An">Hoi An</option>
                                  <option value="Sapa">Sapa</option>
                                  <option value="Ha Noi">Ha Noi</option>
                                </select>
                                <label for="end" class="lb-02"><i class="fa fa-search"></i></label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="box-toggle duration">
                          <p class="toggle-tl">Duration</p>
                          <div class="toggle-cont">
                            <div class="box-range">
                              <p class="txt-val"><span id="dayMin"></span><span id="dayMax"></span></p>
                              <div class="box-inner">
                                <p class="range range-day" id="range-day">&nbsp;</p>
                                <input type="hidden" name="txtDay" id="txtDay">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="box-toggle">
                          <p class="toggle-tl">Departure date</p>
                          <div class="toggle-cont">
                            <div class="form-group select-icon select-calendar">
                              <input type="text" name="accommodation_date" id="accommodation_date" class="form-control datepicker" data-format="MM dd, yy" placeholder="August, 18 2018" data-placeholder="Select a specific date" readonly="readonly">
                            </div>
                          </div>
                        </div>
                        <div class="box-toggle duration">
                          <p class="toggle-tl">Budget</p>
                          <div class="toggle-cont">
                            <div class="box-range">
                              <p class="txt-val"><span id="priceMin"></span><span id="priceMax"></span></p>
                              <div class="box-inner">
                                <p class="range range-price" id="range-price">&nbsp;</p>
                                <input type="hidden" name="txtPrice" id="txtPrice">
                              </div>
                            </div>
                            <p class="ttl">Price per day</p>
                            <div class="box-range">
                              <p class="txt-val"><span id="price02Min"></span><span id="price02Max"></span></p>
                              <div class="box-inner">
                                <p class="range range-price02" id="range-price02">&nbsp;</p>
                                <input type="hidden" name="txtPrice02" id="txtPrice02">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="box-toggle">
                          <p class="toggle-tl">Accommodation</p>
                          <div class="toggle-cont accommodation">
                            <ul class="list-label">
                              <li class="item">
                                <input type="checkbox" name="accommodation" id="accommodation-01">
                                <label for="accommodation-01" class="lb-01"><i class="fa fa-close"></i>Hotel (20)</label>
                              </li>
                              <li class="item">
                                <input type="checkbox" name="accommodation" id="accommodation-02">
                                <label for="accommodation-02" class="lb-01"><i class="fa fa-close"></i>Hostel (40)</label>
                              </li>
                              <li class="item">
                                <input type="checkbox" name="accommodation" id="accommodation-03">
                                <label for="accommodation-03" class="lb-01"><i class="fa fa-close"></i>Lodge (25)</label>
                              </li>
                              <li class="item">
                                <input type="checkbox" name="accommodation" id="accommodation-04">
                                <label for="accommodation-04" class="lb-01"><i class="fa fa-close"></i>Home-stay (22)</label>
                              </li>
                              <li class="item">
                                <input type="checkbox" name="accommodation" id="accommodation-05">
                                <label for="accommodation-05" class="lb-01"><i class="fa fa-close"></i>Bungalow (25)</label>
                              </li>
                              <li class="item">
                                <input type="checkbox" name="accommodation" id="accommodation-06">
                                <label for="accommodation-06" class="lb-01"><i class="fa fa-close"></i>Resort (25)</label>
                              </li>
                              <li class="item">
                                <input type="checkbox" name="accommodation" id="accommodation-07">
                                <label for="accommodation-07" class="lb-01"><i class="fa fa-close"></i>Guesthouse (11)</label>
                              </li>
                              <li class="item">
                                <input type="checkbox" name="accommodation" id="accommodation-08">
                                <label for="accommodation-08" class="lb-01"><i class="fa fa-close"></i>Resort (25)</label>
                              </li>
                              <li class="item">
                                <input type="checkbox" name="accommodation" id="accommodation-09">
                                <label for="accommodation-09" class="lb-01"><i class="fa fa-close"></i>Guesthouse (11)</label>
                              </li>
                            </ul>
                            <div class="btn-show-more">
                              <a href="">Show more</a>
                            </div>
                          </div>
                        </div>
                        <div class="box-toggle">
                          <p class="toggle-tl">Must see countries</p>
                          <div class="toggle-cont">
                            <div class="box-search">
                              <div class="search">
                                <!-- <input type="text" name="search" class="search-ipt filter-place-search" id="search" placeholder="Search"> -->
                                <select name="search" id="search" class="search-ipt filter-place-search" placeholder="Search">
                                  <option value="">Search</option>
                                  <option value="Hoi An">Hoi An</option>
                                  <option value="Sapa">Sapa</option>
                                  <option value="Ha Noi">Ha Noi</option>
                                </select>
                                <label for="search" class="lb-02"><i class="fa fa-search"></i></label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="box-toggle">
                          <p class="toggle-tl">Travel style</p>
                          <div class="toggle-cont travel">
                            <ul class="list-label">
                              <li class="item">
                                <input type="checkbox" name="travel" id="travel-01">
                                <label for="travel-01" class="lb-01"><i class="fa fa-close"></i>Hotel (20)</label>
                              </li>
                              <li class="item">
                                <input type="checkbox" name="travel" id="travel-02">
                                <label for="travel-02" class="lb-01"><i class="fa fa-close"></i>Hostel (40)</label>
                              </li>
                              <li class="item">
                                <input type="checkbox" name="travel" id="travel-03">
                                <label for="travel-03" class="lb-01"><i class="fa fa-close"></i>Lodge (25)</label>
                              </li>
                              <li class="item">
                                <input type="checkbox" name="travel" id="travel-04">
                                <label for="travel-04" class="lb-01"><i class="fa fa-close"></i>Home-stay (22)</label>
                              </li>
                              <li class="item">
                                <input type="checkbox" name="travel" id="travel-05">
                                <label for="travel-05" class="lb-01"><i class="fa fa-close"></i>Bungalow (25)</label>
                              </li>
                              <li class="item">
                                <input type="checkbox" name="travel" id="travel-06">
                                <label for="travel-06" class="lb-01"><i class="fa fa-close"></i>Resort (25)</label>
                              </li>
                              <li class="item">
                                <input type="checkbox" name="travel" id="travel-07">
                                <label for="travel-07" class="lb-01"><i class="fa fa-close"></i>Guesthouse (11)</label>
                              </li>
                              <li class="item">
                                <input type="checkbox" name="travel" id="travel-08">
                                <label for="travel-08" class="lb-01"><i class="fa fa-close"></i>Resort (25)</label>
                              </li>
                              <li class="item">
                                <input type="checkbox" name="travel" id="travel-09">
                                <label for="travel-09" class="lb-01"><i class="fa fa-close"></i>Guesthouse (11)</label>
                              </li>
                            </ul>
                            <div class="btn-show-more">
                              <a href="">Show more</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="box-results">
                        <button type="button" class="result">See results</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="sort-select" class="popup-cont sort-popup">
                  <div class="mask"></div>
                  <div class="inner-popup">
                    <p class="text">Sort by:</p>
                    <ul class="list-radio">
                      <li class="item">
                        <input type="radio" name="sort_by" id="sortby_popularity" value="Popularity" checked="checked">
                        <label for="sortby_popularity">Popularity</label>
                      </li>
                      <li class="item">
                        <input type="radio" name="sort_by" id="sortby_reviews" value="Reviews">
                        <label for="sortby_reviews">Reviews</label>
                      </li>
                      <li class="item">
                        <input type="radio" name="sort_by" id="sortby_lowest_price" value="Lowest Price">
                        <label for="sortby_lowest_price">Lowest Price</label>
                      </li>
                      <li class="item">
                        <input type="radio" name="sort_by" id="sortby_highest_price" value="Highest Price">
                        <label for="sortby_highest_price">Highest Price</label>
                      </li>
                      <li class="item">
                        <input type="radio" name="sort_by" id="sortby_duration" value="Duration">
                        <label for="sortby_duration">Duration</label>
                      </li>
                      <li class="item">
                        <input type="radio" name="sort_by" id="sortby_biggest_deals" value="Biggest Deals">
                        <label for="sortby_biggest_deals">Biggest Deals</label>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </form>

          <div class="main-tour">
            <ul class="list-tours">
              <li class="tour">
                <figure class="thumbnail">
                  <img src="/izbooking/common/images/tour/sp/img_01_sp.jpg" alt="" width="1012" height="743">
                  <p class="btn-favorite">&nbsp;</p>
                </figure>
                <div class="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d43819.38373351124!2d105.85390682225626!3d21.02070383727981!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x90d6982234a65f25!2sSofitel+Legend+Metropole+Hanoi!5e0!3m2!1svi!2s!4v1543051777046"></iframe>
                </div>
                <div class="info">
                  <div class="info-text">
                    <p class="meta-title">Paloma Cruise 3 days/2 nights</p>
                    <div class="meta-01">
                      <span class="deal-star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                      </span>
                      <span class="point">9.6</span>
                      <span class="review-text">123 Reviews - Excellent</span>
                    </div>
                    <div class="meta-02">"Vietnam Intro was amazing! Went with my bf and got to see so many cool parts of the..."</div>
                    <ul class="meta-03">
                      <li><span>TOUR LINE</span><p class="more">Hanoi - Tuan Chau Marina<a href="" class="link-more">more</a></p></li>
                      <li><span>DURATION</span><p>2 Days 1 Night</p></li>
                      <li><span>ACCOMODATION</span><p>Berth / Cabin</p></li>
                      <li><span>STARTS/ENDS IN</span><p>Hanoi / Hanoi</p></li>
                      <li><span>COUNTRY REGIONS</span><p>Northern Vietnam</p></li>
                      <li><span>TRANSPORT</span><p>Boat</p></li>
                      <li><span>PRODUCT CODE</span><p>T31APH01</p></li>
                    </ul>
                    <ul class="meta-04">
                      <li>
                        <p class="lead">Days</p>
                        <p class="val">9</p>
                      </li>
                      <li>
                        <p class="lead">Our saving</p>
                        <p class="val">$30</p>
                      </li>
                      <li>
                        <p class="lead">From</p>
                        <p class="val">US <span class="red">$888</span> pp</p>
                        <p class="val">US <span>$999</span> pp</p>
                      </li>
                    </ul>
                    <ul class="meta-05">
                      <li>
                        <span class="date">24 Aug 2018</span>
                        <span class="val">10+ spaces left</span>
                      </li>
                      <li>
                        <span class="date">24 Aug 2018</span>
                        <span class="val">10+ spaces left</span>
                      </li>
                    </ul>
                    <div class="action">
                      <a href="" class="btn-sp st01">View More</a>
                      <a href="" class="btn-sp st02">Download Itineraries</a>
                    </div>
                  </div>
                  <div class="toggle">
                    <a href="" class="toggle-btn"></a>
                  </div>
                </div>
              </li>
              <li class="tour">
                <figure class="thumbnail">
                  <img src="/izbooking/common/images/tour/sp/img_02_sp.jpg" alt="" width="1012" height="743">
                  <p class="btn-favorite">&nbsp;</p>
                </figure>
                <div class="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d43819.38373351124!2d105.85390682225626!3d21.02070383727981!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x90d6982234a65f25!2sSofitel+Legend+Metropole+Hanoi!5e0!3m2!1svi!2s!4v1543051777046"></iframe>
                </div>
                <div class="info">
                  <div class="info-text">
                    <p class="meta-title">Paloma Cruise 3 days/2 nights</p>
                    <div class="meta-01">
                      <span class="deal-star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                      </span>
                      <span class="point">9.6</span>
                      <span class="review-text">123 Reviews - Excellent</span>
                    </div>
                    <div class="meta-02">"Vietnam Intro was amazing! Went with my bf and got to see so many cool parts of the..."</div>
                    <ul class="meta-03">
                      <li><span>TOUR LINE</span><p class="more">Hanoi - Tuan Chau Marina<a href="" class="link-more">more</a></p></li>
                      <li><span>DURATION</span><p>2 Days 1 Night</p></li>
                      <li><span>ACCOMODATION</span><p>Berth / Cabin</p></li>
                      <li><span>STARTS/ENDS IN</span><p>Hanoi / Hanoi</p></li>
                      <li><span>COUNTRY REGIONS</span><p>Northern Vietnam</p></li>
                      <li><span>TRANSPORT</span><p>Boat</p></li>
                      <li><span>PRODUCT CODE</span><p>T31APH01</p></li>
                    </ul>
                    <ul class="meta-04">
                      <li>
                        <p class="lead">Days</p>
                        <p class="val">9</p>
                      </li>
                      <li>
                        <p class="lead">Our saving</p>
                        <p class="val">$30</p>
                      </li>
                      <li>
                        <p class="lead">From</p>
                        <p class="val">US <span class="red">$888</span> pp</p>
                        <p class="val">US <span>$999</span> pp</p>
                      </li>
                    </ul>
                    <ul class="meta-05">
                      <li>
                        <span class="date">24 Aug 2018</span>
                        <span class="val">10+ spaces left</span>
                      </li>
                      <li>
                        <span class="date">24 Aug 2018</span>
                        <span class="val">10+ spaces left</span>
                      </li>
                    </ul>
                    <div class="action">
                      <a href="" class="btn-sp st01">View More</a>
                      <a href="" class="btn-sp st02">Download Itineraries</a>
                    </div>
                  </div>
                  <div class="toggle">
                    <a href="" class="toggle-btn"></a>
                  </div>
                </div>
              </li>
              <li class="tour">
                <figure class="thumbnail">
                  <img src="/izbooking/common/images/tour/sp/img_03_sp.jpg" alt="" width="1012" height="743">
                  <p class="btn-favorite">&nbsp;</p>
                </figure>
                <div class="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d43819.38373351124!2d105.85390682225626!3d21.02070383727981!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x90d6982234a65f25!2sSofitel+Legend+Metropole+Hanoi!5e0!3m2!1svi!2s!4v1543051777046"></iframe>
                </div>
                <div class="info">
                  <div class="info-text">
                    <p class="meta-title">Paloma Cruise 3 days/2 nights</p>
                    <div class="meta-01">
                      <span class="deal-star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                      </span>
                      <span class="point">9.6</span>
                      <span class="review-text">123 Reviews - Excellent</span>
                    </div>
                    <div class="meta-02">"Vietnam Intro was amazing! Went with my bf and got to see so many cool parts of the..."</div>
                    <ul class="meta-03">
                      <li><span>TOUR LINE</span><p class="more">Hanoi - Tuan Chau Marina<a href="" class="link-more">more</a></p></li>
                      <li><span>DURATION</span><p>2 Days 1 Night</p></li>
                      <li><span>ACCOMODATION</span><p>Berth / Cabin</p></li>
                      <li><span>STARTS/ENDS IN</span><p>Hanoi / Hanoi</p></li>
                      <li><span>COUNTRY REGIONS</span><p>Northern Vietnam</p></li>
                      <li><span>TRANSPORT</span><p>Boat</p></li>
                      <li><span>PRODUCT CODE</span><p>T31APH01</p></li>
                    </ul>
                    <ul class="meta-04">
                      <li>
                        <p class="lead">Days</p>
                        <p class="val">9</p>
                      </li>
                      <li>
                        <p class="lead">Our saving</p>
                        <p class="val">$30</p>
                      </li>
                      <li>
                        <p class="lead">From</p>
                        <p class="val">US <span class="red">$888</span> pp</p>
                        <p class="val">US <span>$999</span> pp</p>
                      </li>
                    </ul>
                    <ul class="meta-05">
                      <li>
                        <span class="date">24 Aug 2018</span>
                        <span class="val">10+ spaces left</span>
                      </li>
                      <li>
                        <span class="date">24 Aug 2018</span>
                        <span class="val">10+ spaces left</span>
                      </li>
                    </ul>
                    <div class="action">
                      <a href="" class="btn-sp st01">View More</a>
                      <a href="" class="btn-sp st02">Download Itineraries</a>
                    </div>
                  </div>
                  <div class="toggle">
                    <a href="" class="toggle-btn"></a>
                  </div>
                </div>
              </li>
              <li class="tour">
                <figure class="thumbnail">
                  <img src="/izbooking/common/images/tour/sp/img_04_sp.jpg" alt="" width="1012" height="743">
                  <p class="btn-favorite">&nbsp;</p>
                </figure>
                <div class="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d43819.38373351124!2d105.85390682225626!3d21.02070383727981!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x90d6982234a65f25!2sSofitel+Legend+Metropole+Hanoi!5e0!3m2!1svi!2s!4v1543051777046"></iframe>
                </div>
                <div class="info">
                  <div class="info-text">
                    <p class="meta-title">Paloma Cruise 3 days/2 nights</p>
                    <div class="meta-01">
                      <span class="deal-star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                      </span>
                      <span class="point">9.6</span>
                      <span class="review-text">123 Reviews - Excellent</span>
                    </div>
                    <div class="meta-02">"Vietnam Intro was amazing! Went with my bf and got to see so many cool parts of the..."</div>
                    <ul class="meta-03">
                      <li><span>TOUR LINE</span><p class="more">Hanoi - Tuan Chau Marina<a href="" class="link-more">more</a></p></li>
                      <li><span>DURATION</span><p>2 Days 1 Night</p></li>
                      <li><span>ACCOMODATION</span><p>Berth / Cabin</p></li>
                      <li><span>STARTS/ENDS IN</span><p>Hanoi / Hanoi</p></li>
                      <li><span>COUNTRY REGIONS</span><p>Northern Vietnam</p></li>
                      <li><span>TRANSPORT</span><p>Boat</p></li>
                      <li><span>PRODUCT CODE</span><p>T31APH01</p></li>
                    </ul>
                    <ul class="meta-04">
                      <li>
                        <p class="lead">Days</p>
                        <p class="val">9</p>
                      </li>
                      <li>
                        <p class="lead">Our saving</p>
                        <p class="val">$30</p>
                      </li>
                      <li>
                        <p class="lead">From</p>
                        <p class="val">US <span class="red">$888</span> pp</p>
                        <p class="val">US <span>$999</span> pp</p>
                      </li>
                    </ul>
                    <ul class="meta-05">
                      <li>
                        <span class="date">24 Aug 2018</span>
                        <span class="val">10+ spaces left</span>
                      </li>
                      <li>
                        <span class="date">24 Aug 2018</span>
                        <span class="val">10+ spaces left</span>
                      </li>
                    </ul>
                    <div class="action">
                      <a href="" class="btn-sp st01">View More</a>
                      <a href="" class="btn-sp st02">Download Itineraries</a>
                    </div>
                  </div>
                  <div class="toggle">
                    <a href="" class="toggle-btn"></a>
                  </div>
                </div>
              </li>
              <li class="tour">
                <figure class="thumbnail">
                  <img src="/izbooking/common/images/tour/sp/img_05_sp.jpg" alt="" width="1012" height="743">
                  <p class="btn-favorite">&nbsp;</p>
                </figure>
                <div class="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d43819.38373351124!2d105.85390682225626!3d21.02070383727981!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x90d6982234a65f25!2sSofitel+Legend+Metropole+Hanoi!5e0!3m2!1svi!2s!4v1543051777046"></iframe>
                </div>
                <div class="info">
                  <div class="info-text">
                    <p class="meta-title">Paloma Cruise 3 days/2 nights</p>
                    <div class="meta-01">
                      <span class="deal-star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                      </span>
                      <span class="point">9.6</span>
                      <span class="review-text">123 Reviews - Excellent</span>
                    </div>
                    <div class="meta-02">"Vietnam Intro was amazing! Went with my bf and got to see so many cool parts of the..."</div>
                    <ul class="meta-03">
                      <li><span>TOUR LINE</span><p class="more">Hanoi - Tuan Chau Marina<a href="" class="link-more">more</a></p></li>
                      <li><span>DURATION</span><p>2 Days 1 Night</p></li>
                      <li><span>ACCOMODATION</span><p>Berth / Cabin</p></li>
                      <li><span>STARTS/ENDS IN</span><p>Hanoi / Hanoi</p></li>
                      <li><span>COUNTRY REGIONS</span><p>Northern Vietnam</p></li>
                      <li><span>TRANSPORT</span><p>Boat</p></li>
                      <li><span>PRODUCT CODE</span><p>T31APH01</p></li>
                    </ul>
                    <ul class="meta-04">
                      <li>
                        <p class="lead">Days</p>
                        <p class="val">9</p>
                      </li>
                      <li>
                        <p class="lead">Our saving</p>
                        <p class="val">$30</p>
                      </li>
                      <li>
                        <p class="lead">From</p>
                        <p class="val">US <span class="red">$888</span> pp</p>
                        <p class="val">US <span>$999</span> pp</p>
                      </li>
                    </ul>
                    <ul class="meta-05">
                      <li>
                        <span class="date">24 Aug 2018</span>
                        <span class="val">10+ spaces left</span>
                      </li>
                      <li>
                        <span class="date">24 Aug 2018</span>
                        <span class="val">10+ spaces left</span>
                      </li>
                    </ul>
                    <div class="action">
                      <a href="" class="btn-sp st01">View More</a>
                      <a href="" class="btn-sp st02">Download Itineraries</a>
                    </div>
                  </div>
                  <div class="toggle">
                    <a href="" class="toggle-btn"></a>
                  </div>
                </div>
              </li>
              <li class="tour">
                <figure class="thumbnail">
                  <img src="/izbooking/common/images/tour/sp/img_06_sp.jpg" alt="" width="1012" height="743">
                  <p class="btn-favorite">&nbsp;</p>
                </figure>
                <div class="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d43819.38373351124!2d105.85390682225626!3d21.02070383727981!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x90d6982234a65f25!2sSofitel+Legend+Metropole+Hanoi!5e0!3m2!1svi!2s!4v1543051777046"></iframe>
                </div>
                <div class="info">
                  <div class="info-text">
                    <p class="meta-title">Paloma Cruise 3 days/2 nights</p>
                    <div class="meta-01">
                      <span class="deal-star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                      </span>
                      <span class="point">9.6</span>
                      <span class="review-text">123 Reviews - Excellent</span>
                    </div>
                    <div class="meta-02">"Vietnam Intro was amazing! Went with my bf and got to see so many cool parts of the..."</div>
                    <ul class="meta-03">
                      <li><span>TOUR LINE</span><p class="more">Hanoi - Tuan Chau Marina<a href="" class="link-more">more</a></p></li>
                      <li><span>DURATION</span><p>2 Days 1 Night</p></li>
                      <li><span>ACCOMODATION</span><p>Berth / Cabin</p></li>
                      <li><span>STARTS/ENDS IN</span><p>Hanoi / Hanoi</p></li>
                      <li><span>COUNTRY REGIONS</span><p>Northern Vietnam</p></li>
                      <li><span>TRANSPORT</span><p>Boat</p></li>
                      <li><span>PRODUCT CODE</span><p>T31APH01</p></li>
                    </ul>
                    <ul class="meta-04">
                      <li>
                        <p class="lead">Days</p>
                        <p class="val">9</p>
                      </li>
                      <li>
                        <p class="lead">Our saving</p>
                        <p class="val">$30</p>
                      </li>
                      <li>
                        <p class="lead">From</p>
                        <p class="val">US <span class="red">$888</span> pp</p>
                        <p class="val">US <span>$999</span> pp</p>
                      </li>
                    </ul>
                    <ul class="meta-05">
                      <li>
                        <span class="date">24 Aug 2018</span>
                        <span class="val">10+ spaces left</span>
                      </li>
                      <li>
                        <span class="date">24 Aug 2018</span>
                        <span class="val">10+ spaces left</span>
                      </li>
                    </ul>
                    <div class="action">
                      <a href="" class="btn-sp st01">View More</a>
                      <a href="" class="btn-sp st02">Download Itineraries</a>
                    </div>
                  </div>
                  <div class="toggle">
                    <a href="" class="toggle-btn"></a>
                  </div>
                </div>
              </li>
              <li class="tour">
                <figure class="thumbnail">
                  <img src="/izbooking/common/images/tour/sp/img_07_sp.jpg" alt="" width="1012" height="743">
                  <p class="btn-favorite">&nbsp;</p>
                </figure>
                <div class="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d43819.38373351124!2d105.85390682225626!3d21.02070383727981!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x90d6982234a65f25!2sSofitel+Legend+Metropole+Hanoi!5e0!3m2!1svi!2s!4v1543051777046"></iframe>
                </div>
                <div class="info">
                  <div class="info-text">
                    <p class="meta-title">Paloma Cruise 3 days/2 nights</p>
                    <div class="meta-01">
                      <span class="deal-star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                      </span>
                      <span class="point">9.6</span>
                      <span class="review-text">123 Reviews - Excellent</span>
                    </div>
                    <div class="meta-02">"Vietnam Intro was amazing! Went with my bf and got to see so many cool parts of the..."</div>
                    <ul class="meta-03">
                      <li><span>TOUR LINE</span><p class="more">Hanoi - Tuan Chau Marina<a href="" class="link-more">more</a></p></li>
                      <li><span>DURATION</span><p>2 Days 1 Night</p></li>
                      <li><span>ACCOMODATION</span><p>Berth / Cabin</p></li>
                      <li><span>STARTS/ENDS IN</span><p>Hanoi / Hanoi</p></li>
                      <li><span>COUNTRY REGIONS</span><p>Northern Vietnam</p></li>
                      <li><span>TRANSPORT</span><p>Boat</p></li>
                      <li><span>PRODUCT CODE</span><p>T31APH01</p></li>
                    </ul>
                    <ul class="meta-04">
                      <li>
                        <p class="lead">Days</p>
                        <p class="val">9</p>
                      </li>
                      <li>
                        <p class="lead">Our saving</p>
                        <p class="val">$30</p>
                      </li>
                      <li>
                        <p class="lead">From</p>
                        <p class="val">US <span class="red">$888</span> pp</p>
                        <p class="val">US <span>$999</span> pp</p>
                      </li>
                    </ul>
                    <ul class="meta-05">
                      <li>
                        <span class="date">24 Aug 2018</span>
                        <span class="val">10+ spaces left</span>
                      </li>
                      <li>
                        <span class="date">24 Aug 2018</span>
                        <span class="val">10+ spaces left</span>
                      </li>
                    </ul>
                    <div class="action">
                      <a href="" class="btn-sp st01">View More</a>
                      <a href="" class="btn-sp st02">Download Itineraries</a>
                    </div>
                  </div>
                  <div class="toggle">
                    <a href="" class="toggle-btn"></a>
                  </div>
                </div>
              </li>
              <li class="tour">
                <figure class="thumbnail">
                  <img src="/izbooking/common/images/tour/sp/img_08_sp.jpg" alt="" width="1012" height="743">
                  <p class="btn-favorite">&nbsp;</p>
                </figure>
                <div class="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d43819.38373351124!2d105.85390682225626!3d21.02070383727981!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x90d6982234a65f25!2sSofitel+Legend+Metropole+Hanoi!5e0!3m2!1svi!2s!4v1543051777046"></iframe>
                </div>
                <div class="info">
                  <div class="info-text">
                    <p class="meta-title">Paloma Cruise 3 days/2 nights</p>
                    <div class="meta-01">
                      <span class="deal-star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                      </span>
                      <span class="point">9.6</span>
                      <span class="review-text">123 Reviews - Excellent</span>
                    </div>
                    <div class="meta-02">"Vietnam Intro was amazing! Went with my bf and got to see so many cool parts of the..."</div>
                    <ul class="meta-03">
                      <li><span>TOUR LINE</span><p class="more">Hanoi - Tuan Chau Marina<a href="" class="link-more">more</a></p></li>
                      <li><span>DURATION</span><p>2 Days 1 Night</p></li>
                      <li><span>ACCOMODATION</span><p>Berth / Cabin</p></li>
                      <li><span>STARTS/ENDS IN</span><p>Hanoi / Hanoi</p></li>
                      <li><span>COUNTRY REGIONS</span><p>Northern Vietnam</p></li>
                      <li><span>TRANSPORT</span><p>Boat</p></li>
                      <li><span>PRODUCT CODE</span><p>T31APH01</p></li>
                    </ul>
                    <ul class="meta-04">
                      <li>
                        <p class="lead">Days</p>
                        <p class="val">9</p>
                      </li>
                      <li>
                        <p class="lead">Our saving</p>
                        <p class="val">$30</p>
                      </li>
                      <li>
                        <p class="lead">From</p>
                        <p class="val">US <span class="red">$888</span> pp</p>
                        <p class="val">US <span>$999</span> pp</p>
                      </li>
                    </ul>
                    <ul class="meta-05">
                      <li>
                        <span class="date">24 Aug 2018</span>
                        <span class="val">10+ spaces left</span>
                      </li>
                      <li>
                        <span class="date">24 Aug 2018</span>
                        <span class="val">10+ spaces left</span>
                      </li>
                    </ul>
                    <div class="action">
                      <a href="" class="btn-sp st01">View More</a>
                      <a href="" class="btn-sp st02">Download Itineraries</a>
                    </div>
                  </div>
                  <div class="toggle">
                    <a href="" class="toggle-btn"></a>
                  </div>
                </div>
              </li>
            </ul>
            <div class="paging-block">
              <ul class="list-pagings">
                <li class="item"><a href="#" class="prev"></a></li>
                <li class="item"><a href="">1</a></li>
                <li class="item"><a href="#">2</a></li>
                <li class="item"><span class="current">3</span></li>
                <li class="item"><a href="#">4</a></li>
                <li class="item"><a href="#">...</a></li>
                <li class="item"><a href="#">20</a></li>
                <li class="item"><a href="#" class="next"></a></li>
              </ul>
            </div>
          </div>
          <div class="widget widget-link">
            <h3 class="widget-ttl">Hot Deals</h3>
            <div class="widget-content">
              <ul class="list-item-01">
                <li><a href="">La Pinta Cruise 2 days 1 night</a></li>
                <li><a href="">Discover vietnam northern in 9 days</a></li>
                <li><a href="">Thailand bangkok nature in 17 days</a></li>
              </ul>
            </div>
          </div>
          <div class="widget widget-link">
            <div class="widget-content">
              <ul class="list-item-01">
                <li><a href="">See all best Vietnam Tours 2018</a></li>
                <li><a href="">See all top destinations in Vietnam 2018</a></li>
                <li><a href="">Thailand Packages Tours & Trips 2018</a></li>
              </ul>
            </div>
          </div>
          <div class="box-section-content">
            <div class="box">
              <h3>Halong Bay Cruise - Why choose us</h3>
              <p class="txt">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary.</p>
            </div>
            <div class="box">
              <h3>Halong Bay Cruises reviews</h3>
              <ul>
                <li>
                  <p class="txt">"When I look back on the best things in my 2009 trip, it was a great adventure and it changed and challenged me. Some of the countries I visited were Iran, India and Tibet which were all amazing. I enjoyed the nights spent in bush camps with campfires and beers and the toiletries were prized possessions. I loved the tour and I am super excited for 2015."<a href="#">London to Sydney Overland Adventure Tour</a></p>
                </li>
                <li>
                  <p class="txt">"When I look back on the best things in my 2009 trip, it was a great adventure and it changed and challenged me. Some of the countries I visited were Iran, India and Tibet which were all amazing. I enjoyed the nights spent in bush camps with campfires and beers and the toiletries were prized possessions. I loved the tour and I am super excited for 2015."<a href="#">London to Sydney Overland Adventure Tour</a></p>
                </li>
                <li>
                  <p class="txt">"When I look back on the best things in my 2009 trip, it was a great adventure and it changed and challenged me. Some of the countries I visited were Iran, India and Tibet which were all amazing. I enjoyed the nights spent in bush camps with campfires and beers and the toiletries were prized possessions. I loved the tour and I am super excited for 2015."<a href="#">London to Sydney Overland Adventure Tour</a></p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <?php include $_SERVER['DOCUMENT_ROOT']."/izbooking/common/inc/footer_sp.php"; ?>
  </div>
  <?php include $_SERVER['DOCUMENT_ROOT']."/izbooking/common/inc/common-js-sp.php"; ?>
  <script src="/izbooking/common/js/tour/index_sp.js"></script>
  <script src="/izbooking/common/js/filter.js"></script>
</body>
</html>