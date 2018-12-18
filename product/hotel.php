<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Product detail - ASIA PACKER TRAVEL</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" href="/izbooking/common/css/ress.min.css">
	<link rel="stylesheet" href="/izbooking/common/css/jquery-datepicker-ui.min.css">
	<link rel="stylesheet" href="/izbooking/common/css/fontawesome.min.css">
  <link rel="stylesheet" href="/izbooking/common/css/magnific-popup.css">
  <link rel="stylesheet" href="/izbooking/common/css/slick.css">
  <link rel="stylesheet" href="/izbooking/common/css/main.css">
	<link rel="stylesheet" href="/izbooking/common/css/product/style.css">
</head>
<body>
	<div class="container">
		<?php include $_SERVER['DOCUMENT_ROOT']."/izbooking/common/inc/header.php"; ?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/izbooking/common/inc/menu-mobile.php"; ?>

    <div class="product-detail product-detail-hotel">
      <section class="section-breadcrumb">
        <div class="wrap">
          <ul class="breadcrumb">
            <li>
              <a href="/">Home</a>
            </li>
            <li>
              <a href="/">Hanoi Hotels</a>
            </li>
            <li>
              <span>Hotel de l'Opera Hanoi MGallery by Sofitel</span>
            </li>
          </ul>
        </div>
      </section>

      <section class="product">
        <div class="wrap">
          <div class="product-entry-header">
            <h1 class="product-title">Hotel de l'Opera Hanoi MGallery by Sofitel</h1>
            <div class="product-entry-header-meta">
              <div class="deal-star">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
              <span class="point">9.6</span>
              <span class="review-text">123 Reviews - Excellent</span>
            </div>
            <p class="position"><i class="fa fa-map-marker"></i>29 Trang Tien Street, Hoan Kiem District- Hanoi, Vietnam </p>     
          </div>
          <div class="product-entry-photos">
            <a href="" class="btn-primary btn-more-photo"><i class="fa fa-camera"></i>More photos</a>
            <div class="list-photos" id="product-photos">
              <div class="photo"><a href="/common/images/product/detail/photo02.jpg"><img src="/common/images/product/detail/photo02.jpg" alt="" width="1215" height="500"></a></div>
              <div class="photo"><a href="/common/images/product/detail/photo02.jpg"><img src="/common/images/product/detail/photo02.jpg" alt="" width="1215" height="500"></a></div>
              <div class="photo"><a href="/common/images/product/detail/photo02.jpg"><img src="/common/images/product/detail/photo02.jpg" alt="" width="1215" height="500"></a></div>
              <div class="photo"><a href="/common/images/product/detail/photo02.jpg"><img src="/common/images/product/detail/photo02.jpg" alt="" width="1215" height="500"></a></div>
            </div>
          </div>
          <div class="content-inner">
            <div class="main-content">
              <div class="control-tab">
                <ul class="tab-panel">
                  <li><a href="#overview" class="anchor">Overview</a></li>
                  <li><a href="#availability" class="anchor">Check Availability</a></li>
                  <li><a href="#facilities" class="anchor">Facilities</a></li>
                  <li><a href="#qa" class="anchor">Q&amp;A (78)</a></li>
                  <li><a href="#reviews" class="anchor">Reviews</a></li>
                </ul>
                <div class="price-box">
                  <p>From US <b>$999</b> <span>$888</span> /pp</p>
                  <a class="anchorBookform btn-primary btn-green" href="#availability">Book Now</a>
                </div>
              </div>
              <div id="overview">
                <h3 class="inner-ttl">Overview</h3>
                <p class="inner-text"><span>A hotel with the décor of a theatre, in atmospheric Hanoï</span> Located just few steps away from Hanoi’s beautiful Opera House, Hotel de L’opera remains one of the best operatic highlights in ancient Hanoi. The hotel condenses the best of Hanoi – colonial architectural accents in combination with theatrical interior design of jewel tone and classic opera motifs juxtaposed with contemporary spaces for dining and entertaining. All the glamour and anticipation of a night at the opera are captured within every experience, from the decadence of the guestrooms to the opulence of Satine – the fine dining restaurant. During the day, Hotel de l’Opera Hanoi is the place to meet, with delicacies at Café Lautrec, indulgent treatments at the spa and a cool place to relax in the atrium.</p>
                <h3 class="inner-ttl">Most popular facilities</h3>
                <ul class="list-service">
                  <li><i class="fa fa-wifi"></i>Free wifi</li>
                  <li><i class="fa fa-wifi"></i>Free wifi</li>
                  <li><i class="fa fa-wifi"></i>Free wifi</li>
                  <li><i class="fa fa-wifi"></i>Free wifi</li>
                  <li><i class="fa fa-car"></i>Airport shuttle</li>
                  <li><i class="fa fa-car"></i>Airport shuttle</li>
                  <li><i class="fa fa-car"></i>Airport shuttle</li>
                  <li><i class="fa fa-car"></i>Airport shuttle</li>
                </ul>
              </div>
              <div id="availability">
                <div class="form-booking search-box">
                  <div class="form-booking-text01">Select date and participants:</div>
                  <form action="" method="" name="formBooking" class="form-box">
                    <div class="form-row">
                      <div class="form-group select-icon select-calendar w-01">
                        <input type="text" name="day_check_in" id="day_check_in" data-format="MM dd, yy" class="form-control datepicker" placeholder="Check in" data-picker-type="1">
                      </div>
                      <div class="form-group select-icon select-calendar w-01">
                        <input type="text" name="day_check_out" id="day_check_out" data-format="MM dd, yy" class="form-control datepicker" placeholder="Check out" data-picker-type="1">
                      </div>
                      <div class="form-group form-btn w-01">
                        <button type="button" name="booking_btn" id="booking_btn" class="form-control btn">Show avalability</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="option-booking">
                  <div id="loader"></div>
                  <div id="table-data-ajax">
                    <table class="st01">
                      <thead>
                        <tr>
                          <th class="col-01">OPTION TYPE</th>
                          <th class="col-02">MAX</th>
                          <th class="col-03">RATES</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="option-type">
                            <figure class="img">
                              <img src="/izbooking/common/images/product/detail/img01.jpg" width="249" height="139" alt="">
                            </figure>
                            <h4>Luxury Ocean Viewr</h4>
                            <p>
                              <span class="option-type-item">
                                <i class="fa fa-cube" aria-hidden="true"></i> Size : 36 sqm
                              </span>
                              <span class="option-type-item">
                                <i class="fa fa-user" aria-hidden="true">
                                </i> Max Adults: 2
                              </span>
                            </p>
                            <p>
                              <span class="option-type-item">
                                <i class="fa fa-bed" aria-hidden="true"></i> Bed options: Double Bed or 2 Beds <br>Extra beds available :<br>· Rollaway bed <br>· Crib
                              </span>
                            </p>
                            <a href="#1484" class="showDetailOption" data-id="1484"><i class="fa fa-info-circle" aria-hidden="true"></i> Show more</a>
                            <div id="1484" class="modal-box">
                              <p class="md-ttl">Deluxe cabin</p>
                              <div class="col-01 slide-show">
                                <div class="slide-show-large">
                                  <img src="/izbooking/common/images/product/detail/img01.jpg" width="249" height="139" alt="">
                                </div>
                                <ul class="list-slide-show">
                                  <li>
                                    <img src="/izbooking/common/images/top/img01.jpg" width="249" height="139" alt="">
                                  </li>
                                  <li>
                                    <img src="/izbooking/common/images/product/detail/img01.jpg" width="249" height="139" alt="">
                                  </li>
                                  <li>
                                    <img src="/izbooking/common/images/top/img01.jpg" width="249" height="139" alt="">
                                  </li>
                                </ul>
                              </div>
                              <div class="col-02">
                                <p class="md-ttl-02"><span>DESCRIPTION</span></p>
                                <div class="md-text">
                                  <p>Price for Superior package 3*</p>
                                  <p><b>Bed size:</b> Double/Twin</p>
                                  <p><b>Max People</b> 2</p>
                                </div>
                                <p class="md-ttl-02"><span>AMENITIES</span></p>
                                <div class="md-text">
                                  <ul class="md-list-01">
                                    <li>Life jacket</li>
                                    <li>Slippers</li>
                                    <li>Toiletries</li>
                                    <li>Bathroom</li>
                                    <li>Hair Dryer</li>
                                    <li>Complimentary Bottled Water</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td class="max">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            <i class="fa fa-user" aria-hidden="true"></i>
                          </td>
                          <td rowspan="3" class="rates">
                            <p><i class="fa fa-angle-double-up" aria-hidden="true"></i></p>
                            <a class="anchorBookform" href="#availability">Choose date to show price</a>
                          </td>
                        </tr>
                        <tr>
                          <td class="option-type">
                            <figure class="img">
                              <img src="/izbooking/common/images/product/detail/img01.jpg" width="249" height="139" alt="">
                            </figure>
                            <h4>Luxury Ocean Viewr</h4>
                            <p class="with"><span>Room with balcony</span></p>
                            <p>
                              <span class="option-type-item">
                                <i class="fa fa-cube" aria-hidden="true"></i> Size : 36 sqm
                              </span>
                              <span class="option-type-item">
                                <i class="fa fa-user" aria-hidden="true">
                                </i> Max Adults: 2
                              </span>
                            </p>
                            <p>
                              <span class="option-type-item">
                                <i class="fa fa-bed" aria-hidden="true"></i> Bed options: Double Bed or 2 Beds <br>Extra beds available :<br>· Rollaway bed <br>· Crib
                              </span>
                            </p>
                            <a href="#1500" class="showDetailOption" data-id="1500"><i class="fa fa-info-circle" aria-hidden="true"></i> Show more</a>
                            <div id="1500" class="modal-box">
                              <p class="md-ttl">Deluxe cabin</p>
                              <div class="col-01 slide-show">
                                <div class="slide-show-large">
                                  <img src="/izbooking/common/images/product/detail/img01.jpg" width="249" height="139" alt="">
                                </div>
                                <ul class="list-slide-show">
                                  <li>
                                    <img src="/izbooking/common/images/product/detail/img01.jpg" width="249" height="139" alt="">
                                  </li>
                                  <li>
                                    <img src="/izbooking/common/images/product/detail/img01.jpg" width="249" height="139" alt="">
                                  </li>
                                  <li>
                                    <img src="/izbooking/common/images/product/detail/img01.jpg" width="249" height="139" alt="">
                                  </li>
                                </ul>
                              </div>
                              <div class="col-02">
                                <p class="md-ttl-02"><span>DESCRIPTION</span></p>
                                <div class="md-text">
                                  <p>Price for Superior package 3*</p>
                                  <p><b>Bed size:</b> Double/Twin</p>
                                  <p><b>Max People</b> 2</p>
                                </div>
                                <p class="md-ttl-02"><span>AMENITIES</span></p>
                                <div class="md-text">
                                  <ul class="md-list-01">
                                    <li>Life jacket</li>
                                    <li>Slippers</li>
                                    <li>Toiletries</li>
                                    <li>Bathroom</li>
                                    <li>Hair Dryer</li>
                                    <li>Complimentary Bottled Water</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td class="max">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            <i class="fa fa-user" aria-hidden="true"></i>
                          </td>
                        </tr>
                        <tr>
                          <td class="option-type">
                            <figure class="img">
                              <img src="/izbooking/common/images/product/detail/img01.jpg" width="249" height="139" alt="">
                            </figure>
                            <h4>Luxury Ocean Viewr</h4>
                            <p>
                              <span class="option-type-item">
                                <i class="fa fa-cube" aria-hidden="true"></i> Size : 36 sqm
                              </span>
                              <span class="option-type-item">
                                <i class="fa fa-user" aria-hidden="true">
                                </i> Max Adults: 2
                              </span>
                            </p>
                            <p>
                              <span class="option-type-item">
                                <i class="fa fa-bed" aria-hidden="true"></i> Bed options: Double Bed or 2 Beds <br>Extra beds available :<br>· Rollaway bed <br>· Crib
                              </span>
                            </p>
                            <a href="#1550" class="showDetailOption" data-id="1550"><i class="fa fa-info-circle" aria-hidden="true"></i> Show more</a>
                            <div id="1550" class="modal-box">
                              <p class="md-ttl">Deluxe cabin</p>
                              <div class="col-01 slide-show">
                                <div class="slide-show-large">
                                  <img src="/izbooking/common/images/product/detail/img01.jpg" width="249" height="139" alt="">
                                </div>
                                <ul class="list-slide-show">
                                  <li>
                                    <img src="/izbooking/common/images/product/detail/img01.jpg" width="249" height="139" alt="">
                                  </li>
                                  <li>
                                    <img src="/izbooking/common/images/product/detail/img01.jpg" width="249" height="139" alt="">
                                  </li>
                                  <li>
                                    <img src="/izbooking/common/images/product/detail/img01.jpg" width="249" height="139" alt="">
                                  </li>
                                </ul>
                              </div>
                              <div class="col-02">
                                <p class="md-ttl-02"><span>DESCRIPTION</span></p>
                                <div class="md-text">
                                  <p>Price for Superior package 3*</p>
                                  <p><b>Bed size:</b> Double/Twin</p>
                                  <p><b>Max People</b> 2</p>
                                </div>
                                <p class="md-ttl-02"><span>AMENITIES</span></p>
                                <div class="md-text">
                                  <ul class="md-list-01">
                                    <li>Life jacket</li>
                                    <li>Slippers</li>
                                    <li>Toiletries</li>
                                    <li>Bathroom</li>
                                    <li>Hair Dryer</li>
                                    <li>Complimentary Bottled Water</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td class="max">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            <i class="fa fa-user" aria-hidden="true"></i>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="fac-info" id="facilities">
                  <h3 class="inner-ttl">Facilities</h3>
                  <h4 class="inner-ttl02">General</h4>
                  <ul class="list-general">
                    <li>24-Hour Front Desk</li>
                    <li>Air Conditioning</li>
                    <li>Baggage Storage</li>
                    <li>Bar</li>
                    <li>Buffet-Style Restaurant</li>
                    <li>Designated Smoking Area</li>
                    <li>Express Check-In/Check-Out</li>
                    <li>Grounds</li>
                    <li>Heating</li>
                    <li>Restaurant</li>
                    <li>Non-Smoking Rooms</li>
                    <li>Restaurant</li>
                    <li>Snack Bar</li>
                    <li>Safe</li>
                    <li>Snack Bar</li>
                    <li>Terrace</li>
                    <li>Stores in Hotel</li>
                    <li>Terrace</li>
                  </ul>
                  <h4 class="inner-ttl02">Services</h4>
                  <ul class="list-general">
                    <li>Airport Shuttle</li>
                    <li>ATM on site</li>
                    <li>Babysitting/Child Services</li>
                    <li>Bicycle Rental</li>
                    <li>Breakfast in the Room</li>
                    <li>Business Center</li>
                    <li>Car Rental</li>
                    <li>Concierge Service</li>
                    <li>Currency Exchange</li>
                    <li>Dry Cleaning</li>
                    <li>Fax/Photocopying</li>
                    <li>Hair/Beauty Salon</li>
                    <li>Internet Access</li>
                    <li>Internet Access (wireless)</li>
                    <li>Ironing Service</li>
                    <li>Laundry</li>
                    <li>Meeting/Banquet Facilities</li>
                    <li>Packed Lunches</li>
                    <li>Room Services</li>
                    <li>Shoe Shine</li>
                    <li>Souvenirs/Gift Shop</li>
                    <li>Special Diet Meals (upon request)</li>
                    <li>Ticket Service</li>
                    <li>Tour Desk</li>
                    <li>VIP Room Facilities</li>
                  </ul>
                  <h4 class="inner-ttl02">Activities</h4>
                  <ul class="list-general">
                    <li>Fitness Center</li>
                    <li>Massage</li>
                    <li>Sauna</li>
                    <li>Spa & Health Club</li>
                  </ul>
                  <h4 class="inner-ttl02">House rules</h4>
                  <div class="rules">
                    <div class="box-check">
                      <i class="fa fa-calendar"></i>
                      <p>Check-in: </p>
                      <p>14:30</p>
                    </div>
                    <div class="box-check">
                      <i class="fa fa-calendar"></i>
                      <p>Check-out: </p>
                      <p>12:00</p>
                    </div>
                  </div>
                  <div class="cancel">
                    <h4 class="inner-ttl02">Cancellation by Customer</h4>
                    <ul class="list-dot">
                      <li>More than 15 days prior to check-in: FREE of charge</li>
                      <li>From 15 to 10 days prior to check-in: 50% of total rates</li>
                      <li>From 9 to 3 days prior to check-in: 75% of total rates</li>
                      <li>Less than 72 hours prior to check-in: 100% of total rates</li>
                      <li>No-Show: 100% of total rates</li>
                    </ul>
                  </div>
                  <div class="cancel">
                      <h4 class="inner-ttl02">Children Policy</h4>
                      <ul class="list-dot">
                        <li>More than 15 days prior to check-in: FREE of charge</li>
                        <li>From 15 to 10 days prior to check-in: 50% of total rates</li>
                        <li>From 9 to 3 days prior to check-in: 75% of total rates</li>
                        <li>Less than 72 hours prior to check-in: 100% of total rates</li>
                        <li>No-Show: 100% of total rates</li>
                      </ul>
                    </div>
                </div>
              </div>
              <div id="itinerary">
                <h3 class="inner-ttl">Important Notes</h3>
                <ul class="list-check">
                  <li>More than 15 days prior to check-in: FREE of charge</li>
                  <li>From 15 to 10 days prior to check-in: 50% of total rates</li>
                  <li>From 9 to 3 days prior to check-in: 75% of total rates</li>
                  <li>Less than 72 hours prior to check-in: 100% of total rates</li>
                  <li>No-Show: 100% of total rates</li>
                </ul>
              </div>
              <div id="qa">
                <h3 class="inner-ttl">Questions &amp; Answers</h3>
                <div class="comment-form">
                  <form action="" method="" class="form-box" name="formComment">
                    <div class="form-row">
                      <textarea name="comment_text" id="comment_text" cols="30" rows="6" class="form-control">No more than 2000 character, please</textarea>
                    </div>
                    <div class="form-row">
                      <div class="form-group">
                        <label for="fullname">Full name:</label>
                        <input type="text" name="fullname" id="fullname" class="form-control">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group">
                        <label for="your_email">Your Email:</label>
                        <input type="text" name="your_email" id="your_email" class="form-control">
                      </div>
                      <div class="form-group form-btn">
                        <button type="button" id="submit_comment" class="btn-primary btn-green">Submit your question</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="comment-list">
                  <ul class="comment-list-ul">
                    <li>
                      <div class="ques">
                        <p class="ques-time"><i class="fa fa-question-circle"></i>Asked by Billy Cook | Aug. 12, 2018 12:46</p>
                        <p class="ques-text">Hello, On 19th to 20th November 2018, are there available cabins for 4 people? Does the price include transportation from Hanoi and back? Any special rate for 4 people?</p>
                        <div class="ans">
                          <p class="ans-time"><i class="fa fa-mail-reply"></i>Aswered by Son Dang | Aug. 13, 2018 12:46</p>
                          <p class="ans-text">Dear Mr. Billy Cook, Thank you for contacting us with your questions. I would like to confirm that we still have available cabins on 19th November (2 rooms for 4 persons) for your group. The cruise cabin price does not yet include transfer round trip by shuttle bus ($40/person/round trip). At the moment we have early bird rate for booking 2 months in advance of trip date. If you have any other questions please let us know! Lisa (Ms.)</p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="ques">
                        <p class="ques-time"><i class="fa fa-question-circle"></i>Asked by Billy Cook | Aug. 12, 2018 12:46</p>
                        <p class="ques-text">Hello, On 19th to 20th November 2018, are there available cabins for 4 people? Does the price include transportation from Hanoi and back? Any special rate for 4 people?</p>
                        <div class="ans">
                          <p class="ans-time"><i class="fa fa-mail-reply"></i>Aswered by Son Dang | Aug. 13, 2018 12:46</p>
                          <p class="ans-text">Dear Mr. Billy Cook, Thank you for contacting us with your questions. I would like to confirm that we still have available cabins on 19th November (2 rooms for 4 persons) for your group. The cruise cabin price does not yet include transfer round trip by shuttle bus ($40/person/round trip). At the moment we have early bird rate for booking 2 months in advance of trip date. If you have any other questions please let us know! Lisa (Ms.)</p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="ques">
                        <p class="ques-time"><i class="fa fa-question-circle"></i>Asked by Billy Cook | Aug. 12, 2018 12:46</p>
                        <p class="ques-text">Hello, On 19th to 20th November 2018, are there available cabins for 4 people? Does the price include transportation from Hanoi and back? Any special rate for 4 people?</p>
                        <div class="ans">
                          <p class="ans-time"><i class="fa fa-mail-reply"></i>Aswered by Son Dang | Aug. 13, 2018 12:46</p>
                          <p class="ans-text">Dear Mr. Billy Cook, Thank you for contacting us with your questions. I would like to confirm that we still have available cabins on 19th November (2 rooms for 4 persons) for your group. The cruise cabin price does not yet include transfer round trip by shuttle bus ($40/person/round trip). At the moment we have early bird rate for booking 2 months in advance of trip date. If you have any other questions please let us know! Lisa (Ms.)</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <ul class="list-page">
                    <li><span class="active">1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">Next</a></li>
                    <li><a href="#">Last</a></li>
                  </ul>
                </div>
              </div>
              <div id="reviews">
                <h3 class="inner-ttl">Customer Reviews</h3>
                <div class="bigbox">
                  <div class="reviewbox">
                    <b>Excellent</b>
                    <p class="num">9.6</p>
                    <span>Based on 999 reviews</span>
                  </div>
                  <div class="rvsumm">
                    <p class="rvsumm-txt">ReView summary</p>
                    <ul class="list-rvsumm" id="ratePercent">
                      <li>
                        <div class="name">Service</div>
                        <div class="skills services">
                          <span></span>
                        </div>
                        <span class="num-rate" data-rate="9.8">9.8</span>
                      </li>
                      <li>
                        <div class="name">Organization</div>
                        <div class="skills organization">
                          <span></span>
                        </div>
                        <span class="num-rate" data-rate="9.6">9.6</span>
                      </li>
                      <li>
                        <div class="name">Value for money</div>
                        <div class="skills value">
                          <span></span>
                        </div>
                        <span class="num-rate" data-rate="9.6">9.6</span>
                      </li>
                      <li>
                        <div class="name">Safety</div>
                        <div class="skills safety">
                          <span></span>
                        </div>
                        <span class="num-rate" data-rate="9.4">9.4</span>
                      </li>
                    </ul>
                    <p class="btn-box">
                      <a href="" class="btn-primary btn-green">Send us your review</a>
                    </p>
                  </div>
                </div>
                <div class="rvclient-list" id="rvclient-list">
                  <div class="rvclient">
                    <div class="rate-score-left">
                      <div class="rateboxscore">
                        <span>9.6</span>
                      </div>
                      <p>Ms.Aleksandra Ostojic</p>
                      <div class="addandtime">
                        <span>Ottawa, Canada</span><br>
                        <span>3 May, 2017</span>
                      </div>
                    </div>
                    <div class="ratecomment">
                      <span class="titcomment">"Enjoyable holiday "</span>
                      <p>Amazingly well organized, good value, pleasure to deal with everyone we met, great itinerary. Your services were 10/10 and were perfect. All we could ask from a tour company. Everything was super well organized and everyone was great. The itinerary was fantastic, and we would not change anything! </p>
                    </div>
                  </div>
                  <div class="rvclient">
                    <div class="rate-score-left">
                      <div class="rateboxscore">
                        <span>9.6</span>
                      </div>
                      <p>Ms.Aleksandra Ostojic</p>
                      <div class="addandtime">
                        <span>Ottawa, Canada</span><br>
                        <span>3 May, 2017</span>
                      </div>
                    </div>
                    <div class="ratecomment">
                      <span class="titcomment">"Enjoyable holiday "</span>
                      <p>Amazingly well organized, good value, pleasure to deal with everyone we met, great itinerary. Your services were 10/10 and were perfect. All we could ask from a tour company. Everything was super well organized and everyone was great. The itinerary was fantastic, and we would not change anything! </p>
                    </div>
                  </div>
                  <div class="rvclient">
                    <div class="rate-score-left">
                      <div class="rateboxscore">
                        <span>9.6</span>
                      </div>
                      <p>Ms.Aleksandra Ostojic</p>
                      <div class="addandtime">
                        <span>Ottawa, Canada</span><br>
                        <span>3 May, 2017</span>
                      </div>
                    </div>
                    <div class="ratecomment">
                      <span class="titcomment">"Enjoyable holiday "</span>
                      <p>Amazingly well organized, good value, pleasure to deal with everyone we met, great itinerary. Your services were 10/10 and were perfect. All we could ask from a tour company. Everything was super well organized and everyone was great. The itinerary was fantastic, and we would not change anything! </p>
                    </div>
                  </div>
                </div>
                <div class="btn-box showmore">
                  <a href="" class="btn-primary btn-green" id="show_more_reviews">Show more reviews <i class="fa fa-angle-down"></i></a>
                </div>
              </div>
            </div>
            <!-- .main-content -->
            <div class="sidebar">
              <div class="widget widget-detail">
                <div class="pricedetail text-center">
                  <p>From US <b>$999</b> <span>$888</span> /pp</p>
                  <div class="btn-box">
                    <a class="anchorBookform btn-primary btn-green" href="#availability">Book Now</a>
                  </div>
                </div>
                <ul class="list-05">
                  <li><i class="fa fa-mobile" aria-hidden="true"></i>Printed or mobile voucher accepted</li>
                  <li><i class="fa fa-credit-card" aria-hidden="true"></i>Easy cancellation</li>
                  <li><i class="fa fa-bolt" aria-hidden="true"></i>Instant confirmation</li>
                </ul>
              </div>
              <div class="widget widget-hot-deals">
                <h3 class="widget-hot-deals-ttl">Recent Viewed</h3>
                <div class="widget-content">
                  <ul class="widget-hot-deals-list">
                    <li>
                      <figure class="thumb">
                        <img src="/izbooking/common/images/blog/detail/img_hot01.jpg" alt="" width="121" height="88">
                      </figure>
                      <div class="meta">
                        <div class="meta-top">
                          <h4 class="meta-ttl"><a href="">Paloma Cruise 3 days/2 nights</a></h4>
                          <p class="meta-duration"><i class="fa fa-clock-o"></i>Duration: 3 days</p>
                        </div>
                        <div class="meta-bottom">
                          <div class="meta-bottom-col">
                            <div class="deal-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-half-o"></i>
                            </div>
                          </div>
                          <div class="meta-bottom-col">
                            <p class="deal-price">
                              <span class="from">From <b>$989</b></span>
                              <span class="us">US <b>$969</b></span>
                            </p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <figure class="thumb">
                        <img src="/izbooking/common/images/blog/detail/img_hot02.jpg" alt="" width="121" height="88">
                      </figure>
                      <div class="meta">
                        <div class="meta-top">
                          <h4 class="meta-ttl"><a href="">Vietnam Tours 15 days</a></h4>
                          <p class="meta-duration"><i class="fa fa-clock-o"></i>Duration: 3 days</p>
                        </div>
                        <div class="meta-bottom">
                          <div class="meta-bottom-col">
                            <div class="deal-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-half-o"></i>
                            </div>
                          </div>
                          <div class="meta-bottom-col">
                            <p class="deal-price">
                              <span class="from">From <b>$989</b></span>
                              <span class="us">US <b>$969</b></span>
                            </p>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <div class="widget-hot-deals-viewmore">
                    <a href="" class="btn-primary btn-green">View More <i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="widget widget-faq">
                <h3 class="widget-faq-ttl">Why book with us ?</h3>
                <div class="widget-faq-desc">
                  <p>There are at least 6 reasons why you should book Halong Bay cruise and tour on our website.</p>
                </div>
                <ul class="list-check">
                  <li>Item One</li>
                  <li>Item Two</li>
                  <li>Item Three</li>
                  <li>Item Four</li>
                </ul>
                <div class="text-right viewmore">
                  <a href="">View more</a>
                </div>
              </div>
              <div class="widget widget-hot-deals">
                <h3 class="widget-hot-deals-ttl">Popular Tours</h3>
                <div class="widget-content">
                  <ul class="widget-hot-deals-list">
                    <li>
                      <figure class="thumb">
                        <img src="/izbooking/common/images/blog/detail/img_hot01.jpg" alt="" width="121" height="88">
                      </figure>
                      <div class="meta">
                        <div class="meta-top">
                          <h4 class="meta-ttl"><a href="">Paloma Cruise 3 days/2 nights</a></h4>
                          <p class="meta-duration"><i class="fa fa-clock-o"></i>Duration: 3 days</p>
                        </div>
                        <div class="meta-bottom">
                          <div class="meta-bottom-col">
                            <div class="deal-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-half-o"></i>
                            </div>
                          </div>
                          <div class="meta-bottom-col">
                            <p class="deal-price">
                              <span class="from">From <b>$989</b></span>
                              <span class="us">US <b>$969</b></span>
                            </p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <figure class="thumb">
                        <img src="/izbooking/common/images/blog/detail/img_hot02.jpg" alt="" width="121" height="88">
                      </figure>
                      <div class="meta">
                        <div class="meta-top">
                          <h4 class="meta-ttl"><a href="">Vietnam Tours 15 days</a></h4>
                          <p class="meta-duration"><i class="fa fa-clock-o"></i>Duration: 3 days</p>
                        </div>
                        <div class="meta-bottom">
                          <div class="meta-bottom-col">
                            <div class="deal-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-half-o"></i>
                            </div>
                          </div>
                          <div class="meta-bottom-col">
                            <p class="deal-price">
                              <span class="from">From <b>$989</b></span>
                              <span class="us">US <b>$969</b></span>
                            </p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <figure class="thumb">
                        <img src="/izbooking/common/images/blog/detail/img_hot03.jpg" alt="" width="121" height="88">
                      </figure>
                      <div class="meta">
                        <div class="meta-top">
                          <h4 class="meta-ttl"><a href="">Sapa - Mai Chau Trekking Tour</a></h4>
                          <p class="meta-duration"><i class="fa fa-clock-o"></i>Duration: 3 days</p>
                        </div>
                        <div class="meta-bottom">
                          <div class="meta-bottom-col">
                            <div class="deal-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-half-o"></i>
                            </div>
                          </div>
                          <div class="meta-bottom-col">
                            <p class="deal-price">
                              <span class="from">From <b>$989</b></span>
                              <span class="us">US <b>$969</b></span>
                            </p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <figure class="thumb">
                        <img src="/izbooking/common/images/blog/detail/img_hot04.jpg" alt="" width="121" height="88">
                      </figure>
                      <div class="meta">
                        <div class="meta-top">
                          <h4 class="meta-ttl"><a href="">Mekong Eyes Cruise 2 days</a></h4>
                          <p class="meta-duration"><i class="fa fa-clock-o"></i>Duration: 3 days</p>
                        </div>
                        <div class="meta-bottom">
                          <div class="meta-bottom-col">
                            <div class="deal-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-half-o"></i>
                            </div>
                          </div>
                          <div class="meta-bottom-col">
                            <p class="deal-price">
                              <span class="from">From <b>$989</b></span>
                              <span class="us">US <b>$969</b></span>
                            </p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <figure class="thumb">
                        <img src="/izbooking/common/images/blog/detail/img_hot05.jpg" alt="" width="121" height="88">
                      </figure>
                      <div class="meta">
                        <div class="meta-top">
                          <h4 class="meta-ttl"><a href="">Cai Be Floating Market</a></h4>
                          <p class="meta-duration"><i class="fa fa-clock-o"></i>Duration: 3 days</p>
                        </div>
                        <div class="meta-bottom">
                          <div class="meta-bottom-col">
                            <div class="deal-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-half-o"></i>
                            </div>
                          </div>
                          <div class="meta-bottom-col">
                            <p class="deal-price">
                              <span class="from">From <b>$989</b></span>
                              <span class="us">US <b>$969</b></span>
                            </p>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <div class="widget-hot-deals-viewmore">
                    <a href="" class="btn-primary btn-green">View More <i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="widget widget-faq">
                <h3 class="widget-faq-ttl"><i class="fa fa-question-circle"></i>FAQs</h3>
                <div class="widget-faq-desc">
                  <p>There are at least 6 reasons why you should book Halong Bay cruise and tour on our website.</p>
                </div>
                <ul class="list-check">
                  <li>Item One</li>
                  <li>Item Two</li>
                  <li>Item Three</li>
                  <li>Item Four</li>
                </ul>
                <div class="text-right viewmore">
                  <a href="">View more</a>
                </div>
              </div>
            </div>
            <!-- .sidebar -->
          </div>

          <div class="might-like-box">
            <div class="might-like-box-head">
              <h3 class="ttl-h3">You might also like</h3>
              <a href="" class="find-more">Find more things to do <i class="fa fa-angle-double-right"></i></a>
            </div>
            <ul class="list-top-deals">
              <li class="item">
                <figure class="item-thumb">
                  <a href="">
                    <img src="/izbooking/common/images/top/img01.jpg" alt="" width="386" height="240">
                    <div class="item-thumb-meta">
                      <ul class="item-thumb-meta-ul">
                        <li class="bathrooms"> 2 Bathrooms</li>
                        <li class="shuttlebus"> Free Shuttle Bus</li>
                        <li class="bedrooms"> 2 Bedrooms</li>
                      </ul>
                      <p class="item-thumb-address"><i class="fa fa-map-marker"></i> Lan Ha Bay</p>
                    </div>
                  </a>
                  <p class="btn-favorite"><i class="fa fa-heart-o"></i></p>
                </figure>
                <div class="item-entry">
                  <div class="item-entry-top">
                    <h3 class="item-title"><a href="">Vietnam Essential 10 days</a></h3>
                    <p class="item-meta"><i class="fa fa-clock-o"></i> Duration: 3 days</p>
                    <p class="item-meta"><i class="fa fa-map-marker"></i> Ho chi minh City - Mekong Delta - Cu chi</p>
                  </div>
                  <div class="item-entry-bottom">
                    <div class="item-entry-col">
                      <span class="deal-seller"><i class="fa fa-rocket"></i> Best seller</span>
                      <div class="deal-star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                      </div>
                      <p class="deal-reviews">281 Reviews</p>
                    </div>
                    <div class="item-entry-col">
                      <p class="deal-price">From<span>$200</span></p>
                    </div>
                  </div>
                </div>
              </li>
              <li class="item">
                <figure class="item-thumb">
                  <a href="">
                    <img src="/izbooking/common/images/top/img02.jpg" alt="" width="386" height="240">
                    <div class="item-thumb-meta">
                      <ul class="item-thumb-meta-ul">
                        <li class="bathrooms"> 2 Bathrooms</li>
                        <li class="shuttlebus"> Free Shuttle Bus</li>
                        <li class="bedrooms"> 2 Bedrooms</li>
                      </ul>
                      <p class="item-thumb-address"><i class="fa fa-map-marker"></i> Lan Ha Bay</p>
                    </div>
                  </a>
                  <p class="btn-favorite"><i class="fa fa-heart-o"></i></p>
                </figure>
                <div class="item-entry">
                  <div class="item-entry-top">
                    <h3 class="item-title"><a href="">Era Cruise 3 days/ 2 nights</a></h3>
                    <p class="item-meta"><i class="fa fa-clock-o"></i> Duration: 3 days</p>
                    <p class="item-meta"><i class="fa fa-map-marker"></i> Hanoi - Hai Phong - Lan Ha Bay</p>
                  </div>
                  <div class="item-entry-bottom">
                    <div class="item-entry-col">
                      <span class="deal-seller"><i class="fa fa-rocket"></i> Best seller</span>
                      <div class="deal-star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                      </div>
                      <p class="deal-reviews">281 Reviews</p>
                    </div>
                    <div class="item-entry-col">
                      <p class="deal-price">From<span>$284</span></p>
                    </div>
                  </div>
                </div>
              </li>
              <li class="item">
                <figure class="item-thumb">
                  <a href="">
                    <img src="/izbooking/common/images/top/img03.jpg" alt="" width="386" height="240">
                    <div class="item-thumb-meta">
                      <ul class="item-thumb-meta-ul">
                        <li class="bathrooms"> 2 Bathrooms</li>
                        <li class="shuttlebus"> Free Shuttle Bus</li>
                        <li class="bedrooms"> 2 Bedrooms</li>
                      </ul>
                      <p class="item-thumb-address"><i class="fa fa-map-marker"></i> Lan Ha Bay</p>
                    </div>
                  </a>
                  <p class="btn-favorite"><i class="fa fa-heart-o"></i></p>
                </figure>
                <div class="item-entry">
                  <div class="item-entry-top">
                    <h3 class="item-title"><a href="">Mai Chau Explorer 2 days (private)</a></h3>
                    <p class="item-meta"><i class="fa fa-clock-o"></i> Duration: 3 days</p>
                    <p class="item-meta"><i class="fa fa-map-marker"></i> Mai Chau, Hoa Binh</p>
                  </div>
                  <div class="item-entry-bottom">
                    <div class="item-entry-col">
                      <span class="deal-seller"><i class="fa fa-rocket"></i> Best seller</span>
                      <div class="deal-star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                      </div>
                      <p class="deal-reviews">281 Reviews</p>
                    </div>
                    <div class="item-entry-col">
                      <p class="deal-price">From<span>$173</span></p>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section>

    </div>

		<?php include $_SERVER['DOCUMENT_ROOT']."/izbooking/common/inc/footer.php"; ?>
  </div>
  <?php include $_SERVER['DOCUMENT_ROOT']."/izbooking/common/inc/common-js.php"; ?>
  <script src="/izbooking/common/js/vendor/jquery.magnific-popup.min.js"></script>
  <script src="/izbooking/common/js/vendor/slick.min.js"></script>
  <script src="/izbooking/common/js/product/detail-hotel.js"></script>
</body>
</html>